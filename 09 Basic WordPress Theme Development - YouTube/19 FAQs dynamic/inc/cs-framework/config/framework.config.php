<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'neuron-theme-options',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Neuron Theme <small>by ADIT</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'homepage',
  'title'       => 'Homepage',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'enable_promo',
      'type'    => 'switcher',
      'title'   => 'Enable Promo Title',
      'default'   => true,
      'desc'   => 'If you enable promo area,select yes',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'promo_title',
      'type'    => 'text',
      'title'   => 'Promo Title',
      'default'   => 'Welcome to the Neuron Finance',
      'desc'   => 'Type your promo title',
      'dependency'   => array( 'enable_promo', '==', 'true' ),
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'promo_content',
      'type'    => 'textarea',
      'title'   => 'Promo Content',
      'default'   => 'Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.',
      'desc'   => 'Type your promo content',
      'dependency'   => array( 'enable_promo', '==', 'true' ),
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'enable_home_content',
      'type'    => 'switcher',
      'title'   => 'Enable Home Content ',
      'default'   => true,
      'desc'   => 'If you enable home content,select yes',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'home_content_title',
      'type'    => 'text',
      'title'   => 'Home Content Title',
      'default'   => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
      'desc'   => 'Type your home content title',
      'dependency'   => array( 'enable_home_content', '==', 'true' ),
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'home_content_text',
      'type'    => 'textarea',
      'title'   => 'Home Content Text',
      'desc'   => 'Type your home content text',
      'dependency'   => array( 'enable_home_content', '==', 'true' ),
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'home_content_img',
      'type'    => 'image',
      'title'   => 'Home Content Image',
      'desc'   => 'Upload your home content image',
      'dependency'   => array( 'enable_home_content', '==', 'true' ),
    ),
    // end: a field

  ), // end: fields
);

$options[]      = array(
  'name'        => 'about',
  'title'       => 'About',
  'icon'        => 'fa fa-info',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'enable_about_content',
      'type'    => 'switcher',
      'title'   => 'Enable About Content ',
      'default'   => true,
      'desc'   => 'If you enable about content,select yes',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'about_content_title',
      'type'    => 'text',
      'title'   => 'About Content Title',
      'default'   => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
      'desc'   => 'Type your about content title',
      'dependency'   => array( 'enable_about_content', '==', 'true' ),
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'about_content_text',
      'type'    => 'textarea',
      'title'   => 'About Content Text',
      'desc'   => 'Type your about content text',
      'dependency'   => array( 'enable_about_content', '==', 'true' ),
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'about_content_img',
      'type'    => 'image',
      'title'   => 'About Content Image',
      'desc'   => 'Type your about content image',
      'dependency'   => array( 'enable_about_content', '==', 'true' ),
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'faqs',
      'type'    => 'group',
      'title'   => 'FAQs',
      'button_title'   => 'Add New',
      'accordion_title' => 'Add New FAQ',
      'fields'          => array(
        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'FAQ Title',
          'desc' => 'Type FAQ title',
        ),
        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'FAQ Content',
          'desc' => 'Type FAQ content',
        ),
      ), 
    ),
    // end: a field

  ), // end: fields
);

$options[]      = array(
  'name'        => 'service',
  'title'       => 'Services',
  'icon'        => 'fa fa-medkit',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'service_title',
      'type'    => 'text',
      'title'   => 'Service Title',
      'desc'   => 'Type your service title',
    ),
    // end: a field

  ), // end: fields
);

CSFramework::instance( $settings, $options );
