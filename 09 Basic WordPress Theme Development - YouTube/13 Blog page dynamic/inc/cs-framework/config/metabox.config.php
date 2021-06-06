<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'neuron_work_meta',
  'title'     => 'Work Options',
  'post_type' => 'work',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'work_meta_section_1',
      'fields' => array(

        array(
          'id'    => 'sub_title',
          'type'  => 'text',
          'title' => 'Sub Title',
          'desc' => 'Type work sub title',
        ),
        array(
          'id'    => 'big_preview',
          'type'  => 'image',
          'title' => 'Big Previes Image',
          'desc' => 'Upload big preview image',
        ),
        array(
          'id'    => 'link_text',
          'type'  => 'text',
          'title' => 'Link Text',
          'default' => 'Visit Website',
          'desc' => 'Type work link text',
        ),
        array(
          'id'    => 'link',
          'type'  => 'text',
          'title' => 'Link',
          'desc' => 'Type work link',
        ),
        array(
          'id'              => 'informations',
          'type'            => 'group',
          'title'           => 'Work Informations',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Information',
          'fields'          => array(
            array(
              'id'    => 'title',
              'type'  => 'text',
              'title' => 'Information Title',
            ),
            array(
              'id'    => 'value',
              'type'  => 'text',
              'title' => 'Information Value',
            ),
          ),
        ),


      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
