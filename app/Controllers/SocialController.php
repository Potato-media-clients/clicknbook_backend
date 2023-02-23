<?php



namespace App\Controllers;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Sentinel;


use DB;
class SocialController extends Controller

{

    public function _checkLogin(Request $request, $social = '')

    {

        if (!empty($social)) {

            $return = [

                'status' => false,

                'message' => __('Some problem occurred, please try again.')

            ];

            switch ($social) {

                case 'facebook':

                    $return = \FacebookLogin::get_inst()->checkLogin();

                    break;

                case 'google':

                    $return = \GoogleLogin::get_inst()->checkLogin();

                    break;

            }
     

            if ($return['status']) {
            $id=DB::table('users')->where('email',$return['user']->email)->first();
            $query=DB::table('role_users')->where('user_id',$id->id)->first();
            if($query){

            }else{
                $query=DB::table('role_users')->insert(
                    [
                        'user_id' =>$id->id,
                        'role_id' =>2,
                    ]);
            }
           
                Sentinel::login($return['user']);

                return redirect('/');

            } else {

                echo balanceTags($return['message']);

                exit;

            }

        } else {

            return response()->redirectTo('/');

        }

    }

}

