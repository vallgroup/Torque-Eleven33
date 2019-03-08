<?php

require_once( get_template_directory() . '/includes/acf/torque-acf-search-class.php' );

class E33_ACF {

  public function __construct() {
    add_action('admin_init', array( $this, 'acf_admin_init'), 99);
    add_action('acf/init', array( $this, 'acf_init' ) );

    // hide acf in admin - client doesnt need to see this
    // add_filter('acf/settings/show_admin', '__return_false');

    // add acf fields to wp search
    if ( class_exists( 'Torque_ACF_Search' ) ) {
      add_filter( Torque_ACF_Search::$ACF_SEARCHABLE_FIELDS_FILTER_HANDLE, array( $this, 'add_fields_to_search' ) );
    }
  }

  public function acf_admin_init() {
    // hide options page
    // remove_menu_page('acf-options');
  }

  public function add_fields_to_search( $fields ) {
    // $fields[] = 'custom_field_name';
    return $fields;
  }

  public function acf_init() {
    if( function_exists('acf_add_local_field_group') ):

      acf_add_local_field_group(array(
      	'key' => 'group_5c81b2b34314e',
      	'title' => 'Company Details',
      	'fields' => array(
      		array(
      			'key' => 'field_5c81b2e97ac12',
      			'label' => 'Leasing Office Hours',
      			'name' => 'leasing_office_hours',
      			'type' => 'textarea',
      			'instructions' => '',
      			'required' => 0,
      			'conditional_logic' => 0,
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'default_value' => '',
      			'placeholder' => '',
      			'maxlength' => '',
      			'rows' => 3,
      			'new_lines' => 'wpautop',
      		),
      		array(
      			'key' => 'field_5c81b31f7ac14',
      			'label' => 'Management Office Hours',
      			'name' => 'management_office_hours',
      			'type' => 'textarea',
      			'instructions' => '',
      			'required' => 0,
      			'conditional_logic' => 0,
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'default_value' => '',
      			'placeholder' => '',
      			'maxlength' => '',
      			'rows' => 3,
      			'new_lines' => 'wpautop',
      		),
      		array(
      			'key' => 'field_5c81b3387ac15',
      			'label' => 'Address',
      			'name' => 'address',
      			'type' => 'textarea',
      			'instructions' => '',
      			'required' => 0,
      			'conditional_logic' => 0,
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'default_value' => '',
      			'placeholder' => '',
      			'maxlength' => '',
      			'rows' => 4,
      			'new_lines' => 'wpautop',
      		),
      		array(
      			'key' => 'field_5c81b34e7ac16',
      			'label' => 'Phone',
      			'name' => 'phone',
      			'type' => 'text',
      			'instructions' => '',
      			'required' => 0,
      			'conditional_logic' => 0,
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'default_value' => '',
      			'placeholder' => '',
      			'prepend' => '',
      			'append' => '',
      			'maxlength' => '',
      		),
      		array(
      			'key' => 'field_5c81b3787ac17',
      			'label' => 'Leasing Phone Number',
      			'name' => 'leasing_phone_number',
      			'type' => 'text',
      			'instructions' => '',
      			'required' => 0,
      			'conditional_logic' => 0,
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'default_value' => '',
      			'placeholder' => '',
      			'prepend' => '',
      			'append' => '',
      			'maxlength' => '',
      		),
      		array(
      			'key' => 'field_5c81b38f7ac18',
      			'label' => 'Website',
      			'name' => 'website',
      			'type' => 'text',
      			'instructions' => '',
      			'required' => 0,
      			'conditional_logic' => 0,
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'default_value' => '',
      			'placeholder' => '',
      			'prepend' => '',
      			'append' => '',
      			'maxlength' => '',
      		),
      		array(
      			'key' => 'field_5c829a53debdb',
      			'label' => 'Management Logo',
      			'name' => 'management_logo',
      			'type' => 'image',
      			'instructions' => '',
      			'required' => 0,
      			'conditional_logic' => 0,
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'return_format' => 'url',
      			'preview_size' => 'thumbnail',
      			'library' => 'all',
      			'min_width' => '',
      			'min_height' => '',
      			'min_size' => '',
      			'max_width' => '',
      			'max_height' => '',
      			'max_size' => '',
      			'mime_types' => '',
      		),
      		array(
      			'key' => 'field_5c829aafdebdc',
      			'label' => 'Social',
      			'name' => 'social',
      			'type' => 'repeater',
      			'instructions' => '',
      			'required' => 0,
      			'conditional_logic' => 0,
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'collapsed' => 'field_5c829abbdebdd',
      			'min' => 0,
      			'max' => 0,
      			'layout' => 'row',
      			'button_label' => '',
      			'sub_fields' => array(
      				array(
      					'key' => 'field_5c829abbdebdd',
      					'label' => 'Icon Slug',
      					'name' => 'icon',
      					'type' => 'text',
      					'instructions' => 'Lowercase name of the social media platform, or more generally, of the icon to display.

      Check possible icons here. https://fontawesome.bootstrapcheatsheets.com/

      Note: If using a custom icon, emit the \'fa-\' at the start

      eg \'facebook\' or \'facebook-official\' are both valid but not \'fa-facebook\'',
      					'required' => 1,
      					'conditional_logic' => 0,
      					'wrapper' => array(
      						'width' => '',
      						'class' => '',
      						'id' => '',
      					),
      					'default_value' => '',
      					'placeholder' => 'facebook',
      					'prepend' => '',
      					'append' => '',
      					'maxlength' => '',
      				),
      				array(
      					'key' => 'field_5c829b29debde',
      					'label' => 'Link',
      					'name' => 'link',
      					'type' => 'url',
      					'instructions' => 'Link to your respective social media page',
      					'required' => 1,
      					'conditional_logic' => 0,
      					'wrapper' => array(
      						'width' => '',
      						'class' => '',
      						'id' => '',
      					),
      					'default_value' => '',
      					'placeholder' => '',
      				),
      			),
      		),
      		array(
      			'key' => 'field_5c82ad82c530b',
      			'label' => 'Copyright Text',
      			'name' => 'copyright_text',
      			'type' => 'text',
      			'instructions' => '',
      			'required' => 0,
      			'conditional_logic' => 0,
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'default_value' => '',
      			'placeholder' => '',
      			'prepend' => '',
      			'append' => '',
      			'maxlength' => '',
      		),
      	),
      	'location' => array(
      		array(
      			array(
      				'param' => 'options_page',
      				'operator' => '==',
      				'value' => 'acf-options',
      			),
      		),
      	),
      	'menu_order' => 0,
      	'position' => 'normal',
      	'style' => 'default',
      	'label_placement' => 'top',
      	'instruction_placement' => 'label',
      	'hide_on_screen' => '',
      	'active' => 1,
      	'description' => '',
      ));

      acf_add_local_field_group(array(
      	'key' => 'group_5c82b305f208d',
      	'title' => 'Page Hero',
      	'fields' => array(
      		array(
      			'key' => 'field_5c82b318cae8c',
      			'label' => 'Type',
      			'name' => 'hero_type',
      			'type' => 'radio',
      			'instructions' => '',
      			'required' => 0,
      			'conditional_logic' => 0,
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'choices' => array(
              'none' => 'None',
      				'image' => 'Image',
      				'slideshow' => 'Slideshow',
      			),
      			'allow_null' => 0,
      			'other_choice' => 0,
      			'default_value' => 'image',
      			'layout' => 'horizontal',
      			'return_format' => 'value',
      			'save_other_choice' => 0,
      		),
      		array(
      			'key' => 'field_5c82b36acae8d',
      			'label' => 'Image',
      			'name' => 'hero_image',
      			'type' => 'image',
      			'instructions' => '',
      			'required' => 1,
      			'conditional_logic' => array(
      				array(
      					array(
      						'field' => 'field_5c82b318cae8c',
      						'operator' => '==',
      						'value' => 'image',
      					),
      				),
      			),
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'return_format' => 'url',
      			'preview_size' => 'medium',
      			'library' => 'all',
      			'min_width' => '',
      			'min_height' => '',
      			'min_size' => '',
      			'max_width' => '',
      			'max_height' => '',
      			'max_size' => '',
      			'mime_types' => '',
      		),
      		array(
      			'key' => 'field_5c82b384cae8e',
      			'label' => 'Slideshow',
      			'name' => 'hero_slideshow',
      			'type' => 'text',
      			'instructions' => 'Create a slideshow, then copy the \'shortcode\' into this field',
      			'required' => 1,
      			'conditional_logic' => array(
      				array(
      					array(
      						'field' => 'field_5c82b318cae8c',
      						'operator' => '==',
      						'value' => 'slideshow',
      					),
      				),
      			),
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'default_value' => '',
      			'placeholder' => '',
      			'prepend' => '',
      			'append' => '',
      			'maxlength' => '',
      		),
      		array(
      			'key' => 'field_5c82b745cae8f',
      			'label' => 'Overlay Type',
      			'name' => 'hero_overlay_type',
      			'type' => 'radio',
      			'instructions' => '',
      			'required' => 0,
            'conditional_logic' => array(
      				array(
      					array(
      						'field' => 'field_5c82b318cae8c',
      						'operator' => '!=',
      						'value' => 'none',
      					),
      				),
      			),
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'choices' => array(
      				'none' => 'None',
      				'text' => 'Text',
      				'default' => 'Default',
      			),
      			'allow_null' => 0,
      			'other_choice' => 0,
      			'default_value' => 'default',
      			'layout' => 'horizontal',
      			'return_format' => 'value',
      			'save_other_choice' => 0,
      		),
      		array(
      			'key' => 'field_5c82b79acae91',
      			'label' => 'Text Overlay',
      			'name' => 'hero_text_overlay',
      			'type' => 'text',
      			'instructions' => 'use \'em\' tags to add use cursive font',
      			'required' => 0,
      			'conditional_logic' => array(
      				array(
      					array(
      						'field' => 'field_5c82b745cae8f',
      						'operator' => '==',
      						'value' => 'text',
      					),
      				),
      			),
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'default_value' => '',
      			'placeholder' => 'eg <em>Floor</em> Plans',
      			'prepend' => '',
      			'append' => '',
      			'maxlength' => '',
      		),
      	),
      	'location' => array(
      		array(
      			array(
      				'param' => 'post_type',
      				'operator' => '==',
      				'value' => 'page',
      			),
      		),
      	),
      	'menu_order' => 0,
      	'position' => 'normal',
      	'style' => 'default',
      	'label_placement' => 'top',
      	'instruction_placement' => 'label',
      	'hide_on_screen' => '',
      	'active' => 1,
      	'description' => '',
      ));

      endif;
  }
}

?>
