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
		<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
			<header class="single-post__header">
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
				<h1 class="single-post__title"><?php the_title(); ?></h1>
			</header>

			<div class="single-post__content">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
