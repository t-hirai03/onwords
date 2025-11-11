<?php
/**
 * Enqueue Scripts and Styles
 *
 * Handles loading CSS and JavaScript assets for the Onwords theme.
 * Uses WordPress enqueue system with proper dependencies.
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
		null
	);

	// Enqueue CSS Variables (depends on base.css)
	wp_enqueue_style(
		'onwords-variables',
		get_template_directory_uri() . '/assets/css/variables.css',
		array( 'onwords-base' ),
		null
	);

	// Enqueue Navigation CSS (depends on variables.css)
	wp_enqueue_style(
		'onwords-navigation',
		get_template_directory_uri() . '/assets/css/navigation.css',
		array( 'onwords-variables' ),
		null
	);

	// Enqueue Breadcrumb CSS (depends on variables.css)
	wp_enqueue_style(
		'onwords-breadcrumb',
		get_template_directory_uri() . '/assets/css/breadcrumb.css',
		array( 'onwords-variables' ),
		null
	);

	// Enqueue Footer CSS (depends on variables.css)
	wp_enqueue_style(
		'onwords-footer',
		get_template_directory_uri() . '/assets/css/footer.css',
		array( 'onwords-variables' ),
		null
	);

	// Enqueue Components CSS (depends on variables.css)
	wp_enqueue_style(
		'onwords-components',
		get_template_directory_uri() . '/assets/css/components.css',
		array( 'onwords-variables' ),
		null
	);

	// Enqueue Pagination CSS (depends on variables.css)
	wp_enqueue_style(
		'onwords-pagination',
		get_template_directory_uri() . '/assets/css/pagination.css',
		array( 'onwords-variables' ),
		null
	);

	// Conditional Page-Specific CSS
	// Top page only
	if ( is_front_page() ) {
		wp_enqueue_style(
			'onwords-top',
			get_template_directory_uri() . '/assets/css/top.css',
			array( 'onwords-variables' ),
			null
		);
	}

	// Business pages only
	if ( is_page( 'business' ) || is_page_template( array( 'page-business-local.php', 'page-business-inbound.php' ) ) ) {
		wp_enqueue_style(
			'onwords-business',
			get_template_directory_uri() . '/assets/css/business.css',
			array( 'onwords-variables' ),
			null
		);
	}

	// Article detail pages (news and case)
	if ( is_singular( 'news' ) || is_singular( 'case' ) ) {
		wp_enqueue_style(
			'onwords-article',
			get_template_directory_uri() . '/assets/css/article.css',
			array( 'onwords-variables' ),
			null
		);
	}

	// Case pages only
	if ( is_post_type_archive( 'case' ) || is_tax( 'case_category' ) || is_singular( 'case' ) ) {
		wp_enqueue_style(
			'onwords-case',
			get_template_directory_uri() . '/assets/css/case.css',
			array( 'onwords-variables' ),
			null
		);
	}

	// Knowledge pages only
	if ( is_page( 'knowledge' ) || is_page_template( 'page-knowledge.php' ) || is_post_type_archive( array( 'column', 'webinar', 'document' ) ) || is_singular( array( 'column', 'webinar', 'document' ) ) || is_tax( array( 'column_category', 'webinar_target', 'webinar_status', 'document_target' ) ) ) {
		wp_enqueue_style(
			'onwords-knowledge',
			get_template_directory_uri() . '/assets/css/knowledge.css',
			array( 'onwords-variables' ),
			null
		);
	}

	// Enqueue Responsive CSS (load last - depends on all other CSS)
	wp_enqueue_style(
		'onwords-responsive',
		get_template_directory_uri() . '/assets/css/responsive.css',
		array( 'onwords-navigation', 'onwords-footer', 'onwords-components' ),
		null
	);

	// Enqueue Navigation JavaScript (load in footer)
	wp_enqueue_script(
		'onwords-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(),
		null,
		true
	);

	// Enqueue Carousel JavaScript (load in footer)
	wp_enqueue_script(
		'onwords-carousel',
		get_template_directory_uri() . '/assets/js/carousel.js',
		array(),
		null,
		true
	);

	// Enqueue Animations JavaScript (load in footer)
	wp_enqueue_script(
		'onwords-animations',
		get_template_directory_uri() . '/assets/js/animations.js',
		array(),
		null,
		true
	);

	// Enqueue Strengths Navigation JavaScript for business pages only (load in footer)
	if ( is_page_template( array( 'page-business-local.php', 'page-business-inbound.php' ) ) ) {
		wp_enqueue_script(
			'onwords-strengths-navigation',
			get_template_directory_uri() . '/assets/js/strengths-navigation.js',
			array(),
			null,
			true
		);

		// Enqueue Smooth Scroll JavaScript for inbound marketing page
		wp_enqueue_script(
			'onwords-smooth-scroll',
			get_template_directory_uri() . '/assets/js/smooth-scroll.js',
			array(),
			null,
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'onwords_enqueue_assets' );
