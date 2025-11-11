<?php
/**
 * Custom Post Types Registration
 *
 * Register custom post types for the Onwords theme.
 *
 * @package Onwords
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register News custom post type
 */
function onwords_register_news_post_type() {
	$labels = array(
		'name'               => 'お知らせ',
		'singular_name'      => 'お知らせ',
		'menu_name'          => 'お知らせ',
		'add_new'            => '新規追加',
		'add_new_item'       => '新しいお知らせを追加',
		'edit_item'          => 'お知らせを編集',
		'new_item'           => '新しいお知らせ',
		'view_item'          => 'お知らせを表示',
		'search_items'       => 'お知らせを検索',
		'not_found'          => 'お知らせが見つかりません',
		'not_found_in_trash' => 'ゴミ箱にお知らせはありません',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-megaphone',
		'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
	);

	register_post_type( 'news', $args );
}
add_action( 'init', 'onwords_register_news_post_type' );

/**
 * Register News Category taxonomy
 */
function onwords_register_news_category() {
	$labels = array(
		'name'              => 'カテゴリー',
		'singular_name'     => 'カテゴリー',
		'search_items'      => 'カテゴリーを検索',
		'all_items'         => 'すべてのカテゴリー',
		'parent_item'       => '親カテゴリー',
		'parent_item_colon' => '親カテゴリー:',
		'edit_item'         => 'カテゴリーを編集',
		'update_item'       => 'カテゴリーを更新',
		'add_new_item'      => '新しいカテゴリーを追加',
		'new_item_name'     => '新しいカテゴリー名',
		'menu_name'         => 'カテゴリー',
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'news/category' ),
	);

	register_taxonomy( 'news_category', array( 'news' ), $args );
}
add_action( 'init', 'onwords_register_news_category' );

/**
 * Register Case custom post type
 */
function onwords_register_case_post_type() {
	$labels = array(
		'name'               => '導入事例',
		'singular_name'      => '導入事例',
		'menu_name'          => '導入事例',
		'add_new'            => '新規追加',
		'add_new_item'       => '新しい導入事例を追加',
		'edit_item'          => '導入事例を編集',
		'new_item'           => '新しい導入事例',
		'view_item'          => '導入事例を表示',
		'search_items'       => '導入事例を検索',
		'not_found'          => '導入事例が見つかりません',
		'not_found_in_trash' => 'ゴミ箱に導入事例はありません',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'case' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5.5,
		'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
	);

	register_post_type( 'case', $args );
}
add_action( 'init', 'onwords_register_case_post_type' );

/**
 * Register Case Category taxonomy
 */
function onwords_register_case_category() {
	$labels = array(
		'name'              => 'カテゴリー',
		'singular_name'     => 'カテゴリー',
		'search_items'      => 'カテゴリーを検索',
		'all_items'         => 'すべてのカテゴリー',
		'parent_item'       => '親カテゴリー',
		'parent_item_colon' => '親カテゴリー:',
		'edit_item'         => 'カテゴリーを編集',
		'update_item'       => 'カテゴリーを更新',
		'add_new_item'      => '新しいカテゴリーを追加',
		'new_item_name'     => '新しいカテゴリー名',
		'menu_name'         => 'カテゴリー',
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'case/category' ),
	);

	register_taxonomy( 'case_category', array( 'case' ), $args );
}
add_action( 'init', 'onwords_register_case_category' );

/**
 * Register Webinar custom post type
 */
function onwords_register_webinar_post_type() {
	$labels = array(
		'name'               => 'ウェビナー',
		'singular_name'      => 'ウェビナー',
		'menu_name'          => 'ウェビナー',
		'add_new'            => '新規追加',
		'add_new_item'       => '新しいウェビナーを追加',
		'edit_item'          => 'ウェビナーを編集',
		'new_item'           => '新しいウェビナー',
		'view_item'          => 'ウェビナーを表示',
		'search_items'       => 'ウェビナーを検索',
		'not_found'          => 'ウェビナーが見つかりません',
		'not_found_in_trash' => 'ゴミ箱にウェビナーはありません',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'knowledge/webinar' ),
		'capability_type'    => 'post',
		'has_archive'        => 'knowledge/webinar',
		'hierarchical'       => false,
		'menu_position'      => 6,
		'menu_icon'          => 'dashicons-video-alt3',
		'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
	);

	register_post_type( 'webinar', $args );
}
add_action( 'init', 'onwords_register_webinar_post_type' );

/**
 * Register Document custom post type
 */
function onwords_register_document_post_type() {
	$labels = array(
		'name'               => '資料',
		'singular_name'      => '資料',
		'menu_name'          => '資料',
		'add_new'            => '新規追加',
		'add_new_item'       => '新しい資料を追加',
		'edit_item'          => '資料を編集',
		'new_item'           => '新しい資料',
		'view_item'          => '資料を表示',
		'search_items'       => '資料を検索',
		'not_found'          => '資料が見つかりません',
		'not_found_in_trash' => 'ゴミ箱に資料はありません',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'knowledge/document' ),
		'capability_type'    => 'post',
		'has_archive'        => 'knowledge/document',
		'hierarchical'       => false,
		'menu_position'      => 7,
		'menu_icon'          => 'dashicons-media-document',
		'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
	);

	register_post_type( 'document', $args );
}
add_action( 'init', 'onwords_register_document_post_type' );
