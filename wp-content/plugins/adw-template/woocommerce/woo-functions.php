<?php
if (! defined('ABSPATH')) {exit;}

// Пример: Изменение текста кнопки "В корзину" на странице товара
add_filter('woocommerce_product_single_add_to_cart_text', 'my_core_custom_cart_button_text');

function my_core_custom_cart_button_text()
{
    return 'Купить сейчас';
}
