<?php echo $__env->make('frontend.components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php

enqueue_script('scroll-magic-js');

global $post;

?>

<div class="single-page single-home pb-5">

    <!-- Gallery -->

    <?php

    $gallery = $post->gallery;

    $thumbnail_id = get_home_thumbnail_id($post->post_id);

    $thumbnailUrl = get_attachment_url($thumbnail_id, 'full');

    ?>



        <?php

        $default = 'https://dummyimage.com/75x75/e0e0e0/c7c7c7.png';

        if (!empty($gallery)) {

            enqueue_script('light-gallery-js');

            enqueue_style('light-gallery-css');



            $gallery = explode(',', $gallery);

            $data = [];

            foreach ($gallery as $key => $val) {

                $url = get_attachment_url($val);

                if (!empty($url)) {

                    $data[] = [

                        'src' => $url

                    ];

                }

            }
            
           $count = count($data);



           if($count == 1)
           {
                    if($data[0]['src']){
                        $data0 =  $data[0]['src'];
                    }
                    else {
                        $data0 =  $default;
                    }


           }
          
           
            if($count == 2)
            {
                        if($data[0]['src']){
                            $data0 =  $data[0]['src'];
                        }
                        else {
                            $data0 =  $default;
                        }


                        if($data[1]['src']){
                            $data1 =  $data[1]['src'];
                        }
                        else {
                            $data1 =  $default;
                        }

            }
            if ($count == 3)
            {
                        if($data[0]['src']){
                            $data0 =  $data[0]['src'];
                        }
                        else {
                            $data0 =  $default;
                        }


                        if($data[1]['src']){
                            $data1 =  $data[1]['src'];
                        }
                        else {
                            $data1 =  $default;
                        }


                        if($data[2]){
                            $data2 =  $data[2]['src'];
                        }
                        else {
                            $data2 =  $default;
                        }
            }
            if($count == 4)
            {
                        if($data[0]['src']){
                            $data0 =  $data[0]['src'];
                        }
                        else {
                            $data0 =  $default;
                        }


                        if($data[1]['src']){
                            $data1 =  $data[1]['src'];
                        }
                        else {
                            $data1 =  $default;
                        }


                        if($data[2]){
                            $data2 =  $data[2]['src'];
                        }
                        else {
                            $data2 =  $default;
                        }


                        if($data[3]['src']){
                            $data3 =  $data[3]['src'];
                        }
                        else {
                            $data3 =  $default;
                        }


            }


            if($count >= 5){
                        if($data[0]['src']){
                            $data0 =  $data[0]['src'];
                        }
                        else {
                            $data0 =  $default;
                        }


                        if($data[1]['src']){
                            $data1 =  $data[1]['src'];
                        }
                        else {
                            $data1 =  $default;
                        }


                        if($data[2]){
                            $data2 =  $data[2]['src'];
                        }
                        else {
                            $data2 =  $default;
                        }


                        if($data[3]['src']){
                            $data3 =  $data[3]['src'];
                        }
                        else {
                            $data3 =  $default;
                        }


                        if($data[4]['src']){
                            $data4 =  $data[4]['src'];
                        }
                        else {
                            $data4 =  $default;
                        }

            }

                     
       
            if (!empty($data)) {

               

                $data = base64_encode(json_encode($data));

                echo '<div class="data-gallery" data-gallery="' . esc_attr($data) . '"></div>';

            }

        }

//list($width, $height) = getimagesize($thumbnailUrl);\
$width="100";
$height="100";
$width_rest=($width/4);
$width=$width/2;
$height_rest=($height/4);
$height=$height/2;

$current_lang = get_current_language();
$current_lang=="en"?$position="left":$position="right";  
if($current_lang=="en"){
$border_radius_main="25px 0px 0px 25px;";    
$border_radius_1="";    
$border_radius_2="0px 25px 0px 0px;";    
$border_radius_3="";    
$border_radius_4="0px 0px 25px 0px;";    
}else{
$border_radius_main="0px 25px 25px 0px;";    
$border_radius_1="";    
$border_radius_2="25px 0px 0px 0px;";    
$border_radius_3="";    
$border_radius_4="0px 0px 0px 25px;";     
}
$height1="540px";
$width1="756px";
$height2="268px";
$width2="365px";
$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
$border_radius_main="0px 0px 0px 0px;";    
$border_radius_1="";    
$border_radius_2="0px 0px 0px 0px;";    
$border_radius_3="";    
$border_radius_4="0px 0px 0px 0px;"; 
$width_rest=$width;
 

$height1="";
$width1="100%";
$height2="";
$width2="100%";



}
        ?>

        
<div class="main">
  <div class="slider slider-for">
                <div><img src="<?php echo e($thumbnailUrl ?? 'https://dummyimage.com/75x75/e0e0e0/c7c7c7.png'); ?>" style="height:500px; width:100%!important;"></div>
                <?php if(!empty($data0)): ?>
                <div><img src="<?php echo e($data0 ?? 'https://dummyimage.com/75x75/e0e0e0/c7c7c7.png'); ?>" style="height:500px; width:100%!important;"></div>
                <?php endif; ?>
                <?php if(!empty($data1)): ?>
                <div><img src="<?php echo e($data1 ?? 'https://dummyimage.com/75x75/e0e0e0/c7c7c7.png'); ?>" style="height:500px; width:100%!important;"></div>
                <?php endif; ?>
                <?php if(!empty($data2)): ?>
                <div><img src="<?php echo e($data2 ?? 'https://dummyimage.com/75x75/e0e0e0/c7c7c7.png'); ?>" style="height:500px; width:100%!important;"></div>
                <?php endif; ?>
                <?php if(!empty($data3)): ?>
                <div><img src="<?php echo e($data3 ?? 'https://dummyimage.com/75x75/e0e0e0/c7c7c7.png'); ?>" style="height:500px; width:100%!important;"></div>
                <?php endif; ?>
                <?php if(!empty($data4)): ?>
                <div><img src="<?php echo e($data4 ?? 'https://dummyimage.com/75x75/e0e0e0/c7c7c7.png'); ?>" style="height:500px; width:100%!important;"></div>
                <?php endif; ?>
  </div>
  <div class="slider slider-nav">
                <div ><span><img src="<?php echo e($thumbnailUrl ?? 'https://dummyimage.com/75x75/e0e0e0/c7c7c7.png'); ?>"  class="img-responsive img-featured" style="height:120px!important; width:240px!important;"></span></div>
                <?php if(!empty($data0)): ?>
                <div ><span><img src="<?php echo e($data0 ?? 'https://dummyimage.com/75x75/e0e0e0/c7c7c7.png'); ?>"  class="img-responsive img-featured" style="height:120px!important;width:240px!important;"></span></div>
                <?php endif; ?>                
                <?php if(!empty($data1)): ?>
                <div ><span><img src="<?php echo e($data1 ?? 'https://dummyimage.com/75x75/e0e0e0/c7c7c7.png'); ?>"  class="img-responsive img-featured" style="height:120px!important;width:240px!important;"></span></div>
                <?php endif; ?>                
                <?php if(!empty($data2)): ?>
                <div ><span><img src="<?php echo e($data2 ?? 'https://dummyimage.com/75x75/e0e0e0/c7c7c7.png'); ?>"  class="img-responsive img-featured" style="height:120px!important;width:240px!important;"></span></div>
                <?php endif; ?>                
                <?php if(!empty($data3)): ?>
                <div ><span><img src="<?php echo e($data3 ?? 'https://dummyimage.com/75x75/e0e0e0/c7c7c7.png'); ?>"  class="img-responsive img-featured" style="height:120px!important;width:240px!important;"></span></div>
                <?php endif; ?>
                <?php if(!empty($data4)): ?>
                <div ><span><img src="<?php echo e($data4 ?? 'https://dummyimage.com/75x75/e0e0e0/c7c7c7.png'); ?>"  class="img-responsive img-featured"/></span></div>
                <?php endif; ?>  
  </div>

</div>


    <div class="container" style="width:100%!important;">
 
        <div class="row">

            <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-content">

                <?php echo $__env->make('frontend.components.breadcrumb', ['currentPage' => get_translate($post->post_title)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <h1 class="title mt-3">

                    <?php echo e(get_translate($post->post_title)); ?>


                    <?php if($post->is_featured == 'on'): ?>

                        <span class="is-featured"><?php echo e(get_option('featured_text', __('Featured'))); ?></span>

                    <?php endif; ?>

                </h1>

                <?php if($post->location_address): ?>

                    <p class="location">

                        <i class="ti-location-pin"></i>

                        <?php echo e(get_translate($post->location_address)); ?>


                    </p>

                <?php endif; ?>

                <?php

                $rate = $post->review_count;

                ?>

                <?php if($rate): ?>

                    <div class="count-reviews">

                        <span class="count"><?php echo e(_n("[0::%s reviews][1::%s review][2::%s reviews]", $rate)); ?></span>

                        <?php echo star_rating_render($post->rating); ?>


                    </div>

                <?php endif; ?>

                <div class="featured-amenities mt-2 mb-2">

                    <div class="item">

                        <h4><?php echo e(__('Guests:')); ?></h4>

                        <span> <?php echo e($post->number_of_guest); ?> </span>

                    </div>

                    <div class="item">

                        <h4><?php echo e(__('Bedrooms:')); ?></h4>

                        <span><?php echo e($post->number_of_bedrooms); ?></span>

                    </div>

                    <div class="item">

                        <h4><?php echo e(__('Bathrooms:')); ?></h4>

                        <span><?php echo e($post->number_of_bathrooms); ?></span>

                    </div>

                    <div class="item">

                        <h4><?php echo e(__('Footage:')); ?></h4>

                        <span><?php echo e($post->size); ?> <?php echo e(get_option('unit_of_measure', 'm2')); ?></span>

                    </div>

                    <?php

                    $type = get_term_by('id', $post->home_type);

                    $type_name = $type ? get_translate($type->term_title) : '';

                    ?>

                    <?php if(!empty($type_name)): ?>

                        <div class="item">

                            <h4><?php echo e(__('Type:')); ?></h4>

                            <span><?php echo e($type_name); ?></span>

                        </div>

                    <?php endif; ?>

                </div>

                <h2 class="heading mt-3 mb-2"><?php echo e(__('Detail')); ?></h2>

                <?php echo balanceTags(get_translate($post->post_description)); ?>


                <?php

                $amenities = $post->tax_home_amenity;
                
                $categories = App\Models\Category::get();
                ?>

                <?php if(!empty($amenities) && is_object($amenities)): ?>


                    <h2 class="heading mt-3 mb-2"><?php echo e(__('Amenities')); ?></h2>
                    
                        <?php
                        $arr= array();
                        foreach($amenities as $amenity)
                        {
                            array_push($arr,$amenity->category_id);
                        }
                        $arr = array_unique($arr);
                        $category= array();
                         foreach($arr as $a)
                         {
                            $categoriesssss = App\Models\Category::where(['id'=>$a])->first(); 
                            array_push($category,$categoriesssss->name);
                         }
                        ?>
           

                   
                            <ul class="list-group">
                             <div class="amenities row">   
 <?php $cat_id=0;?>                               
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $cat_id++;?>

                                <div class="col-lg-6">
                                <li class="list-group-item">
  

<button class="btn btn-dark" style="width:100%;" type="button" data-toggle="collapse" data-target="#collapseExample<?php echo e($cat_id); ?>" aria-expanded="false" aria-controls="collapseExample<?php echo e($cat_id); ?>">
    <?php echo e(get_translate($cat)); ?>

  </button><br>                               
<div class="collapse" id="collapseExample<?php echo e($cat_id); ?>">                           

                            <?php $__currentLoopData = $amenities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amenity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <?php 
                            $categories = App\Models\Category::where(['name'=>$cat])->first();
                            $categoriesid = $categories->id;
                            
                            ?>
                            <?php if($amenity->category_id == $categoriesid): ?>
                                        <?php if(!$amenity->term_icon): ?>
            
                                        <i class="fe-check"></i>
            
                                        <?php else: ?>
            
                                        <?php echo get_icon($amenity->term_icon, '#2a2a2a', '16px', ''); ?>

            
                                        <?php endif; ?>
        
                                        <span class="title" style="font-size:16px;"><?php echo e(get_translate($amenity->term_title)); ?></span><br>

                              <?php endif; ?>

                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div></li></div>
                             
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>
                            </ul>

                    

                <?php endif; ?>

                <h2 class="heading mt-3 mb-2"><?php echo e(__('Policies')); ?></h2>

                <?php

                $checkIn = $post->checkin_time;

                $checkOut = $post->checkout_time;

                $enableCancellation = $post->enable_cancellation;

                $cancelBeforeDay = $post->cancel_before;

                $cancellationDetail = $post->cancellation_detail;

                ?>

                <?php if($checkIn): ?>

                    <div class="item d-inline-block mr-4 mb-3">

                        <span class="font-weight-bold"><i class=" ti-time mr-1"></i><?php echo e(__('Check-in Time:')); ?></span>

                        <span class="ml-2"><?php echo e($checkIn); ?></span>

                    </div>

                <?php endif; ?>

                <?php if($checkOut): ?>

                    <div class="item d-inline-block mr-4 mb-3">

                        <span class="font-weight-bold"><i class=" ti-time mr-1"></i><?php echo e(__('Check-out Time:')); ?></span>

                        <span class="ml-2"><?php echo e($checkOut); ?></span>

                    </div>

                <?php endif; ?>

                <div class="w-100"></div>

                <?php if($enableCancellation == 'on'): ?>

                    <div class="item d-inline-block mr-4 mb-3">

                        <span class="font-weight-bold"><?php echo e(__('Cancellation State:')); ?></span>

                        <span class="ml-2 small-info bg-success"><?php echo e(__('Enable')); ?></span>

                        <?php if($cancelBeforeDay == "flexible"): ?>
                        <span class="ml-2 small-info bg-success"> Flexible </span>
                        <?php endif; ?>
                        <?php if($cancelBeforeDay == "moderate"): ?>
                        <span class="ml-2 small-info bg-warning"> Moderate </span>
                        <?php endif; ?>
                        <?php if($cancelBeforeDay == "strict"): ?>
                        <span class="ml-2 small-info bg-danger"> Strict </span>
                        <?php endif; ?>

                    </div>
                    <?php if(get_translate($cancellationDetail)): ?>
                        <div class="w-100">
                        <span class="font-weight-bold"><?php echo e(__('Details: ')); ?></span>
                        <?php echo balanceTags(get_translate($cancellationDetail)); ?> 

                       
                        </div>

                    <?php endif; ?>
                    <br>
                    <div class="w-100">
                    <span class="font-weight-bold"><?php echo e(__('Cancellation Policies: ')); ?></span><br><br>
                    <div class="row">
                    <div class="col-4"><div class="alert alert-success" role="alert"><h5>Flexible</h5>Full Refund 1 Day Prior To Arrival</div></div>
                    <div class="col-4"><div class="alert alert-info" role="alert"><h5>Moderate</h5>Full Refund 5 Days Prior To Arrival</div></div>
                    <div class="col-4"><div class="alert alert-danger" role="alert"><h5>Strict</h5>Full Refund 1 Day Prior To Arrival</div></div>
                     
                    </div>
                    </div>

                    

                <?php endif; ?>

                <h2 class="heading mt-3 mb-2"><?php echo e(__('Availability')); ?></h2>

                <div class="hh-availability-wrapper">

                    <div class="hh-availability" style="display: revert;">

                        <input type="hidden" class="calendar_input"

                               data-id="<?php echo e($post->post_id); ?>"

                               data-encrypt="<?php echo e(hh_encrypt($post->post_id)); ?>"

                               data-action="<?php echo e(url('get-inventory-home')); ?>"

                               data-date-format="<?php echo e(hh_date_format_moment()); ?>">

                    </div>

                </div>

                <?php if($post->video): ?>

                    <h2 class="heading mt-3 mb-2"><?php echo e(__('Video')); ?></h2>

                    <div class="video-wrapper">

                        <?php echo balanceTags(get_video_embed_url(get_translate($post->video))); ?>


                    </div>

                <?php endif; ?>

                <h2 class="heading mt-3 mb-2"><?php echo e(__('On Map')); ?></h2>

                <?php

                $lat = $post->location_lat;

                $lng = $post->location_lng;

                $zoom = $post->location_zoom;



                enqueue_style('mapbox-gl-css');

                enqueue_style('mapbox-gl-geocoder-css');

                enqueue_script('mapbox-gl-js');

                enqueue_script('mapbox-gl-geocoder-js');

                ?>

                <div class="hh-mapbox-single" data-lat="<?php echo e($lat); ?>"

                     data-lng="<?php echo e($lng); ?>" data-zoom="<?php echo e($zoom); ?>"></div>

                <?php

                $author = get_user_by_id($post->author);

                $address = $author->address;

                $location = $author->location;

                $country = get_country_by_code($location);
                $description = $author->description;

                ?>

                <div class="w-100 mt-3"></div>

                <div class="hosted-author">

                    <div class="media">

                        <img src="<?php echo e(get_user_avatar($post->author, [64, 64])); ?>" alt="<?php echo e(__('User Avatar')); ?>"

                             class="avatar rounded-circle mr-3">

 
                        <div class="media-body">

                            <h2 class="heading mt-0 mb-1"><?php echo e(sprintf(__('Hosted by %s'), get_username($author->getUserId()) )); ?></h2>
                           <h5> 
                           <?php if(is_user_logged_in()): ?>
                            
                               <a class="nav-item nav-item--global" href="/chat?with_user=<?php echo e($author->getUserId()); ?>">
                            <i class="fas fa-comments"  style="font-size:24px;"></i>&nbsp;Chat With <?php echo e(get_username($author->getUserId())); ?>

                            </a> 
                             <?php else: ?>
                             <a href="javascript: void(0);" class="nav-item " data-toggle="modal" data-target="#hh-login-modal"><i class="fas fa-comments"  style="font-size:24px;"></i>&nbsp; Login To Chat With <?php echo e(get_username($author->getUserId())); ?></a>
                             <?php endif; ?>
                              </h5>
                            <?php if(!empty($address) || !empty($location)): ?>

                                <p class="location-author d-flex align-items-center">

                                    <?php if(!empty($address)): ?> <?php echo e($address); ?> <?php endif; ?>

                                    <?php if(!empty($location)): ?>, <?php echo e($country['name']); ?> <span

                                        class="ml-1"></span> <?php endif; ?>
                                         
                                    <span class="d-none d-sm-inline-block"><span class="dot"></span><?php echo e(sprintf(__('Joined in %s'), date(hh_date_format(), strtotime($author->created_at)))); ?></span>

                                </p>

                            <?php endif; ?>

                        </div>

                    </div>

                    <?php if(!empty($description)): ?>

                        <div class="clearfix mt-2">

                            <?php echo balanceTags(nl2br($description)); ?>


                        </div>

                    <?php endif; ?>

                    <?php do_action('hh_owner_information'); ?>

                </div>

            </div>
            
            <style>
            .col-sidebar{
                    display:fixed;
                } 
            @media    only screen and (max-height: 600px) {
                .col-sidebar{
                    display:none;
                } 
            }
                 
            </style>

            <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-sidebar" style="z-index:99999999999;padding-top:20px !important;">

                <?php

                enqueue_style('daterangepicker-css');

                enqueue_script('daterangepicker-js');

                enqueue_script('daterangepicker-lang-js');

                ?>

                <?php

                $booking_form = $post->booking_form;

                $text_external_link = $post->text_external_link;

                $external_link = $post->use_external_link;

                ?>
                
    



                <div id="form-book-home" class="list-group-item" 

                     data-real-price="<?php echo e(url('get-home-price-realtime')); ?>">

                    <div class="popup-booking-form-close"><?php echo get_icon('001_close', '#FFFFFF', '28px', '28px'); ?></div>

                    <div class="form-head text-center">
<span style="font-weight:600;">Price</span><hr>
                        <div class="price-wrapper">

                            <span class="price"><?php echo e(convert_price($post->base_price)); ?></span>

                            <?php if($post->booking_type != 'external_link'): ?>

                                <span class="unit">/<?php echo e($post->unit); ?></span>

                            <?php endif; ?>

                        </div><br>

                    </div>
                    
                    
                    
                    <div class="form-body relative">

                        <?php echo $__env->make('common.loading', ['class' => 'booking-loading'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php if($booking_form == 'instant_enquiry'): ?>

                            <ul class="nav nav-tabs nav-bordered row">

                                <li class="nav-item nav-item-booking-form-instant col">

                                    <a href="#booking-form-instant"

                                       data-toggle="tab"

                                       aria-expanded="false"

                                       class="nav-link <?php if($booking_form == 'instant_enquiry' ||$booking_form == 'instant'): ?> active <?php endif; ?>">

                                        <?php if($post->booking_type == 'external_link'): ?>

                                            <?php echo e(__('External')); ?>


                                        <?php else: ?>

                                            <?php echo e(__('Instant')); ?>


                                        <?php endif; ?>

                                    </a>

                                </li>

                                <li class="nav-item nav-item-booking-form-instant col">

                                    <a href="#booking-form-enquiry"

                                       data-toggle="tab"

                                       aria-expanded="false"

                                       class="nav-link <?php if($booking_form == 'enquiry'): ?> active <?php endif; ?>">

                                        <?php echo e(__('Enquiry')); ?>


                                    </a>

                                </li>

                            </ul>

                        <?php endif; ?>

                        <?php if($booking_form == 'instant_enquiry'): ?>

                            <div class="tab-content">

                                <?php endif; ?>

                                <?php if($booking_form == 'instant_enquiry' || $booking_form == 'instant'): ?>

                                    <div

                                        class="tab-pane <?php if($booking_form == 'instant_enquiry' ||$booking_form == 'instant'): ?> active <?php endif; ?>"

                                        id="booking-form-instant">

                                        <?php if($post->booking_type == 'external_link'): ?>

                                            <?php echo $__env->make('frontend.home.external-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                        <?php else: ?>

                                            <?php echo $__env->make('frontend.home.booking-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                        <?php endif; ?>

                                    </div>

                                <?php endif; ?>

                                <?php if($booking_form == 'instant_enquiry' || $booking_form == 'enquiry'): ?>

                                    <div class="tab-pane <?php if($booking_form == 'enquiry'): ?> active <?php endif; ?>"

                                         id="booking-form-enquiry">

                                        <form action="<?php echo e(url('home-send-enquiry-form')); ?>" data-google-captcha="yes"

                                              data-validation-id="form-send-enquiry"

                                              class="form-action form-sm has-reset" data-loading-from=".form-body">

                                            <div class="form-group">

                                                <label for="full-name-enquiry-form"><?php echo e(__('Full Name')); ?> <span

                                                        class="text-danger">*</span></label>

                                                <input id="full-name-enquiry-form" type="text" name="name"

                                                       class="form-control has-validation" data-validation="required">

                                            </div>

                                            <div class="form-group">

                                                <label for="email-enquiry-form"><?php echo e(__('Email')); ?> <span

                                                        class="text-danger">*</span></label>

                                                <input id="email-enquiry-form" type="email" name="email"

                                                       class="form-control has-validation"

                                                       data-validation="required|email">

                                            </div>

                                            <div class="form-group">

                                                <label for="message-enquiry-form"><?php echo e(__('Message')); ?> <span

                                                        class="text-danger">*</span></label>

                                                <textarea id="message-enquiry-form" class="form-control has-validation"

                                                          name="message" data-validation="required"></textarea>

                                            </div>

                                            <div class="form-group">

                                                <input type="submit" class="btn btn-primary btn-block text-uppercase"

                                                       name="sm"

                                                       value="<?php echo e(__('Send a Request')); ?>">

                                            </div>

                                            <input type="hidden" name="post_id" value="<?php echo e($post->post_id); ?>">

                                            <input type="hidden" name="post_encrypt"

                                                   value="<?php echo e(hh_encrypt($post->post_id)); ?>">

                                            <div class="form-message"></div>

                                        </form>

                                    </div>

                                <?php endif; ?>

                                <?php if($booking_form == 'instant_enquiry'): ?>

                            </div>

                        <?php endif; ?>

                    </div>
                    
                    

                </div>
                
       

            </div>

        </div>

        <?php

        $lat = $post->location_lat;

        $lng = $post->location_lng;

        $list_services = \App\Controllers\Services\HomeController::get_inst()->listOfHomes([

            'number' => 4,

            'location' => [

                'lat' => $lat,

                'lng' => $lng,

                'radius' => 25

            ],

            'orderby' => 'distance',

            'order' => 'asc',

            'not_in' => [$post->post_id]

        ]);

        ?>

        <?php if(count($list_services['results'])): ?>

            <h2 class="heading mt-3 mb-2"><?php echo e(__('Homes Near By')); ?></h2>

            <div class="hh-list-of-services">

                <div class="row">

                    <?php $__currentLoopData = $list_services['results']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-12 col-md-6 col-lg-3">

                            <?php echo $__env->make('frontend.home.loop.grid', ['item' => $item, 'show_distance' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>

        <?php endif; ?>

        <?php if(enable_review()): ?>

            <div class="row">

                <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-content">

                    <?php echo $__env->make('frontend.home.review', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>

            </div>

        <?php endif; ?>

    </div>

    <div class="mobile-book-action">

        <div class="container">

            <div class="action-inner">

                <div class="action-price-wrapper">

                    <span class="price"><?php echo e(convert_price($post->base_price)); ?></span>

                    <span class="unit">/<?php echo e($post->unit); ?></span>

                </div><br>

                <a class="btn btn-primary action-button" id="mobile-check-availability"><?php echo e(__('Check Availability')); ?></a>

            </div>

        </div>

    </div>

</div>

<?php echo $__env->make('frontend.components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/frontend/home/default.blade.php ENDPATH**/ ?>