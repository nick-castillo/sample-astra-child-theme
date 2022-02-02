<?php // phpcs:ignore
/**
 * The template for displaying single astc_locations post.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

astra_primary_content_top();

the_content();

get_template_part( 'views/components/latest-news-preview/latest-news-preview', '' );

get_template_part( 'views/blocks/cta-banner-full-width/cta-banner-full-width', '' );

$latest_blogs = ast_child_get_latest_posts(
	'post',
	array(
		'offset'      => 4,
		'numberposts' => 6,
	)
);

?>

<section class="latest-blog-section">
	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12 ast-col-lg-1"></div>

			<div class="ast-col-xs-12 ast-col-lg-10">
				<ul class="latest-blogs">
					<?php foreach ( $latest_blogs['latest_posts'] as $latest_blog ) : ?>
						<li class="latest-blog">
							<?php
							get_template_part(
								'views/components/article-card-mini/article-card-mini',
								'',
								array( 'article' => $latest_blog ),
							);
							?>
						</li>
					<?php endforeach; ?>
				</ul>

				<a href="<?php echo esc_attr( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="ast-button ast-btn-secondary">View All Blog</a>
			</div> <!-- ast-col-xs-12 -->

			<div class="ast-col-xs-12 ast-col-lg-1"></div>
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</section>

<?php
astra_primary_content_bottom();

get_footer();
