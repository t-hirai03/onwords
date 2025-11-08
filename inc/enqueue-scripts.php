<?php
/**
 * Enqueue Scripts and Styles
 *
 * Handles loading CSS and JavaScript assets for the Onwords theme.
 * Uses WordPress enqueue system with proper dependencies and versioning.
 *
 * @package Onwords
 */

/**
 * Enqueue theme assets (CSS and JavaScript)
 *
 * @return void
 */
function onwords_enqueue_assets() {
	// Enqueue Font Awesome 6 Free (from CDN - used in STUDIO site)
	wp_enqueue_style(
		'font-awesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
		array(),
		'6.5.1'
	);

	// Enqueue Google Fonts (from STUDIO site)
	wp_enqueue_style(
		'google-fonts',
		'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Noto+Sans+JP:wght@400;500;600;700&display=swap',
		array(),
		null
	);

	// Enqueue Material Icons (from STUDIO site - used for navigation arrows)
	wp_enqueue_style(
		'material-icons',
		'https://fonts.googleapis.com/icon?family=Material+Icons',
		array(),
		null
	);

	// Enqueue Base Styles (CSS reset and global styles)
	wp_enqueue_style(
		'onwords-base',
		get_template_directory_uri() . '/assets/css/base.css',
		array(),
		'1.0.0'
	);

	// Enqueue CSS Variables (depends on base.css)
	wp_enqueue_style(
		'onwords-variables',
		get_template_directory_uri() . '/assets/css/variables.css',
		array( 'onwords-base' ),
		'1.0.0'
	);

	// Enqueue Navigation CSS (depends on variables.css)
	wp_enqueue_style(
		'onwords-navigation',
		get_template_directory_uri() . '/assets/css/navigation.css',
		array( 'onwords-variables' ),
		'1.0.0'
	);

	// Enqueue Breadcrumb CSS (depends on variables.css)
	wp_enqueue_style(
		'onwords-breadcrumb',
		get_template_directory_uri() . '/assets/css/breadcrumb.css',
		array( 'onwords-variables' ),
		'1.0.0'
	);

	// Enqueue Footer CSS (depends on variables.css)
	wp_enqueue_style(
		'onwords-footer',
		get_template_directory_uri() . '/assets/css/footer.css',
		array( 'onwords-variables' ),
		'1.0.0'
	);

	// Enqueue Sections CSS (depends on variables.css)
	wp_enqueue_style(
		'onwords-sections',
		get_template_directory_uri() . '/assets/css/sections.css',
		array( 'onwords-variables' ),
		'1.0.0'
	);

	// Enqueue Components CSS (depends on variables.css)
	wp_enqueue_style(
		'onwords-components',
		get_template_directory_uri() . '/assets/css/components.css',
		array( 'onwords-variables' ),
		'1.0.0'
	);

	// Enqueue Pagination CSS (depends on variables.css)
	wp_enqueue_style(
		'onwords-pagination',
		get_template_directory_uri() . '/assets/css/pagination.css',
		array( 'onwords-variables' ),
		'1.0.0'
	);

	// Enqueue News CSS (depends on variables.css)
	wp_enqueue_style(
		'onwords-news',
		get_template_directory_uri() . '/assets/css/news.css',
		array( 'onwords-variables' ),
		'1.0.1'
	);

	// Enqueue Responsive CSS (load last - depends on all other CSS)
	wp_enqueue_style(
		'onwords-responsive',
		get_template_directory_uri() . '/assets/css/responsive.css',
		array( 'onwords-navigation', 'onwords-footer', 'onwords-sections', 'onwords-components' ),
		'1.0.1'
	);

	// Enqueue Navigation JavaScript (load in footer)
	wp_enqueue_script(
		'onwords-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(),
		'1.0.0',
		true
	);

	// Enqueue Carousel JavaScript (load in footer)
	wp_enqueue_script(
		'onwords-carousel',
		get_template_directory_uri() . '/assets/js/carousel.js',
		array(),
		'1.0.0',
		true
	);

	// Enqueue Animations JavaScript (load in footer)
	wp_enqueue_script(
		'onwords-animations',
		get_template_directory_uri() . '/assets/js/animations.js',
		array(),
		'1.0.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'onwords_enqueue_assets' );
