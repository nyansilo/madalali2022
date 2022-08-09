<!-- Property Slide Area -->

<div class="row">
	<div class="col-sm-7 col-lg-8">
		<div class="row">
			<div class="col-lg-12">
				<div class="spls_style_two mb30-520">


					@if($property->propertyImages->count() > 0)

						<a  class="popup-img" 
						    href="{{$property->image_url }}">
							<img class="img-fluid w100" 
							     style="max-height:450px !important" 
							     src="{{$property->image_url }}" 
							     alt="{{$property->title }}">
					    </a>

					@else

						<a  class="popup-img"  
						    href="{{$property->default_img  }}">
							<img style="max-height:450px !important" 
							     class="img-fluid w100" 
							     src="{{$property->default_img  }}" 
							     alt="{{$property->title }}">
						</a>

					@endif

				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-5 col-lg-4">

		<div class="row">
			<div class="col-sm-6 col-lg-6">

				@if($property->propertyImages->count() > 0)
				
					@foreach($property->propertyImages as $propertyImage)
						<div class="spls_style_two mb30">
							<a class="popup-img" 
							   href="/img/{{ $propertyImage->image }}">
							   <img class="img-fluid w100" 
							        style="max-height:130px !important" 
							        src="/img/{{ $propertyImage->image }}" 
							        alt="">
							</a>
						</div>
					@endforeach
				@endif			

			</div>

		

			{{--<div class="col-sm-6 col-lg-6">
				<div class="spls_style_two mb30">
					<a class="popup-img" href="/front_end/images/property/7.jpg"><img class="img-fluid w100" src="/front_end/images/property/7.jpg" alt="7.jpg"></a>
					<div class="overlay popup-img">
						<h3 class="title">+20</h3>
					</div>
				</div>
			</div>--}}

		</div>
	</div>
</div>