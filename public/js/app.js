/**
 * Harris Qaisrani Portfolio — app.js
 * Powered by vanilla JS — no dependencies
 */

// ============================================================
// NAVBAR SCROLL BEHAVIOR
// ============================================================
const navbar = document.getElementById('navbar');
const navToggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');

if (navbar) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 30) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
}

if (navToggle && navLinks) {
    navToggle.addEventListener('click', () => {
        navLinks.classList.toggle('open');
        navToggle.classList.toggle('open');
    });

    // Close mobile nav on link click
    navLinks.querySelectorAll('.nav-link, .nav-cta').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('open');
            navToggle.classList.remove('open');
        });
    });
}

// ============================================================
// HERO TYPING ANIMATION
// ============================================================
const typedEl = document.getElementById('typedText');
if (typedEl) {
    const phrases = [
        'Full Stack Developer.',
        'Laravel & React Expert.',
        'API Architect.',
        'Problem Solver.',
        'Open Source Enthusiast.',
    ];
    let phraseIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let typingDelay = 90;

    function typeEffect() {
        const current = phrases[phraseIndex];

        if (!isDeleting) {
            typedEl.textContent = current.substring(0, charIndex + 1);
            charIndex++;
            if (charIndex === current.length) {
                isDeleting = true;
                typingDelay = 1800; // pause before deleting
            } else {
                typingDelay = 90;
            }
        } else {
            typedEl.textContent = current.substring(0, charIndex - 1);
            charIndex--;
            if (charIndex === 0) {
                isDeleting = false;
                phraseIndex = (phraseIndex + 1) % phrases.length;
                typingDelay = 300;
            } else {
                typingDelay = 50;
            }
        }
        setTimeout(typeEffect, typingDelay);
    }

    setTimeout(typeEffect, 800);
}

// ============================================================
// SCROLL REVEAL (INTERSECTION OBSERVER)
// ============================================================
const revealElements = document.querySelectorAll('.reveal');
if (revealElements.length > 0) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                // Stagger reveals in the same parent
                const siblings = entry.target.parentElement.querySelectorAll('.reveal:not(.visible)');
                siblings.forEach((el, idx) => {
                    setTimeout(() => {
                        el.classList.add('visible');
                    }, idx * 120);
                });
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.12,
        rootMargin: '0px 0px -40px 0px',
    });

    revealElements.forEach(el => observer.observe(el));
}

// ============================================================
// SKILL BAR ANIMATION
// ============================================================
const skillBars = document.querySelectorAll('.skill-bar');
if (skillBars.length > 0) {
    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bar = entry.target;
                const level = bar.getAttribute('data-level');
                const fill = bar.querySelector('.skill-bar-fill');
                if (fill && level) {
                    setTimeout(() => {
                        fill.style.width = level + '%';
                    }, 200);
                }
                skillObserver.unobserve(bar);
            }
        });
    }, { threshold: 0.3 });

    skillBars.forEach(bar => skillObserver.observe(bar));
}

// ============================================================
// TESTIMONIALS CAROUSEL
// ============================================================
const prevBtn = document.getElementById('carouselPrev');
const nextBtn = document.getElementById('carouselNext');
const track = document.getElementById('carouselTrack');
const testimonialCards = document.querySelectorAll('.testimonial-card');

if (testimonialCards.length > 0 && prevBtn && nextBtn && track) {
    let currentIndex = 0;
    let autoPlay;

    function showTestimonial(index) {
        if (index < 0) index = testimonialCards.length - 1;
        if (index >= testimonialCards.length) index = 0;

        currentIndex = index;

        // Calculate the width of one card + the grid gap (24px)
        const cardWidth = testimonialCards[0].offsetWidth;
        const gap = 24;
        const offset = currentIndex * (cardWidth + gap);

        track.style.transform = `translateX(-${offset}px)`;
    }

    prevBtn.addEventListener('click', () => {
        clearInterval(autoPlay);
        showTestimonial(currentIndex - 1);
        startAutoPlay();
    });

    nextBtn.addEventListener('click', () => {
        clearInterval(autoPlay);
        showTestimonial(currentIndex + 1);
        startAutoPlay();
    });

    function startAutoPlay() {
        autoPlay = setInterval(() => {
            showTestimonial(currentIndex + 1);
        }, 5000);
    }

    // Initialize track layout
    showTestimonial(0);
    startAutoPlay();
}

// ============================================================
// PROJECT FILTER
// ============================================================
const filterBtns = document.querySelectorAll('.filter-btn');
const projectCards = document.querySelectorAll('#projectsGrid .project-card');

if (filterBtns.length > 0 && projectCards.length > 0) {
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');
                const show = filter === 'all' || category === filter;
                card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                if (show) {
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                    card.style.display = 'block';
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        if (card.getAttribute('data-category') !== filter && filter !== 'all') {
                            card.style.display = 'none';
                        }
                    }, 300);
                }
            });
        });
    });
}

// ============================================================
// SMOOTH SCROLL FOR ANCHOR LINKS
// ============================================================
document.querySelectorAll('a[href*="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        // Only handle same-page hash links
        if (href.startsWith('#') || href.includes(window.location.pathname + '#')) {
            const id = href.split('#')[1];
            const target = document.getElementById(id);
            if (target) {
                e.preventDefault();
                const navH = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-height')) || 72;
                const top = target.getBoundingClientRect().top + window.scrollY - navH - 20;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        }
    });
});

// ============================================================
// ACTIVE NAV LINK (scroll-spy)
// ============================================================
const sections = document.querySelectorAll('section[id]');
const navLinkEls = document.querySelectorAll('.nav-link');

if (sections.length > 0 && navLinkEls.length > 0) {
    window.addEventListener('scroll', () => {
        const scrollPos = window.scrollY + 100;
        sections.forEach(section => {
            const top = section.offsetTop;
            const height = section.offsetHeight;
            const id = section.getAttribute('id');

            if (scrollPos >= top && scrollPos < top + height) {
                navLinkEls.forEach(link => {
                    link.classList.toggle('active', link.getAttribute('href').includes(id));
                });
            }
        });
    });
}
