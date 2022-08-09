<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one style2 style3 navbar-scrolltofixed stricky main-menu">
		<div class="container-fluid p0">


			<!-- Top Bar
		    ================================================== -->
		    @include('layouts.front_end.top_bar')
		  

		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="/front_end/images/header-logo.png" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="/front_end/images/header-logo2.png" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="/front_end/images/header-logo2.png" alt="header-logo2.png">
		            <span>Madalali4u</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
				<div class="ht_left_widget float-left">
					<ul>
						<li class="list-inline-item dn-1440">
							<div class="ht_search_widget">
								<div class="header_search_widget">
									<form class="form-inline mailchimp_form">
										<input type="text" class="form-control" id="inlineFormInputName2" placeholder="What are you looking for?">
										<button type="submit" class="btn btn-primary"><span class="flaticon-magnifying-glass"></span></button>
									</form>
								</div>
							</div>
						</li>
		                <li class="list-inline-item list_s dib-1440 dn">
		                	<div class="search_overlay">
							  	<a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
							    	<span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
							  	</a>
							</div>
		                </li>
					</ul>
				</div>
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
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

		            <li class="last">
		                <a href="{{ route('contact') }}">
		                	<span class="title">Contact</span>
		                </a>
		            </li>

	                <li class="list-inline-item list_s"><a href="{{ route('login') }}" class="btn flaticon-user" > 
	                	<span class="dn-lg">Login | Register</span></a>
	                </li>

	                <li class="list-inline-item add_listing home6"><a href="{{ route('login') }}"><span class="flaticon-plus"></span><span class="dn-lg"> Create Listing</span></a>
	                </li>
		        </ul>
		    </nav>


		</div>
</header>