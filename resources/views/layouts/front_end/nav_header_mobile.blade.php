<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center">
		            <img class="nav_logo_img img-fluid mt20" src="/front_end/images/header-logo2.png" alt="header-logo2.png">
		            <span class="mt20">FindHouse</span>
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="page-register.html"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item">
	                	<div class="search_overlay">
						  	<div id="search-button-listener2" class="mk-search-trigger style2 mk-fullscreen-trigger">
						   		<div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
						  	</div>
							<div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
							    <button class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i class="fa fa-times"></i></button>
							    <div id="mk-fullscreen-search-wrapper2">
							      	<form method="get" id="mk-fullscreen-searchform2">
							        	<input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input2">
							        	<i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
							      	</form>
							    </div>
							</div>
						</div>
					</li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li>
	                <a href="/"><span class="title">Home</span></a>
	            </li>

	            <li>
	                <a href="{{ route('about') }}"><span class="title">About Us</span></a>
	                <!-- Level Two-->
	                <ul>
	                    <li><a href="{{ route('mission') }}">Mission and Vision</a></li>
	                    <li><a href="{{ route('team') }}">Our Team</a></li>
	                    
	                </ul>
	            </li>

	            <li>
	                <a href="{{ route('properties') }}"><span class="title">Property</span></a>
	                <!-- Level Two-->
	                <ul>
	                    <li><a href="{{ route('sale') }}">For Sale</a></li>
	                    <li><a href="{{ route('rent') }}">For Rent</a></li>
	                    <li><a href="{{ route('properties') }}">All Properties</a></li>
	                    
	                </ul>
	            </li>
	          
	          
	            <li>
	                <a href="{{ route('blogs') }}">
	                	<span class="title">Blog</span>
	                </a>
	            </li>

				<li><a href="{{ route('contact') }}">Contact</a></li>
				<li><a href="{{ route('login') }}"><span class="flaticon-user"></span> Login</a></li>
				<li><a href="p{{ route('register') }}"><span class="flaticon-edit"></span> Register</a></li>
				<li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="{{ route('login') }}"><span class="flaticon-plus"></span> Create Listing</a></li>
			</ul>
		</nav>
</div>