<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_form' );

function crb_attach_blocks_form() {



Block::make( __( 'Forma' ) ) 

	->add_fields( array(
		// Field::make( 'image', 'gtb_form_image', __( 'Изображение' ) )
  	// 		->set_value_type( 'url' ),		 	

		Field::make( 'separator', 'gtb_sep_form', __( 'Блок "Форма"' ) ),
		Field::make( 'text', 'gtb_form_title', __( 'Заголовок' ) ),		
		Field::make( 'textarea', 'gtb_form_text', __( 'Текст' ) ),
		Field::make( 'text', 'gtb_form_short', __( 'Шорткод' ) ),

		// Field::make( 'text', 'gtb_form_btn', __( 'Текст кнопки' ) ),

		// Field::make( 'rich_text', 'content', __( 'Block Content' ) ),

	) )

	->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )

	// ->set_category( 'widgets' )

	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {

		?>

<section class="consult">
  <div class="container">
    <div class="consult_wrapper">
      <div class="consult_info">
        <div class="consult_title">
          <?php echo $fields['gtb_form_title']; ?>
        </div>
        <div class="consult_text">
          <?php echo $fields['gtb_form_text']; ?>
        </div>
      </div>
      <div class="consult_form">
      	<?php echo $fields['gtb_form_short']; ?>       
      </div>
    </div>
  </div>
</section>

		<?php

	} );





};