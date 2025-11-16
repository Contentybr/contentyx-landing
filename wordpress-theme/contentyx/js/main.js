/**
 * Contentyx Theme - Main JavaScript
 * 
 * @package Contentyx
 * @since 1.0.0
 */

(function($) {
    'use strict';

    /**
     * Scroll suave para âncoras
     */
    function smoothScroll() {
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80
                    }, 800, function() {
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) {
                            return false;
                        } else {
                            $target.attr('tabindex','-1');
                            $target.focus();
                        }
                    });
                }
            }
        });
    }

    /**
     * Validação de formulário de e-mail
     */
    function formValidation() {
        $('.contentyx-form').on('submit', function(e) {
            e.preventDefault();
            
            var $form = $(this);
            var $email = $form.find('input[type="email"]');
            var email = $email.val();
            
            // Validação básica de e-mail
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (!email || !emailRegex.test(email)) {
                alert('Por favor, insira um e-mail válido.');
                $email.focus();
                return false;
            }
            
            // Aqui você pode adicionar integração com API
            console.log('Email enviado:', email);
            alert('Cadastro realizado! Verifique seu e-mail para começar o teste gratuito.');
            $form[0].reset();
        });
    }

    /**
     * Animação de fade-in ao scroll
     */
    function fadeInOnScroll() {
        var $elements = $('.animate-on-scroll');
        
        if ($elements.length === 0) return;
        
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    $(entry.target).addClass('animate-fade-in');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });
        
        $elements.each(function() {
            observer.observe(this);
        });
    }

    /**
     * Contador de stats
     */
    function animateStats() {
        $('.stat-number').each(function() {
            var $this = $(this);
            var countTo = $this.attr('data-count');
            
            if (!countTo) return;
            
            $({ countNum: 0 }).animate({
                countNum: countTo
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
    }

    /**
     * Mobile menu toggle
     */
    function mobileMenu() {
        $('.mobile-menu-toggle').on('click', function() {
            $(this).toggleClass('active');
            $('.mobile-menu').toggleClass('active');
            $('body').toggleClass('menu-open');
        });
        
        // Fechar menu ao clicar em link
        $('.mobile-menu a').on('click', function() {
            $('.mobile-menu-toggle').removeClass('active');
            $('.mobile-menu').removeClass('active');
            $('body').removeClass('menu-open');
        });
    }

    /**
     * Accordion FAQ
     */
    function faqAccordion() {
        $('.faq-question').on('click', function() {
            var $item = $(this).parent();
            var $answer = $item.find('.faq-answer');
            
            // Fechar outros itens
            $('.faq-item').not($item).removeClass('active').find('.faq-answer').slideUp();
            
            // Toggle item atual
            $item.toggleClass('active');
            $answer.slideToggle();
        });
    }

    /**
     * Scroll to top button
     */
    function scrollToTop() {
        var $button = $('<button class="scroll-to-top" aria-label="Voltar ao topo">↑</button>');
        $('body').append($button);
        
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 500) {
                $button.addClass('visible');
            } else {
                $button.removeClass('visible');
            }
        });
        
        $button.on('click', function() {
            $('html, body').animate({ scrollTop: 0 }, 800);
        });
    }

    /**
     * Lazy loading de imagens
     */
    function lazyLoadImages() {
        if ('loading' in HTMLImageElement.prototype) {
            // Browser suporta lazy loading nativo
            $('img[data-src]').each(function() {
                $(this).attr('src', $(this).attr('data-src'));
                $(this).attr('loading', 'lazy');
            });
        } else {
            // Fallback para browsers antigos
            var lazyImages = document.querySelectorAll('img[data-src]');
            
            var imageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });
            
            lazyImages.forEach(function(img) {
                imageObserver.observe(img);
            });
        }
    }

    /**
     * Adicionar classe ao header no scroll
     */
    function stickyHeader() {
        var $header = $('header');
        var headerHeight = $header.outerHeight();
        
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > headerHeight) {
                $header.addClass('scrolled');
            } else {
                $header.removeClass('scrolled');
            }
        });
    }

    /**
     * Inicializar todas as funções
     */
    $(document).ready(function() {
        smoothScroll();
        formValidation();
        fadeInOnScroll();
        mobileMenu();
        faqAccordion();
        scrollToTop();
        lazyLoadImages();
        stickyHeader();
        
        // Animar stats quando visível
        var statsObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    animateStats();
                    statsObserver.unobserve(entry.target);
                }
            });
        });
        
        var statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }
    });

    /**
     * Recalcular ao redimensionar janela
     */
    var resizeTimer;
    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Funções que precisam ser recalculadas no resize
        }, 250);
    });

})(jQuery);
