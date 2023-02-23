<?php echo $__env->make('dashboard.components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="wrapper">
    <?php echo $__env->make('dashboard.components.top-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dashboard.components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="hh-add-new-term-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form form-action form-add-term-modal form-translation"
                  data-validation-id="form-add-term"
                  action="<?php echo e(route('add-new-category')); ?>"  method="post">
                  <?php echo csrf_field(); ?>
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo e(__('Create New')); ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                    </button>
                </div>
                <div class="modal-body relative">
                    <?php echo $__env->make('common.loading', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php
                    show_lang_section('mb-2');
                    $langs = get_languages_field();
                    ?>
                    <div class="form-group">
                        <label for="term_name"><?php echo e(__('Name')); ?></label>
                        <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <input type="text" class="form-control has-validation <?php echo e(get_lang_class($key, $item)); ?>"
                                   data-validation="required" id="term_name<?php echo e(get_lang_suffix($item)); ?>"
                                   name="term_name<?php echo e(get_lang_suffix($item)); ?>" <?php if(!empty($item)): ?> data-lang="<?php echo e($item); ?>"
                                   <?php endif; ?>
                                   placeholder="<?php echo e(__('Name')); ?>">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="taxonomy_name"
                           value="home-amenity">
                    <button type="submit"
                            class="btn btn-info waves-effect waves-light"><?php echo e(__('Create New')); ?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
    <div class="content-page">
        <div class="content">
            <?php echo $__env->make('dashboard.components.breadcrumb', ['heading' => __('Amenity Category')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
           
            <div class="card-box">
                <div class="header-area d-flex align-items-center">
                    <h4 class="header-title mb-0"><?php echo e(__('All Categories')); ?></h4>
                    <a class="btn btn-success waves-effect waves-light m-3" href="javascript:void(0)" data-toggle="modal"
                    data-target="#hh-add-new-term-modal">
                        <i class="ti-plus mr-1"></i>
                        <?php echo e(__('Create New')); ?>

                    </a>
                  
                </div>
               
                <?php
                enqueue_style('datatables-css');
                enqueue_script('datatables-js');
                enqueue_script('pdfmake-js');
                enqueue_script('vfs-fonts-js');
                ?>
                <table class="table table-large mb-0 dt-responsive nowrap w-100" data-plugin="datatable"
                       data-paging="false"
                       data-ordering="false">
                    <thead>
                    <tr>
                        <th data-priority="1">
                            <?php echo e(__('ID')); ?>

                        </th>
                        <th data-priority="1" class="force-show">
                            <?php echo e(__('Name')); ?>

                        </th>
                        <th data-priority="-1" class="text-center"><?php echo e(__('Actions')); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($categories): ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="align-middle">
                                    <?php echo e($item->id); ?>

                                </td>
                                <td class="align-middle force-show">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <h5 class="m-0">
                                                <?php echo e(get_translate($item->name)); ?>

                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="dropdown d-inline-block">
                                        <a href="javascript: void(0)" class="dropdown-toggle table-action-link"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="ti-settings"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <?php
                                            $data = [
                                                'termID' => $item->id,
                                                'termEncrypt' => hh_encrypt($item->id)
                                            ];
                                            ?>
                                            <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal"
                                               data-params="<?php echo e(base64_encode(json_encode($data))); ?>"
                                               data-target="#hh-update-home-amenity-modal"><?php echo e(__('Edit')); ?></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td class="d-none"></td>
                            <td class="d-none"></td>
                            <td class="d-none"></td>
                            <td class="d-none"></td>
                            <td colspan="5">
                                <h4 class="mt-3 text-center"><?php echo e(__('No term yet.')); ?></h4>
                            </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
               
            </div>
            <div id="hh-update-home-amenity-modal" class="modal fade hh-get-modal-content" tabindex="-1" role="dialog"
                 aria-hidden="true"
                 data-url="<?php echo e(dashboard_url('get-category-item')); ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form class="form form-action form-update-term-modal relative form-translation"
                              data-validation-id="form-add-term"
                              action="<?php echo e(dashboard_url('update-category')); ?>">
                            <?php echo $__env->make('common.loading', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="modal-header">
                                <h4 class="modal-title"><?php echo e(__('Update Home Amenity')); ?></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                </button>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="submit"
                                        class="btn btn-info waves-effect waves-light"><?php echo e(__('Update')); ?>

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.modal -->
            
            <?php echo $__env->make('dashboard.components.footer-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php echo $__env->make('dashboard.components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- /.modal -->
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/dashboard/screens/administrator/services/category/category.blade.php ENDPATH**/ ?>