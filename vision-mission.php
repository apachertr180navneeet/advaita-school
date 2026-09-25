<?php
/**
 * Vision & Mission - Advaita School of Excellence, Parbhani
 * CBSE Affiliated (Affiliation No. 1130920)
 * Clean Semantic Layout matching the Official Design
 */
$pageTitle = "Vision & Mission - Advaita School of Excellence, Parbhani";
$activePage = "vision-mission";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper vision-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Guiding Young Minds Towards a Brighter Tomorrow
         ========================================================================= -->
    <section class="vision-hero-section">
        <div class="vision-hero-canvas">
            <!-- Background Image & Sky on the Right -->
            <div class="vision-hero-bg-visual" aria-hidden="true">
                <img src="assets/images/about-hero-building.jpg" alt="Advaita School of Excellence Campus" class="vision-hero-bg-img" loading="eager">
                <!-- Floating Script Badge in Sky -->
                <div class="vision-hero-script-tag">
                    <span class="script-title">More<br>Than A School</span>
                    <svg class="script-underline" viewBox="0 0 140 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M4 10C36 4 98 4 136 12" stroke="#F37021" stroke-width="3.5" stroke-linecap="round"/>
                        <path d="M18 14C48 9 92 8 126 15" stroke="#F37021" stroke-width="2.5" stroke-linecap="round" opacity="0.75"/>
                    </svg>
                </div>
            </div>

            <!-- Full Width Wave Mask Overlay with ambient blue contour -->
            <div class="vision-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1440 480" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="visionWaveGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#0284C7"/>
                            <stop offset="50%" stop-color="#38BDF8"/>
                            <stop offset="100%" stop-color="#60A5FA"/>
                        </linearGradient>
                    </defs>
                    <!-- Ambient soft blue aura at far left -->
                    <path d="M0,60 C90,60 140,160 140,260 C140,360 85,430 0,450 Z" fill="#E8F4FE" opacity="0.85"/>
                    <!-- Outer vibrant sky-blue contour wave -->
                    <path d="M0,0 L615,0 C665,80 725,190 805,280 C895,375 1045,435 1440,458 L1440,480 L0,480 Z" fill="url(#visionWaveGrad)" opacity="0.95"/>
                    <!-- Mid soft blue contour wave -->
                    <path d="M0,0 L600,0 C650,80 710,190 790,280 C880,375 1030,435 1440,452 L1440,480 L0,480 Z" fill="#BAE6FD"/>
                    <!-- Main solid white wave panel covering left side completely -->
                    <path d="M0,0 L585,0 C635,80 695,190 775,280 C865,375 1015,435 1440,445 L1440,480 L0,480 Z" fill="#FFFFFF"/>
                    <!-- Bottom right gentle wave contours -->
                    <path d="M850,480 C1020,420 1220,430 1440,455 L1440,480 Z" fill="#DCEEFF" opacity="0.8"/>
                    <path d="M1060,480 C1200,445 1320,450 1440,468 L1440,480 Z" fill="#BAE6FD" opacity="0.65"/>
                </svg>
            </div>

            <!-- Left Dot Matrix Decor -->
            <div class="vision-hero-dots-decor" aria-hidden="true"></div>

            <!-- Left Content Panel -->
            <div class="vision-hero-left-panel">
                <div class="vision-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <div class="vision-breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="about-us.php">About Us</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Vision &amp; Mission</span>
                    </div>

                    <span class="vision-eyebrow">OUR VISION &amp; MISSION</span>
                    <h1 class="vision-hero-title">
                        Guiding Young Minds<br>
                        Towards a <span class="text-orange">Brighter<br>Tomorrow.</span>
                    </h1>

                    <p class="vision-hero-desc">
                        At Advaita School of Excellence, our vision and mission reflect our unwavering commitment to academic excellence, strong values and the all-round development of every child.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. DUAL FEATURED HERO CARDS: OUR VISION & OUR MISSION
         ========================================================================= -->
    <section class="vision-dual-cards-section">
        <!-- Ambient decorative dots -->
        <div class="vision-dots-left" aria-hidden="true"></div>
        <div class="vision-dots-right" aria-hidden="true"></div>

        <div class="vision-dual-cards-container">
            <div class="vision-dual-cards-grid">

                <!-- Card 1: OUR VISION -->
                <div class="vision-featured-card vision-card-left">
                    <div class="vision-card-bg-visual">
                        <img src="assets/images/vision-mountain-peak.jpg" alt="Majestic Mountain Summit - Vision" class="vision-mountain-img" loading="lazy">
                        <div class="vision-mountain-overlay"></div>
                    </div>
                    
                    <div class="vision-card-content">
                        <!-- Icon Top Left -->
                        <div class="vision-card-icon-wrap icon-blue">
                            <i class="fa-solid fa-eye"></i>
                        </div>

                        <!-- Pill Badge -->
                        <div class="vision-pill-badge pill-navy">
                            OUR VISION
                        </div>

                        <!-- Main Heading -->
                        <h2 class="vision-card-heading">
                            To nurture confident, creative and responsible global citizens.
                        </h2>

                        <!-- Paragraph -->
                        <p class="vision-card-text">
                            We envision a progressive learning community where every child discovers their unique potential, builds a strong character and contributes positively to a brighter and better world.
                        </p>
                    </div>
                </div>

                <!-- Card 2: OUR MISSION -->
                <div class="vision-featured-card mission-card-right">
                    <div class="mission-card-bg-visual">
                        <img src="assets/images/mission-student-inspirational.jpg" alt="Inspiring Student - Mission" class="mission-student-img" loading="lazy">
                        <div class="mission-student-overlay"></div>
                    </div>

                    <div class="vision-card-content">
                        <!-- Icon Top Left -->
                        <div class="vision-card-icon-wrap icon-orange">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>

                        <!-- Pill Badge -->
                        <div class="vision-pill-badge pill-orange">
                            OUR MISSION
                        </div>

                        <!-- Main Heading -->
                        <h2 class="vision-card-heading">
                            To provide a holistic, value-based education with strong academic foundations.
                        </h2>

                        <!-- Paragraph -->
                        <p class="vision-card-text">
                            Our mission is to integrate modern teaching methodologies with a student-centric approach, encourage curiosity and critical thinking, and prepare students for competitive exams and life beyond the classroom.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. OUR CORE BELIEFS: What We Stand For (3 Cards Grid)
         ========================================================================= -->
    <section class="vision-beliefs-section">
        <div class="vision-beliefs-container">
            <div class="about-section-header text-center">
                <span class="about-eyebrow">— WHAT WE STAND FOR —</span>
                <h2 class="about-section-heading">
                    Our <span>Core Beliefs</span>
                </h2>
                <p class="about-section-subhead">
                    Our vision and mission are built on strong values that shape every learning experience at Advaita.
                </p>
            </div>

            <div class="vision-beliefs-grid">
                <!-- Belief 1: Academic Excellence -->
                <div class="vision-belief-card">
                    <div class="vision-belief-icon icon-blue">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <h3 class="vision-belief-title">Academic Excellence</h3>
                    <p class="vision-belief-desc">
                        A strong foundation with CBSE academics and integrated NEET/IIT preparation.
                    </p>
                </div>

                <!-- Belief 2: Character & Values -->
                <div class="vision-belief-card">
                    <div class="vision-belief-icon icon-blue">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3 class="vision-belief-title">Character &amp; Values</h3>
                    <p class="vision-belief-desc">
                        Discipline, empathy and responsibility to create compassionate individuals.
                    </p>
                </div>

                <!-- Belief 3: Holistic Development -->
                <div class="vision-belief-card">
                    <div class="vision-belief-icon icon-blue">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h3 class="vision-belief-title">Holistic Development</h3>
                    <p class="vision-belief-desc">
                        Encouraging creativity, curiosity and participation in academics, sports, arts and life skills.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. OUR FOCUS AREAS: Turning Vision into Meaningful Action (8 Cards Grid)
         ========================================================================= -->
    <section class="vision-focus-section">
        <div class="vision-focus-container">
            <div class="about-section-header text-center">
                <span class="about-eyebrow">— OUR FOCUS AREAS —</span>
                <h2 class="about-section-heading">
                    Turning Vision into <span>Meaningful Action.</span>
                </h2>
                <p class="about-section-subhead">
                    We work towards our mission through focused initiatives that ensure every child receives the right guidance, opportunities and environment to grow.
                </p>
            </div>

            <div class="vision-focus-grid">
                <!-- Focus 1: Strong CBSE Foundation -->
                <div class="vision-focus-card">
                    <div class="vision-focus-icon icon-blue">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <h3 class="vision-focus-card-title">Strong CBSE Foundation</h3>
                    <p class="vision-focus-card-desc">
                        Conceptual clarity and academic depth.
                    </p>
                </div>

                <!-- Focus 2: Integrated NEET / IIT Foundation -->
                <div class="vision-focus-card">
                    <div class="vision-focus-icon icon-sky">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="vision-focus-card-title">Integrated NEET / IIT Foundation</h3>
                    <p class="vision-focus-card-desc">
                        Early and structured preparation.
                    </p>
                </div>

                <!-- Focus 3: Experienced Faculty -->
                <div class="vision-focus-card">
                    <div class="vision-focus-icon icon-indigo">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <h3 class="vision-focus-card-title">Experienced Faculty</h3>
                    <p class="vision-focus-card-desc">
                        Mentor-led learning and personal attention.
                    </p>
                </div>

                <!-- Focus 4: Modern Infrastructure -->
                <div class="vision-focus-card">
                    <div class="vision-focus-icon icon-orange">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <h3 class="vision-focus-card-title">Modern Infrastructure</h3>
                    <p class="vision-focus-card-desc">
                        Safe, spacious and well-equipped campus.
                    </p>
                </div>

                <!-- Focus 5: Value-Based Education -->
                <div class="vision-focus-card">
                    <div class="vision-focus-icon icon-rose">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <h3 class="vision-focus-card-title">Value-Based Education</h3>
                    <p class="vision-focus-card-desc">
                        Building integrity, empathy and leadership.
                    </p>
                </div>

                <!-- Focus 6: Co-Curricular Opportunities -->
                <div class="vision-focus-card">
                    <div class="vision-focus-icon icon-amber">
                        <i class="fa-solid fa-palette"></i>
                    </div>
                    <h3 class="vision-focus-card-title">Co-Curricular Opportunities</h3>
                    <p class="vision-focus-card-desc">
                        Sports, arts, clubs and life skills.
                    </p>
                </div>

                <!-- Focus 7: Career & Life Readiness -->
                <div class="vision-focus-card">
                    <div class="vision-focus-icon icon-purple">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h3 class="vision-focus-card-title">Career &amp; Life Readiness</h3>
                    <p class="vision-focus-card-desc">
                        Guidance for competitive exams and beyond.
                    </p>
                </div>

                <!-- Focus 8: Supportive Environment -->
                <div class="vision-focus-card">
                    <div class="vision-focus-icon icon-yellow">
                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                    </div>
                    <h3 class="vision-focus-card-title">Supportive Environment</h3>
                    <p class="vision-focus-card-desc">
                        Where every child feels safe, valued and inspired.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. CTA BANNER SECTION: Be a Part of the Advaita Journey
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
                    TOGETHER TOWARDS A BRIGHTER TOMORROW
                    <span class="eyebrow-line"></span>
                </div>

                <!-- Heading -->
                <h2 class="headline">
                    Be a Part of the<br>
                    <span class="text-orange">Advaita Journey.</span>
                </h2>

                <!-- Description -->
                <p class="subtext">
                    Give your child the right start with strong academics, values and endless opportunities.
                </p>

                <!-- Buttons -->
                <div class="buttons">
                    <!-- Enrol Button -->
                    <a href="index.php#admissions" class="btn-enrol">
                        <span>Book a Campus Visit</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <!-- School Visit -->
                    <a href="index.php#contact" class="btn-visit">
                        <i class="fa-solid fa-phone"></i>
                        <span>Enquire Now</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Students Image -->
        <div class="students">
            <img src="assets/images/about-cta-students-trio.png" alt="Advaita School Students" loading="lazy">
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
