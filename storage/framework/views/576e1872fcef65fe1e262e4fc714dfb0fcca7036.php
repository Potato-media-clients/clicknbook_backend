<?php

global $post;

?>

<form class="form-action" action="<?php echo e(url('add-to-cart-home')); ?>" method="post" data-loading-from=".form-body"

      data-validation-id="form-add-cart">

    <?php if($post->booking_type == 'per_night'): ?>

        <div class="form-group">

            <label for="checkinout"><?php echo e(__('Check In/Out')); ?></label>

            <div class="date-wrapper date-double"

                 data-date-format="<?php echo e(hh_date_format_moment()); ?>"

                 data-action="<?php echo e(url('get-home-availability-single')); ?>">

                <input type="text" class="input-hidden check-in-out-field"

                       name="checkInOut" data-home-id="<?php echo e($post->post_id); ?>"

                       data-home-encrypt="<?php echo e(hh_encrypt($post->post_id)); ?>">

                <input type="text" class="input-hidden check-in-field"

                       name="checkIn">

                <input type="text" class="input-hidden check-out-field"

                       name="checkOut">

                <span class="check-in-render"

                      data-date-format="<?php echo e(hh_date_format_moment()); ?>"></span>

                <span class="divider"></span>

                <span class="check-out-render"

                      data-date-format="<?php echo e(hh_date_format_moment()); ?>"></span>

            </div>

        </div>

    <?php elseif($post->booking_type == 'per_hour'): ?>

        <div class="form-group">

            <label for="checkinout"><?php echo e(__('Check In')); ?></label>

            <div class="date-wrapper date-single"

                 data-date-format="<?php echo e(hh_date_format_moment()); ?>"

                 data-action-time="<?php echo e(url('get-home-availability-time-single')); ?>"

                 data-action="<?php echo e(url('get-home-availability-single')); ?>">

                <input type="text"

                       class="input-hidden check-in-out-single-field"

                       name="checkInOut" data-home-id="<?php echo e($post->post_id); ?>"

                       data-home-encrypt="<?php echo e(hh_encrypt($post->post_id)); ?>">

                <input type="text" class="input-hidden check-in-field"

                       name="checkIn">

                <input type="text" class="input-hidden check-out-field"

                       name="checkOut">

                <span class="check-in-render"

                      data-date-format="<?php echo e(hh_date_format_moment()); ?>"></span>

            </div>

        </div>

        <div class="form-group form-group-date-time d-none">

            <label><?php echo e(__('Time')); ?></label>

            <div class="date-wrapper date-time">

                <div class="date-render check-in-render"

                     data-time-format="<?php echo e(hh_time_format()); ?>">

                    <div class="render"><?php echo e(__('Start Time')); ?></div>

                    <div class="dropdown-time">



                    </div>

                    <input type="hidden" name="startTime" value=""

                           class="input-checkin"/>

                </div>

                <span class="divider"></span>

                <div class="date-render check-out-render"

                     data-time-format="<?php echo e(hh_time_format()); ?>">

                    <div class="render"><?php echo e(__('End Time')); ?></div>

                    <div class="dropdown-time">



                    </div>

                    <input type="hidden" name="endTime" value=""

                           class="input-checkin"/>

                </div>

            </div>

        </div>

    <?php endif; ?>

    <?php

    $max_guest = (int)$post->number_of_guest;

    ?>

    <div class="form-group">

        <label for="guest"><?php echo e(__('Guests')); ?></label>

        <div

            class="guest-group <?php if($post->enable_extra_guest == 'on'): ?> has-extra-guest <?php endif; ?>">

            <button type="button" class="btn btn-light dropdown-toggle"

                    data-toggle="dropdown"

                    data-text-guest="<?php echo e(__('Guest')); ?>"

                    data-text-guests="<?php echo e(__('Guests')); ?>"

                    data-text-infant="<?php echo e(__('Infant')); ?>"

                    data-text-infants="<?php echo e(__('Infants')); ?>"

                    aria-haspopup="true" aria-expanded="false">

                &nbsp;

            </button>

            <div class="dropdown-menu dropdown-menu-right">

                <div class="group">

                    <span class="pull-left"><?php echo e(__('Adults')); ?></span>

                    <div class="control-item">

                        <i class="decrease ti-minus"></i>

                        <input type="number" min="1" step="1"

                               max="<?php echo e($max_guest); ?>"

                               name="num_adults"

                               value="1">

                        <i class="increase ti-plus"></i>

                    </div>

                </div>

                <div class="group">

                    <span class="pull-left"><?php echo e(__('Children')); ?></span>

                    <div class="control-item">

                        <i class="decrease ti-minus"></i>

                        <input type="number" min="0" step="1"

                               max="<?php echo e($max_guest); ?>"

                               name="num_children"

                               value="0">

                        <i class="increase ti-plus"></i>

                    </div>

                </div>

                <div class="group">

                    <span class="pull-left"><?php echo e(__('Infants')); ?></span>

                    <div class="control-item">

                        <i class="decrease ti-minus"></i>

                        <input type="number" min="0" step="1"

                               max="<?php echo e($max_guest); ?>"

                               name="num_infants"

                               value="0">

                        <i class="increase ti-plus"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="form-group">

        <?php

        $requiredExtra = $post->required_extra;

        ?>

        <?php if($requiredExtra): ?>

            <div class="extra-services">

                <label class="d-block mb-2" for="extra-services">

                    <?php echo e(__('Extra')); ?>


                    <span class="text-danger f12"><?php echo e(__('(required)')); ?></span>

                    <a href="#extra-collapse" class="right"

                       data-toggle="collapse"><?php echo get_icon('002_download_1', '#2a2a2a','15px'); ?></a>

                </label>

                <div id="extra-collapse" class="collapse show">

                    <?php $__currentLoopData = $requiredExtra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ex): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="extra-item d-flex">

                            <span

                                class="name"><?php echo e(get_translate($ex['name'])); ?></span>

                            <span

                                class="price ml-auto"><?php echo e(convert_price($ex['price'])); ?></span>

                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>

        <?php endif; ?>

        <?php

        $extra = $post->not_required_extra;

        ?>

        <?php if($extra): ?>

            <div class="extra-services">

                <label class="d-block mb-2" for="extra-services">

                    <span><?php echo e(__('Extra (optional)')); ?></span>

                    <a href="#extra-not-required-collapse" class="right"

                       data-toggle="collapse"><?php echo get_icon('002_download_1', '#2a2a2a','15px'); ?></a>

                </label>

                <div id="extra-not-required-collapse" class="collapse">

                    <?php $__currentLoopData = $extra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ex): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="extra-item d-flex">

                            <div class="checkbox checkbox-success">

                                <input

                                    id="extra-service-<?php echo e($ex['name_unique']); ?>"

                                    class="input-extra"

                                    type="checkbox" name="extraServices[]"

                                    value="<?php echo e($ex['name_unique']); ?>">

                                <label

                                    for="extra-service-<?php echo e($ex['name_unique']); ?>">

                                    <span

                                        class="name"><?php echo e(get_translate($ex['name'])); ?></span>

                                </label>

                            </div>

                            <span

                                class="price ml-auto"><?php echo e(convert_price($ex['price'])); ?></span>

                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>

        <?php endif; ?>

    </div>

    <div class="form-group form-render">

    </div>

    <div class="form-group mt-2">

        <input type="hidden" name="homeID" value="<?php echo e($post->post_id); ?>">

        <input type="hidden" name="homeEncrypt"

               value="<?php echo e(hh_encrypt($post->post_id)); ?>">

        <button type="submit" class="btn btn-primary btn-block text-uppercase"

               name="sm">
            
            <div class="wrapper">
  <span>B</span>
  <span>o</span>
  <span>o</span>
  <span>K</span>
  <span>N</span>
  <span>o</span>
  <span>w</span>
</div>
<!--<?php echo e(__('Book Now')); ?>-->
            
            </button>

            
    </div>

    <div class="form-message"></div>

</form>

<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/frontend/home/booking-form.blade.php ENDPATH**/ ?>