<?php
/**
 * The footer layout file.
 *
 * @package astra-child
 */

$site_info = array(
	'logo'    => get_field( 'fallback_logo', 'option' ),
	'address' => get_field( 'hq_address', 'option' ),
	'phone'   => get_field( 'phone', 'option' ),
	'fax'     => get_field( 'fax', 'option' ),
	'email'   => get_field( 'email', 'option' ),
	'menus'   => get_field( 'footer_menus', 'option' ),
);

get_template_part(
	'views/layouts/footer/footer',
	'template',
	$site_info
);
