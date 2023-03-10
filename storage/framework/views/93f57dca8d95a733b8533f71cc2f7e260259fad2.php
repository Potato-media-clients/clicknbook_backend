<?php echo $__env->make('dashboard.components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="wrapper">
    <?php echo $__env->make('dashboard.components.top-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dashboard.components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content-page">
        <div class="content">
            <?php echo $__env->make('dashboard.components.breadcrumb', ['heading' => __('Tags')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <?php
            $search = request()->get('_s');
            ?>
            <div class="card-box">
                <div class="header-area d-flex align-items-center">
                    <h4 class="header-title mb-0"><?php echo e(__('All Tags')); ?></h4>
                    <form class="form-inline right d-none d-sm-block" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="_s"
                                   value="<?php echo e($search); ?>"
                                   placeholder="<?php echo e(__('Search Tags')); ?>">
                        </div>
                        <button type="submit" class="btn btn-default"><i class="ti-search"></i></button>
                    </form>
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
                        <th data-priority="3">
                            <?php echo e(__('Description')); ?>

                        </th>
                        <th data-priority="-1" class="text-center"><?php echo e(__('Actions')); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($allTerms['total']): ?>
                        <?php $__currentLoopData = $allTerms['results']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="align-middle">
                                    <?php echo e($item->term_id); ?>

                                </td>
                                <td class="align-middle force-show">
                                    <h5 class="m-0">
                                        <a href="<?php echo e(get_term_link($item->term_name, 'tag')); ?>" target="_blank">
                                            <?php echo e(get_translate($item->term_title)); ?>

                                        </a>
                                    </h5>
                                </td>
                                <td class="align-middle">
                                    <p class="mb-0">
                                        <?php if(!empty(get_translate($item->term_description))): ?>
                                            <i class="text-muted"><?php echo e(get_translate($item->term_description)); ?></i>
                                        <?php else: ?>
                                            ---
                                        <?php endif; ?>
                                    </p>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="dropdown d-inline-block">
                                        <a href="javascript: void(0)" class="dropdown-toggle table-action-link"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="ti-settings"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <?php
                                            $data = [
                                                'termID' => $item->term_id,
                                                'termEncrypt' => hh_encrypt($item->term_id)
                                            ];
                                            ?>
                                            <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal"
                                               data-params="<?php echo e(base64_encode(json_encode($data))); ?>"
                                               data-target="#hh-update-post-tags-modal"><?php echo e(__('Edit')); ?></a>
                                            <a class="dropdown-item hh-link-action hh-link-delete-tax text-danger"
                                               data-action="<?php echo e(dashboard_url('delete-term-item')); ?>"
                                               data-parent="tr"
                                               data-is-delete="true"
                                               data-params="<?php echo e(base64_encode(json_encode($data))); ?>"
                                               href="javascript: void(0)"><?php echo e(__('Delete')); ?></a>
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
                            <td colspan="12">
                                <h4 class="mt-3 text-center"><?php echo e(__('No tags yet.')); ?></h4>
                            </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
                <div class="clearfix">
                    <?php echo e(dashboard_pagination(['total' => $allTerms['total']])); ?>

                </div>
            </div>
            <div id="hh-update-post-tags-modal" class="modal fade hh-get-modal-content" tabindex="-1" role="dialog"
                 aria-hidden="true"
                 data-url="<?php echo e(dashboard_url('get-post-tag-item')); ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form class="form form-action form-update-term-modal relative form-translation"
                              data-validation-id="form-update-term"
                              action="<?php echo e(dashboard_url('update-term-item')); ?>">
                            <?php echo $__env->make('common.loading', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="modal-header">
                                <h4 class="modal-title"><?php echo e(__('Update Tag')); ?></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??
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
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/dashboard/screens/administrator/services/post/post-tag.blade.php ENDPATH**/ ?>