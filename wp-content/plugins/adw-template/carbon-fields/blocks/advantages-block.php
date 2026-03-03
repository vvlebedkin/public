<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

use Carbon_Fields\Block;
use Carbon_Fields\Field;

function adw_template_carbon_fields_register_fields_advantages_block() {
    Block::make( 'blok-preimushchestv', __( 'Блок преимуществ', 'adw-template' ) )
        ->set_category( 'adw-theme-blocks', __( 'Блоки темы' ), 'smiley' )
        ->set_icon( 'images-alt2' )
        ->add_fields(
            [
                Field::make( 'separator', 'advantages_block_separator', __( 'Блок: Преимущества', 'adw-template' ) ),
                Field::make( 'rich_text', 'advantages_block_title', __( 'Заголовок первого слайда (поддерживает br, span)', 'adw-template' ) )
                    ->set_default_value( 'ЧЕМ МЫ <br> ОТЛИЧАЕМСЯ <br> ОТ ДРУГИХ <span>?</span>' ),
                Field::make( 'image', 'advantages_intro_logo', __( 'Логотип первого слайда', 'adw-template' ) )
                    ->set_value_type( 'url' ),
                Field::make( 'complex', 'advantages_slides', __( 'Слайды преимуществ', 'adw-template' ) )
                    ->set_layout( 'tabbed-horizontal' )
                    ->add_fields(
                        [
                            Field::make( 'select', 'slide_type', __( 'Тип слайда', 'adw-template' ) )
                                ->add_options(
                                    [
                                        'items'   => __( 'Список тезисов', 'adw-template' ),
                                        'steps'   => __( 'Шаги сделки', 'adw-template' ),
                                        'options' => __( 'Опции контроля', 'adw-template' ),
                                    ]
                                ),
                            Field::make( 'image', 'slide_bg', __( 'Фоновое изображение', 'adw-template' ) )
                                ->set_value_type( 'url' ),
                            Field::make( 'rich_text', 'slide_title', __( 'Заголовок слайда (поддерживает br, span)', 'adw-template' ) ),
                            Field::make( 'complex', 'slide_items', __( 'Пункты тезисов', 'adw-template' ) )
                                ->set_layout( 'tabbed-horizontal' )
                                ->add_fields(
                                    [
                                        Field::make( 'textarea', 'item_title', __( 'Текст пункта', 'adw-template' ) ),
                                        Field::make( 'text', 'item_subtitle', __( 'Подпись пункта', 'adw-template' ) )
                                            ->set_default_value( 'другой закупщик' ),
                                    ]
                                ),
                            Field::make( 'complex', 'slide_steps', __( 'Шаги', 'adw-template' ) )
                                ->set_layout( 'tabbed-horizontal' )
                                ->set_conditional_logic(
                                    [
                                        [
                                            'field' => 'slide_type',
                                            'value' => 'steps',
                                        ],
                                    ]
                                )
                                ->add_fields(
                                    [
                                        Field::make( 'image', 'step_image', __( 'Изображение шага', 'adw-template' ) )
                                            ->set_value_type( 'url' ),
                                        Field::make( 'textarea', 'step_title', __( 'Текст шага', 'adw-template' ) ),
                                        Field::make( 'text', 'step_number', __( 'Номер шага', 'adw-template' ) ),
                                    ]
                                ),
                            Field::make( 'complex', 'slide_options', __( 'Опции', 'adw-template' ) )
                                ->set_layout( 'tabbed-horizontal' )
                                ->set_conditional_logic(
                                    [
                                        [
                                            'field' => 'slide_type',
                                            'value' => 'options',
                                        ],
                                    ]
                                )
                                ->add_fields(
                                    [
                                        Field::make( 'select', 'option_view', __( 'Вид элемента', 'adw-template' ) )
                                            ->add_options(
                                                [
                                                    'icon'  => __( 'Иконка', 'adw-template' ),
                                                    'image' => __( 'Изображение', 'adw-template' ),
                                                ]
                                            ),
                                        Field::make( 'image', 'option_icon', __( 'Иконка', 'adw-template' ) )
                                            ->set_value_type( 'url' )
                                            ->set_conditional_logic(
                                                [
                                                    [
                                                        'field' => 'option_view',
                                                        'value' => 'icon',
                                                    ],
                                                ]
                                            ),
                                        Field::make( 'image', 'option_image', __( 'Изображение', 'adw-template' ) )
                                            ->set_value_type( 'url' )
                                            ->set_conditional_logic(
                                                [
                                                    [
                                                        'field' => 'option_view',
                                                        'value' => 'image',
                                                    ],
                                                ]
                                            ),
                                        Field::make( 'rich_text', 'option_title', __( 'Текст опции (поддерживает br)', 'adw-template' ) ),
                                    ]
                                ),
                        ]
                    ),
            ]
        )
        ->set_render_callback(
            function( $fields, $attributes, $inner_blocks ) {
                $img_dir     = trailingslashit( get_template_directory_uri() ) . 'img/';
                $intro_title = ! empty( $fields['advantages_block_title'] ) ? $fields['advantages_block_title'] : '';
                $intro_logo  = ! empty( $fields['advantages_intro_logo'] ) ? $fields['advantages_intro_logo'] : $img_dir . 'advantages_slide-logo.svg';
                $slides      = ! empty( $fields['advantages_slides'] ) && is_array( $fields['advantages_slides'] ) ? $fields['advantages_slides'] : [];
                ?>
                <section class="advantages">
                    <div class="advantages_wrapper">
                        <div class="advantages_slider swiper">
                            <div class="swiper-wrapper">
                                <div class="advantages_slide swiper-slide" style="background: #000000;">
                                    <div class="container">
                                        <div class="advantages_slide-wrapper">
                                            <?php if ( ! empty( $intro_logo ) ) : ?>
                                                <div class="advantages_slide-logo"><img src="<?php echo esc_url( $intro_logo ); ?>" alt=""></div>
                                            <?php endif; ?>
                                            <?php if ( ! empty( $intro_title ) ) : ?>
                                                <div class="advantages_slide-title big"><?php echo wp_kses_post( $intro_title ); ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <?php foreach ( $slides as $slide_index => $slide ) : ?>
                                    <?php
                                    $slide_type  = ! empty( $slide['slide_type'] ) ? $slide['slide_type'] : 'items';
                                    if ( in_array( $slide_index, [ 0, 1 ], true ) ) {
                                        $slide_type = 'items';
                                    }
                                    $slide_bg    = ! empty( $slide['slide_bg'] ) ? $slide['slide_bg'] : '';
                                    $slide_title = ! empty( $slide['slide_title'] ) ? $slide['slide_title'] : '';
                                    ?>
                                    <div class="advantages_slide swiper-slide">
                                        <?php if ( ! empty( $slide_bg ) ) : ?>
                                            <div class="advantages_slide-bg"><img src="<?php echo esc_url( $slide_bg ); ?>" alt=""></div>
                                        <?php endif; ?>
                                        <div class="container">
                                            <div class="advantages_slide-wrapper">
                                                <?php if ( ! empty( $slide_title ) ) : ?>
                                                    <div class="advantages_slide-title"><?php echo wp_kses_post( $slide_title ); ?></div>
                                                <?php endif; ?>

                                                <?php if ( 'steps' === $slide_type ) : ?>
                                                    <?php $steps = ! empty( $slide['slide_steps'] ) && is_array( $slide['slide_steps'] ) ? $slide['slide_steps'] : []; ?>
                                                    <?php if ( ! empty( $steps ) ) : ?>
                                                        <div class="advantages_slide-steps">
                                                            <?php foreach ( $steps as $step ) : ?>
                                                                <?php
                                                                $step_image  = ! empty( $step['step_image'] ) ? $step['step_image'] : '';
                                                                $step_title  = ! empty( $step['step_title'] ) ? $step['step_title'] : '';
                                                                $step_number = ! empty( $step['step_number'] ) ? $step['step_number'] : '';
                                                                ?>
                                                                <div class="advantages_slide-step">
                                                                    <?php if ( ! empty( $step_image ) ) : ?>
                                                                        <div class="advantages_slide-step_img"><img src="<?php echo esc_url( $step_image ); ?>" alt=""></div>
                                                                    <?php endif; ?>
                                                                    <?php if ( ! empty( $step_title ) ) : ?>
                                                                        <div class="advantages_slide-step_title"><?php echo nl2br( esc_html( $step_title ) ); ?></div>
                                                                    <?php endif; ?>
                                                                    <?php if ( ! empty( $step_number ) ) : ?>
                                                                        <div class="advantages_slide-step_number"><?php echo esc_html( $step_number ); ?></div>
                                                                    <?php endif; ?>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    <?php endif; ?>

                                                <?php elseif ( 'options' === $slide_type ) : ?>
                                                    <?php $options = ! empty( $slide['slide_options'] ) && is_array( $slide['slide_options'] ) ? $slide['slide_options'] : []; ?>
                                                    <?php if ( ! empty( $options ) ) : ?>
                                                        <div class="advantages_slide-options">
                                                            <?php foreach ( $options as $option ) : ?>
                                                                <?php
                                                                $option_view  = ! empty( $option['option_view'] ) ? $option['option_view'] : 'icon';
                                                                $option_icon  = ! empty( $option['option_icon'] ) ? $option['option_icon'] : '';
                                                                $option_image = ! empty( $option['option_image'] ) ? $option['option_image'] : '';
                                                                $option_title = ! empty( $option['option_title'] ) ? $option['option_title'] : '';
                                                                ?>
                                                                <div class="advantages_slide-option">
                                                                    <?php if ( 'image' === $option_view && ! empty( $option_image ) ) : ?>
                                                                        <div class="advantages_slide-option_img"><img src="<?php echo esc_url( $option_image ); ?>" alt=""></div>
                                                                    <?php elseif ( ! empty( $option_icon ) ) : ?>
                                                                        <div class="advantages_slide-option_icon"><img src="<?php echo esc_url( $option_icon ); ?>" alt=""></div>
                                                                    <?php endif; ?>
                                                                    <?php if ( ! empty( $option_title ) ) : ?>
                                                                        <div class="advantages_slide-option_title"><?php echo wp_kses_post( $option_title ); ?></div>
                                                                    <?php endif; ?>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    <?php endif; ?>

                                                <?php else : ?>
                                                    <?php $items = ! empty( $slide['slide_items'] ) && is_array( $slide['slide_items'] ) ? $slide['slide_items'] : []; ?>
                                                    <div class="advantages_slide-items">
                                                        <?php if ( ! empty( $items ) ) : ?>
                                                            <?php foreach ( $items as $item ) : ?>
                                                                <?php
                                                                $item_title    = ! empty( $item['item_title'] ) ? $item['item_title'] : '';
                                                                $item_subtitle = ! empty( $item['item_subtitle'] ) ? $item['item_subtitle'] : '';
                                                                ?>
                                                                <div class="advantages_slide-item">
                                                                    <?php if ( ! empty( $item_title ) ) : ?>
                                                                        <div class="advantages_slide-item_title"><?php echo nl2br( esc_html( $item_title ) ); ?></div>
                                                                    <?php endif; ?>
                                                                    <?php if ( ! empty( $item_subtitle ) ) : ?>
                                                                        <div class="advantages_slide-item_subtitle"><?php echo esc_html( $item_subtitle ); ?></div>
                                                                    <?php endif; ?>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="advantages_slide-counter"></div>
                            <div class="advantages_slide-next"><img src="<?php echo esc_url( $img_dir . 'advantages_slide-next.svg' ); ?>" alt=""></div>
                        </div>
                    </div>
                </section>
                <?php
            }
        );
}

adw_template_carbon_fields_register_fields_advantages_block();
