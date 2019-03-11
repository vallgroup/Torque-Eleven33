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

      /**
       * Page Hero
       */

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

      /**
       * Modules
       */

       acf_add_local_field_group(array(
       	'key' => 'group_5c82dae5a1e8a',
       	'title' => 'Modules',
       	'fields' => array(
       		array(
       			'key' => 'field_5c82daeb9e55f',
       			'label' => 'Modules',
       			'name' => 'modules',
       			'type' => 'flexible_content',
       			'instructions' => '',
       			'required' => 0,
       			'conditional_logic' => 0,
       			'wrapper' => array(
       				'width' => '',
       				'class' => '',
       				'id' => '',
       			),
       			'layouts' => array(
       				'5c82db52e74ba' => array(
       					'key' => '5c82db52e74ba',
       					'name' => 'content_section',
       					'label' => 'Content Section',
       					'display' => 'block',
       					'sub_fields' => array(
       						array(
       							'key' => 'field_5c82db9c9e560',
       							'label' => 'Align',
       							'name' => 'align',
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
       								'centre' => 'Centre',
       								'right' => 'Right',
       							),
       							'allow_null' => 0,
       							'other_choice' => 0,
       							'default_value' => 'centre',
       							'layout' => 'horizontal',
       							'return_format' => 'value',
       							'save_other_choice' => 0,
       						),
       						array(
       							'key' => 'field_5c82dbca9e561',
       							'label' => 'Title',
       							'name' => 'title',
       							'type' => 'text',
       							'instructions' => 'use \'em\' tags for cursive font',
       							'required' => 1,
       							'conditional_logic' => 0,
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
       						array(
       							'key' => 'field_5c82dbf79e562',
       							'label' => 'Body',
       							'name' => 'body',
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
       							'rows' => '',
       							'new_lines' => 'wpautop',
       						),
       						array(
       							'key' => 'field_5c82dc139e563',
       							'label' => 'CTA',
       							'name' => 'cta',
       							'type' => 'link',
       							'instructions' => '',
       							'required' => 0,
       							'conditional_logic' => 0,
       							'wrapper' => array(
       								'width' => '',
       								'class' => '',
       								'id' => '',
       							),
       							'return_format' => 'array',
       						),
       						array(
       							'key' => 'field_5c82dc319e564',
       							'label' => 'Background',
       							'name' => 'background',
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
       								'threes' => 'Threes',
       							),
       							'allow_null' => 0,
       							'other_choice' => 0,
       							'default_value' => 'none',
       							'layout' => 'horizontal',
       							'return_format' => 'value',
       							'save_other_choice' => 0,
       						),
       					),
       					'min' => '',
       					'max' => '',
       				),
       				'layout_5c82dc529e565' => array(
       					'key' => 'layout_5c82dc529e565',
       					'name' => 'floor_plans',
       					'label' => 'Floor Plans',
       					'display' => 'block',
       					'sub_fields' => array(
       					),
       					'min' => '',
       					'max' => '',
       				),
       				'layout_5c869eb43ec10' => array(
       					'key' => 'layout_5c869eb43ec10',
       					'name' => 'gallery_grid',
       					'label' => 'Gallery Grid',
       					'display' => 'block',
       					'sub_fields' => array(
       						array(
       							'key' => 'field_5c869ee83ec12',
       							'label' => 'Grid Rows',
       							'name' => 'grid_rows',
       							'type' => 'range',
       							'instructions' => '',
       							'required' => 0,
       							'conditional_logic' => 0,
       							'wrapper' => array(
       								'width' => '',
       								'class' => '',
       								'id' => '',
       							),
       							'default_value' => 1,
       							'min' => 1,
       							'max' => 2,
       							'step' => 1,
       							'prepend' => '',
       							'append' => '',
       						),
       						array(
       							'key' => 'field_5c869fef3ec13',
       							'label' => 'Images',
       							'name' => 'images',
       							'type' => 'repeater',
       							'instructions' => '',
       							'required' => 0,
       							'conditional_logic' => 0,
       							'wrapper' => array(
       								'width' => '',
       								'class' => '',
       								'id' => '',
       							),
       							'collapsed' => 'field_5c869ffc3ec14',
       							'min' => 0,
       							'max' => 0,
       							'layout' => 'table',
       							'button_label' => 'Add Image',
       							'sub_fields' => array(
       								array(
       									'key' => 'field_5c869ffc3ec14',
       									'label' => 'Image',
       									'name' => 'image',
       									'type' => 'image',
       									'instructions' => '',
       									'required' => 1,
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
       									'key' => 'field_5c86a00f3ec15',
       									'label' => 'Column Start',
       									'name' => 'column_start',
       									'type' => 'range',
       									'instructions' => '',
       									'required' => 1,
       									'conditional_logic' => 0,
       									'wrapper' => array(
       										'width' => '',
       										'class' => '',
       										'id' => '',
       									),
       									'default_value' => '',
       									'min' => 0,
       									'max' => 11,
       									'step' => 1,
       									'prepend' => '',
       									'append' => '',
       								),
       								array(
       									'key' => 'field_5c86a0573ec16',
       									'label' => 'Column End',
       									'name' => 'column_end',
       									'type' => 'range',
       									'instructions' => '',
       									'required' => 1,
       									'conditional_logic' => 0,
       									'wrapper' => array(
       										'width' => '',
       										'class' => '',
       										'id' => '',
       									),
       									'default_value' => '',
       									'min' => 1,
       									'max' => 12,
       									'step' => 1,
       									'prepend' => '',
       									'append' => '',
       								),
       								array(
       									'key' => 'field_5c86a0693ec17',
       									'label' => 'Row Start',
       									'name' => 'row_start',
       									'type' => 'range',
       									'instructions' => '',
       									'required' => 1,
       									'conditional_logic' => 0,
       									'wrapper' => array(
       										'width' => '',
       										'class' => '',
       										'id' => '',
       									),
       									'default_value' => '',
       									'min' => 0,
       									'max' => 1,
       									'step' => 1,
       									'prepend' => '',
       									'append' => '',
       								),
       								array(
       									'key' => 'field_5c86a07f3ec18',
       									'label' => 'Row End',
       									'name' => 'row_end',
       									'type' => 'range',
       									'instructions' => '',
       									'required' => 1,
       									'conditional_logic' => 0,
       									'wrapper' => array(
       										'width' => '',
       										'class' => '',
       										'id' => '',
       									),
       									'default_value' => '',
       									'min' => 1,
       									'max' => 2,
       									'step' => 1,
       									'prepend' => '',
       									'append' => '',
       								),
       							),
       						),
       					),
       					'min' => '',
       					'max' => '',
       				),
       			),
       			'button_label' => 'Add Module',
       			'min' => '',
       			'max' => '',
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
       	'menu_order' => 10,
       	'position' => 'normal',
       	'style' => 'default',
       	'label_placement' => 'top',
       	'instruction_placement' => 'label',
       	'hide_on_screen' => '',
       	'active' => 1,
       	'description' => '',
       ));

      /**
       * Specials bar
       */

      acf_add_local_field_group(array(
      	'key' => 'group_5c869666ede06',
      	'title' => 'Specials Bar',
      	'fields' => array(
      		array(
      			'key' => 'field_5c86966c885dd',
      			'label' => 'Text',
      			'name' => 'text_specials_bar',
      			'type' => 'text',
      			'instructions' => 'Leave blank to hide specials bar',
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

      /**
       * Company Details
       */

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
      	'menu_order' => 10,
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
