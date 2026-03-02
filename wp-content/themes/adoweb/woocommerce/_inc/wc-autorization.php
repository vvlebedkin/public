<?php 

/* Добавить поле подтверждения пароля в форме регистрации */

// Add the code below to your theme's functions.php file to add a confirm password field on the register form under My Accounts.
add_filter('woocommerce_registration_errors', 'registration_errors_validation', 10,3);
function registration_errors_validation($reg_errors, $sanitized_user_login, $user_email) {
	global $woocommerce;
	extract( $_POST );
	if ( strcmp( $password, $password2 ) !== 0 ) {
		return new WP_Error( 'registration-error', __( 'Passwords do not match.', 'woocommerce' ) );
	}
	return $reg_errors;
}
add_action( 'woocommerce_register_form', 'wc_register_form_password_repeat' );
function wc_register_form_password_repeat() {
	?>
	<div class="form-row inp_wrapper">
		<label class="inp_wrapper-title" for="reg_password2"><?php _e( 'Повторите пароль', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="password" class="input-text inp" name="password2" id="reg_password2" value="<?php if ( ! empty( $_POST['password2'] ) ) echo esc_attr( $_POST['password2'] ); ?>" />
		<label class="password_btn">
                                <input type="checkbox" name="" id="">
                            </label>
	</div>
	<?php
}

/* добавляем поля в форму регистрации */


add_action( 'woocommerce_register_form_start', 'truemisha_form_registration_fields', 25 );
 
function truemisha_form_registration_fields() {
 
	// поле "Имя"
	$billing_first_name = ! empty( $_POST[ 'billing_first_name' ] ) ? $_POST[ 'billing_first_name' ] : '';
	echo '<div class="form-row inp_wrapper">
		<label class="inp_wrapper-title" for="kind_of_name">Имя <span class="required">*</span></label>
		<input type="text" class="input-text inp" name="billing_first_name" id="kind_of_name" value="' . esc_attr( $billing_first_name ) . '" />
	</div>';
 
	// поле "Фамилия"
	//$billing_last_name = ! empty( $_POST[ 'billing_last_name' ] ) ? $_POST[ 'billing_last_name' ] : '';
	// echo '<p class="form-row form-row-last">
	// 	<label for="kind_of_l_name">Фамилия <span class="required">*</span></label>
	// 	<input type="text" class="input-text" name="billing_last_name" id="kind_of_l_name" value="' . esc_attr( $billing_last_name ) . '" />
	// </p>';
 
	// чтобы всё не съехало, ведь у нас "на флоатах"
	// echo '<div class="clear"></div>';
 
}



add_filter( 'woocommerce_registration_errors', 'truemisha_validate_registration', 25 );
 
function truemisha_validate_registration( $errors ) {
 
	// если хотя бы одно из полей не заполнено
	if ( empty( $_POST[ 'billing_first_name' ] ) ) {  //  || empty( $_POST[ 'billing_last_name' ] )
		$errors->add( 'name_err', '<strong>Ошибка</strong>: Заполните Имя плз.' );
	}
 
	return $errors;
 
}



add_action( 'woocommerce_created_customer', 'truemisha_save_fields', 25 );
 
function truemisha_save_fields( $user_id ) {
 
	// сохраняем Имя
	if ( isset( $_POST[ 'billing_first_name' ] ) ) {
		update_user_meta( $user_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
		update_user_meta( $user_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
	}
	// сохраняем Фамилию
	// if ( isset( $_POST[ 'billing_last_name' ] ) ) {
	// 	update_user_meta( $user_id, 'last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
	// 	update_user_meta( $user_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
	// }
 
}


