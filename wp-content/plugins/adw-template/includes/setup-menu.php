<?php
if (! defined('ABSPATH')) {exit;}

add_action('admin_init', 'adw_template_auto_create_footer_menus');
function adw_template_auto_create_footer_menus()
{

    // Проверяем, запускали ли мы уже этот скрипт (защита от дублей)
    if (get_option('adw_template_footer_menus_created')) {
        return;
    }

    // Получаем текущие привязки меню к локациям
    $locations        = get_theme_mod('nav_menu_locations', []);
    $update_locations = false;

    // --- ШАГ 1: Создаем меню для автомобилей (для локаций 1, 2 и 3) ---
    $cars_menu_name   = 'Типы кузова (Footer)';
    $cars_menu_exists = wp_get_nav_menu_object($cars_menu_name);

    if (! $cars_menu_exists) {
        // Создаем меню
        $cars_menu_id = wp_create_nav_menu($cars_menu_name);

        // Список ссылок-заглушек
        $car_types = ['Кроссовер', 'Седан', 'Хетчбэк', 'Фургон', 'Внедорожник', 'Гибрид', 'Электрокар'];

        foreach ($car_types as $car) {
            wp_update_nav_menu_item($cars_menu_id, 0, [
                'menu-item-title'  => $car,
                'menu-item-type'   => 'custom',
                'menu-item-url'    => '#', // Знак решетки как заглушка для ссылки
                'menu-item-status' => 'publish',
            ]);
        }

        // Привязываем это одно меню сразу к трем локациям футера
        $locations['footer-menu-1'] = $cars_menu_id;
        $locations['footer-menu-2'] = $cars_menu_id;
        $locations['footer-menu-3'] = $cars_menu_id;
        $update_locations           = true;
    }

    // --- ШАГ 2: Создаем меню информации (для локации 4) ---
    $info_menu_name   = 'Информация (Footer 4)';
    $info_menu_exists = wp_get_nav_menu_object($info_menu_name);

    if (! $info_menu_exists) {
        // Создаем меню
        $info_menu_id = wp_create_nav_menu($info_menu_name);

        // Список страниц для создания (Блог сделаем отдельно ниже)
        $info_pages = ['О компании', 'СМИ о нас', 'Контакты'];

        foreach ($info_pages as $page_title) {
            // Ищем страницу, чтобы не создать дубль
            $page_check = get_page_by_title($page_title);
            $page_id    = 0;

            if (isset($page_check->ID)) {
                $page_id = $page_check->ID;
            } else {
                // Создаем новую страницу
                $page_id = wp_insert_post([
                    'post_title'  => $page_title,
                    'post_status' => 'publish',
                    'post_type'   => 'page',
                ]);
            }

            // Добавляем страницу в меню
            wp_update_nav_menu_item($info_menu_id, 0, [
                'menu-item-title'     => $page_title,
                'menu-item-type'      => 'post_type',
                'menu-item-object'    => 'page',
                'menu-item-object-id' => $page_id,
                'menu-item-status'    => 'publish',
            ]);
        }

        // Отдельно добавляем "Блог" со ссылкой /blog/
        wp_update_nav_menu_item($info_menu_id, 0, [
            'menu-item-title'  => 'Блог',
            'menu-item-type'   => 'custom',
            'menu-item-url'    => home_url('/blog/'),
            'menu-item-status' => 'publish',
        ]);

        // Привязываем к четвертой локации
        $locations['footer-menu-4'] = $info_menu_id;
        $update_locations           = true;
    }

    // --- ШАГ 3: Сохраняем привязки и ставим отметку о выполнении ---
    if ($update_locations) {
        set_theme_mod('nav_menu_locations', $locations);
    }

    // Отмечаем в БД, что скрипт отработал, чтобы он больше не нагружал админку
    update_option('adw_template_footer_menus_created', true);
}
