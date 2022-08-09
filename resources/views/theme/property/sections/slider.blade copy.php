<div class="single_page_listing_style">
		<div class="container-fluid p0">
			<div class="row">
				<div class="col-sm-6 col-lg-6 p0">
					<div class="row m0">
						<div class="col-lg-12 p0">
							<div class="spls_style_one pr1 1px">
								@if($property->propertyImages->count() > 0)
									<img class="img-fluid w100" src="{{$property->image_url }}" alt="">
								@else
									<img class="img-fluid w100" src="{{ $property->default_img }}" alt="">
								@endif
							</div>
						</div>
					</div>
				</div>


				<div class="col-sm-6 col-lg-6 p0">
					<div class="row m0">
						@if($property->propertyImages->count() > 0)
						@foreach($property->propertyImages as $pimage)
				

							<div class="col-sm-6 col-lg-6 p0">
								<div class="spls_style_one">
									<a class="popup-img" href="/img/{{$pimage->image }}"><img class="img-fluid w100" src="/img/{{$pimage->image }}" alt=""></a>
								</div>
							</div>
						@endforeach
						@endif

						
					</div>
				</div>



			</div>
		</div>
	</div>


	<section class="p0">
		<div class="container">
			<div class="row listing_single_row">
				<div class="col-sm-6 col-lg-7 col-xl-8">
					<div class="single_property_title">
						<a href="/front_end/images/property/ls1.jpg" class="upload_btn popup-img"><span class="flaticon-photo-camera"></span> View Photos</a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-5 col-xl-4">
					<div class="single_property_social_share">
						<div class="spss style2 mt10 text-right tal-400">
							<ul class="mb0">
								<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="flaticon-share"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="flaticon-printer"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>