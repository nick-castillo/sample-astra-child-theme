<?php
/**
 * The primary header block file.
 *
 * @package astra-child
 */

$primary_header = get_field( 'primary_header' );

if ( empty( $primary_header['title'] ) ) {
	$primary_header['title'] = 'Hudsons Canada\'s Pub';
}

\AstraChild\Providers\ACFBlocks::render(
	'primary-header',
	$primary_header
);
