<?php
/**
 * Single columng content template file.
 *
 * @package astra-child
 */

?>

<section class="single-column-content-block">
	<div class="block-content <?php echo esc_attr( $args['bg_color'] ); ?>"">
		<div class="ast-container">
			<div class="ast-row">
				<?php if ( 'col-80' === $args['content_size'] ) : ?>
					<div class="ast-col-xs-12 ast-col-md-1"></div>
				<?php else : ?>
					<div class="ast-col-xs-12 ast-col-md-1 ast-col-lg-2"></div>
				<?php endif; ?>

				<div class="<?php echo esc_attr( $args['content_container_class'] ); ?>">
					<?php
					// phpcs:ignore
					echo $args['content'];
					?>
				</div> <!-- col -->

				<?php if ( 'col-80' === $args['content_size'] ) : ?>
					<div class="ast-col-xs-12 ast-col-md-1"></div>
				<?php else : ?>
					<div class="ast-col-xs-12 ast-col-md-1 ast-col-lg-2"></div>
				<?php endif; ?>
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- block-content -->
</section>

