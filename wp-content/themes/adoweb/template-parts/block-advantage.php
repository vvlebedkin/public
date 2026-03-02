<?php if (carbon_get_post_meta( get_the_ID(), 'crb_advantage_title' )): ?>
<?php echo carbon_get_post_meta( get_the_ID(), 'crb_advantage_title' ) ?>
<?php endif  ?>
<?php if (carbon_get_post_meta( get_the_ID(), 'crb_advantage_photo' )): ?>
<?php echo carbon_get_post_meta( get_the_ID(), 'crb_advantage_photo' ) ?>
<?php endif  ?>
<?php  if ($slides = carbon_get_post_meta( get_the_ID(), 'crb_advantage' )): ?>

	<?php foreach ($slides as $slide): ?>
		<?php echo $slide['title'] ?>
		<?php echo $slide['text'] ?>
		<?php echo $slide['photo'] ?>		
	<?php endforeach ?>	

<?php endif  ?>