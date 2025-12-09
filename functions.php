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
 * Add noindex meta tag to all pages (pre-launch)
 *
 * IMPORTANT: Remove this function before going live in production
 * This prevents search engines from indexing the site during development
 */
function onwords_add_noindex() {
	echo '<meta name="robots" content="noindex, nofollow">' . "\n";
}
add_action( 'wp_head', 'onwords_add_noindex', 1 );

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
 * Add custom rewrite rules for document archive pagination
 */
function onwords_document_rewrite_rules() {
	// ページ2以降のURL
	add_rewrite_rule(
		'knowledge/document/page/?([0-9]{1,})/?$',
		'index.php?post_type=document&paged=$matches[1]',
		'top'
	);
	// ページ1のURL
	add_rewrite_rule(
		'knowledge/document/?$',
		'index.php?post_type=document',
		'top'
	);
}
add_action( 'init', 'onwords_document_rewrite_rules', 1 );

/**
 * Add custom rewrite rules for news archive pagination
 */
function onwords_news_rewrite_rules() {
	// ページ2以降のURL
	add_rewrite_rule(
		'news/page/?([0-9]{1,})/?$',
		'index.php?post_type=news&paged=$matches[1]',
		'top'
	);
	// ページ1のURL
	add_rewrite_rule(
		'news/?$',
		'index.php?post_type=news',
		'top'
	);
}
add_action( 'init', 'onwords_news_rewrite_rules', 1 );

/**
 * Add query vars for document archive
 */
function onwords_document_query_vars( $query_vars ) {
	$query_vars[] = 'paged';
	return $query_vars;
}
add_filter( 'query_vars', 'onwords_document_query_vars' );

/**
 * Common function to set archive query parameters
 *
 * @param WP_Query $query         The WP_Query instance.
 * @param string   $post_type     Post type to check.
 * @param string   $taxonomy      Optional taxonomy for filtering.
 * @param string   $query_param   Optional GET parameter name for taxonomy filter.
 * @param int      $posts_per_page Number of posts per page. Default 9.
 */
function onwords_set_archive_query( $query, $post_type, $taxonomy = '', $query_param = '', $posts_per_page = 9 ) {
	if ( is_admin() || ! $query->is_main_query() || ! is_post_type_archive( $post_type ) ) {
		return;
	}

	$query->set( 'posts_per_page', $posts_per_page );
	$query->set( 'orderby', 'date' );
	$query->set( 'order', 'DESC' );

	// タクソノミーフィルタリング
	if ( ! empty( $taxonomy ) && ! empty( $query_param ) ) {
		$category_slug = isset( $_GET[ $query_param ] ) ? sanitize_text_field( $_GET[ $query_param ] ) : '';
		if ( ! empty( $category_slug ) ) {
			$query->set( 'tax_query', array(
				array(
					'taxonomy' => $taxonomy,
					'field'    => 'slug',
					'terms'    => $category_slug,
				),
			) );
		}
	}
}

/**
 * Modify main query for document archive
 */
function onwords_document_archive_query( $query ) {
	onwords_set_archive_query( $query, 'document' );
}
add_action( 'pre_get_posts', 'onwords_document_archive_query' );

/**
 * Modify main query for news archive
 */
function onwords_news_archive_query( $query ) {
	onwords_set_archive_query( $query, 'news', 'news_category', 'news_category' );
}
add_action( 'pre_get_posts', 'onwords_news_archive_query' );

/**
 * Modify main query for case archive
 */
function onwords_case_archive_query( $query ) {
	onwords_set_archive_query( $query, 'case', 'case_category', 'case_category' );
}
add_action( 'pre_get_posts', 'onwords_case_archive_query' );

/**
 * Modify main query for column archive
 */
function onwords_column_archive_query( $query ) {
	onwords_set_archive_query( $query, 'column' );
}
add_action( 'pre_get_posts', 'onwords_column_archive_query' );

/**
 * Flush rewrite rules on theme activation (one-time)
 * This ensures the news archive URL works properly
 */
function onwords_flush_rewrite_rules() {
	// 一時的に強制フラッシュ（次回削除する）
	delete_transient( 'onwords_flush_rewrite_rules' );
	flush_rewrite_rules();
	set_transient( 'onwords_flush_rewrite_rules', 1, DAY_IN_SECONDS );
}
add_action( 'init', 'onwords_flush_rewrite_rules' );

/**
 * Check if webinar is upcoming or ended based on date and time
 *
 * @param int $post_id Post ID (optional, defaults to current post)
 * @return bool True if upcoming, false if ended
 */
function onwords_is_webinar_upcoming( $post_id = null ) {
	if ( ! $post_id ) {
		$post_id = get_the_ID();
	}

	$webinar_date = get_post_meta( $post_id, 'webinar_date', true );
	$webinar_time = get_post_meta( $post_id, 'webinar_time', true );

	if ( ! $webinar_date ) {
		return false;
	}

	// 時刻が設定されていなければ23:59として扱う（その日の終わりまで「これから開催」）
	$time_str = $webinar_time ? $webinar_time : '23:59';
	$datetime_str = $webinar_date . ' ' . $time_str;

	$webinar_timestamp = strtotime( $datetime_str );
	$current_timestamp = current_time( 'timestamp' );

	return $webinar_timestamp > $current_timestamp;
}

/**
 * Get webinar status label
 *
 * @param int $post_id Post ID (optional, defaults to current post)
 * @return string Status label ('これから開催' or '終了')
 */
function onwords_get_webinar_status_label( $post_id = null ) {
	return onwords_is_webinar_upcoming( $post_id ) ? 'これから開催' : '終了';
}

/**
 * Get webinar status slug
 *
 * @param int $post_id Post ID (optional, defaults to current post)
 * @return string Status slug ('upcoming' or 'ended')
 */
function onwords_get_webinar_status_slug( $post_id = null ) {
	return onwords_is_webinar_upcoming( $post_id ) ? 'upcoming' : 'ended';
}
