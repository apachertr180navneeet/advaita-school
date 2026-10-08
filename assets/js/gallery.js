/**
 * Advaita School of Excellence - Gallery Page Interactivity
 * Filtering, Instant Search, Sorting, Pagination & Lightbox Viewer
 */
document.addEventListener('DOMContentLoaded', function () {
    // Gallery Elements
    const filterButtons = document.querySelectorAll('.adv-gal-cat-btn');
    const searchInput = document.getElementById('advGallerySearch');
    const searchClearBtn = document.getElementById('advSearchClear');
    const sortSelect = document.getElementById('advGallerySort');
    const cardsGrid = document.getElementById('advGalleryGrid');
    const cards = Array.from(document.querySelectorAll('.adv-gal-card'));
    const emptyState = document.getElementById('advGalleryEmpty');
    const pageButtons = document.querySelectorAll('.adv-gal-page-btn');

    // Lightbox Elements
    const lightbox = document.getElementById('advGalleryLightbox');
    const lightboxImg = document.getElementById('advLightboxImg');
    const lightboxTitle = document.getElementById('advLightboxTitle');
    const lightboxCounter = document.getElementById('advLightboxCounter');
    const lightboxClose = document.getElementById('advLightboxClose');
    const lightboxPrev = document.getElementById('advLightboxPrev');
    const lightboxNext = document.getElementById('advLightboxNext');
    const lightboxThumbs = document.getElementById('advLightboxThumbs');

    let currentFilter = 'all';
    let currentSearch = '';
    let currentSort = 'latest';
    let currentAlbumCards = [];
    let currentLightboxIndex = 0;

    // Album photo collections (for rich multi-photo lightbox experience)
    const albumGalleries = {
        'academic': [
            { src: 'assets/images/gallery/academic.jpg', caption: 'Interactive Classroom Discussions & Smart Learning' },
            { src: 'assets/images/card-student-2.jpg', caption: 'High School Collaborative Learning Sessions' },
            { src: 'assets/images/fac-smart-class.jpg', caption: 'Digital Smart Class Technology' }
        ],
        'events': [
            { src: 'assets/images/gallery/dance.jpg', caption: 'Classical Folk Dance at Annual Fest' },
            { src: 'assets/images/gallery/cultural.jpg', caption: 'Vibrant Cultural Celebrations' },
            { src: 'assets/images/event-1.jpg', caption: 'School Annual Function Grand Gathering' }
        ],
        'sports': [
            { src: 'assets/images/gallery/sports.jpg', caption: 'Annual Football Championship Finals' },
            { src: 'assets/images/fac-sports.jpg', caption: 'Athletics & Track Events' },
            { src: 'assets/images/event-2.jpg', caption: 'Inter-House Sports Trophy Presentation' }
        ],
        'arts': [
            { src: 'assets/images/gallery/arts.jpg', caption: 'Creative Canvas Painting & Fine Arts Studio' },
            { src: 'assets/images/fac-arts.jpg', caption: 'Sculpture & Handicrafts Exhibition' }
        ],
        'student-life': [
            { src: 'assets/images/gallery/student-life.jpg', caption: 'Student Camaraderie on Green Courtyard' },
            { src: 'assets/images/card-student-1.jpg', caption: 'Leadership and Friendship in Campus Life' },
            { src: 'assets/images/about-campus-courtyard.jpg', caption: 'Student Assembly and Gatherings' }
        ],
        'infrastructure': [
            { src: 'assets/images/gallery/campus.jpg', caption: 'Main Campus Building and Entrance Facade' },
            { src: 'assets/images/fac-library.jpg', caption: 'State-of-the-Art Central Library' },
            { src: 'assets/images/fac-science-lab.jpg', caption: 'Advanced Science Laboratory Wing' }
        ],
        'workshops': [
            { src: 'assets/images/gallery/workshops.jpg', caption: 'Chemistry & Physics Practical Lab Sessions' },
            { src: 'assets/images/gallery/science-exhibition.jpg', caption: 'STEM Innovation Project Display' },
            { src: 'assets/images/fac-robotics.jpg', caption: 'Robotics & AI Hands-on Workshop' }
        ],
        'outreach': [
            { src: 'assets/images/gallery/outreach.jpg', caption: 'Community Tree Plantation Drive' },
            { src: 'assets/images/card-student-4.jpg', caption: 'Clean Campus and Social Service Project' }
        ]
    };

    // Filter & Search handler
    function applyFilters() {
        let visibleCount = 0;
        const query = currentSearch.toLowerCase().trim();

        cards.forEach(card => {
            const cardCat = card.getAttribute('data-category');
            const cardTitle = (card.getAttribute('data-title') || '').toLowerCase();
            const cardCount = (card.getAttribute('data-count') || '').toLowerCase();

            const matchesCategory = (currentFilter === 'all' || cardCat === currentFilter);
            const matchesSearch = query === '' || cardTitle.includes(query) || cardCat.includes(query) || cardCount.includes(query);

            if (matchesCategory && matchesSearch) {
                card.style.display = '';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        if (emptyState) {
            if (visibleCount === 0) {
                emptyState.classList.add('visible');
            } else {
                emptyState.classList.remove('visible');
            }
        }
    }

    // Category button clicks
    filterButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            filterButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentFilter = this.getAttribute('data-category') || 'all';
            applyFilters();
        });
    });

    // Search input
    if (searchInput) {
        searchInput.addEventListener('input', function () {
            currentSearch = this.value;
            if (searchClearBtn) {
                if (currentSearch.length > 0) {
                    searchClearBtn.classList.add('visible');
                } else {
                    searchClearBtn.classList.remove('visible');
                }
            }
            applyFilters();
        });
    }

    if (searchClearBtn) {
        searchClearBtn.addEventListener('click', function () {
            if (searchInput) {
                searchInput.value = '';
                currentSearch = '';
                searchClearBtn.classList.remove('visible');
                applyFilters();
                searchInput.focus();
            }
        });
    }

    // Sort Handler
    if (sortSelect) {
        sortSelect.addEventListener('change', function () {
            currentSort = this.value;
            sortCards();
        });
    }

    function sortCards() {
        const sorted = cards.slice().sort((a, b) => {
            const titleA = a.getAttribute('data-title') || '';
            const titleB = b.getAttribute('data-title') || '';
            const countA = parseInt(a.getAttribute('data-count') || '0', 10);
            const countB = parseInt(b.getAttribute('data-count') || '0', 10);
            const indexA = parseInt(a.getAttribute('data-index') || '0', 10);
            const indexB = parseInt(b.getAttribute('data-index') || '0', 10);

            if (currentSort === 'latest') return indexA - indexB;
            if (currentSort === 'oldest') return indexB - indexA;
            if (currentSort === 'photos-desc') return countB - countA;
            if (currentSort === 'title-asc') return titleA.localeCompare(titleB);
            return 0;
        });

        sorted.forEach(card => cardsGrid.appendChild(card));
    }

    // Pagination Click handler
    pageButtons.forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            if (this.classList.contains('disabled')) return;

            const isPrev = this.classList.contains('prev-btn');
            const isNext = this.classList.contains('next-btn');

            let activePageBtn = document.querySelector('.adv-gal-page-btn.active');
            let currentPageNum = activePageBtn ? parseInt(activePageBtn.textContent.trim(), 10) : 1;

            if (isPrev) {
                if (currentPageNum > 1) {
                    setPage(currentPageNum - 1);
                }
            } else if (isNext) {
                if (currentPageNum < 5) {
                    setPage(currentPageNum + 1);
                }
            } else {
                const targetPage = parseInt(this.textContent.trim(), 10);
                if (!isNaN(targetPage)) {
                    setPage(targetPage);
                }
            }
        });
    });

    function setPage(pageNum) {
        pageButtons.forEach(b => {
            if (!b.classList.contains('prev-btn') && !b.classList.contains('next-btn')) {
                if (parseInt(b.textContent.trim(), 10) === pageNum) {
                    b.classList.add('active');
                } else {
                    b.classList.remove('active');
                }
            }
        });

        // Smooth scroll to top of gallery section
        const gridSection = document.getElementById('advGalleryGridSection');
        if (gridSection) {
            gridSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    // =========================================================================
    // Lightbox Implementation
    // =========================================================================
    function openLightbox(card) {
        const category = card.getAttribute('data-category') || 'academic';
        const title = card.getAttribute('data-title') || 'Album';
        const mainImg = card.querySelector('.adv-gal-card-thumb img');
        const mainSrc = mainImg ? mainImg.getAttribute('src') : '';

        // Build list of photos
        let photos = albumGalleries[category] || [];
        if (!photos.length || photos[0].src !== mainSrc) {
            photos = [{ src: mainSrc, caption: title }, ...photos.filter(p => p.src !== mainSrc)];
        }

        currentAlbumCards = photos;
        currentLightboxIndex = 0;

        lightboxTitle.textContent = title;
        buildLightboxThumbs();
        showLightboxPhoto(0);

        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function showLightboxPhoto(index) {
        if (!currentAlbumCards.length) return;
        currentLightboxIndex = (index + currentAlbumCards.length) % currentAlbumCards.length;
        const photo = currentAlbumCards[currentLightboxIndex];

        lightboxImg.src = photo.src;
        lightboxImg.alt = photo.caption || 'Advaita Gallery Photo';
        lightboxCounter.textContent = `${currentLightboxIndex + 1} / ${currentAlbumCards.length}`;

        // Update active thumb
        const thumbs = lightboxThumbs.querySelectorAll('.adv-gal-lightbox-thumb-item');
        thumbs.forEach((t, i) => {
            if (i === currentLightboxIndex) {
                t.classList.add('active');
            } else {
                t.classList.remove('active');
            }
        });
    }

    function buildLightboxThumbs() {
        lightboxThumbs.innerHTML = '';
        currentAlbumCards.forEach((photo, idx) => {
            const thumb = document.createElement('div');
            thumb.className = `adv-gal-lightbox-thumb-item ${idx === 0 ? 'active' : ''}`;
            thumb.innerHTML = `<img src="${photo.src}" alt="Thumb ${idx + 1}">`;
            thumb.addEventListener('click', () => showLightboxPhoto(idx));
            lightboxThumbs.appendChild(thumb);
        });
    }

    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }

    // Attach card click handlers
    cards.forEach(card => {
        card.addEventListener('click', function (e) {
            // Open on card or card button click
            openLightbox(this);
        });
    });

    if (lightboxClose) {
        lightboxClose.addEventListener('click', closeLightbox);
    }

    if (lightboxPrev) {
        lightboxPrev.addEventListener('click', (e) => {
            e.stopPropagation();
            showLightboxPhoto(currentLightboxIndex - 1);
        });
    }

    if (lightboxNext) {
        lightboxNext.addEventListener('click', (e) => {
            e.stopPropagation();
            showLightboxPhoto(currentLightboxIndex + 1);
        });
    }

    // Close on backdrop click (outside image)
    if (lightbox) {
        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox || e.target.classList.contains('adv-gal-lightbox-stage')) {
                closeLightbox();
            }
        });
    }

    // Keyboard navigation
    document.addEventListener('keydown', function (e) {
        if (!lightbox.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') showLightboxPhoto(currentLightboxIndex - 1);
        if (e.key === 'ArrowRight') showLightboxPhoto(currentLightboxIndex + 1);
    });

    // Mobile Navbar Drawer Handler
    const mobileToggle = document.getElementById('advNavMobileToggle');
    const drawerClose = document.getElementById('advDrawerClose');
    const drawer = document.getElementById('advNavbarDrawer');
    const backdrop = document.getElementById('advDrawerBackdrop');

    if (mobileToggle && drawer && backdrop) {
        mobileToggle.addEventListener('click', () => {
            drawer.classList.add('is-open');
            backdrop.classList.add('is-open');
            document.body.style.overflow = 'hidden';
        });
    }

    function closeMobileNav() {
        if (drawer) drawer.classList.remove('is-open');
        if (backdrop) backdrop.classList.remove('is-open');
        document.body.style.overflow = '';
    }

    if (drawerClose) drawerClose.addEventListener('click', closeMobileNav);
    if (backdrop) backdrop.addEventListener('click', closeMobileNav);
});
