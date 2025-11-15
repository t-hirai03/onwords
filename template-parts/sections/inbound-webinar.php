<?php
/**
 * Template part for displaying the Inbound Marketing WEBINAR section
 *
 * @package Onwords
 */

// Query webinars
$webinar_args = array(
	'post_type'      => 'webinar',
	'posts_per_page' => 2,
	'orderby'        => 'date',
	'order'          => 'DESC',
);

$webinar_query = new WP_Query( $webinar_args );
?>

<section class="inbound-webinar fade-in-up">
	<div class="inbound-webinar__container">
		<div class="inbound-webinar__header fade-in-up">
			<p class="inbound-webinar__label">WEBINAR</p>
			<h2 class="inbound-webinar__title">ウェビナー情報</h2>
		</div>

		<?php if ( $webinar_query->have_posts() ) : ?>
			<div class="webinar-list">
				<div class="webinar-list__items">
					<?php while ( $webinar_query->have_posts() ) : $webinar_query->the_post(); ?>
						<?php
						// カスタムフィールドから日付を取得
						$webinar_date = get_post_meta( get_the_ID(), 'webinar_date', true );

						// タクソノミーから対象者とステータスを取得
						$target_terms = get_the_terms( get_the_ID(), 'webinar_target' );
						$status_terms = get_the_terms( get_the_ID(), 'webinar_status' );
						?>
						<a href="<?php echo esc_url( get_permalink() ); ?>" class="webinar-card">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="webinar-card__image">
									<?php the_post_thumbnail( 'large' ); ?>
								</div>
							<?php endif; ?>
							<div class="webinar-card__content">
								<div class="webinar-card__header">
									<?php if ( $webinar_date ) : ?>
										<p class="webinar-card__date"><?php echo esc_html( $webinar_date ); ?></p>
									<?php endif; ?>
									<p class="webinar-card__title"><?php echo esc_html( get_the_title() ); ?></p>
								</div>
								<?php if ( ( $target_terms && ! is_wp_error( $target_terms ) ) || ( $status_terms && ! is_wp_error( $status_terms ) ) ) : ?>
									<div class="webinar-card__tag-container">
										<ul class="webinar-card__tag-list">
											<?php if ( $target_terms && ! is_wp_error( $target_terms ) ) : ?>
												<?php foreach ( $target_terms as $term ) : ?>
													<li class="webinar-card__tag-item">
														<p class="webinar-card__tag-text"><?php echo esc_html( $term->name ); ?></p>
													</li>
												<?php endforeach; ?>
											<?php endif; ?>
											<?php if ( $status_terms && ! is_wp_error( $status_terms ) ) : ?>
												<?php foreach ( $status_terms as $term ) : ?>
													<li class="webinar-card__tag-item">
														<p class="webinar-card__tag-text"><?php echo esc_html( $term->name ); ?></p>
													</li>
												<?php endforeach; ?>
											<?php endif; ?>
										</ul>
									</div>
								<?php endif; ?>
							</div>
						</a>
					<?php endwhile; ?>
				</div>
			</div>

			<div class="inbound-webinar__button-wrapper">
				<a href="<?php echo esc_url( home_url( '/knowledge/webinar' ) ); ?>" class="btn-primary">
					すべてのウェビナーを見る
				</a>
			</div>

		<?php else : ?>
			<p class="inbound-webinar__no-posts">現在、ウェビナー情報はありません。</p>
		<?php endif; ?>

		<?php wp_reset_postdata(); ?>
	</div>
</section>
