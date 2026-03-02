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

$footer_logo_raw = $adw_has_options ? carbon_get_theme_option( 'crb_general_footer_logo' ) : '';
$footer_logo_url = '';
if ( $footer_logo_raw ) {
	$footer_logo_url = is_numeric( $footer_logo_raw ) ? wp_get_attachment_image_url( (int) $footer_logo_raw, 'full' ) : $footer_logo_raw;
}

$logo_text          = $adw_has_options ? carbon_get_theme_option( 'crb_general_logo_text' ) : '';
$city               = $adw_has_options ? carbon_get_theme_option( 'crb_general_city' ) : '';
$phone              = $adw_has_options ? carbon_get_theme_option( 'crb_contacts_phone' ) : '';
$email              = $adw_has_options ? carbon_get_theme_option( 'crb_contacts_email' ) : '';
$footer_description = $adw_has_options ? carbon_get_theme_option( 'crb_general_footer_description' ) : '';
$requisites         = $adw_has_options ? carbon_get_theme_option( 'crb_contacts_requisites' ) : array();
$socials            = $adw_has_options ? carbon_get_theme_option( 'crb_contacts_socials' ) : array();
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
							<a href="<?php echo esc_url( $href ); ?>" class="footer_message" target="_blank" rel="noopener noreferrer">
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

				<?php if ( $phone ) : ?>
					<div class="footer_links">
						<a href="tel:<?php echo esc_attr( function_exists( 'phone_format' ) ? phone_format( $phone ) : preg_replace( '/\D+/', '', $phone ) ); ?>" class="footer_number">
							<?php echo esc_html( $phone ); ?>
							<img src="<?php echo esc_url( get_template_directory_uri() . '/img/footer_number.svg' ); ?>" alt="">
						</a>
					</div>
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
				<div class="footer_item">
					<div class="footer_item-title"><span>Навигация</span></div>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'container'      => false,
							'menu_class'     => 'footer_menu',
							'fallback_cb'    => false,
						)
					);
					?>
				</div>

				<?php if ( ! empty( $requisites ) && is_array( $requisites ) ) : ?>
					<?php foreach ( $requisites as $item ) : ?>
						<?php
						$req_title = isset( $item['title'] ) ? trim( (string) $item['title'] ) : '';
						$req_text  = isset( $item['text'] ) ? trim( (string) $item['text'] ) : '';
						if ( '' === $req_title && '' === $req_text ) {
							continue;
						}
						?>
						<div class="footer_item">
							<?php if ( $req_title ) : ?>
								<div class="footer_item-title"><?php echo esc_html( $req_title ); ?></div>
							<?php endif; ?>
							<?php if ( $req_text ) : ?>
								<div class="footer_item-subtitle"><?php echo esc_html( $req_text ); ?></div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="footer_inner">
			<div class="footer_inner-item"><?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></div>
			<?php if ( get_privacy_policy_url() ) : ?>
				<a href="<?php echo esc_url( get_privacy_policy_url() ); ?>" class="footer_inner-item">Политика конфиденциальности</a>
			<?php endif; ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
