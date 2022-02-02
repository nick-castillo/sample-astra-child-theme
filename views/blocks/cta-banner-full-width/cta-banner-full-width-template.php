<?php
/**
 * The cta banner full width template file.
 *
 * @package astra-child
 */

?>

<section class="<?php echo esc_attr( $args['section_class'] ); ?>">
	<?php
	$cta = $args['cta'];

	if ( empty( $cta['cta_image'] ) ) {
		get_template_part( 'views/blocks/cta-banner-full-width/cta-banner-full-width-content', '', $cta );
	} else {
		get_template_part( 'views/blocks/cta-banner-full-width/cta-banner-full-width-with-img', 'template', $cta );
	}
	?>
</section>
