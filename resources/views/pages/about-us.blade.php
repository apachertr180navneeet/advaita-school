@extends('layouts.app')

@section('title', "About Us - Advaita School of Excellence, Parbhani | Premier CBSE School")

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/about-us.css') }}?v={{ file_exists(public_path('assets/css/about-us.css')) ? filemtime(public_path('assets/css/about-us.css')) : '1.0' }}">
@endsection

@section('content')
<main id="main" class="main-content-wrapper about-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Breadcrumb + Title + Building Visual
         ========================================================================= -->
    <section class="about-hero-section">
        <div class="about-hero-canvas">
            <!-- Background School Building on the Right -->
            <div class="about-hero-bg-visual" aria-hidden="true">
                <img src="{{ asset($content['hero_image'] ?? 'assets/images/about-hero-building.jpg') }}" 
                     alt="Advaita School of Excellence Campus" 
                     class="about-hero-bg-img" 
                     loading="eager">
            </div>

            <!-- SVG Wave Overlay for Organic Boundary -->
            <div class="about-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H520C550 120 500 280 600 440H0V0Z" fill="#EEF6FC" fill-opacity="0.96"/>
                    <path d="M500 0C530 140 480 280 580 440H560C460 280 510 140 480 0H500Z" fill="#F37021" fill-opacity="0.3"/>
                </svg>
            </div>

            <!-- Left Content Panel -->
            <div class="about-hero-left-panel">
                <div class="about-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <nav class="about-breadcrumb" aria-label="Breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">About Us</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="about-eyebrow">{{ $content['hero_eyebrow'] ?? 'About Us' }}</div>

                    <!-- Main Headline -->
                    <h1 class="about-hero-title">
                        {{ $content['hero_title'] ?? 'Advaita School of Excellence,' }}<br>
                        <span class="highlight-orange">{{ $content['hero_highlight'] ?? 'Parbhani' }}</span>
                    </h1>

                    <!-- Bold Tagline -->
                    <div class="about-hero-tagline">
                        {!! nl2br(e($content['hero_tagline'] ?? "Nurturing Excellence. Inspiring Innovation.\nShaping Futures.")) !!}
                    </div>

                    <!-- Description -->
                    <p class="about-hero-desc">
                        {{ $content['hero_desc'] ?? 'Established in 2016 under the visionary leadership of Mr. Vishal Vattamwar, Chairman of Sanmati Sevabhavi Sanstha, Advaita School of Excellence, Parbhani, was founded to bring quality education to every student in Parbhani.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. OUR VISION SECTION
         ========================================================================= -->
    <section class="about-vision-section">
        <div class="about-section-container">
            <div class="about-vision-grid">
                <!-- Left Content -->
                <div class="about-vision-content">
                    <div class="about-eyebrow">{{ $content['vision_eyebrow'] ?? 'Our Vision' }}</div>
                    <h2 class="about-section-title">
                        {{ $content['vision_title'] ?? 'A Vision Beyond Conventional' }}
                        <span class="highlight-orange highlight-serif">{{ $content['vision_highlight'] ?? 'Schooling.' }}</span>
                    </h2>
                    <p class="about-vision-desc">
                        {{ $content['vision_desc'] ?? 'At Advaita, education goes beyond textbooks and examinations. We aim to nurture curious minds, develop strong conceptual foundations, and prepare students for a competitive future.' }}
                    </p>
                    <a href="{{ $content['vision_btn_url'] ?? route('vision-mission') }}" class="btn-about-primary">
                        <span>{{ $content['vision_btn_text'] ?? 'Learn More' }}</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Right Media -->
                <div class="about-vision-media">
                    <img src="{{ asset($content['vision_image'] ?? 'assets/images/about-vision-students.jpg') }}" 
                         alt="Students learning at Advaita School of Excellence" 
                         class="about-vision-img">
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. OUR PILLARS SECTION
         ========================================================================= -->
    <section class="about-pillars-section">
        <div class="about-section-container">
            <div class="about-section-header">
                <div class="about-eyebrow">{{ $content['pillars_eyebrow'] ?? 'Our Pillars' }}</div>
                <h2 class="about-section-title">
                    {{ $content['pillars_title'] ?? 'Built on Values. Driven by' }}
                    <span class="highlight-orange highlight-serif">{{ $content['pillars_highlight'] ?? 'Excellence.' }}</span>
                </h2>
            </div>

            <div class="about-pillars-grid">
                @foreach($pillars ?? [] as $pillar)
                <div class="about-pillar-card">
                    <div class="pillar-icon-box {{ $pillar['icon_class'] ?? 'blue' }}" aria-hidden="true">
                        <i class="{{ $pillar['icon'] ?? 'fa-solid fa-award' }}"></i>
                    </div>
                    <h3 class="pillar-title">{{ $pillar['title'] }}</h3>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. OUR JOURNEY SECTION (ACHIEVEMENTS BANNER)
         ========================================================================= -->
    <section class="about-journey-section">
        <div class="about-section-container">
            <div class="about-journey-banner">
                <div class="about-journey-content">
                    <div class="about-eyebrow" style="color: #FDBA74;">{{ $content['journey_eyebrow'] ?? 'Our Journey' }}</div>
                    <h2 class="about-journey-title">{{ $content['journey_title'] ?? 'From Roots to Remarkable Achievements.' }}</h2>
                    <p class="about-journey-desc">
                        {{ $content['journey_desc'] ?? 'Affiliated with CBSE since 2019, Advaita School of Excellence achieved the No. 1 position in Parbhani in Class X Board Results in 2026 — a milestone of collective effort.' }}
                    </p>
                </div>
                <div class="about-journey-media" aria-hidden="true">
                    <img src="{{ asset($content['journey_image'] ?? 'assets/images/about-journey-trophy.png') }}" 
                         alt="No. 1 in Parbhani Board Results Trophy" 
                         class="about-journey-trophy">
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. OUR ACADEMIC JOURNEY SECTION (STAGES)
         ========================================================================= -->
    <section class="about-stages-section">
        <div class="about-section-container">
            <div class="about-stages-layout">
                <!-- Left Information -->
                <div class="about-stages-info">
                    <div class="about-eyebrow">{{ $content['stages_eyebrow'] ?? 'Our Academic Journey' }}</div>
                    <h2 class="about-stages-title">{{ $content['stages_title'] ?? 'Learning at Every Stage.' }}</h2>
                    <p class="about-stages-desc">
                        {{ $content['stages_desc'] ?? 'From Foundational to Secondary Stage, we provide a structured and engaging learning path for every child.' }}
                    </p>
                </div>

                <!-- Right Sequence of Stages with Arrows -->
                <div class="about-stages-sequence">
                    @foreach($academicStages ?? [] as $stage)
                    <div class="about-stage-item">
                        <div class="stage-icon-circle {{ $stage['color'] ?? 'blue' }}" aria-hidden="true">
                            <i class="{{ $stage['icon'] ?? 'fa-solid fa-graduation-cap' }}"></i>
                        </div>
                        <h4 class="stage-title">{{ $stage['title'] }}</h4>
                        <span class="stage-sub">{{ $stage['subtitle'] }}</span>
                    </div>

                    @if(!$loop->last)
                    <div class="stage-arrow" aria-hidden="true">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. OUR COMMITMENT SECTION
         ========================================================================= -->
    <section class="about-commitment-section">
        <div class="about-section-container">
            <div class="about-commitment-grid">
                <!-- Left Content -->
                <div class="about-commitment-content">
                    <div class="about-eyebrow">{{ $content['commitment_eyebrow'] ?? 'Our Commitment' }}</div>
                    <h2 class="about-section-title">
                        {{ $content['commitment_title'] ?? 'Empowering Every Child for a' }}<br>
                        <span class="highlight-orange highlight-serif">{{ $content['commitment_highlight'] ?? 'Brighter Tomorrow.' }}</span>
                    </h2>
                    <p class="about-commitment-desc">
                        {{ $content['commitment_desc'] ?? 'With visionary leadership and dedicated educators, we are committed to empowering students with the knowledge, values and skills to succeed in life.' }}
                    </p>
                    <a href="{{ $content['commitment_btn_url'] ?? route('online-registration') }}" class="btn-about-primary">
                        <span>{{ $content['commitment_btn_text'] ?? 'Join Our Journey' }}</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Right Media -->
                <div class="about-commitment-media">
                    <img src="{{ asset($content['commitment_image'] ?? 'assets/images/about-commitment-students.jpg') }}" 
                         alt="Advaita Students" 
                         class="about-commitment-img">
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
