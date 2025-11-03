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
 * Load theme modules
 */

// Menu registration
require_once get_template_directory() . '/inc/menus.php';

// Asset enqueue
require_once get_template_directory() . '/inc/enqueue-scripts.php';
