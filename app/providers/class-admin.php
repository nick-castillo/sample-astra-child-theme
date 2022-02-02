<?php
/**
 * Class-admin file.
 *
 * @package astra-child
 */

namespace AstraChild\Providers;

/**
 * Admin class.
 *
 * For any WP admin customization.
 */
class Admin {
	/**
	 * The class construct.
	 */
	public function __construct() {
		$this->register_acf_options_page();

		$this->register_post_options_page();

		add_filter( 'enter_title_here', array( $this, 'change_placeholder_text' ) );
	}

	/**
	 * Change the placeholder "Add title" to "Add feature name"
	 * for astc_weekly_feature cpt.
	 *
	 * @param string $title The placeholder text.
	 * @return string
	 */
	public function change_placeholder_text( $title ) {
		$screen = get_current_screen();

		if ( 'astc_weekly_features' === $screen->post_type ) {
			$title = 'Add weekly feature name';
		} elseif ( 'astc_testimonials' === $screen->post_type ) {
			$title = 'Add customer name';
		}

		return $title;
	}

	/**
	 * Add ACF options page.
	 *
	 * @return void
	 */
	private function register_acf_options_page() {
		if ( function_exists( 'acf_add_options_page' ) ) {
			acf_add_options_page(
				array(
					'page_title' => 'Global Settings',
					'menu_title' => 'Global Settings',
					'menu_slug'  => 'global-settings',
					'capability' => 'edit_posts',
					'redirect'   => false,
				)
			);
		}
	}

	/**
	 * Add options page to Post.
	 *
	 * @return void
	 */
	private function register_post_options_page() {
		if ( function_exists( 'acf_add_options_page' ) ) {
			acf_add_options_sub_page(
				array(
					'page_title'  => 'Post Options',
					'menu_title'  => 'Post Options',
					'menu_slug'   => 'post-options',
					'parent_slug' => 'edit.php',
				)
			);
		}
	}
}
