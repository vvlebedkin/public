<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_reviews' );

function crb_attach_blocks_reviews() {



Block::make( __( 'Otzyvy' ) ) 

	->add_fields( array(
		Field::make( 'separator', 'gtb_sep_reviews', __( 'Блок "Отзывы"' ) ),
		Field::make( 'text', 'gtb_reviews_title', __( 'Заголовок' ) ),

		Field::make( 'complex', 'gtb_reviews', __( 'Опции' ) )
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

<section id="reviews" class="reviews">
  <div class="container">
    <h2><?php echo $fields['gtb_reviews_title'] ?></h2>
		<?php  if ($slides = $fields['gtb_reviews']): ?>
    <div class="reviews_items">
			<?php foreach ($slides as $slide): ?>
      <div class="reviews_item">
        <div class="reviews_item-img">
          <img src="<?php echo $slide['photo'] ?>" alt="">
        </div>
        <div class="reviews_item-title">
         <?php echo $slide['title'] ?>
        </div>
        <div class="reviews_item-text">
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