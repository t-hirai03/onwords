<?php
/**
 * 404 Error Page Template
 *
 * Displayed when a page is not found.
 *
 * @package Onwords
 */

get_header();
?>

<main class="main">
	<section class="error-page">
		<div class="error-page__container">
			<h1 class="error-page__code">404</h1>
			<p class="error-page__title">ページが見つかりませんでした</p>
			<p class="error-page__message">お探しのページは存在しないか、移動した可能性があります。</p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary">トップページへ戻る</a>
		</div>
	</section>
</main>

<?php get_footer(); ?>
