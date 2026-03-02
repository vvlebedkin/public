<?php
    /**
 * The header for our theme
 *
 * @package adoweb
 */

    if (! defined('ABSPATH')) {
    exit;
    }

    $adw_has_options = function_exists('carbon_get_theme_option');

    $header_logo_raw = $adw_has_options ? carbon_get_theme_option('crb_general_header_logo') : '';
    $header_logo_url = '';
    if ($header_logo_raw) {
    $header_logo_url = is_numeric($header_logo_raw) ? wp_get_attachment_image_url((int) $header_logo_raw, 'full') : $header_logo_raw;
    }

    $logo_text            = $adw_has_options ? carbon_get_theme_option('crb_general_logo_text') : '';
    $slogan               = $adw_has_options ? carbon_get_theme_option('crb_general_slogan') : '';
    $delivery_text        = $adw_has_options ? carbon_get_theme_option('crb_general_delivery_text') : '';
    $city                 = $adw_has_options ? carbon_get_theme_option('crb_general_city') : '';
    $address              = $adw_has_options ? carbon_get_theme_option('crb_general_address') : '';
    $header_place_current = $adw_has_options ? carbon_get_theme_option('crb_general_header_place_current') : '';
    $header_places        = $adw_has_options ? carbon_get_theme_option('crb_general_header_places') : [];
    $phone                = $adw_has_options ? carbon_get_theme_option('crb_contacts_phone') : '';
    $email                = $adw_has_options ? carbon_get_theme_option('crb_contacts_email') : '';
    $top_banner_text      = $adw_has_options ? carbon_get_theme_option('crb_general_top_banner_text') : '';
    $top_banner_link      = $adw_has_options ? carbon_get_theme_option('crb_general_top_banner_link') : '';
    $top_banner_button    = $adw_has_options ? carbon_get_theme_option('crb_general_top_banner_button') : '';
    $socials              = $adw_has_options ? carbon_get_theme_option('crb_contacts_socials') : [];
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
	<?php if ($top_banner_text || $top_banner_link): ?>
		<div class="top_more">
			<div class="top_more-wrapper">
				<?php if ($top_banner_text): ?>
					<img src="<?php echo esc_url(get_template_directory_uri() . '/img/top_more-text.svg'); ?>" alt="">
					<div class="top_more-text"><?php echo wp_kses_post($top_banner_text); ?></div>
				<?php endif; ?>
				<?php if ($top_banner_link): ?>
					<a href="<?php echo esc_url($top_banner_link); ?>" class="top_more-btn" target="_blank" rel="noopener noreferrer">
						<?php echo esc_html($top_banner_button ? $top_banner_button : 'Перейти'); ?>
						<img src="<?php echo esc_url(get_template_directory_uri() . '/img/link_arrow.svg'); ?>" alt="">
					</a>
				<?php endif; ?>
			</div>
			<div class="top_more-close">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/img/close.svg'); ?>" alt="">
			</div>
		</div>
	<?php endif; ?>

	<div class="container">
		<div class="header_wrapper">
			<div class="header_left">
				<?php if ($header_logo_url): ?>
					<?php if (is_front_page()): ?>
						<span class="header_logo">
							<img src="<?php echo esc_url($header_logo_url); ?>" alt="<?php echo esc_attr($logo_text ? $logo_text : get_bloginfo('name')); ?>">
							<?php if ($logo_text): ?>
								<span class="header_logo-text"><?php echo esc_html($logo_text); ?></span>
							<?php endif; ?>
						</span>
					<?php else: ?>
						<a href="<?php echo esc_url(home_url('/')); ?>" class="header_logo">
							<img src="<?php echo esc_url($header_logo_url); ?>" alt="<?php echo esc_attr($logo_text ? $logo_text : get_bloginfo('name')); ?>">
							<?php if ($logo_text): ?>
								<span class="header_logo-text"><?php echo esc_html($logo_text); ?></span>
							<?php endif; ?>
						</a>
					<?php endif; ?>
				<?php endif; ?>

				<?php if ($header_place_current || (! empty($header_places) && is_array($header_places))): ?>
					<div class="header_places">
						<?php if ($header_place_current): ?>
							<div class="header_place-current">
								<img src="<?php echo esc_url(get_template_directory_uri() . '/img/header_place-flag.svg'); ?>" alt="">
								<?php echo esc_html($header_place_current); ?>
								<img src="<?php echo esc_url(get_template_directory_uri() . '/img/header_place-close.svg'); ?>" alt="">
							</div>
						<?php endif; ?>
						<?php if (! empty($header_places) && is_array($header_places)): ?>
							<?php foreach ($header_places as $header_place): ?>
								<?php
                                    $place_title = isset($header_place['title']) ? trim((string) $header_place['title']) : '';
                                    if ('' === $place_title) {
                                        continue;
                                    }
                                ?>
								<div class="header_place"><?php echo esc_html($place_title); ?></div>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<div class="menu_burger">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/img/menu_icon.svg'); ?>" alt="">
				</div>
			</div>

			<div class="header_right">
				<?php if ($delivery_text): ?>
					<div class="header_right-title"><?php echo esc_html($delivery_text); ?></div>
				<?php endif; ?>

				<?php if ($city): ?>
					<div class="header_city">
						<div class="header_city-current">
							<?php echo esc_html($city); ?>
							<img src="<?php echo esc_url(get_template_directory_uri() . '/img/header_city-current.svg'); ?>" alt="">
						</div>
					</div>
				<?php endif; ?>

				<?php if ($phone): ?>
					<a href="tel:<?php echo esc_attr(function_exists('phone_format') ? phone_format($phone) : preg_replace('/\D+/', '', $phone)); ?>" class="header_number"><?php echo esc_html($phone); ?></a>
				<?php endif; ?>

			</div>
		</div>

		<div class="header_inner">
			<div class="header_inner-close">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/img/close.svg'); ?>" alt="">
			</div>

			<?php
                wp_nav_menu(
                    [
                        'theme_location' => 'header-menu',
                        'container'      => false,
                        'menu_class'     => 'menu',
                        'fallback_cb'    => false,
                    ]
                );
            ?>



		</div>
	</div>
</header>
