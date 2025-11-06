<!-- News Archive List Section -->
<div class="news-archive-list__container">
		<?php
		// ページ番号を取得
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

		// クエリを設定（通常のWordPress投稿を使用）
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 10,
			'orderby' => 'date',
			'order' => 'DESC',
			'paged' => $paged,
		);

		// カテゴリーでフィルタリング（URLパラメータから）
		$category_slug = get_query_var('category_name');
		if (!empty($category_slug)) {
			$args['category_name'] = $category_slug;
		}

		$news_query = new WP_Query($args);

		if ($news_query->have_posts()) :
		?>
			<ul class="news-archive-list__items">
				<?php
				while ($news_query->have_posts()) : $news_query->the_post();
					// ニュース項目コンポーネントを読み込み
					get_template_part('template-parts/components/news-item');
				endwhile;
				?>
			</ul>

			<?php
			// ページネーション
			$pagination = paginate_links(array(
				'total' => $news_query->max_num_pages,
				'current' => $paged,
				'prev_text' => '前へ',
				'next_text' => '次へ',
				'type' => 'array',
			));

			if ($pagination) :
			?>
				<nav class="news-archive-list__pagination">
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
			<p class="news-archive-list__no-posts">お知らせはありません</p>
		<?php endif; ?>
</div>
