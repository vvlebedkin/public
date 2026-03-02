<?php
if (! defined('ABSPATH')) {exit;}

add_action('init', 'my_core_register_cpt');

function my_core_register_cpt()
{
    // Пример регистрации типа записи "Услуги"
    register_post_type('services', [
        'labels'       => [
            'name'          => 'Услуги',
            'singular_name' => 'Услуга',
            'add_new'       => 'Добавить услугу',
            'edit_item'     => 'Редактировать услугу',
        ],
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-hammer', // Иконка в админке
        'supports'     => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true, // Включает поддержку Gutenberg
    ]);
}
