<?php
/**
 * Title: Popular Packages
 * Slug: travelvista/popular-packages
 * Categories: travelvista
 * @package travelvista
 * @since 1.0.0
 */
$pluginsList = get_option( 'active_plugins' );
$travelvista_plugin = 'wp-travel/wp-travel.php';
$results = in_array( $travelvista_plugin , $pluginsList);
if ( $results )  {
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"className":"wb-banner-content","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group wb-banner-content" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"theme","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.6"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"0","bottom":"0"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-theme-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30);font-size:12px;font-style:normal;font-weight:700;line-height:1.6"><strong><?php echo esc_html__('Journey', 'travelvista'); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--70);font-style:normal;font-weight:600;line-height:1.3"><?php echo esc_html__('Popular Packages', 'travelvista'); ?><br></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":12,"query":{"perPage":3,"pages":0,"offset":0,"postType":"itineraries","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"className":"popular-trip","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"15px"}},"backgroundColor":"assets-three"} -->
<div class="wp-block-column popular-trip has-assets-three-background-color has-background" style="border-radius:15px;padding-right:0;padding-left:0"><!-- wp:post-featured-image {"style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-title {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:wp-travel-blocks/trip-duration-date {"extraClass":"8d514bc1-b9e0-4b8c-98e7-2b25f2a63d51"} /--></div>
<!-- /wp:group -->

<!-- wp:wp-travel-blocks/trip-rating /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:wp-travel-blocks/trip-button {"tripButtonText":"View Details"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php } else { ?>
 <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"backgroundColor":"theme","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.6"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"0","bottom":"0"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-theme-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30);font-size:12px;font-style:normal;font-weight:700;line-height:1.6"><?php echo esc_html__('Journery', 'travelvista'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color" style="font-style:normal;font-weight:600;line-height:1.3"><?php echo esc_html__('Popular Packages', 'travelvista'); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400;line-height:1.6"><?php echo esc_html__('Ut varius tincidunt libero. Curabitur at lacus ac velit ornare lobortis. Phasellus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et Vestibulum ante ipsum primis in faucibus orci luctus et', 'travelvista'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|70","bottom":"0"},"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/background.jpg","id":3094,"dimRatio":50,"overlayColor":"base","isUserOverlayColor":true,"contentPosition":"bottom center","sizeSlug":"full","align":"center","style":{"border":{"radius":"7px"}}} -->
<div class="wp-block-cover aligncenter has-custom-content-position is-position-bottom-center" style="border-radius:7px"><img class="wp-block-cover__image-background wp-image-3094 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/background.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"color":{"background":"#a5840a"},"border":{"radius":"7px"},"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-background" style="border-radius:7px;background-color:#a5840a;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"#e3e7fa"}}},"typography":{"lineHeight":"1.7","fontSize":"18px"},"color":{"text":"#e3e7fa"}}} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#e3e7fa;font-size:18px;line-height:1.7"><?php echo esc_html__('Peaceful Heights', 'travelvista'); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.5","fontSize":"23px"}},"textColor":"primary"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:23px;line-height:1.5"><?php echo esc_html__('Jungle Trek', 'travelvista'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:image {"id":1504,"width":"44px","height":"auto","sizeSlug":"full","linkDestination":"none","className":"portfolio-icon"} -->
<figure class="wp-block-image size-full is-resized portfolio-icon"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/arrow-right.png" alt="" class="wp-image-1504" style="width:44px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/background.jpg","id":3094,"dimRatio":50,"overlayColor":"base","isUserOverlayColor":true,"contentPosition":"bottom center","sizeSlug":"full","align":"center","style":{"border":{"radius":"7px"}}} -->
<div class="wp-block-cover aligncenter has-custom-content-position is-position-bottom-center" style="border-radius:7px"><img class="wp-block-cover__image-background wp-image-3094 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/background.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"color":{"background":"#a5840a"},"border":{"radius":"7px"},"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-background" style="border-radius:7px;background-color:#a5840a;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"#e3e7fa"}}},"typography":{"lineHeight":"1.7","fontSize":"18px"},"color":{"text":"#e3e7fa"}}} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#e3e7fa;font-size:18px;line-height:1.7"><?php echo esc_html__('Wild Trails', 'travelvista'); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.5","fontSize":"23px"}},"textColor":"primary"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:23px;line-height:1.5"><?php echo esc_html__('Desert Quest', 'travelvista'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:image {"id":1504,"width":"44px","height":"auto","sizeSlug":"full","linkDestination":"none","className":"portfolio-icon"} -->
<figure class="wp-block-image size-full is-resized portfolio-icon"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/arrow-right.png" alt="" class="wp-image-1504" style="width:44px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/background.jpg","id":3094,"dimRatio":50,"overlayColor":"base","isUserOverlayColor":true,"contentPosition":"bottom center","sizeSlug":"full","align":"center","style":{"border":{"radius":"7px"}}} -->
<div class="wp-block-cover aligncenter has-custom-content-position is-position-bottom-center" style="border-radius:7px"><img class="wp-block-cover__image-background wp-image-3094 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/background.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"color":{"background":"#a5840a"},"border":{"radius":"7px"},"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-background" style="border-radius:7px;background-color:#a5840a;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"#e3e7fa"}}},"typography":{"lineHeight":"1.7","fontSize":"18px"},"color":{"text":"#e3e7fa"}}} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#e3e7fa;font-size:18px;line-height:1.7"><?php echo esc_html__('Golden Adventure', 'travelvista'); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.5","fontSize":"23px"}},"textColor":"primary"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:23px;line-height:1.5"><?php echo esc_html__('Mountain Escape', 'travelvista'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:image {"id":1504,"width":"44px","height":"auto","sizeSlug":"full","linkDestination":"none","className":"portfolio-icon"} -->
<figure class="wp-block-image size-full is-resized portfolio-icon"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/arrow-right.png" alt="" class="wp-image-1504" style="width:44px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->   
 <?php } ?>