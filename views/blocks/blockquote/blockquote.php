<?php
/**
 * The blockquote block file.
 *
 * @package astra-child
 */

$author = get_field( 'author' );
$quote  = get_field( 'quote' );

\AstraChild\Providers\ACFBlocks::render(
	'blockquote',
	array(
		'author' => $author,
		'quote'  => $quote,
	)
);
