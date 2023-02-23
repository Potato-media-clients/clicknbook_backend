<?php
show_lang_section('mb-2');
$langs = get_languages_field();
?>
<div class="form-group">
    <label for="term_name_update">
        <?php echo e(__('Name')); ?>

    </label>
    <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <input type="text" class="form-control has-validation <?php echo e(get_lang_class($key, $item)); ?>"
               data-validation="required" id="term_name_update<?php echo e(get_lang_suffix($item)); ?>"
               name="name<?php echo e(get_lang_suffix($item)); ?>"
               value="<?php echo e(get_translate($termObject->name, $item)); ?>" <?php if(!empty($item)): ?> data-lang="<?php echo e($item); ?>"
               <?php endif; ?>
               placeholder="Name">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <input type="hidden" name="term_id" value="<?php echo e($termObject->id); ?>">
    <input type="hidden" name="term_encrypt" value="<?php echo e(hh_encrypt($termObject->id)); ?>">
</div>
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/dashboard/screens/administrator/services/home/home-category-form.blade.php ENDPATH**/ ?>