<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from grandetest.com/theme/findhouse-html/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jul 2020 09:57:45 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
<meta name="description" content="FindHouse - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">

<!-- css file -->
<link rel="stylesheet" href="{{ asset('front_end/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('front_end/css/style.css') }}">

<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('front_end/css/responsive.css') }}">
<!-- Title -->
<title>Madalali4u</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

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
    @include('layouts.front_end.nav_header_desktop')
    <!-- Main Header Nav End -->

     <!-- Main  Modal login register
    ================================================== -->
    @include('layouts.front_end.model_login_register')
    <!-- Main Header Nav End -->

     <!-- Main  Modal Search Button Bacground Overlay 
    ================================================== -->
    @include('layouts.front_end.model_search')
    <!-- Main Header Nav End -->

    <!-- Main Header Nav For Mobile 
    ================================================== -->
    @include('layouts.front_end.nav_header_mobile')
    <!-- Main Header Nav For Mobile  End -->


    @yield('content')


    <!-- Footer Bottom links
    ================================================== -->
    @include('layouts.front_end.bottom_links')
    <!-- Footer Bottom links End -->

    <!-- Footer
    ================================================== -->
    @include('layouts.front_end.footer')
    <!-- Footer / End -->


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

<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{ asset('front_end/js/script.js') }}"></script>

</body>

<!-- Mirrored from grandetest.com/theme/findhouse-html/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jul 2020 09:57:48 GMT -->
</html>
