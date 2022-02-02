<?php // phpcs:ignore
/**
 * The template for displaying single astc_locations post.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

astra_primary_content_top();

$menus = get_field( 'curbside_menus' );

foreach ( $menus as $food_menu ) {
	if ( empty( $food_menu['curbside_menu'] ) ) {
		continue;
	}

	$food_menu = $food_menu['curbside_menu'];
	get_template_part(
		'views/components/menu/menu',
		'',
		array(
			'food_and_drink_id' => $food_menu->ID,
			'back_btn'          => array(
				'label' => 'Back to Takeout',
				'url'   => home_url( '/' ) . 'takeout',
			),
		)
	);
}

astra_primary_content_bottom();

get_footer();
