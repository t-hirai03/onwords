<?php
/**
 * Front Page Template
 *
 * Template for the homepage (static front page).
 * Displays hero, about, message, business, news, and inquiry sections.
 *
 * @package Onwords
 */

get_header();
?>

<main class="main">
	<?php
	// Hero Section
	get_template_part('template-parts/sections/hero');

	// About Section
	get_template_part('template-parts/sections/about');

	// Message Section
	get_template_part('template-parts/sections/message');

	// Business Section
	get_template_part('template-parts/sections/business');

	// News Section
	get_template_part('template-parts/sections/news');

	// Inquiry Section
	get_template_part('template-parts/sections/inquiry');
	?>
</main>

<?php get_footer(); ?>
