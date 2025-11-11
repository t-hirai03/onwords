/**
 * Smooth Scroll and Animations
 *
 * アンカーリンクのスムーズスクロールとスクロールインアニメーション
 *
 * @package Onwords
 */

document.addEventListener('DOMContentLoaded', function() {
	// Inbound Strengths Navigation用スムーズスクロール
	const inboundNavLinks = document.querySelectorAll('.inbound-strengths__nav-link');

	if (inboundNavLinks.length > 0) {
		inboundNavLinks.forEach(link => {
			link.addEventListener('click', function(e) {
				e.preventDefault();

				const targetId = this.getAttribute('href');
				const targetElement = document.querySelector(targetId);

				if (targetElement) {
					targetElement.scrollIntoView({
						behavior: 'smooth',
						block: 'start'
					});
				}
			});
		});
	}
});
