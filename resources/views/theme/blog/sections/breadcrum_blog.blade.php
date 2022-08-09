<div class="row">
	<div class="col-xl-6">
		<div class="breadcrumb_content style2">
		
			<ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="/">Home</a></li>
			    <li class="breadcrumb-item active text-thm" aria-current="page">
			    @if (isset($categoryName)) 	
			       {{ $categoryName }} Category
			    @elseif(isset($authorrName))
			    	{{ $authorName}} blogs
			    @elseif(isset($tagName))
			    	{{ $tagName}} 
			    @else
			       All Blogs
			    @endif 
			    </li>
			</ol>
			<h2 class="breadcrumb_title">
				@if (isset($categoryName)) 	
			       All Blogs for {{ $categoryName }} Category
			    @elseif(isset($authorName))
			       All Blog for {{ $authorName }} 
			    @elseif(isset($tagName))
			    	{{ $tagName}}    
			    @else
			       All Blogs
			    @endif 
		    </h2>
		</div>
	</div>
</div>