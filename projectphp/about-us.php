<?php
/**
 * About Us Page - Advaita School of Excellence, Parbhani
 * CBSE Affiliated (Affiliation No. 1130920)
 * Clean Semantic Layout matching the Official Design
 */
$pageTitle = 'About Us - Advaita School of Excellence, Parbhani | Premier CBSE School';
$activePage = 'about';

require_once __DIR__.'/includes/header.php';
?>
<link rel="stylesheet" href="assets/css/about-us.css?v=<?php echo file_exists(__DIR__.'/assets/css/about-us.css') ? filemtime(__DIR__.'/assets/css/about-us.css') : '1'; ?>">

<main id="main" class="main-content-wrapper about-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Breadcrumb + Title + Affiliation & 4 Stages Showcase
         ========================================================================= -->
    <section class="about-hero-section">
        <div class="about-hero-canvas">
            <!-- Background School Building on the Right -->
            <div class="about-hero-bg-visual" aria-hidden="true">
                <img src="assets/images/about-hero-building.jpg" 
                     alt="Advaita School of Excellence Campus" 
                     class="about-hero-bg-img" 
                     loading="eager">
                <div class="about-hero-bg-overlay"></div>
            </div>

            <!-- Two-Column Hero Grid: Content (Left) + Affiliation & 4 Stages Card (Right) -->
            <div class="about-hero-inner-grid">
                <!-- Left Content Panel -->
                <div class="about-hero-left-panel">
                    <div class="about-hero-content-inner">
                        <!-- Breadcrumbs (No duplicate "About Us" label or dashes) -->
                        <nav class="about-breadcrumb" aria-label="Breadcrumb">
                            <a href="index.php">Home</a>
                            <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                            <span class="active">About Us</span>
                        </nav>

                        <!-- Main Headline -->
                        <h1 class="about-hero-title">
                            Advaita School of Excellence,<br>
                            <span class="highlight-orange">Parbhani</span>
                        </h1>

                        <!-- Bold Tagline -->
                        <div class="about-hero-tagline">
                            Nurturing Excellence. Inspiring Innovation.<br>Shaping Futures.
                        </div>

                        <!-- Description -->
                        <p class="about-hero-desc">
                            Established in 2016 under the visionary leadership of Mr. Vishal Vattamwar, Chairman of Sanmati Sevabhavi Sanstha, Advaita School of Excellence, Parbhani, was founded to bring quality education to every student in Parbhani.
                        </p>

                        <!-- Affiliation Mini Highlight Pill -->
                        <div class="about-hero-aff-pill">
                            <i class="fa-solid fa-certificate"></i>
                            <span>CBSE Affiliated &bull; Affiliation No. 1130920 &bull; School Code: 30882</span>
                        </div>
                    </div>
                </div>

                <!-- Right Feature Panel (Fills the space beside the text) -->
                <div class="about-hero-right-panel">
                    <div class="about-hero-features-card">
                        
                        <!-- Top: CBSE Affiliation Highlight -->
                        <div class="hero-aff-card">
                            <div class="hero-aff-icon">
                                <i class="fa-solid fa-school-flag"></i>
                            </div>
                            <div class="hero-aff-content">
                                <span class="hero-aff-kicker">OFFICIAL AFFILIATION</span>
                                <h3 class="hero-aff-title">CBSE Affiliated Institution</h3>
                                <p class="hero-aff-meta">
                                    <span><strong>Affiliation No:</strong> 1130920</span>
                                    <span class="meta-dot">&bull;</span>
                                    <span><strong>School Code:</strong> 30882</span>
                                </p>
                                <span class="hero-aff-scope">Play Group to Class X &bull; Central Board of Secondary Education, New Delhi</span>
                            </div>
                        </div>

                        <!-- Bottom: Four Stages of Education -->
                        <div class="hero-stages-card">
                            <div class="hero-stages-header">
                                <i class="fa-solid fa-layer-group"></i>
                                <span>4 STAGES WE PROVIDE (NEP 2020)</span>
                            </div>

                            <div class="hero-stages-grid">
                                <!-- 1. Foundational -->
                                <div class="hero-stage-badge stage-orange">
                                    <div class="stage-num">01</div>
                                    <div class="stage-text">
                                        <strong class="stage-name">Foundational Stage</strong>
                                        <span class="stage-level">Play Group &bull; Nursery &bull; LKG &bull; UKG &bull; Grades 1–2</span>
                                    </div>
                                </div>

                                <!-- 2. Preparatory -->
                                <div class="hero-stage-badge stage-blue">
                                    <div class="stage-num">02</div>
                                    <div class="stage-text">
                                        <strong class="stage-name">Preparatory Stage</strong>
                                        <span class="stage-level">Grades 3 to 5 (Classes III–V)</span>
                                    </div>
                                </div>

                                <!-- 3. Middle -->
                                <div class="hero-stage-badge stage-green">
                                    <div class="stage-num">03</div>
                                    <div class="stage-text">
                                        <strong class="stage-name">Middle Stage</strong>
                                        <span class="stage-level">Grades 6 to 8 (Classes VI–VIII)</span>
                                    </div>
                                </div>

                                <!-- 4. Secondary -->
                                <div class="hero-stage-badge stage-purple">
                                    <div class="stage-num">04</div>
                                    <div class="stage-text">
                                        <strong class="stage-name">Secondary Stage</strong>
                                        <span class="stage-level">Grades 9 &amp; 10 (Classes IX–X)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    <span class="about-eyebrow">BUILT ON A STRONG FOUNDATION</span>
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
                    <span class="about-eyebrow">PREPARING FOR A BRIGHTER TOMORROW</span>
                    <h2 class="about-philosophy-title">
                        Education for<br>
                        Life, <span class="about-text-orange">Not Just Exams.</span>
                    </h2>
                    <p class="about-philosophy-desc">
                        We integrate CBSE academics with a focused NEET/IIT foundation and training for various competitive exams. Our student-centric approach ensures conceptual clarity, critical thinking, and real-world application — helping students achieve success in academics and beyond.
                    </p>
                    <div class="about-philosophy-action">
                        <a href="index.php#academics" class="about-btn-orange">
                            <span>Our Academics</span>
                            <i class="fa-solid fa-arrow-right"></i>
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
                <span class="about-eyebrow">WHAT SETS US APART</span>
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
                    <span class="about-campus-eyebrow">A SPACE TO GROW</span>
                    <h2 class="about-campus-title">
                        A Space to Learn,<br>
                        <span class="about-text-orange">Explore and Excel.</span>
                    </h2>
                    <p class="about-campus-desc">
                        Our modern campus is designed to inspire curiosity, encourage collaboration, and provide the best learning experience. From spacious classrooms to advanced labs and vibrant activity spaces, every corner of Advaita nurtures growth and opportunity.
                    </p>
                    <a href="index.php#facilities" class="about-btn-orange">
                        <span>Explore Our Campus</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Right: Visual with Sky-Blue Offset Accent Frame & Floating Card -->
                <div class="about-campus-visual-wrap">
                    <div class="about-campus-accent-border"></div>
                    <div class="about-campus-frame">
                        <img src="assets/images/about-campus-courtyard.jpg" alt="Advaita School Modern Campus Courtyard" class="about-campus-img" loading="lazy">
                    </div>
                    <!-- Floating Campus Badge -->
                    <div class="about-floating-campus-card">
                        <img src="assets/images/about-campus-courtyard.jpg" alt="Modern Campus" class="campus-thumb">
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
                    BE A PART OF ADVAITA
                </div>

                <!-- Heading -->
                <h2 class="headline">
                    Together, let's build brighter tomorrows.
                </h2>

                <!-- Description -->
                <p class="subtext">
                    Admissions are open for CBSE, NEET/IIT Foundation &amp; Competitive Exam Programmes.
                </p>

                <!-- Buttons -->
                <div class="buttons">
                    <!-- Enrol Button -->
                    <a href="contact.php" class="btn-enrol">
                        <span>Enquire Now</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <!-- School Visit -->
                    <a href="contact.php" class="btn-visit">
                        <i class="fa-regular fa-calendar-days"></i>
                        <span>Schedule a Campus Visit</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Students Image -->
        <div class="students">
            <img src="assets/images/about-cta-students-trio.png?v=<?php echo filemtime(__DIR__.'/assets/images/about-cta-students-trio.png'); ?>" alt="Advaita Students" loading="lazy">
        </div>
    </section>

</main>

<?php
require_once __DIR__.'/includes/footer.php';
?>
