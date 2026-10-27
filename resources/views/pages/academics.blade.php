@extends('layouts.app')

@section('title', "Academics & Programmes - Advaita School of Excellence, Parbhani | Holistic CBSE Learning")
@section('meta_description', "Explore the CBSE academic curriculum, pedagogical approach, STEAM education, language labs, and developmental stages from Kindergarten to Class 10 at Advaita School of Excellence.")

@section('content')
<main id="main" class="main-content-wrapper acad-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Breadcrumb + Title + Visual with 3 Students & Script Tag
         ========================================================================= -->
    <section class="admission-hero-section">
        <div class="admission-hero-canvas">
            <!-- Hero Students Visual -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="{{ asset($content['hero_image'] ?? 'assets/images/about-cta-students-clean.png') }}" alt="Advaita Students" class="admission-hero-bg-img" width="1024" height="682">
            </div>

            <!-- SVG Wave Overlay for Smooth Translucent Backdrop -->
            <div class="admission-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H540C570 120 520 280 620 440H0V0Z" fill="#EEF6FC" fill-opacity="0.96"/>
                    <path d="M520 0C550 140 500 280 600 440H580C480 280 530 140 500 0H520Z" fill="#083B7A" fill-opacity="0.12"/>
                </svg>
            </div>

            <!-- Floating Handwritten Script Tag at Top Right -->
            <div class="admission-hero-script-tag" aria-hidden="true">
                <span class="script-title">More<br>Than A School</span>
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
                        <span class="active">Academics</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">
                        <i class="fa-solid fa-graduation-cap text-orange me-1"></i>
                        {{ $content['hero_badge'] ?? 'OUR ACADEMICS' }}
                    </div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        A Strong Foundation for a <span class="highlight-serif highlight-orange">Brighter Tomorrow.</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        {{ $content['hero_desc'] ?? 'A thoughtfully designed curriculum that nurtures curiosity, builds strong concepts and prepares students for lifelong success.' }}
                    </p>

                    <!-- Quick Links to Academic Wings -->
                    <div class="d-flex align-items-center gap-10 mt-20 flex-wrap">
                        <a href="{{ route('academics.pre-primary') }}" class="btn-primary-pill">
                            <i class="fa-solid fa-shapes"></i>
                            <span>Pre-Primary Wing</span>
                        </a>
                        <a href="{{ route('academics.primary') }}" class="btn-outline-pill">
                            <i class="fa-solid fa-calculator"></i>
                            <span>Primary (Classes 1–5)</span>
                        </a>
                        <a href="{{ route('academics.secondary') }}" class="btn-outline-pill">
                            <i class="fa-solid fa-atom"></i>
                            <span>Secondary &amp; IIT Foundation</span>
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
                <a href="{{ route('academics') }}" class="acad-pill-btn active">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span>Overview</span>
                </a>
                <a href="{{ route('academics.pre-primary') }}" class="acad-pill-btn">
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
             2. CBSE BOARD AFFILIATION & TRUST CREDENTIALS BAR
             ========================================================================= -->
        <div class="acad-affiliation-bar">
            <div class="acad-affil-left">
                <div class="acad-affil-badge">
                    <i class="fa-solid fa-building-columns"></i>
                </div>
                <div class="acad-affil-text">
                    <strong>CBSE Affiliated Senior Secondary Institution</strong>
                    <span>{{ $content['affiliation_line'] ?? 'Affiliated with the Central Board of Secondary Education (CBSE), New Delhi. Affiliation No: 1130920.' }}</span>
                </div>
            </div>

            <div class="acad-affil-pills">
                <div class="acad-affil-pill">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>100% Board Passing Track Record</span>
                </div>
                <div class="acad-affil-pill">
                    <i class="fa-solid fa-atom"></i>
                    <span>NEET / IIT Foundation from Grade 6</span>
                </div>
                <div class="acad-affil-pill">
                    <i class="fa-solid fa-layer-group"></i>
                    <span>NEP 2020 Pedagogical Framework</span>
                </div>
            </div>
        </div>

        <!-- =========================================================================
             3. ACADEMIC STAGES SECTION (Linked to Dedicated Wings)
             ========================================================================= -->
        <section class="acad-section" id="academic-stages">
            <div class="acad-section-header">
                <span class="section-header-pill">
                    <i class="fa-solid fa-layer-group text-orange me-1"></i>
                    Curricular Progression
                </span>
                <h2 class="acad-section-title">
                    A Well-Structured Journey from <span class="highlight-serif highlight-orange">Foundation to Future.</span>
                </h2>
                <p class="acad-section-desc">
                    Explore our dedicated wings from Nursery to Class 10 with age-appropriate pedagogy, specialized tracks, and state-of-the-art facilities.
                </p>
            </div>

            <div class="acad-stages-grid">
                <!-- Stage 1: Pre-Primary -->
                <a href="{{ route('academics.pre-primary') }}" class="acad-stage-card">
                    <span class="stage-badge-top orange">Ages 3–6 · Early Years</span>
                    <div class="acad-stage-header">
                        <div class="acad-stage-icon orange" aria-hidden="true">
                            <i class="fa-solid fa-shapes"></i>
                        </div>
                        <div class="acad-stage-title-wrap">
                            <h3 class="acad-stage-title">Foundational Stage</h3>
                            <span class="acad-stage-classes">Nursery – LKG – UKG</span>
                        </div>
                    </div>
                    <p class="acad-stage-desc">Play-based early learning, multi-sensory discovery, jolly phonics, and our upcoming state-of-the-art new school building.</p>
                    <ul class="stage-highlights-list">
                        <li><i class="fa-solid fa-check"></i> Play-way experiential pedagogy</li>
                        <li><i class="fa-solid fa-check"></i> Tactile blocks, sand &amp; music stations</li>
                        <li><i class="fa-solid fa-check"></i> 100% child-safe CCTV campus</li>
                    </ul>
                    <div class="stage-card-footer-btn">
                        <span>Explore Pre-Primary Wing</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>

                <!-- Stage 2: Preparatory Stage (Class 1-2) -->
                <a href="{{ route('academics.primary') }}" class="acad-stage-card">
                    <span class="stage-badge-top blue">Ages 6–8 · Fundamentals</span>
                    <div class="acad-stage-header">
                        <div class="acad-stage-icon blue" aria-hidden="true">
                            <i class="fa-solid fa-pencil"></i>
                        </div>
                        <div class="acad-stage-title-wrap">
                            <h3 class="acad-stage-title">Preparatory Stage</h3>
                            <span class="acad-stage-classes">Class 1 – 2</span>
                        </div>
                    </div>
                    <p class="acad-stage-desc">Building strong bilingual literacy, numeracy, mental arithmetic with Abacus, and early Olympiad conceptual drills.</p>
                    <ul class="stage-highlights-list">
                        <li><i class="fa-solid fa-check"></i> Introductory Abacus &amp; Vedic Math</li>
                        <li><i class="fa-solid fa-check"></i> Reading clubs &amp; expressive communication</li>
                        <li><i class="fa-solid fa-check"></i> Joyful STEAM experiment corners</li>
                    </ul>
                    <div class="stage-card-footer-btn">
                        <span>Explore Primary School Wing</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>

                <!-- Stage 3: Middle Stage (Class 3-5) -->
                <a href="{{ route('academics.primary') }}#abacus-section" class="acad-stage-card">
                    <span class="stage-badge-top teal">Ages 8–11 · Analytical</span>
                    <div class="acad-stage-header">
                        <div class="acad-stage-icon teal" aria-hidden="true">
                            <i class="fa-solid fa-calculator"></i>
                        </div>
                        <div class="acad-stage-title-wrap">
                            <h3 class="acad-stage-title">Middle Primary Stage</h3>
                            <span class="acad-stage-classes">Class 3 – 5</span>
                        </div>
                    </div>
                    <p class="acad-stage-desc">Subject depth, multi-digit Abacus speed calculation, and national SOF Olympiad competitive exam mastery.</p>
                    <ul class="stage-highlights-list">
                        <li><i class="fa-solid fa-check"></i> State &amp; National Abacus Trophies</li>
                        <li><i class="fa-solid fa-check"></i> NSO, IMO &amp; IEO Olympiad mentoring</li>
                        <li><i class="fa-solid fa-check"></i> Robotics &amp; computer coding foundation</li>
                    </ul>
                    <div class="stage-card-footer-btn">
                        <span>Explore Abacus &amp; Olympiads</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>

                <!-- Stage 4: Secondary Stage (Class 6-10) -->
                <a href="{{ route('academics.secondary') }}" class="acad-stage-card">
                    <span class="stage-badge-top purple">Ages 11–16 · Career Track</span>
                    <div class="acad-stage-header">
                        <div class="acad-stage-icon purple" aria-hidden="true">
                            <i class="fa-solid fa-atom"></i>
                        </div>
                        <div class="acad-stage-title-wrap">
                            <h3 class="acad-stage-title">Secondary Stage</h3>
                            <span class="acad-stage-classes">Class 6 – 10</span>
                        </div>
                    </div>
                    <p class="acad-stage-desc">Consistent 100% CBSE Class 10 Board results paired with integrated NEET/IIT Foundation mentoring and high-tech labs.</p>
                    <ul class="stage-highlights-list">
                        <li><i class="fa-solid fa-check"></i> 100% Board Pass Rate (District 1st Topper)</li>
                        <li><i class="fa-solid fa-check"></i> Integrated JEE / NEET Milestone series</li>
                        <li><i class="fa-solid fa-check"></i> Composite Science &amp; Robotics Labs</li>
                    </ul>
                    <div class="stage-card-footer-btn">
                        <span>Explore Secondary &amp; IIT Track</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </section>

        <!-- =========================================================================
             4. OUR CURRICULUM SECTION (4 Pillars)
             ========================================================================= -->
        <section class="acad-section" id="our-curriculum">
            <div class="acad-section-header">
                <span class="section-header-pill">
                    <i class="fa-solid fa-book-open text-orange me-1"></i>
                    Pedagogical Philosophy
                </span>
                <h2 class="acad-section-title">
                    Holistic Learning for <span class="highlight-serif highlight-orange">Every Stage.</span>
                </h2>
                <p class="acad-section-desc">
                    Our academic programme is aligned with the latest CBSE standards and focuses on conceptual clarity, critical thinking and real-world application.
                </p>
            </div>

            <div class="acad-curriculum-grid">
                <!-- Card 1 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon orange" aria-hidden="true">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="acad-curr-title">Concept-Based Learning</h3>
                    <p class="acad-curr-desc">Deep subject mastery that eliminates rote memorization, building conceptual problem-solving clarity from early years.</p>
                    <div class="curr-tags-wrap">
                        <span class="curr-tag">Conceptual Clarity</span>
                        <span class="curr-tag">Critical Thinking</span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon blue" aria-hidden="true">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <h3 class="acad-curr-title">Interdisciplinary Approach</h3>
                    <p class="acad-curr-desc">Connecting scientific principles, mathematical logic, and humanities with real-world everyday contexts.</p>
                    <div class="curr-tags-wrap">
                        <span class="curr-tag">Integrated STEAM</span>
                        <span class="curr-tag">Real-World Logic</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon teal" aria-hidden="true">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3 class="acad-curr-title">Experiential Learning</h3>
                    <p class="acad-curr-desc">Learning through hands-on laboratory experiments, project exhibitions, robotics workshops, and field observation.</p>
                    <div class="curr-tags-wrap">
                        <span class="curr-tag">Practical Science</span>
                        <span class="curr-tag">Project Workshops</span>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon pink" aria-hidden="true">
                        <i class="fa-solid fa-user-check"></i>
                    </div>
                    <h3 class="acad-curr-title">Continuous Assessment</h3>
                    <p class="acad-curr-desc">Diagnostic milestone testing and ongoing feedback to nurture and support every child's individual learning pace.</p>
                    <div class="curr-tags-wrap">
                        <span class="curr-tag">NEP 2020 Feedback</span>
                        <span class="curr-tag">OMR Milestone Drills</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             5. LEARNING STREAMS SECTION (Boy Visual Left + 6 Cards Right)
             ========================================================================= -->
        <section class="acad-section" id="learning-streams">
            <div class="acad-section-header">
                <span class="section-header-pill">
                    <i class="fa-solid fa-compass-drafting text-orange me-1"></i>
                    Comprehensive Streams
                </span>
                <h2 class="acad-section-title">
                    A Balanced Curriculum for <span class="highlight-serif highlight-orange">All-Round Growth.</span>
                </h2>
                <p class="acad-section-desc">
                    We offer a comprehensive curriculum with a focus on academics, creativity, values and real-world skills.
                </p>
            </div>

            <div class="acad-streams-layout">
                <!-- Left Visual with Aura -->
                <div class="acad-streams-visual">
                    <div class="acad-streams-aura" aria-hidden="true"></div>
                    <div class="acad-streams-img-box">
                        <img src="{{ asset($content['stream_image'] ?? 'assets/images/about-philosophy-student.jpg') }}" alt="Student studying at Advaita School of Excellence">
                    </div>
                </div>

                <!-- Right 6 Stream Cards -->
                <div class="acad-streams-grid">
                    <!-- Languages -->
                    <div class="acad-stream-card">
                        <div class="acad-stream-icon orange" aria-hidden="true">
                            <i class="fa-solid fa-book-bookmark"></i>
                        </div>
                        <div class="acad-stream-body">
                            <h3 class="acad-stream-title">Languages &amp; Literature</h3>
                            <p class="acad-stream-desc">English fluency, Hindi, Sanskrit, and Marathi language comprehension and public speaking.</p>
                        </div>
                    </div>

                    <!-- Mathematics -->
                    <div class="acad-stream-card">
                        <div class="acad-stream-icon blue" aria-hidden="true">
                            <i class="fa-solid fa-calculator"></i>
                        </div>
                        <div class="acad-stream-body">
                            <h3 class="acad-stream-title">Mathematics &amp; Logic</h3>
                            <p class="acad-stream-desc">Conceptual arithmetic, geometry proofs, Abacus speed calculations, and problem solving.</p>
                        </div>
                    </div>

                    <!-- Science -->
                    <div class="acad-stream-card">
                        <div class="acad-stream-icon teal" aria-hidden="true">
                            <i class="fa-solid fa-flask-vial"></i>
                        </div>
                        <div class="acad-stream-body">
                            <h3 class="acad-stream-title">Science &amp; Discovery</h3>
                            <p class="acad-stream-desc">Hands-on experimentation across Physics, Chemistry, Biology, and Robotics labs.</p>
                        </div>
                    </div>

                    <!-- Social Science -->
                    <div class="acad-stream-card">
                        <div class="acad-stream-icon purple" aria-hidden="true">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div class="acad-stream-body">
                            <h3 class="acad-stream-title">Social Sciences</h3>
                            <p class="acad-stream-desc">Understanding history, democratic values, global geography, and civic stewardship.</p>
                        </div>
                    </div>

                    <!-- Arts & Creativity -->
                    <div class="acad-stream-card">
                        <div class="acad-stream-icon pink" aria-hidden="true">
                            <i class="fa-solid fa-palette"></i>
                        </div>
                        <div class="acad-stream-body">
                            <h3 class="acad-stream-title">Arts &amp; Expression</h3>
                            <p class="acad-stream-desc">Visual art, Indian classical dance, vocal music, drama, and digital creative media.</p>
                        </div>
                    </div>

                    <!-- Physical Education -->
                    <div class="acad-stream-card">
                        <div class="acad-stream-icon amber" aria-hidden="true">
                            <i class="fa-solid fa-dumbbell"></i>
                        </div>
                        <div class="acad-stream-body">
                            <h3 class="acad-stream-title">Sports &amp; Physical Fitness</h3>
                            <p class="acad-stream-desc">Athletics, cricket, badminton, yoga, and team spirit for physical wellness.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             6. OUR APPROACH SECTION (4 Cards)
             ========================================================================= -->
        <section class="acad-section" id="our-approach">
            <div class="acad-section-header">
                <span class="section-header-pill">
                    <i class="fa-solid fa-heart text-orange me-1"></i>
                    Student-First Ethos
                </span>
                <h2 class="acad-section-title">
                    More Than <span class="highlight-serif highlight-orange">Just Academics.</span>
                </h2>
                <p class="acad-section-desc">
                    We focus on the overall development of each child — intellectually, emotionally, socially and physically.
                </p>
            </div>

            <div class="acad-approach-grid">
                <!-- Card 1 -->
                <div class="acad-approach-card">
                    <div class="acad-approach-icon orange" aria-hidden="true">
                        <i class="fa-regular fa-lightbulb"></i>
                    </div>
                    <h3 class="acad-approach-title">Student-Centric Learning</h3>
                    <p class="acad-approach-desc">Low teacher-student ratio ensuring individualized academic attention, remedial guidance, and differentiated pace.</p>
                </div>

                <!-- Card 2 -->
                <div class="acad-approach-card">
                    <div class="acad-approach-icon blue" aria-hidden="true">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="acad-approach-title">Safe &amp; Supportive Environment</h3>
                    <p class="acad-approach-desc">A nurturing, fully CCTV-monitored campus with compassionate faculty where every child feels respected and inspired.</p>
                </div>

                <!-- Card 3 -->
                <div class="acad-approach-card">
                    <div class="acad-approach-icon teal" aria-hidden="true">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <h3 class="acad-approach-title">Focus on Values &amp; Character</h3>
                    <p class="acad-approach-desc">Instilling integrity, social responsibility, empathy, and cultural respect alongside academic achievement.</p>
                </div>

                <!-- Card 4 -->
                <div class="acad-approach-card">
                    <div class="acad-approach-icon pink" aria-hidden="true">
                        <i class="fa-solid fa-rocket"></i>
                    </div>
                    <h3 class="acad-approach-title">Future-Ready Competencies</h3>
                    <p class="acad-approach-desc">Equipping students with analytical reasoning, technological literacy, and confidence for higher competitive success.</p>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             7. BEYOND THE CLASSROOM SECTION (Clubs + Creative Student Visual)
             ========================================================================= -->
        <section class="acad-section" id="beyond-classroom">
            <div class="acad-section-header">
                <span class="section-header-pill">
                    <i class="fa-solid fa-sparkles text-orange me-1"></i>
                    Co-Curricular Societies
                </span>
                <h2 class="acad-section-title">
                    Learning That <span class="highlight-serif highlight-orange">Goes Further.</span>
                </h2>
                <p class="acad-section-desc">
                    Our academic programme is enriched with co-curricular clubs, competitions, and leadership opportunities that let students discover their unique passions.
                </p>
            </div>

            <div class="acad-clubs-grid">
                <div class="acad-club-card">
                    <div class="acad-club-icon-circle c1" aria-hidden="true">
                        <i class="fa-solid fa-microscope"></i>
                    </div>
                    <h4>Science &amp; STEM Club</h4>
                    <p>Science exhibitions, robotics challenges, and observational nature experiments.</p>
                </div>

                <div class="acad-club-card">
                    <div class="acad-club-icon-circle c2" aria-hidden="true">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <h4>Literary &amp; Editorial</h4>
                    <p>Creative writing, school magazine editorial board, and poetry recitations.</p>
                </div>

                <div class="acad-club-card">
                    <div class="acad-club-icon-circle c3" aria-hidden="true">
                        <i class="fa-solid fa-bullhorn"></i>
                    </div>
                    <h4>Debate &amp; Elocution</h4>
                    <p>Public speaking, parliamentary debate drills, and Model United Nations (MUN).</p>
                </div>

                <div class="acad-club-card">
                    <div class="acad-club-icon-circle c4" aria-hidden="true">
                        <i class="fa-solid fa-music"></i>
                    </div>
                    <h4>Fine Arts &amp; Music</h4>
                    <p>Vocal training, classical instrumental music, painting, and craft workshops.</p>
                </div>

                <div class="acad-club-card">
                    <div class="acad-club-icon-circle c5" aria-hidden="true">
                        <i class="fa-solid fa-person-running"></i>
                    </div>
                    <h4>Sports &amp; Athletics</h4>
                    <p>Inter-house tournaments, physical agility drills, cricket, and martial arts.</p>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             8. ADMISSIONS OPEN CTA / HELPLINE BANNER
             ========================================================================= -->
        <section class="secondary-helpline-card" id="contact-admissions">
            <div class="sec-helpline-content">
                <span class="sec-helpline-eyebrow">
                    <i class="fa-solid fa-sparkles"></i> ADMISSIONS OPEN FOR ACADEMIC SESSION 2026–27
                </span>
                <h2>{{ $content['cta_headline'] ?? 'Give Your Child the Advaita Advantage.' }}</h2>
                <p>{{ $content['cta_subtext'] ?? 'A strong academic foundation today, for a brighter and bolder tomorrow.' }} Enrol now across Pre-Primary, Primary, and Secondary Wings.</p>

                <div class="sec-contact-chips">
                    <a href="tel:+919422176733" class="sec-contact-chip">
                        <i class="fa-solid fa-phone"></i>
                        <span>+91 94221 76733</span>
                    </a>
                    <span class="sec-contact-chip">
                        <i class="fa-solid fa-building-columns"></i>
                        <span>CBSE Affiliated No. 1130920</span>
                    </span>
                    <span class="sec-contact-chip">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Jintur Road, Parbhani</span>
                    </span>
                </div>
            </div>

            <div class="sec-helpline-actions">
                <a href="{{ route('online-registration') }}" class="btn-sec-cta-primary">
                    <span>Apply for Admission</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="{{ route('fee-structure') }}" class="btn-sec-cta-fee">
                    <i class="fa-solid fa-indian-rupee-sign"></i>
                    <span>Explore Fee Structure</span>
                </a>
                <a href="{{ route('contact') }}#campus-map" class="btn-sec-cta-call">
                    <i class="fa-regular fa-calendar-check"></i>
                    <span>Schedule Campus Visit</span>
                </a>
            </div>
        </section>

    </div><!-- /.acad-container -->

</main>
@endsection
