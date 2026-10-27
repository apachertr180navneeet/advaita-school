@extends('layouts.app')

@section('title', "Primary School (Classes 1 to 5) - Advaita School of Excellence, Parbhani | Abacus & Olympiads")
@section('meta_description', "Advaita Primary Wing (Classes 1 to 5) combines CBSE academics with specialized Abacus mental arithmetic, Olympiad mentorship, STEAM activities, and experiential learning.")

@section('content')
<main id="main" class="main-content-wrapper acad-page-wrapper primary-page">

    <!-- =========================================================================
         1. HERO SECTION: Primary School Theme
         ========================================================================= -->
    <section class="admission-hero-section primary-hero">
        <div class="admission-hero-canvas">
            <!-- Hero Visual -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="{{ asset($content['hero_image'] ?? 'assets/images/gallery/gallery-classroom-learning.jpg') }}" alt="Primary School Students at Advaita" class="admission-hero-bg-img" width="1024" height="682">
            </div>

            <!-- SVG Wave Overlay -->
            <div class="admission-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H560C600 130 530 280 640 440H0V0Z" fill="#EEF6FC" fill-opacity="0.97"/>
                    <path d="M540 0C580 140 510 280 620 440H590C490 280 550 140 510 0H540Z" fill="#F37021" fill-opacity="0.12"/>
                </svg>
            </div>

            <!-- Handwritten Script Tag -->
            <div class="admission-hero-script-tag" aria-hidden="true">
                <span class="script-title">Foundations<br>for Genius</span>
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
                        <a href="{{ route('academics') }}">Programmes</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Primary (Classes 1–5)</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">
                        <i class="fa-solid fa-book-open-reader text-orange me-1"></i>
                        {{ $content['hero_badge'] ?? 'PRIMARY WING (CLASSES 1 TO 5)' }}
                    </div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        {{ $content['hero_title'] ?? 'Building Strong Fundamentals in' }}
                        <span class="highlight-serif highlight-orange">{{ $content['hero_highlight'] ?? 'Young Inquiring Minds.' }}</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        {{ $content['hero_desc'] ?? 'Empowering primary students with deep conceptual clarity, linguistic confidence, and competitive exam readiness through joyful learning.' }}
                    </p>

                    <div class="d-flex align-items-center gap-12 mt-20 flex-wrap">
                        <a href="{{ route('online-registration') }}" class="btn-primary-pill">
                            <span>Apply for Primary Wing</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#abacus-section" class="btn-outline-pill">
                            <i class="fa-solid fa-calculator"></i>
                            <span>Abacus &amp; Olympiads</span>
                        </a>
                        <a href="#learning-activities" class="admission-btn-visit" style="background: rgba(8, 59, 122, 0.08); border-color: rgba(8, 59, 122, 0.2); color: #083B7A;">
                            <i class="fa-solid fa-flask"></i>
                            <span>Experiential Learning</span>
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
                <a href="{{ route('academics.pre-primary') }}" class="acad-pill-btn">
                    <i class="fa-solid fa-shapes"></i>
                    <span>Pre-Primary (Nursery–UKG)</span>
                </a>
                <a href="{{ route('academics.primary') }}" class="acad-pill-btn active">
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
             PRIMARY WING CREDENTIALS & TRUST BAR
             ========================================================================= -->
        <div class="acad-affiliation-bar">
            <div class="acad-affil-left">
                <div class="acad-affil-badge">
                    <i class="fa-solid fa-book-open-reader"></i>
                </div>
                <div class="acad-affil-text">
                    <strong>Primary School (Classes 1 to 5) — CBSE Affiliated</strong>
                    <span>Affiliated with CBSE New Delhi (Affiliation No: 1130920) · Foundational &amp; Preparatory Stage (NEP 2020)</span>
                </div>
            </div>

            <div class="acad-affil-pills">
                <div class="acad-affil-pill">
                    <i class="fa-solid fa-brain text-orange"></i>
                    <span>Weekly Integrated Abacus</span>
                </div>
                <div class="acad-affil-pill">
                    <i class="fa-solid fa-award text-teal"></i>
                    <span>SOF Olympiads from Class 1</span>
                </div>
                <div class="acad-affil-pill">
                    <i class="fa-solid fa-laptop-code text-blue"></i>
                    <span>Junior Coding &amp; Science Labs</span>
                </div>
            </div>
        </div>

        <!-- =========================================================================
             2. DEDICATED ABACUS & MENTAL ARITHMETIC SECTION (HERO FEATURE 1)
             ========================================================================= -->
        <section class="special-track-section abacus-track" id="abacus-section">
            <div class="special-track-card">
                <div class="special-track-grid">
                    <div class="special-track-visual">
                        <img src="{{ asset($content['abacus_image'] ?? 'assets/images/gallery/gallery-math-science-lab.jpg') }}" alt="Abacus and Mental Math at Advaita" loading="lazy">
                        <div class="track-badge-floating">
                            <i class="fa-solid fa-brain"></i>
                            <span>Brain Development Track</span>
                        </div>
                    </div>

                    <div class="special-track-content">
                        <span class="track-eyebrow">
                            <i class="fa-solid fa-bolt text-orange"></i>
                            INTEGRATED IN PRIMARY CURRICULUM
                        </span>
                        <h2 class="track-heading">
                            {{ $content['abacus_title'] ?? 'Abacus & Mental Arithmetic Programme' }}
                        </h2>
                        <p class="track-desc">
                            {{ $content['abacus_desc'] ?? 'Integrated into the weekly curriculum to stimulate both brain hemispheres, enhance concentration, and build lightning-fast numerical calculation skills.' }}
                        </p>

                        <div class="iit-features-grid">
                            <div class="iit-feat-card">
                                <div class="feat-icon-badge badge-orange"><i class="fa-solid fa-bolt"></i></div>
                                <h4>Lightning Speed</h4>
                                <p>Calculations faster than calculators without reliance on pen or paper.</p>
                            </div>
                            <div class="iit-feat-card">
                                <div class="feat-icon-badge badge-blue"><i class="fa-solid fa-eye"></i></div>
                                <h4>Photographic Memory</h4>
                                <p>Enhances visual recall, active listening, and extended attention span.</p>
                            </div>
                            <div class="iit-feat-card">
                                <div class="feat-icon-badge badge-emerald"><i class="fa-solid fa-trophy"></i></div>
                                <h4>State &amp; National Podiums</h4>
                                <p>Advaita students regularly win prestigious championship trophies.</p>
                            </div>
                            <div class="iit-feat-card">
                                <div class="feat-icon-badge badge-purple"><i class="fa-solid fa-circle-check"></i></div>
                                <h4>Zero Math Anxiety</h4>
                                <p>Transforms numbers into an intuitive, enjoyable mental game.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-12 mt-20 flex-wrap">
                            <a href="{{ route('results', ['category' => 'abacus']) }}" class="btn-track-results">
                                <i class="fa-solid fa-trophy"></i>
                                <span>View Abacus Competition Results</span>
                            </a>
                            <a href="{{ route('online-registration') }}" class="btn-primary-pill">
                                <span>Enroll in Primary Wing</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             3. DEDICATED OLYMPIADS & COMPETITIVE EXAMINATIONS (HERO FEATURE 2)
             ========================================================================= -->
        <section class="special-track-section olympiad-track" id="olympiad-section">
            <div class="special-track-card reverse">
                <div class="special-track-grid">
                    <div class="special-track-content">
                        <span class="track-eyebrow">
                            <i class="fa-solid fa-award text-orange"></i>
                            COMPETITIVE EXCELLENCE FROM CLASS 1
                        </span>
                        <h2 class="track-heading">
                            {{ $content['olympiad_title'] ?? 'National & International Olympiad Mentorship' }}
                        </h2>
                        <p class="track-desc">
                            {{ $content['olympiad_desc'] ?? 'Structured training for SOF NSO, IMO, NCO, and IEO competitions with regular mock tests, concept worksheets, and state/national awards.' }}
                        </p>

                        <div class="iit-features-grid">
                            <div class="iit-feat-card">
                                <div class="feat-icon-badge badge-emerald"><i class="fa-solid fa-flask"></i></div>
                                <h4>SOF NSO (Science)</h4>
                                <p>National Science Olympiad with experiential scientific concepts and mock tests.</p>
                            </div>
                            <div class="iit-feat-card">
                                <div class="feat-icon-badge badge-orange"><i class="fa-solid fa-calculator"></i></div>
                                <h4>SOF IMO (Mathematics)</h4>
                                <p>International Mathematics Olympiad focusing on spatial logic &amp; problem solving.</p>
                            </div>
                            <div class="iit-feat-card">
                                <div class="feat-icon-badge badge-blue"><i class="fa-solid fa-laptop-code"></i></div>
                                <h4>SOF NCO (Cyber)</h4>
                                <p>National Cyber Olympiad covering algorithmic logic and digital skills.</p>
                            </div>
                            <div class="iit-feat-card">
                                <div class="feat-icon-badge badge-purple"><i class="fa-solid fa-book-open"></i></div>
                                <h4>SOF IEO (English)</h4>
                                <p>International English Olympiad building vocabulary and grammatical fluency.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-12 mt-20 flex-wrap">
                            <a href="{{ route('results', ['category' => 'olympiad']) }}" class="btn-track-results">
                                <i class="fa-solid fa-award"></i>
                                <span>Explore Olympiad Achievers</span>
                            </a>
                            <a href="{{ route('admission-guidelines') }}" class="btn-primary-pill">
                                <span>Admission Guidelines</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="special-track-visual">
                        <img src="{{ asset($content['activity_image'] ?? 'assets/images/gallery/gallery-foundation-achievers.jpg') }}" alt="Olympiad Achievers at Advaita" loading="lazy">
                        <div class="track-badge-floating right">
                            <i class="fa-solid fa-medal"></i>
                            <span>Gold &amp; Merit Medals</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             4. CBSE PRIMARY CURRICULUM (CLASSES 1 TO 5)
             ========================================================================= -->
        <section class="acad-section" id="curriculum">
            <div class="acad-section-header">
                <span class="section-header-pill">
                    <i class="fa-solid fa-book-open text-orange me-1"></i>
                    CBSE Primary Curriculum
                </span>
                <h2 class="acad-section-title">
                    Subjects &amp; <span class="highlight-serif highlight-orange">Foundational Learning.</span>
                </h2>
                <p class="acad-section-desc">
                    Our primary curriculum is designed in alignment with CBSE benchmarks and NEP 2020 recommendations to foster critical thinking, language articulation, and scientific curiosity.
                </p>
            </div>

            <div class="subjects-grid">
                <!-- Subject 1 -->
                <div class="subject-card">
                    <span class="subject-code-tag">Grades 1–5 Core</span>
                    <div class="subject-icon icon-blue"><i class="fa-solid fa-spell-check"></i></div>
                    <h3>English Language &amp; Literacy</h3>
                    <p>Phonics mastery, vocabulary expansion, reading fluency, and creative writing circles.</p>
                    <div class="subject-focus-pills">
                        <span class="pill-tag">Phonics Mastery</span>
                        <span class="pill-tag">Reading Circles</span>
                        <span class="pill-tag">Creative Writing</span>
                    </div>
                </div>

                <!-- Subject 2 -->
                <div class="subject-card">
                    <span class="subject-code-tag">Speed &amp; Logic</span>
                    <div class="subject-icon icon-orange"><i class="fa-solid fa-calculator"></i></div>
                    <h3>Mathematics &amp; Mental Math</h3>
                    <p>Conceptual arithmetic, geometric shapes, spatial logic, and speed calculation drills.</p>
                    <div class="subject-focus-pills">
                        <span class="pill-tag">Mental Math</span>
                        <span class="pill-tag">Geometry Basics</span>
                        <span class="pill-tag">Speed Calculation</span>
                    </div>
                </div>

                <!-- Subject 3 -->
                <div class="subject-card">
                    <span class="subject-code-tag">Experiential Eco</span>
                    <div class="subject-icon icon-teal"><i class="fa-solid fa-seedling"></i></div>
                    <h3>Environmental Studies (EVS)</h3>
                    <p>Understanding nature, social environments, basic science concepts, and green ecology.</p>
                    <div class="subject-focus-pills">
                        <span class="pill-tag">Nature Study</span>
                        <span class="pill-tag">Community &amp; Civic</span>
                        <span class="pill-tag">Junior Science</span>
                    </div>
                </div>

                <!-- Subject 4 -->
                <div class="subject-card">
                    <span class="subject-code-tag">Hindi &amp; Marathi</span>
                    <div class="subject-icon icon-purple"><i class="fa-solid fa-language"></i></div>
                    <h3>Regional &amp; National Languages</h3>
                    <p>Hindi and Marathi language instruction for cultural grounding and multilingual articulation.</p>
                    <div class="subject-focus-pills">
                        <span class="pill-tag">Hindi Grammar</span>
                        <span class="pill-tag">Marathi Vyakaran</span>
                        <span class="pill-tag">Bilingual Storytelling</span>
                    </div>
                </div>

                <!-- Subject 5 -->
                <div class="subject-card">
                    <span class="subject-code-tag">Coding &amp; STEM</span>
                    <div class="subject-icon icon-indigo"><i class="fa-solid fa-laptop-code"></i></div>
                    <h3>Computer &amp; Digital Skills</h3>
                    <p>Early coding logic, typing skills, digital presentation tools, and internet safety basics.</p>
                    <div class="subject-focus-pills">
                        <span class="pill-tag">Blockly Coding</span>
                        <span class="pill-tag">Touch Typing</span>
                        <span class="pill-tag">Safe Browsing</span>
                    </div>
                </div>

                <!-- Subject 6 -->
                <div class="subject-card">
                    <span class="subject-code-tag">Holistic Wellness</span>
                    <div class="subject-icon icon-pink"><i class="fa-solid fa-palette"></i></div>
                    <h3>Art, Music &amp; Physical Activity</h3>
                    <p>Visual arts, theatre, rhythm drills, yoga, and team games for physical well-being.</p>
                    <div class="subject-focus-pills">
                        <span class="pill-tag">Visual Arts</span>
                        <span class="pill-tag">Yoga &amp; Fitness</span>
                        <span class="pill-tag">Team Sports</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             5. LEARNING ACTIVITIES & EXPERIENTIAL INFRASTRUCTURE SHOWCASE
             ========================================================================= -->
        <section class="acad-section" id="learning-activities">
            <div class="acad-section-header">
                <span class="section-header-pill">
                    <i class="fa-solid fa-flask-vial text-orange me-1"></i>
                    Experiential Infrastructure
                </span>
                <h2 class="acad-section-title">
                    Learning Activities That <span class="highlight-serif highlight-orange">Inspire Discovery.</span>
                </h2>
                <p class="acad-section-desc">
                    Inside our classrooms, science lab, computer hub, and library, learning comes to life through hands-on projects and peer experiments.
                </p>
            </div>

            <div class="secondary-labs-grid">
                <div class="sec-lab-card">
                    <div class="sec-lab-img-wrap">
                        <img src="{{ asset('assets/images/gallery/gallery-math-science-lab.jpg') }}" alt="Science Experiments at Advaita" loading="lazy">
                        <span class="sec-lab-badge">Hands-On Science</span>
                    </div>
                    <div class="sec-lab-body">
                        <h3>Junior Science Experiments</h3>
                        <p>Magnets, optical prisms, plant germination kits, and microscope observations for experiential science learning.</p>
                        <ul class="sec-lab-features">
                            <li><i class="fa-solid fa-check"></i> Guided observation &amp; natural inquiry</li>
                            <li><i class="fa-solid fa-check"></i> Safe optical prisms &amp; magnet exploration</li>
                            <li><i class="fa-solid fa-check"></i> Strict child-friendly safety protocols</li>
                        </ul>
                    </div>
                </div>

                <div class="sec-lab-card">
                    <div class="sec-lab-img-wrap">
                        <img src="{{ asset('assets/images/gallery/computer-lab.png') }}" alt="Computer Lab at Advaita" loading="lazy">
                        <span class="sec-lab-badge">Digital Skills</span>
                    </div>
                    <div class="sec-lab-body">
                        <h3>Smart Digital Lab</h3>
                        <p>Individual computer workstations equipped with curated educational software, typing drills, and visual block coding.</p>
                        <ul class="sec-lab-features">
                            <li><i class="fa-solid fa-check"></i> 1:1 student-to-PC ratio during lab hours</li>
                            <li><i class="fa-solid fa-check"></i> Age-appropriate visual coding games</li>
                            <li><i class="fa-solid fa-check"></i> Monitored cyber-safe environment</li>
                        </ul>
                    </div>
                </div>

                <div class="sec-lab-card">
                    <div class="sec-lab-img-wrap">
                        <img src="{{ asset('assets/images/gallery/gallery-sports-field-agility.jpg') }}" alt="Sports and Athletics at Advaita" loading="lazy">
                        <span class="sec-lab-badge">Physical Growth</span>
                    </div>
                    <div class="sec-lab-body">
                        <h3>Athletics &amp; Field Games</h3>
                        <p>Football, basketball, cricket nets, agility obstacle courses, and gymnastics tailored for primary motor skill development.</p>
                        <ul class="sec-lab-features">
                            <li><i class="fa-solid fa-check"></i> Specialized physical education instructors</li>
                            <li><i class="fa-solid fa-check"></i> Multi-sport courts &amp; grass playing field</li>
                            <li><i class="fa-solid fa-check"></i> Morning fitness &amp; yoga routines</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             6. NEP 2020 FOUNDATIONAL PILLARS
             ========================================================================= -->
        <section class="acad-section" id="pedagogy">
            <div class="acad-section-header">
                <span class="section-header-pill">
                    <i class="fa-solid fa-lightbulb text-orange me-1"></i>
                    NEP 2020 Framework
                </span>
                <h2 class="acad-section-title">
                    Holistic Pillars for <span class="highlight-serif highlight-orange">Primary Success.</span>
                </h2>
                <p class="acad-section-desc">
                    We nurture curious minds with balanced attention to analytical thought, multilingual confidence, and core moral character.
                </p>
            </div>

            <div class="instruments-grid">
                <div class="instrument-item">
                    <div class="ins-icon" style="background: #fff7ed; color: #ea580c;">
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <div class="instrument-meta">Foundational Numeracy</div>
                    <h4>Dual-Hemisphere Math</h4>
                    <p>Building intuitive mental calculation and problem-solving without rote memorization anxiety.</p>
                </div>

                <div class="instrument-item">
                    <div class="ins-icon" style="background: #eff6ff; color: #0284c7;">
                        <i class="fa-solid fa-comments"></i>
                    </div>
                    <div class="instrument-meta">Linguistic Mastery</div>
                    <h4>Trilingual Articulation</h4>
                    <p>Fluency in English alongside Marathi and Hindi through storytelling, debates, and reading circles.</p>
                </div>

                <div class="instrument-item">
                    <div class="ins-icon" style="background: #f0fdf4; color: #16a34a;">
                        <i class="fa-solid fa-flask"></i>
                    </div>
                    <div class="instrument-meta">Inquiry-Based</div>
                    <h4>Experiential Discovery</h4>
                    <p>Encouraging students to explore, experiment, and observe scientific phenomena directly.</p>
                </div>

                <div class="instrument-item">
                    <div class="ins-icon" style="background: #faf5ff; color: #9333ea;">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <div class="instrument-meta">Value Education</div>
                    <h4>Character &amp; Leadership</h4>
                    <p>Daily morning assemblies, peer collaboration, and environmental stewardship projects.</p>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             7. ADMISSION CTA & HELPLINE BANNER
             ========================================================================= -->
        <section class="secondary-helpline-card" id="contact-admissions">
            <div class="sec-helpline-content">
                <span class="sec-helpline-eyebrow">
                    <i class="fa-solid fa-sparkles"></i> ADMISSIONS OPEN FOR CLASSES 1 TO 5
                </span>
                <h2>Enroll Your Child for Primary Excellence.</h2>
                <p>Give your child the lifelong advantages of conceptual clarity, Abacus mental speed, and competitive confidence with CBSE excellence.</p>

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
                        <span>Parbhani Campus</span>
                    </span>
                </div>
            </div>

            <div class="sec-helpline-actions">
                <a href="{{ route('online-registration') }}" class="btn-sec-cta-primary">
                    <span>Register for Primary Wing</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="{{ route('fee-structure') }}" class="btn-sec-cta-fee">
                    <i class="fa-solid fa-indian-rupee-sign"></i>
                    <span>View Primary Fee Structure</span>
                </a>
                <a href="{{ route('contact') }}" class="btn-sec-cta-call">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Contact Campus Office</span>
                </a>
            </div>
        </section>

    </div><!-- /.acad-container -->

</main>
@endsection
