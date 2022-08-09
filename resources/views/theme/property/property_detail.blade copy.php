@extends('layouts.front_end.main_layout')

@section('content')

<!-- Slider Images Section
================================================== -->
@include('theme.property.sections.slider') 


<section class="our-agent-single bgc-f7 pb30-991">

	<div class="container">

		<!-- Advance Search Section for mobile
		================================================== -->
		@include('theme.property.sections.advance_search')

		<div class="row">

			<!-- Show Filter Section for mobile
			================================================== -->
			@include('theme.property.sections.show_filter')

			<!-- Left Side Section
			================================================== -->
			@include('theme.property.sections.side_left_pdetail')


			<!-- Right Side Section
			================================================== -->
			@include('theme.property.sections.side_right')


		</div>
		<!-- End Row -->

	</div>
	<!-- End Container -->

</section>	


@endsection
