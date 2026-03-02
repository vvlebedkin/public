<?php

/*
 * Template name: Главная страница
 */

get_header();
?>
	<?php
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile; // End of the loop.
	?>

	<?php
		if ( carbon_get_post_meta( get_the_ID(), 'crb_hero_check' )) {
			get_template_part( 'template-parts/block', 'hero' );
		}
	  if ( carbon_get_post_meta( get_the_ID(), 'crb_prods_check' )) {
	    get_template_part( 'template-parts/block', 'products' );
	  }
	  if ( carbon_get_post_meta( get_the_ID(), 'crb_about_check' )) {
	    get_template_part( 'template-parts/block', 'about' );
	  }
	  if ( carbon_get_post_meta( get_the_ID(), 'crb_news_check' )) {
	    get_template_part( 'template-parts/block', 'news' );
	  }		
	  if ( carbon_get_post_meta( get_the_ID(), 'crb_advantage_check' )) {
	    get_template_part( 'template-parts/block', 'advantage' );
	  }	 
	  if ( carbon_get_post_meta( get_the_ID(), 'crb_faq_check' )) {
	    get_template_part( 'template-parts/block', 'faq' );
	  }
	  if ( carbon_get_post_meta( get_the_ID(), 'crb_reviews_check' )) {
	    get_template_part( 'template-parts/block', 'reviews' );
	  }
	  if ( carbon_get_post_meta( get_the_ID(), 'crb_partners_check' )) {
	    get_template_part( 'template-parts/block', 'partners' );
	  }
		if ( carbon_get_post_meta( get_the_ID(), 'crb_services_check' )) {
	  	get_template_part( 'template-parts/block', 'services' );
		}

	?>

<?php

get_footer();
