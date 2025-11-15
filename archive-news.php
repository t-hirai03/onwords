<?php
/**
 * News Archive Template
 *
 * Template for displaying the news archive page.
 * Displays hero section, category filter, and news list with pagination.
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
		<span class="breadcrumb__current">お知らせ</span>
	</div>
</div>

<main class="main">
	<?php
	// Hero Section
	get_template_part(
		'template-parts/components/archive-hero',
		null,
		array(
			'background_image' => get_template_directory_uri() . '/assets/images/news/hero-bg.jpg',
			'label'            => 'News',
			'title'            => 'お知らせ',
		)
	);
	?>

	<div>
		<?php
		// Category Filter Section
		get_template_part('template-parts/sections/news-archive-filter');

		// News List Section
		get_template_part('template-parts/sections/news-archive-list');
		?>
	</div>
</main>

<?php get_footer(); ?>
