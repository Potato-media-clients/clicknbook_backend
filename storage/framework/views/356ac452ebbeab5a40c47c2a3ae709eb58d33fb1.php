<?php echo $__env->make('dashboard.components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
enqueue_style('confirm-css');
enqueue_script('confirm-js');
?>
<div id="wrapper">
    <?php echo $__env->make('dashboard.components.top-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dashboard.components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content-page">
        <div class="content mt-2">
            
            <div class="card-box">
                <div class="header-area d-flex align-items-center">
                    <h4 class="header-title mb-0"><?php echo e(__('Import Icon Fonts')); ?></h4>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="awe-import-fonts-progress">
                            <form action="<?php echo e(dashboard_url('import-fonts')); ?>" method="post"
                                  class="dropzone dz-clickable text-center form-file-action" id="myAwesomeDropzone"
                                  enctype="multipart/form-data">
                                <?php echo $__env->make('common.loading', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <div class="dz-message needsclick mt-2 mb-2">
                                    <i class="h1 text-muted dripicons-cloud-upload icon-no"></i>
                                    <i class="fe-check-circle icon-yes"></i>
                                    <h3 data-text-origin="<?php echo e(__('Drop files here or click to upload.')); ?>"
                                        data-text-uploaded="<?php echo e(__('File #_# has been selected')); ?>"><?php echo e(__('Drop files here or click to upload.')); ?></h3>
                                    <input type="file" name="fonts" accept=".zip"/>
                                </div>
                                <div class="form-message"></div>
                                <button class="btn btn-success w-100"><?php echo e(__('Upload Now')); ?></button>
                            </form>
                        </div>
                        <div class="alert alert-warning mt-3">
                            <p class="mb-0"><i
                                    class="mdi mdi-alert-outline mr-2"></i><?php echo __('Upload a .zip file that includes the svg fonts. <br/>Reference: <a target="_blank" href="https://www.flaticon.com/">flaticon.com</a>'); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php echo $__env->make('dashboard.components.footer-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php echo $__env->make('dashboard.components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/dashboard/screens/administrator/import-fonts.blade.php ENDPATH**/ ?>