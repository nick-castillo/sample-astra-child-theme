<?php
/**
 * Class-gutenberg file.
 *
 * @package astra-child
 */

namespace AstraChild\Providers;

/**
 * Gutenberg class.
 *
 * For controlling behaviour related to Gutenberg.
 */
class Gutenberg {
	/**
	 * Class construct.
	 */
	public function __construct() {
		add_filter( 'block_categories', array( $this, 'register_block_categories' ), 10, 2 );

		add_filter( 'allowed_block_types', array( $this, 'control_allowed_block_types' ) );
	}

	/**
	 * Undocumented function
	 *
	 * @param array $allowed_blocks Blocks that are allowed to be used in Gutenberg.
	 * @return array
	 */
	public function control_allowed_block_types( $allowed_blocks ) {
		$allowed_blocks = ACFBlocks::get_slugs();

		return $allowed_blocks;
	}

	/**
	 * Register our block categories.
	 *
	 * @param array  $categories The Gutenberg categories.
	 * @param object $post The current post object.
	 * @return array
	 */
	public function register_block_categories( $categories, $post ) {
		$custom_blocks = array(
			array(
				'slug'  => 'astra-child-header-blocks',
				'title' => __( 'Headers', 'astra-child-blocks' ),
			),
			array(
				'slug'  => 'astra-child-cta-blocks',
				'title' => __( 'CTAs', 'astra-child-blocks' ),
			),
			array(
				'slug'  => 'astra-child-general-content-blocks',
				'title' => __( 'General Content', 'astra-child-blocks' ),
			),
			array(
				'slug'  => 'astra-child-dynamic-content-blocks',
				'title' => __( 'Dynamic Content', 'astra-child-blocks' ),
			),
		);

		return array_merge(
			$categories,
			$custom_blocks
		);
	}
}
