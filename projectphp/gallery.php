<?php
/**
 * Gallery Page - Advaita School of Excellence
 * Moments That Matter: Vibrant Journey through Academics, Events, Arts, and Campus Life
 * Strictly 1:1 match with official reference design mockup
 * Clean Semantic HTML - Header and Footer Preserved
 */
$pageTitle = 'Gallery - Advaita School of Excellence | Moments That Matter';
$activePage = 'gallery';

require_once __DIR__.'/includes/header.php';
?>

<!-- Dedicated Gallery Page Stylesheet -->
<link rel="stylesheet" href="assets/css/gallery.css?v=<?php echo file_exists(__DIR__.'/assets/css/gallery.css') ? filemtime(__DIR__.'/assets/css/gallery.css') : '1.0'; ?>">

<main id="main" class="main-content-wrapper adv-gallery-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: "MOMENTS THAT MATTER" & SCULPTED CAMPUS VISUAL
         ========================================================================= -->
    <section class="adv-gal-hero-section">
        <!-- Decorative subtle pattern dots on the far left -->
        <div class="adv-gal-hero-dots-decor" aria-hidden="true"></div>

        <!-- Full-Bleed Right Visual: Sculpted Campus Panorama with Royal Blue Ribbon -->
        <div class="adv-gal-hero-curved-visual">
            <svg class="adv-gal-hero-curved-svg" viewBox="0 0 1000 480" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                    <clipPath id="advHeroCurveClip">
                        <path d="M 0 -10 C 25 130, 80 270, 220 365 C 360 450, 600 475, 1000 480 L 1000 -10 Z" />
                    </clipPath>
                </defs>

                <!-- Campus Photo clipped to the organic curve -->
                <image href="assets/images/about-hero-building.jpg" xlink:href="assets/images/about-hero-building.jpg" x="0" y="0" width="1000" height="480" preserveAspectRatio="xMidYMid slice" clip-path="url(#advHeroCurveClip)"/>

                <!-- Royal Blue Organic Ribbon Stroke along the curved boundary -->
                <path d="M 0 -10 C 25 130, 80 270, 220 365 C 360 450, 600 475, 1000 480" stroke="#0084FF" stroke-width="26" fill="none" stroke-linecap="round"/>
            </svg>

            <!-- "More Than A School" Script Badge in Top-Right Sky Area -->
            <div class="adv-gal-hero-badge" aria-label="More Than A School">
                <span class="badge-text">More<br>Than A School</span>
                <svg class="badge-underline" viewBox="0 0 76 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 9.5C24 3.5 54 2 74 6" stroke="#F37021" stroke-width="2.8" stroke-linecap="round"/>
                </svg>
            </div>
        </div>

        <div class="adv-gal-container">
            <!-- Breadcrumbs -->
            <nav class="adv-gal-breadcrumb" aria-label="Breadcrumb">
                <a href="index.php">Home</a>
                <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                <span class="current">Gallery</span>
            </nav>

            <div class="adv-gal-hero-grid">
                <!-- Left Content -->
                <div class="adv-gal-hero-content">
                    <div class="adv-gal-kicker">
                        <span class="kicker-line">—</span> MOMENTS THAT MATTER
                    </div>

                    <h1 class="adv-gal-hero-title">Gallery</h1>

                    <h2 class="adv-gal-hero-subtitle">
                        A glimpse into our <span class="adv-gal-accent-text">vibrant journey.</span>
                    </h2>

                    <p class="adv-gal-hero-desc">
                        Explore moments of learning, celebration, creativity, and community life at Advaita School of Excellence.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. CATEGORY FILTER ROW: 9 Rounded Pill Cards
         ========================================================================= -->
    <section class="adv-gal-categories-section">
        <div class="adv-gal-container">
            <div class="adv-gal-filters-scroll" role="tablist" aria-label="Gallery category filter">
                <!-- 1. All Photos -->
                <button type="button" class="adv-gal-cat-btn active" data-category="all" role="tab" aria-selected="true">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-camera"></i>
                    </div>
                    <span class="cat-name">All Photos</span>
                </button>

                <!-- 2. Academic Activities -->
                <button type="button" class="adv-gal-cat-btn" data-category="academic" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <span class="cat-name">Academic<br>Activities</span>
                </button>

                <!-- 3. Events & Celebrations -->
                <button type="button" class="adv-gal-cat-btn" data-category="events" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <span class="cat-name">Events &amp;<br>Celebrations</span>
                </button>

                <!-- 4. Sports & Games -->
                <button type="button" class="adv-gal-cat-btn" data-category="sports" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-volleyball"></i>
                    </div>
                    <span class="cat-name">Sports &amp;<br>Games</span>
                </button>

                <!-- 5. Arts & Culture -->
                <button type="button" class="adv-gal-cat-btn" data-category="arts" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-masks-theater"></i>
                    </div>
                    <span class="cat-name">Arts &amp;<br>Culture</span>
                </button>

                <!-- 6. Student Life -->
                <button type="button" class="adv-gal-cat-btn" data-category="student-life" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <span class="cat-name">Student<br>Life</span>
                </button>

                <!-- 7. Campus Infrastructure -->
                <button type="button" class="adv-gal-cat-btn" data-category="infrastructure" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-school"></i>
                    </div>
                    <span class="cat-name">Campus<br>Infrastructure</span>
                </button>

                <!-- 8. Workshops & Competitions -->
                <button type="button" class="adv-gal-cat-btn" data-category="workshops" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-flask"></i>
                    </div>
                    <span class="cat-name">Workshops &amp;<br>Competitions</span>
                </button>

                <!-- 9. Community Outreach -->
                <button type="button" class="adv-gal-cat-btn" data-category="outreach" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                    </div>
                    <span class="cat-name">Community<br>Outreach</span>
                </button>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. SEARCH & SORT TOOLBAR
         ========================================================================= -->
    <section class="adv-gal-toolbar-section">
        <div class="adv-gal-container">
            <div class="adv-gal-toolbar">
                <!-- Search Box -->
                <div class="adv-gal-search-box">
                    <i class="fa-solid fa-magnifying-glass search-icon" aria-hidden="true"></i>
                    <input type="text" id="advGallerySearch" class="adv-gal-search-input" placeholder="Search in gallery..." aria-label="Search gallery albums">
                    <button type="button" id="advSearchClear" class="adv-gal-search-clear" aria-label="Clear search text">&times;</button>
                </div>

                <!-- Sort Dropdown -->
                <div class="adv-gal-sort-box">
                    <i class="fa-solid fa-arrow-down-short-wide sort-lead-icon" aria-hidden="true"></i>
                    <select id="advGallerySort" class="adv-gal-sort-select" aria-label="Sort gallery albums">
                        <option value="latest">Latest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="photos-desc">Most Photos</option>
                        <option value="title-asc">A to Z</option>
                    </select>
                    <i class="fa-solid fa-chevron-down sort-chevron" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. GALLERY GRID: 12 ALBUM CARDS (4 COLUMNS)
         ========================================================================= -->
    <section class="adv-gal-grid-section" id="advGalleryGridSection">
        <div class="adv-gal-container">
            <div class="adv-gal-grid" id="advGalleryGrid">

                <!-- Card 1: Academic Activities (Math Lab) -->
                <article class="adv-gal-card" data-category="academic" data-title="Mathematics & Practical Labs" data-count="38" data-index="1">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-math-science-lab.jpg" alt="Mathematics & Practical Labs" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #fee2e2; color: #ef4444;">
                                <i class="fa-solid fa-flask-vial"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Math &amp; Practical Labs</h3>
                                <span class="adv-gal-card-count">38 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #ef4444;" aria-label="View Mathematics & Practical Labs">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 2: Events & Celebrations (Band) -->
                <article class="adv-gal-card" data-category="events" data-title="School Band & Assembly Events" data-count="45" data-index="2">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-school-band.jpg" alt="School Band & Assembly Events" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #ffedd5; color: #f97316;">
                                <i class="fa-solid fa-drum"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">School Band &amp; Events</h3>
                                <span class="adv-gal-card-count">45 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #f97316;" aria-label="View School Band & Assembly Events">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 3: Sports & Games (Football Match) -->
                <article class="adv-gal-card" data-category="sports" data-title="Football League & Athletic Action" data-count="34" data-index="3">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-football-match-sprint.jpg" alt="Football League & Athletic Action" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #dcfce7; color: #22c55e;">
                                <i class="fa-solid fa-futbol"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Football Turf Action</h3>
                                <span class="adv-gal-card-count">34 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #22c55e;" aria-label="View Football League & Athletic Action">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 4: Arts & Culture (Art Studio Origami Planes) -->
                <article class="adv-gal-card" data-category="arts" data-title="Art Studio & Origami Craft" data-count="42" data-index="4">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-art-studio-origami-planes.jpg" alt="Art Studio & Origami Craft" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #f3e8ff; color: #8b5cf6;">
                                <i class="fa-solid fa-paper-plane"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Art Studio &amp; Origami</h3>
                                <span class="adv-gal-card-count">42 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #8b5cf6;" aria-label="View Art Studio & Origami Craft">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 5: Student Life (Parachute Building Lawn) -->
                <article class="adv-gal-card" data-category="student-life" data-title="Student Life & Teamwork" data-count="36" data-index="5">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-parachute-lawn-building.jpg" alt="Student Life & Teamwork" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #fce7f3; color: #ec4899;">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Student Life &amp; Teamwork</h3>
                                <span class="adv-gal-card-count">36 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #ec4899;" aria-label="View Student Life & Teamwork">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 6: Infrastructure (Splash Pool Kids Play) -->
                <article class="adv-gal-card" data-category="infrastructure" data-title="Splash Pool & Kids Water Arena" data-count="28" data-index="6">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-splash-pool-kids-play.jpg" alt="Splash Pool & Kids Water Arena" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #e0f2fe; color: #0284c7;">
                                <i class="fa-solid fa-water-ladder"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Splash Pool &amp; Play Arena</h3>
                                <span class="adv-gal-card-count">28 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #0284c7;" aria-label="View Splash Pool & Kids Water Arena">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 7: Sports (Early Years Agility) -->
                <article class="adv-gal-card" data-category="sports" data-title="Early Years Agility & Ring Obstacles" data-count="26" data-index="7">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-hula-hoop-kid.jpg" alt="Early Years Agility & Ring Obstacles" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #ccfbf1; color: #0d9488;">
                                <i class="fa-solid fa-person-running"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Early Years Agility &amp; Play</h3>
                                <span class="adv-gal-card-count">26 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #0d9488;" aria-label="View Early Years Agility & Ring Obstacles">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 8: Student Life (Tunnel Fun) -->
                <article class="adv-gal-card" data-category="student-life" data-title="Kindergarten Caterpillar Tunnel" data-count="19" data-index="8">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-crawl-tunnel-kids.jpg" alt="Kindergarten Caterpillar Tunnel" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #ffe4e6; color: #e11d48;">
                                <i class="fa-solid fa-shapes"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Tunnel Play &amp; Activities</h3>
                                <span class="adv-gal-card-count">19 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #e11d48;" aria-label="View Kindergarten Caterpillar Tunnel">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 9: Sports (Gymnastics) -->
                <article class="adv-gal-card" data-category="sports" data-title="Gymnastics & Tumbling" data-count="40" data-index="9">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-gymnastics-cartwheel.jpg" alt="Gymnastics & Tumbling" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #fef3c7; color: #f59e0b;">
                                <i class="fa-solid fa-person-walking-dashed-line-arrow-right"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Gymnastics &amp; Tumbling</h3>
                                <span class="adv-gal-card-count">40 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #f59e0b;" aria-label="View Gymnastics & Tumbling">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 10: Sports (Football Skills & Juggling) -->
                <article class="adv-gal-card" data-category="sports" data-title="Football Freestyle & Ball Control" data-count="30" data-index="10">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-football-juggling-boy.jpg" alt="Football Freestyle & Ball Control" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #bbf7d0; color: #16a34a;">
                                <i class="fa-solid fa-medal"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Freestyle &amp; Ball Skills</h3>
                                <span class="adv-gal-card-count">30 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #16a34a;" aria-label="View Football Freestyle & Ball Control">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 11: Arts (Painted Hands Girl) -->
                <article class="adv-gal-card" data-category="arts" data-title="Colors & Hand Art Studio" data-count="24" data-index="11">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-painted-hands-girl.jpg" alt="Colors & Hand Art Studio" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #fbcfe8; color: #db2777;">
                                <i class="fa-solid fa-palette"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Colors &amp; Hand Art</h3>
                                <span class="adv-gal-card-count">24 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #db2777;" aria-label="View Colors & Hand Art Studio">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 12: Arts (Art Circle Kids) -->
                <article class="adv-gal-card" data-category="arts" data-title="Collaborative Art Circle" data-count="27" data-index="12">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-art-circle-kids.jpg" alt="Collaborative Art Circle" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #cffafe; color: #06b6d4;">
                                <i class="fa-solid fa-paintbrush"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Art Collaboration Circle</h3>
                                <span class="adv-gal-card-count">27 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #06b6d4;" aria-label="View Collaborative Art Circle">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 13: Academic (Smart Classroom Learning) -->
                <article class="adv-gal-card" data-category="academic" data-title="Smart Classroom Learning" data-count="32" data-index="13">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-classroom-learning.jpg" alt="Smart Classroom Learning" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #ffedd5; color: #ea580c;">
                                <i class="fa-solid fa-chalkboard-user"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Smart Classrooms</h3>
                                <span class="adv-gal-card-count">32 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #ea580c;" aria-label="View Smart Classroom Learning">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 14: Academic (Foundation Achievers) -->
                <article class="adv-gal-card" data-category="academic" data-title="IIT-JEE & NEET Foundation Batch" data-count="22" data-index="14">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-foundation-achievers.jpg" alt="IIT-JEE & NEET Foundation Batch" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #ede9fe; color: #7c3aed;">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">IIT-JEE Foundation</h3>
                                <span class="adv-gal-card-count">22 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #7c3aed;" aria-label="View IIT-JEE & NEET Foundation Batch">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 15: Student Life (Rainbow Parachute Activity) -->
                <article class="adv-gal-card" data-category="student-life" data-title="Rainbow Parachute Lawn Activities" data-count="31" data-index="15">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-parachute-activity.jpg" alt="Rainbow Parachute Lawn Activities" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #dbeafe; color: #2563eb;">
                                <i class="fa-solid fa-sun"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Rainbow Parachute Play</h3>
                                <span class="adv-gal-card-count">31 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #2563eb;" aria-label="View Rainbow Parachute Lawn Activities">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 16: Sports (Sports Arena Field) -->
                <article class="adv-gal-card" data-category="sports" data-title="Campus Sports Ground & Agility" data-count="35" data-index="16">
                    <div class="adv-gal-card-thumb">
                        <img src="assets/images/gallery/gallery-sports-field-agility.jpg" alt="Campus Sports Ground & Agility" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon" style="background: #dcfce7; color: #15803d;">
                                <i class="fa-solid fa-trophy"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Sports Ground &amp; Arena</h3>
                                <span class="adv-gal-card-count">35 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn" style="background: #15803d;" aria-label="View Campus Sports Ground & Agility">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Empty state when search has 0 results -->
                <div class="adv-gal-empty-state" id="advGalleryEmpty">
                    <i class="fa-regular fa-folder-open"></i>
                    <h3>No gallery albums found</h3>
                    <p>Try searching for a different keyword or selecting another category.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. PAGINATION BAR
         ========================================================================= -->
    <section class="adv-gal-pagination-section">
        <div class="adv-gal-container">
            <div class="adv-gal-pagination" role="navigation" aria-label="Gallery pagination">
                <button type="button" class="adv-gal-page-btn prev-btn" aria-label="Previous Page">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button type="button" class="adv-gal-page-btn active" aria-label="Page 1">1</button>
                <button type="button" class="adv-gal-page-btn" aria-label="Page 2">2</button>
                <button type="button" class="adv-gal-page-btn" aria-label="Page 3">3</button>
                <button type="button" class="adv-gal-page-btn" aria-label="Page 4">4</button>
                <button type="button" class="adv-gal-page-btn" aria-label="Page 5">5</button>
                <button type="button" class="adv-gal-page-btn next-btn" aria-label="Next Page">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. CTA BANNER: "WANT TO SEE MORE?"
         ========================================================================= -->
    <section class="adv-gal-cta-section">
        <div class="adv-gal-container">
            <div class="adv-gal-cta-card">
                <div class="adv-gal-cta-content">
                    <span class="adv-gal-cta-tag">WANT TO SEE MORE?</span>
                    <h2 class="adv-gal-cta-title">
                        Be a part of <span class="adv-gal-cta-highlight">our story.</span>
                    </h2>
                    <p class="adv-gal-cta-desc">
                        Follow us on social media for the latest updates, events and campus highlights.
                    </p>
                </div>

                <div class="adv-gal-cta-actions">
                    <div class="adv-gal-cta-socials" aria-label="Follow us on social media">
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="social-circle fb" title="Facebook" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="social-circle insta" title="Instagram" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="social-circle yt" title="YouTube" aria-label="YouTube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="social-circle in" title="LinkedIn" aria-label="LinkedIn">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>

                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="adv-gal-cta-btn">
                        <span>Follow Us</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Decorative Paper Airplane Doodle -->
                <div class="adv-gal-cta-doodle" aria-hidden="true">
                    <svg viewBox="0 0 74 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M72.5 1.5L1.5 32.5L28.5 44.5L59.5 12.5L34.5 47.5L55.5 59.5L72.5 1.5Z" stroke="#2563EB" stroke-width="2.2" stroke-linejoin="round" stroke-dasharray="3 2" fill="none"/>
                        <path d="M28.5 44.5V58.5L36.5 48.5" stroke="#2563EB" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 56 C2 52 -2 40 4 32 C10 24 22 28 20 38" stroke="#93C5FD" stroke-width="1.8" stroke-dasharray="3 3" fill="none"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- =========================================================================
     7. FULLSCREEN LIGHTBOX MODAL
     ========================================================================= -->
<div class="adv-gal-lightbox-backdrop" id="advGalleryLightbox" role="dialog" aria-modal="true" aria-label="Photo Lightbox">
    <div class="adv-gal-lightbox-header">
        <div class="adv-gal-lightbox-title-box">
            <h3 class="adv-gal-lightbox-title" id="advLightboxTitle">Album Title</h3>
            <span class="adv-gal-lightbox-counter" id="advLightboxCounter">1 / 1</span>
        </div>
        <div class="adv-gal-lightbox-controls">
            <button type="button" class="adv-gal-lightbox-btn" id="advLightboxClose" aria-label="Close Lightbox">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    </div>

    <div class="adv-gal-lightbox-stage">
        <button type="button" class="adv-gal-lightbox-nav prev" id="advLightboxPrev" aria-label="Previous Image">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="adv-gal-lightbox-img-wrap">
            <img src="" alt="" class="adv-gal-lightbox-img" id="advLightboxImg">
        </div>

        <button type="button" class="adv-gal-lightbox-nav next" id="advLightboxNext" aria-label="Next Image">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>

    <div class="adv-gal-lightbox-thumbs" id="advLightboxThumbs">
        <!-- Dynamically populated thumbnail strip -->
    </div>
</div>

<!-- Dedicated Gallery JavaScript -->
<script src="assets/js/gallery.js?v=<?php echo file_exists(__DIR__.'/assets/js/gallery.js') ? filemtime(__DIR__.'/assets/js/gallery.js') : '1.0'; ?>"></script>

<?php require_once __DIR__.'/includes/footer.php'; ?>
