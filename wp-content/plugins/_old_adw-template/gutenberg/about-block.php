<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_about' );

function crb_attach_blocks_about() {



Block::make( __( 'O nas' ) )

	->add_fields( array(
		Field::make( 'separator', 'gtb_sep_about', __( 'Блок "О нас"' ) ),
		Field::make( 'text', 'gtb_about_title', __( 'Заголовок' ) ),
		// Field::make( 'text', 'gtb_about_subtitle', __( 'Подзаголовок' ) ),
		Field::make( 'rich_text', 'gtb_about_content', __( 'Содержание' ) ),
		Field::make( 'rich_text', 'gtb_about_mission', __( 'Миссия' ) ),
		Field::make( 'image', 'gtb_about_photo', __( 'Изображение' ) )
		 	->set_width( 20 )
			->set_value_type( 'url' ),
		Field::make( 'text', 'gtb_about_quote', __( 'Цитата' ) )
			->set_width( 40 ),
		Field::make( 'text', 'gtb_about_dir', __( 'Руководитель' ) )
			->set_width( 40 ),
		Field::make( 'separator', 'gtb_sep_about-book', __( 'Блок "Книга"' ) ),
		Field::make( 'rich_text', 'gtb_about_book-content', __( 'Содержание' ) ),
		Field::make( 'complex', 'gtb_about_book-options', __( 'Опции' ) )
	    ->add_fields( array(	    	
				Field::make( 'text', 'text', __( 'Текст' ) )
					->set_width( 60 ),
				Field::make( 'text', 'price', __( 'Цена' ) )
					->set_width( 40 ),
  			
	    )),
		// Field::make( 'file', 'gtb_about_book-file', __( 'Файл' ) )
		
		

	) )

	->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )

	// ->set_category( 'widgets' )

	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {

		?>

<section id="about" class="about">
  <div class="container">
    <div class="about_wrapper">
      <div class="about_info"> 
        <h2><?php echo $fields['gtb_about_title'] ?></h2>
        <?php echo apply_filters( 'the_content', $fields['gtb_about_content'] ) ?> 
        <div class="about_mission">
        	<?php echo apply_filters( 'the_content', $fields['gtb_about_mission'] ) ?>          
        </div>
      </div>
      <div class="about_person">
        <div class="about_person-img">
          <img src="<?php echo $fields['gtb_about_photo'] ?>" alt="">
        </div>
        <?php if ($fields['gtb_about_quote'] || $fields['gtb_about_dir']): ?>
        	<div class="about_person-info">
	          <div class="about_person-title"><?php echo $fields['gtb_about_quote'] ?></div>
	          <div class="about_person-desc"><?php echo $fields['gtb_about_dir'] ?></div>
	        </div>
        <?php endif ?>
        
      </div>
    </div>
    <div class="about_inner">
    	<div class="about_inner-cont">
    	<?php echo apply_filters( 'the_content', $fields['gtb_about_book-content'] ) ?>
      

      <div class="about_inner-btns">

      	<?php if ($slides = $fields['gtb_about_book-options']): ?>	 
      	  <ul class="about_inner-options">     	
					<?php foreach ($slides as $slide): ?>	
						<li><span><?php echo $slide['text'] ?></span>
      		<span><?php echo $slide['price'] ?></span></li>
				    				
					<?php endforeach ?>
					</ul>
				<?php endif  ?>
      	

        <a  href="popup_autor" class="about_inner-btn btn popup_btn">
          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 2.375H5C5.66304 2.375 6.29893 2.63839 6.76777 3.10723C7.23661 3.57607 7.5 4.21196 7.5 4.875V13.625C7.5 13.1277 7.30246 12.6508 6.95083 12.2992C6.59919 11.9475 6.12228 11.75 5.625 11.75H1.25V2.375Z" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M13.75 2.375H10C9.33696 2.375 8.70107 2.63839 8.23223 3.10723C7.76339 3.57607 7.5 4.21196 7.5 4.875V13.625C7.5 13.1277 7.69754 12.6508 8.04917 12.2992C8.40081 11.9475 8.87772 11.75 9.375 11.75H13.75V2.375Z" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>

          </svg>
          Заказать книгу</a>
        <!-- <a href="#" class="about_inner-btn btn">
          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.5 8.625C8.53553 8.625 9.375 7.78553 9.375 6.75C9.375 5.71447 8.53553 4.875 7.5 4.875C6.46447 4.875 5.625 5.71447 5.625 6.75C5.625 7.78553 6.46447 8.625 7.5 8.625Z" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M7.5 14.25C10 11.75 12.5 9.51142 12.5 6.75C12.5 3.98858 10.2614 1.75 7.5 1.75C4.73858 1.75 2.5 3.98858 2.5 6.75C2.5 9.51142 5 11.75 7.5 14.25Z" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          Где купить?</a> -->
      </div>
    </div>
  </div>
  </div>
</section>


	


		<?php

	} );





};