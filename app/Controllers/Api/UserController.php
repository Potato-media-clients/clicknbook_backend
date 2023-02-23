<?php



namespace App\Controllers\Api;



use App\Http\Controllers\Controller;

use App\Models\Post;

use App\Models\TermRelation;

use App\Models\User;

use App\Models\Media;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Storage;

use Sentinel;


use Illuminate\Support\Facades\DB;

use App\Exception;



class UserController extends Controller

{

    protected $model;



    public function __construct()

    {

        parent::__construct();

        $this->model = new User();

    }
    
    
    public function deleteusermedia ($userid)
    {
        
        $isuser=  User::find($userid)->first();
        if($isuser || null)
        {
            $allMedia  =  Media::where(['author'=>$userid])->get();
    
            foreach($allMedia as $Media)
            {
               
             Storage::disk('custom_folder_1')->delete($Media->media_url);
             $Media->delete();
            }
            
            User::find($userid)->delete();
            
            
              return $this->sendJson([

                    'status' => 1,

                    'message' => __('Deleted successfully'),

                ]);
        }

        
    }


    public function updateProfile(Request $request){
        
        $token = $request->bearerToken();

        $user_id = $this->model->getUserIDByToken($token);
         $user = get_user_by_id($user_id);
         
         $email=$request->post('email')==""?$user->email:$request->post('email');
         $first_name=$request->post('first_name')==""?$user->first_name:$request->post('first_name');
         $last_name=$request->post('last_name')==""?$user->last_name:$request->post('last_name');
         $mobile=$request->post('mobile')==""?$user->mobile:$request->post('mobile');
         $location=$request->post('location')==""?$user->location:$request->post('location');
         $address=$request->post('address')==""?$user->address:$request->post('address');
         $country=$request->post('country')==""?$user->country:$request->post('country');
         $city=$request->post('city')==""?$user->city:$request->post('city');
         $district=$request->post('district')==""?$user->district:$request->post('district');
         $street=$request->post('street')==""?$user->street:$request->post('street');
         $gender=$request->post('gender')==""?$user->gender:$request->post('gender');


        if($user_id){

            $args = [

		    'email' => $email,

		    'first_name' => $first_name,

		    'last_name' => $last_name,

		    'mobile' => $mobile,

		    'location' => $location,

		    'address' => $address,

		    'country' => $country,

		    'city' => $city,

		    'district' => $district,

		    'street' => $street,

		    'gender' => $gender

            ];

            $user_model = new User();

            $updated = $user_model->updateUser($user_id, $args);

            

            $file=$request->avatar;

            if(!empty($file) && $file!=null && $file!=""){

            $name = time().time().'.'.$file->getClientOriginalExtension();

            $target_path="/public/storage/users_avatar/u-".$user_id."/".date('Y')."/".date('m')."/".date('d')."/";

            $real_path="public/storage/storage/users_avatar/u-".$user_id."/".date('Y')."/".date('m')."/".date('d')."/";

            $file->storePubliclyAs($target_path,$name);

          $query=DB::table('media')->insertGetId(

          [

         'media_url' =>$real_path.$name,

         'media_path' =>$real_path.$name,

         'media_type'=>$file->getClientOriginalExtension(),

          'author' => $user_id,

          ]);

            $updated = $user_model->updateUser($user_id, ['avatar' => $query]);

            $avatar="https://clicknbook.co/".$real_path.$name;

                

            }else{
              $query=DB::table('media')->where('media_id',$user->avatar)->first();

                $avatar="https://clicknbook.co/".$query->media_url;
                
            }

            

 $user->avatar=$avatar;           

            if (!is_null($updated)) {

                return $this->sendJson([

                    'status' => 1,

                    'message' => __('Updated successfully'),

                    'user'=>$user

                ]);

            } else {

                return $this->sendJson([

                    'status' => 0,

                    'message' => __('Can not update this user. Try again!')

                ]);

            }

        }

        return $this->sendJson([

            'status' => 0,

            'message' => __('This user is invalid')

        ]);

    }



    public function getCurrentUser(Request $request){

        $token = $request->bearerToken();

        $user_id = $this->model->getUserIDByToken($token);

        if($user_id){

            $user = get_user_by_id($user_id)->toArray();

	        $user['meta'] = $this->model->getUserAllMeta($user_id)->toArray();

            return $this->sendJson([

                'status' => 1,

                'message' => __('Success'),

                'data' => $user

            ]);

        }

        return $this->sendJson([

            'status' => 0,

            'message' => __('Data is invalid')

        ]);

    }



    public function changePassword(Request $request){

        $token = $request->bearerToken();

        $user_id = $this->model->getUserIDByToken($token);
            $user = get_user_by_id($user_id);



        if($user_id) {

            $user = get_user_by_id($user_id);

            if (!$user) {

                return $this->sendJson([

                    'status' => 0,

                    'message' => __('This user does not exist')

                ]);

            }



            $validator = Validator::make($request->all(), [

                'password' => ['required', 'string', 'min:6', 'confirmed'],

            ]);



            if ($validator->fails()) {

                return $this->sendJson([

                    'status' => 0,

                    'message' => $validator->errors()

                ]);

            } else {

                $password = trim($request->post('password'));

                $credentials = [

                    'password' => $password,

                ];

                Sentinel::update($user, $credentials);

                return $this->sendJson([

                    'status' => 1,

                    'message' => __('Updated password successfully')

                ]);

            }

        }

        return $this->sendJson([

            'status' => 0,

            'message' => __('Data is invalid')

        ]);

    }



    public function resetPassword(Request $request){

        $validator = Validator::make($request->all(),

            [

                'email' => 'required|exists:users,email',

            ],

            [

                'email.required' => __('The email is required'),

                'email.exists' => __('The email does not exist'),

            ]

        );



        if ($validator->fails()) {

            return $this->sendJson([

                'status' => 0,

                'message' => $validator->errors()

            ]);

        }



        $credentials = [

            'login' => request()->get('email'),

        ];



        $user = Sentinel::findByCredentials($credentials);



        if (is_null($user)) {

            return $this->sendJson([

                'status' => 0,

                'message' => __('The email does not exist')

            ]);

        } else {

            $password = createPassword(32);

            $credentials = [

                'password' => $password,

            ];



            $user = Sentinel::update($user, $credentials);



            if (!$user) {

                return $this->sendJson([

                    'status' => 0,

                    'message' => __('Can not reset password for this account. Try again!')

                ]);

            } else {

                $subject = sprintf(__('[%s] You have changed the password'), get_option('site_name'));

                $content = view('frontend.email.reset-password', ['user' => $user, 'password' => $password])->render();

                $sent = send_mail('', '', $user->email, $subject, $content);

                if (!$sent) {

                    return $this->sendJson([

                        'status' => 0,

                        'message' => __('Can not send email.')

                    ]);

                }

                return $this->sendJson([

                    'status' => 1,

                    'message' => __('Success! Please check your email for a new password.')

                ]);

            }

        }

    }



    public function logout(Request $request){

		$token = $request->bearerToken();

        $this->model->deleteUserMetaByWhere([

            'meta_key' => 'access_token',

            'meta_value' => $token

        ]);

        return $this->sendJson([

            'status' => 1,

            'message' => __('Successfully logged out')

        ]);

    }



           public function register(Request $request){

        

        $rules = [

            'first_name' => '',

            'last_name' => '',

            'email' => 'required|email',

            'avatar' => '',

            'password' => '',

            'mobile' => '',

            'location' => '',

            'address' => '',

            'country' => '',

            'city' => '',

            'district' => '',

            'street' => '',

            'gender' => '',
            
            'token_apple' => '',

        ];



        $validator = Validator::make($request->all(), $rules);



        if ($validator->fails()) {

            return $this->sendJson([

                'status' => 0,

                'message' => $validator->errors()

            ]);

        }

if(!empty($request->post('password'))){
   $password=$request->post('password');
}else{
   $password="";
}

	    $reg_credentials = [

	        

		    'email' => $request->post('email'),

		    'first_name' => $request->post('first_name'),

		    'last_name' => $request->post('last_name'),
		    
		    'password'=>$password,
		    
		    'avatar' => $request->post('avatar'),

		    'mobile' => $request->post('mobile'),

		    'location' => $request->post('location'),

		    'address' => $request->post('address'),

		    'country' => $request->post('country'),
 
		    'city' => $request->post('city'),

		    'district' => $request->post('district'),

		    'street' => $request->post('street'),

		    'gender' => $request->post('gender'),
		    

	    ];



	    $new_user = create_new_user($reg_credentials);

        $id=DB::table('users')->where('email',$reg_credentials['email'])->first();
        DB::table('users')->where('email',$reg_credentials['email'])->update(['token_apple'=>$request->token_apple]);
        
        
        $query=DB::table('role_users')->where('user_id',$id->id)->first();
        if($query){

        }else{
            $query=DB::table('role_users')->insert(

                [
      
               'user_id' =>$id->id,
      
               'role_id' =>2,
      
                ]);
    
        }
       
	    if(!$new_user['status']){

		    return $this->sendJson([

			    'status' => 0,

			    'message' => __('Can not create new User | Email Exist')

		    ]);

	    }else{

	        

        $credentials = [

            'login' => request()->post('email'),

        ];

	        

	           $user = Sentinel::findByCredentials($credentials);

	           $token = create_api_token($user->getUserId());

               update_user_meta($user->getUserId(), 'access_token', $token);



              $user = Sentinel::findByCredentials($credentials);

              $user = Sentinel::update($user, $reg_credentials);

	        

	        

	        return[

        	    'status' => 1,

        	    'message' => 'Registered Successfully',

			    'data' =>$user,

			    'token_code' => $token,



		    ];

		    

	    

        }

    }

    





        



    public function login (Request $request)

    {      

        $rules = [

            'email' => 'required|email',
            'token_apple' => '',
        ];

        

        $data=$data = parse_request($request, array_keys($rules));

        
        if (empty($request->token_apple))
         {   
             $validator = Validator::make($request->all(),
                [
    
                    'email' => 'required',
    
                ],
    
                [
    
                    'email.required' => __('The email is required'),
    
                ]
    
            );
             
         



        if ($validator->fails()) {

            return $this->sendJson([

                'status' => 0,

                'message' => $validator->errors()

            ]);

        }
    }

        $credentials = [

            'login' => request()->post('email') ?? request()->post('token_apple'),

        ];



        $user = User::where(['email' =>$credentials  ])->orWhere(['token_apple' =>$credentials ])->first();




        if (is_null($user)) {

		    return $this->sendJson([

			    'status' => 0,

			    'message' => __('Account Dosent Exist')

		    ]);

               }else{

	        

	           $user = User::where(['email' =>$credentials  ])->orWhere(['token_apple' =>$credentials ])->first();



	           $token = create_api_token($user->id);

               update_user_meta($user->id, 'access_token', $token);

         $avatar_real="";     

         $avatar_id=$user->avatar;

         $data = DB:: select("select media_url from media WHERE media_id='$avatar_id'");

         foreach($data as $avatar){$avatar_real="https://clicknbook.co/".$avatar->media_url;}

if(!empty($request->post('password'))){
    
$rules = ['email' => '','password' => '',];
        
$data = parse_request($request, array_keys($rules));

$user_auth_data = Sentinel::authenticate($data, true);

if (isset($user_auth_data) && is_object($user_auth_data)) {
}else{
return $this->sendJson([
                'status' => 0,
                'message' => __('The email or password is incorrect')
            ]);  
}}



       $data=[

        'id'=> $user->id,

        "email" =>$user->email,

        "permissions"=> $user->permissions,

        "last_login"=>$user->last_login,

        "first_name"=>$user->first_name,

        "last_name"=>$user->last_name,

        "avatar"=>$avatar_real,

        "mobile"=>$user->mobile,

        "location"=>$user->location,

        "request"=>$user->request,

        "description"=>$user->description,

        "created_at"=>$user->created_at,

        "updated_at"=>$user->updated_at,

        "address"=>$user->address,

        "country"=>$user->country,

        "city"=> $user->city,

        "district"=> $user->district,

        "street"=> $user->street,

        "gender"=>$user->gender,

        "fcm_token"=>$user->fcm_token,       

];
	        return[

        	    'status' => 1,

        	    'message' => 'success login',

			    'data' =>$data,

			    'token_code' => $token,



        ];}    

        }

}

