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
	<!-- Hero Section -->
	<div class="archive-hero-wrapper">
		<section class="archive-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/knowledge/hero-webinar.webp');">
			<div class="archive-hero__overlay"></div>
			<div class="archive-hero__container">
				<p class="archive-hero__label">WEBINAR</p>
				<h1 class="archive-hero__title">ウェビナー情報</h1>
			</div>
		</section>
	</div>

	<!-- Upcoming Webinars -->
	<section class="webinar-upcoming">
		<div class="webinar-section__container">
			<div class="section-header">
				<p class="section-header__label">WEBINAR</p>
				<h2 class="section-header__title">開催予定のウェビナー</h2>
			</div>

			<div class="archive-list__container">
				<?php
				// 開催予定のウェビナーを取得
				$upcoming_query = new WP_Query(array(
					'post_type' => 'webinar',
					'posts_per_page' => -1,
					'tax_query' => array(
						array(
							'taxonomy' => 'webinar_status',
							'field' => 'slug',
							'terms' => 'upcoming', // 「これから開催」のスラッグ
						),
					),
				));

				if ($upcoming_query->have_posts()) :
				?>
					<ul class="archive-list__items">
						<?php while ($upcoming_query->have_posts()) : $upcoming_query->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>" class="news-item">
									<div class="news-item__meta">
										<p class="news-item__date"><?php echo get_the_date('Y/m/d'); ?></p>
										<?php
										$targets = get_the_terms(get_the_ID(), 'webinar_target');
										if ($targets && !is_wp_error($targets)) :
											foreach ($targets as $target) :
										?>
												<p class="news-item__category"><?php echo esc_html($target->name); ?></p>
										<?php
											endforeach;
										endif;

										$statuses = get_the_terms(get_the_ID(), 'webinar_status');
										if ($statuses && !is_wp_error($statuses)) :
											foreach ($statuses as $status) :
										?>
												<p class="news-item__status"><?php echo esc_html($status->name); ?></p>
										<?php
											endforeach;
										endif;
										?>
									</div>
									<h3 class="news-item__title"><?php the_title(); ?></h3>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php
					wp_reset_postdata();
				else :
				?>
					<p class="archive-list__no-posts">現在、開催予定のウェビナーはありません。</p>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- Past Webinars -->
	<section class="webinar-past">
		<div class="webinar-section__container">
			<div class="section-header">
				<p class="section-header__label">WEBINAR</p>
				<h2 class="section-header__title">過去のウェビナー</h2>
			</div>

			<div class="archive-list__container">
				<?php
				// 過去のウェビナーを取得
				$past_query = new WP_Query(array(
					'post_type' => 'webinar',
					'posts_per_page' => -1,
					'tax_query' => array(
						array(
							'taxonomy' => 'webinar_status',
							'field' => 'slug',
							'terms' => 'ended', // 「終了」のスラッグ
						),
					),
				));

				if ($past_query->have_posts()) :
				?>
					<ul class="archive-list__items">
						<?php while ($past_query->have_posts()) : $past_query->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>" class="news-item">
									<div class="news-item__meta">
										<p class="news-item__date"><?php echo get_the_date('Y/m/d'); ?></p>
										<?php
										$targets = get_the_terms(get_the_ID(), 'webinar_target');
										if ($targets && !is_wp_error($targets)) :
											foreach ($targets as $target) :
										?>
												<p class="news-item__category"><?php echo esc_html($target->name); ?></p>
										<?php
											endforeach;
										endif;

										$statuses = get_the_terms(get_the_ID(), 'webinar_status');
										if ($statuses && !is_wp_error($statuses)) :
											foreach ($statuses as $status) :
										?>
												<p class="news-item__status"><?php echo esc_html($status->name); ?></p>
										<?php
											endforeach;
										endif;
										?>
									</div>
									<h3 class="news-item__title"><?php the_title(); ?></h3>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php
					wp_reset_postdata();
				else :
				?>
					<p class="archive-list__no-posts">現在、過去のウェビナーはありません。</p>
				<?php endif; ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
