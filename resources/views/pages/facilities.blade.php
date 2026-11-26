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
                        <strong class="fac-metric-strong">{{ $content['classrooms_count'] ?? '25 Smart Classrooms' }}</strong>
                        <span class="fac-metric-sub">Interactive Learning</span>
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
            @foreach($facilityCards as $card)
            @php
                $cardImg = $card['image'] ?? 'assets/images/fac-library.jpg';
                $cardImgUrl = (str_starts_with($cardImg, 'http://') || str_starts_with($cardImg, 'https://'))
                    ? $cardImg
                    : asset(ltrim($cardImg, '/'));
            @endphp
            <div class="facility-card">
                <div class="facility-thumb-wrap">
                    <img src="{{ $cardImgUrl }}" alt="{{ $card['title'] }} at Advaita" class="facility-thumb-img" loading="lazy">
                    <div class="facility-badge-overlay">
                        <i class="{{ $card['icon'] }}"></i>
                        <span>{{ $card['badge'] }}</span>
                    </div>
                </div>
                <div class="facility-card-body">
                    <div class="facility-meta-row">
                        <span class="facility-tag-pill" style="{{ $card['tag_style'] }}">{{ $card['tag'] }}</span>
                        <span class="facility-spec-text">{{ $card['spec'] }}</span>
                    </div>
                    <h3 class="facility-card-title">{{ $card['title'] }}</h3>
                    <p class="facility-card-desc">{{ $card['desc'] }}</p>
                    <a href="{{ $card['url'] }}" class="facility-card-link-btn">
                        <span>{{ $card['btn'] }}</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- =========================================================================
             6. PRE-FOOTER CAMPUS TOUR CONVERSION BANNER
             ========================================================================= -->
        <section class="secondary-helpline-card" id="campus-tour-cta">
            <div class="sec-helpline-content">
                <span class="sec-helpline-eyebrow">
                    <i class="fa-solid fa-sparkles"></i> EXPERIENCE IT YOURSELF
                </span>
                <h2>{{ $content['cta_headline'] ?? 'Take a Campus Tour.' }}</h2>
                <p>{{ $content['cta_desc'] ?? 'Visit our campus and explore the facilities that make learning at Advaita a truly enriching experience across 10,000 sq. mtrs. of dedicated infrastructure.' }}</p>

                <div class="sec-contact-chips">
                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', \App\Models\Setting::get('site_phone_primary', '+91 9689898973')) }}" class="sec-contact-chip">
                        <i class="fa-solid fa-phone"></i>
                        <span>{{ \App\Models\Setting::get('site_phone_primary', '+91 9689898973') }}</span>
                    </a>
                    <a href="mailto:{{ \App\Models\Setting::get('site_email_primary', 'admissions.advaita@gmail.com') }}" class="sec-contact-chip">
                        <i class="fa-solid fa-envelope"></i>
                        <span>{{ \App\Models\Setting::get('site_email_primary', 'admissions.advaita@gmail.com') }}</span>
                    </a>
                    <span class="sec-contact-chip">
                        <i class="fa-regular fa-clock"></i>
                        <span>{{ str_replace([':00', ' | '], ['', ': '], \App\Models\Setting::get('site_school_hours', 'Mon – Sat: 8 AM – 3 PM')) }}</span>
                    </span>
                    <a href="{{ route('contact') }}#campus-map" class="sec-contact-chip">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Gangakhed Rd, Parbhani</span>
                    </a>
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
