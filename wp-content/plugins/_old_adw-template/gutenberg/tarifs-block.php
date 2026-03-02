<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_tarifs' );

function crb_attach_blocks_tarifs() {



Block::make( __( 'Tarify' ) ) 

	->add_fields( array(
		Field::make( 'separator', 'gtb_sep_tarifs', __( 'Блок "Тарифы"' ) ),
		Field::make( 'text', 'gtb_tarifs_title', __( 'Заголовок' ) ),

		Field::make( 'complex', 'gtb_tarifs', __( 'Опции' ) )
	    ->add_fields( array(
	    	Field::make( 'text', 'title', __( 'Заголовок' ) )
					->set_width( 20 ),
				Field::make( 'text', 'text', __( 'Текст' ) )
					->set_width( 30 ),
				Field::make( 'textarea', 'option', __( 'Опции' ) )
					->set_width( 30 ),	
				Field::make( 'text', 'textbtn', __( 'Текст кнопки' ) )
					->set_width( 20 ),	
  			
	    ))
		
		

	) )

	->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {

		?>

	<section id="tarifs" class="tarifs">
    <div class="container">
      <h2><?php echo $fields['gtb_tarifs_title'] ?></h2>

      <?php  if ($slides = $fields['gtb_tarifs']): ?>
      <div class="tarifs_items">
      	<?php foreach ($slides as $slide): ?>
        <div class="tarifs_item">
          <div class="tarifs_item-title">
          	<?php echo $slide['title'] ?>              
          </div>
          <?php if ($slide['text']): ?>
          <div class="tarifs_item-text">
            <?php echo $slide['text'] ; ?>
          </div>	
          <?php endif ?>
          
          <?php if ($slide['option']): ?>
          <div class="tarifs_item-options">
          	<?php echo $slide['option'] ?>
          </div>
					<?php endif ?>
          <a href="#" class="tarifs_item-btn btn"><?php echo $slide['textbtn'] ?></a>
        </div>
        <?php endforeach ?>
           
        </div>
        <?php endif  ?>
    </div>
	</section>	

	


		<?php

	} );





};