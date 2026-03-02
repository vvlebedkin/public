<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package adoweb
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function adoweb_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'adoweb_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function adoweb_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'adoweb_pingback_header' );

// Отключаем Гутенберг

/*if( 'disable_gutenberg' ){
    remove_theme_support( 'core-block-patterns' ); 

    add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );    
    remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );
    
    add_action( 'admin_init', function(){
        remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
        add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
    } );
} /

// Отключает Gutenberg для произвольных типов записей
// add_filter( 'use_block_editor_for_post_type', 'my_disable_gutenberg', 10, 2 );

// function my_disable_gutenberg( $current_status, $post_type ) {

//   $disabled_post_types = [ 'page',  'reviews', 'actions' ]; 

//   return ! in_array( $post_type, $disabled_post_types, true );
// }

add_filter( 'get_the_archive_title', 'fixcode_archive_title' );
function fixcode_archive_title( $title ) {
  if ( is_post_type_archive() ) {
    $title = post_type_archive_title( '', false );
  }
  return $title;
}
add_filter( 'get_the_archive_title', function( $title ){
  return preg_replace('~^[^:]+: ~', '', $title );
});

function phone_format($phone) 
  {
    $phone = trim($phone);
   
    $res = preg_replace(
      array(
        '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{3})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
        '/[\+]?([7|8])[-|\s]?(\d{3})[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
        '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
        '/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/', 
        '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{3})/',
        '/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{3})[-|\s]?(\d{3})/',         
      ), 
      array(
        '+7$2$3$4$5', 
        '+7$2$3$4$5', 
        '+7$2$3$4$5', 
        '+7$2$3$4$5',   
        '+7$2$3$4', 
        '+7$2$3$4', 
      ), 
      $phone
    );
   
    return $res;
  }



//скрываем визуальный редактор для шаблона страницы start
// function wph_hide_editor() {
//     $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
//     if(!isset($post_id)) return;
 
//     $template_file = get_post_meta($post_id, '_wp_page_template', true);
//     if( $post_id == 7 || $post_id == 21 || $post_id == 23){ 
//         remove_post_type_support('page', 'editor');
//     }
// }
// add_action('admin_init', 'wph_hide_editor');


add_filter('wpcf7_autop_or_not', '__return_false'); // убрать тег <p> и <br> из формы

/* pagination*/

function my_pagination() 
{
    global $wp_query;

    if (is_front_page()) {
        $currentPage = (get_query_var("page")) ? get_query_var("page") : 1;
    } else {
        $currentPage = (get_query_var("paged")) ? get_query_var("paged") : 1;
    }

    $pagination = paginate_links([
        "base"      => str_replace(999999999, "%#%", get_pagenum_link(999999999)),
        "format"    => "",
        "current"   => max(1, $currentPage),
        "total"     => $wp_query->max_num_pages,
        "type"      => "list",
        "prev_text" => 'Предыдущая страница',
        "next_text" => 'Следующая страница',
    ]);

    echo str_replace("page-numbers", "pagination", $pagination);
}

//Отключаем теги в кратком описании и в контенте

// remove_filter('the_excerpt', 'wpautop');

// remove_filter('the_content', 'wpautop');

// Количество записей для страницы архива

// add_action('pre_get_posts', 'custom_per_page');

function custom_per_page(&$query) {
if (!is_admin() && is_post_type_archive('reviews')) {
    $query->set('posts_per_page', 4);
}
return;
}