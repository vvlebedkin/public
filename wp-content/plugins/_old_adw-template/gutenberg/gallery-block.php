<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_gallery' );

function crb_attach_blocks_gallery() {



Block::make( __( 'Nagrady' ) ) 

	->add_fields( array(
		Field::make( 'separator', 'gtb_sep_gallery', __( 'Блок "Награды"' ) ),
    Field::make( 'checkbox', 'crb_gallery_heck', __( 'Скрыть блок' ) )
        ->set_option_value( 'yes' ),
		Field::make( 'text', 'gtb_gallery_title', __( 'Заголовок' ) ),

		Field::make( 'media_gallery', 'crb_media_gallery', __( 'Награды' ) )
    	->set_type( array( 'image', 'video' ) )

		
		

	) )

	->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {

		?>
<?php if (!$fields['crb_gallery_heck']): ?>
  

<?php // var_dump($fields['crb_gallery_heck'])  ?>
<section id="awards" class="awards">
  <div class="container">
    <div class="awards_wrapper">
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
      <div class="awards_top">
        <h2><?php echo $fields['gtb_gallery_title'] ?></h2>
        <div class="awards_value"><?php echo count($fields['crb_media_gallery']) ?></div>
      </div>

      <?php if ($slides = $fields['crb_media_gallery']): ?>
      <div class="awards_slider">
      	<?php foreach ($slides as $slide): ?>
      	<div class="awards_slide">
          <a data-fancybox="awgallery" href="<?php echo wp_get_attachment_image_url( $slide, 'full' ) ?>"><img src="<?php echo wp_get_attachment_image_url( $slide, 'medium' ) ?>" alt=""></a>
        </div>
      		
      	<?php endforeach ?>	
      </div>
      <?php endif ?>

    </div>
  </div>
</section>
<?php endif ?>

		<?php

	} );





};