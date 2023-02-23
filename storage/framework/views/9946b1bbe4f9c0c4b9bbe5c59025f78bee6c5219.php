<?php
    if (!isset($share)) {
        return false;
    }
?>
<div class="hh-sharing">
    <?php if(!empty($share['facebook'])): ?>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e($share['facebook']['url']); ?>"
           class="share-item"><?php echo get_icon('001_facebook'); ?></a>
    <?php endif; ?>
    <?php if(!empty($share['twitter'])): ?>
        <a href="https://twitter.com/home?status=<?php echo e($share['twitter']['url']); ?>"
           class="share-item"><?php echo get_icon('002_twitter'); ?></a>
    <?php endif; ?>
    <?php if(!empty($share['pinterest'])): ?>
        <a href="https://pinterest.com/pin/create/button/?url=<?php echo e($share['pinterest']['url']); ?>&media=<?php echo e($share['pinterest']['img']); ?>&description=<?php echo e(urlencode($share['pinterest']['description'])); ?>"
           class="share-item"><?php echo get_icon('003_pinterest'); ?></a>
    <?php endif; ?>
</div>
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/frontend/components/share.blade.php ENDPATH**/ ?>