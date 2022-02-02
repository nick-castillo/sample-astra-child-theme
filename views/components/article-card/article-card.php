<?php
/**
 * The article card component file.
 *
 * @package astra-child
 */

$article = $args['article'];

if ( 'object' !== gettype( $article ) ) {
	return;
}

$term_taxonomy = 'category';
if ( 'post' !== $article->post_type ) {
	$term_taxonomy = $args['article_taxonomy'];
}

ast_child_render_component(
	'article-card',
	array(
		'title'        => $article->post_title,
		'excerpt'      => $article->post_excerpt,
		'url'          => get_permalink( $article ),
		'terms'        => ast_child_get_post_terms( $article, $term_taxonomy ),
		'featured_img' => ast_child_get_featured_img( $article ),
	)
);
