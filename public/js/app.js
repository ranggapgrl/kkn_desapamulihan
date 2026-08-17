// Mobile menu toggle
(function () {
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    if (!toggle || !menu) return;

    toggle.addEventListener('click', function () {
        menu.classList.toggle('hidden');
        iconOpen.classList.toggle('hidden');
        iconClose.classList.toggle('hidden');
        toggle.setAttribute('aria-expanded', menu.classList.contains('hidden') ? 'false' : 'true');
    });
})();

// Animated counters for the stat cards on the homepage
(function () {
    const counters = document.querySelectorAll('.counter');
    if (!counters.length) return;

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function animateCounter(el) {
        const target = parseInt(el.dataset.target, 10) || 0;

        if (prefersReducedMotion) {
            el.textContent = target.toLocaleString('id-ID');
            return;
        }

        const duration = 1200;
        const start = performance.now();

        function tick(now) {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const value = Math.floor(eased * target);
            el.textContent = value.toLocaleString('id-ID');
            if (progress < 1) {
                requestAnimationFrame(tick);
            } else {
                el.textContent = target.toLocaleString('id-ID');
            }
        }
        requestAnimationFrame(tick);
    }

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.4 });

    counters.forEach(function (el) {
        observer.observe(el);
    });
})();