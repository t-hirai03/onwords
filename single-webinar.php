<?php
/**
 * Template for displaying single webinar post
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
		<a href="<?php echo esc_url(get_post_type_archive_link('webinar')); ?>" class="breadcrumb__link">ウェビナー情報</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<span class="breadcrumb__current"><?php the_title(); ?></span>
	</div>
</div>

<main class="main">
	<?php while (have_posts()) : the_post(); ?>
		<div class="single-post">
			<div class="single-post__container">
				<header class="single-post__header">
					<h1 class="single-post__title"><?php the_title(); ?></h1>

					<div class="single-post__meta">
						<time class="single-post__date"><?php echo get_the_date('Y/m/d'); ?></time>
						<?php
						$targets = get_the_terms(get_the_ID(), 'webinar_target');
						if ($targets && !is_wp_error($targets)) :
							foreach ($targets as $target) :
						?>
								<span class="single-post__tag"><?php echo esc_html($target->name); ?></span>
						<?php
							endforeach;
						endif;

						$statuses = get_the_terms(get_the_ID(), 'webinar_status');
						if ($statuses && !is_wp_error($statuses)) :
							foreach ($statuses as $status) :
						?>
								<span class="single-post__status"><?php echo esc_html($status->name); ?></span>
						<?php
							endforeach;
						endif;
						?>
					</div>
				</header>

				<?php
				// ステータスを取得して判定
				$statuses = get_the_terms(get_the_ID(), 'webinar_status');
				$is_upcoming = false;
				$is_finished = false;
				if ($statuses && !is_wp_error($statuses)) {
					foreach ($statuses as $status) {
						if ($status->slug === 'upcoming' || $status->name === 'これから開催') {
							$is_upcoming = true;
							break;
						} elseif ($status->slug === 'finished' || $status->name === '終了') {
							$is_finished = true;
							break;
						}
					}
				}
				?>

				<!-- アイキャッチ画像 -->
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="single-post__featured-image">
					<?php the_post_thumbnail('full'); ?>
				</div>
				<?php endif; ?>

				<!-- 終了メッセージ（アイキャッチ画像の下） -->
				<?php if ($is_finished) : ?>
				<h2 class="webinar-finished-message">本ウェビナーは終了いたしました</h2>
				<?php endif; ?>

				<?php
				// 「これから開催」の場合のみ、1つ目のフォームを表示
				if ($is_upcoming) :
				?>
					<div class="webinar-form webinar-form--top">
						<script src="https://js-na2.hsforms.net/forms/embed/243499482.js" defer></script>
						<div class="hs-form-frame" data-region="na2" data-form-id="75cade19-eb3e-42d8-9ae8-92f6fc378078" data-portal-id="243499482"></div>
					</div>
				<?php endif; ?>

				<article class="single-post__content">
					<?php the_content(); ?>
				</article>

				<?php
				// 「これから開催」の場合のみ、2つ目のフォームを表示
				if ($is_upcoming) :
				?>
					<!-- 2つ目のフォーム（本文後） -->
					<div class="webinar-form webinar-form--bottom">
						<script src="https://js-na2.hsforms.net/forms/embed/243499482.js" defer></script>
						<div class="hs-form-frame" data-region="na2" data-form-id="75cade19-eb3e-42d8-9ae8-92f6fc378078" data-portal-id="243499482"></div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
