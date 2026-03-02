<?php if (carbon_get_post_meta( get_the_ID(), 'crb_reviews_title' )): ?>
<?php echo carbon_get_post_meta( get_the_ID(), 'crb_reviews_title' ) ?>
<?php endif  ?>
<?php if (carbon_get_post_meta( get_the_ID(), 'crb_reviews_subtitle' )): ?>
<?php echo carbon_get_post_meta( get_the_ID(), 'crb_reviews_subtitle' ) ?>
<?php endif  ?>
<?php if (carbon_get_post_meta( get_the_ID(), 'crb_reviews_photo' )): ?>
<?php echo carbon_get_post_meta( get_the_ID(), 'crb_reviews_photo' ) ?>
<?php endif  ?>

<?php  if ($slides = carbon_get_post_meta( get_the_ID(), 'crb_reviews' )): ?>
	<?php foreach ($slides as $slide): ?>
		<?php echo $slide['title'] ?>
		<?php echo $slide['text'] ?>	
		<?php echo $slide['photo'] ?>	
	<?php endforeach ?>	

<?php endif  ?>


<section class="reviews-area">
	<div class="container">
		<h2 class="reviews-area__title"><?php echo carbon_get_post_meta( get_the_ID(), 'crb_reviews_title' ) ?></h2>
		<div class="reviews-area__cont">


			
		</div>
	</div>
</section>

<section class="reviews-area">
	<div class="container">
		<h2 class="reviews-area__title"><?php echo carbon_get_post_meta( get_the_ID(), 'crb_reviews_title' ) ?></h2>
		<div class="reviews-area__cont">

			  <!-- Slider brend container -->
			<div class="reviews-slider swiper-container">
			    <!-- Additional required wrapper -->
			    <div class="swiper-wrapper">
			         <?php 
			          $args = array(
			              'post_type' => 'reviews',  
			              'posts_per_page' => 10,
			              'order' => 'ASC'
			          );
			          $posts_Query = new WP_Query($args); ?>

			       <?php if ($posts_Query->have_posts()): ?>
			            
			             

			        <?php   while ( $posts_Query->have_posts() ) :
			              $posts_Query->the_post();  ?>

			        <!-- Slides -->
			        <div class="swiper-slide reviews-slider__item">
			            <div class="card">
			            <?php
			              $image_id = get_post_thumbnail_id();
			              $image_alt = get_post_meta ( $image_id, '_wp_attachment_image_alt', true ); ?>
			            <img src="<?php the_post_thumbnail_url('large'); ?>" class="card-img-top" alt="<?php echo esc_html ( $image_alt ) ?>">
			              
			              <div class="card-body">
			                <h5 class="card-title"><?php  the_title() ?></h5>
			                <p class="card-text"><?php the_excerpt(); ?></p>
			                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Переход куда-нибудь</a>
			                <span class="card-date"><?php echo get_the_date(); ?></span>
			              </div>
			            </div>
			        </div>

			        <?php
			         endwhile; // End of the loop.

			         wp_reset_postdata();
			        ?>

			      <?php else: ?>

			      <?php // Постов не найдено ?>

			      <?php endif ?>


			    </div>
			    <!-- If we need pagination -->
			    <div class="reviews-slider__pagination slider__pagination"></div>

			    <!-- If we need navigation buttons -->
			    <div class="reviews-slider__arrow reviews-slider__arrow_prev slider__arrow slider__arrow_prev"></div>
			    <div class="reviews-slider__arrow reviews-slider__arrow_next slider__arrow slider__arrow_next"></div>
			    
			</div>
			
		</div>
	</div>
</section>

<!-- 

var mySwiper = new Swiper('.js-reviews-slider', {

  slidesPerView: 1,
  spaceBetween: 0,

  pagination: {
    el: '.reviews-slider__pagination',
  },
 
  navigation: {
    nextEl: '.reviews-slider__arrow_next',
    prevEl: '.reviews-slider__arrow_prev',
  },

  breakpoints: {    
    992: {
      slidesPerView: 4,
      spaceBetween: 0,
      centeredSlides: false,
    },
    1200: {
      slidesPerView: 5,
      spaceBetween: 0,
      centeredSlides: false,
    },
  }
 
}) -->

