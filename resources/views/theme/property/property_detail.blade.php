@extends('layouts.front_end.main_layout')

@section('content')


<section class="listing-title-area">

	<div class="container">

		<!--  Property infor Introduction
		================================================== -->
		@include('theme.property.sections.introduction') 

		<!-- Slider Images Section
		================================================== -->
		@include('theme.property.sections.slider')

	</div>

</section>



<section class="our-agent-single bgc-f7 pb30-991">

	<div class="container">

		<!-- Advance Search Section for mobile
		================================================== -->
		@include('theme.property.sections.advance_search')

		<div class="row">

			<!-- Show Filter Section for mobile
			================================================== -->
			{{-- @include('theme.property.sections.show_filter')--}}

			<!-- Left Side Section
			================================================== -->
			@include('theme.property.sections.side_left_pdetail')


			<!-- Right Side Section
			================================================== -->
			@include('theme.property.sections.side_right_pdetail')


		</div>
		<!-- End Row -->

	</div>
	<!-- End Container -->

</section>	


@endsection
