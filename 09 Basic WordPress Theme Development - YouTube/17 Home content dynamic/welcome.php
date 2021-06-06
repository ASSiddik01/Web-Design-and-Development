<?php 
/********************************************************
Template Name: Home
*********************************************************/
	$home_content_title = cs_get_option('home_content_title');
	$home_content_text = cs_get_option('home_content_text');
	$home_content_img = cs_get_option('home_content_img');
	$home_content_img_array = wp_get_attachment_image_src( cs_get_option('home_content_img'), 'large' );

	if (!empty($home_content_img)) {
		$home_content_img = $home_content_img_array[0];
	} else {
		$home_content_img = ''.get_template_directory_uri().'/assets/img/homepageblock.jpg';
	}



get_header(); ?>

		<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
		<section class="slider-area">

			<?php 
				global $post;
				$args = array( 'posts_per_page' => 5, 'post_type' => 'slide', 'orderby' => 'menu_order', 'order' => 'ASC');
				$mypost = get_posts ($args);
				foreach ( $mypost as $post ) : setup_postdata( $post ); ?>

				<?php 
					$btn_text = get_post_meta( $post -> ID, 'btn_text', true  );
					$btn_link = get_post_meta( $post -> ID, 'btn_link', true  );
				?>

					<div style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)"  class="homepage-slider">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container">
									<div class="row">
										<div class="col-sm-7">
											<div class="slider-content">
												<h1><?php the_title(); ?></h1>
												<?php the_content(); ?>
												<a href="<?php echo $btn_link; ?>"> <?php echo $btn_text; ?><i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; wp_reset_query(); ?>
			
		</section><!-- slider area end -->
	
	
		<?php get_template_part( 'content/promo' ); ?>
	
	
		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2><?php echo $home_content_title; ?></h2>
							<?php echo wpautop($home_content_text); ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">
							<img src="<?php echo $home_content_img; ?>" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->

		<?php get_template_part( 'content/services' ); ?>
	
	

	
<?php get_footer(); ?>