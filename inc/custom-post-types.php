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
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'news/category' ),
	);

	register_taxonomy( 'news_category', array( 'news' ), $args );
}
add_action( 'init', 'onwords_register_news_category' );
