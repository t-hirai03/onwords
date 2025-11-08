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
				<p class="section-header__label">CASE STUDY</p>
				<h2 class="section-header__title">支援実績</h2>
			</div>
			<p class="business-section__description">
				自治体様、DMO様、観光協会様など広く訪日インバウンドに関する、観光関連事業の支援実績があります。調査から販売整備まで、ワンストップでご支援可能です。（以下一部抜粋）
			</p>
			<ul class="business-logos business-logos--10">
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-1.png" alt="自治体ロゴ1">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-2.png" alt="自治体ロゴ2">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-3.png" alt="自治体ロゴ3">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-4.png" alt="自治体ロゴ4">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-5.png" alt="自治体ロゴ5">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-6.png" alt="自治体ロゴ6">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-7.png" alt="自治体ロゴ7">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-8.png" alt="自治体ロゴ8">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-9.png" alt="自治体ロゴ9">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-10.png" alt="自治体ロゴ10">
				</li>
			</ul>
		</div>
	</section>

	<!-- Strengths Section -->
	<section class="business-section business-section--gray">
		<div class="business-section__container">
			<div class="section-header">
				<p class="section-header__label">OUR STRENGTHS</p>
				<h2 class="section-header__title">私たちの強み</h2>
			</div>
			<p class="business-section__description">
				地域の課題は多種多様。私たちはこれまで「調査・戦略策定」～「販売整備・PR」まで、地域の課題に沿ったご提案・納品を行ってきました。2020年の部署立ち上げからのべ300以上の納品を通して様々な事業に携わらせて頂いたからこそ、客観視点を持って課題解決提案ができます。
			</p>
			<div class="business-strengths">
				<div class="business-strengths__item">
					<div class="business-strengths__number">01</div>
					<h3 class="business-strengths__title">様々な地域との協働経験に基づく客観的な視点</h3>
					<p class="business-strengths__description">
						コロナ禍に立ち上げをしてから5年の間に、北海道から沖縄まで全国各地の自治体・DMOの皆様と様々な事業を行ってきました。多様な地域課題に対し、中華圏をよく知るネイティブスタッフと、日本の観光を熟知したスペシャリストの視点から本質的なソリューションを提案します。
					</p>
				</div>
				<div class="business-strengths__item">
					<div class="business-strengths__number">02</div>
					<h3 class="business-strengths__title">地域のキーとなる事業者を"巻き込む"推進力</h3>
					<p class="business-strengths__description">
						インバウンド集客を成功させるカギは、地域事業者との協働です。「西のゴールデンルート事業（福岡市主幹事業ながら、周辺19自治体および事業者と連携）」、「静岡市伴走事業（地域事業者30社と連携）」など、多数の関係者を巻き込み進行した推進・調整力に定評があります。
					</p>
				</div>
				<div class="business-strengths__item">
					<div class="business-strengths__number">03</div>
					<h3 class="business-strengths__title">WAmazingと連携した"旅マエ""旅ナカ"プロモーション</h3>
					<p class="business-strengths__description">
						東アジア圏を中心に約70万人の会員基盤を有するWAmazingと連携し、地域の魅力を発信します。会員は訪日意欲の高いヘビーリピーター層が多く、地方部への来訪意向度も高い為、インバウンド誘客にこれから取り組みたい地域のファーストステップとしても活用いただけます。
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
			<p class="business-section__description">
				Onwordsでは、調査・分析から戦略設計、受入環境整備、観光商品の造成や磨き込み、販売整備やプロモーション、WAmazingと連携したメディアやSNSなどでの情報発信まで一括してご支援可能です。
			</p>
			<div class="business-services">
				<div class="business-services__item">
					<h3 class="business-services__title">調査・分析</h3>
					<p class="business-services__description">インバウンド旅行者の生の声・ニーズを知る！</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">商品・コンテンツ開発</h3>
					<p class="business-services__description">地域の顔となるコンテンツを造り出したい</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">販売整備・商品掲載</h3>
					<p class="business-services__description">観光商材をインバウンドに特化して販促・販売強化したい</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">情報発信・プロモーション</h3>
					<p class="business-services__description">SNS、メディア、広告等での訪日旅行者へのアプローチ</p>
				</div>
				<div class="business-services__item">
					<h3 class="business-services__title">翻訳・ローカライズ</h3>
					<p class="business-services__description">高品質のネイティブ翻訳</p>
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
