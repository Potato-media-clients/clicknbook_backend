<?php

namespace App\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use DB;


class ChatController extends Controller

{

    public function chatting(Request $request)
    
    {


        if(!isset($request->with_user)){
          $userData = get_current_user_data();  
          $Conversation=DB::table('messenger')->where(['from_user'=>$request->with_user,'to_user'=>$userData->getUserId()])->groupBy('from_user')->first();
          if(!$Conversation || empty($Conversation)){
          $userData = get_current_user_data(); 
          $user_id=$userData->getUserId(); 
        
          $data=[
          'from_user' =>155,
          'to_user' =>$user_id,
          'message' =>""
          ];
          
       $messages=DB::table('messenger')->insert($data);
       }else{
        $request->with_user=$request->with_user;   
       }}else{
           $userData = get_current_user_data(); 
           $user_id=$userData->getUserId();
          $Conversation=DB::table('messenger')->where(['from_user'=>$request->with_user,'to_user'=>$userData->getUserId()])->groupBy('from_user')->first();
           if(!$Conversation || empty($Conversation)){
                    $data=[
          'from_user' =>$request->with_user,
          'to_user' =>$user_id,
          'message' =>""
          ];
          
        $messages=DB::table('messenger')->insert($data);    
             
        }else{
           $request->with_user=$request->with_user; 
        }}
        

        

       $userData = get_current_user_data();
       $messages_array=[];
       $messages=DB::table('messenger')->where(['from_user'=>$userData->getUserId(),'to_user'=>$request->with_user])->OrWhere(['from_user'=>$request->with_user,'to_user'=>$userData->getUserId()])->get();
       foreach($messages as $message){
       if($message->from_user==$userData->getUserId()&&$message->to_user==$request->with_user||$message->to_user==$userData->getUserId()&&$message->from_user==$request->with_user) 
       {
           array_push($messages_array,$message);
       }}
       $current_user=DB::table('users')->where(['id'=>$request->with_user])->first();
       
       $Conversations=DB::table('messenger')->where(['to_user'=>$userData->getUserId()])->groupBy('from_user')->orderBy('id','DESC')->get();
       
       $userData = get_current_user_data();


       return view("frontend.chat", ['messages'=>$messages_array,'current_user'=>$current_user,'Conversations'=>$Conversations])->render();
}
    public function index(Request $request)
    
    {

       $messages=[];
       $messages_array=DB::table('messenger')->where(['from_user'=>$request->from_user,'to_user'=>$request->to_user])->OrWhere(['from_user'=>$request->to_user,'to_user'=>$request->from_user])->get();
       foreach($messages_array as $message){
       if(($message->from_user == $request->from_user && $message->to_user == $request->to_user)||($message->to_user==$request->from_user&&$message->from_user==$request->to_user)) 
       {
           
          array_push($messages,$message);
       }
           
       }

       return $messages;

}  

public function add_message(Request $request)
    
    {
        
        
         if($request->message){
             
          //$message = preg_replace('/[0-9]/', 'X', $request->message);
          
          $message = preg_replace('/\+?[0-9][0-9()\-\s+]{4,20}[0-9]/', '<span style="color:red;">xxxxxx</span>', $request->message);

          $data=['from_user' =>$request->from_user,

          'to_user' => $request->to_user,

          'message' =>$message,

          ];
          
       $messages=DB::table('messenger')->insert($data);
       
       $ids =DB::table('users')->where('id',$request->to_user)->pluck('fcm_token')->toArray();
       
       $userName= get_username($request->to_user);
       
       $firebaseToken =$ids;
        
       $SERVER_API_KEY ="AAAATwVgtrk:APA91bH2lUIYNB0_LiG9IIcen7kJQTtXzw4sU8L3lzdhNfQ8UyeLhNDAAkk_nF-Q_AzBgVm143YPuNW0kCXHp9kaNVDV_jAluMq5FdopIPLX7EoJsYP0JckpxBw0ro3aOnW-4K0KU3Vr";
    
        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => "ClickNBook",
                "body" =>"New Message From".$userName,  
            ]
        ];
        
        $dataString = json_encode($data);
      
        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        foreach ($firebaseToken as $key => $firebaseToken ) {

        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
        } 
        
        $return = json_encode(curl_exec($ch));

        return $messages ;

}}

}
    