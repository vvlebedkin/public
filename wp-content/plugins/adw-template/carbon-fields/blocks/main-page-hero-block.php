<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

use Carbon_Fields\Block;
use Carbon_Fields\Field;

function adw_template_carbon_fields_register_fields_main_page_hero_block() {
    Block::make( 'glavnyy-ekran-avto', __( 'Блок главного экрана', 'adw-template' ) )
        ->set_category( 'adw-theme-blocks', __( 'Блоки темы', 'adw-template' ), 'smiley' )
        ->set_icon( 'video-alt3' )
        ->add_fields(
            [
                Field::make( 'separator', 'main_page_hero_separator', __( 'Блок: Главный экран (видео)', 'adw-template' ) ),
                Field::make( 'file', 'main_page_hero_video_url', __( 'Видео (mp4)', 'adw-template' ) )
                    ->set_type( [ 'video' ] )
                    ->set_value_type( 'url' ),
                Field::make( 'rich_text', 'main_page_hero_title', __( 'Главный заголовок (H1)', 'adw-template' ) ),
                Field::make( 'rich_text', 'main_page_hero_subtitle', __( 'Подзаголовок', 'adw-template' ) ),
                Field::make( 'text', 'main_page_hero_btn_text', __( 'Текст кнопки', 'adw-template' ) ),
                Field::make( 'text', 'main_page_hero_btn_url', __( 'Ссылка кнопки', 'adw-template' ) ),
                Field::make( 'text', 'main_page_hero_price_title', __( 'Заголовок выпадающего меню цен', 'adw-template' ) ),
                Field::make( 'complex', 'main_page_hero_price_links', __( 'Пункты выпадающего меню цен', 'adw-template' ) )
                    ->add_fields(
                        [
                            Field::make( 'text', 'title', __( 'Текст пункта', 'adw-template' ) ),
                            Field::make( 'text', 'url', __( 'Ссылка пункта', 'adw-template' ) ),
                        ]
                    ),
            ]
        )
        ->set_render_callback(
            function( $fields, $attributes, $inner_blocks ) {
                $video_url    = ! empty( $fields['main_page_hero_video_url'] ) ? $fields['main_page_hero_video_url'] : '';
                $title        = ! empty( $fields['main_page_hero_title'] ) ? $fields['main_page_hero_title'] : '';
                $subtitle     = ! empty( $fields['main_page_hero_subtitle'] ) ? $fields['main_page_hero_subtitle'] : '';
                $btn_text     = ! empty( $fields['main_page_hero_btn_text'] ) ? $fields['main_page_hero_btn_text'] : '';
                $btn_url      = ! empty( $fields['main_page_hero_btn_url'] ) ? $fields['main_page_hero_btn_url'] : '';
                $price_title  = ! empty( $fields['main_page_hero_price_title'] ) ? $fields['main_page_hero_price_title'] : '';
                $price_links  = ! empty( $fields['main_page_hero_price_links'] ) ? $fields['main_page_hero_price_links'] : [];
                $img_dir      = trailingslashit( get_template_directory_uri() ) . 'img/';
                $price_icons  = [
                    $img_dir . 'main_price-link1.svg',
                    $img_dir . 'main_price-link2.svg',
                    $img_dir . 'main_price-link3.svg',
                    $img_dir . 'main_price-link4.svg',
                ];
                ?>
                <section class="main main_page">
                    <div class="main_page-bg">
                        <?php if ( $video_url ) : ?>
                            <video fetchpriority="high" autoplay muted loop playsinline>
                                <source src="<?php echo esc_url( $video_url ); ?>" type="video/mp4">
                                <?php esc_html_e( 'Ваш браузер не поддерживает видео.', 'adw-template' ); ?>
                            </video>
                        <?php endif; ?>
                    </div>
                    <div class="container">
                        <?php if ( $title ) : ?>
                            <h1 class="main_title"><?php echo wp_kses_post( $title ); ?></h1>
                        <?php endif; ?>

                        <?php if ( $subtitle ) : ?>
                            <div class="main_subtitle"><?php echo wp_kses_post( $subtitle ); ?></div>
                        <?php endif; ?>

                        <div class="main_btns">
                            <?php if ( $btn_text ) : ?>
                                <a href="<?php echo esc_url( $btn_url ? $btn_url : '#' ); ?>" class="main_btn btn"><?php echo esc_html( $btn_text ); ?></a>
                            <?php endif; ?>

                            <?php if ( $price_title ) : ?>
                                <div class="main_btn-price">
                                    <?php echo esc_html( $price_title ); ?>
                                    <img src="<?php echo esc_url( $img_dir . 'main_btn-price.svg' ); ?>" alt="">
                                    <?php if ( ! empty( $price_links ) && is_array( $price_links ) ) : ?>
                                        <div class="main_price-dropdown">
                                            <?php foreach ( $price_links as $index => $item ) : ?>
                                                <?php
                                                $item_title = ! empty( $item['title'] ) ? $item['title'] : '';
                                                $item_url   = ! empty( $item['url'] ) ? $item['url'] : '#';
                                                $item_icon  = isset( $price_icons[ $index ] ) ? $price_icons[ $index ] : end( $price_icons );
                                                ?>
                                                <?php if ( $item_title ) : ?>
                                                    <a href="<?php echo esc_url( $item_url ); ?>" class="main_price-link">
                                                        <?php echo esc_html( $item_title ); ?>
                                                        <img src="<?php echo esc_url( $item_icon ); ?>" alt="">
                                                    </a>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
                <?php
            }
        );
}

adw_template_carbon_fields_register_fields_main_page_hero_block();
