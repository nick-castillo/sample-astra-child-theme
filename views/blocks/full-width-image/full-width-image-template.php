<?php
/**
 * The full width image template file.
 *
 * @package astra-child
 */

?>

<section class="full-width-image-block full-width-image-block--bg-<?php echo esc_attr( $args['bg_colour'] ); ?>">
	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12">
				<?php if ( is_null( $args['img_url'] ) ) : ?>
					<div class="full-width-image__container">
						<img
						src="<?php echo esc_attr( $args['desktop_img']['url'] ); ?>"
						alt="<?php echo esc_attr( $args['desktop_img']['alt'] ); ?>"
						height="<?php echo esc_attr( $args['desktop_img']['height'] ); ?>"
						width="<?php echo esc_attr( $args['desktop_img']['width'] ); ?>"
						class="full-width-image full-width-image__desktop"
						loading="lazy"/>

						<?php if ( ! is_null( $args['mobile_img'] ) ) : ?>
							<img
							src="<?php echo esc_attr( $args['mobile_img']['url'] ); ?>"
							alt="<?php echo esc_attr( $args['mobile_img']['alt'] ); ?>"
							height="<?php echo esc_attr( $args['mobile_img']['height'] ); ?>"
							width="<?php echo esc_attr( $args['mobile_img']['width'] ); ?>"
							class="full-width-image full-width-image__mobile"
							loading="lazy"/>
						<?php endif; ?>
					</div> <!-- .full-width-image__container -->
				<?php else : ?>
					<a href="<?php echo esc_attr( $args['img_url'] ); ?>" class="full-width-image__container full-width-image__container--link">
						<img
						src="<?php echo esc_attr( $args['desktop_img']['url'] ); ?>"
						alt="<?php echo esc_attr( $args['desktop_img']['alt'] ); ?>"
						height="<?php echo esc_attr( $args['desktop_img']['height'] ); ?>"
						width="<?php echo esc_attr( $args['desktop_img']['width'] ); ?>"
						class="full-width-image full-width-image__desktop"
						loading="lazy"/>

						<?php if ( ! is_null( $args['mobile_img'] ) ) : ?>
							<img
							src="<?php echo esc_attr( $args['mobile_img']['url'] ); ?>"
							alt="<?php echo esc_attr( $args['mobile_img']['alt'] ); ?>"
							height="<?php echo esc_attr( $args['mobile_img']['height'] ); ?>"
							width="<?php echo esc_attr( $args['mobile_img']['width'] ); ?>"
							class="full-width-image full-width-image__mobile"
							loading="lazy"/>
						<?php endif; ?>
					</a><!-- .full-width-image__container -->
				<?php endif; ?>
			</div> <!-- col -->
		</div> <!-- .ast-row -->
	</div> <!-- .ast-container -->
</section>
