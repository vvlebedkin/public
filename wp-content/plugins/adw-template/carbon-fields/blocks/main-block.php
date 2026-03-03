<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

use Carbon_Fields\Block;
use Carbon_Fields\Field;

function adw_template_carbon_fields_register_fields_main_block() {
    Block::make( 'glavnyy-ekran-main', __( 'Блок главный экран', 'adw-template' ) )
        ->set_category( 'adw-theme-blocks', __( 'Блоки темы', 'adw-template' ), 'smiley' )
        ->set_icon( 'images-alt2' )
        ->add_fields(
            [
                Field::make( 'separator', 'main_block_separator', __( 'Блок: Главный экран', 'adw-template' ) ),
                Field::make( 'text', 'main_block_title', __( 'Заголовок блока', 'adw-template' ) ),
                Field::make( 'textarea', 'main_block_subtitle', __( 'Подзаголовок блока', 'adw-template' ) ),
                Field::make( 'textarea', 'main_block_slides_html', __( 'HTML слайдов (.main_item swiper-slide внутри .swiper-wrapper)', 'adw-template' ) ),
            ]
        )
        ->set_render_callback(
            function( $fields, $attributes, $inner_blocks ) {
                $title       = ! empty( $fields['main_block_title'] ) ? $fields['main_block_title'] : '';
                $subtitle    = ! empty( $fields['main_block_subtitle'] ) ? $fields['main_block_subtitle'] : '';
                $slides_html = ! empty( $fields['main_block_slides_html'] ) ? $fields['main_block_slides_html'] : '';
                ?>
                <section class="main">
                    <div class="container">
                        <?php if ( $title ) : ?>
                            <h1 class="main_title"><?php echo esc_html( $title ); ?></h1>
                        <?php endif; ?>

                        <?php if ( $subtitle ) : ?>
                            <div class="main_subtitle"><?php echo nl2br( esc_html( $subtitle ) ); ?></div>
                        <?php endif; ?>

                        <div class="main_items swiper">
                            <div class="swiper-wrapper">
                                <?php echo wp_kses_post( $slides_html ); ?>
                            </div>
                            <div class="main_items-bot">
                                <div class="main_items-pagin"></div>
                                <div class="main_items-arrows">
                                    <div class="main_items-arrow prev"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/arrow_left.svg' ); ?>" alt=""></div>
                                    <div class="main_items-arrow next"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/arrow_right.svg' ); ?>" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
            }
        );
}

adw_template_carbon_fields_register_fields_main_block();
