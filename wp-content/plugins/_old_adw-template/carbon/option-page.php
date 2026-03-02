<?php 

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  $basic_options_container = Container::make( 'theme_options', 'Настройки темы' )
    ->add_tab( __( 'Общие' ), array(
  		Field::make( 'image', 'crb_general_logo', 'Логотип' )
  			->set_value_type( 'url' ),	
  		Field::make( 'image', 'crb_general_logo2', 'Логотип в футере' )
  			->set_value_type( 'url' ),
  		Field::make( 'text', 'crb_general_slogan', 'Слоган' ), 		
  		Field::make( 'complex', 'crb_general_info', __( 'Юридическая информация' ) )
		    ->add_fields( array(		
		      Field::make( 'text', 'title', __( 'Имя' ) )
						->set_width( 50 ),  	
					Field::make( 'text', 'text', __( 'Значение' ) )
						->set_width( 50 )
		    )),
  		Field::make( 'text', 'crb_general_developer', 'Разработчик' ),				
			Field::make( 'text', 'crb_general_copyright', 'Копирайт' ),
     ))    
    ->add_tab( __( 'Контакты' ), array(
			Field::make( 'separator', 'crb_sep_tel', __( 'Телефоны' ) ),

    	Field::make( 'text', 'crb_contacts_tel', 'Телефон' ),
    	Field::make( 'text', 'crb_contacts_tel2', 'Телефон 2' ),

    	Field::make( 'separator', 'crb_sep_mes', __( 'Мессенджеры' ) ),

    	Field::make( 'text', 'crb_contacts_wtsp', 'WhatsApp' ),
			Field::make( 'text', 'crb_contacts_tg', 'Telegram' ),			
			
			Field::make( 'separator', 'crb_sep_email', __( 'Email' ) ),

			Field::make( 'text', 'crb_contacts_email', 'e-mail' ),

			Field::make( 'separator', 'crb_sep_addr', __( 'Адрес' ) ),

			Field::make( 'textarea', 'crb_contacts_address', 'Адрес' ),
			Field::make( 'text', 'crb_contacts_map', 'Координаты карты' ),
			Field::make( 'text', 'crb_contacts_shedule', 'Расписание работы' ),
		))
		->add_tab( __( 'Соцсети' ), array(
			Field::make( 'text', 'crb_contacts_vk', 'ВКонтакте' ),
			Field::make( 'text', 'crb_contacts_inst', 'Instagram' ),
			Field::make( 'text', 'crb_contacts_tgs', 'Telegram' ),
			Field::make( 'text', 'crb_contacts_ytb', 'YouTube' ),
			Field::make( 'text', 'crb_contacts_dzen', 'Дзен' ),
		))	
    ->add_tab( __( 'Аналитика' ), array(
    	
			Field::make( 'footer_scripts', 'crb_yandex', 'Yandex' ),
			Field::make( 'footer_scripts', 'crb_google', 'Google' ),
		))
		->add_tab( __( 'Страница 404' ), array(
		 	Field::make( 'text', 'crb_404_title', __( 'Заголовок страницы' ) ),
		 	Field::make( 'text', 'crb_404_subtitle', __( 'Подзаголовок страницы' ) ),
		 	Field::make( 'text', 'crb_404_text', __( 'Текст' ) ),
		 	Field::make( 'image', 'crb_404_photo', 'Изображение' )
  			->set_value_type( 'url' ),		 	
  		Field::make( 'text', 'crb_404_btn', 'Текст кнопки' ),
  	))
  	->add_tab( __( 'Всплывашка cookie' ), array(
		 	Field::make( 'text', 'crb_cookie_text', __( 'Текст' ) ),		 			 	
  		// Field::make( 'text', 'crb_cookie_btn', 'Текст кнопки' ),
  	))
    ->add_tab( __( 'Настройки' ), array(
			Field::make( 'association', 'crb_polit_page', __( 'Страница политика конфиденциальности' ) )
    		->set_max( 1 )
		    ->set_types( array(
		        array(
		          'type'      => 'post',
		          'post_type' => 'page',
		        )
		    ) )
		 
  	//  ))
    // ->add_tab( __( 'Форма' ), array(    	
		// 	Field::make( 'text', 'crb_form_title', 'Заголовок' ),
		// 	Field::make( 'textarea', 'crb_form_text', 'Текст' ),
		// 	Field::make( 'image', 'crb_form_photo', 'Фото' )
  	// 		->set_value_type( 'url' ),
  	// 	Field::make( 'text', 'crb_form_recipient', 'Кому' ),
  	// 	Field::make( 'text', 'crb_form_from', 'От кого' ),
  	// 	Field::make( 'text', 'crb_form_tema', 'Тема' ),
  	// 	Field::make( 'textarea', 'crb_form_body', 'Тело письма' ),
  	 
    

  	) );  

  	Container::make( 'theme_options', __( 'Блок 1' ) )
    ->set_page_parent( $basic_options_container ) 
    ->add_fields( array(
        Field::make( 'text', 'crb_facebook_link', __( 'Facebook Link' ) ),
        Field::make( 'text', 'crb_twitter_link', __( 'Twitter Link' ) ),
    ) );

 	}