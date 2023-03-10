<?php echo $__env->make('frontend.components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php

enqueue_style('home-slider');

enqueue_script('home-slider');



enqueue_style('mapbox-gl-css');

enqueue_style('mapbox-gl-geocoder-css');

enqueue_script('mapbox-gl-js');

enqueue_script('mapbox-gl-geocoder-js');



enqueue_style('daterangepicker-css');

enqueue_script('daterangepicker-js');

enqueue_script('daterangepicker-lang-js');



enqueue_style('iconrange-slider');

enqueue_script('iconrange-slider');



enqueue_script('owl-carousel');

enqueue_style('owl-carousel');

enqueue_style('owl-carousel-theme');



$map_lat = get_option('contact_map_lat');

$map_lng = get_option('contact_map_lng');

$contact_detail = get_option('contact_detail');

$banner_bg = "https://clicknbook.co/public/images/contact us.png";

?>

<?php if($map_lat && $map_lng): ?>

    <img src="<?php echo e($banner_bg); ?>" style="center center/cover" />

    <br><br>

    <div id="contact-us-map" data-lat="<?php echo e($map_lat); ?>" data-lng="<?php echo e($map_lng); ?>" >

        <div class="map-render"></div>

        <br><br><br><br><div class="contact-us-detail" >

            <?php echo balanceTags($contact_detail); ?>


            <form  action="<?php echo e(url('contact-us-post')); ?>" class="form-sm mt-3 form-action form-contact-us" method="post"

                  data-validation-id="form-contact-us"

                  data-google-captcha="yes">

                <h3 class="mb-3"><?php echo e(__('Stay in touch with us')); ?></h3>

                <div class="row">

                    <div class="col-12 col-md-6">

                        <div class="form-group">

                            <input id="contact_email" type="text" class="form-control has-validation"

                                   data-validation="required|email" name="email" placeholder="<?php echo e(__('Email')); ?>">

                        </div>

                    </div>

                    <div class="col-12 col-md-6">

                        <div class="form-group">

                            <input id="contact_title" type="text" class="form-control has-validation"

                                   data-validation="required" name="title" placeholder="<?php echo e(__('Title')); ?>">

                        </div>

                    </div>

                </div>

                <div class="form-group">

                    <textarea name="message" id="contact_message" class="form-control"

                              placeholder="<?php echo e(__('Your Message')); ?>"></textarea>

                </div>

                <input type="submit" class="btn btn-primary" name="submit" value="<?php echo e(__('Send Message')); ?>">

                <div class="form-message"></div>

            </form>

        </div>

    </div>

<?php endif; ?>

<?php echo $__env->make('frontend.components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/frontend/contact-us.blade.php ENDPATH**/ ?>