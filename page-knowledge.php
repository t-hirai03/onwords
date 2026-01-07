<?php
/**
 * Template Name: Knowledge
 * Template for displaying knowledge hub page
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
		<span class="breadcrumb__current">ナレッジ</span>
	</div>
</div>

<main class="main">
	<!-- Hero Section -->
	<div class="knowledge-hero">
		<p class="knowledge-hero__label">Knowledge</p>
		<h1 class="knowledge-hero__title">ナレッジ</h1>
	</div>

	<!-- Filter Section -->
	<div class="filter-container">
		<div class="filter-item">
			<a href="#columns" class="filter-text-link">記事一覧</a>
			<a href="#columns" class="filter-icon-link icon fa-solid fa-angles-down"></a>
		</div>
	</div>

	<!-- Columns Section -->
	<section id="columns" class="columns-section">
		<div class="columns-header">
			<p class="columns-label">COLUMNS</p>
			<h2 class="columns-title">記事一覧</h2>
		</div>

		<?php
		$column_query = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => 3,
			'orderby' => 'date',
			'order' => 'DESC',
		));

		if ($column_query->have_posts()) :
		?>
			<div class="columns-list">
				<div class="columns-list__items">
					<?php while ($column_query->have_posts()) : $column_query->the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="columns-card">
							<?php if (has_post_thumbnail()) : ?>
								<div class="columns-card__image">
									<?php the_post_thumbnail('large'); ?>
								</div>
							<?php endif; ?>
							<div class="columns-card__content">
								<div class="columns-card__header">
									<p class="columns-card__date"><?php echo get_the_date('Y/n/j'); ?></p>
									<p class="columns-card__title"><?php the_title(); ?></p>
								</div>
								<?php
								$categories = get_the_category();
								if ($categories && !is_wp_error($categories)) :
								?>
									<div class="columns-card__tag-container">
										<ul class="columns-card__tag-list">
											<?php foreach ($categories as $category) : ?>
												<li class="columns-card__tag-item">
													<p class="columns-card__tag-text"><?php echo esc_html($category->name); ?></p>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								<?php endif; ?>
							</div>
						</a>
					<?php endwhile; ?>
				</div>
			</div>
		<?php
			wp_reset_postdata();
		endif;
		?>

		<a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn-primary">すべての記事を見る</a>
	</section>
</main>

<?php get_footer(); ?>
