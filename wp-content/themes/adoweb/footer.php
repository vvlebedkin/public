<?php
/**
 * The template for displaying the footer
 *
 * @package adoweb
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$adw_has_options = function_exists( 'carbon_get_theme_option' );

$footer_logo_raw      = $adw_has_options ? carbon_get_theme_option( 'crb_general_footer_logo' ) : '';
$footer_logo_url      = '';
$logo_text            = $adw_has_options ? carbon_get_theme_option( 'crb_general_logo_text' ) : '';
$city                 = $adw_has_options ? carbon_get_theme_option( 'crb_general_city' ) : '';
$footer_phones        = $adw_has_options ? carbon_get_theme_option( 'crb_contacts_footer_phones' ) : array();
$email                = $adw_has_options ? carbon_get_theme_option( 'crb_contacts_email' ) : '';
$footer_description   = $adw_has_options ? carbon_get_theme_option( 'crb_general_footer_description' ) : '';
$footer_menu_title_1  = $adw_has_options ? carbon_get_theme_option( 'crb_footer_menu_title_1' ) : '';
$footer_menu_title_2  = $adw_has_options ? carbon_get_theme_option( 'crb_footer_menu_title_2' ) : '';
$footer_menu_title_3  = $adw_has_options ? carbon_get_theme_option( 'crb_footer_menu_title_3' ) : '';
$footer_menu_title_4  = $adw_has_options ? carbon_get_theme_option( 'crb_footer_menu_title_4' ) : '';
$socials              = $adw_has_options ? carbon_get_theme_option( 'crb_contacts_socials' ) : array();

if ( $footer_logo_raw ) {
	$footer_logo_url = is_numeric( $footer_logo_raw ) ? wp_get_attachment_image_url( (int) $footer_logo_raw, 'full' ) : $footer_logo_raw;
}

$footer_menus = array(
	array(
		'location'      => 'footer-menu-1',
		'title'         => $footer_menu_title_1,
		'title_in_span' => false,
	),
	array(
		'location'      => 'footer-menu-2',
		'title'         => $footer_menu_title_2,
		'title_in_span' => false,
	),
	array(
		'location'      => 'footer-menu-3',
		'title'         => $footer_menu_title_3,
		'title_in_span' => false,
	),
	array(
		'location'      => 'footer-menu-4',
		'title'         => $footer_menu_title_4,
		'title_in_span' => true,
	),
);
?>

<footer class="footer">
	<div class="container">
		<div class="footer_top">
			<?php if ( $footer_logo_url ) : ?>
				<?php if ( is_front_page() ) : ?>
					<span class="footer_logo">
						<img src="<?php echo esc_url( $footer_logo_url ); ?>" alt="<?php echo esc_attr( $logo_text ? $logo_text : get_bloginfo( 'name' ) ); ?>">
						<?php if ( $logo_text ) : ?>
							<span class="footer_logo-text"><?php echo esc_html( $logo_text ); ?></span>
						<?php endif; ?>
					</span>
				<?php else : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer_logo">
						<img src="<?php echo esc_url( $footer_logo_url ); ?>" alt="<?php echo esc_attr( $logo_text ? $logo_text : get_bloginfo( 'name' ) ); ?>">
						<?php if ( $logo_text ) : ?>
							<span class="footer_logo-text"><?php echo esc_html( $logo_text ); ?></span>
						<?php endif; ?>
					</a>
				<?php endif; ?>
			<?php endif; ?>

			<?php if ( $city ) : ?>
				<div class="footer_city">
					<div class="footer_city-current">
						<?php echo esc_html( $city ); ?>
						<img src="<?php echo esc_url( get_template_directory_uri() . '/img/header_city-current.svg' ); ?>" alt="">
					</div>
				</div>
			<?php endif; ?>
		</div>

		<div class="footer_wrapper">
			<div class="footer_left">
				<?php if ( ! empty( $socials ) && is_array( $socials ) ) : ?>
					<div class="footer_messages">
						<?php foreach ( $socials as $social ) : ?>
							<?php
							$link     = isset( $social['link'] ) ? trim( (string) $social['link'] ) : '';
							$icon     = isset( $social['icon'] ) ? $social['icon'] : '';
							$icon_url = '';
							if ( $icon ) {
								$icon_url = is_numeric( $icon ) ? wp_get_attachment_image_url( (int) $icon, 'full' ) : (string) $icon;
							}
							if ( '' === $link || '' === $icon_url ) {
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
							<a href="<?php echo esc_url( $href ); ?>" class="footer_message" target="_blank" rel="noopener noreferrer">
								<img src="<?php echo esc_url( $icon_url ); ?>" alt="">
							</a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

				<?php if ( ! empty( $footer_phones ) && is_array( $footer_phones ) ) : ?>
					<?php foreach ( $footer_phones as $footer_phone_item ) : ?>
						<?php
						$footer_phone    = isset( $footer_phone_item['phone'] ) ? trim( (string) $footer_phone_item['phone'] ) : '';
						$footer_subtitle = isset( $footer_phone_item['subtitle'] ) ? trim( (string) $footer_phone_item['subtitle'] ) : '';
						$footer_mark     = isset( $footer_phone_item['subtitle_mark'] ) ? trim( (string) $footer_phone_item['subtitle_mark'] ) : '';
						if ( '' === $footer_phone && '' === $footer_subtitle ) {
							continue;
						}
						?>
						<div class="footer_links">
							<?php if ( $footer_phone ) : ?>
								<a href="tel:<?php echo esc_attr( function_exists( 'phone_format' ) ? phone_format( $footer_phone ) : preg_replace( '/\D+/', '', $footer_phone ) ); ?>" class="footer_number">
									<?php echo esc_html( $footer_phone ); ?>
									<img src="<?php echo esc_url( get_template_directory_uri() . '/img/footer_number.svg' ); ?>" alt="">
								</a>
							<?php endif; ?>
							<?php if ( $footer_subtitle || $footer_mark ) : ?>
								<div class="footer_links-subtitle">
									<?php echo esc_html( $footer_subtitle ); ?>
									<?php if ( $footer_mark ) : ?>
										<span><?php echo esc_html( $footer_mark ); ?></span>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>

				<?php if ( $email ) : ?>
					<div class="footer_links">
						<a href="mailto:<?php echo antispambot( esc_attr( $email ) ); ?>" class="footer_email"><?php echo esc_html( $email ); ?></a>
					</div>
				<?php endif; ?>

				<a href="#" class="footer_btn btn">ЗАКАЗАТЬ АВТО</a>

				<?php if ( $footer_description ) : ?>
					<div class="footer_desc"><?php echo esc_html( $footer_description ); ?></div>
				<?php endif; ?>
			</div>

			<div class="footer_items">
				<?php foreach ( $footer_menus as $footer_menu ) : ?>
					<div class="footer_item">
						<?php if ( ! empty( $footer_menu['title'] ) ) : ?>
							<div class="footer_item-title">
								<?php if ( ! empty( $footer_menu['title_in_span'] ) ) : ?>
									<span><?php echo esc_html( $footer_menu['title'] ); ?></span>
								<?php else : ?>
									<?php echo esc_html( $footer_menu['title'] ); ?>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => $footer_menu['location'],
								'container'      => false,
								'menu_class'     => 'footer_menu',
								'fallback_cb'    => false,
							)
						);
						?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<div class="footer_inner">
			<div class="footer_inner-item"><?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. Все права защищены.</div>
			<?php if ( get_privacy_policy_url() ) : ?>
				<a href="<?php echo esc_url( get_privacy_policy_url() ); ?>" class="footer_inner-item">Политика конфиденциальности</a>
			<?php endif; ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
