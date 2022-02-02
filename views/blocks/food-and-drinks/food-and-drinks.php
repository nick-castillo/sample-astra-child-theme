<?php
/**
 * The food and drinks block file.
 *
 * @package astra-child
 */

$food_and_drinks = get_field( 'food_and_drinks' );

if ( 0 === count( $food_and_drinks ) ) {
	return;
}

foreach ( $food_and_drinks as $index => $food_and_drink ) {
	if ( empty( $food_and_drink['food_and_drink'] ) ) {
		unset( $food_and_drinks[ $index ] );
		continue;
	}

	$food_and_drink = $food_and_drink['food_and_drink'];

	$args = array(
		'post_type'   => 'astc_food_and_drinks',
		'numberposts' => -1,
		'post_status' => 'publish',
	);

	if ( isset( $food_and_drink->term_id ) ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'astc_food_and_drink_catergory',
				'field'    => 'term_id',
				'terms'    => $food_and_drink->term_id,
			),
		);
	}

	$menus = get_posts( $args );

	if ( 0 === count( $menus ) ) {
		unset( $food_and_drinks[ $index ] );
		continue;
	}

	$food_and_drinks[ $index ] = array(
		'menus'                   => $menus,
		'food_and_drink_category' => $food_and_drink,
	);
}

\AstraChild\Providers\ACFBlocks::render(
	'food-and-drinks',
	$food_and_drinks
);
