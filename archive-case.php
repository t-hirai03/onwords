<?php
/**
 * Case Archive Template
 *
 * Template for displaying the case studies archive page.
 * Displays hero section, category filter, and case studies list with pagination.
 *
 * @package Onwords
 */

get_header();

// カテゴリー情報を取得
$current_category = get_queried_object();
$is_category_archive = is_tax('case_category');
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
		<span class="breadcrumb__current">導入事例</span>
	</div>
</div>

<main class="main">
	<!-- Hero Section -->
	<div class="archive-hero-wrapper">
		<section class="archive-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/case/hero-case.webp');">
			<div class="archive-hero__overlay"></div>
			<div class="archive-hero__container">
				<p class="archive-hero__label">Case</p>
				<h1 class="archive-hero__title">導入事例</h1>
			</div>
		</section>
	</div>

	<!-- Filter Section -->
	<div class="archive-filter">
		<div class="archive-filter__container">
			<nav class="archive-filter__nav">
				<a href="<?php echo get_post_type_archive_link('case'); ?>"
				   class="archive-filter__button <?php echo !$is_category_archive ? 'archive-filter__button--active' : ''; ?>">
					すべて
				</a>
				<?php
				$categories = get_terms(array(
					'taxonomy' => 'case_category',
					'hide_empty' => false,
				));

				if (!empty($categories) && !is_wp_error($categories)) :
					foreach ($categories as $category) :
						$is_active = $is_category_archive && $current_category->term_id === $category->term_id;
				?>
					<a href="<?php echo get_term_link($category); ?>"
					   class="archive-filter__button <?php echo $is_active ? 'archive-filter__button--active' : ''; ?>">
						<?php echo esc_html($category->name); ?>
					</a>
				<?php
					endforeach;
				endif;
				?>
			</nav>
		</div>
	</div>

	<!-- Case List -->
	<div class="archive-list__container">
		<?php if (have_posts()) : ?>
			<ul class="archive-list__items">
				<?php while (have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>" class="news-item">
							<div class="news-item__meta">
								<?php
								$client_name = get_field('client_name');
								if ($client_name) :
								?>
									<p class="news-item__date"><?php echo esc_html($client_name); ?></p>
								<?php endif; ?>
								<?php
								$categories = get_the_terms(get_the_ID(), 'case_category');
								if ($categories && !is_wp_error($categories)) :
								?>
									<p class="news-item__category"><?php echo esc_html($categories[0]->name); ?></p>
								<?php endif; ?>
							</div>
							<h3 class="news-item__title"><?php the_title(); ?></h3>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>

			<!-- Pagination -->
			<?php
			the_posts_pagination(array(
				'mid_size'           => 2,
				'prev_text'          => '<i class="material-icons">keyboard_arrow_left</i>',
				'next_text'          => '<i class="material-icons">keyboard_arrow_right</i>',
				'screen_reader_text' => 'ページナビゲーション',
			));
			?>
		<?php else : ?>
			<p class="archive-list__no-posts">導入事例はまだありません。</p>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
