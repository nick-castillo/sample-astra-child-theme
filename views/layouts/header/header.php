<?php
/**
 * The header layout file.
 *
 * @package astra-child
 */

$logo = get_field( 'fallback_logo', 'option' );

$locations    = get_nav_menu_locations();
$primary_menu = wp_get_nav_menu_object( $locations['primary'] );
$menu_items   = wp_get_nav_menu_items( $primary_menu->term_id, array( 'order' => 'DESC' ) );

foreach ( $menu_items as $menu_item ) {
	$sub_menu_type  = null;
	$sub_menu_items = array();

	$menu_item->has_sub_menu = get_field( 'has_sub_menu', $menu_item );

	if ( ! $menu_item->has_sub_menu ) {
		continue;
	}

	$sub_menu_type = get_field( 'sub_menu_type', $menu_item );

	if ( 'dropdown' === $sub_menu_type ) {
		$sub_menu_items = get_field( 'dropdown_menu_items', $menu_item );
	} else {
		$sub_menu_items = get_field( 'mega_menu_items', $menu_item );
	}

	$menu_item->sub_menu_type = $sub_menu_type;

	$menu_item->sub_menu_items = $sub_menu_items;
}

get_template_part(
	'views/layouts/header/header',
	'template',
	array(
		'logo'       => $logo,
		'menu_items' => $menu_items,
	)
);
