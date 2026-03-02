<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

use Carbon_Fields\Block;
use Carbon_Fields\Field;

function adw_template_register_blog_block() {
    Block::make( 'blok-bloga', __( 'Блок блога', 'adw-template' ) )
        ->set_category( 'adw-theme-blocks', __( 'Блоки темы', 'adw-template' ), 'smiley' )
        ->set_icon( 'welcome-write-blog' )
        ->add_fields(
            [
                Field::make( 'separator', 'blog_block_separator', __( 'Блок блога', 'adw-template' ) ),
                Field::make( 'text', 'blog_block_title', __( 'Заголовок блока', 'adw-template' ) )
                    ->set_default_value( __( 'Блог', 'adw-template' ) ),
                Field::make( 'text', 'blog_link_text', __( 'Текст ссылки', 'adw-template' ) )
                    ->set_default_value( __( 'Перейти в блог', 'adw-template' ) ),
                Field::make( 'text', 'blog_link_url', __( 'Ссылка на страницу блога', 'adw-template' ) )
                    ->set_default_value( '/blog/' ),
            ]
        )
        ->set_render_callback(
            function( $fields, $attributes, $inner_blocks ) {
                $block_title = ! empty( $fields['blog_block_title'] ) ? $fields['blog_block_title'] : '';
                $link_text   = ! empty( $fields['blog_link_text'] ) ? $fields['blog_link_text'] : '';
                $link_url    = ! empty( $fields['blog_link_url'] ) ? $fields['blog_link_url'] : '';

                $blog_query = new WP_Query(
                    [
                        'post_type'           => 'blog',
                        'posts_per_page'      => 3,
                        'post_status'         => 'publish',
                        'ignore_sticky_posts' => true,
                    ]
                );
                ?>
                <section class="blog">
                    <div class="container">
                        <div class="blog_top">
                            <?php if ( $block_title ) : ?>
                                <h2 class="blog_title"><?php echo esc_html( $block_title ); ?></h2>
                            <?php endif; ?>
                            <?php if ( $link_text && $link_url ) : ?>
                                <a href="<?php echo esc_url( $link_url ); ?>" class="blog_link">
                                    <?php echo esc_html( $link_text ); ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/blog_item-btn.svg' ); ?>" alt="">
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="blog_wrapper swiper">
                            <div class="swiper-wrapper">
                                <?php if ( $blog_query->have_posts() ) : ?>
                                    <?php while ( $blog_query->have_posts() ) : ?>
                                        <?php
                                        $blog_query->the_post();
                                        $terms     = get_the_terms( get_the_ID(), 'blog-category' );
                                        $term_name = ( ! is_wp_error( $terms ) && ! empty( $terms ) ) ? $terms[0]->name : '';
                                        ?>
                                        <div class="blog_item swiper-slide">
                                            <div class="blog_item-top">
                                                <?php if ( $term_name ) : ?>
                                                    <div class="blog_item-teg"><?php echo esc_html( $term_name ); ?></div>
                                                <?php endif; ?>
                                                <div class="blog_item-date"><?php echo esc_html( get_the_date( 'd.m.Y' ) ); ?></div>
                                            </div>

                                            <?php if ( has_post_thumbnail() ) : ?>
                                                <div class="blog_item-img">
                                                    <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                                                </div>
                                            <?php endif; ?>

                                            <div class="blog_item-info">
                                                <div class="blog_item-title"><?php echo esc_html( get_the_title() ); ?></div>
                                                <div class="blog_item-text"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28, '...' ) ); ?></div>
                                                <a href="<?php the_permalink(); ?>" class="blog_item-btn">
                                                    <?php esc_html_e( 'ПОДРОБНЕЕ', 'adw-template' ); ?>
                                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/blog_item-btn.svg' ); ?>" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </div>

                            <div class="blog_wrapper-bot">
                                <div class="blog_wrapper-arrow prev"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/arrow_left.svg' ); ?>" alt=""></div>
                                <div class="blog_wrapper-pagin"></div>
                                <div class="blog_wrapper-arrow next"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/arrow_right.svg' ); ?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
            }
        );
}

adw_template_register_blog_block();
