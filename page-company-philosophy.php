<?php
/**
 * Template Name: Company Philosophy
 * Template for displaying company philosophy page
 *
 * @package Onwords
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Breadcrumb Navigation -->
<div class="breadcrumb">
	<div class="breadcrumb__container">
		<a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumb__link breadcrumb__home">
			<i class="material-icons">home</i>
		</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<a href="<?php echo esc_url(home_url('/company/')); ?>" class="breadcrumb__link">会社概要</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<span class="breadcrumb__current">企業理念</span>
	</div>
</div>

<main class="main">
	<!-- Hero Section -->
	<div class="archive-hero-wrapper">
		<section class="archive-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/company/hero-philosophy.webp');">
			<div class="archive-hero__overlay"></div>
			<div class="archive-hero__container">
				<p class="archive-hero__label">Philosophy</p>
				<h1 class="archive-hero__title">企業理念</h1>
			</div>
		</section>
	</div>

	<div>
		<!-- ページコンテンツ -->
		<div class="news-single">
			<div class="news-single__container">
				<!-- ページ本文 -->
				<article class="news-single__content">
					<?php the_content(); ?>
				</article>
			</div>

			<!-- 会社概要へリンク -->
			<div style="text-align: center; margin-top: 48px;">
				<a href="<?php echo esc_url(home_url('/company/')); ?>" class="btn-primary">会社概要へ戻る</a>
			</div>
		</div>
	</div>
</main>

<?php endwhile; else : ?>
	<p>ページが見つかりませんでした。</p>
<?php endif; ?>

<?php get_footer(); ?>
