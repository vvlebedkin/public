<?php if ($tel = carbon_get_theme_option( 'crb_contacts_tel' )): ?>
	<a href="tel:<?php echo phone_format($tel) ?>" class="footer_number"><?php echo $tel ?></a>
<?php endif ?>
<?php if ( carbon_get_theme_option( 'crb_contacts_address' )): ?>
<div class="footer_adres"><?php echo carbon_get_theme_option( 'crb_contacts_address' ) ?></div>
<?php endif ?>
<?php if ( carbon_get_theme_option( 'crb_contacts_email' )): ?>
<a href="mailto:<?php echo carbon_get_theme_option( 'crb_contacts_email' ) ?>" class="footer_email"><?php echo carbon_get_theme_option( 'crb_contacts_email' ) ?></a>
<?php endif ?>

<?php if (carbon_get_theme_option( 'crb_contacts_wtsp' ) ): ?>  
<a rel="external" href="https://wa.me/<?php echo carbon_get_theme_option( 'crb_contacts_wtsp' ) ?>" class="footer_message"></a>
<?php endif ?>
<?php if (carbon_get_theme_option( 'crb_contacts_tg' ) ): ?> 
<a rel="external" href="https://t.me/<?php echo carbon_get_theme_option( 'crb_contacts_tg' ) ?>" class="footer_message"></a>
<?php endif ?>

<?php if (carbon_get_theme_option( 'crb_contacts_inst' ) ): ?>  
  <a rel="external" href="<?php echo carbon_get_theme_option( 'crb_contacts_inst' ) ?>" class="footer_message"></a>
<?php endif ?>

<?php if ( carbon_get_theme_option( 'crb_general_copyright' )): ?>
<div class="footer_item"><?php echo carbon_get_theme_option( 'crb_general_copyright' ) ?></div>
<?php endif ?>

<?php if ( carbon_get_theme_option( 'crb_general_developer' )): ?>
<div class="footer_item"><?php echo carbon_get_theme_option( 'crb_general_developer' ) ?></div>
<?php endif ?>

<?php if ( carbon_get_theme_option( 'crb_contacts_map' )): ?>
<div id="map" class="footer_map" data-coordinates="<?php echo carbon_get_theme_option( 'crb_contacts_map' ) ?>"> 
</div>
<?php endif ?>
<?php if ( carbon_get_theme_option( 'crb_contacts_shedule' )): ?>
<?php echo carbon_get_theme_option( 'crb_contacts_shedule' ) ?>
<?php endif ?>

<?php if ($items = carbon_get_theme_option( 'crb_polit_page' )): ?> 
  <a href="<?php the_permalink($items[0]['id']) ?>" class="footer_polit">Политика конфиденциальности</a>
<?php endif ?>