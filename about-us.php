<?php
/**
 * About Us Page - Advaita School of Excellence, Parbhani
 * CBSE Affiliated (Affiliation No. 1130920)
 * Clean Semantic Layout matching the Official Design
 */
$pageTitle = "About Us - Advaita School of Excellence, Parbhani | Premier CBSE School";
$activePage = "about";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper about-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Welcome to A Premier CBSE School with a Stronger Purpose
         ========================================================================= -->
    <section class="about-hero-section">
        <div class="about-hero-canvas">
            <!-- Background Image & Sky on the Right -->
            <div class="about-hero-bg-visual">
                <img src="assets/images/about-hero-building.jpg" alt="Advaita School of Excellence Campus" class="about-hero-bg-img" loading="eager">
                <!-- Floating Script Badge in Sky -->
                <div class="about-hero-script-tag">
                    <span class="script-title">More<br>Than A School</span>
                    <svg class="script-underline" viewBox="0 0 140 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 10C36 4 98 4 136 12" stroke="#F37021" stroke-width="3.5" stroke-linecap="round"/>
                        <path d="M18 14C48 9 92 8 126 15" stroke="#F37021" stroke-width="2.5" stroke-linecap="round" opacity="0.75"/>
                    </svg>
                </div>
            </div>

            <!-- Left Organic White Panel with Curved Boundary -->
            <div class="about-hero-left-panel">
                <div class="about-hero-content-inner">
                    <span class="about-eyebrow">— WELCOME TO —</span>
                    <h1 class="about-hero-title">
                        A Premier<br>
                        CBSE School with a<br>
                        <span class="about-text-orange">Stronger Purpose.</span>
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
                        At Advaita School of Excellence, we go beyond textbooks to create a learning environment where curiosity is encouraged, confidence is built, and every child is empowered to achieve their true potential.
                    </p>

                    <div class="about-hero-actions">
                        <a href="index.php#admissions" class="about-btn-orange">
                            Book a Campus Visit <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#vision-mission" class="about-btn-vision">
                            <span class="vision-play-circle"><i class="fa-solid fa-play"></i></span>
                            <span>Our Vision</span>
                        </a>
                    </div>
                </div>

                <!-- Organic Wave Edge SVG -->
                <div class="about-hero-wave-edge" aria-hidden="true">
                    <svg viewBox="0 0 100 600" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Soft sky-blue glow wave -->
                        <path d="M0 0 C35 80 85 160 85 270 C85 390 30 480 75 600 L0 600 Z" fill="#d8ecff" opacity="0.6"/>
                        <!-- White solid wave -->
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
                        <img src="assets/images/about-philosophy-student.jpg" alt="Student of Advaita School of Excellence" class="about-story-img" loading="lazy">
                        <!-- Floating Bottom Badge -->
                        <div class="about-story-floating-badge">
                            <div class="story-badge-trophy">
                                <i class="fa-solid fa-trophy"></i>
                            </div>
                            <div class="story-badge-text">
                                <span class="story-badge-bold">Best CBSE</span>
                                <span class="story-badge-bold">Result Producer</span>
                                <span class="story-badge-sub">Year after Year</span>
                            </div>
                            <div class="story-badge-arrow">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Story Content & Stats -->
                <div class="about-story-content">
                    <span class="about-eyebrow">— BUILT ON A STRONG FOUNDATION —</span>
                    <h2 class="about-story-title">
                        Built on Values.<br>
                        Driven by <span class="about-text-orange">Academic Excellence.</span>
                    </h2>
                    
                    <p class="about-story-desc">
                        At Advaita School of Excellence, we blend academic rigor, character development, and future-focused learning to help every child grow into a confident, compassionate, and capable individual.
                    </p>
                    
                    <p class="about-story-desc">
                        Our focus on NEET/IIT foundation and various competitive exams, along with a strong CBSE curriculum, ensures that students are well-prepared for higher education and life's opportunities.
                    </p>

                    <!-- Stats Row -->
                    <div class="about-stats-row">
                        <div class="about-stat-item">
                            <div class="stat-icon-square">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="stat-meta">
                                <span class="stat-num">5000+</span>
                                <span class="stat-lbl">Happy Students</span>
                            </div>
                        </div>

                        <div class="about-stat-item">
                            <div class="stat-icon-square stat-icon-badge">
                                <span class="stat-badge-inner">25+</span>
                            </div>
                            <div class="stat-meta">
                                <span class="stat-num">25+</span>
                                <span class="stat-lbl">Years of Academic Legacy</span>
                            </div>
                        </div>

                        <div class="about-stat-item">
                            <div class="stat-icon-square">
                                <i class="fa-regular fa-face-smile"></i>
                            </div>
                            <div class="stat-meta">
                                <span class="stat-num">95%</span>
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
                        <p class="about-vmv-desc">To nurture confident, curious and responsible global citizens equipped to excel in academics and life.</p>
                    </div>
                </div>

                <!-- Card 2: Mission -->
                <div class="about-vmv-card">
                    <div class="about-vmv-icon-ring">
                        <i class="fa-solid fa-rocket"></i>
                    </div>
                    <div class="about-vmv-body">
                        <h3 class="about-vmv-title">Our Mission</h3>
                        <p class="about-vmv-desc">To provide a safe, value-based learning environment with academic excellence, modern facilities and holistic growth opportunities.</p>
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
                <!-- Left: Content -->
                <div class="about-philosophy-content">
                    <span class="about-eyebrow">— PREPARING FOR A BRIGHTER TOMORROW —</span>
                    <h2 class="about-philosophy-title">
                        Education for<br>
                        Life, <span class="about-text-orange">Not Just Exams.</span>
                    </h2>
                    <p class="about-philosophy-desc">
                        We integrate CBSE academics with a focused NEET/IIT foundation and training for various competitive exams. Our student-centric approach ensures conceptual clarity, critical thinking, and real-world application — helping students achieve success in academics and beyond.
                    </p>
                    <div class="about-philosophy-action">
                        <a href="index.php#academics" class="about-btn-orange">
                            Our Academics <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Right: 6 Feature Pills Stack -->
                <div class="about-philosophy-pills-col">
                    <div class="about-philosophy-pills-stack">
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
                    <span class="about-eyebrow">— A SPACE TO GROW —</span>
                    <h2 class="about-campus-title">
                        A Space to Learn,<br>
                        <span class="about-text-orange">Explore and Excel.</span>
                    </h2>
                    <p class="about-campus-desc">
                        Our modern campus is designed to inspire curiosity, encourage collaboration, and provide the best learning experience. From spacious classrooms to advanced labs and vibrant activity spaces, every corner of Advaita nurtures growth and opportunity.
                    </p>
                    <a href="index.php#facilities" class="about-btn-orange">
                        Explore Our Campus <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Right: Visual with Floating Card -->
                <div class="about-campus-visual-wrap">
                    <div class="about-campus-frame">
                        <img src="assets/images/about-campus-courtyard.jpg" alt="Advaita School Modern Campus Courtyard" class="about-campus-img" loading="lazy">
                    </div>
                    <!-- Floating Campus Badge -->
                    <div class="about-floating-campus-card">
                        <img src="assets/images/campus-visit-building.jpg" alt="Campus Thumbnail" class="campus-thumb">
                        <div class="campus-thumb-text">
                            <strong>Modern Campus</strong>
                            <span>for Holistic Growth</span>
                        </div>
                        <a href="index.php#facilities" class="campus-thumb-arrow" aria-label="Explore Campus Facilities">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         7. CTA BANNER: Together, let's build brighter tomorrows
         ========================================================================= -->
    <section class="about-cta-banner">
        <!-- Organic Sky-Blue Wave Top -->
        <div class="about-cta-wave-top" aria-hidden="true">
            <svg viewBox="0 0 1440 60" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 35C240 65 520 10 880 30C1100 42 1280 15 1440 30V60H0V35Z" fill="#e6f3fd"/>
            </svg>
        </div>

        <div class="about-cta-box">
            <div class="about-cta-content">
                <div class="about-cta-text-wrap">
                    <span class="about-cta-eyebrow">BE A PART OF ADVAITA</span>
                    <h2 class="about-cta-title">Together, let's build brighter tomorrows.</h2>
                    <p class="about-cta-desc">Admissions are open for CBSE, NEET/IIT Foundation &amp; Competitive Exam Programmes.</p>
                    <div class="about-cta-actions">
                        <a href="index.php#admissions" class="about-btn-orange">
                            Enquire Now <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="index.php#contact" class="about-btn-white-pill">
                            <i class="fa-regular fa-calendar-check"></i>
                            Schedule a Campus Visit
                        </a>
                    </div>
                </div>
            </div>
            <div class="about-cta-students-wrap">
                <img src="assets/images/about-cta-students-final.jpg" alt="Advaita School Students" class="about-cta-students-img" loading="lazy">
            </div>
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
