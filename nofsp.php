<?php
/*
Plugin Name: No Force Strong Passwords
Description: Deactivate Force Strong Passwords for WP Engine
Version: 1.0
Author: Jason Davis
Author URI: https://nerdbrand.me
Plugin URI: https://nerdbrand.me
License: GPLv2
*/

add_action('init', function() {
	remove_action( 'admin_enqueue_scripts', 'slt_fsp_enqueue_force_zxcvbn_script' );
	remove_action( 'login_enqueue_scripts', 'slt_fsp_enqueue_force_zxcvbn_script' );
	remove_action( 'user_profile_update_errors', 'slt_fsp_validate_profile_update', 0, 3 );
	remove_action( 'validate_password_reset', 'slt_fsp_validate_strong_password', 10, 2 );

});