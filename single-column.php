<?php
/**
 * Template for displaying single column post
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
		<a href="<?php echo esc_url(get_post_type_archive_link('column')); ?>" class="breadcrumb__link">記事一覧</a>
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
						$terms = get_the_terms(get_the_ID(), 'column_category');
						if ($terms && !is_wp_error($terms)) :
							foreach ($terms as $term) :
						?>
								<span class="single-post__category"><?php echo esc_html($term->name); ?></span>
						<?php
							endforeach;
						endif;
						?>
					</div>
				</header>

				<!-- アイキャッチ画像 -->
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="single-post__featured-image">
					<?php the_post_thumbnail('full'); ?>
				</div>
				<?php endif; ?>

				<article class="single-post__content">
					<?php the_content(); ?>
				</article>
			</div>
		</div>
	<?php endwhile; ?>

	<?php
	// Pickup記事セクション
	$pickup_query = new WP_Query(array(
		'post_type' => 'column',
		'posts_per_page' => -1,
		'meta_key' => 'is_pickup',
		'meta_value' => '1',
		'orderby' => 'date',
		'order' => 'DESC',
	));

	if ($pickup_query->have_posts()) :
	?>
		<section class="columns-section">
			<div class="columns-header">
				<p class="columns-label">PICKUP</p>
				<h2 class="columns-title">Pickup記事</h2>
			</div>

			<div class="columns-list">
				<div class="columns-list__items">
					<?php while ($pickup_query->have_posts()) : $pickup_query->the_post(); ?>
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
		</section>
	<?php
		wp_reset_postdata();
	endif;
	?>
</main>

<?php get_footer(); ?>
