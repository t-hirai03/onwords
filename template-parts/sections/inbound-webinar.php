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
			<ul class="inbound-webinar__list">
				<?php while ( $webinar_query->have_posts() ) : $webinar_query->the_post(); ?>
					<?php
					$webinar_date   = get_field( 'webinar_date' );
					$webinar_status = get_field( 'webinar_status' );
					$webinar_target = get_field( 'webinar_target' );
					?>
					<li class="inbound-webinar__item fade-in-up">
						<a href="<?php echo esc_url( get_permalink() ); ?>" class="inbound-webinar__link">
							<div class="inbound-webinar__meta">
								<?php if ( $webinar_date ) : ?>
									<time class="inbound-webinar__date"><?php echo esc_html( $webinar_date ); ?></time>
								<?php endif; ?>

								<?php if ( $webinar_status ) : ?>
									<span class="inbound-webinar__status inbound-webinar__status--<?php echo esc_attr( $webinar_status ); ?>">
										<?php echo $webinar_status === 'upcoming' ? 'これから開催' : '終了'; ?>
									</span>
								<?php endif; ?>

								<?php if ( $webinar_target ) : ?>
									<span class="inbound-webinar__target">
										<?php echo $webinar_target === 'business' ? '民間企業様向け' : '自治体様向け'; ?>
									</span>
								<?php endif; ?>
							</div>
							<h3 class="inbound-webinar__item-title"><?php echo esc_html( get_the_title() ); ?></h3>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>

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
