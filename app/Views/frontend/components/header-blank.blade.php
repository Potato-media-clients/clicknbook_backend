<?php do_action('init'); ?>

<?php do_action('frontend_init'); ?>

    <!DOCTYPE html>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<script>

map.addControl(new MapboxBrowserLanguage({  defaultLanguage: 'fr'}));

// Add right to left text support to support Arabic labels
mapboxgl.setRTLTextPlugin('https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-rtl-text/v0.1.0/mapbox-gl-rtl-text.js');

}

U+FEE1 ("Meem Isolated")
U+FEFC ("Lam with Alef Combined")
U+FEB3 ("Seen Initial")
</script>
<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <?php

    $favicon = get_option('favicon');

    $favicon_url = get_attachment_url($favicon);

    ?>

    <link rel="shortcut icon" type="image/png" href="{{ $favicon_url }}"/>



    <title>{{ page_title() }}</title>



    <?php do_action('header'); ?>

    <?php do_action('init_header'); ?>

    <?php do_action('init_frontend_header'); ?>

    <?php

    $body_class = isset($bodyClass) ? $bodyClass : '';

    if (is_user_logged_in() && (is_admin() || is_partner())) {

        $body_class .= ' has-admin-bar';

    }

    ?>

</head>

<body class="awe-booking {{ $body_class }}">

<?php do_action('after_body_frontend'); ?>



@include('common.loading', ['class' => 'page-loading'])

