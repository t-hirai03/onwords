<?php
/**
 * Archive Hero Component
 *
 * Reusable hero section for archive pages (News, Case, Knowledge, etc.)
 *
 * @package Onwords
 *
 * @param array $args {
 *     Optional. Array of arguments for the hero section.
 *
 *     @type string $background_image Background image URL. Default empty.
 *     @type string $label            English label text. Default empty.
 *     @type string $title            Japanese title text. Default empty.
 * }
 */

// Get arguments passed from get_template_part()
$args = wp_parse_args(
	$args ?? array(),
	array(
		'background_image' => '',
		'label'            => '',
		'title'            => '',
	)
);

$background_image = $args['background_image'];
$label            = $args['label'];
$title            = $args['title'];
?>

<!-- Archive Hero Section -->
<div class="archive-hero-wrapper">
	<section class="archive-hero" style="background-image: url('<?php echo esc_url( $background_image ); ?>');">
		<div class="archive-hero__overlay"></div>
		<div class="archive-hero__container">
			<p class="archive-hero__label"><?php echo esc_html( $label ); ?></p>
			<h1 class="archive-hero__title"><?php echo esc_html( $title ); ?></h1>
		</div>
	</section>
</div>
