<?php echo $__env->make('frontend.components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php

enqueue_style('mapbox-gl-css');

enqueue_style('mapbox-gl-geocoder-css');

enqueue_script('mapbox-gl-js');

enqueue_script('mapbox-gl-geocoder-js');

enqueue_script('search-home-js');



$showmap = request()->get('showmap', 'yes');

?>


<div class="hh-search-result" data-url="<?php echo e(get_home_search_page()); ?>">

    <?php echo $__env->make('frontend.home.search.search_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="hh-search-content-wrapper <?php if($showmap == 'no'): ?> no-map <?php endif; ?>">

        <?php echo $__env->make('common.loading', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="hh-search-results-render" data-url="<?php echo e(get_home_search_page()); ?>">

            <div class="render">

                <div class="hh-search-results-string">

                    <span class="item-found"><?php echo e(__('Searching home...')); ?></span>

                </div>

                <div class="hh-search-content">

                    <div class="service-item list">



                    </div>

                </div>

                <div class="hh-search-pagination">



                </div>

            </div>

        </div>

        <div class="hh-search-results-map">

            <?php
            $lat = request()->get('lat');

            $lng = request()->get('lng');

            $zoom = request()->get('zoom', 10);

            $in_map = true;

            ?>

            <div class="hh-mapbox-search" data-zoom="<?php echo e($zoom); ?>"></div>

            <div class="hh-close-map-popup" id="hide-map-mobile"><?php echo e(__('Close')); ?></div>

            <div class="hh-map-tooltip">

                <div class="checkbox checkbox-success">

                    <input id="chk-map-move" type="checkbox" name="map_move" value="1">

                    <label for="chk-map-move"><?php echo e(__('Search as I move the map')); ?></label>

                </div>

                <?php echo $__env->make('common.loading', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

        </div>

    </div>

</div>

<?php echo $__env->make('frontend.components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/frontend/home/search/search.blade.php ENDPATH**/ ?>