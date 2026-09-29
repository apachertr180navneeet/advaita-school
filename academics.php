<?php
/**
 * Academics Page - Advaita School of Excellence, Parbhani
 * Programmes > Academics: Holistic Curriculum, Stages, Streams, Approach & Activities
 * Clean Semantic HTML - Header and Footer Preserved
 */
$pageTitle = "Academics - Advaita School of Excellence, Parbhani | Holistic Learning";
$activePage = "academics";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper acad-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Breadcrumb + Title + Visual with 3 Students & Script Tag
         ========================================================================= -->
    <section class="admission-hero-section">
        <div class="admission-hero-canvas">
            <!-- Background Visual with Campus -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="assets/images/about-campus.jpg" alt="Advaita School Campus" class="admission-hero-bg-img">
            </div>

            <!-- SVG Wave Overlay for Smooth Translucent Backdrop -->
            <div class="admission-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H540C570 120 520 280 620 440H0V0Z" fill="#EEF6FC" fill-opacity="0.96"/>
                    <path d="M520 0C550 140 500 280 600 440H580C480 280 530 140 500 0H520Z" fill="#F37021" fill-opacity="0.25"/>
                </svg>
            </div>

            <!-- Student Cutout on the Right Side -->
            <div class="admission-hero-students" aria-hidden="true">
                <img src="assets/images/about-cta-students-final.png" alt="Advaita Students in School Uniform" width="480" height="400">
            </div>

            <!-- Floating Handwritten Script Tag at Top Right -->
            <div class="admission-hero-script-tag" aria-hidden="true">
                <span class="script-title">More<br>Than A School</span>
                <svg class="script-underline" viewBox="0 0 120 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 12C38 3 84 4 116 14" stroke="#083B7A" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </div>

            <!-- Left Content Panel -->
            <div class="admission-hero-left-panel">
                <div class="admission-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <nav class="admission-breadcrumb" aria-label="Breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="academics.php">Programmes</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Academics</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">— OUR ACADEMICS —</div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        A Strong Foundation for a Brighter <span class="highlight-orange">Tomorrow.</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        A thoughtfully designed curriculum that nurtures curiosity, builds strong concepts and prepares students for lifelong success.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Container -->
    <div class="acad-container">

        <!-- =========================================================================
             3. OUR CURRICULUM SECTION (4 Cards)
             ========================================================================= -->
        <section class="acad-section" id="our-curriculum">
            <div class="acad-section-header">
                <span class="acad-eyebrow">— OUR CURRICULUM —</span>
                <h2 class="acad-section-title">
                    Holistic Learning for <span class="highlight-orange">Every Stage.</span>
                </h2>
                <p class="acad-section-desc">
                    Our academic programme is aligned with the latest education standards and focuses on conceptual clarity, critical thinking and real-world application.
                </p>
            </div>

            <div class="acad-curriculum-grid">
                <!-- Card 1 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon orange" aria-hidden="true">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="acad-curr-title">Concept-Based Learning</h3>
                    <p class="acad-curr-desc">Strong fundamentals across all subjects.</p>
                </div>

                <!-- Card 2 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon blue" aria-hidden="true">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <h3 class="acad-curr-title">Interdisciplinary Approach</h3>
                    <p class="acad-curr-desc">Connecting knowledge beyond textbooks.</p>
                </div>

                <!-- Card 3 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon teal" aria-hidden="true">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3 class="acad-curr-title">Experiential Learning</h3>
                    <p class="acad-curr-desc">Learning through projects, activities and real-life exposure.</p>
                </div>

                <!-- Card 4 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon pink" aria-hidden="true">
                        <i class="fa-solid fa-user-check"></i>
                    </div>
                    <h3 class="acad-curr-title">Continuous Assessment</h3>
                    <p class="acad-curr-desc">Regular feedback to track and support every child's progress.</p>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             4. ACADEMIC STAGES SECTION (4 Stages)
             ========================================================================= -->
        <section class="acad-section" id="academic-stages">
            <div class="acad-section-header">
                <span class="acad-eyebrow">— ACADEMIC STAGES —</span>
                <h2 class="acad-section-title">
                    A Well-Structured Journey from <span class="highlight-orange">Foundation to Future.</span>
                </h2>
                <p class="acad-section-desc">
                    Our academic programme is designed for students from Nursery to Class 10, with age-appropriate pedagogy and progressive learning goals.
                </p>
            </div>

            <div class="acad-stages-grid">
                <!-- Stage 1 -->
                <div class="acad-stage-card">
                    <div class="acad-stage-icon orange" aria-hidden="true">
                        <i class="fa-solid fa-shapes"></i>
                    </div>
                    <h3 class="acad-stage-title">Foundational Stage</h3>
                    <span class="acad-stage-classes">Nursery – LKG – UKG</span>
                    <p class="acad-stage-desc">Play-based and activity-based learning to build early skills and confidence.</p>
                </div>

                <!-- Stage 2 -->
                <div class="acad-stage-card">
                    <div class="acad-stage-icon blue" aria-hidden="true">
                        <i class="fa-solid fa-pencil"></i>
                    </div>
                    <h3 class="acad-stage-title">Preparatory Stage</h3>
                    <span class="acad-stage-classes">Class 1 – 2</span>
                    <p class="acad-stage-desc">Building strong literacy, numeracy and problem-solving skills.</p>
                </div>

                <!-- Stage 3 -->
                <div class="acad-stage-card">
                    <div class="acad-stage-icon teal" aria-hidden="true">
                        <i class="fa-solid fa-flask"></i>
                    </div>
                    <h3 class="acad-stage-title">Middle Stage</h3>
                    <span class="acad-stage-classes">Class 3 – 5</span>
                    <p class="acad-stage-desc">Expanding knowledge with subject depth and experiential learning.</p>
                </div>

                <!-- Stage 4 -->
                <div class="acad-stage-card">
                    <div class="acad-stage-icon purple" aria-hidden="true">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <h3 class="acad-stage-title">Secondary Stage</h3>
                    <span class="acad-stage-classes">Class 6 – 10</span>
                    <p class="acad-stage-desc">Focused academic learning with critical thinking, application and future readiness.</p>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             5. LEARNING STREAMS SECTION (Boy Visual Left + 6 Cards Right)
             ========================================================================= -->
        <section class="acad-section" id="learning-streams">
            <div class="acad-section-header">
                <span class="acad-eyebrow">— LEARNING STREAMS —</span>
                <h2 class="acad-section-title">
                    A Balanced Curriculum for <span class="highlight-orange">All-Round Growth.</span>
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
                        <img src="assets/images/about-philosophy-student.jpg" alt="Student studying at Advaita School of Excellence">
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
                            <h3 class="acad-stream-title">Languages</h3>
                            <p class="acad-stream-desc">English, Hindi, Marathi and more.</p>
                        </div>
                    </div>

                    <!-- Mathematics -->
                    <div class="acad-stream-card">
                        <div class="acad-stream-icon blue" aria-hidden="true">
                            <i class="fa-solid fa-calculator"></i>
                        </div>
                        <div class="acad-stream-body">
                            <h3 class="acad-stream-title">Mathematics</h3>
                            <p class="acad-stream-desc">Logical thinking and problem solving.</p>
                        </div>
                    </div>

                    <!-- Science -->
                    <div class="acad-stream-card">
                        <div class="acad-stream-icon teal" aria-hidden="true">
                            <i class="fa-solid fa-flask-vial"></i>
                        </div>
                        <div class="acad-stream-body">
                            <h3 class="acad-stream-title">Science</h3>
                            <p class="acad-stream-desc">Hands-on learning and discovery.</p>
                        </div>
                    </div>

                    <!-- Social Science -->
                    <div class="acad-stream-card">
                        <div class="acad-stream-icon purple" aria-hidden="true">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div class="acad-stream-body">
                            <h3 class="acad-stream-title">Social Science</h3>
                            <p class="acad-stream-desc">Understanding people, society and the world.</p>
                        </div>
                    </div>

                    <!-- Arts & Creativity -->
                    <div class="acad-stream-card">
                        <div class="acad-stream-icon pink" aria-hidden="true">
                            <i class="fa-solid fa-palette"></i>
                        </div>
                        <div class="acad-stream-body">
                            <h3 class="acad-stream-title">Arts &amp; Creativity</h3>
                            <p class="acad-stream-desc">Music, dance, art and dramatic expression.</p>
                        </div>
                    </div>

                    <!-- Physical Education -->
                    <div class="acad-stream-card">
                        <div class="acad-stream-icon amber" aria-hidden="true">
                            <i class="fa-solid fa-dumbbell"></i>
                        </div>
                        <div class="acad-stream-body">
                            <h3 class="acad-stream-title">Physical Education</h3>
                            <p class="acad-stream-desc">Sports and fitness for a healthy mind and body.</p>
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
                <span class="acad-eyebrow">— OUR APPROACH —</span>
                <h2 class="acad-section-title">
                    More Than <span class="highlight-orange">Just Academics.</span>
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
                    <p class="acad-approach-desc">Personalized attention to every learner.</p>
                </div>

                <!-- Card 2 -->
                <div class="acad-approach-card">
                    <div class="acad-approach-icon blue" aria-hidden="true">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="acad-approach-title">Safe &amp; Supportive Environment</h3>
                    <p class="acad-approach-desc">A nurturing campus that feels like home.</p>
                </div>

                <!-- Card 3 -->
                <div class="acad-approach-card">
                    <div class="acad-approach-icon teal" aria-hidden="true">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <h3 class="acad-approach-title">Focus on Values</h3>
                    <p class="acad-approach-desc">Building character and responsible citizens.</p>
                </div>

                <!-- Card 4 -->
                <div class="acad-approach-card">
                    <div class="acad-approach-icon pink" aria-hidden="true">
                        <i class="fa-solid fa-rocket"></i>
                    </div>
                    <h3 class="acad-approach-title">Future-Ready Skills</h3>
                    <p class="acad-approach-desc">Preparing for higher education and life beyond.</p>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             7. BEYOND THE CLASSROOM SECTION (Clubs + Creative Student Visual)
             ========================================================================= -->
        <section class="acad-section" id="beyond-classroom">
            <div class="acad-left-header-wrap">
                <div class="acad-accent-bar" aria-hidden="true"></div>
                <div class="acad-left-header-content">
                    <span class="acad-eyebrow">— BEYOND THE CLASSROOM —</span>
                    <h2 class="acad-section-title">
                        Learning That <span class="highlight-orange">Goes Further.</span>
                    </h2>
                    <p class="acad-section-desc">
                        Our academic programme is enriched with co-curricular activities, competitions, clubs and real-world exposure to help students discover and grow their interests.
                    </p>
                </div>
            </div>

            <div class="acad-beyond-layout">
                <!-- Left 5 Clubs -->
                <div class="acad-clubs-row">
                    <div class="acad-club-item">
                        <div class="acad-club-icon-circle c1" aria-hidden="true">
                            <i class="fa-solid fa-microscope"></i>
                        </div>
                        <span class="acad-club-name">Science Club</span>
                    </div>

                    <div class="acad-club-item">
                        <div class="acad-club-icon-circle c2" aria-hidden="true">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <span class="acad-club-name">Literary Club</span>
                    </div>

                    <div class="acad-club-item">
                        <div class="acad-club-icon-circle c3" aria-hidden="true">
                            <i class="fa-solid fa-bullhorn"></i>
                        </div>
                        <span class="acad-club-name">Debate &amp; Public Speaking</span>
                    </div>

                    <div class="acad-club-item">
                        <div class="acad-club-icon-circle c4" aria-hidden="true">
                            <i class="fa-solid fa-music"></i>
                        </div>
                        <span class="acad-club-name">Art &amp; Music</span>
                    </div>

                    <div class="acad-club-item">
                        <div class="acad-club-icon-circle c5" aria-hidden="true">
                            <i class="fa-solid fa-person-running"></i>
                        </div>
                        <span class="acad-club-name">Sports</span>
                    </div>
                </div>

                <!-- Right Visual -->
                <div class="acad-beyond-visual">
                    <div class="acad-beyond-aura" aria-hidden="true"></div>
                    <div class="acad-beyond-img-box">
                        <img src="assets/images/about-story-student.jpg" alt="Student participating in co-curricular arts and activities at Advaita School">
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             8. ADMISSIONS OPEN CTA BANNER
             ========================================================================= -->
        <div class="acad-cta-banner">
            <div class="acad-cta-left">
                <span class="acad-cta-eyebrow">— ADMISSIONS OPEN —</span>
                <h3 class="acad-cta-title">
                    Give Your Child the <span class="highlight-orange">Advaita Advantage.</span>
                </h3>
                <p class="acad-cta-desc">A strong academic foundation today, for a brighter and bolder tomorrow.</p>
            </div>

            <div class="acad-cta-actions">
                <a href="online-registration.php" class="acad-btn-primary">
                    <span>Apply for Admission</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="contact.php#campus-map" class="acad-btn-secondary">
                    <i class="fa-regular fa-calendar-check"></i>
                    <span>Schedule a Campus Visit</span>
                </a>
            </div>
        </div>

    </div><!-- /.acad-container -->

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
