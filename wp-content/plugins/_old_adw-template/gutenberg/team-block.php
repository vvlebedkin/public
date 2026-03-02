<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_team' );

function crb_attach_blocks_team() {



Block::make( __( 'Komanda' ) ) 

	->add_fields( array(
		Field::make( 'separator', 'gtb_sep_team', __( 'Блок "Команда профессионалов"' ) ),
		Field::make( 'text', 'gtb_team_title', __( 'Заголовок' ) ),

		Field::make( 'complex', 'gtb_team', __( 'Команда' ) )
	    ->add_fields( array(
	    	Field::make( 'text', 'title', __( 'Имя' ) )
					->set_width( 40 ),
				Field::make( 'textarea', 'text', __( 'Должность' ) )
					->set_width( 40 ),
  			Field::make( 'image', 'photo', __( 'Изображение' ) )
					->set_width( 20 )
					->set_value_type( 'url' )
	    ))
		
		

	) )

	->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {

		?>

<section id="team" class="team">
  <div class="container">
    <h2><?php echo $fields['gtb_team_title'] ?></h2>
    <?php  if ($slides = $fields['gtb_team']): ?>
    <div class="team_items">
    	<?php foreach ($slides as $slide): ?>
      <div class="team_item">
        <div class="team_item-img">
          <img src="<?php echo $slide['photo'] ?>" alt="">
        </div>
        <div class="team_item-title"><?php echo $slide['title'] ?></div>
        <div class="team_item-text"><?php echo $slide['text'] ?></div>
      </div>
			<?php endforeach ?>
     

      <div class="team_inner">
        <div class="team_inner-title">Хотите стать частью нашей команды?</div>
        <a href="popup_team" class="popup_btn team_inner-btn btn">Присоединяйтесь
          <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.65884 1.83325C4.32217 1.83325 2.33301 3.82242 2.33301 7.15909V14.8316C2.33301 18.1774 4.32217 20.1666 7.65884 20.1666H15.3313C18.668 20.1666 20.6572 18.1774 20.6572 14.8408V7.15909C20.6663 3.82242 18.6772 1.83325 15.3405 1.83325H7.65884ZM10.8213 14.7216C10.6838 14.8591 10.5097 14.9233 10.3355 14.9233C10.1613 14.9233 9.98717 14.8591 9.84967 14.7216C9.58384 14.4558 9.58384 14.0158 9.84967 13.7499L12.5997 10.9999L9.84967 8.24992C9.58384 7.98409 9.58384 7.54409 9.84967 7.27825C10.1155 7.01242 10.5555 7.01242 10.8213 7.27825L14.0572 10.5141C14.3322 10.7799 14.3322 11.2199 14.0572 11.4858L10.8213 14.7216Z" fill="white" />
          </svg>
        </a>
        <div class="team_inner-img"><img src="<?php echo get_template_directory_uri() ?>img/team_inner-img.svg" alt=""></div>
      </div>
    </div>
		<?php endif ?>
  </div>
</section>


		<?php

	} );





};