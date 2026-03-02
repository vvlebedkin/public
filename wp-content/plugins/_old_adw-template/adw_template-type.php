<?php 

function lc_register_news_post_type() {

  $labels = array(
     'name' => _x( 'Новости', 'post type general name' ),
     'singular_name' => _x( 'Новости', 'post type singular name' ), 
    
  );

  $args = array(
    'labels' => $labels,
    'description' => 'My custom post type',
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'rewrite' => ['slug' => 'novosti'],    
    'supports' => array('thumbnail','title','editor','excerpt'),
    
  );

  register_post_type( 'news', $args );
}
// add_action( 'init', 'lc_register_news_post_type' ); 



add_action( 'init', 'create_newscategory', 0 );
function create_newscategory () {
$args = array(
  'label' => _x( 'Рубрики', 'taxonomy general name' ),
  'labels' => array(
  'name' => _x( 'Рубрики', 'taxonomy general name' ),
  'singular_name' => _x( 'Рубрики', 'taxonomy singular name' ),
  'menu_name' => __( 'Рубрики ' ),
  'all_items' => __( 'All Рубрики' ),
  'edit_item' => __( 'Change Рубрики' ),
  'view_item' => __( 'View Рубрики' ),
  'update_item' => __( 'Refresh Рубрики' ),
  'add_new_item' => __( 'Add new Рубрики' ),
  'new_item_name' => __( 'Name' ),
  'parent_item' => __( 'Parent' ),
  'parent_item_colon' => __( 'Parent:' ),
  'search_items' => __( 'Search Рубрики' ),
  'popular_items' => null,
  'separate_items_with_commas' => null,
  'add_or_remove_items' => null,
  'choose_from_most_used' => null,
  'not_found' => __( 'Рубрики not found.' ),
  ),
  'public' => true,
  'show_ui' => true,
  'show_in_menu' => true,
  'show_in_nav_menus' => true,
  'show_tagcloud' => true,
  'show_in_quick_edit' => true,
  'show_in_rest' => true,
  'meta_box_cb' => null,
  'show_admin_column' => false,
  'description' => '',
  'hierarchical' => true,
  'update_count_callback' => '',  
  'query_var' => true,
  'rewrite' => array(
  // 'slug' => 'blog',
  'with_front' => true, 
  // 'hierarchical' => true,
  'ep_mask' => EP_NONE,
  ),
  'sort' => null,
  '_builtin' => false,
  );
// register_taxonomy( 'newscategory', array('news'), $args );
}


function lc_register_services_post_type() {

  $labels = array(
     'name' => _x( 'Услуги', 'post type general name' ),
     'singular_name' => _x( 'Услуги', 'post type singular name' ), 
    
  );

  $args = array(
    'labels' => $labels,
    'description' => 'My custom post type',
    'public' => true,
    'has_archive' => false,
    'show_in_rest' => true,
    // 'rewrite' => ['slug' => 'akcii'],    
    'supports' => array('thumbnail','title','editor'),
    
  );

  register_post_type( 'services', $args );
}
// add_action( 'init', 'lc_register_services_post_type' ); 



add_action( 'init', 'create_servicescategory', 0 );
function create_servicescategory () {
  $args = array(
    'label' => _x( 'Рубрики', 'taxonomy general name' ),
    'labels' => array(
    'name' => _x( 'Рубрики', 'taxonomy general name' ),
    'singular_name' => _x( 'Рубрики', 'taxonomy singular name' ),
    'menu_name' => __( 'Рубрики ' ),
    'all_items' => __( 'All Рубрики' ),
    'edit_item' => __( 'Change Рубрики' ),
    'view_item' => __( 'View Рубрики' ),
    'update_item' => __( 'Refresh Рубрики' ),
    'add_new_item' => __( 'Add new Рубрики' ),
    'new_item_name' => __( 'Name' ),
    'parent_item' => __( 'Parent' ),
    'parent_item_colon' => __( 'Parent:' ),
    'search_items' => __( 'Search Рубрики' ),
    'popular_items' => null,
    'separate_items_with_commas' => null,
    'add_or_remove_items' => null,
    'choose_from_most_used' => null,
    'not_found' => __( 'Рубрики not found.' ),
    ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud' => true,
    'show_in_quick_edit' => true,
    'show_in_rest' => true,
    'meta_box_cb' => null,
    'show_admin_column' => false,
    'description' => '',
    'hierarchical' => true,
    'update_count_callback' => '',  
    'query_var' => true,
    'rewrite' => array(
    // 'slug' => 'blog',
    'with_front' => true, 
    // 'hierarchical' => true,
    'ep_mask' => EP_NONE,
  ),
    'sort' => null,
    '_builtin' => false,
  );
  register_taxonomy( 'servicescategory', array('services'), $args );
}

function lc_register_reviews_post_type() {

  $labels = array(
     'name' => _x( 'Отзывы', 'post type general name' ),
     'singular_name' => _x( 'Отзывы', 'post type singular name' ), 
    
  );

  $args = array(
    'labels' => $labels,
    'description' => 'My custom post type',
    'public' => true,
    'has_archive' => false,
    'show_in_rest' => true,
    // 'rewrite' => ['slug' => 'novosti'],    
    'supports' => array('thumbnail','title','editor'),
    
  );

  register_post_type( 'reviews', $args );
}
// add_action( 'init', 'lc_register_reviews_post_type' ); 