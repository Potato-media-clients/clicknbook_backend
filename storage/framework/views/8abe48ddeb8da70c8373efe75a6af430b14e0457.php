<a class="btn btn-success waves-effect waves-light" href="javascript:void(0)" data-toggle="modal"
   data-target="#hh-add-new-term-modal">
    <i class="ti-plus mr-1"></i>
    <?php echo e(__('Create New')); ?>

</a>
<div id="hh-add-new-term-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form form-action form-add-term-modal form-translation"
                  data-validation-id="form-add-new-term"
                  action="<?php echo e(dashboard_url('add-new-term')); ?>">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo e(__('Create New')); ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                    </button>
                </div>
                <div class="modal-body relative">
                    <?php
                    show_lang_section('mb-2');
                    $langs = get_languages_field();
                    ?>
                    <?php echo $__env->make('common.loading', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                    <div class="form-group">
                        <label for="term_description"><?php echo e(__('Description')); ?></label>
                        <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <textarea name="term_description<?php echo e(get_lang_suffix($item)); ?>"
                                      id="term_description<?php echo e(get_lang_suffix($item)); ?>"
                                      class="form-control <?php echo e(get_lang_class($key, $item)); ?>"
                                      <?php if(!empty($item)): ?> data-lang="<?php echo e($item); ?>" <?php endif; ?>
                                      placeholder="<?php echo e(__('Description')); ?>"></textarea>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="taxonomy_name"
                           value="post-tag">
                    <button type="submit"
                            class="btn btn-info waves-effect waves-light"><?php echo e(__('Create New')); ?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.modal -->
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/dashboard/components/quick-add-post-tag.blade.php ENDPATH**/ ?>