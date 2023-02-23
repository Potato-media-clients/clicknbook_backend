<?php echo $__env->make('frontend.components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">-->
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>-->
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



?>

<div class="home-page pb-5">

    <div class="hh-search-form-wrapper">

        <div class="ots-slider-wrapper" data-style="full-screen" data-slider="ots-slider">

            <div class="ots-slider">

                <?php

                $sliders = get_option('home_slider');

                $sliders = explode(',', $sliders);

                ?>

                <?php if(!empty($sliders) && is_array($sliders)): ?>

                    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php

                        $url = get_attachment_url($id);

                        ?>

                        <div class="item">

                            <div class="outer has-background-image" data-src="<?php echo e($url); ?>"

                                 style="background-image: url('<?php echo e($url); ?>')"></div>

                            <div class="inner">

                                <div class="img has-background-image" data-src="<?php echo e($url); ?>"

                                     style="background-image: url('<?php echo e($url); ?>');"></div>

                            </div>

                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>

            </div>

        </div>

        <div class="hh-search-form-section">

            <div class="container">

                <div class="hh-search-form">

                    <?php echo $__env->make('frontend.home.search.search-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>

            </div>

        </div>

    </div>

    <div class="container">

        <!-- Home Types -->

        <?php

        $home_types = get_terms('home-type', true);

        ?>

        <?php if(count($home_types) > 0): ?>

            <h2 class="h3 mt-4"><?php echo e(__('Find a Home type')); ?></h2>

            <div class="hh-list-terms mt-3">

                <?php if(count($home_types)): ?>

                    <?php

                    $responsive = [

                        0 => [

                            'items' => 1

                        ],

                        768 => [

                            'items' => 2

                        ],

                        992 => [

                            'items' => 3

                        ],

                        1200 => [

                            'items' => 4

                        ]

                    ];

                    ?>

                    <div class="hh-carousel carousel-padding nav-style2"

                         data-responsive="<?php echo e(base64_encode(json_encode($responsive))); ?>" data-margin="15" data-loop="1">

                        <div class="owl-carousel">

                            <?php $__currentLoopData = $home_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                <?php
                                $url = get_attachment_url($item->term_image, [350, 300]);

                                ?>

                                <div class="item">

                                    <div class="hh-term-item">

                                        <a href="<?php echo e(get_home_search_page('?home-type=' . $item->term_id)); ?>">

                                            <div class="row">

                                                <div class="col-6">

                                                    <div class="thumbnail has-matchHeight">

                                                        <div class="thumbnail-outer">

                                                            <div class="thumbnail-inner">

                                                                <img src="<?php echo e($url); ?>"

                                                                     alt="<?php echo e(get_attachment_alt($item->term_image )); ?>"

                                                                     class="img-fluid">

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-6 d-flex align-items-center">

                                                    <div class="clearfix">

                                                        <h4><?php echo e(get_translate($item->term_title)); ?></h4>

                                                        <?php

                                                        $home_count = count_home_in_home_type($item->term_id);

                                                        ?>

                                                        <p class="text-muted"><?php echo e(_n("[0::%s Homes][1::%s Home][2::%s Homes]", $home_count)); ?></p>

                                                    </div>

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                        <div class="owl-nav">

                            <a href="javascript:void(0)"

                               class="prev"><i class="ti-angle-left"></i></a>

                            <a href="javascript:void(0)"

                               class="next"><i class="ti-angle-right"></i></a>

                        </div>

                    </div>

                <?php endif; ?>

            </div>

        <?php endif; ?>

    <!--Featured Homes -->

        <?php if(is_enable_service('home')): ?>

            <?php

            $list_services = \App\Controllers\Services\HomeController::get_inst()->listOfHomes([

                'number' => 100,

                'is_featured' => 'on'

            ]);

            ?>

            <?php if(count($list_services['results'])): ?>

                <h2 class="h3 mt-4"><?php echo e(__('Featured Homes')); ?></h2>

                <p><?php echo e(__('Browse beautiful places to stay with all the comforts of home, plus more')); ?></p>

                <div class="hh-list-of-services">

                    <?php

                    $responsive = [

                        0 => [

                            'items' => 1

                        ],

                        768 => [

                            'items' => 2

                        ],

                        992 => [

                            'items' => 3

                        ],

                        1200 => [

                            'items' => 4

                        ],

                    ];

                    ?>

                    <div class="hh-carousel carousel-padding nav-style2"

                         data-responsive="<?php echo e(base64_encode(json_encode($responsive))); ?>" data-margin="15" data-loop="1">

                        <div class="owl-carousel">

                            <?php $__currentLoopData = $list_services['results']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="item">

                                    <?php echo $__env->make('frontend.home.loop.grid', ['item' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                        <div class="owl-nav owl-item">

                            <a href="javascript:void(0)"

                               class="prev"><i class="ti-angle-left"></i></a>

                            <a href="javascript:void(0)"

                               class="next"><i class="ti-angle-right"></i></a>

                        </div>

                    </div>

                </div>

            <?php endif; ?>

        <?php endif; ?>
        <?php if(is_enable_service('home')): ?>

            <?php

            $list_services = \App\Controllers\Services\HomeController::get_inst()->listOfHomes1([

                'number' => 100,

                'is_featured' => 'on'

            ]);

            ?>

            <?php if(count($list_services['results'])): ?>

                <div class="hh-list-of-services">

                    <?php

$loop=true;
$autoplay=true;
$autoplayTimeout=1000;
                    $responsive = [

                        0 => [

                            'items' => 1

                        ],

                        768 => [

                            'items' => 2

                        ],

                        992 => [

                            'items' => 3

                        ],

                        1200 => [

                            'items' => 4

                        ],

                    ];

                    ?>

                    <div class="hh-carousel carousel-padding nav-style2"

                         data-responsive="<?php echo e(base64_encode(json_encode($responsive))); ?>" data-margin="15" data-loop="1">

                        <div class="owl-carousel">

                            <?php $__currentLoopData = $list_services['results']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="item">

                                    <?php echo $__env->make('frontend.home.loop.grid', ['item' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                        <div class="owl-nav">

                            <a href="javascript:void(0)"

                               class="prev"><i class="ti-angle-left"></i></a>

                            <a href="javascript:void(0)"

                               class="next"><i class="ti-angle-right"></i></a>

                        </div>

                    </div>

                </div>

            <?php endif; ?>

        <?php endif; ?>
    </div>

    <!-- Call to action -->

    <?php

    $page_id = get_option('home_call_to_action_page');

    $cta_background_id = get_option('home_call_to_action_background', '');

    ?>

    <?php if(!empty($page_id)): ?>

        <?php

        $link = get_permalink_by_id($page_id, 'page');

        $cta_background_url = get_attachment_url($cta_background_id, 'full', false);

        ?>

        <div class="container mt-4">

            <div class="call-to-action pl-4 pr-4 has-background-image" data-src="https://clicknbook.co/public/storage/amman.png"

                 style="background-image: url('<?php echo e($cta_background_url); ?>')">

                <div class="row">

                    <div class="col-lg-8">

                        <h5 class="main-text"><?php echo e(__('The most exciting trip this summer')); ?></h5>

                        <p class="sub-text"><?php echo e(__('Enjoy moments at the beach Maldives with friends')); ?></p>

                    </div>

                    <div class="col-lg-4">

                        <a href="#myModal" data-toggle="modal" class="btn btn-primary right"><?php echo e(__('Watch now')); ?></a>

                    </div>

                </div>

            </div>

        </div>

    <?php endif; ?>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Jordan</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe id="cartoonVideo" class="embed-responsive-item" width="720" height="480" src="//www.youtube.com/embed/WC4g_lzB7UM" allowfullscreen></iframe>
                  </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">

        <!-- Destination -->

        <?php

        $locations = get_option('home_top_destination');

        ?>

        <?php if(!empty($locations)): ?>

            <h2 class="h3 mt-4"><?php echo e(__('Top destinations')); ?></h2>

            <p><?php echo e(__('Browse beautiful places to stay with all the comforts of home, plus more')); ?></p>

            <div class="hh-list-destinations">

                <?php

                $responsive = [

                    0 => [

                        'items' => 1

                    ],

                    768 => [

                        'items' => 2

                    ],

                    992 => [

                        'items' => 3

                    ],

                ];

                ?>

                <div class="hh-carousel carousel-padding nav-style2"

                     data-responsive="<?php echo e(base64_encode(json_encode($responsive))); ?>" data-margin="15" data-loop="1">

                    <div class="owl-carousel">
                        <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php
                            $lat = $location['lat'];

                            $lng = $location['lng'];

                            $address = get_translate($location['name']);

                            $location_query = [

                                'lat' => $lat,

                                'lng' => $lng,

                                'address' => urlencode($address),

                            ];

                            $location_url = get_search_page('home');

                            $location_url = add_query_arg($location_query, $location_url);

                            $rand = rand(1, 6);

                            ?>

                            <div class="item">

                                <div class="hh-destination-item">

                                    <a href="<?php echo e($location_url); ?>">

                                        <div class="thumbnail has-matchHeight">

                                            <div class="thumbnail-outer">

                                                <div class="thumbnail-inner">

                                                    <img src="<?php echo e(get_attachment_url($location['image'])); ?>"

                                                         alt="<?php echo e(get_attachment_alt($location['image'] )); ?>"

                                                         class="img-fluid">

                                                </div>

                                            </div>

                                            <div class="detail">

                                                <h2 class="text-center des-paterm-<?php echo e($rand); ?>"><?php echo e($address); ?></h2>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                    <div class="owl-nav">

                        <a href="javascript:void(0)"

                           class="prev"><i class="ti-angle-left"></i></a>

                        <a href="javascript:void(0)"

                           class="next"><i class="ti-angle-right"></i></a>

                    </div>

                </div>

            </div>

        <?php endif; ?>

    <!-- Home in New York -->

        <?php if(is_enable_service('home')): ?>

            <?php

            $list_services = \App\Controllers\Services\HomeController::get_inst()->listOfHomes([

                'number' => 4,

                'location' => [

                    'lat' => '40.72939317669241',

                    'lng' => '-73.99034249572969',

                    'radius' => 50

                ]

            ]);

            ?>

            <?php if(count($list_services['results'])): ?>

                <h2 class="h3 mt-4"><?php echo e(__('Homes in New York')); ?></h2>

                <p><?php echo e(__('Browse beautiful places to stay with all the comforts of home, plus more')); ?></p>

                <div class="hh-list-of-services">

                    <div class="row">

                        <?php $__currentLoopData = $list_services['results']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="col-12 col-md-6 col-lg-3">

                                <?php echo $__env->make('frontend.home.loop.grid', ['item' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                </div>

            <?php endif; ?>

        <?php endif; ?>

    </div>

    <!-- Testimonial -->

    <?php

    $testimonials = get_option('testimonial', []);

    $responsive = [

        0 => [

            'items' => 1

        ],

        768 => [

            'items' => 2

        ],

        992 => [

            'items' => 2

        ],

        1200 => [

            'items' => 3

        ],

    ];

    $testimonial_bgr = get_option('testimonial_background', '#dd556a');

    ?>

    <?php if(count($testimonials)): ?>

        <div class="section section-background pt-5 pb-5 mt-4" style="background-color: <?php echo e($testimonial_bgr); ?>;">

            <div class="container">

                <h2 class="h3 mt-0 c-white"><?php echo e(__('Say about Us')); ?></h2>

                <p class="c-white"><?php echo e(__('Browse beautiful places to stay with all the comforts of home, plus more')); ?></p>

                <div class="hh-testimonials">

                    <div class="hh-carousel carousel-padding nav-style2"

                         data-responsive="<?php echo e(base64_encode(json_encode($responsive))); ?>" data-margin="30" data-loop="1">

                        <div class="owl-carousel">

                            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="item">

                                    <div class="testimonial-item">

                                        <div class="testimonial-inner">

                                            <div class="author-avatar">

                                                <img

                                                    src="<?php echo e(get_attachment_url($testimonial['author_avatar'], [80, 80])); ?>"

                                                    alt="<?php echo e(get_translate($testimonial['author_name'])); ?>"

                                                    class="img-fluid">

                                                <i class="mdi mdi-format-quote-open hh-icon"></i>

                                            </div>

                                            <div class="author-rate">

                                                <?php echo $__env->make('frontend.components.star', ['rate' => (int) $testimonial['author_rate']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                            </div>

                                            <div class="author-comment">

                                                <?php echo e(get_translate($testimonial['author_comment'])); ?>


                                            </div>

                                            <h2 class="author-name">

                                                <?php echo e(get_translate($testimonial['author_name'])); ?>


                                            </h2>



                                            <?php if($testimonial['date']): ?>

                                                <div

                                                    class="author-date"><?php echo e(sprintf(__('on %s'), date(hh_date_format(), strtotime($testimonial['date'])))); ?></div>

                                            <?php endif; ?>

                                        </div>

                                    </div>

                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                        <div class="owl-nav">

                            <a href="javascript:void(0)"

                               class="prev"><i class="ti-angle-left"></i></a>

                            <a href="javascript:void(0)"

                               class="next"><i class="ti-angle-right"></i></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

<?php endif; ?>

<!-- List of Blog -->

    <div class="container">

        <?php

        $list_services = \App\Controllers\PostController::get_inst()->listOfPosts([

            'number' => 2

        ]);

        $responsive = [

            0 => [

                'items' => 1

            ]

        ];

        ?>

        <?php if(count($list_services['results'])): ?>

            <h2 class="h3 mt-4 mb-3"><?php echo e(__('The latest from Blog')); ?></h2>

            <div class="hh-list-of-blog">

                <div class="row">

                    <?php $__currentLoopData = $list_services['results']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-12 col-md-6">

                            <div class="hh-blog-item style-2">

                                <a href="<?php echo e(get_the_permalink($item->post_id, $item->post_slug, 'post')); ?>">

                                    <div class="thumbnail">

                                        <div class="thumbnail-outer">

                                            <div class="thumbnail-inner">

                                                <img src="<?php echo e(get_attachment_url($item->thumbnail_id, 'full')); ?>"

                                                     alt="<?php echo e(get_attachment_alt($item->thumbnail_id )); ?>"

                                                     class="img-fluid">

                                            </div>

                                        </div>

                                    </div>

                                </a>

                                <div class="category"><?php echo e(__('Action')); ?>


                                    <div class="date"><?php echo e(date(hh_date_format(), $item->created_at)); ?></div>

                                </div>

                                <h2 class="title"><a

                                        href="<?php echo e(get_the_permalink($item->post_id, $item->post_slug, 'post')); ?>"><?php echo e(get_translate($item->post_title)); ?></a>

                                </h2>

                                <div

                                    class="description"><?php echo balanceTags(short_content(get_translate($item->post_content), 55)); ?></div>

                                <div class="w-100 mt-2"></div>

                                <div class="d-flex justify-content-between">

                                    <?php

                                    $url = get_the_permalink($item->post_id, $item->post_slug, 'post');

                                    $img = get_attachment_url($item->thumbnail_id);

                                    $desc = get_translate($item->post_title);


               


                                    $share = [

                                        'facebook' => [

                                            'url' => $url

                                        ],

                                        'twitter' => [

                                            'url' => $url

                                        ],

                                        'pinterest' => [

                                            'url' => $url,

                                            'img' => $img,

                                            'description' => $desc

                                        ]

                                    ];

                                    ?>

                                    <?php echo $__env->make('frontend.components.share', ['share' => $share], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <a href="<?php echo e(get_the_permalink($item->post_id, $item->post_slug, 'post')); ?>"

                                       class="read-more"><?php echo e(__('Keep Reading')); ?> <?php echo balanceTags(get_icon('002_right_arrow', '#F8546D', '12px', '')); ?></a>

                                </div>

                            </div>

                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>

        <?php endif; ?>

    </div>

<?php echo $__env->make('frontend.components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/frontend/homepage/default.blade.php ENDPATH**/ ?>