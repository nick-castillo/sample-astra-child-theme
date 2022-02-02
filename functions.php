<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'ASTRA_CHILD_THEME_VERSION', '1.0.0' );
define( 'ASTRA_CHILD_THEME_BASE_PATH', __DIR__ );
define( 'ASTRA_CHILD_THEME_BASE_URL', get_stylesheet_directory_uri() );

// Require the loader class.
require_once ASTRA_CHILD_THEME_BASE_PATH . '/app/class-app.php';

new \AstraChild\App();
