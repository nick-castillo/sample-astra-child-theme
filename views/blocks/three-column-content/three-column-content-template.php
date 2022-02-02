<?php
/**
 * Three column content template block file.
 *
 * @package astra-child
 */

?>

<section class="three-column-content-block">
	<?php if ( ! is_null( $args['section_intro'] ) ) : ?>
		<div class="section-intro">
			<div class="ast-container">
				<div class="ast-row">
					<div class="ast-col-xs-12 ast-col-md-1 ast-col-lg-2"></div>

					<div class="ast-col-xs-12 ast-col-md-10 ast-col-lg-8">
						<div class="section-intro__content">
							<?php
							// phpcs:ignore
							echo $args['section_intro'];
							?>
						</div> <!-- section-intro__content  -->
					</div> <!-- ast-col-xs-12 -->

					<div class="ast-col-xs-12 ast-col-md-1 ast-col-lg-2"></div>
				</div> <!-- ast-row -->
			</div> <!-- ast-container -->
		</div> <!-- section-intro -->
	<?php endif; ?>

	<div class="columns">
		<div class="ast-container">
			<div class="ast-row">
				<div class="ast-col-xs-12">
					<div class="columns__container">
						<?php foreach ( $args['columns'] as $column ) : ?>
							<div class="column <?php echo esc_attr( implode( ' ', $column['classes'] ) ); ?>">
								<?php if ( ! is_null( $column['bg_img'] ) ) : ?>
									<div class="column__bg-img" style="background-image: url(<?php echo esc_attr( $column['bg_img']['url'] ); ?>)">
									</div> <!-- column__bg-img -->
								<?php endif; ?>

								<?php if ( ! is_null( $column['content'] ) ) : ?>
									<div class="column__content">
										<?php
										// phpcs:ignore
										echo $column['content'];
										?>
									</div> <!-- column__content -->
								<?php endif; ?>
							</div> <!-- column -->
						<?php endforeach; ?>
					</div> <!-- columns__container -->
				</div> <!-- ast-col -->
			</div> <!-- ast-row -->
		</div> <!-- ast-container -->
	</div> <!-- columns -->
</section>
