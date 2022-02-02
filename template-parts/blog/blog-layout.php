<?php
/**
 * Template for Blog
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2020, Astra
 * @link        https://wpastra.com/
 * @since       Astra 1.0.0
 */

?>

<div class="ast-col-xs-12 ast-col-sm-1"></div>

<div class="ast-col-xs-12 ast-col-sm-10">
	<?php
	get_template_part(
		'views/components/article-card/article-card',
		'',
		array( 'article' => $post )
	);
	?>
</div> <!-- ast-col -->

<div class="ast-col-xs-12 ast-col-sm-1"></div>
