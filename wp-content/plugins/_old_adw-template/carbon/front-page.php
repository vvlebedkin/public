<?php 

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_attach_theme_home', 1 );

function crb_attach_theme_home() {

	Container::make( 'post_meta', 'Настройки главной страницы' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'front-page.php' )
    ->add_tab( __( 'Первый экран' ), array(
      Field::make( 'checkbox', 'crb_hero_check', __( 'Отображать блок' ) )
    			->set_option_value( 'yes' ),
    	Field::make( 'text', 'crb_hero_title', 'Заголовок блока' ),		
    	Field::make( 'image', 'crb_hero_photo', __( 'Изображение' ) )
  					->set_value_type( 'url' ),	  		
    ))
    ->add_tab( __( 'Товары' ), array(
      Field::make( 'checkbox', 'crb_prods_check', __( 'Отображать блок' ) )
    			->set_option_value( 'yes' ),
    	Field::make( 'text', 'crb_prods_title', 'Заголовок блока' ),		
    	Field::make( 'image', 'crb_prods_photo', __( 'Изображение' ) )
  					->set_value_type( 'url' ),	  		
    ))
    ->add_tab( __( 'Блок о нас' ), array(
			Field::make( 'checkbox', 'crb_about_check', __( 'Отображать блок' ) )
    			->set_option_value( 'yes' ),
    	Field::make( 'text', 'crb_about_title', 'Заголовок блока' ),
    	Field::make( 'text', 'crb_about_subtitle', 'Подзаголовок блока' ),
    	Field::make( 'rich_text', 'crb_about_content', 'Содержание' ),
    	Field::make( 'image', 'crb_about_photo', __( 'Изображение' ) )						
  					->set_value_type( 'url' ),
			Field::make( 'image', 'crb_about_photo2', __( 'Изображение 2' ) )						
					->set_value_type( 'url' ),
    	Field::make( 'association', 'crb_aboutlink', __( 'Подробнее' ) )
    		->set_max( 1 )
		    ->set_types( array(
		        array(
		            'type'      => 'post',
		            'post_type' => 'page',
		        )
		    ) )
		))
    ->add_tab( __( 'Блок новости' ), array(
			Field::make( 'checkbox', 'crb_news_check', __( 'Отображать блок' ) )
    			->set_option_value( 'yes' ),
    	Field::make( 'text', 'crb_news_title', 'Заголовок блока' ),
    	Field::make( 'text', 'crb_news_subtitle', 'Подзаголовок блока' ),    	
    	Field::make( 'association', 'crb_news', __( 'Подробнее' ) )    		
		    ->set_types( array(
		        array(
		            'type'      => 'post',
		            'post_type' => 'news',
		        )
		    ) ) 		
    ))
    ->add_tab( __( 'Преимущества' ), array(
      Field::make( 'checkbox', 'crb_advantage_check', __( 'Отображать блок' ) )
    			->set_option_value( 'yes' ),
    	Field::make( 'text', 'crb_advantage_title', 'Заголовок блока' ),		
    	Field::make( 'image', 'crb_advantage_photo', __( 'Изображение' ) )
  					->set_value_type( 'url' ),	
  		Field::make( 'complex', 'crb_advantage', __( 'Опции' ) )
		    ->add_fields( array(
		    	Field::make( 'text', 'title', __( 'Заголовок' ) )
						->set_width( 40 ),
					Field::make( 'textarea', 'text', __( 'Текст' ) )
						->set_width( 40 ),
    			Field::make( 'image', 'photo', __( 'Изображение' ) )
						->set_width( 20 )
  					->set_value_type( 'url' )
		    ))
    ))
    ->add_tab( __( 'FAQ' ), array(
      Field::make( 'checkbox', 'crb_faq_check', __( 'Отображать блок' ) )
    			->set_option_value( 'yes' ),
    	Field::make( 'text', 'crb_faq_title', 'Заголовок блока' ),		
    	Field::make( 'image', 'crb_faq_photo', __( 'Изображение' ) )
  					->set_value_type( 'url' ),	  
  		Field::make( 'complex', 'crb_faq', __( 'Опции' ) )
		    ->add_fields( array(
		    	Field::make( 'text', 'question', __( 'Вопрос' ) )
							->set_width( 50 ),
					Field::make( 'textarea', 'answer', __( 'Ответ' ) )
							->set_width( 50 ),
		    ))		
    ))
    ->add_tab( __( 'Отзывы' ), array(
      Field::make( 'checkbox', 'crb_reviews_check', __( 'Отображать блок' ) )
    			->set_option_value( 'yes' ),
    	Field::make( 'text', 'crb_reviews_title', 'Заголовок блока' ),	
    	Field::make( 'text', 'crb_reviews_subtitle', 'Подзаголовок блока' ),
    	Field::make( 'image', 'crb_reviews_photo', __( 'Изображение' ) )
  					->set_value_type( 'url' ),	
  		Field::make( 'complex', 'crb_reviews', __( 'Опции' ) )
		    ->add_fields( array(
		    	Field::make( 'text', 'title', __( 'Заголовок' ) )
						->set_width( 40 ),
					Field::make( 'textarea', 'text', __( 'Текст' ) )
						->set_width( 40 ),
    			Field::make( 'image', 'photo', __( 'Изображение' ) )
						->set_width( 20 )
  					->set_value_type( 'url' )
		    ))  		
    ))
    ->add_tab( __( 'Партнеры' ), array(
      Field::make( 'checkbox', 'crb_partners_check', __( 'Отображать блок' ) )
    			->set_option_value( 'yes' ),
    	Field::make( 'text', 'crb_partners_title', 'Заголовок блока' ),		
    	Field::make( 'image', 'crb_partners_photo', __( 'Изображение' ) )
  					->set_value_type( 'url' ),	 
  		Field::make( 'media_gallery', 'crb_partners_gallery', __( 'Галерея' ) ) 	  		
    ))
		->add_tab( __( 'Блок услуги' ), array(
			Field::make( 'checkbox', 'crb_services_check', __( 'Отображать блок' ) )
    			->set_option_value( 'yes' ),
    	Field::make( 'text', 'crb_services_title', 'Заголовок блока' ),	
    	Field::make( 'text', 'crb_services_subtitle', 'Подзаголовок блока' ),
    	Field::make( 'image', 'crb_services_dopphoto', __( 'Изображение' ) )						
  					->set_value_type( 'url' ),			
    	Field::make( 'complex', 'crb_services', __( 'Опции' ) )
		    ->add_fields( array(
		    	Field::make( 'text', 'title', __( 'Заголовок' ) )
							->set_width( 50 ),
					Field::make( 'text', 'link', __( 'Ссылка' ) )
							->set_width( 50 ),		
					Field::make( 'association', 'crb_services_items', __( 'Услуги' ) )
			    ->set_types( array(
			        array(
			            'type'      => 'post',
			            'post_type' => 'services',
			        )
			    ) )
		    ))
    	
  ));

}