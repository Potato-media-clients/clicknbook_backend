<?php



use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'middleware' => 'api_token'], function () {

    Route::post('post', 'Api\PostController@store')->middleware('user_can_manage_post');



    //Authentication

    Route::post('logout', 'Api\UserController@logout');

    Route::post('reset-password', 'Api\UserController@resetPassword');

    Route::post('change-password', 'Api\UserController@changePassword');

    Route::get('current-user', 'Api\UserController@getCurrentUser');

    Route::post('update-profile', 'Api\UserController@updateProfile');



    //Review

	Route::post('add-review', 'Api\CommentController@addReview');



	//Add Cart

	Route::post('add-cart', 'Api\BookingController@addToCart');

	Route::get('get-cart', 'Api\BookingController@getCart');



	//Checkout

	Route::post('checkout', 'Api\BookingController@checkout');

});



Route::group(['prefix' => 'v1'], function () {

    Route::post('token', 'Api\APIController@token');



    //Authentication

    //Route::post('login', 'Api\UserController@login');

    Route::post('reg_new', 'Api\UserController@register');



    //Language

    Route::get('languages', 'Api\LanguageController@index');



    //Post

    Route::get('posts', 'Api\PostController@index');

    Route::get('post/{id?}', 'Api\PostController@show');



    //Page

    Route::get('page/{id?}', 'Api\PageController@show');



    //Home

	Route::post('customer-homes', 'Api\HomeController@customerHomes');

	Route::post('get-wishlist', 'Api\HomeController@wishList');

	Route::post('home/search', 'Api\HomeController@search');

	Route::get('home/filters', 'Api\HomeController@getFilters');

	Route::get('home/availability/{id?}', 'Api\HomeController@getAvailability');

    Route::get('home/time-availability/{id?}', 'Api\HomeController@getTimeAvailability');

    Route::get('home/price-realtime/{id?}', 'Api\HomeController@getPriceRealtime');

    Route::get('home/{id?}', 'Api\HomeController@show');

    Route::get('DistinationsHome', 'Api\HomeController@DistinationsHome');
    
    Route::get('get-home-by-type','Api\HomeController@get_home_by_type');




	//Experience

	Route::get('experience/search', 'Api\ExperienceController@search');

	Route::get('experience/filters', 'Api\ExperienceController@getFilters');

    Route::get('experience/availability/{id?}', 'Api\ExperienceController@getAvailability');

    Route::get('experience/price-realtime/{id?}', 'Api\ExperienceController@getPriceRealtime');

    Route::get('experience/{id?}', 'Api\ExperienceController@show');



    //Car

	Route::get('car/search', 'Api\CarController@search');

	Route::get('car/filters', 'Api\CarController@getFilters');

    Route::get('car/availability/{id?}', 'Api\CarController@getAvailability');

    Route::get('car/time-availability/{id?}', 'Api\CarController@getTimeAvailability');

        Route::get('car/price-realtime/{id?}', 'Api\CarController@getPriceRealtime');

    Route::get('car/{id?}', 'Api\CarController@show');



    //Booking

	Route::get('payment-gateways', 'Api\BookingController@getPaymentGateways');

    Route::get('booking-detail/{token_code?}', 'Api\BookingController@getBookingDetail');

    Route::post('create-booking', 'Api\BookingController@createBooking');

    Route::get('getBookingOwner', 'Api\BookingController@getAllBooking');


    Route::get('get_category_and_aminities', 'Api\AddStayController@get_category_and_aminities');
    Route::get('get_home_type', 'Api\AddStayController@get_home_type');
    Route::post('add_stay', 'Api\AddStayController@add_stay');
    Route::post('edit_stay/{post_id}', 'Api\AddStayController@edit_stay');
    
    Route::get('/get-find-home-type','Api\AddStayController@get_find_home_type');

    //Comment

	Route::post('reviews', 'Api\CommentController@getReviews');



	//Other data

	Route::get('countries', 'Api\OtherController@getCountries');

	Route::post('login', 'Api\UserController@login');

	Route::post('delete-usermedia/{userid}', 'Api\UserController@deleteusermedia');

	Route::get('get-messages', 'Api\OtherController@getMessages');

	Route::get('add-wishlist', 'Api\OtherController@addWishlist');
	Route::post('delete-account', 'Api\OtherController@DeleteAccount');

	Route::get('get-notifications', 'Api\OtherController@getNotifications');

	Route::get('new-notifications', 'Api\OtherController@getNewNotifications');

	Route::post('contact', 'Api\OtherController@contact');

	Route::get('set-seen-notifications', 'Api\OtherController@set_seen_notifications');

	Route::get('get-conversation', 'Api\OtherController@getConversation');

	Route::get('get-messages', 'Api\OtherController@getMessages');

	Route::post('send-messages', 'Api\OtherController@addMessages');

	Route::post('TopDestination', 'Api\OtherController@TopDestination');

	Route::get('search-history', 'Api\OtherController@search_history');

	Route::post('add-search-history', 'Api\OtherController@add_search_history');

	Route::post('update-fcm-token', 'Api\OtherController@update_fcm_token');

	Route::post('delete-home', 'Api\OtherController@delete_home');



});
   Route::post('callback', 'Api\OtherController@call_back'); 

Route::get('/iyad',function(){

return 'iyad';

});