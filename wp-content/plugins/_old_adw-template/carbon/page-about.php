<?php 

use Carbon_Fields\Container; 
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_attach_theme_about', 1 );

function crb_attach_theme_about() {

	Container::make( 'post_meta', __( 'Настройки страницы о нас' ) )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'page-about.php' )
		->add_tab( __( 'Основные' ), array(
			Field::make( 'text', 'crb_about_title', 'Заголовок' ),
			Field::make( 'text', 'crb_about_subtitle', 'Подзаголовок' ),
		))
		->add_tab( __( 'Первый экран' ), array(
			Field::make( 'text', 'crb_about_hero', 'Заголовок блока' ),
			Field::make( 'checkbox', 'crb_about_hero_heck', __( 'Отображать блок' ) )
    		->set_option_value( 'yes' ),
			
		))
		->add_tab( __( 'Управление блоками' ), array(
      Field::make( 'checkbox', 'crb_scheme_check', __( 'Отображать блок схема получения кредита' ) )
    			->set_option_value( 'yes' ),
    	Field::make( 'checkbox', 'crb_team_check', __( 'Отображать блок команда' ) )
    			->set_option_value( 'yes' ),		
    	Field::make( 'checkbox', 'crb_partners_check', __( 'Отображать блок партнеры' ) )
    			->set_option_value( 'yes' ),
    	Field::make( 'checkbox', 'crb_about_check', __( 'Отображать блок о нас' ) )
    			->set_option_value( 'yes' ),	
    	Field::make( 'checkbox', 'crb_certificates_check', __( 'Отображать блок Сертификаты' ) )
    			->set_option_value( 'yes' ),	
    	Field::make( 'checkbox', 'crb_reviews_check', __( 'Отображать блок отзывы' ) )
    			->set_option_value( 'yes' ),
    	Field::make( 'checkbox', 'crb_history_check', __( 'Отображать блок история' ) )
    			->set_option_value( 'yes' ),	
    	Field::make( 'checkbox', 'crb_open_check', __( 'Отображать блок Хотите открыть' ) )
    			->set_option_value( 'yes' ),
    	Field::make( 'checkbox', 'crb_maps_check', __( 'Отображать блок Мы работаем' ) )
    			->set_option_value( 'yes' ),
    	Field::make( 'checkbox', 'crb_faq_check', __( 'Отображать блок FAQ' ) )
    			->set_option_value( 'yes' ),	

    ));

}
