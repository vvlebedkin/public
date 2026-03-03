<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

use Carbon_Fields\Block;
use Carbon_Fields\Field;

function adw_template_carbon_fields_register_fields_comprehensive_block() {
    Block::make( 'blok-kompleksnoy-logistiki', __( 'Блок комплексной логистики' ) )
        ->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )
        ->set_icon( 'car' )
        ->add_fields(
            [
                Field::make( 'separator', 'comprehensive_block_separator', __( 'Блок: Комплексная логистика' ) ),
                Field::make( 'text', 'comprehensive_block_title', __( 'Заголовок блока' ) )
                    ->set_default_value( 'Комплексная логистика доставки авто по России' ),
                Field::make( 'rich_text', 'comprehensive_block_subtitle', __( 'Подзаголовок (поддерживает span)' ) )
                    ->set_default_value( 'Собственная транспортная компания <span>Автовоз-Логистик</span>' ),
                Field::make( 'image', 'comprehensive_block_image', __( 'Изображение' ) )
                    ->set_value_type( 'url' ),
                Field::make( 'complex', 'comprehensive_metrics', __( 'Пункты расчета' ) )
                    ->add_fields(
                        [
                            Field::make( 'textarea', 'metric_subtitle', __( 'Подзаголовок пункта' ) ),
                            Field::make( 'rich_text', 'metric_value', __( 'Значение (поддерживает span)' ) ),
                            Field::make( 'select', 'metric_value_class', __( 'Класс значения' ) )
                                ->add_options(
                                    [
                                        'comprehensive_inner-price' => 'Цена',
                                        'comprehensive_inner-time'  => 'Срок',
                                    ]
                                ),
                        ]
                    ),
                Field::make( 'textarea', 'comprehensive_block_desc', __( 'Описание под пунктами' ) )
                    ->set_default_value( '*Для точного расчета стоимости и времени перевозки, перейдите к подробному расчёту' ),
                Field::make( 'text', 'comprehensive_new_text', __( 'Текст кнопки "Новый расчёт"' ) )
                    ->set_default_value( 'Новый расчёт' ),
                Field::make( 'text', 'comprehensive_new_url', __( 'Ссылка кнопки "Новый расчёт"' ) ),
                Field::make( 'text', 'comprehensive_more_text', __( 'Текст кнопки "Подробный расчёт"' ) )
                    ->set_default_value( 'Подробный расчёт' ),
                Field::make( 'text', 'comprehensive_more_url', __( 'Ссылка кнопки "Подробный расчёт"' ) ),
            ]
        )
        ->set_render_callback(
            function( $fields, $attributes, $inner_blocks ) {
                $title       = ! empty( $fields['comprehensive_block_title'] ) ? $fields['comprehensive_block_title'] : '';
                $subtitle    = ! empty( $fields['comprehensive_block_subtitle'] ) ? $fields['comprehensive_block_subtitle'] : '';
                $image       = ! empty( $fields['comprehensive_block_image'] ) ? $fields['comprehensive_block_image'] : '';
                $metrics     = ! empty( $fields['comprehensive_metrics'] ) && is_array( $fields['comprehensive_metrics'] ) ? $fields['comprehensive_metrics'] : [];
                $desc        = ! empty( $fields['comprehensive_block_desc'] ) ? $fields['comprehensive_block_desc'] : '';
                $new_text    = ! empty( $fields['comprehensive_new_text'] ) ? $fields['comprehensive_new_text'] : '';
                $new_url     = ! empty( $fields['comprehensive_new_url'] ) ? $fields['comprehensive_new_url'] : '';
                $more_text   = ! empty( $fields['comprehensive_more_text'] ) ? $fields['comprehensive_more_text'] : '';
                $more_url    = ! empty( $fields['comprehensive_more_url'] ) ? $fields['comprehensive_more_url'] : '';
                ?>
                <section class="comprehensive">
                    <div class="container">
                        <?php if ( $title ) : ?>
                            <h2 class="comprehensive_title"><?php echo esc_html( $title ); ?></h2>
                        <?php endif; ?>

                        <?php if ( $subtitle ) : ?>
                            <div class="comprehensive_subtitle"><?php echo wp_kses_post( $subtitle ); ?></div>
                        <?php endif; ?>

                        <?php if ( $image ) : ?>
                            <div class="comprehensive_inner-img"><img src="<?php echo esc_url( $image ); ?>" alt=""></div>
                        <?php endif; ?>

                        <div class="comprehensive_inner">
                            <?php if ( ! empty( $metrics ) ) : ?>
                                <?php foreach ( $metrics as $item ) : ?>
                                    <?php
                                    $metric_subtitle = ! empty( $item['metric_subtitle'] ) ? $item['metric_subtitle'] : '';
                                    $metric_value    = ! empty( $item['metric_value'] ) ? $item['metric_value'] : '';
                                    $metric_class    = ! empty( $item['metric_value_class'] ) ? $item['metric_value_class'] : 'comprehensive_inner-price';
                                    ?>
                                    <?php if ( $metric_subtitle ) : ?>
                                        <div class="comprehensive_inner-subtitle"><?php echo esc_html( $metric_subtitle ); ?></div>
                                    <?php endif; ?>
                                    <?php if ( $metric_value ) : ?>
                                        <div class="<?php echo esc_attr( $metric_class ); ?>"><?php echo wp_kses_post( $metric_value ); ?></div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <?php if ( $desc ) : ?>
                                <div class="comprehensive_inner-desc"><?php echo nl2br( esc_html( $desc ) ); ?></div>
                            <?php endif; ?>

                            <div class="comprehensive_inner-bot">
                                <?php if ( $new_text ) : ?>
                                    <a href="<?php echo esc_url( $new_url ); ?>" class="comprehensive_inner-new"><?php echo esc_html( $new_text ); ?></a>
                                <?php endif; ?>
                                <?php if ( $more_text ) : ?>
                                    <a href="<?php echo esc_url( $more_url ); ?>" class="comprehensive_inner-more"><?php echo esc_html( $more_text ); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
            }
        );
}

adw_template_carbon_fields_register_fields_comprehensive_block();
