<?php
/**
 * Onwords Theme Functions
 *
 * Main functions file for the Onwords WordPress theme.
 * This file loads all required inc/ files for modular functionality.
 *
 * @package Onwords
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme Setup
 */
function onwords_theme_setup() {
	// Add support for dynamic title tag
	add_theme_support( 'title-tag' );

	// Add support for post thumbnails (featured images)
	add_theme_support( 'post-thumbnails' );

	// Set default thumbnail size
	set_post_thumbnail_size( 1200, 630, true );

	// Add custom image sizes
	add_image_size( 'case-thumbnail', 800, 450, true );
}
add_action( 'after_setup_theme', 'onwords_theme_setup' );

/**
 * Load theme modules
 */

// Custom post types
require_once get_template_directory() . '/inc/custom-post-types.php';

// ACF field groups
require_once get_template_directory() . '/inc/acf-fields.php';

// Menu registration
require_once get_template_directory() . '/inc/menus.php';

// Asset enqueue
require_once get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Flush rewrite rules on theme activation (one-time)
 * This ensures the news archive URL works properly
 */
function onwords_flush_rewrite_rules() {
	if ( ! get_transient( 'onwords_flush_rewrite_rules' ) ) {
		flush_rewrite_rules();
		set_transient( 'onwords_flush_rewrite_rules', 1, DAY_IN_SECONDS );
	}
}
add_action( 'init', 'onwords_flush_rewrite_rules' );
