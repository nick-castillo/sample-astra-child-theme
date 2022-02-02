<?php // phpcs:ignore
/**
 * The template for displaying single astc_locations post.
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

// Banner.
get_template_part( 'views/blocks/secondary-header/secondary-header' );

// Location details.
$location_name = get_the_title();

$location_info = get_field( 'location_info' );

$location_section_class = 'two-column-content-block two-column-content-block--reverse two-column-content-block--dark';
$location_media_type    = 'embed';
$location_embed_code    = $location_info['map_embed_code'];

$location_content = "
	<h2 class='location-name'>{$location_name}</h2>
	<p class='location-info location-info--address'>{$location_info['street_address']} {$location_info['city']}, {$location_info['province']} {$location_info['postal_code']}</p>
	<p class='location-info location-info--phone'>Phone: {$location_info['phone_number']}</p>
";

if ( ! empty( $location_info['fax_number'] ) ) {
	$location_content .= "<p class='location-info location-info--fax'>Fax: {$location_info['fax_number']}</p>";
}
$location_content .= "
	<div class='location-info__hours-container'>
		<p class='location-info location-info__label'>Hours:</p>
		<div class='location-info location-info--hours'>{$location_info['hours_of_operation']}</div>
	</div>
";

\AstraChild\Providers\ACFBlocks::render(
	'two-column-content',
	array(
		'section_class'    => $location_section_class,
		'block_content'    => $location_content,
		'block_media_type' => $location_media_type,
		'block_embed'      => $location_embed_code,
	)
);

// CTA Form.
get_template_part( 'views/blocks/cta-form/cta-form' );

// Team members.
if ( get_field( 'location_has_team_members' ) ) {
	$team_members = get_field( 'location_team_members' );

	foreach ( $team_members as $team_member ) {
		$team_member_section_class = 'two-column-content-block two-column-content-block--dark';
		$team_member_image         = $team_member['profile_pic'];

		$team_member_content = "
			<h2>{$team_member['name']}</h2>
			<p class='team-member__meta'>
				<span>What I do: {$team_member['what_i_do']}</span>
				<span>Go-to drink: {$team_member['go_to_drink']}</span>
				<span>Fave menu item: {$team_member['fave_menu_item']}</span>
				<span>I'm happiest when: {$team_member['hobby']}</span>
			</p>
		";

		\AstraChild\Providers\ACFBlocks::render(
			'two-column-content',
			array(
				'section_class'    => $team_member_section_class,
				'block_content'    => $team_member_content,
				'block_media_type' => 'image',
				'block_img'        => $team_member_image,
			)
		);
	}
}

astra_primary_content_bottom();

get_footer();
