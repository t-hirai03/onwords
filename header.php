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
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo/logo.svg' ); ?>"
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
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo/logo.svg' ); ?>"
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
