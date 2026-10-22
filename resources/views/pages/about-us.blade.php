@extends('layouts.app')

@section('title', "About Us - Advaita School of Excellence, Parbhani | Premier CBSE School")

@section('content')
<main id="main" class="main-content-wrapper about-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Welcome to A Premier CBSE School with a Stronger Purpose
         ========================================================================= -->
    <section class="about-hero-section">
        <div class="about-hero-canvas">
            <!-- Background Image & Sky on the Right -->
            <div class="about-hero-bg-visual">
                <img src="{{ asset($content['hero_image'] ?? 'assets/images/about-hero-building.jpg') }}" alt="Advaita School of Excellence Campus" class="about-hero-bg-img" loading="eager">
                <!-- Floating Script Badge in Sky -->
                <div class="about-hero-script-tag">
                    <span class="script-title">More<br>Than A School</span>
                    <svg class="script-underline" viewBox="0 0 140 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M4 10C36 4 98 4 136 12" stroke="#F37021" stroke-width="3.5" stroke-linecap="round"/>
                        <path d="M18 14C48 9 92 8 126 15" stroke="#F37021" stroke-width="2.5" stroke-linecap="round" opacity="0.75"/>
                    </svg>
                </div>
            </div>

            <!-- Left Organic White Panel with Curved Boundary -->
            <div class="about-hero-left-panel">
                <!-- Ambient decorative dots -->
                <div class="about-hero-dots-decor" aria-hidden="true"></div>

                <div class="about-hero-content-inner">
                    <span class="about-eyebrow">— {{ $content['hero_badge'] ?? 'WELCOME TO' }} —</span>
                    <h1 class="about-hero-title">
                        {{ $content['hero_title'] ?? 'A Premier CBSE School with a' }}<br>
                        <span class="about-text-orange">{{ $content['hero_highlight'] ?? 'Stronger Purpose.' }}</span>
                    </h1>
                    
                    <div class="about-hero-highlights">
                        <div class="highlight-line">
                            <span class="highlight-item">Academic Excellence</span>
                            <span class="highlight-pipe">|</span>
                            <span class="highlight-item">NEET / IIT Foundation</span>
                        </div>
                        <div class="highlight-line">
                            <span class="highlight-item">Competitive Exam Preparation</span>
                            <span class="highlight-pipe">|</span>
                            <span class="highlight-item">Values for Life</span>
                        </div>
                    </div>

                    <p class="about-hero-desc">
                        {{ $content['hero_subtitle'] ?? 'At Advaita School of Excellence, we go beyond textbooks to create a learning environment where curiosity is encouraged, confidence is built, and every child is empowered to achieve their true potential.' }}
                    </p>

                    <div class="about-hero-actions">
                        <a href="{{ route('online-registration') }}" class="about-btn-orange">
                            <span>Book a Campus Visit</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <!-- <a href="{{ route('vision-mission') }}" class="about-btn-vision">
                            <span class="vision-play-circle"><i class="fa-solid fa-play"></i></span>
                            <span>Our Vision</span>
                        </a> -->
                    </div>
                </div>

                <!-- Organic Wave Edge SVG -->
                <div class="about-hero-wave-edge" aria-hidden="true">
                    <svg viewBox="0 0 100 600" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0 C35 80 85 160 85 270 C85 390 30 480 75 600 L0 600 Z" fill="#d8ecff" opacity="0.6"/>
                        <path d="M0 0 C25 80 65 160 65 270 C65 390 15 480 55 600 L0 600 Z" fill="#ffffff"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- 4 Feature Cards Strip -->
        <div class="about-features-strip">
            <div class="about-strip-container">
                <div class="about-strip-grid">
                    <!-- Strip Card 1 -->
                    <div class="about-strip-card">
                        <div class="strip-icon-box icon-blue">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div class="strip-card-body">
                            <h4 class="strip-card-title">CBSE</h4>
                            <span class="strip-card-subtitle">Academic Excellence</span>
                            <p class="strip-card-desc">Future-ready learning with a global outlook.</p>
                        </div>
                    </div>
                    <!-- Strip Card 2 -->
                    <div class="about-strip-card">
                        <div class="strip-icon-box icon-orange">
                            <i class="fa-solid fa-stethoscope"></i>
                        </div>
                        <div class="strip-card-body">
                            <h4 class="strip-card-title">NEET</h4>
                            <span class="strip-card-subtitle">Foundation</span>
                            <p class="strip-card-desc">Strong conceptual base for medical aspirants.</p>
                        </div>
                    </div>
                    <!-- Strip Card 3 -->
                    <div class="about-strip-card">
                        <div class="strip-icon-box icon-blue">
                            <i class="fa-solid fa-atom"></i>
                        </div>
                        <div class="strip-card-body">
                            <h4 class="strip-card-title">IIT - JEE</h4>
                            <span class="strip-card-subtitle">Foundation</span>
                            <p class="strip-card-desc">Focused training for engineering dreams.</p>
                        </div>
                    </div>
                    <!-- Strip Card 4 -->
                    <div class="about-strip-card">
                        <div class="strip-icon-box icon-orange">
                            <i class="fa-solid fa-trophy"></i>
                        </div>
                        <div class="strip-card-body">
                            <h4 class="strip-card-title">Competitive</h4>
                            <span class="strip-card-subtitle">Exams</span>
                            <p class="strip-card-desc">Preparation for Olympiads, NTSE, CUET and more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. BUILT ON VALUES: Driven by Academic Excellence
         ========================================================================= -->
    <section class="about-story-section">
        <div class="about-section-container">
            <div class="about-story-grid">
                <!-- Left: Student Visual with Floating Badge -->
                <div class="about-story-visual-wrap">
                    <div class="about-story-frame">
                        <img src="{{ asset($content['story_image'] ?? 'assets/images/about-philosophy-student.jpg') }}" alt="Student of Advaita School of Excellence" class="about-story-img" loading="lazy">
                        <!-- Floating Bottom Badge -->
                        <div class="about-story-floating-badge">
                            <div class="story-badge-trophy">
                                <i class="fa-solid fa-trophy"></i>
                            </div>
                            <div class="story-badge-text">
                                <span class="story-badge-bold">{{ $content['story_badge_title'] ?? 'Best CBSE' }}</span>
                                <span class="story-badge-bold">{{ $content['story_badge_sub'] ?? 'Result Producer' }}</span>
                                <span class="story-badge-sub">{{ $content['story_badge_tag'] ?? 'Year after Year' }}</span>
                            </div>
                            <div class="story-badge-arrow">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Story Content & Stats -->
                <div class="about-story-content">
                    <span class="about-eyebrow">— {{ $content['story_eyebrow'] ?? 'BUILT ON A STRONG FOUNDATION' }} —</span>
                    <h2 class="about-story-title">
                        {{ $content['story_title'] ?? 'Built on Values.' }}<br>
                        Driven by <span class="about-text-orange">{{ $content['story_highlight'] ?? 'Academic Excellence.' }}</span>
                    </h2>
                    
                    <p class="about-story-desc">
                        {{ $content['story_p1'] ?? 'At Advaita School of Excellence, we blend academic rigor, character development, and future-focused learning to help every child grow into a confident, compassionate, and capable individual.' }}
                    </p>
                    
                    <p class="about-story-desc">
                        {{ $content['story_p2'] ?? "Our focus on NEET/IIT foundation and various competitive exams, along with a strong CBSE curriculum, ensures that students are well-prepared for higher education and life's opportunities." }}
                    </p>

                    <!-- Stats Row -->
                    <div class="about-stats-row">
                        <div class="about-stat-item">
                            <div class="stat-icon-square">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="stat-meta">
                                <span class="stat-num">{{ $content['stat_students'] ?? '5000+' }}</span>
                                <span class="stat-lbl">Happy Students</span>
                            </div>
                        </div>

                        <div class="about-stat-item">
                            <div class="stat-icon-square stat-icon-badge">
                                <span class="stat-badge-inner">{{ $content['stat_years'] ?? '25+' }}</span>
                            </div>
                            <div class="stat-meta">
                                <span class="stat-num">{{ $content['stat_years'] ?? '25+' }}</span>
                                <span class="stat-lbl">Years of Academic Legacy</span>
                            </div>
                        </div>

                        <div class="about-stat-item">
                            <div class="stat-icon-square">
                                <i class="fa-regular fa-face-smile"></i>
                            </div>
                            <div class="stat-meta">
                                <span class="stat-num">{{ $content['stat_satisfaction'] ?? '95%' }}</span>
                                <span class="stat-lbl">Parent Satisfaction</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. VISION, MISSION & VALUES (3 Distinct Cards Container)
         ========================================================================= -->
    <section id="vision-mission" class="about-vmv-section">
        <div class="about-section-container">
            <div class="about-vmv-grid">
                <!-- Card 1: Vision -->
                <div class="about-vmv-card">
                    <div class="about-vmv-icon-ring">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <div class="about-vmv-body">
                        <h3 class="about-vmv-title">Our Vision</h3>
                        <p class="about-vmv-desc">{{ $content['vision_text'] ?? 'To nurture confident, curious and responsible global citizens equipped to excel in academics and life.' }}</p>
                    </div>
                </div>

                <!-- Card 2: Mission -->
                <div class="about-vmv-card">
                    <div class="about-vmv-icon-ring">
                        <i class="fa-solid fa-rocket"></i>
                    </div>
                    <div class="about-vmv-body">
                        <h3 class="about-vmv-title">Our Mission</h3>
                        <p class="about-vmv-desc">{{ $content['mission_text'] ?? 'To provide a safe, value-based learning environment with academic excellence, modern facilities and holistic growth opportunities.' }}</p>
                    </div>
                </div>

                <!-- Card 3: Values -->
                <div class="about-vmv-card">
                    <div class="about-vmv-icon-ring">
                        <i class="fa-solid fa-gem"></i>
                    </div>
                    <div class="about-vmv-body">
                        <h3 class="about-vmv-title">Our Values</h3>
                        <div class="about-vmv-values-list">
                            <div class="values-pair"><span>Excellence</span> <span class="v-pipe">|</span> <span>Integrity</span></div>
                            <div class="values-pair"><span>Empathy</span> <span class="v-pipe">|</span> <span>Discipline</span></div>
                            <div class="values-pair"><span>Curiosity</span> <span class="v-pipe">|</span> <span>Lifelong Learning</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. EDUCATION FOR LIFE, NOT JUST EXAMS
         ========================================================================= -->
    <section class="about-philosophy-section">
        <div class="about-section-container">
            <div class="about-philosophy-grid">
                <!-- Left: Content & Interactive Feature Pills -->
                <div class="about-philosophy-content">
                    <span class="about-eyebrow">— {{ $content['philosophy_eyebrow'] ?? 'PREPARING FOR A BRIGHTER TOMORROW' }} —</span>
                    <h2 class="about-philosophy-title">
                        {{ $content['philosophy_title'] ?? 'Education for' }}<br>
                        Life, <span class="about-text-orange">{{ $content['philosophy_highlight'] ?? 'Not Just Exams.' }}</span>
                    </h2>
                    <p class="about-philosophy-desc">
                        {{ $content['philosophy_desc'] ?? 'We integrate CBSE academics with a focused NEET/IIT foundation and training for various competitive exams. Our student-centric approach ensures conceptual clarity, critical thinking, and real-world application — helping students achieve success in academics and beyond.' }}
                    </p>

                    <!-- 6 Feature Pills in Clean 2-Column Grid -->
                    <div class="about-philosophy-pills-grid">
                        <div class="philosophy-pill-item">
                            <span class="pill-badge-icon badge-blue"><i class="fa-solid fa-check"></i></span>
                            <span class="pill-item-text">NEET Foundation</span>
                        </div>
                        <div class="philosophy-pill-item">
                            <span class="pill-badge-icon badge-blue"><i class="fa-solid fa-check"></i></span>
                            <span class="pill-item-text">Integrated IIT-JEE Foundation</span>
                        </div>
                        <div class="philosophy-pill-item">
                            <span class="pill-badge-icon badge-navy"><i class="fa-solid fa-check"></i></span>
                            <span class="pill-item-text">Preparation for Competitive Exams</span>
                        </div>
                        <div class="philosophy-pill-item">
                            <span class="pill-badge-icon badge-orange"><i class="fa-solid fa-circle-dot"></i></span>
                            <span class="pill-item-text">Beyond Text Learning</span>
                        </div>
                        <div class="philosophy-pill-item">
                            <span class="pill-badge-icon badge-orange"><i class="fa-solid fa-circle-dot"></i></span>
                            <span class="pill-item-text">Holistic Student Development</span>
                        </div>
                        <div class="philosophy-pill-item">
                            <span class="pill-badge-icon badge-orange"><i class="fa-solid fa-circle-dot"></i></span>
                            <span class="pill-item-text">Future-Ready Skills</span>
                        </div>
                    </div>

                    <div class="about-philosophy-action">
                        <a href="{{ route('home') }}#academics" class="about-btn-orange">
                            <span>Our Academics</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Right: Classroom Learning Visual with Accent Frame & Floating Badge -->
                <div class="about-philosophy-visual-wrap">
                    <div class="about-philosophy-accent-border"></div>
                    <div class="about-philosophy-frame">
                        <img src="{{ asset($content['philosophy_image'] ?? 'assets/images/about-story-student.jpg') }}" alt="Students in classroom engaged in interactive learning at Advaita School of Excellence" class="about-philosophy-img" loading="lazy">
                    </div>
                    <!-- Floating Classroom Badge -->
                    <div class="about-philosophy-floating-badge">
                        <div class="about-philosophy-badge-icon">
                            <i class="fa-solid fa-lightbulb"></i>
                        </div>
                        <div class="about-philosophy-badge-text">
                            <span class="about-philosophy-badge-title">Interactive Learning</span>
                            <span class="about-philosophy-badge-sub">Conceptual Clarity &amp; Beyond Textbooks</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. WHAT MAKES ADVAITA UNIQUE (6 Cards)
         ========================================================================= -->
    <section class="about-why-choose">
        <div class="about-section-container">
            <div class="about-section-header text-center">
                <span class="about-eyebrow">— WHAT SETS US APART —</span>
                <h2 class="about-section-heading">
                    What Makes <span class="about-text-orange">Advaita</span> Unique.
                </h2>
                <p class="about-section-subhead">
                    We go beyond conventional learning to create a nurturing environment where every child can explore, grow and excel.
                </p>
            </div>

            <div class="about-apart-grid">
                <!-- Card 1 -->
                <div class="about-apart-card">
                    <div class="apart-icon-box apart-orange">
                        <i class="fa-solid fa-certificate"></i>
                    </div>
                    <h4 class="apart-title">Best CBSE<br>Results Producer</h4>
                    <p class="apart-desc">Consistent academic excellence year after year.</p>
                </div>

                <!-- Card 2 -->
                <div class="about-apart-card">
                    <div class="apart-icon-box apart-blue">
                        <i class="fa-solid fa-atom"></i>
                    </div>
                    <h4 class="apart-title">Integrated<br>NEET / IIT Foundation</h4>
                    <p class="apart-desc">Strong base for medical and engineering aspirations.</p>
                </div>

                <!-- Card 3 -->
                <div class="about-apart-card">
                    <div class="apart-icon-box apart-orange">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <h4 class="apart-title">Competitive<br>Exam Support</h4>
                    <p class="apart-desc">Olympiads, NTSE, CUET &amp; other national exams.</p>
                </div>

                <!-- Card 4 -->
                <div class="about-apart-card">
                    <div class="apart-icon-box apart-navy">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <h4 class="apart-title">Experienced<br>Faculty</h4>
                    <p class="apart-desc">Dedicated &amp; student-focused mentors.</p>
                </div>

                <!-- Card 5 -->
                <div class="about-apart-card">
                    <div class="apart-icon-box apart-orange">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <h4 class="apart-title">Modern<br>Infrastructure</h4>
                    <p class="apart-desc">Advanced classrooms, labs, library and sports facilities.</p>
                </div>

                <!-- Card 6 -->
                <div class="about-apart-card">
                    <div class="apart-icon-box apart-blue">
                        <i class="fa-solid fa-shield-heart"></i>
                    </div>
                    <h4 class="apart-title">Safe &amp; Supportive<br>Environment</h4>
                    <p class="apart-desc">A campus where every child feels valued and secure.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. CAMPUS SHOWCASE: A Space to Learn, Explore and Excel
         ========================================================================= -->
    <section class="about-campus-showcase">
        <div class="about-section-container">
            <div class="about-campus-grid">
                <!-- Left: Content -->
                <div class="about-campus-content">
                    <span class="about-campus-eyebrow">— {{ $content['campus_eyebrow'] ?? 'A SPACE TO GROW' }} —</span>
                    <h2 class="about-campus-title">
                        {{ $content['campus_title'] ?? 'A Space to Learn,' }}<br>
                        <span class="about-text-orange">{{ $content['campus_highlight'] ?? 'Explore and Excel.' }}</span>
                    </h2>
                    <p class="about-campus-desc">
                        {{ $content['campus_desc'] ?? 'Our modern campus is designed to inspire curiosity, encourage collaboration, and provide the best learning experience. From spacious classrooms to advanced labs and vibrant activity spaces, every corner of Advaita nurtures growth and opportunity.' }}
                    </p>
                    <a href="{{ route('home') }}#facilities" class="about-btn-orange">
                        <span>Explore Our Campus</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Right: Visual with Sky-Blue Offset Accent Frame & Floating Card -->
                <div class="about-campus-visual-wrap">
                    <div class="about-campus-accent-border"></div>
                    <div class="about-campus-frame">
                        <img src="{{ asset($content['campus_image'] ?? 'assets/images/about-campus-courtyard.jpg') }}" alt="Advaita School Modern Campus Courtyard" class="about-campus-img" loading="lazy">
                    </div>
                    <!-- Floating Campus Badge -->
                    <div class="about-floating-campus-card">
                        <img src="{{ asset($content['campus_image'] ?? 'assets/images/about-campus-courtyard.jpg') }}" alt="Modern Campus" class="campus-thumb">
                        <div class="campus-thumb-text">
                            <strong>Modern Campus</strong>
                            <span>for Holistic Growth</span>
                        </div>
                        <a href="{{ route('home') }}#facilities" class="campus-thumb-arrow" aria-label="Explore Campus Facilities">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         7. ADMISSION BANNER SECTION
         ========================================================================= -->
    <section class="admission-banner">
        <!-- Background Shapes -->
        <div class="shape-one"></div>
        <div class="shape-two"></div>
        <div class="shape-three"></div>

        <!-- Dots -->
        <div class="dot-pattern"></div>

        <!-- Content -->
        <div class="banner-content">
            <div class="copy">
                <!-- Eyebrow -->
                <div class="eyebrow">
                    {{ $content['cta_eyebrow'] ?? 'BE A PART OF ADVAITA' }}
                </div>

                <!-- Heading -->
                <h2 class="headline">
                    {{ $content['cta_headline'] ?? "Together, let's build brighter tomorrows." }}
                </h2>

                <!-- Description -->
                <p class="subtext">
                    {{ $content['cta_subtext'] ?? 'Admissions are open for CBSE, NEET/IIT Foundation & Competitive Exam Programmes.' }}
                </p>

                <!-- Buttons -->
                <div class="buttons">
                    <!-- Enrol Button -->
                    <a href="{{ route('contact') }}" class="btn-enrol">
                        <span>Enquire Now</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <!-- School Visit -->
                    <a href="{{ route('contact') }}" class="btn-visit">
                        <i class="fa-regular fa-calendar-days"></i>
                        <span>Schedule a Campus Visit</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Students Image -->
        <div class="students">
            <img src="{{ asset($content['cta_image'] ?? 'assets/images/about-cta-students-trio.png') }}" alt="Advaita Students" loading="lazy">
        </div>
    </section>

</main>
@endsection
