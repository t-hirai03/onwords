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
 * Customize admin menu order
 */
function onwords_customize_admin_menu_order() {
	global $menu;
	global $submenu;

	// 投稿: 5 (デフォルト)
	// 固定ページ: 6
	// メディア: 7
	// お知らせ: 8
	// ウェビナー情報: 9
	// お役立ち資料: 10
	// ウェビナー記事: 11
	// 導入事例: 12
	// コメント: 13

	// 固定ページの位置を変更 (20 → 6)
	if ( isset( $menu[20] ) ) {
		$menu[6] = $menu[20];
		unset( $menu[20] );
	}

	// メディアの位置を変更 (10 → 7)
	if ( isset( $menu[10] ) ) {
		$menu[7] = $menu[10];
		unset( $menu[10] );
	}

	// コメントの位置を変更 (25 → 13)
	if ( isset( $menu[25] ) ) {
		$menu[13] = $menu[25];
		unset( $menu[25] );
	}
}
add_action( 'admin_menu', 'onwords_customize_admin_menu_order', 999 );

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
		'menu_position'      => 8,
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
		'menu_position'      => 12,
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
 * Register Column custom post type
 */
function onwords_register_column_post_type() {
	$labels = array(
		'name'               => 'ウェビナー記事',
		'singular_name'      => 'ウェビナー記事',
		'menu_name'          => 'ウェビナー記事',
		'add_new'            => '新規追加',
		'add_new_item'       => '新しいウェビナー記事を追加',
		'edit_item'          => 'ウェビナー記事を編集',
		'new_item'           => '新しいウェビナー記事',
		'view_item'          => 'ウェビナー記事を表示',
		'search_items'       => 'ウェビナー記事を検索',
		'not_found'          => 'ウェビナー記事が見つかりません',
		'not_found_in_trash' => 'ゴミ箱にウェビナー記事はありません',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'knowledge/column' ),
		'capability_type'    => 'post',
		'has_archive'        => 'knowledge/column',
		'hierarchical'       => false,
		'menu_position'      => 11,
		'menu_icon'          => 'dashicons-welcome-write-blog',
		'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
	);

	register_post_type( 'column', $args );
}
add_action( 'init', 'onwords_register_column_post_type' );

/**
 * Register Column Category taxonomy
 */
function onwords_register_column_category() {
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
		'rewrite'           => array( 'slug' => 'knowledge/column/category' ),
	);

	register_taxonomy( 'column_category', array( 'column' ), $args );
}
add_action( 'init', 'onwords_register_column_category' );

/**
 * Register Webinar custom post type
 */
function onwords_register_webinar_post_type() {
	$labels = array(
		'name'               => 'ウェビナー情報',
		'singular_name'      => 'ウェビナー情報',
		'menu_name'          => 'ウェビナー情報',
		'add_new'            => '新規追加',
		'add_new_item'       => '新しいウェビナー情報を追加',
		'edit_item'          => 'ウェビナー情報を編集',
		'new_item'           => '新しいウェビナー情報',
		'view_item'          => 'ウェビナー情報を表示',
		'search_items'       => 'ウェビナー情報を検索',
		'not_found'          => 'ウェビナー情報が見つかりません',
		'not_found_in_trash' => 'ゴミ箱にウェビナー情報はありません',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'knowledge/webinar' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 9,
		'menu_icon'          => 'dashicons-video-alt3',
		'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		'taxonomies'         => array( 'webinar_category', 'webinar_target' ),
	);

	register_post_type( 'webinar', $args );
}
add_action( 'init', 'onwords_register_webinar_post_type' );

/**
 * Register Webinar Target taxonomy
 */
function onwords_register_webinar_target() {
	$labels = array(
		'name'              => '対象者',
		'singular_name'     => '対象者',
		'search_items'      => '対象者を検索',
		'all_items'         => 'すべての対象者',
		'parent_item'       => '親対象者',
		'parent_item_colon' => '親対象者:',
		'edit_item'         => '対象者を編集',
		'update_item'       => '対象者を更新',
		'add_new_item'      => '新しい対象者を追加',
		'new_item_name'     => '新しい対象者名',
		'menu_name'         => '対象者',
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'knowledge/webinar/target' ),
	);

	register_taxonomy( 'webinar_target', array( 'webinar' ), $args );
}
add_action( 'init', 'onwords_register_webinar_target' );


/**
 * Register Webinar Category taxonomy
 */
function onwords_register_webinar_category() {
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
		'rewrite'           => array( 'slug' => 'knowledge/webinar/category' ),
	);

	register_taxonomy( 'webinar_category', array( 'webinar' ), $args );
}
add_action( 'init', 'onwords_register_webinar_category' );

/**
 * Register Document custom post type
 */
function onwords_register_document_post_type() {
	$labels = array(
		'name'               => 'お役立ち資料',
		'singular_name'      => 'お役立ち資料',
		'menu_name'          => 'お役立ち資料',
		'add_new'            => '新規追加',
		'add_new_item'       => '新しいお役立ち資料を追加',
		'edit_item'          => 'お役立ち資料を編集',
		'new_item'           => '新しいお役立ち資料',
		'view_item'          => 'お役立ち資料を表示',
		'search_items'       => 'お役立ち資料を検索',
		'not_found'          => 'お役立ち資料が見つかりません',
		'not_found_in_trash' => 'ゴミ箱にお役立ち資料はありません',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array(
			'slug'       => 'knowledge/document',
			'with_front' => false,
		),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 10,
		'menu_icon'          => 'dashicons-media-document',
		'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		'taxonomies'         => array( 'document_target' ),
	);

	register_post_type( 'document', $args );
}
add_action( 'init', 'onwords_register_document_post_type' );

/**
 * Register Document Target taxonomy
 */
function onwords_register_document_target() {
	$labels = array(
		'name'              => '対象者',
		'singular_name'     => '対象者',
		'search_items'      => '対象者を検索',
		'all_items'         => 'すべての対象者',
		'parent_item'       => '親対象者',
		'parent_item_colon' => '親対象者:',
		'edit_item'         => '対象者を編集',
		'update_item'       => '対象者を更新',
		'add_new_item'      => '新しい対象者を追加',
		'new_item_name'     => '新しい対象者名',
		'menu_name'         => '対象者',
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'knowledge/document/target' ),
	);

	register_taxonomy( 'document_target', array( 'document' ), $args );
}
add_action( 'init', 'onwords_register_document_target' );

/**
 * Add custom meta box for Case post type
 */
function onwords_add_case_meta_box() {
	add_meta_box(
		'case_client_info',
		'クライアント情報',
		'onwords_case_meta_box_callback',
		'case',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'onwords_add_case_meta_box' );

/**
 * Meta box callback function
 */
function onwords_case_meta_box_callback( $post ) {
	wp_nonce_field( 'onwords_save_case_meta', 'onwords_case_meta_nonce' );
	$client_name = get_post_meta( $post->ID, 'client_name', true );
	?>
	<table class="form-table">
		<tr>
			<th>
				<label for="client_name">クライアント名</label>
			</th>
			<td>
				<input type="text" id="client_name" name="client_name" value="<?php echo esc_attr( $client_name ); ?>" class="regular-text" />
				<p class="description">例: 特定エリアで事業展開するデベロッパー、全国展開するアパレルブランド</p>
			</td>
		</tr>
	</table>
	<?php
}

/**
 * Common function to verify meta box save conditions
 *
 * @param int    $post_id      Post ID.
 * @param string $nonce_name   Nonce field name.
 * @param string $nonce_action Nonce action name.
 * @return bool True if all checks pass, false otherwise.
 */
function onwords_verify_meta_save( $post_id, $nonce_name, $nonce_action ) {
	// Check nonce
	if ( ! isset( $_POST[ $nonce_name ] ) || ! wp_verify_nonce( $_POST[ $nonce_name ], $nonce_action ) ) {
		return false;
	}

	// Check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return false;
	}

	// Check permissions
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return false;
	}

	return true;
}

/**
 * Save meta box data
 */
function onwords_save_case_meta( $post_id ) {
	if ( ! onwords_verify_meta_save( $post_id, 'onwords_case_meta_nonce', 'onwords_save_case_meta' ) ) {
		return;
	}

	// Save client_name
	if ( isset( $_POST['client_name'] ) ) {
		update_post_meta( $post_id, 'client_name', sanitize_text_field( $_POST['client_name'] ) );
	}
}
add_action( 'save_post_case', 'onwords_save_case_meta' );

/**
 * Add custom meta box for Column post type (Pickup)
 */
function onwords_add_column_meta_box() {
	add_meta_box(
		'column_pickup',
		'Pickup記事設定',
		'onwords_column_meta_box_callback',
		'column',
		'side',
		'high'
	);
}
add_action( 'add_meta_boxes', 'onwords_add_column_meta_box' );

/**
 * Column meta box callback function
 */
function onwords_column_meta_box_callback( $post ) {
	wp_nonce_field( 'onwords_save_column_meta', 'onwords_column_meta_nonce' );
	$is_pickup = get_post_meta( $post->ID, 'is_pickup', true );
	?>
	<label for="is_pickup">
		<input type="checkbox" id="is_pickup" name="is_pickup" value="1" <?php checked( $is_pickup, '1' ); ?> />
		Pickup記事として表示する
	</label>
	<p class="description">チェックを入れると、記事詳細ページの最下部に「Pickup記事」として表示されます。</p>
	<?php
}

/**
 * Save column meta box data
 */
function onwords_save_column_meta( $post_id ) {
	if ( ! onwords_verify_meta_save( $post_id, 'onwords_column_meta_nonce', 'onwords_save_column_meta' ) ) {
		return;
	}

	// Save is_pickup
	if ( isset( $_POST['is_pickup'] ) ) {
		update_post_meta( $post_id, 'is_pickup', '1' );
	} else {
		delete_post_meta( $post_id, 'is_pickup' );
	}
}
add_action( 'save_post_column', 'onwords_save_column_meta' );

/**
 * Add custom meta box for Webinar post type
 */
function onwords_add_webinar_meta_box() {
	add_meta_box(
		'webinar_schedule',
		'ウェビナー終了日時',
		'onwords_webinar_meta_box_callback',
		'webinar',
		'side',
		'high'
	);
}
add_action( 'add_meta_boxes', 'onwords_add_webinar_meta_box' );

/**
 * Webinar meta box callback function
 */
function onwords_webinar_meta_box_callback( $post ) {
	wp_nonce_field( 'onwords_save_webinar_meta', 'onwords_webinar_meta_nonce' );
	$webinar_date = get_post_meta( $post->ID, 'webinar_date', true );
	$webinar_time = get_post_meta( $post->ID, 'webinar_time', true );
	?>
	<p>
		<label for="webinar_date"><strong>終了日 <span style="color: #cc0000;">*</span></strong></label><br>
		<input type="date" id="webinar_date" name="webinar_date" value="<?php echo esc_attr( $webinar_date ); ?>" style="width: 100%;" required />
	</p>
	<p>
		<label for="webinar_time"><strong>終了時刻 <span style="color: #cc0000;">*</span></strong></label><br>
		<input type="time" id="webinar_time" name="webinar_time" value="<?php echo esc_attr( $webinar_time ); ?>" style="width: 100%;" required />
		<span class="description">この日時を過ぎると「過去のウェビナー」として表示されます。</span>
	</p>
	<?php
}

/**
 * Save webinar meta box data
 */
function onwords_save_webinar_meta( $post_id ) {
	if ( ! onwords_verify_meta_save( $post_id, 'onwords_webinar_meta_nonce', 'onwords_save_webinar_meta' ) ) {
		return;
	}

	// Save webinar_date
	if ( isset( $_POST['webinar_date'] ) ) {
		update_post_meta( $post_id, 'webinar_date', sanitize_text_field( $_POST['webinar_date'] ) );
	}

	// Save webinar_time
	if ( isset( $_POST['webinar_time'] ) ) {
		update_post_meta( $post_id, 'webinar_time', sanitize_text_field( $_POST['webinar_time'] ) );
	}
}
add_action( 'save_post_webinar', 'onwords_save_webinar_meta' );

/**
 * Add JavaScript validation for webinar required fields (Block Editor)
 */
function onwords_webinar_validation_script() {
	global $post_type;

	if ( $post_type !== 'webinar' ) {
		return;
	}
	?>
	<script>
	(function() {
		// ブロックエディターの公開ボタン監視
		var checkInterval = setInterval(function() {
			// 公開ボタンを探す
			var publishButton = document.querySelector('.editor-post-publish-button, .editor-post-publish-panel__toggle');
			if (!publishButton) return;

			clearInterval(checkInterval);

			// クリックイベントを監視
			publishButton.addEventListener('click', function(e) {
				var dateField = document.querySelector('input[name="webinar_date"]');
				var timeField = document.querySelector('input[name="webinar_time"]');
				var errors = [];

				if (!dateField || !dateField.value) {
					errors.push('終了日');
				}
				if (!timeField || !timeField.value) {
					errors.push('終了時刻');
				}

				if (errors.length > 0) {
					e.preventDefault();
					e.stopPropagation();
					alert('以下の項目を入力してください：\n\n・' + errors.join('\n・'));
					return false;
				}
			}, true);

			// 公開パネル内の公開ボタンも監視
			document.addEventListener('click', function(e) {
				if (e.target && (e.target.classList.contains('editor-post-publish-button') ||
					e.target.closest('.editor-post-publish-button'))) {

					var dateField = document.querySelector('input[name="webinar_date"]');
					var timeField = document.querySelector('input[name="webinar_time"]');
					var errors = [];

					if (!dateField || !dateField.value) {
						errors.push('終了日');
					}
					if (!timeField || !timeField.value) {
						errors.push('終了時刻');
					}

					if (errors.length > 0) {
						e.preventDefault();
						e.stopPropagation();
						alert('以下の項目を入力してください：\n\n・' + errors.join('\n・'));
						return false;
					}
				}
			}, true);
		}, 500);

		// クラシックエディターのフォームsubmit対応
		document.addEventListener('DOMContentLoaded', function() {
			var form = document.getElementById('post');
			if (!form) return;

			form.addEventListener('submit', function(e) {
				var dateField = document.getElementById('webinar_date');
				var timeField = document.getElementById('webinar_time');
				var errors = [];

				if (!dateField || !dateField.value) {
					errors.push('終了日');
				}
				if (!timeField || !timeField.value) {
					errors.push('終了時刻');
				}

				if (errors.length > 0) {
					e.preventDefault();
					alert('以下の項目を入力してください：\n\n・' + errors.join('\n・'));
					return false;
				}
			});
		});
	})();
	</script>
	<?php
}
add_action( 'admin_footer', 'onwords_webinar_validation_script' );
