<?php
/**
 * The locations template file.
 *
 * @package astra-child
 */

$locations = $args;
?>

<section class="locations-block">
	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12">
				<ul class="locations">
					<?php
					foreach ( $locations  as $location ) {
						$location = $location['location'];

						$location_info = get_field( 'location_info', $location->ID );

						$featured_image = ast_child_get_featured_img( $location );

						$location_ctas = array();

						$curbside_page = get_page_by_title( 'Curbside' );

						if ( ! empty( $curbside_page ) && $location_info['has_curbside_pickup'] ) {
							$location_ctas[] = array(
								'cta_label' => 'Curbside Pickup',
								'cta_url'   => get_the_permalink( $curbside_page ) . "?location={$location->post_name}",
							);
						}

						if ( $location_info['has_skip_the_dishes'] ) {
							$location_ctas[] = array(
								'cta_label' => 'Skip the Dishes',
								'cta_url'   => $location_info['skip_the_dishes_url'],
							);
						}

						$location_ctas[] = array(
							'cta_label' => 'Location details',
							'cta_url'   => get_the_permalink( $location ),
						);

						ast_child_component(
							'location-card',
							array(
								'wp_post'      => $location,
								'meta'         => $location_info,
								'ctas'         => $location_ctas,
								'featured_img' => $featured_image,
							)
						);
					}
					?>
				</ul>
			</div> <!-- ast-col -->
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</section>
