<?php

namespace App\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Category;
use App\Models\Term;
use App\Models\Media;

use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;



class AddStayController extends Controller
{
    
    public function get_find_home_type(){
        $homeTypes = DB::table('term')->where(['taxonomy_id'=>1])->get();
        $arr = [];
        foreach($homeTypes as $homeType)
        {
            $image = DB::table('media')->where(['media_id' => $homeType->term_image])->first();
            $counts = DB::table('term_relation')->join('home','term_relation.service_id','=','home.post_id')->where(['term_relation.term_id'=>$homeType->term_id,'home.status'=>'publish'])->groupBy('term_relation.service_id')->get();
            // foreach ($counts as $count)
            // {
            
            //  $c = DB::table('home')->where(['post_id'=>$count->service_id])->where(['status'=> 'publish'])->get();
            //  array_push($arr , $c);
            // }
            $homeType->count = count($counts);
            $homeType->image = $image->media_url;
             
        }
        return $homeTypes;
        
        
    }
    
    
    public function get_category_and_aminities(Request $request){
        
        $lang = $request->get('lang', get_current_language());
        $categories = Category::get()->map(function($query) use($lang){
            $term = Term::where('category_id',$query->id)->where('taxonomy_id',2)->get()->map(function($query1)use($query , $lang){
                return[
                    'term_id'=> $query1->term_id,
                    'term_title'=> get_translate($query1->term_title, $lang)
                ];
            });
            return ['name'=> get_translate($query->name, $lang),
                    'term' => $term 
                ];
        });
        return $this->sendJson([
            'status' => true,
            'message' => __('Success'),
            'data' =>$categories
        ]);
    }
    public function get_home_type(Request $request){
    
    $lang = $request->get('lang', get_current_language());
        $term = Term::where('taxonomy_id',1)->get()->map(function($query1)use($lang){
            return[
                'term_id'=> $query1->term_id,
                'term_title'=> get_translate($query1->term_title, $lang)
            ];
        });
   
    return $this->sendJson([
        'status' => true,
        'message' => __('Success'),
        'data' =>$term
    ]);
    }
    
    
    public function edit_stay(Request $request , $post_id){
          $token = $request->bearerToken();
          $ishomes=  DB::table('home')->where('post_id' , '=' , $post_id )->first();

		if($token && $ishomes)
		{
		    

    		$user = get_user_by_access_token($token);
        	$user_id=$user->id;

        	if($ishomes->thumbnail_id !='')    
               {
                   $thumbnail  = Media::where('media_id' , '=' ,$ishomes->thumbnail_id )->first();
                  if ($thumbnail)
                  {
                            Storage::disk('custom_folder_1')->delete($thumbnail->media_url);
                            $thumbnail->delete();
                      
                  }

               }

            if ($ishomes->gallery)
            {
                $my_array1 = str_replace(',', '', $ishomes->gallery);
                $my_array2 =str_split($my_array1 , 4 );


        		foreach ($my_array2 as $gall)
            		{
                		$homesmedias = Media::where('media_id' , '=' , $gall )->first();
                		if ($homesmedias)
                    		{
                        		Storage::disk('custom_folder_1')->delete($homesmedias->media_url);
                        		DB::table('media')->where('media_id' , '=' , $gall)->delete();
                    		}
                	}
            }
            
    	}
    		

     
        
        
        //avatar image
        $file= $request->file('avatar');
       
        if($file){
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path_avatar="/public/storage/users/u-".$user_id."/".date('Y')."/".date('m')."/".date('d')."/";
            $real_path_avatar="public/storage/storage/users/u-".$user_id."/".date('Y')."/".date('m')."/".date('d')."/";
            $file->storePubliclyAs($target_path_avatar,$name);
            $querythumbnail_ids=DB::table('media')->insertGetId(
            [
            'media_url' =>$real_path_avatar.$name,
            'media_path' =>$real_path_avatar.$name,
            'media_type'=>$file->getClientOriginalExtension(),
            'author' => $user_id,
             ]);
          
            
        }
       $gallery_list="";
       if($request->hasFile('gallery')){
       foreach($request->file('gallery') as $gallery){
        $string = rand(0, 99999);
        $file2=$gallery;
            $name = time().time().'.'.$file2->getClientOriginalExtension();
            $target_path_gallery="/public/storage/u-".$user_id.$string."/".date('Y')."/".date('m')."/".date('d')."/";
            $real_path_gallery="public/storage/storage/u-".$user_id.$string."/".date('Y')."/".date('m')."/".date('d')."/";
            $file2->storePubliclyAs($target_path_gallery,$name);
            $queryGallery=DB::table('media')->insertGetId(
                [
                'media_url' =>$real_path_gallery.$name,
                'media_path' =>$real_path_gallery.$name,
                'media_type'=>$file2->getClientOriginalExtension(),
                'author' => $user_id,
            ]);

            $gallery_list=$gallery_list.$queryGallery."," ;
       }}
        $gallery_list=substr($gallery_list, 0, -1);

$queryPost_content="";
        $file3=$request->file('post_content');
        if($file3){
            $name = time().time().'.'.$file3->getClientOriginalExtension();
            $target_path_Post_content="/public/storage/avatar/u-".$user_id."/".date('Y')."/".date('m')."/".date('d')."/";
            $real_path_Post_content="public/storage/storage/avatar/u-".$user_id."/".date('Y')."/".date('m')."/".date('d')."/";
            $file3->storePubliclyAs($target_path_Post_content,$name);
            $queryPost_content=DB::table('media')->insertGetId(
                [
                'media_url' =>$real_path_Post_content.$name,
                'media_path' =>$real_path_Post_content.$name,
                'media_type'=>$file3->getClientOriginalExtension(),
                'author' => $user_id,
            ]);
            
        }
        // if(!empty($real_path_Post_content)){
        //     $post_content = '[:en]<p><img alt="istockphoto-160193420-612x612" src="https://clicknbook.co/'.$real_path_Post_content.$name.'" class="img-inline" /></p>[:ar][:]';
        // }else{
        //     $post_content = '[:en]<p><img alt="istockphoto-160193420-612x612" src="" class="img-inline" /></p>[:ar][:]';
        // }
        $created_at = strtotime("now");
        $home=DB::table('home')->where('post_id', '=' , $post_id)->update([
            'post_title' => $request->post_title,
            'post_slug'=>  $request->post_title,
            'base_price' =>  $request->base_price,
            'post_description' =>  $request->post_description,
            'status' =>'pending',
            'created_at' => $created_at,
            'author' => $request->author,
            'post_content' => $queryPost_content,
            'location_lat' => $request->location_lat,
            'location_lng'=> $request->location_lng,
            'location_address' => $request->location_address,
            'location_postcode' => $request->location_postcode,
            'thumbnail_id' => $querythumbnail_ids,
            'location_zoom' => 10,
            'location_state' => $request->location_state ?? '',
            'location_country' => $request->location_country,
            'location_city' => $request->location_city,
            'gallery' => $gallery_list,
            'number_of_guest' => $request->number_of_guest,
            'number_of_bedrooms' => $request->number_of_bedrooms,
            'number_of_bathrooms'=> $request->number_of_bathrooms,
            'size' => $request->size,
            'min_stay' => $request->min_stay,
            'max_stay' => $request->max_stay,
            'booking_type' => 'per_night',
            'home_type'=> $request->home_type,
            'checkin_time' => $request->checkin_time,
            'checkout_time' => $request->checkout_time,
            'booking_form' => $request->booking_form,
            'price_7_day' => $request->price_7_day ?? 0.0,
            'price_14_day' => $request->price_14_day??  0.0,
            'price_30_day' => $request->price_30_day??  0.0,
            'weekend_to_apply' => $request->weekend_to_apply?? 0.0,
            'apply_to_guest' => $request->apply_to_guest ?? 1,
            'amenities'=> $request->amenities,
            'enable_cancellation' => $request->enable_cancellation,
            'cancel_before' => $request->cancel_before,
            // 'checkin_time'=> $request->checkin_time,
            // 'checkout_time' => $request->checkout_time,
            'is_featured' => 'on',
            'import_ical_url' => 'a:0:{}',
            'cancellation_detail' => $request->cancellation_detail,
            'use_long_price' => 'on',
            'use_external_link' => '#',
            'post_type' => 'home',
            'enable_extra_guest' => $request->enable_extra_guest,
            'extra_guest_price' => $request->extra_guest_price ?? 0.0,
            'text_external_link'=> '[:en]Check Out[:ar]Check Out[:]',
            'rating' => $request->rating ,
            'weekend_price' => $request->weekend_price , 
            'video' => $request->video,
            'language'  => $request->language,
            
        ]);
        $amenities = explode(",",$request->amenities);
        foreach($amenities as $amen){

            $term_relation=DB::table('term_relation')->insert([
                'post_type'=>'home',
                'term_id'=> $amen,
                'service_id'=> $home,
            ]);
        }

        $homes= DB::table('home')->where("post_id" , "=", $post_id)->first();
       
        return $this->sendJson([
            'status' => true,
            'message' => __('Success'),
            'table'  => $homes,
            'data' =>[]
        ]);
        
    }
        
        
        
    
    
    
    
    public function add_stay(Request $request){
        $token = $request->bearerToken();

		if($token){

		$user = get_user_by_access_token($token);

		$user_id=$user->id;

        }
        //avatar image
        $file= $request->file('avatar');
       
        if(!empty($file)){
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path_avatar="/public/storage/users/u-".$user_id."/".date('Y')."/".date('m')."/".date('d')."/";
            $real_path_avatar="public/storage/storage/users/u-".$user_id."/".date('Y')."/".date('m')."/".date('d')."/";
            $file->storePubliclyAs($target_path_avatar,$name);
            $thumbnail_id=DB::table('media')->insertGetId(
            [
            'media_url' =>$real_path_avatar.$name,
            'media_path' =>$real_path_avatar.$name,
            'media_type'=>$file->getClientOriginalExtension(),
            'author' => $user_id,
            ]);
        }
       $gallery_list="";
       if($request->hasFile('gallery')){
       foreach($request->file('gallery') as $gallery){
        $string = rand(0, 99999);
        $file2=$gallery;
            $name = time().time().'.'.$file2->getClientOriginalExtension();
            $target_path_gallery="/public/storage/u-".$user_id.$string."/".date('Y')."/".date('m')."/".date('d')."/";
            $real_path_gallery="public/storage/storage/u-".$user_id.$string."/".date('Y')."/".date('m')."/".date('d')."/";
            $file2->storePubliclyAs($target_path_gallery,$name);
            $queryGallery=DB::table('media')->insertGetId(
                [
                'media_url' =>$real_path_gallery.$name,
                'media_path' =>$real_path_gallery.$name,
                'media_type'=>$file2->getClientOriginalExtension(),
                'author' => $user_id,
            ]);

            $gallery_list=$gallery_list.$queryGallery.",";
       }}
        $gallery_list=substr($gallery_list, 0, -1);

$queryPost_content=null;
        $file3=$request->file('post_content');
        if($file3){
            $name = time().time().'.'.$file3->getClientOriginalExtension();
            $target_path_Post_content="/public/storage/avatar/u-".$user_id."/".date('Y')."/".date('m')."/".date('d')."/";
            $real_path_Post_content="public/storage/storage/avatar/u-".$user_id."/".date('Y')."/".date('m')."/".date('d')."/";
            $file3->storePubliclyAs($target_path_Post_content,$name);
            $queryPost_content=DB::table('media')->insertGetId(
                [
                'media_url' =>$real_path_Post_content.$name,
                'media_path' =>$real_path_Post_content.$name,
                'media_type'=>$file3->getClientOriginalExtension(),
                'author' => $user_id,
            ]);
        }
        // if(!empty($real_path_Post_content)){
        //     $post_content = '[:en]<p><img alt="istockphoto-160193420-612x612" src="https://clicknbook.co/'.$real_path_Post_content.$name.'" class="img-inline" /></p>[:ar][:]';
        // }else{
        //     $post_content = '[:en]<p><img alt="istockphoto-160193420-612x612" src="" class="img-inline" /></p>[:ar][:]';
        // }
        $created_at = strtotime("now");
        
        
        if(!$queryPost_content || !$thumbnail_id || !$gallery_list){
            return $this->sendJson([
            'status' => false,
            'message' => __('Error'),
            'descriptions' => __('Please Check in Image post_content or avatar or gallery')
        ]);
            
            
        }
        $home=DB::table('home')->insertGetId([
            'post_title' => $request->post_title,
            'post_slug'=>  $request->post_title,
            'base_price' =>  $request->base_price,
            'post_description' =>  $request->post_description,
            'status' =>'pending',
            'created_at' => $created_at,
            'author' => $request->author,
            'post_content' => $queryPost_content,
            'location_lat' => $request->location_lat,
            'location_lng'=> $request->location_lng,
            'location_address' => $request->location_address,
            'location_postcode' => $request->location_postcode,
            'thumbnail_id' => $thumbnail_id,
            'location_zoom' => 10,
            'location_state' => $request->location_state ?? '',
            'location_country' => $request->location_country,
            'location_city' => $request->location_city,
            'gallery' => $gallery_list,
            'number_of_guest' => $request->number_of_guest,
            'number_of_bedrooms' => $request->number_of_bedrooms,
            'number_of_bathrooms'=> $request->number_of_bathrooms,
            'size' => $request->size,
            'min_stay' => $request->min_stay,
            'max_stay' => $request->max_stay,
            'booking_type' => 'per_night',
            'home_type'=> $request->home_type,
            'checkin_time' => $request->checkin_time,
            'checkout_time' => $request->checkout_time,
            'booking_form' => $request->booking_form,
            'price_7_day' => $request->price_7_day ?? 0.0,
            'price_14_day' => $request->price_14_day??  0.0,
            'price_30_day' => $request->price_30_day?? 0.0,
            'weekend_to_apply' => $request->weekend_to_apply??  0.0,
            'apply_to_guest' => $request->apply_to_guest ?? 1 ,
            'amenities'=> $request->amenities,
            'enable_cancellation' => $request->enable_cancellation,
            'cancel_before' => $request->cancel_before,
            // 'checkin_time'=> $request->checkin_time,
            // 'checkout_time' => $request->checkout_time,
            'is_featured' => 'on',
            'import_ical_url' => 'a:0:{}',
            'cancellation_detail' => $request->cancellation_detail,
            'use_long_price' => 'on',
            'use_external_link' => '#',
            'post_type' => 'home',
            'enable_extra_guest' => $request->enable_extra_guest,
            'extra_guest_price' => $request->extra_guest_price,
            'text_external_link'=> '[:en]Check Out[:ar]Check Out[:]',
            'rating' => $request->rating ,
            'weekend_price' => $request->weekend_price , 
            'video' => $request->video ?? '',
            'language'  => $request->language,
            
        ]);
        $amenities = explode(",",$request->amenities);
        foreach($amenities as $amen){

            $term_relation=DB::table('term_relation')->insert([
                'post_type'=>'home',
                'term_id'=> $amen,
                'service_id'=> $home,
            ]);
        }

        $homes= DB::table('home')->where("post_id" , "=",$home)->first();
       
        return $this->sendJson([
            'status' => true,
            'message' => __('Success'),
            'table'  => $homes,
            'data' =>[]
        ]);
    }
}

