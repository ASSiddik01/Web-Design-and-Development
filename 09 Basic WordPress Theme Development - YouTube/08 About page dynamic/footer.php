
		<!-- :::::::::::::::::::::  Client Section:::::::::::::::::::::::::: -->
		<section class="client-logo darker-bg">
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
								<?php dynamic_sidebar( 'footer-1' ) ?>
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
								<?php dynamic_sidebar( 'footer-2' ) ?>
							</div>
						</div><!-- end single footer widget -->
						
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-3">
							<div class="footer-widget latest-post">
								<?php dynamic_sidebar( 'footer-3' ) ?>
							</div>
						</div><!-- end single footer widget -->
						
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-3">
							<div class="footer-widget news-letter">
								<?php dynamic_sidebar( 'footer-4' ) ?>
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