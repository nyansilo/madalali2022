<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Madalali4u')</title>


   

    

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/back_end/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
  <link rel="stylesheet" href="/back_end/plugins/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('back_end/dist/css/custom.css')}}">
  <link rel="stylesheet" href="/back_end/plugins/simplemde/simplemde.min.css">

  <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">



<!-- Theme style -->

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css">

 

<!-- CSS files -->
<link href="{{asset('back_end/dist/css/tabler-icons.min.css')}}" rel="stylesheet"/>
<link href="{{asset('back_end/dist/css/tabler.min.css')}}" rel="stylesheet"/>
<link href="{{asset('back_end/dist/css/tabler-flags.min.css')}}" rel="stylesheet"/>
<link href="{{asset('back_end/dist/css/tabler-payments.min.css')}}" rel="stylesheet"/>
<link href="{{asset('back_end/dist/css/tabler-vendors.min.css')}}" rel="stylesheet"/>
<link href="{{asset('back_end/dist/css/demo.min.css')}}" rel="stylesheet"/>
    


    @livewireStyles
</head>
<body>

    <div class="page">

            <!-------START: Aside------------>
             @include('layouts.back_end.aside')  


            <!-------START: Header------------>
            @include('layouts.back_end.header')


        <div class="page-wrapper">

            @yield('admin_content')

        </div>    

    </div>    

<!-- jQuery 2.2.3 -->
<script src="/back_end/dist/js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/back_end/dist/js/bootstrap.min.js"></script>




 <!-- Libs JS -->
  <script src="{{asset('back_end/dist/libs/list.js/dist/list.min.js')}}" defer></script>
<script src="{{asset('back_end/dist/libs/apexcharts/dist/apexcharts.min.js')}}" defer></script>
<script src="{{asset('back_end/dist/libs/jsvectormap/dist/js/jsvectormap.min.js')}}" defer></script>
<script src="{{asset('back_end/dist/libs/jsvectormap/dist/maps/world.js')}}" defer></script>
<script src="{{asset('back_end/dist/libs/jsvectormap/dist/maps/world-merc.js')}}" defer></script>
<!-- Tabler Core -->
<script src="{{asset('back_end/dist/js/tabler.min.js')}}" defer></script>
<script src="{{asset('back_end/dist/js/demo.min.js')}}" defer></script>


<script src="{{asset('back_end/plugins/simplemde/simplemde.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment-with-locales.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>     

@yield('script')


{{-- <script>
  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type','info')}}"
  switch(type){
      case: 'info':
        toastr.info(" {{ Session::get('message')}} ");
        break;

      case: 'success':
        toastr.success(" {{ Session::get('message')}} ");
        break;
        
      case: 'warning':
        toastr.warning(" {{ Session::get('message')}} ");
        break;

      case: 'error':
        toastr.error(" {{ Session::get('message')}} ");
        break;      
  }
  @endif
</script>
--}}



<script>
  //$('#toast-container').addClass('nopacity');
  @if(Session::has('message'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true,
    "positionClass": "toast-bottom-right",
     "timeOut": "60000",
     "extendedTimeOut": "60000",
  }
        toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.warning("{{ session('warning') }}");
  @endif
</script>


@livewireScripts

</body>
</html>