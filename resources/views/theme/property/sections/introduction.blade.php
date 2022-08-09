<!-- Property infor Introduction -->
		<div class="row mb30">
			<div class="col-lg-7 col-xl-8">
				<div class="single_property_title mt30-767">
					<h2>{{ $property->title}}</h2>
					<p>{{ $property->address}}</p>
				</div>
				<div class="dn db-991">
					<div id="main2">
						<span id="open2" class="flaticon-filter-results-button filter_open_btn style3"> Show Filter</span>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-xl-4">
				<div class="single_property_social_share">
					<h2>Tsh {{$property->price}}
					@if($property->type == 'Rent')
					    <small>/mo</small>
					@endif
				</h2>
					<div class="spss style2 mt20 text-right tal-400">
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