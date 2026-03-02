<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_events' );

function crb_attach_blocks_events() {



Block::make( __( 'Meropriyatiya' ) ) 

	->add_fields( array(
		Field::make( 'separator', 'gtb_sep_events', __( 'Блок "Ближайшие мероприятия"' ) ),
		Field::make( 'text', 'gtb_events_title', __( 'Заголовок' ) ),

		// Field::make( 'complex', 'gtb_events', __( 'Опции' ) )
	  //   ->add_fields( array(
	  //   	Field::make( 'text', 'title', __( 'Заголовок' ) )
		// 			->set_width( 40 ),
		// 		Field::make( 'text', 'text', __( 'Текст' ) )
		// 			->set_width( 40 ),
  	// 		Field::make( 'image', 'photo', __( 'Изображение' ) )
		// 			->set_width( 20 )
		// 			->set_value_type( 'url' )
	  //   ))
		
		

	) )

	->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {

		?>


 <?php 
    $args = array(
        'post_type' => 'news',  
        'posts_per_page' => -1,
        'order' => 'DESC'
    );
    $posts_Query = new WP_Query($args); 

    ?>


<section id="events" class="events">
  <div class="container">

    <div class="events_top">
      <h2><span><?php echo $fields['gtb_events_title'] ?></h2>
      <div class="awards_value"><?php echo $posts_Query->found_posts; ?></div>
    </div>



 <?php if ($posts_Query->have_posts()): ?>
      
  <div class="events_items">      

  <?php   while ( $posts_Query->have_posts() ) :
        $posts_Query->the_post();  ?>

  <!-- Slides -->

    <?php $post_id = get_the_ID(); ?>
	 

      <div class="events_item">
        <div class="events_item-date">
          <?php echo carbon_get_post_meta( get_the_ID(), 'crb_news_date' ) ?>
        </div>
        <?php  if ($slides = carbon_get_post_meta( get_the_ID(), 'crb_news_tags' )): ?>
        <div class="events_item-tegs">
          <?php foreach ($slides as $slide): ?>        
          <div class="events_item-teg"><?php echo $slide['title'] ?></div>
          <?php endforeach ?>  
        </div>
        <?php endif  ?>
        
        <div class="events_item-title"><?php the_title() ?></div>
        <div class="events_item-text"><?php the_excerpt() ?></div>
        <a href="events_popup_<?php echo $post_id ?>" class="popup_btn events_item-link">Узнать подробнее
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.25 12.75L12.75 5.25M12.75 5.25H5.25M12.75 5.25V12.75" stroke="#1476FF" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
      </div>
	  

  <?php
   endwhile; // End of the loop.

   wp_reset_postdata();
  ?>
	</div>

	

<?php endif ?>

    
    <?php if ($posts_Query->have_posts()): ?>
    <div class="events_popups">
    <?php while ( $posts_Query->have_posts() ) :
        $posts_Query->the_post();  

        $post_id = get_the_ID();

        ?>

      <div id="events_popup_<?php echo $post_id ?>" class="cases_popup" style="display: none;">
        <div class="cases_popup-warpper">
          <div class="cases_popup-title">
            <?php the_title() ?>
          </div>

          <?php  if ($slides = carbon_get_post_meta( get_the_ID(), 'crb_news_tags' )): ?>
          <div class="cases_popup-tags">
            <?php foreach ($slides as $slide): ?>        
            <div class="cases_popup-tag"><?php echo $slide['title'] ?></div>
            <?php endforeach ?>  
          </div>
          <?php endif  ?>


          <!-- <div class="cases_popup-tags">
            <div class="cases_popup-tag">
              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 6.5C6.82843 6.5 7.5 5.82843 7.5 5C7.5 4.17157 6.82843 3.5 6 3.5C5.17157 3.5 4.5 4.17157 4.5 5C4.5 5.82843 5.17157 6.5 6 6.5Z" stroke="#878EA5" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6 11C8 9 10 7.20914 10 5C10 2.79086 8.20914 1 6 1C3.79086 1 2 2.79086 2 5C2 7.20914 4 9 6 11Z" stroke="#878EA5" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              Екатеринбург</div>
            <div class="cases_popup-tag">Форум</div>
          </div> -->
          
          <div class="events_popup-options">
            <div class="events_popup-option">Дата проведения: <?php echo carbon_get_post_meta( get_the_ID(), 'crb_news_date_prov' ) ?></div>
            <div class="events_popup-option">Место проведения: <?php echo carbon_get_post_meta( get_the_ID(), 'crb_news_mesto_prov' ) ?></div>
          </div>
         <?php the_content() ?>
        </div>
      </div>
      
    <?php
	   endwhile; // End of the loop.

	   wp_reset_postdata();
	  ?>  

    </div>
    <?php endif ?>
  </div>
</section>
	


		<?php

	} );





};