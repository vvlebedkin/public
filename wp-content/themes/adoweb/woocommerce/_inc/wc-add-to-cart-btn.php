<?php 

// для страницы самого товара
add_filter( 'woocommerce_product_single_add_to_cart_text', 'truemisha_single_product_btn_text' );
 
function truemisha_single_product_btn_text( $text ) {
 
  if( WC()->cart->find_product_in_cart( WC()->cart->generate_cart_id( get_the_ID() ) ) ) {
    $text = 'Уже в корзине, добавить снова?';
  }
 
  return $text;
 
}
 
// для страниц каталога товаров, категорий товаров и т д
add_filter( 'woocommerce_product_add_to_cart_text', 'truemisha_product_btn_text', 20, 2 );
 
function truemisha_product_btn_text( $text, $product ) {
 
  if( 
     $product->is_type( 'simple' )
     && $product->is_purchasable()
     && $product->is_in_stock()
     && WC()->cart->find_product_in_cart( WC()->cart->generate_cart_id( $product->get_id() ) )
  ) {
 
    $text = 'Уже в корзине, добавить снова?';
 
  }
 
  return $text;
 
}


add_filter( 'woocommerce_product_add_to_cart_url', 'truemisha_product_cart_url', 20, 2 );
 
function truemisha_product_cart_url( $url, $product ) {
 
  if( 
     $product->is_type( 'simple' )
     && $product->is_purchasable()
     && $product->is_in_stock()
     && WC()->cart->find_product_in_cart( WC()->cart->generate_cart_id( $product->get_id() ) )
  ) {
 
    $url = wc_get_cart_url();
 
  }
 
  return $url;
 
}


/*Eof Add to cart */