<?php
/**
 * Two column content full width block file.
 *
 * @package astra-child
 */

$two_column_content = get_field( 'two_column_content_full_width' );

if ( empty( $two_column_content['block_image'] ) || empty( $two_column_content['block_content'] ) ) {
	return;
}

$section_class = 'two-column-content-full-width-block';

if ( 'img_left_content_right' === $two_column_content['layout'] ) {
	$section_class .= ' --reverse';
}

$section_class = "{$section_class} --{$two_column_content['background_colour']}";

\AstraChild\Providers\ACFBlocks::render(
	'two-column-content-full-width',
	array(
		'section_class' => $section_class,
		'layout'        => $two_column_content['layout'],
		'block_content' => $two_column_content['block_content'],
		'block_img'     => $two_column_content['block_image'],
	)
);
