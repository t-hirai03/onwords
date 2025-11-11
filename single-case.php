<?php
/**
 * Template for displaying single case study posts
 *
 * @package Onwords
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Breadcrumb Navigation -->
<div class="breadcrumb">
	<div class="breadcrumb__container">
		<a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumb__link breadcrumb__home">
			<i class="material-icons">home</i>
		</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>" class="breadcrumb__link">導入事例</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<span class="breadcrumb__current"><?php echo esc_html(get_the_title()); ?></span>
	</div>
</div>

<main class="main">
	<!-- Article Content -->
	<div class="case-single">
		<div class="case-single__container">
			<!-- Article Header -->
			<header class="case-single__header">
				<h2 class="case-single__title"><?php the_title(); ?></h2>

				<!-- Client Name -->
				<?php
				$client_name = get_post_meta(get_the_ID(), 'client_name', true);
				if ( $client_name ) :
				?>
				<div class="case-single__client">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail('thumbnail', ['class' => 'case-single__client-icon', 'alt' => '']); ?>
					<?php endif; ?>
					<p class="case-single__client-name"><?php echo esc_html( $client_name ); ?></p>
				</div>
				<?php endif; ?>

				<!-- Meta: Categories and Date -->
				<div class="case-single__meta">
					<!-- Categories -->
					<?php
					$categories = get_the_terms( get_the_ID(), 'case_category' );
					if ( $categories && ! is_wp_error( $categories ) ) :
					?>
					<div class="case-single__categories">
						<ul class="case-single__category-list">
							<?php foreach ( $categories as $category ) : ?>
							<li class="case-single__category-item">
								<p class="case-single__category-text"><?php echo esc_html( $category->name ); ?></p>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<?php endif; ?>

					<!-- Date -->
					<p class="case-single__date"><?php echo esc_html( get_the_date( 'Y/m/d' ) ); ?></p>
				</div>
			</header>

			<!-- Featured Image -->
			<?php if ( has_post_thumbnail() ) : ?>
			<div class="case-single__featured-image">
				<?php the_post_thumbnail('full'); ?>
			</div>
			<?php endif; ?>

			<!-- Article Content -->
			<article class="case-single__content">
				<?php the_content(); ?>
			</article>
		</div>
	</div>
</main>

<?php endwhile; else : ?>
	<p>記事が見つかりませんでした。</p>
<?php endif; ?>

<?php get_footer(); ?>
