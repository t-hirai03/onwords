<?php
/**
 * Template Name: Business Inbound
 * Template for displaying inbound marketing partner business page
 *
 * @package Onwords
 */

get_header();
?>

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

	// WEBINARセクション
	get_template_part( 'template-parts/sections/inbound-webinar' );

	// DOCUMENTSセクション
	get_template_part( 'template-parts/sections/inbound-documents' );
	?>

</main>

<?php
get_footer();
