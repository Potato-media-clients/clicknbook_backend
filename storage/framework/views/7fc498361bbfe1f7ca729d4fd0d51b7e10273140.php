<div class="hh-service-item home list" data-lng="<?php echo e($item->location_lng); ?>"
     data-lat="<?php echo e($item->location_lat); ?>" data-id="<?php echo e($item->post_id); ?>">
    <div class="item-inner">
        <div class="thumbnail-wrapper">
            <?php if($item->is_featured == 'on'): ?>
                <div class="is-featured"><?php echo e(get_option('featured_text', __('Featured'))); ?></div>
            <?php endif; ?>
            <?php if(!empty($item->gallery)): ?>
                <?php
                $galleries = explode(',', $item->gallery);
                $featured_image = $item->thumbnail_id;
                if(!empty($featured_image)){
                    array_unshift($galleries, $featured_image);
                }
                ?>
                <div id="hh-item-carousel-<?php echo e($item->post_id); ?>" class="hh-item-carousel carousel slide"
                     data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $imageID): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="carousel-item <?php if($key == 0): ?> active <?php endif; ?>">
                                <a href="<?php echo e(get_the_permalink($item->post_id, $item->post_slug)); ?>"
                                   class="carousel-cell">
                                    <img src="<?php echo e(get_attachment_url($imageID, [400, 300])); ?>"
                                         alt="<?php echo e(get_translate($item->post_title)); ?>"/>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <a class="carousel-control-prev" href="#hh-item-carousel-<?php echo e($item->post_id); ?>" role="button"
                       data-slide="prev">
                        <i class="ti-angle-left"></i>
                        <span class="sr-only"><?php echo e(__('Previous')); ?></span>
                    </a>
                    <a class="carousel-control-next" href="#hh-item-carousel-<?php echo e($item->post_id); ?>" role="button"
                       data-slide="next">
                        <i class="ti-angle-right"></i>
                        <span class="sr-only"><?php echo e(__('Next')); ?></span>
                    </a>
                </div>
            <?php else: ?>
                <a href="<?php echo e(get_the_permalink($item->post_id, $item->post_slug)); ?>" class="no-gallery">
                    <img src="<?php echo e(placeholder_image([400, 300])); ?>" alt="<?php echo e(get_translate($item->post_title)); ?>"
                         class="img-fluid"/>
                </a>
            <?php endif; ?>
        </div>
        <div class="content">
            <div class="d-flex justify-content-between align-items-center">
                <div class="home-type">
                    <?php
                    $type = get_term_by('id', $item->home_type);
                    $type_name = $type ? get_translate($type->term_title) : '';
                    ?>
                    <?php echo e($type_name); ?>

                </div>
                <?php if(enable_review()): ?>
                    <div class="rating">
                        <?php
                        $review_number = get_comment_number($item->post_id, 'home');
                        if ($review_number > 0) {
                            echo '<i class="fe-star-on"></i> ';
                            echo '<b>' . esc_attr($item->rating) . '</b> ';
                        }
                        echo '<span>(';
                        echo _n("[0::No reviews][1::%s review][2::%s reviews]", $review_number);
                        echo ')</span>';
                        ?>
                    </div>
                <?php endif; ?>
            </div>
            <h3 class="title">
                <a href="<?php echo e(get_the_permalink($item->post_id, $item->post_slug)); ?>"><?php echo e(get_translate($item->post_title)); ?></a>
            </h3>
            <p class="address text-overflow"><i class="fe-map-pin mr-1"></i><?php echo e(get_short_address($item)); ?></p>
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
            <div class="meta-footer">
                <div class="price-wrapper">
                    <span class="price"><?php echo e(convert_price($item->base_price)); ?></span><span
                        class="unit">/<?php echo e(get_home_unit($item)); ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/frontend/home/loop/list.blade.php ENDPATH**/ ?>