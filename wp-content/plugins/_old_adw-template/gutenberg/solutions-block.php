<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_solutions' );

function crb_attach_blocks_solutions() {



Block::make( __( 'Resheniye' ) ) 

	->add_fields( array(
		Field::make( 'separator', 'gtb_sep_solutions', __( 'Блок "Какое решение мы предлагаем"' ) ),
		Field::make( 'text', 'gtb_solutions_title', __( 'Заголовок' ) ),
		Field::make( 'text', 'gtb_solutions_subtitle', __( 'Подзаголовок' ) ),
		Field::make( 'complex', 'gtb_solutions', __( 'Опции' ) )
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

	<section class="solutions">
	  <div class="container">
	    <div class="solutions_wrapper">
	      <div class="solutions_subtitle"><?php echo $fields['gtb_solutions_subtitle'] ?></div>
	      <h2 class="solutions_title"><?php echo $fields['gtb_solutions_title'] ?></h2>
				<?php  if ($slides = $fields['gtb_solutions']): ?>
	      <div class="solutions_items">
					<?php foreach ($slides as $slide): ?>
	        <div class="solutions_item">
	          <div class="solutions_item-title"><?php echo $slide['title'] ?></div>
	          <div class="solutions_item-text"><?php echo $slide['text'] ?></div>
	          <div class="solutions_item-img"><img src="<?php echo $slide['photo'] ?>" alt=""></div>
	        </div>
					<?php endforeach ?>	       
	      </div>
				<?php endif  ?> 
	    </div>
	  </div>
	</section>

		<?php

	} );





};