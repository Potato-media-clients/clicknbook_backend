<?php echo $__env->make('dashboard.components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
enqueue_style('confirm-css');
enqueue_script('confirm-js');
?>
<div id="wrapper">
    <?php echo $__env->make('dashboard.components.top-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dashboard.components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content-page">
        <div class="content">
            <?php echo $__env->make('dashboard.components.breadcrumb', ['heading' => __('Comments')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <div class="card-box">
                <div class="header-area d-flex align-items-center">
                    <h4 class="header-title mb-0"><?php echo e(__('Comments')); ?></h4>
                    <form class="form-inline right d-none d-sm-block" method="get">
                        <div class="form-group">
                            <?php

                            $search = request()->get('_s');
                            ?>
                            <input type="text" class="form-control" name="_s"
                                   value="<?php echo e($search); ?>"
                                   placeholder="<?php echo e(__('Search by id, title')); ?>">
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
                <?php
                $tableColumns = [
                    __('Post Title'),
                    __('Comment'),
                    __('User'),
                    __('Created At'),
                    __('Status')
                ];
                ?>
                <table class="table table-large mb-0 dt-responsive nowrap w-100"
                       data-paging="false"
                       data-pdf-name="<?php echo e(__('Export to PDF')); ?>"
                       data-cols="<?php echo e(base64_encode(json_encode($tableColumns))); ?>"
                       data-ordering="false">
                    <thead>
                    <tr>
                        <th data-priority="1">
                            <?php echo e(__('Post Title')); ?>

                        </th>
                        <th data-priority="2" width="40%">
                            <?php echo e(__('Comment Content')); ?>

                        </th>
                        <th data-priority="2">
                            <?php echo e(__('Username')); ?>

                        </th>
                        <th data-priority="2">
                            <?php echo e(__('Created At')); ?>

                        </th>
                        <th data-priority="3" class="">
                            <div class="dropdown">
                                <a class="dropdown-toggle not-show-caret" id="dropdownFilterStatus"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo e(__('Status')); ?>

                                    <i class="icon-arrow-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownFilterStatus">
                                    <a class="dropdown-item"
                                       href="<?php echo e(remove_query_arg('status')); ?>"><?php echo e(__('All')); ?></a>
                                    <?php
                                    $status = comment_status_info();
                                    foreach ($status as $key => $_status) {
                                    $url = add_query_arg('status', $key);
                                    ?>
                                    <a class="dropdown-item"
                                       href="<?php echo e($url); ?>"><?php echo e($_status['name']); ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </th>
                        <th data-priority="-1" class="text-center"><?php echo e(__('Actions')); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($comments['total']): ?>
                        <?php $__currentLoopData = $comments['results']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="align-middle">
                                    <a href="<?php echo e(get_the_permalink($item->post_id, $item->post_slug, 'post')); ?>"><?php echo e(get_translate($item->post_title)); ?></a>
                                </td>
                                <td class="align-middle">
                                    <?php echo e($item->comment_content); ?>

                                </td>
                                <td class="align-middle">
                                    <?php echo e($item->comment_name); ?>

                                </td>
                                <td class="align-middle">
                                    <?php echo e(date(hh_date_format(), $item->created_at)); ?>

                                </td>
                                <td class="align-middle">
                                    <div class="service-status <?php echo e($item->status); ?> status-icon"
                                         data-toggle="tooltip" data-placement="right" title=""
                                         data-original-title="<?php echo e(comment_status_info($item->status)['name']); ?>"><span
                                            class="d-none"><?php echo e(comment_status_info($item->status)['name']); ?></span>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="dropdown dropleft">
                                        <a href="javascript: void(0)" class="dropdown-toggle table-action-link"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="ti-settings"></i></a>
                                        <div class="dropdown-menu">
                                            <?php
                                            $data = [
                                                'serviceID' => $item->comment_id,
                                                'serviceEncrypt' => hh_encrypt($item->comment_id)
                                            ];
                                            ?>

                                            <a class="dropdown-item hh-link-action hh-link-delete-review text-danger"
                                               data-action="<?php echo e(dashboard_url('delete-review-item')); ?>"
                                               data-parent="tr"
                                               data-is-delete="true"
                                               data-params="<?php echo e(base64_encode(json_encode($data))); ?>"
                                               data-confirm="yes"
                                               data-confirm-title="<?php echo e(__('Confirm Delete')); ?>"
                                               data-confirm-question="<?php echo e(__('Are you sure want to delete this review?')); ?>"
                                               data-confirm-button="<?php echo e(__('Delete it!')); ?>"
                                               href="javascript: void(0)"><?php echo e(__('Delete')); ?></a>

                                            <?php
                                            $service_status_info = comment_status_info();
                                            ?>
                                            <?php $__currentLoopData = $service_status_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($key != $item->status): ?>
                                                    <?php
                                                    $data = [
                                                        'serviceID' => $item->comment_id,
                                                        'serviceEncrypt' => hh_encrypt($item->comment_id),
                                                        'status' => $key
                                                    ];
                                                    ?>
                                                    <a class="dropdown-item hh-link-action hh-link-change-status-review"
                                                       data-action="<?php echo e(dashboard_url('change-review-status')); ?>"
                                                       data-parent="tr"
                                                       data-is-delete="false"
                                                       data-params="<?php echo e(base64_encode(json_encode($data))); ?>"
                                                       href="javascript: void(0)"><?php echo e(__('Change to :status', ['status' => $status['name']])); ?></a>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <td class="d-none"></td>
                            <td colspan="6">
                                <h4 class="mt-3 text-center"><?php echo e(__('No comments yet.')); ?></h4>
                            </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
                <div class="clearfix mt-2">
                    <?php echo e(dashboard_pagination(['total' => $comments['total']])); ?>

                </div>
            </div>
            
            <?php echo $__env->make('dashboard.components.footer-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php echo $__env->make('dashboard.components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/dashboard/screens/administrator/services/post/post-comment.blade.php ENDPATH**/ ?>