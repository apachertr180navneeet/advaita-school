@extends('layouts.app')

@section('title', "Campus Facilities & Infrastructure - Advaita School of Excellence, Parbhani | 10,000 Sq. Mtr. Campus")
@section('meta_description', $seo['description'] ?? 'Explore verified facilities at Advaita School of Excellence across our 10,000 sq. mtr. campus, featuring 25 smart classrooms, robotics and science laboratories, green sports lawns, library, and 24x7 security.')
@section('meta_keywords', $seo['keywords'] ?? 'School facilities Parbhani, robotics lab, smart classes, sports ground, library, campus infrastructure, 10000 sq mtr campus')

@section('content')
<main id="main" class="main-content-wrapper facilities-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Centered Hero with Verified Infrastructure Badges
         ========================================================================= -->
    <section class="facilities-hero-section">
        <div class="facilities-hero-canvas">
            <div class="facilities-hero-inner">
                <!-- Centered Breadcrumb -->
                <nav class="facilities-breadcrumb" aria-label="Breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                    <span class="active">Facilities</span>
                </nav>

                <!-- Centered Eyebrow -->
                <div class="facilities-eyebrow">{{ $content['hero_badge'] ?? '— OUR CAMPUS —' }}</div>

                <!-- Centered Main Title -->
                <h1 class="facilities-hero-title">
                    {{ $content['hero_title'] ?? 'More than Classrooms, A Place to Grow.' }}
                </h1>

                <!-- Centered Description -->
                <p class="facilities-hero-desc">
                    {{ $content['hero_desc'] ?? 'Our campus is thoughtfully designed to provide a safe, modern and inspiring environment where every child can learn, explore and excel across 10,000 sq. mtrs. of dedicated infrastructure.' }}
                </p>

                <!-- 4 Feature Pills Badges Under Centered Hero (Verified Metrics) -->
                <div class="facilities-pills-grid">
                    <div class="facilities-pill-card">
                        <div class="pill-icon orange" aria-hidden="true">
                            <i class="fa-solid fa-building-columns"></i>
                        </div>
                        <span class="pill-text">10,000 m²<br>Campus Land Area</span>
                    </div>

                    <div class="facilities-pill-card">
                        <div class="pill-icon blue" aria-hidden="true">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </div>
                        <span class="pill-text">25 Smart<br>Classrooms</span>
                    </div>

                    <div class="facilities-pill-card">
                        <div class="pill-icon pink" aria-hidden="true">
                            <i class="fa-solid fa-flask-vial"></i>
                        </div>
                        <span class="pill-text">Dedicated Science,<br>Math &amp; Tech Labs</span>
                    </div>

                    <div class="facilities-pill-card">
                        <div class="pill-icon green" aria-hidden="true">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <span class="pill-text">24/7 CCTV &amp;<br>Verified Transport</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. MAIN FACILITIES GRID SECTION: Verified 12 Facility Cards
         ========================================================================= -->
    <section class="facilities-main-section">
        <div class="facilities-container">

            <!-- Section Header -->
            <div class="facilities-section-header">
                <span class="facilities-eyebrow">— CAMPUS INFRASTRUCTURE &amp; AMENITIES —</span>
                <h2 class="facilities-section-title">
                    Spaces That <span class="highlight-serif">Inspire</span> Every Day.
                </h2>
                <p class="facilities-section-desc">
                    From technology-enabled learning to outdoor physical fitness, every facility at Advaita School of Excellence is verified and maintained to high educational and safety benchmarks.
                </p>
            </div>

            <!-- Infrastructure Classification Strip (Existing vs Planned) -->
            <div class="infrastructure-classification-box mb-40" style="background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 18px; padding: 24px 28px; box-shadow: 0 4px 20px rgba(8, 59, 122, 0.04);">
                <div class="row align-items-center g-3">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center gap-10 mb-8">
                            <span class="badge" style="background: #083B7A; color: #ffffff; font-size: 11px; padding: 5px 10px; border-radius: 6px; font-weight: 700;">CURRENT OPERATIONAL INFRASTRUCTURE</span>
                            <span class="badge" style="background: #fff7ed; color: #c2410c; border: 1px solid #fed7aa; font-size: 11px; padding: 4px 10px; border-radius: 6px; font-weight: 700;">CBSE COMPLIANCE</span>
                        </div>
                        <p style="font-size: 13.5px; color: #334155; line-height: 1.55; margin: 0;">
                            <strong>Active Campus:</strong> 10,000 Sq. Mtrs. land area near Sanmati Campus, Jintur Road, Parbhani, housing 25 smart classrooms (47.08 m² each), Composite Science Lab (56 m²), Math Activity Lab (47 m²), Computer Lab (56 m²), Green Sports Lawns, Multi-Purpose Assembly Hall, and 24/7 CCTV surveillance.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <div style="background: #f8fafc; border-left: 3px solid #F37021; padding: 10px 14px; border-radius: 0 8px 8px 0; text-align: left; display: inline-block;">
                            <span style="display: block; font-size: 11px; font-weight: 800; color: #F37021; text-transform: uppercase;">Planned Expansion</span>
                            <span style="font-size: 12px; color: #475569; font-weight: 600;">Upcoming dedicated Pre-Primary Wing &amp; Innovation Hub</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 12 Facility Cards Grid -->
            <div class="facilities-grid">

                <!-- Card 1: Smart Classrooms -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="{{ asset($content['card1_image'] ?? 'assets/images/fac-smart-class.jpg') }}" alt="25 Smart Classrooms at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-orange" aria-hidden="true">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <span class="facility-tag-pill" style="font-size: 11px; font-weight: 700; color: #ea580c; background: #fff7ed; padding: 2px 8px; border-radius: 4px;">25 Classrooms</span>
                            <span style="font-size: 11px; color: #64748b; font-weight: 600;">47.08 m² each</span>
                        </div>
                        <h3 class="facility-card-title">Smart Classrooms</h3>
                        <p class="facility-card-desc">
                            Well-ventilated, spacious classrooms adhering to CBSE spatial guidelines, equipped with interactive multimedia teaching displays, ergonomic student desks, and natural airflow.
                        </p>
                        <a href="{{ route('academics') }}" class="facility-card-link">
                            <span>Explore Academics</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Science & Mathematics Laboratories -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="{{ asset($content['card2_image'] ?? 'assets/images/gallery/science-lab.png') }}" alt="Science and Mathematics Laboratories at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-blue" aria-hidden="true">
                            <i class="fa-solid fa-flask"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <span class="facility-tag-pill" style="font-size: 11px; font-weight: 700; color: #0284c7; background: #f0f9ff; padding: 2px 8px; border-radius: 4px;">Science &amp; Math</span>
                            <span style="font-size: 11px; color: #64748b; font-weight: 600;">56 m² &amp; 47 m²</span>
                        </div>
                        <h3 class="facility-card-title">Science &amp; Mathematics Laboratories</h3>
                        <p class="facility-card-desc">
                            Composite Science Lab for practical experimentation across Physics, Chemistry, and Biology, paired with a dedicated Mathematics Lab with Abacus apparatus, geometric kits, and calculators.
                        </p>
                        <a href="{{ route('academics') }}" class="facility-card-link">
                            <span>Explore Practical Labs</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 3: Robotics & Technology Labs -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="{{ asset($content['card3_image'] ?? 'assets/images/gallery/robotics-lab.png') }}" alt="Robotics and Computer Technology Lab at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-purple" aria-hidden="true">
                            <i class="fa-solid fa-robot"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <span class="facility-tag-pill" style="font-size: 11px; font-weight: 700; color: #7c3aed; background: #f5f3ff; padding: 2px 8px; border-radius: 4px;">Robotics &amp; STEAM</span>
                            <span style="font-size: 11px; color: #64748b; font-weight: 600;">56 m² Lab</span>
                        </div>
                        <h3 class="facility-card-title">Robotics &amp; Technology Labs</h3>
                        <p class="facility-card-desc">
                            Hands-on STEAM robotics kits, microcontrollers, and sensor experimentation sets alongside our 56 m² Computer Laboratory with high-speed internet for coding, logic building, and digital literacy.
                        </p>
                        <a href="{{ route('academics') }}" class="facility-card-link">
                            <span>Explore Tech &amp; Coding</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 4: Library & Reading Resource Center -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="{{ asset($content['card4_image'] ?? 'assets/images/fac-library.jpg') }}" alt="School Library and Reading Resource Center" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-violet" aria-hidden="true">
                            <i class="fa-solid fa-book-bookmark"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <span class="facility-tag-pill" style="font-size: 11px; font-weight: 700; color: #4338ca; background: #eef2ff; padding: 2px 8px; border-radius: 4px;">Resource Center</span>
                            <span style="font-size: 11px; color: #64748b; font-weight: 600;">CBSE Curriculum</span>
                        </div>
                        <h3 class="facility-card-title">Library &amp; Resource Center</h3>
                        <p class="facility-card-desc">
                            Carefully curated collection of curriculum reference volumes, children's literature, encyclopedias, and educational periodicals with peaceful reading desks to foster lifelong reading habits.
                        </p>
                        <a href="{{ route('about-us') }}" class="facility-card-link">
                            <span>Explore Reading Culture</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 5: Green Sports Lawns & Playgrounds -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="{{ asset($content['card5_image'] ?? 'assets/images/gallery/gallery-parachute-lawn-building.jpg') }}" alt="Green Sports Lawn and Outdoor Playgrounds at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-green" aria-hidden="true">
                            <i class="fa-solid fa-person-running"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <span class="facility-tag-pill" style="font-size: 11px; font-weight: 700; color: #15803d; background: #f0fdf4; padding: 2px 8px; border-radius: 4px;">Green Sports Lawn</span>
                            <span style="font-size: 11px; color: #64748b; font-weight: 600;">Outdoor Grounds</span>
                        </div>
                        <h3 class="facility-card-title">Green Sports Lawns &amp; Playgrounds</h3>
                        <p class="facility-card-desc">
                            Expansive natural grass sports lawn and playground dedicated to football, cricket, athletics, yoga, gymnastics, and pre-primary obstacle games under qualified physical education mentors.
                        </p>
                        <a href="{{ route('gallery') }}" class="facility-card-link">
                            <span>View Sports Gallery</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 6: Multi-Purpose Hall & Assembly Space -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="{{ asset($content['card6_image'] ?? 'assets/images/gallery-assembly.jpg') }}" alt="Multi-Purpose Hall and Assembly Space at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-amber" aria-hidden="true">
                            <i class="fa-solid fa-landmark"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <span class="facility-tag-pill" style="font-size: 11px; font-weight: 700; color: #b45309; background: #fffbeb; padding: 2px 8px; border-radius: 4px;">Multi-Purpose Hall</span>
                            <span style="font-size: 11px; color: #64748b; font-weight: 600;">Events &amp; Assembly</span>
                        </div>
                        <h3 class="facility-card-title">Multi-Purpose Hall &amp; Assembly Space</h3>
                        <p class="facility-card-desc">
                            Central indoor gathering space utilized for morning assemblies, inter-house debates, seminars, cultural celebrations, and student presentations without unverified equipment claims.
                        </p>
                        <a href="{{ route('gallery') }}" class="facility-card-link">
                            <span>View Assembly Events</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 7: GPS-Enabled Transport Fleet -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="{{ asset($content['card7_image'] ?? 'assets/images/fac-transport.jpg') }}" alt="GPS-Enabled School Transport Fleet" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-orange" aria-hidden="true">
                            <i class="fa-solid fa-bus"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <span class="facility-tag-pill" style="font-size: 11px; font-weight: 700; color: #ea580c; background: #fff7ed; padding: 2px 8px; border-radius: 4px;">GPS Fleet</span>
                            <span style="font-size: 11px; color: #64748b; font-weight: 600;">4 Major Routes</span>
                        </div>
                        <h3 class="facility-card-title">GPS-Enabled School Transport</h3>
                        <p class="facility-card-desc">
                            Dedicated school bus fleet covering 4 key corridors in Parbhani (Station, Stadium, Collector Office, and Sambhaji Nagar) equipped with GPS tracking, speed governors, and female attendants.
                        </p>
                        <a href="{{ route('admission-info') }}#transport-facilities" class="facility-card-link">
                            <span>View Bus Corridors</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 8: Safety & 24/7 CCTV Security -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="{{ asset($content['card8_image'] ?? 'assets/images/fac-security.jpg') }}" alt="Safety and 24/7 CCTV Security Surveillance" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-blue" aria-hidden="true">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <span class="facility-tag-pill" style="font-size: 11px; font-weight: 700; color: #0369a1; background: #f0f9ff; padding: 2px 8px; border-radius: 4px;">24/7 Monitored</span>
                            <span style="font-size: 11px; color: #64748b; font-weight: 600;">CCTV Network</span>
                        </div>
                        <h3 class="facility-card-title">Safety &amp; 24/7 CCTV Security</h3>
                        <p class="facility-card-desc">
                            Full perimeter boundary wall, round-the-clock CCTV camera coverage at all entrance checkpoints, corridors, and school grounds, manned visitor entry verification, and fire safety provisions.
                        </p>
                        <a href="{{ route('mandatory-disclosure') }}" class="facility-card-link">
                            <span>View Safety Compliance</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 9: Hygienic Dining & Refreshment Space -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="{{ asset($content['card9_image'] ?? 'assets/images/gallery-day-1.jpg') }}" alt="Hygienic Dining and Refreshment Space at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-red" aria-hidden="true">
                            <i class="fa-solid fa-utensils"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <span class="facility-tag-pill" style="font-size: 11px; font-weight: 700; color: #be123c; background: #fff1f2; padding: 2px 8px; border-radius: 4px;">RO Purified Water</span>
                            <span style="font-size: 11px; color: #64748b; font-weight: 600;">Dining Hall</span>
                        </div>
                        <h3 class="facility-card-title">Hygienic Dining Space</h3>
                        <p class="facility-card-desc">
                            Clean, comfortable dining space equipped with continuous RO-purified drinking water systems and supervised hygiene standards for students during lunch and recess periods.
                        </p>
                        <a href="{{ route('gallery') }}" class="facility-card-link">
                            <span>View Campus Life</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 10: Medical Infirmary & First-Aid Center -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="{{ asset($content['card10_image'] ?? 'assets/images/prog-early-years.jpg') }}" alt="On-Campus Medical Infirmary and First Aid Center" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-pink" aria-hidden="true">
                            <i class="fa-solid fa-briefcase-medical"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <span class="facility-tag-pill" style="font-size: 11px; font-weight: 700; color: #be185d; background: #fdf2f8; padding: 2px 8px; border-radius: 4px;">First Aid Post</span>
                            <span style="font-size: 11px; color: #64748b; font-weight: 600;">Health Monitoring</span>
                        </div>
                        <h3 class="facility-card-title">Infirmary &amp; First-Aid Center</h3>
                        <p class="facility-card-desc">
                            On-campus medical room equipped with essential first-aid supplies, patient rest bed, first-aid trained personnel, regular student health checks, and swift emergency hospital coordination in Parbhani.
                        </p>
                        <a href="{{ route('contact') }}" class="facility-card-link">
                            <span>Contact Help Desk</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 11: Eco-Friendly Green Campus (10,000 Sq. Mtr.) -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="{{ asset($content['card11_image'] ?? 'assets/images/gallery/campus-building.png') }}" alt="10,000 Sq. Mtrs. Eco-Friendly Green Campus at Parbhani" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-green" aria-hidden="true">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <span class="facility-tag-pill" style="font-size: 11px; font-weight: 700; color: #15803d; background: #f0fdf4; padding: 2px 8px; border-radius: 4px;">10,000 m² Campus</span>
                            <span style="font-size: 11px; color: #64748b; font-weight: 600;">Sanmati Campus</span>
                        </div>
                        <h3 class="facility-card-title">Eco-Friendly Green Campus</h3>
                        <p class="facility-card-desc">
                            Verified 10,000 Sq. Mtrs. (~2.47 Acres) of lush, clean educational premises on Jintur Road, featuring tree-lined perimeter walkways, natural ventilation, and an eco-conscious learning atmosphere.
                        </p>
                        <a href="{{ route('contact') }}#campus-map" class="facility-card-link">
                            <span>Locate on Map</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 12: Arts, Music & Creative Studios -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="{{ asset($content['card12_image'] ?? 'assets/images/gallery/gallery-art-circle-kids.jpg') }}" alt="Arts, Music and Creative Activity Studios at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-teal" aria-hidden="true">
                            <i class="fa-solid fa-palette"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <span class="facility-tag-pill" style="font-size: 11px; font-weight: 700; color: #0f766e; background: #f0fdfa; padding: 2px 8px; border-radius: 4px;">Creative Studios</span>
                            <span style="font-size: 11px; color: #64748b; font-weight: 600;">Arts &amp; Music</span>
                        </div>
                        <h3 class="facility-card-title">Arts &amp; Creative Studios</h3>
                        <p class="facility-card-desc">
                            Dedicated studios for fine arts, paper craft, origami, and vocal music, encouraging students to express their originality, develop dexterity, and explore performing arts beyond textbooks.
                        </p>
                        <a href="{{ route('gallery') }}" class="facility-card-link">
                            <span>View Creative Works</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- 3. Stats Highlight Strip (Ground in Verified Metrics) -->
            <div class="facilities-stats-bar">
                <div class="facilities-stat-item">
                    <i class="fa-solid fa-mountain-city facilities-stat-icon orange" aria-hidden="true"></i>
                    <div>
                        <span class="facilities-stat-num">10,000 m²</span>
                        <span class="facilities-stat-label">Campus Land Area (~2.5 Acres)</span>
                    </div>
                </div>

                <div class="facilities-stat-item">
                    <i class="fa-solid fa-chalkboard-user facilities-stat-icon blue" aria-hidden="true"></i>
                    <div>
                        <span class="facilities-stat-num">25</span>
                        <span class="facilities-stat-label">Smart Classrooms (47.08 m² each)</span>
                    </div>
                </div>

                <div class="facilities-stat-item">
                    <i class="fa-solid fa-flask-vial facilities-stat-icon green" aria-hidden="true"></i>
                    <div>
                        <span class="facilities-stat-num">3</span>
                        <span class="facilities-stat-label">Dedicated Labs (Science, Math &amp; Tech)</span>
                    </div>
                </div>

                <div class="facilities-stat-item">
                    <i class="fa-solid fa-shield-halved facilities-stat-icon gold" aria-hidden="true"></i>
                    <div>
                        <span class="facilities-stat-num">100%</span>
                        <span class="facilities-stat-label">24/7 CCTV &amp; GPS Transport</span>
                    </div>
                </div>
            </div>

            <!-- 4. Pre-Footer Campus Tour CTA Banner -->
            <div class="facilities-cta-box">
                <div class="facilities-cta-left">
                    <span class="facilities-cta-pill">EXPERIENCE IT YOURSELF</span>
                    <h2 class="facilities-cta-headline">
                        {{ $content['cta_headline'] ?? 'Take a Campus Tour.' }}
                    </h2>
                    <p class="facilities-cta-desc">
                        {{ $content['cta_desc'] ?? 'Visit our campus and explore the facilities that make learning at Advaita a truly enriching experience across 10,000 sq. mtrs. of dedicated infrastructure.' }}
                    </p>
                </div>

                <div class="facilities-cta-actions">
                    <a href="{{ route('contact') }}" class="facilities-btn-primary">
                        <span>Schedule a Campus Visit</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="{{ route('contact') }}#campus-map" class="facilities-btn-map">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>View on Map</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>
@endsection
