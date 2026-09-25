<?php
/**
 * Our Faculty - Advaita School of Excellence, Parbhani
 * CBSE Affiliated (Affiliation No. 1130920)
 * Exact Visual Layout matching the Official Design
 */
$pageTitle = "Our Faculty - Advaita School of Excellence, Parbhani";
$activePage = "our-staff";

require_once __DIR__ . '/includes/header.php';
?>

<div class="faculty-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Meet the Educators
         ========================================================================= -->
    <section class="staff-hero-section">
        <div class="staff-hero-canvas">
            <!-- Background Image & Sky on the Right -->
            <div class="staff-hero-bg-visual">
                <img src="assets/images/about-hero-building.jpg" alt="Advaita School Building Campus" class="staff-hero-bg-img" loading="eager">
                <!-- Floating Script Badge in Sky -->
                <div class="staff-hero-script-tag">
                    <span class="script-title">More<br>Than A School</span>
                    <svg class="script-underline" viewBox="0 0 140 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M4 10C36 4 98 4 136 12" stroke="#F37021" stroke-width="3.5" stroke-linecap="round"/>
                        <path d="M18 14C48 9 92 8 126 15" stroke="#F37021" stroke-width="2.5" stroke-linecap="round" opacity="0.75"/>
                    </svg>
                </div>
            </div>

            <!-- Full Width Wave Mask Overlay with ambient blue contour -->
            <div class="staff-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1440 500" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Soft blue ambient circle at far left -->
                    <ellipse cx="60" cy="180" rx="140" ry="240" fill="#E8F4FE" opacity="0.8" />
                    <!-- Outer soft blue contour wave -->
                    <path d="M0 0 L660 0 C700 80 735 170 805 270 C880 375 1020 440 1440 460 L1440 500 L0 500 Z" fill="#D0E8FD" />
                    <!-- Main white curved wave -->
                    <path d="M0 0 L640 0 C680 80 715 170 785 270 C860 375 1000 435 1440 450 L1440 500 L0 500 Z" fill="#FFFFFF" />
                </svg>
            </div>

            <!-- Left Content Panel -->
            <div class="staff-hero-left-panel">
                <div class="staff-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <div class="staff-breadcrumb">
                        <span>Home</span>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span>About Us</span>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Our Faculty</span>
                    </div>

                    <span class="staff-eyebrow">— OUR FACULTY —</span>
                    <h1 class="staff-hero-title">
                        Meet the Educators<br>
                        Who Inspire Every<br>
                        <span class="text-orange">Advaita Learner</span>.
                    </h1>
                    
                    <p class="staff-hero-desc">
                        Our teachers are more than subject experts — they are mentors, role models and lifelong guides who nurture curiosity, build confidence and inspire every child to excel in academics and in life.
                    </p>
                </div>
            </div>
        </div>

        <!-- Floating Stats Strip -->
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
         2. EDUCATORS GRID SECTION (8 Cards)
         ========================================================================= -->
    <section class="staff-grid-section">
        <!-- Ambient decorative dot patterns -->
        <div class="staff-decor-dots-left" aria-hidden="true"></div>
        <div class="staff-decor-dots-right" aria-hidden="true"></div>

        <div class="staff-grid-container">
            <div class="staff-section-header">
                <span class="staff-educators-eyebrow">— OUR EDUCATORS —</span>
                <h2 class="staff-section-title">
                    The Teachers Behind Every <span class="text-orange">Advaita Learner.</span>
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
                                <circle cx="50" cy="38" r="20" fill="#8d99ae"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#8d99ae"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-orange">PRINCIPAL</span>
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
                                <circle cx="50" cy="38" r="20" fill="#8d99ae"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#8d99ae"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-blue">VICE PRINCIPAL</span>
                    <h3 class="staff-card-name">Faculty Name 02</h3>
                    <div class="staff-card-qual qual-blue">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.Sc. (Mathematics), B.Ed.</span>
                    </div>
                </article>

                <!-- CARD 3: Senior Faculty - Science -->
                <article class="staff-card">
                    <div class="staff-card-avatar-wrap">
                        <div class="staff-card-avatar-circle">
                            <svg class="staff-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="20" fill="#8d99ae"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#8d99ae"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-purple">SENIOR FACULTY - SCIENCE</span>
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
                                <circle cx="50" cy="38" r="20" fill="#8d99ae"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#8d99ae"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-rose">HEAD - ENGLISH DEPARTMENT</span>
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
                                <circle cx="50" cy="38" r="20" fill="#8d99ae"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#8d99ae"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-green">SENIOR FACULTY - MATHEMATICS</span>
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
                                <circle cx="50" cy="38" r="20" fill="#8d99ae"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#8d99ae"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-amber">HEAD - HINDI DEPARTMENT</span>
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
                                <circle cx="50" cy="38" r="20" fill="#8d99ae"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#8d99ae"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-cyan">SENIOR FACULTY - COMMERCE</span>
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
                                <circle cx="50" cy="38" r="20" fill="#8d99ae"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#8d99ae"/>
                            </svg>
                        </div>
                    </div>
                    <span class="staff-role-pill role-pink">HEAD - PRIMARY WING</span>
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
         3. JOIN OUR TEAM SECTION: Want to Teach with Us? (Centered Text Layout)
         ========================================================================= -->
    <section class="staff-join-section">
        <!-- Background Shapes -->
        <div class="shape-one"></div>
        <div class="shape-two"></div>
        <div class="shape-three"></div>

        <!-- Left Vector Graphics (Paper Airplane & Dot Matrix) -->
        <div class="staff-join-plane-left" aria-hidden="true">
            <svg class="staff-join-flight-svg" viewBox="0 0 280 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- 4x3 Dot Grid in upper-left -->
                <g fill="#99c9f5" opacity="0.85">
                    <circle cx="55" cy="48" r="2.5"/>
                    <circle cx="71" cy="48" r="2.5"/>
                    <circle cx="87" cy="48" r="2.5"/>
                    <circle cx="103" cy="48" r="2.5"/>
                    <circle cx="55" cy="62" r="2.5"/>
                    <circle cx="71" cy="62" r="2.5"/>
                    <circle cx="87" cy="62" r="2.5"/>
                    <circle cx="103" cy="62" r="2.5"/>
                    <circle cx="55" cy="76" r="2.5"/>
                    <circle cx="71" cy="76" r="2.5"/>
                    <circle cx="87" cy="76" r="2.5"/>
                    <circle cx="103" cy="76" r="2.5"/>
                </g>
                <!-- Dashed looping flight line trail -->
                <path d="M 42 155 C 62 132, 82 112, 102 100 C 128 85, 148 108, 138 132 C 129 154, 106 148, 100 125 C 96 102, 122 72, 155 48 C 172 36, 192 30, 208 26" stroke="#38bdf8" stroke-width="2.5" stroke-dasharray="5 5" stroke-linecap="round"/>
                <!-- Origami 3D Paper Airplane -->
                <g transform="translate(198, 22) rotate(6)">
                    <polygon points="35,0 -5,6 12,14" fill="#a5f3fc"/>
                    <polygon points="35,0 12,14 16,24" fill="#38bdf8"/>
                    <polygon points="35,0 16,24 26,18" fill="#0284c7"/>
                    <polygon points="35,0 26,18 20,8" fill="#0369a1"/>
                </g>
            </svg>
        </div>

        <!-- Center Content -->
        <div class="banner-content-center">
            <div class="copy-center">
                <div class="eyebrow">— JOIN OUR TEAM —</div>
                <h2 class="headline">Want to Teach with <span class="text-orange">Us?</span></h2>
                <p class="subtext">
                    We are always looking for passionate educators who believe in creating brighter futures. Explore open roles or share your CV with us.
                </p>
                <div class="buttons">
                    <a href="index.php#contact" class="staff-btn-orange">
                        <span>See Open Roles</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="mailto:info@advaitaschool.edu.in" class="staff-btn-outline">
                        <i class="fa-regular fa-envelope"></i>
                        <span>Send Your CV</span>
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

    <!-- =========================================================================
         4. CAMPUS SHOWCASE STRIP: Take a closer look at life at Advaita
         ========================================================================= -->
    <section class="staff-campus-showcase-section">
        <div class="staff-campus-showcase-card">
            <!-- Left Content -->
            <div class="staff-showcase-left">
                <div class="staff-showcase-bar"></div>
                <h3 class="staff-showcase-title">
                    Take a closer look<br>
                    at life at <span class="text-orange">Advaita.</span>
                </h3>
                <p class="staff-showcase-desc">
                    Visit our campus to meet our faculty, experience our learning environment and see how we shape brighter futures.
                </p>
            </div>

            <!-- Middle 3 Image Gallery -->
            <div class="staff-showcase-gallery">
                <div class="staff-showcase-thumb">
                    <img src="assets/images/about-hero-building.jpg" alt="Advaita Campus Building" class="staff-thumb-img" loading="lazy">
                </div>
                <div class="staff-showcase-thumb">
                    <img src="assets/images/fac-library.jpg" alt="Advaita Library" class="staff-thumb-img" loading="lazy">
                </div>
                <div class="staff-showcase-thumb">
                    <img src="assets/images/fac-science-lab.jpg" alt="Advaita Science Lab" class="staff-thumb-img" loading="lazy">
                </div>
            </div>

            <!-- Right Action Buttons -->
            <div class="staff-showcase-actions">
                <a href="index.php#admissions" class="staff-showcase-btn-orange">
                    <span>Book a Campus Visit</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="index.php#campus-life" class="staff-showcase-btn-video">
                    <i class="fa-solid fa-circle-play"></i>
                    <span>Watch Campus Video</span>
                </a>
            </div>
        </div>
    </section>

</div>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
