<?php
/*
Plugin Name: Chat with preet
Plugin URI:  http://manpreetk.sgedu.site/eventplannerwp/
Description: chat with preet plugin allows your website visitors to chat with you via whatsapp message. 
Version:     3.2.4
Author:      Manpreet Kaur
Author URI: http://manpreetk.sgedu.site/eventplannerwp/
License:     GPL2
Text Domain: click-with-preet-for-whatsapp
*/

if ( ! defined( 'WPINC' ) ) {
	die('dont try to call this directly');
}

// ctc - Version - update version at readme 'Stable tag'
if ( ! defined( 'HT_CTC_VERSION' ) ) {
	define( 'HT_CTC_VERSION', '3.2.4' );
}

// environment - production, staging, development, test
// define( 'HT_CTC_ENVIRONMENT', 'development' ); //todo
if ( ! defined( 'HT_CTC_ENVIRONMENT' ) ) {
	define( 'HT_CTC_ENVIRONMENT', 'production' );
}

// define HT_CTC_PLUGIN_FILE
if ( ! defined( 'HT_CTC_PLUGIN_FILE' ) ) {
	define( 'HT_CTC_PLUGIN_FILE', __FILE__ );
}

// define HT_CTC_PLUGIN_DIR
if ( ! defined( 'HT_CTC_PLUGIN_DIR' ) ) {
	define( 'HT_CTC_PLUGIN_DIR', plugin_dir_path( HT_CTC_PLUGIN_FILE ) );
}

include_once HT_CTC_PLUGIN_DIR .'new/inc/class-ht-ctc-register.php';
register_activation_hook( __FILE__, array( 'HT_CTC_Register', 'activate' )  );
register_deactivation_hook( __FILE__, array( 'HT_CTC_Register', 'deactivate' )  );
register_uninstall_hook(__FILE__, array( 'HT_CTC_Register', 'uninstall' ) );

include_once 'common/class-ht-ctc-switch.php';