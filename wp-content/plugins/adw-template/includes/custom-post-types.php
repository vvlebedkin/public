<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'init', 'adw_template_register_post_types_and_taxonomies' );
function adw_template_register_post_types_and_taxonomies() {
    register_post_type(
        'services',
        [
            'labels' => [
                'name'          => __( 'Услуги', 'adw-template' ),
                'singular_name' => __( 'Услуга', 'adw-template' ),
                'add_new'       => __( 'Добавить услугу', 'adw-template' ),
                'edit_item'     => __( 'Редактировать услугу', 'adw-template' ),
            ],
            'public'       => true,
            'has_archive'  => true,
            'menu_icon'    => 'dashicons-hammer',
            'supports'     => [ 'title', 'editor', 'thumbnail' ],
            'show_in_rest' => true,
        ]
    );

    register_post_type(
        'blog',
        [
            'labels' => [
                'name'               => __( 'Блог', 'adw-template' ),
                'singular_name'      => __( 'Запись блога', 'adw-template' ),
                'add_new'            => __( 'Добавить запись', 'adw-template' ),
                'add_new_item'       => __( 'Добавить запись блога', 'adw-template' ),
                'edit_item'          => __( 'Редактировать запись', 'adw-template' ),
                'new_item'           => __( 'Новая запись', 'adw-template' ),
                'view_item'          => __( 'Смотреть запись', 'adw-template' ),
                'search_items'       => __( 'Искать записи', 'adw-template' ),
                'not_found'          => __( 'Записи не найдены', 'adw-template' ),
                'not_found_in_trash' => __( 'В корзине записей нет', 'adw-template' ),
                'menu_name'          => __( 'Блог', 'adw-template' ),
            ],
            'public'              => true,
            'has_archive'         => true,
            'rewrite'             => [ 'slug' => 'blog' ],
            'menu_icon'           => 'dashicons-welcome-write-blog',
            'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
            'show_in_rest'        => false,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_nav_menus'   => true,
            'exclude_from_search' => false,
        ]
    );

    register_post_type(
        'clients',
        [
            'labels' => [
                'name'               => __( 'Клиенты', 'adw-template' ),
                'singular_name'      => __( 'Клиент', 'adw-template' ),
                'add_new'            => __( 'Добавить клиента', 'adw-template' ),
                'add_new_item'       => __( 'Добавить клиента', 'adw-template' ),
                'edit_item'          => __( 'Редактировать клиента', 'adw-template' ),
                'new_item'           => __( 'Новый клиент', 'adw-template' ),
                'view_item'          => __( 'Смотреть клиента', 'adw-template' ),
                'search_items'       => __( 'Искать клиентов', 'adw-template' ),
                'not_found'          => __( 'Клиенты не найдены', 'adw-template' ),
                'not_found_in_trash' => __( 'В корзине клиентов нет', 'adw-template' ),
                'menu_name'          => __( 'Клиенты', 'adw-template' ),
            ],
            'public'              => true,
            'has_archive'         => true,
            'rewrite'             => [ 'slug' => 'clients' ],
            'menu_icon'           => 'dashicons-groups',
            'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
            'show_in_rest'        => false,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_nav_menus'   => true,
            'exclude_from_search' => false,
            'taxonomies'          => [],
        ]
    );

    register_taxonomy(
        'blog-category',
        [ 'blog' ],
        [
            'labels' => [
                'name'              => __( 'Категории блога', 'adw-template' ),
                'singular_name'     => __( 'Категория блога', 'adw-template' ),
                'search_items'      => __( 'Искать категории', 'adw-template' ),
                'all_items'         => __( 'Все категории', 'adw-template' ),
                'parent_item'       => __( 'Родительская категория', 'adw-template' ),
                'parent_item_colon' => __( 'Родительская категория:', 'adw-template' ),
                'edit_item'         => __( 'Редактировать категорию', 'adw-template' ),
                'update_item'       => __( 'Обновить категорию', 'adw-template' ),
                'add_new_item'      => __( 'Добавить категорию', 'adw-template' ),
                'new_item_name'     => __( 'Название категории', 'adw-template' ),
                'menu_name'         => __( 'Категории блога', 'adw-template' ),
            ],
            'public'            => true,
            'hierarchical'      => true,
            'show_admin_column' => true,
            'show_in_rest'      => false,
            'rewrite'           => [ 'slug' => 'blog-category' ],
        ]
    );
}

add_filter( 'use_block_editor_for_post_type', 'adw_template_disable_gutenberg_for_blog', 10, 2 );
function adw_template_disable_gutenberg_for_blog( $use_block_editor, $post_type ) {
    if ( in_array( $post_type, [ 'blog', 'clients' ], true ) ) {
        return false;
    }

    return $use_block_editor;
}
