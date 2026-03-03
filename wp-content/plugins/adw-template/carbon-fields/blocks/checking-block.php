<?php
    if (! defined('ABSPATH')) {exit;}

    use Carbon_Fields\Block;
    use Carbon_Fields\Field;

    function adw_template_carbon_fields_register_fields_checking_block()
    {
    Block::make('blok-proverki-avtomobilya', __('Блок проверки автомобиля', 'adw-template'))
        ->set_category('adw-theme-blocks', __('Блоки темы', 'adw-template'), 'smiley')
        ->set_icon('search')
        ->add_fields(
            [
                Field::make('separator', 'checking_block_separator', __('Блок: Проверка автомобиля', 'adw-template')),

                Field::make('textarea', 'checking_title', __('Заголовок секции (поддерживает <br>)', 'adw-template'))
                    ->set_default_value('Как мы проверяем автомобиль <br>перед покупкой'),
                Field::make('textarea', 'checking_subtitle', __('Подзаголовок секции', 'adw-template'))
                    ->set_default_value('Проверка проходит в 2 этапа — прозрачно и понятно'),
                Field::make('complex', 'checking_items', __('Этапы проверки', 'adw-template'))
                    ->add_fields(
                        [
                            Field::make('text', 'item_number', __('Номер этапа', 'adw-template'))
                                ->set_default_value('01'),
                            Field::make('text', 'item_title', __('Название этапа', 'adw-template')),
                            Field::make('textarea', 'item_subtitle', __('Описание этапа', 'adw-template')),
                            Field::make('complex', 'item_options', __('Пункты этапа', 'adw-template'))
                                ->add_fields(
                                    [
                                        Field::make('textarea', 'option_text', __('Текст пункта', 'adw-template')),
                                    ]
                                ),
                        ]
                    ),
                Field::make('text', 'checking_result_title', __('Заголовок блока результата', 'adw-template'))
                    ->set_default_value('Результат'),
                Field::make('complex', 'checking_result_options', __('Пункты результата', 'adw-template'))
                    ->add_fields(
                        [
                            Field::make('textarea', 'result_option_text', __('Текст пункта результата', 'adw-template')),
                        ]
                    ),
                Field::make('text', 'checking_video_url', __('Ссылка видео', 'adw-template'))
                    ->set_default_value('#'),
                Field::make('image', 'checking_video_image', __('Изображение видео', 'adw-template'))
                    ->set_value_type('url'),
            ]
        )
        ->set_render_callback(
            function ($fields, $attributes, $inner_blocks) {
                $title          = ! empty($fields['checking_title']) ? $fields['checking_title'] : '';
                $subtitle       = ! empty($fields['checking_subtitle']) ? $fields['checking_subtitle'] : '';
                $items          = ! empty($fields['checking_items']) && is_array($fields['checking_items']) ? $fields['checking_items'] : [];
                $result_title   = ! empty($fields['checking_result_title']) ? $fields['checking_result_title'] : '';
                $result_options = ! empty($fields['checking_result_options']) && is_array($fields['checking_result_options']) ? $fields['checking_result_options'] : [];
                $video_url      = ! empty($fields['checking_video_url']) ? $fields['checking_video_url'] : '#';
                $video_image    = ! empty($fields['checking_video_image']) ? $fields['checking_video_image'] : get_template_directory_uri() . '/img/checking_video.jpg';
                $result_icon    = get_template_directory_uri() . '/img/checking_resalt-title.svg';
                ?>
                <section class="checking">
                    <div class="container">
                        <?php if ($title): ?>
                            <h2 class="checking_title"><?php echo wp_kses_post($title); ?></h2>
                        <?php endif; ?>

                        <?php if ($subtitle): ?>
                            <div class="checking_subtitle"><?php echo nl2br(esc_html($subtitle)); ?></div>
                        <?php endif; ?>

                        <div class="checking_wrapper">
                            <?php if (! empty($items)): ?>
                                <?php foreach ($items as $item): ?>
                                    <?php
                                        $item_number   = ! empty($item['item_number']) ? $item['item_number'] : '';
                                                        $item_title    = ! empty($item['item_title']) ? $item['item_title'] : '';
                                                        $item_subtitle = ! empty($item['item_subtitle']) ? $item['item_subtitle'] : '';
                                                        $item_options  = ! empty($item['item_options']) && is_array($item['item_options']) ? $item['item_options'] : [];
                                                    ?>
                                    <div class="checking_item">
                                        <?php if ($item_number): ?>
                                            <div class="checking_item-number"><?php echo esc_html($item_number); ?></div>
                                        <?php endif; ?>
                                        <?php if ($item_title): ?>
                                            <div class="checking_item-title"><?php echo esc_html($item_title); ?></div>
                                        <?php endif; ?>
                                        <?php if ($item_subtitle): ?>
                                            <div class="checking_item-subtitle"><?php echo nl2br(esc_html($item_subtitle)); ?></div>
                                        <?php endif; ?>

                                        <?php if (! empty($item_options)): ?>
                                            <div class="checking_item-options">
                                                <?php foreach ($item_options as $option): ?>
                                                    <?php $option_text = ! empty($option['option_text']) ? $option['option_text'] : ''; ?>
                                                    <?php if ($option_text): ?>
                                                        <div class="checking_item-option"><?php echo nl2br(esc_html($option_text)); ?></div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <div class="checking_resalt">
                                <?php if ($result_title): ?>
                                    <div class="checking_resalt-title">
                                        <img src="<?php echo esc_url($result_icon); ?>" alt="">
                                        <?php echo esc_html($result_title); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (! empty($result_options)): ?>
                                    <div class="checking_resalt-options">
                                        <?php foreach ($result_options as $option): ?>
                                            <?php $result_option_text = ! empty($option['result_option_text']) ? $option['result_option_text'] : ''; ?>
                                            <?php if ($result_option_text): ?>
                                                <div class="checking_resalt-option"><?php echo nl2br(esc_html($result_option_text)); ?></div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <a href="<?php echo esc_url($video_url); ?>" class="checking_video">
                                <img src="<?php echo esc_url($video_image); ?>" alt="">
                            </a>
                        </div>
                    </div>
                </section>
                <?php
                    }
                            );
                    }

                adw_template_carbon_fields_register_fields_checking_block();
