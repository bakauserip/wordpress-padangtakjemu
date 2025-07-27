<?php
/**
 * Title: Trip Search
 * Slug: travelvista/trip-search
 * Categories: travelvista
 * @package travelvista
 * @since 1.0.0
 */
$pluginsList = get_option( 'active_plugins' );
$travelvista_plugin = 'wp-travel/wp-travel.php';
$results = in_array( $travelvista_plugin , $pluginsList);
if ( $results )  {
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:wp-travel-blocks/trip-search {"searchButtonLabel":"Search Now","searchBorderRadius":9,"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"assets-twelve","textColor":"primary"} /--></div>
<!-- /wp:group -->
<?php } ?>