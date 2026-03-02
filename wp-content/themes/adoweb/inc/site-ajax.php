<?php 

function get_baner_src() {

  $nonce = $_POST['nonce'];
  $step1 = $_POST['step1'];
  $step2 = $_POST['step2'];
  $step3 = $_POST['step3'];

  
  if ( !wp_verify_nonce( $_POST['nonce'], 'custom-nonce' ) ) {
    wp_die( 'Stop!' );    
  }   

  // Возвращаем успешный ответ
  wp_send_json_success(['url' => $banerUrl]);
}
add_action('wp_ajax_get_baner_src', 'get_baner_src');
add_action('wp_ajax_nopriv_get_baner_src', 'get_baner_src');