<?php
if (! defined('ABSPATH')) {exit;}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Создаем глобальную страницу настроек в левом меню
Container::make('theme_options', 'Настройки сайта')
    ->set_icon('dashicons-admin-generic')
    ->add_fields([
        Field::make('text', 'crb_contact_phone', 'Контактный телефон'),
        Field::make('text', 'crb_contact_email', 'Email для связи'),
    ]);
