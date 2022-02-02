<?php
/**
 * The single column content block file.
 *
 * @package astra-child
 */

$single_column_content = get_field( 'single_column_content' );

$content_col_classes = 'ast-col-xs-12';

$content_size = $single_column_content['content_size'];

switch ( $content_size ) {
	case 'col-80':
		$content_col_classes .= ' ast-col-md-10';
		break;
	default:
		$content_col_classes .= ' ast-col-md-10 ast-col-lg-8';
}

switch ( $single_column_content['background'] ) {
	case 'bg-dark-col-12':
		$bg_color = 'bg-dark bg--on-col';
		break;
	case 'bg-dark-full-width':
		$bg_color = 'bg-dark';
		break;
	default:
		$bg_color = 'bg-white';
}

\AstraChild\Providers\ACFBlocks::render(
	'single-column-content',
	array(
		'content'                 => $single_column_content['block_content'],
		'bg_color'                => $bg_color,
		'content_size'            => $content_size,
		'content_container_class' => $content_col_classes,
	)
);
