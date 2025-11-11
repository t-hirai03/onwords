/**
 * Strengths Section Navigation
 *
 * スムーズスクロールとアクティブ状態の管理
 */

document.addEventListener('DOMContentLoaded', function() {
	const navLinks = document.querySelectorAll('.business-strengths__nav-link');
	const contentItems = document.querySelectorAll('.business-strengths__content-item');

	if (navLinks.length === 0 || contentItems.length === 0) {
		return;
	}

	// スムーズスクロール処理
	navLinks.forEach(link => {
		link.addEventListener('click', function(e) {
			e.preventDefault();

			const targetId = this.getAttribute('href');
			const targetElement = document.querySelector(targetId);

			if (targetElement) {
				// スムーズスクロール
				targetElement.scrollIntoView({
					behavior: 'smooth',
					block: 'start'
				});

				// アクティブクラスを更新
				updateActiveLink(this);
			}
		});
	});

	// スクロール時のアクティブ状態更新
	let isScrolling = false;
	let scrollTimeout;

	window.addEventListener('scroll', function() {
		if (!isScrolling) {
			isScrolling = true;

			clearTimeout(scrollTimeout);
			scrollTimeout = setTimeout(function() {
				updateActiveLinkOnScroll();
				isScrolling = false;
			}, 100);
		}
	});

	/**
	 * アクティブリンクを更新
	 */
	function updateActiveLink(activeLink) {
		navLinks.forEach(link => {
			link.classList.remove('active');
		});
		activeLink.classList.add('active');
	}

	/**
	 * スクロール位置に基づいてアクティブリンクを更新
	 */
	function updateActiveLinkOnScroll() {
		const scrollPosition = window.scrollY + window.innerHeight / 3;

		let currentSection = null;

		contentItems.forEach(item => {
			const rect = item.getBoundingClientRect();
			const offsetTop = window.scrollY + rect.top;

			if (scrollPosition >= offsetTop) {
				currentSection = item;
			}
		});

		if (currentSection) {
			const targetId = '#' + currentSection.id;
			const correspondingLink = document.querySelector(`.business-strengths__nav-link[href="${targetId}"]`);

			if (correspondingLink && !correspondingLink.classList.contains('active')) {
				updateActiveLink(correspondingLink);
			}
		}
	}

	// 初期表示時にアクティブ状態を設定
	updateActiveLinkOnScroll();
});
