<?php
/**
 * News Item Component
 *
 * Displays a single news item with date, category badge, and title.
 * Used in news archive and other news listings.
 *
 * @package Onwords
 */

// カスタムタクソノミー news_category を取得
$terms = get_the_terms(get_the_ID(), 'news_category');
$category_name = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : 'お知らせ';
?>

<li class="news__item">
	<a href="<?php echo esc_url(get_permalink()); ?>" class="news-item">
		<div class="news-item__meta">
			<p class="news-item__date"><?php echo esc_html(get_the_date('Y/m/d')); ?></p>
			<p class="news-item__category"><?php echo esc_html($category_name); ?></p>
		</div>
		<h3 class="news-item__title"><?php echo esc_html(get_the_title()); ?></h3>
	</a>
</li>
