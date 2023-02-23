<?php



namespace App\Controllers;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;


use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

use DB;


class PaymentController extends Controller

{



    public function PAYMENT(Request $request)
    {



$new_booking_id= session('booking_id');
if(!empty($new_booking_id)&&$new_booking_id!=null){

                    
                        $responsive['status']="completed";
                        BookingController::get_inst()->updateBookingStatus($new_booking_id, $responsive['status'], true);
                        do_action('hh_after_created_booking', $new_booking_id,$responsive['status']);
                        $orderObject = get_booking($new_booking_id);
                        do_action('hh_completed_booking', $orderObject);
                        do_action('hh_before_check_complete_booking', $orderObject);
                        BookingController::get_inst()->updateBookingStatus($new_booking_id, $responsive['status'], true);
                        do_action('hh_completed_booking', $orderObject);
                        reset_booking_data();
                        
                        session(['booking_id' =>null]);

                        return view('frontend.thank-you', ['bookingObject' => $orderObject]);    
}


                    $paymentMethod ='bank_transfer';
                    $payment = get_available_payments($paymentMethod);
                    $paymentObject = $payment::get_inst();
                    
                    
                $cart = \Cart::get_inst()->getCart();
                
               if (!$cart) {
                   
               return view('frontend.checkout',['Error_message' => __('Cart is empty'),'cart' => $cart,'webView' => 0,'user_id' => 0]);
                  
                }

                
                $create_user_checkout = get_option('create_user_checkout', 'off');
        
                if (!is_user_logged_in()) {
        
                    if (!is_user_logged_in()) {
                        
                        
                     return view('frontend.checkout',['Error_message' => __('You need to login before making payments'),'cart' => $cart,'webView' => 0,'user_id' => 0]);

    
        
                    }
        
                }
        


        
                $validator = Validator::make($request->all(),
        
                    [
        
                        'firstName' => 'required',
        
                        'lastName' => 'required',
        
                        'email' => 'required|email',
        
                        'phone' => 'required',
        
                        'address' => 'required',
        
                        'payment' => '',
        
                        'term_condition' => 'required'
        
                    ],
        
                    [
        
                        'firstName.required' => __('First name is required'),
        
                        'lastName.required' => __('Last name is required'),
        
                        'email.required' => __('Email is required'),
        
                        'email.email' => __('Email is invalid'),
        
                        'phone.required' => __('Phone is required'),
        
                        'address.required' => __('Address is required'),
        
                        'payment.required' => __('Payment gateway is required'),
        
                        'term_condition.required' => __('Please agree with the Term and Condition')
        
                    ]
        
                );
                 
                $firstName=request()->get('firstName');
                
                if ($validator->fails()) {
        
                    return view('frontend.checkout',['Error_message' =>$validator->errors()->first(),'cart' => $cart,'webView' => 1,'user_id' => 0]);
                    
                }
 
 
                $userdata = $this->saveUserCheckoutData();
                
                if ($userdata['status'] == 0) {
        
                    return $this->sendJson($userdata);
        
                } else {
        
                    $user_id = $userdata['user_id'];
        
                }

                do_action('hh_before_create_booking');

                $new_booking_id = BookingController::get_inst()->createBooking($user_id);
        
                if (!$new_booking_id){
        
                    if (!$cart) {
       
                       return view('frontend.checkout',['Error_message' => __('Can not create new booking. Please try again!'),'cart' => $cart,'webView' => 0,'user_id' => 0]);

                    }
        
                }
        
                do_action('hh_after_create_booking', $new_booking_id);
                

                    $validation = $paymentObject->validation();
        
                    if (is_array($validation) && $validation['status'] === false) {
                        
                    return view('frontend.checkout',['Error_message' =>$validation['message'],'cart' => $cart,'webView' => 0,'user_id' => 0]);
        
                    }

                    $responsive = $paymentObject->purchase($new_booking_id);
        
                    if ($responsive['status'] == 'pending') {
        
                        BookingController::get_inst()->deleteBooking($new_booking_id);
                        return view('frontend.checkout',['Error_message' =>$responsive['message'],'cart' => $cart,'webView' => 0,'user_id' => 0]);

                    }else{
                        
                        
                        
                // \Cart::get_inst()->deleteCart();
        
        
        $ids =DB::table('users')->where('id', $user_id)->pluck('fcm_token')->toArray();
       
       $firebaseToken =$ids;
            
        $SERVER_API_KEY ="AAAATwVgtrk:APA91bH2lUIYNB0_LiG9IIcen7kJQTtXzw4sU8L3lzdhNfQ8UyeLhNDAAkk_nF-Q_AzBgVm143YPuNW0kCXHp9kaNVDV_jAluMq5FdopIPLX7EoJsYP0JckpxBw0ro3aOnW-4K0KU3Vr";
    
        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => "ClickNBook",
                "body" =>"Booking Completed Successfully ",  
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
        

                       $bookingObject = BookingController::get_inst()->getBookingByID($new_booking_id);
                       $paymentObject = BookingController::get_inst()->getBookingByID($new_booking_id);

                       BookingController::get_inst()->updateBookingStatus($new_booking_id, $responsive['status'], true);
            

            
    
$url = 'https://checkout.montypay.com/api/v1/session';
$cart_data=json_encode($cart);
$booking_id="ORDER-".$new_booking_id;
$post_title =$booking_id;
$amount=(int)$cart['amount'];
$amount=strval($amount);
$amount=$amount.".00";
$hash=sha1(md5(strtoupper($booking_id.$amount."USD".$post_title."e91034e0fa5d6cda8ff9495114d99955")));
$data = array(
"merchant_key" => "31001754-8120-11ed-a755-56d3f90eecc8",
"operation" => "purchase",
"methods" => array ("card"), 
"order" => array ("number"=>$booking_id,"amount"=>$amount,"currency"=>"USD","description"=>$post_title), 
"cancel_url" => "https://clicknbook.co/checkout",
"success_url" => "https://clicknbook.co/pay",
"customer" => array ("name"=>"John Doe","email"=>"test@email.com"), 
"recurring_init" => "true",
"hash" =>$hash
);

$data_string = json_encode($data);

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

curl_close($ch);

$result=json_decode($result);
if(!empty($result->redirect_url)){
session(['booking_id' =>$new_booking_id]);    
return redirect($result->redirect_url);
}else{
                        return view('frontend.checkout',['Error_message' =>"Something Went Wrong Please Dont Forget To Contact Us ",'cart' => $cart,'webView' => 0,'user_id' => 0]);
    
}

}}
         
        

    public function saveUserCheckoutData()

    {

        $fields = [

            'email' => request()->get('email'),

            'firstName' => request()->get('firstName'),

            'lastName' => request()->get('lastName'),

            'phone' => request()->get('phone'),

            'address' => request()->get('address'),

            'city' => request()->get('city'),

            'postCode' => request()->get('postCode'),

            'country' => request()->get('country'),

        ];



        $fields = apply_filters('hh_user_checkout_data', $fields);



        $create_user_checkout = get_option('create_user_checkout', 'off');



        if (!is_user_logged_in()) {

            if ($create_user_checkout == 'on' && isset($_POST['create_user_checkout'])) {

                $user = get_user_by_email($fields['email']);

                if (!$user) {



                    $credentials = [

                        'email' => $fields['email'],

                        'first_name' => $fields['firstName'],

                        'last_name' => $fields['lastName'],

                    ];



                    $new_user = create_new_user($credentials);

                    if ($new_user['status']) {

                        $user = $new_user['user'];



                        update_user_meta($user->getUserId(), 'user_checkout_information', $fields);



                        return [

                            'status' => 1,

                            'message' => __('Saved user data successfully'),

                            'user_id' => $user->getUserId()

                        ];

                    } else {

                        return [

                            'status' => 0,

                            'message' => $new_user['message']

                        ];

                    }

                } else {

                    return [

                        'status' => 0,

                        'message' => __('This email already exists. Please login and continue'),

                        'need_login' => true

                    ];

                }

            } else {

                return [

                    'status' => 0,

                    'message' => __('Please login and continue'),

                    'need_login' => true

                ];

            }

        } else {

            update_user_meta(get_current_user_id(), 'user_checkout_information', $fields);



            return [

                'status' => 1,

                'message' => __('Saved user data successfully'),

                'user_id' => get_current_user_id()

            ];

        }

    }
}

