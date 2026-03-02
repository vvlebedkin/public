<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_reasons' );

function crb_attach_blocks_reasons() {



Block::make( __( 'K nam obrashchayutsya' ) ) 

	->add_fields( array(
		Field::make( 'separator', 'gtb_sep_reasons', __( 'Блок "К нам обращаются компании"' ) ),
		Field::make( 'text', 'gtb_reasons_title', __( 'Заголовок' ) ),

		Field::make( 'complex', 'gtb_reasons', __( 'Опции' ) )
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

<section class="reasons">
  <div class="container">
    <h2><span><?php echo $fields['gtb_reasons_title'] ?></h2>
    <?php  if ($slides = $fields['gtb_reasons']): ?>
    <div class="reasons_items">
    	<?php foreach ($slides as $slide): ?>
      <div class="reasons_item">
        <div class="reasons_item-title">
          <?php echo $slide['title'] ?>
        </div>
        <div class="reasons_item-text">
          <?php echo $slide['text'] ?>
        </div>
        <div class="reasons_item-img">
          <img src="<?php echo $slide['photo'] ?>" alt="">
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