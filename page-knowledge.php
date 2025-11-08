<?php
/**
 * Template Name: Knowledge
 * Template for displaying knowledge hub page
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
		<span class="breadcrumb__current">ナレッジ</span>
	</div>
</div>

<main class="main">
	<!-- Hero Section -->
	<div class="archive-hero-wrapper">
		<section class="archive-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/knowledge/hero-knowledge.webp');">
			<div class="archive-hero__overlay"></div>
			<div class="archive-hero__container">
				<p class="archive-hero__label">Knowledge</p>
				<h1 class="archive-hero__title">ナレッジ</h1>
			</div>
		</section>
	</div>

	<!-- Page Navigation -->
	<nav class="knowledge-nav">
		<div class="knowledge-nav__container">
			<a href="#columns" class="knowledge-nav__link">コラム</a>
			<a href="#webinar" class="knowledge-nav__link">ウェビナー情報</a>
			<a href="#documents" class="knowledge-nav__link">お役立ち資料</a>
		</div>
	</nav>

	<!-- Columns Section -->
	<section id="columns" class="knowledge-section">
		<div class="knowledge-section__container">
			<div class="section-header">
				<p class="section-header__label">COLUMNS</p>
				<h2 class="section-header__title">コラム</h2>
			</div>

			<div class="archive-list__container">
				<?php
				$column_query = new WP_Query(array(
					'post_type' => 'column',
					'posts_per_page' => 2,
				));

				if ($column_query->have_posts()) :
				?>
					<ul class="archive-list__items">
						<?php while ($column_query->have_posts()) : $column_query->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>" class="news-item">
									<div class="news-item__meta">
										<p class="news-item__date"><?php echo get_the_date('Y/m/d'); ?></p>
										<?php
										$terms = wp_get_post_terms(get_the_ID(), 'knowledge_tag');
										if (!empty($terms) && !is_wp_error($terms)) :
										?>
											<p class="news-item__category"><?php echo esc_html($terms[0]->name); ?></p>
										<?php endif; ?>
									</div>
									<h3 class="news-item__title"><?php the_title(); ?></h3>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php
					wp_reset_postdata();
				else :
				?>
					<p class="archive-list__no-posts">現在、コラムはありません。</p>
				<?php
				endif;
				?>
			</div>

			<div style="text-align: center; margin-top: 48px;">
				<a href="<?php echo esc_url(get_post_type_archive_link('column')); ?>" class="btn-primary">もっと見る</a>
			</div>
		</div>
	</section>

	<!-- Webinar Section -->
	<section id="webinar" class="knowledge-section knowledge-section--gray">
		<div class="knowledge-section__container">
			<div class="section-header">
				<p class="section-header__label">WEBINAR</p>
				<h2 class="section-header__title">ウェビナー情報</h2>
			</div>

			<div class="archive-list__container">
				<?php
				$webinar_query = new WP_Query(array(
					'post_type' => 'webinar',
					'posts_per_page' => 2,
				));

				if ($webinar_query->have_posts()) :
				?>
					<ul class="archive-list__items">
						<?php while ($webinar_query->have_posts()) : $webinar_query->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>" class="news-item">
									<div class="news-item__meta">
										<p class="news-item__date"><?php echo get_the_date('Y/m/d'); ?></p>
										<?php
										$terms = wp_get_post_terms(get_the_ID(), 'knowledge_tag');
										if (!empty($terms) && !is_wp_error($terms)) :
										?>
											<p class="news-item__category"><?php echo esc_html($terms[0]->name); ?></p>
										<?php endif; ?>
									</div>
									<h3 class="news-item__title"><?php the_title(); ?></h3>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php
					wp_reset_postdata();
				else :
				?>
					<p class="archive-list__no-posts">現在、ウェビナー情報はありません。</p>
				<?php
				endif;
				?>
			</div>

			<div style="text-align: center; margin-top: 48px;">
				<a href="<?php echo esc_url(get_post_type_archive_link('webinar')); ?>" class="btn-primary">もっと見る</a>
			</div>
		</div>
	</section>

	<!-- Documents Section -->
	<section id="documents" class="knowledge-section">
		<div class="knowledge-section__container">
			<div class="section-header">
				<p class="section-header__label">DOCUMENTS</p>
				<h2 class="section-header__title">お役立ち資料</h2>
			</div>

			<div class="archive-list__container">
				<?php
				$document_query = new WP_Query(array(
					'post_type' => 'document',
					'posts_per_page' => 3,
				));

				if ($document_query->have_posts()) :
				?>
					<ul class="archive-list__items">
						<?php while ($document_query->have_posts()) : $document_query->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>" class="news-item">
									<div class="news-item__meta">
										<p class="news-item__date"><?php echo get_the_date('Y/m/d'); ?></p>
										<?php
										$terms = wp_get_post_terms(get_the_ID(), 'knowledge_tag');
										if (!empty($terms) && !is_wp_error($terms)) :
										?>
											<p class="news-item__category"><?php echo esc_html($terms[0]->name); ?></p>
										<?php endif; ?>
									</div>
									<h3 class="news-item__title"><?php the_title(); ?></h3>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php
					wp_reset_postdata();
				else :
				?>
					<p class="archive-list__no-posts">現在、お役立ち資料はありません。</p>
				<?php
				endif;
				?>
			</div>

			<div style="text-align: center; margin-top: 48px;">
				<a href="<?php echo esc_url(get_post_type_archive_link('document')); ?>" class="btn-primary">もっと見る</a>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
