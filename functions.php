<?php

include 'inc/parts/cssjs.php';
include 'inc/parts/menus.php';
include 'inc/parts/widgetsconfig.php';
add_theme_support( 'post-thumbnails' );
//
include 'inc/parts/breadcrumbs.php';
//
//woocommerce theme support - Hossein Akbari
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}
//
include 'inc/parts/comments.php';
//
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
	add_action('template_redirect', 'remove_shop_breadcrumbs' );
	function remove_shop_breadcrumbs(){
	    if (is_shop())
	        remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
	}
}
add_filter( 'widget_text', 'do_shortcode' );
/**
 * Required: set 'ot_theme_mode' filter to true.
 */
// add_filter( 'ot_theme_mode', '__return_true' );
/**
 * Theme Options
 */
require( trailingslashit( get_template_directory() ) . 'inc/metaboxeswwsh.php' );
/**
*
* shortcodes
*/
include 'inc/parts/shortcodes.php';
//
//
// Config WWSH widget for show articles
include 'inc/parts/widgets.php';
//
//
//
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
define( 'ACF_LITE' , true );
//
//
// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' );
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'ثبت نام' , 'woocommerce' );
}
///
/////
///////
//////////
////////////////
/////////////////////
///////////////////////// Powered By Hossein Akbari
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );
//
function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = '9';
  return $cols;
}
//
//
//
include 'inc/parts/thumb.php';
//include 'inc/elementor.php';
include 'inc/parts/lp.php';
//
//
//
//
//include 'inc/parts/zh-install.php';
// function shweb_customizer_settings($wp_customize) {
//   include('inc/options.php');
// }
// add_action('customize_register', 'shweb_customizer_settings');
//
//

// Image size for single posts
add_image_size( 'single-post-thumbnail', 500, 400);

// WooCommerce tags
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_product_loop_tags', 5 );

function woocommerce_product_loop_tags() {
    global $post, $product;
    $tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );
    echo $product->get_tags( ' ', '<span class="tagged_as">' . _e( ' ', $tag_count, 'woocommerce' ) . ' ', '</span>' );
}

// Content length
function excerpt($length) {
    return 25;
}

function more($more) {
    return ' ...';
}

add_filter('excerpt_more', 'more');
add_filter('excerpt_length', 'excerpt');