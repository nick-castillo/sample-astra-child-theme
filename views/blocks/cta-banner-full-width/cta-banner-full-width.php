<?php
/**
 * The CTA banner full width block.
 *
 * @package astra-child
 */

$cta = get_field( 'cta_banner_full_width' );

if ( empty( $cta ) ) {
	$cta = get_field( 'cta_banner_full_width', 'option' );
}

$section_class = 'cta-banner-full-width-block';

$section_class .= " --align-content-{$cta['content_alignment']}";

if ( ! empty( $cta['cta_image'] ) ) {
	$section_class .= ' --has-img';

	$section_class .= " --align-img-{$cta['image_position']}";
}

if ( 'colour' === $cta['cta_background_type'] ) {
	$section_class .= ' --bg-colour-' . $cta['cta_background_colour'];
}

\AstraChild\Providers\ACFBlocks::render(
	'cta-banner-full-width',
	array(
		'cta'           => $cta,
		'section_class' => $section_class,
	)
);
