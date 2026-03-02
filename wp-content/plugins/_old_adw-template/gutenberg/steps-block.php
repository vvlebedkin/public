<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_steps' );

function crb_attach_blocks_steps() {



Block::make( __( 'How we will work' ) ) 

	->add_fields( array(
		Field::make( 'separator', 'gtb_sep_steps', __( 'Блок "Как мы будем работать?"' ) ),
		Field::make( 'text', 'gtb_steps_title', __( 'Заголовок' ) ),

		Field::make( 'complex', 'gtb_steps', __( 'Опции' ) )
	    ->add_fields( array(
	    	Field::make( 'text', 'title', __( 'Заголовок' ) )
					->set_width( 40 ),
				Field::make( 'text', 'text', __( 'Текст' ) )
					->set_width( 40 ),
  			Field::make( 'image', 'photo', __( 'Изображение' ) )
					->set_width( 20 )
					->set_value_type( 'url' )
	    ))
		
		

	) )

	->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {

		?>

<section id="steps" class="steps">
  <div class="container">
    <h2><?php echo $fields['gtb_steps_title'] ?></h2>
		<?php  if ($slides = $fields['gtb_steps']): ?>
    <div class="steps_items">
			<?php foreach ($slides as $slide): ?>
      <div class="steps_item">
        <div class="steps_item-img">
          <img src="<?php echo $slide['photo'] ?>" alt="">
        </div>
        <div class="steps_item-title">
         <?php echo $slide['title'] ?>
        </div>
        <div class="steps_item-text">
          <?php echo $slide['text'] ?>
        </div>
      </div>
			<?php endforeach ?>
     
    </div>
		<?php endif ?>
  </div>
</section>

	


		<?php

	} );





};