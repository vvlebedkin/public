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
		array(
			Field::make( 'image', 'crb_general_header_logo', 'Логотип в шапке' ),
			Field::make( 'image', 'crb_general_footer_logo', 'Логотип в подвале' ),
			Field::make( 'text', 'crb_general_logo_text', 'Подпись логотипа' ),
			Field::make( 'text', 'crb_general_slogan', 'Слоган' ),
			Field::make( 'text', 'crb_general_delivery_text', 'Текст доставки в шапке' ),
			Field::make( 'text', 'crb_general_city', 'Город' ),
			Field::make( 'text', 'crb_general_address', 'Адрес' ),
			Field::make( 'text', 'crb_general_header_place_current', 'Текущий пункт в шапке' ),
			Field::make( 'complex', 'crb_general_header_places', 'Пункты в шапке' )
				->set_layout( 'tabbed-horizontal' )
				->add_fields(
					array(
						Field::make( 'text', 'title', 'Название пункта' ),
					)
				),
			Field::make( 'textarea', 'crb_general_top_banner_text', 'Текст верхнего баннера' ),
			Field::make( 'text', 'crb_general_top_banner_link', 'Ссылка верхнего баннера' ),
			Field::make( 'text', 'crb_general_top_banner_button', 'Текст ссылки верхнего баннера' ),
			Field::make( 'textarea', 'crb_general_footer_description', 'Описание в подвале' ),
			Field::make( 'text', 'crb_footer_menu_title_1', 'Заголовок меню футера 1' ),
			Field::make( 'text', 'crb_footer_menu_title_2', 'Заголовок меню футера 2' ),
			Field::make( 'text', 'crb_footer_menu_title_3', 'Заголовок меню футера 3' ),
			Field::make( 'text', 'crb_footer_menu_title_4', 'Заголовок меню футера 4' ),
			Field::make( 'text', 'crb_general_developer', 'Разработчик' ),
		)
	)
	->add_tab(
		'Контакты',
		array(
			Field::make( 'text', 'crb_contacts_phone', 'Телефон в шапке' ),
			Field::make( 'complex', 'crb_contacts_footer_phones', 'Телефоны в подвале' )
				->set_layout( 'tabbed-horizontal' )
				->add_fields(
					array(
						Field::make( 'text', 'phone', 'Телефон' ),
						Field::make( 'text', 'subtitle', 'Подпись' ),
						Field::make( 'text', 'subtitle_mark', 'Выделение в <span>' ),
					)
				),
			Field::make( 'text', 'crb_contacts_email', 'E-mail' ),
			Field::make( 'complex', 'crb_contacts_socials', 'Социальные сети' )
				->set_layout( 'tabbed-horizontal' )
				->add_fields(
					array(
						Field::make( 'text', 'link', 'Ссылка' ),
						Field::make( 'image', 'icon', 'Иконка' ),
					)
				),
			Field::make( 'complex', 'crb_contacts_requisites', 'Реквизиты' )
				->set_layout( 'tabbed-horizontal' )
				->add_fields(
					array(
						Field::make( 'text', 'title', 'Заголовок' ),
						Field::make( 'text', 'text', 'Текст' ),
					)
				),
		)
	);
