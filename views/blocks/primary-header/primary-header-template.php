<?php
/**
 * The primary header template file.
 *
 * @package astra-child
 */

$primary_header = $args;
?>

<section class="primary-header-block">
	<div class="primary-header-block__grey-bg"></div> <!-- primary-header-block__grey-bg -->

	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12 ast-col-md-1"></div>

			<div class="ast-col-xs-12 ast-col-md-6">
				<div class="primary-header-info">
					<h1 class="primary-header-info__title">
						<?php echo esc_attr( $primary_header['title'] ); ?>
					</h1>

					<?php if ( ! empty( $primary_header['excerpt'] ) ) : ?>
						<p class="primary-header-info__excerpt">
							<?php echo esc_attr( $primary_header['excerpt'] ); ?>
						</p>
					<?php endif; ?>

					<?php if ( $primary_header['has_cta'] ) : ?>
						<div class="ctas">
							<?php
							$header_ctas = $primary_header['header_ctas'];

							$primary_btn_new_tab = '';
							if ( ! empty( $header_ctas['primary_cta']['target'] ) ) {
								$primary_btn_new_tab = 'target="_blank"';
							}
							?>

							<a href="<?php echo esc_attr( $header_ctas['primary_cta']['url'] ); ?>" class="ast-button ast-btn-primary" <?php echo esc_attr( $primary_btn_new_tab ); ?>>
								<?php echo esc_attr( $header_ctas['primary_cta']['title'] ); ?>
							</a>

							<?php if ( ! empty( $header_ctas['secondary_cta']['url'] ) ) : ?>
								<?php
								$secondary_btn_new_tab = '';
								if ( ! empty( $header_ctas['secondary_cta']['target'] ) ) {
									$secondary_btn_new_tab = 'target="_blank"';
								}
								?>
								<a href="<?php echo esc_attr( $header_ctas['secondary_cta']['url'] ); ?>" class="ast-button ast-btn-secondary" <?php echo esc_attr( $secondary_btn_new_tab ); ?>>
									<?php echo esc_attr( $header_ctas['secondary_cta']['title'] ); ?>
								</a>
							<?php endif; ?>
						</div> <!-- ctas -->
					<?php endif; ?>
				</div> <!-- primary-header-info -->
			</div> <!-- ast-col -->

			<div class="ast-col-xs-12 ast-col-md-5">
				<div class="primary-header-img-container">
					<img
					src="<?php echo esc_attr( $primary_header['featured_image']['url'] ); ?>"
					alt="<?php echo esc_attr( $primary_header['featured_image']['alt'] ); ?>"
					width="<?php echo esc_attr( $primary_header['featured_image']['width'] ); ?>"
					height="<?php echo esc_attr( $primary_header['featured_image']['height'] ); ?>"
					class="primary-header-img" />
				</div> <!-- primary-header-img -->
			</div>  <!-- ast-col -->
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</section>
