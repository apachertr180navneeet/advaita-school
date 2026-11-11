@extends('layouts.app')

@section('title', "Campus Facilities & Infrastructure - Advaita School of Excellence, Parbhani | 10,000 Sq. Mtr. Campus")
@section('meta_description', $seo['description'] ?? 'Explore verified facilities at Advaita School of Excellence across our 10,000 sq. mtr. campus, featuring 25 smart classrooms, robotics and science laboratories, green sports lawns, library, and 24x7 security.')
@section('meta_keywords', $seo['keywords'] ?? 'School facilities Parbhani, robotics lab, smart classes, sports ground, library, campus infrastructure, 10000 sq mtr campus')

@section('content')
<main id="main" class="main-content-wrapper facilities-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Signature Advaita Campus Canvas with Verified Visual
         ========================================================================= -->
    <section class="admission-hero-section facilities-hero-unified">
        <div class="admission-hero-canvas">
            <!-- Hero Campus Visual -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="{{ asset($content['hero_image'] ?? 'assets/images/about-campus-courtyard.jpg') }}" alt="Advaita School of Excellence 10,000 Sq Mtr Campus" class="admission-hero-bg-img" width="1024" height="682">
            </div>

            <!-- SVG Wave Overlay -->
            <div class="admission-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H560C600 130 530 280 640 440H0V0Z" fill="#EEF6FC" fill-opacity="0.97"/>
                    <path d="M540 0C580 140 510 280 620 440H590C490 280 550 140 510 0H540Z" fill="#083B7A" fill-opacity="0.12"/>
                </svg>
            </div>

            <!-- Script Tag -->
            <div class="admission-hero-script-tag" aria-hidden="true">
                <span class="script-title">Spaces That<br>Inspire</span>
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
                        <span class="active">Facilities</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">
                        <i class="fa-solid fa-building-columns text-orange me-1"></i>
                        {{ $content['hero_badge'] ?? 'OUR CAMPUS' }}
                    </div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        {{ $content['hero_title'] ?? 'More than Classrooms, A Place to Grow.' }}
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        {{ $content['hero_desc'] ?? 'Our campus is thoughtfully designed to provide a safe, modern and inspiring environment where every child can learn, explore and excel across 10,000 sq. mtrs. of dedicated infrastructure.' }}
                    </p>

                    <!-- Hero Quick CTAs -->
                    <div class="d-flex align-items-center gap-12 mt-20 flex-wrap">
                        <a href="#campus-infrastructure" class="btn-primary-pill">
                            <span>Explore 15 Premier Facilities</span>
                            <i class="fa-solid fa-arrow-down"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="btn-outline-pill">
                            <i class="fa-regular fa-calendar-check"></i>
                            <span>Schedule a Campus Visit</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Container -->
    <div class="facilities-container" id="campus-infrastructure">

        <!-- =========================================================================
             2. FLOATING VERIFIED INFRASTRUCTURE METRICS STRIP
             ========================================================================= -->
        <div class="facilities-metrics-strip-wrap">
            <div class="facilities-metrics-strip">
                <div class="fac-metric-card">
                    <div class="fac-metric-icon orange" aria-hidden="true">
                        <i class="fa-solid fa-mountain-city"></i>
                    </div>
                    <div class="fac-metric-info">
                        <strong class="fac-metric-strong">10,000 m²</strong>
                        <span class="fac-metric-sub">Campus Land Area</span>
                    </div>
                </div>

                <div class="fac-metric-card">
                    <div class="fac-metric-icon blue" aria-hidden="true">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <div class="fac-metric-info">
                        <strong class="fac-metric-strong">25 Smart</strong>
                        <span class="fac-metric-sub">Classrooms</span>
                    </div>
                </div>

                <div class="fac-metric-card">
                    <div class="fac-metric-icon pink" aria-hidden="true">
                        <i class="fa-solid fa-flask-vial"></i>
                    </div>
                    <div class="fac-metric-info">
                        <strong class="fac-metric-strong">Dedicated Science,</strong>
                        <span class="fac-metric-sub">Math &amp; Tech Labs</span>
                    </div>
                </div>

                <div class="fac-metric-card">
                    <div class="fac-metric-icon green" aria-hidden="true">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="fac-metric-info">
                        <strong class="fac-metric-strong">24/7 CCTV &amp;</strong>
                        <span class="fac-metric-sub">Verified Transport</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- =========================================================================
             3. INFRASTRUCTURE CLASSIFICATION STRIP (Operational vs Planned)
             ========================================================================= -->
        <div class="infrastructure-classification-card">
            <div class="infra-active-body">
                <div class="infra-active-badges">
                    <span class="infra-badge-primary">CURRENT OPERATIONAL INFRASTRUCTURE</span>
                    <span class="infra-badge-compliance">CBSE COMPLIANCE</span>
                    @if(isset($content['campus_area']))
                        <span class="infra-badge-compliance" style="background: #f0fdf4; color: #15803d; border-color: #bbf7d0;">
                            <i class="fa-solid fa-check me-1"></i> {{ $content['campus_area'] }}
                        </span>
                    @endif
                </div>
                <p class="infra-active-text">
                    <strong>Active Campus:</strong> 10,000 Sq. Mtrs. land area near Sanmati Campus, Jintur Road, Parbhani, housing 25 smart classrooms (47.08 m² each), Composite Science Lab (56 m²), Math Activity Lab (47 m²), Computer Lab (56 m²), Green Sports Lawns, Multi-Purpose Assembly Hall, and 24/7 CCTV surveillance.
                </p>
            </div>

            <div class="infra-expansion-box">
                <div class="infra-expansion-tag">
                    <span class="status-pulse" style="width: 8px; height: 8px; background: #F37021; border-radius: 50%; display: inline-block;"></span>
                    <span>Planned Expansion</span>
                </div>
                <span class="infra-expansion-sub">Upcoming dedicated Pre-Primary Wing &amp; Innovation Hub</span>
            </div>
        </div>

        <!-- =========================================================================
             4. SECTION HEADER
             ========================================================================= -->
        <div class="facilities-section-header">
            <span class="section-header-pill">
                <i class="fa-solid fa-landmark text-orange me-1"></i>
                Campus Infrastructure &amp; Amenities
            </span>
            <h2 class="facilities-section-title">
                Spaces That <span class="highlight-serif">Inspire</span> Every Day.
            </h2>
            <p class="facilities-section-desc">
                From technology-enabled learning to outdoor physical fitness, every facility at Advaita School of Excellence is verified and maintained to high educational and safety benchmarks.
            </p>
        </div>

        <!-- =========================================================================
             5. VERIFIED 15 PREMIER FACILITY CARDS GRID
             ========================================================================= -->
        <div class="facilities-grid">

            <!-- Card 1: Well-Equipped Futuristic Library -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset('assets/images/fac-library.jpg') }}" alt="Well-Equipped Futuristic Library at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-book-bookmark"></i>
                        <span>Futuristic Library</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #4338ca; background: #eef2ff; border: 1px solid #c7d2fe;">CBSE Curriculum</span>
                        <span class="facility-spec-text">10,000+ Volumes</span>
                    </div>
                    <h3 class="facility-card-title">Well-Equipped Futuristic Library</h3>
                    <p class="facility-card-desc">
                        A peaceful, high-tech reading sanctuary housing 10,000+ curated volumes, children's literature, encyclopedias, journals, and digital research bays that nurture lifelong inquisitive minds.
                    </p>
                    <a href="{{ route('gallery') }}" class="facility-card-link-btn">
                        <span>Explore Library</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 2: Dedicated Dance Studio -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset('assets/images/gallery/dance.jpg') }}" alt="Dedicated Dance Studio at Advaita School of Excellence" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-person-chalkboard"></i>
                        <span>Dance Studio</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #c026d3; background: #fdf4ff; border: 1px solid #f5d0fe;">Performing Arts</span>
                        <span class="facility-spec-text">Mirrored Floor</span>
                    </div>
                    <h3 class="facility-card-title">Dedicated Dance Room</h3>
                    <p class="facility-card-desc">
                        Spacious performing arts studio designed for Indian classical dance, Bharatnatyam, folk choreography, and rhythm movement under specialized instructors to develop poise and grace.
                    </p>
                    <a href="{{ route('gallery') }}" class="facility-card-link-btn">
                        <span>View Dance Performances</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 3: High-Tech Computer Lab -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset('assets/images/gallery/computer-lab.png') }}" alt="High-Tech Computer Laboratory at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-desktop"></i>
                        <span>Computer Lab</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #0284c7; background: #f0f9ff; border: 1px solid #bae6fd;">56 m² IT Arena</span>
                        <span class="facility-spec-text">1:1 Student Ratio</span>
                    </div>
                    <h3 class="facility-card-title">High-Tech Computer Lab</h3>
                    <p class="facility-card-desc">
                        State-of-the-art computer workstations connected to high-speed fiber internet for AI coding, Python programming, Typing Master, and foundational digital literacy in a secure environment.
                    </p>
                    <a href="{{ route('academics') }}" class="facility-card-link-btn">
                        <span>Explore Digital Skills</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 4: Music Room & Instrumental Studio -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset('assets/images/gallery/gallery-school-band.jpg') }}" alt="Music Room and School Band at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-music"></i>
                        <span>Music Studio</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #ea580c; background: #fff7ed; border: 1px solid #fed7aa;">Vocal &amp; Band</span>
                        <span class="facility-spec-text">Marching Troupe</span>
                    </div>
                    <h3 class="facility-card-title">Music Room &amp; Band Studio</h3>
                    <p class="facility-card-desc">
                        Acoustically optimized practice studio for classical vocal training, harmonium, keyboards, tabla, and ceremonial school marching band brass and percussion troupes.
                    </p>
                    <a href="{{ route('gallery') }}" class="facility-card-link-btn">
                        <span>View Music Gallery</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 5: Grand Auditorium & Assembly Hall -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset('assets/images/gallery/cultural.jpg') }}" alt="Grand Auditorium & Assembly Hall at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-masks-theater"></i>
                        <span>Auditorium</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #b45309; background: #fffbeb; border: 1px solid #fde68a;">Central Space</span>
                        <span class="facility-spec-text">Acoustic Sound &amp; Lights</span>
                    </div>
                    <h3 class="facility-card-title">Auditorium &amp; Assembly Hall</h3>
                    <p class="facility-card-desc">
                        Magnificent multi-purpose indoor auditorium equipped with theatrical stage lighting, modern acoustic sound systems, and seating for annual gatherings, debates, seminars, and fests.
                    </p>
                    <a href="{{ route('gallery') }}" class="facility-card-link-btn">
                        <span>View Cultural Events</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 6: Big Playing Green Lawn -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset('assets/images/gallery/gallery-parachute-lawn-building.jpg') }}" alt="Big Playing Green Lawn at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-clover"></i>
                        <span>Big Green Lawn</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #15803d; background: #f0fdf4; border: 1px solid #bbf7d0;">Lush Turf</span>
                        <span class="facility-spec-text">Campus Frontage</span>
                    </div>
                    <h3 class="facility-card-title">Big Playing Green Lawn</h3>
                    <p class="facility-card-desc">
                        Expansive, manicured natural grass lawn in front of the main campus building dedicated to morning community bonding, parachute activities, open-air physical training, and free play.
                    </p>
                    <a href="{{ route('gallery') }}" class="facility-card-link-btn">
                        <span>View Lawn Activities</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 7: Cricket Field & Practice Nets -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset('assets/images/gallery/gallery-sports-field-agility.jpg') }}" alt="Cricket Field and Net Practice Arena at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-baseball-bat-ball"></i>
                        <span>Cricket Arena</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #d97706; background: #fffbeb; border: 1px solid #fde68a;">Cricket Nets</span>
                        <span class="facility-spec-text">Turf Pitch</span>
                    </div>
                    <h3 class="facility-card-title">Cricket Field &amp; Practice Nets</h3>
                    <p class="facility-card-desc">
                        Dedicated cricket ground with practice turf nets for batting drills, bowling run-ups, and fielding reflexes under the expert supervision of qualified cricket mentors.
                    </p>
                    <a href="{{ route('gallery') }}" class="facility-card-link-btn">
                        <span>View Cricket Drills</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 8: Basketball & Volleyball Courts -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset('assets/images/fac-sports.jpg') }}" alt="Basketball and Volleyball Courts at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-volleyball"></i>
                        <span>Court Sports</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #dc2626; background: #fef2f2; border: 1px solid #fecaca;">Hardcourt Surface</span>
                        <span class="facility-spec-text">Standard Marking</span>
                    </div>
                    <h3 class="facility-card-title">Basketball &amp; Volleyball Courts</h3>
                    <p class="facility-card-desc">
                        Professionally surfaced outdoor multi-sport courts for basketball and volleyball, fostering quick agility, vertical jumping, hand-eye coordination, and tournament-ready teamwork.
                    </p>
                    <a href="{{ route('gallery') }}" class="facility-card-link-btn">
                        <span>View Court Sports</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 9: Full-Sized Football Ground -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset('assets/images/gallery/gallery-football-match-sprint.jpg') }}" alt="Full-Sized Football Ground at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-futbol"></i>
                        <span>Football Ground</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #16a34a; background: #f0fdf4; border: 1px solid #bbf7d0;">Lush Grass Pitch</span>
                        <span class="facility-spec-text">Regulation Posts</span>
                    </div>
                    <h3 class="facility-card-title">Full-Sized Football Ground</h3>
                    <p class="facility-card-desc">
                        Lush natural grass football ground with regulation goalposts where students train in competitive sprint stamina, passing precision, and inter-house football championship matches.
                    </p>
                    <a href="{{ route('gallery') }}" class="facility-card-link-btn">
                        <span>View Football Matches</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 10: Composite Science Laboratories -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset('assets/images/gallery/science-lab.png') }}" alt="Composite Science Laboratories at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-flask-vial"></i>
                        <span>Science Labs</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #0891b2; background: #ecfeff; border: 1px solid #a5f3fc;">Physics · Chem · Bio</span>
                        <span class="facility-spec-text">56 m² CBSE Lab</span>
                    </div>
                    <h3 class="facility-card-title">Composite Science Laboratories</h3>
                    <p class="facility-card-desc">
                        Fully equipped composite science laboratory for hands-on experimentation across Physics, Chemistry, and Biology with high-grade optical microscopes and strict safety protocols.
                    </p>
                    <a href="{{ route('academics') }}" class="facility-card-link-btn">
                        <span>Explore Science Labs</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 11: Robotics & STEAM Innovation Lab -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset('assets/images/gallery/robotics-lab.png') }}" alt="Robotics and STEAM Innovation Lab at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-robot"></i>
                        <span>Robotics &amp; STEAM</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #7c3aed; background: #f5f3ff; border: 1px solid #ddd6fe;">Microcontrollers &amp; AI</span>
                        <span class="facility-spec-text">Hands-On Kits</span>
                    </div>
                    <h3 class="facility-card-title">Robotics &amp; STEAM Innovation Lab</h3>
                    <p class="facility-card-desc">
                        Experiential robotics arena with microcontrollers, motorized building kits, sensors, and coding puzzles where young innovators build automated projects and computational logic.
                    </p>
                    <a href="{{ route('academics') }}" class="facility-card-link-btn">
                        <span>Explore Robotics Track</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 12: Mathematics & Abacus Activity Lab -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset('assets/images/gallery/academic-learning.png') }}" alt="Mathematics and Abacus Activity Lab at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-calculator"></i>
                        <span>Math &amp; Abacus</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #0284c7; background: #f0f9ff; border: 1px solid #bae6fd;">Speed Arithmetic</span>
                        <span class="facility-spec-text">47 m² Lab</span>
                    </div>
                    <h3 class="facility-card-title">Mathematics &amp; Abacus Lab</h3>
                    <p class="facility-card-desc">
                        Dedicated math activity space featuring Abacus apparatus, tactile geometric kits, 3D solids, and mental math tools making arithmetic intuitive and engaging for all age groups.
                    </p>
                    <a href="{{ route('academics.primary') }}#abacus-section" class="facility-card-link-btn">
                        <span>Explore Abacus Track</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 13: 25 Smart Classrooms -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset('assets/images/fac-smart-class.jpg') }}" alt="25 Smart Classrooms at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <span>Smart Classrooms</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #ea580c; background: #fff7ed; border: 1px solid #fed7aa;">25 Classrooms</span>
                        <span class="facility-spec-text">47.08 m² each</span>
                    </div>
                    <h3 class="facility-card-title">Interactive Smart Classrooms</h3>
                    <p class="facility-card-desc">
                        Well-ventilated, spacious air-cooled classrooms adhering to CBSE spatial norms, equipped with interactive multimedia panels, natural airflow, and child-safe ergonomic furniture.
                    </p>
                    <a href="{{ route('academics') }}" class="facility-card-link-btn">
                        <span>Explore Classrooms</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 14: GPS-Enabled Transport Fleet -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset('assets/images/fac-transport.jpg') }}" alt="GPS-Enabled School Transport Fleet" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-bus"></i>
                        <span>GPS Fleet</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #ea580c; background: #fff7ed; border: 1px solid #fed7aa;">Third Party</span>
                        <span class="facility-spec-text">Head: Shakir Bhai</span>
                    </div>
                    <h3 class="facility-card-title">GPS-Enabled School Transport</h3>
                    <p class="facility-card-desc">
                        Dedicated school transport provided via a verified third party, managed by Transport Head <strong>Shakir Bhai (<a href="tel:+919923747775" class="text-orange fw-bold">+91 99237 47775</a>)</strong> with GPS tracking, speed governors, and female attendants.
                    </p>
                    <a href="{{ route('admission-info') }}#fee-structure" class="facility-card-link-btn">
                        <span>View Bus Routes</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 15: Safety & 24/7 CCTV Security -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset('assets/images/fac-security.jpg') }}" alt="Safety and 24/7 CCTV Security Surveillance" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>24/7 Monitored</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #0369a1; background: #f0f9ff; border: 1px solid #bae6fd;">CCTV Network</span>
                        <span class="facility-spec-text">Full-Time Nurse</span>
                    </div>
                    <h3 class="facility-card-title">24/7 CCTV Campus Safety &amp; Infirmary</h3>
                    <p class="facility-card-desc">
                        Full perimeter boundary wall, round-the-clock CCTV cameras across checkpoints and corridors, guarded gates, campus sick bay with full-time nurse, and pure RO drinking water stations.
                    </p>
                    <a href="{{ route('mandatory-disclosure') }}" class="facility-card-link-btn">
                        <span>View Safety Certifications</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>

        <!-- =========================================================================
             6. STATS HIGHLIGHT STRIP (Ground in Verified Metrics)
             ========================================================================= -->
        <div class="facilities-stats-bar-unified">
            <div class="fac-stat-box">
                <div class="fac-stat-icon-wrap orange" aria-hidden="true">
                    <i class="fa-solid fa-mountain-city"></i>
                </div>
                <div>
                    <span class="fac-stat-num">10,000 m²</span>
                    <span class="fac-stat-label">Campus Land Area (~2.5 Acres)</span>
                </div>
            </div>

            <div class="fac-stat-box">
                <div class="fac-stat-icon-wrap blue" aria-hidden="true">
                    <i class="fa-solid fa-chalkboard-user"></i>
                </div>
                <div>
                    <span class="fac-stat-num">25</span>
                    <span class="fac-stat-label">Smart Classrooms (47.08 m² each)</span>
                </div>
            </div>

            <div class="fac-stat-box">
                <div class="fac-stat-icon-wrap green" aria-hidden="true">
                    <i class="fa-solid fa-flask-vial"></i>
                </div>
                <div>
                    <span class="fac-stat-num">3</span>
                    <span class="fac-stat-label">Dedicated Labs (Science, Math &amp; Tech)</span>
                </div>
            </div>

            <div class="fac-stat-box">
                <div class="fac-stat-icon-wrap gold" aria-hidden="true">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <div>
                    <span class="fac-stat-num">100%</span>
                    <span class="fac-stat-label">24/7 CCTV &amp; GPS Transport</span>
                </div>
            </div>
        </div>

        <!-- =========================================================================
             7. PRE-FOOTER CAMPUS TOUR CONVERSION BANNER
             ========================================================================= -->
        <section class="secondary-helpline-card" id="campus-tour-cta">
            <div class="sec-helpline-content">
                <span class="sec-helpline-eyebrow">
                    <i class="fa-solid fa-sparkles"></i> EXPERIENCE IT YOURSELF
                </span>
                <h2>{{ $content['cta_headline'] ?? 'Take a Campus Tour.' }}</h2>
                <p>{{ $content['cta_desc'] ?? 'Visit our campus and explore the facilities that make learning at Advaita a truly enriching experience across 10,000 sq. mtrs. of dedicated infrastructure.' }}</p>

                <div class="sec-contact-chips">
                    <a href="tel:+919422176733" class="sec-contact-chip">
                        <i class="fa-solid fa-phone"></i>
                        <span>+91 94221 76733</span>
                    </a>
                    <span class="sec-contact-chip">
                        <i class="fa-solid fa-building-columns"></i>
                        <span>CBSE Affiliation: 1130920</span>
                    </span>
                    <span class="sec-contact-chip">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Jintur Road, Parbhani</span>
                    </span>
                </div>
            </div>

            <div class="sec-helpline-actions">
                <a href="{{ route('contact') }}" class="btn-sec-cta-primary">
                    <span>Schedule a Campus Visit</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}#campus-map" class="btn-sec-cta-fee">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>View on Map</span>
                </a>
                <a href="{{ route('online-registration') }}" class="btn-sec-cta-call">
                    <i class="fa-solid fa-user-plus"></i>
                    <span>Apply for Admission</span>
                </a>
            </div>
        </section>

    </div><!-- /.facilities-container -->

</main>
@endsection
