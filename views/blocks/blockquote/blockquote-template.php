<?php
/**
 * The blockquote block template file.
 *
 * @package astra-child
 */

?>

<section class="blockquote-block">
	<div class="ast-container">
		<div class="ast-row">
			<?php // emtpy div for centering blockquote. ?>
			<div class="ast-col-xs-12 ast-col-md-2 ast-col-lg-3"></div>

			<div class="ast-col-xs-12 ast-col-md-8 ast-col-lg-6">
				<blockquote class="blockquote">
					<p class="quote"><?php echo esc_attr( $args['quote'] ); ?></p>
					<footer class="author">~ <?php echo esc_attr( $args['author'] ); ?></footer>
				</blockquote>
			</div>

			<?php // emtpy div for centering blockquote. ?>
			<div class="ast-col-xs-12 ast-col-md-2 ast-col-lg-3"></div>
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</section>
