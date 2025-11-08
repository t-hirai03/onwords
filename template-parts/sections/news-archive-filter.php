<!-- News Archive Filter Section -->
<div class="news-archive-filter">
	<div class="news-archive-filter__container">
		<nav class="news-archive-filter__nav">
			<?php
			// 現在のカテゴリーを取得
			$current_category = isset($_GET['news_category']) ? sanitize_text_field($_GET['news_category']) : '';

			// 「すべて」ボタン
			$all_active = empty($current_category) ? 'news-archive-filter__button--active' : '';
			?>
			<a href="<?php echo esc_url(home_url('/news/')); ?>"
			   class="news-archive-filter__button <?php echo esc_attr($all_active); ?>">
				すべて
			</a>

			<?php
			// カスタムタクソノミー news_category を取得
			$categories = get_terms(array(
				'taxonomy' => 'news_category',
				'orderby' => 'name',
				'order' => 'ASC',
				'hide_empty' => false
			));

			if (!empty($categories) && !is_wp_error($categories)) :
				foreach ($categories as $category) :
					$is_active = ($current_category === $category->slug) ? 'news-archive-filter__button--active' : '';
					?>
					<a href="<?php echo esc_url(home_url('/news/?news_category=' . $category->slug)); ?>"
					   class="news-archive-filter__button <?php echo esc_attr($is_active); ?>">
						<?php echo esc_html($category->name); ?>
					</a>
				<?php endforeach;
			endif; ?>
		</nav>
	</div>
</div>
