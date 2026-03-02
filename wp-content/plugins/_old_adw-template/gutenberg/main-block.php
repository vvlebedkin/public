<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_mainblock' );

function crb_attach_blocks_mainblock() {



Block::make( __( 'First screen' ) ) 

	->add_fields( array(
		// Field::make( 'image', 'gtb_mainblock_image', __( 'Изображение' ) )
  	// 		->set_value_type( 'url' ),		 	
		Field::make( 'text', 'gtb_mainblock_title', __( 'Заголовок' ) ),
		
		Field::make( 'text', 'gtb_mainblock_subtitle', __( 'Подзаголовок' ) ),
		Field::make( 'text', 'gtb_mainblock_btn', __( 'Текст кнопки' ) ),

		// Field::make( 'rich_text', 'content', __( 'Block Content' ) ),

	) )

	->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )

	// ->set_category( 'widgets' )

	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {

		?>

	<section class="main">
	  <div class="container">
	    <div class="main_wrapper">
	      <h1><?php echo $fields['gtb_mainblock_title']; ?></h1>
	      <div class="main_subtitle"><?php echo esc_html( $fields['gtb_mainblock_subtitle'] ); ?>	        
	      </div>
	      <a href="#popup:marquiz_67bf00c38ad00700199e9ecf" class="main_btn btn"><?php echo esc_html( $fields['gtb_mainblock_btn'] ); ?>
	        <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
	          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.15884 2.33301C3.82217 2.33301 1.83301 4.32217 1.83301 7.65884V15.3313C1.83301 18.6772 3.82217 20.6663 7.15884 20.6663H14.8313C18.168 20.6663 20.1572 18.6772 20.1572 15.3405V7.65884C20.1663 4.32217 18.1772 2.33301 14.8405 2.33301H7.15884ZM10.3213 15.2213C10.1838 15.3588 10.0097 15.423 9.83551 15.423C9.66134 15.423 9.48717 15.3588 9.34967 15.2213C9.08384 14.9555 9.08384 14.5155 9.34967 14.2497L12.0997 11.4997L9.34967 8.74967C9.08384 8.48384 9.08384 8.04384 9.34967 7.77801C9.61551 7.51217 10.0555 7.51217 10.3213 7.77801L13.5572 11.0138C13.8322 11.2797 13.8322 11.7197 13.5572 11.9855L10.3213 15.2213Z" fill="white" />
	        </svg>
	      </a>
	    </div>
	  </div>
	</section>	

		<?php

	} );





};