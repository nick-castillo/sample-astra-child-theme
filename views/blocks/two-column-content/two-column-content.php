<?php
/**
 * Two column content block file.
 *
 * @package astra-child
 */

$two_column_content = get_field( 'two_column_content' );

if ( empty( $two_column_content['block_image'] ) || empty( $two_column_content['block_content'] ) ) {
	return;
}

$section_class = 'two-column-content-block';

if ( 'img_left_content_right' === $two_column_content['layout'] ) {
	$section_class .= " {$section_class}--reverse";
}

$section_class = "{$section_class} two-column-content-block--{$two_column_content['background_colour']}";

\AstraChild\Providers\ACFBlocks::render(
	'two-column-content',
	array(
		'section_class'    => $section_class,
		'block_content'    => $two_column_content['block_content'],
		'block_media_type' => $two_column_content['block_media_type'],
		'block_img'        => $two_column_content['block_image'],
		'block_embed'      => $two_column_content['block_embed_code'],
	)
);
