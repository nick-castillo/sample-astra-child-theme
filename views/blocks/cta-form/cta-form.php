<?php
/**
 * The cta-form block file.
 *
 * @package astra-child
 */

$cta_form_block = get_field( 'cta_form' );

if ( empty( $cta_form_block['cta_title'] ) || empty( $cta_form_block['cta_form'] ) ) {
	return;
}

\AstraChild\Providers\ACFBlocks::render(
	'cta-form',
	$cta_form_block
);
