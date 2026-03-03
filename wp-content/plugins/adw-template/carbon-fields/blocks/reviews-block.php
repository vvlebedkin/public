<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

use Carbon_Fields\Block;
use Carbon_Fields\Field;

function adw_template_register_reviews_block() {
    Block::make( 'blok-otzyvov', __( 'Блок отзывов', 'adw-template' ) )
        ->set_category( 'adw-theme-blocks', __( 'Блоки темы', 'adw-template' ), 'smiley' )
        ->set_icon( 'format-chat' )
        ->add_fields(
            [
                Field::make( 'separator', 'reviews_block_separator', __( 'Блок: Отзывы', 'adw-template' ) ),
                Field::make( 'text', 'reviews_block_title', __( 'Заголовок блока (переопределение)', 'adw-template' ) ),
            ]
        )
        ->set_render_callback(
            function ( $fields, $attributes, $inner_blocks ) {
                $title      = ! empty( $fields['reviews_block_title'] ) ? $fields['reviews_block_title'] : carbon_get_theme_option( 'adw_reviews_block_title' );
                $slides     = carbon_get_theme_option( 'adw_reviews_slides' );
                $more_title = carbon_get_theme_option( 'adw_reviews_more_title' );
                $more_links = carbon_get_theme_option( 'adw_reviews_more_links' );
                $img_dir    = trailingslashit( get_template_directory_uri() ) . 'img/';

                if ( empty( $slides ) || ! is_array( $slides ) ) {
                    return;
                }
                ?>
                <section class="reviews">
                    <div class="container">
                        <?php if ( ! empty( $title ) ) : ?>
                            <h2 class="reviews_title"><?php echo esc_html( $title ); ?></h2>
                        <?php endif; ?>

                        <div class="reviews_wrapper swiper">
                            <div class="swiper-wrapper">
                                <?php foreach ( $slides as $slide ) : ?>
                                    <?php
                                    $slide_type = ! empty( $slide['slide_type'] ) ? $slide['slide_type'] : 'car';
                                    ?>
                                    <?php if ( 'feedback' === $slide_type ) : ?>
                                        <?php
                                        $avatar = ! empty( $slide['avatar'] ) ? $slide['avatar'] : '';
                                        $name   = ! empty( $slide['name'] ) ? $slide['name'] : '';
                                        $rating = ! empty( $slide['rating'] ) ? $slide['rating'] : $img_dir . 'rating.svg';
                                        $text   = ! empty( $slide['text'] ) ? $slide['text'] : '';
                                        ?>
                                        <div class="reviews_item swiper-slide">
                                            <div class="reviews_item-top">
                                                <?php if ( ! empty( $avatar ) ) : ?>
                                                    <div class="reviews_item-icon"><img src="<?php echo esc_url( $avatar ); ?>" alt=""></div>
                                                <?php endif; ?>
                                                <?php if ( ! empty( $name ) ) : ?>
                                                    <div class="reviews_item-name"><?php echo esc_html( $name ); ?></div>
                                                <?php endif; ?>
                                                <?php if ( ! empty( $rating ) ) : ?>
                                                    <div class="reviews_item-rating"><img src="<?php echo esc_url( $rating ); ?>" alt=""></div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if ( ! empty( $text ) ) : ?>
                                                <div class="reviews_item-text"><?php echo wp_kses_post( nl2br( $text ) ); ?></div>
                                            <?php endif; ?>
                                        </div>
                                    <?php else : ?>
                                        <?php
                                        $link     = ! empty( $slide['link'] ) ? $slide['link'] : '#';
                                        $image    = ! empty( $slide['image'] ) ? $slide['image'] : '';
                                        $logo     = ! empty( $slide['logo'] ) ? $slide['logo'] : '';
                                        $car_name = ! empty( $slide['title'] ) ? $slide['title'] : '';
                                        $city     = ! empty( $slide['subtitle'] ) ? $slide['subtitle'] : '';
                                        ?>
                                        <a href="<?php echo esc_url( $link ); ?>" class="reviews_item swiper-slide">
                                            <?php if ( ! empty( $image ) ) : ?>
                                                <div class="reviews_item-img"><img src="<?php echo esc_url( $image ); ?>" alt=""></div>
                                            <?php endif; ?>
                                            <?php if ( ! empty( $logo ) ) : ?>
                                                <div class="reviews_item-logo"><img src="<?php echo esc_url( $logo ); ?>" alt=""></div>
                                            <?php endif; ?>
                                            <div class="reviews_item-info">
                                                <?php if ( ! empty( $car_name ) ) : ?>
                                                    <div class="reviews_item-title"><?php echo esc_html( $car_name ); ?></div>
                                                <?php endif; ?>
                                                <?php if ( ! empty( $city ) ) : ?>
                                                    <div class="reviews_item-subtitle"><?php echo esc_html( $city ); ?></div>
                                                <?php endif; ?>
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>

                            <div class="reviews_wrapper-bot">
                                <div class="reviews_wrapper-arrow prev"><img src="<?php echo esc_url( $img_dir . 'arrow_left.svg' ); ?>" alt=""></div>
                                <div class="reviews_wrapper-pagin"></div>
                                <div class="reviews_wrapper-arrow next"><img src="<?php echo esc_url( $img_dir . 'arrow_right.svg' ); ?>" alt=""></div>
                            </div>
                        </div>

                        <?php if ( ! empty( $more_title ) || ! empty( $more_links ) ) : ?>
                            <div class="reviews_bot">
                                <?php if ( ! empty( $more_title ) ) : ?>
                                    <div class="reviews_bot-title"><?php echo esc_html( $more_title ); ?></div>
                                <?php endif; ?>
                                <?php if ( ! empty( $more_links ) && is_array( $more_links ) ) : ?>
                                    <?php foreach ( $more_links as $item ) : ?>
                                        <?php
                                        $item_icon  = ! empty( $item['icon'] ) ? $item['icon'] : '';
                                        $item_title = ! empty( $item['title'] ) ? $item['title'] : '';
                                        $item_url   = ! empty( $item['url'] ) ? $item['url'] : '#';
                                        ?>
                                        <a href="<?php echo esc_url( $item_url ); ?>" class="reviews_bot-item">
                                            <?php if ( ! empty( $item_icon ) ) : ?>
                                                <img src="<?php echo esc_url( $item_icon ); ?>" alt="">
                                            <?php endif; ?>
                                            <?php echo esc_html( $item_title ); ?>
                                        </a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
                <?php
            }
        );
}

adw_template_register_reviews_block();
