<?php 

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_menu', 1 );

function crb_attach_menu() {

	Container::make( 'nav_menu_item', 'Menu Settings' )
   	->add_fields( array(
      Field::make( 'image', 'crb_menu_icon', 'Icon' )
    	->set_value_type( 'url' )
    ));

}