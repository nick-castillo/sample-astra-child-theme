<?php
/**
 * The generic post card component file.
 *
 * @package astra-child
 */

$generic_post_card = $args;

if ( empty( $generic_post_card['title'] ) || empty( $generic_post_card['content'] ) ) {
	return;
}

ast_child_render_component( 'generic-post-card', $generic_post_card );
