<?php
/**
 * Plugin Name: ADW Template
 * Description: Этот плагин делает мир лучше.
 * Version: 1.1.0
 * Author: Lebedkin Vladislav
 * Text Domain: https://lebedkin.com
 */

if (! defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', 'adw_template_load_carbon_fields');
function adw_template_load_carbon_fields()
{
    if (class_exists('\\Carbon_Fields\\Carbon_Fields')) {
        \Carbon_Fields\Carbon_Fields::boot();
    }
}

require_once plugin_dir_path(__FILE__) . 'includes/custom-post-types.php';

require_once plugin_dir_path(__FILE__) . 'includes/setup-menu.php';

add_action('carbon_fields_register_fields', 'adw_template_register_custom_fields');
function adw_template_register_custom_fields()
{
    require_once plugin_dir_path(__FILE__) . 'carbon-fields/options/option-page.php';
    require_once plugin_dir_path(__FILE__) . 'carbon-fields/blocks/example-block.php';
    require_once plugin_dir_path(__FILE__) . 'carbon-fields/blocks/order-block.php';
}

if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    require_once plugin_dir_path(__FILE__) . 'woocommerce/woo-functions.php';
}
