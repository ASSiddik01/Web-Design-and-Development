<?php 
/*
Template Name: Contact
*/
get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
		<section <?php if(has_post_thumbnail()) : ?> style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)"<?php endif; ?> class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- breadcrumb content -->
						<div class="page-breadcrumbd">
							<h2> <?php the_title(); ?> </h2>
							<p><a href=" <?php echo site_url(); ?> ">Home</a> / <?php the_title(); ?></p>
						</div><!-- end breadcrumb content -->
					</div>
				</div>
			</div>
		</section><!-- end breadcrumb -->
	
		<!-- ::::::::::::::::::::: Block Section:::::::::::::::::::::::::: -->
		<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
					<!-- contact title -->
					<div class="template-title text-center">
						<h2>Get In Touch With Us</h2>
						<p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
					</div>
				</div>
			</div>
		
			<div class="row">
				<div class="col-md-8">

					<form class="contact-form" id="contactForm" name="contact-form" action="sendemail.php" method="POST">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="sr-only" for="name">Name</label>
                    				<input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="sr-only" for="email">Email</label>
		                          	<input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="sr-only" for="subject">Subject</label>
                          	<input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject">
						</div>
						<div class="form-group">
							<label class="sr-only" for="message">Message</label>
	                        <textarea name="message" class="form-control" id="message" placeholder="Your Message"></textarea>
						</div>
						<div class="text-right">
							<button type="submit" name="submit" class="btn btn-primary input-btn"><span>Submit</span></button>
						</div>
					</form>
				</div>
				
				<div class="col-md-4">
					<!-- company address -->
					<div class="company-address">
						<ul>
							<li>
								<i class="fa fa-map-marker"></i>
								<p>305 Royal Track Suite 019. New York United States of America.</p>
								<span class="divider"></span>
								<p>Hoffman Parkway, P.O Box 154 Mountain View.  United States of America.</p>
								
							</li>
							<li>
								<i class="fa fa-phone"></i>
								<p>Fax: 545 751 385
								<br>Phone: 0123 456 789</p>
							</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a>info@trendytheme.com</a>
								<a>www.trendytheme.com</a>
							</li>
						</ul>
					</div><!-- ./end company address -->
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; ?>


<?php get_footer(); ?>