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

    // Per-card photo collections for a rich, specific lightbox experience (Cards 1 to 27)
    const cardGalleries = {
        '1': [
            { src: 'assets/images/gallery-assembly.jpg', caption: 'Advaita School Morning Assembly & Community Prayer' },
            { src: 'assets/images/gallery/gallery-parachute-lawn-building.jpg', caption: 'Lush Green Campus Lawns & School Community Life' },
            { src: 'assets/images/gallery-day-1.jpg', caption: 'Joyful Day One Welcome & Orientation at Advaita' }
        ],
        '2': [
            { src: 'assets/images/gallery/gallery-parachute-lawn-building.jpg', caption: 'Campus Lawn Games, Parachute Play & Team Spirit' },
            { src: 'assets/images/gallery-assembly.jpg', caption: 'Morning Gatherings on the Expansive Green Lawn' },
            { src: 'assets/images/about-campus-courtyard.jpg', caption: 'Vibrant Central Courtyard & Student Gathering Space' }
        ],
        '3': [
            { src: 'assets/images/gallery-day-1.jpg', caption: 'First Day of School: Warm Smiles & Welcoming Mentors' },
            { src: 'assets/images/gallery-assembly.jpg', caption: 'Whole-School Morning Address & Values Session' },
            { src: 'assets/images/gallery/gallery-parachute-lawn-building.jpg', caption: 'Team Building on Campus Lawn' }
        ],
        '4': [
            { src: 'assets/images/gallery/gallery-school-band.jpg', caption: 'School Marching Band & Ceremonial Drum Troupe' },
            { src: 'assets/images/gallery/cultural.jpg', caption: 'Annual Cultural Festival: Theatrical Drama & Costumes' },
            { src: 'assets/images/gallery/dance.jpg', caption: 'Classical Folk Dance Performances by Advaita Students' }
        ],
        '5': [
            { src: 'assets/images/gallery/cultural.jpg', caption: 'Annual Day Celebrations & Student Stage Performances' },
            { src: 'assets/images/gallery/dance.jpg', caption: 'Traditional Folk Dance & Group Choreography' },
            { src: 'assets/images/gallery/gallery-school-band.jpg', caption: 'Ceremonial Band Parade & Musical Salutes' }
        ],
        '6': [
            { src: 'assets/images/gallery/dance.jpg', caption: 'Classical Folk Dance & Rhythmic Performances' },
            { src: 'assets/images/gallery/cultural.jpg', caption: 'Spectacular Annual Gathering Stage Show' },
            { src: 'assets/images/gallery/gallery-school-band.jpg', caption: 'School Brass and Percussion Band' }
        ],
        '7': [
            { src: 'assets/images/gallery/gallery-math-science-lab.jpg', caption: 'Interactive Mathematics & Composite Science Lab Experiments' },
            { src: 'assets/images/gallery/science-lab.png', caption: 'CBSE Compliant 56 Sq. Mtr. Composite Science Laboratory' },
            { src: 'assets/images/gallery/gallery-classroom-learning.jpg', caption: 'Smart Classroom Conceptual Demonstrations' }
        ],
        '8': [
            { src: 'assets/images/gallery/gallery-classroom-learning.jpg', caption: 'Interactive Smart Classroom with Digital Displays' },
            { src: 'assets/images/fac-smart-class.jpg', caption: 'Digitally Enabled Smart Board & Modern Ergonomic Seating' },
            { src: 'assets/images/gallery/gallery-math-science-lab.jpg', caption: 'Experiential Hands-On Learning Models' }
        ],
        '9': [
            { src: 'assets/images/gallery/robotics-lab.png', caption: 'Robotics, STEAM & Computer Innovation Lab (56 Sq. Mtr.)' },
            { src: 'assets/images/gallery/computer-lab.png', caption: 'Computer Science & AI Coding Terminal Arena' },
            { src: 'assets/images/gallery/gallery-math-science-lab.jpg', caption: 'Physics, Chemistry & Biology Demonstration Tables' }
        ],
        '10': [
            { src: 'assets/images/gallery/educational-tour.jpg', caption: 'Heritage & Science Museum Educational Study Tour' },
            { src: 'assets/images/gallery/student-life.jpg', caption: 'Outbound Excursions, Field Notes & Outdoor Discovery' },
            { src: 'assets/images/gallery/outreach.jpg', caption: 'Community Interaction & Regional Study Trips' }
        ],
        '11': [
            { src: 'assets/images/gallery/student-life.jpg', caption: 'Nature Trails, Environmental Study & Eco-Clubs' },
            { src: 'assets/images/gallery/educational-tour.jpg', caption: 'Historical Monuments & Cultural Heritage Field Study' },
            { src: 'assets/images/gallery/outreach.jpg', caption: 'Educational Field Visits & Exploration' }
        ],
        '12': [
            { src: 'assets/images/gallery/gallery-football-match-sprint.jpg', caption: 'Inter-House Football Championship & Sprint on Green Turf' },
            { src: 'assets/images/gallery/gallery-football-juggling-boy.jpg', caption: 'Freestyle Precision Ball Control & Soccer Drills' },
            { src: 'assets/images/gallery/gallery-sports-field-agility.jpg', caption: 'Full-Sized Campus Sports Field & Athletics Arena' }
        ],
        '13': [
            { src: 'assets/images/gallery/gallery-sports-field-agility.jpg', caption: 'Multi-Sport Campus Ground & 200m Track Training' },
            { src: 'assets/images/gallery/gallery-football-match-sprint.jpg', caption: 'Competitive House Matches & Track Athletics' },
            { src: 'assets/images/gallery/gallery-gymnastics-cartwheel.jpg', caption: 'Outdoor Physical Education & Fitness Agility' }
        ],
        '14': [
            { src: 'assets/images/gallery/gallery-gymnastics-cartwheel.jpg', caption: 'Gymnastics Cartwheels, Tumbling & Floor Flexibility' },
            { src: 'assets/images/gallery/gallery-sports-field-agility.jpg', caption: 'Speed Drills, Obstacle Hurdles & Athletic Training' },
            { src: 'assets/images/gallery/gallery-hula-hoop-kid.jpg', caption: 'Motor Balance & Ring Coordination Drills' }
        ],
        '15': [
            { src: 'assets/images/gallery/gallery-football-juggling-boy.jpg', caption: 'Football Freestyle Skills & Dedicated Technique Practice' },
            { src: 'assets/images/gallery/gallery-football-match-sprint.jpg', caption: 'Football League Matches on Campus Turf' },
            { src: 'assets/images/gallery/gallery-sports-field-agility.jpg', caption: 'Agility & Physical Stamina Conditioning' }
        ],
        '16': [
            { src: 'assets/images/gallery/gallery-foundation-achievers.jpg', caption: 'IIT-JEE & NEET Integrated Foundation Batch Achievers' },
            { src: 'assets/images/gallery/achievements.jpg', caption: 'Merit Scholars, Olympiad Winners & Board Exam Honors' },
            { src: 'assets/images/results/topper-om-dhoot.jpg', caption: 'Academic Excellence: Board Examination Top Performers' }
        ],
        '17': [
            { src: 'assets/images/gallery/achievements.jpg', caption: 'Student Council Investiture Ceremony & Badging' },
            { src: 'assets/images/gallery/gallery-foundation-achievers.jpg', caption: 'House Captains, Head Boy, Head Girl & School Prefects' },
            { src: 'assets/images/gallery-assembly.jpg', caption: 'Leadership Oath & Morning Council Assembly' }
        ],
        '18': [
            { src: 'assets/images/gallery/gallery-art-studio-origami-planes.jpg', caption: 'Art Studio: Creative Origami Paper Planes with Mentors' },
            { src: 'assets/images/gallery/gallery-painted-hands-girl.jpg', caption: 'Joyful Hand Painting & Artistic Self Expression' },
            { src: 'assets/images/gallery/gallery-art-circle-kids.jpg', caption: 'Collaborative Creative Arts & Color Day' }
        ],
        '19': [
            { src: 'assets/images/gallery/gallery-painted-hands-girl.jpg', caption: 'Expressive Colors: Joyful Hand Painting on Lawn' },
            { src: 'assets/images/gallery/gallery-art-circle-kids.jpg', caption: 'Celebration of Colors: Circular Painted Hands Activity' },
            { src: 'assets/images/gallery/gallery-art-studio-origami-planes.jpg', caption: 'Art Studio Origami & Craft Explorations' }
        ],
        '20': [
            { src: 'assets/images/gallery/gallery-art-circle-kids.jpg', caption: 'Collaborative Art Circle: Colors of Friendship & Joy' },
            { src: 'assets/images/gallery/gallery-painted-hands-girl.jpg', caption: 'Creative Hand Art & Freeform Expression' },
            { src: 'assets/images/gallery/arts.jpg', caption: 'Canvas Painting, Fine Arts & Sketching Studio' }
        ],
        '21': [
            { src: 'assets/images/gallery/gallery-splash-pool-kids-play.jpg', caption: 'Early Years Aquatic Splash Pool with Rainbow Slide' },
            { src: 'assets/images/gallery/gallery-splash-pool-fun.jpg', caption: 'Supervised Water Play Arena & Joyful Splashing' },
            { src: 'assets/images/prog-early-years.jpg', caption: 'Play-Based Early Childhood Care & Education' }
        ],
        '22': [
            { src: 'assets/images/gallery/gallery-crawl-tunnel-kids.jpg', caption: 'Kindergarten Caterpillar Crawl Tunnel & Motor Play' },
            { src: 'assets/images/gallery/gallery-hula-hoop-kid.jpg', caption: 'Obstacle Course Stepping & Balance Activities' },
            { src: 'assets/images/gallery/gallery-parachute-activity.jpg', caption: 'Rainbow Parachute Fun on Open Lawns' }
        ],
        '23': [
            { src: 'assets/images/gallery/gallery-hula-hoop-kid.jpg', caption: 'Ring Stepping Coordination & Gross Motor Agility' },
            { src: 'assets/images/gallery/gallery-crawl-tunnel-kids.jpg', caption: 'Caterpillar Tunnel Crawl & Kindergarten Obstacles' },
            { src: 'assets/images/gallery/gallery-splash-pool-kids-play.jpg', caption: 'Kids Active Play & Outdoor Fun' }
        ],
        '24': [
            { src: 'assets/images/gallery/gallery-parachute-activity.jpg', caption: 'Multi-Color Rainbow Parachute Cooperative Play' },
            { src: 'assets/images/gallery/gallery-parachute-lawn-building.jpg', caption: 'Expansive Campus Greens & Team Games' },
            { src: 'assets/images/gallery/gallery-crawl-tunnel-kids.jpg', caption: 'Early Years Active Group Play' }
        ],
        '25': [
            { src: 'assets/images/gallery/campus-building.png', caption: '10,000 Sq. Mtrs. Modern Campus Architecture & Smart Wings' },
            { src: 'assets/images/about-campus-courtyard.jpg', caption: 'Lush Central Courtyard & Architectural Facade' },
            { src: 'assets/images/about-hero-building.jpg', caption: 'Advaita School of Excellence Campus Panorama' }
        ],
        '26': [
            { src: 'assets/images/about-campus-courtyard.jpg', caption: 'Green Central Courtyard & Landscaped Assembly Grounds' },
            { src: 'assets/images/gallery/campus-building.png', caption: 'Eco-Friendly Campus & Architectural Landscaping' },
            { src: 'assets/images/gallery/gallery-sports-field-agility.jpg', caption: 'Expansive Outdoor Sports Turf & Campus Lawns' }
        ],
        '27': [
            { src: 'assets/images/fac-library.jpg', caption: 'Resource-Rich Central Knowledge Library & Reading Bay' },
            { src: 'assets/images/gallery/gallery-classroom-learning.jpg', caption: 'Quiet Learning Spaces & Reference Collection' },
            { src: 'assets/images/fac-smart-class.jpg', caption: 'Digitally Integrated Reading & Learning Environments' }
        ]
    };

    // Fallback category photo collections for all 9 official categories
    const albumGalleries = {
        'life-at-advaita': [
            { src: 'assets/images/gallery-assembly.jpg', caption: 'Advaita School Morning Assembly & Community Life' },
            { src: 'assets/images/gallery/gallery-parachute-lawn-building.jpg', caption: 'Campus Lawn Games & Cooperative Teamwork' },
            { src: 'assets/images/gallery-day-1.jpg', caption: 'Day One Celebrations & Warm Student Orientation' }
        ],
        'events-celebrations': [
            { src: 'assets/images/gallery/gallery-school-band.jpg', caption: 'Advaita School Marching Band & Drum Troupe' },
            { src: 'assets/images/gallery/cultural.jpg', caption: 'Annual Cultural Day Drama & Celebrations' },
            { src: 'assets/images/gallery/dance.jpg', caption: 'Classical Folk Dance at Annual Fest' }
        ],
        'academics-science': [
            { src: 'assets/images/gallery/gallery-math-science-lab.jpg', caption: 'Interactive Mathematics & Practical Lab Experiments' },
            { src: 'assets/images/gallery/gallery-classroom-learning.jpg', caption: 'Smart Classroom Digital Displays & Teaching' },
            { src: 'assets/images/gallery/robotics-lab.png', caption: 'STEAM Robotics & AI Innovation Lab' },
            { src: 'assets/images/gallery/science-lab.png', caption: 'Composite Science Laboratory' }
        ],
        'educational-tours': [
            { src: 'assets/images/gallery/educational-tour.jpg', caption: 'Heritage & Science Museum Educational Study Tours' },
            { src: 'assets/images/gallery/student-life.jpg', caption: 'Environmental Nature Walks & Outbound Trips' },
            { src: 'assets/images/gallery/outreach.jpg', caption: 'Community Learning & Regional Study Expeditions' }
        ],
        'sports-competitions': [
            { src: 'assets/images/gallery/gallery-football-match-sprint.jpg', caption: 'Inter-House Football Championship & Turf Sprint' },
            { src: 'assets/images/gallery/gallery-sports-field-agility.jpg', caption: 'Sports Arena & Athletic Running Track' },
            { src: 'assets/images/gallery/gallery-gymnastics-cartwheel.jpg', caption: 'Gymnastics Cartwheels & Flexibility Training' },
            { src: 'assets/images/gallery/gallery-football-juggling-boy.jpg', caption: 'Freestyle Ball Control & Soccer Precision' }
        ],
        'student-leadership': [
            { src: 'assets/images/gallery/gallery-foundation-achievers.jpg', caption: 'IIT-JEE & NEET Foundation Scholars' },
            { src: 'assets/images/gallery/achievements.jpg', caption: 'Student Council Investiture Ceremony & Badging' },
            { src: 'assets/images/results/topper-om-dhoot.jpg', caption: 'Academic Board Examination Toppers' }
        ],
        'art-culture': [
            { src: 'assets/images/gallery/gallery-art-studio-origami-planes.jpg', caption: 'Art Studio Origami & Paper Sculpture Workshops' },
            { src: 'assets/images/gallery/gallery-painted-hands-girl.jpg', caption: 'Joyful Hand Painting & Artistic Self Expression' },
            { src: 'assets/images/gallery/gallery-art-circle-kids.jpg', caption: 'Collaborative Creative Arts & Color Day' },
            { src: 'assets/images/gallery/arts.jpg', caption: 'Canvas Painting & Visual Arts Studio' }
        ],
        'advaita-kids': [
            { src: 'assets/images/gallery/gallery-splash-pool-kids-play.jpg', caption: 'Splash Pool & Kids Aquatic Play Park' },
            { src: 'assets/images/gallery/gallery-crawl-tunnel-kids.jpg', caption: 'Kindergarten Caterpillar Tunnel Crawl' },
            { src: 'assets/images/gallery/gallery-hula-hoop-kid.jpg', caption: 'Ring Agility Stepping & Motor Coordination' },
            { src: 'assets/images/gallery/gallery-parachute-activity.jpg', caption: 'Rainbow Parachute Active Cooperative Play' }
        ],
        'campus-facilities': [
            { src: 'assets/images/gallery/campus-building.png', caption: '10,000 Sq. Mtrs. Modern Academic Campus Architecture' },
            { src: 'assets/images/about-campus-courtyard.jpg', caption: 'Central Landscaped Green Courtyard & Lawns' },
            { src: 'assets/images/fac-library.jpg', caption: 'Resource-Rich Central Knowledge Library' },
            { src: 'assets/images/fac-smart-class.jpg', caption: 'Smart Technologically Enabled Classrooms' }
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
        const cardIndex = card.getAttribute('data-index');
        const mainImg = card.querySelector('.adv-gal-card-thumb img');
        const mainSrc = mainImg ? mainImg.getAttribute('src') : '';

        // Build list of photos: card-specific first, then category fallback
        let photos = (cardIndex && cardGalleries[cardIndex]) ? cardGalleries[cardIndex] : (albumGalleries[category] || []);
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
