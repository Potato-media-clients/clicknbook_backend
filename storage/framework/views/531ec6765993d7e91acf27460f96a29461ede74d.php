<div class="hh-service-item home grid" data-plugin="matchHeight">
    <a href="<?php echo e(get_the_permalink($item->post_id, $item->post_slug)); ?>">
        <div class="thumbnail">
            <?php if($item->is_featured == 'on'): ?>
                <div class="is-featured"><?php echo e(get_option('featured_text', __('Featured'))); ?></div>
            <?php endif; ?>
            <div class="thumbnail-outer">
                <div class="thumbnail-inner">
                    <img src="<?php echo e(get_attachment_url($item->thumbnail_id, [650, 550])); ?>"
                         alt="<?php echo e(get_attachment_alt($item->thumbnail_id )); ?>"
                         class="img-fluid">
                </div>
            </div>
            <div class="author">
                <img src="<?php echo e(get_user_avatar($item->author, [45, 45])); ?>" alt="<?php echo e(get_username($item->author)); ?>">
            </div>
        </div>
    </a>
    <div class="detail">
        <h2 class="title text-overflow"><a
                href="<?php echo e(get_home_permalink($item->post_id, $item->post_slug)); ?>"><?php echo e(get_translate($item->post_title)); ?></a>
        </h2>
        <?php if($item->location_address): ?>
            <p class="text-muted text-overflow mb-1"><i class="fe-map-pin mr-1"></i>
                <?php echo e(get_short_address($item)); ?>

                <?php if(isset($show_distance) && $show_distance && isset($item->distance)): ?>
                    <?php
                    $distance = round($item->distance, 2);
                    ?>
                    <strong>(<?php echo e($distance); ?><?php echo e(__('km')); ?>)</strong>
                <?php endif; ?>
            </p>
        <?php endif; ?>
        <div class="facilities">
            <div class="item max-people">
                <?php echo e(_n("[0::%s guests][1::%s guest][2::%s guests]", (int)$item->number_of_guest)); ?>

            </div>
            <div class="item max-bedrooms">
                <?php echo e(_n("[0::%s bedrooms][1::%s bedroom][2::%s bedrooms]", (int)$item->number_of_bedrooms)); ?>

            </div>
            <div class="item max-baths">
                <?php echo e(_n("[0::%s bathrooms][1::%s bathroom][2::%s bathrooms]", (int)$item->number_of_bathrooms)); ?>

            </div>
        </div>
        <div class="w-100 mt-1"></div>
        <?php if(enable_review()): ?>
            <?php echo $__env->make('frontend.components.star', ['rate' => $item->rating, 'show_text' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <div class="price-wrapper <?php echo e((empty($item->rating) || !enable_review()) ? 'left' : ''); ?>">
            <span class="price"><?php echo e(convert_price($item->base_price)); ?></span><span
                class="unit">/<?php echo e(get_home_unit($item)); ?></span>
        </div>
    </div>
</div>
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/frontend/home/loop/grid.blade.php ENDPATH**/ ?>