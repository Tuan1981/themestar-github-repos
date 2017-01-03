<?php
/**
* Plugin Name: TS Github Repos
* Description: Display user repos in widget
* Version: 1.0
* Author: Tuan Anh Le
* Author URI: https://themestar.co.uk | https://themetheuk.com
**/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Include Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/my-github-repos-scripts.php');

// Include Class
require_once(plugin_dir_path(__FILE__) . '/includes/my-github-repos-class.php');


// Register Widget
function mgr_register_widget(){
	register_widget('WP_My_Github_Repos');
}

add_action('widgets_init', 'mgr_register_widget');