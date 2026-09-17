/**
 * Main Theme JavaScript File
 * Handles Mobile Menu Toggle, Header Scroll, and Interactivity
 */

document.addEventListener('DOMContentLoaded', function() {
    // Mobile Navigation Toggle
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navMenu = document.querySelector('.nav-menu');

    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            const expanded = mobileToggle.getAttribute('aria-expanded') === 'true' || false;
            mobileToggle.setAttribute('aria-expanded', !expanded);
        });
    }

    // Dropdown toggle for mobile
    const dropdownItems = document.querySelectorAll('.nav-menu .menu-item-has-children, .nav-menu .has-dropdown');
    dropdownItems.forEach(function(item) {
        const link = item.querySelector('a');
        if (window.innerWidth <= 991 && link) {
            link.addEventListener('click', function(e) {
                if (item.querySelector('ul')) {
                    e.preventDefault();
                    item.classList.toggle('hover');
                }
            });
        }
    });

    // Smooth Scroll for Internal Anchors
    const anchorLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');
    anchorLinks.forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
