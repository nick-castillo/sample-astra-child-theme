<?php
/**
 * The location banner template file.
 *
 * @package astra-child
 */

$location_banner = $args;

?>

<section class="location-banner">
	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12 ast-col-md-6">
				<div class="location-banner__header">
					<p class="overline">You're ordering from</p>
					<h2 class="location-banner__title heading-one"><?php echo esc_attr( $location_banner['wp_post']->post_title ); ?></h2>
				</div> <!-- location-banner__header -->
			</div> <!-- ast-col -->

			<div class="ast-col-xs-12 ast-col-md-6">
				<div class="location-banner__info">

					<div class="location-banner__meta">
						<div class="location-banner__meta-info location-banner__meta-info--hours">
							<p class="overline">Hours of operation</p>

							<p class="location-banner__operation-hours location-banner__meta-text">
								<?php echo esc_attr( $location_banner['meta']['hours_of_operation'] ); ?>
							</p>
						</div> <!-- location-banner__hours -->

						<div class="location-banner__meta-info location-banner__meta-info--address">
							<p class="overline">Address</p>

							<p class="location-banner__address location-banner__meta-text">
								<?php
								echo esc_attr( $location_banner['meta']['street_address'] ) . ' ' . esc_attr( $location_banner['meta']['city'] ) . ', ' . esc_attr( $location_banner['meta']['province'] ) . ' ' . esc_attr( $location_banner['meta']['postal_code'] );
								?>
							</p>
						</div> <!-- location-banner__hours -->

						<div class="location-banner__meta-info location-banner__meta-info--phone-numbers">
							<div class="location-banner__tel-number">
								<p class="overline">Phone Number</p>

								<p class="location-banner__meta-text">
								<?php
								echo esc_attr( $location_banner['meta']['phone_number'] );
								?>
								</p>
							</div> <!-- location-banner__tel-number -->

							<div class="location-banner__tel-number">
								<p class="overline">Fax Number</p>

								<p class="location-banner__meta-text">
								<?php
								echo esc_attr( $location_banner['meta']['fax_number'] );
								?>
								</p>
							</div> <!-- location-banner__tel-number -->
						</div> <!-- location-banner__hours -->
					</div>
				</div> <!-- location-banner__info -->
			</div> <!-- ast-col -->
		</div> <!-- ast-row -->
	</div> <!-- ast container -->
</section> <!-- location-banner -->
