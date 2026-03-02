<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_getprice' );

function crb_attach_blocks_getprice() {



Block::make( __( 'Uznayte stoimost' ) )  

	->add_fields( array(
		Field::make( 'separator', 'gtb_getprice_about', __( 'Блок "Узнайте стоимость"' ) ),				 	
		Field::make( 'text', 'gtb_getprice_title', __( 'Заголовок' ) ),
		
		Field::make( 'text', 'gtb_getprice_subtitle', __( 'Подзаголовок' ) ),
		Field::make( 'text', 'gtb_getprice_btn', __( 'Текст кнопки' ) ),

	) )

	->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )

	// ->set_category( 'widgets' )

	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {

		?>

	<section id="price" class="price">
    <div class="container">
      <div class="price_wrapper">
          <h2><?php echo esc_html( $fields['gtb_getprice_title'] ); ?></h2>
          <div class="price_subtitle"><?php echo esc_html( $fields['gtb_getprice_subtitle'] ); ?></div>
          <a data-fancybox href="#popup_form" class="price_btn btn"><?php echo esc_html( $fields['gtb_getprice_btn'] ); ?></a>
      </div>
    </div>
</section>


		<?php

	} );


};