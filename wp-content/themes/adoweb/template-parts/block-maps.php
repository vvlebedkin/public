<?php if (carbon_get_post_meta( get_the_ID(), 'crb_hero_title' )): ?>
<?php echo carbon_get_post_meta( get_the_ID(), 'crb_hero_title' ) ?>
<?php endif  ?>
<?php if (carbon_get_post_meta( get_the_ID(), 'crb_hero_subtitle' )): ?>
<?php echo carbon_get_post_meta( get_the_ID(), 'crb_hero_subtitle' ) ?>
<?php endif  ?>
<?php if (carbon_get_post_meta( get_the_ID(), 'crb_hero_photo' )): ?>
<?php echo carbon_get_post_meta( get_the_ID(), 'crb_hero_photo' ) ?>
<?php endif  ?>

<section class="maps-area">
  <div class="container">
    <div class="maps-area__body">
      <div id="map" class="maps-area__map" data-coordinates = '<?php echo carbon_get_theme_option( 'crb_contacts_map' ) ?>'>
      </div>
      <div class="maps-area__forms">
        <h3 class="maps-area__title"><span>Получите бесплатную консультацию</span> или индивидуальную подборку автомобилей</h3>
        <div class="maps-area__form offer-form">
          <?php echo do_shortcode( '[contact-form-7 id="735fb77" title="Получите бесплатную консультацию"]' ) ?>
        </div>
      </div>
    </div>
  </div>
</section>