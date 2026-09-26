<?php
/**
 * Our Faculty - Advaita School of Excellence, Parbhani
 * CBSE Affiliated (Affiliation No. 1130920)
 * Exact Visual Layout matching Official Reference (reference-1.png)
 */
$pageTitle = "Our Faculty - Advaita School of Excellence, Parbhani";
$activePage = "our-staff";

require_once __DIR__ . '/includes/header.php';
?>

<div class="inner-page-wrapper faculty-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Meet the Educators
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
                        <span class="active">Our Faculty</span>
                    </div>

                    <div class="inner-eyebrow">— OUR FACULTY —</div>
                    
                    <h1 class="inner-hero-title">
                        Meet the Educators<br>
                        Who Inspire Every<br>
                        <span class="text-orange">Advaita Learner.</span>
                    </h1>
                    
                    <p class="inner-hero-desc">
                        Our teachers are more than subject experts — they are mentors, role models and lifelong guides who nurture curiosity, build confidence and inspire every child to excel in academics and in life.
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

        <!-- Floating 4 Stats Strip -->
        <div class="inner-stats-strip-container">
            <div class="inner-stats-strip-card">
                <div class="inner-stat-box">
                    <div class="stat-icon-wrap">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="stat-meta">
                        <span class="stat-number">80+</span>
                        <span class="stat-label">Total Faculty</span>
                    </div>
                </div>

                <div class="inner-stat-box">
                    <div class="stat-icon-wrap">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <div class="stat-meta">
                        <span class="stat-number">12+</span>
                        <span class="stat-label">Departments</span>
                    </div>
                </div>

                <div class="inner-stat-box">
                    <div class="stat-icon-wrap">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <div class="stat-meta">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">Avg. Years Experience</span>
                    </div>
                </div>

                <div class="inner-stat-box">
                    <div class="stat-icon-wrap">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div class="stat-meta">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Postgraduate Trained</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. EDUCATORS GRID SECTION (8 Cards)
         ========================================================================= -->
    <section class="faculty-grid-section">
        <!-- Ambient decorative dots on sides -->
        <div class="section-decor-dots dots-left" aria-hidden="true"></div>
        <div class="section-decor-dots dots-right" aria-hidden="true"></div>

        <div class="faculty-grid-container">
            <div class="faculty-section-header">
                <div class="section-eyebrow">— OUR EDUCATORS —</div>
                <h2 class="section-title">
                    The Teachers Behind Every <span class="text-orange">Advaita Learner.</span>
                </h2>
                <p class="section-subtitle">
                    Each one is here because they love what they teach — and because they care deeply about how every child grows. Our faculty bring expertise, experience and a genuine passion for guiding students towards academic and personal excellence.
                </p>
            </div>

            <div class="faculty-cards-grid">
                <!-- CARD 1: Principal -->
                <article class="faculty-card">
                    <div class="faculty-avatar-wrap">
                        <div class="faculty-avatar-circle">
                            <svg class="faculty-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="20" fill="#94a3b8"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#94a3b8"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faculty-role-badge badge-orange">PRINCIPAL</div>
                    <h3 class="faculty-name">Divine Mam</h3>
                    <div class="faculty-qual qual-orange">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.A., B.Ed.</span>
                    </div>
                </article>

                <!-- CARD 2: Vice Principal -->
                <article class="faculty-card">
                    <div class="faculty-avatar-wrap">
                        <div class="faculty-avatar-circle">
                            <svg class="faculty-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="20" fill="#94a3b8"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#94a3b8"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faculty-role-badge badge-blue">VICE PRINCIPAL</div>
                    <h3 class="faculty-name">Faculty Name 02</h3>
                    <div class="faculty-qual qual-blue">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.Sc. (Mathematics), B.Ed.</span>
                    </div>
                </article>

                <!-- CARD 3: Senior Faculty - Science -->
                <article class="faculty-card">
                    <div class="faculty-avatar-wrap">
                        <div class="faculty-avatar-circle">
                            <svg class="faculty-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="20" fill="#94a3b8"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#94a3b8"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faculty-role-badge badge-purple">SENIOR FACULTY - SCIENCE</div>
                    <h3 class="faculty-name">Faculty Name 03</h3>
                    <div class="faculty-qual qual-purple">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.Sc. (Physics), B.Ed.</span>
                    </div>
                </article>

                <!-- CARD 4: Head - English Department -->
                <article class="faculty-card">
                    <div class="faculty-avatar-wrap">
                        <div class="faculty-avatar-circle">
                            <svg class="faculty-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="20" fill="#94a3b8"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#94a3b8"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faculty-role-badge badge-rose">HEAD - ENGLISH DEPARTMENT</div>
                    <h3 class="faculty-name">Faculty Name 04</h3>
                    <div class="faculty-qual qual-rose">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.A. (English), M.Ed.</span>
                    </div>
                </article>

                <!-- CARD 5: Senior Faculty - Mathematics -->
                <article class="faculty-card">
                    <div class="faculty-avatar-wrap">
                        <div class="faculty-avatar-circle">
                            <svg class="faculty-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="20" fill="#94a3b8"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#94a3b8"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faculty-role-badge badge-green">SENIOR FACULTY - MATHEMATICS</div>
                    <h3 class="faculty-name">Faculty Name 05</h3>
                    <div class="faculty-qual qual-green">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.Sc. (Maths), B.Ed.</span>
                    </div>
                </article>

                <!-- CARD 6: Head - Hindi Department -->
                <article class="faculty-card">
                    <div class="faculty-avatar-wrap">
                        <div class="faculty-avatar-circle">
                            <svg class="faculty-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="20" fill="#94a3b8"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#94a3b8"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faculty-role-badge badge-amber">HEAD - HINDI DEPARTMENT</div>
                    <h3 class="faculty-name">Faculty Name 06</h3>
                    <div class="faculty-qual qual-amber">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.A. (Hindi), B.Ed.</span>
                    </div>
                </article>

                <!-- CARD 7: Senior Faculty - Commerce -->
                <article class="faculty-card">
                    <div class="faculty-avatar-wrap">
                        <div class="faculty-avatar-circle">
                            <svg class="faculty-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="20" fill="#94a3b8"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#94a3b8"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faculty-role-badge badge-cyan">SENIOR FACULTY - COMMERCE</div>
                    <h3 class="faculty-name">Faculty Name 07</h3>
                    <div class="faculty-qual qual-cyan">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.Com., B.Ed.</span>
                    </div>
                </article>

                <!-- CARD 8: Head - Primary Wing -->
                <article class="faculty-card">
                    <div class="faculty-avatar-wrap">
                        <div class="faculty-avatar-circle">
                            <svg class="faculty-avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle cx="50" cy="38" r="20" fill="#94a3b8"/>
                                <path d="M18 90C18 68 32 62 50 62C68 62 82 68 82 90" fill="#94a3b8"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faculty-role-badge badge-pink">HEAD - PRIMARY WING</div>
                    <h3 class="faculty-name">Faculty Name 08</h3>
                    <div class="faculty-qual qual-pink">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>M.A., D.Ed., B.Ed.</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. JOIN OUR TEAM SECTION: Want to Teach with Us?
         ========================================================================= -->
    <section class="inner-join-banner-section">
        <div class="inner-join-banner-container">
            <!-- Left Paper Airplane Graphic -->
            <div class="join-plane-wrap" aria-hidden="true">
                <img src="assets/images/staff-join-airplane-bg.png" alt="Airplane Trail" class="join-plane-img" loading="lazy">
            </div>

            <!-- Center Content -->
            <div class="join-content-center">
                <div class="section-eyebrow">— JOIN OUR TEAM —</div>
                <h2 class="join-title">Want to Teach with <span class="text-orange">Us?</span></h2>
                <p class="join-desc">
                    We are always looking for passionate educators who believe in creating brighter futures. Explore open roles or share your CV with us.
                </p>
                <div class="join-actions">
                    <a href="index.php#contact" class="btn-orange-pill">
                        <span>See Open Roles</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="mailto:info@advaitaschool.edu.in" class="btn-white-pill">
                        <i class="fa-regular fa-envelope"></i>
                        <span>Send Your CV</span>
                    </a>
                </div>
            </div>

            <!-- Right Smiling Students Graphic -->
            <div class="join-students-wrap">
                <img src="assets/images/about-cta-students-trio.png" alt="Advaita Students" class="join-students-img" loading="lazy">
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. CAMPUS SHOWCASE STRIP: Take a closer look at life at Advaita
         ========================================================================= -->
    <section class="campus-showcase-strip-section">
        <div class="campus-showcase-card">
            <!-- Left Info Block -->
            <div class="showcase-left-info">
                <div class="showcase-accent-bar"></div>
                <div class="showcase-text-wrap">
                    <h3 class="showcase-title">
                        Take a closer look<br>
                        at life at <span class="text-orange">Advaita.</span>
                    </h3>
                    <p class="showcase-desc">
                        Visit our campus to meet our faculty, experience our learning environment and see how we shape brighter futures.
                    </p>
                </div>
            </div>

            <!-- Center 3 Images Gallery -->
            <div class="showcase-thumbnails-grid">
                <div class="showcase-thumb-box">
                    <img src="assets/images/about-hero-building.jpg" alt="Advaita Campus Building" class="showcase-thumb-img" loading="lazy">
                </div>
                <div class="showcase-thumb-box">
                    <img src="assets/images/fac-library.jpg" alt="Advaita School Library" class="showcase-thumb-img" loading="lazy">
                </div>
                <div class="showcase-thumb-box">
                    <img src="assets/images/fac-science-lab.jpg" alt="Advaita Science Lab" class="showcase-thumb-img" loading="lazy">
                </div>
            </div>

            <!-- Right Action Buttons -->
            <div class="showcase-actions">
                <a href="index.php#admissions" class="btn-orange-pill">
                    <span>Book a Campus Visit</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="index.php#campus-life" class="btn-video-pill">
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
