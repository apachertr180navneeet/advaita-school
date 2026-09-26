<?php
/**
 * Home Page - Advaita School of Excellence, Parbhani
 * CBSE Affiliated (Affiliation No. 1130920)
 * Exact Visual Layout matching Official Reference (reference-2.png)
 */
$pageTitle = "Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)";
$activePage = "index";

require_once __DIR__ . '/includes/header.php';
?>

<div class="homepage-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: A Premier CBSE School with a Stronger Purpose
         ========================================================================= -->
    <section class="home-hero-section">
        <div class="inner-hero-canvas">
            
            <!-- Left Dot Matrix Decor -->
            <div class="inner-hero-dots-decor" aria-hidden="true"></div>

            <!-- Left Content Panel -->
            <div class="inner-hero-left-panel">
                <div class="inner-hero-content-inner">
                    
                    <div class="inner-eyebrow">— WELCOME TO —</div>
                    
                    <h1 class="inner-hero-title">
                        A Premier<br>
                        <span class="text-navy">CBSE School with a</span><br>
                        <span class="text-orange">Stronger Purpose.</span>
                    </h1>

                    <div class="inner-hero-pillars">
                        <span>Academic Excellence</span>
                        <span class="pillar-pipe">|</span>
                        <span>NEET / IIT Foundation</span>
                        <span class="pillar-pipe">|</span>
                        <span>Competitive Exam Preparation</span>
                        <span class="pillar-pipe">|</span>
                        <span>Values for Life</span>
                    </div>
                    
                    <p class="inner-hero-desc">
                        At Advaita School of Excellence, we go beyond textbooks to create a learning environment where curiosity is encouraged, confidence is built, and every child is empowered to achieve their true potential.
                    </p>

                    <div class="inner-hero-actions">
                        <a href="#admissions" class="btn-orange-pill">
                            <span>Book a Campus Visit</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="vision-mission.php" class="btn-video-pill">
                            <i class="fa-solid fa-circle-play"></i>
                            <span>Our Vision</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Campus Building Visual with Blue Arch Contour & Script Tag -->
            <div class="inner-hero-right-visual">
                <div class="inner-hero-img-frame">
                    <img src="assets/images/about-hero-building.jpg" alt="Advaita School of Excellence Campus" class="inner-hero-campus-img" loading="eager">
                    
                    <!-- Advaita Logo Badge Overlay on Building -->
                    <div class="inner-hero-building-logo">
                        <img src="assets/images/logo-cropped.png" alt="Advaita Logo" class="building-logo-img">
                    </div>
                </div>

                <!-- Floating Script Badge in Sky -->
                <div class="inner-hero-script-tag">
                    <span class="script-title">More<br>Than A School</span>
                    <svg class="script-underline" viewBox="0 0 140 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M4 10C36 4 98 4 136 12" stroke="#F37021" stroke-width="3.5" stroke-linecap="round"/>
                        <path d="M18 14C48 9 92 8 126 15" stroke="#F37021" stroke-width="2.5" stroke-linecap="round" opacity="0.75"/>
                    </svg>
                </div>
            </div>

        </div>

        <!-- 4 Feature Cards Strip Below Hero -->
        <div class="home-features-strip-container">
            <div class="home-features-strip-grid">
                <!-- 1. CBSE Academic Excellence -->
                <div class="home-feature-card">
                    <div class="home-feature-icon-box bg-blue">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div class="home-feature-text">
                        <h3 class="feature-card-title">CBSE<br><span class="sub">Academic Excellence</span></h3>
                        <p class="feature-card-desc">Future-ready learning with a global outlook.</p>
                    </div>
                </div>

                <!-- 2. NEET Foundation -->
                <div class="home-feature-card">
                    <div class="home-feature-icon-box bg-orange">
                        <i class="fa-solid fa-stethoscope"></i>
                    </div>
                    <div class="home-feature-text">
                        <h3 class="feature-card-title">NEET<br><span class="sub">Foundation</span></h3>
                        <p class="feature-card-desc">Strong conceptual base for medical aspirants.</p>
                    </div>
                </div>

                <!-- 3. IIT - JEE Foundation -->
                <div class="home-feature-card">
                    <div class="home-feature-icon-box bg-blue">
                        <i class="fa-solid fa-atom"></i>
                    </div>
                    <div class="home-feature-text">
                        <h3 class="feature-card-title">IIT - JEE<br><span class="sub">Foundation</span></h3>
                        <p class="feature-card-desc">Focused training for engineering dreams.</p>
                    </div>
                </div>

                <!-- 4. Competitive Exams -->
                <div class="home-feature-card">
                    <div class="home-feature-icon-box bg-orange">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <div class="home-feature-text">
                        <h3 class="feature-card-title">Competitive<br><span class="sub">Exams</span></h3>
                        <p class="feature-card-desc">Preparation for Olympiads, NTSE, CUET and more.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. SECTION: Built on Values. Driven by Academic Excellence.
         ========================================================================= -->
    <section class="built-values-section" id="about">
        <div class="home-container">
            
            <div class="built-values-top-grid">
                <!-- Left: Student Image with Badge -->
                <div class="built-student-col">
                    <div class="built-student-img-wrap">
                        <img src="assets/images/about-story-student.jpg" alt="Advaita Student in Classroom" class="built-student-img" loading="lazy">
                        
                        <!-- Overlay Navy Pill Badge -->
                        <div class="built-student-badge">
                            <div class="badge-trophy-icon">
                                <i class="fa-solid fa-trophy"></i>
                            </div>
                            <div class="badge-text-wrap">
                                <strong>Best CBSE Result Producer</strong>
                                <span>Year after Year</span>
                            </div>
                            <div class="badge-arrow">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Text & 3 Legacy Stats -->
                <div class="built-content-col">
                    <div class="section-eyebrow">— BUILT ON A STRONG FOUNDATION —</div>
                    <h2 class="section-title">
                        Built on Values.<br>
                        Driven by <span class="text-orange">Academic Excellence.</span>
                    </h2>

                    <p class="section-lead-text">
                        At Advaita School of Excellence, we blend academic rigor, character development, and future-focused learning to help every child grow into a confident, compassionate, and capable individual.
                    </p>

                    <p class="section-lead-text">
                        Our focus on NEET/IIT foundation and various competitive exams, along with a strong CBSE curriculum, ensures that students are well-prepared for higher education and life's opportunities.
                    </p>

                    <!-- 3 Metric Badges -->
                    <div class="legacy-stats-row">
                        <div class="legacy-stat-box">
                            <div class="legacy-stat-icon">
                                <i class="fa-solid fa-id-card"></i>
                            </div>
                            <div class="legacy-stat-meta">
                                <strong class="stat-num">5000+</strong>
                                <span class="stat-name">Happy Students</span>
                            </div>
                        </div>

                        <div class="legacy-stat-box">
                            <div class="legacy-stat-badge-orange">25+</div>
                            <div class="legacy-stat-meta">
                                <strong class="stat-num">Years of</strong>
                                <span class="stat-name">Academic Legacy</span>
                            </div>
                        </div>

                        <div class="legacy-stat-box">
                            <div class="legacy-stat-icon">
                                <i class="fa-solid fa-thumbs-up"></i>
                            </div>
                            <div class="legacy-stat-meta">
                                <strong class="stat-num">95%</strong>
                                <span class="stat-name">Parent Satisfaction</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3 Bottom Pillar Cards (Our Vision, Our Mission, Our Values) -->
            <div class="three-pillars-grid">
                <!-- Card 1: Our Vision -->
                <div class="pillar-box">
                    <div class="pillar-icon-circle">
                        <i class="fa-regular fa-compass"></i>
                    </div>
                    <h3 class="pillar-heading">Our Vision</h3>
                    <p class="pillar-paragraph">
                        To nurture confident, curious and responsible global citizens equipped to excel in academics and life.
                    </p>
                </div>

                <!-- Card 2: Our Mission -->
                <div class="pillar-box">
                    <div class="pillar-icon-circle">
                        <i class="fa-solid fa-rocket"></i>
                    </div>
                    <h3 class="pillar-heading">Our Mission</h3>
                    <p class="pillar-paragraph">
                        To provide a safe, value-based learning environment with academic excellence, modern facilities and holistic growth opportunities.
                    </p>
                </div>

                <!-- Card 3: Our Values -->
                <div class="pillar-box">
                    <div class="pillar-icon-circle">
                        <i class="fa-regular fa-gem"></i>
                    </div>
                    <h3 class="pillar-heading">Our Values</h3>
                    <p class="pillar-paragraph">
                        Excellence &nbsp;|&nbsp; Integrity &nbsp;|&nbsp; Empathy &nbsp;|&nbsp; Discipline &nbsp;|&nbsp; Curiosity &nbsp;|&nbsp; Lifelong Learning
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         3. SECTION: Education for Life, Not Just Exams.
         ========================================================================= -->
    <section class="education-life-section" id="academics">
        <div class="home-container">
            <div class="edu-life-grid">
                
                <!-- Left: Text & Button -->
                <div class="edu-life-left">
                    <div class="section-eyebrow">— PREPARING FOR A BRIGHTER TOMORROW —</div>
                    <h2 class="section-title">
                        Education for Life,<br>
                        <span class="text-orange">Not Just Exams.</span>
                    </h2>
                    <p class="section-lead-text">
                        We integrate CBSE academics with a focused NEET/IIT foundation and training for various competitive exams. Our student-centric approach ensures conceptual clarity, critical thinking, and real-world application — helping students achieve success in academics and beyond.
                    </p>
                    <a href="#academics" class="btn-orange-pill">
                        <span>Our Academics</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Right: 6 Checklist Rows -->
                <div class="edu-life-right">
                    <div class="checklist-grid">
                        <div class="checklist-item">
                            <div class="check-icon-wrap icon-blue">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                            <span class="check-label">NEET Foundation</span>
                        </div>

                        <div class="checklist-item">
                            <div class="check-icon-wrap icon-blue">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                            <span class="check-label">Integrated IIT-JEE Foundation</span>
                        </div>

                        <div class="checklist-item">
                            <div class="check-icon-wrap icon-blue">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                            <span class="check-label">Preparation for Competitive Exams</span>
                        </div>

                        <div class="checklist-item">
                            <div class="check-icon-wrap icon-orange">
                                <i class="fa-regular fa-circle-dot"></i>
                            </div>
                            <span class="check-label">Beyond Text Learning</span>
                        </div>

                        <div class="checklist-item">
                            <div class="check-icon-wrap icon-orange">
                                <i class="fa-regular fa-circle-dot"></i>
                            </div>
                            <span class="check-label">Holistic Student Development</span>
                        </div>

                        <div class="checklist-item">
                            <div class="check-icon-wrap icon-orange">
                                <i class="fa-regular fa-circle-dot"></i>
                            </div>
                            <span class="check-label">Future-Ready Skills</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. SECTION: What Makes Advaita Unique (6 Cards)
         ========================================================================= -->
    <section class="what-makes-unique-section" id="neet-iit">
        <div class="home-container">
            <div class="beliefs-section-header">
                <div class="section-eyebrow">— WHAT SETS US APART —</div>
                <h2 class="section-title">
                    What Makes <span class="text-orange">Advaita</span> Unique.
                </h2>
                <p class="section-subtitle">
                    We go beyond conventional learning to create a nurturing environment where every child can explore, grow and excel.
                </p>
            </div>

            <div class="unique-cards-grid">
                <!-- 1. Best CBSE Results Producer -->
                <div class="unique-card">
                    <div class="unique-icon-box icon-orange">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="unique-title">Best CBSE<br>Results Producer</h3>
                    <p class="unique-desc">Consistent academic excellence year after year.</p>
                </div>

                <!-- 2. Integrated NEET / IIT Foundation -->
                <div class="unique-card">
                    <div class="unique-icon-box icon-blue">
                        <i class="fa-solid fa-atom"></i>
                    </div>
                    <h3 class="unique-title">Integrated<br>NEET / IIT Foundation</h3>
                    <p class="unique-desc">Strong base for medical and engineering aspirations.</p>
                </div>

                <!-- 3. Competitive Exam Support -->
                <div class="unique-card">
                    <div class="unique-icon-box icon-orange">
                        <i class="fa-solid fa-book-bookmark"></i>
                    </div>
                    <h3 class="unique-title">Competitive<br>Exam Support</h3>
                    <p class="unique-desc">Olympiads, NTSE, CUET &amp; other national exams.</p>
                </div>

                <!-- 4. Experienced Faculty -->
                <div class="unique-card">
                    <div class="unique-icon-box icon-sky">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <h3 class="unique-title">Experienced<br>Faculty</h3>
                    <p class="unique-desc">Dedicated &amp; student-focused mentors.</p>
                </div>

                <!-- 5. Modern Infrastructure -->
                <div class="unique-card">
                    <div class="unique-icon-box icon-orange">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <h3 class="unique-title">Modern<br>Infrastructure</h3>
                    <p class="unique-desc">Advanced classrooms, labs, library and sports facilities.</p>
                </div>

                <!-- 6. Safe & Supportive Environment -->
                <div class="unique-card">
                    <div class="unique-icon-box icon-blue">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="unique-title">Safe &amp; Supportive<br>Environment</h3>
                    <p class="unique-desc">A campus where every child feels valued and secure.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. SECTION: A Space to Learn, Explore and Excel (Campus Showcase)
         ========================================================================= -->
    <section class="space-learn-section" id="facilities">
        <div class="home-container">
            <div class="space-learn-grid">
                
                <!-- Left Text -->
                <div class="space-learn-left">
                    <div class="section-eyebrow">— A SPACE TO GROW —</div>
                    <h2 class="section-title">
                        A Space to Learn,<br>
                        <span class="text-orange">Explore and Excel.</span>
                    </h2>
                    <p class="section-lead-text">
                        Our modern campus is designed to inspire curiosity, encourage collaboration, and provide the best learning experience. From spacious classrooms to advanced labs and vibrant activity spaces, every corner of Advaita nurtures growth and opportunity.
                    </p>
                    <a href="#facilities" class="btn-orange-pill">
                        <span>Explore Our Campus</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Right Courtyard Image with Floating Badge -->
                <div class="space-learn-right">
                    <div class="campus-courtyard-wrap">
                        <img src="assets/images/about-campus-courtyard.jpg" alt="Advaita Campus Circular Courtyard" class="campus-courtyard-img" loading="lazy">
                        
                        <!-- Floating Pill Badge -->
                        <a href="#facilities" class="courtyard-floating-badge">
                            <div class="badge-mini-thumb">
                                <img src="assets/images/about-hero-building.jpg" alt="Campus">
                            </div>
                            <div class="badge-text">
                                <strong>Modern Campus</strong>
                                <span>for Holistic Growth</span>
                            </div>
                            <div class="badge-arrow-btn">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. SECTION: Together, let's build brighter tomorrows (CTA)
         ========================================================================= -->
    <section class="inner-join-banner-section cta-variant" id="admissions">
        <div class="inner-join-banner-container">
            <!-- Left Paper Airplane Graphic -->
            <div class="join-plane-wrap" aria-hidden="true">
                <img src="assets/images/staff-join-airplane-bg.png" alt="Airplane Trail" class="join-plane-img" loading="lazy">
            </div>

            <!-- Center Content -->
            <div class="join-content-center">
                <div class="section-eyebrow">— BE A PART OF ADVAITA —</div>
                <h2 class="join-title">Together, let's build <span class="text-orange">brighter tomorrows.</span></h2>
                <p class="join-desc">
                    Admissions are open for CBSE, NEET/IIT Foundation &amp; Competitive Exam Programmes.
                </p>
                <div class="join-actions">
                    <a href="#contact" class="btn-orange-pill">
                        <span>Enquire Now</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="#contact" class="btn-white-pill">
                        <i class="fa-regular fa-calendar-check"></i>
                        <span>Schedule a Campus Visit</span>
                    </a>
                </div>
            </div>

            <!-- Right Smiling Students Graphic -->
            <div class="join-students-wrap">
                <img src="assets/images/about-cta-students-trio.png" alt="Advaita Students" class="join-students-img" loading="lazy">
            </div>
        </div>
    </section>

</div>

<?php
require_once __DIR__ . '/includes/footer.php';
?>