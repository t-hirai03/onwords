<?php
/**
 * Template for displaying webinar archive
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
		<span class="breadcrumb__current">ウェビナー</span>
	</div>
</div>

<main class="main">
	<?php
	// ページ番号を取得（過去のウェビナー用）
	$past_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	// 現在の日時
	$current_date = current_time('Y-m-d');
	$current_time = current_time('H:i');

	// 全ウェビナーを取得して、PHPで振り分け
	$all_webinars = new WP_Query(array(
		'post_type' => 'webinar',
		'posts_per_page' => -1,
		'post_status' => 'publish',
	));

	$upcoming_posts = array();
	$past_posts = array();

	if ($all_webinars->have_posts()) {
		while ($all_webinars->have_posts()) {
			$all_webinars->the_post();
			$post_id = get_the_ID();

			// onwords_is_webinar_upcoming関数を使用して判定
			if (onwords_is_webinar_upcoming($post_id)) {
				$upcoming_posts[] = $post_id;
			} else {
				$past_posts[] = $post_id;
			}
		}
		wp_reset_postdata();
	}

	// 開催予定のウェビナーを取得
	$upcoming_query = new WP_Query(array(
		'post_type' => 'webinar',
		'posts_per_page' => -1,
		'post__in' => !empty($upcoming_posts) ? $upcoming_posts : array(0),
		'orderby' => 'date',
		'order' => 'ASC',
	));

	// 1ページ目のみ開催予定セクションを表示
	if ($past_paged == 1) :
	?>
		<!-- Upcoming Webinars -->
		<section class="webinar-upcoming">
			<div class="webinar-header">
				<p class="webinar-label">WEBINAR</p>
				<h2 class="webinar-title">開催予定のウェビナー</h2>
			</div>

			<?php if ($upcoming_query->have_posts()) : ?>
				<div class="webinar-list">
					<div class="webinar-list__items">
						<?php while ($upcoming_query->have_posts()) : $upcoming_query->the_post(); ?>
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
			else :
			?>
				<p class="archive-list__no-posts">現在、開催予定のウェビナーはありません。</p>
			<?php endif; ?>
		</section>
	<?php endif; ?>

	<!-- Past Webinars -->
	<section class="webinar-past">
		<div class="webinar-header">
			<p class="webinar-label">WEBINAR</p>
			<h2 class="webinar-title">過去のウェビナー</h2>
		</div>

		<div class="webinar-list__container">
			<?php
			// 過去のウェビナーを取得（上で振り分けた$past_postsを使用）
			$past_query = new WP_Query(array(
				'post_type' => 'webinar',
				'posts_per_page' => 9,
				'paged' => $past_paged,
				'post__in' => !empty($past_posts) ? $past_posts : array(0),
				'orderby' => 'date',
				'order' => 'DESC',
			));

			if ($past_query->have_posts()) :
			?>
				<div class="webinar-list">
					<div class="webinar-list__items">
						<?php while ($past_query->have_posts()) : $past_query->the_post(); ?>
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
				// ページネーション（過去のウェビナー用）
				$pagination = paginate_links(array(
					'base' => get_post_type_archive_link('webinar') . '%_%',
					'format' => 'page/%#%/',
					'current' => $past_paged,
					'total' => $past_query->max_num_pages,
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

				wp_reset_postdata();
			else :
			?>
				<p class="archive-list__no-posts">現在、過去のウェビナーはありません。</p>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
