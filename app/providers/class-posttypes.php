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
class PostTypes {
	/**
	 * Class construct.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_cpts' ) );
	}

	/**
	 * Register custom post types.
	 *
	 * @return void
	 */
	public function register_cpts() {
		$this->register_food_and_drinks();

		$this->register_locations();

		$this->register_testimonials();

		$this->register_weekly_features();
	}

	/**
	 * Register the testimonials post type.
	 *
	 * @return void
	 */
	public function register_testimonials() {
		register_post_type(
			'astc_testimonials',
			array(
				'labels'              => array(
					'name'               => __( 'Testimonials', 'evt' ),
					'singular_name'      => __( 'Testimonial', 'evt' ),
					'add_new'            => __( 'Add New', 'evt' ),
					'add_new_item'       => __( 'Add new Testimonial', 'evt' ),
					'view_item'          => __( 'View Testimonial', 'evt' ),
					'edit_item'          => __( 'Edit Testimonial', 'evt' ),
					'new_item'           => __( 'New Testimonial', 'evt' ),
					'search_items'       => __( 'Search testimonials', 'evt' ),
					'not_found'          => __( 'No testimonials found', 'evt' ),
					'not_found_in_trash' => __( 'No testimonials found in trash', 'evt' ),
				),
				'public'              => false,
				'exclude_from_search' => true,
				'show_ui'             => true,
				'capability_type'     => 'post',
				'hierarchical'        => false,
				'query_var'           => true,
				'menu_icon'           => 'dashicons-testimonial',
				'supports'            => array( 'title', 'revisions' ),
				'has_archive'         => false,
			)
		);
	}

	/**
	 * Register the food and drinks post type.
	 *
	 * @return void
	 */
	public function register_food_and_drinks() {
		register_post_type(
			'astc_food_and_drinks',
			array(
				'labels'              => array(
					'name'               => __( 'Food and drinks', 'evt' ),
					'singular_name'      => __( 'Food and drink', 'evt' ),
					'add_new'            => __( 'Add New', 'evt' ),
					'add_new_item'       => __( 'Add new Food and drink', 'evt' ),
					'view_item'          => __( 'View Food and drink', 'evt' ),
					'edit_item'          => __( 'Edit Food and drink', 'evt' ),
					'new_item'           => __( 'New Food and drink', 'evt' ),
					'search_items'       => __( 'Search Food and drinks', 'evt' ),
					'not_found'          => __( 'No Food and drinks found', 'evt' ),
					'not_found_in_trash' => __( 'No Food and drinks found in trash', 'evt' ),
				),
				'public'              => true,
				'exclude_from_search' => true,
				'show_ui'             => true,
				'capability_type'     => 'post',
				'hierarchical'        => false,
				'query_var'           => true,
				'menu_icon'           => 'dashicons-list-view',
				'supports'            => array( 'title', 'revisions', 'excerpt', 'thumbnail' ),
				'has_archive'         => false,
				'rewrite'             => array(
					'slug'       => 'food-drink',
					'with_front' => false,
				),
			)
		);
	}

	/**
	 * Register the locations post type.
	 *
	 * @return void
	 */
	public function register_locations() {
		register_post_type(
			'astc_locations',
			array(
				'labels'              => array(
					'name'               => __( 'Locations', 'evt' ),
					'singular_name'      => __( 'Location', 'evt' ),
					'add_new'            => __( 'Add New', 'evt' ),
					'add_new_item'       => __( 'Add new Location', 'evt' ),
					'view_item'          => __( 'View Location', 'evt' ),
					'edit_item'          => __( 'Edit Location', 'evt' ),
					'new_item'           => __( 'New Location', 'evt' ),
					'search_items'       => __( 'Search Locations', 'evt' ),
					'not_found'          => __( 'No Locations found', 'evt' ),
					'not_found_in_trash' => __( 'No Locations found in trash', 'evt' ),
				),
				'public'              => true,
				'exclude_from_search' => true,
				'show_ui'             => true,
				'capability_type'     => 'post',
				'hierarchical'        => false,
				'query_var'           => true,
				'menu_icon'           => 'dashicons-location-alt',
				'supports'            => array( 'title', 'revisions', 'thumbnail' ),
				'has_archive'         => false,
				'rewrite'             => array(
					'slug'       => 'locations',
					'with_front' => false,
				),
			)
		);
	}

	/**
	 * Register the weekly_features post type.
	 *
	 * @return void
	 */
	public function register_weekly_features() {
		register_post_type(
			'astc_weekly_features',
			array(
				'labels'              => array(
					'name'               => __( 'Weekly features', 'evt' ),
					'singular_name'      => __( 'Weekly feature', 'evt' ),
					'add_new'            => __( 'Add New', 'evt' ),
					'add_new_item'       => __( 'Add new Weekly feature', 'evt' ),
					'view_item'          => __( 'View Weekly feature', 'evt' ),
					'edit_item'          => __( 'Edit Weekly feature', 'evt' ),
					'new_item'           => __( 'New Weekly feature', 'evt' ),
					'search_items'       => __( 'Search Weekly features', 'evt' ),
					'not_found'          => __( 'No Weekly features found', 'evt' ),
					'not_found_in_trash' => __( 'No Weekly features found in trash', 'evt' ),
				),
				'public'              => false,
				'exclude_from_search' => true,
				'show_ui'             => true,
				'capability_type'     => 'post',
				'hierarchical'        => false,
				'query_var'           => true,
				'menu_icon'           => 'dashicons-format-aside',
				'supports'            => array( 'title', 'revisions' ),
				'has_archive'         => false,
			)
		);
	}
}
