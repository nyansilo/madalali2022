<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Findeo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('front_end/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('front_end/css/color.css') }}">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Compare Properties Widget
================================================== -->
@include('layouts.front_end.compare')
<!-- Compare Properties Widget / End -->


<!-- Header Container
================================================== -->
@include('layouts.front_end.header')
<!-- Header Container / End -->


@yield('content')


<!-- Footer
================================================== -->
@include('layouts.front_end.footer')
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->

<script type="text/javascript" src="{{ asset('front_end/scripts/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/scripts/jquery-migrate-3.1.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/scripts/chosen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end//scripts/magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end//scripts/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end//scripts/rangeSlider.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end//scripts/sticky-kit.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end//scripts/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end//scripts/masonry.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end//scripts/mmenu.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end//scripts/tooltips.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end//scripts/custom.js') }}"></script>


<!-- Maps -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script type="text/javascript" src="{{ asset('front_end//scripts/infobox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end//scripts/markerclusterer.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end//scripts/maps.js') }}"></script>

<!-- Google Autocomplete -->
<script>
  function initAutocomplete() {
    var input = document.getElementById('autocomplete-input');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        window.alert("No details available for input: '" + place.name + "'");
        return;
      }
    });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete"></script>




</div>
<!-- Wrapper / End -->
@yield('script')


</body>
</html>
