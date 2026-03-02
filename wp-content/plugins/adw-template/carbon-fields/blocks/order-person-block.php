<?php
    if (! defined('ABSPATH')) {exit;}

    use Carbon_Fields\Block;
    use Carbon_Fields\Field;

    Block::make('ostavte-zayavku-person', __('Форма: Заявка (с персоной)'))
    ->set_category('adw-theme-blocks', __('Блоки темы'), 'smiley')
    ->set_icon('businessman')
    ->set_description('Блок заявки с карточкой сотрудника слева. Тексты формы берутся из глобальных Настроек сайта.')
    ->add_fields([
        // Локальные поля только для левой части (Персона)
        Field::make('image', 'person_img', 'Фото сотрудника')
            ->set_value_type('url'),

        Field::make('text', 'person_name', 'Имя сотрудника')
            ->set_default_value('Александр Долгов'),

        Field::make('text', 'person_position', 'Должность')
            ->set_default_value('Генеральный директор'),

        Field::make('text', 'person_msg_link', 'Ссылка на мессенджер (например, WhatsApp/TG)'),

        Field::make('image', 'person_logo', 'Логотип рядом с текстом (SVG/PNG)')
            ->set_value_type('url'),
    ])
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {

        // --- Глобальные данные для правой части формы ---
        $title    = carbon_get_theme_option('adw_order_title');
        $subtitle = carbon_get_theme_option('adw_order_subtitle');
        $cf7_code = carbon_get_theme_option('adw_order_cf7');

        // Папка с картинками на случай, если пользователь не задал фото
        $img_dir = get_template_directory_uri() . '/img/';

        // Заглушки, если картинки не выбраны в админке блока
        $person_img  = $fields['person_img'] ? $fields['person_img'] : $img_dir . 'order_person-img.jpg';
        $person_logo = $fields['person_logo'] ? $fields['person_logo'] : $img_dir . 'order_person-logo.svg';
        $msg_icon    = $img_dir . 'order_person-message.svg';
        ?>

        <section id="order" class="order">
            <div class="container">
                <div class="order_wrapper">
                    <div class="order_right">

                        <h2 class="order_title"><?php echo esc_html($title); ?></h2>
                        <div class="order_subtitle"><?php echo wp_kses_post($subtitle); ?></div>

                        <div class="order_left order_person">
                            <div class="order_person-img">
                                <img src="<?php echo esc_url($person_img); ?>" alt="<?php echo esc_attr($fields['person_name']); ?>">
                            </div>

                            <?php if ($fields['person_msg_link']): ?>
                                <a href="<?php echo esc_url($fields['person_msg_link']); ?>" class="order_person-message" target="_blank">
                                    <img src="<?php echo esc_url($msg_icon); ?>" alt="message">
                                </a>
                            <?php endif; ?>

                            <div class="order_person-inner">
                                <div class="order_person-left">
                                    <div class="order_person-title"><?php echo esc_html($fields['person_name']); ?></div>
                                    <div class="order_person-subtitle"><?php echo esc_html($fields['person_position']); ?></div>
                                </div>
                                <div class="order_person-logo">
                                    <img src="<?php echo esc_url($person_logo); ?>" alt="logo">
                                </div>
                            </div>
                        </div>

                        <?php
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