<?php
/*
Plugin Name: Twitter follow widget
Plugin URI: https://lahin.com
Description: A twitter follow widget plugin
Version: 1.0.0
Author: Muhammad Lahin
Author URI: https://lahin.com
Text Domain: l_twt
License: GPL2 
 */

defined('ABSPATH') or die();

// Load Widget
require_once(plugin_dir_path(__FILE__).'/include/twt-follow-class.php');

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/include/twt-follow-scripts.php');

function l_register_twitter_follow() 
{
	register_widget('TwitterFollowWidget');
}

// Hook the function
add_action('widgets_init', 'l_register_twitter_follow');