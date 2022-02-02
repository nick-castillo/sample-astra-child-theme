<?php
/**
 * Testimonials template block file.
 *
 * @package astra-child
 */

$testimonials = $args['testimonials'];

?>

<section class="testimonials-block">
	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12">
				<div class="testimonial-header">
					<p class="overline testimonial-header__overline">Testimonials</p>

					<h2 class="testimonail-header__title">What customers are saying</h2>
				</div> <!-- testimonial-headers -->

				<ul class="testimonials">
					<?php foreach ( $testimonials as $testimonial ) : ?>
						<li class="testimonial">
							<div class="testimonial__content">
								<p class="testimonial__excerpt"><?php echo esc_attr( $testimonial['excerpt'] ); ?></p>
								<p class="testimonial__name">~ <?php echo esc_attr( $testimonial['name'] ); ?></p>
							</div> <!-- testimonial__content -->
						</li>
					<?php endforeach; ?>
				</ul>
			</div> <!-- ast-col -->
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</section>
