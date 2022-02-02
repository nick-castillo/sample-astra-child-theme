<?php
/**
 * The templates file.
 *
 * A collection of helper function that deals with templates.
 *
 * @package astra-child
 */

/**
 * Pass in data to a component.
 *
 * @param string $component_slug The component slug.
 * @param array  $contents Any data we want to pass to the template.
 * @return void
 */
function ast_child_component( $component_slug, $contents = array() ) {
	$template_path = "views/components/{$component_slug}/{$component_slug}";

	get_template_part(
		$template_path,
		'',
		$contents
	);
}

/**
 * Render a component template file.
 *
 * @param string $component_slug The component slug.
 * @param array  $contents Any data we want to pass to the template.
 * @return void
 */
function ast_child_render_component( $component_slug, $contents = array() ) {
	$template_path = "views/components/{$component_slug}/{$component_slug}-template";

	get_template_part(
		$template_path,
		'',
		$contents
	);
}

/**
 * Render a shortcode template file.
 *
 * @param string $component_slug The shortcode slug.
 * @param array  $contents Any data we want to pass to the template.
 * @return void
 */
function ast_child_render_shortcode( $shortcode_slug, $contents = array() ) {
	$template_path = "views/shortcodes/{$shortcode_slug}/{$shortcode_slug}-template";

	get_template_part(
		$template_path,
		'',
		$contents
	);
}
