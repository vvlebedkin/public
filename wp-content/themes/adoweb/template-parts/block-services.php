<?php if (carbon_get_post_meta( get_the_ID(), 'crb_services_title' )): ?>
<?php echo carbon_get_post_meta( get_the_ID(), 'crb_services_title' ) ?>
<?php endif  ?>
<?php if (carbon_get_post_meta( get_the_ID(), 'crb_services_photo' )): ?>
<?php echo carbon_get_post_meta( get_the_ID(), 'crb_services_photo' ) ?>
<?php endif  ?>

<?php  if ($slides = carbon_get_post_meta( get_the_ID(), 'crb_services' )): ?>

		<?php foreach ($slides as $slide): ?>
			
			<?php echo $slide['question'] ?>	
			<?php echo $slide['answer'] ?>
		<?php endforeach ?>	

<?php endif  ?>