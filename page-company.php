<?php
/**
 * Template Name: Company
 * Template for displaying company overview page
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
		<span class="breadcrumb__current">会社概要</span>
	</div>
</div>

<main class="main">
	<!-- Hero Section -->
	<?php
	get_template_part(
		'template-parts/components/archive-hero',
		null,
		array(
			'background_image' => get_template_directory_uri() . '/assets/images/common/company-hero-bg.jpg',
			'label'            => 'Company',
			'title'            => '会社概要',
		)
	);
	?>

	<!-- Board Member Section -->
	<section class="board-member fade-in-wrapper">
		<div class="section-header fade-in-item">
			<p class="section-header__label">BOARD MEMBER</p>
			<h2 class="section-header__title">経営陣紹介</h2>
		</div>

		<div class="board-member__cards fade-in-item">
			<!-- Card 1: 成澤豪 -->
			<div class="board-member__card">
				<div class="board-member__card-inner">
					<div class="board-member__card-image board-member__card-image--narisawa"></div>
					<div class="board-member__card-text">
						<p class="board-member__card-name">成澤豪</p>
						<p class="board-member__card-position">代表取締役社長</p>
					</div>
				</div>
				<p class="board-member__card-bio">
					（株）リクルートスタッフィングに新卒入社し、営業や新規事業開発に従事。その後、オーストラリアのThe University of Western Australia MBA専攻修士課程卒業。日本に帰国後、チェンジHDへ入社し、新規事業開発や投資事業などに携わる。現在は、約260件の自治体公式観光サイトを制作・運用をしているトラベルジップやチェンジグループ全体の観光DX領域の責任者として、観光事業に携わる。<br>
					・（株）チェンジホールディングス 執行役員<br>
					・（株）トラベルジップ 取締役<br>
					・東光コンピュータ・サービス（株） 社外取締役
				</p>
			</div>

			<!-- Card 2: 加藤史子 -->
			<div class="board-member__card">
				<div class="board-member__card-inner">
					<div class="board-member__card-image board-member__card-image--kato"></div>
					<div class="board-member__card-text">
						<p class="board-member__card-name">加藤史子</p>
						<p class="board-member__card-position">取締役副社長</p>
					</div>
				</div>
				<p class="board-member__card-bio">
					慶応義塾大学環境情報学部（SFC）卒業後、1998年に（株）リクルート入社。 「じゃらんnet」の立ち上げ、「ホットペッパーグルメ」の立ち上げなど、主にネットの新規事業開発を担当した後、観光による地域活性を行う「じゃらんリサーチセンター」に異動。 スノーレジャーの再興をめざし「雪マジ！19」を立ち上げ。 国・県の観光関連有識者委員や、執筆・講演・研究活動を行ってきたが、「もう１度、本気のスケーラブルな事業で、日本の地域と観光産業に貢献する！」を目的に、2016年7月、WAmazing株式会社を創業。2025年8月1日、株式会社Onwordsの取締役副社長に就任。
				</p>
			</div>

			<!-- Card 3: 竹原淳 -->
			<div class="board-member__card">
				<div class="board-member__card-inner">
					<div class="board-member__card-image board-member__card-image--takehara"></div>
					<div class="board-member__card-text">
						<p class="board-member__card-name">竹原淳</p>
						<p class="board-member__card-position">取締役</p>
					</div>
				</div>
				<p class="board-member__card-bio">
					法人向け動画配信企業（株）Jストリームに新卒入社し、エンジニア、制作、新規事業開発に従事。大手企業、エンタメ企業向けプラットフォームサービスのデリバリーやテクニカルサポートなどを行う。その後、不動産会社２社にて、オンライン小口不動産投資販売の新規事業立ち上げ、事業責任者、経営企画などを歴任。（株）シーラでは、親会社の広報を兼任し、NASDAQ上場を経験。<br>
					2023年グロービス経営大学院大学を卒業し、MBAを取得。<br>
					2024年5月よりチェンジHDにて、観光DX領域での新規事業開発や投資事業に携わる。<br>
					2025年8月1日より当社取締役に就任。訪日マーケティングパートナー事業責任者
				</p>
			</div>

			<!-- Card 4: 青木理恵 -->
			<div class="board-member__card">
				<div class="board-member__card-inner">
					<div class="board-member__card-image board-member__card-image--aoki"></div>
					<div class="board-member__card-text">
						<p class="board-member__card-name">青木理恵</p>
						<p class="board-member__card-position">取締役</p>
					</div>
				</div>
				<p class="board-member__card-bio">
					東京外国語大学卒業後、編集プロダクションにて旅行ガイドの編集・ライターを経験し、2006年に（株）リクルートに入社。「じゃらん」編集部に配属後、「関東東北じゃらん」等の編集デスク、アプリ「週刊じゃらん」の立ち上げなどを経験後、じゃらんリサーチセンターへ異動。観光庁の復興支援事業「東北観光博」の編集・制作等を担当した後、2016年7月、加藤らとWAmazing株式会社を共同創業。2020年4月に自治体・DMOとの連携により地方創生を目指す"地域連携部"の立ち上げ後は、プランナー兼ディレクターとして調査事業からプロモ、コンテンツ造成まで幅広く携わる。2022年4月に同部門の部長に就任し、現職。
				</p>
			</div>
		</div>
	</section>

	<!-- Mission Section -->
	<section class="mission fade-in-wrapper">
		<div class="section-header fade-in-item">
			<p class="section-header__label">MISSION</p>
			<h2 class="section-header__title">ミッション</h2>
		</div>

		<div class="mission__content fade-in-item">
			<p class="mission__main-title">もっと楽しい日本に</p>
			<p class="mission__sub-title">Bring out Japan's fun side</p>
		</div>

		<div class="mission__description fade-in-item">
			<p class="mission__desc-text">
				日本を訪れる人も、迎える人も、みんなが楽しめる場所へ。<br>
				そして、地域の魅力を日本の活力に。
			</p>
			<p class="mission__desc-text">
				Make Japan a more enjoyable place for visitors and locals alike.<br>
				Harness regional charms to create a vibrant country
			</p>
		</div>

		<a href="<?php echo esc_url(home_url('/company/philosophy')); ?>" class="btn-primary fade-in-item">企業理念を見る</a>
	</section>

	<!-- Company Info Section -->
	<section class="company-info fade-in-wrapper">
		<div class="section-header fade-in-item">
			<p class="section-header__label">COMPANY</p>
			<h2 class="section-header__title">会社概要</h2>
		</div>

		<div class="company-info__content fade-in-item">
			<div class="company-info__row">
				<p class="company-info__row-label">会社名</p>
				<h3 class="company-info__row-content">
					株式会社Onwords<br>
					（かぶしきがいしゃオンワーズ）
				</h3>
			</div>

			<div class="company-info__row">
				<p class="company-info__row-label">設立日</p>
				<p class="company-info__row-content">2025年8月1日</p>
			</div>

			<div class="company-info__row">
				<p class="company-info__row-label">資本金</p>
				<p class="company-info__row-content">1,000万円</p>
			</div>

			<div class="company-info__row">
				<p class="company-info__row-label">経営陣</p>
				<p class="company-info__row-content">
					代表取締役社長　成澤豪<br>
					取締役副社長　　加藤史子<br>
					取締役　　　　　竹原淳<br>
					取締役　　　　　青木理恵
				</p>
			</div>

			<div class="company-info__row">
				<p class="company-info__row-label">事業内容</p>
				<p class="company-info__row-content">
					・地域観光DX事業<br>
					自治体、観光協会、DMOに向けたインバウンドに特化した観光コンサルティング事業を展開<br>
					調査、商品開発、販売整備、情報発信などをワンストップで提供<br>
					<br>
					・訪日マーケティングパートナー事業<br>
					国内企業向けにインバウンドの送客支援やコンサルティング事業を展開<br>
					訪日OTAの利用者データや会員基盤を活用したマーケティング支援を行う
				</p>
			</div>

			<div class="company-info__row">
				<p class="company-info__row-label">所在地</p>
				<p class="company-info__row-content">
					〒105-0001<br>
					東京都港区虎ノ門３丁目１７−１ Tokyu Reit 虎ノ門ビル ６Ｆ
				</p>
			</div>
		</div>
	</section>

	<!-- Access Section -->
	<section class="access fade-in-wrapper">
		<div class="section-header fade-in-item">
			<p class="section-header__label">ACCESS</p>
			<h2 class="section-header__title">アクセス</h2>
		</div>

		<iframe
			class="access__map fade-in-item"
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.0249374845835!2d139.74395831525895!3d35.66418548019923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b7e3f0b0b0b%3A0xc5b0b0b0b0b0b0b!2z5p2x5Lqs6YO95riv5Yy66JmO44OO6ZaA77yT5LiB55uu77yR77yX4oiS77yR!5e0!3m2!1sja!2sjp!4v1234567890123!5m2!1sja!2sjp"
			loading="lazy"
			referrerpolicy="no-referrer-when-downgrade">
		</iframe>
	</section>
</main>

<?php get_footer(); ?>
