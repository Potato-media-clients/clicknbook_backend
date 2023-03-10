<?php
if (!is_user_logged_in() || !is_admin()) {
    return;
}
?>
<!-- Right Sidebar -->
<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="dripicons-cross noti-icon"></i>
        </a>
        <h5 class="m-0 text-white"><?php echo e(__('Settings')); ?></h5>
    </div>
    <div class="slimscroll-menu">
        <!-- User box -->
        <?php
        $userdata = get_current_user_data();
        ?>
        <div class="user-box">
            <div class="user-img">
                <img src="<?php echo e(get_user_avatar($userdata->getUserId(), [150, 150])); ?>" alt="user-img"
                     title="<?php echo e(get_username($userdata->getUserId())); ?>"
                     class="rounded-circle img-fluid">
            </div>
            <h5><a target="_blank" href="<?php echo e(dashboard_url('profile')); ?>"><?php echo e(get_username($userdata->getUserId())); ?></a>
            </h5>
            <p class="text-muted mb-0">
                <small><?php echo e($userdata->email); ?></small>
            </p>
        </div>
        <!-- Settings -->
        <hr class="mt-0"/>
        <h5 class="pl-3"><?php echo e(__('Quick Settings')); ?></h5>
        <hr class="mb-0"/>
        <div class="p-3">
            <form action="<?php echo e(dashboard_url('save-quick-settings')); ?>"
                  class="form form-xs clearfix relative form-quick-settings" method="post">
                <?php echo $__env->make('common.loading', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php
                $allFields = [
                    [
                        'id' => 'main_color',
                        'field_type' => 'meta',
                        'type' => 'colorpicker'
                    ],
                    [
                        'id' => 'enable_review',
                        'field_type' => 'meta',
                        'type' => 'on_off'
                    ],
                    [
                        'id' => 'partner_commission',
                        'field_type' => 'meta',
                        'type' => 'text'
                    ],
                    [
                        'id' => 'mapbox_key',
                        'field_type' => 'meta',
                        'type' => 'text'
                    ],
                    [
                        'id' => 'google_font_key',
                        'field_type' => 'meta',
                        'type' => 'text'
                    ],
                    [
                        'id' => 'optimize_site',
                        'field_type' => 'meta',
                        'type' => 'on_off'
                    ],
                    [
                        'id' => 'enable_lazyload',
                        'field_type' => 'meta',
                        'type' => 'on_off'
                    ],
                    [
                        'id' => 'enable_gdpr',
                        'field_type' => 'meta',
                        'type' => 'on_off'
                    ],
                    [
                        'id' => 'enable_seo',
                        'field_type' => 'meta',
                        'type' => 'on_off'
                    ],
                    [
                        'id' => 'use_google_captcha',
                        'field_type' => 'meta',
                        'type' => 'on_off'
                    ],
                ];
                $main_color = get_option('main_color', '#f8546d');
                $enable_review = get_option('enable_review', 'off');
                $partner_commission = get_option('partner_commission', '');
                $mapbox_key = get_option('mapbox_key', '');
                $google_font_key = get_option('google_font_key', '');
                $optimize_site = get_option('optimize_site','off');
                $enable_lazyload = get_option('enable_lazyload','off');
                $enable_gdpr = get_option('enable_gdpr','off');
                $enable_seo = get_option('enable_seo','off');
                $use_google_captcha = get_option('use_google_captcha','off');

                enqueue_script('switchery-js');
                enqueue_style('switchery-css');
                enqueue_script('bootstrap-colorpicker-js');
                enqueue_style('bootstrap-colorpicker-css');
                ?>
                <input type="hidden" name="all_fields" value="<?php echo e(base64_encode(json_encode($allFields))); ?>">
                <div class="mb-2">
                    <label for="q_main_color"><?php echo e(__('Main Color')); ?></label><br/>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text color"></div>
                        </div>
                        <input type="text" id="q_main_color" data-plugin="colorpicker"
                               class="form-control"
                               name="main_color" value="<?php echo e($main_color); ?>">
                    </div>
                </div>
                <div class="mb-2">
                    <label for="q_enable_review"><?php echo e(__('Enable Review')); ?></label><br/>
                    <input id="q_enable_review" type="checkbox" name="enable_review" value="on" data-plugin="switchery"
                           data-color="#1abc9c"
                           <?php if($enable_review == 'on'): ?> checked <?php endif; ?>>
                </div>
                <div class="mb-2">
                    <label for="q_partner_commission"><?php echo e(__('Partner Commission')); ?></label><br/>
                    <input type="number" class="form-control" min="0" id="q_partner_commission"
                           name="partner_commission"
                           value="<?php echo e($partner_commission); ?>">
                </div>
                <div class="mb-2">
                    <label for="q_mapbox_key"><?php echo e(__('Mapbox Key')); ?></label><br/>
                    <input type="text" class="form-control" id="q_mapbox_key" name="mapbox_key"
                           value="<?php echo e($mapbox_key); ?>">
                </div>
                <div class="mb-2">
                    <label for="q_google_font_key"><?php echo e(__('Google Font Key')); ?></label><br/>
                    <input type="text" class="form-control" id="q_google_font_key" name="google_font_key"
                           value="<?php echo e($google_font_key); ?>">
                </div>
                <div class="mb-2">
                    <label for="q_optimize_site"><?php echo e(__('Enable Review')); ?></label><br/>
                    <input id="q_optimize_site" type="checkbox" name="optimize_site" value="on" data-plugin="switchery"
                           data-color="#1abc9c"
                           <?php if($optimize_site == 'on'): ?> checked <?php endif; ?>>
                </div>
                <div class="mb-2">
                    <label for="q_enable_lazyload"><?php echo e(__('Enable Lazy Load')); ?></label><br/>
                    <input id="q_enable_lazyload" type="checkbox" name="enable_lazyload" value="on" data-plugin="switchery"
                           data-color="#1abc9c"
                           <?php if($enable_lazyload == 'on'): ?> checked <?php endif; ?>>
                </div>
                <div class="mb-2">
                    <label for="q_enable_gdpr"><?php echo e(__('Enable GDPR Cookie')); ?></label><br/>
                    <input id="q_enable_gdpr" type="checkbox" name="enable_gdpr" value="on" data-plugin="switchery"
                           data-color="#1abc9c"
                           <?php if($enable_gdpr == 'on'): ?> checked <?php endif; ?>>
                </div>
                <div class="mb-2">
                    <label for="q_enable_seo"><?php echo e(__('Enable SEO Tools')); ?></label><br/>
                    <input id="q_enable_seo" type="checkbox" name="enable_seo" value="on" data-plugin="switchery"
                           data-color="#1abc9c"
                           <?php if($enable_seo == 'on'): ?> checked <?php endif; ?>>
                </div>
                <div class="mb-2">
                    <label for="q_use_google_captcha"><?php echo e(__('Use Google Captcha?')); ?></label><br/>
                    <input id="q_use_google_captcha" type="checkbox" name="use_google_captcha" value="on" data-plugin="switchery"
                           data-color="#1abc9c"
                           <?php if($use_google_captcha == 'on'): ?> checked <?php endif; ?>>
                </div>
                
            </form>
        </div>
        
    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/dashboard/components/right-nav.blade.php ENDPATH**/ ?>