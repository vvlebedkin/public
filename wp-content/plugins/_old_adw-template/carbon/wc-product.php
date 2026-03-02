<?php 


use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_attach_theme_product', 1 );

function crb_attach_theme_product() {

	Container::make( 'term_meta', 'Настройки ингредиентов' )
	  ->where( 'term_taxonomy', '=', 'pa_ingredienty' )
	  ->add_fields( array(
	  	Field::make( 'image', 'crb_ingredienty_photo', __( 'Изображение' ) )
				->set_value_type( 'url' ),
			Field::make( 'text', 'crb_ingredienty_price', 'Стоимость' ),

	  ));

	 Container::make( 'term_meta', 'Настройки ингредиентов' )
	  ->where( 'term_taxonomy', '=', 'pa_weight' )
	  ->add_fields( array(	  	
			Field::make( 'text', 'crb_weight_num', 'Вес' ),

	  ));

	 Container::make( 'post_meta', 'Настройки товара' )
	  ->where( 'post_type', '=', 'product' )	  
	  ->add_fields( array(	   		
	      Field::make( 'checkbox', 'crb_prod_action', __( 'Акция' ) )
    			->set_option_value( 'yes' ),
	  ) );

	  Container::make( 'term_meta', 'Настройки категории' )
	  ->where( 'term_taxonomy', '=', 'product_cat' )
	  ->add_fields( array(	  	
			Field::make( 'text', 'crb_cat_subtitle', 'Подзаголовок' ),

	  ));

}