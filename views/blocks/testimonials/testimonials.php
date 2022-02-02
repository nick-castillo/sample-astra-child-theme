<?php
/**
 * Testimonials block file.
 *
 * @package astra-child
 */

$testimonials_block = get_field( 'testimonials_block' );

$testimonials_block = $testimonials_block['testimonials'];

$testimonials = array();
foreach ( $testimonials_block as $testimonial ) {
	$testimonial = $testimonial['testimonial'];

	$name = $testimonial->post_title;

	$excerpt = ast_child_get_testimonial( $testimonial );

	if ( empty( $excerpt ) ) {
		continue;
	}

	$testimonials[] = array(
		'name'    => $name,
		'excerpt' => $excerpt,
	);
}

if ( 0 === count( $testimonials ) ) {
	return;
}

\AstraChild\Providers\ACFBlocks::render(
	'testimonials',
	array(
		'testimonials' => $testimonials,
	)
);

