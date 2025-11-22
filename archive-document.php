<?php
/**
 * Template for displaying document archive
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
		<span class="breadcrumb__current">お役立ち資料</span>
	</div>
</div>

<main class="main">
	<!-- Documents Section -->
	<section class="documents-section">
		<div class="documents-header">
			<p class="documents-label">DOCUMENTS</p>
			<h1 class="documents-title">お役立ち資料</h1>
		</div>

		<div class="documents-list__container">
			<?php
			// メインクエリを使用（functions.phpのpre_get_postsで投稿数を制御）
			if (have_posts()) :
			?>
				<div class="documents-list">
					<div class="documents-list__items">
						<?php while (have_posts()) : the_post(); ?>
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
				// ページネーション
				$pagination = paginate_links(array(
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
			else :
			?>
				<p class="archive-list__no-posts">現在、お役立ち資料はありません。</p>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
