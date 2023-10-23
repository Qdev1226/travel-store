<?php
$pro_purchase_url = "https://www.eaglevisionit.com/downloads/travel-store/";
$doc_url = "https://www.eaglevisionit.com/downloads/travel-store/";
$live_demo_url = "https://demos.eaglevisionit.com/travel-store-pro/";
$support_url = "https://www.eaglevisionit.com/contact-us/";

$theme_name = esc_html( $theme->Name );
$free_theme_name = str_replace( ' Pro', '',$theme_name );
?>
<div class="travel-store--about-page--wrapper">
    <div id="travel-store-admin-about-page">
        <div class="travel-store-admin-card-header">
            <div class="travel-store-header-left">
                <h2>
                    <?php echo esc_html( $theme->Name ); ?>
                </h2>
                <p>
                    <?php esc_html_e( 'Travel Store - A Multipurpose, browser & device-friendly Full Site Editing Theme for WordPress', 'travel-store' ); ?>
                </p>

            </div>
            <div class="travel-store-header-right">
                <div class="travel-store-card-header-button-group">
                    <a href="<?php echo $live_demo_url; ?>" class="travel-store-admin-button premium-button" target="_blank"
                        rel="noreferrer"><span class="dashicons dashicons-book-alt"></span>
                        <?php esc_html_e( 'Pro Live Demo', 'travel-store' ); ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="feature-list">
            <div class="travel-store-about-container">
                <div class="travel-store-admin-card features">
                    <div class="travel-store-about-container travel-store-compare-table">
                        <div class="admin-grid-1">
                            <h3>
                                <?php echo esc_html( $free_theme_name ); ?>
                                <?php esc_html_e( 'Free Vs Pro', 'travel-store' ); ?>
                            </h3>
                            <p class="travel-store-compare-table-subtitle"><a href="<?php echo $pro_purchase_url; ?>"
                                    target="__blank">
                                    <?php echo esc_html( 'Get Travel Store Pro', 'travel-store' ); ?>
                                    <i class="dashicons dashicons-arrow-right-alt"></i>
                                </a></p>
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            <?php echo esc_html( $theme->Name ); ?>
                                            <?php esc_html_e( 'Free', 'travel-store' ); ?>
                                            <?php esc_html_e( '( Limited blocks available )', 'travel-store' ); ?>
                                            
                                        </th>
                                        <th>
                                            <?php esc_html_e( 'Features', 'travel-store' ); ?>
                                        </th>
                                        <th>
                                            <?php esc_html_e( 'Travel Store Pro ( More Blocks & Settings available )', 'travel-store' ); ?>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Easy Setup', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Responsive Desgin', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'SEO Friendly', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( '24/7 premium support', 'travel-store' ); ?>
                                        </td>
                                        <td><?php esc_html_e( 'High-Priority Dedicated Support', 'travel-store' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Different niches starter sites', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Secure transaction', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Lifetime Updates', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'No coding required', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'WooCommerce', 'travel-store' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Mini Cart', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Upsells', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Multi Steps', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Sticky cart', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Bulk Variation', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Quick View', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Elementor', 'travel-store' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Drag and Drop functionality', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'One Click Demo Import', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( ' Featured Slider', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'travel-store' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Typography and color options', 'travel-store' ); ?>
                                        </td>
                                        <td><?php esc_html_e( 'Unlimited', 'travel-store' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'travel-store' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Import components/ templates', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'One Click Demo Import', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Gutenberg block editor', 'travel-store' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Profile card (Block)', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'travel-store' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Blog (block)', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Unlimited', 'travel-store' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'travel-store' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Carousel Post (Block)', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Unlimited', 'travel-store' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Testimonials(block)', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'News Block', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'travel-store' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Templates and block patterns', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'travel-store' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Advanced Color Options', 'travel-store' ); ?>
                                        </td>
                                        <td><?php esc_html_e( 'Unlimited', 'travel-store' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Theme Options', 'travel-store' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Enable Mini Cart On Header', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Enable Testimonial Slider', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Enable Sponsor Slider', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Enable Sticky Header', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'WP Travel Plugin', 'travel-store' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Booking system', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Google Maps zoom level settings', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Group discount', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Wishlist', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'travel-store' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Tour extras', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Multiple prices and multiple dates', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Coupon', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Full Site Editing/Site Editor', 'travel-store' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Limited Features', 'travel-store' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Block themes', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Style variations', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'travel-store' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Block patterns and template parts', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Global style Interface', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Edit each areas of website(header, footer, sidebar)', 'travel-store' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="travel-store-about-side">
                <div class="travel-store-admin-card cart-two">
                    <h3 class="travel-store-admin-card-title is-small">
                        <?php esc_html_e( 'Questions Welcome - We\'re here to help', 'travel-store' ); ?>
                    </h3>
                    <p>
                        <?php esc_html_e( 'Fearless Setup - Our Dedicated Team will have your website up in minutes', 'travel-store' ); ?>
                    </p><a href="<?php echo $support_url; ?>" class="travel-store-admin-button primary large"
                        target="_blank">
                        <?php esc_html_e( 'Get Support', 'travel-store' ); ?>
                    </a>
                    <a href="<?php echo $pro_purchase_url; ?>" class="travel-store-admin-button primary large"
                        target="_blank">
                        <?php esc_html_e( 'Get Premium Version', 'travel-store' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>