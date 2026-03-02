<?php $menuitems = wp_get_nav_menu_items('mobile-menu'); ?>

<ul>

	<?php
		foreach( $menuitems as $item ):
		$link = $item->url;
		$title = $item->title;

	?>

	<li>
		<?php $menu_icon = carbon_get_nav_menu_item_meta( $item->ID, 'crb_menu_icon' ) ?>
		<a href="<?php echo $link ?>"><?php echo $title ?>            
      <span>
      	<img src="<?php echo $menu_icon ?>" alt="">        
      </span>
    </a>		
	</li>

	<?php  endforeach; ?>

</ul>

