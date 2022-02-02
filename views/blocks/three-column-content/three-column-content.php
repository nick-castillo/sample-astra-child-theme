<?php
/**
 * Three column content block file.
 *
 * @package astra-child
 */

$three_col_block = get_field( 'three_column_content' );

$data = array(
	'columns'       => array(),
	'section_intro' => null,
);

foreach ( $three_col_block['columns'] as $block_content ) {
	$column = array(
		'classes' => array(),
		'content' => null,
		'bg_img'  => null,
	);

	$block_content = $block_content['column'];

	if ( ! empty( $block_content['background_image'] ) ) {
		$column['classes'][] = 'column--has-bg-img';

		$column['bg_img'] = $block_content['background_image'];
	}

	if ( ! empty( $block_content['content'] ) ) {
		$column['content'] = $block_content['content'];

		$column['classes'][] = 'column--has-content';
	}

	if ( ! is_null( $column['content'] ) && ! is_null( $column['bg_img'] ) ) {
		$column['classes'][] = 'column--has-overlay';
	}

	$data['columns'][] = $column;
}

if ( $three_col_block['has_section_intro'] ) {
	$data['section_intro'] = $three_col_block['section_intro'];
}

\AstraChild\Providers\ACFBlocks::render(
	'three-column-content',
	$data
);
