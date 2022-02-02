<?php
/**
 * The article card mini component template file.
 *
 * @package astra-child
 */

$article = $args['article'];

$article_card_mini_content_class = 'article-card-mini__content';
?>

<a href=<?php echo esc_attr( get_permalink( $article ) ); ?>" class="article-card-mini">
	<?php if ( ! empty( $article->featured_img['url'] ) ) : ?>
		<img
		src="<?php echo esc_attr( $article->featured_img['url'] ); ?>"
		alt="<?php echo esc_attr( $article->post_title ); ?> featured image"
		width="<?php echo esc_attr( $article->featured_img['width'] ); ?>"
		height="<?php echo esc_attr( $article->featured_img['height'] ); ?>"
		class="article-card-mini__img" />
		<?php
			else :
				$article_card_mini_content_class .= ' article-card-mini__content--no-img';
				?>
	<?php endif; ?>

	<div class="<?php echo esc_attr( $article_card_mini_content_class ); ?>">
		<?php if ( isset( $article->terms ) ) : ?>
			<ul class="article-card-mini__terms">
				<?php foreach ( $article->terms as $article_term ) : ?>
					<li class="article-card-mini__term">
						<p class="overline"><?php echo esc_attr( $article_term['name'] ); ?></p>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<h4 class="article-card-mini__title">
			<?php echo esc_attr( $article->post_title ); ?>
		</h4>

		<?php if ( ! empty( $article->author_name ) ) : ?>
			<p class="article-card-mini__author-name"><?php echo esc_attr( $article->author_name ); ?></p>
		<?php endif; ?>
	</div> <!-- article-card-mini__post-content -->
</a>
