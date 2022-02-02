<?php
/**
 * The cta form template file.
 *
 * @package astra-child
 */

$cta_form_block = $args;
?>

<section class="cta-form-block">
	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12 ast-col-md-1"></div>

			<div class="ast-col-xs-12 ast-col-md-10">
				<div class="ast-row">
					<div class="ast-col-xs-12 ast-col-lg-4">
						<div class="cta-form-info">
							<?php if ( ! empty( $cta_form_block['overline'] ) ) : ?>
								<p class="overline"><?php echo esc_attr( $cta_form_block['overline'] ); ?></p>

								<h2 class="cta-form-info__title"><?php echo esc_attr( $cta_form_block['cta_title'] ); ?></h2>

								<div class="cta-form-info__meta">
									<?php
									// phpcs:ignore
									echo $cta_form_block['cta_content'];
									?>
								</div>
							<?php endif; ?>
						</div> <!-- cta-form-info -->
					</div> <!-- col -->

					<div class="ast-col-xs-12 ast-col-lg-8">
						<div class="cta-form">
							<?php
							// phpcs:ignore
							echo $cta_form_block['cta_form'];
							?>
						</div> <!-- cta-form -->
					</div> <!-- col -->
				</div> <!-- ast-row -->
			</div> <!-- col -->

			<div class="ast-col-xs-12 ast-col-md-1"></div>
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</section>
