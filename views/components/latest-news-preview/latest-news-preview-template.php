<?php
/**
 * The lastest news preview template file.
 *
 * @package astra-child
 */

$featured_post = $args['featured_post'];

$latest_posts = $args['latest_posts'];
?>

<section class="latest-news-preview">
	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12">
				<div class="latest-news-preview__content">
					<div class="latest-news-preview__featured-post">
						<a href="<?php echo esc_attr( get_permalink( $featured_post ) ); ?>" class="latest-news-preview__link latest-news-preview__link--img">
							<img
							src="<?php echo esc_attr( $featured_post->featured_img['url'] ); ?>"
							alt="<?php echo esc_attr( $featured_post->post_title ); ?> featured image"
							width="<?php echo esc_attr( $featured_post->featured_img['width'] ); ?>"
							height="<?php echo esc_attr( $featured_post->featured_img['height'] ); ?>"
							class="featured-post__img" />
						</a> <!-- latest-news-preview__featured-post -->

						<?php if ( isset( $featured_post->terms ) ) : ?>
							<ul class="latest-news-preview__post-terms">
								<?php foreach ( $featured_post->terms as $featured_post_term ) : ?>
									<li class="latest-news-preview__post-term">
										<p class="overline"><?php echo esc_attr( $featured_post_term['name'] ); ?></p>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>

						<a href="<?php echo esc_attr( get_permalink( $featured_post ) ); ?>" class="latest-news-preview__link latest-news-preview__link--title">
							<h3 class="featured-post__title"><?php echo esc_attr( $featured_post->post_title ); ?></h3>
						</a>

						<?php if ( ! empty( $featured_post->post_excerpt ) ) : ?>
							<p class="featured-post__excerpt"><?php echo esc_attr( $featured_post->post_excerpt ); ?></p>
						<?php endif; ?>

						<?php if ( ! empty( $featured_post->author_name ) ) : ?>
							<p class="featured-post__author-name"><?php echo esc_attr( $featured_post->author_name ); ?></p>
						<?php endif; ?>
					</div> <!-- latest-news-preview__featured-post -->

					<?php if ( 0 !== count( $latest_posts['latest_posts'] ) ) : ?>
						<ul class="latest-news-preview__posts">
							<h6 class="overline">Latest news</h6>
							<?php foreach ( $latest_posts['latest_posts'] as $latest_post ) : ?>
								<li class="latest-news-preview__post">
									<?php
									get_template_part(
										'views/components/article-card-mini/article-card-mini',
										'',
										array( 'article' => $latest_post ),
									);
									?>
								</li>
							<?php endforeach; ?>
						</ul> <!-- latest-news-preview__posts -->
					<?php endif; ?>
				</div> <!-- latest-news-preview__content -->
			</div> <!-- ast-col -->
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</section>
