<?php

/**
 * Events functions and definitions
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */

 add_action( 'wp_enqueue_scripts', 'events_enqueue_styles' );
 function events_enqueue_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/styles/style.css');
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 }

/**
 * Loads the translation files for WordPress.
 *
 * @since 1.0.0
 */

function events_theme_setup()
{
	load_child_theme_textdomain( 'events', get_stylesheet_directory() . '/languages' );
}

add_action('after_setup_theme', 'events_theme_setup');
