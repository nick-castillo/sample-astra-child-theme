<?php
/**
 * Class-cli file.
 *
 * @package astra-child
 */

namespace AstraChild;

/**
 * Astra child theme CLI class.
 *
 * For helper WP CLI commands.
 */
class CLI {

	/**
	 * Generate the template and asset files for an ACF block.
	 *
	 * @param array $args CLI arguments in array format.
	 * @return void
	 */
	public function generate_acf_block_files( $args ) {
		$block_slug = $args[0];

		if ( empty( $block_slug ) ) {
			\WP_CLI::error( 'Missing block name.' );
			return;
		}

		$path                     = ASTRA_CHILD_THEME_BASE_PATH . '/views/blocks/' . $block_slug;
		$assets_path              = $path . '/assets';
		$scss_file_path           = $assets_path . "/{$block_slug}.scss";
		$js_file_path             = $assets_path . "/{$block_slug}.js";
		$block_file_path          = "{$path}/{$block_slug}.php";
		$block_template_file_path = "{$path}/{$block_slug}-template.php";

		if ( ! mkdir( $path ) ) {
			\WP_CLI::error( 'Failed to create block folder.' );
			return;
		}

		$block_file = \fopen( $block_file_path, 'w' );
		\fclose( $block_file );

		$block_template_file = \fopen( $block_template_file_path, 'w' );
		\fclose( $block_template_file );

		if ( ! mkdir( $assets_path ) ) {
			\WP_CLI::error( 'Failed to create assets.' );
			return;
		}

		$scss_file = \fopen( $scss_file_path, 'w' );
		\fclose( $scss_file );

		$js_file = \fopen( $js_file_path, 'w' );
		\fwrite( $js_file, "import './{$block_slug}.scss';" );
		\fclose( $js_file );

		\WP_CLI::success( 'Block files generated.' );
	}

	/**
	 * Generate the template and asset files for a component.
	 *
	 * @param array $args CLI arguments in array format.
	 * @return void
	 */
	public function generate_component_files( $args ) {
		$block_slug = $args[0];

		if ( empty( $block_slug ) ) {
			\WP_CLI::error( 'Missing block name.' );
			return;
		}

		$path                     = ASTRA_CHILD_THEME_BASE_PATH . '/views/components/' . $block_slug;
		$assets_path              = $path . '/assets';
		$scss_file_path           = $assets_path . "/{$block_slug}.scss";
		$js_file_path             = $assets_path . "/{$block_slug}.js";
		$block_file_path          = "{$path}/{$block_slug}.php";
		$block_template_file_path = "{$path}/{$block_slug}-template.php";

		if ( ! mkdir( $path ) ) {
			\WP_CLI::error( 'Failed to create block folder.' );
			return;
		}

		$block_file = \fopen( $block_file_path, 'w' );
		\fclose( $block_file );

		$block_template_file = \fopen( $block_template_file_path, 'w' );
		\fclose( $block_template_file );

		if ( ! mkdir( $assets_path ) ) {
			\WP_CLI::error( 'Failed to create assets.' );
			return;
		}

		$scss_file = \fopen( $scss_file_path, 'w' );
		\fclose( $scss_file );

		$js_file = \fopen( $js_file_path, 'w' );
		\fwrite( $js_file, "import './{$block_slug}.scss';" );
		\fclose( $js_file );

		\WP_CLI::success( 'Component files generated.' );
	}

	/**
	 * Generate the template and asset files for a shortcode.
	 *
	 * @param array $args CLI arguments in array format.
	 * @return void
	 */
	public function generate_shortcode_files( $args ) {
		$block_slug = $args[0];

		if ( empty( $block_slug ) ) {
			\WP_CLI::error( 'Missing shortocde name.' );
			return;
		}

		$path                     = ASTRA_CHILD_THEME_BASE_PATH . '/views/shortcodes/' . $block_slug;
		$assets_path              = $path . '/assets';
		$scss_file_path           = $assets_path . "/{$block_slug}.scss";
		$js_file_path             = $assets_path . "/{$block_slug}.js";
		$block_file_path          = "{$path}/{$block_slug}.php";
		$block_template_file_path = "{$path}/{$block_slug}-template.php";

		if ( ! mkdir( $path ) ) {
			\WP_CLI::error( 'Failed to create block folder.' );
			return;
		}

		$block_file = \fopen( $block_file_path, 'w' );
		\fclose( $block_file );

		$block_template_file = \fopen( $block_template_file_path, 'w' );
		\fclose( $block_template_file );

		if ( ! mkdir( $assets_path ) ) {
			\WP_CLI::error( 'Failed to create assets.' );
			return;
		}

		$scss_file = \fopen( $scss_file_path, 'w' );
		\fclose( $scss_file );

		$js_file = \fopen( $js_file_path, 'w' );
		\fwrite( $js_file, "import './{$block_slug}.scss';" );
		\fclose( $js_file );

		\WP_CLI::success( 'Shortcode files generated.' );
	}
}
