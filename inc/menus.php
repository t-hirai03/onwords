<?php
/**
 * Menu Registration
 *
 * Registers navigation menu locations for the Onwords theme.
 *
 * @package Onwords
 */

/**
 * Register navigation menus
 *
 * @return void
 */
function onwords_register_menus() {
	register_nav_menus(
		array(
			'header-menu'        => __( 'Header Menu', 'onwords' ),
			'footer-main-menu'   => __( 'Footer Main Menu', 'onwords' ),
			'footer-policy-menu' => __( 'Footer Policy Menu', 'onwords' ),
		)
	);
}
add_action( 'after_setup_theme', 'onwords_register_menus' );
