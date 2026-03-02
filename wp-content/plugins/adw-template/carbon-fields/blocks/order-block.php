<?php
    if (! defined('ABSPATH')) {exit;}

    use Carbon_Fields\Block;
    use Carbon_Fields\Field;

    Block::make('ostavte-zayavku', __('Форма: Оставьте заявку'))
    ->set_category('adw-theme-blocks', __('Блоки темы'), 'smiley')
    ->set_icon('email-alt')
    ->set_description('Глобальный блок заявки. Настраивается в "Настройки сайта".')
    ->add_fields([
        Field::make('html', 'info_text')
            ->set_html('<p style="color:#888;">Этот блок выводит данные из глобальных настроек сайта. Вставьте его на страницу, и он всё сделает сам.</p>'),
    ])
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {

        // Получаем глобальные данные
        $phone   = carbon_get_theme_option('adw_contact_phone');
        $socials = carbon_get_theme_option('adw_social_links'); // Массив соцсетей

        $title    = carbon_get_theme_option('adw_order_title');
        $subtitle = carbon_get_theme_option('adw_order_subtitle');
        $msg_1    = carbon_get_theme_option('adw_order_msg_1');
        $msg_2    = carbon_get_theme_option('adw_order_msg_2');
        $cf7_code = carbon_get_theme_option('adw_order_cf7');

        $img_dir = get_template_directory_uri() . '/img/';
        ?>

        <section class="order">
            <div class="container">
                <div class="order_wrapper">
                    <div class="order_right">

                        <h2 class="order_title"><?php echo esc_html($title); ?></h2>
                        <div class="order_subtitle"><?php echo wp_kses_post($subtitle); ?></div>

                        <div class="order_left">
                            <div class="order_correspondence">
                                <div class="order_correspondence-item">
                                    <?php echo esc_html($msg_1); ?>
                                </div>
                                <div class="order_correspondence-item">
                                    <?php echo esc_html($msg_2); ?>
                                </div>
                            </div>

                            <div class="order_bot">
                                <div class="order_messages">
                                    <?php
                                        // Выводим иконки соцсетей, если они добавлены в админке
                                                if (! empty($socials)) {
                                                    foreach ($socials as $social) {
                                                        if ($social['icon']) {
                                                        ?>
                                                <a href="<?php echo esc_url($social['url']); ?>" class="order_message" target="_blank">
                                                    <img src="<?php echo esc_url($social['icon']); ?>" alt="social icon">
                                                </a>
                                                <?php
                                                    }
                                                                }
                                                            }
                                                        ?>
                                </div>
                                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9\+]/', '', $phone)); ?>" class="order_number">
                                    <img src="<?php echo esc_url($img_dir . 'order_number.svg'); ?>" alt=""> <?php echo esc_html($phone); ?>
                                </a>
                            </div>
                        </div>

                        <?php
                            // Выводим форму CF7
                                    if ($cf7_code) {
                                        echo do_shortcode($cf7_code);
                                    } else {
                                        echo '<p style="color:red;">Пожалуйста, добавьте шорткод Contact Form 7 в Настройках сайта.</p>';
                                    }
                                ?>

                    </div>
                </div>
            </div>
        </section>

        <?php
        });