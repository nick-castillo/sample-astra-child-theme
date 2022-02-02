<?php
/**
 * The header template layout file.
 *
 * @package astra-child
 */

$header = $args;
?>

<header id="main-header">
	<?php get_template_part( '/views/components/header-topbar/header-topbar', '' ); ?>

	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12">
				<div class="main-header__content">
					<a href="<?php echo esc_attr( home_url( '/' ) ); ?>" class="logo-container">
						<img
						src="<?php echo esc_attr( $header['logo']['url'] ); ?>"
						alt="<?php echo esc_attr( $header['logo']['alt'] ); ?>"
						width="<?php echo esc_attr( $header['logo']['width'] ); ?>"
						height="<?php echo esc_attr( $header['logo']['height'] ); ?>"
						class="logo" />
					</a>

					<button class="primary-menu__btn-open astra-icon-menu"></button>

					<nav class="primary-menu hidden">
						<div class="primary-menu__top">
							<div class="search-bar">
								<form action="<?php echo esc_attr( home_url( '/' ) ); ?>" class="search-bar__form" method="get">
									<input type="submit" value="Search" class="search-bar__form__submit">

									<label for="s">
										<span class="screen-reader-text">Search</span>
										<input type="text" title="Search" name="s" value="" id="s" placeholder="Search" class="search-bar__form__field">

										<img
										src="<?php echo esc_attr( ASTRA_CHILD_THEME_BASE_URL . '/resources/images/search-icon.svg' ); ?>"
										width="16"
										height="16"
										class="search-icon" />
									</label>
								</form>
							</div> <!-- search-bar -->

							<button class="primary-menu__close-btn astra-icon-close"></button>
						</div> <!-- primary-menu__top -->

						<ul class="primary-menu__items">
							<?php foreach ( $header['menu_items'] as $menu_item ) : ?>
								<li class="primary-menu__item">
									<?php if ( ! $menu_item->has_sub_menu ) : ?>
										<?php
										$new_tab = '';

										if ( ! empty( $menu_item->target ) ) {
											$new_tab = 'target="_blank" rel="noopener"';
										}
										?>

										<a href="<?php echo esc_attr( $menu_item->url ); ?>" class="primary-menu__item-link" <?php echo esc_attr( $new_tab ); ?>>
											<?php echo esc_attr( $menu_item->title ); ?>
										</a>
									<?php else : ?>
										<?php if ( 'dropdown' === $menu_item->sub_menu_type ) : ?>
											<button id="dropdown-<?php echo esc_attr( $menu_item->ID ); ?>"class="primary-menu__item-link primary-menu__item-btn--<?php echo esc_attr( $menu_item->sub_menu_type ); ?>">
												<span class="label">
													<?php echo esc_attr( $menu_item->title ); ?>
												</span> <!-- label -->

												<span class="icon astra-icon-down_arrow"></span>
											</button>

											<div class="dropdown-container">
												<ul class="dropdown" data-submenu="dropdown-<?php echo esc_attr( $menu_item->ID ); ?>">
													<?php foreach ( $menu_item->sub_menu_items as $sub_menu_item ) : ?>
														<li class="dropdown__item">
															<?php
															$new_tab = '';

															if ( ! empty( $sub_menu_item['link']['target'] ) ) {
																$new_tab = 'target="_blank" rel="noopener"';
															}
															?>

															<a href="<?php echo esc_attr( $sub_menu_item['link']['url'] ); ?>" class="dropdown__link" <?php echo esc_attr( $new_tab ); ?>>
																<?php echo esc_attr( $sub_menu_item['link']['title'] ); ?>
															</a>
														</li>
													<?php endforeach; ?>
												</ul> <!-- dropdown -->
											</div> <!-- dropdown-container -->
										<?php else : ?>
											<button id="mega-menu-<?php echo esc_attr( $menu_item->ID ); ?>" class="primary-menu__item-link primary-menu__item-btn--<?php echo esc_attr( $menu_item->sub_menu_type ); ?>">
												<span class="label">
													<?php echo esc_attr( $menu_item->title ); ?>
												</span>

												<span class="icon astra-icon-down_arrow"></span>
											</button>

											<ul class="mega-menu__items mega-menu__items--hidden" data-submenu="mega-menu-<?php echo esc_attr( $menu_item->ID ); ?>">
												<?php foreach ( $menu_item->sub_menu_items as $sub_menu_item ) : ?>
												<li class="mega-menu__item">
													<?php
													$sub_menu_item = $sub_menu_item['mega_menu_item'];

													$new_tab = '';

													if ( ! empty( $sub_menu_item['link']['target'] ) ) {
														$new_tab = 'target="_blank" rel="noopener"';
													}
													?>

													<a href="<?php echo esc_attr( $sub_menu_item['link']['url'] ); ?>" class="mega-menu__link" <?php echo esc_attr( $new_tab ); ?>>
														<img
														src="<?php echo esc_attr( $sub_menu_item['image']['url'] ); ?>"
														alt="<?php echo esc_attr( $sub_menu_item['image']['alt'] ); ?>"
														width="<?php echo esc_attr( $sub_menu_item['image']['width'] ); ?>"
														height="<?php echo esc_attr( $sub_menu_item['image']['height'] ); ?>"
														class="mega-menu__link__img" />

														<span class="mega-menu__link__label">
															<?php echo esc_attr( $sub_menu_item['link']['title'] ); ?>
														</span>
													</a>
												</li>
											<?php endforeach; ?>
											</ul>
										<?php endif; ?>
									<?php endif; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</nav>
				</div> <!-- main-header__content -->
			</div> <!-- col-12 -->
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</header>
