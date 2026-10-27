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
                            <span>Explore 12 Facilities</span>
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
             5. VERIFIED 12 FACILITY CARDS GRID
             ========================================================================= -->
        <div class="facilities-grid">

            <!-- Card 1: Smart Classrooms -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset($content['card1_image'] ?? 'assets/images/fac-smart-class.jpg') }}" alt="25 Smart Classrooms at Advaita" class="facility-thumb-img" loading="lazy">
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
                    <h3 class="facility-card-title">Smart Classrooms</h3>
                    <p class="facility-card-desc">
                        Well-ventilated, spacious classrooms adhering to CBSE spatial guidelines, equipped with interactive multimedia teaching displays, ergonomic student desks, and natural airflow.
                    </p>
                    <a href="{{ route('academics') }}" class="facility-card-link-btn">
                        <span>Explore Academics</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 2: Science & Mathematics Laboratories -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset($content['card2_image'] ?? 'assets/images/gallery/science-lab.png') }}" alt="Science and Mathematics Laboratories at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-flask"></i>
                        <span>Science &amp; Math</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #0284c7; background: #f0f9ff; border: 1px solid #bae6fd;">Composite Science Lab</span>
                        <span class="facility-spec-text">56 m² &amp; 47 m²</span>
                    </div>
                    <h3 class="facility-card-title">Science &amp; Mathematics Laboratories</h3>
                    <p class="facility-card-desc">
                        Composite Science Lab for practical experimentation across Physics, Chemistry, and Biology, paired with a dedicated Mathematics Lab with Abacus apparatus, geometric kits, and calculators.
                    </p>
                    <a href="{{ route('academics') }}" class="facility-card-link-btn">
                        <span>Explore Practical Labs</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 3: Robotics & Technology Labs -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset($content['card3_image'] ?? 'assets/images/gallery/robotics-lab.png') }}" alt="Robotics and Computer Technology Lab at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-robot"></i>
                        <span>Robotics &amp; Tech</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #7c3aed; background: #f5f3ff; border: 1px solid #ddd6fe;">STEAM robotics kits</span>
                        <span class="facility-spec-text">56 m² Lab</span>
                    </div>
                    <h3 class="facility-card-title">Robotics &amp; Technology Labs</h3>
                    <p class="facility-card-desc">
                        Hands-on STEAM robotics kits, microcontrollers, and sensor experimentation sets alongside our 56 m² Computer Laboratory with high-speed internet for coding, logic building, and digital literacy.
                    </p>
                    <a href="{{ route('academics') }}" class="facility-card-link-btn">
                        <span>Explore Tech &amp; Coding</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 4: Library & Reading Resource Center -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset($content['card4_image'] ?? 'assets/images/fac-library.jpg') }}" alt="School Library and Reading Resource Center" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-book-bookmark"></i>
                        <span>Resource Center</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #4338ca; background: #eef2ff; border: 1px solid #c7d2fe;">CBSE Curriculum</span>
                        <span class="facility-spec-text">10,000+ Books</span>
                    </div>
                    <h3 class="facility-card-title">Library &amp; Resource Center</h3>
                    <p class="facility-card-desc">
                        Carefully curated collection of curriculum reference volumes, children's literature, encyclopedias, and educational periodicals with peaceful reading desks to foster lifelong reading habits.
                    </p>
                    <a href="{{ route('about-us') }}" class="facility-card-link-btn">
                        <span>Explore Reading Culture</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 5: Green Sports Lawns & Playgrounds -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset($content['card5_image'] ?? 'assets/images/gallery/gallery-parachute-lawn-building.jpg') }}" alt="Green Sports Lawn and Outdoor Playgrounds at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-person-running"></i>
                        <span>Green Sports Lawn</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #15803d; background: #f0fdf4; border: 1px solid #bbf7d0;">Outdoor Grounds</span>
                        <span class="facility-spec-text">Natural Grass</span>
                    </div>
                    <h3 class="facility-card-title">Green Sports Lawns &amp; Playgrounds</h3>
                    <p class="facility-card-desc">
                        Expansive natural grass sports lawn and playground dedicated to football, cricket, athletics, yoga, gymnastics, and pre-primary obstacle games under qualified physical education mentors.
                    </p>
                    <a href="{{ route('gallery') }}" class="facility-card-link-btn">
                        <span>View Sports Gallery</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 6: Multi-Purpose Hall & Assembly Space -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset($content['card6_image'] ?? 'assets/images/gallery-assembly.jpg') }}" alt="Multi-Purpose Hall and Assembly Space at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-landmark"></i>
                        <span>Events &amp; Assembly</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #b45309; background: #fffbeb; border: 1px solid #fde68a;">Central Space</span>
                        <span class="facility-spec-text">Indoor Stage</span>
                    </div>
                    <h3 class="facility-card-title">Multi-Purpose Hall &amp; Assembly Space</h3>
                    <p class="facility-card-desc">
                        Central indoor gathering space utilized for morning assemblies, inter-house debates, seminars, cultural celebrations, and student presentations without unverified equipment claims.
                    </p>
                    <a href="{{ route('gallery') }}" class="facility-card-link-btn">
                        <span>View Assembly Events</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 7: GPS-Enabled Transport Fleet -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset($content['card7_image'] ?? 'assets/images/fac-transport.jpg') }}" alt="GPS-Enabled School Transport Fleet" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-bus"></i>
                        <span>GPS Fleet</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #ea580c; background: #fff7ed; border: 1px solid #fed7aa;">4 Major Routes</span>
                        <span class="facility-spec-text">Female Attendants</span>
                    </div>
                    <h3 class="facility-card-title">GPS-Enabled School Transport</h3>
                    <p class="facility-card-desc">
                        Dedicated school bus fleet covering 4 key corridors in Parbhani (Station, Stadium, Collector Office, and Sambhaji Nagar) equipped with GPS tracking, speed governors, and female attendants.
                    </p>
                    <a href="{{ route('admission-info') }}#transport-facilities" class="facility-card-link-btn">
                        <span>View Bus Corridors</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 8: Safety & 24/7 CCTV Security -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset($content['card8_image'] ?? 'assets/images/fac-security.jpg') }}" alt="Safety and 24/7 CCTV Security Surveillance" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>24/7 Monitored</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #0369a1; background: #f0f9ff; border: 1px solid #bae6fd;">CCTV Network</span>
                        <span class="facility-spec-text">Guarded Gates</span>
                    </div>
                    <h3 class="facility-card-title">Safety &amp; 24/7 CCTV Security</h3>
                    <p class="facility-card-desc">
                        Full perimeter boundary wall, round-the-clock CCTV camera coverage at all entrance checkpoints, corridors, and school grounds, manned visitor entry verification, and fire safety provisions.
                    </p>
                    <a href="{{ route('mandatory-disclosure') }}" class="facility-card-link-btn">
                        <span>View Safety Compliance</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 9: Hygienic Dining & Refreshment Space -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset($content['card9_image'] ?? 'assets/images/gallery-day-1.jpg') }}" alt="Hygienic Dining and Refreshment Space at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-utensils"></i>
                        <span>Dining Space</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #be123c; background: #fff1f2; border: 1px solid #fecdd3;">RO Purified Water</span>
                        <span class="facility-spec-text">Clean &amp; Supervised</span>
                    </div>
                    <h3 class="facility-card-title">Hygienic Dining Space</h3>
                    <p class="facility-card-desc">
                        Clean, comfortable dining space equipped with continuous RO-purified drinking water systems and supervised hygiene standards for students during lunch and recess periods.
                    </p>
                    <a href="{{ route('gallery') }}" class="facility-card-link-btn">
                        <span>View Campus Life</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 10: Medical Infirmary & First-Aid Center -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset($content['card10_image'] ?? 'assets/images/prog-early-years.jpg') }}" alt="On-Campus Medical Infirmary and First Aid Center" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-briefcase-medical"></i>
                        <span>First Aid Post</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #be185d; background: #fdf2f8; border: 1px solid #fbcfe8;">Health Monitoring</span>
                        <span class="facility-spec-text">Emergency Care</span>
                    </div>
                    <h3 class="facility-card-title">Infirmary &amp; First-Aid Center</h3>
                    <p class="facility-card-desc">
                        On-campus medical room equipped with essential first-aid supplies, patient rest bed, first-aid trained personnel, regular student health checks, and swift emergency hospital coordination in Parbhani.
                    </p>
                    <a href="{{ route('contact') }}" class="facility-card-link-btn">
                        <span>Contact Help Desk</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 11: Eco-Friendly Green Campus (10,000 Sq. Mtr.) -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset($content['card11_image'] ?? 'assets/images/gallery/campus-building.png') }}" alt="10,000 Sq. Mtrs. Eco-Friendly Green Campus at Parbhani" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-leaf"></i>
                        <span>Green Campus</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #15803d; background: #f0fdf4; border: 1px solid #bbf7d0;">10,000 m² Campus</span>
                        <span class="facility-spec-text">Sanmati Campus</span>
                    </div>
                    <h3 class="facility-card-title">Eco-Friendly Green Campus</h3>
                    <p class="facility-card-desc">
                        Verified 10,000 Sq. Mtrs. (~2.47 Acres) of lush, clean educational premises on Jintur Road, featuring tree-lined perimeter walkways, natural ventilation, and an eco-conscious learning atmosphere.
                    </p>
                    <a href="{{ route('contact') }}#campus-map" class="facility-card-link-btn">
                        <span>Locate on Map</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 12: Arts, Music & Creative Studios -->
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ asset($content['card12_image'] ?? 'assets/images/gallery/gallery-art-circle-kids.jpg') }}" alt="Arts, Music and Creative Activity Studios at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="fa-solid fa-palette"></i>
                        <span>Creative Studios</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="color: #0f766e; background: #f0fdfa; border: 1px solid #99f6e4;">Arts &amp; Music</span>
                        <span class="facility-spec-text">Dedicated Studio</span>
                    </div>
                    <h3 class="facility-card-title">Arts &amp; Creative Studios</h3>
                    <p class="facility-card-desc">
                        Dedicated studios for fine arts, paper craft, origami, and vocal music, encouraging students to express their originality, develop dexterity, and explore performing arts beyond textbooks.
                    </p>
                    <a href="{{ route('gallery') }}" class="facility-card-link-btn">
                        <span>View Creative Works</span>
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
