<?php
/**
 * Class-acfblocks file.
 *
 * @package astra-child
 */

namespace AstraChild\Providers;

/**
 * ACFBlocks class.
 *
 * For registering ACF Gutenberg blocks.
 */
class ACFBlocks {
	/**
	 * ACF block slugs.
	 *
	 * @var array
	 */
	private static $block_slugs = array();

	/**
	 * Class construct.
	 */
	public function __construct() {
		$this->register_blocks();
	}

	/**
	 * Static function that returns all of the custom blocks slug.
	 *
	 * @return array
	 */
	public static function get_slugs() {
		return self::$block_slugs;
	}

	/**
	 * Add to the block_slugs property.
	 *
	 * @param string $block_slug The block slug to add.
	 * @return void
	 */
	public function add_slug( $block_slug = null ) {
		if ( is_null( $block_slug ) ) {
			return;
		}

		self::$block_slugs[] = "acf/{$block_slug}";
	}

	/**
	 * Render acf blocks.
	 *
	 * Callback to the acf_register_block render param.
	 *
	 * @param array $block ACF block array info.
	 * @return void
	 */
	public function render_block( $block ) {
		$block_name = str_replace( 'acf/', '', $block['name'] );

		$template_file = ASTRA_CHILD_THEME_BASE_PATH . "/views/blocks/{$block_name}/{$block_name}.php";

		if ( file_exists( $template_file ) ) {
			include $template_file;
		}
	}

	/**
	 * Render the html template for a block.
	 *
	 * @param string $block_name The block name as registered in the acf_register_block function.
	 * @param array  $contents Any data we want to pass to the template.
	 * @return void
	 */
	public static function render( $block_name, $contents = array() ) {
		$template_path = "views/blocks/{$block_name}/{$block_name}-template";

		get_template_part(
			$template_path,
			'',
			$contents
		);
	}

	/**
	 * Call all of the methods here that registers an ACF block.
	 *
	 * @return void
	 */
	private function register_blocks() {
		$this->blockquote();

		$this->cta_banner_full_width();

		$this->cta_form();

		$this->food_and_drinks();

		$this->full_width_image();

		$this->latest_news();

		$this->locations();

		$this->primary_header();

		$this->secondary_header();

		$this->single_column_content();

		$this->testimonials();

		$this->three_column_content();

		$this->two_column_content();

		$this->two_column_content_full_width();

		$this->two_column_section_head();

		$this->weekly_feature_cards();
	}

	/**
	 * Register the cta form block.
	 *
	 * @return void
	 */
	private function latest_news() {
		\acf_register_block(
			array(
				'name'            => 'latest-news',
				'title'           => __( 'Latest news' ),
				'description'     => __( 'Display the latest news block.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-dynamic-content-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'latest news' ),
			)
		);

		$this->add_slug( 'latest-news' );
	}

	/**
	 * Register the cta form block.
	 *
	 * @return void
	 */
	private function food_and_drinks() {
		\acf_register_block(
			array(
				'name'            => 'food-and-drinks',
				'title'           => __( 'Food and drinks' ),
				'description'     => __( 'Display the food and drinks block.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-dynamic-content-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'food and drinks' ),
			)
		);

		$this->add_slug( 'food-and-drinks' );
	}

	/**
	 * Register the cta form block.
	 *
	 * @return void
	 */
	private function cta_form() {
		\acf_register_block(
			array(
				'name'            => 'cta-form',
				'title'           => __( 'CTA form' ),
				'description'     => __( 'Display the cta form block.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-cta-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'cta', 'CTA form block' ),
			)
		);

		$this->add_slug( 'cta-form' );
	}

	/**
	 * Register the cta banner full width.
	 *
	 * @return void
	 */
	private function cta_banner_full_width() {
		\acf_register_block(
			array(
				'name'            => 'cta-banner-full-width',
				'title'           => __( 'CTA banner full width' ),
				'description'     => __( 'Display the cta banner full width.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-cta-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'header', 'CTA banner full width' ),
			)
		);

		$this->add_slug( 'cta-banner-full-width' );
	}

	/**
	 * Register the primary header block.
	 *
	 * @return void
	 */
	private function primary_header() {
		\acf_register_block(
			array(
				'name'            => 'primary-header',
				'title'           => __( 'Primary header' ),
				'description'     => __( 'Display the primary header block.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-header-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'header', 'primary header' ),
			)
		);

		$this->add_slug( 'primary-header' );
	}

	/**
	 * Register the secondary header block.
	 *
	 * @return void
	 */
	private function secondary_header() {
		\acf_register_block(
			array(
				'name'            => 'secondary-header',
				'title'           => __( 'Secondary header' ),
				'description'     => __( 'Display the secondary header block.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-header-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'header', 'secondary header' ),
			)
		);

		$this->add_slug( 'secondary-header' );
	}

	/**
	 * Register the testimonials block.
	 *
	 * @return void
	 */
	private function testimonials() {
		\acf_register_block(
			array(
				'name'            => 'testimonials',
				'title'           => __( 'Testimonials' ),
				'description'     => __( 'Display the testimonials block.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-dynamic-content-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'content', 'testimonials' ),
			)
		);

		$this->add_slug( 'testimonials' );
	}

	/**
	 * Register the three column block.
	 *
	 * @return void
	 */
	private function three_column_content() {
		\acf_register_block(
			array(
				'name'            => 'three-column-content',
				'title'           => __( 'Three column content' ),
				'description'     => __( 'Display the three column content block.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-general-content-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'content', 'three column content' ),
			)
		);

		$this->add_slug( 'three-column-content' );
	}

	/**
	 * Register the two section head block.
	 *
	 * @return void
	 */
	private function two_column_section_head() {
		\acf_register_block(
			array(
				'name'            => 'two-column-section-head',
				'title'           => __( 'Two column section head' ),
				'description'     => __( 'Display the two column section head block.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-general-content-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'section head', 'two column section head' ),
			)
		);

		$this->add_slug( 'two-column-section-head' );
	}

	/**
	 * Register the locations block.
	 *
	 * @return void
	 */
	private function locations() {
		\acf_register_block(
			array(
				'name'            => 'locations',
				'title'           => __( 'Locations block' ),
				'description'     => __( 'Display the locations block.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-dynamic-content-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'locations' ),
			)
		);

		$this->add_slug( 'locations' );
	}

	/**
	 * Register the weekly feature cards block.
	 *
	 * @return void
	 */
	private function weekly_feature_cards() {
		\acf_register_block(
			array(
				'name'            => 'weekly-feature-cards',
				'title'           => __( 'Weekly feature cards' ),
				'description'     => __( 'Display the weekly features.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-dynamic-content-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'weekly feature cards' ),
			)
		);

		$this->add_slug( 'weekly-feature-cards' );
	}

	/**
	 * Register the two column content full width block.
	 *
	 * @return void
	 */
	private function two_column_content_full_width() {
		\acf_register_block(
			array(
				'name'            => 'two-column-content-full-width',
				'title'           => __( 'Two column content full width' ),
				'description'     => __( 'Display a full width two column content block.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-general-content-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'full width', 'two column content' ),
			)
		);

		$this->add_slug( 'two-column-content-full-width' );
	}

	/**
	 * Register the two column block.
	 *
	 * @return void
	 */
	private function two_column_content() {
		\acf_register_block(
			array(
				'name'            => 'two-column-content',
				'title'           => __( 'Two column content' ),
				'description'     => __( 'Display the two column content block.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-general-content-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'content', 'two column content' ),
			)
		);

		$this->add_slug( 'two-column-content' );
	}

	/**
	 * Register the blockquote block.
	 *
	 * @return void
	 */
	private function blockquote() {
		\acf_register_block(
			array(
				'name'            => 'blockquote',
				'title'           => __( 'Blockquote' ),
				'description'     => __( 'Display the blockquote block.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-general-content-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'content', 'blockquote' ),
			)
		);

		$this->add_slug( 'blockquote' );
	}

	/**
	 * Register the full width image block.
	 *
	 * @return void
	 */
	private function full_width_image() {
		\acf_register_block(
			array(
				'name'            => 'full-width-image',
				'title'           => __( 'Full width image' ),
				'description'     => __( 'Display the full width image block.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-general-content-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'content', 'image', 'full width image' ),
			)
		);

		$this->add_slug( 'full-width-image' );
	}

	/**
	 * Register the single column content block.
	 *
	 * @return void
	 */
	private function single_column_content() {
		\acf_register_block(
			array(
				'name'            => 'single-column-content',
				'title'           => __( 'Single column content' ),
				'description'     => __( 'Display content in a single column.' ),
				'render_callback' => array( $this, 'render_block' ),
				'category'        => 'astra-child-general-content-blocks',
				'icon'            => 'schedule',
				'mode'            => 'auto',
				'keywords'        => array( 'content', 'single column' ),
			)
		);

		$this->add_slug( 'single-column-content' );
	}
}
