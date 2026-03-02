<?php /*

	->add_tab( __( 'Вопросы и ответы' ), array(
		Field::make( 'checkbox', 'crb_faq_check', __( 'Отображать блок' ) ),
		Field::make( 'text', 'crb_faq_title', 'Заголовок' ),
		Field::make( 'image', 'crb_faq_photo', __( 'Изображение' ) )						
			->set_value_type( 'url' ),
		Field::make( 'complex', 'crb_faq', __( 'Опции' ) )
	    ->add_fields( array(
	    	Field::make( 'text', 'question', __( 'Вопрос' ) )
					->set_width( 50 ),
				Field::make( 'textarea', 'answer', __( 'Ответ' ) )
					->set_width( 50 ),    			
	    ))
	))

*/ ?>


<?php if (carbon_get_post_meta( get_the_ID(), 'crb_faq_title' )): ?>
<?php echo carbon_get_post_meta( get_the_ID(), 'crb_faq_title' ) ?>
<?php endif  ?>
<?php if (carbon_get_post_meta( get_the_ID(), 'crb_faq_photo' )): ?>
<?php echo carbon_get_post_meta( get_the_ID(), 'crb_faq_photo' ) ?>
<?php endif  ?>

<?php  if ($slides = carbon_get_post_meta( get_the_ID(), 'crb_faq' )): ?>

		<?php foreach ($slides as $slide): ?>
			
			<?php echo $slide['question'] ?>	
			<?php echo $slide['answer'] ?>
		<?php endforeach ?>	

<?php endif  ?>




<section class="faq-area-area">
	<div class="container">
		<h2 class="faq-area-area__title title"><?php echo carbon_get_post_meta( get_the_ID(), 'crb_faq_title' ) ?></h2>
		<div class="faq-area-area__cont">
			<div class="faq-area-area__left"></div>
			<div class="faq-area-area__right"></div>
		</div>

		<?php  if ($slides = carbon_get_post_meta( get_the_ID(), 'crb_faq' )): ?>
		<div class="faq-area__body block-faq">
			<?php foreach ($slides as $slide): ?>
			<div class="block-faq__item">
				<h4 class="block-faq__title"><?php echo $slide['question'] ?></h4>
				<div class="block-faq__body"><?php echo $slide['answer'] ?></div>
			</div>
			<?php endforeach ?>
		</div>
		<?php endif  ?>
	</div>
</section>



<script>
	$('.block-faq__title').click(function(event) {
	  $(this).toggleClass('active');
	  $(this).next('.block-faq__body').slideToggle();
	});
</script>
