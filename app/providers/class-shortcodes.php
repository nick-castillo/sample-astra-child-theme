<?php
/**
 * Class-shortcodes file.
 *
 * @package astra-child
 */

namespace AstraChild\Providers;

/**
 * Shortcodes class.
 *
 * For loading custom shortcodes.
 */
class Shortcodes {
	/**
	 * Base dir for shortcode templates.
	 *
	 * @var string
	 */
	private $template_base_path = ASTRA_CHILD_THEME_BASE_PATH . '/views/shortcodes';

	/**
	 * Construct method.
	 */
	public function __construct() {
		add_shortcode( 'astrachild_button', array( $this, 'render_astrachild_button' ) );

		add_shortcode( 'astrachild_instagram', array( $this, 'render_astrachild_instagram' ) );
	}

	/**
	 * Render the html for [astrachild_instagram]
	 *
	 * @return string
	 */
	public function render_astrachild_instagram() {
		$ig_posts = Instagram::get_posts();

		if ( 0 === count( $ig_posts ) ) {
			return;
		}

		return $this->get_template(
			'/astrachild-instagram/astrachild-instagram.php',
			$ig_posts
		);
	}

	/**
	 * Render the html for [astrachild_button]
	 *
	 * @param array $atts Shortcode attributes.
	 * @return string
	 */
	public function render_astrachild_button( $atts ) {
		$atts = shortcode_atts(
			array(
				'label'   => 'Learn more',
				'url'     => null,
				'new_tab' => false,
				'type'    => 'primary',
			),
			$atts
		);

		if ( is_null( $atts['url'] ) ) {
			return '';
		}

		$valid_types = array( 'primary', 'secondary', 'tertiary' );
		if ( ! \in_array( $atts['type'], $valid_types, true ) ) {
			$atts['type'] = 'primary'; // fallback to primary.
		}

		if ( 'true' === $atts['new_tab'] ) {
			$atts['new_tab'] = true;
		}

		return $this->get_template(
			'astrachild-button.php',
			$atts
		);
	}

	/**
	 * Get the template for a shortcode.
	 *
	 * @param string $filename The template file name.
	 * @param array  $atts The shortcode atts.
	 * @return string
	 */
	private function get_template( $filename, $atts = array() ) {
		\ob_start();

		load_template(
			$this->template_base_path . '/' . $filename,
			false,
			$atts
		);

		return ob_get_clean();
	}
}
