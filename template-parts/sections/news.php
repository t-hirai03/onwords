<!-- News Section -->
<section class="news">
  <div class="news__container">
    <p class="news__label">NEWS</p>
    <h2 class="news__heading">お知らせ</h2>

    <ul class="news__list">
      <?php
      $news_query = new WP_Query(array(
        'post_type' => 'post', // Changed from 'news' to 'post'
        'posts_per_page' => 2,
        'orderby' => 'date',
        'order' => 'DESC'
      ));

      if ($news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post();
          $categories = get_the_category();
          $category_name = !empty($categories) ? $categories[0]->name : 'お知らせ';
      ?>
        <li class="news__item">
          <a href="<?php echo get_permalink(); ?>" class="news-item">
            <div class="news-item__meta">
              <p class="news-item__date"><?php echo get_the_date('Y/m/d'); ?></p>
              <p class="news-item__category"><?php echo esc_html($category_name); ?></p>
            </div>
            <h3 class="news-item__title"><?php echo get_the_title(); ?></h3>
          </a>
        </li>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
      ?>
        <p class="news__no-posts">現在お知らせはありません。</p>
      <?php endif; ?>
    </ul>

    <a href="/news" class="news__view-all">すべてのお知らせを見る</a>
  </div>
</section>
