<?php
/**
 * The lastest news preview file.
 *
 * @package astra-child
 */

$featured_post = ast_child_get_featured_post();

$latest_posts = ast_child_get_latest_posts();

ast_child_render_component(
	'latest-news-preview',
	array(
		'featured_post' => $featured_post,
		'latest_posts'  => $latest_posts,
	)
);

