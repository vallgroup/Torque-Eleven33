<?php
/**
 * Register the torque cpt and it's meta boxes
 */
class Torque_Deals_CPT {

	/**
	 * Holds the deals cpt object
	 *
	 * @var Object
	 */
	protected $deals = null;

	/**
	 * Holds the labels needed to build the deals custom post type.
	 *
	 * @var array
	 */
	public static $deals_labels = array(
			'singular'       => 'Deal',
			'plural'         => 'Deals',
			'slug'           => 'torque-deal',
			'post_type_name' => 'torque_deal',
	);

	/**
	 * Holds options for the deals custom post type
	 *
	 * @var array
	 */
	protected $deals_options = array(
		'supports' => array(
			'title',
      'editor',
      'thumbnail'
		),
		'menu_icon'           => 'dashicons-tag',
    'show_in_rest'        => true
	);

	/**
	 * register our post type and meta boxes
	 */
	function __construct() {
		if ( class_exists( 'PremiseCPT' ) ) {
			new PremiseCPT( self::$deals_labels, $this->deals_options );

      register_taxonomy(
        'category_deal',
        self::$deals_labels['post_type_name'],
        array(
          'label'        => 'Deal Category',
          'hierarchical' => true,
          'show_in_rest' => true
        )
      );
		}
	}
}

?>
