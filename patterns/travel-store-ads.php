<?php
/**
 * Title: Travel Store Ads
 * Slug: travel-store/ads
 * Categories: travel-store
 *
 * @package Travel Store
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"0"},"blockGap":"0"},"border":{"radius":"4px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"
        style="border-radius:4px;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-ads.jpg","id":3366,"dimRatio":50,"minHeight":653,"isDark":false,"className":"banner","style":{"color":{}}} -->
        <div class="wp-block-cover is-light banner" style="min-height:653px"><span aria-hidden="true"
                class="wp-block-cover__background has-background-dim"></span><img
                class="wp-block-cover__image-background wp-image-3366" alt=""
                src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-ads.jpg"
                data-object-fit="cover" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group"
                    style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--60)">
                    <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"50px","lineHeight":"1.5"},"spacing":{"padding":{"top":"var:preset|spacing|20","right":"7rem","bottom":"var:preset|spacing|20","left":"7rem"}}},"textColor":"primary","className":"ads-img-text1 wow slideInUp","fontFamily":"barlow"} -->
                    <h1 class="wp-block-heading has-text-align-center ads-img-text1 wow slideInUp has-primary-color has-text-color has-barlow-font-family"
                        style="padding-top:var(--wp--preset--spacing--20);padding-right:7rem;padding-bottom:var(--wp--preset--spacing--20);padding-left:7rem;font-size:50px;font-style:normal;font-weight:700;line-height:1.5">
                        <?php echo esc_html__( 'Level up your style with our summer collections', 'travel-store' ); ?></h1>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:buttons {"className":"slideInUp wow","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}}} -->
                <div class="wp-block-buttons slideInUp wow"><!-- wp:button {"backgroundColor":"primary","style":{"spacing":{"padding":{"top":"1.1rem","right":"var:preset|spacing|70","bottom":"1.1rem","left":"var:preset|spacing|70"}},"border":{"radius":"4px"},"typography":{"fontSize":"21px"}},"className":"is-style-outline banner-button","fontFamily":"barlow"} -->
                    <div class="wp-block-button has-custom-font-size is-style-outline banner-button has-barlow-font-family" style="font-size:21px"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="#" style="border-radius:4px;padding-top:1.1rem;padding-right:var(--wp--preset--spacing--70);padding-bottom:1.1rem;padding-left:var(--wp--preset--spacing--70)"><strong><code><?php echo esc_html__( 'Shop now', 'travel-store' ); ?></code></strong></a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->