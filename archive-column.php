<?php
/**
 * Template for displaying column archive
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
		<a href="<?php echo esc_url(home_url('/knowledge')); ?>" class="breadcrumb__link">ナレッジ</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<span class="breadcrumb__current">記事一覧</span>
	</div>
</div>

<main class="main">
	<!-- Hero Section -->
	<div class="archive-hero-wrapper">
		<section class="archive-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/knowledge/hero-column.webp');">
			<div class="archive-hero__overlay"></div>
			<div class="archive-hero__container">
				<p class="archive-hero__label">COLUMNS</p>
				<h1 class="archive-hero__title">記事一覧</h1>
			</div>
		</section>
	</div>

	<!-- Column List -->
	<div class="archive-list__container">
		<?php if (have_posts()) : ?>
			<ul class="archive-list__items">
				<?php while (have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>" class="news-item">
							<div class="news-item__meta">
								<p class="news-item__date"><?php echo get_the_date('Y/m/d'); ?></p>
								<?php
								$terms = get_the_terms(get_the_ID(), 'column_category');
								if ($terms && !is_wp_error($terms)) :
									foreach ($terms as $term) :
								?>
										<p class="news-item__category"><?php echo esc_html($term->name); ?></p>
								<?php
									endforeach;
								endif;
								?>
							</div>
							<h3 class="news-item__title"><?php the_title(); ?></h3>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php else : ?>
			<p class="archive-list__no-posts">現在、記事はありません。</p>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
