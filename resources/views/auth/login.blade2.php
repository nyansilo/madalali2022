@extends('layouts.front_end.main_layout')

@section('content')

<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Log In & Register</h2>
				
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Log In & Register</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Contact
================================================== -->

<!-- Container -->
<div class="container">

	<div class="row">
	<div class="col-md-6 col-md-offset-3">



	<button class="button social-login via-gplus"><i class="fa fa-google-plus"></i>@lang('app.login_with_google')</button>
	<button class="button social-login via-facebook"><i class="fa fa-facebook"></i> @lang('app.login_with_facebook')</button>

	<!--Tab -->
	<div class="my-account style-1 margin-top-5 margin-bottom-40">

		<ul class="tabs-nav"  style="display: flex;
    justify-content: center;
    flex-direction: row;">
			<li class=""><a href="#tab1">@lang('app.login')</a></li>
			<li ><a href="#tab2">@lang('app.register')</a></li>
		</ul>

		<div class="tabs-container alt">

			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">
				<form method="post" class="login" action="{{ route('login') }}">
					@csrf

					<p class="form-row form-row-wide">
						<label for="username"> @lang('app.email_address'):
							<i class="im im-icon-Male"></i>
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							
						</label>


                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</p>



					<p class="form-row form-row-wide">
						<label for="password"> @lang('app.password'):
							<i class="im im-icon-Lock-2"></i>
							 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
						</label>
						 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                          @enderror
					</p>

					<p class="form-row ">
						<input type="submit" class="button border margin-top-10 pull-right"  name="login" value="@lang('app.login')" />

						<label for="rememberme" class="rememberme">
						<input  type="checkbox"  value="forever" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>@lang('app.remember_me')</label>
					</p>

					 @if (Route::has('password.request'))

						<p class="lost_password">
							<a href="{{ route('password.request') }}" >@lang('app.forgot_password')</a>
						</p>
					@endif
					
				</form>
			</div>

			<!-- Register -->
			<div class="tab-content" id="tab2" style="display: none;">

				 <form method="POST" action="{{ route('register') }}" class="register">
                        @csrf

					
				<p class="form-row form-row-wide">
					<label for="username2">@lang('app.name'):
						<i class="im im-icon-Male"></i>
						 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

					</label>
					 @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
				</p>
					
				<p class="form-row form-row-wide">
					<label for="email2">@lang('app.email_address'):
						<i class="im im-icon-Mail"></i>
						<input type="text" class="input-text" name="email" id="email2" value="" />
					</label>
					@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</p>

				<p class="form-row form-row-wide">
					<label for="password1">@lang('app.password'):
						<i class="im im-icon-Lock-2"></i>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
					</label>
				</p>

				@error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

				<p class="form-row form-row-wide">
					<label for="password2">@lang('app.confirm_password')
						<i class="im im-icon-Lock-2"></i>
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
					</label>
				</p>

				<p class="form-row">
					<input type="submit" class="button border fw margin-top-10" style="margin:0 auto;display:flex; justify-content:left;"name="register" value="@lang('app.register')" />
				</p>

				</form>
			</div>

		</div>
	</div>



	</div>
	</div>

</div>
<!-- Container / End -->
@endsection