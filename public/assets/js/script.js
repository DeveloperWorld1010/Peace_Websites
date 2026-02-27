
$(document).ready(function () {
    // ==================== Hero Slider ====================
    let currentSlide = 0;
    const slides = $('.slide');
    const dots = $('.slider-dot');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.removeClass('active');
        dots.removeClass('active');
        $(slides[index]).addClass('active');
        $(dots[index]).addClass('active');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    // Auto slide every 10 seconds
    // let autoSlide = setInterval(nextSlide, 10000);

    // Next button
    $('.slider-arrow.next').click(function () {
        clearInterval(autoSlide);
        nextSlide();
        autoSlide = setInterval(nextSlide, 10000);
    });

    // Previous button
    $('.slider-arrow.prev').click(function () {
        clearInterval(autoSlide);
        prevSlide();
        autoSlide = setInterval(nextSlide, 10000);
    });

    // Dots navigation
    $('.slider-dot').click(function () {
        clearInterval(autoSlide);
        currentSlide = $(this).data('slide');
        showSlide(currentSlide);
        autoSlide = setInterval(nextSlide, 10000);
    });

    // ==================== Navbar Scroll Effect ====================
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.main-navbar').addClass('scrolled');
        } else {
            $('.main-navbar').removeClass('scrolled');
        }
    });

    // ==================== Fade in on Scroll ====================
    function checkScroll() {
        $('.fade-in').each(function () {
            const elementTop = $(this).offset().top;
            const windowBottom = $(window).scrollTop() + $(window).height();
            if (windowBottom > elementTop + 100) {
                $(this).addClass('visible');
            }
        });
    }

    $(window).on('scroll', checkScroll);
    checkScroll(); // Initial check

    // ==================== Smooth Scroll ====================
    $('a[href^="#"]').on('click', function (e) {
        const target = $(this.hash);
        if (target.length) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 800);

            // Update active nav link
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
        }
    });

    // ==================== Counter Animation ====================
    function animateCounter() {
        $('.counter').each(function () {
            const $this = $(this);
            const target = parseInt($this.attr('data-target'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;

            const timer = setInterval(function () {
                current += step;
                if (current >= target) {
                    $this.text(target.toLocaleString());
                    clearInterval(timer);
                } else {
                    $this.text(Math.floor(current).toLocaleString());
                }
            }, 16);
        });
    }

    // Trigger counter when stats section is visible
    let counterAnimated = false;
    $(window).on('scroll', function () {
        if ($('.stats-section').length) {
            const statsTop = $('.stats-section').offset().top;
            const windowBottom = $(window).scrollTop() + $(window).height();
            if (windowBottom > statsTop && !counterAnimated) {
                animateCounter();
                counterAnimated = true;
            }
        }
    });

    // ==================== Mobile Menu Close ====================
    $('.nav-link').on('click', function () {
        if ($(window).width() < 992) {
            $('.navbar-collapse').collapse('hide');
        }
    });

    // ==================== Email Subscription (UI Only) ====================
    $('.email-signup-box button, .email-input-wrapper button').on('click', function (e) {
        e.preventDefault();
        const emailInput = $(this).closest('.email-signup-box, .email-input-wrapper').find('input[type="email"]');
        const email = emailInput.val();

        if (email && email.includes('@')) {
            alert('Thank you for subscribing! Welcome to our community.');
            emailInput.val('');
        } else {
            alert('Please enter a valid email address.');
        }
    });

    // ==================== Button Hover Effects ====================
    $('.btn-custom').hover(
        function () {
            $(this).css('transform', 'translateY(-3px)');
        },
        function () {
            $(this).css('transform', 'translateY(0)');
        }
    );

    // ==================== Pause slider on hover ====================
    $('.hero-slider').hover(
        function () {
            clearInterval(autoSlide);
        },
        function () {
            autoSlide = setInterval(nextSlide, 5000);
        }
    );
});