<?php
/**
 * The html for [astrchild_button]
 *
 * @package astra-child
 */

$new_tab = '';
if ( $args['new_tab'] ) {
	$new_tab = 'target="_blank" rel="noopener"';
}

?>

<a class="btn btn-<?php echo esc_attr( $args['type'] ); ?>" href="<?php echo esc_attr( $args['url'] ); ?>" <?php echo esc_attr( $new_tab ); ?>>
	<?php echo esc_attr( $args['label'] ); ?>
</a>
