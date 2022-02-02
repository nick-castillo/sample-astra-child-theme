<?php
/**
 * The two column section head template file.
 *
 * @package astra-child
 */

?>

<section class="two-column-section-head-block">
	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12 ast-col-md-1"></div>

			<div class="ast-col-xs-12 ast-col-md-10">
				<div class="ast-row">
					<h2 class="ast-col-xs-12 ast-col-md-6">
						<?php echo esc_attr( $args['section_title'] ); ?>
					</h2>

					<div class="ast-col-xs-12 ast-col-md-6">
						<?php
						// phpcs:ignore
						echo $args['section_content'];
						?>
					</div>
				</div> <!-- ast-row -->
			</div> <!-- ast-col -->

			<div class="ast-col-xs-12 ast-col-md-1"></div>
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</section>
