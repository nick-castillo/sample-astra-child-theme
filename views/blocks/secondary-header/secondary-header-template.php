<?php
/**
 * The secondary header template file.
 *
 * @package astra-child
 */

$section_class = 'secondary-header-block';

if ( $args['has_bg_image'] ) {
	$section_class .= ' secondary-header-block__has-bg-img';
}
?>

<section class="<?php echo esc_attr( $section_class ); ?>">
	<?php if ( $args['has_bg_image'] ) : ?>
		<div class="secondary-header-block__img" style="background-image: url('<?php echo esc_attr( $args['background_image']['url'] ); ?>');"></div>
	<?php endif; ?>

	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12 ast-col-md-2 ast-col-lg-1"></div>

			<div class="ast-col-xs-12 ast-col-md-10 ast-col-lg-8">
				<p class="overline"><?php echo esc_attr( $args['overline'] ); ?></p>

				<h2 class="title"><?php echo esc_attr( $args['title'] ); ?></h2>

				<?php if ( $args['has_cta'] ) : ?>
					<div class="ctas">
						<?php
						$header_ctas = $args['header_ctas'];

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

				<?php if ( ! is_admin() ) : ?>
					<div class="breadcrumbs body-small">
						<?php
						// phpcs:ignore
						echo do_shortcode('[wpseo_breadcrumb]');
						?>
					</div> <!-- breadcrumbs -->
				<?php endif; ?>
			</div>

			<div class="ast-col-xs-12 ast-col-lg-3"></div>
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</section>
