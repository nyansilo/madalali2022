@extends('layouts.front_end.main_layout')

@section('content')

<section class="our-listing bgc-f7 pb30-991">

	


	<div class="container">

		<!-- Advance Search Section for mobile
		================================================== -->
		@include('theme.property.sections.advance_search')

		<!-- Rent Breadcrum
		================================================== -->
		@include('theme.property.sections.breadcrum_sale')

		<div class="row">

			<!-- Show Filter Section for mobile
			================================================== -->
			{{-- @include('theme.property.sections.show_filter')--}}

			
			<!-- Left Side Section
			================================================== -->
			@include('theme.property.sections.side_left_sale')


			<!-- Right Side Section
			================================================== -->
			@include('theme.property.sections.side_right_common')


		</div>
		<!-- End Row -->

	</div>
	<!-- End Container -->

</section>	


@endsection
