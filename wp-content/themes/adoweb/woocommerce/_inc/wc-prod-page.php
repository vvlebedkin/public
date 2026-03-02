<?php 


remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 10 );

add_action( 'woocommerce_before_single_product_summary', 'adoweb_show_product_images', 10 );

	function adoweb_show_product_images()
	{

		global $product;

		$attachment_ids = $product->get_gallery_image_ids();

		$product_image_url = get_the_post_thumbnail_url($product->get_id(), 'large');
		$product_sm_image_url = get_the_post_thumbnail_url($product->get_id(), 'medium');
		$product_thumb_image_url = get_the_post_thumbnail_url($product->get_id(), 'thumbnail');

	?>
		<div class="card_imgs">
      <div class="card_img-wrapper">
        <div class="card_img-slider">
          <div class="card_img-slide active">
            <img src="<?php echo $product_image_url ?>" alt="">
          </div>
          <?php if ($attachment_ids): ?>
        	<?php  foreach ($attachment_ids as $attachment_id) {
					if ($attachment_id) { ?>

		        <div class="card_img-slide">
		          <img src="<?php echo wp_get_attachment_image_src( $attachment_id, "woocommerce_single" )[0]; ?>" alt="gallery">
		        </div>

		        <?php } ?>
					<?php } ?>
					<?php endif ?>

        </div>
        <div class="card_img-arrows">
          <div class="card_img-arrow prev"></div>
          <div class="card_img-arrow next"></div>
        </div>
      </div>
      <div class="card_dots">
        <div class="card_dot active">
          <img src="<?php echo $product_thumb_image_url ?>" alt="">
        </div>

        <?php if ($attachment_ids): ?>
        	<?php  foreach ($attachment_ids as $attachment_id) {
					if ($attachment_id) { ?>

		        <div class="card_dot">
		           <img  src="<?php echo $shop_thumbnail_image_url = wp_get_attachment_image_src( $attachment_id, "woocommerce_gallery_thumbnail" )[0]; ?>" alt="gallery">
		        </div>

		        <?php } ?>
					<?php } ?>
					<?php endif ?>
       
      </div>
    </div>
   


	<?php 
		
	}