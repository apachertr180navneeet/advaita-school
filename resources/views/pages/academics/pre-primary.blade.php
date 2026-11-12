@extends('layouts.app')

@section('title', "Pre-Primary Wing (Play Group, Nursery, LKG, UKG) - Advaita School of Excellence, Parbhani")
@section('meta_description', "Explore Advaita's Pre-Primary Wing featuring play-based learning, creative teaching methods, child-safe infrastructure, and our upcoming new state-of-the-art school building.")

@section('content')
<main id="main" class="main-content-wrapper acad-page-wrapper pre-primary-page">

    <!-- =========================================================================
         1. HERO SECTION: Playful & Engaging Early Childhood Theme
         ========================================================================= -->
    <section class="admission-hero-section pre-primary-hero">
        <div class="admission-hero-canvas">
            <!-- Hero Early Years Visual -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="{{ asset($content['hero_image'] ?? 'assets/images/gallery/gallery-painted-hands-girl.jpg') }}" alt="Pre-Primary Kids at Advaita School of Excellence" class="admission-hero-bg-img" width="1024" height="682">
            </div>

            <!-- SVG Wave Overlay for Smooth Translucent Backdrop -->
            <div class="admission-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H560C600 130 530 280 640 440H0V0Z" fill="#EEF6FC" fill-opacity="0.98"/>
                    <path d="M540 0C580 140 510 280 620 440H590C490 280 550 140 510 0H540Z" fill="#F37021" fill-opacity="0.18"/>
                </svg>
            </div>

            <!-- Floating Handwritten Script Tag at Top Right -->
            <div class="admission-hero-script-tag" aria-hidden="true">
                <span class="script-title">Joyful Early<br>Discovery</span>
                <svg class="script-underline" viewBox="0 0 120 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 12C38 3 84 4 116 14" stroke="#F37021" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </div>

            <!-- Left Content Panel -->
            <div class="admission-hero-left-panel">
                <div class="admission-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <nav class="admission-breadcrumb" aria-label="Breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="{{ route('academics') }}">Academics</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Pre-Primary</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">
                        <i class="fa-solid fa-shapes text-orange me-1"></i>
                        {{ $content['hero_badge'] ?? 'FOUNDATIONAL STAGE · PRE-PRIMARY WING (PLAY GROUP · NURSERY · LKG · UKG)' }}
                    </div>

                    <!-- Main Headline with Fraunces Serif Highlight -->
                    <h1 class="admission-hero-title">
                        {{ $content['hero_title'] ?? 'Nurturing Curiosity in their' }}
                        <span class="highlight-serif">Wonder-Filled Years.</span>
                    </h1>

                    <!-- Description with NEP 2020 & NCF-FS line -->
                    <p class="admission-hero-desc">
                        <strong>Aligned with NEP 2020 &amp; NCF-FS for Holistic Development</strong> — Focusing on Panchakosha Vikas for children 3–6 years through joyful sensory exploration, child safety, and loving care.
                    </p>

                    <!-- Quick Action Buttons -->
                    <div class="d-flex align-items-center gap-10 mt-20 flex-wrap hero-action-buttons">
                        <a href="{{ route('online-registration') }}" class="admission-btn-primary" title="Apply for Pre-Primary Admissions">
                            <i class="fa-solid fa-file-pen"></i>
                            <span>Enquire for Pre-Primary</span>
                        </a>
                        <a href="#panchakosha-framework" class="admission-btn-visit btn-nep-pill" title="Panchakosha Vikas & NEP 2020">
                            <i class="fa-solid fa-certificate"></i>
                            <span>NEP &amp; Panchakosha</span>
                        </a>
                        <a href="#preprimary-experiences" class="admission-btn-visit" title="Early Years Image Showcase">
                            <i class="fa-solid fa-palette"></i>
                            <span>Early Years Showcase</span>
                        </a>
                        <a href="#new-building" class="admission-btn-visit btn-building-pill" title="Upcoming New Building">
                            <i class="fa-solid fa-building-flag"></i>
                            <span>New School Building</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Container -->
    <div class="acad-container">

        <!-- =========================================================================
             SUB-MENU PILL NAVIGATION BAR (Programmes Ecosystem Switcher)
             ========================================================================= -->
        <div class="acad-pills-bar-wrap">
            <nav class="acad-pills-bar" aria-label="Academics Navigation">
                <a href="{{ route('academics') }}" class="acad-pill-btn">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span>Overview</span>
                </a>
                <a href="{{ route('academics.pre-primary') }}" class="acad-pill-btn active">
                    <i class="fa-solid fa-shapes"></i>
                    <span>Pre-Primary (Nursery–UKG)</span>
                </a>
                <a href="{{ route('academics.primary') }}" class="acad-pill-btn">
                    <i class="fa-solid fa-book-open-reader"></i>
                    <span>Primary Wing (1–5)</span>
                </a>
                <a href="{{ route('academics.secondary') }}" class="acad-pill-btn">
                    <i class="fa-solid fa-atom"></i>
                    <span>Secondary (6–10)</span>
                </a>
                <a href="{{ route('results') }}" class="acad-pill-btn">
                    <i class="fa-solid fa-award"></i>
                    <span>CBSE Results</span>
                </a>
            </nav>
        </div>

        <!-- =========================================================================
             2. HIGHLIGHT BANNER: UPCOMING NEW SCHOOL BUILDING (PRIORITY FEATURE)
             ========================================================================= -->
        <section class="pre-building-spotlight" id="new-building">
            <div class="pre-building-card">
                <div class="pre-building-grid">
                    <div class="pre-building-visual">
                        <div class="pre-building-img-box">
                            <img src="{{ asset($content['building_image'] ?? 'assets/images/gallery/campus-building.png') }}" alt="Upcoming New Pre-Primary Building - Advaita School of Excellence">
                            <div class="building-status-badge">
                                <span class="status-pulse"></span>
                                <span>{{ $content['new_building_status'] ?? 'Under Construction · Opening for Next Academic Session' }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="pre-building-content">
                        <div class="building-kicker">
                            <i class="fa-solid fa-sparkles"></i>
                            <span>{{ $content['new_building_badge'] ?? 'NEW BUILDING HIGHLIGHT' }}</span>
                        </div>
                        <h2 class="building-heading">
                            {{ $content['new_building_title'] ?? 'Our State-of-the-Art New Pre-Primary Wing' }}
                        </h2>
                        <p class="building-desc">
                            {{ $content['new_building_desc'] ?? 'Designed specifically for early learners with air-conditioned thematic classrooms, splash pool, indoor sensory play stations, and child-safe infrastructure.' }}
                        </p>

                        <!-- Distinction Between Current & Planned -->
                        <div class="building-specs-tabs">
                            <div class="spec-column planned-features">
                                <div class="spec-header">
                                    <i class="fa-solid fa-compass-drafting text-orange"></i>
                                    <strong>Planned 2026 Features</strong>
                                </div>
                                <ul class="spec-list">
                                    <li><i class="fa-solid fa-circle-check text-orange"></i> Temperature-Controlled Splash Pool</li>
                                    <li><i class="fa-solid fa-circle-check text-orange"></i> Thematic Theatrette &amp; Storytelling Amphitheatre</li>
                                    <li><i class="fa-solid fa-circle-check text-orange"></i> Indoor Soft-Play Gymnasium &amp; Crawl Tunnels</li>
                                    <li><i class="fa-solid fa-circle-check text-orange"></i> Anti-Bacterial Rubberized Outdoor Activity Lawn</li>
                                </ul>
                            </div>

                            <div class="spec-column current-facilities">
                                <div class="spec-header">
                                    <i class="fa-solid fa-school-circle-check text-navy"></i>
                                    <strong>Completed &amp; Active Facilities</strong>
                                </div>
                                <ul class="spec-list">
                                    <li><i class="fa-solid fa-circle-check text-green"></i> Montessori-Inspired Hands-on Activity Corners</li>
                                    <li><i class="fa-solid fa-circle-check text-green"></i> 100% High-Resolution CCTV Coverage</li>
                                    <li><i class="fa-solid fa-circle-check text-green"></i> Child-Height Washrooms &amp; Sanitization Stations</li>
                                    <li><i class="fa-solid fa-circle-check text-green"></i> Dedicated Certified Caretakers &amp; Gentle Mentors</li>
                                </ul>
                            </div>
                        </div>

                        <div class="building-cta-row">
                            <a href="{{ route('online-registration') }}" class="btn-building-cta">
                                <i class="fa-solid fa-calendar-check"></i>
                                <span>Book a Campus Preview Tour</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             3. PANCHAKOSHA VIKAS & NEP 2020 / NCF-FS HOLISTIC FRAMEWORK
             ========================================================================= -->
        <section class="acad-section pre-panchakosha-section" id="panchakosha-framework">
            <div class="pre-panchakosha-banner">
                <div class="panchakosha-kicker">
                    <span class="panchakosha-badge">
                        <i class="fa-solid fa-certificate"></i>
                        NEP 2020 &amp; NCF-FS COMPLIANT · AGES 3–6 YEARS
                    </span>
                </div>

                <!-- REQUIRED MAIN LINE -->
                <h2 class="panchakosha-main-title">
                    Aligned with NEP 2020 &amp; NCF-FS for Holistic Development
                    <span class="panchakosha-highlight">— Focusing on Panchakosha Vikas for children 3–6 years.</span>
                </h2>

                <p class="panchakosha-subtext">
                    Rooted in the National Curriculum Framework for Foundational Stage (NCF-FS), our joyful early-years pedagogy nurtures all five layers of human potential through experiential play, loving care, and active sensory immersion.
                </p>

                <!-- 5 Koshas Colorful Interactive Ribbon -->
                <div class="panchakosha-ribbon-grid">
                    <div class="kosha-pill kosha-red">
                        <span class="kosha-name">Annamaya Kosha</span>
                        <span class="kosha-desc">Physical Health &amp; Nutrition</span>
                    </div>
                    <div class="kosha-pill kosha-orange">
                        <span class="kosha-name">Pranamaya Kosha</span>
                        <span class="kosha-desc">Breath, Vitality &amp; Gross Motor</span>
                    </div>
                    <div class="kosha-pill kosha-gold">
                        <span class="kosha-name">Manomaya Kosha</span>
                        <span class="kosha-desc">Emotional Warmth &amp; Peer Care</span>
                    </div>
                    <div class="kosha-pill kosha-green">
                        <span class="kosha-name">Vijnanamaya Kosha</span>
                        <span class="kosha-desc">Curiosity, Phonics &amp; FLN Logic</span>
                    </div>
                    <div class="kosha-pill kosha-purple">
                        <span class="kosha-name">Anandamaya Kosha</span>
                        <span class="kosha-desc">Pure Joy, Wonder &amp; Creativity</span>
                    </div>
                </div>
            </div>

            <!-- 3 Institutional Guarantees (Safety First, Health & Hygiene, CBSE & NEP 2020 Ready) -->
            <div class="pre-institution-pillars-grid">
                <!-- Pillar 1: Safety First -->
                <div class="pre-pillar-card">
                    <div class="pillar-img-box">
                        <img src="{{ asset('assets/images/fac-transport.jpg') }}" alt="Safety First at Advaita Pre-Primary" loading="lazy">
                        <span class="pillar-badge-overlay orange">
                            <i class="fa-solid fa-shield-heart"></i> Safety First
                        </span>
                    </div>
                    <div class="pillar-body">
                        <div class="pillar-title-row">
                            <div class="pillar-icon-circle orange" aria-hidden="true">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <h3 class="pillar-card-title">Safety First</h3>
                        </div>
                        <ul class="pillar-checklist">
                            <li>
                                <i class="fa-solid fa-circle-check text-orange"></i>
                                <span><strong>Female Attendant</strong> in every Washroom &amp; Classroom</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check text-orange"></i>
                                <span><strong>RFID / GPS Tracked Transport</strong> with Female Attendant</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check text-orange"></i>
                                <span><strong>Fire Safety Certified Campus</strong> &amp; Child-Safe Rounded Furniture</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 2: Health & Hygiene -->
                <div class="pre-pillar-card">
                    <div class="pillar-img-box">
                        <img src="{{ asset('assets/images/gallery/gallery-splash-pool-fun.jpg') }}" alt="Health and Hygiene at Advaita Pre-Primary" loading="lazy">
                        <span class="pillar-badge-overlay teal">
                            <i class="fa-solid fa-heart-pulse"></i> Health &amp; Hygiene
                        </span>
                    </div>
                    <div class="pillar-body">
                        <div class="pillar-title-row">
                            <div class="pillar-icon-circle teal" aria-hidden="true">
                                <i class="fa-solid fa-stethoscope"></i>
                            </div>
                            <h3 class="pillar-card-title">Health &amp; Hygiene</h3>
                        </div>
                        <ul class="pillar-checklist">
                            <li>
                                <i class="fa-solid fa-circle-check text-teal"></i>
                                <span><strong>Full-Time Trained Female Nurse</strong> &amp; Dedicated Sick Bay</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check text-teal"></i>
                                <span><strong>Daily Sanitized Toys</strong> &amp; Non-Toxic Learning Materials</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check text-teal"></i>
                                <span><strong>RO Purified Drinking Water</strong> with Child-Height Faucets</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 3: CBSE & NEP 2020 Ready -->
                <div class="pre-pillar-card">
                    <div class="pillar-img-box">
                        <img src="{{ asset('assets/images/gallery/gallery-foundation-achievers.jpg') }}" alt="CBSE and NEP 2020 Ready at Advaita" loading="lazy">
                        <span class="pillar-badge-overlay blue">
                            <i class="fa-solid fa-award"></i> CBSE &amp; NEP Ready
                        </span>
                    </div>
                    <div class="pillar-body">
                        <div class="pillar-title-row">
                            <div class="pillar-icon-circle blue" aria-hidden="true">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <h3 class="pillar-card-title">CBSE &amp; NEP 2020 Ready</h3>
                        </div>
                        <ul class="pillar-checklist">
                            <li>
                                <i class="fa-solid fa-circle-check text-navy"></i>
                                <span><strong>1:12 Teacher-Student Ratio</strong> for Intimate Mentorship</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check text-navy"></i>
                                <span><strong>NIPUN Bharat Aligned</strong> — Foundational Literacy &amp; Numeracy (FLN)</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check text-navy"></i>
                                <span><strong>Holistic Progress Card (HPC)</strong> Tracking 360° Growth</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             4. THE 9 VIBRANT EARLY YEARS FEATURE IMAGE SHOWCASE (ALL IMAGE CARDS)
             ========================================================================= -->
        <section class="acad-section pre-activities-gallery-section" id="preprimary-experiences">
            <div class="section-header-pill text-center mx-auto">
                <span class="pill-badge rainbow-badge">
                    <i class="fa-solid fa-palette"></i> Colorful Early Childhood Journeys
                </span>
                <h2 class="pill-title">
                    Every Day A <span class="pill-title-highlight rainbow-text">Joyful Adventure</span>
                </h2>
                <p class="pill-subtitle mx-auto">
                    Live moments from our classrooms, labs, lawns, and play zones — each capturing child-centered, screen-balanced experiential joy.
                </p>
            </div>

            <div class="pre-exp-gallery-grid">
                <!-- Card 1: Sensory Sand Pit & Water Play Zone -->
                <div class="pre-exp-card theme-aqua">
                    <div class="pre-exp-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-splash-pool-kids-play.jpg') }}', 'Sensory Sand Pit & Water Play Zone')">
                        <img src="{{ asset('assets/images/gallery/gallery-splash-pool-kids-play.jpg') }}" alt="Sensory Sand Pit & Water Play Zone - Advaita Pre-Primary" loading="lazy">
                        <span class="pre-exp-badge">
                            <i class="fa-solid fa-water"></i> Water &amp; Sand Zone
                        </span>
                        <button type="button" class="pre-exp-zoom-btn" aria-label="Zoom Photo">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </button>
                    </div>
                    <div class="pre-exp-body">
                        <h3 class="pre-exp-title">Sensory Sand Pit &amp; Water Play Zone</h3>
                        <p class="pre-exp-desc">
                            Safe, shallow splash pool for summer water drills, kinetic sand pits, and pouring channels that build tactile brain pathways under certified lady supervision.
                        </p>
                        <div class="pre-exp-tags">
                            <span class="exp-tag-pill">Splash Pool</span>
                            <span class="exp-tag-pill">Sand Sculpting</span>
                            <span class="exp-tag-pill">Sensory Touch</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Mini Pet Corner & Organic Gardening Patch -->
                <div class="pre-exp-card theme-green">
                    <div class="pre-exp-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-parachute-lawn-building.jpg') }}', 'Mini Pet Corner & Organic Gardening Patch')">
                        <img src="{{ asset('assets/images/gallery/gallery-parachute-lawn-building.jpg') }}" alt="Mini Pet Corner & Organic Gardening Patch - Advaita" loading="lazy">
                        <span class="pre-exp-badge">
                            <i class="fa-solid fa-seedling"></i> Nature &amp; Empathy
                        </span>
                        <button type="button" class="pre-exp-zoom-btn" aria-label="Zoom Photo">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </button>
                    </div>
                    <div class="pre-exp-body">
                        <h3 class="pre-exp-title">Mini Pet Corner &amp; Organic Gardening Patch</h3>
                        <p class="pre-exp-desc">
                            Designed for empathy and nature connect. Toddlers nurture potted botanicals, water micro-greens, interact with gentle mini-pets, and form an early love for Mother Earth.
                        </p>
                        <div class="pre-exp-tags">
                            <span class="exp-tag-pill">Empathy Connect</span>
                            <span class="exp-tag-pill">Green Patch</span>
                            <span class="exp-tag-pill">Nature Loving</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Phonics & Language Lab / Reading Nook -->
                <div class="pre-exp-card theme-blue">
                    <div class="pre-exp-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-classroom-learning.jpg') }}', 'Phonics & Language Lab / Reading Nook')">
                        <img src="{{ asset('assets/images/gallery/gallery-classroom-learning.jpg') }}" alt="Phonics & Language Lab / Reading Nook - Advaita" loading="lazy">
                        <span class="pre-exp-badge">
                            <i class="fa-solid fa-book-open-reader"></i> Phonics &amp; Reading
                        </span>
                        <button type="button" class="pre-exp-zoom-btn" aria-label="Zoom Photo">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </button>
                    </div>
                    <div class="pre-exp-body">
                        <h3 class="pre-exp-title">Phonics &amp; Language Lab / Reading Nook</h3>
                        <p class="pre-exp-desc">
                            Jolly Phonics based early reading program. Multi-sensory sound blending, large picture books, tactile letter tracing, and cozy storytelling floor nests.
                        </p>
                        <div class="pre-exp-tags">
                            <span class="exp-tag-pill">Jolly Phonics</span>
                            <span class="exp-tag-pill">Reading Nook</span>
                            <span class="exp-tag-pill">Sound Blending</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Sensory & Hands-On Play -->
                <div class="pre-exp-card theme-orange">
                    <div class="pre-exp-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-painted-hands-girl.jpg') }}', 'Sensory & Hands-On Play')">
                        <img src="{{ asset('assets/images/gallery/gallery-painted-hands-girl.jpg') }}" alt="Sensory & Hands-On Play - Advaita Pre-Primary" loading="lazy">
                        <span class="pre-exp-badge">
                            <i class="fa-solid fa-shapes"></i> Sensory &amp; Hands-On
                        </span>
                        <button type="button" class="pre-exp-zoom-btn" aria-label="Zoom Photo">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </button>
                    </div>
                    <div class="pre-exp-body">
                        <h3 class="pre-exp-title">Sensory &amp; Hands-On Play</h3>
                        <p class="pre-exp-desc">
                            Montessori sensorial cylinders, textured fabrics, safe non-toxic finger colors, and therapeutic clay sculpting that build fine-motor agility and neural connections.
                        </p>
                        <div class="pre-exp-tags">
                            <span class="exp-tag-pill">Montessori Blocks</span>
                            <span class="exp-tag-pill">Clay Modeling</span>
                            <span class="exp-tag-pill">Tactile Art</span>
                        </div>
                    </div>
                </div>

                <!-- Card 5: Early STEAM & Puzzle Play -->
                <div class="pre-exp-card theme-purple">
                    <div class="pre-exp-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-math-science-lab.jpg') }}', 'Early STEAM & Puzzle Play')">
                        <img src="{{ asset('assets/images/gallery/gallery-math-science-lab.jpg') }}" alt="Early STEAM & Puzzle Play - Advaita" loading="lazy">
                        <span class="pre-exp-badge">
                            <i class="fa-solid fa-puzzle-piece"></i> Early STEAM
                        </span>
                        <button type="button" class="pre-exp-zoom-btn" aria-label="Zoom Photo">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </button>
                    </div>
                    <div class="pre-exp-body">
                        <h3 class="pre-exp-title">Early STEAM &amp; Puzzle Play</h3>
                        <p class="pre-exp-desc">
                            Age-appropriate STEM kits, giant building blocks, gear sets, spatial geometry sorting, and cognitive brain puzzles that spark early logic and mathematical curiosity.
                        </p>
                        <div class="pre-exp-tags">
                            <span class="exp-tag-pill">STEM Kits</span>
                            <span class="exp-tag-pill">Brain Puzzles</span>
                            <span class="exp-tag-pill">Spatial Logic</span>
                        </div>
                    </div>
                </div>

                <!-- Card 6: Language & Story Magic -->
                <div class="pre-exp-card theme-pink">
                    <div class="pre-exp-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-art-circle-kids.jpg') }}', 'Language & Story Magic')">
                        <img src="{{ asset('assets/images/gallery/gallery-art-circle-kids.jpg') }}" alt="Language & Story Magic - Advaita" loading="lazy">
                        <span class="pre-exp-badge">
                            <i class="fa-solid fa-wand-magic-sparkles"></i> Story Magic
                        </span>
                        <button type="button" class="pre-exp-zoom-btn" aria-label="Zoom Photo">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </button>
                    </div>
                    <div class="pre-exp-body">
                        <h3 class="pre-exp-title">Language &amp; Story Magic</h3>
                        <p class="pre-exp-desc">
                            Jolly Phonics, Picture Talk circles, storytelling hand puppets, rhyme theatrette, and confidence-building Show-and-Tell sessions where every little voice is celebrated.
                        </p>
                        <div class="pre-exp-tags">
                            <span class="exp-tag-pill">Picture Talk</span>
                            <span class="exp-tag-pill">Show &amp; Tell</span>
                            <span class="exp-tag-pill">Puppet Stories</span>
                        </div>
                    </div>
                </div>

                <!-- Card 7: Music, Dance & Movement -->
                <div class="pre-exp-card theme-coral">
                    <div class="pre-exp-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/dance.jpg') }}', 'Music, Dance & Movement')">
                        <img src="{{ asset('assets/images/gallery/dance.jpg') }}" alt="Music, Dance & Movement - Advaita" loading="lazy">
                        <span class="pre-exp-badge">
                            <i class="fa-solid fa-music"></i> Dance &amp; Movement
                        </span>
                        <button type="button" class="pre-exp-zoom-btn" aria-label="Zoom Photo">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </button>
                    </div>
                    <div class="pre-exp-body">
                        <h3 class="pre-exp-title">Music, Dance &amp; Movement</h3>
                        <p class="pre-exp-desc">
                            For rhythm and gross motor skills. Free rhythmic dancing, Orff percussion instruments, action songs, and guided physical agility games that build body coordination.
                        </p>
                        <div class="pre-exp-tags">
                            <span class="exp-tag-pill">Gross Motor</span>
                            <span class="exp-tag-pill">Rhythm Play</span>
                            <span class="exp-tag-pill">Creative Dance</span>
                        </div>
                    </div>
                </div>

                <!-- Card 8: Value & Life Skills -->
                <div class="pre-exp-card theme-gold">
                    <div class="pre-exp-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-parachute-activity.jpg') }}', 'Value & Life Skills')">
                        <img src="{{ asset('assets/images/gallery/gallery-parachute-activity.jpg') }}" alt="Value & Life Skills - Advaita Pre-Primary" loading="lazy">
                        <span class="pre-exp-badge">
                            <i class="fa-solid fa-heart"></i> Values &amp; Life Skills
                        </span>
                        <button type="button" class="pre-exp-zoom-btn" aria-label="Zoom Photo">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </button>
                    </div>
                    <div class="pre-exp-body">
                        <h3 class="pre-exp-title">Value &amp; Life Skills</h3>
                        <p class="pre-exp-desc">
                            Sharing, Gratitude, and Good Manners. Guided daily peer circles where children practice shoe rack tidying, snack time gratitude, gentle words, and caring friendships.
                        </p>
                        <div class="pre-exp-tags">
                            <span class="exp-tag-pill">Sharing &amp; Care</span>
                            <span class="exp-tag-pill">Gratitude</span>
                            <span class="exp-tag-pill">Good Manners</span>
                        </div>
                    </div>
                </div>

                <!-- Card 9: Screen-Free Smart Learning -->
                <div class="pre-exp-card theme-indigo">
                    <div class="pre-exp-thumb" onclick="openPreModal('{{ asset('assets/images/fac-smart-class.jpg') }}', 'Screen-Free Smart Learning')">
                        <img src="{{ asset('assets/images/fac-smart-class.jpg') }}" alt="Screen-Free Smart Learning - Advaita" loading="lazy">
                        <span class="pre-exp-badge">
                            <i class="fa-solid fa-tv"></i> Guided Smart Tech
                        </span>
                        <button type="button" class="pre-exp-zoom-btn" aria-label="Zoom Photo">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </button>
                    </div>
                    <div class="pre-exp-body">
                        <h3 class="pre-exp-title">Screen-Free Smart Learning</h3>
                        <p class="pre-exp-desc">
                            Interactive smart panels with limited, teacher-guided use. We preserve healthy eyes with short audio-visual phonics sessions while prioritizing physical, touch-based instruments.
                        </p>
                        <div class="pre-exp-tags">
                            <span class="exp-tag-pill">Interactive Panels</span>
                            <span class="exp-tag-pill">Guided Sessions</span>
                            <span class="exp-tag-pill">Eye Safe</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             5. CLASSROOMS, SOFT GYM & ACTIVITY SPACES (Facility Highlights)
             ========================================================================= -->
        <section class="acad-section" id="facilities-gallery">
            <div class="section-header-pill text-center mx-auto">
                <span class="pill-badge"><i class="fa-solid fa-camera"></i> Infrastructure Highlights</span>
                <h2 class="pill-title">Classrooms, Play Lawns &amp; <span class="pill-title-highlight">Activity Spaces</span></h2>
                <p class="pill-subtitle mx-auto">
                    Every square foot is thoughtfully child-proofed, colorfully curated, and equipped with safe learning instruments to inspire creativity.
                </p>
            </div>

            <div class="pre-gallery-grid">
                <!-- Item 1: Crawl Tunnels & Soft Gym -->
                <div class="pre-gallery-card">
                    <div class="pre-gallery-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-crawl-tunnel-kids.jpg') }}', 'Indoor Crawl Tunnels & Soft Play')">
                        <img src="{{ asset('assets/images/gallery/gallery-crawl-tunnel-kids.jpg') }}" alt="Indoor Crawl Tunnels and Soft Play" loading="lazy">
                        <div class="pre-gallery-overlay">
                            <span class="pre-tag">Motor Skills</span>
                            <h4>Crawl Tunnels &amp; Soft Gym</h4>
                            <p>Padded obstacles and colorful crawl tunnels for coordination and agility.</p>
                            <i class="fa-solid fa-magnifying-glass-plus zoom-icon" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Creative Art & Origami Studio -->
                <div class="pre-gallery-card">
                    <div class="pre-gallery-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-art-studio-origami-planes.jpg') }}', 'Creative Expression & Origami Studio')">
                        <img src="{{ asset('assets/images/gallery/gallery-art-studio-origami-planes.jpg') }}" alt="Creative Art and Origami Studio at Advaita" loading="lazy">
                        <div class="pre-gallery-overlay">
                            <span class="pre-tag">Creativity</span>
                            <h4>Origami &amp; Art Studio</h4>
                            <p>Paper crafts, colorful folding planes, and collage activities to unleash imagination.</p>
                            <i class="fa-solid fa-magnifying-glass-plus zoom-icon" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Hula Hoop & Gymnastics -->
                <div class="pre-gallery-card">
                    <div class="pre-gallery-thumb" onclick="openPreModal('{{ asset('assets/images/gallery/gallery-hula-hoop-kid.jpg') }}', 'Gymnastics & Balance Play')">
                        <img src="{{ asset('assets/images/gallery/gallery-hula-hoop-kid.jpg') }}" alt="Toddler Gymnastics and Balance Play" loading="lazy">
                        <div class="pre-gallery-overlay">
                            <span class="pre-tag">Agility</span>
                            <h4>Hula Hoop &amp; Gymnastics</h4>
                            <p>Guided movement drills to develop body balance, rhythm, and confidence.</p>
                            <i class="fa-solid fa-magnifying-glass-plus zoom-icon" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             7. ADMISSION ENQUIRY CTA HELPLINE BANNER
             ========================================================================= -->
        <div class="pre-helpline-card">
            <div class="pre-helpline-left">
                <span class="pre-helpline-eyebrow">ADMISSIONS OPEN FOR SESSION 2026–27</span>
                <h2 class="pre-helpline-title">
                    Give Your Child the <span class="highlight-orange">Best Start in Life.</span>
                </h2>
                <p class="pre-helpline-desc">
                    Admissions are now open for Play Group, Nursery, LKG, and UKG for the upcoming academic session. Limited seats per batch to preserve our 1:15 educator ratio.
                </p>

                <div class="pre-helpline-meta-list">
                    <div class="pre-meta-row">
                        <i class="fa-solid fa-envelope"></i>
                        <span>Admissions Desk: <a href="mailto:admissions.advaita@gmail.com" class="text-white text-decoration-none"><strong>admissions.advaita@gmail.com</strong></a></span>
                    </div>
                    <div class="pre-meta-row">
                        <i class="fa-solid fa-phone"></i>
                        <span>Campus Helpline: <a href="tel:+919689898973" class="text-white text-decoration-none"><strong>+91 9689898973</strong></a></span>
                    </div>
                    <div class="pre-meta-row">
                        <i class="fa-solid fa-clock"></i>
                        <span>Campus Visiting Hours: <strong>Monday – Saturday (8:00 AM – 3:00 PM)</strong></span>
                    </div>
                </div>
            </div>

            <div class="pre-helpline-right">
                <a href="{{ route('online-registration') }}" class="btn-pre-cta-primary" title="Register Online Now">
                    <i class="fa-solid fa-file-pen"></i>
                    <span>Register Online Now</span>
                </a>
                <a href="https://wa.me/919689898973?text=Hello%20Advaita%20School,%20I%20am%20inquiring%20about%20Pre-Primary%20Admissions." target="_blank" rel="noopener noreferrer" class="btn-pre-cta-wa" title="WhatsApp Enquiry">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>Chat on WhatsApp</span>
                </a>
                <a href="tel:+919689898973" class="btn-pre-cta-call" title="Call the School">
                    <i class="fa-solid fa-phone"></i>
                    <span>Call: +91 9689898973</span>
                </a>
            </div>
        </div>

    </div><!-- /.acad-container -->

</main>

<!-- Lightbox Modal for Gallery Image Preview -->
<div class="results-modal-backdrop" id="preModal" onclick="closePreModal(event)">
    <div class="results-modal-content">
        <button type="button" class="results-modal-close" onclick="closePreModal(event)" aria-label="Close Preview">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <img src="{{ asset('assets/images/gallery/gallery-splash-pool-kids-play.jpg') }}" alt="Pre-Primary Facility Preview" class="results-modal-img" id="modalPreImg">
    </div>
</div>

<script>
function openPreModal(imgSrc, title) {
    var modal = document.getElementById('preModal');
    var modalImg = document.getElementById('modalPreImg');
    if (modal && modalImg) {
        modalImg.src = imgSrc;
        if (title) modalImg.alt = title;
        modal.classList.add('open');
        document.body.style.overflow = 'hidden';
    }
}

function closePreModal(e) {
    if (e.target.classList.contains('results-modal-backdrop') || e.target.closest('.results-modal-close')) {
        var modal = document.getElementById('preModal');
        if (modal) {
            modal.classList.remove('open');
            document.body.style.overflow = '';
        }
    }
}
</script>
@endsection
