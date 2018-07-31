<?php
/*
Plugin Name: Mis funciones personalizadas para La Habitación Misteriosa
Description: Plugin para ir poniendo mis funciones personalizadas
Version: 0.1
Author: Mario Hernanz
*/
add_action( 'woocommerce_single_product_summary', 'hide_add_to_cart_button_variable_product', 1, 0 );
function hide_add_to_cart_button_variable_product() {

    // Removing add to cart button and quantities only
    remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20 );
}
function remove_add_to_cart(){
    if ( has_term( 'oro', 'oro-1' ) ) {

        remove_action( 'woocommerce_single_variation','woocommerce_single_variation_add_to_cart_button', 20 );
}
} 

add_action('woocommerce_single_variation','remove_add_to_cart');

