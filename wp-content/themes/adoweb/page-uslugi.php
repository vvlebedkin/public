<?php

/*
 * Template name: Страница услуги
 */

get_header(); 
?>
<h1><?php the_title() ?></h1>
    <div class="crumbs">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="crumb">Главная</a>
      <div class="crumb"><?php the_title() ?></div>
    </div>

	<main id="primary" class="site-main"> 

		<?php
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile; // End of the loop.
		?> 

	</main><!-- #main -->

<?php

get_footer();
