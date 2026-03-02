<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_subscribe' );

function crb_attach_blocks_subscribe() {



Block::make( __( 'Podpisyvaytes na nas' ) ) 

	->add_fields( array(
		Field::make( 'separator', 'gtb_sep_subscribe', __( 'Блок "Подписывайтесь на нас в соцсетях"' ) ),
		Field::make( 'text', 'gtb_subscribe_title', __( 'Заголовок' ) ),
		Field::make( 'text', 'gtb_subscribe_text', __( 'Текст' ) ),

		Field::make( 'complex', 'gtb_subscribe', __( 'Опции' ) )
	    ->add_fields( array(
	    	Field::make( 'text', 'title', __( 'Заголовок' ) )
					->set_width( 25 ),
				Field::make( 'text', 'text', __( 'Текст' ) )
					->set_width( 30 ),
				Field::make( 'text', 'link', __( 'Ссылка' ) )
					->set_width( 25 ),	
  			Field::make( 'image', 'photo', __( 'Изображение' ) )
					->set_width( 20 )
					->set_value_type( 'url' )
	    ))
		
		

	) )

	->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {

		?>

<section class="subscribe">
  <div class="container">
    <div class="subscribe_warpper">
      <div class="subscribe_info">
        <h2><?php echo $fields['gtb_subscribe_title'] ?></h2>
        <div class="subscribe_text"><?php echo $fields['gtb_subscribe_text'] ?>
          
        </div>
      </div>
			<?php  if ($slides = $fields['gtb_subscribe']): ?>
      <div class="subscribe_items">
				<?php foreach ($slides as $slide): ?>
        <a rel="external" href="<?php echo $slide['link'] ?>" class="subscribe_item">
          <div class="subscribe_item-title"><?php echo $slide['title'] ?></div>
          <div class="subscribe_item-text"><?php echo $slide['text'] ?></div>
          <div class="subscribe_item-img"><img src="<?php echo $slide['photo'] ?>" alt=""></div>
        </a>
				<?php endforeach ?>        
      </div>
			<?php endif ?>
    </div>
  </div>
</section>


		<?php

	} );





};