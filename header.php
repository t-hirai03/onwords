<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
	// OGP用の値を設定
	$site_name       = get_bloginfo( 'name' );
	$site_description = get_bloginfo( 'description' );
	$default_ogp_image = get_template_directory_uri() . '/assets/images/common/ogp.png';

	// OGP画像の決定
	$ogp_image_url    = $default_ogp_image;
	$ogp_image_width  = 1200;
	$ogp_image_height = 630;

	if ( is_singular() && has_post_thumbnail() ) {
		$ogp_image_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
		$thumbnail_id  = get_post_thumbnail_id( get_the_ID() );
		$image_meta    = wp_get_attachment_image_src( $thumbnail_id, 'full' );
		if ( $image_meta ) {
			$ogp_image_width  = $image_meta[1];
			$ogp_image_height = $image_meta[2];
		}
	}

	// OGPタイトルの決定
	if ( is_front_page() ) {
		$ogp_title = $site_name;
	} elseif ( is_singular() ) {
		$ogp_title = get_the_title() . ' | ' . $site_name;
	} elseif ( is_post_type_archive() ) {
		$ogp_title = post_type_archive_title( '', false ) . ' | ' . $site_name;
	} elseif ( is_tax() || is_category() || is_tag() ) {
		$ogp_title = single_term_title( '', false ) . ' | ' . $site_name;
	} else {
		$ogp_title = wp_title( '|', false, 'right' ) . $site_name;
	}

	// OGP説明の決定
	if ( is_singular() ) {
		$post_obj = get_post();
		if ( has_excerpt( $post_obj ) ) {
			$ogp_description = get_the_excerpt( $post_obj );
		} elseif ( ! empty( $post_obj->post_content ) ) {
			$ogp_description = wp_trim_words( wp_strip_all_tags( $post_obj->post_content ), 120, '...' );
		} else {
			$ogp_description = $site_description;
		}
	} else {
		$ogp_description = $site_description;
	}

	// OGP URLの決定
	if ( is_front_page() ) {
		$ogp_url = home_url( '/' );
	} elseif ( is_singular() ) {
		$ogp_url = get_permalink();
	} elseif ( is_post_type_archive() ) {
		$ogp_url = get_post_type_archive_link( get_post_type() );
	} elseif ( is_tax() || is_category() || is_tag() ) {
		$ogp_url = get_term_link( get_queried_object() );
	} else {
		$ogp_url = home_url( $_SERVER['REQUEST_URI'] );
	}

	// OGP typeの決定
	$ogp_type = is_singular() ? 'article' : 'website';
	?>

	<meta name="description" content="<?php echo esc_attr( $ogp_description ); ?>">

	<!-- OGP -->
	<meta property="og:title" content="<?php echo esc_attr( $ogp_title ); ?>">
	<meta property="og:description" content="<?php echo esc_attr( $ogp_description ); ?>">
	<meta property="og:type" content="<?php echo esc_attr( $ogp_type ); ?>">
	<meta property="og:url" content="<?php echo esc_url( $ogp_url ); ?>">
	<meta property="og:image" content="<?php echo esc_url( $ogp_image_url ); ?>">
	<meta property="og:image:width" content="<?php echo esc_attr( $ogp_image_width ); ?>">
	<meta property="og:image:height" content="<?php echo esc_attr( $ogp_image_height ); ?>">
	<meta property="og:site_name" content="<?php echo esc_attr( $site_name ); ?>">
	<meta property="og:locale" content="ja_JP">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo esc_attr( $ogp_title ); ?>">
	<meta name="twitter:description" content="<?php echo esc_attr( $ogp_description ); ?>">
	<meta name="twitter:image" content="<?php echo esc_url( $ogp_image_url ); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo-link">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/logo/logo.svg' ); ?>"
				 alt="<?php bloginfo( 'name' ); ?>"
				 class="header__logo">
		</a>

		<!-- Desktop Navigation -->
		<nav class="header__nav header__nav--desktop">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header-menu',
					'container'      => false,
					'menu_class'     => 'header__menu',
					'fallback_cb'    => false,
				)
			);
			?>

			<!-- Recruitment & Contact (Static - from STUDIO site) -->
			<a href="https://hrmos.co/pages/changeholdings/jobs?category=2166892462807429120"
			   class="header__nav-link header__nav-link--external"
			   target="_blank"
			   rel="noopener">
				採用情報
			</a>

			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
			   class="header__nav-link header__nav-link--contact">
				<span class="header__nav-link-bg"></span>
				<span class="header__nav-link-text">お問い合わせ</span>
			</a>
		</nav>

		<!-- Hamburger Menu Button (Mobile) -->
		<button type="button"
				class="header__hamburger-btn"
				aria-label="メニューを開く"
				aria-expanded="false"
				aria-controls="mobile-menu">
			<div class="header__hamburger-line header__hamburger-line--1"></div>
			<div class="header__hamburger-line header__hamburger-line--2"></div>
			<div class="header__hamburger-line header__hamburger-line--3"></div>
		</button>
	</header>

	<!-- Mobile Menu (outside of header for proper positioning) -->
	<nav class="header__mobile-menu"
		 id="mobile-menu"
		 role="dialog"
		 aria-modal="true"
		 aria-label="モバイルメニュー">
		<!-- Logo (top left) -->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__mobile-menu-logo-link">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/logo/logo.svg' ); ?>"
				 alt="<?php bloginfo( 'name' ); ?>"
				 class="header__mobile-menu-logo">
		</a>

		<!-- Close Button -->
		<button type="button"
				class="header__mobile-menu-close"
				aria-label="メニューを閉じる">
			<div class="header__mobile-menu-close-line header__mobile-menu-close-line--1"></div>
			<div class="header__mobile-menu-close-line header__mobile-menu-close-line--2"></div>
		</button>

		<!-- TOP (Static - Mobile only) -->
		<ul class="header__mobile-menu-list">
			<li>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a>
			</li>
		</ul>

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'header-menu',
				'container'      => false,
				'menu_class'     => 'header__mobile-menu-list',
				'fallback_cb'    => false,
			)
		);
		?>

		<!-- Recruitment & Contact (Static - from STUDIO site) -->
		<ul class="header__mobile-menu-list header__mobile-menu-list--static">
			<li>
				<a href="https://hrmos.co/pages/changeholdings/jobs?category=2166892462807429120"
				   class="header__mobile-menu-recruitment"
				   target="_blank"
				   rel="noopener">
					<span class="header__mobile-menu-recruitment-text">採用情報</span>
				</a>
			</li>
			<li>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
				   class="header__mobile-menu-contact">
					<span class="header__mobile-menu-contact-bg"></span>
					<span class="header__mobile-menu-contact-text">お問い合わせ</span>
				</a>
			</li>
		</ul>
	</nav>
