<?php
/**
 * The cta banner full width content template file.
 *
 * @package astra-child
 */

?>

<div class="cta-content-container">
	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12 ast-col-md-1"></div>

			<div class="ast-col-xs-12 ast-col-md-10">
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

			<div class="ast-col-xs-12 ast-col-md-1"></div>
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</div>
