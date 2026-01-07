<?php
/**
 * Template for displaying category archive (コラム カテゴリ別)
 *
 * @package Onwords
 */

get_header();
$current_category = get_queried_object();
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
		<a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="breadcrumb__link">コラム</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<span class="breadcrumb__current"><?php echo esc_html($current_category->name); ?></span>
	</div>
</div>

<main class="main">
	<!-- Columns Section -->
	<section class="columns-section">
		<div class="columns-header">
			<p class="columns-label">COLUMNS</p>
			<h1 class="columns-title"><?php echo esc_html($current_category->name); ?></h1>
		</div>

		<div class="columns-list__container">
			<?php if (have_posts()) : ?>
				<div class="columns-list">
					<div class="columns-list__items">
						<?php while (have_posts()) : the_post(); ?>
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
				// ページネーション
				$pagination = paginate_links(array(
					'prev_text' => '前へ',
					'next_text' => '次へ',
					'type' => 'array',
				));

				if ($pagination) :
				?>
					<nav class="pagination-wrapper">
						<ul class="pagination">
							<?php foreach ($pagination as $page) : ?>
								<li class="pagination__item"><?php echo $page; ?></li>
							<?php endforeach; ?>
						</ul>
					</nav>
				<?php
				endif;
			else :
			?>
				<p class="archive-list__no-posts">現在、記事はありません。</p>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
