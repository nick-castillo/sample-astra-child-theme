<?php
/**
 * Class-theme file.
 *
 * @package astra-child
 */

namespace AstraChild\Providers;

/**
 * Theme class.
 *
 * For registering hooks that interact with the parent theme.
 */
class Theme {
	/**
	 * Class construct.
	 */
	public function __construct() {
		add_filter( 'wpseo_metabox_prio', array( $this, 'pin_yoast_to_bottom' ) );

		add_action( 'astra_primary_footer', array( $this, 'render_footer' ) );

		add_action( 'astra_header_after', array( $this, 'render_banner' ) );
	}

	/**
	 * Display the archive banner.
	 *
	 * @return void
	 */
	public function render_banner() {
		if ( is_home() ) {
			\AstraChild\Providers\ACFBlocks::render(
				'secondary-header',
				array(
					'overline'     => 'Hudsons Canada\'s Pub',
					'title'        => 'Latest News',
					'has_cta'      => false,
					'has_bg_image' => false,
				)
			);

			return;
		}

		if ( is_search() ) {
			\AstraChild\Providers\ACFBlocks::render(
				'secondary-header',
				array(
					'overline'     => 'Hudsons Canada\'s Pub',
					'title'        => 'Searching for: ' . get_search_query(),
					'has_cta'      => false,
					'has_bg_image' => false,
				)
			);

			return;
		}

	}

	/**
	 * Render the astra-child footer. Callback to the
	 * astra_footer action.
	 *
	 * @return void
	 */
	public function render_footer() {
		get_template_part( 'views/layouts/footer/footer' );
	}

	/**
	 * Pin the Yoast metabox to the bottom of the post.
	 *
	 * @return string
	 */
	public function pin_yoast_to_bottom() {
		return 'low';
	}
}
