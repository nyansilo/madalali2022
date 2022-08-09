<!DOCTYPE html>
<html dir="ltr"  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from grandetest.com/theme/findhouse-html/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jul 2020 09:57:45 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
<meta name="description" content="Madalali4u - Real Estate">
<meta name="CreativeLayers" content="ATFN">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- css file -->
<link rel="stylesheet" href="{{ asset('front_end/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('front_end/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('front_end/css/dashbord_navitaion.css') }}">

<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('front_end/css/responsive.css') }}">
<!-- Title -->
<title>{{ config('app.name', 'Madalali4u') }}</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

@livewireStyles
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<div class="wrapper">

    <div class="preloader"></div>

    <!-- Main Header Nav 
    ================================================== -->
    @include('layouts.user_dashboard.nav_header_desktop')
    <!-- Main Header Nav End -->

    <!-- Main Header Nav For Mobile 
    ================================================== -->
    @include('layouts.user_dashboard.nav_header_mobile')
    <!-- Main Header Nav For Mobile  End -->

    <!-- Dashboard Side bar
    ================================================== -->
    @include('layouts.user_dashboard.sidebar')
    <!-- Main Header Nav For Mobile  End -->


    @yield('content')


    <a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>

</div>

<!-- Wrapper End -->

<!-- Scripts
================================================== -->

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="{{ asset('front_end/js/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/jquery.mmenu.all.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/ace-responsive-menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/chart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/chart-custome.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/snackbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/simplebar.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/scrollto.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/jquery-scrolltofixed-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/jquery.counterup.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/timepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/dashboard-script.js') }}"></script>

<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{ asset('front_end/js/script.js') }}"></script>

@livewireScripts

</body>
<!-- Mirrored from grandetest.com/theme/findhouse-html/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jul 2020 09:57:48 GMT -->
</html>

