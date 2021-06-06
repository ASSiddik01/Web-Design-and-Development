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
      'id'      => 'promo_title',
      'type'    => 'text',
      'title'   => 'Promo Title',
      'default'   => 'Welcome to the Neuron Finance',
      'desc'   => 'Type your promo title',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'promo_content',
      'type'    => 'textarea',
      'title'   => 'Promo Content',
      'default'   => 'Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.',
      'desc'   => 'Type your promo content',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'home_content_title',
      'type'    => 'text',
      'title'   => 'Home Content Title',
      'default'   => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
      'desc'   => 'Type your home content title',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'home_content_text',
      'type'    => 'textarea',
      'title'   => 'Home Content Text',
      'desc'   => 'Type your home content text',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'home_content_img',
      'type'    => 'image',
      'title'   => 'Home Content Image',
      'desc'   => 'Upload your home content image',
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
