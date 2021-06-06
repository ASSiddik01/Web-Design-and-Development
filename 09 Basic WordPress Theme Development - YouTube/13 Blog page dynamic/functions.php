<?php 

	function nf_theme_files() {
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
		wp_enqueue_script( 'neuron-script', get_template_directory_uri(). '/assets/js/script.js' , array('jquery'), '1.0', true );

	}
	add_action('wp_enqueue_scripts', 'nf_theme_files');

	function nf_theme_supports() {

		// Load textdomain or translate language
		load_theme_textdomain( 'neuron_finance', get_template_directory() . '/languages' );
		
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Title Tag
		add_theme_support( 'title-tag' );

		// Enable post thumbnail
		add_theme_support( 'post-thumbnails' );

		// Enable custom image size
		add_image_size( 'nf-blog-image', 740, 520, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'neuron_finance' ),
			)
		);

		// Html5 support
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Enable custom logo
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}

	add_action('after_setup_theme', 'nf_theme_supports');


	//Regestering Custom  Post Item
	add_action( 'init', 'neuron_theme_custom_post' );
	function neuron_theme_custom_post() {
		register_post_type( 'slide',  
			array(
				'labels' => array(
					'name' => __( 'Slides'),
					'singular_name' => __( 'Slide'),
				),
				'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
				'public' => false,
				'show_ui' => true
			)
		);
		register_post_type( 'feature',  
			array(
				'labels' => array(
					'name' => __( 'Features'),
					'singular_name' => __( 'Feature'),
				),
				'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
				'public' => false,
				'show_ui' => true
			)
		);
		register_post_type( 'service',  
			array(
				'labels' => array(
					'name' => __( 'Services'),
					'singular_name' => __( 'Service'),
				),
				'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
				'public' => false,
				'show_ui' => true
			)
		);
		register_post_type( 'work',  
			array(
				'labels' => array(
					'name' => __( 'Works'),
					'singular_name' => __( 'Work'),
				),
				'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
				'public' => true,
			)
		);

	}


	//Registering Widget
	function nf_widgets_init() {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer one', 'neuron_finance' ),
				'id'            => 'footer-1',
				'description'   => esc_html__( 'Add footer one widgets here.', 'neuron_finance' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s ">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer two', 'neuron_finance' ),
				'id'            => 'footer-2',
				'description'   => esc_html__( 'Add footer two widgets here.', 'neuron_finance' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s ">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer three', 'neuron_finance' ),
				'id'            => 'footer-3',
				'description'   => esc_html__( 'Add footer three widgets here.', 'neuron_finance' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s ">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer four', 'neuron_finance' ),
				'id'            => 'footer-4',
				'description'   => esc_html__( 'Add footer four widgets here.', 'neuron_finance' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s ">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

	}
	add_action( 'widgets_init', 'nf_widgets_init' );

	//Registering Shortcode
	function thumbpost_list_shortcode($atts){
	    extract( shortcode_atts( array(
	        'count' => 3,
	    ), $atts) );
	     
	    $q = new WP_Query(
	        array('posts_per_page' => $count, 'post_type' => 'post')
	        );      
	         
	    $list = '<ul class="custom_post_list">';
	    while($q->have_posts()) : $q->the_post();
	        $idd = get_the_ID();
	        $list .= '
	        <li>
				'.get_the_post_thumbnail($idd, 'thumbnail').'
				<p><a href="'.get_permalink().'">'.get_the_title().'</a></p>
				<span>'.get_the_date('d F Y', $idd).'</span>
			</li>
	        ';        
	    endwhile;
	    $list.= '</ul>';
	    wp_reset_query();
	    return $list;
	}
	add_shortcode('thumb_post', 'thumbpost_list_shortcode');  
	add_filter('widget_text', 'do_shortcode');

	//Include CS-framework
	require get_template_directory() . '/inc/cs-framework/cs-framework.php';

	//Custom Catagory
	if ( ! function_exists( 'nf_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function nf_entry_footer() {

		/* translators: used between list items, there is a space after the comma */
		$separate_meta = __( ', ', 'nf' );

		// Get Categories for posts.
		$categories_list = get_the_category_list( $separate_meta );

		// We don't want to output .entry-footer if it will be empty, so make sure its not.
		if ( ( nf_categorized_blog() && $categories_list ) || get_edit_post_link() ) {

			echo '<footer class="entry-footer">';

				if ( 'post' === get_post_type() ) {
					if ( ( $categories_list && nf_categorized_blog() ) ) {
						echo '<span class="cat-tags-links">';

							// Make sure there's more than one category before displaying.
							if ( $categories_list && nf_categorized_blog() ) {
								echo '<span class="cat-links">' . $categories_list . '</span>';
							}

						echo '</span>';
					}
				}

			echo '</footer> <!-- .entry-footer -->';
		}
	}
	endif;
	/**
	 * Returns true if a blog has more than 1 category.
	 *
	 * @return bool
	 */
	function nf_categorized_blog() {
		$category_count = get_transient( 'nf_categories' );

		if ( false === $category_count ) {
			// Create an array of all the categories that are attached to posts.
			$categories = get_categories( array(
				'fields'     => 'ids',
				'hide_empty' => 1,
				// We only need to know if there is more than one category.
				'number'     => 2,
			) );

			// Count the number of categories that are attached to the posts.
			$category_count = count( $categories );

			set_transient( 'nf_categories', $category_count );
		}

		// Allow viewing case of 0 or 1 categories in post preview.
		if ( is_preview() ) {
			return true;
		}

		return $category_count > 1;
	}


 ?>