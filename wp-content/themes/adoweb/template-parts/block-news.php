<?php  

    // $params = [ 'term' => $term_slug, 'class' => 'news-page__over', 'termname' => $term_name ];
    // get_template_part( 'template-parts/block', 'news', $params ); 

?>

<?php 

  $argsw = array(
      'post_type' => 'news',  
      'newscategory'    => $args['term'], 
      'posts_per_page' => 10,
      'order' => 'ASC'
  );

  $posts_Query = new WP_Query($argsw); 
?>

<?php if ($posts_Query): ?>	


<div class="blocknews <?php echo $args['class'] ?>">
	<div class="blocknews__header">
		<h3 class="blocknews__title">Другие новости</h3>
		<div class="blocknews__arrows">
			<div class="news-slider__arrow news-slider__arrow_prev slider__arrow slider__arrow_prev slider-arrow">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="11" viewBox="0 0 14 11" fill="none">
					<path d="M6 0.5L1 5.5M1 5.5L6 10.5M1 5.5H13" stroke="#232323" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>				
			</div>
    	<div class="news-slider__arrow news-slider__arrow_next slider__arrow slider__arrow_next slider-arrow">
    		<svg xmlns="http://www.w3.org/2000/svg" width="14" height="11" viewBox="0 0 14 11" fill="none">
					<path d="M8 10.5L13 5.5M13 5.5L8 0.5M13 5.5L1 5.5" stroke="#232323" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
    	</div>
		</div>
	</div>

	<div class="news-slider swiper-container js-news-slider">
	    <!-- Additional required wrapper -->
	  <div class="swiper-wrapper">
      

      <?php  while ( $posts_Query->have_posts() ) :
            $posts_Query->the_post();  ?>

      <!-- Slides -->
      <div class="swiper-slide news-slider__item">
        <div class="news-card">
        <?php
          $image_id = get_post_thumbnail_id();
          $image_alt = get_post_meta ( $image_id, '_wp_attachment_image_alt', true ); ?>

          <div class="news-card__title"><?php  the_title() ?></div>
          <div class="news-card__mediabox">
        		<img src="<?php the_post_thumbnail_url('large'); ?>" class="card-img-top" alt="<?php echo esc_html ( $image_alt ) ?>">
      		</div>
          
          <div class="news-card__body">
            <div class="news-card__tag"><?php echo $args['termname'] ?></div>
            <span class="news-card__date"><?php echo get_the_date(); ?></span>
            <a href="<?php the_permalink(); ?>" class="news-card__readmore">Читать</a>
            
          </div>
        </div>
      </div>

        <?php
         endwhile; // End of the loop.

         wp_reset_postdata();
        ?>
    </div>
	    
	</div>
</div>	

<?php endif ?>