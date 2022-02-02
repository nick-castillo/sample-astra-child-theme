<?php
/**
 * The latest news block templates file.
 *
 * @package astra-child
 */

$latest_news_block = $args['latest_news_block'];
?>

<section class="latest-news-block">
	<div class="section-intro">
		<div class="ast-container">
			<div class="ast-row">
				<div class="ast-col-xs-1 ast-col-md-2"></div>

				<div class="ast-col-xs-9 ast-col-md-8">
					<h2 class="section-intro__title"><?php echo esc_attr( $latest_news_block['section_title'] ); ?></h2>
					<p class="section-intro__excerpt"><?php echo esc_attr( $latest_news_block['section_excerpt'] ); ?></p>
				</div>

				<div class="ast-col-xs-1 ast-col-md-2"></div>
			</div> <!-- ast-row -->
		</div> <!-- ast-container -->
	</div> <!-- section-intro -->

	<div class="featured-post-container">
		<div class="ast-container">
			<div class="ast-row">
				<div class="ast-col-xs-12">
					<div class="featured-post">
						<a href="<?php echo esc_attr( $latest_news_block['featured_post']['url'] ); ?>" class="featured-post__link featured-post__link--img">
							<?php
							// phpcs:ignore
							echo $latest_news_block['featured_post']['img'];
							?>
						</a>

						<div class="featured-post__content">
							<?php if ( isset( $latest_news_block['featured_post']['categories'] ) ) : ?>
								<ul class="featured-post__categories">
									<?php foreach ( $latest_news_block['featured_post']['categories'] as $latest_news_category ) : ?>
										<?php
										if ( 'Uncategorized' === $latest_news_category['name'] ) {
											continue;
										}
										?>

										<li class="featured-post__category">
											<p class="overline"><?php echo esc_attr( $latest_news_category['name'] ); ?></p>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>

							<a href="<?php echo esc_attr( $latest_news_block['featured_post']['url'] ); ?>" class="featured-post__link featured-post__link--title">
								<h3 class="featured-post__title">
									<?php echo esc_attr( $latest_news_block['featured_post']['title'] ); ?>
								</h3>
							</a>

							<?php if ( ! empty( $latest_news_block['featured_post']['excerpt'] ) ) : ?>
								<p class="featured-post__excerpt">
									<?php echo esc_attr( $latest_news_block['featured_post']['excerpt'] ); ?>
								</p>
							<?php endif; ?>
						</div> <!-- featured-post__content -->
					</div> <!-- featured-post -->

					<a href="/whats-happening/latest-news" class="ast-button ast-btn-secondary">
						View all latest news
					</a>
				</div> <!-- ast-col -->
			</div> <!-- ast-row -->
		</div> <!-- ast-container -->
	</div> <!-- featured-post -->
</section>
