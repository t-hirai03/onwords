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
	<!-- Upcoming Webinars -->
	<section class="webinar-upcoming">
		<div class="webinar-header">
			<p class="webinar-label">WEBINAR</p>
			<h2 class="webinar-title">開催予定のウェビナー</h2>
		</div>

		<?php
		// 開催予定のウェビナーを取得（「終了」以外のもの）
		$upcoming_query = new WP_Query(array(
			'post_type' => 'webinar',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
					'taxonomy' => 'webinar_status',
					'field' => 'slug',
					'terms' => 'closed', // 「終了」のスラッグ
					'operator' => 'NOT IN', // 「終了」以外
				),
			),
		));

		if ($upcoming_query->have_posts()) :
		?>
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

	<!-- Past Webinars -->
	<section class="webinar-past">
		<div class="webinar-header">
			<p class="webinar-label">WEBINAR</p>
			<h2 class="webinar-title">過去のウェビナー</h2>
		</div>

		<?php
		// 過去のウェビナーを取得（「終了」が設定されているもの）
		$past_query = new WP_Query(array(
			'post_type' => 'webinar',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
					'taxonomy' => 'webinar_status',
					'field' => 'slug',
					'terms' => 'closed', // 「終了」のスラッグ
				),
			),
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
			wp_reset_postdata();
		else :
		?>
			<p class="archive-list__no-posts">現在、過去のウェビナーはありません。</p>
		<?php endif; ?>
	</section>
</main>

<?php get_footer(); ?>
