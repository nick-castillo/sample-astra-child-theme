<?php
/**
 * The location banner component file.
 *
 * @package astra-child
 */

if ( empty( $args['location'] ) ) {
	return;
}

$location = $args['location'];

$location_info = get_field( 'location_info', $location->ID );

ast_child_render_component(
	'location-banner',
	array(
		'wp_post' => $location,
		'meta'    => $location_info,
	)
);
