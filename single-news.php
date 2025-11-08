<?php
/**
 * Template for displaying single news posts
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
		<a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>" class="breadcrumb__link">お知らせ</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<span class="breadcrumb__current"><?php echo esc_html(get_the_title()); ?></span>
	</div>
</div>

<main class="main">
	<!-- Hero Section -->
	<div class="news-archive-hero-wrapper">
		<section class="news-archive-hero" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/news/hero-bg.jpg');">
			<div class="news-archive-hero__overlay"></div>
			<div class="news-archive-hero__container">
				<p class="news-archive-hero__label">News</p>
				<h1 class="news-archive-hero__title">お知らせ</h1>
			</div>
		</section>
	</div>

	<div>
		<!-- 記事コンテンツ -->
		<div class="news-single">
			<div class="news-single__container">

				<!-- 記事ヘッダー -->
				<header class="news-single__header">
					<h2 class="news-single__title"><?php the_title(); ?></h2>

					<div class="news-single__meta">
						<?php
						$categories = get_the_terms( get_the_ID(), 'news_category' );
						if ( $categories && ! is_wp_error( $categories ) ) :
							$category = $categories[0];
						?>
							<a href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="news-single__category">
								<?php echo esc_html( $category->name ); ?>
							</a>
						<?php else : ?>
							<span class="news-single__category">お知らせ</span>
						<?php endif; ?>

						<p class="news-single__date"><?php echo esc_html( get_the_date( 'Y/m/d' ) ); ?></p>
					</div>
				</header>

				<!-- 記事本文 -->
				<article class="news-single__content">
					<?php the_content(); ?>
				</article>

			</div>

			<!-- お知らせ一覧へリンク -->
			<nav class="pagination-wrapper">
				<ul class="pagination">
					<li class="pagination__item">
						<a href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>">お知らせ一覧へ</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</main>

<?php endwhile; else : ?>
	<p>記事が見つかりませんでした。</p>
<?php endif; ?>

<?php get_footer(); ?>
