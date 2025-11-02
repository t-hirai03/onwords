	<footer class="footer">
		<div class="footer__container">
			<!-- Logo and Tagline -->
			<div class="footer__branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__logo-link">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo/s-300x91_222424ad-5eb2-43c8-8327-98b3cd560f8f.svg' ); ?>"
						 alt="<?php bloginfo( 'name' ); ?>"
						 class="footer__logo">
				</a>
				<p class="footer__tagline">もっと楽しい日本に</p>
			</div>

			<!-- Footer Navigation -->
			<div class="footer__nav">
				<!-- Main Links (Left Column) -->
				<nav class="footer__nav-main">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-main-menu',
							'container'      => false,
							'menu_class'     => 'footer__menu footer__menu--main',
							'fallback_cb'    => false,
						)
					);
					?>

					<!-- Static recruitment link with external icon (from STUDIO site) -->
					<a href="https://hrmos.co/pages/changeholdings/jobs?category=2166892462807429120"
					   class="footer__menu-item footer__menu-item--external"
					   target="_blank"
					   rel="noopener">
						採用情報 ↗
					</a>
				</nav>

				<!-- Policy Links (Right Column - Static from STUDIO site) -->
				<nav class="footer__nav-policy">
					<ul class="footer__menu footer__menu--policy">
						<li>
							<a href="<?php echo esc_url( home_url( '/privacypolicy' ) ); ?>">
								プライバシーポリシー
							</a>
						</li>
						<li>
							<a href="https://www.changeholdings.co.jp/isms/"
							   target="_blank"
							   rel="noopener">
								情報セキュリティ基本方針 ↗
							</a>
						</li>
						<li>
							<a href="https://www.changeholdings.co.jp/anti_social/"
							   target="_blank"
							   rel="noopener">
								反社会的勢力に対する基本方針 ↗
							</a>
						</li>
						<li>
							<a href="https://www.changeholdings.co.jp/compliance_risk/"
							   target="_blank"
							   rel="noopener">
								コンプライアンス・リスク管理基本方針 ↗
							</a>
						</li>
					</ul>
				</nav>
			</div>

			<!-- Copyright -->
			<p class="footer__copyright">©️ Onwords, Inc. All Rights Reserved.</p>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
