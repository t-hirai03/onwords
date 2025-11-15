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
	<div class="case-list__container">
		<?php if (have_posts()) : ?>
			<ul class="case-list__items">
				<?php while (have_posts()) : the_post(); ?>
					<li class="case-list__item">
						<a href="<?php the_permalink(); ?>" class="case-card">
							<div class="case-card__image">
								<?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail('medium'); ?>
								<?php endif; ?>
							</div>
							<div class="case-card__content">
								<div class="case-card__text">
									<?php
									$client_name = get_post_meta(get_the_ID(), 'client_name', true);
									if ($client_name) :
									?>
										<p class="case-card__company"><?php echo esc_html($client_name); ?></p>
									<?php endif; ?>
									<h3 class="case-card__title"><?php the_title(); ?></h3>
								</div>
								<?php
								$categories = get_the_terms(get_the_ID(), 'case_category');
								if ($categories && !is_wp_error($categories)) :
								?>
									<div class="case-card__tags">
										<?php foreach ($categories as $category) : ?>
											<span class="case-card__tag"><?php echo esc_html($category->name); ?></span>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>
							</div>
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
			<p class="case-list__no-posts">導入事例はまだありません。</p>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
