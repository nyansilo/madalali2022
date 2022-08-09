<!--  rent_breadcrum -->
<div class="row">

	<div class="col-lg-6">
		<div class="breadcrumb_content style2 mb0-991">
			<ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="/">Home</a></li>
			    <li class="breadcrumb-item active text-thm" aria-current="page">
			    @if (isset($categoryName)) 	
			       {{ $categoryName }} Category
			    @elseif(isset($ownerName))
			    	{{ $ownerName}} Properties 
			    @else
			       All Properties
			    @endif 
			    </li>
			</ol>
			<h2 class="breadcrumb_title">
				@if (isset($categoryName)) 	
			       All Properties for {{ $categoryName }} Category
			    @elseif(isset($ownerName))
			       All Properties for {{ $ownerName }}  
			    @else
			       All Properties
			    @endif 
		    </h2>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="listing_list_style mb20-xsd tal-991">
			<ul class="mb0">
				<li class="list-inline-item"><a href="#"><span class="fa fa-th-large"></span></a></li>
				<li class="list-inline-item"><a href="#"><span class="fa fa-th-list"></span></a></li>
			</ul>
		</div>
		<div class="dn db-991 mt30 mb0">
			<div id="main2">
				<span id="open2" class="flaticon-filter-results-button filter_open_btn style2"> Show Filter</span>
			</div>
		</div>
	</div>
</div>