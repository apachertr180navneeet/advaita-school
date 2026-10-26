@extends('layouts.app')

@section('title', "Gallery - Advaita School of Excellence | Moments That Matter")

@section('content')
<!-- Dedicated Gallery Page Stylesheet -->
<link rel="stylesheet" href="{{ asset('assets/css/gallery.css?v=<?php echo file_exists(__DIR__ . ') }}"/assets/css/gallery.css') ? filemtime(__DIR__ . '/assets/css/gallery.css') : '1.0'; ?>">

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
                <image href="{{ asset('assets/images/about-hero-building.jpg') }}" xlink:href="{{ asset('assets/images/about-hero-building.jpg') }}" x="0" y="0" width="1000" height="480" preserveAspectRatio="xMidYMid slice" clip-path="url(#advHeroCurveClip)"/>

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
                <a href="{{ route('home') }}">Home</a>
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
         ========================================================================= --    <section class="adv-gal-categories-section">
        <div class="adv-gal-container">
            <div class="adv-gal-filters-scroll" role="tablist" aria-label="Gallery category filter">
                <!-- 1. All Photos -->
                <button type="button" class="adv-gal-cat-btn active" data-category="all" role="tab" aria-selected="true">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-camera"></i>
                    </div>
                    <span class="cat-name">All Photos</span>
                </button>

                <!-- 2. Life at Advaita -->
                <button type="button" class="adv-gal-cat-btn" data-category="life-at-advaita" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-school-flag"></i>
                    </div>
                    <span class="cat-name">Life at<br>Advaita</span>
                </button>

                <!-- 3. Events & Celebrations -->
                <button type="button" class="adv-gal-cat-btn" data-category="events-celebrations" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-cake-candles"></i>
                    </div>
                    <span class="cat-name">Events &amp;<br>Celebrations</span>
                </button>

                <!-- 4. Academics and Science Activities -->
                <button type="button" class="adv-gal-cat-btn" data-category="academics-science" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-flask-vial"></i>
                    </div>
                    <span class="cat-name">Academics &amp;<br>Science</span>
                </button>

                <!-- 5. Educational Tours & Excursions -->
                <button type="button" class="adv-gal-cat-btn" data-category="educational-tours" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-bus-simple"></i>
                    </div>
                    <span class="cat-name">Tours &amp;<br>Excursions</span>
                </button>

                <!-- 6. Sports & Competitions -->
                <button type="button" class="adv-gal-cat-btn" data-category="sports-competitions" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <span class="cat-name">Sports &amp;<br>Competitions</span>
                </button>

                <!-- 7. Student Leadership & Achievements -->
                <button type="button" class="adv-gal-cat-btn" data-category="student-leadership" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <span class="cat-name">Leadership &amp;<br>Achievements</span>
                </button>

                <!-- 8. Art, Culture & Creativity -->
                <button type="button" class="adv-gal-cat-btn" data-category="art-culture" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-palette"></i>
                    </div>
                    <span class="cat-name">Art, Culture<br>&amp; Creativity</span>
                </button>

                <!-- 9. Advaita Kids -->
                <button type="button" class="adv-gal-cat-btn" data-category="advaita-kids" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-child-reaching"></i>
                    </div>
                    <span class="cat-name">Advaita<br>Kids</span>
                </button>

                <!-- 10. Campus & Facilities -->
                <button type="button" class="adv-gal-cat-btn" data-category="campus-facilities" role="tab" aria-selected="false">
                    <div class="cat-icon-badge">
                        <i class="fa-solid fa-landmark"></i>
                    </div>
                    <span class="cat-name">Campus &amp;<br>Facilities</span>
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
         4. GALLERY GRID: 27 CURATED ALBUM CARDS ACROSS 9 CATEGORIES
         ========================================================================= -->
    <section class="adv-gal-grid-section" id="advGalleryGridSection">
        <div class="adv-gal-container">
            <div class="adv-gal-grid" id="advGalleryGrid">

                <!-- ================= LIFE AT ADVAITA ================= -->
                <!-- Card 1: Life at Advaita (Assembly) -->
                <article class="adv-gal-card" data-category="life-at-advaita" data-title="Morning Assembly & Daily Rhythm" data-count="36" data-index="1">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery-assembly.jpg') }}" alt="Morning Assembly & Daily Rhythm" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-blue">
                                <i class="fa-solid fa-school-flag"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Morning Assembly &amp; Life</h3>
                                <span class="adv-gal-card-count">36 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-blue" aria-label="View Morning Assembly & Daily Rhythm">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 2: Life at Advaita (Campus Lawn Parachute) -->
                <article class="adv-gal-card" data-category="life-at-advaita" data-title="Lawn Harmony & Campus Bonding" data-count="28" data-index="2">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-parachute-lawn-building.jpg') }}" alt="Lawn Harmony & Campus Bonding" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-indigo">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Campus Lawn Community</h3>
                                <span class="adv-gal-card-count">28 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-indigo" aria-label="View Lawn Harmony & Campus Bonding">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 3: Life at Advaita (Day One) -->
                <article class="adv-gal-card" data-category="life-at-advaita" data-title="Day One & Welcome Celebrations" data-count="24" data-index="3">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery-day-1.jpg') }}" alt="Day One & Welcome Celebrations" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-amber">
                                <i class="fa-solid fa-sun"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Day One Celebrations</h3>
                                <span class="adv-gal-card-count">24 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-amber" aria-label="View Day One & Welcome Celebrations">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- ================= EVENTS & CELEBRATIONS ================= -->
                <!-- Card 4: Events & Celebrations (Band) -->
                <article class="adv-gal-card" data-category="events-celebrations" data-title="School Marching Band & Ceremonies" data-count="45" data-index="4">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-school-band.jpg') }}" alt="School Marching Band & Ceremonies" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-orange">
                                <i class="fa-solid fa-drum"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">School Marching Band</h3>
                                <span class="adv-gal-card-count">45 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-orange" aria-label="View School Marching Band & Ceremonies">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 5: Events & Celebrations (Cultural Fest) -->
                <article class="adv-gal-card" data-category="events-celebrations" data-title="Annual Cultural Fest & Drama" data-count="52" data-index="5">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/cultural.jpg') }}" alt="Annual Cultural Fest & Drama" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-pink">
                                <i class="fa-solid fa-cake-candles"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Annual Cultural Fest</h3>
                                <span class="adv-gal-card-count">52 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-pink" aria-label="View Annual Cultural Fest & Drama">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 6: Events & Celebrations (Folk Dance) -->
                <article class="adv-gal-card" data-category="events-celebrations" data-title="Classical & Folk Dance Fest" data-count="38" data-index="6">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/dance.jpg') }}" alt="Classical & Folk Dance Fest" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-purple">
                                <i class="fa-solid fa-masks-theater"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Classical &amp; Folk Dance</h3>
                                <span class="adv-gal-card-count">38 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-purple" aria-label="View Classical & Folk Dance Fest">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- ================= ACADEMICS AND SCIENCE ACTIVITIES ================= -->
                <!-- Card 7: Academics and Science (Math & Science Lab) -->
                <article class="adv-gal-card" data-category="academics-science" data-title="Science & Mathematics Practical Labs" data-count="42" data-index="7">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-math-science-lab.jpg') }}" alt="Science & Mathematics Practical Labs" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-red">
                                <i class="fa-solid fa-flask-vial"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Science &amp; Practical Labs</h3>
                                <span class="adv-gal-card-count">42 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-red" aria-label="View Science & Mathematics Practical Labs">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 8: Academics and Science (Smart Classroom) -->
                <article class="adv-gal-card" data-category="academics-science" data-title="Interactive Smart Classroom Learning" data-count="34" data-index="8">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-classroom-learning.jpg') }}" alt="Interactive Smart Classroom Learning" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-orange-dark">
                                <i class="fa-solid fa-chalkboard-user"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Interactive Smart Class</h3>
                                <span class="adv-gal-card-count">34 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-orange-dark" aria-label="View Interactive Smart Classroom Learning">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 9: Academics and Science (Robotics Lab) -->
                <article class="adv-gal-card" data-category="academics-science" data-title="Robotics & STEAM Innovation Lab" data-count="30" data-index="9">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/robotics-lab.png') }}" alt="Robotics & STEAM Innovation Lab" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-sky">
                                <i class="fa-solid fa-microchip"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Robotics &amp; STEAM Lab</h3>
                                <span class="adv-gal-card-count">30 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-sky" aria-label="View Robotics & STEAM Innovation Lab">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- ================= EDUCATIONAL TOURS & EXCURSIONS ================= -->
                <!-- Card 10: Educational Tours (Historical Field Trip) -->
                <article class="adv-gal-card" data-category="educational-tours" data-title="Heritage & Science Museum Excursions" data-count="33" data-index="10">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/educational-tour.jpg') }}" alt="Heritage & Science Museum Excursions" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-teal">
                                <i class="fa-solid fa-bus-simple"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Heritage Study Excursions</h3>
                                <span class="adv-gal-card-count">33 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-teal" aria-label="View Heritage & Science Museum Excursions">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 11: Educational Tours (Nature & Ecology Outings) -->
                <article class="adv-gal-card" data-category="educational-tours" data-title="Environmental Field Study & Outings" data-count="25" data-index="11">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/student-life.jpg') }}" alt="Environmental Field Study & Outings" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-emerald">
                                <i class="fa-solid fa-compass"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Environmental Field Study</h3>
                                <span class="adv-gal-card-count">25 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-emerald" aria-label="View Environmental Field Study & Outings">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- ================= SPORTS & COMPETITIONS ================= -->
                <!-- Card 12: Sports & Competitions (Football Championship) -->
                <article class="adv-gal-card" data-category="sports-competitions" data-title="Football Championship & Turf Sprint" data-count="40" data-index="12">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-football-match-sprint.jpg') }}" alt="Football Championship & Turf Sprint" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-green">
                                <i class="fa-solid fa-futbol"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Football Championship Turf</h3>
                                <span class="adv-gal-card-count">40 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-green" aria-label="View Football Championship & Turf Sprint">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 13: Sports & Competitions (Sports Field) -->
                <article class="adv-gal-card" data-category="sports-competitions" data-title="Campus Sports Ground & Athletics" data-count="35" data-index="13">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-sports-field-agility.jpg') }}" alt="Campus Sports Ground & Athletics" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-forest">
                                <i class="fa-solid fa-trophy"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Sports Arena &amp; Athletics</h3>
                                <span class="adv-gal-card-count">35 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-forest" aria-label="View Campus Sports Ground & Athletics">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 14: Sports & Competitions (Gymnastics) -->
                <article class="adv-gal-card" data-category="sports-competitions" data-title="Gymnastics, Cartwheels & Tumbling" data-count="29" data-index="14">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-gymnastics-cartwheel.jpg') }}" alt="Gymnastics, Cartwheels & Tumbling" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-amber">
                                <i class="fa-solid fa-person-running"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Gymnastics &amp; Tumbling</h3>
                                <span class="adv-gal-card-count">29 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-amber" aria-label="View Gymnastics, Cartwheels & Tumbling">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 15: Sports & Competitions (Freestyle Skills) -->
                <article class="adv-gal-card" data-category="sports-competitions" data-title="Football Freestyle & Ball Handling" data-count="31" data-index="15">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-football-juggling-boy.jpg') }}" alt="Football Freestyle & Ball Handling" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-emerald">
                                <i class="fa-solid fa-medal"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Ball Skills &amp; Freestyle</h3>
                                <span class="adv-gal-card-count">31 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-emerald" aria-label="View Football Freestyle & Ball Handling">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- ================= STUDENT LEADERSHIP & ACHIEVEMENTS ================= -->
                <!-- Card 16: Student Leadership (Foundation Achievers) -->
                <article class="adv-gal-card" data-category="student-leadership" data-title="Foundation Batch & Academic Scholars" data-count="26" data-index="16">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-foundation-achievers.jpg') }}" alt="Foundation Batch & Academic Scholars" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-violet">
                                <i class="fa-solid fa-award"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">IIT-JEE &amp; NEET Achievers</h3>
                                <span class="adv-gal-card-count">26 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-violet" aria-label="View Foundation Batch & Academic Scholars">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 17: Student Leadership (Student Council) -->
                <article class="adv-gal-card" data-category="student-leadership" data-title="Student Council & Leadership Badges" data-count="22" data-index="17">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/achievements.jpg') }}" alt="Student Council & Leadership Badges" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-blue">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Student Leadership Council</h3>
                                <span class="adv-gal-card-count">22 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-blue" aria-label="View Student Council & Leadership Badges">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- ================= ART, CULTURE & CREATIVITY ================= -->
                <!-- Card 18: Art, Culture & Creativity (Origami) -->
                <article class="adv-gal-card" data-category="art-culture" data-title="Art Studio & Origami Paper Craft" data-count="42" data-index="18">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-art-studio-origami-planes.jpg') }}" alt="Art Studio & Origami Paper Craft" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-purple">
                                <i class="fa-solid fa-paper-plane"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Art Studio &amp; Origami</h3>
                                <span class="adv-gal-card-count">42 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-purple" aria-label="View Art Studio & Origami Paper Craft">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 19: Art, Culture & Creativity (Hand Painting) -->
                <article class="adv-gal-card" data-category="art-culture" data-title="Joyful Hand Painting & Color Studio" data-count="27" data-index="19">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-painted-hands-girl.jpg') }}" alt="Joyful Hand Painting & Color Studio" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-fuchsia">
                                <i class="fa-solid fa-palette"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Colors &amp; Hand Art</h3>
                                <span class="adv-gal-card-count">27 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-fuchsia" aria-label="View Joyful Hand Painting & Color Studio">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 20: Art, Culture & Creativity (Art Circle) -->
                <article class="adv-gal-card" data-category="art-culture" data-title="Collaborative Art & Canvas Studio" data-count="30" data-index="20">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-art-circle-kids.jpg') }}" alt="Collaborative Art & Canvas Studio" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-cyan">
                                <i class="fa-solid fa-paintbrush"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Art Collaboration Circle</h3>
                                <span class="adv-gal-card-count">30 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-cyan" aria-label="View Collaborative Art & Canvas Studio">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- ================= ADVAITA KIDS ================= -->
                <!-- Card 21: Advaita Kids (Splash Pool) -->
                <article class="adv-gal-card" data-category="advaita-kids" data-title="Splash Pool & Aquatic Water Arena" data-count="28" data-index="21">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-splash-pool-kids-play.jpg') }}" alt="Splash Pool & Aquatic Water Arena" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-sky">
                                <i class="fa-solid fa-water-ladder"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Splash Pool &amp; Water Play</h3>
                                <span class="adv-gal-card-count">28 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-sky" aria-label="View Splash Pool & Aquatic Water Arena">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 22: Advaita Kids (Caterpillar Tunnel) -->
                <article class="adv-gal-card" data-category="advaita-kids" data-title="Caterpillar Tunnel & Motor Exploration" data-count="21" data-index="22">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-crawl-tunnel-kids.jpg') }}" alt="Caterpillar Tunnel & Motor Exploration" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-rose">
                                <i class="fa-solid fa-shapes"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Caterpillar Tunnel Play</h3>
                                <span class="adv-gal-card-count">21 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-rose" aria-label="View Caterpillar Tunnel & Motor Exploration">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 23: Advaita Kids (Hula-Hoop & Agility) -->
                <article class="adv-gal-card" data-category="advaita-kids" data-title="Ring Stepping & Motor Agility" data-count="25" data-index="23">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-hula-hoop-kid.jpg') }}" alt="Ring Stepping & Motor Agility" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-teal">
                                <i class="fa-solid fa-child-reaching"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Ring Agility &amp; Fun</h3>
                                <span class="adv-gal-card-count">25 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-teal" aria-label="View Ring Stepping & Motor Agility">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 24: Advaita Kids (Rainbow Parachute) -->
                <article class="adv-gal-card" data-category="advaita-kids" data-title="Rainbow Parachute Cooperative Play" data-count="32" data-index="24">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/gallery-parachute-activity.jpg') }}" alt="Rainbow Parachute Cooperative Play" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-pink">
                                <i class="fa-solid fa-cloud-sun"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Rainbow Parachute Play</h3>
                                <span class="adv-gal-card-count">32 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-pink" aria-label="View Rainbow Parachute Cooperative Play">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- ================= CAMPUS & FACILITIES ================= -->
                <!-- Card 25: Campus & Facilities (Architecture) -->
                <article class="adv-gal-card" data-category="campus-facilities" data-title="Campus Architecture & Smart Wings" data-count="36" data-index="25">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/gallery/campus-building.png') }}" alt="Campus Architecture & Smart Wings" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-blue">
                                <i class="fa-solid fa-landmark"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Campus Architecture</h3>
                                <span class="adv-gal-card-count">36 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-blue" aria-label="View Campus Architecture & Smart Wings">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 26: Campus & Facilities (Green Courtyard) -->
                <article class="adv-gal-card" data-category="campus-facilities" data-title="Green Courtyard & Campus Grounds" data-count="29" data-index="26">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/about-campus-courtyard.jpg') }}" alt="Green Courtyard & Campus Grounds" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-forest">
                                <i class="fa-solid fa-tree"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Green Central Courtyard</h3>
                                <span class="adv-gal-card-count">29 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-forest" aria-label="View Green Courtyard & Campus Grounds">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </article>

                <!-- Card 27: Campus & Facilities (Library) -->
                <article class="adv-gal-card" data-category="campus-facilities" data-title="Central Knowledge Library & Reading Bay" data-count="24" data-index="27">
                    <div class="adv-gal-card-thumb">
                        <img src="{{ asset('assets/images/fac-library.jpg') }}" alt="Central Knowledge Library & Reading Bay" loading="lazy">
                        <div class="adv-gal-card-overlay">
                            <span class="adv-gal-overlay-view"><i class="fa-solid fa-expand"></i> View Album</span>
                        </div>
                    </div>
                    <div class="adv-gal-card-info">
                        <div class="adv-gal-card-meta">
                            <div class="adv-gal-card-icon gal-theme-indigo">
                                <i class="fa-solid fa-book-open-reader"></i>
                            </div>
                            <div class="adv-gal-card-text">
                                <h3 class="adv-gal-card-title">Central Library</h3>
                                <span class="adv-gal-card-count">24 Photos</span>
                            </div>
                        </div>
                        <button type="button" class="adv-gal-card-btn gal-theme-indigo" aria-label="View Central Knowledge Library & Reading Bay">
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
<script src="{{ asset('assets/js/gallery.js?v=<?php echo file_exists(__DIR__ . ') }}"/assets/js/gallery.js') ? filemtime(__DIR__ . '/assets/js/gallery.js') : '1.0'; ?>"></script>
@endsection
