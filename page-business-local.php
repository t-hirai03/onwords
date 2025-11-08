<?php
/**
 * Template Name: Business Local
 * Template for displaying regional tourism DX business page
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
		<a href="<?php echo esc_url(home_url('/business/')); ?>" class="breadcrumb__link">事業内容</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<span class="breadcrumb__current">地域観光DX事業</span>
	</div>
</div>

<main class="main">
	<!-- Hero Section -->
	<div class="archive-hero-wrapper">
		<section class="archive-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/business/hero-local.webp');">
			<div class="archive-hero__overlay"></div>
			<div class="archive-hero__container">
				<p class="archive-hero__label">Local cooperation</p>
				<h1 class="archive-hero__title">地域観光DX事業</h1>
			</div>
		</section>
	</div>

	<!-- Support Records Section -->
	<section class="business-section">
		<div class="business-section__container">
			<div class="section-header">
				<p class="section-header__label">SUPPORT RECORDS</p>
				<h2 class="section-header__title">支援実績</h2>
			</div>
			<div class="business-stats">
				<div class="business-stats__item">
					<p class="business-stats__number">100+</p>
					<p class="business-stats__label">支援地域数</p>
				</div>
				<div class="business-stats__item">
					<p class="business-stats__number">500+</p>
					<p class="business-stats__label">プロジェクト数</p>
				</div>
				<div class="business-stats__item">
					<p class="business-stats__number">95%</p>
					<p class="business-stats__label">顧客満足度</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Strengths Section -->
	<section class="business-section business-section--gray">
		<div class="business-section__container">
			<div class="section-header">
				<p class="section-header__label">OUR STRENGTHS</p>
				<h2 class="section-header__title">私たちの強み</h2>
			</div>
			<div class="business-strengths">
				<div class="business-strengths__item">
					<div class="business-strengths__number">01</div>
					<h3 class="business-strengths__title">デジタルマーケティング支援</h3>
					<p class="business-strengths__description">
						地域の魅力を最大限に引き出すデジタルマーケティング戦略を提供します。
					</p>
				</div>
				<div class="business-strengths__item">
					<div class="business-strengths__number">02</div>
					<h3 class="business-strengths__title">データ分析・活用支援</h3>
					<p class="business-strengths__description">
						観光データを分析し、戦略的な意思決定をサポートします。
					</p>
				</div>
				<div class="business-strengths__item">
					<div class="business-strengths__number">03</div>
					<h3 class="business-strengths__title">持続可能な観光地づくり</h3>
					<p class="business-strengths__description">
						地域資源を活用した持続可能な観光地づくりを実現します。
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Services Section -->
	<section class="business-section">
		<div class="business-section__container">
			<div class="section-header">
				<p class="section-header__label">SERVICES</p>
				<h2 class="section-header__title">サービス一覧</h2>
			</div>
			<div class="business-services">
				<div class="business-services__item">
					<h3 class="business-services__title">デジタルマーケティング</h3>
					<p class="business-services__description">地域の魅力を最大限に引き出すマーケティング戦略</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">Webサイト制作</h3>
					<p class="business-services__description">地域の特性を活かしたWebサイトの企画・制作</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">SNS運用支援</h3>
					<p class="business-services__description">効果的なSNS活用による情報発信サポート</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">データ分析</h3>
					<p class="business-services__description">観光データの分析と戦略立案支援</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">コンサルティング</h3>
					<p class="business-services__description">地域観光の課題解決に向けた総合的な支援</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Documents Section (Placeholder for future dynamic content) -->
	<section class="business-section business-section--gray">
		<div class="business-section__container">
			<div class="section-header">
				<p class="section-header__label">DOCUMENTS</p>
				<h2 class="section-header__title">お役立ち資料</h2>
			</div>

			<div class="archive-list__container">
				<!-- TODO: カスタム投稿タイプ実装後、WP_Queryで動的に取得 -->
				<?php
				/*
				$documents_query = new WP_Query(array(
					'post_type' => 'document',
					'posts_per_page' => 3,
					'tax_query' => array(
						array(
							'taxonomy' => 'knowledge_tag',
							'field' => 'slug',
							'terms' => 'local-government',
						),
					),
				));

				if ($documents_query->have_posts()) :
				?>
					<ul class="archive-list__items">
						<?php while ($documents_query->have_posts()) : $documents_query->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>" class="news-item">
									<div class="news-item__meta">
										<p class="news-item__date"><?php echo get_the_date('Y/m/d'); ?></p>
									</div>
									<h3 class="news-item__title"><?php the_title(); ?></h3>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php
					wp_reset_postdata();
				else :
				?>
					<p class="archive-list__no-posts">現在、お役立ち資料はありません。</p>
				<?php
				endif;
				*/
				?>
				<p class="archive-list__no-posts">お役立ち資料は準備中です。</p>
			</div>

			<div style="text-align: center; margin-top: 48px;">
				<a href="<?php echo esc_url(home_url('/knowledge/document/')); ?>" class="btn-primary">すべての資料を見る</a>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
