<?php
/**
 * The secondary header block file.
 *
 * @package astra-child
 */

$secondary_header = get_field( 'secondary_header' );

if ( empty( $secondary_header['overline'] ) ) {
	$secondary_header['overline'] = 'Hudsons Canada\'s Pub';
}

if ( empty( $secondary_header['title'] ) ) {
	$secondary_header['title'] = get_the_title();
}

\AstraChild\Providers\ACFBlocks::render(
	'secondary-header',
	$secondary_header
);
