<?php
/**
 * Class-app file.
 *
 * @package astra-child
 */

namespace AstraChild;

/**
 * App class.
 *
 * For requiring the files in astra-child/app.
 */
class App {

	/**
	 * Class construct.
	 */
	public function __construct() {
		$this->register_providers();

		$this->load_helpers();

		add_action( 'cli_init', array( $this, 'register_cli_cmds' ) );
	}

	/**
	 * Load cli classes.
	 *
	 * @return void
	 */
	public function register_cli_cmds() {
		require_once ASTRA_CHILD_THEME_BASE_PATH . '/app/class-cli.php';

		\WP_CLI::add_command( 'ast-child', '\AstraChild\CLI' );
	}

	/**
	 * Load provider classes.
	 *
	 * @return void
	 */
	public function register_providers() {
		$providers_base_path = ASTRA_CHILD_THEME_BASE_PATH . '/app/providers/';

		$provider_files = array(
			'class-assetserviceprovider.php',
			'class-shortcodes.php',
			'class-gutenberg.php',
			'class-acfblocks.php',
			'class-admin.php',
			'class-theme.php',
			'class-posttypes.php',
			'class-taxonomies.php',
			'class-menus.php',
			'class-instagram.php',
		);

		self::require_files( $providers_base_path, $provider_files );

		new \AstraChild\Providers\AssetServiceProvider();
		new \AstraChild\Providers\Shortcodes();
		new \AstraChild\Providers\Gutenberg();
		new \AstraChild\Providers\ACFBlocks();
		new \AstraChild\Providers\Admin();
		new \AstraChild\Providers\PostTypes();
		new \AstraChild\Providers\Taxonomies();
		new \AstraChild\Providers\Theme();
		new \AstraChild\Providers\Menus();
		new \AstraChild\Providers\Instagram();
	}

	/**
	 * Load helper files.
	 *
	 * @return void
	 */
	public function load_helpers() {
		$helpers_base_path = ASTRA_CHILD_THEME_BASE_PATH . '/app/helpers/';

		$helper_files = array(
			'weekly-features.php',
			'templates.php',
			'content.php',
		);

		self::require_files( $helpers_base_path, $helper_files );
	}

	/**
	 * Helper function to require files.
	 *
	 * @param string $base_path The base path of the file.
	 * @param array  $files The files to require.
	 * @return void
	 */
	public static function require_files( $base_path, $files ) {
		foreach ( $files as $file ) {
			require_once $base_path . $file;
		}
	}
}
