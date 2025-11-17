/**
 * Main JavaScript for Contentyx Theme
 */

(function() {
    'use strict';

    /**
     * Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Ignore empty anchors
                if (href === '#' || href === '#0') {
                    return;
                }
                
                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    /**
     * Form Submission Handler
     */
    function initFormHandler() {
        const form = document.getElementById('contentyx-form');
        
        if (!form) return;
        
        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const submitBtn = form.querySelector('button[type="submit"]');
            const messageDiv = document.getElementById('form-message');
            const emailInput = form.querySelector('input[name="email"]');
            
            // Get email value
            const email = emailInput.value.trim();
            
            // Basic validation
            if (!email || !isValidEmail(email)) {
                showMessage('Por favor, insira um e-mail válido.', 'error');
                return;
            }
            
            // Show loading state
            submitBtn.classList.add('loading');
            submitBtn.disabled = true;
            hideMessage();
            
            try {
                // Send AJAX request
                const response = await fetch(contentyx_data.ajax_url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        action: 'contentyx_submit_form',
                        nonce: contentyx_data.nonce,
                        email: email
                    })
                });
                
                const data = await response.json();
                
                if (data.success) {
                    showMessage('Obrigado! Verifique seu e-mail para começar.', 'success');
                    form.reset();
                } else {
                    showMessage(data.data.message || 'Algo deu errado. Tente novamente.', 'error');
                }
            } catch (error) {
                console.error('Form submission error:', error);
                showMessage('Erro ao enviar. Tente novamente mais tarde.', 'error');
            } finally {
                // Remove loading state
                submitBtn.classList.remove('loading');
                submitBtn.disabled = false;
            }
        });
        
        /**
         * Show form message
         */
        function showMessage(message, type) {
            const messageDiv = document.getElementById('form-message');
            if (!messageDiv) return;
            
            messageDiv.textContent = message;
            messageDiv.className = type;
            messageDiv.style.display = 'block';
            
            // Auto-hide success messages after 5 seconds
            if (type === 'success') {
                setTimeout(() => {
                    hideMessage();
                }, 5000);
            }
        }
        
        /**
         * Hide form message
         */
        function hideMessage() {
            const messageDiv = document.getElementById('form-message');
            if (!messageDiv) return;
            
            messageDiv.style.display = 'none';
            messageDiv.textContent = '';
            messageDiv.className = '';
        }
        
        /**
         * Validate email format
         */
        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    }

    /**
     * Scroll Animations
     */
    function initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        // Observe all cards and sections
        const elements = document.querySelectorAll('.card, .section-title');
        elements.forEach(el => observer.observe(el));
    }

    /**
     * Add scroll class to body
     */
    function initScrollClass() {
        let lastScroll = 0;
        
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                document.body.classList.add('scrolled');
            } else {
                document.body.classList.remove('scrolled');
            }
            
            lastScroll = currentScroll;
        });
    }

    /**
     * Initialize all functions when DOM is ready
     */
    function init() {
        initSmoothScroll();
        initFormHandler();
        initScrollAnimations();
        initScrollClass();
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
