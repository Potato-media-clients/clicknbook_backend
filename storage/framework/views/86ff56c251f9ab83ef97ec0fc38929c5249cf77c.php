<?php
    $layout = (!empty($layout)) ? $layout : 'col-12';
    if (empty($value)) {
        $value = $std;
    }
    $idName = str_replace(['[', ']'], '_', $id);
?>
<div id="setting-<?php echo e($idName); ?>" data-condition="<?php echo e($condition); ?>"
     data-unique="<?php echo e($unique); ?>"
     data-operator="<?php echo e($operation); ?>"
     class="form-group mb-0 col <?php echo e($layout); ?> field-<?php echo e($type); ?>">
    <label for="<?php echo e($idName); ?>">
        <?php echo e(__($label)); ?>

        <?php if(!empty($desc)): ?>
            <i class="dripicons-information field-desc" data-toggle="popover" data-placement="right"
               data-trigger="hover"
               data-content="<?php echo e(__($desc)); ?>"></i>
        <?php endif; ?>
    </label>
</div>
<?php if($break): ?>
    <div class="w-100"></div> <?php endif; ?>
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/options/fields/heading.blade.php ENDPATH**/ ?>