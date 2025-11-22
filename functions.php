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
 * Modify main query for document archive
 */
function onwords_document_archive_query( $query ) {
	if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'document' ) ) {
		$query->set( 'posts_per_page', 9 );
		$query->set( 'orderby', 'date' );
		$query->set( 'order', 'DESC' );
	}
}
add_action( 'pre_get_posts', 'onwords_document_archive_query' );

/**
 * Modify main query for news archive
 */
function onwords_news_archive_query( $query ) {
	if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'news' ) ) {
		$query->set( 'posts_per_page', 9 );
		$query->set( 'orderby', 'date' );
		$query->set( 'order', 'DESC' );

		// カテゴリーでフィルタリング（URLパラメータから）
		$category_slug = isset( $_GET['news_category'] ) ? sanitize_text_field( $_GET['news_category'] ) : '';
		if ( ! empty( $category_slug ) ) {
			$query->set( 'tax_query', array(
				array(
					'taxonomy' => 'news_category',
					'field'    => 'slug',
					'terms'    => $category_slug,
				),
			) );
		}
	}
}
add_action( 'pre_get_posts', 'onwords_news_archive_query' );

/**
 * Modify main query for case archive
 */
function onwords_case_archive_query( $query ) {
	if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'case' ) ) {
		$query->set( 'posts_per_page', 9 );
		$query->set( 'orderby', 'date' );
		$query->set( 'order', 'DESC' );

		// カテゴリーでフィルタリング（URLパラメータから）
		$category_slug = isset( $_GET['case_category'] ) ? sanitize_text_field( $_GET['case_category'] ) : '';
		if ( ! empty( $category_slug ) ) {
			$query->set( 'tax_query', array(
				array(
					'taxonomy' => 'case_category',
					'field'    => 'slug',
					'terms'    => $category_slug,
				),
			) );
		}
	}
}
add_action( 'pre_get_posts', 'onwords_case_archive_query' );

/**
 * Modify main query for column archive
 */
function onwords_column_archive_query( $query ) {
	if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'column' ) ) {
		$query->set( 'posts_per_page', 9 );
		$query->set( 'orderby', 'date' );
		$query->set( 'order', 'DESC' );
	}
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
