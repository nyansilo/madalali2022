@extends('layouts.front_end.main_layout')

@section('content')

<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-xl-6">
				<div class="breadcrumb_content">
					<h4 class="breadcrumb_title">Logın</h4>
					<ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Logın</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Our LogIn Register -->
<section class="our-log bgc-fa">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-6 offset-lg-3">
				<div class="login_form inner_page">
					<form method="post" class="login" action="{{ route('login') }}">
					    @csrf
						<div class="heading">
							<h3 class="text-center">Login to your account</h3>
							<p class="text-center">Don't have an account? <a class="text-thm" href="{{ route('register') }}">Sign Up!</a></p>
						</div>
						 <div class="form-group">
					    	<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="off" id="exampleInputEmail3" placeholder="Email Address">
					    	 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                             @enderror
						</div>
						<div class="form-group">
					    	<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('email') }}" autocomplete="off" id="exampleInputPassword4" placeholder="Password">
					    	 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                             @enderror
						</div>
						<div class="form-group custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="exampleCheck3">
							<label class="custom-control-label" for="exampleCheck3">Remember me</label>
							<a class="tdu btn-fpswd float-right" href="#">Forgot Password?</a>
						</div>
						<button type="submit" name="submit" class="btn btn-log btn-block btn-thm2">Login</button>
						<div class="divide">
							<span class="lf_divider">Or</span>
							<hr>
						</div>
						<div class="row mt40">
							<div class="col-lg">
								<button type="submit" class="btn btn-block color-white bgc-fb mb0"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
							</div>
							<div class="col-lg">
								<button type="submit" class="btn btn2 btn-block color-white bgc-gogle mb0"><i class="fa fa-google float-left mt5"></i> Google</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Start Partners -->
<section class="start-partners bgc-thm pt50 pb50">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="start_partner tac-smd">
					<h2>Become an Agent</h2>
					<p>We only work with the best companies around the country</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="parner_reg_btn text-right tac-smd">
					<a class="btn btn-thm2" href="#">Request Now</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

