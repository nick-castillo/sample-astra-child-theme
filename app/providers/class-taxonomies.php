<?php
/**
 * Class-posttypes file.
 *
 * @package astra-child
 */

namespace AstraChild\Providers;

/**
 * PostTypes class.
 *
 * For registering custom post types.
 */
class Taxonomies {
	/**
	 * Class construct.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_taxonomies' ) );
	}

	/**
	 * Register custom taxonomies.
	 *
	 * @return void
	 */
	public function register_taxonomies() {
		$this->register_food_and_drink_catergory();
	}

	/**
	 * Register the food and drink category taxonomy.
	 *
	 * @return void
	 */
	public function register_food_and_drink_catergory() {
		register_taxonomy(
			'astc_food_and_drink_catergory',
			array( 'astc_food_and_drinks' ),
			array(
				'labels'            => array(
					'name'              => __( 'Food and drink categories', 'evt' ),
					'singular_name'     => __( 'Food and drink category', 'evt' ),
					'search_items'      => __( 'Search Food and drink categories', 'evt' ),
					'all_items'         => __( 'All Food and drink categories', 'evt' ),
					'parent_item'       => __( 'Parent Food and drink category', 'evt' ),
					'parent_item_colon' => __( 'Parent Food and drink category:', 'evt' ),
					'view_item'         => __( 'View Food and drink category', 'evt' ),
					'edit_item'         => __( 'Edit Food and drink category', 'evt' ),
					'update_item'       => __( 'Update Food and drink category', 'evt' ),
					'add_new_item'      => __( 'Add New Food and drink category', 'evt' ),
					'new_item_name'     => __( 'New Food and drink category Name', 'evt' ),
					'menu_name'         => __( 'Food and drink categories', 'evt' ),
				),
				'hierarchical'      => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'public'            => false,
				'show_in_rest'      => true,
			)
		);
	}
}
