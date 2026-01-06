<?php
/**
 * Template for displaying single default post (コラム)
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
		<a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="breadcrumb__link">コラム</a>
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
						$categories = get_the_category();
						if ($categories && !is_wp_error($categories)) :
							foreach ($categories as $category) :
						?>
								<span class="single-post__category"><?php echo esc_html($category->name); ?></span>
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
	// 関連記事セクション（同じカテゴリの記事を表示）
	$categories = get_the_category();
	if ($categories) :
		$category_ids = array();
		foreach ($categories as $category) {
			$category_ids[] = $category->term_id;
		}

		$related_query = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => 3,
			'category__in' => $category_ids,
			'post__not_in' => array(get_the_ID()),
			'orderby' => 'date',
			'order' => 'DESC',
		));

		if ($related_query->have_posts()) :
	?>
		<section class="columns-section">
			<div class="columns-header">
				<p class="columns-label">RELATED</p>
				<h2 class="columns-title">関連記事</h2>
			</div>

			<div class="columns-list">
				<div class="columns-list__items">
					<?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
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
								$post_categories = get_the_category();
								if ($post_categories && !is_wp_error($post_categories)) :
								?>
									<div class="columns-card__tag-container">
										<ul class="columns-card__tag-list">
											<?php foreach ($post_categories as $cat) : ?>
												<li class="columns-card__tag-item">
													<p class="columns-card__tag-text"><?php echo esc_html($cat->name); ?></p>
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
		endif;
		wp_reset_postdata();
	endif;
	?>
</main>

<?php get_footer(); ?>
