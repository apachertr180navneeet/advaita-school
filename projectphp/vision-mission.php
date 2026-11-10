<?php
/**
 * Vision & Mission - Advaita School of Excellence, Parbhani
 * CBSE Affiliated (Affiliation No. 1130920)
 * Clean Semantic Layout matching the Official Design
 */
$pageTitle = 'Vision & Mission - Advaita School of Excellence, Parbhani';
$activePage = 'vision-mission';

require_once __DIR__.'/includes/header.php';
?>

<link rel="stylesheet" href="assets/css/vision-mission.css">

<main id="main" class="main-content-wrapper vision-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Guiding Young Minds Towards a Brighter Tomorrow (Centered)
         ========================================================================= -->
    <section class="vision-hero-section">
        <div class="vision-hero-canvas vision-hero-centered-canvas">
            <!-- Background Image & Subtle Ambient Overlay -->
            <div class="vision-hero-bg-visual" aria-hidden="true">
                <img src="assets/images/about-hero-building.jpg" alt="Advaita School of Excellence Campus" class="vision-hero-bg-img" loading="eager">
                <div class="vision-hero-overlay-center"></div>
            </div>

            <!-- Centered Content Panel -->
            <div class="vision-hero-center-panel">
                <div class="vision-hero-content-inner text-center">
                    <!-- Breadcrumbs Centered -->
                    <nav class="vision-breadcrumb vision-breadcrumb-center" aria-label="Breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="about-us.php">About Us</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Vision &amp; Mission</span>
                    </nav>

                    <div class="vision-eyebrow-pill">
                        <i class="fa-solid fa-compass"></i>
                        <span>OUR VISION &amp; MISSION</span>
                    </div>

                    <h1 class="vision-hero-title">
                        Guiding Young Minds Towards a
                        <span class="text-orange">Brighter Tomorrow.</span>
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
        <div class="vision-dual-cards-container">
            <div class="vision-dual-cards-grid">

                <!-- Card 1: OUR VISION (With Advaita Students Image) -->
                <div class="vision-featured-card vision-card-left">
                    <div class="vision-card-bg-visual">
                        <img src="assets/images/about-vision-students.jpg" alt="Advaita Students Learning - Vision" class="vision-mountain-img" loading="lazy">
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

                <!-- Card 2: OUR MISSION (With Advaita Students Image) -->
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
         3. OUR CORE BELIEFS: What We Stand For (Cards + Children Photo)
         ========================================================================= -->
    <section class="vision-beliefs-section">
        <div class="vision-beliefs-container">
            <div class="about-section-header text-center">
                <span class="about-eyebrow">WHAT WE STAND FOR</span>
                <h2 class="about-section-heading">
                    Our <span>Core Beliefs</span>
                </h2>
                <p class="about-section-subhead">
                    Our vision and mission are built on strong values that shape every learning experience at Advaita.
                </p>
            </div>

            <!-- Two-column split: Left 3 Core Belief Cards + Right Children Showcase Image -->
            <div class="vision-beliefs-split-layout">
                <!-- Left: 3 Core Belief Cards Stacked -->
                <div class="vision-beliefs-cards-col">
                    <!-- Belief 1: Academic Excellence -->
                    <div class="vision-belief-card card-orange-accent">
                        <div class="vision-belief-icon icon-orange">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div class="vision-belief-info">
                            <h3 class="vision-belief-title">Academic Excellence</h3>
                            <p class="vision-belief-desc">
                                A strong foundation with CBSE academics and integrated NEET/IIT preparation.
                            </p>
                        </div>
                    </div>

                    <!-- Belief 2: Character & Values -->
                    <div class="vision-belief-card card-blue-accent">
                        <div class="vision-belief-icon icon-blue">
                            <i class="fa-solid fa-shield-heart"></i>
                        </div>
                        <div class="vision-belief-info">
                            <h3 class="vision-belief-title">Character &amp; Values</h3>
                            <p class="vision-belief-desc">
                                Discipline, empathy and responsibility to create compassionate individuals.
                            </p>
                        </div>
                    </div>

                    <!-- Belief 3: Holistic Development -->
                    <div class="vision-belief-card card-green-accent">
                        <div class="vision-belief-icon icon-green">
                            <i class="fa-solid fa-palette"></i>
                        </div>
                        <div class="vision-belief-info">
                            <h3 class="vision-belief-title">Holistic Development</h3>
                            <p class="vision-belief-desc">
                                Encouraging creativity, curiosity and participation in academics, sports, arts and life skills.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right: High-quality Image of Advaita Children -->
                <div class="vision-beliefs-media-col">
                    <div class="vision-beliefs-photo-frame">
                        <img src="assets/images/about-commitment-students.jpg" 
                             alt="Advaita School students smiling together" 
                             class="vision-beliefs-photo" 
                             loading="lazy">
                        
                        <!-- Floating Trust Badge over photo -->
                        <div class="vision-beliefs-floating-badge">
                            <div class="vbfb-icon">
                                <i class="fa-solid fa-shapes"></i>
                            </div>
                            <div class="vbfb-text">
                                <strong>Values in Action</strong>
                                <span>Confidence &bull; Character &bull; Excellence</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. OUR FOCUS AREAS: Turning Vision into Meaningful Action (8 Cards Grid)
         ========================================================================= -->
    <section class="vision-focus-section">
        <!-- Ambient Decor Dots -->
        <div class="vision-focus-dots-left" aria-hidden="true"></div>
        <div class="vision-focus-dots-right" aria-hidden="true"></div>

        <div class="vision-focus-container">
            <div class="about-section-header text-center">
                <span class="vision-focus-eyebrow">OUR FOCUS AREAS</span>
                <h2 class="about-section-heading">
                    Turning Vision into <span class="text-orange">Meaningful Action.</span>
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
                        <i class="fa-solid fa-users"></i>
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
    <section class="staff-join-section">
        <!-- Background Shapes -->
        <div class="shape-one"></div>
        <div class="shape-two"></div>
        <div class="shape-three"></div>

        <!-- Left Graphic: Paper Airplane SVG -->
        <div class="staff-join-plane-left" aria-hidden="true">
            <svg class="staff-join-plane-img" viewBox="0 0 360 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Dotted Loop Flight Path -->
                <path d="M 15 205 C 70 150, 110 98, 165 98 C 215 98, 235 145, 205 165 C 175 180, 178 125, 255 58" 
                      stroke="#0284C7" 
                      stroke-width="2.4" 
                      stroke-dasharray="6 6" 
                      stroke-linecap="round" 
                      opacity="0.85" />
                <!-- Classic Straight Paper Airplane -->
                <g transform="translate(255, 58) rotate(-38)">
                    <polygon points="46,0 0,-18 16,0" fill="#E0F2FE" stroke="#0284C7" stroke-width="1.8" stroke-linejoin="round"/>
                    <polygon points="46,0 16,0 0,18" fill="#38BDF8" stroke="#0284C7" stroke-width="1.8" stroke-linejoin="round"/>
                    <polygon points="16,0 0,18 6,6" fill="#0284C7" stroke="#0284C7" stroke-width="1.2" stroke-linejoin="round"/>
                    <line x1="46" y1="0" x2="16" y2="0" stroke="#0284C7" stroke-width="1.8" stroke-linecap="round"/>
                </g>
            </svg>
        </div>

        <!-- Center Content -->
        <div class="banner-content-center">
            <div class="copy-center">
                <div class="eyebrow">— TOGETHER TOWARDS A BRIGHTER TOMORROW —</div>
                <h2 class="headline">
                    Be a Part of the <span class="text-orange">Advaita Journey</span>
                </h2>
                <p class="subtext">
                    Give your child the right start with strong academics, values and endless opportunities.
                </p>
                <div class="buttons">
                    <a href="index.php#admissions" class="staff-btn-orange">
                        <span>Book a Campus Visit</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="index.php#contact" class="staff-btn-outline">
                        <span>Enquire Now</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Dots Pattern on Right before students -->
        <div class="dot-pattern"></div>

        <!-- Students Image on Right -->
        <div class="students">
            <img src="assets/images/about-cta-students-trio.png" alt="Advaita Students" loading="lazy">
        </div>
    </section>

</main>

<?php
require_once __DIR__.'/includes/footer.php';
?>
