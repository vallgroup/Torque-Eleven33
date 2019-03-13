<?php

require_once( get_stylesheet_directory() . '/includes/torque-eleven33-nav-menus-class.php');
require_once( get_stylesheet_directory() . '/includes/widgets/torque-eleven33-widgets-class.php');
require_once( get_stylesheet_directory() . '/includes/customizer/torque-eleven33-customizer-class.php');
require_once( get_stylesheet_directory() . '/includes/acf/torque-eleven33-acf-class.php');
require_once( get_stylesheet_directory() . '/includes/torque-deals-cpt-class.php');

/**
 * Child Theme Nav Menus
 */

 if ( class_exists( 'E33_Nav_Menus' ) ) {
   new E33_Nav_Menus();
 }

/**
 * Child Theme Widgets
 */

if ( class_exists( 'E33_Widgets' ) ) {
  new E33_Widgets();
}

/**
 * Child Theme Customizer
 */

if ( class_exists( 'E33_Customizer' ) ) {
  new E33_Customizer();
}

/**
 * Child Theme ACF
 */

 if ( class_exists( 'E33_ACF' ) ) {
   new E33_ACF();
 }


 /**
  * Deals CPT
  */

  if ( class_exists( 'Torque_Deals_CPT' ) ) {
    new Torque_Deals_CPT();
  }


/**
* Floor Plan Plugin Settings
*/

if ( class_exists( 'Torque_Floor_Plans_Data_Source' ) ) {
  add_filter(Torque_Floor_Plans_Data_Source::$DATA_SOURCE_FILTER_SLUG, function() { return 'entrata'; });

  if ( class_exists( 'Torque_Floor_Plans_Entrata' ) ) {
    add_filter(Torque_Floor_Plans_Entrata::$PROPERTY_ID_FILTER_SLUG, function() { return 673841; });
  }

  if ( class_exists( 'Entrata_API') ) {
    add_filter( Entrata_API::$UNIT_TYPE_NAME_FILTER_HANDLE, function($unit_type_name) {
      $name_mappings = get_field('unit_type_name_mappings', 'option');
      if (!$name_mappings) { return $unit_type_name; }

      foreach ($name_mappings as $mapping) {
        if ($mapping['from'] === $unit_type_name) {
          return $mapping['to'];
        }
      }

      return $unit_type_name;
    });
  }
}

/**
 * Map Settings
 */
if ( class_exists( 'Torque_Map_CPT' ) ) {
  add_filter( Torque_Map_CPT::$POIS_ALLOWED_FILTER , function() { return 4; });
}
if ( class_exists( 'Torque_Map_Controller' ) ) {
  add_filter( Torque_Map_Controller::$DISPLAY_POIS_FILTER , function() { return true; });
  add_filter( Torque_Map_Controller::$POIS_LOCATION , function() { return 'top'; });
  add_filter( Torque_Map_Controller::$API_KEY_FILTER , function() { return get_field( 'google_maps', 'option' ); });
}

/**
 * Filtered Loop Settings
 */

 if ( class_exists( 'Torque_Filtered_Loop_Shortcode' ) ) {
   add_filter( Torque_Filtered_Loop_Shortcode::$LOOP_TEMPLATE_FILTER_HANDLE , function() { return 1; });
 }

/**
 * Admin settings
 */

 // remove menu items
 function torque_remove_menus(){

   //remove_menu_page( 'index.php' );                  //Dashboard
   remove_menu_page( 'edit.php' );                   //Posts
   //remove_menu_page( 'upload.php' );                 //Media
   //remove_menu_page( 'edit.php?post_type=page' );    //Pages
   remove_menu_page( 'edit-comments.php' );          //Comments
   //remove_menu_page( 'themes.php' );                 //Appearance
   //remove_menu_page( 'plugins.php' );                //Plugins
   //remove_menu_page( 'users.php' );                  //Users
   //remove_menu_page( 'tools.php' );                  //Tools
   //remove_menu_page( 'options-general.php' );        //Settings

 }
 add_action( 'admin_menu', 'torque_remove_menus' );




/**
 * Enqueues
 */

// enqueue child styles after parent styles, both style.css and main.css
// so child styles always get priority
add_action( 'wp_enqueue_scripts', 'torque_enqueue_child_styles' );
function torque_enqueue_child_styles() {

    $parent_style = 'parent-styles';
    $parent_main_style = 'torque-theme-styles';

    // make sure parent styles enqueued first
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( $parent_main_style, get_template_directory_uri() . '/bundles/main.css' );

    // enqueue child style
    wp_enqueue_style( 'torque-eleven33-styles',
        get_stylesheet_directory_uri() . '/bundles/main.css',
        array( $parent_style, $parent_main_style ),
        wp_get_theme()->get('Version')
    );
}

// enqueue child scripts after parent script
add_action( 'wp_enqueue_scripts', 'torque_enqueue_child_scripts');
function torque_enqueue_child_scripts() {

    wp_enqueue_script( 'torque-eleven33-script',
        get_stylesheet_directory_uri() . '/bundles/bundle.js',
        array( 'torque-theme-scripts' ), // depends on parent script
        wp_get_theme()->get('Version'),
        true       // put it in the footer
    );
}

?>
