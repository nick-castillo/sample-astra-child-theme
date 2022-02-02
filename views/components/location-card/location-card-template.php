<?php
/**
 * The location card template file.
 *
 * @package astra-child
 */

$location_card = $args;

?>

<div class="location-card">
	<a
	href="<?php echo esc_attr( get_the_permalink( $location_card['wp_post'] ) ); ?>"
	class="location-card__img"
	style="background-image: url(<?php echo esc_attr( $location_card['featured_img']['url'] ); ?>)"></a>

	<div class="location-card__info">
		<h2 class="location-card__title"><?php echo esc_attr( $location_card['wp_post']->post_title ); ?></h2>

		<div class="location-card__meta">
			<div class="location-card__meta-info location-card__meta-info--hours">
				<p class="overline">Hours of operation</p>

				<p class="location-card__operation-hours location-card__meta-text">
					<?php echo esc_attr( $location_card['meta']['hours_of_operation'] ); ?>
				</p>
			</div> <!-- location-card__hours -->

			<div class="location-card__meta-info location-card__meta-info--address">
				<p class="overline">Address</p>

				<p class="location-card__address location-card__meta-text">
					<?php
					echo esc_attr( $location_card['meta']['street_address'] ) . ' ' . esc_attr( $location_card['meta']['city'] ) . ', ' . esc_attr( $location_card['meta']['province'] ) . ' ' . esc_attr( $location_card['meta']['postal_code'] );
					?>
				</p>
			</div> <!-- location-card__hours -->

			<div class="location-card__meta-info location-card__meta-info--phone-numbers">
				<div class="location-card__tel-number">
					<p class="overline">Phone Number</p>

					<p class="location-card__meta-text">
					<?php
					echo esc_attr( $location_card['meta']['phone_number'] );
					?>
					</p>
				</div> <!-- location-card__tel-number -->

				<div class="location-card__tel-number">
					<p class="overline">Fax Number</p>

					<p class="location-card__meta-text">
					<?php
					echo esc_attr( $location_card['meta']['fax_number'] );
					?>
					</p>
				</div> <!-- location-card__tel-number -->
			</div> <!-- location-card__hours -->
		</div>
	</div> <!-- location-card__info -->

	<?php if ( 0 < count( $location_card['ctas'] ) ) : ?>
		<ul class="location-card__ctas">
			<?php foreach ( $location_card['ctas'] as $cta ) : ?>
				<li class="location-card__cta">
					<a href="<?php echo esc_attr( $cta['cta_url'] ); ?>" class="ast-button ast-btn-secondary">
						<?php echo esc_attr( $cta['cta_label'] ); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</div> <!-- location-card -->
