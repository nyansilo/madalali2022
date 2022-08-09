<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one style2 menu-fixed main-menu">
		<div class="container-fluid p0">
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
		            <span>FindHouse</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
		            
	                <li class="user_setting">
						<div class="dropdown">

							<?php 
		
			                $first_name = Auth::user()->first_name;
			                $last_name = Auth::user()->last_name;
			  
			            	 ?>
	                		<a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="/front_end/images/team/e1.png" alt="e1.png"> 
	                			<span class="dn-1199">{{ $first_name }} {{ $last_name }}</span>
	                		</a>
						    <div class="dropdown-menu">
						    	<div class="user_set_header">
						    		<img class="float-left" src="/front_end/images/team/e1.png" alt="e1.png">
							    	<p>Ali Tufan <br><span class="address"><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e98885809d9c8f8887a98e84888085c78a8684">[email&#160;protected]</a></span></p>
						    	</div>
						    	<div class="user_setting_content">
									<a class="dropdown-item active" href="#">My Profile</a>
									<a class="dropdown-item" href="#">Messages</a>
									<a class="dropdown-item" href="#">Purchase history</a>
									<a class="dropdown-item" href="#">Help</a>

									<a lass="dropdown-item" href="{{ route('logout') }}" 
				                       onclick="event.preventDefault();
				                       document.getElementById('logout-form').submit();">
				                       Log out
				                    </a>
				                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				                      @csrf
				                    </form>   
									
						    	</div>
						    </div>
						</div>
			        </li>
	                <li class="list-inline-item add_listing"><a href="page-add-new-property.html"><span class="flaticon-plus"></span><span class="dn-lg"> Create Listing</span></a></li>
		        </ul>
		    </nav>
		</div>
	</header>