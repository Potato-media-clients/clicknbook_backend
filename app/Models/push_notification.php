<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class push_notification extends Model
{
 
public function sendNotification($device_token, $message)
    {
        
        
        $SERVER_API_KEY = 'AAAATwVgtrk:APA91bH2lUIYNB0_LiG9IIcen7kJQTtXzw4sU8L3lzdhNfQ8UyeLhNDAAkk_nF-Q_AzBgVm143YPuNW0kCXHp9kaNVDV_jAluMq5FdopIPLX7EoJsYP0JckpxBw0ro3aOnW-4K0KU3Vr';
  
        $data = [
            "to" => $device_token, // for single device id
            "notification" => $message,
            "icon" => "https://majarreh.com/images/logo.ico",
        ];
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
               
        $response = curl_exec($ch);
      
        curl_close($ch);
      
        return $response;
    }}