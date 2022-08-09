

<div class="col-lg-8">

	


	<div class="main_blog_post_content">

		@if(!$blogs->count())

		    <div class="alert alart_style_four alert-dismissible fade show" role="alert">
				Nothing Found for now, please try again later.
				{{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>--}}
		    </div>
		
	    @else

			@foreach($blogs as $blog)

				<div class="for_blog feat_property">
					<div class="thumb">
						@if($blog->image)
						   
						<img class="img-whp" 
							height="400"
							src="{{$blog->image_url }}" 
							alt="{{$blog->title }}">
						@else
						    <img class="img-whp"
							src="{{$blog->default_img }}"
							height="400"
							alt="{{ $blog->title }}">	

						@endif

						<div class="blog_tag">{{$blog->category->title}}</div>
					</div>
					<div class="details">
						<div class="tc_content">
							<h4 class="mb15">{{$blog->title}}</h4>
							<p>{{$blog->short_body}}</p>
						</div>
						<div class="fp_footer">
							<ul class="fp_meta float-left mb0">
								@if($blog->profile_url)
									<li class="list-inline-item">					
										<a href="{{ route('blog.author', $blog->author->slug) }}">
											<img  style="max-height: 40px; max-width: 40px"
											src="{{$blog->profile_url}}" 
											alt="{{$blog->full_name}}
											">
										</a>
									</li>
								@else
									<li class="list-inline-item">					
										<a href="{{ route('blog.author', $blog->author->slug) }}">
											<img style="max-height: 40px; max-width: 40px"
											src="{{$blog->default_profile}}" 
											alt="{{$blog->full_name}}">
										</a>
									</li>

								@endif

								<li class="list-inline-item">
									<a href="#">{{$blog->full_name}}</a>
								</li>
								<li class="list-inline-item">
									<a href="#">
									<span class="flaticon-calendar pr10"></span> 
									{{$blog->dateDisplay()}}
								</a></li>
							</ul>
							<a class="fp_pdate float-right text-thm" 
							    href="{{ route('blog.detail', $blog->slug)}}">
								Read More 
								<span class="flaticon-next"></span>
							</a>
						</div>
					</div>
				</div>

			@endforeach

		@endif		


		<div class="row">
			
					
			<div class="col-lg-12 mt20">
			{{ $blogs->links('vendor.pagination.custom3') }}
			{{-- $properties->appends(request()->only(['property->category']))->links('vendor.pagination.custom3')--}}
		
			</div>
		</div>

	</div>
</div>