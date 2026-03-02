<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

use Carbon_Fields\Block;
use Carbon_Fields\Field;

function adw_template_register_faq_block() {
    Block::make( 'blok-faq', __( 'Блок FAQ' ) )
        ->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )
        ->set_icon( 'editor-help' )
        ->add_fields( [
            Field::make( 'separator', 'faq_block_separator', __( 'Блок FAQ' ) ),
            Field::make( 'text', 'faq_block_title', __( 'Заголовок блока' ) )
                ->set_default_value( 'Популярные вопросы' ),
            Field::make( 'text', 'faq_link_text', __( 'Текст ссылки' ) )
                ->set_default_value( 'Все вопросы' ),
            Field::make( 'text', 'faq_link_url', __( 'Ссылка' ) ),
            Field::make( 'complex', 'faq_items', __( 'Список вопросов' ) )
                ->add_fields( [
                    Field::make( 'textarea', 'faq_item_title', __( 'Вопрос' ) ),
                    Field::make( 'textarea', 'faq_item_text', __( 'Ответ' ) ),
                ] ),
        ] )
        ->set_render_callback( function( $fields, $attributes, $inner_blocks ) {
            $faq_items  = ! empty( $fields['faq_items'] ) ? $fields['faq_items'] : [];
            $link_text  = ! empty( $fields['faq_link_text'] ) ? $fields['faq_link_text'] : '';
            $link_url   = ! empty( $fields['faq_link_url'] ) ? $fields['faq_link_url'] : '';
            $block_title = ! empty( $fields['faq_block_title'] ) ? $fields['faq_block_title'] : '';
            ?>
            <section class="faq">
                <div class="container">
                    <div class="faq_wrapper">
                        <div class="faq_top">
                            <?php if ( $block_title ) : ?>
                                <h2 class="faq_title"><?php echo esc_html( $block_title ); ?></h2>
                            <?php endif; ?>

                            <?php if ( $link_text ) : ?>
                                <a href="<?php echo esc_url( $link_url ); ?>" class="faq_link">
                                    <?php echo esc_html( $link_text ); ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/blog_item-btn.svg' ); ?>" alt="">
                                </a>
                            <?php endif; ?>
                        </div>

                        <?php if ( ! empty( $faq_items ) ) : ?>
                            <div class="faq_items">
                                <?php foreach ( $faq_items as $item ) : ?>
                                    <div class="faq_item">
                                        <?php if ( ! empty( $item['faq_item_title'] ) ) : ?>
                                            <div class="faq_item-title"><?php echo esc_html( $item['faq_item_title'] ); ?></div>
                                        <?php endif; ?>
                                        <?php if ( ! empty( $item['faq_item_text'] ) ) : ?>
                                            <div class="faq_item-text"><?php echo nl2br( esc_html( $item['faq_item_text'] ) ); ?></div>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <?php
        } );
}

adw_template_register_faq_block();
