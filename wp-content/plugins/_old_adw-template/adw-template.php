<?php
/**
* Plugin Name: Плагин темы Adoweb
* Plugin URI: http://lebedkin.com/
* Description: Этот плагин делает мир лучше!
* Version: 1.0.0
* Author: Lebedkin Vladislav
* Author URI: http://lebedkin.com/
* License: GPL2
*/

require 'adw_template-type.php'; 
require 'adw_template-functions.php';
require 'carbon/custom-fields.php';
require 'gutenberg/gbloks.php';

/**
 * Load WooCommerce compatibility file.
 */
// if ( class_exists( 'WooCommerce' ) ) {
// 	require 'woocommerce/woocommerce.php';
//  	require 'woocommerce/wc-functions.php';
//  	require 'woocommerce/wc-add-to-cart-btn.php';
//  	require 'woocommerce/wc-prod-page.php'; 		
//  	require 'woocommerce/wc-category.php';
// 	require 'woocommerce/wc-checkout.php';
// 	require 'woocommerce/wc-account.php';
// 	require 'woocommerce/wc-autorization.php';
// }



function adw_reviews_scripts() {   
	// wp_enqueue_style( 'adw_reviews-fancybox', plugin_dir_url( __FILE__ ) . 'assets/css/jquery.fancybox.min.css', array(), 1.0 );
	// wp_enqueue_style( 'adw_reviews-popup', plugin_dir_url( __FILE__ ) . 'assets/css/popup.css', array(), 1.5 );
  //   wp_enqueue_style( 'adw_reviews-registration', plugin_dir_url( __FILE__ ) . 'assets/css/registration.css', array(), 1.2 );
  //   wp_enqueue_style( 'adw_reviews-core', plugin_dir_url( __FILE__ ) . 'assets/css/core.css', array(), 1.4 );
  //   wp_enqueue_style( 'adw_reviews-regform', plugin_dir_url( __FILE__ ) . 'assets/css/regform.css', array(), 1.4 );

	// wp_enqueue_script( 'adw_reviews-fancybox', plugin_dir_url( __FILE__ ) . 'assets/js/jquery.fancybox.min.js', array('jquery'), '1.2', true );
  //   wp_enqueue_script( 'adw_reviews-maskedinput', plugin_dir_url( __FILE__ ) . 'assets/js/jquery.maskedinput.js', array('jquery'), '1.1', true );
  /*	wp_enqueue_script( 'adw_reviews-main', plugin_dir_url( __FILE__ ) . 'assets/js/adw-reviews.js', array('jquery'), 1.1, true ); 
  	wp_enqueue_script( 'adw_reviews-pagination', plugin_dir_url( __FILE__ ) . 'assets/js/adw_reviews_pagination.js', array('jquery'), 1.1, true ); 

  	wp_localize_script( 'adw_reviews-main', 'adw_reviews', array( 
		 	'ajaxurl' => admin_url( 'admin-ajax.php' ),
		 	'nonce' => wp_create_nonce( 'review-nonce' )
		 ) ); */
}
add_action('wp_enqueue_scripts', 'adw_reviews_scripts');

