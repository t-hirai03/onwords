<?php
/**
 * Template for displaying single column posts
 *
 * @package Onwords
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Breadcrumb Navigation -->
<div class="breadcrumb">
	<div class="breadcrumb__container">
		<a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumb__link breadcrumb__home">
			<i class="material-icons">home</i>
		</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<a href="<?php echo esc_url(home_url('/knowledge/')); ?>" class="breadcrumb__link">ナレッジ</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<a href="<?php echo esc_url(get_post_type_archive_link('column')); ?>" class="breadcrumb__link">コラム</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<span class="breadcrumb__current"><?php echo esc_html(get_the_title()); ?></span>
	</div>
</div>

<main class="main">
	<!-- Hero Section -->
	<div class="archive-hero-wrapper">
		<section class="archive-hero" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/knowledge/hero-knowledge.webp');">
			<div class="archive-hero__overlay"></div>
			<div class="archive-hero__container">
				<p class="archive-hero__label">Column</p>
				<h1 class="archive-hero__title">コラム</h1>
			</div>
		</section>
	</div>

	<div>
		<div class="news-single">
			<div class="news-single__container">
				<header class="news-single__header">
					<h2 class="news-single__title"><?php the_title(); ?></h2>
					<div class="news-single__meta">
						<?php
						$tags = get_the_terms( get_the_ID(), 'knowledge_tag' );
						if ( $tags && ! is_wp_error( $tags ) ) :
							$tag = $tags[0];
						?>
							<a href="<?php echo esc_url( get_term_link( $tag ) ); ?>" class="news-single__category">
								<?php echo esc_html( $tag->name ); ?>
							</a>
						<?php endif; ?>
						<p class="news-single__date"><?php echo esc_html( get_the_date( 'Y/m/d' ) ); ?></p>
					</div>
				</header>

				<article class="news-single__content">
					<?php the_content(); ?>
				</article>
			</div>

			<div style="text-align: center; margin-top: 48px;">
				<a href="<?php echo esc_url( get_post_type_archive_link( 'column' ) ); ?>" class="btn-primary">コラム一覧へ</a>
			</div>
		</div>
	</div>
</main>

<?php endwhile; else : ?>
	<p>記事が見つかりませんでした。</p>
<?php endif; ?>

<?php get_footer(); ?>
