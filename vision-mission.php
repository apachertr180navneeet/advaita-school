<?php
/**
 * Vision & Mission - Advaita School of Excellence, Parbhani
 * CBSE Affiliated (Affiliation No. 1130920)
 * Exact Visual Layout matching Official Reference (reference-5.png)
 */
$pageTitle = "Vision & Mission - Advaita School of Excellence, Parbhani";
$activePage = "vision-mission";

require_once __DIR__ . '/includes/header.php';
?>

<div class="inner-page-wrapper vision-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Guiding Young Minds Towards a Brighter Tomorrow
         ========================================================================= -->
    <section class="inner-hero-section">
        <div class="inner-hero-canvas">
            
            <!-- Left Dot Matrix Decor -->
            <div class="inner-hero-dots-decor" aria-hidden="true"></div>

            <!-- Left Content Panel -->
            <div class="inner-hero-left-panel">
                <div class="inner-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <div class="inner-breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="sep">›</span>
                        <a href="about-us.php">About Us</a>
                        <span class="sep">›</span>
                        <span class="active">Vision &amp; Mission</span>
                    </div>

                    <div class="inner-eyebrow">— OUR VISION &amp; MISSION —</div>
                    
                    <h1 class="inner-hero-title">
                        Guiding Young Minds<br>
                        Towards a <span class="text-orange">Brighter<br>Tomorrow.</span>
                    </h1>
                    
                    <p class="inner-hero-desc">
                        At Advaita School of Excellence, our vision and mission reflect our unwavering commitment to academic excellence, strong values and the all-round development of every child.
                    </p>
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
    </section>

    <!-- =========================================================================
         2. DUAL VISION & MISSION CARDS SECTION
         ========================================================================= -->
    <section class="dual-vision-mission-section">
        <div class="section-decor-dots dots-left" aria-hidden="true"></div>
        <div class="section-decor-dots dots-right" aria-hidden="true"></div>

        <div class="dual-vm-container">
            <div class="dual-vm-grid">
                
                <!-- Card 1: Our Vision (Light Blue with Mountain Background) -->
                <div class="vm-card card-vision">
                    <div class="vm-card-bg-visual visual-mountain" aria-hidden="true">
                        <img src="assets/images/vision-mountain-peak.jpg" alt="Mountain Peak Vision" class="vm-bg-img" loading="lazy">
                    </div>
                    <div class="vm-card-content">
                        <div class="vm-badge-wrap">
                            <div class="vm-badge-icon badge-blue">
                                <i class="fa-regular fa-eye"></i>
                            </div>
                            <span class="vm-pill-badge pill-blue">OUR VISION</span>
                        </div>

                        <h2 class="vm-card-title">
                            To nurture confident, creative and responsible global citizens.
                        </h2>

                        <p class="vm-card-desc">
                            We envision a progressive learning community where every child discovers their unique potential, builds a strong character and contributes positively to a brighter and better world.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Our Mission (Light Orange with Student Photo) -->
                <div class="vm-card card-mission">
                    <div class="vm-card-bg-visual visual-student" aria-hidden="true">
                        <img src="assets/images/mission-student-inspirational.jpg" alt="Advaita Student Mission" class="vm-bg-img" loading="lazy">
                    </div>
                    <div class="vm-card-content">
                        <div class="vm-badge-wrap">
                            <div class="vm-badge-icon badge-orange">
                                <i class="fa-solid fa-bullseye"></i>
                            </div>
                            <span class="vm-pill-badge pill-orange">OUR MISSION</span>
                        </div>

                        <h2 class="vm-card-title">
                            To provide a holistic, value-based education with strong academic foundations.
                        </h2>

                        <p class="vm-card-desc">
                            Our mission is to integrate modern teaching methodologies with a student-centric approach, encourage curiosity and critical thinking, and prepare students for competitive exams and life beyond the classroom.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. OUR CORE BELIEFS SECTION (3 Cards)
         ========================================================================= -->
    <section class="core-beliefs-section">
        <div class="core-beliefs-container">
            <div class="beliefs-section-header">
                <div class="section-eyebrow">— WHAT WE STAND FOR —</div>
                <h2 class="section-title">
                    Our <span class="text-orange">Core Beliefs</span>
                </h2>
                <p class="section-subtitle">
                    Our vision and mission are built on strong values that shape every learning experience at Advaita.
                </p>
            </div>

            <div class="core-beliefs-grid">
                <!-- Belief 1: Academic Excellence -->
                <div class="core-belief-card">
                    <div class="belief-icon-circle icon-blue">
                        <i class="fa-regular fa-eye"></i>
                    </div>
                    <h3 class="belief-title">Academic Excellence</h3>
                    <p class="belief-desc">
                        A strong foundation with CBSE academics and integrated NEET/IIT preparation.
                    </p>
                </div>

                <!-- Belief 2: Character & Values -->
                <div class="core-belief-card">
                    <div class="belief-icon-circle icon-blue">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3 class="belief-title">Character &amp; Values</h3>
                    <p class="belief-desc">
                        Discipline, empathy and responsibility to create compassionate individuals.
                    </p>
                </div>

                <!-- Belief 3: Holistic Development -->
                <div class="core-belief-card">
                    <div class="belief-icon-circle icon-blue">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h3 class="belief-title">Holistic Development</h3>
                    <p class="belief-desc">
                        Encouraging creativity, curiosity and participation in academics, sports, arts and life skills.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. TURNING VISION INTO MEANINGFUL ACTION (8 Cards Grid)
         ========================================================================= -->
    <section class="focus-areas-section">
        <div class="focus-areas-container">
            <div class="beliefs-section-header">
                <div class="section-eyebrow">— OUR FOCUS AREAS —</div>
                <h2 class="section-title">
                    Turning Vision into <span class="text-orange">Meaningful Action.</span>
                </h2>
                <p class="section-subtitle">
                    We work towards our mission through focused initiatives that ensure every child receives the right guidance, opportunities and environment to grow.
                </p>
            </div>

            <div class="focus-areas-grid">
                <!-- 1. Strong CBSE Foundation -->
                <div class="focus-card">
                    <div class="focus-icon-circle icon-blue">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <h3 class="focus-title">Strong CBSE Foundation</h3>
                    <p class="focus-desc">Conceptual clarity and academic depth.</p>
                </div>

                <!-- 2. Integrated NEET / IIT Foundation -->
                <div class="focus-card">
                    <div class="focus-icon-circle icon-sky">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="focus-title">Integrated NEET / IIT Foundation</h3>
                    <p class="focus-desc">Early and structured preparation.</p>
                </div>

                <!-- 3. Experienced Faculty -->
                <div class="focus-card">
                    <div class="focus-icon-circle icon-blue">
                        <i class="fa-solid fa-users-gear"></i>
                    </div>
                    <h3 class="focus-title">Experienced Faculty</h3>
                    <p class="focus-desc">Mentor-led learning and personal attention.</p>
                </div>

                <!-- 4. Modern Infrastructure -->
                <div class="focus-card">
                    <div class="focus-icon-circle icon-orange">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <h3 class="focus-title">Modern Infrastructure</h3>
                    <p class="focus-desc">Safe, spacious and well-equipped campus.</p>
                </div>

                <!-- 5. Value-Based Education -->
                <div class="focus-card">
                    <div class="focus-icon-circle icon-pink">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <h3 class="focus-title">Value-Based Education</h3>
                    <p class="focus-desc">Building integrity, empathy and leadership.</p>
                </div>

                <!-- 6. Co-Curricular Opportunities -->
                <div class="focus-card">
                    <div class="focus-icon-circle icon-orange">
                        <i class="fa-solid fa-palette"></i>
                    </div>
                    <h3 class="focus-title">Co-Curricular Opportunities</h3>
                    <p class="focus-desc">Sports, arts, clubs and life skills.</p>
                </div>

                <!-- 7. Career & Life Readiness -->
                <div class="focus-card">
                    <div class="focus-icon-circle icon-purple">
                        <i class="fa-solid fa-compass"></i>
                    </div>
                    <h3 class="focus-title">Career &amp; Life Readiness</h3>
                    <p class="focus-desc">Guidance for competitive exams and beyond.</p>
                </div>

                <!-- 8. Supportive Environment -->
                <div class="focus-card">
                    <div class="focus-icon-circle icon-yellow">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h3 class="focus-title">Supportive Environment</h3>
                    <p class="focus-desc">Where every child feels safe, valued and inspired.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. BE A PART OF THE ADVAITA JOURNEY (CTA Banner)
         ========================================================================= -->
    <section class="inner-join-banner-section cta-variant">
        <div class="inner-join-banner-container">
            <!-- Left Paper Airplane Graphic -->
            <div class="join-plane-wrap" aria-hidden="true">
                <img src="assets/images/staff-join-airplane-bg.png" alt="Airplane Trail" class="join-plane-img" loading="lazy">
            </div>

            <!-- Center Content -->
            <div class="join-content-center">
                <div class="section-eyebrow">— TOGETHER TOWARDS A BRIGHTER TOMORROW —</div>
                <h2 class="join-title">Be a Part of the <span class="text-orange">Advaita Journey</span></h2>
                <p class="join-desc">
                    Give your child the right start with strong academics, values and endless opportunities.
                </p>
                <div class="join-actions">
                    <a href="index.php#admissions" class="btn-orange-pill">
                        <span>Book a Campus Visit</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="index.php#admissions" class="btn-white-pill">
                        <span>Enquire Now</span>
                        <i class="fa-solid fa-arrow-right"></i>
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
