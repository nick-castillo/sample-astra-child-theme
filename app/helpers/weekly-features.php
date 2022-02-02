<?php
/**
 * The weekly-features file.
 *
 * A collection of helper functions that help with the
 * weekly feature content.
 *
 * @package astra-child
 */

/**
 * Get the weekly feature post for the current day.
 *
 * @return mixed
 */
function get_todays_feature() {
	global $wpdb;

	$current_day = gmdate( 'l' );

	// phpcs:disable
	$results = $wpdb->get_results(
		"SELECT post_id FROM {$wpdb->prefix}postmeta
		INNER JOIN {$wpdb->prefix}posts ON {$wpdb->prefix}postmeta.post_id = {$wpdb->prefix}posts.ID
		WHERE {$wpdb->prefix}postmeta.meta_key = 'weekly_feature_day_of_the_week' AND {$wpdb->prefix}postmeta.meta_value = '{$current_day}'
		AND {$wpdb->prefix}posts.post_type = 'astc_weekly_features'",
		OBJECT
	);

	if ( 0 === count( $results ) ) {
		return null;
	}

	return get_post( $results[0]->post_id );
}
