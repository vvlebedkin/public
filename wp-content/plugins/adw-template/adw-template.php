<?php
/**
 * Plugin Name: ADW Template
 * Description: Этот плагин делает мир лучше.
 * Version: 1.1.0
 * Author: Lebedkin Vladislav
 * Text Domain: https://lebedkin.com
 */

// Защита от прямого доступа к файлу
if (! defined('ABSPATH')) {
    exit;
}

// 1. Инициализация Carbon Fields
add_action('after_setup_theme', 'adw_template_load_carbon_fields');
function adw_template_load_carbon_fields()
{
    // Если ты устанавливаешь Carbon Fields через Composer в папке плагина, раскомментируй строку ниже:
    // require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

    if (class_exists('\Carbon_Fields\Carbon_Fields')) {
        \Carbon_Fields\Carbon_Fields::boot();
    }
}

// 2. Подключение файла с кастомными типами записей (CPT)
require_once plugin_dir_path(__FILE__) . 'includes/custom-post-types.php';

// 3. Подключение файлов Carbon Fields (Настройки и блоки)
add_action('carbon_fields_register_fields', 'adw_template_register_custom_fields');
function adw_template_register_custom_fields()
{
    // Подключаем страницу настроек
    require_once plugin_dir_path(__FILE__) . 'carbon-fields/options/site-settings.php';

    // Подключаем блоки Gutenberg
    require_once plugin_dir_path(__FILE__) . 'carbon-fields/blocks/example-block.php';
}

// 4. Подключение функционала WooCommerce
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    require_once plugin_dir_path(__FILE__) . 'woocommerce/woo-functions.php';
}
