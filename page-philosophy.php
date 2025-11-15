<?php
/**
 * Template Name: Philosophy
 * Template for displaying company philosophy page
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
		<a href="<?php echo esc_url(home_url('/company/')); ?>" class="breadcrumb__link">会社情報</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<span class="breadcrumb__current">企業理念</span>
	</div>
</div>

<main class="main">
	<?php
	// Hero Section
	get_template_part(
		'template-parts/components/archive-hero',
		null,
		array(
			'background_image' => get_template_directory_uri() . '/assets/images/company/philosophy/background.jpg',
			'label'            => 'Company Philosophy',
			'title'            => '企業理念',
		)
	);
	?>

	<!-- Purpose Section -->
	<section class="philosophy-purpose">
		<div class="philosophy-purpose__inner">
			<div class="philosophy-purpose__header">
				<p class="section-header__label">PURPOSE</p>
				<h2 class="section-header__title">パーパス</h2>
			</div>
			<div class="philosophy-purpose__content">
				<p class="philosophy-purpose__text-en">Create growth and success for employees, customers, and communities</p>
				<p class="philosophy-purpose__text-ja">従業員、顧客、地域の成長と成功の追求</p>
			</div>
		</div>
	</section>

	<!-- Mission Section -->
	<section class="philosophy-mission">
		<div class="philosophy-mission__inner">
			<div class="philosophy-mission__header">
				<p class="section-header__label">MISSION</p>
				<h2 class="section-header__title">ミッション</h2>
			</div>
			<div class="philosophy-mission__main-text">
				<p class="philosophy-mission__text-ja-main">もっと楽しい日本に</p>
				<p class="philosophy-mission__text-en-main">Bring out Japan's fun side</p>
			</div>
			<div class="philosophy-mission__description">
				<p class="philosophy-mission__text-ja-desc">
					日本を訪れる人も、迎える人も、みんなが楽しめる場所へ。<br>
					そして、地域の魅力を日本の活力に。
				</p>
				<p class="philosophy-mission__text-en-desc">
					Make Japan a more enjoyable place for visitors and locals alike.<br>
					Harness regional charms to create a vibrant country
				</p>
			</div>
		</div>
	</section>

	<!-- Values Section -->
	<section class="philosophy-values">
		<div class="philosophy-values__inner">
			<div class="philosophy-values__header">
				<p class="section-header__label">VALUES</p>
				<h2 class="section-header__title">バリュー</h2>
			</div>
			<div class="philosophy-values__content">
				<ul class="philosophy-values__list">
					<li class="philosophy-values__item">
						<p class="philosophy-values__value-ja">正しく</p>
						<p class="philosophy-values__value-en">Integrity</p>
						<p class="philosophy-values__desc-ja">-プロとして、人として、誠実に行動する</p>
						<p class="philosophy-values__desc-en">-Do the right thing,as professionals, and as people</p>
					</li>
					<li class="philosophy-values__item">
						<p class="philosophy-values__value-ja">支え合う</p>
						<p class="philosophy-values__value-en">Teamwork</p>
						<p class="philosophy-values__desc-ja">-仲間と助け合い、チームで力を最大にする</p>
						<p class="philosophy-values__desc-en">-Support one another to achieve our full potential as a team</p>
					</li>
					<li class="philosophy-values__item">
						<p class="philosophy-values__value-ja">挑戦を楽しむ</p>
						<p class="philosophy-values__value-en">Embracing challenges</p>
						<p class="philosophy-values__desc-ja">-新しい考え、挑戦を歓迎する。失敗から学び、誇ろう</p>
						<p class="philosophy-values__desc-en">-Be open to new ideas and opportunities. Treat failure as a lesson, and a source of pride</p>
					</li>
					<li class="philosophy-values__item">
						<p class="philosophy-values__value-ja">個の尊重</p>
						<p class="philosophy-values__value-en">Respect for the individual</p>
						<p class="philosophy-values__desc-ja">-個人の想い、意見、直感を大事にする</p>
						<p class="philosophy-values__desc-en">-Honor personal beliefs, opinions,and instincts</p>
					</li>
				</ul>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
