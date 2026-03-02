<?php 

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_rate' );

function crb_attach_blocks_rate() {



Block::make( __( 'Nashi resheniya' ) ) 

	->add_fields( array(
		Field::make( 'separator', 'gtb_sep_rate', __( 'Блок "Наши решения"' ) ),
		Field::make( 'text', 'gtb_rate_title', __( 'Заголовок' ) ),

		Field::make( 'separator', 'gtb_sep_paket', __( 'Пакеты услуг' ) ),

		Field::make( 'rich_text', 'gtb_sep_basis', __( '«Основной»' ) ),
		Field::make( 'rich_text', 'gtb_sep_extended', __( '«Расширенный»' ) ),
		Field::make( 'rich_text', 'gtb_sep_max', __( '«Максимальный»' ) ),

		Field::make( 'separator', 'gtb_sep_rost', __( 'Программа роста' ) ),
    Field::make( 'checkbox', 'crb_rate_prog_heck', __( 'Скрыть блок' ) )
        ->set_option_value( 'yes' ),
		Field::make( 'text', 'gtb_rate_prog_title', __( 'Заголовок' ) ),
		Field::make( 'textarea', 'gtb_rate_prog_text', __( 'Подзаголовок' ) ),
		Field::make( 'text', 'gtb_rate_prog_btn', __( 'Текст кнопки' ) )	

	) )

	->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {

		?>

  

<section id="rate" class="rate">
  <div class="container">
    <div class="rate_top">
      <h2><?php echo $fields['gtb_rate_title'] ?></h2>
      <div class="rate_arrows">
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
    <div class="rate_slider">
      <div class="rate_slide" style=" background: #F7F8FB;">
        <div class="rate_slide-top">
          <div class="rate_slide-subtitle">
            пакет услуг
          </div>
          <div class="rate_slide-title">
            «Основной»
          </div>
          <img src="<?php echo get_template_directory_uri() ?>/img/rate_slide-top1.svg" alt="">
        </div>
        <div class="rate_slide-options">
        	<?php echo apply_filters( 'the_content', $fields['gtb_sep_basis'] ) ?>          
        </div>
        <!-- <a href="" class=" rate_slide-more">Подробнее</a> -->
        <a href="popup_consult" class="rate_slide-btn btn popup_btn">Узнать стоимость</a>
      </div>
      <div class="rate_slide" style="border: 2px solid #1476FF">
        <div class="rate_slide-top">
          <div class="rate_slide-subtitle">
            пакет услуг
          </div>
          <div class="rate_slide-title">
            «Расширенный»
          </div>
          <img src="<?php echo get_template_directory_uri() ?>/img/rate_slide-top2.svg" alt="">
        </div>
        
        <div class="rate_slide-options">
        	<?php echo apply_filters( 'the_content', $fields['gtb_sep_extended'] ) ?>
        </div>
          
        <!-- <div class="rate_slide-more">Подробнее</div> -->
        <a href="popup_consult" class="rate_slide-btn btn popup_btn">Узнать стоимость</a>
      </div>
      <div class="rate_slide max">
        <div class="rate_slide-top">
          <div class="rate_slide-subtitle">
            пакет услуг
          </div>
          <div class="rate_slide-title">
            «Максимальный»
          </div>
          <img src="<?php echo get_template_directory_uri() ?>/img/rate_slide-top3.svg" alt="">
        </div>
        
        <div class="rate_slide-options">
      	<?php echo apply_filters( 'the_content', $fields['gtb_sep_max'] ) ?>          
        </div>
        
        <!-- <div class="rate_slide-more">Подробнее</div> -->
        <a href="popup_consult" class="rate_slide-btn btn popup_btn">Узнать стоимость</a>
      </div>
    </div>
    <?php if (!$fields['crb_rate_prog_heck']): ?>
    <div class="rate_inner">
      <div class="rate_inner-title"><?php echo $fields['gtb_rate_prog_title'] ?></div>
      <div class="rate_inner-bot">
        <div class="rate_inner-text"><?php echo $fields['gtb_rate_prog_text'] ?></div>
        <a href="popup_programs" class="popup_btn rate_inner-btn btn"><?php echo $fields['gtb_rate_prog_btn'] ?>
          <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.65884 1.83325C4.32217 1.83325 2.33301 3.82242 2.33301 7.15909V14.8316C2.33301 18.1774 4.32217 20.1666 7.65884 20.1666H15.3313C18.668 20.1666 20.6572 18.1774 20.6572 14.8408V7.15909C20.6663 3.82242 18.6772 1.83325 15.3405 1.83325H7.65884ZM10.8213 14.7216C10.6838 14.8591 10.5097 14.9233 10.3355 14.9233C10.1613 14.9233 9.98717 14.8591 9.84967 14.7216C9.58384 14.4558 9.58384 14.0158 9.84967 13.7499L12.5997 10.9999L9.84967 8.24992C9.58384 7.98409 9.58384 7.54409 9.84967 7.27825C10.1155 7.01242 10.5555 7.01242 10.8213 7.27825L14.0572 10.5141C14.3322 10.7799 14.3322 11.2199 14.0572 11.4858L10.8213 14.7216Z" fill="white" />
          </svg>
        </a>
      </div>
    </div>
    <?php endif ?>
  </div>
</section>


		<?php

	} );





};