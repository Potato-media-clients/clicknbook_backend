<?php



namespace App\Controllers\Api;

use App\Models\Booking;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use DB;

use App\Models\Home;

use App\Models\HomeAvailability;

use App\Models\HomePrice;

use App\Models\Taxonomy;

use App\Models\Term;

class OtherController extends Controller

{

    protected $model;



    public function __construct()

    {

        parent::__construct();

    }

 
    public function call_back(Request $request)
    {
       $status=$request['status']; 
       $type=$request['type'];
       $order_number=$request['order_number'];
       if($status=="success" && $type=="sale"){
        return redirect('https://clicknbook.co/pay'); 
       }else{
        return redirect('https://clicknbook.co/checkout');
       }
       

      return  $type; 
    }
 
    public function DeleteAccount(Request $request){

        $token = $request->bearerToken();

		$user = get_user_by_access_token($token);

		$user_id=$user->id;



		$find=DB::update("update users set mobile='$user->email',email='$user->password' WHERE id='$user_id'");
		$find1=DB::update("update home set status='pending' WHERE author='$user_id'");

if($find){

            return $this->sendJson([

    		'status' => 1,

		    'message' => __('Account Deleted Successfully'),]);

        }else{

           return $this->sendJson([

    		'status' => 0,

		    'message' => __('User Not Found'),]);
        }}


 

     public function delete_home(Request $request){

         

        $token = $request->bearerToken();

        $home_id=$request->home_id;

		$user = get_user_by_access_token($token);

		$user_id=$user->id;

    		if($request->home_id)
    		{
    
        		if($token)
            		{
            
            
            
                        DB::table('home')->where('post_id', '=' , $id)->delete();
            
                        return $this->sendJson([
            
                		'status' => 1,
            
            		    'message' => __('Success'),
            
                         ]);  
            
            
            
            		}
        		else
            		{    
            		    return $this->sendJson([
            
                		'status' => 0,
            
            		    'message' => __('Error'),
            
            		    'data' =>'Invalid Bearer Token',
            
            	    ]);
            
                    }
    
    		}
    		else
    		{
    		    return $this->sendJson([
    
        		'status' => 0,
    
    		    'message' => __('Error'),
    
    		    'data' =>'Invalid Home Id',
    
    	    ]);
    
             }
         
   }

 

 

     public function update_fcm_token(Request $request){

         

        $token = $request->bearerToken();

        $fcm_token=$request->fcm_token;

		$user = get_user_by_access_token($token);

		$user_id=$user->id;

		if($request->fcm_token){

		if($token){

		try {



        $Update_notifications=DB::update("update users set fcm_token='$fcm_token' WHERE id='$user_id'");



             } catch (\Illuminate\Database\QueryException $e) {

             

             return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'), ]);

            }

         

          

            return $this->sendJson([

    		'status' => 1,

		    'message' => __('Success'),

             ]);  



		}else{    	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'data' =>'Invalid Bearer Token',

	    ]);

}

		}else{    	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'data' =>'Invalid FCM Token',

	    ]);

}}

    

    

    

    public function add_search_history(Request $request){

        $token = $request->bearerToken();

		$user = get_user_by_access_token($token);

        if($user ||empty($request->keyword)||!isset($request->keyword)||$request->keyword==null){

        $user_id=$user->id;

         $query=DB::table('search_history')->insert(

          [

         'user_id' =>$user_id,

         'keyword' =>$request->keyword

          ]);





if($query){    

            return $this->sendJson([

    		'status' => 1,

		    'message' => __('Success'),

             ]);  

                

}else{

     	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),



	    ]);

   



}}else{

      	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'search_history' =>'Missing Token || keyword',



	    ]);

   

}}

     public function search_history(Request $request){

        $token = $request->bearerToken();

		$user = get_user_by_access_token($token);

        if($user){

        $user_id=$user->id;

         $data = DB:: select("select keyword from search_history WHERE user_id='$user_id' group by keyword order by id desc limit 10 ");



         $arr=[];

         foreach($data as $notify){

           $Data=$notify->keyword;

           array_push($arr,$Data);

          }



if($arr){    

            return $this->sendJson([

    		'status' => 1,

		    'message' => __('Success'),

		    'search_history' =>$arr,

             ]);  

                

}else{

     	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'search_history' =>'No available Data',



	    ]);

   



}}else{

      	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'search_history' =>'Missing Token',



	    ]);

   

}}

    

    public function TopDestination(Request $request){

        

        $lang = $request->get('lang', get_current_language());



        //$token = $request->bearerToken();

        //if($token){

		//$user = get_user_by_access_token($token);

		//$user_id=$user->id;

        //  $data = DB:: select("select location_city AS distination from home WHERE status='publish' group by location_city limit 5 ");

         

         $arr=[];

        //  foreach($data as $notify){

        //    $Data=get_translate($notify->distination, $lang);

        //     if (!in_array($Data, $arr)){

        //         array_push($arr,$Data);}

        //     }
		$locations = get_option('home_top_destination');
		foreach($locations as $notify){
			$array =  [
				'name' => get_translate($notify['name']),
				'image' => get_attachment_url($notify['image']),
				'lat' => $notify['lat'],
				'lng' => $notify['lng'],
			];
			array_push($arr,$array);
		}
	
if($arr){    

            return $this->sendJson([

    		'status' => 1,

		    'message' => __('Success'),

		    'Destination' =>$arr,

             ]);  

                

}else{

     	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'Destination' =>'No available Data',



	    ]);

   



}}

    

    public function contact(Request $request){

        $token = $request->bearerToken();

		$user = get_user_by_access_token($token);

		$user_id=$user->id;

		$title=$request->title;

		$email=$request->email;

		$message=$request->message;

		if($token&&$user_id&&$title&&$email&&$message){

         $query=DB::table('contact_us')->insert(

          [

         'user_id' =>$user_id,

         'title' =>$title,

          'email' => $email,

          'message' => $message,

          ]);

        if($query){

    	return $this->sendJson([

    		'status' => 1,

		    'message' => __('Sent Successfully'),

             ]);

              }else{  

                  

    	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

	    ]);

                  

 }}else{

 return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'data' =>'Invalid Data',

	    ]);    

 }}

    

     public function set_seen_notifications(Request $request){

         

        $token = $request->bearerToken();

        if($token){

		$user = get_user_by_access_token($token);

		$user_id=$user->id;



		try {

        $Update_notifications=DB::update("update notification set seen='1' WHERE user_to='$user_id'");



             } catch (\Illuminate\Database\QueryException $e) {

             

             return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'), ]);

            }

         

          

            return $this->sendJson([

    		'status' => 1,

		    'message' => __('Success'),

             ]);  

                





        }else{    	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'data' =>'Invalid Token',

	    ]);

}}



    public function getNotifications(Request $request){

        $token = $request->bearerToken();

        if($token){

		$user = get_user_by_access_token($token);

		$user_id=$user->id;

         $data = DB:: select("select id,type,message,created_at,seen from notification WHERE user_to='$user_id' order by created_at desc");

         $arr=[];

         foreach($data as $notify){

          $message=$notify->message;

          $message = html_entity_decode($message); 

          $message = strip_tags($message);

          $message = str_replace("[:en]", ' ', $message) ;

          $message = str_replace("[:ar]", ' ', $message) ;

          $message = str_replace("[:]", ' ', $message) ;

          $created_at = date("Y-m-d H:i:s", $notify->created_at);

           $data=[

           'id'=>$notify->id,

           'type'=>$notify->type,

           'message'=>$message,

           'created_at'=>$created_at,

           'seen'=>$notify->seen,

           ];

           array_push($arr,$data);

          }



if($data){    

            return $this->sendJson([

    		'status' => 1,

		    'message' => __('Success'),

		    'notifications' =>$arr,

             ]);  

                

}else{  

                  

    	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'data' =>'No Data Found',

	    ]);

                  

 }



        }else{    	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'data' =>'Invalid Token',

	    ]);

}}

    public function getNewNotifications(Request $request){

        $token = $request->bearerToken();

        if($token){

		$user = get_user_by_access_token($token);

		$user_id=$user->id;

         $data = DB:: select("select count(*) As Unseen from notification WHERE user_to='$user_id' AND seen='0' order by created_at desc");

         $arr=[];

         foreach($data as $notify){

          }



if($notify->Unseen>0){    

            return $this->sendJson([

    		'status' => 1,

		    'message' => __('Success'),

		    'count' =>$notify->Unseen,

             ]);  

                

}else{

     	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'count' =>$notify->Unseen,



	    ]);

   

}



        }else{   return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'data' =>'Invalid Token',

	    ]);

}}







public function getConversation(Request $request){

        $token = $request->bearerToken();

        if($token){

		$user = get_user_by_access_token($token);

		$user_id=$user->id;

		$data=DB::select("select *,sum(messenger.seen) AS unread,messenger.ID AS ID,messenger.message AS message ,users.id AS user_id,users.first_name As first_name,users.last_name As last_name,users.avatar As avatar  from messenger left join users on users.id=messenger.from_user  WHERE (to_user='$user_id' OR from_user='$user_id')  group by messenger.from_user order by messenger.ID desc ");

$users=[];

$arr=[];           

foreach ($data as $messages){

$avatar="";

$avatar_id=$messages->avatar;

$user_avatar=DB::select("select media_url from media  WHERE media_id='$avatar_id'");

foreach ($user_avatar as $avatars){

$media_url=$avatars->media_url;    

$avatar="https://clicknbook.co/".$media_url;}

    

$user=['unread'=>$messages->unread,'last_message'=>$messages->message,'user_id'=>$messages->user_id,'first_name'=>$messages->first_name,'last_name'=>$messages->last_name,'avatar'=>$avatar];

//if (!in_array($user, $users))

array_push($users,$user);    

}              



if(!empty($data)){    

            return $this->sendJson([

        	'status' => 1,

		    'message' => __('Success'),

              'user'=>$users,

                ]);  

                

}else{  

           

    	return $this->sendJson([

    	'status' => 0,

		    'message' => __('Error'),

		    'data' =>'No Data Found'

	    ]);

                  

 }



        }else{    	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'data' =>'Invalid Token',

	    ]);

}}



    

    

public function getMessages(Request $request){

        $token = $request->bearerToken();

        $from_user=$request->from_user;

        if($from_user){

        if($token){

		$user = get_user_by_access_token($token);

		$user_id=$user->id;

        $Update_notifications=DB::update("update messenger set seen='0' WHERE to_user='$user_id' AND from_user='$from_user'");

		$data=DB::select("select *,messenger.ID AS ID,messenger.created_at AS created_at,messenger.message AS message ,users.first_name As first_name,users.last_name As last_name,users.avatar As avatar  from messenger left join users on users.id=messenger.from_user  WHERE ((to_user='$user_id' AND from_user='$from_user')OR(to_user='$from_user' AND from_user='$user_id')) order by messenger.ID DESC");



$arr=[];           

foreach ($data as $messages){

    

$messages->from_user==$user_id?$side="right":$side="left";   

  

array_push($arr,['id'=>$messages->ID,'message'=>$messages->message,'position'=>$side,'created_at'=>$messages->created_at]);    

    

}              



    

if(!empty($data)){    

            return $this->sendJson([

        	'status' => 1,

               'messages'=>$arr

                ]);  

                

}else{  

             return $this->sendJson([

             'status' => 0,

		    'message' => __('Error'),

		    'data' =>'No Data Found'

		    ]);

                    

                 

    	return $this->sendJson([

    	$arr

	    ]);

                  

 }



        }else{    	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'data' =>'Invalid Token',

	    ]);

}}else{    	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'data' =>'Invalid User Id',

	    ]);

}}





public function addMessages(Request $request){

        $token = $request->bearerToken();

        $from_user=$request->to_user;

        if($from_user||$request->message||$request->message==null||$from_user==null){

        if($token){

		$user = get_user_by_access_token($token);

		

		$user_id=$user->id;

         $query=DB::table('messenger')->insert(

          [

         'from_user' =>$user_id,

          'to_user' => $from_user,

          'message' => $request->message,

          ]);

if($query){    

            return $this->sendJson([

        	'status' => 1,

               'message' => __('Success'),

		        'data' =>'Message Sent',

                ]);  

                

}else{  

             $arr=[	'status' => false,

		    'message' => __('Error'),

		    'data' =>'No Data Found',

                 ];   

                 

    	return $this->sendJson([

    	$arr

	    ]);

                  

 }



        }else{    	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'data' =>'Invalid Token',

	    ]);

}}else{    	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

		    'data' =>'Invalid Data (message ,from_user)',

	    ]);

}}







//     public function getWishlist(Request $request){

//         $token = $request->bearerToken();

//         if($token){

// 		$user = get_user_by_access_token($token);

// 		$user_id=$user->id;

//           $data = DB:: table('wishlist')->select('post_id')->where(['user_id'=> $user_id,'status'=>1])->get();

// $arr=[];           

// foreach ($data as $home){

//              $post_id=$home->post_id;

//              array_push($arr,json_decode(file_get_contents("https://clicknbook.co/api/v1/home/$post_id"), true));

// }              

    

// if(!empty($arr)){    

//             return $this->sendJson($arr);  

                

// }else{  

//              $arr=[	'status' => false,

// 		    'message' => __('Error'),

// 		    'data' =>'No Data Found',

//                  ];   

                 

//     	return $this->sendJson([

//     	$arr

// 	    ]);

                  

//  }



//         }else{    	return $this->sendJson([

//     		'status' => 0,

// 		    'message' => __('Error'),

// 		    'data' =>'Invalid Token',

// 	    ]);

// }}



    public function addWishlist(Request $request){

        $token = $request->bearerToken();

		$user = get_user_by_access_token($token);

		$user_id=$user->id;

		$post_id=$request->post_id;

		$find_home=DB::select("select * from home WHERE post_id='$post_id'");

		$find=DB::select("select * from wishlist WHERE user_id='$user_id' AND post_id='$post_id' AND status='1'");

		if(!$find_home){

		    return $this->sendJson([

    		'status' => 0,

		    'message' => __('Home Id Invalid'),]);

}		if($find){

        foreach($find as$finds ){

        $wishlist_id=$finds->id;}

		$find=DB::update("update wishlist set status='0' WHERE id='$wishlist_id'");



            return $this->sendJson([

    		'status' => 0,

		    'message' => __('Removed from toggle'),]);

        }else{

         $query=DB::table('wishlist')->insert(

          [

         'user_id' =>$user_id,

          'post_id' => $post_id,

          ]);

        if($query){

    	return $this->sendJson([

    		'status' => 1,

		    'message' => __('Success'),

             ]);

              }else{  

                  

    	return $this->sendJson([

    		'status' => 0,

		    'message' => __('Error'),

	    ]);

                  

 }}}

	    

	    

    public function getCountries(){

    	return $this->sendJson([

    		'status' => 1,

		    'message' => __('Success'),

		    'data' => json_decode(file_get_contents(public_path('vendor/countries/countries.json')), true)

	    ]);

    }

    

    

}

