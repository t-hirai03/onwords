<?php
/**
 * Template Name: Business
 * Template for displaying business overview page
 *
 * @package Onwords
 */

get_header();
?>

<!-- Breadcrumb Navigation -->
<div class="breadcrumb">
	<div class="breadcrumb__container">
		<a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumb__link breadcrumb__home">
			<i class="material-icons">home</i>
		</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<span class="breadcrumb__current">事業内容</span>
	</div>
</div>

<main class="main">
	<!-- Hero Section -->
	<div class="archive-hero-wrapper">
		<section class="archive-hero business-hero">
			<div class="archive-hero__overlay"></div>
			<div class="archive-hero__container">
				<p class="archive-hero__label">BUSINESS</p>
				<h1 class="archive-hero__title">事業内容</h1>
				<p class="business-hero__description">
					Onwordsは地域観光DX事業と訪日マーケティングパートナー事業を展開しています。
				</p>
			</div>
		</section>
	</div>

	<!-- Business Cards Section -->
	<section class="business-cards">
		<div class="business-cards__container">
			<div class="business-cards__grid">
				<!-- 地域観光DX事業 -->
				<a href="<?php echo esc_url(home_url('/business/business-local/')); ?>" class="card card--business">
					<div class="card__image card__image--local-dx"></div>
					<div class="card__text-container">
						<h3 class="card__title">地域観光DX事業</h3>
						<p class="card__description">
							地域の観光資源をデジタル技術で最大化し、持続可能な観光地づくりをサポートします。
						</p>
					</div>
				</a>

				<!-- 訪日マーケティングパートナー事業 -->
				<a href="<?php echo esc_url(home_url('/business/business-inbound/')); ?>" class="card card--business">
					<div class="card__image card__image--inbound-marketing"></div>
					<div class="card__text-container">
						<h3 class="card__title">訪日マーケティングパートナー事業</h3>
						<p class="card__description">
							訪日旅行者のインサイトを活用し、効果的なマーケティング戦略を提供します。
						</p>
					</div>
				</a>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
