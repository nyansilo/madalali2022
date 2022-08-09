

<!-- Categories blog --> 
<div class="terms_condition_widget">
	<h4 class="title">blog Categories </h4>
	<div class="widget_list">
		<ul class="list_details">
			@foreach ($blogCategories as $category)

			<li><a href="{{ route('blog.category', $category->slug) }}"><i class="fa fa-caret-right mr10"></i>
				{{ $category->title }} 
				<span class="float-right">{{ $category->blogsNumber('blog') }}</span></a>
			</li>
			@endforeach
			
		</ul>
	</div>
</div>