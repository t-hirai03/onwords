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
		<div class="filter-item">
			<a href="#webinar" class="filter-text-link">ウェビナー情報</a>
			<a href="#webinar" class="filter-icon-link icon fa-solid fa-angles-down"></a>
		</div>
		<div class="filter-item">
			<a href="#document" class="filter-text-link">お役立ち資料</a>
			<a href="#document" class="filter-icon-link icon fa-solid fa-angles-down"></a>
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
			'post_type' => 'column',
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
		<?php
			wp_reset_postdata();
		endif;
		?>

		<a href="<?php echo esc_url(get_post_type_archive_link('column')); ?>" class="btn-primary">すべての記事を見る</a>
	</section>

	<!-- Webinar Section -->
	<section id="webinar" class="webinar-section">
		<div class="webinar-header">
			<p class="webinar-label">WEBINAR</p>
			<h2 class="webinar-title">ウェビナー情報</h2>
		</div>

		<?php
		$webinar_query = new WP_Query(array(
			'post_type' => 'webinar',
			'posts_per_page' => 3,
			'orderby' => 'date',
			'order' => 'DESC',
		));

		if ($webinar_query->have_posts()) :
		?>
			<div class="webinar-list">
				<div class="webinar-list__items">
					<?php while ($webinar_query->have_posts()) : $webinar_query->the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="webinar-card">
							<?php if (has_post_thumbnail()) : ?>
								<div class="webinar-card__image">
									<?php the_post_thumbnail('large'); ?>
								</div>
							<?php endif; ?>
							<div class="webinar-card__content">
								<div class="webinar-card__header">
									<p class="webinar-card__date"><?php echo get_the_date('Y/n/j'); ?></p>
									<p class="webinar-card__title"><?php the_title(); ?></p>
								</div>
								<?php
								$targets = get_the_terms(get_the_ID(), 'webinar_target');
								$statuses = get_the_terms(get_the_ID(), 'webinar_status');
								$all_tags = array();

								if ($targets && !is_wp_error($targets)) {
									$all_tags = array_merge($all_tags, $targets);
								}
								if ($statuses && !is_wp_error($statuses)) {
									$all_tags = array_merge($all_tags, $statuses);
								}

								if (!empty($all_tags)) :
								?>
									<div class="webinar-card__tag-container">
										<ul class="webinar-card__tag-list">
											<?php foreach ($all_tags as $tag) : ?>
												<li class="webinar-card__tag-item">
													<p class="webinar-card__tag-text"><?php echo esc_html($tag->name); ?></p>
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

		<a href="<?php echo esc_url(get_post_type_archive_link('webinar')); ?>" class="btn-primary">すべてのウェビナーを見る</a>
	</section>

	<!-- Documents Section -->
	<section id="document" class="documents-section">
		<div class="documents-header">
			<p class="documents-label">DOCUMENTS</p>
			<h2 class="documents-title">お役立ち資料</h2>
		</div>

		<?php
		$document_query = new WP_Query(array(
			'post_type' => 'document',
			'posts_per_page' => 3,
			'orderby' => 'date',
			'order' => 'DESC',
		));

		if ($document_query->have_posts()) :
		?>
			<div class="documents-list">
				<div class="documents-list__items">
					<?php while ($document_query->have_posts()) : $document_query->the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="documents-card">
							<?php if (has_post_thumbnail()) : ?>
								<div class="documents-card__image">
									<?php the_post_thumbnail('large'); ?>
								</div>
							<?php endif; ?>
							<div class="documents-card__content">
								<div class="documents-card__header">
									<p class="documents-card__date"><?php echo get_the_date('Y/n/j'); ?></p>
									<p class="documents-card__title"><?php the_title(); ?></p>
								</div>
								<?php
								$terms = get_the_terms(get_the_ID(), 'document_target');
								if ($terms && !is_wp_error($terms)) :
								?>
									<div class="documents-card__tag-container">
										<ul class="documents-card__tag-list">
											<?php foreach ($terms as $term) : ?>
												<li class="documents-card__tag-item">
													<p class="documents-card__tag-text"><?php echo esc_html($term->name); ?></p>
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

		<a href="<?php echo esc_url(get_post_type_archive_link('document')); ?>" class="btn-primary">すべての資料を見る</a>
	</section>
</main>

<?php get_footer(); ?>
