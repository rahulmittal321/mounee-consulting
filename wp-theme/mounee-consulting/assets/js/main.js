/**
 * Mounee Consulting Theme JavaScript
 * 
 * @package Mounee_Consulting
 */

(function() {
    'use strict';

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const menuToggle = document.querySelector('.menu-toggle');
        const navMenu = document.querySelector('.nav-menu-wrapper');
        
        if (menuToggle && navMenu) {
            menuToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                const expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !expanded);
                
                // Toggle hamburger animation
                const hamburger = this.querySelector('.hamburger');
                hamburger.classList.toggle('active');
            });

            // Close menu when clicking on a link
            const menuLinks = navMenu.querySelectorAll('a');
            menuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    navMenu.classList.remove('active');
                    menuToggle.setAttribute('aria-expanded', 'false');
                    const hamburger = menuToggle.querySelector('.hamburger');
                    hamburger.classList.remove('active');
                });
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInside = menuToggle.contains(event.target) || navMenu.contains(event.target);
                if (!isClickInside && navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    menuToggle.setAttribute('aria-expanded', 'false');
                    const hamburger = menuToggle.querySelector('.hamburger');
                    hamburger.classList.remove('active');
                }
            });
        }
    }

    /**
     * Smooth Scrolling for Anchor Links
     */
    function initSmoothScroll() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Skip if it's just '#'
                if (href === '#') return;
                
                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    
                    // Get header height for offset
                    const header = document.querySelector('.site-header');
                    const headerHeight = header ? header.offsetHeight : 0;
                    
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Sticky Header on Scroll
     */
    function initStickyHeader() {
        const header = document.querySelector('.site-header');
        
        if (header) {
            let lastScroll = 0;
            
            window.addEventListener('scroll', function() {
                const currentScroll = window.pageYOffset;
                
                if (currentScroll > 100) {
                    header.style.boxShadow = '0 2px 12px rgba(0, 0, 0, 0.1)';
                } else {
                    header.style.boxShadow = '0 2px 8px rgba(0, 0, 0, 0.05)';
                }
                
                lastScroll = currentScroll;
            });
        }
    }

    /**
     * Gallery Lightbox (Simple Implementation)
     * Note: For production, consider using a proper lightbox library
     */
    function initGallery() {
        const galleryItems = document.querySelectorAll('.gallery-item');
        
        if (galleryItems.length > 0) {
            galleryItems.forEach(item => {
                item.style.cursor = 'pointer';
                item.addEventListener('click', function() {
                    const img = this.querySelector('img');
                    if (img) {
                        // Simple alert for now - in production, use a proper lightbox
                        // You can integrate libraries like GLightbox, Fancybox, etc.
                        console.log('Gallery image clicked:', img.src);
                    }
                });
            });
        }
    }

    /**
     * Add Animation on Scroll (Fade In)
     */
    function initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Elements to animate
        const animatedElements = document.querySelectorAll('.service-card, .feature-item, .team-member, .testimonial-card');
        
        animatedElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    }

    /**
     * Active Menu Item on Scroll
     */
    function initActiveMenu() {
        const sections = document.querySelectorAll('section[id]');
        const menuLinks = document.querySelectorAll('.nav-menu a[href^="#"]');
        
        if (sections.length > 0 && menuLinks.length > 0) {
            window.addEventListener('scroll', function() {
                let current = '';
                const scrollPosition = window.pageYOffset;
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 100;
                    const sectionHeight = section.offsetHeight;
                    
                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        current = section.getAttribute('id');
                    }
                });
                
                menuLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + current) {
                        link.classList.add('active');
                    }
                });
            });
        }
    }

    /**
     * Form Validation (if Contact Form 7 is not used)
     */
    function initFormValidation() {
        const forms = document.querySelectorAll('form');
        
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.style.borderColor = '#EF4444';
                    } else {
                        field.style.borderColor = '';
                    }
                });
                
                if (!isValid) {
                    e.preventDefault();
                    alert('Please fill in all required fields.');
                }
            });
        });
    }

    /**
     * Back to Top Button (Optional Enhancement)
     */
    function initBackToTop() {
        // Create back to top button
        const backToTop = document.createElement('button');
        backToTop.innerHTML = '↑';
        backToTop.className = 'back-to-top';
        backToTop.setAttribute('aria-label', 'Back to top');
        backToTop.style.cssText = `
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--color-blue);
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 999;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        `;
        
        document.body.appendChild(backToTop);
        
        // Show/hide based on scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTop.style.opacity = '1';
                backToTop.style.visibility = 'visible';
            } else {
                backToTop.style.opacity = '0';
                backToTop.style.visibility = 'hidden';
            }
        });
        
        // Scroll to top on click
        backToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    /**
     * Initialize all functions when DOM is ready
     */
    function initSectorRotator() {
        var rotator = document.querySelector('.sector-rotator');
        if (!rotator) return;
        var word = rotator.querySelector('.sector-word');
        var sectors = (rotator.getAttribute('data-sectors') || '').split(',').map(function (s) { return s.trim(); }).filter(Boolean);
        if (!word || sectors.length < 2) return;
        if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
        var i = 0;
        setInterval(function () {
            i = (i + 1) % sectors.length;
            word.classList.add('is-swapping');
            setTimeout(function () {
                word.innerHTML = sectors[i];
                word.classList.remove('is-swapping');
            }, 400);
        }, 2800);
    }

    function init() {
        initMobileMenu();
        initSectorRotator();
        initSmoothScroll();
        initStickyHeader();
        initGallery();
        initScrollAnimations();
        initActiveMenu();
        initFormValidation();
        initBackToTop();
    }

    // Run when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
