<?php
/**
 * Class-menus file.
 *
 * @package astra-child
 */

namespace AstraChild\Providers;

/**
 * Menus class.
 *
 * For registerting custom WP menus.
 */
class Menus {
	/**
	 * The class construct.
	 */
	public function __construct() {
		add_action( 'wp_loaded', array( $this, 'remove_default_footer_menu' ) );
	}

	/**
	 * De-register the default footer menu location from astra.
	 *
	 * @return void
	 */
	public function remove_default_footer_menu() {
		unregister_nav_menu( 'footer_menu' );
		unregister_nav_menu( 'loggedin_account_menu' );
		unregister_nav_menu( 'secondary_menu' );
		unregister_nav_menu( 'mobile_menu' );
	}
}
