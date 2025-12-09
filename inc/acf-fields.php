<?php
/**
 * ACF Field Groups
 *
 * Register ACF field groups for custom post types.
 *
 * @package Onwords
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register ACF field groups
 */
function onwords_register_acf_fields() {
	// Check if ACF function exists
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	// Webinar ACF Fields
	acf_add_local_field_group(
		array(
			'key'                   => 'group_webinar_info',
			'title'                 => 'ウェビナー情報',
			'fields'                => array(
				array(
					'key'            => 'field_webinar_date',
					'label'          => '開催日',
					'name'           => 'webinar_date',
					'type'           => 'date_picker',
					'required'       => 1,
					'display_format' => 'Y/m/d',
					'return_format'  => 'Y-m-d',
					'first_day'      => 1,
					'instructions'   => '開催日を設定してください。',
				),
				array(
					'key'          => 'field_webinar_time',
					'label'        => '開催時刻',
					'name'         => 'webinar_time',
					'type'         => 'text',
					'required'     => 0,
					'placeholder'  => '例: 14:00',
					'instructions' => '開催時刻を入力してください（任意）。この日時を過ぎると自動的に「終了」として表示されます。',
				),
				array(
					'key'           => 'field_webinar_target',
					'label'         => '対象',
					'name'          => 'webinar_target',
					'type'          => 'select',
					'required'      => 1,
					'choices'       => array(
						'business'   => '民間企業様向け',
						'government' => '自治体様向け',
					),
					'default_value' => 'business',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'webinar',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'side',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => true,
			'show_in_rest'          => true,
		)
	);

	// Document ACF Fields
	acf_add_local_field_group(
		array(
			'key'      => 'group_document',
			'title'    => '資料情報',
			'fields'   => array(
				array(
					'key'           => 'field_document_date',
					'label'         => '公開日',
					'name'          => 'document_date',
					'type'          => 'date_picker',
					'required'      => 1,
					'display_format' => 'Y/m/d',
					'return_format' => 'Y/m/d',
				),
				array(
					'key'           => 'field_document_target',
					'label'         => '対象',
					'name'          => 'document_target',
					'type'          => 'select',
					'required'      => 1,
					'choices'       => array(
						'business'    => '民間企業様向け',
						'government'  => '自治体様向け',
					),
					'default_value' => 'business',
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'document',
					),
				),
			),
		)
	);
}
add_action( 'acf/init', 'onwords_register_acf_fields' );
