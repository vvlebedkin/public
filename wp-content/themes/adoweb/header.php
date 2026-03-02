<?php
/**
 * The header for our theme
 *
 * @package adoweb
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$adw_has_options = function_exists( 'carbon_get_theme_option' );

$header_logo_raw = $adw_has_options ? carbon_get_theme_option( 'crb_general_header_logo' ) : '';
$header_logo_url = '';
if ( $header_logo_raw ) {
	$header_logo_url = is_numeric( $header_logo_raw ) ? wp_get_attachment_image_url( (int) $header_logo_raw, 'full' ) : $header_logo_raw;
}

$logo_text         = $adw_has_options ? carbon_get_theme_option( 'crb_general_logo_text' ) : '';
$slogan            = $adw_has_options ? carbon_get_theme_option( 'crb_general_slogan' ) : '';
$delivery_text     = $adw_has_options ? carbon_get_theme_option( 'crb_general_delivery_text' ) : '';
$city              = $adw_has_options ? carbon_get_theme_option( 'crb_general_city' ) : '';
$address           = $adw_has_options ? carbon_get_theme_option( 'crb_general_address' ) : '';
$phone             = $adw_has_options ? carbon_get_theme_option( 'crb_contacts_phone' ) : '';
$email             = $adw_has_options ? carbon_get_theme_option( 'crb_contacts_email' ) : '';
$top_banner_text   = $adw_has_options ? carbon_get_theme_option( 'crb_general_top_banner_text' ) : '';
$top_banner_link   = $adw_has_options ? carbon_get_theme_option( 'crb_general_top_banner_link' ) : '';
$top_banner_button = $adw_has_options ? carbon_get_theme_option( 'crb_general_top_banner_button' ) : '';
$socials           = $adw_has_options ? carbon_get_theme_option( 'crb_contacts_socials' ) : array();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
	<?php if ( $top_banner_text || $top_banner_link ) : ?>
		<div class="top_more">
			<div class="top_more-wrapper">
				<?php if ( $top_banner_text ) : ?>
					<div class="top_more-text"><?php echo wp_kses_post( $top_banner_text ); ?></div>
				<?php endif; ?>
				<?php if ( $top_banner_link ) : ?>
					<a href="<?php echo esc_url( $top_banner_link ); ?>" class="top_more-btn" target="_blank" rel="noopener noreferrer">
						<?php echo esc_html( $top_banner_button ? $top_banner_button : 'Перейти' ); ?>
						<img src="<?php echo esc_url( get_template_directory_uri() . '/img/link_arrow.svg' ); ?>" alt="">
					</a>
				<?php endif; ?>
			</div>
			<div class="top_more-close">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/img/close.svg' ); ?>" alt="">
			</div>
		</div>
	<?php endif; ?>

	<div class="container">
		<div class="header_wrapper">
			<div class="header_left">
				<?php if ( $header_logo_url ) : ?>
					<?php if ( is_front_page() ) : ?>
						<span class="header_logo">
							<img src="<?php echo esc_url( $header_logo_url ); ?>" alt="<?php echo esc_attr( $logo_text ? $logo_text : get_bloginfo( 'name' ) ); ?>">
							<?php if ( $logo_text ) : ?>
								<span class="header_logo-text"><?php echo esc_html( $logo_text ); ?></span>
							<?php endif; ?>
						</span>
					<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header_logo">
							<img src="<?php echo esc_url( $header_logo_url ); ?>" alt="<?php echo esc_attr( $logo_text ? $logo_text : get_bloginfo( 'name' ) ); ?>">
							<?php if ( $logo_text ) : ?>
								<span class="header_logo-text"><?php echo esc_html( $logo_text ); ?></span>
							<?php endif; ?>
						</a>
					<?php endif; ?>
				<?php endif; ?>

				<div class="menu_burger">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/img/menu_icon.svg' ); ?>" alt="">
				</div>
			</div>

			<div class="header_right">
				<?php if ( $delivery_text ) : ?>
					<div class="header_right-title"><?php echo esc_html( $delivery_text ); ?></div>
				<?php endif; ?>

				<?php if ( $city ) : ?>
					<div class="header_city">
						<div class="header_city-current">
							<?php echo esc_html( $city ); ?>
							<img src="<?php echo esc_url( get_template_directory_uri() . '/img/header_city-current.svg' ); ?>" alt="">
						</div>
					</div>
				<?php endif; ?>

				<?php if ( $phone ) : ?>
					<a href="tel:<?php echo esc_attr( function_exists( 'phone_format' ) ? phone_format( $phone ) : preg_replace( '/\D+/', '', $phone ) ); ?>" class="header_number"><?php echo esc_html( $phone ); ?></a>
				<?php endif; ?>

				<?php if ( $email ) : ?>
					<a href="mailto:<?php echo antispambot( esc_attr( $email ) ); ?>" class="header_email"><?php echo esc_html( $email ); ?></a>
				<?php endif; ?>
			</div>
		</div>

		<div class="header_inner">
			<div class="header_inner-close">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/img/close.svg' ); ?>" alt="">
			</div>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header-menu',
					'container'      => false,
					'menu_class'     => 'menu',
					'fallback_cb'    => false,
				)
			);
			?>

			<div class="header_search">
				<?php get_search_form(); ?>
			</div>

			<?php if ( $address || $slogan ) : ?>
				<div class="header_info">
					<?php if ( $address ) : ?>
						<div class="header_adres"><?php echo esc_html( $address ); ?></div>
					<?php endif; ?>
					<?php if ( $slogan ) : ?>
						<div class="header_slogan"><?php echo esc_html( $slogan ); ?></div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if ( ! empty( $socials ) && is_array( $socials ) ) : ?>
				<div class="header_messages">
					<?php foreach ( $socials as $social ) : ?>
						<?php
						$link = isset( $social['link'] ) ? trim( (string) $social['link'] ) : '';
						$icon = isset( $social['icon'] ) ? trim( (string) $social['icon'] ) : '';
						if ( '' === $link || '' === $icon ) {
							continue;
						}

						$href = $link;
						if ( preg_match( '/^(\+|\d|\(|\s|-)/', $link ) || false !== stripos( $link, 'wa.me' ) || false !== stripos( $link, 'whatsapp' ) ) {
							$wa_number = preg_replace( '/\D+/', '', $link );
							if ( $wa_number ) {
								$href = 'https://wa.me/' . $wa_number;
							}
						} elseif ( false !== stripos( $link, 't.me' ) || false !== stripos( $link, 'telegram' ) || 0 === strpos( $link, '@' ) ) {
							$tg_username = preg_replace( '/[^A-Za-z0-9_]/', '', basename( str_replace( '@', '', $link ) ) );
							if ( $tg_username ) {
								$href = 'https://t.me/' . $tg_username;
							}
						}
						?>
						<a href="<?php echo esc_url( $href ); ?>" class="header_message" target="_blank" rel="noopener noreferrer">
							<?php
							if ( false !== stripos( $icon, '<svg' ) ) {
								echo wp_kses(
									$icon,
									array(
										'svg'  => array(
											'xmlns'       => true,
											'width'       => true,
											'height'      => true,
											'viewbox'     => true,
											'fill'        => true,
											'stroke'      => true,
											'role'        => true,
											'aria-hidden' => true,
										),
										'path' => array(
											'd'            => true,
											'fill'         => true,
											'stroke'       => true,
											'stroke-width' => true,
										),
									)
								);
							} else {
								echo '<img src="' . esc_url( $icon ) . '" alt="">';
							}
							?>
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</header>
