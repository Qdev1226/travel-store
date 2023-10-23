<?php
/**
 * Title: Travel Store Footer
 * Slug: travel-store/footer
 * Categories: travel-store
 *
 * @package Travel Store
 * @since 1.0.0
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0px","right":"0px","left":"0px","bottom":"0px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"60px","right":"var:preset|spacing|30","left":"var:preset|spacing|30","bottom":"60px"}}},"className":"footer-first-section","layout":{"type":"constrained","contentSize":""}} -->
    <div class="wp-block-group footer-first-section"
        style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:var(--wp--preset--spacing--30);padding-bottom:60px;padding-left:var(--wp--preset--spacing--30)">
       <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"className":"font-weight-wrapper","fontFamily":"barlow"} -->
            <h2 class="wp-block-heading has-text-align-center font-weight-wrapper has-barlow-font-family" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
                <?php echo esc_html__( 'Subscribe to our newsletter to get updates to our latest collections', 'travel-store' ); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}},"color":{"text":"#9a9a9a"}},"className":"font-weight-600","fontFamily":"barlow"} -->
            <h2 class="wp-block-heading has-text-align-center font-weight-600 has-text-color has-barlow-font-family"
                style="color:#9a9a9a;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80);font-size:16px">
                <?php echo esc_html__( 'Get 20% off on your first order just by subscribing to our newsletter', 'travel-store' ); ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"footer-first-section","layout":{"type":"constrained"}} -->
        <div class="wp-block-group footer-first-section">
             <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"footer-email","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group footer-email" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:template-part {"slug":"newsletter-form","theme":"travel-store"} /--></div>
            <!-- /wp:group -->


            <!-- wp:social-links {"align":"center","layout":{"type":"flex","justifyContent":"center"}} -->
            <ul class="wp-block-social-links aligncenter">
                <!-- wp:social-link {"url":"https://www.facebook.com","service":"facebook"} /-->

                <!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

                <!-- wp:social-link {"url":"https://www.twitter.com/","service":"twitter"} /-->

                <!-- wp:social-link {"url":"https://www.pinterest.com/","service":"pinterest"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:separator {"style":{"spacing":{"margin":{"top":"0px"}},"color":{"background":"#e1e6e7"}},"className":"is-style-default"} -->
    <hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-default"
        style="margin-top:0px;background-color:#e1e6e7;color:#e1e6e7" />
    <!-- /wp:separator -->

   <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","top":"0","right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"0"}},"backgroundColor":"contrast","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-contrast-background-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"50px","right":"0","bottom":"50px","left":"0"}}}} -->
        <div class="wp-block-columns"
            style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:0;padding-bottom:50px;padding-left:0">
            <!-- wp:column {"width":"45%","style":{"spacing":{"padding":{"right":"0","bottom":"0","left":"0","top":"0px"}}}} -->
            <div class="wp-block-column"
                style="padding-top:0px;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:45%">
                <!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"0px"},"margin":{"top":"0","bottom":"0"}}}} -->
                <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-bottom:0px">
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:heading {"style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"bottom":"0px"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"primary"} -->
                        <h2 class="wp-block-heading has-primary-color has-text-color"
                            style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-bottom:0px;font-size:18px"><?php echo esc_html__( 'INFORMATION', 'travel-store' ); ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:navigation {"overlayMenu":"never","className":"travel-store-footer-menu","layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} /-->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"bottom":"0px"}}},"textColor":"primary"} -->
                        <h2 class="wp-block-heading has-text-align-left has-primary-color has-text-color"
                            style="padding-bottom:0px;font-size:18px"><?php echo esc_html__( 'SHOP', 'travel-store' ); ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:navigation {"overlayMenu":"never","className":"travel-store-footer-menu","layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} /-->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"45%","style":{"spacing":{"padding":{"right":"0","bottom":"0","left":"0","top":"0px"}}}} -->
            <div class="wp-block-column"
                style="padding-top:0px;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:45%">
                <!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"0px"},"margin":{"top":"0","bottom":"0"}}}} -->
                <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-bottom:0px">
                    <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                        <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"bottom":"0px"}}},"textColor":"primary"} -->
                        <h2 class="wp-block-heading has-text-align-left has-primary-color has-text-color"
                            style="padding-bottom:0px;font-size:18px"><?php echo esc_html__( 'HELP', 'travel-store' ); ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:navigation {"overlayMenu":"never","className":"travel-store-footer-menu","layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} /-->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                        <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"bottom":"0px"}}},"textColor":"primary"} -->
                        <h2 class="wp-block-heading has-text-align-left has-primary-color has-text-color"
                            style="padding-bottom:0px;font-size:18px"><?php echo esc_html__( 'DISCOVERY', 'travel-store' ); ?></h2>
                        <!-- /wp:heading -->

                       <!-- wp:navigation {"overlayMenu":"never","className":"travel-store-footer-menu","layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} /-->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"15%","style":{"spacing":{"padding":{"right":"0","bottom":"0","left":"0","top":"0px"}}}} -->
            <div class="wp-block-column"
                style="padding-top:0px;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:15%">
                <!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <div class="wp-block-columns"
                    style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                    <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                        <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"bottom":"20px"}}},"textColor":"primary"} -->
                        <h2 class="wp-block-heading has-text-align-left has-primary-color has-text-color"
                            style="padding-bottom:20px;font-size:18px"><?php echo esc_html__( 'STORE LOCATOR', 'travel-store' ); ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"3px"}}},"className":"travel-store-footer-menu-right-side","fontFamily":"barlow"} -->
                        <p class="has-text-align-left travel-store-footer-menu-right-side has-barlow-font-family"
                            style="margin-top:3px"><?php echo esc_html__( '2972 Westheimer Rd. Santa Ana', 'travel-store' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"3px"}}},"className":"travel-store-footer-menu-right-side","fontFamily":"barlow"} -->
                        <p class="has-text-align-left travel-store-footer-menu-right-side has-barlow-font-family"
                            style="margin-top:3px"><?php echo esc_html__( 'Illinois 85486, USA', 'travel-store' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0px"}},"color":{"text":"#e06c6c"}},"fontFamily":"barlow"} -->
                        <p class="has-text-align-left has-text-color has-barlow-font-family"
                            style="color:#e06c6c;margin-top:0px">Call Us
                            –&nbsp;1-800-123-4567</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0px"}}},"className":"travel-store-footer-menu-right-side","fontFamily":"barlow"} -->
                        <p class="has-text-align-left travel-store-footer-menu-right-side has-barlow-font-family"
                            style="margin-top:0px">
                            <?php echo esc_html__( 'support@example.com', 'travel-store' ); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:separator {"style":{"spacing":{"margin":{"top":"0px"}},"color":{"background":"#e1e6e7"}},"className":"is-style-default"} -->
    <hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-default"
        style="margin-top:0px;background-color:#e1e6e7;color:#e1e6e7" />
    <!-- /wp:separator -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"color":{"background":"#eaeef2"}},"layout":{"type":"constrained","contentSize":""}} -->
    <div class="wp-block-group has-background"
        style="background-color:#eaeef2;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0px","bottom":"var:preset|spacing|20","left":"0px"}}}} -->
        <div class="wp-block-columns"
            style="padding-top:var(--wp--preset--spacing--20);padding-right:0px;padding-bottom:var(--wp--preset--spacing--20);padding-left:0px">
            <!-- wp:column {"verticalAlignment":"center","width":"33.34%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <div class="wp-block-column is-vertically-aligned-center"
                style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:33.34%">
                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"textColor":"contrast","layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"fontSize":"extra-small"} -->
                    <p class="has-extra-small-font-size"><?php echo esc_html__( 'Copyright 2023 @ Travel Store Theme By', 'travel-store' ); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"fontSize":"extra-small"} -->
                    <p class="has-extra-small-font-size"><a href="<?php echo esc_url( 'https://www.eaglevisionit.com/' ); ?>" target="_blank"><?php echo esc_html__( '&nbsp;Eagle Vision IT', 'travel-store' ); ?></a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"33.34%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.34%">
                <!-- wp:group {"textColor":"contrast","className":"footer-link ","layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group footer-link has-contrast-color has-text-color">
                    <!-- wp:paragraph {"style":{"typography":{"textDecoration":"none"}},"fontSize":"extra-small"} -->
                    <p class="has-extra-small-font-size" style="text-decoration:none"><a href="#"><?php echo esc_html__( 'Terms Conditions', 'travel-store' ); ?></a></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"typography":{"textDecoration":"none"}},"fontSize":"extra-small"} -->
                    <p class="has-extra-small-font-size" style="text-decoration:none"><a href="#"><?php echo esc_html__( 'Cookies', 'travel-store' ); ?></a></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"typography":{"textDecoration":"none"}},"fontSize":"extra-small"} -->
                    <p class="has-extra-small-font-size" style="text-decoration:none"><a href="#"><?php echo esc_html__( 'Privacy Policy', 'travel-store' ); ?></a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:group {"className":"footer-card","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
                <div class="wp-block-group footer-card"><!-- wp:paragraph {"fontSize":"extra-small"} -->
                    <p class="has-extra-small-font-size"><?php echo esc_html__( 'We Accept', 'travel-store' ); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:image {"id":146,"width":32,"height":19,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/card.jpg" alt="" class="wp-image-146" width="32" height="19"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>