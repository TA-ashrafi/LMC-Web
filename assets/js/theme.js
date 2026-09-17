/**
 * Main Theme JavaScript File
 * Handles Mobile Navigation Toggle & Dynamic Interactions
 */

document.addEventListener('DOMContentLoaded', function() {
    // Mobile Navigation Toggle
    const menuButtons = document.querySelectorAll('.menu-button');
    menuButtons.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            let nav = document.querySelector('.mobile-nav');
            if (nav) {
                nav.remove();
                return;
            }
            const siteHeader = document.querySelector('.site-header');
            if (siteHeader) {
                siteHeader.insertAdjacentHTML(
                    'beforeend',
                    '<nav class="mobile-nav">' +
                    '<a href="#work">Work ↗</a>' +
                    '<a href="#services">Services ↗</a>' +
                    '<a href="#studio">Studio ↗</a>' +
                    '<a href="#process">Process ↗</a>' +
                    '<a href="#contact">Start a project ↗</a>' +
                    '</nav>'
                );
            }
        });
    });

    // Close Mobile Nav when clicking an internal link
    document.addEventListener('click', function(e) {
        if (e.target.closest('.mobile-nav a')) {
            const mobileNav = document.querySelector('.mobile-nav');
            if (mobileNav) {
                mobileNav.remove();
            }
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
