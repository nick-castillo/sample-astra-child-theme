<?php
/**
 * The article card mini component file.
 *
 * @package astra-child
 */

$article = $args['article'];

if ( 'object' !== gettype( $article ) ) {
	return;
}

ast_child_render_component(
	'article-card-mini',
	array(
		'article' => $article,
	)
);
