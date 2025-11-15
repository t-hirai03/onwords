<?php
/**
 * Template part for displaying the Inbound Marketing DOCUMENTS section
 *
 * @package Onwords
 */

// Query documents
$document_args = array(
	'post_type'      => 'document',
	'posts_per_page' => 3,
	'orderby'        => 'date',
	'order'          => 'DESC',
);

$document_query = new WP_Query( $document_args );
?>

<section class="inbound-documents fade-in-up">
	<div class="inbound-documents__container">
		<div class="inbound-documents__header fade-in-up">
			<p class="inbound-documents__label">DOCUMENTS</p>
			<h2 class="inbound-documents__title">お役立ち資料</h2>
		</div>

		<?php if ( $document_query->have_posts() ) : ?>
			<div class="documents-list">
				<div class="documents-list__items">
					<?php while ( $document_query->have_posts() ) : $document_query->the_post(); ?>
						<a href="<?php echo esc_url( get_permalink() ); ?>" class="documents-card">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="documents-card__image">
									<?php the_post_thumbnail( 'large' ); ?>
								</div>
							<?php endif; ?>
							<div class="documents-card__content">
								<div class="documents-card__header">
									<p class="documents-card__date"><?php echo get_the_date( 'Y/n/j' ); ?></p>
									<p class="documents-card__title"><?php the_title(); ?></p>
								</div>
								<?php
								$terms = get_the_terms( get_the_ID(), 'document_target' );
								if ( $terms && ! is_wp_error( $terms ) ) :
									?>
									<div class="documents-card__tag-container">
										<ul class="documents-card__tag-list">
											<?php foreach ( $terms as $term ) : ?>
												<li class="documents-card__tag-item">
													<p class="documents-card__tag-text"><?php echo esc_html( $term->name ); ?></p>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								<?php endif; ?>
							</div>
						</a>
					<?php endwhile; ?>
				</div>
			</div>

			<div class="inbound-documents__button-wrapper">
				<a href="<?php echo esc_url( home_url( '/knowledge/document' ) ); ?>" class="btn-primary">
					すべての資料を見る
				</a>
			</div>

		<?php else : ?>
			<p class="inbound-documents__no-posts">現在、お役立ち資料はありません。</p>
		<?php endif; ?>

		<?php wp_reset_postdata(); ?>
	</div>
</section>
