<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package adoweb
 */

get_header();

	$terms = get_the_terms( $post->ID, 'newscategory' );

	if( $terms ){
		$term = array_shift( $terms );
		$term_name = $term->name;
		$term_link = get_term_link($term->term_id, 'newscategory');
	}
?>

<h1><?php the_title() ?></h1>
    <div class="crumbs">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="crumb">Главная</a>
      <a href="/novosti/">Блог</a>
      <?php if ($term): ?>
				<a href="<?php $term_link ?>"><?php echo $term_name ?></a>
			<?php endif ?>
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
