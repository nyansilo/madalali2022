@extends('layouts.front_end.main_layout')

@section('content')

<section class="blog_post_container bgc-f7">


	


	<div class="container">

		<!-- Breadcrum Side Section
		================================================== -->
		@include('theme.blog.sections.breadcrum_blog')


		<div class="row">

			<!-- Left Side Section
			================================================== -->
			@include('theme.blog.sections.side_left_blog')


			<!-- Right Side Section
			================================================== -->
			@include('theme.blog.sections.side_right_common')


		</div>
		<!-- End Row -->

	</div>
	<!-- End Container -->

</section>	


@endsection
