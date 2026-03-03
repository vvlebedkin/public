<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

use Carbon_Fields\Block;
use Carbon_Fields\Field;

function adw_template_register_social_block() {
    Block::make( 'sotsialnye-seti', __( 'СОЦИАЛЬНЫЕ сети' ) )
        ->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )
        ->set_icon( 'share' )
        ->add_fields(
            [
                Field::make( 'separator', 'social_block_separator', __( 'Блок: Социальные сети' ) ),
                Field::make( 'text', 'social_block_title', __( 'Заголовок блока (переопределение)' ) ),
            ]
        )
        ->set_render_callback(
            function ( $fields, $attributes, $inner_blocks ) {
                $title   = ! empty( $fields['social_block_title'] ) ? $fields['social_block_title'] : carbon_get_theme_option( 'adw_social_block_title' );
                $subtitle = carbon_get_theme_option( 'adw_social_block_subtitle' );
                $items   = carbon_get_theme_option( 'adw_social_block_items' );

                if ( empty( $items ) || ! is_array( $items ) ) {
                    return;
                }
                ?>
                <section class="social">
                    <div class="container">
                        <?php if ( ! empty( $title ) ) : ?>
                            <h2 class="social_title"><?php echo esc_html( $title ); ?></h2>
                        <?php endif; ?>

                        <?php if ( ! empty( $subtitle ) ) : ?>
                            <div class="social_subtitle"><?php echo wp_kses_post( $subtitle ); ?></div>
                        <?php endif; ?>

                        <div class="social_items">
                            <?php foreach ( $items as $item ) :
                                $link          = ! empty( $item['link'] ) ? $item['link'] : '#';
                                $image_desktop = ! empty( $item['image_desktop'] ) ? $item['image_desktop'] : '';
                                $image_mobile  = ! empty( $item['image_mobile'] ) ? $item['image_mobile'] : '';
                                $icon          = ! empty( $item['icon'] ) ? $item['icon'] : '';
                                $item_title    = ! empty( $item['title'] ) ? $item['title'] : '';
                                $item_text     = ! empty( $item['text'] ) ? $item['text'] : '';

                                if ( empty( $image_desktop ) ) {
                                    continue;
                                }
                                ?>
                                <a href="<?php echo esc_url( $link ); ?>" class="social_item">
                                    <div class="social_item-img">
                                        <?php if ( ! empty( $image_mobile ) ) : ?>
                                            <picture>
                                                <source srcset="<?php echo esc_url( $image_mobile ); ?>" media="(max-width: 767px)" />
                                                <img src="<?php echo esc_url( $image_desktop ); ?>" alt="">
                                            </picture>
                                        <?php else : ?>
                                            <img src="<?php echo esc_url( $image_desktop ); ?>" alt="">
                                        <?php endif; ?>
                                    </div>

                                    <?php if ( ! empty( $icon ) || ! empty( $item_title ) || ! empty( $item_text ) ) : ?>
                                        <div class="social_item-top">
                                            <?php if ( ! empty( $icon ) ) : ?>
                                                <div class="social_item-icon"><img src="<?php echo esc_url( $icon ); ?>" alt=""></div>
                                            <?php endif; ?>
                                            <?php if ( ! empty( $item_title ) ) : ?>
                                                <div class="social_item-title"><?php echo esc_html( $item_title ); ?></div>
                                            <?php endif; ?>
                                            <?php if ( ! empty( $item_text ) ) : ?>
                                                <div class="social_item-text"><?php echo wp_kses_post( $item_text ); ?></div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
                <?php
            }
        );
}

adw_template_register_social_block();
