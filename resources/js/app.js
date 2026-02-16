import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

document.addEventListener('DOMContentLoaded', () => {
    // General scroll-animate: fade-in-up on viewport enter
    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
                entry.target.style.opacity = '1';
                fadeObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.scroll-animate').forEach(el => {
        el.style.opacity = '0';
        fadeObserver.observe(el);
    });

    // Service sticky card stacking animation
    const serviceCards = document.querySelectorAll('.service-sticky-card');
    if (serviceCards.length > 0) {
        // Intersection observer to trigger fade-in when card enters viewport
        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    cardObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });

        serviceCards.forEach(card => {
            cardObserver.observe(card);
        });

        // Scroll handler for scale-down effect on pinned cards
        let ticking = false;
        const handleScroll = () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    serviceCards.forEach((card, index) => {
                        const rect = card.getBoundingClientRect();
                        const stickyTop = parseInt(card.style.top) || 90;

                        // If the card is stuck (top matches its sticky top position)
                        if (rect.top <= stickyTop + 2) {
                            card.classList.add('is-pinned');

                            // Calculate how much the next card has overlapped
                            const nextCard = serviceCards[index + 1];
                            if (nextCard) {
                                const nextRect = nextCard.getBoundingClientRect();
                                const overlap = stickyTop + card.offsetHeight - nextRect.top;
                                const maxOverlap = card.offsetHeight * 0.6;

                                if (overlap > 0) {
                                    const progress = Math.min(overlap / maxOverlap, 1);
                                    const scale = 1 - (progress * 0.05); // Scale down to 0.95
                                    const brightness = 1 - (progress * 0.08); // Slightly dim
                                    card.style.transform = `scale(${scale})`;
                                    card.style.filter = `brightness(${brightness})`;
                                } else {
                                    card.style.transform = '';
                                    card.style.filter = '';
                                }
                            }
                        } else {
                            card.classList.remove('is-pinned');
                            // Only reset if already visible (don't override entry animation)
                            if (card.classList.contains('is-visible')) {
                                card.style.transform = '';
                                card.style.filter = '';
                            }
                        }
                    });
                    ticking = false;
                });
                ticking = true;
            }
        };

        window.addEventListener('scroll', handleScroll, { passive: true });
    }
});

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const fashionSwiper = new Swiper('.fashionSwiper', {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: true,
        pagination: {
            el: '.fashionSwiper .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.fashionSwiper .swiper-button-next',
            prevEl: '.fashionSwiper .swiper-button-prev',
        },
        breakpoints: {
            640: { slidesPerView: 4 },
            768: { slidesPerView: 6 },
            1024: { slidesPerView: 9 },
        },
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const beautySwiper = new Swiper('.beautySwiper', {
        slidesPerView: 4,          // jumlah slide terlihat
        spaceBetween: 20,          // jarak antar logo
        loop: true,                // loop carousel
        pagination: {
            el: '.beautySwiper .swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.beautySwiper .swiper-button-next',
            prevEl: '.beautySwiper .swiper-button-prev'
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            768: { slidesPerView: 3 },
            1024: { slidesPerView: 4 }
        }
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const fnbSwiper = new Swiper('.fnbSwiper', {
        slidesPerView: 4,          // jumlah logo terlihat
        spaceBetween: 20,          // jarak antar logo
        loop: true,                // loop carousel
        pagination: {
            el: '.fnbSwiper .swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.fnbSwiper .swiper-button-next',
            prevEl: '.fnbSwiper .swiper-button-prev'
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            768: { slidesPerView: 3 },
            1024: { slidesPerView: 4 }
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const lifestyleSwiper = new Swiper('.lifestyleSwiper', {
        slidesPerView: 4,          // jumlah logo terlihat
        spaceBetween: 20,          // jarak antar logo
        loop: true,                // loop carousel
        pagination: {
            el: '.lifestyleSwiper .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.lifestyleSwiper .swiper-button-next',
            prevEl: '.lifestyleSwiper .swiper-button-prev',
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            768: { slidesPerView: 3 },
            1024: { slidesPerView: 4 }
        }
    });
});

        (function() {
            // Count-up animation
            function animateCount(el, target, suffix) {
                var duration = 1200;
                var start = 0;
                var startTime = null;

                function step(timestamp) {
                    if (!startTime) startTime = timestamp;
                    var progress = Math.min((timestamp - startTime) / duration, 1);
                    var value = Math.floor(progress * (target - start) + start);
                    el.textContent = value.toLocaleString() + (suffix || '');
                    if (progress < 1) requestAnimationFrame(step);
                }
                requestAnimationFrame(step);
            }

            // Reveal observer for animated entrance
            var revealObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal-visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.35
            });

            document.addEventListener('DOMContentLoaded', function() {
                // Observe reveal elements
                document.querySelectorAll('.reveal').forEach(function(el) {
                    revealObserver.observe(el);
                });

                // Observe counters
                var counterObserver = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            var el = entry.target;
                            var target = parseInt(el.getAttribute('data-target')) || 0;
                            var suffix = el.getAttribute('data-suffix') || '';
                            if (target) animateCount(el, target, suffix);
                            counterObserver.unobserve(el);
                        }
                    });
                }, {
                    threshold: 0.5
                });

                document.querySelectorAll('.stat-counter').forEach(function(el) {
                    counterObserver.observe(el);
                });
            });
        })();



