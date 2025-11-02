/**
 * Navigation JavaScript
 *
 * Hamburger menu toggle functionality for mobile navigation.
 * Uses vanilla JavaScript ES6+ with IIFE pattern.
 */

(() => {
  'use strict';

  // DOM elements
  const hamburgerBtn = document.querySelector('.header__hamburger-btn');
  const mobileMenu = document.querySelector('.header__mobile-menu');
  const closeBtn = document.querySelector('.header__mobile-menu-close');
  const body = document.body;

  // Menu state
  let isMenuOpen = false;

  /**
   * Toggle mobile menu open/close
   */
  function toggleMobileMenu() {
    isMenuOpen = !isMenuOpen;

    if (isMenuOpen) {
      openMenu();
    } else {
      closeMenu();
    }
  }

  /**
   * Open mobile menu
   */
  function openMenu() {
    if (!mobileMenu) return;

    mobileMenu.classList.add('is-open');

    if (hamburgerBtn) {
      hamburgerBtn.setAttribute('aria-expanded', 'true');
      hamburgerBtn.setAttribute('aria-label', 'メニューを閉じる');
    }

    // Lock body scroll
    body.style.overflow = 'hidden';

    // Move focus to the menu for accessibility
    // Find the first focusable element (close button or first link)
    const firstFocusable = closeBtn || mobileMenu.querySelector('a');
    if (firstFocusable) {
      setTimeout(() => firstFocusable.focus(), 100);
    }
  }

  /**
   * Close mobile menu
   */
  function closeMenu() {
    if (!mobileMenu) return;

    mobileMenu.classList.remove('is-open');

    if (hamburgerBtn) {
      hamburgerBtn.setAttribute('aria-expanded', 'false');
      hamburgerBtn.setAttribute('aria-label', 'メニューを開く');

      // Return focus to hamburger button for accessibility
      hamburgerBtn.focus();
    }

    // Restore body scroll
    body.style.overflow = '';
  }

  /**
   * Handle Escape key press
   */
  function handleEscapeKey(event) {
    if (event.key === 'Escape' && isMenuOpen) {
      closeMenu();
      isMenuOpen = false;
    }
  }

  /**
   * Initialize mobile menu
   */
  function initMobileMenu() {
    if (!hamburgerBtn) {
      // Hamburger button not found, likely on desktop or not on a page with header
      return;
    }

    // Add click event listener to hamburger button
    hamburgerBtn.addEventListener('click', toggleMobileMenu);

    // Add click event listener to close button
    if (closeBtn) {
      closeBtn.addEventListener('click', () => {
        closeMenu();
        isMenuOpen = false;
      });
    }

    // Add Escape key listener
    document.addEventListener('keydown', handleEscapeKey);

    // Set initial aria-expanded state
    hamburgerBtn.setAttribute('aria-expanded', 'false');
    hamburgerBtn.setAttribute('aria-label', 'メニューを開く');
  }

  /**
   * Initialize on DOM ready
   */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initMobileMenu);
  } else {
    // DOM is already loaded
    initMobileMenu();
  }
})();
