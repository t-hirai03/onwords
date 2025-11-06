<!-- News Archive Filter Section -->
<div class="news-archive-filter">
	<div class="news-archive-filter__container">
		<nav class="news-archive-filter__nav">
			<?php
			// 現在のカテゴリーを取得
			$current_category = get_query_var('category_name');

			// 「すべて」ボタン
			$all_active = empty($current_category) ? 'news-archive-filter__button--active' : '';
			?>
			<a href="<?php echo esc_url(home_url('/news/')); ?>"
			   class="news-archive-filter__button <?php echo esc_attr($all_active); ?>">
				すべて
			</a>

			<?php
			// 通常のWordPressカテゴリーを取得
			$categories = get_categories(array(
				'orderby' => 'name',
				'order' => 'ASC',
				'hide_empty' => false
			));

			foreach ($categories as $category) :
				$is_active = ($current_category === $category->slug) ? 'news-archive-filter__button--active' : '';
				?>
				<a href="<?php echo esc_url(home_url('/news/?category_name=' . $category->slug)); ?>"
				   class="news-archive-filter__button <?php echo esc_attr($is_active); ?>">
					<?php echo esc_html($category->name); ?>
				</a>
			<?php endforeach; ?>
		</nav>
	</div>
</div>
