<?php
/**
 * The article card component template file.
 *
 * @package astra-child
 */

$article = $args;

$article_content_class = 'article-card__content';
?>

<div class="article-card">
	<?php if ( ! empty( $article['featured_img']['url'] ) ) : ?>
		<a href="<?php echo esc_attr( $article['url'] ); ?>" class="article-card__img" style="background-image: url(<?php echo esc_attr( $article['featured_img']['url'] ); ?>)"></a>
		<?php
		else :
			$article_content_class .= ' article-card__content--no-img';
			?>
	<?php endif; ?>

	<div class="<?php echo esc_attr( $article_content_class ); ?>">
		<a href="<?php echo esc_attr( $article['url'] ); ?>" class="article-card__link article-card__link--title btn btn-link">
			<h3 class="article-card__title">
				<?php echo esc_attr( $article['title'] ); ?>
			</h3>
		</a>

		<?php if ( ! empty( $article['excerpt'] ) ) : ?>
			<p class="article-card__excerpt">
				<?php echo esc_attr( $article['excerpt'] ); ?>
			</p>
		<?php endif; ?>

		<a href="<?php echo esc_attr( $article['url'] ); ?>" class="article-card__link article-card__link--btn btn btn-link">
			Read more
		</a>
	</div> <!-- article-card__content -->
</div>
