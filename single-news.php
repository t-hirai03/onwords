<?php
/**
 * Template for displaying single news posts
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
		<a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>" class="breadcrumb__link">お知らせ</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<span class="breadcrumb__current"><?php echo esc_html(get_the_title()); ?></span>
	</div>
</div>

<main class="main">
	<!-- Hero Section -->
	<div class="archive-hero-wrapper">
		<section class="archive-hero" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/news/hero-bg.jpg');">
			<div class="archive-hero__overlay"></div>
			<div class="archive-hero__container">
				<p class="archive-hero__label">News</p>
				<h1 class="archive-hero__title">お知らせ</h1>
			</div>
		</section>
	</div>

	<?php while ( have_posts() ) : the_post(); ?>
		<div class="single-post">
			<div class="single-post__container">
				<!-- 記事ヘッダー -->
				<header class="single-post__header">
					<h1 class="single-post__title"><?php the_title(); ?></h1>

					<div class="single-post__meta">
						<p class="single-post__date"><?php echo esc_html( get_the_date( 'Y/m/d' ) ); ?></p>

						<?php
						$categories = get_the_terms( get_the_ID(), 'news_category' );
						if ( $categories && ! is_wp_error( $categories ) ) :
							$category = $categories[0];
						?>
							<a href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="single-post__category">
								<?php echo esc_html( $category->name ); ?>
							</a>
						<?php else : ?>
							<span class="single-post__category">お知らせ</span>
						<?php endif; ?>
					</div>
				</header>

				<!-- アイキャッチ画像 -->
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="single-post__featured-image">
					<?php the_post_thumbnail('full'); ?>
				</div>
				<?php endif; ?>

				<!-- 記事本文 -->
				<article class="single-post__content">
					<?php the_content(); ?>
				</article>
			</div>

			<!-- お知らせ一覧へリンク -->
			<div style="text-align: center; margin-top: 48px;">
				<a href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>" class="btn-primary">お知らせ一覧へ</a>
			</div>
		</div>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
