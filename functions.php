<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Travel Store
 * @since 1.0.0
 */

/**
 * Add theme support.
 */
function travel_store_setup() {
     load_theme_textdomain( 'travel-store', get_template_directory() . '/languages' );

     // Add support for block styles.
     add_theme_support( 'wp-block-styles' );
    // Enqueue editor styles.
     add_editor_style('./style.css');

    add_theme_support( 'woocommerce' );
    if ( class_exists( 'WooCommerce' ) ) {
        global $woocommerce;

        if( version_compare( $woocommerce->version, '3.0.0', ">=" ) ) {
            add_theme_support( 'wc-product-gallery-zoom' );
            add_theme_support( 'wc-product-gallery-lightbox' );
            add_theme_support( 'wc-product-gallery-slider' );
        }
    }


	register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'travel-store' ) ) );

}
add_action( 'after_setup_theme', 'travel_store_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */

// Enqueue the CSS files[default and custom styles
function travel_store_styles() {

    $min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
    wp_enqueue_style( 'dashicons' );
	wp_enqueue_style('travel-store-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version') );
    wp_enqueue_style('travel-store-font-awesome',get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3', 'all');
	wp_enqueue_style('travel-store-animate',get_template_directory_uri() . '/assets/css/animate' . $min . '.css', array(), '3.7.0');
    wp_enqueue_style('travel-store-theme-info',get_template_directory_uri() . '/assets/css/theme-info.css', array(), '1.0.0');
	wp_enqueue_script('travel-store-wow-js',get_template_directory_uri() . '/assets/js/vendor/wow' . $min . '.js', array(), '1.1.2');
	wp_enqueue_script('travel-store-main-js',get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0');
}
add_action( 'wp_enqueue_scripts', 'travel_store_styles' );

// Admin Enqueue Style
function travel_store_admin_styles() {

    wp_enqueue_style('travel-store-theme-info',get_template_directory_uri() . '/assets/css/theme-info.css', array(), '1.0.0');
}
add_action( 'admin_enqueue_scripts', 'travel_store_admin_styles' );

// Plugin Recommendation
require get_template_directory() . '/inc/tgm-plugin/tgmpa-hook.php';

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Admin Info
require get_template_directory() . '/class/admin-info.php';