<?php
/*
	Plugin Name: Twitter follow widget
 */

function twtAddScripts()
{
	wp_register_script('twt_follow', 'https://platform.twitter.com/widgets.js');
	wp_enqueue_script('twt_follow');
}
add_action('wp_enqueue_scripts', 'twtAddScripts');