<?php
/**
 * adoweb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package adoweb
 */

if (! defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

function adoweb_setup()
{
    load_theme_textdomain('adoweb', get_template_directory() . '/languages');

    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        [
            'menu-1'        => esc_html__('Primary', 'adoweb'),
            'header-menu'   => esc_html__('Меню в шапке', 'adoweb'),
            'footer-menu-1' => esc_html__('Меню футера 1', 'adoweb'),
            'footer-menu-2' => esc_html__('Меню футера 2', 'adoweb'),
            'footer-menu-3' => esc_html__('Меню футера 3', 'adoweb'),
            'footer-menu-4' => esc_html__('Меню футера 4', 'adoweb'),
        ]
    );

    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]
    );

    add_theme_support(
        'custom-background',
        apply_filters(
            'adoweb_custom_background_args',
            [
                'default-color' => 'ffffff',
                'default-image' => '',
            ]
        )
    );

    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support(
        'custom-logo',
        [
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ]
    );
}
add_action('after_setup_theme', 'adoweb_setup');

function adoweb_content_width()
{
    $GLOBALS['content_width'] = apply_filters('adoweb_content_width', 640);
}
add_action('after_setup_theme', 'adoweb_content_width', 0);

function adoweb_widgets_init()
{
    register_sidebar(
        [
            'name'          => esc_html__('Sidebar', 'adoweb'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'adoweb'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]
    );
}
add_action('widgets_init', 'adoweb_widgets_init');

function adoweb_scripts()
{
    $theme_uri  = get_template_directory_uri();
    $theme_path = get_template_directory();

    wp_enqueue_style('adoweb-swiper', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css', [], '12.0.3');
    wp_enqueue_style('adoweb-fancybox', $theme_uri . '/css/fancybox.css', ['adoweb-style'], filemtime($theme_path . '/css/fancybox.css'));
    wp_enqueue_style('adoweb-style', $theme_uri . '/css/style.css', ['adoweb-swiper'], filemtime($theme_path . '/css/style.css'));
    wp_enqueue_style('adoweb-custom', $theme_uri . '/css/custom.css', ['adoweb-style'], filemtime($theme_path . '/css/custom.css'));

    wp_deregister_script('jquery-core');
    wp_register_script('jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', [], '3.7.1');
    wp_enqueue_script('jquery');

    wp_enqueue_script('adoweb-swiper', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js', [], '12.0.3', true);
    wp_enqueue_script('adoweb-customselect', $theme_uri . '/js/jquery.custom-select.js', ['jquery', 'adoweb-swiper'], filemtime($theme_path . '/js/jquery.custom-select.js'), true);
    wp_enqueue_script('adoweb-fancybox', $theme_uri . '/js/jquery.fancybox.min.js', ['jquery', 'adoweb-swiper'], filemtime($theme_path . '/js/jquery.fancybox.min.js'), true);
    wp_enqueue_script('adoweb-ui', 'https://code.jquery.com/ui/1.14.2/jquery-ui.js', [], '1.0.0', true);
    wp_enqueue_script('adoweb-touchpunch', $theme_uri . '/js/jquery.ui.touch-punch.js', ['jquery', 'adoweb-swiper'], filemtime($theme_path . '/js/jquery.ui.touch-punch.js'), true);
    wp_enqueue_script('adoweb-typewriter', $theme_uri . '/js/typewriter-effect.min.js', ['jquery', 'adoweb-swiper'], filemtime($theme_path . '/js/typewriter-effect.min.js'), true);
    wp_enqueue_script('adoweb-splitter', $theme_uri . '/js/grapheme-splitter.min.js', ['jquery', 'adoweb-swiper'], filemtime($theme_path . '/js/grapheme-splitter.min.js'), true);
    wp_enqueue_script('adoweb-main', $theme_uri . '/js/main.js', ['jquery', 'adoweb-swiper'], filemtime($theme_path . '/js/main.js'), true);
    wp_enqueue_script('adoweb-custom', $theme_uri . '/js/custom.js', ['jquery'], filemtime($theme_path . '/js/custom.js'), true);
}
add_action('wp_enqueue_scripts', 'adoweb_scripts');

function adw_template_mark_auction_menu_item($items, $args)
{
    if (empty($args->theme_location) || 'header-menu' !== $args->theme_location) {
        return $items;
    }

    foreach ($items as $item) {
        if (in_array('menu-item-has-children', (array) $item->classes, true)) {
            $item->classes[] = 'menu-item-has-auction-arrow';
        }
    }

    return $items;
}
add_filter('wp_nav_menu_objects', 'adw_template_mark_auction_menu_item', 10, 2);

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/customizer.php';

if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}
