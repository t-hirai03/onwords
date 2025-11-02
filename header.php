<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo-link">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo/s-300x91_222424ad-5eb2-43c8-8327-98b3cd560f8f.svg' ); ?>"
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

		<!-- Mobile Menu -->
		<nav class="header__mobile-menu"
			 id="mobile-menu"
			 role="dialog"
			 aria-modal="true"
			 aria-label="モバイルメニュー">
			<!-- Close Button -->
			<button type="button"
					class="header__mobile-menu-close"
					aria-label="メニューを閉じる">
				<span aria-hidden="true">×</span>
			</button>

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
					   class="header__mobile-menu-external"
					   target="_blank"
					   rel="noopener">
						採用情報
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
	</header>
