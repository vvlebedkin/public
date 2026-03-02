<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_thank' );

function crb_attach_blocks_thank() {



Block::make( __( 'Spasibo' ) ) 

	->add_fields( array(
		// Field::make( 'image', 'gtb_thank_image', __( 'Изображение' ) )
  	// 		->set_value_type( 'url' ),		 	
		Field::make( 'text', 'gtb_thank_title', __( 'Заголовок' ) ),
		
		Field::make( 'text', 'gtb_thank_subtitle', __( 'Подзаголовок' ) ),
		Field::make( 'text', 'gtb_thank_btn', __( 'Текст кнопки' ) ),

		// Field::make( 'rich_text', 'content', __( 'Block Content' ) ),

	) )

	->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )

	// ->set_category( 'widgets' )

	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {

		?>

	<section class="thanks">
    <div class="container">
      <div class="thanks_icon"><img src="img/thanks_icon.svg" alt=""></div>
      <div class="thanks_title"><?php echo $fields['gtb_thank_title']; ?></div>
      <div class="thanks_text"><?php echo esc_html( $fields['gtb_thank_subtitle'] ); ?></div>
      <div class="thanks_btns">
      	<?php if (carbon_get_theme_option( 'crb_contacts_tgs' ) ): ?>
        <a rel="external" href="<?php echo carbon_get_theme_option( 'crb_contacts_tgs' ) ?>" class="thanks_btn btn_white">
       		<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.03821 6.93665C6.99405 4.77746 10.2987 3.354 11.9522 2.66625C16.6733 0.70259 17.6543 0.361481 18.2937 0.350218C18.4343 0.34774 18.7488 0.382593 18.9525 0.547866C19.1244 0.687419 19.1718 0.875935 19.1944 1.00825C19.2171 1.14056 19.2452 1.44197 19.2228 1.67748C18.967 4.36558 17.86 10.8889 17.2968 13.8996C17.0585 15.1736 16.5893 15.6007 16.135 15.6425C15.1478 15.7334 14.3982 14.9901 13.442 14.3633C11.9458 13.3825 11.1005 12.772 9.64815 11.8149C7.96971 10.7088 9.05777 10.1009 10.0143 9.10743C10.2646 8.84743 14.6144 4.89102 14.6985 4.53211C14.7091 4.48722 14.7188 4.3199 14.6194 4.23155C14.52 4.1432 14.3733 4.17341 14.2675 4.19744C14.1174 4.2315 11.7272 5.81136 7.09677 8.93701C6.41831 9.40289 5.80378 9.62988 5.25318 9.61799C4.6462 9.60488 3.4786 9.27479 2.61061 8.99264C1.54598 8.64657 0.699835 8.4636 0.773516 7.87587C0.811893 7.56975 1.23346 7.25667 2.03821 6.93665Z" fill="#1476FF"/>
          </svg>
            Telegram-канал</a>
          <?php endif ?>  
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="thanks_btn btn"><?php echo esc_html( $fields['gtb_thank_btn'] ); ?></a>
      </div>
    </div>
  </section>	

		<?php

	} );





};