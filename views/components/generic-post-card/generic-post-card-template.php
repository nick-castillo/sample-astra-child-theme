<?php
/**
 * The generic post card template file.
 *
 * @package ast-child
 */

$generic_post_card = $args;

$new_tab = '';
if ( $generic_post_card['has_cta'] ) {
	$new_tab = 'target="_blank" re="noopener"';
}
?>

<div class="generic-post-card">
	<?php if ( ! empty( $generic_post_card['featured_image'] ) ) : ?>
		<?php if ( $generic_post_card['has_cta'] ) : ?>
			<a
			href="<?php echo esc_attr( $generic_post_card['cta']['url'] ); ?>"
			<?php echo esc_attr( $new_tab ); ?>
			style="background-image: url(<?php echo esc_attr( $generic_post_card['featured_image']['url'] ); ?>)"
			class="generic-post-card__img"></a>
		<?php else : ?>
			<div class="generic-post-card__img" style="background-image: url(<?php echo esc_attr( $generic_post_card['featured_image']['url'] ); ?>)"></div>
		<?php endif; ?>
	<?php endif; ?>

	<div class="generic-post-card__content">
		<h4 class="generic-post-card__title"><?php echo esc_attr( $generic_post_card['title'] ); ?></h4>

		<div class="generic-post-card__excerpt">
			<?php
			// phpcs:ignore
			echo $generic_post_card['content'];
			?>
		</div>

		<?php if ( $generic_post_card['has_cta'] ) : ?>
			<a
			href="<?php echo esc_attr( $generic_post_card['cta']['url'] ); ?>"
			<?php echo esc_attr( $new_tab ); ?>
			class="generic-post-card__cta">
				<?php echo esc_attr( $generic_post_card['cta']['title'] ); ?>
			</a>
		<?php endif; ?>
	</div> <!-- generic-post-card__content -->
</div> <!-- generic-post-card -->
