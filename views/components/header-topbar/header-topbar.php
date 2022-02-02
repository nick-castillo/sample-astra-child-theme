<?php
/**
 * The header-top-bar file.
 *
 * Gather all the data for the header-top-bar template.
 *
 * @package astra-child
 */

$announcement = get_field( 'header_announcement', 'option' );

if ( empty( $announcement['message'] ) ) {
	$weekly_feature = get_todays_feature();

	if ( is_null( $weekly_feature ) ) {
		return;
	}

	$announcement = array(
		'message' => "Today's feature: {$weekly_feature->post_title}",
	);
}

get_template_part( 'views/components/header-topbar/header-topbar-template', '', $announcement );
