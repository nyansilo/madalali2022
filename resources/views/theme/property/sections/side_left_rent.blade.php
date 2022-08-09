<!-- Side Left Content  -->


<div class="col-md-12 col-lg-8">
	<div class="row">
		<div class="grid_list_search_result">
			<div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
				<div class="left_area tac-xsd">
					<p>9 Search results</p>
				</div>
			</div>


			<div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
				<div class="right_area text-right tac-xsd">
					<ul>
						<li class="list-inline-item"><span class="stts">Status:</span>
							<select class="selectpicker show-tick">
								<option>All Status</option>
								<option>Recent</option>
								<option>Old Review</option>
							</select>
						</li>
						<li class="list-inline-item"><span class="shrtby">Sort by:</span>
							<select class="selectpicker show-tick">
								<option>Featured First</option>
								<option>Featured 2nd</option>
								<option>Featured 3rd</option>
								<option>Featured 4th</option>
								<option>Featured 5th</option>
							</select>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>



	<div class="row">

		@if(!$rentProperties->count())


			<div class="col-lg-12">
			    <div class="alert alart_style_four alert-dismissible fade show" role="alert">
					Nothing Found for now, please try again later.
					{{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>--}}
			    </div>
			</div>


		@else

			@foreach($rentProperties  as $property)

				<div class="col-lg-12">
					<div class="feat_property list">
						<div class="thumb">

							@if($property->propertyImages->count() > 0)

								<img class="img-whp"  height="240px" 
								src="/img/{{$property->propertyImages[0]->image}}" 
								alt="{{$property->title}}">

							@else 

								<img class="img-whp" height="240px" 
								src="{{ $property->default_img }}" 
								alt="{{$property->title}}">
							    		
							@endif


							<div class="thmb_cntnt">
								<ul class="icon mb0">
									<li class="list-inline-item">
										<a href="#">
											<span class="flaticon-heart"></span>
										</a>
									</li>
								</ul>
							</div>

						</div>
						<div class="details">
							<div class="tc_content">
								<div class="dtls_headr">
									<ul class="tag">
										<li class="list-inline-item type">
											<a
											   href="{{ route(strtolower($property->type)) }}
											   ">
											   For {{ $property->type}}

											</a>
										</li>

										@if($property->is_featured == 1)
												<li class="list-inline-item featured">
													<a href="">Featured</a>
												</li>
										@endif
										
									</ul>
									<a class="fp_price" 
										href="{{ route('property.detail', $property->slug)}}">
										<span style="font-size: 15px;">
										Tsh {{$property->price}}
										</span>
										@if($property->type == 'Rent')
										    <small>/mo</small>
										@endif 
									</a>
								</div>

								<p class="text-thm">
									
										<span style="color: green;">Category: </span>
									
									 <b> 
									 	<a href="{{ route('property.category', $property->category->slug)}}" style="color: orangered !important;">
									 	    {{$property->category->title}}
									 	</a>
									 </b>
								</p>
								<h4>
									<a href="{{ route('property.detail', $property->slug)}}">
										{{$property->medium_title}}
									</a>	
								</h4>

								<p><span class="flaticon-placeholder"></span> 
									{{$property->medium_address}}
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
													    {{$property->brand}} | {{$property->coverage}} km | {{$property->engine_capacity}} cc |
												   		{{$property->driving_type}}
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
													<li class="list-inline-item">
														<a href="#">
															Sq Mt: {{$property->area}}
														</a>
													</li>
												
												</ul>
										@endif
									</ul>			
							</div>
							<div class="fp_footer">
								<ul class="fp_meta float-left mb0">
										
									@if($property->profile_url)
										<li class="list-inline-item">					
											<a href="{{ route('property.owner', $property->owner->slug) }}">
												<img  style="max-height: 40px; max-width: 40px"
												src="{{$property->profile_url}}" 
												alt="{{$property->full_name}}
												">
											</a>
										</li>
									@else
										<li class="list-inline-item">					
											<a href="{{ route('property.owner', $property->owner->slug) }}">
												<img style="max-height: 40px; max-width: 40px"
												src="{{$property->default_profile}}" 
												alt="{{$property->full_name}}">
											</a>
										</li>

									@endif

									<li class="list-inline-item">
										<a href="{{ route('property.owner', $property->owner->slug) }}">
											{{$property->full_name}}
										</a>
									</li>
								</ul>
								<div class="fp_pdate float-right">
									{{$property->date}}
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		
		@endif		
		
	
		
		<div class="col-lg-12 mt20">
		{{ $rentProperties->links('vendor.pagination.custom3') }}
		</div>	

	</div>
</div>