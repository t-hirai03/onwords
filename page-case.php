<?php
/**
 * Template Name: Case Page
 * Template Post Type: page
 *
 * Template for displaying the case studies archive page.
 * Displays hero section, category filter, and case studies list with pagination.
 *
 * @package Onwords
 */

get_header();

// Get all case posts
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
	'post_type'      => 'case',
	'posts_per_page' => 12,
	'paged'          => $paged,
	'orderby'        => 'date',
	'order'          => 'DESC',
);

// If category filter is set
if ( isset( $_GET['case_category'] ) && ! empty( $_GET['case_category'] ) ) {
	$args['tax_query'] = array(
		array(
			'taxonomy' => 'case_category',
			'field'    => 'slug',
			'terms'    => sanitize_text_field( $_GET['case_category'] ),
		),
	);
}

$case_query = new WP_Query( $args );

// Check if filtering by category
$current_category_slug = isset( $_GET['case_category'] ) ? sanitize_text_field( $_GET['case_category'] ) : '';
?>

<!-- Breadcrumb Navigation -->
<div class="breadcrumb">
	<div class="breadcrumb__container">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb__link breadcrumb__home">
			<i class="material-icons">home</i>
		</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<span class="breadcrumb__current">導入事例</span>
	</div>
</div>

<main class="main">
	<!-- Hero Section -->
	<div class="archive-hero-wrapper">
		<section class="archive-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/case/hero-case.webp');">
			<div class="archive-hero__overlay"></div>
			<div class="archive-hero__container">
				<p class="archive-hero__label">Case</p>
				<h1 class="archive-hero__title">導入事例</h1>
			</div>
		</section>
	</div>

	<!-- Filter Section -->
	<div class="archive-filter">
		<div class="archive-filter__container">
			<nav class="archive-filter__nav">
				<a href="<?php echo get_permalink( get_page_by_path( 'case' ) ); ?>"
				   class="archive-filter__button <?php echo empty( $current_category_slug ) ? 'archive-filter__button--active' : ''; ?>">
					すべて
				</a>
				<?php
				$categories = get_terms(
					array(
						'taxonomy'   => 'case_category',
						'hide_empty' => false,
					)
				);

				if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) :
					foreach ( $categories as $category ) :
						$is_active = $current_category_slug === $category->slug;
						?>
					<a href="<?php echo add_query_arg( 'case_category', $category->slug, get_permalink( get_page_by_path( 'case' ) ) ); ?>"
					   class="archive-filter__button <?php echo $is_active ? 'archive-filter__button--active' : ''; ?>">
						<?php echo esc_html( $category->name ); ?>
					</a>
						<?php
					endforeach;
				endif;
				?>
			</nav>
		</div>
	</div>

	<!-- Case List -->
	<div class="case-list__container">
		<?php if ( $case_query->have_posts() ) : ?>
			<ul class="case-list__items">
				<?php
				while ( $case_query->have_posts() ) :
					$case_query->the_post();
					?>
					<li class="case-list__item">
						<a href="<?php the_permalink(); ?>" class="case-card">
							<div class="case-card__image">
								<?php
								if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'large' );
								} else {
									echo '<img src="' . get_template_directory_uri() . '/assets/images/common/placeholder.jpg" alt="">';
								}
								?>
							</div>
							<div class="case-card__content">
								<div class="case-card__text">
									<?php
									$client_name = function_exists( 'get_field' ) ? get_field( 'client_name' ) : get_post_meta( get_the_ID(), 'client_name', true );
									if ( $client_name ) :
										?>
										<p class="case-card__company"><?php echo esc_html( $client_name ); ?></p>
									<?php endif; ?>
									<p class="case-card__title"><?php the_title(); ?></p>
								</div>
								<div class="case-card__tags">
									<?php
									$categories = get_the_terms( get_the_ID(), 'case_category' );
									if ( $categories && ! is_wp_error( $categories ) ) :
										?>
										<span class="case-card__tag"><?php echo esc_html( $categories[0]->name ); ?></span>
									<?php endif; ?>
								</div>
							</div>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>

			<!-- Pagination -->
			<?php
			echo paginate_links(
				array(
					'total'     => $case_query->max_num_pages,
					'current'   => $paged,
					'mid_size'  => 2,
					'prev_text' => '<i class="material-icons">keyboard_arrow_left</i>',
					'next_text' => '<i class="material-icons">keyboard_arrow_right</i>',
					'type'      => 'list',
				)
			);
			?>
		<?php else : ?>
			<p class="case-list__no-posts">導入事例はまだありません。</p>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</main>

<?php get_footer(); ?>
