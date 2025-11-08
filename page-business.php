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
	<section class="business-hero">
		<div class="business-hero__container">
			<p class="section-header__label">BUSINESS</p>
			<h1 class="section-header__title">事業内容</h1>
			<p class="business-hero__description">
				Onwordsに所属する観光のプロフェッショナルが、WAmazingの持つ豊富なデータと専門家の知見を融合し、お客様の課題に合わせた実効性の高いソリューションを提供します。
			</p>
		</div>
	</section>

	<!-- Business List Section -->
	<section class="business-list">
		<div class="business-list__container">
			<div class="business-list__header">
				<p class="section-header__label">BUSINESS</p>
				<h2 class="section-header__title">事業一覧</h2>
				<p class="business-list__subtitle">
					訪日客と地域・企業の架け橋となる<br>Onwordsの2つの事業
				</p>
			</div>
			<ul class="business-cards__list">
				<!-- 地域観光DX事業 -->
				<li>
					<a href="<?php echo esc_url(home_url('/business/business-local/')); ?>" class="business-card">
						<div class="business-card__image business-card__image--local"></div>
						<div class="business-card__titles">
							<h3 class="business-card__subtitle">＜自治体・DMO様向け＞</h3>
							<h3 class="business-card__title">地域観光DX事業</h3>
						</div>
						<div class="business-card__link">
							<p>詳細を見る</p>
						</div>
					</a>
				</li>

				<!-- 訪日マーケティングパートナー事業 -->
				<li>
					<a href="<?php echo esc_url(home_url('/business/business-inbound/')); ?>" class="business-card">
						<div class="business-card__image business-card__image--inbound"></div>
						<div class="business-card__titles">
							<h3 class="business-card__subtitle">＜民間企業様向け＞</h3>
							<h3 class="business-card__title">訪日マーケティングパートナー事業</h3>
						</div>
						<div class="business-card__link">
							<p>詳細を見る</p>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</section>
</main>

<?php get_footer(); ?>
