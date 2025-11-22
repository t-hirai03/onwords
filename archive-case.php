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
	<?php
	// Hero Section
	get_template_part(
		'template-parts/components/archive-hero',
		null,
		array(
			'background_image' => get_template_directory_uri() . '/assets/images/case/hero-case.webp',
			'label'            => 'Case',
			'title'            => '導入事例',
		)
	);
	?>

	<!-- Filter Section -->
	<div class="archive-filter">
		<div class="archive-filter__container">
			<nav class="archive-filter__nav">
				<?php
				// 現在のカテゴリーを取得
				$current_category = isset($_GET['case_category']) ? sanitize_text_field($_GET['case_category']) : '';

				// 「すべて」ボタン
				$all_active = empty($current_category) ? 'archive-filter__button--active' : '';
				?>
				<a href="<?php echo esc_url(home_url('/case/')); ?>"
				   class="archive-filter__button <?php echo esc_attr($all_active); ?>">
					すべて
				</a>

				<?php
				$categories = get_terms(array(
					'taxonomy' => 'case_category',
					'hide_empty' => false,
				));

				if (!empty($categories) && !is_wp_error($categories)) :
					foreach ($categories as $category) :
						$is_active = ($current_category === $category->slug) ? 'archive-filter__button--active' : '';
				?>
					<a href="<?php echo esc_url(home_url('/case/?case_category=' . $category->slug)); ?>"
					   class="archive-filter__button <?php echo esc_attr($is_active); ?>">
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

			<?php
			// ページネーション
			$add_args = array();
			if (isset($_GET['case_category'])) {
				$add_args['case_category'] = sanitize_text_field($_GET['case_category']);
			}

			$pagination = paginate_links(array(
				'prev_text' => '前へ',
				'next_text' => '次へ',
				'type' => 'array',
				'add_args' => $add_args,
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
			<p class="case-list__no-posts">導入事例はまだありません。</p>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
