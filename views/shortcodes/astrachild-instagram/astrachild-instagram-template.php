<?php
/**
 * The astrchild_instagram template file.
 *
 * @package astra-child
 */

$ig_posts = $args;

?>

<section class="ig-wall">
	<h3 class="heading-four ig-wall__title">Follow us on Instagram!</h3>

	<div class="ig-wall__posts">
		<?php
		$counter = 1;

		$ig_first = null;

		$ig_middle = array();

		$ig_last = null;
		foreach ( $ig_posts as $ig_post ) {
			if ( 7 < $counter ) {
				continue;
			}

			if ( 1 === $counter ) {
				$ig_first = $ig_post;
				$counter ++;
				continue;
			}

			if ( 6 === $counter ) {
				$ig_last = $ig_post;
				$counter ++;
				continue;
			}

			if ( 4 !== count( $ig_middle ) ) {
				$ig_middle[] = $ig_post;
			}

			$counter ++;
		}
		?>

		<div class="ig-post ig-post--first">
			<a class="ig-post__media" href="<?php echo esc_attr( $ig_first->permalink ); ?>" style="background-image: url(<?php echo esc_attr( $ig_first->media_url ); ?>)" rel="noopener" target="_blank"></a>
		</div>

		<div class="ig-post ig-post--middle">
			<?php foreach ( $ig_middle as $ig_middle_post ) : ?>
				<a class="ig-post__media" href="<?php echo esc_attr( $ig_middle_post->permalink ); ?>" style="background-image: url(<?php echo esc_attr( $ig_middle_post->media_url ); ?>)" rel="noopener" target="_blank"></a>
			<?php endforeach; ?>
		</div>

		<div class="ig-post ig-post--last">
			<a class="ig-post__media" href="<?php echo esc_attr( $ig_last->permalink ); ?>" style="background-image: url(<?php echo esc_attr( $ig_last->media_url ); ?>)" rel="noopener" target="_blank"></a>
		</div>
	</div> <!-- ig-posts -->
</section>
