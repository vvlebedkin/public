<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_cases' );

function crb_attach_blocks_cases() {



Block::make( __( 'Keysy' ) ) 

	->add_fields( array(
		Field::make( 'separator', 'gtb_sep_cases', __( 'Блок "Кейсы"' ) ),
		Field::make( 'text', 'gtb_cases_title', __( 'Заголовок' ) ),

		// Field::make( 'complex', 'gtb_cases', __( 'Опции' ) )
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
        'post_type' => 'services',  
        'posts_per_page' => -1,
        'order' => 'ASC'
    );
    $posts_Query = new WP_Query($args); 

    ?>


<section id="cases" class="cases">
  <div class="container">
    <div class="cases_top">
      <h2><?php echo $fields['gtb_cases_title'] ?></h2>
      <div class="awards_value"><?php echo $posts_Query->found_posts; ?></div>
      <div class="awards_arrows">
        <div class="slider_arrow prev">
          <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 14L1 8L7 2" stroke="#757C93" stroke-width="1.6" stroke-linecap="square" stroke-linejoin="round" />
          </svg>
        </div>
        <div class="slider_arrow next">
          <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 14L8 8L2 2" stroke="#757C93" stroke-width="1.6" stroke-linecap="square" stroke-linejoin="round" />
          </svg>
        </div>
      </div>
    </div>    

 <?php if ($posts_Query->have_posts()): ?>
      
	<div class="cases_slider">       

  <?php   while ( $posts_Query->have_posts() ) :
        $posts_Query->the_post();  ?>

  <!-- Slides -->

	  <div class="cases_slide">
	  	<?php

	  	$post_id = get_the_ID();    

	  	?>

        <?php if ($file_id = carbon_get_post_meta( get_the_ID(), 'crb_services_video' )): ?>  

          <div class="cases_video">  
            <div class="cases_video-item"><?php echo do_shortcode( '[video mp4="'. wp_get_attachment_url($file_id) .'"][/video]' ) ?></div>
            <div class="cases_video-title"><?php echo carbon_get_post_meta( get_the_ID(), 'crb_services_video_title' ) ?></div>
            <div class="cases_video-text"><?php echo carbon_get_post_meta( get_the_ID(), 'crb_services_video_subtitle' ) ?></div>
          </div>            
        <?php endif ?>       

        <?php if ($kakbilo = carbon_get_post_meta( get_the_ID(), 'crb_services_kakbilo' )): ?>
        <div class="cases_slide-title">Как было:</div>
        <div class="cases_slide-text"><?php echo $kakbilo ?></div>            
        <?php endif ?>
        
        <?php  if ($slides = carbon_get_post_meta( get_the_ID(), 'crb_ervices_rezult' )): ?>
        <div class="cases_slide-subtitle">Что в Результате:</div>  
        <ul class="cases_slide-list">
          <?php foreach ($slides as $slide): ?>        
          <li><?php echo $slide['title'] ?></li>                  
          <?php endforeach ?> 
        </ul>           
        <?php endif  ?>
          
            
            
        
	  	
	    
	    <a href="cases_popup_<?php echo $post_id ?>" class="popup_btn cases_slide-btn">Читать подробнее</a>
	  </div>

  <?php
   endwhile; // End of the loop.

   wp_reset_postdata();
  ?>
	</div>

	

<?php endif ?>

    
    <?php if ($posts_Query->have_posts()): ?>
    <div class="cases_popups">
    <?php while ( $posts_Query->have_posts() ) :
        $posts_Query->the_post();  

        $post_id = get_the_ID();

         

        ?>

      <div id="cases_popup_<?php echo $post_id ?>" class="cases_popup" style="display: none;">
        <div class="cases_popup-warpper">
          <div class="cases_popup-title">
            <?php the_title() ?>
          </div>

          <?php  if ($slides = carbon_get_post_meta( get_the_ID(), 'crb_ervices_sfera' )): ?>
            <div class="cases_popup-tags">Сфера деятельности:
              <?php foreach ($slides as $slide): ?>        
              <div class="cases_popup-tag"><?php echo $slide['title'] ?></div>                  
              <?php endforeach ?> 
            </div>           
          <?php endif ?>

          <?php if ($kakbilo = carbon_get_post_meta( get_the_ID(), 'crb_services_kakbilo' )): ?>
          <div class="cases_slide-title">Как было:</div>
          <div class="cases_slide-text"><?php echo $kakbilo ?></div>            
          <?php endif ?>
          <?php if ($process = carbon_get_the_post_meta( 'crb_services_process' )): ?>
          <div class="cases_slide-title">Рабочий процесс:</div>
          <div class="cases_slide-text"><?php echo apply_filters( 'the_content', $process ) ?></div>
          <?php endif ?>

          <?php if ($file_id = carbon_get_post_meta( get_the_ID(), 'crb_services_video' )): ?>                    
          <div class="cases_video">
            <div class="cases_video-item"><?php echo do_shortcode( '[video mp4="'. wp_get_attachment_url($file_id) .'"][/video]' ) ?></div>
            <div class="cases_video-title"><?php echo carbon_get_post_meta( get_the_ID(), 'crb_services_video_title' ) ?></div>
            <div class="cases_video-text"><?php echo carbon_get_post_meta( get_the_ID(), 'crb_services_video_subtitle' ) ?></div>
          </div>            
          <?php endif ?>
                      
          <?php  if ($slides = carbon_get_post_meta( get_the_ID(), 'crb_ervices_rezult' )): ?>
          <div class="cases_popup-inner">    
            <div class="cases_slide-subtitle">Что в Результате:</div>  
            <ul class="cases_slide-list">
              <?php foreach ($slides as $slide): ?>        
              <li><?php echo $slide['title'] ?></li>                  
              <?php endforeach ?> 
            </ul>  
          </div>         
          <?php endif ?>
          
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