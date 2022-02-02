<?php
/**
 * The header-topbar-template file.
 *
 * Render the HTML for the header-topbar.
 *
 * @package astra-child
 */

?>

<section class="header-topbar">
	<div class="annoucement">
		<div class="ast-container">
			<div class="ast-row">
					<?php if ( empty( $args['url'] ) ) : ?>
						<p class="annoucement_message body-small"><?php echo esc_attr( $args['message'] ); ?></p>
					<?php else : ?>
						<?php
						$new_tab = '';

						if ( $args['open_url_in_a_new_tab'] ) {
							$new_tab = 'target="_blank"';
						}
						?>

						<a
						href="<?php echo esc_attr( $args['url'] ); ?>"
						<?php echo esc_attr( $new_tab ); ?>"
						class="annoucement_message body-small">
							<?php echo esc_attr( $args['message'] ); ?>
						</a>
					<?php endif; ?>
			</div> <!-- ast-row -->
		</div> <!-- ast-container -->
	</div> <!-- announcement -->

	<div class="search-bar">
		<button class="search-bar__toggle">
			<img
			src="<?php echo esc_attr( ASTRA_CHILD_THEME_BASE_URL . '/resources/images/search-icon.svg' ); ?>"
			width="16"
			height="16"
			class="search-icon" />
		</button>

		<form action="<?php echo esc_attr( home_url( '/' ) ); ?>" class="search-bar__form" method="get">
			<input type="submit" value="Search" class="search-bar__form__submit">

			<label for="s">
				<span class="screen-reader-text">Search</span>
				<input type="text" title="Search" name="s" value="" id="s" placeholder="Search" class="search-bar__form__field">
			</label>
		</form>
	</div> <!-- search-bar -->
</section>
