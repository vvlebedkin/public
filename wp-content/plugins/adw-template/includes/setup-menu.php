<?php
if (! defined('ABSPATH')) {exit;}

// 2. Создаем страницы и само меню (сработает только 1 раз в админке)
add_action('admin_init', 'adw_template_auto_create_pages_and_menu');
function adw_template_auto_create_pages_and_menu()
{

    // Проверяем, запускали ли мы уже этот скрипт. Если да - выходим.
    if (get_option('adw_template_menu_created')) {
        return;
    }

    $menu_name = 'Header Menu';

    // Проверяем, нет ли уже меню с таким именем
    $menu_exists = wp_get_nav_menu_object($menu_name);

    if (! $menu_exists) {
        // Создаем меню
        $menu_id = wp_create_nav_menu($menu_name);

        // Привязываем созданное меню к области 'header-menu'
        $locations                = get_theme_mod('nav_menu_locations');
        $locations['header-menu'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);

        // Наш список страниц для создания
        $pages_to_create = [
            'О компании',
            'Калькулятор',
            'Аукцион',
            'Видео',
            'Блог',
            'Отзывы',
            'Договор',
            'FAQ',
            'Контакты',
        ];

        foreach ($pages_to_create as $page_title) {

            // Ищем страницу по названию, чтобы не создать дубль
            $page_check = get_page_by_title($page_title);
            $page_id    = 0;

            if (isset($page_check->ID)) {
                $page_id = $page_check->ID; // Страница уже есть
            } else {
                // Создаем новую страницу
                $page_id = wp_insert_post([
                    'post_title'  => $page_title,
                    'post_status' => 'publish',
                    'post_type'   => 'page',
                ]);
            }

            // Настраиваем пункт меню
            if ($page_title === 'Блог') {
                // Особое условие для Блога: делаем кастомную ссылку /blog/
                wp_update_nav_menu_item($menu_id, 0, [
                    'menu-item-title'  => $page_title,
                    'menu-item-type'   => 'custom',
                    'menu-item-url'    => home_url('/blog/'),
                    'menu-item-status' => 'publish',
                ]);
            } else {
                // Для остальных страниц привязываем созданную страницу
                wp_update_nav_menu_item($menu_id, 0, [
                    'menu-item-title'     => $page_title,
                    'menu-item-type'      => 'post_type',
                    'menu-item-object'    => 'page',
                    'menu-item-object-id' => $page_id,
                    'menu-item-status'    => 'publish',
                ]);
            }
        }

        // Ставим отметку в базе данных, что скрипт успешно отработал
        update_option('adw_template_menu_created', true);
    }
}
