<?php
/**
 * The latest news block file.
 *
 * @package astra-child
 */

$latest_news_block = get_field( 'latest_news_block' );
if ( empty( $latest_news_block['featured_post'] ) ) {
	return;
}

$latest_news = array(
	'title'   => $latest_news_block['featured_post']->post_title,
	'excerpt' => $latest_news_block['featured_post']->post_excerpt,
	'url'     => get_permalink( $latest_news_block['featured_post'] ),
	'img'     => get_the_post_thumbnail( $latest_news_block['featured_post'], 'full' ),
);

$latest_news_categories = ast_child_get_post_terms( $latest_news_block['featured_post'], 'category' );

\AstraChild\Providers\ACFBlocks::render(
	'latest-news',
	array(
		'latest_news_block' => array(
			'section_title'   => $latest_news_block['section_title'],
			'section_excerpt' => $latest_news_block['section_excerpt'],
			'featured_post'   => $latest_news,
		),
	)
);
