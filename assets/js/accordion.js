/**
 * Accordion functionality for business strengths section
 * Handles click events to toggle accordion open/close state
 */

document.addEventListener('DOMContentLoaded', () => {
	const accordionToggles = document.querySelectorAll('.business-strengths__toggle');

	accordionToggles.forEach(toggle => {
		toggle.addEventListener('click', () => {
			const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
			const contentId = toggle.getAttribute('aria-controls');
			const content = document.getElementById(contentId);
			const icon = toggle.querySelector('.business-strengths__icon');

			// Toggle aria-expanded attribute
			toggle.setAttribute('aria-expanded', !isExpanded);

			// Toggle content visibility class
			content.classList.toggle('business-strengths__content--collapsed');

			// Switch icon between arrow_downward and arrow_upward
			icon.textContent = isExpanded ? 'arrow_upward' : 'arrow_downward';
		});
	});
});
