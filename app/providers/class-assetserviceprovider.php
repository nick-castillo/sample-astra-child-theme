<?php
/**
 * Class-assetserviceprovider file.
 *
 * @package astra-child
 */

namespace AstraChild\Providers;

/**
 * AssetServiceProvider class.
 *
 * For loading WP assets.
 */
class AssetServiceProvider {
	/**
	 * Version of custom style.
	 *
	 * @var string
	 */
	private $style_ver = '1.0.0';

	/**
	 * Version of custom script.
	 *
	 * @var string
	 */
	private $script_ver = '1.0.0';

	/**
	 * Construct method.
	 */
	public function __construct() {
		add_action( 'wp_head', array( $this, 'set_css_variables' ) );

		add_action( 'admin_head', array( $this, 'set_css_variables' ) );

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_frontend_assets' ) );

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_assets' ) );
	}

	/**
	 * Output a style tag on the <head> that contains css variables.
	 *
	 * @return void
	 */
	public function set_css_variables() {
		$css_variables = array();

		$fonts = array(
			'font-primary'   => get_field( 'primary_font', 'option' ),
			'font-secondary' => get_field( 'secondary_font', 'option' ),
			'font-tertiary'  => get_field( 'tertiary_font', 'option' ),
			'font-bold'      => get_field( 'font_bold', 'option' ),
			'font-medium'    => get_field( 'font_medium', 'option' ),
			'font-regular'   => get_field( 'font_regular', 'option' ),
		);
		foreach ( $fonts as $key => $value ) {
			$css_variables[] = "--{$key}:{$value};";
		}

		$colour_keys = array(
			'primary_colour',
			'primary_colour_30',
			'primary_colour_20',
			'primary_colour_10',
			'secondary_colour',
			'secondary_colour_30',
			'secondary_colour_20',
			'secondary_colour_10',
			'text_colour',
			'text_colour_30',
			'text_colour_20',
			'text_colour_10',
			'links_colour',
			'success_colour',
			'warning_colour',
			'error_colour',
			'accent_grey_colour',
			'accent_grey_colour_30',
			'accent_grey_colour_20',
			'accent_grey_colour_10',
			'light_grey_colour',
			'white_colour',
			'black_colour',
		);
		foreach ( $colour_keys as $colour_key ) {
			$colour = get_field( $colour_key, 'option' );

			$colour_var_name = \str_replace( '_', '-', $colour_key );

			$css_variables[] = "--{$colour_var_name}:{$colour};";
		}

		// phpcs:disable
		?><style>:root{<?php
			foreach ( $css_variables as $variable ) {
				echo $variable;
			}
		?>}</style><?php
		// phpcs:enable
	}

	/**
	 * Load up our custom styles and scripts on the frontend.
	 *
	 * @return void
	 */
	public function enqueue_frontend_assets() {
		wp_enqueue_style(
			'astra-child-theme-css',
			ASTRA_CHILD_THEME_BASE_URL . '/style.css',
			array( 'astra-theme-css' ),
			ASTRA_CHILD_THEME_VERSION,
			'all'
		);

		wp_enqueue_style(
			'astra-child-slick-slider',
			'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
			array(),
			'1.8.1',
			'all'
		);

		wp_enqueue_style(
			'astra-child-custom',
			ASTRA_CHILD_THEME_BASE_URL . '/dist/frontend.css',
			array( 'astra-theme-css', 'gforms_formsmain_css' ),
			$this->style_ver,
			'all'
		);

		wp_enqueue_script(
			'astra-child-slick-slider',
			'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
			array( 'jquery' ),
			'1.8.1',
			true
		);

		wp_enqueue_script(
			'astra-child-custom',
			ASTRA_CHILD_THEME_BASE_URL . '/dist/frontend.js',
			array( 'jquery', 'astra-child-slick-slider' ),
			$this->script_ver,
			true
		);
	}

	/**
	 * Load up our custom styles and scripts on the WP admin.
	 *
	 * @return void
	 */
	public function enqueue_admin_assets() {
		wp_register_style(
			'astra-child-custom-admin',
			ASTRA_CHILD_THEME_BASE_URL . '/dist/admin.css',
			false,
			$this->style_ver,
			'all'
		);
		wp_enqueue_style( 'astra-child-custom-admin' );

		wp_enqueue_script(
			'astra-child-custom',
			ASTRA_CHILD_THEME_BASE_URL . '/dist/admin.js',
			array( 'jquery' ),
			$this->script_ver,
			true
		);
	}
}
