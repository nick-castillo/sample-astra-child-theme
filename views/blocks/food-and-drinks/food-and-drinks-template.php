<?php
/**
 * The food and drinks template file.
 *
 * @package astra-child
 */

$food_and_drinks = $args;
?>

<section class="food-and-drinks-block">
	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12">
				<ul class="food-and-drinks-list">
					<?php foreach ( $food_and_drinks as $food_and_drink ) : ?>
						<li class="food-and-drink">
							<h3 class="heading-six food-and-drinks__title" id="<?php echo esc_attr( $food_and_drink['food_and_drink_category']->slug ); ?>">
								<?php echo esc_attr( $food_and_drink['food_and_drink_category']->name ); ?>
							</h3>

							<ul class="food-and-drink__menus">
								<?php foreach ( $food_and_drink['menus'] as $food_drink_menu ) : ?>
									<li class="food-and-drink__menu">
										<a href="<?php echo esc_attr( get_permalink( $food_drink_menu ) ); ?>" class="food-and-drink__menu-img-link">
											<?php echo get_the_post_thumbnail( $food_drink_menu ); ?>
										</a>

										<div class="food-and-drink__menu-info">
											<h5 class="food-and-drink__menu-name">
												<?php echo esc_attr( $food_drink_menu->post_title ); ?>
											</h5>

											<p class="food-and-drink__menu-excerpt">
												<?php echo esc_attr( $food_drink_menu->post_excerpt ); ?>
											</p>

											<a href="<?php echo esc_attr( get_permalink( $food_drink_menu ) ); ?>" class="food-and-drink__menu-link">
												View Menu
											</a>
										</div> <!-- food-and-drink__menu-info -->
									</li> <!-- food-and-drink__menu -->
								<?php endforeach; ?>
							</ul> <!-- food-and-drink__menus -->
						</li> <!-- food-and-drink -->
					<?php endforeach; ?>
				</ul> <!-- food-and-drinks-list -->
			</div> <!-- ast-col-xs-12 -->
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</section>
