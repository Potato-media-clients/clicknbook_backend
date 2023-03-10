<?php
    $layout = (!empty($layout)) ? $layout : 'col-12';
    if (empty($value)) {
        $value = $std;
    }
    if (!empty($maxlength) && is_array($maxlength)) {
        $maxlengthHtml = '';
        foreach ($maxlength as $k => $v) {
            if ($k == 'max-length') {
                $maxlengthHtml .= ' maxlength="' . $v . '" ';
            } else {
                $maxlengthHtml .= ' data-' . $k . '="' . $v . '" ';
            }
        }
    }
    $idName = str_replace(['[', ']'], '_', $id);
?>
<div id="setting-<?php echo e($idName); ?>" data-condition="<?php echo e($condition); ?>"
     data-unique="<?php echo e($unique); ?>"
     data-operator="<?php echo e($operation); ?>"
     class="form-group mb-3 col <?php echo e($layout); ?> field-<?php echo e($type); ?>">
    <label for="<?php echo e($idName); ?>">
        <?php echo e(__($label)); ?>

        <?php if(!empty($desc)): ?>
            <i class="dripicons-information field-desc" data-toggle="popover" data-placement="right"
               data-trigger="hover"
               data-content="<?php echo e(__($desc)); ?>"></i>
        <?php endif; ?>
    </label>
    <input type="text" id="<?php echo e($idName); ?>"
           data-validation="<?php echo e($validation); ?>"
           class="form-control <?php if(!empty($maxlengthHtml)): ?> has-maxLength <?php endif; ?>  <?php if(!empty($validation)): ?> has-validation <?php endif; ?> hh-icon-input"
           data-plugin="fonticon"
           <?php if(isset($maxlengthHtml)): ?> <?php echo balanceTags($maxlengthHtml); ?> <?php endif; ?>
           data-action="<?php echo e(dashboard_url('get-font-icon')); ?>"
           name="<?php echo e($id); ?>" value="<?php echo e($value); ?>">
</div>
<?php if($break): ?>
    <div class="w-100"></div> <?php endif; ?>
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/options/fields/icon.blade.php ENDPATH**/ ?>