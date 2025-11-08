<?php
/**
 * Template for displaying single case study posts
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
		<a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>" class="breadcrumb__link">導入事例</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<span class="breadcrumb__current"><?php echo esc_html(get_the_title()); ?></span>
	</div>
</div>

<main class="main">
	<!-- Hero Section -->
	<div class="archive-hero-wrapper">
		<section class="archive-hero" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/case/hero-case.webp');">
			<div class="archive-hero__overlay"></div>
			<div class="archive-hero__container">
				<p class="archive-hero__label">Case</p>
				<h1 class="archive-hero__title">導入事例</h1>
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
						$categories = get_the_terms( get_the_ID(), 'case_category' );
						if ( $categories && ! is_wp_error( $categories ) ) :
							$category = $categories[0];
						?>
							<a href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="news-single__category">
								<?php echo esc_html( $category->name ); ?>
							</a>
						<?php else : ?>
							<span class="news-single__category">導入事例</span>
						<?php endif; ?>

						<p class="news-single__date"><?php echo esc_html( get_the_date( 'Y/m/d' ) ); ?></p>
					</div>
				</header>

				<!-- 記事本文 -->
				<article class="news-single__content">
					<?php the_content(); ?>
				</article>

			</div>

			<!-- 導入事例一覧へリンク -->
			<div style="text-align: center; margin-top: 48px;">
				<a href="<?php echo esc_url( get_post_type_archive_link( 'case' ) ); ?>" class="btn-primary">導入事例一覧へ</a>
			</div>
		</div>
	</div>
</main>

<?php endwhile; else : ?>
	<p>記事が見つかりませんでした。</p>
<?php endif; ?>

<?php get_footer(); ?>
