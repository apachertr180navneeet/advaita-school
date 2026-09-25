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
            <div class="vision-hero-bg-visual">
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

            <!-- Left Organic White Panel with Curved Boundary -->
            <div class="vision-hero-left-panel">
                <!-- Ambient decorative dots -->
                <div class="vision-hero-dots-decor" aria-hidden="true"></div>

                <div class="vision-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <nav class="vision-hero-breadcrumb" aria-label="Breadcrumb">
                        <ol class="vision-breadcrumb-list">
                            <li><a href="index.php">Home</a></li>
                            <li class="vision-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li class="vision-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="vision-breadcrumb-current" aria-current="page">Vision &amp; Mission</li>
                        </ol>
                    </nav>

                    <span class="vision-hero-eyebrow">— OUR VISION &amp; MISSION —</span>
                    <h1 class="vision-hero-title">
                        Guiding Young Minds<br>
                        Towards a <span>Brighter Tomorrow.</span>
                    </h1>

                    <p class="vision-hero-desc">
                        At Advaita School of Excellence, our vision and mission reflect our unwavering commitment to academic excellence, strong values and the all-round development of every child.
                    </p>
                </div>

                <!-- Organic Wave Edge SVG -->
                <div class="vision-hero-wave-edge" aria-hidden="true">
                    <svg viewBox="0 0 100 600" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0 C35 80 85 160 85 270 C85 390 30 480 75 600 L0 600 Z" fill="#d8ecff" opacity="0.6"/>
                        <path d="M0 0 C25 80 65 160 65 270 C65 390 15 480 55 600 L0 600 Z" fill="#ffffff"/>
                    </svg>
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
    <section class="vision-cta-banner-section">
        <div class="vision-cta-banner-full">
            <!-- Left Content Area -->
            <div class="vision-cta-left-content">
                <!-- Origami Paper Airplane & Flight Loop Vector -->
                <svg class="vision-cta-flight-svg" viewBox="0 0 250 190" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <!-- Dot Grid 6x4 -->
                    <g fill="#93c5fd" opacity="0.85">
                        <circle cx="16" cy="35" r="2.2"/>
                        <circle cx="32" cy="35" r="2.2"/>
                        <circle cx="48" cy="35" r="2.2"/>
                        <circle cx="64" cy="35" r="2.2"/>
                        <circle cx="80" cy="35" r="2.2"/>
                        <circle cx="96" cy="35" r="2.2"/>

                        <circle cx="16" cy="50" r="2.2"/>
                        <circle cx="32" cy="50" r="2.2"/>
                        <circle cx="48" cy="50" r="2.2"/>
                        <circle cx="64" cy="50" r="2.2"/>
                        <circle cx="80" cy="50" r="2.2"/>
                        <circle cx="96" cy="50" r="2.2"/>

                        <circle cx="16" cy="65" r="2.2"/>
                        <circle cx="32" cy="65" r="2.2"/>
                        <circle cx="48" cy="65" r="2.2"/>
                        <circle cx="64" cy="65" r="2.2"/>
                        <circle cx="80" cy="65" r="2.2"/>
                        <circle cx="96" cy="65" r="2.2"/>

                        <circle cx="16" cy="80" r="2.2"/>
                        <circle cx="32" cy="80" r="2.2"/>
                        <circle cx="48" cy="80" r="2.2"/>
                        <circle cx="64" cy="80" r="2.2"/>
                        <circle cx="80" cy="80" r="2.2"/>
                        <circle cx="96" cy="80" r="2.2"/>
                    </g>
                    <!-- Flight Loop Trail -->
                    <path d="M 2 175 C 38 125 78 85 108 108 C 132 126 114 168 86 162 C 58 156 64 100 102 72 C 132 52 162 34 192 20" stroke="#38bdf8" stroke-width="2.2" stroke-dasharray="5 5" stroke-linecap="round"/>
                    <!-- 3D Origami Paper Airplane -->
                    <g transform="translate(188, 8) rotate(22)">
                        <polygon points="0,24 44,0 34,30" fill="#38bdf8"/>
                        <polygon points="0,24 44,0 18,22" fill="#7dd3fc"/>
                        <polygon points="18,22 44,0 26,32" fill="#0284c7"/>
                        <polygon points="26,32 34,30 44,0" fill="#0369a1"/>
                    </g>
                </svg>

                <div class="vision-cta-text-wrapper">
                    <span class="vision-cta-eyebrow">— TOGETHER TOWARDS A BRIGHTER TOMORROW —</span>
                    <h2 class="vision-cta-title">
                        Be a Part of the<br>
                        <span>Advaita Journey</span>
                    </h2>
                    <p class="vision-cta-desc">
                        Give your child the right start with strong academics, values and endless opportunities.
                    </p>

                    <!-- Dual Action Buttons -->
                    <div class="vision-cta-actions">
                        <a href="index.php#admissions" class="vision-btn-orange">
                            <span>Book a Campus Visit</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="index.php#contact" class="vision-btn-enquire">
                            <span>Enquire Now</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Visual Area with Curved Cutout Student Image -->
            <div class="vision-cta-right-visual">
                <div class="vision-cta-arch-wrapper">
                    <img src="assets/images/about-cta-students-trio.png" alt="Advaita School Students" class="vision-cta-arch-img" loading="lazy">
                </div>
            </div>
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
