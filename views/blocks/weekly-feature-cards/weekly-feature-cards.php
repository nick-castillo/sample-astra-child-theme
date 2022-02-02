<?php
/**
 * The weekly feature cards block file.
 *
 * @package astra-child
 */

$weekly_feature_cards = get_field( 'weekly_feature_cards' );

if ( 0 === count( $weekly_feature_cards ) ) {
	return;
}

\AstraChild\Providers\ACFBlocks::render(
	'weekly-feature-cards',
	$weekly_feature_cards
);
