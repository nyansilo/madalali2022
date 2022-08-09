<!-- Property Cities -->
	<section id="property-city" class="property-city pb20 pt40 bb1">
		<div class="container">

			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Find Properties in These Cities</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
			</div>

			@if(!$cityProperties->count())


					<div class="row">
					    <div class="alert alart_style_four alert-dismissible fade show" role="alert">
							Nothing Found for now, please try again later.
							{{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>--}}
					    </div>
					</div>


			@else
			
					<div class="row">

						@foreach($cityProperties as $cityProperty)

							<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
									<div class="property_city_home6">

										@if($cityProperty->image)
											<div class="thumb">
												<img class="w100" height="150" src="{{ $cityProperty->image_url }}" alt="">
											</div>
										@else
											<div class="thumb">
											<img class="w100" height="150"  src="{{ $cityProperty->default_img }}" alt="">
											</div>	
										@endif


										<div class="details">
											<h4>{{ $cityProperty->name}}</h4>
											<p>{{ $cityProperty->propertiesNumber('Property') }} </p>
										</div>
									</div>
							</div>

						@endforeach	

					</div>

			 @endif	

		</div>
	</section>