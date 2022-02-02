<?php
/**
 * Class-instagram file.
 *
 * @package astra-child
 */

namespace AstraChild\Providers;

/**
 * Instagram class.
 *
 * For managing functionality with Instagram API.
 */
class Instagram {

	/**
	 * The option key for the IG token expiry date.
	 *
	 * @var string
	 */
	public $option_expiry_key = 'ast_child_instagram_expiry';

	/**
	 * The option key for the IG token.
	 *
	 * @var string
	 */
	public $option_token_key = 'ast_child_instagram_token';

	/**
	 * Class construct.
	 */
	public function __construct() {
		if ( is_admin() ) {
			add_action( 'wp_after_admin_bar_render', array( $this, 'check_token_life' ) );
		}
	}

	/**
	 * Call back to add_shortcode ast_child_instagram.
	 *
	 * Render the HTML for the ast_child_instagram shortcode.
	 *
	 * @return void
	 */
	public function render_ig_wall() {
		$ig_posts = $this->get_posts();

		if ( 0 === count( $ig_posts ) ) {
			return;
		}
	}

	/**
	 * Make a request to the API and get the latest posts.
	 *
	 * @return array
	 */
	public static function get_posts() {
		$ig_posts = array();

		$base_url = 'https://graph.instagram.com/me/media?fields=id,media_type,media_url,permalink&access_token=';

		$access_token = ( new self() )->get_token();

		if ( is_null( $access_token ) ) {
			return array();
		}

		$req = wp_remote_get( $base_url . $access_token );

		if ( 200 !== wp_remote_retrieve_response_code( $req ) ) {
			return array();
		}

		$res = json_decode( wp_remote_retrieve_body( $req ) );

		return $res->data;
	}

	/**
	 * Get the IG token from the options table.
	 *
	 * @return string
	 */
	public function get_token() {
		return get_option( $this->option_token_key, null );
	}

	/**
	 * Get the IG token expiry from the options table.
	 *
	 * @return string
	 */
	public function get_expiry() {
		return get_option( $this->option_expiry_key, null );
	}

	/**
	 * Check to see if we need to refresh IG token.
	 *
	 * @return void
	 */
	public function check_token_life() {
		if ( ! $this->should_renew() ) {
			return;
		}

		echo '<div class="notice notice-warning"><p>';
		echo sprintf( '<strong>Action required:</strong> Please update the Instagram token. <a href="%s" target="_blank">Update Token</a>', 'http://hudsonspub.test/' );
		echo '</p></div>';
	}

	/**
	 * The token expiry on the options table.
	 *
	 * @return void
	 */
	public function set_expiry() {
		$is_successful = update_option(
			$this->option_expiry_key,
			strtotime( '+1 months', time() )
		);

		if ( ! $is_successful ) {
			// phpcs:ignore
			error_log( 'Failed to set IG token expiry time.', 0 );
		}
	}

	/**
	 * Check to see if we need to renew our IG token.
	 *
	 * @return boolean
	 */
	private function should_renew() {
		$expiry = (int) $this->get_expiry();

		if ( is_null( $expiry ) ) {
			// Expiry time was not set properly. Renew token.
			return true;
		}

		$time_difference = $expiry - time();

		if ( 0 >= $expiry ) {
			// 1 month has passed. Renew token.
			return true;
		}

		return false;
	}
}
