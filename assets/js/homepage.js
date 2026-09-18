/**
 * Parshv International School - Homepage Interactivity Script
 * Handles animated counters, gallery lightbox, smooth scroll & interactive cards.
 */

document.addEventListener('DOMContentLoaded', () => {
    // --------------------------------------------------------------------------
    // 1. Number Counter Animation on Scroll
    // --------------------------------------------------------------------------
    const counters = document.querySelectorAll('.parshv-stat-num');
    let hasAnimated = false;

    function animateCounters() {
        counters.forEach(counter => {
            const targetText = counter.innerText.trim();
            const numericMatch = targetText.match(/\d+/);
            if (!numericMatch) return;

            const target = parseInt(numericMatch[0], 10);
            const suffix = targetText.replace(numericMatch[0], '');
            let current = 0;
            const duration = 1600;
            const stepTime = Math.max(Math.floor(duration / target), 20);

            const timer = setInterval(() => {
                current += Math.ceil(target / (duration / stepTime));
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                counter.innerText = current + suffix;
            }, stepTime);
        });
    }

    if (counters.length > 0) {
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !hasAnimated) {
                    hasAnimated = true;
                    animateCounters();
                }
            });
        }, { threshold: 0.3 });

        const statsSection = document.querySelector('.parshv-stats-section');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }
    }

    // --------------------------------------------------------------------------
    // 2. Simple Image Lightbox Modal for Gallery & Campus Cards
    // --------------------------------------------------------------------------
    const galleryItems = document.querySelectorAll('.parshv-gallery-item, .parshv-fac-card');
    
    // Create modal container dynamically
    const modal = document.createElement('div');
    modal.className = 'parshv-lightbox-modal';
    modal.innerHTML = `
        <div class="parshv-lightbox-overlay"></div>
        <div class="parshv-lightbox-content">
            <button type="button" class="parshv-lightbox-close" aria-label="Close lightbox">&times;</button>
            <img src="" alt="Enlarged Campus View" class="parshv-lightbox-img">
            <div class="parshv-lightbox-caption"></div>
        </div>
    `;
    document.body.appendChild(modal);

    const lightboxImg = modal.querySelector('.parshv-lightbox-img');
    const lightboxCaption = modal.querySelector('.parshv-lightbox-caption');
    const lightboxClose = modal.querySelector('.parshv-lightbox-close');
    const lightboxOverlay = modal.querySelector('.parshv-lightbox-overlay');

    function openLightbox(src, title) {
        lightboxImg.src = src;
        lightboxCaption.innerText = title || 'Parshv International School';
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
        setTimeout(() => {
            lightboxImg.src = '';
        }, 300);
    }

    galleryItems.forEach(item => {
        item.addEventListener('click', () => {
            const img = item.querySelector('img');
            const titleEl = item.querySelector('.parshv-gallery-caption-title, .parshv-fac-title');
            if (img) {
                const title = titleEl ? titleEl.innerText : img.alt;
                openLightbox(img.src, title);
            }
        });
    });

    if (lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
    if (lightboxOverlay) lightboxOverlay.addEventListener('click', closeLightbox);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeLightbox();
        }
    });
});
