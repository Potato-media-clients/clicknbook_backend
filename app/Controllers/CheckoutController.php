<?php



namespace App\Controllers;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;


use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

use DB;


class CheckoutController extends Controller

{



    public function _checkoutAction(Request $request)
    {


                $create_user_checkout = get_option('create_user_checkout', 'off');
        
                if (!is_user_logged_in()) {
        
                    if (!is_user_logged_in()) {
        
                        return $this->sendJson([
        
                            'status' => 0,
        
                            'message' => view('common.alert', ['type' => 'danger', 'message' => __('You need to login before making payments')])->render(),
        
                            'need_login' => true
        
                        ]);
        
                    }
        
                }
        
                $paymentMethod = request()->get('MontyPay');
        
          if ($paymentMethod=="MontyPay") {
                    
                                        
                    return view('frontend.thank-you');
                    
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
        
                if ($validator->fails()) {
        
                    return $this->sendJson([
        
                        'status' => 0,
        
                        'message' => view('common.alert', ['type' => 'danger', 'message' => $validator->errors()->first()])->render()
        
                    ]);
        
                }
        
        
        
                if (get_option('use_google_captcha', 'off') == 'on') {
        
                    $recaptcha = new \ReCaptcha\ReCaptcha(get_option('google_captcha_secret_key'));
        
                    $gRecaptchaResponse = request()->get('g-recaptcha-response');
        
                    $resp = $recaptcha->verify($gRecaptchaResponse, $request->ip());
        
                    if (!$resp->isSuccess()) {
        
                        return $this->sendJson([
        
                            'status' => 0,
        
                            'message' => view('common.alert', ['type' => 'danger', 'message' => __('Your request was denied')])->render()
        
                        ]);
        
                    }
        
                }
        
        
        
                $userdata = $this->saveUserCheckoutData();
        
        
        
                if ($userdata['status'] == 0) {
        
                    return $this->sendJson($userdata);
        
                } else {
        
                    $user_id = $userdata['user_id'];
        
                }
        
        
        
                $payment = get_available_payments($paymentMethod);
        
                if (!$payment && $payment) {
        
                    return $this->sendJson([
        
                        'status' => 0,
        
                        'message' => view('common.alert', ['type' => 'danger', 'message' => __('This payment gateway is not available')])->render()
        
                    ]);
        
                }
        
        
        
                $cart = \Cart::get_inst()->getCart();
        
                if (!$cart) {
        
                    return $this->sendJson([
        
                        'status' => 0,
        
                        'message' => view('common.alert', ['type' => 'danger', 'message' => __('Cart is empty')])->render()
        
                    ]);
        
                }
        
        
        
                do_action('hh_before_create_booking');
        
        
        
                $new_booking_id = BookingController::get_inst()->createBooking($user_id);
        
        
        
                if (!$new_booking_id){
        
                    if (!$cart) {
        
                        return $this->sendJson([
        
                            'status' => 0,
        
                            'message' => view('common.alert', ['type' => 'danger', 'message' => __('Can not create new booking. Please try again!')])->render()
        
                        ]);
        
                    }
        
                }
        
        
        
                do_action('hh_after_create_booking', $new_booking_id);
        
        
        
if (method_exists($payment, 'purchase')|| $paymentMethod=="MontyPay") {
                if ($paymentMethod=="MontyPay") {
                    
                                        return $this->sendJson([
        
                            'status' => 0,
        
                            'message' => view('common.alert', ['type' => 'danger', 'message' =>$paymentMethod])->render()
        
                        ]);    
                    
                    
                }else{        
                    $paymentObject = $payment::get_inst();
        
                    $validation = $paymentObject->validation();
        
                    if (is_array($validation) && $validation['status'] === false) {
        
                        return $this->sendJson([
        
                            'status' => 0,
        
                            'message' => view('common.alert', ['type' => 'danger', 'message' => $validation['message']])->render()
        
                        ]);
        
                    }
        
                    $responsive = $paymentObject->purchase($new_booking_id);
        
                    if ($responsive['status'] == 'pending') {
        
                        BookingController::get_inst()->deleteBooking($new_booking_id);
        
                        return $this->sendJson([
        
                            'status' => 0,
        
                            'message' => view('common.alert', ['type' => 'danger', 'message' => $responsive['message']])->render()
        
                        ]);
        
                    } else {
        
                        \Cart::get_inst()->deleteCart();
        
        
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
        
        //$return = json_encode(curl_exec($ch));
                

                        BookingController::get_inst()->updateBookingStatus($new_booking_id, $responsive['status'], true);
        
        
        
                        do_action('hh_after_created_booking', $new_booking_id, $responsive['status']);
        
        
        
                        $return = [
        
                            'status' => 1,
        
                            'message' => view('common.alert', ['type' => 'success', 'message' => $responsive['message']])->render()
        
                        ];
        
                        if (isset($responsive['redirectUrl'])) {
        
                            $return['redirect'] = $responsive['redirectUrl'];
        
                        }
        
                        if (isset($responsive['redirectForm'])) {
        
                            $return['redirect_form'] = $responsive['redirectForm'];
        
                        }
        
                        if (isset($responsive['formID'])) {
        
                            $return['form_id'] = $responsive['formID'];
        
                        }
        
                        return $this->sendJson($return);
        
                    }
        
                }}else {
        
                    return $this->sendJson([
        
                        'status' => 0,
        
                        'message' => view('common.alert', ['type' => 'danger', 'message' => __('This payment gateway is missing purchase() method')])->render()
        
                    ]);
        
                }
        
            }
        

    public function completePurchase($request)

    {

        $orderID = request()->get('_orderID');

        $order_encrypt = request()->get('_orderEncrypt');

        $paymentMethod = request()->get('_payment');

        $status = request()->get('_status', '1');

        if ($this->checkIsResponsive()) {

            if (hh_compare_encrypt($orderID, $order_encrypt)) {

                $orderObject = get_booking($orderID);

                $oldStatus = $orderObject->status;

                if ($oldStatus == 'incomplete') {

                    if ($status == 0) {

                        BookingController::get_inst()->updateBookingStatus($orderID, 'canceled', true);

                        do_action('hh_completed_booking', $orderObject);

                    } else {

                        $payment = get_available_payments($paymentMethod);

                        if ($payment && method_exists($payment, 'completePurchase')) {

                            $paymentObject = $payment::get_inst();

                            $responsive = $paymentObject->completePurchase($orderID);

                            do_action('hh_before_check_complete_booking', $orderObject);

                            if ($responsive['status'] == 'completed') {

                                BookingController::get_inst()->updateBookingStatus($orderID, 'completed', true);

                            } elseif ($responsive['status'] == 'canceled') {

                                BookingController::get_inst()->updateBookingStatus($orderID, 'canceled', true);

                            } elseif ($responsive['status'] == 'incomplete') {

                                BookingController::get_inst()->updateBookingStatus($orderID, 'incomplete', true);

                            }

                            if (!empty($responsive['message'])) {

                                Log::debug($responsive['message']);

                            }

                            do_action('hh_completed_booking', $orderObject);

                        }

                    }

                }

            }

        }

    }



    public function checkIsResponsive()

    {

        $params = [

            '_payment' => request()->get('_payment'),

            '_orderID' => request()->get('_orderID'),

            '_tokenCode' => request()->get('_tokenCode', ''),

            '_status' => request()->get('_status', ''),

        ];

        $paymentID = request()->get('_transactionID');

        $hash_string = $params['_payment'] . '|' . $params['_orderID'] . '|' . $params['_status'];



        if (!empty($paymentID)) {

            $hash_string .= '|' . $paymentID;

        }

        $newHash = hash_hmac('sha256', $hash_string, $params['_tokenCode']);;

        $hash = request()->get('_hash');

        if (empty($hash) || $newHash !== $hash) {

            return false;

        }



        return true;

    }



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



    public function _checkoutPage(Request $request)

    {
        if($request->webView == 1){
            $cart = get_user_meta($request->user_id, 'cart_data');
            $cart = json_decode($cart, true);
            $webView =1;
            $user_id = $request->user_id;
        }else{
            $cart = \Cart::get_inst()->getCart();
            $webView =0;
            $user_id=0;
          
        }
      
        

        

        return view('frontend.checkout', ['cart' => $cart , 'webView' => $webView , 'user_id'=>$user_id]);

    }



    public function _thankyouPage(Request $request)

    {

        $orderID = request()->get('_orderID');

        $isResponsive = $this->checkIsResponsive();

        if (!$isResponsive) {

            return redirect(url('/'));

        }

        $this->completePurchase($request);

        reset_booking_data();

        $bookingObject = BookingController::get_inst()->getBookingByID($orderID);

        return view('frontend.thank-you', ['bookingObject' => $bookingObject]);

    }

}

