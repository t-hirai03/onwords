<!-- Archive List Section -->
<div class="archive-list__container">
	<?php if (have_posts()) : ?>
		<ul class="archive-list__items">
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('template-parts/components/news-item'); ?>
			<?php endwhile; ?>
		</ul>

		<?php
		// ページネーション
		$add_args = array();
		if (isset($_GET['news_category'])) {
			$add_args['news_category'] = sanitize_text_field($_GET['news_category']);
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
		<p class="archive-list__no-posts">お知らせはありません</p>
	<?php endif; ?>
</div>
