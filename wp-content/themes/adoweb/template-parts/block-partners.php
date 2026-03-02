<?php if (carbon_get_post_meta( get_the_ID(), 'crb_partners_title' )): ?>
<?php echo carbon_get_post_meta( get_the_ID(), 'crb_partners_title' ) ?>
<?php endif  ?>
<?php if (carbon_get_post_meta( get_the_ID(), 'crb_partners_photo' )): ?>
<?php echo carbon_get_post_meta( get_the_ID(), 'crb_partners_photo' ) ?>
<?php endif  ?>
<?php if ($slides = carbon_get_post_meta( get_the_ID(), 'crb_partners_gallery' )): ?>

	<?php foreach ($slides as $slide): ?>

		<?php echo wp_get_attachment_image_url( $slide, 'full' ) ?>
	<?php endforeach ?>	

<?php endif ?> 