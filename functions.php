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

 add_action( 'wp_enqueue_scripts', 'events_directory_enqueue_styles' );
 function events_directory_enqueue_styles() {
	wp_enqueue_style( 'events-directory', get_stylesheet_directory_uri() . '/assets/styles/style.css');
 }

/**
 * Loads the translation files for WordPress.
 *
 * @since 1.0.0
 */

function events_directory_theme_setup()
{
	load_child_theme_textdomain( 'events-directory', get_stylesheet_directory() . '/languages' );

	if ( is_admin() ) {
		// Theme admin stuff
		require_once 'includes/class-blockstrap-admin-child.php';
	}
}

add_action('after_setup_theme', 'events_directory_theme_setup');
