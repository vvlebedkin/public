<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package adoweb
 */

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



<?php if (is_front_page()): ?>
  <span class="header_logo">
    <img src="<?php echo carbon_get_theme_option( 'crb_general_logo' ) ?>" alt="" >            
  </span>
<?php else: ?>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header_logo">
    <img src="<?php echo carbon_get_theme_option( 'crb_general_logo' ) ?>" alt="" >            
  </a> 
<?php endif ?> 

<?php
	wp_nav_menu(
		array(
			'menu'    => 'main-menu',
			'menu_id'    => 'main-menu',
			'container'  => 'div',
			'container_class'  => 'header_inner',
			'menu_class' => 'menu'
		)
	);
?> 


<?php if ($tel = carbon_get_theme_option( 'crb_contacts_tel' )): ?>
	<a href="tel:<?php echo phone_format($tel) ?>" class="header_number"><?php echo $tel ?></a>
<?php endif ?>
<?php if ($tel = carbon_get_theme_option( 'crb_contacts_tel2' )): ?>
	<a href="tel:<?php echo phone_format($tel) ?>" class="header_number"><?php echo $tel ?></a>
<?php endif ?>
<?php if ( carbon_get_theme_option( 'crb_contacts_address' )): ?>
<div class="header_adres"><?php echo carbon_get_theme_option( 'crb_contacts_address' ) ?></div>
<?php endif ?>
<?php if ( carbon_get_theme_option( 'crb_contacts_email' )): ?>
<a href="mailto:<?php echo carbon_get_theme_option( 'crb_contacts_email' ) ?>" class="header_email"><?php echo carbon_get_theme_option( 'crb_contacts_email' ) ?></a>
<?php endif ?>

<?php if (carbon_get_theme_option( 'crb_contacts_wtsp' ) ): ?>  
<a rel="external" href="https://wa.me/<?php echo carbon_get_theme_option( 'crb_contacts_wtsp' ) ?>" class="header_message"></a>
<?php endif ?>
<?php if (carbon_get_theme_option( 'crb_contacts_tg' ) ): ?> 
<a rel="external" href="https://t.me/<?php echo carbon_get_theme_option( 'crb_contacts_tg' ) ?>" class="header_message"><img src="../img/header_message2.svg" alt=""></a>
<?php endif ?>
<?php if (carbon_get_theme_option( 'crb_contacts_vk' ) ): ?>  
  <a rel="external" href="<?php echo carbon_get_theme_option( 'crb_contacts_vk' ) ?>" class="footer_message"></a>
<?php endif ?>
<?php if (carbon_get_theme_option( 'crb_contacts_inst' ) ): ?>  
  <a rel="external" href="<?php echo carbon_get_theme_option( 'crb_contacts_inst' ) ?>" class="footer_message"></a>
<?php endif ?>
<?php if (carbon_get_theme_option( 'crb_contacts_tgs' ) ): ?>  
  <a rel="external" href="<?php echo carbon_get_theme_option( 'crb_contacts_tgs' ) ?>" class="footer_message"></a>
<?php endif ?>
<?php if (carbon_get_theme_option( 'crb_contacts_ytb' ) ): ?>  
  <a rel="external" href="<?php echo carbon_get_theme_option( 'crb_contacts_ytb' ) ?>" class="footer_message"></a>
<?php endif ?>
<?php if (carbon_get_theme_option( 'crb_contacts_dzen' ) ): ?>  
  <a rel="external" href="<?php echo carbon_get_theme_option( 'crb_contacts_dzen' ) ?>" class="footer_message"></a>
<?php endif ?>



<?php if ( carbon_get_theme_option( 'crb_contacts_shedule' )): ?>
<?php echo carbon_get_theme_option( 'crb_contacts_shedule' ) ?>
<?php endif ?>

<?php if ( carbon_get_theme_option( 'crb_general_slogan' )): ?>
<?php echo carbon_get_theme_option( 'crb_general_slogan' ) ?>
<?php endif ?>