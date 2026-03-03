<?php
    if (! defined('ABSPATH')) {exit;}

    use Carbon_Fields\Block;
    use Carbon_Fields\Field;

    function adw_template_register_clients_block()
    {
    Block::make('blok-klientov', __('Блок клиентов', 'adw-template'))
        ->set_category('adw-theme-blocks', __('Блоки темы', 'adw-template'), 'smiley')
        ->set_icon('groups')
        ->add_fields(
            [
                Field::make('separator', 'clients_block_separator', __('Блок клиентов', 'adw-template')),
                Field::make('text', 'clients_block_title', __('Заголовок блока', 'adw-template'))
                    ->set_default_value(__('Наши клиенты', 'adw-template')),
            ]
        )
        ->set_render_callback(
            function ($fields) {
                $block_title = ! empty($fields['clients_block_title']) ? $fields['clients_block_title'] : '';

                $clients_query = new WP_Query(
                    [
                        'post_type'           => 'clients',
                        'posts_per_page'      => 10,
                        'post_status'         => 'publish',
                        'ignore_sticky_posts' => true,
                    ]
                );
                ?>
                <section class="clients">
                    <div class="container">
                        <?php if ($block_title): ?>
                            <h2 class="clients_title"><?php echo esc_html($block_title); ?></h2>
                        <?php endif; ?>

                        <div class="clients_slider-wrapper">
                            <div class="clients_slider swiper">
                                <div class="swiper-wrapper">
                                    <?php if ($clients_query->have_posts()): ?>
                                        <?php while ($clients_query->have_posts()): ?>
                                            <?php $clients_query->the_post(); ?>
                                            <div class="clients_slide swiper-slide">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <div class="clients_slide-img">
                                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                                    </div>
                                                <?php endif; ?>

                                                <div class="clients_slide-title"><?php echo esc_html(get_the_title()); ?></div>

                                                <div class="clients_slide-text">
                                                    <?php echo esc_html(wp_strip_all_tags(get_the_content())); ?>
                                                </div>

                                                <div class="clients_slide-more">
                                                    <?php esc_html_e('Читать полностью', 'adw-template'); ?>
                                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/arrow_more.svg'); ?>" alt="">
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div>

                                <div class="clients_slider-bot">
                                    <div class="clients_slider-pagin"></div>
                                    <div class="clients_slider-arrows">
                                        <div class="clients_slider-arrow prev"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/arrow_left.svg'); ?>" alt=""></div>
                                        <div class="clients_slider-arrow next"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/arrow_right.svg'); ?>" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
                    }
                            );
                    }

                adw_template_register_clients_block();
