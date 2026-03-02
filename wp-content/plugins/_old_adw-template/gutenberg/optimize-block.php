<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_optimize' );

function crb_attach_blocks_optimize() {



Block::make( __( 'Optimizatsiya NDS' ) )  

	->add_fields( array(
		Field::make( 'separator', 'gtb_optimize_about', __( 'Блок "Оптимизация НДС"' ) ),
		Field::make( 'image', 'gtb_optimize_image', __( 'Изображение' ) )
  			->set_value_type( 'url' ),		 	
		Field::make( 'text', 'gtb_optimize_title', __( 'Заголовок' ) ),
		
		Field::make( 'text', 'gtb_optimize_subtitle', __( 'Подзаголовок' ) ),
		Field::make( 'text', 'gtb_optimize_btn', __( 'Текст кнопки' ) ),

	) )

	->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )

	// ->set_category( 'widgets' )

	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {

		?>

	<section id="optimization" class="optimization">
    <div class="container">
        <div class="optimization_wrapper">
            <div class="optimization_img">
                <img src="<?php echo $fields['gtb_optimize_image'] ?>" alt="">
            </div>
            <div class="optimization_info">
                <h2><?php echo esc_html( $fields['gtb_optimize_title'] ); ?></h2>
                <div class="optimization_text"><?php echo esc_html( $fields['gtb_optimize_subtitle'] ); ?></div>
                <a data-fancybox href="#popup_form" class="optimization_btn btn"><?php echo esc_html( $fields['gtb_optimize_btn'] ); ?></a>
            </div>
        </div>
    </div>
	</section>


		<?php

	} );


};