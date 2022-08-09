<div class="col-lg-8">
					<div class="main_blog_post_content">
						<div class="mbp_thumb_post">
							<div class="blog_sp_tag">
								<a href="#">{{$blog->category->title}}</a>
							</div>
							<h3 class="blog_sp_title">{{$blog->title}}</h3>
							<ul class="blog_sp_post_meta">
								<li class="list-inline-item"><a href="#">
									<img src="/front_end/images/property/pposter1.png" alt="pposter1.png"></a>
								</li>
								<li class="list-inline-item">
									<a href="#">{{$blog->full_name}}</a>
								</li>

								<li class="list-inline-item">
									<span class="flaticon-calendar"></span>
								</li>
								<li class="list-inline-item">
									<a href="#">{{$blog->dateDisplay()}}</a>
								</li>
								<li class="list-inline-item">
									<span class="flaticon-view"></span>
								</li>
								<li class="list-inline-item">
									<a href="#"> {{ $blog->blogsView('View') }} </a>
								</li>
								<li class="list-inline-item">
									<span class="flaticon-chat"></span>
								</li>
								<li class="list-inline-item">
									<a href="#"> {{ $blog->commentsNumber('Comment') }}</a>
								</li>
							</ul>
							<div class="thumb">
								<img class="img-fluid" src="/front_end/images/blog/bs1.jpg" alt="bs1.jpg">
							</div>
							<div class="details">
								<p class="mb30">

								{{ $blog->body }}

								</p>
							</div>
							<ul class="blog_post_share">
								<li>
									<p>Share</p>
								</li>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
						<div class="mbp_pagination_tab">
							<div class="row">
								<div class="col-sm-6 col-lg-6">
									<div class="pag_prev">
										<a href="#"><span class="flaticon-back"></span></a>
										<div class="detls"><h5>Previous Post</h5> <p> Housing Markets That</p></div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-6">
									<div class="pag_next text-right">
										<a href="#"><span class="flaticon-next"></span></a>
										<div class="detls"><h5>Next Post</h5> <p> Most This Decade</p></div>
									</div>
								</div>
							</div>
						</div>
						<div class="product_single_content mb30">
							<div class="mbp_pagination_comments">
								<div class="total_review">
									<h4>896 Reviews</h4>
									<ul class="review_star_list mb0 pl10">
										<li class="list-inline-item"><i class="fa fa-star"></i></li>
										<li class="list-inline-item"><i class="fa fa-star"></i></li>
										<li class="list-inline-item"><i class="fa fa-star"></i></li>
										<li class="list-inline-item"><i class="fa fa-star"></i></li>
										<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
									</ul>
									<a class="tr_outoff pl10" href="#">( 4.5 out of 5 )</a>
									<a class="write_review float-right fn-xsd" href="#">Write a Review</a>
								</div>
								<div class="mbp_first media">
									<img src="/front_end/images/testimonial/1.png" class="mr-3" alt="1.png">
									<div class="media-body">
								    	<h4 class="sub_title mt-0">Diana Cooper
											<span class="sspd_review">
												<ul class="mb0 pl15">
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"></li>
												</ul>
											</span>
								    	</h4>
								    	<a class="sspd_postdate fz14" href="#">December 28, 2020</a>
								    	<p class="fz14 mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
									</div>
								</div>
								<div class="custom_hr"></div>
								<div class="mbp_first media">
									<img src="/front_end/images/testimonial/2.png" class="mr-3" alt="2.png">
									<div class="media-body">
								    	<h4 class="sub_title mt-0">Ali Tufan
											<span class="sspd_review">
												<ul class="mb0 pl15">
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"></li>
												</ul>
											</span>
								    	</h4>
								    	<a class="sspd_postdate fz14" href="#">December 28, 2020</a>
								    	<p class="fz14 mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
									</div>
								</div>
							</div>
						</div>
						<div class="bsp_reveiw_wrt">
							<h4>Write a Review</h4>
							<ul class="review_star">
								<li class="list-inline-item">
									<span class="sspd_review">
										<ul>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										</ul>
									</span>
								</li>
								<li class="list-inline-item pr15"><p>Your Rating & Review</p></li>
							</ul>
							<form class="comments_form">
								<div class="form-group">
							    	<input type="text" class="form-control" id="exampleInputName1" aria-describedby="textHelp" placeholder="Review Title">
								</div>
								<div class="form-group">
								    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Your Review"></textarea>
								</div>
								<button type="submit" class="btn btn-thm">Submit Review</button>
							</form>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 mb20">
							<h4>Related Posts</h4>
						</div>
						<div class="col-md-6 col-lg-6">
							<div class="for_blog feat_property">
								<div class="thumb">
									<img class="img-whp" src="/front_end/images/blog/1.jpg" alt="1.jpg">
									<div class="tag">Construction</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<h4>Redfin Ranks the Most Competitive Neighborhoods of 2020</h4>
										<ul class="bpg_meta">
											<li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i></a></li>
											<li class="list-inline-item"><a href="#">January 16, 2020</a></li>
										</ul>
										<p>Lorem ipsum dolor sit amet, consectetur text link libero tempus congue.</p>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="/front_end/images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
										</ul>
										<a class="fp_pdate float-right text-thm" href="#">Read More <span class="flaticon-next"></span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6">
							<div class="for_blog feat_property">
								<div class="thumb">
									<img class="img-whp" src="/front_end/images/blog/2.jpg" alt="2.jpg">
									<div class="tag">Construction</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<h4>Housing Markets That Changed the Most This Decade</h4>
										<ul class="bpg_meta">
											<li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i></a></li>
											<li class="list-inline-item"><a href="#">January 16, 2020</a></li>
										</ul>
										<p>Lorem ipsum dolor sit amet, consectetur text link libero tempus congue.</p>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="/front_end/images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
										</ul>
										<a class="fp_pdate float-right text-thm" href="#">Read More <span class="flaticon-next"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>