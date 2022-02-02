<?php
/**
 * The menu template.
 *
 * @package astra-child
 */

?>

<section class="menu-component">
	<?php if ( isset( $args['back_btn'] ) ) : ?>
		<div class="ast-container">
			<div class="ast-row">
				<div class="ast-col-xs-12">
					<a href="<?php echo esc_attr( $args['back_btn']['url'] ); ?>" class="btn btn-link btn-back">
						<?php echo esc_attr( $args['back_btn']['label'] ); ?>
					</a>
				</div>
			</div> <!-- ast-row -->
		</div> <!-- ast-container -->
	<?php endif; ?>

	<?php
	// Show location if it's set.
	if ( ! is_null( $args['location'] ) ) {
		get_template_part( 'views/components/location-banner/location-banner', '', array( 'location' => $args['location'] ) );
	}
	?>

	<div class="ast-container">
		<div class="ast-row">
			<?php
			$terms = get_terms(
				array(
					'taxonomy'   => 'astc_food_and_drink_catergory',
					'hide_empty' => true,
				)
			);

			if ( ! empty( $terms ) && 0 < count( $terms ) ) :
				?>
				<div class="ast-col-xs-12 ast-col-md-3">
					<div class="quick-links">
						<p class="quick-links__sidebar-title">Quick Links</p>

						<ul class="quick-links__list">
							<?php foreach ( $terms as $tax_term ) : ?>
								<li class="quick-links__list-item">
									<a href="/food-drink#<?php echo esc_attr( $tax_term->slug ); ?>" class="quick-links__list-item__link">
										<?php echo esc_attr( $tax_term->name ); ?>
									</a>
								</li> <!-- quick-links__list-item -->
							<?php endforeach; ?>
						</ul> <!-- quick-links__list -->
					</div> <!-- quick-links -->
				</div> <!-- ast-col -->
			<?php endif; ?>

			<div class="ast-col-xs-12 ast-col-md-7">
				<div class="menu">
					<div class="menu__info">
						<p class="overline">Hudsons Canada's Pub</p>

						<h2 class="heading-three menu__info__title"><?php echo esc_attr( $args['menu_name'] ); ?></h2>

						<p class="excerpt"><?php echo esc_attr( $args['menu_excerpt'] ); ?></p>
					</div> <!-- menu__info -->

					<?php if ( ! empty( $args['menu_list'] ) ) : ?>
						<ul class="menu__items">
							<?php
							foreach ( $args['menu_list'] as $menu_item ) :
								$menu_item = $menu_item['list_item'];
								?>
								<li class="menu__item">
									<div class="menu__item__info">
										<p class="menu__item__info__name"><?php echo esc_attr( $menu_item['name'] ); ?></p>
										<div class="menu__item__info__description body-small">
											<?php
											// phpcs:ignore
											echo $menu_item['description'];
											?>
										</div> <!-- menu__item__info__description -->
									</div> <!-- menu__item_info -->

									<p class="menu__item__price"><?php echo esc_attr( $menu_item['price'] ); ?></p>
								</li> <!-- menu__item -->
							<?php endforeach; ?>
						</ul> <!-- menu__items -->
					<?php endif; ?>

				</div> <!-- menu -->
			</div>
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</section>
