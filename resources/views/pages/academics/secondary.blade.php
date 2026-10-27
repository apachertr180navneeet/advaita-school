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
                <img src="{{ asset($content['hero_image'] ?? 'assets/images/fac-science-lab.jpg') }}" alt="Secondary Students in Science Laboratory at Advaita School of Excellence" class="admission-hero-bg-img" width="1024" height="682">
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
                <span class="script-title">Aspirations<br>to Reality</span>
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
                        <span class="highlight-serif highlight-orange">{{ $content['hero_highlight'] ?? 'Foundation Pathways.' }}</span>
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
                            <span>NEET / IIT Foundation</span>
                        </a>
                        <a href="#board-results" class="admission-btn-visit" style="background: rgba(8, 59, 122, 0.08); border-color: rgba(8, 59, 122, 0.2); color: #083B7A;">
                            <i class="fa-solid fa-trophy"></i>
                            <span>100% Board Results</span>
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
                <a href="{{ route('academics.primary') }}" class="acad-pill-btn">
                    <i class="fa-solid fa-book-open-reader"></i>
                    <span>Primary Wing (1–5)</span>
                </a>
                <a href="{{ route('academics.secondary') }}" class="acad-pill-btn active">
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
             2. DEDICATED NEET / IIT FOUNDATION PROGRAMME (HERO FEATURE)
             ========================================================================= -->
        <section class="special-track-section iit-track" id="iit-foundation">
            <div class="special-track-card">
                <div class="special-track-grid">
                    <div class="special-track-visual">
                        <img src="{{ asset($content['iit_image'] ?? 'assets/images/gallery/academic-learning.png') }}" alt="NEET and IIT Foundation Batch at Advaita">
                        <div class="track-badge-floating">
                            <i class="fa-solid fa-atom"></i>
                            <span>Classes 6 to 10 Integrated Track</span>
                        </div>
                    </div>

                    <div class="special-track-content">
                        <span class="track-eyebrow">
                            <i class="fa-solid fa-chart-line text-orange"></i>
                            CAREER READINESS FOR JEE &amp; NEET
                        </span>
                        <h2 class="track-heading">
                            {{ $content['iit_title'] ?? 'Dedicated NEET / IIT Foundation Programme' }}
                        </h2>
                        <p class="track-desc">
                            {{ $content['iit_desc'] ?? 'Integrated coaching with CBSE academics, focusing on advanced conceptual problem solving, higher-order thinking skills (HOTS), and diagnostic testing.' }}
                        </p>

                        <div class="iit-features-grid">
                            <div class="iit-feat-card">
                                <div class="feat-icon-badge badge-orange">
                                    <i class="fa-solid fa-microscope"></i>
                                </div>
                                <h4>Conceptual Depth in STEM</h4>
                                <p>Deep dive into Physics, Chemistry, Biology, and advanced Mathematics beyond standard textbooks.</p>
                            </div>
                            <div class="iit-feat-card">
                                <div class="feat-icon-badge badge-blue">
                                    <i class="fa-solid fa-clipboard-check"></i>
                                </div>
                                <h4>Weekly Milestone Tests</h4>
                                <p>OMR-pattern diagnostic tests replicating competitive JEE Main and NEET test environments.</p>
                            </div>
                            <div class="iit-feat-card">
                                <div class="feat-icon-badge badge-emerald">
                                    <i class="fa-solid fa-chalkboard-user"></i>
                                </div>
                                <h4>Specialist Mentors</h4>
                                <p>Experienced educators with specialized competitive training backgrounds for Classes 6 to 10.</p>
                            </div>
                            <div class="iit-feat-card">
                                <div class="feat-icon-badge badge-purple">
                                    <i class="fa-solid fa-arrows-split-up-and-left"></i>
                                </div>
                                <h4>Integrated Timetable</h4>
                                <p>No exhaustion from outside coaching. All foundation mentorship is synced within the school schedule.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-12 mt-20 flex-wrap">
                            <a href="{{ route('results', ['category' => 'iit_foundation']) }}" class="btn-track-results">
                                <i class="fa-solid fa-trophy"></i>
                                <span>View Foundation Achievements</span>
                            </a>
                            <a href="{{ route('online-registration') }}" class="btn-primary-pill">
                                <span>Apply for Foundation Screening</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             3. 100% BOARD RESULTS & DISTRICT MERIT SPOTLIGHT
             ========================================================================= -->
        <section class="secondary-results-spotlight" id="board-results">
            <div class="spotlight-card">
                <div class="spotlight-header">
                    <span class="spotlight-badge"><i class="fa-solid fa-award"></i> PROVEN 100% PASS RECORD</span>
                    <h2>Consistent 100% CBSE Class 10 Board Results</h2>
                    <p>Our academic discipline, rigorous mock series, and continuous individualized mentorship have produced district-wide toppers year after year.</p>
                </div>

                <div class="spotlight-metrics-row">
                    <div class="spotlight-metric">
                        <div class="metric-icon"><i class="fa-solid fa-circle-check"></i></div>
                        <strong class="metric-num">100%</strong>
                        <span>Class 10 Board Passing Rate</span>
                    </div>
                    <div class="spotlight-metric">
                        <div class="metric-icon"><i class="fa-solid fa-crown text-amber-300"></i></div>
                        <strong class="metric-num highlight-gold">98.40%</strong>
                        <span>District 1st Topper (Om Dhoot)</span>
                    </div>
                    <div class="spotlight-metric">
                        <div class="metric-icon"><i class="fa-solid fa-star text-orange"></i></div>
                        <strong class="metric-num">35%+</strong>
                        <span>Students Scoring Above 90%</span>
                    </div>
                    <div class="spotlight-metric">
                        <div class="metric-icon"><i class="fa-solid fa-certificate"></i></div>
                        <strong class="metric-num">100%</strong>
                        <span>First Division Pass Record</span>
                    </div>
                </div>

                <div class="spotlight-topper-strip">
                    <div class="spotlight-topper-info">
                        <div class="spotlight-topper-avatar">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>
                        <div class="spotlight-topper-text">
                            <strong>Om Dhoot — District 1st Rank Topper</strong>
                            <span>Exemplary CBSE Class 10 Board Performance · Advaita School of Excellence</span>
                        </div>
                    </div>
                    <div class="spotlight-topper-score">
                        <span class="topper-score-badge">
                            <i class="fa-solid fa-medal me-1"></i> 98.40% District Rank 1
                        </span>
                    </div>
                </div>

                <div class="spotlight-cta text-center">
                    <a href="{{ route('results', ['category' => 'board']) }}" class="btn-sec-cta-primary" style="display: inline-flex; width: auto; margin: 0 auto;">
                        <i class="fa-solid fa-trophy"></i>
                        <span>Explore Full Board Results &amp; Toppers Gallery</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             4. CBSE SECONDARY CURRICULUM & SUBJECT MATRIX
             ========================================================================= -->
        <section class="acad-section" id="secondary-curriculum">
            <div class="acad-section-header">
                <span class="section-header-pill">
                    <i class="fa-solid fa-book-open text-orange me-1"></i>
                    CBSE Secondary Curriculum
                </span>
                <h2 class="acad-section-title">
                    Rigorous Academics Aligned with <span class="highlight-serif highlight-orange">CBSE Standards.</span>
                </h2>
                <p class="acad-section-desc">
                    Affiliated with the Central Board of Secondary Education (CBSE Affiliation No. 1130920), our curriculum prepares students thoroughly for high Class 10 Board Examinations and entrance milestones.
                </p>
            </div>

            <div class="subjects-grid">
                <div class="subject-card">
                    <span class="subject-code-tag">Code 041/241</span>
                    <div class="subject-icon icon-blue"><i class="fa-solid fa-square-root-variable"></i></div>
                    <h3>Mathematics (Standard &amp; Basic)</h3>
                    <p>Algebra, Geometry, Trigonometry, Coordinate Geometry, Statistics, and Probability with rigorous conceptual proof mastery.</p>
                    <div class="subject-focus-pills">
                        <span class="pill-tag">Algebra</span>
                        <span class="pill-tag">Trigonometry</span>
                        <span class="pill-tag">CBSE Standard/Basic</span>
                    </div>
                </div>

                <div class="subject-card">
                    <span class="subject-code-tag">Code 086</span>
                    <div class="subject-icon icon-teal"><i class="fa-solid fa-flask"></i></div>
                    <h3>Science (Physics, Chemistry, Biology)</h3>
                    <p>Hands-on laboratory experiments, scientific reasoning, chemical reactions, optics, electromagnetism, and human physiology.</p>
                    <div class="subject-focus-pills">
                        <span class="pill-tag">Physics Lab</span>
                        <span class="pill-tag">Chemistry Wet Lab</span>
                        <span class="pill-tag">Biology Specimens</span>
                    </div>
                </div>

                <div class="subject-card">
                    <span class="subject-code-tag">Code 087</span>
                    <div class="subject-icon icon-purple"><i class="fa-solid fa-earth-americas"></i></div>
                    <h3>Social Science</h3>
                    <p>History of India &amp; Modern World, Physical &amp; Human Geography, Democratic Politics, Economics, and Disaster Management.</p>
                    <div class="subject-focus-pills">
                        <span class="pill-tag">History</span>
                        <span class="pill-tag">Geography</span>
                        <span class="pill-tag">Civics &amp; Economics</span>
                    </div>
                </div>

                <div class="subject-card">
                    <span class="subject-code-tag">Code 184</span>
                    <div class="subject-icon icon-orange"><i class="fa-solid fa-book-bookmark"></i></div>
                    <h3>English Language &amp; Literature</h3>
                    <p>Critical text analysis, formal speech delivery, creative essays, reading comprehension, and communicative grammar.</p>
                    <div class="subject-focus-pills">
                        <span class="pill-tag">Prose &amp; Poetry</span>
                        <span class="pill-tag">Formal Writing</span>
                        <span class="pill-tag">Debate &amp; Elocution</span>
                    </div>
                </div>

                <div class="subject-card">
                    <span class="subject-code-tag">Code 085 / 122</span>
                    <div class="subject-icon icon-indigo"><i class="fa-solid fa-language"></i></div>
                    <h3>Second Languages (Hindi / Sanskrit / Marathi)</h3>
                    <p>Grammar refinement, classic literature appreciation, cultural values, and flawless oral and written expression.</p>
                    <div class="subject-focus-pills">
                        <span class="pill-tag">Hindi Course B</span>
                        <span class="pill-tag">Sanskrit</span>
                        <span class="pill-tag">Marathi</span>
                    </div>
                </div>

                <div class="subject-card">
                    <span class="subject-code-tag">Code 402 / 417</span>
                    <div class="subject-icon icon-pink"><i class="fa-solid fa-robot"></i></div>
                    <h3>Information Technology &amp; AI</h3>
                    <p>Computer applications, Python fundamentals, cyber security ethics, digital citizenship, and artificial intelligence introduction.</p>
                    <div class="subject-focus-pills">
                        <span class="pill-tag">Python Coding</span>
                        <span class="pill-tag">AI Foundations</span>
                        <span class="pill-tag">Cyber Ethics</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             5. LABORATORIES & STEM EXCELLENCE SHOWCASE
             ========================================================================= -->
        <section class="acad-section" id="labs">
            <div class="acad-section-header">
                <span class="section-header-pill">
                    <i class="fa-solid fa-flask-vial text-orange me-1"></i>
                    STEM Infrastructure
                </span>
                <h2 class="acad-section-title">
                    Advanced Laboratories &amp; <span class="highlight-serif highlight-orange">Practical Sciences.</span>
                </h2>
                <p class="acad-section-desc">
                    Real scientific discovery happens with hands-on experimentation. Our state-of-the-art facilities offer comprehensive CBSE practical exposure.
                </p>
            </div>

            <div class="secondary-labs-grid">
                <div class="sec-lab-card">
                    <div class="sec-lab-img-wrap">
                        <img src="{{ asset($content['hero_image'] ?? 'assets/images/fac-science-lab.jpg') }}" alt="Composite Science Laboratory at Advaita">
                        <span class="sec-lab-badge">Physics &amp; Chemistry</span>
                    </div>
                    <div class="sec-lab-body">
                        <h3>Composite Science Laboratory</h3>
                        <p>Fully equipped workstation benches with precision instruments for individual secondary student practical experiments.</p>
                        <ul class="sec-lab-features">
                            <li><i class="fa-solid fa-check"></i> Digital optical benches &amp; prisms</li>
                            <li><i class="fa-solid fa-check"></i> Standard chemical titration glassware</li>
                            <li><i class="fa-solid fa-check"></i> Strict lab safety protocols &amp; eye-wash stations</li>
                        </ul>
                    </div>
                </div>

                <div class="sec-lab-card">
                    <div class="sec-lab-img-wrap">
                        <img src="{{ asset($content['lab_image'] ?? 'assets/images/gallery/robotics-lab.png') }}" alt="Robotics and AI Lab at Advaita">
                        <span class="sec-lab-badge">Innovation &amp; Tech</span>
                    </div>
                    <div class="sec-lab-body">
                        <h3>Robotics &amp; STEM Innovation Centre</h3>
                        <p>A specialized maker-space fostering problem solving, automation, and electronics tinkering for Classes 6 to 10.</p>
                        <ul class="sec-lab-features">
                            <li><i class="fa-solid fa-check"></i> Arduino microcontrollers &amp; sensor kits</li>
                            <li><i class="fa-solid fa-check"></i> Line-follower robot construction kits</li>
                            <li><i class="fa-solid fa-check"></i> Collaborative STEM challenge workspaces</li>
                        </ul>
                    </div>
                </div>

                <div class="sec-lab-card">
                    <div class="sec-lab-img-wrap">
                        <img src="{{ asset($content['iit_image'] ?? 'assets/images/gallery/academic-learning.png') }}" alt="Computer Science Laboratory at Advaita">
                        <span class="sec-lab-badge">Computer Science</span>
                    </div>
                    <div class="sec-lab-body">
                        <h3>High-Speed Computer Science Lab</h3>
                        <p>Dedicated 1:1 terminals equipped with Python IDEs, computational thinking tools, and filtered high-speed internet.</p>
                        <ul class="sec-lab-features">
                            <li><i class="fa-solid fa-check"></i> 1:1 student-to-PC ratio during lab hours</li>
                            <li><i class="fa-solid fa-check"></i> Python &amp; data handling software suite</li>
                            <li><i class="fa-solid fa-check"></i> Cyber safety firewall and monitoring</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             6. COMPETITIVE EXAMINATIONS & SCHOLARSHIPS
             ========================================================================= -->
        <section class="acad-section" id="scholarships">
            <div class="acad-section-header">
                <span class="section-header-pill">
                    <i class="fa-solid fa-medal text-orange me-1"></i>
                    Scholarships &amp; Competitions
                </span>
                <h2 class="acad-section-title">
                    Mentorship for <span class="highlight-serif highlight-orange">National Competitions.</span>
                </h2>
                <p class="acad-section-desc">
                    We nurture ambitious scholars for state and national talent screenings that open future scholarship pathways.
                </p>
            </div>

            <div class="instruments-grid">
                <div class="instrument-item">
                    <div class="ins-icon" style="background: #fff7ed; color: #ea580c;">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <div class="instrument-meta">Classes 6 &amp; 9</div>
                    <h4>Dr. Homi Bhabha Balvaidnyanik</h4>
                    <p>Guidance through theory, practical science experiments, and research project presentation with state mentors.</p>
                </div>

                <div class="instrument-item">
                    <div class="ins-icon" style="background: #eff6ff; color: #0284c7;">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div class="instrument-meta">Class 8 Milestone</div>
                    <h4>Maharashtra State Scholarship</h4>
                    <p>Targeted coaching for Class 8 High School Scholarship exams with extensive mock practice and OMR drills.</p>
                </div>

                <div class="instrument-item">
                    <div class="ins-icon" style="background: #f0fdf4; color: #16a34a;">
                        <i class="fa-solid fa-atom"></i>
                    </div>
                    <div class="instrument-meta">Classes 6 to 10</div>
                    <h4>Vidyarthi Vigyan Manthan (VVM)</h4>
                    <p>National science talent search mentorship organized by Vijnana Bharati and NCERT for young innovators.</p>
                </div>

                <div class="instrument-item">
                    <div class="ins-icon" style="background: #faf5ff; color: #7c3aed;">
                        <i class="fa-solid fa-medal"></i>
                    </div>
                    <div class="instrument-meta">SOF &amp; Silverzone</div>
                    <h4>National Olympiads (SOF)</h4>
                    <p>Advanced competitive problem-solving for secondary Olympiad medals in Science, Math, Cyber, and English.</p>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             7. ADMISSION CTA & HELPLINE BANNER
             ========================================================================= -->
        <section class="secondary-helpline-card" id="contact-admissions">
            <div class="sec-helpline-content">
                <span class="sec-helpline-eyebrow">
                    <i class="fa-solid fa-sparkles"></i> ADMISSIONS OPEN FOR CLASSES 6 TO 10
                </span>
                <h2>Step Into Academic Brilliance &amp; Career Preparation.</h2>
                <p>Join Advaita School of Excellence for proven Class 10 CBSE Board results, dedicated NEET/IIT Foundation mentorship, and world-class STEM laboratories.</p>

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
                    <span>Apply for Secondary Admission</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="{{ route('fee-structure') }}" class="btn-sec-cta-fee">
                    <i class="fa-solid fa-indian-rupee-sign"></i>
                    <span>View Secondary Fee Structure</span>
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
