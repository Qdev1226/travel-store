<?php
/**
 * Title: Travel Store New Product
 * Slug: travel-store/new-product
 * Categories: travel-store
 *
 * @package Travel Store
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#ebebeb"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background"
    style="background-color:#ebebeb;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    
    <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"0"},"margin":{"bottom":"0px","top":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group"
        style="margin-top:0;margin-bottom:0px;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:spacer {"height":"60px"} -->
        <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:heading {"textAlign":"left"} -->
            <h2 class="wp-block-heading has-text-align-left"><?php echo esc_html__( 'New Product', 'travel-store' ); ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"40px"} -->
        <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:woocommerce/product-new {"columns":4,"rows":1} /-->

        <!-- wp:spacer {"height":"60px"} -->
        <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
