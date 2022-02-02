<?php
/**
 * The footer template layout file.
 *
 * @package astra-child
 */

$footer = $args;

echo do_shortcode( '[astrachild_instagram]' );
?>

<section class="astra-child-footer">
	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12 ast-col-lg-6">
				<div class="main-content">
					<a href="<?php echo esc_attr( home_url( '/' ) ); ?>" class="main-content__logo-link">
						<img src="<?php echo esc_attr( $footer['logo']['url'] ); ?>" alt="<?php echo esc_attr( $footer['logo']['alt'] ); ?>" class="logo" />
					</a>

					<div class="contact-info">
						<p class="body-small contact-info__meta contact-info__meta--address">
							HQ Address: <?php echo esc_attr( $footer['address'] ); ?>
						</p>

						<p class="body-small contact-info__meta contact-info__meta--phone">
							Telephone: <?php echo esc_attr( $footer['phone'] ); ?>
						</p>

						<p class="body-small contact-info__meta contact-info__meta--fax">
							Fax: <?php echo esc_attr( $footer['fax'] ); ?>
						</p>

						<p class="body-small contact-info__meta contact-info__meta--email">
							Email: <?php echo esc_attr( $footer['email'] ); ?>
						</p>
					</div> <!-- contact-info -->

					<p class="copyright body-small">
						<?php echo esc_attr( gmdate( 'Y' ) ); ?> Hudsons Canada's Pub. All rights reserved.
					</p>
				</div> <!-- main-content -->
			</div> <!-- ast-col-xs-12 ast-col-lg-6 -->

			<div class="ast-col-xs-12 ast-col-lg-6">
				<div class="footer-menus">
					<?php
					foreach ( $footer['menus'] as $footer_menu ) :
						$footer_menu = $footer_menu['footer_menu'];
						?>
						<nav class="footer-menu">
							<h6 class="overline"><?php echo esc_attr( $footer_menu['label'] ); ?></h6>

							<ul class="footer-menu__links">
								<?php foreach ( $footer_menu['menu_items'] as $menu_item ) : ?>
									<li class="footer-menu__link-container">
										<?php
										$new_tab = '';
										if ( ! empty( $menu_item['link']['target'] ) ) {
											$new_tab = 'target="_blank" rel="noopener"';
										}
										?>

										<a
										href="<?php echo esc_attr( $menu_item['link']['url'] ); ?>"
										class="footer-menu__link body-small"
										<?php
										// phpcs:ignore
										echo ( $new_tab );
										?>
										>
											<?php echo esc_attr( $menu_item['link']['title'] ); ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</nav> <!-- footer-menu -->
					<?php endforeach; ?>
				</div> <!-- footer-menus -->
			</div> <!-- ast-col-xs-12 ast-col-lg-6 -->
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</section>
