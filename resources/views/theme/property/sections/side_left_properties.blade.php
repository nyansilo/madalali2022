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

		@if(!$properties->count())


			<div class="col-lg-12">
			    <div class="alert alart_style_four alert-dismissible fade show" role="alert">
					Nothing Found for now, please try again later.
					{{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>--}}
			    </div>
			</div>


		@else


			{{--@if (isset($categoryName))
			<div class="col-lg-12">
			    <div class="alert alart_style_one ">
			        <p>Category: <strong>{{ $categoryName }}</strong></p>
			    </div>
			</div>
			@endif

			@if (isset($ownerrName))
			<div class="col-lg-12">	
			    <div class="alert alart_style_one ">
			        <p>Listed by: <strong>{{ $ownerName }}</strong></p>
			    </div>
			</div>    
			@endif --}} 


			@foreach($properties as $property)

				<div class="col-md-6 col-lg-6">

					<div class="feat_property home7 ">
						<div class="thumb">

							@if($property->propertyImages->count() > 0)

								<img class="img-whp" 
									height="325"
									src="{{$property->image_url }}" 
									alt="{{$property->title }}">
								@else
								    <img class="img-whp"
									src="{{ $property->default_img }}"
									height="325"
									alt="{{ $property->title }}">	

								@endif

							<div class="thmb_cntnt">
								<ul class="tag mb0">
									<li class="list-inline-item type">
										<a href="#">
										  For {{$property->type}}
									    </a>
									</li>

									@if($property->is_featured == 1)
										<li class="list-inline-item featured">
											<a href="">Featured</a>
										</li>
									@endif
								</ul>
							</div>
							<div class="thmb_cntnt style3">
								<ul class="icon mb0">
									<li class="list-inline-item">
										<a href="#">
											<span class="flaticon-heart"></span>
										</a>
									</li>
								</ul>

								<a class="fp_price" 
								    href="{{ route('property.detail', $property->slug)}}">
									Tsh {{$property->price}}
									@if($property->type = 'Rent')
										<small> /mo</small>
									@endif
							    </a>

							</div>
						</div>
						<div class="details">
							<div class="tc_content">
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
									   {{$property->short_title}}
									</a>
							    </h4>

								<p>
									<span class="flaticon-placeholder"></span> 

									 {{$property->short_address}}
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
														Sq Ft: {{$property->area}}
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
		{{ $properties->links('vendor.pagination.custom3') }}
		{{-- $properties->appends(request()->only(['property->category']))->links('vendor.pagination.custom3')--}}
		</div>	
		
	
		{{--<div class="col-lg-12 mt20">
			<div class="mbp_pagination">
				<ul class="page_navigation">
				    <li class="page-item disabled">
				    	<a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
				    </li>
				    <li class="page-item"><a class="page-link" href="#">1</a></li>
				    <li class="page-item active" aria-current="page">
				    	<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
				    </li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item"><a class="page-link" href="#">...</a></li>
				    <li class="page-item"><a class="page-link" href="#">29</a></li>
				    <li class="page-item">
				    	<a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>
				    </li>
				</ul>
			</div>
		</div>
		--}}


	</div>
</div>