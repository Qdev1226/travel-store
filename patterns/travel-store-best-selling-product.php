<?php
/**
 * Title: Travel Store Best Selling Product
 * Slug: travel-store/best-selling-product
 * Categories: travel-store
 *
 * @package Travel Store
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"0","bottom":"50px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group"
    style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:50px;padding-left:var(--wp--preset--spacing--30)">
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group">
        <!-- wp:heading -->
        <h2 class="wp-block-heading"><?php echo esc_html__( 'Our Best-Selling Product', 'travel-store' ); ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
        <!-- wp:woocommerce/product-best-sellers {"columns":4,"rows":1,"alignButtons":true,"contentVisibility":{"image":true,"title":false,"price":false,"rating":false,"button":true}} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:separator {"className":"is-style-wide"} -->
    <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />
    <!-- /wp:separator -->
</div>
<!-- /wp:group -->
