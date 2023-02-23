<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="FEiqjaPFK0UMtZSPyy7H4tXKf65YZstFTzqDWv2H">
        <link rel="shortcut icon" type="image/png" href="https://clicknbook.co/storage/u-155/2022/10/25/45c85633-1187-4654-9e9f-3e8d0f522ed9-removebg-preview-1666695150.png"/>

    <title>Dashboard - clickNbook-simple click &amp; book</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,400&display=swap"
          rel="stylesheet">
    
        <script>

            var hh_params = {"locale":"en","language_code":"en","timezone":"Asia\/Amman","mapbox_token":"pk.eyJ1IjoiaGp3YWhyZWgiLCJhIjoiY2w5amx4dHJvMTFjdTN2bzBiY21icHNreCJ9.Y7qCWaYy0IVcO-f3vTelYw","currency":{"name":"[:en]USD[:ar]USD[:]","symbol":"$","unit":"USD","exchange":"1","position":"left","thousand_separator":",","decimal_separator":".","currency_decimal":"2"},"media":{"get_all_media_url":"https:\/\/clicknbook.co\/dashboard\/all-media","get_inline_media_url":"https:\/\/clicknbook.co\/dashboard\/get-inline-media","add_media_url":"https:\/\/clicknbook.co\/dashboard\/add-media","media_modal_search_url":"https:\/\/clicknbook.co\/dashboard\/search-media-modal","media_modal_number_item":50,"media_upload_permission":["image\/png","image\/jpg","image\/jpeg","image\/svg","image\/gif"],"media_upload_size":1,"media_upload_message":{"type":"Only JPG, PNG, JPEG, SVG, GIF files types are supported.","size":"Maximum file size is 1MB."}},"facebook_login":"on","facebook_api":"1491269114619204","use_google_captcha":"off","google_captcha_key":"6LehLcgUAAAAABfvsxwlijKd-wvBs9TadnMxyvCK","gdpr":{"enable":"off","page":"https:\/\/clicknbook.co\/page\/13\/refund-policy","i18n":{"description":"We use cookies to offer you a better browsing experience, personalise content and ads, to provide social media features and to analyse our traffic. Read about how we use cookies and how you can control them by clicking Cookie Settings. You consent to our cookies if you continue to use this website.","settings":"Cookie settings","accept":"Accept cookies","statement":"Our cookie statement","save":"Save settings","always_on":"Always on","cookie_essential_title":"Essential website cookies","cookie_essential_desc":"Necessary cookies help make a website usable by enabling basic functions like page navigation and access to secure areas of the website. The website cannot function properly without these cookies.","cookie_performance_title":"Performance cookies","cookie_performance_desc":"These cookies are used to enhance the performance and functionality of our websites but are non-essential to their use. For example it stores your preferred language or the region that you are in.","cookie_analytics_title":"Analytics cookies","cookie_analytics_desc":"We use analytics cookies to help us measure how users interact with website content, which helps us customize our websites and application for you in order to enhance your experience.","cookie_marketing_title":"Marketing cookies","cookie_marketing_desc":"These cookies are used to make advertising messages more relevant to you and your interests. The intention is to display ads that are relevant and engaging for the individual user and thereby more valuable for publishers and third party advertisers."}},"lazy_load":"off","get_icon_url":"https:\/\/clicknbook.co\/get-icon","set_icon_url":"https:\/\/clicknbook.co\/set-icon","rtl":false,"enable_seo":"on","ckeditor":{"button_image_ckeditor":""}}
        </script>

                <link href="https://clicknbook.co/css/vendor.min.css" rel="stylesheet">
<link href="https://clicknbook.co/vendor/app.min.css" rel="stylesheet">
<link href="https://clicknbook.co/css/main.min.css" rel="stylesheet">
<link href="https://clicknbook.co/css/option.min.css" rel="stylesheet">
<link href="https://clicknbook.co/css/dashboard.min.css" rel="stylesheet">
<style>

                :root {

                  --pink: #01C1C9;

                  --black: #2a2a2a;

                  --blue: #1abc9c;

                  --white: #FFFFFF;

                }

            </style><link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet"><style>

                    body{

                        font-family: 'Cairo', sans-serif;

                    }

                    .awe-booking h1, .awe-booking h2, .awe-booking h3, .awe-booking h4, .awe-booking h5, .awe-booking h6{

                        font-family: 'Cairo', sans-serif;

                    }

                </style><script> var locale_daterangepicker = {"direction":"ltr","applyLabel":"Apply","cancelLabel":"Cancel","fromLabel":"From","toLabel":"To","customRangeLabel":"Custom","daysOfWeek":["Sun","Mo","Tu","We","Th","Fr","Sa"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"firstDay":1,"today":"Today"}</script></head>
<body class="awe-booking  hh-dashboard">
<div class="hh-loading page-loading" style="">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div id="wrapper">
    <!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="d-none d-sm-block">
            <form class="app-search" action="https://clicknbook.co/dashboard/all-booking" method="get">
                <div class="app-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search booking..." name="_s"
                               value="">
                        <div class="input-group-append">
                            <button class="btn" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </li>
                                        <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                   href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="ml-1">
                                <img
                                    src="https://clicknbook.co/vendor/countries/flag/32x32/us.png"/>
                                <i class="mdi mdi-chevron-down"></i>
                            </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                                                    <a href="https://clicknbook.co/dashboard?lang=ar" class="dropdown-item notify-item">
                            <span>
                                <img
                                    src="https://clicknbook.co/vendor/countries/flag/32x32/jo.png"/>
                                Arabic
                            </span>
                        </a>
                                    </div>
            </li>
                        <li id="hh-dropdown-notification" class="dropdown notification-list"
            data-action="https://clicknbook.co/get-notifications"
            data-params="eyJ1c2VyX2lkIjoxNTUsInVzZXJfZW5jcnlwdCI6IjMwMWE0NGUzNzgyZjNlYjY5NDA1Y2Q0NWQyODNjOWIyIn0=">
            <a class="nav-link dropdown-toggle waves-effect waves-light"
               data-toggle="dropdown" href="#" role="button"
               aria-haspopup="false" aria-expanded="false">
                <i class="fe-bell noti-icon"></i>
                                    <span class="badge badge-danger rounded-circle noti-icon-badge">102</span>
                            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0">Notification</h5>
                </div>
                <div class="slimscroll noti-scroll">
                    <div class="notification-render">
                    </div>
                </div>
                <!-- All-->
                <a href="https://clicknbook.co/dashboard/all-notifications"
                   class="dropdown-item text-center text-primary notify-item notify-all">
                    View all
                    <i class="fi-arrow-right"></i>
                </a>

            </div>
        </li>

        <li class="dropdown user-nav-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#"
               role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="https://clicknbook.co/public/storage/storage/users_avatar/u-155/2022/10/30/16671123991667112399-32x32.jpg" alt="user-image"
                     class="rounded-circle">
                <span class="pro-user-name ml-1">
                    Ayman sawair
                    <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow">Welcome !</h6>
                </div>
                <!-- item-->
                <a href="https://clicknbook.co" class="dropdown-item notify-item">
                    <i class="fe-home"></i>
                    <span>Goto Home</span>
                </a>
                <!-- item-->
                <a href="https://clicknbook.co/dashboard/profile" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>Profile</span>
                </a>
                <!-- item-->
                                                            <a href="https://clicknbook.co/dashboard/my-home" class="dropdown-item notify-item">
                            <i class="fe-book-open"></i>
                            <span>Home</span>
                        </a>
                                                                                            <div class="dropdown-divider"></div>
                <!-- item-->
                                <a href="javascript:void(0)" data-action="https://clicknbook.co/auth/logout"
                   data-params="eyJ1c2VyX2lkIjoxNTV9"
                   class="dropdown-item notify-item hh-link-action">
                    <i class="fe-log-out"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>
                    <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                    <i class="fe-settings noti-icon"></i>
                </a>
            </li>
            </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="https://clicknbook.co" class="logo text-center">
                        <span class="logo-lg">
                <img src="https://clicknbook.co/storage/u-155/2022/10/25/45c85633-1187-4654-9e9f-3e8d0f522ed9-removebg-preview-1666695150.png" alt="" height="40">
            </span>
            <span class="logo-sm">
                <img src="https://clicknbook.co/storage/u-155/2022/10/25/45c85633-1187-4654-9e9f-3e8d0f522ed9-removebg-preview-1666695150.png" alt="" height="40">
            </span>
        </a>
    </div>
    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="fe-menu"></i>
            </button>
        </li>
                    <li class="dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                   href="javascript:void(0)" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    Create New
                    <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu">
                                    <!-- item-->
                        <a href="https://clicknbook.co/dashboard/add-new-post" class="dropdown-item">
                            <span>New Post</span>
                        </a>
                        <!-- item-->
                        <a href="https://clicknbook.co/dashboard/add-new-page" class="dropdown-item">
                            <span>New Page</span>
                        </a>
                                <!-- item-->
                                            <a href="https://clicknbook.co/dashboard/add-new-home" class="dropdown-item">
                            <span>New Home</span>
                        </a>
                                    <!-- item-->
                                    <!-- item-->
                                    <!-- item-->
                    <a href="https://clicknbook.co/dashboard/coupon" class="dropdown-item">
                        <span>New Coupon</span>
                    </a>
                </div>
            </li>
            </ul>
</div>
<!-- end Topbar -->
    <!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="slimscroll-menu">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                                                                                                                                <li class="menu-title">General</li>
                                                                                                                                                                                                                                                        <li><a href="https://clicknbook.co/dashboard" class="active"><i class="hh-icon  fa"><svg height="24px" width="20px" version="1.1"    x="0px" y="0px"
	 viewBox="0 0 475.037 475.037" style="enable-background:new 0 0 475.037 475.037;" xml:space="preserve">
<g fill="#555" transform="translate(0 -540.36)">
	<g fill="#555">
		<g fill="#555">
			<path d="M475.018,775.088c-0.4-62.9-25.5-122.1-70.8-166.5c-45.6-44.8-105.8-69-169.5-68.2c-131,1.6-236.3,109.4-234.7,240.3
				c0.8,63.5,26.2,122.9,71.5,167.2c44.7,43.6,103.4,67.5,165.8,67.5c1,0,2,0,3,0c63.1-0.4,122.3-25.5,166.6-70.6
				C451.618,899.288,475.818,838.988,475.018,775.088z M396.218,934.188c-41.5,42.3-96.9,65.7-156.1,66.1
				c-59.4,0.7-115.6-21.7-158.1-63.2c-42.5-41.4-66.3-97.1-67-156.6c-1.5-122.6,97.1-223.6,219.9-225.1c0.9,0,1.9,0,2.8,0
				c58.6,0,114,22.6,156,63.9c42.4,41.6,65.9,97,66.3,155.9C460.718,835.088,438.118,891.588,396.218,934.188z"/>
			<path d="M342.518,610.388c-31.5-19.8-67.9-30.3-105.1-30.3s-73.5,10.5-105.1,30.3c-31.6,19.8-56.9,48.1-73.1,81.7
				c-1.8,3.7-0.2,8.2,3.5,10c3.7,1.8,8.2,0.2,10-3.5c30.4-62.9,95-103.6,164.7-103.6c69.7,0,134.4,40.7,164.7,103.6
				c1.3,2.6,4,4.2,6.8,4.2h0c1.1,0,2.2-0.2,3.2-0.7c3.7-1.8,5.3-6.3,3.5-10C399.318,658.488,374.118,630.288,342.518,610.388z"/>
			<path d="M312.118,691.888l-77.6,77.6c-2.9,2.9-2.9,7.7,0,10.6c1.5,1.5,3.4,2.2,5.3,2.2c2,0,3.9-0.7,5.3-2.2l77.6-77.6
				c2.9-2.9,2.9-7.7,0-10.6C319.818,688.988,315.018,688.988,312.118,691.888z"/>
			<path d="M277.018,770.388c-4.1,0-7.5,3.4-7.5,7.5c0,17.3-14.1,31.4-32.2,32.1c-17.6-0.1-31.9-14.1-31.9-31.3c0-0.1,0-0.2,0-0.3
				c-0.3-8.6,2.9-17.1,8.9-23.3c5.8-6,13.4-9.3,21.6-9.3c4.1,0,7.5-3.4,7.5-7.5s-3.4-7.5-7.5-7.5c-12.3,0-23.8,5-32.4,13.9
				c-8.7,9.1-13.5,21.5-13.1,34.1c0.1,25.5,21.2,46.2,47.1,46.2l0,0c0.1,0,0.2,0,0.2,0c26.2-1,46.8-21.7,46.8-47.1
				C284.518,773.788,281.118,770.388,277.018,770.388z"/>
		</g>
	</g>
</g>















</svg></i>
                                    <span>Dashboard</span></a>
                            </li>
                                                                                                                                                                                                                                <li><a href="https://clicknbook.co/dashboard/profile" class=""><i class="hh-icon  fa"><svg height="24px" width="20px" version="1.1"    x="0px" y="0px"
	 viewBox="0 0 432.072 432.072" style="enable-background:new 0 0 432.072 432.072;" xml:space="preserve">
<g fill="#555">
	<g fill="#555">
		<g fill="#555">
			<path d="M183.983,209.972c23.96,0,47.357-14.538,65.881-40.936c16.347-23.296,26.106-52.099,26.106-77.048
				C275.971,41.266,234.706,0,183.983,0c-50.722,0-91.988,41.266-91.988,91.988c0,24.949,9.759,53.752,26.107,77.048
				C136.626,195.434,160.024,209.972,183.983,209.972z M183.983,15c42.451,0,76.988,34.537,76.988,76.988
				c0,21.655-8.96,47.876-23.385,68.432c-15.408,21.958-34.946,34.552-53.603,34.552c-18.657,0-38.194-12.594-53.603-34.552
				c-14.424-20.556-23.385-46.778-23.385-68.432C106.995,49.537,141.532,15,183.983,15z"/>
			<path d="M222.667,391.718c-0.079-0.186-0.06-0.139-0.026-0.054c-0.379-0.879-0.915-1.707-1.604-2.376
				c-2.816-2.897-7.784-2.901-10.6,0c-4.193,4.07-1.93,11.346,3.653,12.611c5.866,1.328,10.755-4.644,8.59-10.141
				C222.719,391.851,222.746,391.915,222.667,391.718z"/>
			<path d="M379.782,265.675c-19.546-19.546-45.394-29.015-71.064-28.461c-15.071-18.657-34.328-33.887-55.925-44.168
				c-2.864-1.363-6.274-0.778-8.52,1.462c-18.07,18.023-38.919,27.55-60.293,27.55c-21.377,0-42.222-9.526-60.282-27.549
				c-2.246-2.241-5.658-2.827-8.522-1.462c-26.963,12.838-49.783,32.917-65.992,58.067C32.532,276.95,23.73,306.925,23.73,337.799
				v0.13c0,2.116,0.894,4.134,2.461,5.556c43.279,39.249,99.316,60.864,157.789,60.864c3.088,0,6.209-0.061,9.277-0.18
				c4.139-0.161,7.364-3.646,7.203-7.785c-0.161-4.139-3.654-7.367-7.785-7.203c-2.874,0.111-5.799,0.168-8.695,0.168
				c-53.621,0-105.056-19.418-145.215-54.746c0.583-26.855,8.515-52.846,23.027-75.363c13.766-21.359,32.788-38.684,55.228-50.357
				c20.046,18.456,43.095,28.175,66.961,28.175c23.862,0,46.914-9.72,66.968-28.175c14.844,7.733,28.341,18.08,39.734,30.395
				c-17.889,3.753-34.924,12.535-48.785,26.397c-38.015,38.015-38.015,99.87,0,137.886c19.008,19.008,43.976,28.511,68.943,28.511
				c24.968,0,49.936-9.503,68.943-28.511c18.416-18.416,28.557-42.9,28.557-68.943C408.339,308.575,398.198,284.09,379.782,265.675z
				 M383.396,295.296l-50.431,50.431l-11.314-11.314l52.582-52.582C377.751,286.042,380.815,290.549,383.396,295.296z
				 M363.62,271.23l-52.576,52.576l-11.314-11.314l50.403-50.403C354.854,264.644,359.375,267.69,363.62,271.23z M319.01,352.986
				l-39.337,12.797l12.798-39.336L319.01,352.986z M369.175,392.955c-32.167,32.166-84.506,32.166-116.673,0
				c-32.167-32.167-32.167-84.506,0-116.673c16.085-16.085,37.208-24.125,58.336-24.125c8.216,0,16.428,1.233,24.348,3.666
				l-51.367,51.367c-0.836,0.836-1.463,1.858-1.829,2.983l-21.14,64.98c-0.873,2.683-0.166,5.628,1.829,7.624
				c1.429,1.429,3.346,2.197,5.304,2.197c0.776,0,1.558-0.12,2.319-0.368l64.98-21.14c1.125-0.366,2.147-0.992,2.983-1.829
				l51.415-51.415c2.403,7.801,3.657,16.001,3.657,24.396C393.339,356.654,384.758,377.372,369.175,392.955z"/>
		</g>
	</g>
</g>















</svg></i>
                                    <span>Your Profile</span></a>
                            </li>
                                                                                                                                                                                                                                <li><a href="https://clicknbook.co/dashboard/all-notifications" class=""><i class="hh-icon  fa"><svg height="24px" width="20px" viewBox="0 0 512 512" ><path d="m436.949219 74.980469c-48.34375-48.351563-112.621094-74.980469-180.988281-74.980469-4.144532 0-7.5 3.359375-7.5 7.5s3.355468 7.5 7.5 7.5c64.359374 0 124.871093 25.066406 170.382812 70.585938 45.511719 45.519531 70.574219 106.042968 70.574219 170.414062s-25.0625 124.894531-70.574219 170.414062c-45.511719 45.519532-106.023438 70.585938-170.382812 70.585938-64.363282 0-124.875-25.066406-170.386719-70.585938-45.511719-45.519531-70.574219-106.039062-70.574219-170.414062 0-58.769531 21.386719-115.375 60.222656-159.390625 38.496094-43.628906 91.289063-71.863281 148.652344-79.492187 4.105469-.546876 6.992188-4.316407 6.445312-8.421876-.546874-4.105468-4.320312-6.988281-8.421874-6.449218-60.953126 8.109375-117.035157 38.097656-157.921876 84.4375-41.257812 46.757812-63.976562 106.890625-63.976562 169.316406 0 68.378906 26.625 132.667969 74.96875 181.019531 48.34375 48.351563 112.621094 74.980469 180.992188 74.980469 68.367187 0 132.644531-26.628906 180.988281-74.980469 48.34375-48.351562 74.96875-112.640625 74.96875-181.019531s-26.625-132.667969-74.96875-181.019531zm0 0"/><path d="m283.054688 234.675781c4.140624 0 7.5-3.355469 7.5-7.5v-83.640625c0-10.375-8.441407-18.816406-18.816407-18.816406h-31.558593c-10.375 0-18.816407 8.441406-18.816407 18.816406v142.886719c0 10.378906 8.441407 18.816406 18.816407 18.816406h31.558593c10.375 0 18.816407-8.4375 18.816407-18.816406v-28.203125c0-4.140625-3.359376-7.5-7.5-7.5-4.144532 0-7.5 3.359375-7.5 7.5v28.203125c0 2.105469-1.710938 3.816406-3.816407 3.816406h-31.558593c-2.105469 0-3.816407-1.710937-3.816407-3.816406v-142.886719c0-2.105468 1.710938-3.816406 3.816407-3.816406h31.558593c2.105469 0 3.816407 1.710938 3.816407 3.816406v83.640625c0 4.144531 3.355468 7.5 7.5 7.5zm0 0"/><path d="m255.960938 326.128906c-19.078126 0-34.597657 15.515625-34.597657 34.601563 0 19.074219 15.519531 34.59375 34.597657 34.59375 19.074218 0 34.59375-15.519531 34.59375-34.601563 0-19.078125-15.519532-34.59375-34.59375-34.59375zm0 54.195313c-10.804688 0-19.597657-8.789063-19.597657-19.601563 0-10.804687 8.792969-19.59375 19.597657-19.59375 10.800781 0 19.59375 8.789063 19.59375 19.601563 0 10.804687-8.792969 19.59375-19.59375 19.59375zm0 0"/></svg></i>
                                    <span>Notifications</span></a>
                            </li>
                                                                                                                                                                                                                                <li><a href="https://clicknbook.co/dashboard/categories" class=""><i class="hh-icon  fa"><svg height="24px" width="20px" viewBox="0 0 512 512" ><path d="m436.949219 74.980469c-48.34375-48.351563-112.621094-74.980469-180.988281-74.980469-4.144532 0-7.5 3.359375-7.5 7.5s3.355468 7.5 7.5 7.5c64.359374 0 124.871093 25.066406 170.382812 70.585938 45.511719 45.519531 70.574219 106.042968 70.574219 170.414062s-25.0625 124.894531-70.574219 170.414062c-45.511719 45.519532-106.023438 70.585938-170.382812 70.585938-64.363282 0-124.875-25.066406-170.386719-70.585938-45.511719-45.519531-70.574219-106.039062-70.574219-170.414062 0-58.769531 21.386719-115.375 60.222656-159.390625 38.496094-43.628906 91.289063-71.863281 148.652344-79.492187 4.105469-.546876 6.992188-4.316407 6.445312-8.421876-.546874-4.105468-4.320312-6.988281-8.421874-6.449218-60.953126 8.109375-117.035157 38.097656-157.921876 84.4375-41.257812 46.757812-63.976562 106.890625-63.976562 169.316406 0 68.378906 26.625 132.667969 74.96875 181.019531 48.34375 48.351563 112.621094 74.980469 180.992188 74.980469 68.367187 0 132.644531-26.628906 180.988281-74.980469 48.34375-48.351562 74.96875-112.640625 74.96875-181.019531s-26.625-132.667969-74.96875-181.019531zm0 0"/><path d="m283.054688 234.675781c4.140624 0 7.5-3.355469 7.5-7.5v-83.640625c0-10.375-8.441407-18.816406-18.816407-18.816406h-31.558593c-10.375 0-18.816407 8.441406-18.816407 18.816406v142.886719c0 10.378906 8.441407 18.816406 18.816407 18.816406h31.558593c10.375 0 18.816407-8.4375 18.816407-18.816406v-28.203125c0-4.140625-3.359376-7.5-7.5-7.5-4.144532 0-7.5 3.359375-7.5 7.5v28.203125c0 2.105469-1.710938 3.816406-3.816407 3.816406h-31.558593c-2.105469 0-3.816407-1.710937-3.816407-3.816406v-142.886719c0-2.105468 1.710938-3.816406 3.816407-3.816406h31.558593c2.105469 0 3.816407 1.710938 3.816407 3.816406v83.640625c0 4.144531 3.355468 7.5 7.5 7.5zm0 0"/><path d="m255.960938 326.128906c-19.078126 0-34.597657 15.515625-34.597657 34.601563 0 19.074219 15.519531 34.59375 34.597657 34.59375 19.074218 0 34.59375-15.519531 34.59375-34.601563 0-19.078125-15.519532-34.59375-34.59375-34.59375zm0 54.195313c-10.804688 0-19.597657-8.789063-19.597657-19.601563 0-10.804687 8.792969-19.59375 19.597657-19.59375 10.800781 0 19.59375 8.789063 19.59375 19.601563 0 10.804687-8.792969 19.59375-19.59375 19.59375zm0 0"/></svg></i>
                                    <span>All Categories</span></a>
                            </li>
                                                                                                                                                                                                                                                        <li class=""><a
                                    class=""
                                    aria-expanded=""
                                    href="javascript: void(0);"><i class="hh-icon  fa"><svg height="24px" viewBox="-11 0 460 460.11908" width="20px" ><path d="m204.636719 0h-3.378907c-13.730468 0-25.351562 11.054688-25.351562 24.785156v23.875l-72.027344-20.976562c-2.023437-.589844-4.199218-.347656-6.039062.675781-1.84375 1.027344-3.195313 2.746094-3.761719 4.777344l-93.714844 322.976562c-1.203125 4.253907 1.25 8.683594 5.496094 9.914063l322.988281 93.773437c4.226563 1.230469 8.65625-1.183593 9.917969-5.402343l10-34.398438h80.941406c4.476563-.03125 8.113281-3.625 8.199219-8.101562v-336.316407c0-4.417969-3.78125-7.582031-8.199219-7.582031h-188.175781l-11.625-3.898438v-39.316406c0-13.730468-11.539062-24.785156-25.269531-24.785156zm-12.730469 24.785156c0-4.90625 4.441406-8.785156 9.351562-8.785156h3.378907c4.910156 0 9.269531 3.878906 9.269531 8.785156v34.667969l-22-6.148437zm161.507812 379.214844 68.492188-235.332031v235.332031zm68.492188-320v35.890625l-125.265625-35.890625zm-6.78125 50.589844-89.402344 307.609375-307.660156-89.304688 89.46875-307.617187 106.375 30.835937v54.585938c0 4.972656-4.03125 9-9 9-4.972656 0-9-4.027344-9-9v-33.238281c0-4.417969-3.582031-8-8-8s-8 3.582031-8 8v33.238281c0 13.808593 11.191406 25 25 25 13.804688 0 25-11.191407 25-25v-49.9375zm0 0"/></svg></i><span>Posts</span>
                                    <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                                                                                                                                                                                            <li class=""><a href="https://clicknbook.co/dashboard/add-new-post"
                                                                         class="">
                                                    <span>Add new Post</span></a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                    <li class=""><a href="https://clicknbook.co/dashboard/all-post"
                                                                         class="">
                                                    <span>All Posts</span></a></li>
                                                                                                                                                                                                                                                                                                <li class=""><a href="https://clicknbook.co/dashboard/get-terms/post-category"
                                                                         class="">
                                                    <span>Categories</span></a></li>
                                                                                                                                                                                                                                                                                                <li class=""><a href="https://clicknbook.co/dashboard/get-terms/post-tag"
                                                                         class="">
                                                    <span>Tags</span></a></li>
                                                                                                                                                                                                                                                                                                <li class=""><a href="https://clicknbook.co/dashboard/comment"
                                                                         class="">
                                                    <span>Comments</span></a></li>
                                                                                                                                                                                            </ul>
                            </li>
                                                                                                                                                                                                                                    <li class=""><a
                                    class=""
                                    aria-expanded=""
                                    href="javascript: void(0);"><i class="hh-icon  fa"><svg height="24px" width="20px" version="1.1"    x="0px" y="0px"
	 viewBox="0 0 511 511" style="enable-background:new 0 0 511 511;" xml:space="preserve">
<path d="M462.963,166.759c-0.01-0.107-0.031-0.211-0.046-0.317c-0.019-0.136-0.036-0.273-0.062-0.409
	c-0.024-0.123-0.058-0.243-0.089-0.364c-0.029-0.116-0.055-0.232-0.089-0.347c-0.036-0.119-0.081-0.234-0.123-0.351
	c-0.041-0.114-0.078-0.229-0.125-0.342c-0.045-0.109-0.099-0.214-0.149-0.321c-0.054-0.115-0.105-0.231-0.165-0.343
	c-0.055-0.103-0.118-0.202-0.178-0.302c-0.065-0.109-0.127-0.22-0.199-0.327c-0.074-0.111-0.157-0.215-0.237-0.322
	c-0.067-0.089-0.129-0.181-0.2-0.268c-0.148-0.18-0.305-0.353-0.469-0.519c-0.01-0.01-0.018-0.021-0.028-0.031l-160-160
	c-0.011-0.011-0.024-0.021-0.035-0.032c-0.164-0.162-0.335-0.318-0.514-0.465c-0.086-0.071-0.177-0.133-0.266-0.199
	c-0.107-0.08-0.212-0.163-0.323-0.238c-0.104-0.07-0.212-0.13-0.318-0.193c-0.104-0.062-0.206-0.127-0.313-0.185
	c-0.106-0.057-0.215-0.104-0.323-0.155c-0.114-0.054-0.227-0.111-0.344-0.159c-0.103-0.042-0.208-0.076-0.312-0.114
	c-0.127-0.046-0.252-0.094-0.381-0.133c-0.101-0.031-0.204-0.053-0.307-0.079c-0.135-0.035-0.268-0.072-0.406-0.099
	c-0.112-0.022-0.224-0.034-0.336-0.051c-0.13-0.02-0.258-0.043-0.39-0.056c-0.185-0.018-0.371-0.024-0.557-0.028
	C295.618,0.008,295.56,0,295.5,0H83.887C64.099,0,48,16.099,48,35.887v375.227c0,18.54,14.132,33.84,32.19,35.697
	c1.731,16.842,15.158,30.268,32,32c1.856,18.058,17.157,32.19,35.697,32.19h279.226C446.901,511,463,494.901,463,475.113V167.503
	C463,167.254,462.987,167.006,462.963,166.759z M367,89.607L437.393,160h-49.506C376.37,160,367,150.63,367,139.113V89.607z
	 M63,411.113V35.887C63,24.37,72.37,15,83.887,15h208.506l17,17H115.887C96.099,32,80,48.099,80,67.887v363.737
	C70.336,429.795,63,421.3,63,411.113z M95,443.113V67.887C95,56.37,104.37,47,115.887,47h208.506l17,17H147.887
	C128.099,64,112,80.099,112,99.887v363.737C102.336,461.795,95,453.3,95,443.113z M427.113,496H147.887
	C136.37,496,127,486.63,127,475.113V99.887C127,88.37,136.37,79,147.887,79H352v60.113C352,158.901,368.099,175,387.887,175H448
	v300.113C448,486.63,438.63,496,427.113,496z"/>















</svg></i><span>Pages</span>
                                    <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                                                                                                                                                                                            <li class=""><a href="https://clicknbook.co/dashboard/all-page"
                                                                         class="">
                                                    <span>All Pages</span></a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                    <li class=""><a href="https://clicknbook.co/dashboard/add-new-page"
                                                                         class="">
                                                    <span>Add new Page</span></a></li>
                                                                                                                                                                                            </ul>
                            </li>
                                                                                                                                                        <li class="menu-title">All Services</li>
                                                                                                                                                                                                                                                                                <li class=""><a
                                    class=""
                                    aria-expanded=""
                                    href="javascript: void(0);"><i class="hh-icon  fa"><svg height="24px" viewBox="0 1 479 479.99829" width="20px" ><path d="m478.058594 234.34375-232-232c-3.125-3.125-8.191406-3.125-11.3125 0l-232 232c-3.03125 3.136719-2.988282 8.128906.097656 11.214844 3.085938 3.085937 8.074219 3.128906 11.214844.09375l226.34375-226.34375 226.34375 226.34375c3.136718 3.035156 8.128906 2.992187 11.214844-.09375 3.085937-3.085938 3.128906-8.078125.097656-11.214844zm0 0"/><path d="m268.679688 72.972656c-15.617188-15.613281-40.9375-15.613281-56.558594 0l-148.6875 148.679688c-4.519532 4.492187-7.050782 10.605468-7.03125 16.976562v201.371094c.023437 22.078125 17.917968 39.972656 40 40h288c22.078125-.027344 39.972656-17.921875 40-40v-201.371094c.011718-6.367187-2.519532-12.480468-7.035156-16.976562zm-100.277344 391.027344v-120c0-39.765625 32.234375-72 72-72 39.761718 0 72 32.234375 72 72v120zm240-24c0 13.253906-10.746094 24-24 24h-56v-120c0-48.601562-39.402344-88-88-88-48.601563 0-88 39.398438-88 88v120h-56c-13.257813 0-24-10.746094-24-24v-201.371094c-.003906-2.121094.839844-4.160156 2.34375-5.664062l148.6875-148.679688c9.371094-9.367187 24.5625-9.367187 33.933594 0l148.691406 148.679688c1.5 1.503906 2.34375 3.542968 2.34375 5.664062zm0 0"/></svg></i><span>Homes</span>
                                    <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                                                                                                                                                                                            <li class=""><a href="https://clicknbook.co/dashboard/add-new-home"
                                                                         class="">
                                                    <span>Add new Home</span></a></li>
                                                                                                                                                                                                                                                                                                <li class=""><a href="https://clicknbook.co/dashboard/my-home"
                                                                         class="">
                                                    <span>My Homes</span></a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                    <li class=""><a href="https://clicknbook.co/dashboard/review/home"
                                                                         class="">
                                                    <span>Reviews</span></a></li>
                                                                                                                                                                                                                                                                                                <li class=""><a href="https://clicknbook.co/dashboard/get-terms/home-type"
                                                                         class="">
                                                    <span>Types</span></a></li>
                                                                                                                                                                                                                                                                                                <li class=""><a href="https://clicknbook.co/dashboard/get-terms/home-amenity"
                                                                         class="">
                                                    <span>Amenities</span></a></li>
                                                                                                                                                                                            </ul>
                            </li>
                                                                                                                                                                                                        <li class="menu-title">Reservation</li>
                                                                                                                                                                                                                                                        <li><a href="https://clicknbook.co/dashboard/all-booking" class=""><i class="hh-icon  fa"><svg height="24px" width="20px" version="1.1"    x="0px" y="0px"
	 viewBox="0 0 508 508" style="enable-background:new 0 0 508 508;" xml:space="preserve">
<g fill="#555">
	<g fill="#555">
		<polygon points="376.9,8.2 376.9,24.6 406.3,24.6 237.6,193.3 155.7,111.3 51.6,215.4 63.1,227 155.7,134.5 237.6,216.4
			417.9,36.2 417.9,65.5 434.3,65.5 434.3,8.2 		"/>
	</g>
</g>
<g fill="#555">
	<g fill="#555">
		<path d="M491.6,483.4L491.6,483.4V122.9h-81.9v360.5h-16.4V172.1h-81.9v311.4H295V286.8h-82v196.6h-16.4V237.6h-81.9v245.8H98.3
			V368.7H16.4v114.7H0v16.4h508v-16.4H491.6z M82,483.4H32.8v-98.3H82V483.4z M180.3,483.4h-49.2V254h49.2V483.4z M278.6,483.5
			h-49.2V303.2h49.2V483.5z M376.9,483.5h-49.2v-295h49.2V483.5z M475.3,483.4h-49.2V139.3h49.2V483.4z"/>
	</g>
</g>















</svg></i>
                                    <span>Reservation</span></a>
                            </li>
                                                                                                                                                                            <li class="menu-title">System Setting</li>
                                                                                                                                                                                                                                                        <li><a href="https://clicknbook.co/dashboard/settings" class=""><i class="hh-icon  fa"><svg height="24px" width="20px" version="1.1"    x="0px" y="0px"
	 viewBox="0 0 54 54" style="enable-background:new 0 0 54 54;" xml:space="preserve">
<g fill="#555">
	<path d="M51.22,21h-5.052c-0.812,0-1.481-0.447-1.792-1.197s-0.153-1.54,0.42-2.114l3.572-3.571
		c0.525-0.525,0.814-1.224,0.814-1.966c0-0.743-0.289-1.441-0.814-1.967l-4.553-4.553c-1.05-1.05-2.881-1.052-3.933,0l-3.571,3.571
		c-0.574,0.573-1.366,0.733-2.114,0.421C33.447,9.313,33,8.644,33,7.832V2.78C33,1.247,31.753,0,30.22,0H23.78
		C22.247,0,21,1.247,21,2.78v5.052c0,0.812-0.447,1.481-1.197,1.792c-0.748,0.313-1.54,0.152-2.114-0.421l-3.571-3.571
		c-1.052-1.052-2.883-1.05-3.933,0l-4.553,4.553c-0.525,0.525-0.814,1.224-0.814,1.967c0,0.742,0.289,1.44,0.814,1.966l3.572,3.571
		c0.573,0.574,0.73,1.364,0.42,2.114S8.644,21,7.832,21H2.78C1.247,21,0,22.247,0,23.78v6.439C0,31.753,1.247,33,2.78,33h5.052
		c0.812,0,1.481,0.447,1.792,1.197s0.153,1.54-0.42,2.114l-3.572,3.571c-0.525,0.525-0.814,1.224-0.814,1.966
		c0,0.743,0.289,1.441,0.814,1.967l4.553,4.553c1.051,1.051,2.881,1.053,3.933,0l3.571-3.572c0.574-0.573,1.363-0.731,2.114-0.42
		c0.75,0.311,1.197,0.98,1.197,1.792v5.052c0,1.533,1.247,2.78,2.78,2.78h6.439c1.533,0,2.78-1.247,2.78-2.78v-5.052
		c0-0.812,0.447-1.481,1.197-1.792c0.751-0.312,1.54-0.153,2.114,0.42l3.571,3.572c1.052,1.052,2.883,1.05,3.933,0l4.553-4.553
		c0.525-0.525,0.814-1.224,0.814-1.967c0-0.742-0.289-1.44-0.814-1.966l-3.572-3.571c-0.573-0.574-0.73-1.364-0.42-2.114
		S45.356,33,46.168,33h5.052c1.533,0,2.78-1.247,2.78-2.78V23.78C54,22.247,52.753,21,51.22,21z M52,30.22
		C52,30.65,51.65,31,51.22,31h-5.052c-1.624,0-3.019,0.932-3.64,2.432c-0.622,1.5-0.295,3.146,0.854,4.294l3.572,3.571
		c0.305,0.305,0.305,0.8,0,1.104l-4.553,4.553c-0.304,0.304-0.799,0.306-1.104,0l-3.571-3.572c-1.149-1.149-2.794-1.474-4.294-0.854
		c-1.5,0.621-2.432,2.016-2.432,3.64v5.052C31,51.65,30.65,52,30.22,52H23.78C23.35,52,23,51.65,23,51.22v-5.052
		c0-1.624-0.932-3.019-2.432-3.64c-0.503-0.209-1.021-0.311-1.533-0.311c-1.014,0-1.997,0.4-2.761,1.164l-3.571,3.572
		c-0.306,0.306-0.801,0.304-1.104,0l-4.553-4.553c-0.305-0.305-0.305-0.8,0-1.104l3.572-3.571c1.148-1.148,1.476-2.794,0.854-4.294
		C10.851,31.932,9.456,31,7.832,31H2.78C2.35,31,2,30.65,2,30.22V23.78C2,23.35,2.35,23,2.78,23h5.052
		c1.624,0,3.019-0.932,3.64-2.432c0.622-1.5,0.295-3.146-0.854-4.294l-3.572-3.571c-0.305-0.305-0.305-0.8,0-1.104l4.553-4.553
		c0.304-0.305,0.799-0.305,1.104,0l3.571,3.571c1.147,1.147,2.792,1.476,4.294,0.854C22.068,10.851,23,9.456,23,7.832V2.78
		C23,2.35,23.35,2,23.78,2h6.439C30.65,2,31,2.35,31,2.78v5.052c0,1.624,0.932,3.019,2.432,3.64
		c1.502,0.622,3.146,0.294,4.294-0.854l3.571-3.571c0.306-0.305,0.801-0.305,1.104,0l4.553,4.553c0.305,0.305,0.305,0.8,0,1.104
		l-3.572,3.571c-1.148,1.148-1.476,2.794-0.854,4.294c0.621,1.5,2.016,2.432,3.64,2.432h5.052C51.65,23,52,23.35,52,23.78V30.22z"/>
	<path d="M27,18c-4.963,0-9,4.037-9,9s4.037,9,9,9s9-4.037,9-9S31.963,18,27,18z M27,34c-3.859,0-7-3.141-7-7s3.141-7,7-7
		s7,3.141,7,7S30.859,34,27,34z"/>
</g>















</svg></i>
                                    <span>Settings</span></a>
                            </li>
                                                                                                                                                                                                                                <li><a href="https://clicknbook.co/dashboard/menus" class=""><i class="hh-icon  fa"><svg height="24px" viewBox="0 0 480 480" width="20px" ><path d="m240 0c-132.546875 0-240 107.453125-240 240s107.453125 240 240 240 240-107.453125 240-240c-.148438-132.484375-107.515625-239.851562-240-240zm0 464c-123.710938 0-224-100.289062-224-224s100.289062-224 224-224 224 100.289062 224 224c-.140625 123.652344-100.347656 223.859375-224 224zm0 0"/><path d="m344 160h-208c-4.417969 0-8 3.582031-8 8s3.582031 8 8 8h208c4.417969 0 8-3.582031 8-8s-3.582031-8-8-8zm0 0"/><path d="m344 240h-208c-4.417969 0-8 3.582031-8 8s3.582031 8 8 8h208c4.417969 0 8-3.582031 8-8s-3.582031-8-8-8zm0 0"/><path d="m344 320h-208c-4.417969 0-8 3.582031-8 8s3.582031 8 8 8h208c4.417969 0 8-3.582031 8-8s-3.582031-8-8-8zm0 0"/></svg></i>
                                    <span>Menus</span></a>
                            </li>
                                                                                                                                                                                                                                <li><a href="https://clicknbook.co/dashboard/media" class=""><i class="hh-icon  fa"><svg   version="1.1"  x="0px" y="0px" viewBox="0 0 60 46" style="enable-background:new 0 0 60 46;" xml:space="preserve" width="20px" height="24px">
<g fill="#555" >
	<path d="M53.335,46H6.725c-3.691,0-6.695-3.003-6.695-6.695V6.695C0.03,3.004,3.033,0,6.725,0h46.61   c3.692,0,6.695,3.003,6.695,6.695v32.61C60.03,42.997,57.027,46,53.335,46z M6.725,2C4.137,2,2.03,4.106,2.03,6.695v32.61   C2.03,41.894,4.136,44,6.725,44h46.61c2.589,0,4.695-2.106,4.695-4.695V6.695C58.03,4.106,55.924,2,53.335,2L6.725,2L6.725,2z"/>
	<path d="M39.03,22c-3.308,0-6-2.691-6-6s2.692-6,6-6c3.309,0,6,2.691,6,6S42.338,22,39.03,22z M39.03,12c-2.206,0-4,1.794-4,4   s1.794,4,4,4s4-1.794,4-4S41.235,12,39.03,12z"/>
	<path d="M53.335,46H30.474c-0.394,0-0.751-0.231-0.912-0.59s-0.097-0.78,0.165-1.074l15.556-17.5c0.379-0.427,1.115-0.427,1.495,0   l12.521,14.086c0.259,0.292,0.325,0.708,0.168,1.066C58.4,44.425,55.993,46,53.335,46z M32.701,44h20.634   c1.654,0,3.17-0.871,4.013-2.262L46.03,29.005L32.701,44z"/>
	<path d="M30.474,46H6.724c-3.691,0-6.695-3.003-6.695-6.695v-6.18c0-0.245,0.09-0.481,0.253-0.665l17-19.125   c0.379-0.427,1.115-0.427,1.495,0l20,22.5c0.337,0.379,0.337,0.95,0,1.329l-7.556,8.5C31.032,45.878,30.76,46,30.474,46z    M2.03,33.505v5.8C2.03,41.894,4.136,44,6.725,44h23.301l6.667-7.5L18.03,15.505L2.03,33.505z"/>
</g>

</svg></i>
                                    <span>Media</span></a>
                            </li>
                                                                                                                                                                                                                                                        <li class=""><a
                                    class=""
                                    aria-expanded=""
                                    href="javascript: void(0);"><i class="hh-icon  fa"><svg height="24px" viewBox="0 0 480 480" width="20px" ><path d="m240 0c-132.546875 0-240 107.453125-240 240s107.453125 240 240 240c7.230469 0 14.433594-.324219 21.601562-.96875 6.664063-.597656 13.269532-1.511719 19.824219-2.65625l2.519531-.445312c121.863282-22.742188 206.359376-134.550782 194.960938-257.996094-11.398438-123.445313-114.9375-217.8945315-238.90625-217.933594zm-19.28125 463.152344h-.566406c-6.222656-.550782-12.398438-1.382813-18.519532-2.449219-.351562-.0625-.703124-.101563-1.046874-.167969-5.984376-1.070312-11.90625-2.398437-17.769532-3.949218l-1.417968-.363282c-5.71875-1.550781-11.375-3.351562-16.949219-5.351562-.578125-.207032-1.160157-.390625-1.738281-.605469-5.464844-2.007813-10.832032-4.257813-16.117188-6.691406-.65625-.292969-1.3125-.574219-1.96875-.886719-5.183594-2.398438-10.265625-5.101562-15.25-7.945312-.703125-.398438-1.414062-.796876-2.117188-1.191407-4.90625-2.863281-9.699218-5.933593-14.402343-9.175781-.710938-.496094-1.429688-.976562-2.136719-1.472656-4.621094-3.277344-9.125-6.757813-13.511719-10.398438l-1.207031-1.054687v-67.449219c.058594-48.578125 39.421875-87.941406 88-88h112c48.578125.058594 87.941406 39.421875 88 88v67.457031l-1.0625.886719c-4.472656 3.734375-9.0625 7.265625-13.777344 10.601562-.625.4375-1.257812.855469-1.878906 1.285157-4.757812 3.304687-9.632812 6.414062-14.625 9.335937-.625.363282-1.265625.707032-1.886719 1.066406-5.058593 2.878907-10.203125 5.597657-15.449219 8.046876-.601562.28125-1.207031.542968-1.816406.800781-5.328125 2.457031-10.742187 4.71875-16.246094 6.742187-.546874.203125-1.097656.378906-1.601562.570313-5.601562 2.007812-11.28125 3.824219-17.03125 5.382812l-1.378906.34375c-5.871094 1.550781-11.796875 2.886719-17.789063 3.960938-.34375.0625-.6875.105469-1.03125.160156-6.128906 1.070313-12.3125 1.902344-18.539062 2.457031h-.566407c-6.398437.550782-12.800781.847656-19.28125.847656-6.480468 0-12.933593-.242187-19.320312-.792968zm179.28125-66.527344v-52.625c-.066406-57.410156-46.589844-103.933594-104-104h-112c-57.410156.066406-103.933594 46.589844-104 104v52.617188c-86.164062-87.941407-85.203125-228.9375 2.148438-315.699219 87.351562-86.757813 228.351562-86.757813 315.703124 0 87.351563 86.761719 88.3125 227.757812 2.148438 315.699219zm0 0"/><path d="m240 64c-44.183594 0-80 35.816406-80 80s35.816406 80 80 80 80-35.816406 80-80c-.046875-44.164062-35.835938-79.953125-80-80zm0 144c-35.347656 0-64-28.652344-64-64s28.652344-64 64-64 64 28.652344 64 64c-.039062 35.328125-28.671875 63.960938-64 64zm0 0"/></svg></i><span>Users</span>
                                    <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                                                                                                                                                                                            <li class=""><a href="https://clicknbook.co/dashboard/user-management"
                                                                         class="">
                                                    <span>All Users</span></a></li>
                                                                                                                                                                                                                                                                                                <li class=""><a href="https://clicknbook.co/dashboard/user-registration"
                                                                         class="">
                                                    <span>Registration</span></a></li>
                                                                                                                                                                                            </ul>
                            </li>
                                                                                                                                                                                                            <li><a href="https://clicknbook.co/dashboard/coupon" class=""><i class="hh-icon  fa"><svg height="24px" width="20px" version="1.1"    x="0px" y="0px"
	 viewBox="0 0 385.22 385.22" style="enable-background:new 0 0 385.22 385.22;" xml:space="preserve">
<g fill="#555">
	<g fill="#555">
		<path d="M336.02,173.855c0-28-14-40.4-29.2-43.6l-168-92c-8.4-4.4-16-5.2-20.8-4.8c-9.2,0.8-22.8,5.6-33.6,25.6
			c-12-4.4-25.2-4-38.4,1.6c-15.2,6-28,18-36.4,33.6c-16.4,30-11.2,65.2,10.8,82c-4,7.2-6.4,14-7.2,20.8
			c-8.4,11.6-13.2,26.8-13.2,43.6c0,34.4,21.2,62.4,48.8,66.8c0,32.8,19.2,44.4,37.6,44.4h212.4c18,0,37.6-11.6,37.6-44.4
			c27.6-4.4,48.8-32.4,48.8-66.8C385.22,206.255,363.62,178.255,336.02,173.855z M22.02,101.055c6.8-12.8,17.2-22.4,29.6-27.2
			c11.6-4.8,23.2-4.4,32.8,0.8c1.6,0.8,3.6,1.2,5.6,0.4c2-0.4,3.2-1.6,4.4-3.6l3.2-6c6.4-11.6,13.6-17.6,22-18.4
			c2.8-0.4,7.6,0,12.8,2.8l143.6,78.8h-190c-18,0-37.6,11.6-37.6,44.4c-4.4,0.8-8.8,2-12.8,4v-0.4c2-3.6,0.8-8-2.8-9.6
			C12.82,156.655,8.02,126.655,22.02,101.055z M328.82,293.855c-4,0-7.2,3.2-7.2,7.2v6.8c0,26.4-14.4,30-23.2,30H86.02
			c-8.8,0-23.2-4-23.2-30v-7.2c0-4-3.2-7.2-7.2-7.2c-23.2,0-41.6-23.6-41.6-53.2c0-29.2,18.8-53.2,41.6-53.2c4,0,7.2-3.2,7.2-7.2
			v-6.8c0-26.4,14.4-30,23.2-30h212.4c1.6,0,3.2,0,4.8,0.4c8.4,1.6,18,8,18,29.6v6.8c0,4,3.2,7.2,7.2,7.2
			c23.2,0,41.6,23.6,41.6,53.2C370.82,269.855,352.02,293.855,328.82,293.855z"/>
	</g>
</g>
<g fill="#555">
	<g fill="#555">
		<path d="M240.02,163.055c-1.2-1.2-2.8-1.6-4.8-1.6s-3.6,0.4-4.8,1.6c-1.2,1.2-2.4,2.8-3.6,5.2l-81.6,131.6c-1.2,2-2,3.6-2,4.8
			c0,2,0.8,3.2,2.4,4.4c1.6,1.2,2.8,1.6,4.4,1.6c2.4,0,4.8-1.6,6.8-5.2l80.8-130.4c2.8-3.6,4-6.4,4-7.6
			C241.62,165.455,240.82,164.255,240.02,163.055z"/>
	</g>
</g>
<g fill="#555">
	<g fill="#555">
		<path d="M171.22,183.455c-1.2-4.4-3.2-8.4-6-11.6c-2.8-3.2-6-5.6-9.6-7.2c-4-1.6-8.4-2.4-13.2-2.4c-6.8,0-12.8,1.6-17.2,4.4
			c-4.4,2.8-7.6,7.2-9.6,12.8c-2.4,5.6-3.2,12.8-3.2,21.2c0,8,1.2,14.4,4,20c2.4,5.6,6,9.6,10.8,12c4.8,2.4,10,4,15.6,4
			c9.6,0,16.8-3.2,22.4-9.2c5.2-6,8-15.2,8-27.6C173.22,193.455,172.42,188.255,171.22,183.455z M152.42,218.255c-1.6,4-4.8,6-9.6,6
			c-3.2,0-5.6-0.8-7.6-2.8s-3.2-4.4-3.6-8c-0.8-3.6-1.2-8.4-1.2-14c0-5.6,0.4-10,1.2-13.6c0.8-3.6,2-6.4,3.6-8c2-2,4.4-2.8,7.6-2.8
			c4.4,0,7.6,2,9.6,5.6c2,4,2.8,10,2.8,18.4C154.82,207.455,154.02,213.855,152.42,218.255z"/>
	</g>
</g>
<g fill="#555">
	<g fill="#555">
		<path d="M270.42,253.855c-1.2-4.8-3.2-8.8-6-11.6c-2.8-3.2-6-5.6-9.6-6.8c-3.6-1.6-8.4-2.4-13.2-2.4c-10.4,0-18,3.2-22.8,9.6
			c-4.8,6.4-7.2,16-7.2,28.4c0,8,1.2,14.4,4,20c2.8,5.2,6.4,9.2,10.8,12c4.8,2.4,10,4,15.6,4c9.6,0,16.8-3.2,22.4-9.2
			c5.6-6,8-15.2,8-27.6C272.42,263.855,271.62,258.655,270.42,253.855z M251.62,288.255c-1.6,4-4.8,6-9.6,6s-8-2-9.6-6
			c-2-4-2.8-10.4-2.8-19.2c0-5.6,0.4-10.4,1.2-13.6c0.8-3.6,2-6,4-8s4.4-2.8,7.6-2.8c4.4,0,7.6,2,9.6,5.6c2,4,2.8,10,2.8,18.4
			C254.42,277.855,253.62,284.255,251.62,288.255z"/>
	</g>
</g>















</svg></i>
                                    <span>Coupons</span></a>
                            </li>
                                                                                                                                                                                                                                <li><a href="https://clicknbook.co/dashboard/payout" class=""><i class="hh-icon  fa"><svg  enable-background="new 0 0 512 512" height="24px" viewBox="0 0 512 512" width="20px" ><g fill="#555" ><g fill="#555" ><path  d="m120 223.946c7.261 0 13.169 4.947 13.169 11.027 0 5.522 4.477 10 10 10s10-4.478 10-10c0-13.849-9.752-25.606-23.169-29.583v-1.39c0-5.522-4.477-10-10-10s-10 4.478-10 10v1.39c-13.417 3.978-23.169 15.734-23.169 29.583 0 17.109 14.879 31.027 33.169 31.027 7.261 0 13.169 4.946 13.169 11.026s-5.908 11.027-13.169 11.027-13.169-4.947-13.169-11.027c0-5.522-4.477-10-10-10s-10 4.478-10 10c0 13.849 9.752 25.606 23.169 29.583v1.391c0 5.522 4.477 10 10 10s10-4.478 10-10v-1.39c13.417-3.978 23.169-15.734 23.169-29.583 0-17.109-14.879-31.027-33.169-31.027-7.261 0-13.169-4.946-13.169-11.026s5.908-11.028 13.169-11.028z"/><path  d="m240 256c0-15.199-2.806-30.016-8.341-44.037-2.028-5.138-7.834-7.657-12.973-5.631-5.137 2.027-7.658 7.836-5.63 12.973 4.608 11.674 6.944 24.02 6.944 36.695 0 55.141-44.86 100-100 100s-100-44.86-100-100 44.86-100 100-100c12.599 0 24.876 2.31 36.492 6.864 5.141 2.018 10.944-.517 12.96-5.659 2.017-5.142-.517-10.944-5.659-12.96-13.951-5.471-28.685-8.245-43.793-8.245-66.168 0-120 53.832-120 120s53.832 120 120 120 120-53.832 120-120z"/><path  d="m392 223.946c7.261 0 13.169 4.947 13.169 11.027 0 5.522 4.477 10 10 10s10-4.478 10-10c0-13.849-9.752-25.606-23.169-29.583v-1.39c0-5.522-4.477-10-10-10s-10 4.478-10 10v1.39c-13.417 3.978-23.169 15.734-23.169 29.583 0 17.109 14.879 31.027 33.169 31.027 7.261 0 13.169 4.946 13.169 11.026s-5.908 11.027-13.169 11.027-13.169-4.947-13.169-11.027c0-5.522-4.477-10-10-10s-10 4.478-10 10c0 13.849 9.752 25.606 23.169 29.583v1.391c0 5.522 4.477 10 10 10s10-4.478 10-10v-1.39c13.417-3.978 23.169-15.734 23.169-29.583 0-17.109-14.879-31.027-33.169-31.027-7.261 0-13.169-4.946-13.169-11.026s5.908-11.028 13.169-11.028z"/><path  d="m392 136c-66.168 0-120 53.832-120 120s53.832 120 120 120 120-53.832 120-120-53.832-120-120-120zm0 220c-55.14 0-100-44.859-100-100s44.86-100 100-100 100 44.859 100 100-44.86 100-100 100z"/><path  d="m341.616 402.561c-3.905-3.904-10.237-3.904-14.143 0-3.905 3.905-3.905 10.237 0 14.143l4.005 4.005h-175.1c-5.523 0-10 4.478-10 10s4.477 10 10 10h175.1l-4.005 4.005c-3.905 3.905-3.905 10.237 0 14.143 1.953 1.952 4.512 2.929 7.071 2.929s5.119-.977 7.071-2.929l21.076-21.076c3.905-3.905 3.905-10.237 0-14.143z"/><path  d="m170.384 109.438c1.953 1.952 4.512 2.929 7.071 2.929s5.119-.977 7.071-2.929c3.905-3.905 3.905-10.237 0-14.143l-4.005-4.005h175.1c5.523 0 10-4.478 10-10s-4.477-10-10-10h-175.1l4.005-4.005c3.905-3.905 3.905-10.237 0-14.143-3.905-3.904-10.237-3.904-14.143 0l-21.076 21.076c-3.905 3.905-3.905 10.237 0 14.143z"/><path  d="m190.71 171.149c-1.86 1.86-2.93 4.44-2.93 7.07s1.07 5.21 2.93 7.07c1.86 1.859 4.44 2.93 7.07 2.93s5.21-1.07 7.07-2.93 2.93-4.44 2.93-7.07-1.07-5.21-2.93-7.07c-1.86-1.869-4.44-2.93-7.07-2.93s-5.21 1.061-7.07 2.93z"/></g></g></svg></i>
                                    <span>Payouts</span></a>
                            </li>
                                                                                                                                                                            <li class="menu-title">Tools</li>
                                                                                                                                                                                                                                                        <li><a href="https://clicknbook.co/dashboard/language" class=""><i class="hh-icon  fa"><svg height="24px" viewBox="0 0 480 480" width="20px" ><path d="m240 0c-132.546875 0-240 107.453125-240 240s107.453125 240 240 240 240-107.453125 240-240c-.148438-132.484375-107.515625-239.851562-240-240zm207.566406 324.078125-68.253906 11.777344c7.8125-28.652344 12.03125-58.164063 12.558594-87.855469h71.929687c-.902343 26.117188-6.398437 51.871094-16.234375 76.078125zm-431.367187-76.078125h71.929687c.527344 29.691406 4.746094 59.203125 12.558594 87.855469l-68.253906-11.777344c-9.835938-24.207031-15.332032-49.960937-16.234375-76.078125zm16.234375-92.078125 68.253906-11.777344c-7.8125 28.652344-12.03125 58.164063-12.558594 87.855469h-71.929687c.902343-26.117188 6.398437-51.871094 16.234375-76.078125zm215.566406-27.472656c28.746094.367187 57.421875 2.984375 85.761719 7.832031l28.238281 4.871094c8.675781 29.523437 13.34375 60.078125 13.878906 90.847656h-127.878906zm88.488281-7.9375c-29.238281-4.996094-58.828125-7.695313-88.488281-8.0625v-96c45.863281 4.40625 85.703125 46.398437 108.28125 107.511719zm-104.488281-8.0625c-29.660156.367187-59.242188 3.066406-88.480469 8.0625l-19.800781 3.425781c22.578125-61.128906 62.417969-103.136719 108.28125-107.523438zm-85.753906 23.832031c28.335937-4.847656 57.007812-7.464844 85.753906-7.832031v103.550781h-127.878906c.535156-30.769531 5.203125-61.324219 13.878906-90.847656zm-42.125 111.71875h127.878906v103.550781c-28.746094-.367187-57.421875-2.984375-85.761719-7.832031l-28.238281-4.871094c-8.675781-29.523437-13.34375-60.078125-13.878906-90.847656zm39.390625 111.488281c29.238281 5.003907 58.824219 7.714844 88.488281 8.105469v96c-45.863281-4.410156-85.703125-46.402344-108.28125-107.515625zm104.488281 8.105469c29.660156-.390625 59.242188-3.101562 88.480469-8.105469l19.800781-3.425781c-22.578125 61.128906-62.417969 103.136719-108.28125 107.523438zm85.753906-23.875c-28.335937 4.847656-57.007812 7.464844-85.753906 7.832031v-103.550781h127.878906c-.535156 30.769531-5.203125 61.324219-13.878906 90.847656zm58.117188-111.71875c-.527344-29.691406-4.746094-59.203125-12.558594-87.855469l68.253906 11.777344c9.835938 24.207031 15.332032 49.960937 16.234375 76.078125zm47.601562-93.710938-65.425781-11.289062c-11.761719-38.371094-33.765625-72.808594-63.648437-99.601562 55.878906 18.648437 102.21875 58.457031 129.074218 110.890624zm-269.871094-110.890624c-29.882812 26.792968-51.886718 61.230468-63.648437 99.601562l-65.425781 11.289062c26.855468-52.433593 73.195312-92.242187 129.074218-110.890624zm-129.074218 314.3125 65.425781 11.289062c11.761719 38.371094 33.765625 72.808594 63.648437 99.601562-55.878906-18.648437-102.21875-58.457031-129.074218-110.890624zm269.871094 110.890624c29.882812-26.792968 51.886718-61.230468 63.648437-99.601562l65.425781-11.289062c-26.855468 52.433593-73.195312 92.242187-129.074218 110.890624zm0 0"/></svg></i>
                                    <span>Languages</span></a>
                            </li>
                                                                                                                                                                                                                                <li><a href="https://clicknbook.co/dashboard/translation" class=""><i class="hh-icon  fa"><svg height="24px" viewBox="0 0 512 512" width="20px" ><path d="m470 180h-140.644531c.445312-4.933594.6875-9.929688.6875-14.980469 0-90.992187-74.03125-165.019531-165.023438-165.019531-28.984375 0-57.496093 7.625-82.453125 22.046875-4.78125 2.761719-6.417968 8.878906-3.65625 13.660156 2.765625 4.785157 8.882813 6.417969 13.664063 3.65625 21.917969-12.667969 46.96875-19.363281 72.445312-19.363281 79.964844 0 145.023438 65.054688 145.023438 145.019531 0 79.964844-65.058594 145.023438-145.023438 145.023438-33.472656 0-64.917969-11.089844-90.9375-32.066407-2.609375-2.101562-6.066406-2.730468-9.214843-1.765624l-26.542969 6.941406 10.398437-22.851563c1.496094-3.28125 1.105469-7.109375-1.015625-10.027343-18.125-24.894532-27.707031-54.375-27.707031-85.253907 0-25.542969 6.730469-50.65625 19.464844-72.621093 2.769531-4.78125 1.140625-10.898438-3.636719-13.667969s-10.894531-1.144531-13.667969 3.636719c-14.496094 25.007812-22.160156 53.589843-22.160156 82.652343 0 33.160157 9.714844 64.914063 28.152344 92.199219l-16.742188 36.785156c-1.601562 3.511719-1.035156 7.628906 1.449219 10.582032 2.484375 2.953124 6.445313 4.210937 10.179687 3.234374l42.527344-11.117187c28.507813 21.535156 63.621094 33.339844 99.453125 33.339844 7.800781 0 15.46875-.558594 22.980469-1.609375v87.566406c0 23.15625 18.839844 42 41.996094 42h141.433594l63.238281 51.738281c1.820312 1.492188 4.066406 2.257813 6.332031 2.257813 1.457031 0 2.917969-.316406 4.28125-.960938 3.492188-1.65625 5.71875-5.171875 5.71875-9.039062v-43.996094h19c23.160156 0 42-18.84375 42-42v-194c0-23.160156-18.839844-42-42-42zm22 236c0 12.128906-9.867188 22-22 22h-29c-5.523438 0-10 4.476562-10 10v32.894531l-49.390625-40.410156c-2.722656-2.484375-5.105469-2.484375-10.460937-2.484375h-141.152344c-12.128906 0-21.996094-9.871094-21.996094-22v-91.648438c59.152344-15.972656 105.238281-64.074218 118.296875-124.351562h143.703125c12.132812 0 22 9.867188 22 22zm0 0"/><path d="m399.761719 348.605469c3.390625-1.597657 5.742187-5.039063 5.742187-9.039063 0-5.519531-4.476562-10-10-10h-4.09375l-32.25-73.5c-1.597656-3.636718-5.191406-5.984375-9.160156-5.984375s-7.5625 2.347657-9.15625 5.984375l-32.25 73.5h-4.09375c-5.523438 0-10 4.480469-10 10 0 4 2.351562 7.441406 5.742188 9.039063l-12.011719 27.375c-2.21875 5.058593.082031 10.957031 5.136719 13.175781 5.058593 2.21875 10.957031-.082031 13.175781-5.140625l15.117187-34.449219h56.683594l15.117188 34.449219c1.644531 3.75 5.3125 5.984375 9.164062 5.984375 1.339844 0 2.703125-.269531 4.011719-.84375 5.054687-2.21875 7.359375-8.117188 5.136719-13.175781zm-69.328125-19.039063 19.566406-44.59375 19.566406 44.59375zm0 0"/><path d="m55.402344 65.398438c2.628906 0 5.207031-1.070313 7.070312-2.929688 1.859375-1.859375 2.929688-4.4375 2.929688-7.070312 0-2.628907-1.070313-5.207032-2.929688-7.070313-1.863281-1.859375-4.441406-2.929687-7.070312-2.929687-2.640625 0-5.210938 1.070312-7.070313 2.929687-1.859375 1.863281-2.929687 4.441406-2.929687 7.070313 0 2.632812 1.070312 5.210937 2.929687 7.070312 1.859375 1.863281 4.4375 2.929688 7.070313 2.929688zm0 0"/><path d="m105.328125 225.878906c-4.84375 2.65625-6.617187 8.734375-3.960937 13.578125 1.820312 3.316407 5.246093 5.195313 8.777343 5.195313 1.625 0 3.273438-.398438 4.800781-1.234375 22.300782-12.230469 39.457032-31.253907 49.492188-53.6875 10.039062 22.433593 27.191406 41.457031 49.492188 53.6875 1.527343.835937 3.175781 1.234375 4.800781 1.234375 3.53125 0 6.957031-1.878906 8.777343-5.195313 2.65625-4.84375.882813-10.921875-3.960937-13.578125-26.105469-14.316406-43.675781-39.902344-48.039063-68.8125h44.398438c5.523438 0 10-4.476562 10-10 0-5.523437-4.476562-10-10-10h-45.46875v-41.671875c0-5.523437-4.476562-10-10-10s-10 4.476563-10 10v41.671875h-36.125c-5.523438 0-10 4.476563-10 10 0 5.523438 4.476562 10 10 10h35.054688c-4.363282 28.910156-21.933594 54.5-48.039063 68.8125zm0 0"/></svg></i>
                                    <span>Translation</span></a>
                            </li>
                                                                                                                                                                                                                                <li><a href="https://clicknbook.co/dashboard/addons" class=""><i class="hh-icon  fa"><svg height="24px" width="20px" version="1.1"    x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g fill="#555">
	<g fill="#555">
		<g fill="#555">
			<rect x="445.176" y="222.066" width="15.208" height="32.606"/>
			<path d="M465.275,103.536V55.237c0-10.89-8.859-19.75-19.749-19.75H292.721c-10.89,0-19.75,8.86-19.75,19.75v48.298h-38.498
				V55.237c0-10.89-8.86-19.75-19.75-19.75H61.918c-10.891,0-19.75,8.86-19.75,19.75v48.298H0v372.977h512V103.536H465.275z
				 M288.178,55.237c0-2.505,2.038-4.542,4.542-4.542h152.805c2.504,0,4.541,2.038,4.541,4.542v48.298H422.47V64.268h-15.208v39.268
				H288.178V55.237z M57.374,55.237c0-2.505,2.038-4.542,4.542-4.542h152.804c2.504,0,4.542,2.038,4.542,4.542v48.298h-29.126
				V64.268h-15.208v39.268H57.374V55.237z M496.792,461.305h-36.404V269.298H445.18v192.007H15.208V118.743h26.959h192.305h38.498
				h192.305h31.517V461.305z"/>
			<path d="M385.777,275.757c-1.028-0.078-2.067-0.118-3.092-0.118c-10.329,0-20.117,3.942-27.562,11.096
				c-0.054,0.051-0.105,0.101-0.159,0.15v-81.028h-81.027c0.05-0.054,0.099-0.105,0.149-0.158
				c7.838-8.156,11.84-19.33,10.978-30.656c-1.449-19.026-16.24-34.353-35.171-36.443c-1.494-0.164-3.008-0.248-4.5-0.248
				c-21.939,0-39.787,17.848-39.787,39.788c0,10.414,3.994,20.254,11.25,27.719h-81.031v99.334h7.604
				c6.248,0,12.237-2.492,16.431-6.835c5.122-5.303,12.213-8.006,19.621-7.435c11.548,0.878,21.213,10.196,22.481,21.673
				c0.787,7.121-1.381,13.948-6.105,19.223c-4.661,5.204-11.337,8.189-18.317,8.189c-6.631,0-12.846-2.602-17.502-7.328
				c-3.186-3.232-7.177-5.463-11.542-6.449c-0.757-0.172-1.534-0.259-2.307-0.259c-5.715,0-10.364,4.639-10.364,10.343v88.681
				h88.991c5.703,0,10.343-4.639,10.343-10.342c0-6.248-2.492-12.238-6.836-16.432c-5.285-5.103-7.994-12.256-7.435-19.622
				c0.879-11.548,10.197-21.212,21.675-22.48c0.943-0.105,1.895-0.157,2.831-0.157c13.553,0,24.58,11.027,24.58,24.58
				c0,6.606-2.585,12.805-7.281,17.456c-4.555,4.514-7.065,10.396-7.065,16.565c0,5.753,4.68,10.433,10.434,10.433h88.9v-81.031
				c7.465,7.255,17.304,11.25,27.719,11.25c11.299,0,22.105-4.83,29.646-13.251c7.537-8.415,11.142-19.728,9.893-31.037
				C420.13,291.995,404.803,277.205,385.777,275.757z M401.001,331.817c-4.661,5.205-11.338,8.19-18.317,8.19
				c-6.457,0-12.557-2.486-17.174-7c-4.843-4.737-11.287-7.344-18.148-7.344h-7.604v84.126h-67.227
				c0.262-0.342,0.551-0.671,0.868-0.987c7.6-7.528,11.785-17.564,11.785-28.259c0-21.94-17.848-39.788-39.788-39.788
				c-1.491,0-3.005,0.084-4.5,0.248c-18.931,2.093-33.722,17.419-35.17,36.442c-0.905,11.898,3.482,23.458,12.036,31.718
				c0.202,0.195,0.391,0.404,0.569,0.625h-67.295v-64.691c7.3,6.542,16.618,10.117,26.507,10.117
				c11.298,0,22.104-4.83,29.646-13.251c7.537-8.415,11.142-19.728,9.892-31.038c-2.092-18.93-17.419-33.72-36.444-35.168
				c-1.027-0.078-2.068-0.118-3.092-0.118c-9.906,0-19.212,3.571-26.508,10.116v-64.689l84.126-0.005v-7.604
				c0-6.856-2.608-13.299-7.344-18.144c-4.515-4.618-7.001-10.716-7.001-17.174c0-13.553,11.026-24.58,24.579-24.58
				c0.936,0,1.888,0.053,2.831,0.157c11.478,1.267,20.796,10.932,21.675,22.481c0.541,7.117-1.867,13.851-6.78,18.964
				c-4.831,5.026-7.491,11.525-7.491,18.3v7.604h84.126v84.126h7.604c6.775,0,13.273-2.66,18.301-7.491
				c5.061-4.863,11.901-7.314,18.963-6.78c11.548,0.878,21.213,10.196,22.481,21.675
				C407.893,319.717,405.725,326.542,401.001,331.817z"/>
		</g>
	</g>
</g>















</svg></i>
                                    <span>Addons</span></a>
                            </li>
                                                                                                                                                                                                                                                        <li class=""><a
                                    class=""
                                    aria-expanded=""
                                    href="javascript: void(0);"><i class="hh-icon  fa"><svg height="24px" width="20px" version="1.1"    x="0px" y="0px"
	 viewBox="0 0 512.003 512.003" style="enable-background:new 0 0 512.003 512.003;" xml:space="preserve">
<g fill="#555">
	<g fill="#555">
		<path d="M469.322,323.07v-0.833c0-18.413-14.981-33.394-33.395-33.394h-95.291l6.196-138.71c0.139-3.124-1.631-6.02-4.476-7.319
			c-24.982-11.41-41.124-36.507-41.124-63.937c0-23.546,11.821-45.28,30.921-58.208v47.282c0,10.904,8.872,19.775,19.776,19.775
			h39.147c10.904,0,19.776-8.871,19.776-19.775V20.67c19.1,12.928,30.921,34.662,30.921,58.208c0,28.129-16.709,53.482-42.567,64.59
			c-2.949,1.267-4.797,4.236-4.632,7.442l5.394,104.645c0.218,4.229,3.818,7.491,8.054,7.264c4.23-0.218,7.482-3.824,7.264-8.054
			l-5.129-99.492c28.693-14.516,46.953-43.939,46.953-76.396c0-33.759-19.943-64.459-50.807-78.213
			c-2.372-1.057-5.118-0.842-7.298,0.573c-2.178,1.414-3.493,3.835-3.493,6.432v60.28c0,2.447-1.991,4.437-4.437,4.437h-39.147
			c-2.447,0-4.437-1.99-4.437-4.437V7.671c0-2.597-1.315-5.018-3.493-6.432c-2.179-1.415-4.926-1.63-7.298-0.573
			c-30.864,13.753-50.807,44.454-50.807,78.213c0,31.666,17.651,60.776,45.391,75.566l-0.264,16.507
			c-5.309-4.207-12.006-6.734-19.284-6.751c-3.211-0.062-13.883,0.497-22.283,9.271c-7.12,7.438-8.276,16.197-8.331,20.754
			c-0.007,0.615-0.122,1.262-0.341,1.924c-5.175,15.659-11.925,30.494-20.063,44.092c-2.175,3.634-0.992,8.344,2.642,10.519
			c3.635,2.176,8.344,0.992,10.519-2.642c8.715-14.564,15.938-30.429,21.465-47.154c0.713-2.155,1.088-4.358,1.115-6.55
			c0.028-2.3,0.594-6.701,4.073-10.335c4.059-4.239,9.362-4.543,10.791-4.543c0.144,0,0.236,0.003,0.34,0.003
			c8.771,0,15.907,7.147,15.907,15.933c0,3.42,0.024,6.584,0.047,9.576c0.037,4.813,0.069,8.969-0.004,13.086
			c-0.214,12.18-0.757,23.017-1.281,33.497c-0.682,13.62-1.387,27.703-1.387,44.882c0,4.236,3.434,7.669,7.669,7.669h103.31
			c9.956,0,18.056,8.1,18.056,18.056v0.833c0,9.956-8.1,18.057-18.056,18.057h-22.27c-4.236,0-7.669,3.433-7.669,7.669
			c0,4.236,3.434,7.669,7.669,7.669h22.27c9.956,0,18.056,8.101,18.056,18.057v0.175c0,9.956-8.1,18.056-18.056,18.056h-22.27
			c-4.236,0-7.669,3.433-7.669,7.669c0,4.236,3.434,7.669,7.669,7.669h22.27c9.956,0,18.056,8.101,18.056,18.057v1.008
			c0,9.956-8.1,18.057-18.056,18.057h-22.27c-4.236,0-7.669,3.433-7.669,7.669c0,4.236,3.434,7.669,7.669,7.669h22.27
			c9.956,0,18.056,8.101,18.056,18.057s-8.1,18.056-18.056,18.056H252.886c-18.039,0-35.126-6.895-48.113-19.415l-7.697-7.42
			v-146.86c10.478-5.824,20.429-12.547,29.63-20.032c5.563-4.526,10.946-9.406,16-14.506c2.981-3.009,2.959-7.864-0.049-10.846
			s-7.864-2.959-10.846,0.049c-4.67,4.712-9.644,9.222-14.785,13.405c-6.507,5.293-13.428,10.165-20.658,14.581
			c-2.49-9.636-11.257-16.776-21.66-16.776H50.351c-4.236,0-7.669,3.433-7.669,7.669v207.819c0,4.236,3.434,7.669,7.669,7.669
			h124.356c11.888,0,21.636-9.323,22.326-21.04c15.461,13.596,35.142,21.04,55.853,21.04h183.041
			c18.414,0,33.395-14.981,33.395-33.395c0-10.338-4.722-19.594-12.123-25.725c7.401-6.13,12.123-15.387,12.123-25.726v-1.008
			c0-10.338-4.722-19.595-12.123-25.726c7.401-6.13,12.123-15.386,12.123-25.725v-0.175c0-10.339-4.723-19.595-12.124-25.726
			C464.598,342.666,469.322,333.409,469.322,323.07z M181.738,318.298c0,0.011,0,0.022,0,0.033v171.301
			c0,3.877-3.154,7.031-7.03,7.031H58.02V304.182h116.687c3.877,0,7.03,3.154,7.03,7.03V318.298z"/>
	</g>
</g>
<g fill="#555">
	<g fill="#555">
		<circle cx="137.272" cy="343.741" r="10.742"/>
	</g>
</g>















</svg></i><span>Advanced</span>
                                    <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                                                                                                                                                                                            <li class=""><a href="https://clicknbook.co/dashboard/import-fonts"
                                                                         class="">
                                                    <span>Import Font Icon</span></a></li>
                                                                                                                                                                                                                                                                                                <li class=""><a href="https://clicknbook.co/dashboard/email-checker"
                                                                         class="">
                                                    <span>Email Checker</span></a></li>
                                                                                                                                                                                                                                                                                                <li class=""><a href="https://clicknbook.co/dashboard/tinypng-compress"
                                                                         class="">
                                                    <span>TinyPNG Compress</span></a></li>
                                                                                                                                                                                                                                                                                                <li class=""><a href="https://clicknbook.co/dashboard/site-map"
                                                                         class="">
                                                    <span>Sitemap</span></a></li>
                                                                                                                                                                                            </ul>
                            </li>
                                            <li>
                <a href="https://clicknbook.co/dashboard/seo-tools">
                    <i class="hh-icon  fa"><svg height="24px" viewBox="0 0 512 512" width="20px" ><g fill="#555"><path d="m123.806 105h234.55c21.146 0 38.349 17.271 38.349 38.5v102.556c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-102.556c0-29.5-23.932-53.5-53.349-53.5h-234.55c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5z"/><path d="m306.358 336.556h-141.431c-2.201 0-4.291.967-5.716 2.645l-42.497 50.021-42.496-50.022c-1.425-1.678-3.515-2.645-5.716-2.645h-15.153c-21.146 0-38.349-17.271-38.349-38.5v-154.555c0-21.229 17.203-38.5 38.349-38.5h35.679c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-35.679c-29.417 0-53.349 24-53.349 53.5v154.556c0 29.5 23.932 53.5 53.349 53.5h11.684l45.966 54.105c1.425 1.678 3.515 2.645 5.716 2.645s4.291-.967 5.716-2.645l45.966-54.105h137.961c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5z"/><path d="m221.328 447.329h-68.184c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h68.184c9.528 0 17.28 7.776 17.28 17.335s-7.752 17.336-17.28 17.336h-189.048c-9.528 0-17.28-7.777-17.28-17.336s7.752-17.335 17.28-17.335h6.635c2.406 0 4.666-1.154 6.076-3.103l13.033-18.009 13.033 18.009c1.41 1.948 3.67 3.103 6.076 3.103h41.332c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-37.502l-16.863-23.302c-1.41-1.948-3.67-3.103-6.076-3.103s-4.666 1.154-6.076 3.103l-16.863 23.302h-2.805c-17.799 0-32.28 14.506-32.28 32.335 0 17.83 14.481 32.336 32.28 32.336h189.048c17.799 0 32.28-14.506 32.28-32.336 0-17.829-14.481-32.335-32.28-32.335z"/><path d="m290.659 64.671h28.213c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-28.213c-9.528 0-17.28-7.776-17.28-17.335s7.752-17.336 17.28-17.336h189.048c9.528 0 17.28 7.776 17.28 17.335s-7.752 17.336-17.28 17.336h-6.635c-2.406 0-4.666 1.154-6.076 3.103l-13.033 18.009-13.033-18.01c-1.41-1.948-3.67-3.103-6.076-3.103h-81.302c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h77.472l16.863 23.302c1.41 1.948 3.67 3.103 6.076 3.103s4.666-1.154 6.076-3.103l16.863-23.302h2.805c17.799 0 32.28-14.506 32.28-32.336 0-17.828-14.481-32.334-32.28-32.334h-189.048c-17.799 0-32.28 14.506-32.28 32.336 0 17.829 14.481 32.335 32.28 32.335z"/><path d="m109.855 253.936c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h39.999c4.142 0 7.5-3.357 7.5-7.5v-40c0-4.143-3.358-7.5-7.5-7.5h-32.499v-25h32.499c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-39.999c-4.142 0-7.5 3.357-7.5 7.5v40c0 4.143 3.358 7.5 7.5 7.5h32.499v25z"/><path d="m224.852 188.936c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-39.999c-4.142 0-7.5 3.357-7.5 7.5v80c0 4.143 3.358 7.5 7.5 7.5h39.999c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-32.499v-25h32.499c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-32.499v-25z"/><path d="m259.852 173.936c-4.142 0-7.5 3.357-7.5 7.5v80c0 4.143 3.358 7.5 7.5 7.5h39.999c4.142 0 7.5-3.357 7.5-7.5v-80c0-4.143-3.358-7.5-7.5-7.5zm32.499 80h-24.999v-65h24.999z"/><path d="m511.987 345.242c-.001-3.688-2.683-6.827-6.325-7.404l-10.348-1.642-4.939-11.919 6.154-8.489c2.164-2.985 1.837-7.1-.77-9.706l-21.182-21.18c-2.61-2.609-6.729-2.934-9.713-.763l-8.471 6.158-11.914-4.934-1.647-10.352c-.579-3.642-3.72-6.321-7.407-6.321h-.003l-29.945.012c-3.688.001-6.829 2.685-7.405 6.328l-1.639 10.357-11.903 4.939-8.479-6.154c-2.987-2.168-7.106-1.842-9.712.77l-21.167 21.195c-2.605 2.608-2.928 6.724-.762 9.706l6.157 8.48-4.933 11.929-10.341 1.648c-3.642.58-6.321 3.722-6.32 7.409l.012 29.965c.001 3.688 2.684 6.827 6.326 7.404l10.347 1.641 4.939 11.919-6.154 8.489c-2.164 2.985-1.837 7.1.769 9.706l21.181 21.181c2.608 2.607 6.727 2.934 9.713.763l8.471-6.158 11.913 4.934 1.647 10.352c.58 3.642 3.72 6.321 7.407 6.321h.003l29.945-.013c3.688-.002 6.828-2.685 7.404-6.327l1.64-10.358 11.904-4.939 8.479 6.155c2.986 2.168 7.105 1.841 9.712-.77l21.167-21.195c2.605-2.608 2.928-6.723.763-9.706l-6.157-8.481 4.933-11.929 10.341-1.647c3.642-.58 6.322-3.722 6.32-7.409zm-23.154 24.869c-2.576.41-4.754 2.13-5.751 4.54l-8.141 19.686c-.996 2.409-.67 5.163.861 7.272l4.863 6.698-12.118 12.135-6.694-4.859c-2.113-1.533-4.87-1.858-7.28-.858l-19.661 8.158c-2.409 1-4.125 3.179-4.533 5.755l-1.295 8.18-17.138.007-1.301-8.173c-.41-2.575-2.128-4.753-4.538-5.751l-19.672-8.146c-.924-.383-1.898-.57-2.869-.57-1.561 0-3.108.487-4.411 1.434l-6.686 4.86-12.125-12.125 4.861-6.706c1.53-2.111 1.854-4.865.856-7.273l-8.151-19.675c-.999-2.41-3.178-4.128-5.754-4.536l-8.171-1.296-.007-17.16 8.165-1.302c2.576-.41 4.754-2.13 5.75-4.54l8.141-19.686c.997-2.409.67-5.163-.862-7.272l-4.863-6.698 12.118-12.134 6.694 4.858c2.113 1.535 4.871 1.858 7.28.858l19.661-8.158c2.409-1 4.125-3.18 4.533-5.756l1.294-8.179 17.138-.006 1.3 8.173c.41 2.575 2.128 4.753 4.538 5.751l19.673 8.146c2.412.998 5.168.671 7.279-.863l6.686-4.86 12.126 12.125-4.861 6.705c-1.53 2.111-1.854 4.865-.856 7.273l8.153 19.674c.999 2.41 3.178 4.128 5.754 4.536l8.172 1.296.007 17.161z"/><path d="m452.329 352.759c-4.142 0-7.5 3.357-7.5 7.5 0 13.423-10.92 24.343-24.342 24.343s-24.342-10.92-24.342-24.343 10.92-24.343 24.342-24.343c3.515 0 6.904.731 10.071 2.173 3.771 1.718 8.218.051 9.934-3.719 1.716-3.771.051-8.218-3.719-9.934-5.132-2.336-10.611-3.521-16.286-3.521-21.693 0-39.342 17.649-39.342 39.343s17.649 39.343 39.342 39.343 39.342-17.649 39.342-39.343c0-4.142-3.358-7.499-7.5-7.499z"/></g></svg></i>                    Seo Tools                </a>
            </li>
                                                                                                                                                                                        <li><a href="https://clicknbook.co/dashboard/api-settings" class=""><i class="hh-icon  fa"><svg height="24px" viewBox="0 -8 512 512" width="20px" ><path d="m512 215.921875c0-19.074219-6.019531-37.207031-17.410156-52.441406-9.851563-13.179688-23.449219-23.457031-38.722656-29.371094-.878907-38.738281-32.664063-69.980469-71.609376-69.980469-8.734374 0-17.238281 1.574219-25.371093 4.691406-12.949219-19.773437-30.394531-36.378906-50.785157-48.28125-23.023437-13.4375-49.359374-20.539062-76.148437-20.539062-28.859375 0-56.929687 8.15625-81.171875 23.589844-22.378906 14.246094-40.632812 34.070312-52.996094 57.5-26.140625 3.257812-50.234375 15.628906-68.222656 35.121094-19.0625 20.65625-29.5625 47.527343-29.5625 75.660156 0 41.265625 22.492188 77.375 55.863281 96.71875.253907 7.910156.640625 20.730468 1.164063 26.210937.664062 6.921875 5.964844 12.566407 12.894531 13.730469l22.285156 3.746094c4.238281 19.34375 11.738281 37.492187 22.347657 54.074218l-13.078126 18.359376c-4.078124 5.71875-3.832031 13.464843.59375 18.824218 4.054688 4.917969 8.289063 9.585938 12.589844 13.886719 4.292969 4.296875 8.964844 8.53125 13.882813 12.585937 5.363281 4.429688 13.105469 4.675782 18.828125.597657l18.359375-13.078125c16.582031 10.609375 34.726562 18.109375 54.074219 22.347656l3.742187 22.285156c1.164063 6.925782 6.8125 12.230469 13.734375 12.890625 6.351562.609375 12.648438.917969 18.71875.917969s12.371094-.308594 18.71875-.917969c6.921875-.660156 12.570312-5.964843 13.734375-12.890625l3.742187-22.285156c19.347657-4.238281 37.492188-11.738281 54.074219-22.347656l18.359375 13.078125c5.722656 4.078125 13.464844 3.832031 18.828125-.59375 4.917969-4.058594 9.589844-8.292969 13.886719-12.589844s8.53125-8.96875 12.585938-13.882813c4.425781-5.363281 4.671874-13.105468.59375-18.828124l-13.078126-18.359376c10.609376-16.582031 18.109376-34.730468 22.347657-54.074218l22.285156-3.742188c6.925781-1.164062 12.230469-6.8125 12.894531-13.734375.550782-5.785156.84375-11.519531.894532-17.085937 32.804687-12.691406 56.132812-44.566406 56.132812-81.792969zm-87.660156 72.660156h-272.550782c-4.140624 0-7.5 3.355469-7.5 7.5 0 4.140625 3.359376 7.5 7.5 7.5h8.828126c3.835937 49.265625 45.148437 88.175781 95.382812 88.175781s91.546875-38.910156 95.382812-88.175781h72.957032c5.613281 0 11.105468-.539062 16.429687-1.550781-.128906 3.726562-.367187 7.515625-.730469 11.335938-.015624.148437-.199218.332031-.449218.375l-27.363282 4.597656c-3.101562.519531-5.550781 2.925781-6.128906 6.015625-3.925781 20.964843-11.980468 40.449219-23.9375 57.917969-1.773437 2.59375-1.742187 6.023437.082032 8.585937l16.0625 22.554687c.148437.207032.148437.464844.054687.578126-3.753906 4.546874-7.664063 8.863281-11.625 12.824218-3.960937 3.957032-8.273437 7.871094-12.824219 11.625-.113281.09375-.375.09375-.578125-.050781l-22.554687-16.066406c-2.5625-1.824219-5.992188-1.855469-8.585938-.078125-17.464844 11.957031-36.953125 20.007812-57.917968 23.933594-3.089844.582031-5.496094 3.027343-6.015626 6.128906l-4.597656 27.367187c-.042968.25-.226562.429688-.371094.445313-5.875.5625-11.691406.847656-17.289062.847656s-11.414062-.285156-17.289062-.847656c-.148438-.015625-.332032-.195313-.371094-.445313l-4.601563-27.367187c-.519531-3.101563-2.921875-5.546875-6.015625-6.128906-20.964844-3.925782-40.449218-11.976563-57.914062-23.933594-2.597656-1.777344-6.027344-1.746094-8.589844.078125l-22.550781 16.066406c-.207031.144531-.464844.144531-.582031.050781-4.550782-3.753906-8.863282-7.664062-12.824219-11.625-3.960938-3.960937-7.871094-8.277344-11.625-12.824218-.089844-.113282-.09375-.375.054687-.582032l16.0625-22.550781c1.824219-2.5625 1.859375-5.992187.082032-8.589844-11.957032-17.464843-20.011719-36.949219-23.9375-57.914062-.578126-3.09375-3.027344-5.496094-6.128907-6.015625l-27.363281-4.597656c-.25-.042969-.433594-.226563-.445312-.375-.46875-4.882813-.738282-11.949219-.8125-17.410157 12.578124 4.917969 26.257812 7.621094 40.558593 7.621094h8.015625c4.140625 0 7.5-3.355469 7.5-7.5 0-4.140625-3.359375-7.5-7.5-7.5h-8.015625c-53.324219.003906-96.707031-43.382813-96.707031-96.707031 0-24.351563 9.085938-47.609375 25.585938-65.488282 16.402343-17.773437 38.660156-28.710937 62.675781-30.789062 2.613281-.226562 4.917969-1.804688 6.082031-4.15625 11.140625-22.589844 28.257812-41.675781 49.492188-55.195312 21.832031-13.894532 47.113281-21.242188 73.117187-21.242188 24.136719 0 47.855469 6.394531 68.589844 18.496094 20.105469 11.730468 37.035156 28.542968 48.960937 48.613281 2 3.367187 6.253906 4.628906 9.765625 2.898437 7.902344-3.902343 16.308594-5.878906 24.988281-5.878906 31.226563 0 56.628907 25.402344 56.628907 56.628906 0 .605469-.046875 1.300782-.097657 2.039063-.023437.386719-.050781.773437-.070312 1.160156-.191406 3.433594 1.972656 6.554688 5.257812 7.578125 30.519532 9.503906 51.023438 37.390625 51.023438 69.386719 0 40.0625-32.597656 72.660156-72.660156 72.660156zm-88.023438 15c-3.796875 40.980469-38.363281 73.175781-80.316406 73.175781-41.957031 0-76.519531-32.195312-80.316406-73.175781zm0 0"/><path d="m138.085938 320.921875c-3.992188 1.101563-6.335938 5.230469-5.234376 9.226563 15.226563 55.152343 65.867188 93.675781 123.148438 93.675781s107.921875-38.519531 123.144531-93.675781c1.101563-3.996094-1.238281-8.125-5.234375-9.226563-3.988281-1.101563-8.121094 1.238281-9.222656 5.234375-13.4375 48.671875-58.128906 82.667969-108.6875 82.667969s-95.253906-33.996094-108.6875-82.667969c-1.101562-3.996094-5.234375-6.335938-9.226562-5.234375zm0 0"/><path d="m222.980469 229.429688-14.308594-40.074219c-1.09375-3.054688-4.183594-4.972657-7.25-4.984375h-56.738281l19.488281-54.574219c.550781-1.539063 2.015625-2.570313 3.648437-2.570313 1.632813 0 3.101563 1.03125 3.652344 2.570313l11.621094 32.546875c1.394531 3.902344 5.6875 5.933594 9.585938 4.539062 3.902343-1.390624 5.933593-5.683593 4.542968-9.582031l-11.625-32.546875c-2.675781-7.492187-9.820312-12.527344-17.777344-12.527344-7.957031 0-15.097656 5.035157-17.773437 12.527344l-37.386719 104.675782c-1.390625 3.898437.640625 8.191406 4.542969 9.585937.832031.296875 1.683594.4375 2.523437.4375 3.078126 0 5.964844-1.914063 7.0625-4.980469l12.535157-35.101562h56.996093l12.535157 35.101562c1.09375 3.066406 3.984375 4.980469 7.0625 4.980469.839843 0 1.691406-.140625 2.523437-.4375 3.902344-1.394531 5.933594-5.6875 4.539063-9.585937zm0 0"/><path d="m281.550781 112.226562h-28.054687c-8.558594 0-15.515625 6.960938-15.515625 15.515626v104.210937c0 4.140625 3.355469 7.5 7.5 7.5 4.140625 0 7.5-3.359375 7.5-7.5v-104.210937c0-.285157.230469-.515626.515625-.515626h28.054687c15.753907 0 28.574219 12.816407 28.574219 28.570313 0 15.757813-12.820312 28.574219-28.574219 28.574219h-4.007812c-4.140625 0-7.5 3.359375-7.5 7.5s3.359375 7.5 7.5 7.5h4.007812c24.027344 0 43.574219-19.546875 43.574219-43.574219 0-24.023437-19.546875-43.570313-43.574219-43.570313zm0 0"/><path d="m352.191406 112.226562c-4.140625 0-7.5 3.355469-7.5 7.5v112.226563c0 4.140625 3.359375 7.5 7.5 7.5 4.144532 0 7.5-3.359375 7.5-7.5v-112.226563c0-4.140624-3.355468-7.5-7.5-7.5zm0 0"/></svg></i>
                                    <span>APIs</span></a>
                            </li>
                                                                                                                            </ul>

        </div>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->
    <div class="content-page">
        <div class="content">
            <div class="page-title-box">
    <div class="page-breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="https://clicknbook.co/dashboard">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Dashboard
                </li>
            </ol>
        </nav>
    </div>
    <div class="page-title-right">
            </div>
</div>
            
                        <div class="earning-section">
                <div class="row">
                    <div class="d-block col-6 d-sm-none">
                        <p><span class="font-14">Balance: <span
                                    class="font-16">17,775.00</span></span></p>
                    </div>
                    <div class="d-block col-6 d-sm-none">
                        <p><span class="font-14">Net Earning: <span
                                    class="font-16">17,775.00</span></span></p>
                    </div>
                    <div class="d-block col-6 d-sm-none">
                        <p><span class="font-14">Earning: <span
                                    class="font-16">182,600.00</span></span></p>
                    </div>
                    <div class="d-block col-6 d-sm-none">
                        <p><span class="font-14">Payout: <span
                                    class="font-16">0.00</span></span></p>
                    </div>
                    <div class="d-none d-sm-block col-sm-6 col-md-6 col-xl-3">
                        <div class="card-box card-balance">
                            <i class="fa fa-info-circle float-right" data-toggle="tooltip"
                               data-placement="bottom" title=""
                               data-original-title="You can make payout with this balance"></i>
                            <h4 class="mt-0 font-16">Balance</h4>
                            <h2 class="my-3 text-center">
                                <span>$17,775.00</span>
                            </h2>
                        </div>
                    </div>

                    <div class="d-none d-sm-block col-sm-6 col-md-6 col-xl-3">
                        <div class="card-box card-net-earning">
                            <i class="fa fa-info-circle float-right" data-toggle="tooltip"
                               data-placement="bottom" title=""
                               data-original-title="Total amount of owner after minus all the fees (commission) for administrator"></i>
                            <h4 class="mt-0 font-16">Net Earning</h4>
                            <h2 class="my-3 text-center">
                                <span>$17,775.00</span>
                            </h2>
                        </div>
                    </div>

                    <div class="d-none d-sm-block col-sm-6 col-md-6 col-xl-3">
                        <div class="card-box card-earning">
                            <i class="fa fa-info-circle float-right" data-toggle="tooltip"
                               data-placement="bottom" title=""
                               data-original-title="Your total amount"></i>
                            <h4 class="mt-0 font-16">Earning</h4>
                            <h2 class="my-3 text-center">
                                <span>$182,600.00</span>
                            </h2>
                        </div>
                    </div>

                    <div class="d-none d-sm-block col-sm-6 col-md-6 col-xl-3">
                        <div class="card-box card-payout">
                            <i class="fa fa-info-circle float-right" data-toggle="tooltip"
                               data-placement="bottom" title=""
                               data-original-title="The total of withdrawals"></i>
                            <h4 class="mt-0 font-16">Payout</h4>
                            <h2 class="my-3 text-center">
                                <span>$0.00</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="card-box">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="header-title mb-3">Booking Analytics</h4>
                                        <div class="form-group form-xs mb-3">
                        <select name="show_analytics_by" class="form-control" data-plugin="customselect">
                            <option data-url="https://clicknbook.co/dashboard?show_analytics_by=this_month"
                                    value="this_month"  selected >
                                This month
                            </option>
                            <option data-url="https://clicknbook.co/dashboard?show_analytics_by=last_month"
                                    value="last_month" >
                                Last month
                            </option>
                            <option data-url="https://clicknbook.co/dashboard?show_analytics_by=this_week"
                                    value="this_week" >
                                This week
                            </option>
                            <option data-url="https://clicknbook.co/dashboard?show_analytics_by=last_week"
                                    value="last_week" >
                                Last week
                            </option>
                        </select>
                    </div>
                </div>
                                <div class="overflow-x-auto">
                    <div id="booking-analytics" class="flot-chart mt-4 pt-1 booking-analytics"
                         data-min-width="1250px"
                         data-label="WyJDb21wbGV0ZWQiLCJJbmNvbXBsZXRlIiwiQ2FuY2VsZWQiLCJSZWZ1bmRlZCJd"
                         data-total="eyJjb21wbGV0ZWQiOltbMCwwXSxbMSwyMTUwXSxbMiwyMDBdLFszLDBdLFs0LDBdLFs1LDBdLFs2LDBdLFs3LDBdLFs4LDBdLFs5LDBdLFsxMCwwXSxbMTEsMF0sWzEyLDBdLFsxMywwXSxbMTQsMF0sWzE1LDBdLFsxNiwwXSxbMTcsMF0sWzE4LDBdLFsxOSwwXSxbMjAsMF0sWzIxLDBdLFsyMiwwXSxbMjMsMF0sWzI0LDBdLFsyNSwwXSxbMjYsMF0sWzI3LDBdLFsyOCwwXSxbMjksMF0sWzMwLDBdXSwiaW5jb21wbGV0ZSI6W1swLDBdLFsxLDQwMF0sWzIsMTgwMF0sWzMsODAwXSxbNCwwXSxbNSwwXSxbNiwwXSxbNywwXSxbOCwwXSxbOSwwXSxbMTAsMF0sWzExLDBdLFsxMiwwXSxbMTMsMF0sWzE0LDBdLFsxNSwwXSxbMTYsMzAwXSxbMTcsMF0sWzE4LDBdLFsxOSwwXSxbMjAsMF0sWzIxLDBdLFsyMiwwXSxbMjMsMF0sWzI0LDBdLFsyNSwwXSxbMjYsMF0sWzI3LDBdLFsyOCwwXSxbMjksMF0sWzMwLDBdXSwiY2FuY2VsZWQiOltbMCwwXSxbMSwwXSxbMiwxNTBdLFszLDBdLFs0LDBdLFs1LDBdLFs2LDBdLFs3LDBdLFs4LDBdLFs5LDBdLFsxMCwwXSxbMTEsMF0sWzEyLDBdLFsxMywwXSxbMTQsMF0sWzE1LDBdLFsxNiwwXSxbMTcsMF0sWzE4LDBdLFsxOSwwXSxbMjAsMF0sWzIxLDBdLFsyMiwwXSxbMjMsMF0sWzI0LDBdLFsyNSwwXSxbMjYsMF0sWzI3LDBdLFsyOCwwXSxbMjksMF0sWzMwLDBdXSwicmVmdW5kZWQiOltbMCwwXSxbMSwwXSxbMiwwXSxbMywwXSxbNCwwXSxbNSwwXSxbNiwwXSxbNywwXSxbOCwwXSxbOSwwXSxbMTAsMF0sWzExLDBdLFsxMiwwXSxbMTMsMF0sWzE0LDBdLFsxNSwwXSxbMTYsMTAwXSxbMTcsMF0sWzE4LDBdLFsxOSwwXSxbMjAsMF0sWzIxLDBdLFsyMiwwXSxbMjMsMF0sWzI0LDBdLFsyNSwwXSxbMjYsMF0sWzI3LDBdLFsyOCwwXSxbMjksMF0sWzMwLDBdXX0="
                         data-date="W1swLCJKYW4gMDEiXSxbMSwiIl0sWzIsIiJdLFszLCIiXSxbNCwiIl0sWzUsIkphbiAwNiJdLFs2LCIiXSxbNywiIl0sWzgsIiJdLFs5LCIiXSxbMTAsIkphbiAxMSJdLFsxMSwiIl0sWzEyLCIiXSxbMTMsIiJdLFsxNCwiIl0sWzE1LCJKYW4gMTYiXSxbMTYsIiJdLFsxNywiIl0sWzE4LCIiXSxbMTksIiJdLFsyMCwiSmFuIDIxIl0sWzIxLCIiXSxbMjIsIiJdLFsyMywiIl0sWzI0LCIiXSxbMjUsIkphbiAyNiJdLFsyNiwiIl0sWzI3LCIiXSxbMjgsIiJdLFsyOSwiIl0sWzMwLCJKYW4gMzEiXV0="
                         data-min-height="350px"></div>
                </div>
            </div> <!-- end card-box -->
            <div class="card-box">
                <h4 class="header-title mb-3">The newest bookings</h4>
                <div class="hh-slimscroll" data-max-height="350px">
                                        <table class="table table-large mb-0 dt-responsive nowrap w-100" data-plugin="datatable"
                           data-pdf="off" data-pdf-name="Export PDF"
                           data-paging="false"
                           data-ordering="false">
                        <thead>
                        <tr>
                            <th data-priority="1">
                                Booking ID
                            </th>
                            <th data-priority="5" class="text-center">
                                Status
                            </th>
                            <th data-priority="4" class="text-center">
                                Final Total
                            </th>
                            <th data-priority="6">Check In/Out</th>
                            <th data-priority="-1" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                                                                                                                    <tr>
                                    <td class="align-middle">4941673964551</td>
                                    <td class="align-middle text-center">
                                        <div
                                            class="booking-status incomplete">Incomplete</div>
                                    </td>
                                    <td class="align-middle text-center">
                                        $100.00
                                    </td>
                                    <td class="align-middle">
                                                                                                                                                                            <span
                                                    class="exp">23-01-17<span class="d-none"> - </span><i class="fe-arrow-right ml-2 mr-2"></i>23-01-18</span>
                                                                                                                        </td>
                                    <td class="align-middle text-center">
                                                                                <a href="javascript: void(0);"
                                           data-toggle="modal"
                                           data-target="#modal-show-booking-invoice"
                                           data-params="eyJib29raW5nSUQiOjIxOSwiYm9va2luZ0VuY3J5cHQiOiIzZmM0NThlOTJkZDk4NjA0YjdiODBmOTcyODlkOWEwYyJ9"
                                           class="btn btn-xs btn-secondary"><i
                                                class="mdi mdi-information-variant "></i>
                                        </a>
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td class="align-middle">4941673964504</td>
                                    <td class="align-middle text-center">
                                        <div
                                            class="booking-status incomplete">Incomplete</div>
                                    </td>
                                    <td class="align-middle text-center">
                                        $100.00
                                    </td>
                                    <td class="align-middle">
                                                                                                                                                                            <span
                                                    class="exp">23-01-17<span class="d-none"> - </span><i class="fe-arrow-right ml-2 mr-2"></i>23-01-18</span>
                                                                                                                        </td>
                                    <td class="align-middle text-center">
                                                                                <a href="javascript: void(0);"
                                           data-toggle="modal"
                                           data-target="#modal-show-booking-invoice"
                                           data-params="eyJib29raW5nSUQiOjIxOCwiYm9va2luZ0VuY3J5cHQiOiJlY2ZhMGM1YzQxODdmYTMyYjhjMTk4NWE1MmExOTk1MiJ9"
                                           class="btn btn-xs btn-secondary"><i
                                                class="mdi mdi-information-variant "></i>
                                        </a>
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td class="align-middle">4941673963947</td>
                                    <td class="align-middle text-center">
                                        <div
                                            class="booking-status incomplete">Incomplete</div>
                                    </td>
                                    <td class="align-middle text-center">
                                        $100.00
                                    </td>
                                    <td class="align-middle">
                                                                                                                                                                            <span
                                                    class="exp">23-01-17<span class="d-none"> - </span><i class="fe-arrow-right ml-2 mr-2"></i>23-01-18</span>
                                                                                                                        </td>
                                    <td class="align-middle text-center">
                                                                                <a href="javascript: void(0);"
                                           data-toggle="modal"
                                           data-target="#modal-show-booking-invoice"
                                           data-params="eyJib29raW5nSUQiOjIxNywiYm9va2luZ0VuY3J5cHQiOiIyMWQwOGVhZDVmMTRmZTQ1N2E1MThlZmRkZWE0MTViMCJ9"
                                           class="btn btn-xs btn-secondary"><i
                                                class="mdi mdi-information-variant "></i>
                                        </a>
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td class="align-middle">4941673955240</td>
                                    <td class="align-middle text-center">
                                        <div
                                            class="booking-status refunded">Refunded</div>
                                    </td>
                                    <td class="align-middle text-center">
                                        $100.00
                                    </td>
                                    <td class="align-middle">
                                                                                                                                                                            <span
                                                    class="exp">23-01-17<span class="d-none"> - </span><i class="fe-arrow-right ml-2 mr-2"></i>23-01-18</span>
                                                                                                                        </td>
                                    <td class="align-middle text-center">
                                                                                <a href="javascript: void(0);"
                                           data-toggle="modal"
                                           data-target="#modal-show-booking-invoice"
                                           data-params="eyJib29raW5nSUQiOjIxNiwiYm9va2luZ0VuY3J5cHQiOiJiMjlmYTA3ZDU4NmU2ODZlNWRiOWQwNzUxZmE4ZGEyMiJ9"
                                           class="btn btn-xs btn-secondary"><i
                                                class="mdi mdi-information-variant "></i>
                                        </a>
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td class="align-middle">4941672832578</td>
                                    <td class="align-middle text-center">
                                        <div
                                            class="booking-status incomplete">Incomplete</div>
                                    </td>
                                    <td class="align-middle text-center">
                                        $100.00
                                    </td>
                                    <td class="align-middle">
                                                                                                                                                                            <span
                                                    class="exp">23-01-11<span class="d-none"> - </span><i class="fe-arrow-right ml-2 mr-2"></i>23-01-12</span>
                                                                                                                        </td>
                                    <td class="align-middle text-center">
                                                                                <a href="javascript: void(0);"
                                           data-toggle="modal"
                                           data-target="#modal-show-booking-invoice"
                                           data-params="eyJib29raW5nSUQiOjIxNSwiYm9va2luZ0VuY3J5cHQiOiJjNmYwYjFjNzUwMjE1OTAzZjc5NDViODk5NTJmY2IxOSJ9"
                                           class="btn btn-xs btn-secondary"><i
                                                class="mdi mdi-information-variant "></i>
                                        </a>
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td class="align-middle">4941672832562</td>
                                    <td class="align-middle text-center">
                                        <div
                                            class="booking-status incomplete">Incomplete</div>
                                    </td>
                                    <td class="align-middle text-center">
                                        $100.00
                                    </td>
                                    <td class="align-middle">
                                                                                                                                                                            <span
                                                    class="exp">23-01-11<span class="d-none"> - </span><i class="fe-arrow-right ml-2 mr-2"></i>23-01-12</span>
                                                                                                                        </td>
                                    <td class="align-middle text-center">
                                                                                <a href="javascript: void(0);"
                                           data-toggle="modal"
                                           data-target="#modal-show-booking-invoice"
                                           data-params="eyJib29raW5nSUQiOjIxNCwiYm9va2luZ0VuY3J5cHQiOiI1YjJhYzdmYjA2MTFmYzNmNTA1ZDQyMGU5ODM2N2Y4YyJ9"
                                           class="btn btn-xs btn-secondary"><i
                                                class="mdi mdi-information-variant "></i>
                                        </a>
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td class="align-middle">4941672825520</td>
                                    <td class="align-middle text-center">
                                        <div
                                            class="booking-status incomplete">Incomplete</div>
                                    </td>
                                    <td class="align-middle text-center">
                                        $100.00
                                    </td>
                                    <td class="align-middle">
                                                                                                                                                                            <span
                                                    class="exp">23-01-11<span class="d-none"> - </span><i class="fe-arrow-right ml-2 mr-2"></i>23-01-12</span>
                                                                                                                        </td>
                                    <td class="align-middle text-center">
                                                                                <a href="javascript: void(0);"
                                           data-toggle="modal"
                                           data-target="#modal-show-booking-invoice"
                                           data-params="eyJib29raW5nSUQiOjIxMywiYm9va2luZ0VuY3J5cHQiOiJjOTAwMDQxMjlkMGE1NWRhOTJhNDEwNGNjODcxODc5ZCJ9"
                                           class="btn btn-xs btn-secondary"><i
                                                class="mdi mdi-information-variant "></i>
                                        </a>
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td class="align-middle">4941672825503</td>
                                    <td class="align-middle text-center">
                                        <div
                                            class="booking-status incomplete">Incomplete</div>
                                    </td>
                                    <td class="align-middle text-center">
                                        $100.00
                                    </td>
                                    <td class="align-middle">
                                                                                                                                                                            <span
                                                    class="exp">23-01-11<span class="d-none"> - </span><i class="fe-arrow-right ml-2 mr-2"></i>23-01-12</span>
                                                                                                                        </td>
                                    <td class="align-middle text-center">
                                                                                <a href="javascript: void(0);"
                                           data-toggle="modal"
                                           data-target="#modal-show-booking-invoice"
                                           data-params="eyJib29raW5nSUQiOjIxMiwiYm9va2luZ0VuY3J5cHQiOiI2NWE1YTVkMTc1YjFkYjVkODQ2ZDVhYzZiYjA2YTg4NyJ9"
                                           class="btn btn-xs btn-secondary"><i
                                                class="mdi mdi-information-variant "></i>
                                        </a>
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td class="align-middle">4941672823237</td>
                                    <td class="align-middle text-center">
                                        <div
                                            class="booking-status incomplete">Incomplete</div>
                                    </td>
                                    <td class="align-middle text-center">
                                        $100.00
                                    </td>
                                    <td class="align-middle">
                                                                                                                                                                            <span
                                                    class="exp">23-01-11<span class="d-none"> - </span><i class="fe-arrow-right ml-2 mr-2"></i>23-01-12</span>
                                                                                                                        </td>
                                    <td class="align-middle text-center">
                                                                                <a href="javascript: void(0);"
                                           data-toggle="modal"
                                           data-target="#modal-show-booking-invoice"
                                           data-params="eyJib29raW5nSUQiOjIxMSwiYm9va2luZ0VuY3J5cHQiOiIxYTQzMTg5MjM5OTIyYzBmZTE0MjgyZTY0ZTNmNjhmNSJ9"
                                           class="btn btn-xs btn-secondary"><i
                                                class="mdi mdi-information-variant "></i>
                                        </a>
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td class="align-middle">4941672823063</td>
                                    <td class="align-middle text-center">
                                        <div
                                            class="booking-status incomplete">Incomplete</div>
                                    </td>
                                    <td class="align-middle text-center">
                                        $100.00
                                    </td>
                                    <td class="align-middle">
                                                                                                                                                                            <span
                                                    class="exp">23-01-11<span class="d-none"> - </span><i class="fe-arrow-right ml-2 mr-2"></i>23-01-12</span>
                                                                                                                        </td>
                                    <td class="align-middle text-center">
                                                                                <a href="javascript: void(0);"
                                           data-toggle="modal"
                                           data-target="#modal-show-booking-invoice"
                                           data-params="eyJib29raW5nSUQiOjIxMCwiYm9va2luZ0VuY3J5cHQiOiIyYzJkNmVkZDI3MjFlZDc5OWM1MzM1YjY0MjFmZjM4MiJ9"
                                           class="btn btn-xs btn-secondary"><i
                                                class="mdi mdi-information-variant "></i>
                                        </a>
                                    </td>
                                </tr>
                                                                            </tbody>
                    </table>
                </div> <!-- end .table-responsive-->
            </div> <!-- end card-box-->
            
            <footer class="footer">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-6">

               <!--<span class="copy-right-text">-->
                   
                 <h5>Copyright © 2023  by <a href="https://www.potato-co.com/" style="color:#2dbccc;" > POTATO TECH </a></h5>

               <!--</span>-->

                

                
            </div>

            <div class="col-md-6" style="margin-top:12px;">

                <div class="text-md-right footer-links d-none d-sm-block">

                    <a href="https://clicknbook.co/about-us">About Us</a>

                    <!--<a href="javascript:void(0);">Help</a>-->

                    <a href="https://clicknbook.co/contact-us">Contact Us</a>
                    
                    <a href="https://clicknbook.co/blog">Blog</a>

                    
                    <a href="https://clicknbook.co/refund-policy/">Refund Policy</a>
                    
                    <a href="https://clicknbook.co/privacy-policy/">Privacy Policy</a>
                    
                    <a href="https://clicknbook.co/about-us">Terms and Conditions</a>
                    
                </div>

            </div>

        </div>

    </div>

</footer>

        </div>
    </div>
</div>
<div class="modal fade hh-get-modal-content" id="modal-show-booking-invoice" tabindex="-1" role="dialog"
     aria-hidden="true" data-url="https://clicknbook.co/dashboard/get-booking-invoice">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="hh-loading " style="">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
            <div class="modal-header">
                <h4 class="modal-title">Booking Detail</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Right Sidebar -->
<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="dripicons-cross noti-icon"></i>
        </a>
        <h5 class="m-0 text-white">Settings</h5>
    </div>
    <div class="slimscroll-menu">
        <!-- User box -->
                <div class="user-box">
            <div class="user-img">
                <img src="https://clicknbook.co/public/storage/storage/users_avatar/u-155/2022/10/30/16671123991667112399-150x150.jpg" alt="user-img"
                     title="Ayman sawair"
                     class="rounded-circle img-fluid">
            </div>
            <h5><a target="_blank" href="https://clicknbook.co/dashboard/profile">Ayman sawair</a>
            </h5>
            <p class="text-muted mb-0">
                <small>asawair@gmail.com</small>
            </p>
        </div>
        <!-- Settings -->
        <hr class="mt-0"/>
        <h5 class="pl-3">Quick Settings</h5>
        <hr class="mb-0"/>
        <div class="p-3">
            <form action="https://clicknbook.co/dashboard/save-quick-settings"
                  class="form form-xs clearfix relative form-quick-settings" method="post">
                <div class="hh-loading " style="">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
                                <input type="hidden" name="all_fields" value="W3siaWQiOiJtYWluX2NvbG9yIiwiZmllbGRfdHlwZSI6Im1ldGEiLCJ0eXBlIjoiY29sb3JwaWNrZXIifSx7ImlkIjoiZW5hYmxlX3JldmlldyIsImZpZWxkX3R5cGUiOiJtZXRhIiwidHlwZSI6Im9uX29mZiJ9LHsiaWQiOiJwYXJ0bmVyX2NvbW1pc3Npb24iLCJmaWVsZF90eXBlIjoibWV0YSIsInR5cGUiOiJ0ZXh0In0seyJpZCI6Im1hcGJveF9rZXkiLCJmaWVsZF90eXBlIjoibWV0YSIsInR5cGUiOiJ0ZXh0In0seyJpZCI6Imdvb2dsZV9mb250X2tleSIsImZpZWxkX3R5cGUiOiJtZXRhIiwidHlwZSI6InRleHQifSx7ImlkIjoib3B0aW1pemVfc2l0ZSIsImZpZWxkX3R5cGUiOiJtZXRhIiwidHlwZSI6Im9uX29mZiJ9LHsiaWQiOiJlbmFibGVfbGF6eWxvYWQiLCJmaWVsZF90eXBlIjoibWV0YSIsInR5cGUiOiJvbl9vZmYifSx7ImlkIjoiZW5hYmxlX2dkcHIiLCJmaWVsZF90eXBlIjoibWV0YSIsInR5cGUiOiJvbl9vZmYifSx7ImlkIjoiZW5hYmxlX3NlbyIsImZpZWxkX3R5cGUiOiJtZXRhIiwidHlwZSI6Im9uX29mZiJ9LHsiaWQiOiJ1c2VfZ29vZ2xlX2NhcHRjaGEiLCJmaWVsZF90eXBlIjoibWV0YSIsInR5cGUiOiJvbl9vZmYifV0=">
                <div class="mb-2">
                    <label for="q_main_color">Main Color</label><br/>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text color"></div>
                        </div>
                        <input type="text" id="q_main_color" data-plugin="colorpicker"
                               class="form-control"
                               name="main_color" value="#01C1C9">
                    </div>
                </div>
                <div class="mb-2">
                    <label for="q_enable_review">Enable Review</label><br/>
                    <input id="q_enable_review" type="checkbox" name="enable_review" value="on" data-plugin="switchery"
                           data-color="#1abc9c"
                            checked >
                </div>
                <div class="mb-2">
                    <label for="q_partner_commission">Partner Commission</label><br/>
                    <input type="number" class="form-control" min="0" id="q_partner_commission"
                           name="partner_commission"
                           value="10">
                </div>
                <div class="mb-2">
                    <label for="q_mapbox_key">Mapbox Key</label><br/>
                    <input type="text" class="form-control" id="q_mapbox_key" name="mapbox_key"
                           value="pk.eyJ1IjoiaGp3YWhyZWgiLCJhIjoiY2w5amx4dHJvMTFjdTN2bzBiY21icHNreCJ9.Y7qCWaYy0IVcO-f3vTelYw">
                </div>
                <div class="mb-2">
                    <label for="q_google_font_key">Google Font Key</label><br/>
                    <input type="text" class="form-control" id="q_google_font_key" name="google_font_key"
                           value="AIzaSyDPG7nZZoCpIP9wsi5S3AvavW4Jtvs1UxY">
                </div>
                <div class="mb-2">
                    <label for="q_optimize_site">Enable Review</label><br/>
                    <input id="q_optimize_site" type="checkbox" name="optimize_site" value="on" data-plugin="switchery"
                           data-color="#1abc9c"
                            checked >
                </div>
                <div class="mb-2">
                    <label for="q_enable_lazyload">Enable Lazy Load</label><br/>
                    <input id="q_enable_lazyload" type="checkbox" name="enable_lazyload" value="on" data-plugin="switchery"
                           data-color="#1abc9c"
                           >
                </div>
                <div class="mb-2">
                    <label for="q_enable_gdpr">Enable GDPR Cookie</label><br/>
                    <input id="q_enable_gdpr" type="checkbox" name="enable_gdpr" value="on" data-plugin="switchery"
                           data-color="#1abc9c"
                           >
                </div>
                <div class="mb-2">
                    <label for="q_enable_seo">Enable SEO Tools</label><br/>
                    <input id="q_enable_seo" type="checkbox" name="enable_seo" value="on" data-plugin="switchery"
                           data-color="#1abc9c"
                            checked >
                </div>
                <div class="mb-2">
                    <label for="q_use_google_captcha">Use Google Captcha?</label><br/>
                    <input id="q_use_google_captcha" type="checkbox" name="use_google_captcha" value="on" data-plugin="switchery"
                           data-color="#1abc9c"
                           >
                </div>
                
            </form>
        </div>
        
    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
<link href="https://clicknbook.co/vendor/jquery-nice-select/nice-select.css" rel="stylesheet">
<link href="https://clicknbook.co/vendor/switchery/switchery.css" rel="stylesheet">
<link href="https://clicknbook.co/vendor/bootstrap-colorpicker/bootstrap-colorpicker.css" rel="stylesheet">
<link href="https://clicknbook.co/vendor/datatables/datatable.css" rel="stylesheet">
<script id="vendor-js" src="https://clicknbook.co/js/vendor.min.js"></script>
<script id="global-js" src="https://clicknbook.co/js/global.js"></script>
<script id="image-loaded-js" src="https://clicknbook.co/vendor/imagesloaded.pkgd.js"></script>
<script id="jquery-ui-js" src="https://clicknbook.co/vendor/jquery-ui/jquery-ui.js"></script>
<script id="bootstrap-validate-js" src="https://clicknbook.co/vendor/bootstrap-validate.js"></script>
<script id="toast-js" src="https://clicknbook.co/vendor/jquery-toast/jquery.toast.js"></script>
<script id="bootstrap-maxlength-js" src="https://clicknbook.co/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
<script id="nested-sort-js" src="https://clicknbook.co/vendor/jquery.mjs.nestedSortable.js"></script>
<script id="nice-select-js" src="https://clicknbook.co/vendor/jquery-nice-select/jquery.nice-select.js"></script>
<script id="switchery-js" src="https://clicknbook.co/vendor/switchery/switchery.js"></script>
<script id="bootstrap-colorpicker-js" src="https://clicknbook.co/vendor/bootstrap-colorpicker/bootstrap-colorpicker.js"></script>
<script id="datatables-js" src="https://clicknbook.co/vendor/datatables/datatable.js"></script>
<script id="pdfmake-js" src="https://clicknbook.co/vendor/pdfmake/pdfmake.js"></script>
<script id="vfs-fonts-js" src="https://clicknbook.co/vendor/pdfmake/vfs_fonts.js"></script>
<script id="flot" src="https://clicknbook.co/vendor/flot-charts/jquery.flot.js"></script>
<script id="flot-time" src="https://clicknbook.co/vendor/flot-charts/jquery.flot.time.js"></script>
<script id="flot-tooltip" src="https://clicknbook.co/vendor/flot-charts/jquery.flot.tooltip.min.js"></script>
<script id="flot-crosshair" src="https://clicknbook.co/vendor/flot-charts/jquery.flot.crosshair.js"></script>
<script id="flot-selection" src="https://clicknbook.co/vendor/flot-charts/jquery.flot.selection.js"></script>
<script src="https://clicknbook.co/js/option.js"></script>
<script src="https://clicknbook.co/js/dashboard.js"></script>
</body>
</html>
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/dashboard/screens/administrator/dashboard.blade.php ENDPATH**/ ?>