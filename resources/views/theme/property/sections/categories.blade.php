<!-- Categories Property --> 
<div class="terms_condition_widget">
	<h4 class="title">Categories Property</h4>
	<div class="widget_list">
		<ul class="list_details">
			@foreach ($propertyCategories as $category)

			<li><a href="{{ route('property.category', $category->slug) }}"><i class="fa fa-caret-right mr10"></i>
				{{ $category->title }} 
				<span class="float-right">{{ $category->propertiesNumber('Property') }}</span></a>
			</li>
			@endforeach
			
		</ul>
	</div>
</div>