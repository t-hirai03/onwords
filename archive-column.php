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
	<!-- Columns Section -->
	<section class="columns-section">
		<div class="columns-header">
			<p class="columns-label">COLUMNS</p>
			<h1 class="columns-title">記事一覧</h1>
		</div>

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
								$terms = get_the_terms(get_the_ID(), 'column_category');
								if ($terms && !is_wp_error($terms)) :
								?>
									<div class="columns-card__tag-container">
										<ul class="columns-card__tag-list">
											<?php foreach ($terms as $term) : ?>
												<li class="columns-card__tag-item">
													<p class="columns-card__tag-text"><?php echo esc_html($term->name); ?></p>
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
		<?php else : ?>
			<p class="archive-list__no-posts">現在、記事はありません。</p>
		<?php endif; ?>
	</section>
</main>

<?php get_footer(); ?>
