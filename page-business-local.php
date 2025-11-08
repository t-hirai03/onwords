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
	<div class="business-hero-wrapper">
		<section class="business-hero">
			<p class="business-hero__label">Local cooperation</p>
			<h1 class="business-hero__title">地域観光DX事業</h1>
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
			<ul class="business-logos">
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-1.webp" alt="自治体ロゴ1">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-2.webp" alt="自治体ロゴ2">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-3.webp" alt="自治体ロゴ3">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-4.webp" alt="自治体ロゴ4">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-5.webp" alt="自治体ロゴ5">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-6.webp" alt="自治体ロゴ6">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-7.webp" alt="自治体ロゴ7">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-8.webp" alt="自治体ロゴ8">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-9.webp" alt="自治体ロゴ9">
				</li>
				<li class="business-logos__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/logos/logo-10.webp" alt="自治体ロゴ10">
				</li>
			</ul>
		</div>
	</section>

	<!-- Strengths Section -->
	<section class="business-section">
		<div class="business-section__container">
			<div class="section-header">
				<p class="section-header__label">OUR STRENGTHS</p>
				<h2 class="section-header__title">私たちの強み</h2>
			</div>
			<p class="business-section__description">
				地域の課題は多種多様。私たちはこれまで「調査・戦略策定」～「販売整備・PR」まで、地域の課題に沿ったご提案・納品を行ってきました。2020年の部署立ち上げからのべ300以上の納品を通して様々な事業に携わらせて頂いたからこそ、客観視点を持って課題解決提案ができます。
			</p>
			<div class="business-strengths">
				<!-- Navigation Links -->
				<ul class="business-strengths__nav">
					<li class="business-strengths__nav-item">
						<a href="#feature-1" class="business-strengths__nav-link">
							<div class="business-strengths__nav-header">
								<p class="business-strengths__nav-number">01.</p>
								<p class="business-strengths__nav-title">様々な地域との協働経験に基づく客観的な視点</p>
							</div>
							<i class="material-icons business-strengths__nav-icon">arrow_downward</i>
						</a>
					</li>
					<li class="business-strengths__nav-item">
						<a href="#feature-2" class="business-strengths__nav-link">
							<div class="business-strengths__nav-header">
								<p class="business-strengths__nav-number">02.</p>
								<p class="business-strengths__nav-title">地域のキーとなる事業者を"巻き込む"推進力</p>
							</div>
							<i class="material-icons business-strengths__nav-icon">arrow_downward</i>
						</a>
					</li>
					<li class="business-strengths__nav-item">
						<a href="#feature-3" class="business-strengths__nav-link">
							<div class="business-strengths__nav-header">
								<p class="business-strengths__nav-number">03.</p>
								<p class="business-strengths__nav-title">WAmazingと連携した"旅マエ""旅ナカ"プロモーション</p>
							</div>
							<i class="material-icons business-strengths__nav-icon">arrow_downward</i>
						</a>
					</li>
				</ul>

				<!-- Content List -->
				<ul class="business-strengths__content-list">
					<li id="feature-1" class="business-strengths__content-item">
						<div class="business-strengths__content-wrapper">
							<div class="business-strengths__content-inner">
								<div class="business-strengths__content-header">
									<h3 class="business-strengths__content-title">様々な地域との協働経験に基づく客観的な視点</h3>
									<p class="business-strengths__content-number">01</p>
								</div>
								<div class="business-strengths__content-image" data-image="strength-1"></div>
								<p class="business-strengths__content-description">
									コロナ禍に立ち上げをしてから5年の間に、北海道から沖縄まで全国各地の自治体・DMOの皆様と様々な事業を行ってきました。多様な地域課題に対し、中華圏をよく知るネイティブスタッフと、日本の観光を熟知したスペシャリストの視点から本質的なソリューションを提案します。
								</p>
							</div>
						</div>
					</li>
					<li id="feature-2" class="business-strengths__content-item">
						<div class="business-strengths__content-wrapper">
							<div class="business-strengths__content-inner">
								<div class="business-strengths__content-header">
									<h3 class="business-strengths__content-title">地域のキーとなる事業者を"巻き込む"推進力</h3>
									<p class="business-strengths__content-number">02</p>
								</div>
								<div class="business-strengths__content-image" data-image="strength-2"></div>
								<p class="business-strengths__content-description">
									インバウンド集客を成功させるカギは、地域事業者との協働です。「西のゴールデンルート事業（福岡市主幹事業ながら、周辺19自治体および事業者と連携）」、「静岡市伴走事業（地域事業者30社と連携）」など、多数の関係者を巻き込み進行した推進・調整力に定評があります。
								</p>
							</div>
						</div>
					</li>
					<li id="feature-3" class="business-strengths__content-item">
						<div class="business-strengths__content-wrapper">
							<div class="business-strengths__content-inner">
								<div class="business-strengths__content-header">
									<h3 class="business-strengths__content-title">WAmazingと連携した"旅マエ""旅ナカ"プロモーション</h3>
									<p class="business-strengths__content-number">03</p>
								</div>
								<div class="business-strengths__content-image" data-image="strength-3"></div>
								<p class="business-strengths__content-description">
									東アジア圏を中心に約70万人の会員基盤を有するWAmazingと連携し、地域の魅力を発信します。会員は訪日意欲の高いヘビーリピーター層が多く、地方部への来訪意向度も高い為、インバウンド誘客にこれから取り組みたい地域のファーストステップとしても活用いただけます。
								</p>
							</div>
						</div>
					</li>
				</ul>
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
					<div class="business-services__header">
						<div class="business-services__icon" data-icon="service-1"></div>
						<p class="business-services__title">調査・分析</p>
					</div>
					<div class="business-services__content">
						<h3 class="business-services__subtitle">インバウンド旅行者の生の声・ニーズを知る！</h3>
						<p class="business-services__description">
							訪日関心が高いWAmazingの70万人以上の会員データをもとに、仮説設計から全面サポートいたします。また、定量調査に加え、グループインタビューの実施も可能です。
						</p>
					</div>
				</div>
				<div class="business-services__item">
					<div class="business-services__header">
						<div class="business-services__icon" data-icon="service-2"></div>
						<p class="business-services__title">商品・コンテンツ開発</p>
					</div>
					<div class="business-services__content">
						<h3 class="business-services__subtitle">地域の顔となるコンテンツを造り出したい</h3>
						<p class="business-services__description">
							ネイティブの視点で商品開発をお手伝いいたします。現地へのモニター調査から、資源や既存コンテンツの評価を実施。専門家を派遣した事業者サポート、造成商品への反響検証も実施可能です。
						</p>
					</div>
				</div>
				<div class="business-services__item">
					<div class="business-services__header">
						<div class="business-services__icon" data-icon="service-3"></div>
						<p class="business-services__title">販売整備・商品掲載</p>
					</div>
					<div class="business-services__content">
						<h3 class="business-services__subtitle">観光商材をインバウンドに特化して販促・販売強化したい</h3>
						<p class="business-services__description">
							地域コンテンツの受入整備、販売チャネルの整備をお手伝いいたします。海外カスタマーに向けて、地域コンテンツを商品棚に載せるところまでサポートします。WAmazingの予約サイトでの商品掲載、販売、露出増加も承ります。
						</p>
					</div>
				</div>
				<div class="business-services__item">
					<div class="business-services__header">
						<div class="business-services__icon" data-icon="service-4"></div>
						<p class="business-services__title">情報発信・プロモーション</p>
					</div>
					<div class="business-services__content">
						<h3 class="business-services__subtitle">SNS、メディア、広告等での訪日旅行者へのアプローチ</h3>
						<p class="business-services__description">
							WAmazingのオウンドメディアは訪日市場に特化し2,400本以上のオリジナル記事を公開中。SEOにも強く、継続した情報発信が可能です。70万人以上のWAmazing会員やSNSフォロワーに向けた告知も実施可能です。
						</p>
					</div>
				</div>
				<div class="business-services__item">
					<div class="business-services__header">
						<div class="business-services__icon" data-icon="service-5"></div>
						<p class="business-services__title">翻訳・ローカライズ</p>
					</div>
					<div class="business-services__content">
						<h3 class="business-services__subtitle">高品質のネイティブ翻訳</h3>
						<p class="business-services__description">
							WAmazingのプロダクトやメディアを手掛ける翻訳チームが、訪日旅行者向けに最適化された翻訳を提供します。現地の文化やニュアンスを汲み取り、ブランドの魅力を正確に伝えます。
						</p>
					</div>
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
