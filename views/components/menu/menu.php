<?php
/**
 * The menu component file.
 *
 * @package astra-child
 */

$menu_id = '';

if ( isset( $args['food_and_drink_id'] ) ) {
	$menu_id = $args['food_and_drink_id'];
}

if ( empty( $menu_id ) ) {
	global $post;

	if ( empty( $post ) ) {
		return;
	}

	if ( 'astc_food_and_drinks' !== $post->post_type ) {
		return;
	}

	$menu_id = $post->ID;
}

$food_and_drink_menu = get_field( 'food_and_drinks', $menu_id );

if ( empty( $food_and_drink_menu ) ) {
	return;
}

$back_button = array(
	'label' => 'Back to Food & Drinks',
	'url'   => home_url( '/' ) . 'food-drink',
);

if ( ! empty( $args['back_btn'] ) ) {
	$back_button = array(
		'label' => $args['back_btn']['label'],
		'url'   => $args['back_btn']['url'],
	);
}

$location = null;
if ( isset( $_GET['location'] ) ) {
	$location_slug = wp_kses( wp_unslash( $_GET['location'] ), array(), array() );

	$location_query = new WP_Query(
		array(
			'post_type'   => 'astc_locations',
			'name'        => $location_slug,
			'post_status' => 'publish',
			'numberposts' => 1,
		)
	);

	if ( ! empty( $location_query->post ) ) {
		$location = $location_query->post;
	}
}

$args = array(
	'menu_name'    => get_the_title(),
	'menu_excerpt' => get_the_excerpt(),
	'menu_list'    => $food_and_drink_menu['list'],
	'back_btn'     => $back_button,
	'location'     => $location,
);

ast_child_render_component(
	'menu',
	$args
);
