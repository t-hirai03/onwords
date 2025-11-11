<?php
/**
 * Template part for displaying the Inbound Marketing DOCUMENTS section
 *
 * @package Onwords
 */

// Query documents
$document_args = array(
	'post_type'      => 'document',
	'posts_per_page' => 1,
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
			<ul class="inbound-documents__list">
				<?php while ( $document_query->have_posts() ) : $document_query->the_post(); ?>
					<?php
					$document_date   = get_field( 'document_date' );
					$document_target = get_field( 'document_target' );
					?>
					<li class="inbound-documents__item fade-in-up">
						<a href="<?php echo esc_url( get_permalink() ); ?>" class="inbound-documents__link">
							<div class="inbound-documents__meta">
								<?php if ( $document_date ) : ?>
									<time class="inbound-documents__date"><?php echo esc_html( $document_date ); ?></time>
								<?php endif; ?>

								<?php if ( $document_target ) : ?>
									<span class="inbound-documents__target">
										<?php echo $document_target === 'business' ? '民間企業様向け' : '自治体様向け'; ?>
									</span>
								<?php endif; ?>
							</div>
							<h3 class="inbound-documents__item-title"><?php echo esc_html( get_the_title() ); ?></h3>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>

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
