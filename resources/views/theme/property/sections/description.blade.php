<!-- Property infor Introduction -->
{{-- <div class="col-lg-12">
	<div class="listing_single_description2 mt30-767 mb30-767">
		<div class="single_property_title">
			<h2>{{ $property->short_title}}</h2>
			<p>{{ $property->address}}</p>
		</div>
		<div class="single_property_social_share style2">
			<div class="price">
				<h2>Tsh {{$property->price}}
					@if($property->type == 'Rent')
					    <small>/mo</small>
					@endif
				</h2>
			</div>
		</div>
	</div>
</div>
--}}

<!-- Description -->
<div class="col-lg-12">
	<div class="listing_single_description style2">
		<div class="lsd_list">
			<ul class="mb0">
				<li class="list-inline-item"><a href="#">Apartment</a></li>
				<li class="list-inline-item"><a href="#">Beds: 4</a></li>
				<li class="list-inline-item"><a href="#">Baths: 2</a></li>
				<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
			</ul>
		</div>
		<h4 class="mb30">Description</h4>

		<?php

			$description = $property->description;
			$first100    = substr($description, 0, 200);
            $theRest     = substr($description, 200)
		?>

    	<p class="mb10">{{$first100}}</p>
		<div class="collapse" id="collapseExample">
		  	<div class="card card-body">
		    	<p class="mt10 mb10">{{$theRest}}</p>
		    	
		  	</div>
		</div>
		<p class="overlay_close">
			<a class="text-thm fz14" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
		   	 Show More <span class="flaticon-download-1 fz12"></span>
		  	</a>
		</p>
	</div>
</div>