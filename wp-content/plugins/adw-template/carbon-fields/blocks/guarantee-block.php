<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

use Carbon_Fields\Block;
use Carbon_Fields\Field;

function adw_template_register_guarantee_block() {
    Block::make( 'blok-garantii', __( 'Блок гарантий' ) )
        ->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )
        ->set_icon( 'shield' )
        ->add_fields(
            [
                Field::make( 'separator', 'guarantee_block_separator', __( 'Блок: Гарантии' ) ),
                Field::make( 'text', 'guarantee_block_title', __( 'Заголовок блока (переопределение)' ) ),
            ]
        )
        ->set_render_callback(
            function ( $fields, $attributes, $inner_blocks ) {
                $img_dir            = trailingslashit( get_template_directory_uri() ) . 'img/';
                $title              = ! empty( $fields['guarantee_block_title'] ) ? $fields['guarantee_block_title'] : carbon_get_theme_option( 'adw_guarantee_block_title' );
                $main_image         = carbon_get_theme_option( 'adw_guarantee_main_image' );
                $right_title        = carbon_get_theme_option( 'adw_guarantee_right_title' );
                $items              = carbon_get_theme_option( 'adw_guarantee_items' );
                $button_text        = carbon_get_theme_option( 'adw_guarantee_button_text' );
                $button_file        = carbon_get_theme_option( 'adw_guarantee_button_url' );
                $button_icon_static = $img_dir . 'guarantee_right-btn.svg';
                $button_url         = '#';

                if ( empty( $main_image ) ) {
                    $main_image = $img_dir . 'guarantee_img.png';
                }

                if ( empty( $items ) || ! is_array( $items ) ) {
                    $items = [
                        [
                            'icon'  => $img_dir . 'guarantee_item1.svg',
                            'title' => 'Автомобили из Китая, Кореи, Японии',
                        ],
                        [
                            'icon'  => $img_dir . 'guarantee_item2.svg',
                            'title' => 'Пробег до 70 000 км',
                        ],
                        [
                            'icon'  => $img_dir . 'guarantee_item3.svg',
                            'title' => 'Гарантия предоставляется официально по договору',
                        ],
                    ];
                }

                if ( is_string( $button_file ) && '' !== $button_file ) {
                    $button_url = $button_file;
                } elseif ( is_array( $button_file ) ) {
                    if ( ! empty( $button_file['url'] ) ) {
                        $button_url = $button_file['url'];
                    } elseif ( ! empty( $button_file['id'] ) ) {
                        $button_url = wp_get_attachment_url( (int) $button_file['id'] );
                    }
                } elseif ( is_numeric( $button_file ) ) {
                    $button_url = wp_get_attachment_url( (int) $button_file );
                }

                if ( empty( $title ) && empty( $right_title ) && empty( $items ) ) {
                    return;
                }
                ?>
                <section class="guarantee">
                    <div class="container">
                        <div class="guarantee_wrapper">
                            <div class="guarantee_left">
                                <?php if ( ! empty( $title ) ) : ?>
                                    <h2 class="guarantee_title"><?php echo wp_kses_post( $title ); ?></h2>
                                <?php endif; ?>

                                <?php if ( ! empty( $main_image ) ) : ?>
                                    <div class="guarantee_img"><img src="<?php echo esc_url( $main_image ); ?>" alt=""></div>
                                <?php endif; ?>
                            </div>

                            <div class="guarantee_right">
                                <?php if ( ! empty( $right_title ) ) : ?>
                                    <div class="guarantee_right-title"><?php echo nl2br( esc_html( $right_title ) ); ?></div>
                                <?php endif; ?>

                                <?php if ( ! empty( $items ) && is_array( $items ) ) : ?>
                                    <div class="guarantee_items">
                                        <?php foreach ( $items as $item_index => $item ) : ?>
                                            <?php
                                            $item_icon  = ! empty( $item['icon'] ) ? $item['icon'] : '';
                                            $item_title = ! empty( $item['title'] ) ? $item['title'] : '';

                                            if ( empty( $item_icon ) ) {
                                                $item_icon = $img_dir . 'guarantee_item' . ( (int) $item_index + 1 ) . '.svg';
                                            }

                                            if ( empty( $item_icon ) && empty( $item_title ) ) {
                                                continue;
                                            }
                                            ?>
                                            <div class="guarantee_item">
                                                <?php if ( ! empty( $item_icon ) ) : ?>
                                                    <div class="guarantee_item-icon"><img src="<?php echo esc_url( $item_icon ); ?>" alt=""></div>
                                                <?php endif; ?>
                                                <?php if ( ! empty( $item_title ) ) : ?>
                                                    <div class="guarantee_item-title"><?php echo nl2br( esc_html( $item_title ) ); ?></div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ( ! empty( $button_text ) ) : ?>
                                    <a href="<?php echo esc_url( $button_url ); ?>" class="guarantee_right-btn">
                                        <?php echo esc_html( $button_text ); ?>
                                        <img src="<?php echo esc_url( $button_icon_static ); ?>" alt="">
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
            }
        );
}

adw_template_register_guarantee_block();
