<?php
/**
 * Our Faculty - Advaita School of Excellence, Parbhani
 * CBSE Affiliated (Affiliation No. 1130920)
 * Clean Semantic Layout matching the Project Standards (Full-Width Canvas)
 */
$pageTitle = "Our Faculty - Advaita School of Excellence, Parbhani";
$activePage = "our-staff";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper staff-page-wrapper">

    <!-- =========================================================================
         1. FULL-WIDTH HERO SECTION: Meet the Educators
         ========================================================================= -->
    <section class="staff-hero-section">
        <div class="staff-hero-canvas">
            <!-- Background Image & Sky on the Right -->
            <div class="staff-hero-bg-visual">
                <img src="assets/images/about-hero-building.jpg" alt="Advaita School of Excellence Campus" class="staff-hero-bg-img" loading="eager">
                <!-- Floating Script Badge in Sky -->
                <div class="staff-hero-script-tag">
                    <span class="script-title">More<br>Than A School</span>
                    <svg class="script-underline" viewBox="0 0 140 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M4 10C36 4 98 4 136 12" stroke="#F37021" stroke-width="3.5" stroke-linecap="round"/>
                        <path d="M18 14C48 9 92 8 126 15" stroke="#F37021" stroke-width="2.5" stroke-linecap="round" opacity="0.75"/>
                    </svg>
                </div>
            </div>

            <!-- Left Organic White Panel with Curved Boundary -->
            <div class="staff-hero-left-panel">
                <div class="staff-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <nav class="staff-hero-breadcrumb" aria-label="Breadcrumb">
                        <ol class="staff-breadcrumb-list">
                            <li><a href="index.php">Home</a></li>
                            <li class="staff-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li class="staff-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="staff-breadcrumb-current" aria-current="page">Our Faculty</li>
                        </ol>
                    </nav>

                    <span class="staff-hero-eyebrow">— OUR FACULTY —</span>
                    <h1 class="staff-hero-title">
                        Meet the Educators<br>
                        Who Inspire Every<br>
                        <span>Advaita Learner.</span>
                    </h1>
                    
                    <p class="staff-hero-desc">
                        Our teachers are more than subject experts — they are mentors, role models and lifelong guides who nurture curiosity, build confidence and inspire every child to excel in academics and in life.
                    </p>
                </div>

                <!-- Organic Wave Edge SVG -->
                <div class="staff-hero-wave-edge" aria-hidden="true">
                    <svg viewBox="0 0 100 600" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Soft sky-blue glow wave -->
                        <path d="M0 0 C35 80 85 160 85 270 C85 390 30 480 75 600 L0 600 Z" fill="#d8ecff" opacity="0.6"/>
                        <!-- White solid wave -->
                        <path d="M0 0 C25 80 65 160 65 270 C65 390 15 480 55 600 L0 600 Z" fill="#ffffff"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- 2. Floating Stats Strip -->
        <div class="staff-stats-strip-wrapper">
            <div class="staff-stats-strip">
                <div class="staff-stat-item">
                    <div class="staff-stat-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="staff-stat-info">
                        <span class="staff-stat-num">80+</span>
                        <span class="staff-stat-label">Total Faculty</span>
                    </div>
                </div>

                <div class="staff-stat-item">
                    <div class="staff-stat-icon">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <div class="staff-stat-info">
                        <span class="staff-stat-num">12+</span>
                        <span class="staff-stat-label">Departments</span>
                    </div>
                </div>

                <div class="staff-stat-item">
                    <div class="staff-stat-icon">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <div class="staff-stat-info">
                        <span class="staff-stat-num">10+</span>
                        <span class="staff-stat-label">Avg. Years Experience</span>
                    </div>
                </div>

                <div class="staff-stat-item">
                    <div class="staff-stat-icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div class="staff-stat-info">
                        <span class="staff-stat-num">100%</span>
                        <span class="staff-stat-label">Postgraduate Trained</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. EDUCATORS GRID SECTION: 8 Cards
         ========================================================================= -->
    <section class="staff-grid-section">
        <div class="staff-decor-dots-left" aria-hidden="true"></div>
        <div class="staff-decor-dots-right" aria-hidden="true"></div>

        <div class="staff-grid-container">
            <div class="staff-section-header">
                <span class="staff-section-eyebrow">— OUR EDUCATORS —</span>
                <h2 class="staff-section-title">
                    The Teachers Behind Every <span>Advaita Learner.</span>
                </h2>
                <p class="staff-section-desc">
                    Each one is here because they love what they teach — and because they care deeply about how every child grows. Our faculty bring expertise, experience and a genuine passion for guiding students towards academic and personal excellence.
                </p>
            </div>

            <div class="staff-cards-grid">
                <!-- CARD 1: Principal -->
                <article class="staff-card">
                    <div class="staff-card-avatar-wrap">
                        <div class="staff-card-avatar-circle">
                            <svg class="staff-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="22" fill="#8898AA"/>
                                <path d="M16 92C16 70 32 64 50 64C68 64 84 70 84 92" fill="#8898AA"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-orange">Principal</span>
                    <h3 class="staff-card-name">Divine Mam</h3>
                    <div class="staff-card-qual qual-orange">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.A., B.Ed.</span>
                    </div>
                </article>

                <!-- CARD 2: Vice Principal -->
                <article class="staff-card">
                    <div class="staff-card-avatar-wrap">
                        <div class="staff-card-avatar-circle">
                            <svg class="staff-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="22" fill="#8898AA"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-sky">Vice Principal</span>
                    <h3 class="staff-card-name">Faculty Name 02</h3>
                    <div class="staff-card-qual qual-sky">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.Sc. (Mathematics), B.Ed.</span>
                    </div>
                </article>

                <!-- CARD 3: Senior Faculty - Science -->
                <article class="staff-card">
                    <div class="staff-card-avatar-wrap">
                        <div class="staff-card-avatar-circle">
                            <svg class="staff-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="22" fill="#8898AA"/>
                                <path d="M16 92C16 70 32 64 50 64C68 64 84 70 84 92" fill="#8898AA"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-purple">Senior Faculty - Science</span>
                    <h3 class="staff-card-name">Faculty Name 03</h3>
                    <div class="staff-card-qual qual-purple">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.Sc. (Physics), B.Ed.</span>
                    </div>
                </article>

                <!-- CARD 4: Head - English Department -->
                <article class="staff-card">
                    <div class="staff-card-avatar-wrap">
                        <div class="staff-card-avatar-circle">
                            <svg class="staff-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="22" fill="#8898AA"/>
                                <path d="M16 92C16 70 32 64 50 64C68 64 84 70 84 92" fill="#8898AA"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-rose">Head - English Department</span>
                    <h3 class="staff-card-name">Faculty Name 04</h3>
                    <div class="staff-card-qual qual-rose">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.A. (English), M.Ed.</span>
                    </div>
                </article>

                <!-- CARD 5: Senior Faculty - Mathematics -->
                <article class="staff-card">
                    <div class="staff-card-avatar-wrap">
                        <div class="staff-card-avatar-circle">
                            <svg class="staff-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="22" fill="#8898AA"/>
                                <path d="M16 92C16 70 32 64 50 64C68 64 84 70 84 92" fill="#8898AA"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-green">Senior Faculty - Mathematics</span>
                    <h3 class="staff-card-name">Faculty Name 05</h3>
                    <div class="staff-card-qual qual-green">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.Sc. (Maths), B.Ed.</span>
                    </div>
                </article>

                <!-- CARD 6: Head - Hindi Department -->
                <article class="staff-card">
                    <div class="staff-card-avatar-wrap">
                        <div class="staff-card-avatar-circle">
                            <svg class="staff-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="22" fill="#8898AA"/>
                                <path d="M16 92C16 70 32 64 50 64C68 64 84 70 84 92" fill="#8898AA"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-amber">Head - Hindi Department</span>
                    <h3 class="staff-card-name">Faculty Name 06</h3>
                    <div class="staff-card-qual qual-amber">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.A. (Hindi), B.Ed.</span>
                    </div>
                </article>

                <!-- CARD 7: Senior Faculty - Commerce -->
                <article class="staff-card">
                    <div class="staff-card-avatar-wrap">
                        <div class="staff-card-avatar-circle">
                            <svg class="staff-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="22" fill="#8898AA"/>
                                <path d="M16 92C16 70 32 64 50 64C68 64 84 70 84 92" fill="#8898AA"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-cyan">Senior Faculty - Commerce</span>
                    <h3 class="staff-card-name">Faculty Name 07</h3>
                    <div class="staff-card-qual qual-cyan">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.Com., B.Ed.</span>
                    </div>
                </article>

                <!-- CARD 8: Head - Primary Wing -->
                <article class="staff-card">
                    <div class="staff-card-avatar-wrap">
                        <div class="staff-card-avatar-circle">
                            <svg class="staff-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="22" fill="#8898AA"/>
                                <path d="M16 92C16 70 32 64 50 64C68 64 84 70 84 92" fill="#8898AA"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-pink">Head - Primary Wing</span>
                    <h3 class="staff-card-name">Faculty Name 08</h3>
                    <div class="staff-card-qual qual-pink">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.A., D.Ed., B.Ed.</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. CAMPUS PREVIEW STRIP: Take a closer look at life at Advaita
         ========================================================================= -->
    <section class="staff-campus-strip-section">
        <div class="staff-campus-strip-container">
            <div class="staff-campus-strip-card">
                <div class="staff-campus-strip-left">
                    <div class="staff-campus-strip-bar"></div>
                    <h3 class="staff-campus-strip-title">
                        Take a closer look<br>
                        at life at <span>Advaita.</span>
                    </h3>
                    <p class="staff-campus-strip-desc">
                        Visit our campus to meet our faculty, experience our learning environment and see how we shape brighter futures.
                    </p>
                </div>

                <div class="staff-campus-strip-thumbs">
                    <div class="staff-strip-thumb-item">
                        <img src="assets/images/about-hero-building.jpg" alt="Advaita Campus" class="staff-strip-thumb-img" loading="lazy">
                    </div>
                    <div class="staff-strip-thumb-item">
                        <img src="assets/images/fac-library.jpg" alt="Advaita Library" class="staff-strip-thumb-img" loading="lazy">
                    </div>
                    <div class="staff-strip-thumb-item">
                        <img src="assets/images/fac-science-lab.jpg" alt="Advaita Science Lab" class="staff-strip-thumb-img" loading="lazy">
                    </div>
                </div>

                <div class="staff-campus-strip-right">
                    <a href="index.php#admissions" class="staff-strip-btn-orange">
                        <span>Book a Campus Visit</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="index.php#campus-life" class="staff-strip-btn-video">
                        <i class="fa-solid fa-circle-play"></i>
                        <span>Watch Campus Video</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. CTA BANNER SECTION: 100% Full-Width Edge-to-Edge (0 Gap to Footer)
         ========================================================================= -->
    <section class="chairman-cta-banner-section">
        <div class="chairman-cta-banner-full">
            <div class="chairman-cta-left-content">
                <!-- Origami Paper Airplane & Flight Loop Vector -->
                <svg class="chairman-cta-flight-svg" viewBox="0 0 250 190" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
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

                <div class="chairman-cta-text-content">
                    <span class="chairman-cta-eyebrow">
                        BE A PART OF ADVAITA <span class="eyebrow-dash">—</span>
                    </span>
                    <h2 class="chairman-cta-title">
                        Together, let’s build<br>
                        <span>brighter tomorrows.</span>
                    </h2>
                    <p class="chairman-cta-desc">
                        Give your child the right start with strong academics, values and endless opportunities.
                    </p>
                    <div class="chairman-cta-actions">
                        <a href="index.php#admissions" class="chairman-btn-orange-solid">
                            <span>Book a Campus Visit</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="index.php#contact" class="chairman-btn-navy-outline">
                            <span>Enquire Now</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Curved Arch Frame with Student Trio Image -->
            <div class="chairman-cta-arch-wrapper">
                <img src="assets/images/about-cta-students-trio.png" alt="Advaita Students" class="chairman-cta-arch-img" loading="lazy">
            </div>
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
