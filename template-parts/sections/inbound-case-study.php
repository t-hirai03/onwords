<?php
/**
 * Template part for displaying the Inbound Marketing CASE STUDY section
 *
 * @package Onwords
 */

// Query case studies filtered by taxonomy
$case_args = array(
	'post_type'      => 'case',
	'posts_per_page' => 2,
	'tax_query'      => array(
		array(
			'taxonomy' => 'case_category',
			'field'    => 'slug',
			'terms'    => 'inbound-marketing-partner',
		),
	),
);

$case_query = new WP_Query( $case_args );
?>

<section class="inbound-case-study fade-in-up">
	<div class="inbound-case-study__container">
		<div class="inbound-case-study__header fade-in-up">
			<p class="inbound-case-study__label">CASE STUDY</p>
			<h2 class="inbound-case-study__title">導入事例</h2>
		</div>

		<?php if ( $case_query->have_posts() ) : ?>
			<ul class="inbound-case-study__list">
				<?php while ( $case_query->have_posts() ) : $case_query->the_post(); ?>
					<li class="inbound-case-study__item fade-in-up">
						<a href="<?php echo esc_url( get_permalink() ); ?>" class="inbound-case-study__link">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="inbound-case-study__image">
									<?php the_post_thumbnail( 'large', array( 'loading' => 'lazy' ) ); ?>
								</div>
							<?php endif; ?>
							<div class="inbound-case-study__content">
								<h3 class="inbound-case-study__item-title"><?php echo esc_html( get_the_title() ); ?></h3>
								<?php
								$terms = get_the_terms( get_the_ID(), 'case_category' );
								if ( $terms && ! is_wp_error( $terms ) ) :
									?>
									<div class="inbound-case-study__tags">
										<?php foreach ( $terms as $term ) : ?>
											<span class="inbound-case-study__tag"><?php echo esc_html( $term->name ); ?></span>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>
							</div>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>

			<div class="inbound-case-study__button-wrapper">
				<a href="<?php echo esc_url( home_url( '/case/tag/inbound-marketing-partner' ) ); ?>" class="btn-primary">
					すべての導入事例を見る
				</a>
			</div>

		<?php else : ?>
			<p class="inbound-case-study__no-posts">現在、導入事例はありません。</p>
		<?php endif; ?>

		<?php wp_reset_postdata(); ?>
	</div>
</section>
