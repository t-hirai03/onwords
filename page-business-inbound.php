<?php
/**
 * Template Name: Business Inbound
 * Template for displaying inbound marketing partner business page
 *
 * @package Onwords
 */

get_header();
?>

<!-- Breadcrumb Navigation -->
<div class="breadcrumb">
	<div class="breadcrumb__container">
		<a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumb__link breadcrumb__home">
			<i class="material-icons">home</i>
		</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<a href="<?php echo esc_url(home_url('/business')); ?>" class="breadcrumb__link">事業内容</a>
		<span class="breadcrumb__separator">
			<i class="material-icons">keyboard_arrow_right</i>
		</span>
		<span class="breadcrumb__current">訪日マーケティングパートナー事業</span>
	</div>
</div>

<main id="primary" class="site-main">

	<?php
	// ヒーローセクション
	get_template_part( 'template-parts/sections/inbound-hero' );

	// パートナーロゴカルーセル
	get_template_part( 'template-parts/sections/inbound-partners-carousel' );

	// OUR STRENGTHSセクション
	get_template_part( 'template-parts/sections/inbound-strengths' );

	// SERVICESセクション
	get_template_part( 'template-parts/sections/inbound-services' );

	// CASE STUDYセクション
	get_template_part( 'template-parts/sections/inbound-case-study' );

	// OUR BUSINESS RECORDセクション
	get_template_part( 'template-parts/sections/inbound-business-record' );

	// WEBINARセクション（非公開のため削除）
	// get_template_part( 'template-parts/sections/inbound-webinar' );

	// DOCUMENTSセクション（非公開のため削除）
	// get_template_part( 'template-parts/sections/inbound-documents' );
	?>

</main>

<?php
get_footer();
