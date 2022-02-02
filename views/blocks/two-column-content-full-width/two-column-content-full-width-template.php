<?php
/**
 * Two column content full width template file.
 *
 * @package astra-child
 */

?>

<section class="<?php echo esc_attr( $args['section_class'] ); ?>">
	<div class="bg-colour"></div> <!-- bg-colour -->
	<div class="bg-image" style="background-image: url(<?php echo esc_attr( $args['block_img']['url'] ); ?>)"></div> <!-- bg-image -->

	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12 ast-col-md-6">
				<?php if ( 'img_right_content_left' === $args['layout'] ) : ?>
					<div class="content">
						<div class="content__img" style="background-image: url(<?php echo esc_attr( $args['block_img']['url'] ); ?>)"></div>
						<div class="content__info">
							<?php
							// phpcs:ignore
							echo $args['block_content'];
							?>
						</div> <!-- content__info -->
					</div> <!-- content -->
				<?php endif; ?>
			</div>

			<div class="ast-col-xs-12 ast-col-md-6">
				<?php if ( 'img_left_content_right' === $args['layout'] ) : ?>
					<div class="content">
						<div class="content__img" style="background-image: url(<?php echo esc_attr( $args['block_img']['url'] ); ?>)"></div>

						<div class="content__info">
							<?php
							// phpcs:ignore
							echo $args['block_content'];
							?>
						</div> <!-- content__info -->
					</div> <!-- content -->
				<?php endif; ?>
			</div> <!-- ast-col -->
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</section>
