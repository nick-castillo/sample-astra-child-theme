<?php
/**
 * Full width image file.
 *
 * @package astra
 */

$full_width_image_block = get_field( 'full_width_image_block' );

array_shift( $full_width_image_block );

$bg_colour = $full_width_image_block['background_colour'];

$desktop_image = $full_width_image_block['full_width_image']['desktop'];

$mobile_image = null;
if ( ! empty( $full_width_image_block['full_width_image']['mobile'] ) ) {
	$mobile_image = $full_width_image_block['full_width_image']['mobile'];
}

$image_url = null;
if ( $full_width_image_block['full_width_image']['has_url'] ) {
	$image_url = $full_width_image_block['full_width_image']['url'];
}

\AstraChild\Providers\ACFBlocks::render(
	'full-width-image',
	array(
		'desktop_img' => $desktop_image,
		'mobile_img'  => $mobile_image,
		'img_url'     => $image_url,
		'bg_colour'   => $bg_colour,
	)
);
