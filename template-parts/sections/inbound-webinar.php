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
						// ACFが利用可能な場合は get_field()、そうでない場合は get_post_meta() を使用
						if ( function_exists( 'get_field' ) ) {
							$webinar_date   = get_field( 'webinar_date' );
							$webinar_status = get_field( 'webinar_status' );
							$webinar_target = get_field( 'webinar_target' );
						} else {
							$webinar_date   = get_post_meta( get_the_ID(), 'webinar_date', true );
							$webinar_status = get_post_meta( get_the_ID(), 'webinar_status', true );
							$webinar_target = get_post_meta( get_the_ID(), 'webinar_target', true );
						}
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
								<?php if ( $webinar_target || $webinar_status ) : ?>
									<div class="webinar-card__tag-container">
										<ul class="webinar-card__tag-list">
											<?php if ( $webinar_target ) : ?>
												<li class="webinar-card__tag-item">
													<p class="webinar-card__tag-text">
														<?php echo $webinar_target === 'business' ? '民間企業様向け' : '自治体様向け'; ?>
													</p>
												</li>
											<?php endif; ?>
											<?php if ( $webinar_status ) : ?>
												<li class="webinar-card__tag-item">
													<p class="webinar-card__tag-text">
														<?php echo $webinar_status === 'upcoming' ? 'これから開催' : '終了'; ?>
													</p>
												</li>
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
