<?php 

	function neuron_finance_theme_files() {
		wp_enqueue_style( 'animate', get_template_directory_uri(). '/assets/css/animate.min.css' , array(), '1.0', 'all' );
		wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/assets/fonts/font-awesome/css/font-awesome.min.css' , array(), '1.0', 'all' );
		wp_enqueue_style( 'owl-carousel', get_template_directory_uri(). '/assets/css/owl.carousel.min.css' , array(), '1.0', 'all' );
		wp_enqueue_style( 'bootsnav', get_template_directory_uri(). '/assets/css/bootsnav.css' , array(), '1.0', 'all' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/bootstrap/css/bootstrap.min.css' , array(), '1.0', 'all' );
		wp_enqueue_style( 'neuron-style', get_stylesheet_uri());


		wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/assets/bootstrap/js/bootstrap.min.js' , array('jquery'), '1.0', true );
		wp_enqueue_script( 'bootsnav', get_template_directory_uri(). '/assets/js/bootsnav.js' , array('jquery'), '1.0', true );
		wp_enqueue_script( 'owl-carousel', get_template_directory_uri(). '/assets/js/owl.carousel.min.js' , array('jquery'), '1.0', true );
		wp_enqueue_script( 'wow', get_template_directory_uri(). '/assets/js/wow.min.js' , array('jquery'), '1.0', true );
		wp_enqueue_script( 'ajaxchimp', get_template_directory_uri(). '/assets/js/ajaxchimp.js' , array('jquery'), '1.0', true );
		wp_enqueue_script( 'ajaxchimp-config', get_template_directory_uri(). '/assets/js/ajaxchimp-config.js' , array('jquery'), '1.0', true );
		wp_enqueue_script( 'neuron-script', get_template_directory_uri(). '/assets/js/script.js' , array('jquery'), '1.0', true );

	}

	add_action('wp_enqueue_scripts', 'neuron_finance_theme_files');




 ?>