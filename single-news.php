<?php
/**
 * Template for displaying single news posts
 *
 * @package Onwords
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- パンくずリスト -->
<nav class="breadcrumb" aria-label="パンくずリスト">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">home</a>
	<span class="breadcrumb__separator material-icons">keyboard_arrow_right</span>
	<a href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>">お知らせ</a>
	<span class="breadcrumb__separator material-icons">keyboard_arrow_right</span>
	<p><?php echo esc_html( get_the_title() ); ?></p>
</nav>

<!-- メインコンテンツ -->
<main class="news-single">
	<div class="news-single__container">

		<!-- 記事ヘッダー -->
		<header class="news-single__header">
			<h1 class="news-single__title"><?php the_title(); ?></h1>

			<div class="news-single__meta">
				<?php
				$categories = get_the_terms( get_the_ID(), 'news_category' );
				if ( $categories && ! is_wp_error( $categories ) ) :
					$category = $categories[0];
				?>
					<a href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="news-single__category">
						<?php echo esc_html( $category->name ); ?>
					</a>
				<?php endif; ?>

				<p class="news-single__date"><?php echo esc_html( get_the_date( 'Y/m/d' ) ); ?></p>
			</div>
		</header>

		<!-- 記事本文 -->
		<article class="news-single__content">
			<?php the_content(); ?>
		</article>

	</div>

	<!-- お知らせ一覧へリンク -->
	<a href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>" class="news-single__back-link">
		<p>お知らせ一覧へ</p>
	</a>
</main>

<?php endwhile; else : ?>
	<p>記事が見つかりませんでした。</p>
<?php endif; ?>

<?php get_footer(); ?>
