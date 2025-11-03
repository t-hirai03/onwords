	<footer class="footer">
		<div class="footer__container">
			<!-- Branding: Logo and Tagline -->
			<div class="footer__branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__logo-link">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo/logo.svg' ); ?>"
						 alt="<?php bloginfo( 'name' ); ?>"
						 class="footer__logo">
				</a>
				<p class="footer__tagline">もっと楽しい日本に</p>
			</div>

			<!-- Navigation: Two columns (left and right) -->
			<div class="footer__nav">
				<!-- Left Navigation Column -->
				<ul class="footer__menu footer__menu--left">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a>
					<a href="<?php echo esc_url( home_url( '/company' ) ); ?>">会社概要</a>
					<a href="https://hrmos.co/pages/changeholdings/jobs?category=2166892462807429120"
					   class="footer__link--external"
					   target="_blank"
					   rel="noopener">
						採用情報
						<i class="fa-solid fa-arrow-up-right-from-square"></i>
					</a>
					<a href="<?php echo esc_url( home_url( '/case' ) ); ?>">導入事例</a>
					<a href="<?php echo esc_url( home_url( '/knowledge' ) ); ?>">ナレッジ</a>
				</ul>

				<!-- Right Navigation Column (Policy Links) -->
				<ul class="footer__menu footer__menu--right">
					<a href="<?php echo esc_url( home_url( '/privacypolicy' ) ); ?>">プライバシーポリシー</a>
					<a href="https://www.changeholdings.co.jp/isms/"
					   class="footer__link--external"
					   target="_blank"
					   rel="noopener">
						情報セキュリティ基本方針
						<i class="fa-solid fa-arrow-up-right-from-square"></i>
					</a>
					<a href="https://www.changeholdings.co.jp/anti_social/"
					   class="footer__link--external"
					   target="_blank"
					   rel="noopener">
						反社会的勢力に対する基本方針
						<i class="fa-solid fa-arrow-up-right-from-square"></i>
					</a>
					<a href="https://www.changeholdings.co.jp/compliance_risk/"
					   class="footer__link--external"
					   target="_blank"
					   rel="noopener">
						コンプライアンス・リスク管理基本方針
						<i class="fa-solid fa-arrow-up-right-from-square"></i>
					</a>
				</ul>
			</div>
		</div>

		<!-- Copyright -->
		<p class="footer__copyright">©️ Onwords, Inc. All Rights Reserved.</p>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
