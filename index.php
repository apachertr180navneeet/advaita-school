<?php
/**
 * Home Page - Parshv International School
 * Modern, Premium, Clean and Responsive School Website UI
 */
$pageTitle = "Parshv International School, Jodhpur - Building Curious Minds, Shaping Confident Futures";
$activePage = "index";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper">

    <!-- ====================================================================
         SECTION 1: HERO SECTION & SLIDER
         ==================================================================== -->
    <section class="adv-hero-slider-section" aria-label="Parshv International School Hero Banner">
        <div class="adv-slider-container">
            <div class="adv-slider-wrapper">

                <!-- ----------------------------------------------------
                     SLIDE 1: Building Curious Minds
                     ---------------------------------------------------- -->
                <div class="adv-slide active" data-slide-index="0">
                    <div class="adv-slide-bg" style="background-image: url('assets/images/hero-campus-1.jpg');"></div>
                    <div class="adv-slide-overlay"></div>
                    <div class="adv-slide-vignette"></div>

                    <!-- Floating Polaroid 1 (Left Side - Taped) -->
                    <div class="adv-slider-polaroid left-card" title="Student Achievements">
                        <div class="adv-polaroid-tape" aria-hidden="true"></div>
                        <div class="adv-polaroid-image-wrap">
                            <img src="assets/images/card-student-1.jpg" alt="Proud Parshvians - Student Achievements" loading="eager">
                        </div>
                        <div class="adv-polaroid-caption">
                            <span class="adv-polaroid-tag">
                                <span class="badge-dot"></span> LIVE ON CAMPUS
                            </span>
                            <h4 class="adv-polaroid-title">Proud Parshvians</h4>
                            <p class="adv-polaroid-sub">Where every win is celebrated</p>
                        </div>
                    </div>

                    <!-- Floating Polaroid 2 (Right Side - Taped) -->
                    <div class="adv-slider-polaroid right-card" title="Peer Mentorship">
                        <div class="adv-polaroid-tape" aria-hidden="true"></div>
                        <div class="adv-polaroid-image-wrap">
                            <img src="assets/images/card-student-2.jpg" alt="Peer Group Support - Classroom Mentoring" loading="eager">
                        </div>
                        <div class="adv-polaroid-caption">
                            <span class="adv-polaroid-tag">
                                <span class="badge-dot"></span> LIVE ON CAMPUS
                            </span>
                            <h4 class="adv-polaroid-title">Peer Group Support</h4>
                            <p class="adv-polaroid-sub">Older students mentoring younger ones</p>
                        </div>
                    </div>

                    <!-- Slide Content -->
                    <div class="adv-slide-content">
                        <div class="adv-slide-top-spacer"></div>

                        <div class="adv-slide-center-block">
                            <div class="adv-hero-pill-tag">
                                <span class="tag-dot"></span> ADMISSIONS 2026–27 OPEN
                            </div>
                            <h1 class="adv-slide-title">
                                Building Curious Minds. <br>
                                <span class="highlight">Shaping Confident Futures.</span>
                            </h1>
                            <p class="adv-slide-lead">
                                Where knowledge meets values, creativity meets opportunity, and every child is encouraged to discover their potential.
                            </p>

                            <!-- Feature Tags -->
                            <div class="adv-slider-features">
                                <span class="adv-slider-feature-item">
                                    <i class="fa-solid fa-graduation-cap"></i> CBSE Curriculum (PG – XII)
                                </span>
                                <span class="adv-slider-feature-item">
                                    <i class="fa-solid fa-microchip"></i> Smart STEM Labs
                                </span>
                                <span class="adv-slider-feature-item">
                                    <i class="fa-solid fa-medal"></i> Sports & Arts Academy
                                </span>
                            </div>

                            <!-- Action CTA Buttons -->
                            <div class="adv-slider-actions">
                                <a href="#admissions" class="adv-btn-admission-pill">
                                    <span class="pulsing-dot"></span> ADMISSIONS 2026–27 OPEN
                                </a>
                                <a href="#admission-cta" class="adv-btn-hero-primary">
                                    <span>Apply for Admission</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a href="#about-school" class="adv-btn-hero-secondary">
                                    <i class="fa-solid fa-compass"></i>
                                    <span>Explore Our School</span>
                                </a>
                            </div>
                        </div>

                        <!-- Integrated Stats Strip -->
                        <div class="adv-slider-stats-strip">
                            <ul class="adv-slider-stats-list">
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-award"></i>
                                    <span>CBSE AFFILIATED</span>
                                </li>
                                <li class="adv-slider-stat-sep">•</li>
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-trophy"></i>
                                    <span>100% BOARD PASS RESULT</span>
                                </li>
                                <li class="adv-slider-stat-sep">•</li>
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-users"></i>
                                    <span>1500+ STUDENTS</span>
                                </li>
                                <li class="adv-slider-stat-sep">•</li>
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-star"></i>
                                    <span>80+ EXPERIENCED FACULTY</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ----------------------------------------------------
                     SLIDE 2: Modern Campus & Innovation
                     ---------------------------------------------------- -->
                <div class="adv-slide" data-slide-index="1">
                    <div class="adv-slide-bg" style="background-image: url('assets/images/hero-campus-2.jpg');"></div>
                    <div class="adv-slide-overlay"></div>
                    <div class="adv-slide-vignette"></div>

                    <!-- Floating Polaroid 1 -->
                    <div class="adv-slider-polaroid left-card" title="Robotics & Innovation">
                        <div class="adv-polaroid-tape" aria-hidden="true"></div>
                        <div class="adv-polaroid-image-wrap">
                            <img src="assets/images/card-student-3.jpg" alt="STEM & Robotics Innovation" loading="lazy">
                        </div>
                        <div class="adv-polaroid-caption">
                            <span class="adv-polaroid-tag">
                                <span class="badge-dot"></span> INNOVATION HUB
                            </span>
                            <h4 class="adv-polaroid-title">Future-Ready Skills</h4>
                            <p class="adv-polaroid-sub">AI, Coding & Robotics Studio</p>
                        </div>
                    </div>

                    <!-- Floating Polaroid 2 -->
                    <div class="adv-slider-polaroid right-card" title="Sports & Athletics">
                        <div class="adv-polaroid-tape" aria-hidden="true"></div>
                        <div class="adv-polaroid-image-wrap">
                            <img src="assets/images/card-student-4.jpg" alt="Sports & Physical Education" loading="lazy">
                        </div>
                        <div class="adv-polaroid-caption">
                            <span class="adv-polaroid-tag">
                                <span class="badge-dot"></span> CHAMPIONS HUB
                            </span>
                            <h4 class="adv-polaroid-title">Sports Excellence</h4>
                            <p class="adv-polaroid-sub">Olympic standard facilities & coaching</p>
                        </div>
                    </div>

                    <!-- Slide Content -->
                    <div class="adv-slide-content">
                        <div class="adv-slide-top-spacer"></div>

                        <div class="adv-slide-center-block">
                            <div class="adv-hero-pill-tag">
                                <span class="tag-dot"></span> WORLD-CLASS INFRASTRUCTURE
                            </div>
                            <h2 class="adv-slide-title">
                                Empowering Young Minds <br>
                                <span class="highlight">Beyond the Classroom</span>
                            </h2>
                            <p class="adv-slide-lead">
                                Expansive green sports grounds, cutting-edge science labs, performing arts auditorium, and modern digital classrooms.
                            </p>

                            <div class="adv-slider-features">
                                <span class="adv-slider-feature-item">
                                    <i class="fa-solid fa-tree"></i> Sprawling Eco-Friendly Campus
                                </span>
                                <span class="adv-slider-feature-item">
                                    <i class="fa-solid fa-futbol"></i> 12+ Sports Disciplines
                                </span>
                                <span class="adv-slider-feature-item">
                                    <i class="fa-solid fa-shield-halved"></i> 24/7 Secure & Safe Campus
                                </span>
                            </div>

                            <div class="adv-slider-actions">
                                <a href="#admissions" class="adv-btn-admission-pill">
                                    <span class="pulsing-dot"></span> ADMISSIONS 2026–27 OPEN
                                </a>
                                <a href="#admission-cta" class="adv-btn-hero-primary">
                                    <span>Apply for Admission</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a href="#campus-infrastructure" class="adv-btn-hero-secondary">
                                    <i class="fa-solid fa-play"></i>
                                    <span>Take a Campus Tour</span>
                                </a>
                            </div>
                        </div>

                        <div class="adv-slider-stats-strip">
                            <ul class="adv-slider-stats-list">
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-award"></i>
                                    <span>CBSE AFFILIATED</span>
                                </li>
                                <li class="adv-slider-stat-sep">•</li>
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-trophy"></i>
                                    <span>100% BOARD RESULTS</span>
                                </li>
                                <li class="adv-slider-stat-sep">•</li>
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-users"></i>
                                    <span>1500+ STUDENTS</span>
                                </li>
                                <li class="adv-slider-stat-sep">•</li>
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-user-tie"></i>
                                    <span>80+ DEDICATED TEACHERS</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Arrows -->
            <button type="button" class="adv-slider-arrow prev-arrow" aria-label="Previous Slide">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button type="button" class="adv-slider-arrow next-arrow" aria-label="Next Slide">
                <i class="fa-solid fa-chevron-right"></i>
            </button>

            <!-- Dots -->
            <div class="adv-slider-dots" role="tablist" aria-label="Slide Selection">
                <button type="button" class="adv-slider-dot active" role="tab" aria-selected="true" aria-label="Slide 1"></button>
                <button type="button" class="adv-slider-dot" role="tab" aria-selected="false" aria-label="Slide 2"></button>
            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 2: QUICK INFORMATION / HIGHLIGHTS STATS STRIP
         ==================================================================== -->
    <section class="parshv-stats-section" aria-label="School Key Highlights">
        <div class="parshv-container">
            <div class="parshv-stats-grid">
                <!-- Stat 1 -->
                <div class="parshv-stat-card">
                    <div class="parshv-stat-icon-wrap">
                        <i class="fa-solid fa-medal"></i>
                    </div>
                    <div class="parshv-stat-info">
                        <span class="parshv-stat-num">25+</span>
                        <span class="parshv-stat-label">Years of Educational Excellence</span>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="parshv-stat-card">
                    <div class="parshv-stat-icon-wrap">
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                    <div class="parshv-stat-info">
                        <span class="parshv-stat-num">1500+</span>
                        <span class="parshv-stat-label">Enrolled Students</span>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="parshv-stat-card">
                    <div class="parshv-stat-icon-wrap">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <div class="parshv-stat-info">
                        <span class="parshv-stat-num">80+</span>
                        <span class="parshv-stat-label">Experienced & Caring Faculty</span>
                    </div>
                </div>

                <!-- Stat 4 -->
                <div class="parshv-stat-card">
                    <div class="parshv-stat-icon-wrap">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <div class="parshv-stat-info">
                        <span class="parshv-stat-num">100%</span>
                        <span class="parshv-stat-label">Board Exam Results</span>
                    </div>
                </div>

                <!-- Stat 5 -->
                <div class="parshv-stat-card">
                    <div class="parshv-stat-icon-wrap">
                        <i class="fa-solid fa-book-open-reader"></i>
                    </div>
                    <div class="parshv-stat-info">
                        <span class="parshv-stat-num">PG–XII</span>
                        <span class="parshv-stat-label">Comprehensive Education</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 3: WELCOME / ABOUT SCHOOL SECTION
         ==================================================================== -->
    <section class="parshv-section parshv-section-light" id="about-school" aria-label="About Parshv International School">
        <div class="parshv-container">
            <div class="parshv-about-grid">
                <!-- Left Visual with Floating Badge -->
                <div class="parshv-about-visual">
                    <div class="parshv-about-image-card">
                        <img src="assets/images/about-campus.jpg" alt="Parshv International School Campus" loading="lazy">
                    </div>
                    <div class="parshv-about-badge-floating">
                        <i class="fa-solid fa-award"></i>
                        <div class="parshv-about-badge-text">
                            <span class="badge-num">25+</span>
                            <span class="badge-lbl">Years of Educational Legacy</span>
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="parshv-about-content">
                    <div class="parshv-section-header">
                        <span class="parshv-eyebrow-badge">
                            <i class="fa-solid fa-landmark"></i> ABOUT OUR SCHOOL
                        </span>
                        <h2 class="parshv-section-title">
                            Welcome to <span class="highlight">Parshv International School</span>
                        </h2>
                    </div>

                    <p class="parshv-lead-text">
                        "At Parshv International School, we believe education is more than academic achievement. It is about developing confident, responsible and compassionate individuals who are prepared for the future."
                    </p>

                    <p>
                        Established with a deep commitment to educational excellence, Parshv International School provides a seamless educational journey from Play Group through Class XII. We harmonize rigorous CBSE academic standards with experiential learning, cultural values, and modern 21st-century competencies.
                    </p>

                    <!-- Feature Points -->
                    <div class="parshv-about-features">
                        <div class="parshv-about-feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Values-Led Holistic Development</span>
                        </div>
                        <div class="parshv-about-feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>PG to Class XII Seamless Pathways</span>
                        </div>
                        <div class="parshv-about-feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Personalized Student Mentorship</span>
                        </div>
                        <div class="parshv-about-feature-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>State-of-the-Art Labs & Infrastructure</span>
                        </div>
                    </div>

                    <div class="parshv-about-actions">
                        <a href="#why-parshv" class="parshv-btn-primary">
                            <span>Know More About Us</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#campus-infrastructure" class="parshv-btn-secondary">
                            <i class="fa-solid fa-building-columns"></i>
                            <span>Take a Campus Tour</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 4: WHY CHOOSE PARSHV? (6 MODERN CARDS)
         ==================================================================== -->
    <section class="parshv-section parshv-section-alt" id="why-parshv" aria-label="Why Choose Parshv International School">
        <div class="parshv-container">
            <div class="parshv-section-header text-center">
                <span class="parshv-eyebrow-badge">
                    <i class="fa-solid fa-star"></i> CORE ADVANTAGES
                </span>
                <h2 class="parshv-section-title">
                    Why Choose <span class="highlight">Parshv?</span>
                </h2>
                <p class="parshv-section-subtitle">
                    A nurturing and future-focused ecosystem designed to ignite curiosity, instill integrity, and inspire every child to excel.
                </p>
            </div>

            <div class="parshv-why-grid">
                <!-- Card 1 -->
                <div class="parshv-why-card">
                    <div class="parshv-why-icon-bubble">
                        <i class="fa-solid fa-shapes"></i>
                    </div>
                    <h3 class="parshv-why-title">Holistic Education</h3>
                    <p class="parshv-why-desc">
                        A balanced integration of academic excellence, cultural arts, athletic fitness, and moral leadership for all-round personality development.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="parshv-why-card">
                    <div class="parshv-why-icon-bubble">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <h3 class="parshv-why-title">Experienced Faculty</h3>
                    <p class="parshv-why-desc">
                        Dedicated, compassionate, and highly qualified educators focused on personalized attention and nurturing every learner’s individual strengths.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="parshv-why-card">
                    <div class="parshv-why-icon-bubble">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <h3 class="parshv-why-title">Smart Learning</h3>
                    <p class="parshv-why-desc">
                        Interactive digital classrooms, modern audio-visual learning tools, and specialized STEM laboratories that bring concepts to life.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="parshv-why-card">
                    <div class="parshv-why-icon-bubble">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="parshv-why-title">Safe & Secure Campus</h3>
                    <p class="parshv-why-desc">
                        24/7 CCTV surveillance, verified support staff, emergency response protocols, and a caring, supportive atmosphere where every child feels safe.
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="parshv-why-card">
                    <div class="parshv-why-icon-bubble">
                        <i class="fa-solid fa-rocket"></i>
                    </div>
                    <h3 class="parshv-why-title">Future-Ready Skills</h3>
                    <p class="parshv-why-desc">
                        Inquiry-driven learning, robotics, coding, public speaking, critical reasoning, and entrepreneurial mindset tailored for tomorrow's world.
                    </p>
                </div>

                <!-- Card 6 -->
                <div class="parshv-why-card">
                    <div class="parshv-why-icon-bubble">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="parshv-why-title">Strong Academic Results</h3>
                    <p class="parshv-why-desc">
                        Consistent 100% board examination pass records, state & national Olympiad ranks, and successful career placements in premier universities.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 5: ACADEMIC PROGRAMMES (EDUCATION FOR EVERY STAGE)
         ==================================================================== -->
    <section class="parshv-section parshv-section-light" id="programmes" aria-label="Academic Programmes">
        <div class="parshv-container">
            <div class="parshv-section-header text-center">
                <span class="parshv-eyebrow-badge">
                    <i class="fa-solid fa-book-bookmark"></i> LEARNING JOURNEY
                </span>
                <h2 class="parshv-section-title">
                    Education for <span class="highlight">Every Stage</span>
                </h2>
                <p class="parshv-section-subtitle">
                    Progressive, age-appropriate CBSE curriculum pathways crafted to nurture young explorers into visionary scholars.
                </p>
            </div>

            <div class="parshv-prog-grid">
                <!-- Programme 1: Early Years -->
                <div class="parshv-prog-card">
                    <div class="parshv-prog-image-wrap">
                        <img src="assets/images/prog-early-years.jpg" alt="Early Years Education" loading="lazy">
                        <span class="parshv-prog-tag">FOUNDATIONAL</span>
                    </div>
                    <div class="parshv-prog-body">
                        <span class="parshv-prog-grades">Pre-Nursery · Nursery · K1 · K2</span>
                        <h3 class="parshv-prog-title">Early Years</h3>
                        <p class="parshv-prog-desc">
                            Joyful play-based learning fostering curiosity, early literacy, numeracy, motor skills, and social discovery in a warm atmosphere.
                        </p>
                        <a href="#admission-cta" class="parshv-prog-btn">
                            <span>Explore Programme</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Programme 2: Primary School -->
                <div class="parshv-prog-card">
                    <div class="parshv-prog-image-wrap">
                        <img src="assets/images/prog-primary.jpg" alt="Primary School Education" loading="lazy">
                        <span class="parshv-prog-tag">PREPARATORY</span>
                    </div>
                    <div class="parshv-prog-body">
                        <span class="parshv-prog-grades">Grades I – V</span>
                        <h3 class="parshv-prog-title">Primary School</h3>
                        <p class="parshv-prog-desc">
                            Experiential and inquiry-led instruction building strong conceptual foundations in languages, mathematics, sciences, and creative arts.
                        </p>
                        <a href="#admission-cta" class="parshv-prog-btn">
                            <span>Explore Programme</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Programme 3: Middle School -->
                <div class="parshv-prog-card">
                    <div class="parshv-prog-image-wrap">
                        <img src="assets/images/prog-middle.jpg" alt="Middle School Education" loading="lazy">
                        <span class="parshv-prog-tag">MIDDLE YEARS</span>
                    </div>
                    <div class="parshv-prog-body">
                        <span class="parshv-prog-grades">Grades VI – VIII</span>
                        <h3 class="parshv-prog-title">Middle School</h3>
                        <p class="parshv-prog-desc">
                            Transitioning to advanced analytical thinking, scientific experiments, coding, collaborative projects, and co-curricular pursuits.
                        </p>
                        <a href="#admission-cta" class="parshv-prog-btn">
                            <span>Explore Programme</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Programme 4: Senior Secondary -->
                <div class="parshv-prog-card">
                    <div class="parshv-prog-image-wrap">
                        <img src="assets/images/prog-senior.jpg" alt="Senior Secondary Education" loading="lazy">
                        <span class="parshv-prog-tag">SECONDARY & SENIOR</span>
                    </div>
                    <div class="parshv-prog-body">
                        <span class="parshv-prog-grades">Grades IX – XII</span>
                        <h3 class="parshv-prog-title">Senior Secondary</h3>
                        <p class="parshv-prog-desc">
                            Specialized academic preparation, competitive exam coaching, and personalized career counseling across all 3 key streams:
                        </p>
                        <div class="parshv-prog-streams">
                            <span class="parshv-stream-pill">Science</span>
                            <span class="parshv-stream-pill">Commerce</span>
                            <span class="parshv-stream-pill">Humanities</span>
                        </div>
                        <a href="#admission-cta" class="parshv-prog-btn">
                            <span>Explore Programme</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 6: CAMPUS & INFRASTRUCTURE
         ==================================================================== -->
    <section class="parshv-section parshv-section-alt" id="campus-infrastructure" aria-label="Campus Facilities">
        <div class="parshv-container">
            <div class="parshv-section-header text-center">
                <span class="parshv-eyebrow-badge">
                    <i class="fa-solid fa-building"></i> MODERN INFRASTRUCTURE
                </span>
                <h2 class="parshv-section-title">
                    A Campus <span class="highlight">Designed for Learning</span>
                </h2>
                <p class="parshv-section-subtitle">
                    Purpose-built learning spaces, world-class scientific labs, tech-enabled digital classrooms, and multi-sport complexes.
                </p>
            </div>

            <div class="parshv-fac-grid">
                <!-- Facility 1 -->
                <div class="parshv-fac-card">
                    <img src="assets/images/fac-smart-class.jpg" alt="Smart Classrooms" loading="lazy">
                    <div class="parshv-fac-overlay">
                        <div class="parshv-fac-icon"><i class="fa-solid fa-desktop"></i></div>
                        <h3 class="parshv-fac-title">Smart Classrooms</h3>
                        <p class="parshv-fac-desc">Interactive digital boards & multimedia teaching tools.</p>
                    </div>
                </div>

                <!-- Facility 2 -->
                <div class="parshv-fac-card">
                    <img src="assets/images/fac-science-lab.jpg" alt="Science Laboratory" loading="lazy">
                    <div class="parshv-fac-overlay">
                        <div class="parshv-fac-icon"><i class="fa-solid fa-flask-vial"></i></div>
                        <h3 class="parshv-fac-title">Science Laboratory</h3>
                        <p class="parshv-fac-desc">Fully equipped Physics, Chemistry & Biology research stations.</p>
                    </div>
                </div>

                <!-- Facility 3 -->
                <div class="parshv-fac-card">
                    <img src="assets/images/fac-robotics.jpg" alt="Robotics Lab" loading="lazy">
                    <div class="parshv-fac-overlay">
                        <div class="parshv-fac-icon"><i class="fa-solid fa-robot"></i></div>
                        <h3 class="parshv-fac-title">Robotics & AI Lab</h3>
                        <p class="parshv-fac-desc">Hands-on STEM prototyping, IoT, and coding workspace.</p>
                    </div>
                </div>

                <!-- Facility 4 -->
                <div class="parshv-fac-card">
                    <img src="assets/images/fac-computer.jpg" alt="Computer Lab" loading="lazy">
                    <div class="parshv-fac-overlay">
                        <div class="parshv-fac-icon"><i class="fa-solid fa-network-wired"></i></div>
                        <h3 class="parshv-fac-title">Computer Lab</h3>
                        <p class="parshv-fac-desc">High-speed networked systems with latest educational software.</p>
                    </div>
                </div>

                <!-- Facility 5 -->
                <div class="parshv-fac-card">
                    <img src="assets/images/fac-library.jpg" alt="Knowledge Library" loading="lazy">
                    <div class="parshv-fac-overlay">
                        <div class="parshv-fac-icon"><i class="fa-solid fa-book"></i></div>
                        <h3 class="parshv-fac-title">Resource Library</h3>
                        <p class="parshv-fac-desc">10,000+ books, periodicals, e-journals, and peaceful reading nooks.</p>
                    </div>
                </div>

                <!-- Facility 6 -->
                <div class="parshv-fac-card">
                    <img src="assets/images/fac-sports.jpg" alt="Sports Facilities" loading="lazy">
                    <div class="parshv-fac-overlay">
                        <div class="parshv-fac-icon"><i class="fa-solid fa-volleyball"></i></div>
                        <h3 class="parshv-fac-title">Sports Complex</h3>
                        <p class="parshv-fac-desc">Cricket pitch, basketball courts, badminton & athletic track.</p>
                    </div>
                </div>

                <!-- Facility 7 -->
                <div class="parshv-fac-card">
                    <img src="assets/images/about-campus.jpg" alt="Activity Hall" loading="lazy">
                    <div class="parshv-fac-overlay">
                        <div class="parshv-fac-icon"><i class="fa-solid fa-masks-theater"></i></div>
                        <h3 class="parshv-fac-title">Activity Hall & Auditorium</h3>
                        <p class="parshv-fac-desc">Multi-purpose cultural auditorium for debates and ceremonies.</p>
                    </div>
                </div>

                <!-- Facility 8 -->
                <div class="parshv-fac-card">
                    <img src="assets/images/fac-arts.jpg" alt="Music & Arts Studio" loading="lazy">
                    <div class="parshv-fac-overlay">
                        <div class="parshv-fac-icon"><i class="fa-solid fa-palette"></i></div>
                        <h3 class="parshv-fac-title">Music & Arts Studio</h3>
                        <p class="parshv-fac-desc">Vocal, instrumental, visual art, and classical dance studios.</p>
                    </div>
                </div>
            </div>

            <!-- CTA Under Facilities -->
            <div style="text-align: center; margin-top: 40px;">
                <a href="#admission-cta" class="parshv-btn-primary">
                    <i class="fa-solid fa-compass"></i>
                    <span>Explore Our Facilities & Book a Visit</span>
                </a>
            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 7: LEARNING BEYOND THE CLASSROOM
         ==================================================================== -->
    <section class="parshv-section parshv-section-light" id="beyond-classroom" aria-label="Beyond the Classroom Activities">
        <div class="parshv-container">
            <div class="parshv-section-header text-center">
                <span class="parshv-eyebrow-badge">
                    <i class="fa-solid fa-puzzle-piece"></i> BEYOND TEXTBOOKS
                </span>
                <h2 class="parshv-section-title">
                    Learning Doesn't Stop at the <span class="highlight">Classroom</span>
                </h2>
                <p class="parshv-section-subtitle">
                    Enriching students with real-world experiences, creative passions, sportsmanship, and leadership through diverse co-curricular programmes.
                </p>
            </div>

            <div class="parshv-activities-grid">
                <!-- Activity 1 -->
                <div class="parshv-activity-card">
                    <div class="parshv-activity-icon"><i class="fa-solid fa-trophy"></i></div>
                    <div>
                        <h3 class="parshv-activity-name">Sports & Games</h3>
                        <span class="parshv-activity-sub">Team sports & physical fitness</span>
                    </div>
                </div>

                <!-- Activity 2 -->
                <div class="parshv-activity-card">
                    <div class="parshv-activity-icon"><i class="fa-solid fa-music"></i></div>
                    <div>
                        <h3 class="parshv-activity-name">Music & Arts</h3>
                        <span class="parshv-activity-sub">Vocal, instrumental & fine arts</span>
                    </div>
                </div>

                <!-- Activity 3 -->
                <div class="parshv-activity-card">
                    <div class="parshv-activity-icon"><i class="fa-solid fa-masks-theater"></i></div>
                    <div>
                        <h3 class="parshv-activity-name">Cultural Activities</h3>
                        <span class="parshv-activity-sub">Festivals, theatre & heritage fests</span>
                    </div>
                </div>

                <!-- Activity 4 -->
                <div class="parshv-activity-card">
                    <div class="parshv-activity-icon"><i class="fa-solid fa-bus-simple"></i></div>
                    <div>
                        <h3 class="parshv-activity-name">Educational Tours</h3>
                        <span class="parshv-activity-sub">Field trips & scientific excursions</span>
                    </div>
                </div>

                <!-- Activity 5 -->
                <div class="parshv-activity-card">
                    <div class="parshv-activity-icon"><i class="fa-solid fa-medal"></i></div>
                    <div>
                        <h3 class="parshv-activity-name">Competitions</h3>
                        <span class="parshv-activity-sub">Debates, Olympiads & quizzes</span>
                    </div>
                </div>

                <!-- Activity 6 -->
                <div class="parshv-activity-card">
                    <div class="parshv-activity-icon"><i class="fa-solid fa-users-gear"></i></div>
                    <div>
                        <h3 class="parshv-activity-name">Leadership Activities</h3>
                        <span class="parshv-activity-sub">Student council & community initiatives</span>
                    </div>
                </div>

                <!-- Activity 7 -->
                <div class="parshv-activity-card">
                    <div class="parshv-activity-icon"><i class="fa-solid fa-microchip"></i></div>
                    <div>
                        <h3 class="parshv-activity-name">Science & Innovation</h3>
                        <span class="parshv-activity-sub">Coding, AI clubs & science fairs</span>
                    </div>
                </div>

                <!-- Activity 8 -->
                <div class="parshv-activity-card">
                    <div class="parshv-activity-icon"><i class="fa-solid fa-tree"></i></div>
                    <div>
                        <h3 class="parshv-activity-name">Outdoor Learning</h3>
                        <span class="parshv-activity-sub">Nature exploration & eco-club projects</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 8: DIRECTOR'S MESSAGE
         ==================================================================== -->
    <section class="parshv-section parshv-section-cream" id="director-message" aria-label="Director's Message">
        <div class="parshv-container">
            <div class="parshv-director-card">
                <div class="parshv-director-grid">
                    <!-- Director Photo -->
                    <div class="parshv-director-photo-wrap">
                        <img src="assets/images/director.jpg" alt="Narendra Jain - Director, Parshv International School" loading="lazy">
                        <div class="parshv-director-quote-badge">
                            <i class="fa-solid fa-quote-left"></i> LEADERSHIP DESK
                        </div>
                    </div>

                    <!-- Message Body -->
                    <div class="parshv-director-content">
                        <div class="parshv-director-quote-icon">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <span class="parshv-eyebrow-badge" style="align-self: flex-start; margin-bottom: 14px;">
                            MESSAGE FROM OUR DIRECTOR
                        </span>
                        <h3 style="font-size: 1.85rem; font-weight: 800; color: #ffffff; margin-bottom: 18px;">
                            Guiding Every Student Toward Meaningful Success
                        </h3>
                        <blockquote class="parshv-director-quote-text">
                            "Every child is unique. Our responsibility is to provide the environment, opportunities and guidance that help every student discover their strengths and build their future with confidence."
                        </blockquote>
                        <p style="font-size: 0.9375rem; color: #cbd5e1; line-height: 1.65; margin-bottom: 24px;">
                            At Parshv International School, our vision transcends traditional textbooks. We nurture principled character, emotional resilience, and visionary leadership to prepare students not just for examinations, but for life.
                        </p>

                        <div class="parshv-director-author">
                            <div>
                                <h4 class="parshv-director-name">Narendra Jain</h4>
                                <span class="parshv-director-role">Director, Parshv International School, Jodhpur</span>
                            </div>
                            <a href="#admission-cta" class="parshv-btn-primary" style="padding: 10px 22px; font-size: 0.875rem;">
                                <span>Read Full Message</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 9: ACHIEVEMENTS & RESULTS (CELEBRATING EXCELLENCE)
         ==================================================================== -->
    <section class="parshv-section parshv-section-light" id="achievements" aria-label="School Achievements">
        <div class="parshv-container">
            <div class="parshv-section-header text-center">
                <span class="parshv-eyebrow-badge">
                    <i class="fa-solid fa-trophy"></i> TRACK RECORD OF SUCCESS
                </span>
                <h2 class="parshv-section-title">
                    Celebrating <span class="highlight">Excellence</span>
                </h2>
                <p class="parshv-section-subtitle">
                    Recognizing the stellar triumphs of our students across board examinations, Olympiads, state sports meets, and national stages.
                </p>
            </div>

            <div class="parshv-achieve-grid">
                <!-- Achievement 1 -->
                <div class="parshv-achieve-card">
                    <div class="parshv-achieve-icon-box">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <span class="parshv-achieve-stat">100%</span>
                    <h3 class="parshv-achieve-title">Board Exam Results</h3>
                    <p class="parshv-achieve-desc">
                        Flawless 100% pass result in CBSE Class X & XII examinations with numerous 90%+ distinctions across Science, Commerce & Humanities.
                    </p>
                </div>

                <!-- Achievement 2 -->
                <div class="parshv-achieve-card">
                    <div class="parshv-achieve-icon-box">
                        <i class="fa-solid fa-medal"></i>
                    </div>
                    <span class="parshv-achieve-stat">45+</span>
                    <h3 class="parshv-achieve-title">Olympiad Top Ranks</h3>
                    <p class="parshv-achieve-desc">
                        Gold and silver medalists across International Mathematics, Science, English, and Cyber Olympiads year after year.
                    </p>
                </div>

                <!-- Achievement 3 -->
                <div class="parshv-achieve-card">
                    <div class="parshv-achieve-icon-box">
                        <i class="fa-solid fa-ranking-star"></i>
                    </div>
                    <span class="parshv-achieve-stat">30+</span>
                    <h3 class="parshv-achieve-title">Sports Championships</h3>
                    <p class="parshv-achieve-desc">
                        District, State, and National level championship titles in Cricket, Basketball, Athletics, Badminton, and Chess.
                    </p>
                </div>

                <!-- Achievement 4 -->
                <div class="parshv-achieve-card">
                    <div class="parshv-achieve-icon-box">
                        <i class="fa-solid fa-masks-theater"></i>
                    </div>
                    <span class="parshv-achieve-stat">25+</span>
                    <h3 class="parshv-achieve-title">Cultural & Debate Laurels</h3>
                    <p class="parshv-achieve-desc">
                        Top accolades in inter-school parliamentary debates, classical dance fests, painting exhibitions, and theatrical productions.
                    </p>
                </div>

                <!-- Achievement 5 -->
                <div class="parshv-achieve-card">
                    <div class="parshv-achieve-icon-box">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <span class="parshv-achieve-stat">15+</span>
                    <h3 class="parshv-achieve-title">Innovation & STEM Awards</h3>
                    <p class="parshv-achieve-desc">
                        Student-engineered robotics prototypes and AI models recognized at regional science innovation symposiums.
                    </p>
                </div>

                <!-- Achievement 6 -->
                <div class="parshv-achieve-card">
                    <div class="parshv-achieve-icon-box">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <span class="parshv-achieve-stat">Top 10</span>
                    <h3 class="parshv-achieve-title">Premier University Placements</h3>
                    <p class="parshv-achieve-desc">
                        Our alumni secure admissions into prestigious medical colleges, engineering institutes (IITs/NITs), and top commerce universities.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 10: STUDENT LIFE / GALLERY (LIFE AT PARSHV)
         ==================================================================== -->
    <section class="parshv-section parshv-section-alt" id="gallery" aria-label="Student Life Gallery">
        <div class="parshv-container">
            <div class="parshv-section-header text-center">
                <span class="parshv-eyebrow-badge">
                    <i class="fa-solid fa-camera"></i> CAMPUS MOMENTS
                </span>
                <h2 class="parshv-section-title">
                    Life at <span class="highlight">Parshv</span>
                </h2>
                <p class="parshv-section-subtitle">
                    A vibrant tapestry of morning assemblies, hands-on scientific discoveries, sporting achievements, and joyous cultural celebrations.
                </p>
            </div>

            <div class="parshv-gallery-grid">
                <!-- Gallery 1 -->
                <div class="parshv-gallery-item span-2">
                    <img src="assets/images/gallery-assembly.jpg" alt="Morning Assembly & Prayer" loading="lazy">
                    <div class="parshv-gallery-overlay">
                        <h4 class="parshv-gallery-caption-title">Morning Assembly & Prayer</h4>
                        <span class="parshv-gallery-caption-sub">Daily Inspiration & Unity</span>
                    </div>
                </div>

                <!-- Gallery 2 -->
                <div class="parshv-gallery-item">
                    <img src="assets/images/fac-smart-class.jpg" alt="Classroom Collaboration" loading="lazy">
                    <div class="parshv-gallery-overlay">
                        <h4 class="parshv-gallery-caption-title">Interactive Smart Classes</h4>
                        <span class="parshv-gallery-caption-sub">Engaged Learning</span>
                    </div>
                </div>

                <!-- Gallery 3 -->
                <div class="parshv-gallery-item">
                    <img src="assets/images/gallery-stem.jpg" alt="Science Exhibition" loading="lazy">
                    <div class="parshv-gallery-overlay">
                        <h4 class="parshv-gallery-caption-title">Science Lab & STEM</h4>
                        <span class="parshv-gallery-caption-sub">Hands-On Discovery</span>
                    </div>
                </div>

                <!-- Gallery 4 -->
                <div class="parshv-gallery-item">
                    <img src="assets/images/gallery-cultural.jpg" alt="Cultural Fest & Dance" loading="lazy">
                    <div class="parshv-gallery-overlay">
                        <h4 class="parshv-gallery-caption-title">Annual Cultural Fiesta</h4>
                        <span class="parshv-gallery-caption-sub">Creative Expression</span>
                    </div>
                </div>

                <!-- Gallery 5 -->
                <div class="parshv-gallery-item span-2">
                    <img src="assets/images/gallery-sports.jpg" alt="Annual Sports Day" loading="lazy">
                    <div class="parshv-gallery-overlay">
                        <h4 class="parshv-gallery-caption-title">Annual Sports Day</h4>
                        <span class="parshv-gallery-caption-sub">Athletic Championship</span>
                    </div>
                </div>

                <!-- Gallery 6 -->
                <div class="parshv-gallery-item">
                    <img src="assets/images/fac-arts.jpg" alt="Art & Craft Studio" loading="lazy">
                    <div class="parshv-gallery-overlay">
                        <h4 class="parshv-gallery-caption-title">Art & Craft Studio</h4>
                        <span class="parshv-gallery-caption-sub">Visual Creations</span>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 36px;">
                <a href="#admission-cta" class="parshv-btn-secondary">
                    <i class="fa-solid fa-images"></i>
                    <span>View Full Campus Gallery</span>
                </a>
            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 11: TESTIMONIALS (WHAT PARENTS SAY)
         ==================================================================== -->
    <section class="parshv-section parshv-section-light" id="testimonials" aria-label="Parent Testimonials">
        <div class="parshv-container">
            <div class="parshv-section-header text-center">
                <span class="parshv-eyebrow-badge">
                    <i class="fa-solid fa-heart"></i> PARENT EXPERIENCES
                </span>
                <h2 class="parshv-section-title">
                    What <span class="highlight">Parents Say</span>
                </h2>
                <p class="parshv-section-subtitle">
                    Real stories of trust, growth, and academic accomplishment shared by our beloved school community.
                </p>
            </div>

            <div class="parshv-testi-grid">
                <!-- Review 1 -->
                <div class="parshv-testi-card">
                    <div class="parshv-testi-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <blockquote class="parshv-testi-quote">
                        "Enrolling our son at Parshv International School was one of our best decisions. The teachers are exceptionally devoted, not just to textbook learning, but to developing his confidence and communication skills."
                    </blockquote>
                    <div class="parshv-testi-author">
                        <img src="assets/images/parent-1.jpg" alt="Sunita Sharma" class="parshv-testi-avatar">
                        <div>
                            <h4 class="parshv-testi-name">Sunita Sharma</h4>
                            <span class="parshv-testi-grade">Parent of Aarav (Class VIII)</span>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="parshv-testi-card">
                    <div class="parshv-testi-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <blockquote class="parshv-testi-quote">
                        "The science laboratory and robotics training have ignited a true passion for innovation in my daughter. The balance between CBSE board preparation and sporting activities is truly world-class."
                    </blockquote>
                    <div class="parshv-testi-author">
                        <img src="assets/images/parent-2.jpg" alt="Rajesh Mehta" class="parshv-testi-avatar">
                        <div>
                            <h4 class="parshv-testi-name">Rajesh Mehta</h4>
                            <span class="parshv-testi-grade">Parent of Ananya (Class X)</span>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="parshv-testi-card">
                    <div class="parshv-testi-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <blockquote class="parshv-testi-quote">
                        "The warm, caring environment in the primary wing made the transition so easy for our child. He looks forward to school every morning with a big smile and enthusiasm to learn!"
                    </blockquote>
                    <div class="parshv-testi-author">
                        <img src="assets/images/parent-3.jpg" alt="Pooja Verma" class="parshv-testi-avatar">
                        <div>
                            <h4 class="parshv-testi-name">Pooja Verma</h4>
                            <span class="parshv-testi-grade">Parent of Kabir (Class IV)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 12: LATEST NEWS & EVENTS
         ==================================================================== -->
    <section class="parshv-section parshv-section-alt" id="news-events" aria-label="School News and Events">
        <div class="parshv-container">
            <div class="parshv-section-header text-center">
                <span class="parshv-eyebrow-badge">
                    <i class="fa-solid fa-bullhorn"></i> HAPPENINGS ON CAMPUS
                </span>
                <h2 class="parshv-section-title">
                    What's Happening at <span class="highlight">Parshv?</span>
                </h2>
                <p class="parshv-section-subtitle">
                    Stay connected with recent celebrations, academic circulars, competition victories, and upcoming events.
                </p>
            </div>

            <div class="parshv-news-grid">
                <!-- Post 1 -->
                <div class="parshv-news-card">
                    <div class="parshv-news-image-wrap">
                        <img src="assets/images/event-1.jpg" alt="Annual Science & AI Exhibition 2026" loading="lazy">
                        <div class="parshv-news-date-badge">
                            <span class="day">15</span>
                            <span class="month">OCT</span>
                        </div>
                    </div>
                    <div class="parshv-news-body">
                        <span class="parshv-news-category">EVENTS & STEM</span>
                        <h3 class="parshv-news-title">Annual Inter-School Science & AI Exhibition 2026</h3>
                        <p class="parshv-news-desc">
                            Over 30 schools participated with cutting-edge working robotics prototypes, green energy models, and AI demonstrations.
                        </p>
                        <a href="#admission-cta" class="parshv-news-link">
                            <span>Read Full Story</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="parshv-news-card">
                    <div class="parshv-news-image-wrap">
                        <img src="assets/images/event-2.jpg" alt="CBSE National Olympiad Rankers" loading="lazy">
                        <div class="parshv-news-date-badge">
                            <span class="day">28</span>
                            <span class="month">SEP</span>
                        </div>
                    </div>
                    <div class="parshv-news-body">
                        <span class="parshv-news-category">ACHIEVEMENTS</span>
                        <h3 class="parshv-news-title">CBSE National Olympiad Winners Felicitated</h3>
                        <p class="parshv-news-desc">
                            Parshv students bagged top state ranks in National Cyber and Mathematics Olympiad examinations with distinction.
                        </p>
                        <a href="#admission-cta" class="parshv-news-link">
                            <span>Read Full Story</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="parshv-news-card">
                    <div class="parshv-news-image-wrap">
                        <img src="assets/images/event-3.jpg" alt="Admissions Open 2026-27" loading="lazy">
                        <div class="parshv-news-date-badge">
                            <span class="day">01</span>
                            <span class="month">SEP</span>
                        </div>
                    </div>
                    <div class="parshv-news-body">
                        <span class="parshv-news-category">ADMISSIONS</span>
                        <h3 class="parshv-news-title">Admissions Open for Academic Session 2026–27</h3>
                        <p class="parshv-news-desc">
                            Online registrations and campus tour bookings are now open for Play Group through Class XI across Science, Commerce & Arts.
                        </p>
                        <a href="#admission-cta" class="parshv-news-link">
                            <span>Read Full Story</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 13: ADMISSION CTA (FINAL HIGH-CONVERSION BANNER)
         ==================================================================== -->
    <section class="parshv-section parshv-section-light" id="admission-cta" aria-label="Admissions Call to Action">
        <div class="parshv-container">
            <div class="parshv-cta-card">
                <div class="parshv-cta-glow-1"></div>
                <div class="parshv-cta-glow-2"></div>
                <div class="parshv-cta-content">
                    <span class="parshv-eyebrow-badge" style="background: rgba(255,255,255,0.15); color: #fdbb2d; border-color: rgba(255,255,255,0.3);">
                        <i class="fa-solid fa-sparkles"></i> ADMISSIONS 2026–27 OPEN
                    </span>
                    <h2 class="parshv-cta-title">
                        Give Your Child the <span style="color: #fdbb2d;">Right Start</span>
                    </h2>
                    <p class="parshv-cta-desc">
                        Discover an environment where curiosity is encouraged, talent is nurtured and every child is prepared for a brighter, confident future.
                    </p>

                    <div class="parshv-cta-actions">
                        <a href="#enquiry-form" class="parshv-btn-primary" style="padding: 14px 34px; font-size: 1rem;">
                            <i class="fa-solid fa-file-signature"></i>
                            <span>Apply for Admission</span>
                        </a>
                        <a href="tel:+919876543210" class="parshv-btn-outline-white" style="padding: 14px 30px; font-size: 1rem;">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span>Book a Campus Visit</span>
                        </a>
                        <a href="https://wa.me/919876543210" target="_blank" rel="noopener noreferrer" class="parshv-btn-secondary" style="padding: 14px 28px; font-size: 1rem;">
                            <i class="fa-brands fa-whatsapp" style="color: #25D366;"></i>
                            <span>Contact Admissions</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>