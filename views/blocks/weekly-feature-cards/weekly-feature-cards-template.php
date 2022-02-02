<?php
/**
 * The weekly feature cards template file.
 *
 * @package astra-child
 */

$weekly_feature_cards = $args;
?>

<section class="weekly-feature-cards-block">
	<div class="ast-container">
		<div class="ast-row">
			<div class="ast-col-xs-12 ast-col-md-1"></div>

			<div class="ast-col-xs-12 ast-col-md-10">
				<ul class="weekly-feature-cards">
					<?php foreach ( $weekly_feature_cards as $weekly_feature_card ) : ?>
						<li class="weekly-feature-card">
							<?php
							$weekly_feature = $weekly_feature_card['weekly_feature_card']['weekly_feature_post'];

							$weekly_feature_info = get_field( 'weekly_feature', $weekly_feature->ID );

							if ( empty( $weekly_feature_info ) ) {
								continue;
							}

							get_template_part(
								'views/components/generic-post-card/generic-post-card',
								'',
								array(
									'title'          => $weekly_feature->post_title,
									'content'        => $weekly_feature_info['feature_content'],
									'has_cta'        => $weekly_feature_card['weekly_feature_card']['card_has_cta'],
									'cta'            => $weekly_feature_card['weekly_feature_card']['feature_card_cta'],
									'featured_image' => array(
										'url'    => $weekly_feature_info['feature_image']['url'],
										'alt'    => $weekly_feature_info['feature_image']['alt'],
										'height' => $weekly_feature_info['feature_image']['height'],
										'width'  => $weekly_feature_info['feature_image']['width'],
									),
								)
							);
							?>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="ast-col-xs-12 ast-col-md-1"></div>
		</div> <!-- ast-row -->
	</div> <!-- ast-container -->
</section>
