<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package adoweb
 */

?>

<?php if (is_front_page()): ?>
  <span class="footer_logo">
    <img src="<?php echo carbon_get_theme_option( 'crb_general_logo2' ) ?>" alt="" >            
  </span>
<?php else: ?>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer_logo">
    <img src="<?php echo carbon_get_theme_option( 'crb_general_logo2' ) ?>" alt="" >            
  </a> 
<?php endif ?> 


<?php if ($tel = carbon_get_theme_option( 'crb_contacts_tel' )): ?>
	<a href="tel:<?php echo phone_format($tel) ?>" class="footer_number"><?php echo $tel ?></a>
<?php endif ?>
<?php if ($tel = carbon_get_theme_option( 'crb_contacts_tel2' )): ?>
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

<?php if ( carbon_get_theme_option( 'crb_general_copyright' )): ?>
<div class="footer_item"><?php echo carbon_get_theme_option( 'crb_general_copyright' ) ?></div>
<?php endif ?>

<?php if ( carbon_get_theme_option( 'crb_general_developer' )): ?>
<div class="footer_item"><?php echo carbon_get_theme_option( 'crb_general_developer' ) ?></div>
<?php endif ?>

<?php if ( carbon_get_theme_option( 'crb_general_slogan' )): ?>
<div class="footer_item"><?php echo carbon_get_theme_option( 'crb_general_slogan' ) ?></div>
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

<?php  if ($slides = carbon_get_theme_option( 'crb_general_info' )): ?>

    <?php foreach ($slides as $slide): ?>  
      <div class="footer_item">
        <div class="footer_item-title">
          <?php echo $slide['title'] ?>
        </div>
        <div class="footer_item-subtitle">
          <?php echo $slide['text'] ?>
        </div>
      </div>  

    <?php endforeach ?> 

  <?php endif  ?>

<?php get_template_part( 'template-parts/block', 'popup' ); ?>

<?php wp_footer(); ?>

</body>
</html>
