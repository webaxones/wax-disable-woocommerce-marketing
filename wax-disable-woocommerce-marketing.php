<?php
/**
 * Plugin Name: WAX disable woocommerce marketing
 * Plugin URI: https://www.webaxones.com
 * Description: Disable WooCommerce Marketing and Marketplace Suggestions
 * Author: Webaxones
 * Author URI: https://www.webaxones.com
 * Version: 1.0
 */

// don't load directly.
if ( ! defined( 'ABSPATH' ) ) :
	die( '-1' );
endif;

/**
 * Disable WooCommerce Marketing
 */

add_filter( 'woocommerce_marketing_menu_items', '__return_empty_array' );
add_filter( 'woocommerce_admin_features', 'wax_disable_woocommerce_admin_features' );

function wax_disable_woocommerce_admin_features( $features ) {
	$marketing = array_search( 'marketing', $features, true );
	unset( $features[ $marketing ] );
	return $features;
}

/**
 * Disable Marketplace Suggestions
 */

add_filter( 'woocommerce_allow_marketplace_suggestions', '__return_false' );
