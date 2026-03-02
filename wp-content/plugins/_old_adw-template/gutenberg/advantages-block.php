<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_advantages' );

function crb_attach_blocks_advantages() {



Block::make( __( 'Preimushchestva' ) )

	->add_fields( array(
		Field::make( 'separator', 'gtb_sep_advantages', __( 'Блок "Ваша выгода, наше преимущество"' ) ),
		Field::make( 'text', 'gtb_advantages_title', __( 'Заголовок' ) ),

		Field::make( 'complex', 'gtb_advantages', __( 'Опции' ) )
	    ->add_fields( array(
	    	
				Field::make( 'textarea', 'text', __( 'Текст' ) )
					->set_width( 80 ),
  			Field::make( 'image', 'photo', __( 'Изображение' ) )
					->set_width( 20 )
					->set_value_type( 'url' )
	    ))
		
		

	) )

	->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {

		?>

	<section class="advantages">
    <div class="container">
      <h2><?php echo $fields['gtb_advantages_title'] ?></h2>
      <?php  if ($slides = $fields['gtb_advantages']): ?>
      <div class="advantages_items">
      	<?php foreach ($slides as $slide): ?>
          <div class="advantages_item">
              <img src="<?php echo $slide['photo'] ?>" alt="">
              <?php echo $slide['text'] ?>
          </div>
        <?php endforeach ?>         
      </div>
      <?php endif  ?>  
    </div>
	</section>


		<?php

	} );





};