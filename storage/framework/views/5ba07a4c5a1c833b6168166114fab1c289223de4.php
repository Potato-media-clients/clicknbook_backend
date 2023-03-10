<?php do_action('init'); ?>
<?php do_action('admin_init'); ?>
    <!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php
    $favicon = get_option('favicon');
    $favicon_url = get_attachment_url($favicon);
    ?>
    <link rel="shortcut icon" type="image/png" href="<?php echo e($favicon_url); ?>"/>

    <title><?php echo e(page_title(true)); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,400&display=swap"
          rel="stylesheet">
    <?php do_action('header'); ?>
    <?php do_action('init_header'); ?>
    <?php do_action('init_dashboard_header'); ?>
</head>
<body class="awe-booking <?php echo e(is_rtl()? 'rtl': ''); ?> <?php echo e(isset($bodyClass)? $bodyClass: ''); ?>">
<?php echo $__env->make('common.loading', ['class' => 'page-loading'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/dashboard/components/header.blade.php ENDPATH**/ ?>