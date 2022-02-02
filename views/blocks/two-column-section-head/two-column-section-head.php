<?php
/**
 * The two column section head block file.
 *
 * @package astra-child
 */

$two_column_section_head = get_field( 'two_column_section_head' );

if ( empty( $two_column_section_head['section_title'] ) || empty( $two_column_section_head['section_content'] ) ) {
	return;
}

\AstraChild\Providers\ACFBlocks::render(
	'two-column-section-head',
	$two_column_section_head
);
