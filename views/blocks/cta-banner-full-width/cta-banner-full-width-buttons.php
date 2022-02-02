<?php
/**
 * The cta banner full width buttons file.
 *
 * @package astra-child
 */

?>

<div class="cta-banner-full-width-buttons">
	<?php
	$primary_btn_new_tab = '';

	if ( ! empty( $args['primary'] ) ) {
		$primary_btn_new_tab = 'target="_blank"';
	}
	?>
	<a href="<?php echo esc_attr( $args['primary']['url'] ); ?>" class="ast-button ast-btn-primary" <?php echo esc_attr( $primary_btn_new_tab ); ?>>
		<?php echo esc_attr( $args['primary']['title'] ); ?>
	</a>

	<?php if ( ! empty( $args['secondary'] ) ) : ?>
		<?php
		$secondary_btn_new_tab = '';

		if ( ! empty( $args['secondary'] ) ) {
			$secondary_btn_new_tab = 'target="_blank"';
		}
		?>
		<a href="<?php echo esc_attr( $args['secondary']['url'] ); ?>" class="ast-button ast-btn-secondary" <?php echo esc_attr( $secondary_btn_new_tab ); ?>>
			<?php echo esc_attr( $args['secondary']['title'] ); ?>
		</a>
	<?php endif; ?>
</div> <!-- cta-banner-full-width-buttons -->
