<?php
    get_header();?>


<div class="container-fluid">
		<div class="row slider_section">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php bloginfo('template_directory');?>/images/slider_img1.jpg">
					<div class="slide-overlay"></div>
                    <div class="carousel-caption hidden-xs">
                        <div class="slider_content">
							<h3 class="slider_subtitle">Lorem Ipsum</h3>
							<h2 class="slider_title">Dolor Sit Amet</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							<ul class="list-inline">
								<li><a href="#" class="btn-link1">Free Trial Plan</a></li>
								<li id="free_videos"><a href="#" class="btn-link2">Free Videos</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_directory');?>/images/slider_img1.jpg">
					<div class="slide-overlay"></div>
                    <div class="carousel-caption hidden-xs">
                        <div class="slider_content">
							<h3 class="slider_subtitle">Lorem Ipsum</h3>
							<h2 class="slider_title">Dolor Sit Amet</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							<ul class="list-inline">
								<li><a href="#" class="btn-link1">Free Trial Plan</a></li>
								<li id="free_videos" ><a href="#" class="btn-link2">Free Videos</a></li>
							</ul>
						</div>
					</div>
                </div>
				<div class="item">
                    <img src="<?php bloginfo('template_directory');?>/images/slider_img1.jpg">
					<div class="slide-overlay"></div>
                    <div class="carousel-caption hidden-xs">
                        <div class="slider_content">
							<h3 class="slider_subtitle">Lorem Ipsum</h3>
							<h2 class="slider_title">Dolor Sit Amet</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							<ul class="list-inline">
								<li><a href="#" class="btn-link1">Free Trial Plan</a></li>
								<li id="free_videos" ><a href="#" class="btn-link2">Free Videos</a></li>
							</ul>
						</div>
					</div>
                </div>
			</div>
			 <!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a> 
			</div>
	    </div>
		
		<!-- About Section -->
		<div class="row about_section pt_70">
			<div class="container">	
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="about_content">
						<h2 id="about_lauren" class="about_title">About Lauren</h2>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<p>
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo...</p>
						<a href="#" class="btn-read">Read More</a>
					</div>
				</div>	
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="about_img">
						<img src="<?php bloginfo('template_directory');?>/images/about_img.jpg" class="img-responsive center-block">
					</div>
				</div>
			</div>	
		</div>	 
		<!-- About Section Ends-->
		
		<!-- Video Section -->
		<div class="row video_section">
			<div class="container">
				<div class="video_link_sec">
					<a href="#" class="video_link"><img src="<?php bloginfo('template_directory');?>/images/play-button.png" class="img-responsive center-block"></a>
				</div>
			</div>
		</div>
		<!-- Video Section Ends -->
		
		<!-- Video Slider Section -->
		<div class="row vidslider_section">
			<div class="container">
				<div class="col-md-12">
					<div id="video-slider" class="video_slider owl-carousel">
						<div class="item">
							<div class="videoslider_wrap">
								<img src="<?php bloginfo('template_directory');?>/images/strength.jpg" class="img-responsive center-block">
								<div class="video_desc">
									<p>Strength</p>
									<h3>Weightlifting</h3>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="videoslider_wrap">
								<img src="<?php bloginfo('template_directory');?>/images/cardio.jpg" class="img-responsive center-block">
								<div class="video_desc">
									<p>Cardio</p>
									<h3>Body Works</h3>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="videoslider_wrap">
								<img src="<?php bloginfo('template_directory');?>/images/strength.jpg" class="img-responsive center-block">
								<div class="video_desc">
									<p>Strength</p>
									<h3>Weightlifting</h3>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="videoslider_wrap">
								<img src="<?php bloginfo('template_directory');?>/images/cardio.jpg" class="img-responsive center-block">
								<div class="video_desc">
									<p>Cardio</p>
									<h3>Body Works</h3>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="videoslider_wrap">
								<img src="<?php bloginfo('template_directory');?>/images/strength.jpg" class="img-responsive center-block">
								<div class="video_desc">
									<p>Strength</p>
									<h3>Weightlifting</h3>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="videoslider_wrap">
								<img src="<?php bloginfo('template_directory');?>/images/cardio.jpg" class="img-responsive center-block">
								<div class="video_desc">
									<p>Cardio</p>
									<h3>Body Works</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Video Slider Section Ends -->
		
		<!-- About Section -->
		<div class="row vidclass_section pt_70">
			<div class="container">	
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="about_img">
						<img src="<?php bloginfo('template_directory');?>/images/vidclass_img.png" class="img-responsive center-block">
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="vidclass_content">
						<h2 id="about_classes" class="vidclass_title">About The Video Classes</h2>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<p>
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo...</p>
						<a href="#" class="btn-read">Read More</a>
					</div>
				</div>	
			</div>	
		</div>	 
		<!-- About Section Ends-->
		
		<!-- Consultation Section -->
		<div class="row consult_section p_50">
			<div class="container">
				<div class="col-md-6">
					<div class="consult_content">
						<h2>FREE CONSULTATION?</h2>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="consult_links">
						<ul class="list-inline">
							<li><a href="#" class="btn-orange">CALL : 1800 000 000</a></li>
							<li><a href="#" class="btn-orange">REQUEST A FREE VIDEO</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Consultation Section Ends -->
		
		<!-- logs Section -->
		<div class="row blogs_section p_100">
			<div class="container">
				<h3 class="section_subtitle">Latest News</h3>
				<h2 id="blog" class="section_title">From Blog</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud nisi aliquip ex ea commodo consequat.</p>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="blog_single">
						<div class="blog_img">
							<img src="<?php bloginfo('template_directory');?>/images/blog_single_img.jpg" class="img-responsive center-block">
						</div>
						<div class="blog_content">
							<ul class="list-inline">
								<li>Jun 8, 2018</li>
								<li>by Amanda Smith</li>
							</ul>
							<p class="blog_title">New cross fit course</p>
							<p class="blog_desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam... </p>
							<a href="#" class="btn-read fill">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="blog_single">
						<div class="blog_img">
							<img src="<?php bloginfo('template_directory');?>/images/blog_single_img.jpg" class="img-responsive center-block">
						</div>	
						<div class="blog_content">
							<ul class="list-inline">
								<li>Jun 8, 2018</li>
								<li>by Amanda Smith</li>
							</ul>
							<p class="blog_title">New cross fit course</p>
							<p class="blog_desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam... </p>
							<a href="#" class="btn-read fill">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6  col-xs-12">
					<div class="blog_single">
						<div class="blog_img">
							<img src="<?php bloginfo('template_directory');?>/images/blog_single_img.jpg" class="img-responsive center-block">
						</div>	
						<div class="blog_content">
							<ul class="list-inline">
								<li>Jun 8, 2018</li>
								<li>by Amanda Smith</li>
							</ul>
							<p class="blog_title">New cross fit course</p>
							<p class="blog_desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam... </p>
							<a href="#" class="btn-read fill">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Blogs Section Ends -->
		
		<!-- Testimonial Brands -->
		<div class="row testimonial_section p_100">
			<div class="container text-center">
				<h3 class="section_subtitle">OUR CLIENTS</h3>
				<h2 class="section_title">SAY ABOUT US</h2>
				<div class="col-md-12">
					<div id="testimonial-slider" class="testimonial_slider owl-carousel">
						<div class="item">
							<div class="testimonial_wrap">
								<div class="testimonial_desc">
									<div class="client_img">
									<img src="<?php bloginfo('template_directory');?>/images/client-img.png" class="img-responsive center-block">
									</div>
									<p class="text_name">MARCUS FIELDS</p>
									<p class="text_desg">Marketing Manager</p>
									<p class="text_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
									
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="testimonial_wrap">
								<div class="testimonial_desc">
									<div class="client_img">
									<img src="<?php bloginfo('template_directory');?>/images/client-img.png" class="img-responsive center-block">
									</div>
									<p class="text_name">MARCUS FIELDS</p>
									<p class="text_desg">Marketing Manager</p>
									<p class="text_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
									
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="testimonial_wrap">
								<div class="testimonial_desc">
									<div class="client_img">
									<img src="<?php bloginfo('template_directory');?>/images/client-img.png" class="img-responsive center-block">
									</div>
									<p class="text_name">MARCUS FIELDS</p>
									<p class="text_desg">Marketing Manager</p>
									<p class="text_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Section Testimonial Ends -->
		
		<!-- Doctors Section -->
		<div class="row results_section pt_70">
			<div class="container text-center">
				<h2 id="before_after" class="section_title">Real People. Real Results.</h2>
				<div class="col-md-12">
					<div id="result-slider" class="result_slider owl-carousel">
						<div class="item">
							<div class="row result_single">
								<div class="col-md-6">
									<div class="result_img">
										<img src="<?php bloginfo('template_directory');?>/images/result-sandra.jpg" class="img-responsive center-block">
									</div>
								</div>
								<div class="col-md-6 result_desc">
									<p class="person_name">Sandra Lost 16 lbs</p>
									<p class="person_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<p class="person_desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="row result_single">
								<div class="col-md-6">
									<div class="result_img">
										<img src="<?php bloginfo('template_directory');?>/images/result-sandra.jpg" class="img-responsive center-block">
									</div>
								</div>
								<div class="col-md-6 result_desc">
									<p class="person_name">Sandra Lost 16 lbs</p>
									<p class="person_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<p class="person_desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="row result_single">
								<div class="col-md-6">
									<div class="result_img">
										<img src="<?php bloginfo('template_directory');?>/images/result-sandra.jpg" class="img-responsive center-block">
									</div>
								</div>
								<div class="col-md-6 result_desc">
									<p class="person_name">Sandra Lost 16 lbs</p>
									<p class="person_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<p class="person_desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- Results Section Ends -->
		
	</div>

    <?php get_footer();
?>