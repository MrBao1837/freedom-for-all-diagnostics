<?php 
/**
 * Query WooCommerce activation
 */
function blockscape_is_woocommerce_activated() {
	return class_exists( 'woocommerce' ) ? true : false;
}