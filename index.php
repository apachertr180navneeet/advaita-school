<?php
/**
 * Home Page - Advaita School of Excellence
 * Modern, Premium, Clean and Responsive School Website UI
 */
$pageTitle = "Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)";
$activePage = "index";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper">

    <!-- ====================================================================
         SECTION 1: HERO SECTION & SLIDER
         ==================================================================== -->
    <section class="adv-hero-slider-section" aria-label="Advaita School of Excellence Hero Banner">
        <div class="adv-slider-container">
            <div class="adv-slider-wrapper">

                <!-- ----------------------------------------------------
                     SLIDE 1: Main Banner (Building Curious Minds)
                     ---------------------------------------------------- -->
                <div class="adv-slide active" data-slide-index="0">
                    <div class="adv-slide-banner-wrap">
                        <img src="assets/images/hero-slider-main.jpg" alt="Advaita School of Excellence - Building Curious Minds. Shaping Confident Futures." class="adv-slide-banner-img" loading="eager">
                        
                        <!-- Real Interactive Hero Action Buttons -->
                        <div class="adv-banner-hero-actions">
                            <a href="admissions.php" class="adv-hero-real-btn adv-hero-btn-apply" title="Apply for Admission">
                                <span>Apply for Admission</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="about-us.php" class="adv-hero-real-btn adv-hero-btn-explore" title="Explore Our School">
                                <span>Explore Our School</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ----------------------------------------------------
                     SLIDE 2: CBSE Results 2025-26 (Proud Achievers)
                     ---------------------------------------------------- -->
                <div class="adv-slide" data-slide-index="1">
                    <div class="adv-slide-banner-wrap">
                        <img src="assets/images/hero-slider-results.jpg" alt="Advaita School of Excellence - CBSE Results 2025-26 Proud Achievers" class="adv-slide-banner-img" loading="lazy">
                        <!-- Real Interactive Hero Action Buttons -->
                        <div class="adv-banner-hero-actions">
                            <a href="admissions.php" class="adv-hero-real-btn adv-hero-btn-apply" title="Apply for Admission">
                                <span>Apply for Admission</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="about-us.php" class="adv-hero-real-btn adv-hero-btn-explore" title="Explore Our School">
                                <span>Explore Our School</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Slider Arrows -->
            <button type="button" class="adv-slider-arrow prev-arrow" aria-label="Previous Slide">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button type="button" class="adv-slider-arrow next-arrow" aria-label="Next Slide">
                <i class="fa-solid fa-chevron-right"></i>
            </button>

            <!-- Slider Dots -->
            <div class="adv-slider-dots" role="tablist" aria-label="Slide Selection">
                <button type="button" class="adv-slider-dot active" role="tab" aria-selected="true" aria-label="Slide 1"></button>
                <button type="button" class="adv-slider-dot" role="tab" aria-selected="false" aria-label="Slide 2"></button>
            </div>
        </div>
    </section>

    <!-- Mobile Quick Action CTA Bar (Visible on Mobile & Tablet) -->
    <div class="adv-mobile-hero-cta-bar">
        <a href="admissions.php" class="adv-mobile-hero-btn primary">
            <i class="fa-solid fa-paper-plane"></i>
            <span>Apply for Admission</span>
        </a>
        <a href="about-us.php" class="adv-mobile-hero-btn secondary">
            <i class="fa-solid fa-compass"></i>
            <span>Explore Our School</span>
        </a>
    </div>


    <!-- ====================================================================
         SECTION 2: QUICK INFORMATION / HIGHLIGHTS STATS STRIP (5 STATS)
         ==================================================================== -->
    <section class="parshv-stats-section" aria-label="School Key Highlights">
        <div class="parshv-container">
            <div class="parshv-stats-grid five-cols">
                <!-- Stat 1: 100% Class 10th Result -->
                <div class="parshv-stat-card">
                    <div class="parshv-stat-icon-wrap trophy-icon">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <div class="parshv-stat-info">
                        <span class="parshv-stat-num">100%</span>
                        <span class="parshv-stat-label">Class 10th Result (2025–26)</span>
                    </div>
                </div>

                <!-- Stat 2: 15+ Students Scored 90%+ -->
                <div class="parshv-stat-card">
                    <div class="parshv-stat-icon-wrap team-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="parshv-stat-info">
                        <span class="parshv-stat-num">15+</span>
                        <span class="parshv-stat-label">Students Scored 90% and Above</span>
                    </div>
                </div>

                <!-- Stat 3: 8+ Students Scored 80%+ -->
                <div class="parshv-stat-card">
                    <div class="parshv-stat-icon-wrap chart-icon">
                        <i class="fa-solid fa-chart-column"></i>
                    </div>
                    <div class="parshv-stat-info">
                        <span class="parshv-stat-num">8+</span>
                        <span class="parshv-stat-label">Students Scored 80% and Above</span>
                    </div>
                </div>

                <!-- Stat 4: 35% in 90%+ Bracket -->
                <div class="parshv-stat-card">
                    <div class="parshv-stat-icon-wrap group-icon">
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                    <div class="parshv-stat-info">
                        <span class="parshv-stat-num">35%</span>
                        <span class="parshv-stat-label">Students in 90%+ Bracket</span>
                    </div>
                </div>

                <!-- Stat 5: Back-to-Back 100% Results -->
                <div class="parshv-stat-card">
                    <div class="parshv-stat-icon-wrap badge-icon">
                        <i class="fa-solid fa-certificate"></i>
                    </div>
                    <div class="parshv-stat-info">
                        <span class="parshv-stat-sub-badge">Back-to-Back</span>
                        <span class="parshv-stat-num">100%</span>
                        <span class="parshv-stat-label">Results</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 3: WELCOME / ABOUT SCHOOL SECTION (DESIGN SPEC)
         ==================================================================== -->
    <section class="adv-welcome-section" id="about-school" aria-label="About Advaita School of Excellence">
        <!-- Subtle decorative leaf watermark in top right -->
        <div class="adv-welcome-watermark-leaves" aria-hidden="true">
            <svg width="220" height="180" viewBox="0 0 220 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M195 20C145 35 115 85 125 155C155 130 195 115 210 60C215 35 210 20 195 20Z" fill="#D0E3F5" fill-opacity="0.45"/>
                <path d="M125 10C95 50 88 110 115 165C138 130 165 102 158 48C150 20 138 10 125 10Z" fill="#BBD7EE" fill-opacity="0.35"/>
                <path d="M68 35C45 75 58 130 92 170C108 135 120 108 108 68C95 40 82 35 68 35Z" fill="#D0E3F5" fill-opacity="0.38"/>
            </svg>
        </div>

        <div class="adv-welcome-container">
            <div class="adv-welcome-grid">
                
                <!-- Left Visual with School Campus and Excellence Script Overlay -->
                <div class="adv-welcome-visual-col">
                    <div class="adv-welcome-image-card">
                        <img src="assets/images/about-advaita-visual.jpg" alt="Advaita School of Excellence Campus - Excellence in Every Child" class="adv-welcome-img" loading="lazy">
                        
                        <!-- Curved Swoosh Edge overlay for organic transition on desktop -->
                        <div class="adv-welcome-curve-mask" aria-hidden="true"></div>
                    </div>
                </div>

                <!-- Right Content Column -->
                <div class="adv-welcome-content-col">
                    
                    <!-- Eyebrow Pill Badge -->
                    <div class="adv-welcome-pill-badge">
                        <i class="fa-solid fa-landmark"></i>
                        <span>ABOUT OUR SCHOOL</span>
                    </div>

                    <!-- Main Section Heading -->
                    <h2 class="adv-welcome-heading">
                        <span class="adv-heading-prefix">Welcome to</span>
                        <span class="adv-heading-brand">Advaita School of Excellence</span>
                    </h2>
                    <div class="adv-heading-underline-bar"></div>

                    <!-- Lead Quote Text -->
                    <p class="adv-welcome-quote">
                        &ldquo;At Advaita School of Excellence, we believe education is more than academic achievement. It is about developing confident, responsible and compassionate individuals who are prepared for the future.&rdquo;
                    </p>

                    <!-- Explanatory Paragraph -->
                    <p class="adv-welcome-desc">
                        Established with a deep commitment to educational excellence, Advaita School of Excellence provides a seamless educational journey from Play Group through Class XII. We harmonize rigorous CBSE academic standards with experiential learning, cultural values, and modern 21st-century competencies.
                    </p>

                    <!-- 4 Core Feature Badges (2x2 Grid) -->
                    <div class="adv-welcome-features-grid">
                        
                        <!-- Feature 1: Academic Excellence -->
                        <div class="adv-welcome-feature-item">
                            <div class="adv-feature-circle icon-orange">
                                <i class="fa-solid fa-book-open"></i>
                            </div>
                            <div class="adv-feature-info">
                                <h3 class="adv-feature-heading">Academic Excellence</h3>
                                <p class="adv-feature-subtext">Strong foundation for brighter futures</p>
                            </div>
                        </div>

                        <!-- Feature 2: Holistic Development -->
                        <div class="adv-welcome-feature-item">
                            <div class="adv-feature-circle icon-blue">
                                <i class="fa-solid fa-user-group"></i>
                            </div>
                            <div class="adv-feature-info">
                                <h3 class="adv-feature-heading">Holistic Development</h3>
                                <p class="adv-feature-subtext">Nurturing mind, body and character</p>
                            </div>
                        </div>

                        <!-- Feature 3: Safe & Supportive Campus -->
                        <div class="adv-welcome-feature-item">
                            <div class="adv-feature-circle icon-blue">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div class="adv-feature-info">
                                <h3 class="adv-feature-heading">Safe & Supportive Campus</h3>
                                <p class="adv-feature-subtext">A second home for every child</p>
                            </div>
                        </div>

                        <!-- Feature 4: Future-Ready Learning -->
                        <div class="adv-welcome-feature-item">
                            <div class="adv-feature-circle icon-amber">
                                <i class="fa-regular fa-lightbulb"></i>
                            </div>
                            <div class="adv-feature-info">
                                <h3 class="adv-feature-heading">Future-Ready Learning</h3>
                                <p class="adv-feature-subtext">Skills for a changing world</p>
                            </div>
                        </div>

                    </div>

                    <!-- Bottom Action Buttons -->
                    <div class="adv-welcome-actions">
                        <a href="about-us.php" class="adv-btn-welcome-orange">
                            <span>Know More About Us</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="facilities.php" class="adv-btn-welcome-outline">
                            <i class="fa-solid fa-landmark"></i>
                            <span>Take a Campus Tour</span>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 4: WHAT MAKES ADVAITA SPECIAL (THREE PILLARS)
         ==================================================================== -->
    <section class="adv-pillars-section" id="why-parshv" aria-label="What Makes Advaita Special - Three Pillars">
        <div class="adv-pillars-container">
            
            <!-- Section Header -->
            <div class="adv-pillars-header text-center">
                <div class="adv-pillars-eyebrow">
                    <i class="fa-solid fa-landmark"></i>
                    <span>WHAT MAKES ADVAITA SPECIAL</span>
                </div>
                <h2 class="adv-pillars-title">
                    <span class="title-dark">Three pillars that shape</span>
                    <span class="title-orange">brighter futures.</span>
                </h2>
                <div class="adv-pillars-underline-bar"></div>
                <p class="adv-pillars-subtitle">
                    At Advaita, everything we do is driven by a clear purpose — to create an environment where children learn, grow, and discover their unique potential.
                </p>
            </div>

            <!-- 3 Modern Pillar Cards -->
            <div class="adv-pillars-grid">
                
                <!-- Pillar 01: Labs & Smart Classrooms (Orange) -->
                <div class="adv-pillar-card theme-orange">
                    <div class="adv-pillar-image-wrap">
                        <img src="assets/images/pillar-card-1.jpg" alt="Future-ready Labs & Smart Classrooms" class="adv-pillar-img" loading="lazy">
                        <div class="adv-pillar-num-badge">01</div>
                        <div class="adv-pillar-floating-icon orange">
                            <i class="fa-solid fa-microscope"></i>
                        </div>
                    </div>
                    <div class="adv-pillar-content">
                        <h3 class="adv-pillar-heading">Future-ready Labs &amp; Smart Classrooms</h3>
                        <p class="adv-pillar-desc">
                            From robotics for the youngest to digital language for senior school — learning that comes alive when you can touch it.
                        </p>
                        <div class="adv-pillar-tags-grid">
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-robot"></i>
                                <span>Robotics Lab</span>
                            </div>
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-display"></i>
                                <span>Computer Lab</span>
                            </div>
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-flask"></i>
                                <span>Science Lab</span>
                            </div>
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-calculator"></i>
                                <span>Digital Maths Lab</span>
                            </div>
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-earth-americas"></i>
                                <span>Language Lab</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pillar 02: Vibrant Year-round Calendar (Blue) -->
                <div class="adv-pillar-card theme-blue">
                    <div class="adv-pillar-image-wrap">
                        <img src="assets/images/pillar-card-2.jpg" alt="A Vibrant Year-round Calendar" class="adv-pillar-img" loading="lazy">
                        <div class="adv-pillar-num-badge">02</div>
                        <div class="adv-pillar-floating-icon blue">
                            <i class="fa-solid fa-user-group"></i>
                        </div>
                    </div>
                    <div class="adv-pillar-content">
                        <h3 class="adv-pillar-heading">A Vibrant Year-round Calendar</h3>
                        <p class="adv-pillar-desc">
                            Beyond books — the sports, music, art and travel that turn a school into a community.
                        </p>
                        <div class="adv-pillar-tags-grid">
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-trophy"></i>
                                <span>Sports &amp; Games</span>
                            </div>
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-music"></i>
                                <span>Cultural Programs</span>
                            </div>
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-palette"></i>
                                <span>Co-Curricular</span>
                            </div>
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-bus"></i>
                                <span>Educational Tours</span>
                            </div>
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-campground"></i>
                                <span>Night Camps</span>
                            </div>
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-medal"></i>
                                <span>Inter-School Competitions</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pillar 03: Five Quiet Promises (Teal/Green) -->
                <div class="adv-pillar-card theme-teal">
                    <div class="adv-pillar-image-wrap">
                        <img src="assets/images/pillar-card-3.jpg" alt="Five Quiet Promises" class="adv-pillar-img" loading="lazy">
                        <div class="adv-pillar-num-badge">03</div>
                        <div class="adv-pillar-floating-icon teal">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                    </div>
                    <div class="adv-pillar-content">
                        <h3 class="adv-pillar-heading">Five Quiet Promises</h3>
                        <p class="adv-pillar-desc">
                            The things parents tell us make the difference — small in description, big in daily impact.
                        </p>
                        <div class="adv-pillar-tags-grid">
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                <span>Experienced Faculty</span>
                            </div>
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-display"></i>
                                <span>Smart Classes</span>
                            </div>
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-shield"></i>
                                <span>Safe Environment</span>
                            </div>
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-heart"></i>
                                <span>Value-Based Education</span>
                            </div>
                            <div class="adv-pillar-tag">
                                <i class="fa-solid fa-school"></i>
                                <span>All-in-One Campus</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom CTA Button -->
            <div class="adv-pillars-cta-wrap text-center">
                <a href="about-us.php" class="adv-btn-pillars-primary">
                    <span>Discover the Advaita Difference</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>
    </section>


    <!-- ====================================================================
         SECTION 5: WHY CHOOSE ADVAITA? (MATCHING DESIGN SPEC)
         ==================================================================== -->
    <section class="adv-why-section" id="why-choose" aria-label="Why Choose Advaita School of Excellence">
        
        <!-- Subtle text watermarks and background accents -->
        <div class="adv-why-watermark-left" aria-hidden="true">
            <span>L E A R N</span>
            <span>G R O W</span>
            <span>B E L O N G</span>
            <span>E X C E L</span>
        </div>

        <div class="adv-why-watermark-right" aria-hidden="true">
            <div class="adv-why-cursive-wrap">
                <span class="adv-why-cursive-text">Excellence<br><em>in Every Child</em></span>
                <svg width="110" height="14" viewBox="0 0 110 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 4C35 12 75 13 107 5" stroke="#F37021" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
            </div>
        </div>

        <div class="adv-why-container">
            
            <!-- Section Header -->
            <div class="adv-why-header text-center">
                <div class="adv-why-eyebrow">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span>WHY CHOOSE ADVAITA?</span>
                </div>
                <h2 class="adv-why-title">
                    <span class="title-dark">Why Choose</span>
                    <span class="title-orange">Advaita?</span>
                </h2>
                <div class="adv-why-underline-bar"></div>
                <p class="adv-why-subtitle">
                    A nurturing and future-focused ecosystem designed to ignite curiosity, instill integrity, and inspire every child to excel.
                </p>
            </div>

            <!-- 6 Modern Advantage Cards (Slider) -->
            <div class="adv-why-slider-wrap">

                <!-- Left Nav Arrow -->
                <button type="button" class="adv-why-arrow prev" aria-label="Previous card">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <div class="adv-why-slider-viewport">
                    <div class="adv-why-grid six-cards">
                
                        <!-- Card 01: Holistic Education (Orange) -->
                        <div class="adv-why-card theme-orange">
                            <div class="adv-why-image-wrap">
                                <img src="assets/images/adv-choose-1.jpg" alt="Holistic Education at Advaita" class="adv-why-img" loading="lazy">
                                <div class="adv-why-num-badge">01</div>
                                <div class="adv-why-floating-icon orange">
                                    <i class="fa-solid fa-book-open"></i>
                                </div>
                            </div>
                            <div class="adv-why-content">
                                <h3 class="adv-why-card-title">Holistic Education</h3>
                                <p class="adv-why-card-desc">
                                    A balanced integration of academic excellence, cultural arts, athletic fitness, and moral leadership for all-round personality development.
                                </p>
                            </div>
                        </div>

                        <!-- Card 02: Experienced Faculty (Blue) -->
                        <div class="adv-why-card theme-blue">
                            <div class="adv-why-image-wrap">
                                <img src="assets/images/adv-choose-2.jpg" alt="Experienced Faculty at Advaita" class="adv-why-img" loading="lazy">
                                <div class="adv-why-num-badge">02</div>
                                <div class="adv-why-floating-icon blue">
                                    <i class="fa-solid fa-user-group"></i>
                                </div>
                            </div>
                            <div class="adv-why-content">
                                <h3 class="adv-why-card-title">Experienced Faculty</h3>
                                <p class="adv-why-card-desc">
                                    Dedicated, compassionate, and highly qualified educators focused on personalized attention and nurturing every learner's individual strengths.
                                </p>
                            </div>
                        </div>

                        <!-- Card 03: Smart Learning (Green/Teal) -->
                        <div class="adv-why-card theme-teal">
                            <div class="adv-why-image-wrap">
                                <img src="assets/images/adv-choose-3.jpg" alt="Smart Learning & Labs at Advaita" class="adv-why-img" loading="lazy">
                                <div class="adv-why-num-badge">03</div>
                                <div class="adv-why-floating-icon teal">
                                    <i class="fa-solid fa-laptop-code"></i>
                                </div>
                            </div>
                            <div class="adv-why-content">
                                <h3 class="adv-why-card-title">Smart Learning</h3>
                                <p class="adv-why-card-desc">
                                    Interactive digital classrooms, modern audio-visual learning tools, and specialized STEM laboratories that bring concepts to life.
                                </p>
                            </div>
                        </div>

                        <!-- Card 04: Safe & Secure Campus (Purple) -->
                        <div class="adv-why-card theme-purple">
                            <div class="adv-why-image-wrap">
                                <img src="assets/images/adv-choose-4.jpg" alt="Safe & Secure Campus at Advaita" class="adv-why-img" loading="lazy">
                                <div class="adv-why-num-badge">04</div>
                                <div class="adv-why-floating-icon purple">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                            </div>
                            <div class="adv-why-content">
                                <h3 class="adv-why-card-title">Safe &amp; Secure Campus</h3>
                                <p class="adv-why-card-desc">
                                    24/7 CCTV surveillance, verified support staff, emergency response protocols, and a caring, supportive atmosphere where every child feels safe.
                                </p>
                            </div>
                        </div>

                        <!-- Card 05: Future-Ready Skills (Coral/Red) -->
                        <div class="adv-why-card theme-coral">
                            <div class="adv-why-image-wrap">
                                <img src="assets/images/adv-choose-5.jpg" alt="Future-Ready Skills at Advaita" class="adv-why-img" loading="lazy">
                                <div class="adv-why-num-badge">05</div>
                                <div class="adv-why-floating-icon coral">
                                    <i class="fa-solid fa-rocket"></i>
                                </div>
                            </div>
                            <div class="adv-why-content">
                                <h3 class="adv-why-card-title">Future-Ready Skills</h3>
                                <p class="adv-why-card-desc">
                                    Inquiry-driven learning, robotics, coding, public speaking, critical reasoning, and entrepreneurial mindset tailored for tomorrow's world.
                                </p>
                            </div>
                        </div>

                        <!-- Card 06: Strong Academic Results (Cyan/Teal) -->
                        <div class="adv-why-card theme-cyan">
                            <div class="adv-why-image-wrap">
                                <img src="assets/images/adv-choose-6.jpg" alt="Strong Academic Results at Advaita" class="adv-why-img" loading="lazy">
                                <div class="adv-why-num-badge">06</div>
                                <div class="adv-why-floating-icon cyan">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                </div>
                            </div>
                            <div class="adv-why-content">
                                <h3 class="adv-why-card-title">Strong Academic Results</h3>
                                <p class="adv-why-card-desc">
                                    Consistent 100% board examination pass records, state &amp; national Olympiad ranks, and successful career placements in premier universities.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Nav Arrow -->
                <button type="button" class="adv-why-arrow next" aria-label="Next card">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

            </div>

            <!-- Slider Dots -->
            <div class="adv-why-dots" role="tablist" aria-label="Why Choose Advaita slide navigation">
                <button type="button" class="adv-why-dot active" role="tab" aria-selected="true" aria-label="Slide 1"></button>
                <button type="button" class="adv-why-dot" role="tab" aria-selected="false" aria-label="Slide 2"></button>
            </div>

            <!-- Bottom CTA Button -->
            <div class="adv-why-cta-wrap text-center">
                <a href="about-us.php" class="adv-btn-why-primary">
                    <span>Discover the Advaita Difference</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>
    </section>


    <!-- ====================================================================
         SECTION 6: CAMPUS VISIT / ADMISSIONS CTA BANNER (DESIGN SPEC)
         ==================================================================== -->
    <section class="adv-visit-banner-section" id="visit-school" aria-label="Book A Campus Visit">
        <div class="adv-visit-container">
            <div class="adv-visit-card">
                
                <!-- Left Content Area -->
                <div class="adv-visit-content-side">
                    
                    <!-- Top Eyebrow Badge -->
                    <div class="adv-visit-pill-badge">
                        <i class="fa-solid fa-calendar-check"></i>
                        <span>ADMISSIONS 2026–27 OPEN</span>
                    </div>

                    <!-- Main Heading with Plane Accent -->
                    <div class="adv-visit-heading-wrap">
                        <h2 class="adv-visit-heading">
                            Come see the school <br>
                            for <span class="highlight-orange">yourself.
                                <svg class="heading-swoosh" width="140" height="12" viewBox="0 0 140 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 5C45 11 95 12 137 5" stroke="#F37021" stroke-width="3" stroke-linecap="round"/>
                                </svg>
                            </span>
                        </h2>
                        <!-- Paper plane vector icon with dotted loop trail -->
                        <div class="adv-visit-plane-icon" aria-hidden="true">
                            <svg width="92" height="54" viewBox="0 0 92 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 46 C 20 50, 36 38, 28 24 C 20 10, 42 8, 52 18 C 58 24, 66 18, 72 14" stroke="#93C5FD" stroke-width="1.75" stroke-dasharray="3.5 3.5" stroke-linecap="round"/>
                                <g transform="translate(60, 2) rotate(6)">
                                    <path d="M2 13L28 2L18 26L12 16L2 13Z" stroke="#93C5FD" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" fill="rgba(239, 246, 255, 0.5)"/>
                                    <path d="M28 2L12 16" stroke="#93C5FD" stroke-width="1.75" stroke-linecap="round"/>
                                </g>
                            </svg>
                        </div>
                    </div>

                    <!-- Description & Cursive Tag Row -->
                    <div class="adv-visit-desc-row">
                        <p class="adv-visit-desc">
                            Walk our campus, meet our faculty, experience our learning environment, and get all your questions answered &mdash; the best way to know if Advaita is the right home for your child.
                        </p>
                        <!-- Experience it Yourself Cursive Tag -->
                        <div class="adv-visit-cursive-tag" aria-hidden="true">
                            <span>Experience <br><em>it Yourself</em></span>
                            <svg width="86" height="12" viewBox="0 0 86 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 4C28 10 58 11 83 4" stroke="#F37021" stroke-width="2.5" stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>

                    <div class="adv-visit-separator"></div>

                    <!-- 3 Feature Points -->
                    <div class="adv-visit-features-row">
                        <!-- Point 1 -->
                        <div class="adv-visit-feat-item">
                            <div class="adv-visit-feat-icon">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="adv-visit-feat-info">
                                <span class="feat-title">Counsellors available</span>
                                <span class="feat-sub">Mon–Sat &middot; 9 AM to 5 PM</span>
                            </div>
                        </div>

                        <!-- Point 2 -->
                        <div class="adv-visit-feat-item">
                            <div class="adv-visit-feat-icon">
                                <i class="fa-solid fa-comment-dots"></i>
                            </div>
                            <div class="adv-visit-feat-info">
                                <span class="feat-title">Hindi &middot; English</span>
                                <span class="feat-sub">On-call &amp; on-campus</span>
                            </div>
                        </div>

                        <!-- Point 3 -->
                        <div class="adv-visit-feat-item">
                            <div class="adv-visit-feat-icon">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <div class="adv-visit-feat-info">
                                <span class="feat-title">No obligation</span>
                                <span class="feat-sub">Just a friendly chat</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Visual Area with Floating Pods -->
                <div class="adv-visit-visual-side">
                    <img src="assets/images/campus-visit-visual.jpg?v=<?php echo filemtime(__DIR__ . '/assets/images/campus-visit-visual.jpg'); ?>" alt="Advaita School of Excellence Campus Visit" class="adv-visit-campus-img" loading="lazy">
                    
                    <!-- Curved Arch Divider -->
                    <div class="adv-visit-curve-mask" aria-hidden="true">
                        <svg viewBox="0 0 100 500" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Warm apricot accent curve -->
                            <path d="M0 0 L18 0 C46 125 78 230 50 370 C38 430 22 480 8 500 L0 500 Z" fill="#FDF3E8"/>
                            <!-- Crisp white card curve -->
                            <path d="M0 0 L9 0 C37 125 69 230 41 370 C29 430 13 480 4 500 L0 500 Z" fill="#FFFFFF"/>
                        </svg>
                    </div>

                    <!-- Floating Action Pods -->
                    <div class="adv-visit-action-pods">
                        
                        <!-- Pod 1: Book A Campus Visit -->
                        <a href="contact-us.php#visit" class="adv-visit-pod-orange">
                            <div class="pod-icon-box">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="pod-text-box">
                                <span class="pod-title">Book A Campus Visit</span>
                                <span class="pod-sub">Pick A Slot &middot; Free</span>
                            </div>
                            <div class="pod-arrow-btn">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </a>

                        <!-- Pod 2: Call Counsellor -->
                        <a href="tel:+919413062851" class="adv-visit-pod-white">
                            <div class="pod-phone-circle">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="pod-phone-info">
                                <span class="phone-label">TALK TO OUR COUNSELLOR</span>
                                <span class="phone-number">094130 62851</span>
                            </div>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ====================================================================
         SECTION 7: CAMPUS GALLERY (A DAY AT ADVAITA, IN PICTURES)
         ==================================================================== -->
    <section class="adv-gallery-section" id="campus-gallery" aria-label="A Day at Advaita Campus Gallery">
        <div class="adv-gallery-container">
            
            <!-- Section Header -->
            <div class="adv-gallery-header text-center">
                <div class="adv-gallery-eyebrow">
                    <i class="fa-solid fa-camera"></i>
                    <span>CAMPUS GALLERY</span>
                </div>
                <h2 class="adv-gallery-title">
                    <span class="title-dark">A day at Advaita,</span>
                    <span class="title-orange">in <span class="highlight-text">pictures.</span></span>
                </h2>
                <p class="adv-gallery-subtitle">
                    Glimpses from morning assembly, classrooms, labs, sports, celebrations and everything in between &mdash; the rhythm of life at our campus.
                </p>
            </div>

            <!-- Gallery Cards Slider Container -->
            <div class="adv-gallery-slider-wrap">
                
                <!-- Left Nav Arrow -->
                <button type="button" class="adv-gallery-arrow prev" aria-label="Previous gallery slide">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <!-- Slider Viewport -->
                <div class="adv-gallery-viewport">
                    <!-- Cards Track -->
                    <div class="adv-gallery-grid">
                        
                        <!-- Card 1: School Building Exterior -->
                        <div class="adv-gallery-card">
                            <div class="adv-gallery-img-box">
                                <img src="assets/images/gallery-day-1.jpg" alt="Advaita School Building and Green Campus" class="adv-gallery-img" loading="lazy">
                            </div>
                        </div>

                        <!-- Card 2: Smart Classroom Learning -->
                        <div class="adv-gallery-card">
                            <div class="adv-gallery-img-box">
                                <img src="assets/images/gallery-day-2.jpg" alt="Interactive Digital Smart Classroom Session" class="adv-gallery-img" loading="lazy">
                            </div>
                        </div>

                        <!-- Card 3: Sports and Basketball Court -->
                        <div class="adv-gallery-card">
                            <div class="adv-gallery-img-box">
                                <img src="assets/images/gallery-day-3.jpg" alt="Students Playing Basketball on Campus Court" class="adv-gallery-img" loading="lazy">
                            </div>
                        </div>

                        <!-- Card 4: STEM & Robotics Laboratory -->
                        <div class="adv-gallery-card">
                            <div class="adv-gallery-img-box">
                                <img src="assets/images/gallery-stem.jpg" alt="Students in STEM and Robotics Laboratory" class="adv-gallery-img" loading="lazy">
                            </div>
                        </div>

                        <!-- Card 5: Cultural Arts and Stage Events -->
                        <div class="adv-gallery-card">
                            <div class="adv-gallery-img-box">
                                <img src="assets/images/gallery-cultural.jpg" alt="Cultural Arts Celebration and Stage Performance" class="adv-gallery-img" loading="lazy">
                            </div>
                        </div>

                        <!-- Card 6: Morning Assembly & Campus Life -->
                        <div class="adv-gallery-card">
                            <div class="adv-gallery-img-box">
                                <img src="assets/images/gallery-assembly.jpg" alt="Morning Assembly and Student Gathering" class="adv-gallery-img" loading="lazy">
                            </div>
                        </div>

                        <!-- Card 7: Athletic Fitness & Track Arena -->
                        <div class="adv-gallery-card">
                            <div class="adv-gallery-img-box">
                                <img src="assets/images/gallery-sports.jpg" alt="Sports and Athletic Track Field" class="adv-gallery-img" loading="lazy">
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Nav Arrow -->
                <button type="button" class="adv-gallery-arrow next" aria-label="Next gallery slide">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

            </div>

            <!-- Slider Pagination Dots -->
            <div class="adv-gallery-dots" role="tablist" aria-label="Gallery slide navigation">
                <button type="button" class="adv-gallery-dot active" role="tab" aria-selected="true" aria-label="Slide 1"></button>
                <button type="button" class="adv-gallery-dot" role="tab" aria-selected="false" aria-label="Slide 2"></button>
                <button type="button" class="adv-gallery-dot" role="tab" aria-selected="false" aria-label="Slide 3"></button>
                <button type="button" class="adv-gallery-dot" role="tab" aria-selected="false" aria-label="Slide 4"></button>
                <button type="button" class="adv-gallery-dot" role="tab" aria-selected="false" aria-label="Slide 5"></button>
            </div>

            <!-- Bottom Action Buttons -->
            <div class="adv-gallery-actions">
                <a href="gallery.php" class="adv-btn-gallery-primary">
                    <span>Browse Full Gallery</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="facilities.php" class="adv-btn-gallery-video">
                    <div class="video-play-circle">
                        <i class="fa-solid fa-play"></i>
                    </div>
                    <span>Watch Campus Video</span>
                </a>
            </div>

        </div>
    </section>


    <!-- ====================================================================
         SECTION 8: PARENT TESTIMONIALS (VOICES THAT INSPIRE US)
         ==================================================================== -->
    <section class="adv-testimonials-section" id="testimonials" aria-label="Parent Testimonials">
        <div class="adv-testimonials-container">
            
            <!-- Section Header -->
            <div class="adv-testimonials-header text-center">
                <div class="adv-testimonials-eyebrow">
                    <i class="fa-solid fa-comment-dots"></i>
                    <span>TESTIMONIALS</span>
                </div>
                <h2 class="adv-testimonials-title">
                    <span class="title-dark">Voices That</span>
                    <span class="title-orange">Inspire Us</span>
                </h2>
                <div class="adv-testimonials-underline-bar"></div>
                <p class="adv-testimonials-subtitle">
                    Here&rsquo;s what our parents have to say about their journey with Advaita.
                </p>
            </div>

            <!-- 3 Testimonial Cards Grid -->
            <div class="adv-testimonials-grid">
                
                <!-- Card 1: Priya Sharma -->
                <div class="adv-testi-card theme-orange">
                    <div class="adv-testi-top-bar">
                        <span class="adv-testi-quote-mark orange">&ldquo;</span>
                        <div class="adv-testi-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="adv-testi-text">
                        Advaita has been a blessing for our family. The school provides a perfect balance of academics, values and co-curricular activities. We have seen our daughter grow into a confident, responsible and curious learner.
                    </p>
                    <div class="adv-testi-footer">
                        <div class="adv-testi-avatar-box">
                            <img src="assets/images/testimonial-parent-1.jpg" alt="Priya Sharma - Parent at Advaita" class="adv-testi-avatar" loading="lazy">
                        </div>
                        <div class="adv-testi-author-info">
                            <h3 class="adv-testi-name">Priya Sharma</h3>
                            <span class="adv-testi-role">Parent of Ananya Sharma <br>Class VI</span>
                        </div>
                        <span class="adv-testi-close-quote orange">&rdquo;</span>
                    </div>
                </div>

                <!-- Card 2: Rahul Mehta -->
                <div class="adv-testi-card theme-blue">
                    <div class="adv-testi-top-bar">
                        <span class="adv-testi-quote-mark blue">&ldquo;</span>
                        <div class="adv-testi-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="adv-testi-text">
                        The teachers at Advaita are truly dedicated and supportive. The school's focus on holistic development has helped my son discover his strengths and build leadership skills. We are grateful to be a part of the Advaita family.
                    </p>
                    <div class="adv-testi-footer">
                        <div class="adv-testi-avatar-box">
                            <img src="assets/images/testimonial-parent-2.jpg" alt="Rahul Mehta - Parent at Advaita" class="adv-testi-avatar" loading="lazy">
                        </div>
                        <div class="adv-testi-author-info">
                            <h3 class="adv-testi-name">Rahul Mehta</h3>
                            <span class="adv-testi-role">Parent of Vihaan Mehta <br>Class VIII</span>
                        </div>
                        <span class="adv-testi-close-quote blue">&rdquo;</span>
                    </div>
                </div>

                <!-- Card 3: Sneha Iyer -->
                <div class="adv-testi-card theme-orange">
                    <div class="adv-testi-top-bar">
                        <span class="adv-testi-quote-mark orange">&ldquo;</span>
                        <div class="adv-testi-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="adv-testi-text">
                        Advaita offers a safe, nurturing and inspiring environment. The blend of modern infrastructure, caring faculty and value-based education gives us complete confidence in our child's future.
                    </p>
                    <div class="adv-testi-footer">
                        <div class="adv-testi-avatar-box">
                            <img src="assets/images/testimonial-parent-3.jpg" alt="Sneha Iyer - Parent at Advaita" class="adv-testi-avatar" loading="lazy">
                        </div>
                        <div class="adv-testi-author-info">
                            <h3 class="adv-testi-name">Sneha Iyer</h3>
                            <span class="adv-testi-role">Parent of Arjun Iyer <br>Class V</span>
                        </div>
                        <span class="adv-testi-close-quote orange">&rdquo;</span>
                    </div>
                </div>

            </div>

            <!-- Carousel Pagination Dots -->
            <div class="adv-testimonials-dots" role="tablist" aria-label="Testimonials pagination">
                <span class="adv-testi-dot" role="tab" aria-selected="false"></span>
                <span class="adv-testi-dot active" role="tab" aria-selected="true"></span>
                <span class="adv-testi-dot" role="tab" aria-selected="false"></span>
            </div>

        </div>
    </section>


    <!-- ====================================================================
         SECTION 9: FREQUENTLY ASKED QUESTIONS (FAQ ACCORDION)
         ==================================================================== -->
    <section class="adv-faq-section" id="faq" aria-label="Frequently Asked Questions">
        <!-- Background decorative floating dots and glowing accents -->
        <div class="adv-faq-bg-glow-left" aria-hidden="true"></div>
        <div class="adv-faq-bg-glow-right" aria-hidden="true"></div>
        <div class="adv-faq-floating-dot" aria-hidden="true"></div>

        <div class="adv-faq-container">
            
            <!-- Section Header -->
            <div class="adv-faq-header text-center">
                <div class="adv-faq-eyebrow">
                    <span class="faq-dash"></span>
                    <span class="faq-eyebrow-text">FAQ</span>
                    <span class="faq-dash"></span>
                </div>
                <h2 class="adv-faq-title">
                    <span class="title-dark">Frequently Asked</span>
                    <span class="title-orange">Questions</span>
                </h2>
                <p class="adv-faq-subtitle">
                    Find quick answers to common questions about admissions, academics,<br>
                    campus life, and more at Advaita.
                </p>
            </div>

            <!-- Accordion List Container -->
            <div class="adv-faq-accordion" id="advFaqAccordion">
                
                <!-- FAQ Item 01 (Active by default) -->
                <div class="adv-faq-item active">
                    <button type="button" class="adv-faq-btn" aria-expanded="true" aria-controls="faq-ans-1">
                        <span class="adv-faq-num">01</span>
                        <span class="adv-faq-question">What curriculum does Advaita follow?</span>
                        <span class="adv-faq-icon">
                            <i class="fa-solid fa-minus"></i>
                        </span>
                    </button>
                    <div class="adv-faq-answer" id="faq-ans-1" style="display: block;">
                        <div class="adv-faq-answer-inner">
                            <p>
                                Advaita is a CBSE affiliated school (Affiliation No. 1130920) and follows a holistic, future-focused curriculum. Our approach blends academic excellence with co-curricular, value-based, and experiential learning to help every child grow into a confident, compassionate, and capable individual.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 02 -->
                <div class="adv-faq-item">
                    <button type="button" class="adv-faq-btn" aria-expanded="false" aria-controls="faq-ans-2">
                        <span class="adv-faq-num">02</span>
                        <span class="adv-faq-question">What is the admission process for new students?</span>
                        <span class="adv-faq-icon">
                            <i class="fa-solid fa-plus"></i>
                        </span>
                    </button>
                    <div class="adv-faq-answer" id="faq-ans-2">
                        <div class="adv-faq-answer-inner">
                            <p>
                                Our admission process is straightforward and supportive. It begins with submitting an enquiry or registration form online or at our school campus, followed by an interactive meeting and guided campus tour. After verification of previous academic records and essential documents, admission is finalized upon confirmation of enrolment and fee completion.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 03 -->
                <div class="adv-faq-item">
                    <button type="button" class="adv-faq-btn" aria-expanded="false" aria-controls="faq-ans-3">
                        <span class="adv-faq-num">03</span>
                        <span class="adv-faq-question">What are the age criteria for admission to pre-primary and primary classes?</span>
                        <span class="adv-faq-icon">
                            <i class="fa-solid fa-plus"></i>
                        </span>
                    </button>
                    <div class="adv-faq-answer" id="faq-ans-3">
                        <div class="adv-faq-answer-inner">
                            <p>
                                In accordance with CBSE and state education regulatory standards, minimum age requirements as of the commencement of the academic year are: Nursery (3+ years), LKG (4+ years), UKG (5+ years), and Grade 1 (6+ years). For higher grades, admissions are based on successful completion of the preceding class.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 04 -->
                <div class="adv-faq-item">
                    <button type="button" class="adv-faq-btn" aria-expanded="false" aria-controls="faq-ans-4">
                        <span class="adv-faq-num">04</span>
                        <span class="adv-faq-question">What extracurricular activities does the school offer?</span>
                        <span class="adv-faq-icon">
                            <i class="fa-solid fa-plus"></i>
                        </span>
                    </button>
                    <div class="adv-faq-answer" id="faq-ans-4">
                        <div class="adv-faq-answer-inner">
                            <p>
                                Advaita offers an expansive spectrum of co-curricular opportunities designed to foster creativity, teamwork, and athletic skills. These include robotics &amp; AI lab projects, coding clubs, vocal &amp; instrumental music, classical and contemporary dance, theatre, public speaking &amp; debates, martial arts, cricket, football, basketball, badminton, table tennis, and yoga.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 05 -->
                <div class="adv-faq-item">
                    <button type="button" class="adv-faq-btn" aria-expanded="false" aria-controls="faq-ans-5">
                        <span class="adv-faq-num">05</span>
                        <span class="adv-faq-question">How does Advaita ensure the safety of its students?</span>
                        <span class="adv-faq-icon">
                            <i class="fa-solid fa-plus"></i>
                        </span>
                    </button>
                    <div class="adv-faq-answer" id="faq-ans-5">
                        <div class="adv-faq-answer-inner">
                            <p>
                                Student safety is our foremost priority. Our campus features 24/7 high-resolution CCTV monitoring, controlled access entry gates with security personnel, GPS-enabled school transport with certified drivers and female attendants, an equipped medical infirmary with qualified nursing care, and rigorous child protection policies across all premises.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ====================================================================
         SECTION 10: ACADEMIC PROGRAMMES (EDUCATION FOR EVERY STAGE)
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
                            At Advaita School of Excellence, our vision transcends traditional textbooks. We nurture principled character, emotional resilience, and visionary leadership to prepare students not just for examinations, but for life.
                        </p>

                        <div class="parshv-director-author">
                            <div>
                                <h4 class="parshv-director-name">Narendra Jain</h4>
                                <span class="parshv-director-role">Director, Advaita School of Excellence, Parbhani</span>
                            </div>
                            <a href="leadership.php" class="parshv-btn-primary" style="padding: 10px 22px; font-size: 0.875rem;">
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
                        "Enrolling our son at Advaita School of Excellence was one of our best decisions. The teachers are exceptionally devoted, not just to textbook learning, but to developing his confidence and communication skills."
                    </blockquote>
                    <div class="parshv-testi-author">
                        <img src="assets/images/parent-1.jpg" alt="Sunita Sharma" class="parshv-testi-avatar">
                        <div>
                            <h4 class="parshv-testi-name">Sunita Sharma</h4>
                            <span class="parshv-testi-grade">Parent of Aarav (Class VIII)</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="parshv-testi-card">
                    <div class="parshv-testi-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <blockquote class="parshv-testi-quote">
                        "The robotics and science lab infrastructure is outstanding. Our daughter has developed a profound interest in mathematics and computer coding. The environment is both competitive and supportive."
                    </blockquote>
                    <div class="parshv-testi-author">
                        <img src="assets/images/parent-2.jpg" alt="Rajesh Mehta" class="parshv-testi-avatar">
                        <div>
                            <h4 class="parshv-testi-name">Rajesh Mehta</h4>
                            <span class="parshv-testi-grade">Parent of Ananya (Class X)</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="parshv-testi-card">
                    <div class="parshv-testi-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <blockquote class="parshv-testi-quote">
                        "The balanced approach to academics, sports, and cultural activities makes this school truly stand out. Safety, transport, and communication with parents are seamlessly managed."
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
                    <i class="fa-solid fa-bullhorn"></i> HAPPENINGS
                </span>
                <h2 class="parshv-section-title">
                    What's Happening at <span class="highlight">Advaita?</span>
                </h2>
                <p class="parshv-section-subtitle">
                    Stay updated with the latest campus activities, celebrations, academic achievements and announcements.
                </p>
            </div>

            <!-- News Grid (3 Items) -->
            <div class="parshv-news-grid">
                <!-- News 1 -->
                <div class="parshv-news-card">
                    <div class="parshv-news-image-wrap">
                        <img src="assets/images/event-1.jpg" alt="Science and AI Exhibition" loading="lazy">
                        <div class="parshv-news-date-badge">
                            <span class="day">15</span>
                            <span class="month">OCT</span>
                        </div>
                    </div>
                    <div class="parshv-news-body">
                        <span class="parshv-news-category">EVENTS & STEM</span>
                        <h3 class="parshv-news-title">Annual Inter-School Science & AI Exhibition 2026</h3>
                        <p class="parshv-news-desc">
                            Students presented over 40 working robotic models, automated IoT solutions, and green energy innovations.
                        </p>
                        <a href="activities.php" class="parshv-news-link">
                            <span>Read More</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- News 2 -->
                <div class="parshv-news-card">
                    <div class="parshv-news-image-wrap">
                        <img src="assets/images/event-2.jpg" alt="Olympiad Toppers" loading="lazy">
                        <div class="parshv-news-date-badge">
                            <span class="day">28</span>
                            <span class="month">SEP</span>
                        </div>
                    </div>
                    <div class="parshv-news-body">
                        <span class="parshv-news-category">ACHIEVEMENTS</span>
                        <h3 class="parshv-news-title">CBSE National Olympiad Winners Felicitated</h3>
                        <p class="parshv-news-desc">
                            Advaita students bagged top state ranks in National Cyber and Mathematics Olympiad examinations with distinction.
                        </p>
                        <a href="achievements.php" class="parshv-news-link">
                            <span>Read More</span>
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

    <!-- ====================================================================
         ON-LOAD ADMISSION POPUP MODAL
         ==================================================================== -->
    <div class="adv-onload-modal" id="advOnloadModal" role="dialog" aria-modal="true" aria-label="Admissions Open 2026-27">
        <div class="adv-onload-backdrop" id="advOnloadBackdrop"></div>
        <div class="adv-onload-dialog">
            
            <!-- Floating Close Button -->
            <button type="button" class="adv-onload-close" id="advOnloadClose" aria-label="Close popup modal" title="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <!-- Poster Card -->
            <div class="adv-onload-card">
                <a href="#admission-cta" class="adv-onload-poster-link" title="Admissions Open 2026-27">
                    <img src="assets/images/onload-admission-popup.jpg" alt="Advaita School of Excellence - Admissions Open 2026-27 - 300+ Families Trusted Us" class="adv-onload-poster-img" loading="eager">
                </a>

                <!-- Quick Action Bar -->
                <div class="adv-onload-footer-actions">
                    <a href="contact-us.php#enquiry" class="adv-onload-btn-primary">
                        <i class="fa-solid fa-file-signature"></i>
                        <span>Enquire Now</span>
                    </a>
                    <a href="tel:+919413062851" class="adv-onload-btn-call">
                        <i class="fa-solid fa-phone"></i>
                        <span>094130 62851</span>
                    </a>
                </div>
            </div>

        </div>
    </div>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>