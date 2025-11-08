<?php
/**
 * Column Archive Template
 *
 * Template for displaying the column archive page.
 *
 * @package Onwords
 */

get_header();

$current_tag = get_queried_object();
$is_tag_archive = is_tax('knowledge_tag');
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
		<a href="<?php echo esc_url(home_url('/knowledge/')); ?>" class="breadcrumb__link">ナレッジ</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<span class="breadcrumb__current">コラム</span>
	</div>
</div>

<main class="main">
	<!-- Hero Section -->
	<div class="archive-hero-wrapper">
		<section class="archive-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/knowledge/hero-knowledge.webp');">
			<div class="archive-hero__overlay"></div>
			<div class="archive-hero__container">
				<p class="archive-hero__label">Column</p>
				<h1 class="archive-hero__title">コラム</h1>
			</div>
		</section>
	</div>

	<!-- Filter Section -->
	<div class="archive-filter">
		<div class="archive-filter__container">
			<nav class="archive-filter__nav">
				<a href="<?php echo get_post_type_archive_link('column'); ?>"
				   class="archive-filter__button <?php echo !$is_tag_archive ? 'archive-filter__button--active' : ''; ?>">
					すべて
				</a>
				<?php
				$tags = get_terms(array(
					'taxonomy' => 'knowledge_tag',
					'hide_empty' => false,
				));

				if (!empty($tags) && !is_wp_error($tags)) :
					foreach ($tags as $tag) :
						$is_active = $is_tag_archive && $current_tag->term_id === $tag->term_id;
				?>
					<a href="<?php echo get_term_link($tag); ?>"
					   class="archive-filter__button <?php echo $is_active ? 'archive-filter__button--active' : ''; ?>">
						<?php echo esc_html($tag->name); ?>
					</a>
				<?php
					endforeach;
				endif;
				?>
			</nav>
		</div>
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
								$terms = wp_get_post_terms(get_the_ID(), 'knowledge_tag');
								if (!empty($terms) && !is_wp_error($terms)) :
								?>
									<p class="news-item__category"><?php echo esc_html($terms[0]->name); ?></p>
								<?php endif; ?>
							</div>
							<h3 class="news-item__title"><?php the_title(); ?></h3>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>

			<!-- Pagination -->
			<div class="pagination">
				<?php
				echo paginate_links(array(
					'prev_text' => '<i class="material-icons">keyboard_arrow_left</i>',
					'next_text' => '<i class="material-icons">keyboard_arrow_right</i>',
					'type' => 'list',
				));
				?>
			</div>
		<?php else : ?>
			<p class="archive-list__no-posts">現在、コラムはありません。</p>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
