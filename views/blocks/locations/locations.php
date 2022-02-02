<?php
/**
 * The locations block file.
 *
 * @package astra-child
 */

$locations_block = get_field( 'locations_block' );

if ( 0 === count( $locations_block ) ) {
	return;
}

\AstraChild\Providers\ACFBlocks::render(
	'locations',
	$locations_block
);
