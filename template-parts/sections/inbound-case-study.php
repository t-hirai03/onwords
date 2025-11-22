<?php
/**
 * Template part for displaying the Inbound Marketing CASE STUDY section
 *
 * @package Onwords
 */

// Query case studies filtered by taxonomy
$case_args = array(
	'post_type'      => 'case',
	'posts_per_page' => 3,
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

<section class="inbound-case-study">
	<div class="inbound-case-study__container fade-in-wrapper">
		<div class="inbound-case-study__header fade-in-item">
			<p class="inbound-case-study__label">CASE STUDY</p>
			<h2 class="inbound-case-study__title">導入事例</h2>
		</div>

		<?php if ( $case_query->have_posts() ) : ?>
			<ul class="case-list__items fade-in-item">
				<?php while ( $case_query->have_posts() ) : $case_query->the_post(); ?>
					<li class="case-list__item">
						<a href="<?php the_permalink(); ?>" class="case-card">
							<div class="case-card__image">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'medium' ); ?>
								<?php endif; ?>
							</div>
							<div class="case-card__content">
								<div class="case-card__text">
									<?php
									$client_name = get_post_meta( get_the_ID(), 'client_name', true );
									if ( $client_name ) :
										?>
										<p class="case-card__company"><?php echo esc_html( $client_name ); ?></p>
									<?php endif; ?>
									<h3 class="case-card__title"><?php the_title(); ?></h3>
								</div>
								<?php
								$categories = get_the_terms( get_the_ID(), 'case_category' );
								if ( $categories && ! is_wp_error( $categories ) ) :
									?>
									<div class="case-card__tags">
										<?php foreach ( $categories as $category ) : ?>
											<span class="case-card__tag"><?php echo esc_html( $category->name ); ?></span>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>
							</div>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>

			<div class="inbound-case-study__button-wrapper fade-in-item">
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
