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
	<div class="archive-hero-wrapper">
		<section class="archive-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/company/hero-company.webp');">
			<div class="archive-hero__overlay"></div>
			<div class="archive-hero__container">
				<p class="archive-hero__label">Company</p>
				<h1 class="archive-hero__title">会社概要</h1>
			</div>
		</section>
	</div>

	<!-- Board Member Section -->
	<section class="company-board">
		<div class="company-board__container">
			<div class="section-header">
				<p class="section-header__label">BOARD MEMBER</p>
				<h2 class="section-header__title">経営陣</h2>
			</div>

			<div class="company-board__grid">
				<!-- 代表取締役 -->
				<div class="company-board__member">
					<div class="company-board__photo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/board/member-1.webp" alt="代表取締役">
					</div>
					<div class="company-board__info">
						<p class="company-board__role">代表取締役</p>
						<h3 class="company-board__name">氏名</h3>
						<p class="company-board__bio">プロフィール文がここに入ります。</p>
					</div>
				</div>

				<!-- 取締役 -->
				<div class="company-board__member">
					<div class="company-board__photo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/board/member-2.webp" alt="取締役">
					</div>
					<div class="company-board__info">
						<p class="company-board__role">取締役</p>
						<h3 class="company-board__name">氏名</h3>
						<p class="company-board__bio">プロフィール文がここに入ります。</p>
					</div>
				</div>

				<!-- 取締役 -->
				<div class="company-board__member">
					<div class="company-board__photo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/board/member-3.webp" alt="取締役">
					</div>
					<div class="company-board__info">
						<p class="company-board__role">取締役</p>
						<h3 class="company-board__name">氏名</h3>
						<p class="company-board__bio">プロフィール文がここに入ります。</p>
					</div>
				</div>

				<!-- 監査役 -->
				<div class="company-board__member">
					<div class="company-board__photo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/board/member-4.webp" alt="監査役">
					</div>
					<div class="company-board__info">
						<p class="company-board__role">監査役</p>
						<h3 class="company-board__name">氏名</h3>
						<p class="company-board__bio">プロフィール文がここに入ります。</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Mission Section -->
	<section class="company-mission">
		<div class="company-mission__container">
			<div class="section-header">
				<p class="section-header__label">MISSION</p>
				<h2 class="section-header__title">ミッション</h2>
			</div>

			<div class="company-mission__content">
				<p class="company-mission__text">ミッション文がここに入ります。</p>
				<a href="<?php echo esc_url(home_url('/company/philosophy/')); ?>" class="btn-primary">企業理念を詳しく見る</a>
			</div>
		</div>
	</section>

	<!-- Company Info Section -->
	<section class="company-info">
		<div class="company-info__container">
			<div class="section-header">
				<p class="section-header__label">COMPANY</p>
				<h2 class="section-header__title">会社情報</h2>
			</div>

			<table class="company-info__table">
				<tbody>
					<tr>
						<th>会社名</th>
						<td>株式会社Onwords</td>
					</tr>
					<tr>
						<th>代表者</th>
						<td>代表取締役 氏名</td>
					</tr>
					<tr>
						<th>設立日</th>
						<td>2020年4月1日</td>
					</tr>
					<tr>
						<th>所在地</th>
						<td>〒000-0000 東京都渋谷区</td>
					</tr>
					<tr>
						<th>資本金</th>
						<td>10,000,000円</td>
					</tr>
					<tr>
						<th>事業内容</th>
						<td>地域観光DX事業<br>訪日マーケティングパートナー事業</td>
					</tr>
					<tr>
						<th>取引銀行</th>
						<td>銀行名</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>

	<!-- Access Section -->
	<section class="company-access">
		<div class="company-access__container">
			<div class="section-header">
				<p class="section-header__label">ACCESS</p>
				<h2 class="section-header__title">アクセス</h2>
			</div>

			<div class="company-access__content">
				<div class="company-access__map">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.747736789!2d139.7008!3d35.6586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDM5JzMxLjAiTiAxMznCsDQyJzAzLjAiRQ!5e0!3m2!1sja!2sjp!4v1234567890"
						width="100%"
						height="400"
						style="border:0;"
						allowfullscreen=""
						loading="lazy"
						referrerpolicy="no-referrer-when-downgrade">
					</iframe>
				</div>
				<div class="company-access__info">
					<p class="company-access__address">
						〒000-0000<br>
						東京都渋谷区<br>
					</p>
					<p class="company-access__route">
						最寄り駅からのアクセス方法
					</p>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
