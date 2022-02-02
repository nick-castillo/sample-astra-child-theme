<?php
/**
 * Two column content template file.
 *
 * @package astra-child
 */

?>

<section class="<?php echo esc_attr( $args['section_class'] ); ?>">
	<div class="ast-container">
		<div class="ast-row">
			<?php // Empty to center align content. ?>
			<div class="ast-col-xs-12 ast-col-lg-1"></div>

			<div class="ast-col-xs-12 ast-col-lg-10">
				<div class="main-content">
					<div class="block-content">
						<?php
						// phpcs:ignore
						echo $args['block_content'];
						?>
					</div> <!-- block-content -->

					<?php if ( 'image' === $args['block_media_type'] ) : ?>
						<img
						src="<?php echo esc_attr( $args['block_img']['url'] ); ?>"
						alt="<?php echo esc_attr( $args['block_img']['alt'] ); ?>"
						width="<?php echo esc_attr( $args['block_img']['width'] ); ?>"
						height="<?php echo esc_attr( $args['block_img']['height'] ); ?>"
						class="block-img block-content__media" />
					<?php else : ?>
						<div class="block-content__media">
							<?php
							// phpcs:ignore
							echo $args['block_embed'];
							?>
						</div>
					<?php endif; ?>
				</div> <!-- main-content -->
			</div>

			<?php // Empty to center align content. ?>
			<div class="ast-col-xs-12 ast-col-lg-1"></div>
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</section>
