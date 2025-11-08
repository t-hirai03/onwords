<?php
/**
 * Template Name: Business Inbound
 * Template for displaying inbound marketing partner business page
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
		<span class="breadcrumb__current">訪日マーケティングパートナー事業</span>
	</div>
</div>

<main class="main">
	<!-- Hero Section -->
	<div class="archive-hero-wrapper">
		<section class="archive-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/business/hero-inbound.webp');">
			<div class="archive-hero__overlay"></div>
			<div class="archive-hero__container">
				<p class="archive-hero__label">訪日マーケティングパートナー事業</p>
				<h1 class="archive-hero__title">訪日旅行者のインサイトを活用した<br>効果的なマーケティング支援</h1>
			</div>
		</section>
	</div>

	<!-- Strengths Section -->
	<section class="business-section">
		<div class="business-section__container">
			<div class="section-header">
				<p class="section-header__label">WHY CHOOSE US</p>
				<h2 class="section-header__title">選ばれる理由</h2>
			</div>
			<div class="business-strengths">
				<div class="business-strengths__item">
					<div class="business-strengths__number">01</div>
					<h3 class="business-strengths__title">訪日旅行者のインサイト</h3>
					<p class="business-strengths__description">
						豊富なデータとインサイトに基づく戦略立案が可能です。
					</p>
				</div>
				<div class="business-strengths__item">
					<div class="business-strengths__number">02</div>
					<h3 class="business-strengths__title">多言語対応</h3>
					<p class="business-strengths__description">
						複数言語でのマーケティング施策を実施できます。
					</p>
				</div>
				<div class="business-strengths__item">
					<div class="business-strengths__number">03</div>
					<h3 class="business-strengths__title">実績豊富なパートナー</h3>
					<p class="business-strengths__description">
						多数の企業様との取引実績があります。
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Services Section -->
	<section class="business-section business-section--gray">
		<div class="business-section__container">
			<div class="section-header">
				<p class="section-header__label">SERVICES</p>
				<h2 class="section-header__title">サービス一覧</h2>
			</div>
			<div class="business-services business-services--grid-3">
				<div class="business-services__item">
					<h3 class="business-services__title">インバウンドマーケティング</h3>
					<p class="business-services__description">訪日旅行者向けマーケティング戦略</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">多言語Webサイト制作</h3>
					<p class="business-services__description">多言語対応のWebサイト企画・制作</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">SNS運用</h3>
					<p class="business-services__description">海外向けSNSアカウント運用支援</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">広告運用</h3>
					<p class="business-services__description">海外向けデジタル広告の企画・運用</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">コンテンツ制作</h3>
					<p class="business-services__description">多言語コンテンツの企画・制作</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">インフルエンサーマーケティング</h3>
					<p class="business-services__description">海外インフルエンサーとのタイアップ</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">データ分析</h3>
					<p class="business-services__description">訪日旅行者の行動データ分析</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">PRサポート</h3>
					<p class="business-services__description">海外メディア向けPR支援</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">コンサルティング</h3>
					<p class="business-services__description">訪日マーケティング戦略立案支援</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Case Studies Section (Placeholder) -->
	<section class="business-section">
		<div class="business-section__container">
			<div class="section-header">
				<p class="section-header__label">CASE STUDIES</p>
				<h2 class="section-header__title">導入事例</h2>
			</div>

			<div class="archive-list__container">
				<?php
				/*
				$case_query = new WP_Query(array(
					'post_type' => 'case',
					'posts_per_page' => 3,
					'tax_query' => array(
						array(
							'taxonomy' => 'case_category',
							'field' => 'slug',
							'terms' => 'inbound-marketing-partner',
						),
					),
				));

				if ($case_query->have_posts()) :
				?>
					<ul class="archive-list__items">
						<?php while ($case_query->have_posts()) : $case_query->the_post(); ?>
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
					<p class="archive-list__no-posts">現在、導入事例はありません。</p>
				<?php
				endif;
				*/
				?>
				<p class="archive-list__no-posts">導入事例は準備中です。</p>
			</div>

			<div style="text-align: center; margin-top: 48px;">
				<a href="<?php echo esc_url(home_url('/case/')); ?>" class="btn-primary">すべての導入事例を見る</a>
			</div>
		</div>
	</section>

	<!-- Business Records Section -->
	<section class="business-section business-section--gray">
		<div class="business-section__container">
			<div class="section-header">
				<p class="section-header__label">BUSINESS RECORDS</p>
				<h2 class="section-header__title">取引実績</h2>
			</div>
			<div class="business-logos">
				<div class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/company-1.png" alt="企業ロゴ1">
				</div>
				<div class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/company-2.png" alt="企業ロゴ2">
				</div>
				<div class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/company-3.png" alt="企業ロゴ3">
				</div>
				<div class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/company-4.png" alt="企業ロゴ4">
				</div>
				<div class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/company-5.png" alt="企業ロゴ5">
				</div>
				<div class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/company-6.png" alt="企業ロゴ6">
				</div>
			</div>
		</div>
	</section>

	<!-- Webinar Section (Placeholder) -->
	<section class="business-section">
		<div class="business-section__container">
			<div class="section-header">
				<p class="section-header__label">WEBINAR</p>
				<h2 class="section-header__title">ウェビナー情報</h2>
			</div>

			<div class="archive-list__container">
				<?php
				/*
				$webinar_query = new WP_Query(array(
					'post_type' => 'webinar',
					'posts_per_page' => 2,
					'tax_query' => array(
						array(
							'taxonomy' => 'knowledge_tag',
							'field' => 'slug',
							'terms' => 'private-company',
						),
					),
				));

				if ($webinar_query->have_posts()) :
				?>
					<ul class="archive-list__items">
						<?php while ($webinar_query->have_posts()) : $webinar_query->the_post(); ?>
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
					<p class="archive-list__no-posts">現在、ウェビナー情報はありません。</p>
				<?php
				endif;
				*/
				?>
				<p class="archive-list__no-posts">ウェビナー情報は準備中です。</p>
			</div>

			<div style="text-align: center; margin-top: 48px;">
				<a href="<?php echo esc_url(home_url('/knowledge/webinar/')); ?>" class="btn-primary">すべてのウェビナーを見る</a>
			</div>
		</div>
	</section>

	<!-- Documents Section (Placeholder) -->
	<section class="business-section business-section--gray">
		<div class="business-section__container">
			<div class="section-header">
				<p class="section-header__label">DOCUMENTS</p>
				<h2 class="section-header__title">お役立ち資料</h2>
			</div>

			<div class="archive-list__container">
				<?php
				/*
				$documents_query = new WP_Query(array(
					'post_type' => 'document',
					'posts_per_page' => 3,
					'tax_query' => array(
						array(
							'taxonomy' => 'knowledge_tag',
							'field' => 'slug',
							'terms' => 'private-company',
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
