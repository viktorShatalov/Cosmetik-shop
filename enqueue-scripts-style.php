<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
/**
 * Enqueue all scripts
 */
if (!function_exists('ast_scripts')) {
	add_action('wp_enqueue_scripts', 'ast_scripts');
	function ast_scripts()
	{
		wp_enqueue_script('slick.min', get_template_directory_uri() .
			'/assets/js/slick.min.js', array('jquery'), null, false);
		wp_enqueue_script('uikit.min', get_template_directory_uri() .
			'/assets/js/uikit.min.js', array('jquery'), null, false);
		wp_enqueue_script('jquery.easing.1.3', get_template_directory_uri() .
			'/assets/js/jquery.easing.1.3.js', array('jquery'), null, false);
		wp_enqueue_script('fantawesome', get_template_directory_uri() .
			'/assets/js/all.min.js', array('jquery'), null, false);
		wp_enqueue_script('main', get_template_directory_uri() .
			'/assets/js/main.js', array('jquery'), null, false);
	}
}
/**
 * Enqueue all styles
 */
if (!function_exists('ast_styles')) {
	add_action('wp_enqueue_scripts', 'ast_styles');
	function ast_styles()
	{
		wp_enqueue_style('face-style', get_stylesheet_uri());
		wp_enqueue_style('slick', get_template_directory_uri() .
			'/assets/css/slick.css', array(), null, 'all');
		wp_enqueue_style('uikit.min', get_template_directory_uri() .
			'/assets/css/uikit.min.css', array(), null, 'all');
		wp_enqueue_style('fontawesome', get_template_directory_uri() .
			'/assets/css/all.min.css', array(), null, 'all');
		wp_enqueue_style('style', get_template_directory_uri() .
			'/assets/css/style.min.css', array(), null, 'all');
	}
}
