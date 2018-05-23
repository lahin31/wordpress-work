<?php
/*
Plugin Name: Lahin Css Overlay
Plugin URI: https://lahin.com
Description: An Awesome CSS Overlay Plugin
Version: 1.0.0
Author: Muhammad Lahin
Author URI: https://lahin.com
Text Domain: img-overlay
License: GPL2
 */

defined( 'ABSPATH' ) or die();

define( 'lahin_css_overlay_path',  plugin_dir_path(__FILE__));
define( 'lahin_css_overlay_url',  plugin_dir_url(__FILE__));

include 'load.php';

class LahinCssOverlay
{
	public function boot() {
		$this->publicHooks();
		$this->commonHooks();
	}

	public function publicHooks() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
	}

	/**
	 * The hook where we will register all the common actions and filters
	 */
	public function commonHooks() {
		$shortCodeClass = new \LahinOverlay\Classes\ShortCodeClass();
		add_shortcode( 'lahin_css_overlay', array($shortCodeClass, 'register'));
	}

	/**
	 * Enqueueing all CSS and JS file
	 */
	public function enqueue() {
		wp_enqueue_style( 'lahin_css_overlay_style',  lahin_css_overlay_url . 'assets/css/style.css');
		wp_enqueue_script( 'lahin_css_overlay_script',  lahin_css_overlay_url . 'assets/js/script.js', array('jquery'));
	}
}

add_action( 'plugins_loaded', function() {
	$lahinCssOverlay = new LahinCssOverlay();
	$lahinCssOverlay->boot();
});