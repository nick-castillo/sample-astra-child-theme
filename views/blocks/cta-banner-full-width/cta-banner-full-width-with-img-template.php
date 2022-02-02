<?php
/**
 * The cta banner full width with img template file.
 *
 * @package astra-child
 */

?>

<?php if ( 'left' === $args['image_position'] ) : ?>
	<div class="cta-img-container" style="background-image: url(<?php echo esc_attr( $args['cta_image']['url'] ); ?>)"></div>

	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12 ast-col-md-1 ast-col-lg-4"></div>

			<div class="ast-col-xs-12 ast-col-md-10 ast-col-lg-7">
				<div class="cta-banner-full-width__content">
					<p class="overline"><?php echo esc_attr( $args['overline'] ); ?></p>

					<h3 class="cta-text"><?php echo esc_attr( $args['cta_text'] ); ?></h3>

					<?php
					if ( 'buttons' === $args['cta_type'] ) {
						get_template_part( 'views/blocks/cta-banner-full-width/cta-banner-full-width', 'buttons', $args['cta_buttons'] );
					} else {
						get_template_part( 'views/blocks/cta-banner-full-width/cta-banner-full-width', 'form', $args['cta_form_shortcode'] );
					}
					?>
				</div> <!-- cta-banner-full-width__content -->
			</div>

			<div class="ast-col-xs-12 ast-col-md-1 ast-col-lg-1"></div>
		</div>
	</div>
<?php else : ?>
	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12 ast-col-md-1 ast-col-lg-1"></div>

			<div class="ast-col-xs-12 ast-col-md-10 ast-col-lg-7">
				<div class="cta-banner-full-width__content">
					<p class="overline"><?php echo esc_attr( $args['overline'] ); ?></p>

					<h3 class="cta-text"><?php echo esc_attr( $args['cta_text'] ); ?></h3>

					<?php
					if ( 'buttons' === $args['cta_type'] ) {
						get_template_part( 'views/blocks/cta-banner-full-width/cta-banner-full-width', 'buttons', $args['cta_buttons'] );
					} else {
						get_template_part( 'views/blocks/cta-banner-full-width/cta-banner-full-width', 'form', $args['cta_form_shortcode'] );
					}
					?>
				</div> <!-- cta-banner-full-width__content -->
			</div>

			<div class="ast-col-xs-12 ast-col-md-1 ast-col-lg-4"></div>
		</div>
	</div>

	<div class="cta-img-container" style="background-image: url(<?php echo esc_attr( $args['cta_image']['url'] ); ?>)"></div>
<?php endif; ?>
