<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function moot_script_enqueue() {
	//css
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/moot.css', array(), '1.0.0', 'all');
	wp_enqueue_style('superslide', get_template_directory_uri() . '/css/superslides.css', array(), '1.0.0', 'all');
	wp_enqueue_style('awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all');
	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/moot.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs2', get_template_directory_uri() . '/js/custom-melanie.js', array(), '1.0.0', true);
	wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '1.0.0', true);
	wp_enqueue_script('animate', get_template_directory_uri() . '/js/jquery.animate-enhanced.min.js', array(), '1.0.0', true);
	wp_enqueue_script('superslide', get_template_directory_uri() . '/js/jquery.superslides.js', array(), '1.0.0', true);
	
}

add_action( 'wp_enqueue_scripts', 'moot_script_enqueue');

/*
	==========================================
	 Activate menus
	==========================================
*/
function moot_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('init', 'moot_theme_setup');

/*
	==========================================
	 Theme support function
	==========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));