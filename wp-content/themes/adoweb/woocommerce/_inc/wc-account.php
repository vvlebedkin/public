<?php 

/* Скрываем вкладки */

add_filter ( 'woocommerce_account_menu_items', 'misha_remove_my_account_links' );
function misha_remove_my_account_links( $menu_links ){
 
	unset( $menu_links['edit-address'] ); // Addresses
	//unset( $menu_links['dashboard'] ); // Dashboard
	//unset( $menu_links['payment-methods'] ); // Payment Methods
	//unset( $menu_links['orders'] ); // Orders
	unset( $menu_links['downloads'] ); // Downloads
	//unset( $menu_links['edit-account'] ); // Account details
	//unset( $menu_links['customer-logout'] ); // Logout
 
	return $menu_links;
}

/* Переименование вкладок */

add_filter ( 'woocommerce_account_menu_items', 'misha_rename_downloads' );
 
function misha_rename_downloads( $menu_links ){
	$menu_links['edit-account'] = 'Данные аккаунта';
	return $menu_links;
}

/* Добавляем Вкладки и страницы */

/*
 * Step 1. Add Link to My Account menu
 */
add_filter ( 'woocommerce_account_menu_items', 'misha_log_history_link', 40 );
function misha_log_history_link( $menu_links ){
 
	$menu_links = array_slice( $menu_links, 0, 3, true ) 
	+ array( 'favorites' => 'Избранное' )
	+ array_slice( $menu_links, 3, NULL, true );
 
	return $menu_links;
 
}
/*
 * Step 2. Register Permalink Endpoint
 */
add_action( 'init', 'misha_add_endpoint' );
function misha_add_endpoint() {
 
	// WP_Rewrite is my Achilles' heel, so please do not ask me for detailed explanation
	add_rewrite_endpoint( 'favorites', EP_PAGES );
 
}
/*
 * Step 3. Content for the new page in My Account, woocommerce_account_{ENDPOINT NAME}_endpoint
 */
add_action( 'woocommerce_account_favorites_endpoint', 'misha_my_account_endpoint_content' );
function misha_my_account_endpoint_content() {
 
	// of course you can print dynamic content here, one of the most useful functions here is get_current_user_id()
	echo 'Last time you logged in: yesterday from Safari.';
 
}
/*
 * Step 4
 */
// Go to Settings > Permalinks and just push "Save Changes" button.