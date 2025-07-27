<?php
/**
 * Title: Trip List
 * Slug: travelvista/trip-list
 * Categories: travelvista
 * @package travelvista
 * @since 1.0.0
 */
$pluginsList = get_option( 'active_plugins' );
$travelvista_plugin = 'wp-travel/wp-travel.php';
$results = in_array( $travelvista_plugin , $pluginsList);
if ( $results )  {
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"theme","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.6"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"0","bottom":"0"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-theme-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30);font-size:12px;font-style:normal;font-weight:700;line-height:1.6"><strong><?php echo esc_html__('Explore', 'travelvista'); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--70);font-style:normal;font-weight:600;line-height:1.1"><?php echo esc_html__('Explore Your Trips', 'travelvista'); ?><br></h2>
<!-- /wp:heading -->

<!-- wp:wp-travel-blocks/trips-list {"query":{"numberOfItems":4,"orderBy":"title","order":"asc"},"layoutType":"layout-three","cardLayout":"slider-view","style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} /--></div>
<!-- /wp:group -->
<?php } else{?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"theme","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.6"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"0","bottom":"0"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-theme-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30);font-size:12px;font-style:normal;font-weight:700;line-height:1.6"><strong><?php echo esc_html__('Explore', 'travelvista'); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--70);font-style:normal;font-weight:600;line-height:1.1"><?php echo esc_html__('Explore Your Trips', 'travelvista'); ?><br></h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"className":"has-box-shadow","style":{"spacing":{"blockGap":"0"},"border":{"radius":"10px"}}} -->
<div class="wp-block-column has-box-shadow" style="border-radius:10px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/background.jpg","id":3094,"dimRatio":50,"isUserOverlayColor":true,"minHeight":321,"minHeightUnit":"px","contentPosition":"bottom center","sizeSlug":"large","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-top-left-radius:10px;border-top-right-radius:10px;min-height:321px"><img class="wp-block-cover__image-background wp-image-3094 size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/background.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"assets-twelve","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-assets-twelve-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"trip-days is-style-default","style":{"typography":{"fontSize":"13px"}}} -->
<p class="trip-days is-style-default" style="font-size:13px"><?php echo esc_html__('5 Days 4 nights', 'travelvista'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"trip-man"} -->
<p class="trip-man"><?php echo esc_html__('7', 'travelvista'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","bottom":"var:preset|spacing|60","top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"21px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);font-size:21px;font-style:normal;font-weight:600"><strong><?php echo esc_html__('Annapurna Circuit Trek', 'travelvista'); ?></strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__('Best Season: Summe', 'travelvista'); ?>r</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#ee8f00"},"elements":{"link":{"color":{"text":"#ee8f00"}}},"typography":{"fontSize":"21px"}}} -->
<p class="has-text-color has-link-color" style="color:#ee8f00;font-size:21px"><?php echo esc_html__('★★★★★', 'travelvista'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40)"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__('View Details', 'travelvista'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|assets-twelve"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"assets-twelve","fontSize":"medium"} -->
<p class="has-assets-twelve-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__('$ 200', 'travelvista'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"has-box-shadow","style":{"spacing":{"blockGap":"0"},"border":{"radius":"10px"}}} -->
<div class="wp-block-column has-box-shadow" style="border-radius:10px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/background.jpg","id":3094,"dimRatio":50,"isUserOverlayColor":true,"minHeight":321,"minHeightUnit":"px","contentPosition":"bottom center","sizeSlug":"large","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-top-left-radius:10px;border-top-right-radius:10px;min-height:321px"><img class="wp-block-cover__image-background wp-image-3094 size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/background.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"assets-twelve","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-assets-twelve-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"trip-days is-style-default","style":{"typography":{"fontSize":"13px"}}} -->
<p class="trip-days is-style-default" style="font-size:13px"><?php echo esc_html__('4 Days 4 nights', 'travelvista'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"trip-man"} -->
<p class="trip-man">5</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","bottom":"var:preset|spacing|60","top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"21px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);font-size:21px;font-style:normal;font-weight:600"><strong><?php echo esc_html__('Upper Mustang Trip', 'travelvista'); ?></strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__('Best Season: Winter', 'travelvista'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#ee8f00"},"elements":{"link":{"color":{"text":"#ee8f00"}}},"typography":{"fontSize":"21px"}}} -->
<p class="has-text-color has-link-color" style="color:#ee8f00;font-size:21px"><?php echo esc_html__('★★★★★', 'travelvista'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__('View Details', 'travelvista'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|assets-twelve"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"assets-twelve","fontSize":"medium"} -->
<p class="has-assets-twelve-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__('$ 400', 'travelvista'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"has-box-shadow","style":{"spacing":{"blockGap":"0"},"border":{"radius":"10px"}}} -->
<div class="wp-block-column has-box-shadow" style="border-radius:10px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/background.jpg","id":3094,"dimRatio":50,"isUserOverlayColor":true,"minHeight":321,"minHeightUnit":"px","contentPosition":"bottom center","sizeSlug":"large","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-top-left-radius:10px;border-top-right-radius:10px;min-height:321px"><img class="wp-block-cover__image-background wp-image-3094 size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/background.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"assets-twelve","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-assets-twelve-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"trip-days is-style-default","style":{"typography":{"fontSize":"13px"}}} -->
<p class="trip-days is-style-default" style="font-size:13px"><?php echo esc_html__('4 Days 4 nights', 'travelvista'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"trip-man"} -->
<p class="trip-man"><?php echo esc_html__('5', 'travelvista'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","bottom":"var:preset|spacing|60","top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"21px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);font-size:21px;font-style:normal;font-weight:600"><strong>Paris</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__('Best Season: Summer', 'travelvista'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#ee8f00"},"elements":{"link":{"color":{"text":"#ee8f00"}}},"typography":{"fontSize":"21px"}}} -->
<p class="has-text-color has-link-color" style="color:#ee8f00;font-size:21px"><?php echo esc_html__('★★★★★', 'travelvista'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40)"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__('View Details', 'travelvista'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|assets-twelve"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"assets-twelve","fontSize":"medium"} -->
<p class="has-assets-twelve-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__('$ 500', 'travelvista'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<?php } ?>