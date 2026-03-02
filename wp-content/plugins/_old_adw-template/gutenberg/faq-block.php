<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_faq' );

function crb_attach_blocks_faq() {



Block::make( __( 'FAQ' ) ) 

	->add_fields( array(
		Field::make( 'separator', 'gtb_sep_faq', __( 'Блок "Часто задаваемые вопросы"' ) ),
		Field::make( 'text', 'gtb_faq_title', __( 'Заголовок' ) ),

		Field::make( 'complex', 'gtb_faq', __( 'Опции' ) )
	    ->add_fields( array(
	    	Field::make( 'text', 'question', __( 'Заголовок' ) )
					->set_width( 40 ),
				Field::make( 'textarea', 'answer', __( 'Текст' ) )
					->set_width( 40 ),  			
	    ))
		
		

	) )

	->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {

		?>

<section id="faq" class="faq">
  <div class="container">
    <h2><?php echo $fields['gtb_faq_title'] ?></h2>
    <?php  if ($slides = $fields['gtb_faq']): ?>
    <div class="faq_items">
    	<?php foreach ($slides as $slide): ?>
      <div class="faq_item">
        <div class="faq_item-title">
          <?php echo $slide['question'] ?> <span></span>
        </div>
        <div class="faq_item-text">
          <?php echo $slide['answer'] ?>
        </div>
      </div>
      <?php endforeach ?>     
    </div>
    <?php endif ?>

    <div class="faq_inner">
      <div class="faq_inner-title">
        Не нашли ответ на свой вопрос? <br> Напишите нам или позвоните &nbsp; <a href="tel:+79940000700">8 994 0000 700</a>
      </div>
      <div class="faq_inner-messages">
      	<?php if (carbon_get_theme_option( 'crb_contacts_wtsp' ) ): ?>  
        <a rel="external" href="https://wa.me/<?php echo carbon_get_theme_option( 'crb_contacts_wtsp' ) ?>" class="faq_inner-message"><img src="<?php echo get_template_directory_uri() ?>/img/message1.svg" alt=""></a>
        <?php endif ?>
        <?php if (carbon_get_theme_option( 'crb_contacts_tg' ) ): ?> 
        <a rel="external" href="https://t.me/<?php echo carbon_get_theme_option( 'crb_contacts_tg' ) ?>" class="faq_inner-message"><img src="<?php echo get_template_directory_uri() ?>/img/message2.svg" alt=""></a>
        <?php endif ?>
      </div>
    </div>
  </div>
</section>	


		<?php

	} );





};