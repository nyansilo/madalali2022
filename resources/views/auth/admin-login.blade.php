<doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- CSS files -->
    <link href="{{asset('back_end/dist/css/tabler.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('back_end/dist/css/tabler-flags.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('back_end/dist/css/tabler-payments.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('back_end/dist/css/tabler-vendors.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('back_end/dist/css/demo.min.css')}}" rel="stylesheet"/>


    @livewireStyles
</head>
  <body  class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
        </div>
        

        <form class="card card-md" action="{{ route('admin.login.submit')}}" method="post" autocomplete="off">

          @csrf

          <div class="card-body">
            <h2 class="card-title text-center mb-4">Login to your account</h2>

            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email" autocomplete="off">
            </div>
            @error('email')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
            @enderror

            <div class="mb-2">
              <label class="form-label">
                Password
                <span class="form-label-description">
                  <a href="{{ route('admin.password.request')}}">I forgot password</a>
                </span>
              </label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password"  autocomplete="off">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                  </a>
                </span>
              </div>
              
            </div>
            @error('password')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror


            <div class="mb-2">
              <label class="form-check">
                <input type="checkbox" class="form-check-input"/>
                <span class="form-check-label">Remember me on this device</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </div>
          </div>
         
          </div>
        </form>
        <div class="text-center text-muted mt-3">
          Don't have account yet? <a href="./sign-up.html" tabindex="-1">Sign up</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    livewireScripts

 <!-- Libs JS -->
<script src="{{asset('back_end/dist/libs/apexcharts/dist/apexcharts.min.js')}}" defer></script>
<script src="{{asset('back_end/dist/libs/jsvectormap/dist/js/jsvectormap.min.js')}}" defer></script>
<script src="{{asset('back_end/dist/libs/jsvectormap/dist/maps/world.js')}}" defer></script>
<script src="{{asset('back_end/dist/libs/jsvectormap/dist/maps/world-merc.js')}}" defer></script>
<!-- Tabler Core -->
<script src="{{asset('back_end/dist/js/tabler.min.js')}}" defer></script>
<script src="{{asset('back_end/dist/js/demo.min.js')}}" defer></script>
</body>
</html>