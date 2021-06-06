<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php wp_head(); ?>
	</head>


	<body>
	
		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
		<header>
			<!-- start top bar -->
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 hidden-xs">
							<div class="contact">
								<p>
									<i class="fa fa-phone"></i>
									+880 123 456 789
								</p>
								<p>
									<i class="fa fa-envelope"></i>
									<a href="#">24hrsuport@domain.com</a>
								</p>
							</div><!-- /.contact -->
						</div><!-- /.col-sm-8 -->
						
						<div class="col-sm-4">
							<div class="social-icon">
								<ul>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
									<li><a href=""><i class="fa fa-tumblr"></i></a></li>
								</ul>
							</div><!-- /.social-icon -->
						</div><!-- /.col-sm-4 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- end top bar -->
			
	        <!-- Start Navigation -->
	        <nav class="navbar navbar-default navbar-sticky bootsnav">
	            <!-- Start Top Search -->
	            <div class="top-search">
	                <div class="container">
	                    <div class="input-group">
	                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
	                        <input type="text" class="form-control" placeholder="Search">
	                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
	                    </div>
	                </div>
	            </div>
	            <!-- End Top Search -->

	            <div class="container">
	                <!-- Start Atribute Navigation -->
	                <div class="attr-nav">
	                    <ul>
	                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
	                        <li class="dropdown">
	                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
	                                <i class="fa fa-shopping-bag"></i>
	                                <span class="badge">2</span>
	                            </a>
	                            <ul class="dropdown-menu cart-list">
	                                <li>
	                                    <a href="#" class="photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart-1.jpg" class="cart-thumb" alt="" /></a>
	                                    <h2><a href="#">Denim SlimFit Shirt </a></h2>
	                                    <p>2x - <span class="price">$19.99</span></p>
	                                </li>
	                                <li>
	                                    <a href="#" class="photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart-3.jpg" class="cart-thumb" alt="" /></a>
	                                    <h2><a href="#">Denim Polo Shirt</a></h2>
	                                    <p>2x - <span class="price">$12.99</span></p>
	                                </li>
	                                <li class="total">
	                                    <span class="pull-right"><strong>Total</strong>: $320.00</span>
	                                    <a href="#" class="btn btn-primary btn-sm btn-cart">Cart</a>
	                                </li>
	                            </ul>
	                        </li>
	                    </ul>
	                </div>
	                <!-- End Atribute Navigation -->

	                <!-- Start Header Navigation -->
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
	                        <i class="fa fa-bars"></i>
	                    </button>
	                    <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="logo logo-scrolled" alt=""></a>
	                </div>
	                <!-- End Header Navigation -->

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="navbar-menu">

	                	<?php wp_nav_menu( array(
	                		'theme_location'  => 'menu-1',
	                		'menu_class'      => 'nav navbar-nav navbar-right',
		                	) 
		                ); ?>
	                </div><!-- /.navbar-collapse -->
	            </div>
	        </nav>
	        <!-- End Navigation -->
	        <div class="clearfix"></div>
		</header> <!-- end header -->
	

		<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
		<section class="slider-area">
		
			<!-- slide item one -->
			<div class="homepage-slider slider-bg1">
				<div class="display-table">
					<div class="display-table-cell">
						<div class="container">
							<div class="row">
								<div class="col-sm-7">
									<div class="slider-content">
										<h1>Prepare for the future with our advisors</h1>
										<p>Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.</p>
										<a href="#">Meet Experts <i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- slide item three -->
			<div class="homepage-slider slider-bg3">
				<div class="display-table">
					<div class="display-table-cell">
						<div class="container">
							<div class="row">
								<div class="col-sm-7">
									<div class="slider-content">
										<h1>Prepare for the future with our advisors</h1>
										<p>Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.</p>
										<a href="#">Meet Experts <i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</section><!-- slider area end -->
	
	
		<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
		<section class="section-padding darker-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
						<div class="intro-title text-center">
							<h2>Welcome to the Neuron Finance</h2>
							<div class="hidden-xs">
								<p>Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single intro -->
					<div class="col-md-4">
						<div class="single-intro">
							<div class="intro-img intro-bg1"></div>
							<div class="intro-details text-center">
								<h3>About Business</h3>
								<p>Seamlessly envisioneer extensive interfaces and back wardcompatible applications. Proactively promote timely best.</p>
							</div>
						</div>
					</div>
					<!-- single intro -->
					<div class="col-md-4">
						<div class="single-intro">
							<div class="intro-img intro-bg2"></div>
							<div class="intro-details text-center">
								<h3>Business Growth</h3>
								<p>Seamlessly envisioneer extensive interfaces and back wardcompatible applications. Proactively promote timely best.</p>
							</div>
						</div>
					</div>
					<!-- single intro -->
					<div class="col-md-4">
						<div class="single-intro">
							<div class="intro-img intro-bg3"></div>
							<div class="intro-details text-center">
								<h3>Sustainability</h3>
								<p>Seamlessly envisioneer extensive interfaces and back wardcompatible applications. Proactively promote timely best.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- intro area end -->
	
	
		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2>A Finance Agency Crafting Beautiful & Engaging Online Experiences</h2>
							<p>Seamlessly communicate distinctive alignments and business models. Efficiently whiteboard robust meta-services whereas stand-alone synergy. Enthusiastically engage premier supply chains after intuitive testing procedures. Conveniently parallel task robust imperatives through corporate customer service.</p> 
							
							<p>Dynamically productivate tactical mindshare via business collaboration and idea-sharing. Credibly conceptualize extensive schemas for functionalized metrics. </p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/homepageblock.jpg" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
	
	
		<!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->
		<section class="section-padding darker-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
						<div class="template-title text-center">
							<h2>We Provide Huge Range of Services</h2>
							<p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<!-- single service -->
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							<img class="hvr-buzz-out" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/1.png" alt="" />
							<h3><a href="#">Performance</a></h3>
							<p>Dynamically fabricate innovative products and distributed web services. Distinctively pontificate.</p>
						</div>
					</div>
					<!-- single service -->
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/2.png" alt="" />
							<h3><a href="#">Sustainability</a></h3>
							<p>Dynamically fabricate innovative products and distributed web services. Distinctively pontificate.</p>
						</div>
					</div>
					<!-- single service -->
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/3.png" alt="" />
							<h3><a href="#">Web Design</a></h3>
							<p>Dynamically fabricate innovative products and distributed web services. Distinctively pontificate.</p>
						</div>
					</div>
					<!-- single service -->
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/4.png" alt="" />
							<h3><a href="#">Web Development</a></h3>
							<p>Dynamically fabricate innovative products and distributed web services. Distinctively pontificate.</p>
						</div>
					</div>
					<!-- single service -->
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/5.png" alt="" />
							<h3><a href="#">Branding Design</a></h3>
							<p>Dynamically fabricate innovative products and distributed web services. Distinctively pontificate.</p>
						</div>
					</div>
					<!-- single service -->
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/6.png" alt="" />
							<h3><a href="#">Marketing </a></h3>
							<p>Dynamically fabricate innovative products and distributed web services. Distinctively pontificate.</p>
						</div>
					</div>
				</div>
			</div>
		</section><!-- end services section -->
	

		<!-- :::::::::::::::::::::  Client Section:::::::::::::::::::::::::: -->
		<section class="client-logo">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="all-client-logo">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/1.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/2.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/3.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/4.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/5.jpg" alt="" /></a>
						</div>
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- end client section -->
		
	
		<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
		<footer>
			<div class="primary-footer">
				<div class="container">
					<div class="row">
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-4">
							<div class="footer-widget about-us">
								<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png" alt="" /></a>
								<p>Collaboratively create resource sucking manufactured products and worldwide e-services. Seamlessly revol tionize holistic data rather than intermandated results. Energistically innovate open-source systems for performance based total.</p>
								<div class="online-card">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-card/1.png" alt="" /></a>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-card/2.png" alt="" /></a>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-card/3.png" alt="" /></a>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-card/4.png" alt="" /></a>
								</div>
							</div>
						</div><!-- end single footer widget -->
						
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-2">
							<div class="footer-widget usefull-link">
								<h3>Useful Links</h3>
								<ul> 
									<li><a href="#"><i class="fa fa-angle-right"></i>About Us</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Services</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Works</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Contact</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Blog</a></li>
								</ul>
							</div>
						</div><!-- end single footer widget -->
						
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-3">
							<div class="footer-widget latest-post">
								<h3>Latest Post</h3>
								<ul>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/latest-post/1.png" alt="" />
										<p><a href="#">Headset No Longer Wire For Sound</a></p>
										<span>12 May 2016</span>
										
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/latest-post/2.png" alt="" />
										<p><a href="#">Headset No Longer Wire For Sound</a></p>
										<span>12 May 2016</span>
										
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/latest-post/3.png" alt="" />
										<p><a href="#">Headset No Longer Wire For Sound</a></p>
										<span>12 May 2016</span>
										
									</li>
									
								</ul>
							</div>
						</div><!-- end single footer widget -->
						
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-3">
							<div class="footer-widget news-letter">
								<h3>NewsLetter Subscription</h3>
								<p>Subscribe to get the latest news, update and offer information. Don't worry, we won't send spam!</p>

								<form class="subscribe-form mailchimp" method="post">
                                    <div class="clearfix">
                                        <div class="input-wrapper">
                                          <label class="sr-only" for="email">Email</label>
                                          <input id="subscribeEmail" type="email" name="subscribeEmail" class="validate form-control" placeholder="Your Email Please!">
                                          <button type="submit"><i class="fa fa-arrow-circle-right"></i></button>
                                        </div>
                                    </div>
                                    <!-- to showing success messages -->
                                    <p class="subscription-success"></p>
								</form>
							</div><!-- /.news-letter -->
						</div><!-- end single footer widget -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.primary-footer -->

			<!-- footer copyright area -->
			<div class="copyright-wrapper text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p>Copyright@2017 Neuron Finance Inc. All Rights Reserved. Beautiful WordPress Theme By <a href="#">TrendyTheme</a></p>
						</div>
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- ./end copyright-wrapper -->
		</footer>

		<!-- preloader -->
		<div id="loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object" id="object_four"></div>
					<div class="object" id="object_three"></div>
					<div class="object" id="object_two"></div>
					<div class="object" id="object_one"></div>
				</div>
			</div>
		</div>

		<?php wp_footer(); ?>
	</body>
</html>