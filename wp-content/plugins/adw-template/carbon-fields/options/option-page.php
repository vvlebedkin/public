<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Настройки темы' )
    ->set_page_parent( 'themes.php' )
    ->set_icon( 'dashicons-admin-generic' )
    ->add_tab(
        'Общие',
        [
            Field::make( 'image', 'crb_general_header_logo', 'Логотип в шапке' ),
            Field::make( 'image', 'crb_general_footer_logo', 'Логотип в подвале' ),
            Field::make( 'text', 'crb_general_delivery_text', 'Текст доставки в шапке' ),
            Field::make( 'text', 'crb_general_city', 'Город' ),
            Field::make( 'text', 'crb_general_header_place_current', 'Текущий пункт в шапке' ),
            Field::make( 'complex', 'crb_general_header_places', 'Пункты в шапке' )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields(
                    [
                        Field::make( 'text', 'title', 'Название пункта' ),
                    ]
                ),
            Field::make( 'textarea', 'crb_general_top_banner_text', 'Текст верхнего баннера' ),
            Field::make( 'text', 'crb_general_top_banner_link', 'Ссылка верхнего баннера' ),
            Field::make( 'text', 'crb_general_top_banner_button', 'Текст ссылки верхнего баннера' ),
            Field::make( 'textarea', 'crb_general_footer_description', 'Описание в подвале' ),
            Field::make( 'text', 'crb_footer_menu_title_1', 'Заголовок меню футера 1' ),
            Field::make( 'text', 'crb_footer_menu_title_2', 'Заголовок меню футера 2' ),
            Field::make( 'text', 'crb_footer_menu_title_3', 'Заголовок меню футера 3' ),
            Field::make( 'text', 'crb_footer_menu_title_4', 'Заголовок меню футера 4' ),
        ]
    )
    ->add_tab(
        'Контакты',
        [
            Field::make( 'text', 'crb_contacts_phone', 'Телефон в шапке' ),
            Field::make( 'complex', 'crb_contacts_footer_phones', 'Телефоны в подвале' )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields(
                    [
                        Field::make( 'text', 'phone', 'Телефон' ),
                        Field::make( 'text', 'subtitle', 'Подпись' ),
                        Field::make( 'text', 'subtitle_mark', 'Выделение в <span>' ),
                    ]
                ),
            Field::make( 'complex', 'crb_contacts_socials', 'Социальные сети' )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields(
                    [
                        Field::make( 'text', 'link', 'Ссылка' ),
                        Field::make( 'image', 'icon', 'Иконка' ),
                    ]
                ),
        ]
    )
    ->add_tab(
        'Социальные сети',
        [
            Field::make( 'separator', 'adw_social_block_separator', 'Блок: Социальные сети' ),
            Field::make( 'text', 'adw_social_block_title', 'Заголовок блока' )
                ->set_default_value( 'СОЦИАЛЬНЫЕ сети' ),
            Field::make( 'textarea', 'adw_social_block_subtitle', 'Подзаголовок блока' )
                ->set_default_value( 'Подпишись на нас и будь в курсе!' ),
            Field::make( 'complex', 'adw_social_block_items', 'Карточки социальных сетей' )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields(
                    [
                        Field::make( 'text', 'link', 'Ссылка' ),
                        Field::make( 'image', 'image_desktop', 'Фоновое изображение (desktop)' )
                            ->set_value_type( 'url' ),
                        Field::make( 'image', 'image_mobile', 'Фоновое изображение (mobile)' )
                            ->set_value_type( 'url' ),
                        Field::make( 'image', 'icon', 'Иконка' )
                            ->set_value_type( 'url' ),
                        Field::make( 'text', 'title', 'Заголовок карточки' ),
                        Field::make( 'text', 'text', 'Текст карточки' ),
                    ]
                ),
        ]
    )
    ->add_tab(
        'Отзывы',
        [
            Field::make( 'separator', 'adw_reviews_block_separator', 'Блок: Отзывы' ),
            Field::make( 'text', 'adw_reviews_block_title', 'Заголовок блока' )
                ->set_default_value( 'Отзывы' ),
            Field::make( 'text', 'adw_reviews_more_title', 'Заголовок нижнего блока ссылок' )
                ->set_default_value( 'Больше отзывов о нас' ),
            Field::make( 'complex', 'adw_reviews_slides', 'Слайды отзывов' )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields(
                    [
                        Field::make( 'select', 'slide_type', 'Тип слайда' )
                            ->set_options(
                                [
                                    'car'      => 'Карточка авто',
                                    'feedback' => 'Текстовый отзыв',
                                ]
                            )
                            ->set_default_value( 'car' ),
                        Field::make( 'text', 'link', 'Ссылка карточки' )
                            ->set_conditional_logic(
                                [
                                    [
                                        'field'   => 'slide_type',
                                        'value'   => 'car',
                                        'compare' => '=',
                                    ],
                                ]
                            ),
                        Field::make( 'image', 'image', 'Изображение авто' )
                            ->set_value_type( 'url' )
                            ->set_conditional_logic(
                                [
                                    [
                                        'field'   => 'slide_type',
                                        'value'   => 'car',
                                        'compare' => '=',
                                    ],
                                ]
                            ),
                        Field::make( 'image', 'logo', 'Логотип карточки' )
                            ->set_value_type( 'url' )
                            ->set_conditional_logic(
                                [
                                    [
                                        'field'   => 'slide_type',
                                        'value'   => 'car',
                                        'compare' => '=',
                                    ],
                                ]
                            ),
                        Field::make( 'text', 'title', 'Заголовок карточки' )
                            ->set_conditional_logic(
                                [
                                    [
                                        'field'   => 'slide_type',
                                        'value'   => 'car',
                                        'compare' => '=',
                                    ],
                                ]
                            ),
                        Field::make( 'text', 'subtitle', 'Подзаголовок карточки' )
                            ->set_conditional_logic(
                                [
                                    [
                                        'field'   => 'slide_type',
                                        'value'   => 'car',
                                        'compare' => '=',
                                    ],
                                ]
                            ),
                        Field::make( 'image', 'avatar', 'Аватар автора отзыва' )
                            ->set_value_type( 'url' )
                            ->set_conditional_logic(
                                [
                                    [
                                        'field'   => 'slide_type',
                                        'value'   => 'feedback',
                                        'compare' => '=',
                                    ],
                                ]
                            ),
                        Field::make( 'text', 'name', 'Имя автора отзыва' )
                            ->set_conditional_logic(
                                [
                                    [
                                        'field'   => 'slide_type',
                                        'value'   => 'feedback',
                                        'compare' => '=',
                                    ],
                                ]
                            ),
                        Field::make( 'image', 'rating', 'Изображение рейтинга' )
                            ->set_value_type( 'url' )
                            ->set_conditional_logic(
                                [
                                    [
                                        'field'   => 'slide_type',
                                        'value'   => 'feedback',
                                        'compare' => '=',
                                    ],
                                ]
                            ),
                        Field::make( 'textarea', 'text', 'Текст отзыва' )
                            ->set_conditional_logic(
                                [
                                    [
                                        'field'   => 'slide_type',
                                        'value'   => 'feedback',
                                        'compare' => '=',
                                    ],
                                ]
                            ),
                    ]
                ),
            Field::make( 'complex', 'adw_reviews_more_links', 'Ссылки внизу блока' )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields(
                    [
                        Field::make( 'image', 'icon', 'Иконка сервиса' )
                            ->set_value_type( 'url' ),
                        Field::make( 'text', 'title', 'Название сервиса' ),
                        Field::make( 'text', 'url', 'Ссылка' ),
                    ]
                ),
        ]
    )
    ->add_tab(
        'Гарантии',
        [
            Field::make( 'separator', 'adw_guarantee_block_separator', 'Блок: Гарантии' ),
            Field::make( 'rich_text', 'adw_guarantee_block_title', 'Заголовок блока' )
                ->set_default_value( 'ГАРАНТИЯ 2 года <br> на все авто' ),
            Field::make( 'image', 'adw_guarantee_main_image', 'Изображение слева' )
                ->set_value_type( 'url' ),
            Field::make( 'textarea', 'adw_guarantee_right_title', 'Заголовок правой части' )
                ->set_default_value( 'Условия действия гарантии на двигатель и КПП' ),
            Field::make( 'complex', 'adw_guarantee_items', 'Пункты гарантий' )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields(
                    [
                        Field::make( 'image', 'icon', 'Иконка пункта' )
                            ->set_value_type( 'url' ),
                        Field::make( 'textarea', 'title', 'Текст пункта' ),
                    ]
                ),
            Field::make( 'text', 'adw_guarantee_button_text', 'Текст кнопки' )
                ->set_default_value( 'Скачать образец договора' ),
            Field::make( 'file', 'adw_guarantee_button_url', 'Файл кнопки' )
                ->set_value_type( 'url' ),
        ]
    )
    ->add_tab( 'Блок: Оставьте заявку', [
        Field::make( 'separator', 'adw_sep_contacts', 'Контакты' ),
        Field::make( 'text', 'adw_contact_phone', 'Главный телефон' )
            ->set_default_value( '8 (800) 234-76-76' ),
        Field::make( 'complex', 'adw_social_links', 'Иконки соцсетей / Мессенджеров' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields(
                [
                    Field::make( 'image', 'icon', 'Иконка (SVG или PNG)' )
                        ->set_value_type( 'url' ),
                    Field::make( 'text', 'url', 'Ссылка' ),
                ]
            ),
        Field::make( 'separator', 'adw_sep_order', 'Блок: Оставьте заявку' ),
        Field::make( 'text', 'adw_order_title', 'Заголовок' )
            ->set_default_value( 'Оставьте заявку' ),
        Field::make( 'textarea', 'adw_order_subtitle', 'Подзаголовок' )
            ->set_default_value( 'Получите <span>бесплатную</span> консультацию <br> по подбору от наших менеджеров <br> в кратчайшие сроки' ),
        Field::make( 'textarea', 'adw_order_msg_1', 'Сообщение клиента' )
            ->set_default_value( 'Здравствуйте! Интересует Toyota Camry 2019–2021 до 2,5 млн. Есть варианты?' ),
        Field::make( 'textarea', 'adw_order_msg_2', 'Ответ менеджера' )
            ->set_default_value( 'Добрый день! Конечно, сотрудник компании Dolgov Auto приветствует вас! Уточните двигатель и КПП пожалуйста.' ),
        Field::make( 'text', 'adw_order_cf7', 'Шорткод Contact Form 7' )
            ->set_help_text( 'Вставь сюда шорткод формы, например: [contact-form-7 id="123" title="Заявка"]' ),
    ] );
