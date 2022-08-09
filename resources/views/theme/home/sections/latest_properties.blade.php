<!-- latest Properties -->
	<section id="feature-property" class="feature-property-home6 pb30 pt40 bb1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-title mb40">
						<h2>Latest Properties</h2>
						<p>Here are latest properties 
							<a class="float-right" href="{{ route('properties')}}">View All 
								<span class="flaticon-next"></span>
							</a>
						</p>
					</div>
				</div>

				@if(!$latestProperties->count())


					<div class="col-lg-12">
					    <div class="alert alart_style_four alert-dismissible fade show" role="alert">
							Nothing Found for now, please try again later.
							{{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>--}}
					    </div>
					</div>


			    @else

			    	

					<div class="col-lg-12">
						<div class="feature_property_home6_slider">

							@foreach($latestProperties as $property)
								<div class="item">
									<div class="feat_property home6">
										<div class="thumb">

											@if($property->propertyImages->count() > 0)
												<img class="img-whp" 
												height="180"
												src="{{$property->image_url }}" 
												alt="{{$property->title }}">
											@else
											    <img class="img-whp"
												src="{{ $property->default_img }}" height="180"
												alt="{{$property->title }}">	

											@endif

											<div class="thmb_cntnt">
												<ul class="tag mb0">
													<li class="list-inline-item type">
														<a
														   href="{{ route(strtolower($property->type)) }}
														   ">
														   For {{ $property->type}}

														</a>
													</li>
													@if($property->is_featured == 1)
														<li 
														   class="list-inline-item featured">
															<a href="">
																Featured
															</a>
														</li>
													@endif	
												</ul>

												<ul class="icon mb0">
													
													<li class="list-inline-item">
														<a href="#">
															<span class="flaticon-heart">
															</span>
														</a>
													</li>
												</ul>
												<a class="fp_price" 

													    href="{{ route('property.detail', $property->slug) }}">

														Tsh {{ $property->price }}

														@if($property->type == 'Rent')
														    <small>/mo</small>

														@endif   

												</a>
											</div>
										</div>
										<div class="details">
											<div class="tc_content">

												<p class="text-thm">

													 <b> 
													 	<a href="{{ route('property.category', $property->category->slug)}}" style="color: orangered !important;">
													 	    {{$property->category->title}}
													 	</a>
													 </b>

													<a  class="fp_pdate float-right" 
													    href="#">
													    {{ $property->date }}
													</a>


												</p>

												<h4>
													<a  href="{{ route('property.detail', $property->slug) }}">

														{{ $property->short_title }}

														<span style="float: right; color: red; padding-right: 1px; font-size: 14px">
															<b>more</b>
														</span>

													 </a>
												</h4>

												<p>
													<span class="flaticon-placeholder">
													
												    </span> 
												    {{ $property->short_address }}
												</p>

												<ul class="prop_details mb0">
													@if($property->category->title == 'Lands')

														<ul class="prop_details mb0">
															<li class="list-inline-item">
																<a href="#">
																	Sq Mt: {{$property->area}}
																</a>
															</li>
														</ul>

													@elseif($property->category->title== 'Vehicles')

														<ul class="prop_details mb0">
															<li class="list-inline-item">
															
																<a href="#">
																   {{$property->brand}} | {{$property->coverage}} km | {{$property->engine_capacity}} cc ...
															    </a>
																		  		 
														  	</li>
														</ul>

													@elseif($property->category->title== 'Commercials')
														<ul class="prop_details mb0">
															<li class="list-inline-item">
																<a href="#">
																	Sq Mt: {{$property->area}}
																</a>
															</li>
														</ul>	
													@else
														<ul class="prop_details mb0">
															<li class="list-inline-item">
																<a href="#">
																	Beds: {{$property->bed}}
																</a>
															</li>
															<li class="list-inline-item">
																<a href="#">
																	Baths: {{$property->bath}}
																</a>
															</li>
															
														</ul>

													@endif

												</ul>
											</div>
										</div>
									</div>
								</div>
							@endforeach

						</div>
					</div>

				@endif	

			</div>
		</div>
	</section