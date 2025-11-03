/**
 * Hero Carousel
 * Infinite loop horizontal slide animation (always right to left)
 * Extracted from https://www.onwords.co.jp/
 */

document.addEventListener('DOMContentLoaded', () => {
  initHeroCarousel();
});

function initHeroCarousel() {
  const carousel = document.querySelector('.hero__carousel');
  if (!carousel) return;

  const slides = carousel.querySelectorAll('.hero__slide');
  if (slides.length <= 1) return; // No need for carousel with single slide

  const autoAdvanceDelay = 3000; // 3 seconds between slides
  let currentSlide = 0;
  let autoAdvanceInterval;
  let isTransitioning = false;

  // Clone the first slide and append to the end for seamless infinite loop
  const firstSlideClone = slides[0].cloneNode(true);
  carousel.appendChild(firstSlideClone);

  const totalSlides = slides.length; // Original slide count

  // Function to show specific slide using horizontal slide animation
  function showSlide(index, instant = false) {
    if (isTransitioning && !instant) return;

    isTransitioning = true;

    // Calculate the translateX value: -100% per slide
    const translateX = -(index * 100);

    if (instant) {
      // Instant transition (no animation)
      carousel.style.transition = 'none';
      carousel.style.transform = `translateX(${translateX}%)`;
      // Force reflow
      carousel.offsetHeight;
      // Re-enable transition
      carousel.style.transition = 'transform 0.8s cubic-bezier(0.58, 0.21, 0.41, 0.96)';
      isTransitioning = false;
    } else {
      // Animated transition
      carousel.style.transform = `translateX(${translateX}%)`;

      // Reset to first slide after reaching the clone
      if (index === totalSlides) {
        setTimeout(() => {
          showSlide(0, true); // Jump to real first slide instantly
          currentSlide = 0;
          isTransitioning = false;
        }, 800); // Wait for transition to complete
      } else {
        setTimeout(() => {
          isTransitioning = false;
        }, 800);
      }
    }
  }

  // Function to advance to next slide (always right to left)
  function nextSlide() {
    if (isTransitioning) return;
    currentSlide++;
    showSlide(currentSlide);
  }

  // Auto-advance carousel
  function startAutoAdvance() {
    autoAdvanceInterval = setInterval(nextSlide, autoAdvanceDelay);
  }

  // Stop auto-advance
  function stopAutoAdvance() {
    if (autoAdvanceInterval) {
      clearInterval(autoAdvanceInterval);
      autoAdvanceInterval = null;
    }
  }

  // Pause on hover
  carousel.addEventListener('mouseenter', () => {
    stopAutoAdvance();
  });

  // Resume on mouse leave
  carousel.addEventListener('mouseleave', () => {
    startAutoAdvance();
  });

  // Initialize: Show first slide and start auto-advance
  showSlide(currentSlide);
  startAutoAdvance();
}
