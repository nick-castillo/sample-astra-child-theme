<?php
/**
 * The content file.
 *
 * A collection of helper functions to get or format content.
 *
 * @package ast-child
 */

/**
 * Get the testimonial excerpt.
 *
 * @param object $testimonial The astc_testimonials post object instance.
 * @return string
 */
function ast_child_get_testimonial( $testimonial ) {
	return get_field( 'testimonial', $testimonial->ID );
}

/**
 * Get the featured image info.
 *
 * @param object $wp_post_obj A WP post object.
 * @return array
 */
function ast_child_get_featured_img( $wp_post_obj ) {
	$post_thumbnail_id = get_post_thumbnail_id( $wp_post_obj );

	$image = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );

	if ( 'array' !== gettype( $image ) ) {
		return array(
			'url'    => '',
			'width'  => '',
			'height' => '',
		);
	}

	if ( 0 === count( $image ) ) {
		return array(
			'url'    => '',
			'width'  => '',
			'height' => '',
		);
	}

	if ( 4 > count( $image ) ) {
		return array(
			'url'    => '',
			'width'  => '',
			'height' => '',
		);
	}

	return array(
		'url'    => $image[0],
		'width'  => $image[1],
		'height' => $image[2],
	);
}

/**
 * Get the latest posts base on post_type.
 *
 * @param string $post_type The post type.
 * @param array  $args The wp_get_recent_posts args.
 * @return array
 */
function ast_child_get_latest_posts( $post_type = 'post', $args = null ) {
	$exclude_posts = array();

	$query_args = array(
		'numberposts' => 4,
		'post_status' => 'publish',
		'post_type'   => $post_type,
	);

	if ( ! is_null( $args ) ) {
		$query_args = array_merge( $query_args, $args );
	}

	$latest_posts = wp_get_recent_posts(
		$query_args,
		' OBJECT'
	);

	if ( ! $latest_posts ) {
		return array();
	}

	foreach ( $latest_posts as $index => $latest_post ) {
		$latest_post->featured_img = ast_child_get_featured_img( $latest_post );

		$latest_post->author_name = ast_child_get_post_author_name( $latest_post );

		$latest_post->terms = ast_child_get_post_terms( $latest_post, 'category' );

		$latest_posts[ $index ] = $latest_post;

		$exclude_posts[] = $latest_post->ID;
	}

	return array(
		'latest_posts'  => $latest_posts,
		'exclude_posts' => $exclude_posts,
	);
}

/**
 * Get the featured post.
 *
 * @return object
 */
function ast_child_get_featured_post() {
	$latest_post = get_field( 'featured_post', 'option' );

	if ( empty( $featured_post ) ) {
		$latest_post = wp_get_recent_posts(
			array(
				'numberposts' => 1,
				'post_status' => 'publish',
			),
			' OBJECT'
		);

		$latest_post = $latest_post[0];
	}

	$latest_post->terms = ast_child_get_post_terms( $latest_post, 'category' );

	$latest_post->featured_img = ast_child_get_featured_img( $latest_post );

	$latest_post->author_name = ast_child_get_post_author_name( $latest_post );

	return $latest_post;
}

/**
 * Get the author name for the post.
 *
 * @param object $post_object The WP post object instance.
 * @return string
 */
function ast_child_get_post_author_name( $post_object ) {
	return get_the_author_meta( 'display_name', $post_object );
}

/**
 * The terms associated to a post.
 *
 * @param object $post_object The WP post object.
 * @param string $terms_taxonomy The WP taxonomy slug.
 * @return array
 */
function ast_child_get_post_terms( $post_object, $terms_taxonomy ) {
	$post_terms = array();

	$query_terms = get_the_terms( $post_object, $terms_taxonomy );
	if ( ! is_wp_error( $query_terms ) && $query_terms ) {
		foreach ( $query_terms as $index => $query_term ) {
			if ( 'Uncategorized' === $query_term->name ) {
				continue;
			}

			$name = $query_term->name;
			$url  = get_term_link( $query_term );

			$post_terms[] = array(
				'name' => $name,
				'url'  => $url,
			);
		}
	}

	return $post_terms;
}
