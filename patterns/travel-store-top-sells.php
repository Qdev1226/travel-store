<?php
/**
 * Title: Travel Store Top Sells
 * Slug: travel-store/top-sells
 * Categories: travel-store
 *
 * @package Travel Store
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"background":"#ebebeb"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-background" style="background-color:#ebebeb;margin-top:0;margin-bottom:0">
    <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"15px"}}},"layout":{"type":"constrained","contentSize":""}} -->
    <div class="wp-block-group"
        style="margin-bottom:15px;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:spacer {"height":"60px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
        <div style="margin-top:0;margin-bottom:0;height:60px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group"
            style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:heading -->
            <h2 class="wp-block-heading"><?php echo esc_html__( 'Top Sellers', 'travel-store' ); ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"40px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
        <div style="margin-top:0;margin-bottom:0;height:40px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"0","top":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"
            style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"0px","top":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <div class="wp-block-columns"
                style="margin-top:0;margin-bottom:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:column {"width":"100%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <div class="wp-block-column"
                    style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:100%">
                    <!-- wp:woocommerce/all-products {"columns":4,"rows":1,"alignButtons":true,"contentVisibility":{"orderBy":false},"orderby":"price-desc","layoutConfig":[["woocommerce/product-image",{"imageSizing":"cropped"}],["woocommerce/product-title"],["woocommerce/product-price"],["woocommerce/product-rating"],["woocommerce/product-button"]]} -->
                    <div class="wp-block-woocommerce-all-products wc-block-all-products"
                        data-attributes="{&quot;alignButtons&quot;:true,&quot;columns&quot;:4,&quot;contentVisibility&quot;:{&quot;orderBy&quot;:false},&quot;isPreview&quot;:false,&quot;layoutConfig&quot;:[[&quot;woocommerce/product-image&quot;,{&quot;imageSizing&quot;:&quot;cropped&quot;}],[&quot;woocommerce/product-title&quot;],[&quot;woocommerce/product-price&quot;],[&quot;woocommerce/product-rating&quot;],[&quot;woocommerce/product-button&quot;]],&quot;orderby&quot;:&quot;price-desc&quot;,&quot;rows&quot;:1}">
                        <!-- wp:woocommerce/product-image -->
                        <div class="is-loading"></div>
                        <!-- /wp:woocommerce/product-image -->

                        <!-- wp:woocommerce/product-title -->
                        <div class="wp-block-woocommerce-product-title is-loading"></div>
                        <!-- /wp:woocommerce/product-title -->

                        <!-- wp:woocommerce/product-price -->
                        <div class="is-loading"></div>
                        <!-- /wp:woocommerce/product-price -->

                        <!-- wp:woocommerce/product-rating -->
                        <div class="is-loading"></div>
                        <!-- /wp:woocommerce/product-rating -->

                        <!-- wp:woocommerce/product-button {"className":"wp-block-woocommerce-product-button"} -->
                        <div class="wp-block-woocommerce-product-button is-loading"></div>
                        <!-- /wp:woocommerce/product-button -->
                    </div>
                    <!-- /wp:woocommerce/all-products -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"60px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
        <div style="margin-top:0;margin-bottom:0;height:60px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
