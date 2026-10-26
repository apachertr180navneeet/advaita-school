@extends('layouts.app')

@section('title', "Secondary School (Classes 6 to 10) - Advaita School of Excellence, Parbhani | NEET / IIT Foundation")
@section('meta_description', "Advaita Secondary School (Classes 6 to 10) delivers CBSE academic excellence, specialized NEET/IIT Foundation mentorship, science laboratories, and 100% board examination passing track records.")

@section('content')
<main id="main" class="main-content-wrapper acad-page-wrapper secondary-page">

    <!-- =========================================================================
         1. HERO SECTION: Secondary School & Career Foundation Theme
         ========================================================================= -->
    <section class="admission-hero-section secondary-hero">
        <div class="admission-hero-canvas">
            <!-- Hero Visual -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="{{ asset($content['hero_image'] ?? 'assets/images/fac-science-lab.jpg') }}" alt="Secondary Students at Advaita School of Excellence" class="admission-hero-bg-img" width="1024" height="682">
            </div>

            <!-- SVG Wave Overlay -->
            <div class="admission-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H560C600 130 530 280 640 440H0V0Z" fill="#EEF6FC" fill-opacity="0.97"/>
                    <path d="M540 0C580 140 510 280 620 440H590C490 280 550 140 510 0H540Z" fill="#7C3AED" fill-opacity="0.2"/>
                </svg>
            </div>

            <!-- Handwritten Script Tag -->
            <div class="admission-hero-script-tag" aria-hidden="true">
                <span class="script-title">Aspirations<br>to Reality</span>
                <svg class="script-underline" viewBox="0 0 120 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 12C38 3 84 4 116 14" stroke="#7C3AED" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </div>

            <!-- Left Content Panel -->
            <div class="admission-hero-left-panel">
                <div class="admission-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <nav class="admission-breadcrumb" aria-label="Breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="{{ route('academics') }}">Programmes</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Secondary (Classes 6–10)</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">
                        <i class="fa-solid fa-graduation-cap text-orange me-1"></i>
                        {{ $content['hero_badge'] ?? 'SECONDARY WING (CLASSES 6 TO 10)' }}
                    </div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        {{ $content['hero_title'] ?? 'CBSE Excellence & NEET / IIT' }}
                        <span class="highlight-orange">{{ $content['hero_highlight'] ?? 'Foundation Pathways.' }}</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        {{ $content['hero_desc'] ?? 'A rigorous secondary programme designed to build top board scores and instill early competitive mastery for India\'s premier entrance examinations.' }}
                    </p>

                    <div class="d-flex align-items-center gap-12 mt-20 flex-wrap">
                        <a href="{{ route('online-registration') }}" class="btn-primary-pill">
                            <span>Register for Secondary Wing</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#iit-foundation" class="btn-outline-pill">
                            <i class="fa-solid fa-atom"></i>
                            <span>IIT Foundation Programme</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Container -->
    <div class="acad-container">

        <!-- =========================================================================
             2. DEDICATED NEET / IIT FOUNDATION PROGRAMME (HERO FEATURE)
             ========================================================================= -->
        <section class="special-track-section iit-track" id="iit-foundation">
            <div class="special-track-card">
                <div class="special-track-grid">
                    <div class="special-track-visual">
                        <img src="{{ asset($content['iit_image'] ?? 'assets/images/gallery/academic-learning.png') }}" alt="NEET and IIT Foundation Batch at Advaita">
                        <div class="track-badge-floating purple">
                            <i class="fa-solid fa-atom"></i>
                            <span>Classes 6 to 10 Integrated</span>
                        </div>
                    </div>

                    <div class="special-track-content">
                        <span class="track-eyebrow">CAREER READINESS FOR JEE &amp; NEET</span>
                        <h2 class="track-heading">
                            {{ $content['iit_title'] ?? 'Dedicated NEET / IIT Foundation Programme' }}
                        </h2>
                        <p class="track-desc">
                            {{ $content['iit_desc'] ?? 'Integrated coaching with CBSE academics, focusing on advanced conceptual problem solving, higher-order thinking skills (HOTS), and diagnostic testing.' }}
                        </p>

                        <div class="iit-features-grid">
                            <div class="iit-feat-card">
                                <i class="fa-solid fa-microscope text-orange"></i>
                                <h4>Conceptual Depth in STEM</h4>
                                <p>Deep dive into Physics, Chemistry, Biology, and advanced Mathematics beyond standard textbooks.</p>
                            </div>
                            <div class="iit-feat-card">
                                <i class="fa-solid fa-clipboard-check text-blue"></i>
                                <h4>Weekly Milestone Tests</h4>
                                <p>OMR-pattern diagnostic tests replicating competitive JEE Main and NEET environments.</p>
                            </div>
                            <div class="iit-feat-card">
                                <i class="fa-solid fa-chalkboard-user text-teal"></i>
                                <h4>Specialist Mentors</h4>
                                <p>Experienced educators with specialized competitive training backgrounds for Classes 6 to 10.</p>
                            </div>
                            <div class="iit-feat-card">
                                <i class="fa-solid fa-arrows-split-up-and-left text-purple"></i>
                                <h4>Integrated Timetable</h4>
                                <p>No exhaustion from outside tuition. All foundation coaching is synced with the school day.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-12 mt-20 flex-wrap">
                            <a href="{{ route('results', ['category' => 'iit_foundation']) }}" class="btn-track-results">
                                <i class="fa-solid fa-trophy"></i>
                                <span>View Foundation Achievements</span>
                            </a>
                            <a href="{{ route('online-registration') }}" class="btn-building-cta">
                                <span>Apply for Foundation Screening</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             3. CBSE SECONDARY CURRICULUM & SUBJECT MATRIX
             ========================================================================= -->
        <section class="acad-section" id="secondary-curriculum">
            <div class="acad-section-header">
                <span class="acad-eyebrow">— CBSE SECONDARY CURRICULUM —</span>
                <h2 class="acad-section-title">
                    Rigorous Academics Aligned with <span class="highlight-orange">CBSE Standards.</span>
                </h2>
                <p class="acad-section-desc">
                    Affiliated with the Central Board of Secondary Education (CBSE Affiliation No. 1130920), our curriculum prepares students thoroughly for the Class 10 Board Examinations.
                </p>
            </div>

            <div class="subjects-grid">
                <div class="subject-card">
                    <div class="subject-icon icon-blue"><i class="fa-solid fa-square-root-variable"></i></div>
                    <h3>Mathematics (Standard &amp; Basic)</h3>
                    <p>Algebra, Geometry, Trigonometry, Coordinate Geometry, Statistics, and Probability with rigorous proof mastery.</p>
                </div>

                <div class="subject-card">
                    <div class="subject-icon icon-teal"><i class="fa-solid fa-flask"></i></div>
                    <h3>Science (Physics, Chemistry, Biology)</h3>
                    <p>Hands-on laboratory experiments, scientific reasoning, chemical reactions, optics, and human physiology.</p>
                </div>

                <div class="subject-card">
                    <div class="subject-icon icon-purple"><i class="fa-solid fa-earth-americas"></i></div>
                    <h3>Social Science</h3>
                    <p>History of India &amp; Modern World, Geography, Democratic Politics, Economics, and Disaster Management.</p>
                </div>

                <div class="subject-card">
                    <div class="subject-icon icon-orange"><i class="fa-solid fa-book-bookmark"></i></div>
                    <h3>English Language &amp; Literature</h3>
                    <p>Critical text analysis, formal speech delivery, creative writing, and advanced grammar comprehension.</p>
                </div>

                <div class="subject-card">
                    <div class="subject-icon icon-indigo"><i class="fa-solid fa-language"></i></div>
                    <h3>Second Languages (Hindi / Sanskrit / Marathi)</h3>
                    <p>Grammar refinement, classic literature appreciation, and flawless oral and written expression.</p>
                </div>

                <div class="subject-card">
                    <div class="subject-icon icon-pink"><i class="fa-solid fa-robot"></i></div>
                    <h3>Information Technology &amp; AI</h3>
                    <p>Computer applications, Python fundamentals, cyber security ethics, and artificial intelligence introduction.</p>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             4. 100% BOARD RESULTS & DISTRICT MERIT SPOTLIGHT
             ========================================================================= -->
        <section class="secondary-results-spotlight">
            <div class="spotlight-card">
                <div class="spotlight-header">
                    <span class="spotlight-badge"><i class="fa-solid fa-award"></i> PROVEN TRACK RECORD</span>
                    <h2>Consistent 100% CBSE Class 10 Board Results</h2>
                    <p>Our academic discipline and continuous mentorship have produced district-wide toppers year after year.</p>
                </div>

                <div class="spotlight-metrics-row">
                    <div class="spotlight-metric">
                        <strong class="metric-num">100%</strong>
                        <span>Class 10 Board Passing Rate</span>
                    </div>
                    <div class="spotlight-metric">
                        <strong class="metric-num">98.40%</strong>
                        <span>District 1st Topper (Om Dhoot)</span>
                    </div>
                    <div class="spotlight-metric">
                        <strong class="metric-num">35%+</strong>
                        <span>Students Scoring Above 90%</span>
                    </div>
                    <div class="spotlight-metric">
                        <strong class="metric-num">100%</strong>
                        <span>First Division Pass Record</span>
                    </div>
                </div>

                <div class="spotlight-cta text-center mt-24">
                    <a href="{{ route('results', ['category' => 'board']) }}" class="btn-primary-pill">
                        <i class="fa-solid fa-trophy"></i>
                        <span>Explore Full Board Results &amp; Toppers Gallery</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             5. COMPETITIVE EXAMINATIONS & SCHOLARSHIPS
             ========================================================================= -->
        <section class="acad-section" id="scholarships">
            <div class="acad-section-header">
                <span class="acad-eyebrow">— SCHOLARSHIPS &amp; COMPETITIONS —</span>
                <h2 class="acad-section-title">
                    Mentorship for <span class="highlight-orange">National Competitions.</span>
                </h2>
                <p class="acad-section-desc">
                    We nurture ambitious scholars for state and national talent screenings that open future scholarship pathways.
                </p>
            </div>

            <div class="instruments-grid">
                <div class="instrument-item">
                    <div class="ins-icon"><i class="fa-solid fa-award"></i></div>
                    <h4>Dr. Homi Bhabha Balvaidnyanik</h4>
                    <p>Guidance through theory, practical science experiments, and research project presentation.</p>
                </div>

                <div class="instrument-item">
                    <div class="ins-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <h4>Maharashtra State Scholarship</h4>
                    <p>Targeted coaching for Class 8 High School Scholarship exams with extensive mock practice.</p>
                </div>

                <div class="instrument-item">
                    <div class="ins-icon"><i class="fa-solid fa-atom"></i></div>
                    <h4>Vidyarthi Vigyan Manthan (VVM)</h4>
                    <p>National science talent search mentorship organized by Vijnana Bharati and NCERT.</p>
                </div>

                <div class="instrument-item">
                    <div class="ins-icon"><i class="fa-solid fa-medal"></i></div>
                    <h4>National Olympiads (SOF)</h4>
                    <p>Advanced competitive problem-solving for secondary Olympiad medals in Science, Math, and Cyber.</p>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             6. ADMISSION CTA
             ========================================================================= -->
        <section class="acad-cta-banner">
            <div class="acad-cta-card">
                <div class="acad-cta-content">
                    <span class="acad-cta-eyebrow">ADMISSIONS OPEN FOR CLASSES 6 TO 10</span>
                    <h2 class="acad-cta-heading">
                        Step Into Academic Brilliance &amp; Career Preparation.
                    </h2>
                    <p class="acad-cta-subtext">
                        Join Advaita School of Excellence for proven Class 10 CBSE Board results and early NEET/IIT Foundation mentorship.
                    </p>
                    <div class="acad-cta-btn-group">
                        <a href="{{ route('online-registration') }}" class="btn-acad-cta-primary">
                            <span>Apply for Admission</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="{{ route('fee-structure') }}" class="btn-acad-cta-call">
                            <i class="fa-solid fa-indian-rupee-sign"></i>
                            <span>View Fee Structure</span>
                        </a>
                        <a href="{{ route('contact') }}" class="btn-acad-cta-wa">
                            <i class="fa-solid fa-envelope"></i>
                            <span>Contact Campus Office</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div><!-- /.acad-container -->

</main>
@endsection
