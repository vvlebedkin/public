<?php
    if (! defined('ABSPATH')) {exit;}

    use Carbon_Fields\Block;
    use Carbon_Fields\Field;

    Block::make('Мой кастомный блок')
    ->add_fields([
        Field::make('text', 'block_heading', 'Заголовок'),
        Field::make('rich_text', 'block_content', 'Текст блока'),
    ])
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        // Так блок будет выглядеть на сайте
        ?>
        <div class="my-custom-block">
            <h3><?php echo esc_html($fields['block_heading']); ?></h3>
            <div><?php echo wpautop($fields['block_content']); ?></div>
        </div>
        <?php
        });