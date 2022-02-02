<?php // phpcs:ignore
/**
 * The template for displaying single astc_food_and_drinks post.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

astra_primary_content_top();

get_template_part( 'views/components/menu/menu' );

astra_primary_content_bottom();

get_footer();
