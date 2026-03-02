<?php 


use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_attach_theme_news', 1 );

function crb_attach_theme_news() { 


	Container::make( 'post_meta', 'Настройки новости' )
	  ->where( 'post_type', '=', 'news' )	  
	   ->add_fields( array(	   		
	      Field::make( 'text', 'crb_news_actions_title', __( 'Заголовок блока акция' ) ),
				Field::make( 'text', 'crb_news_actions_subtitle', __( 'Подзаголовок блока акция' ) ),
	      Field::make( 'association', 'crb_news_link', __( 'Товары по акции' ) )    		
		    ->set_types( array(
		        array(
		            'type'      => 'post',
		            'post_type' => 'product',
		        )
		    ) )		      
	        
	 ) );

}