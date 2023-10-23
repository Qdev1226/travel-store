<?php
/**
 * Title: Product Sidebar
 * Slug: travel-store/product-sidebar
 * Categories: travel-store
 *
 * @package Travel Store
 * @since 1.0.0
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:group {"style":{"typography":{"lineHeight":"1.5"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group" style="line-height:1.5">
        <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px"}},"className":"font-weight-wrapper"} -->
        <h4 class="wp-block-heading font-weight-wrapper" style="font-size:18px"><?php echo esc_html__( 'PRODUCT CATEGROIES', 'travel-store' ); ?></h4>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:woocommerce/product-categories {"isHierarchical":false,"style":{"typography":{"fontSize":"18px"}}} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:group {"style":{"typography":{"fontSize":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group" style="font-size:14px">
        <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px"}},"className":"font-weight-wrapper"} -->
        <h4 class="wp-block-heading font-weight-wrapper" style="font-size:18px"><?php echo esc_html__( 'FILTER BY STOCK', 'travel-store' ); ?></h4>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:woocommerce/filter-wrapper {"filterType":"stock-filter","heading":"Filter by stock status"} -->
    <div class="wp-block-woocommerce-filter-wrapper">
        <!-- wp:woocommerce/stock-filter {"heading":"","lock":{"remove":true}} -->
        <div class="wp-block-woocommerce-stock-filter is-loading" data-show-counts="true"
            data-heading="" data-heading-level="3"><span aria-hidden="true"
                class="wc-block-product-stock-filter__placeholder"></span></div>
        <!-- /wp:woocommerce/stock-filter -->
    </div>
    <!-- /wp:woocommerce/filter-wrapper -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"filter-by-price","layout":{"type":"constrained"}} -->
<div class="wp-block-group filter-by-price">
    <!-- wp:group {"style":{"typography":{"fontSize":"18px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group" style="font-size:18px">
        <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px"}},"className":"font-weight-wrapper"} -->
        <h4 class="wp-block-heading font-weight-wrapper" style="font-size:18px"><?php echo esc_html__( 'FILTER BY PRICE', 'travel-store' ); ?></h4>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
    <div class="wp-block-woocommerce-filter-wrapper">
        <!-- wp:woocommerce/price-filter {"inlineInput":true,"showFilterButton":true,"heading":"","lock":{"remove":true}} -->
        <div class="wp-block-woocommerce-price-filter is-loading" data-showinputfields="true"
            data-showfilterbutton="true" data-heading="" data-heading-level="3"><span aria-hidden="true"
                class="wc-block-product-categories__placeholder"></span></div>
        <!-- /wp:woocommerce/price-filter -->
    </div>
    <!-- /wp:woocommerce/filter-wrapper -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px"}},"className":"font-weight-wrapper"} -->
        <h4 class="wp-block-heading font-weight-wrapper" style="font-size:18px"><?php echo esc_html__( 'FILTER BY SIZE', 'travel-store' ); ?></h4>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
    <div class="wp-block-woocommerce-filter-wrapper">
        <!-- wp:woocommerce/attribute-filter {"attributeId":2,"heading":"","lock":{"remove":true}} -->
        <div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="2"
            data-show-counts="true" data-query-type="or" data-heading="" data-heading-level="3"><span
                aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span></div>
        <!-- /wp:woocommerce/attribute-filter -->
    </div>
    <!-- /wp:woocommerce/filter-wrapper -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:group {"style":{"typography":{"fontSize":"18px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group" style="font-size:18px">
        <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px"}},"className":"font-weight-wrapper"} -->
        <h4 class="wp-block-heading font-weight-wrapper" style="font-size:18px"><?php echo esc_html__( 'FILTER BY COLOR', 'travel-store' ); ?></h4>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
    <div class="wp-block-woocommerce-filter-wrapper">
        <!-- wp:woocommerce/attribute-filter {"attributeId":1,"heading":"","lock":{"remove":true}} -->
        <div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="1"
            data-show-counts="true" data-query-type="or" data-heading="" data-heading-level="3"><span
                aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span></div>
        <!-- /wp:woocommerce/attribute-filter -->
    </div>
    <!-- /wp:woocommerce/filter-wrapper -->
</div>
<!-- /wp:group -->