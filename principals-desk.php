<?php
/**
 * Principal's Desk - Advaita School of Excellence, Parbhani
 * CBSE Affiliated (Affiliation No. 1130920)
 * Clean Semantic Layout matching the Official Design
 */
$pageTitle = "Principal's Desk - Advaita School of Excellence, Parbhani";
$activePage = "principals-desk";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper principal-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Nurturing Potential for a Brighter Tomorrow
         ========================================================================= -->
    <section class="principal-hero-section">
        <div class="principal-hero-canvas">
            <!-- Background Image & Sky on the Right -->
            <div class="principal-hero-bg-visual" aria-hidden="true">
                <img src="assets/images/about-hero-building.jpg" alt="Advaita School of Excellence Campus" class="principal-hero-bg-img" loading="eager">
                <!-- Floating Script Badge in Sky -->
                <div class="principal-hero-script-tag">
                    <span class="script-title">More<br>Than A School</span>
                    <svg class="script-underline" viewBox="0 0 140 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M4 10C36 4 98 4 136 12" stroke="#F37021" stroke-width="3.5" stroke-linecap="round"/>
                        <path d="M18 14C48 9 92 8 126 15" stroke="#F37021" stroke-width="2.5" stroke-linecap="round" opacity="0.75"/>
                    </svg>
                </div>
            </div>

            <!-- Full Width Wave Mask Overlay with ambient blue contour -->
            <div class="principal-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1440 480" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="principalWaveGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#0284C7"/>
                            <stop offset="50%" stop-color="#38BDF8"/>
                            <stop offset="100%" stop-color="#60A5FA"/>
                        </linearGradient>
                    </defs>
                    <!-- Ambient soft blue aura at far left -->
                    <path d="M0,60 C90,60 140,160 140,260 C140,360 85,430 0,450 Z" fill="#E8F4FE" opacity="0.85"/>
                    <!-- Outer vibrant sky-blue contour wave -->
                    <path d="M0,0 L615,0 C680,110 720,230 685,330 C655,410 590,455 535,480 L0,480 Z" fill="url(#principalWaveGrad)" opacity="0.95"/>
                    <!-- Mid soft blue contour wave -->
                    <path d="M0,0 L600,0 C665,110 705,230 670,330 C640,410 575,455 520,480 L0,480 Z" fill="#BAE6FD"/>
                    <!-- Main solid white wave panel covering left side completely -->
                    <path d="M0,0 L585,0 C650,110 690,230 655,330 C625,410 560,455 505,480 L0,480 Z" fill="#FFFFFF"/>
                </svg>
            </div>

            <!-- Left Dot Matrix Decor -->
            <div class="principal-hero-dots-decor" aria-hidden="true"></div>

            <!-- Left Content Panel -->
            <div class="principal-hero-left-panel">
                <div class="principal-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <div class="principal-breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="about-us.php">About Us</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Principal's Desk</span>
                    </div>

                    <span class="principal-eyebrow">FROM THE PRINCIPAL</span>
                    <h1 class="principal-hero-title">
                        Nurturing Potential<br>
                        Towards a <span class="text-orange">Brighter<br>Tomorrow.</span>
                    </h1>

                    <p class="principal-hero-desc">
                        At Advaita School of Excellence, we are committed to providing a nurturing and inspiring environment where every child is encouraged to learn, grow, and succeed.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. PRINCIPAL'S MESSAGE SECTION
         ========================================================================= -->
    <section class="principal-message-section">
        <!-- Background Side Dot Matrices -->
        <div class="principal-message-dots-left" aria-hidden="true"></div>
        <div class="principal-message-dots-right" aria-hidden="true"></div>

        <div class="principal-message-container">
            <div class="principal-message-card">

                <!-- Left Column: Principal Profile Card with Viewfinder Frame & Stats -->
                <div class="principal-profile-col">
                    <div class="principal-profile-card-wrapper">
                        <div class="principal-profile-card">
                            <!-- Viewfinder Frame with 4 Corner Brackets -->
                            <div class="principal-viewfinder-frame">
                                <span class="vf-bracket vf-bracket-tl" aria-hidden="true"></span>
                                <span class="vf-bracket vf-bracket-tr" aria-hidden="true"></span>
                                <span class="vf-bracket vf-bracket-bl" aria-hidden="true"></span>
                                <span class="vf-bracket vf-bracket-br" aria-hidden="true"></span>
                                
                                <div class="principal-avatar-wrap">
                                    <svg class="principal-avatar-svg" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Divine Mam - Principal">
                                        <circle cx="60" cy="60" r="56" fill="#e8f3fe"/>
                                        <path d="M60 26C51.1634 26 44 33.1634 44 42C44 50.8366 51.1634 58 60 58C68.8366 58 76 50.8366 76 42C76 33.1634 68.8366 26 60 26Z" fill="#78909c"/>
                                        <path d="M60 20C46 20 40 30 40 44C40 47.5 41.5 54 44 57C45.5 51 51 47 60 47C69 47 74.5 51 76 57C78.5 54 80 47.5 80 44C80 30 74 20 60 20Z" fill="#546e7a"/>
                                        <path d="M34 94C34 77.4315 45.6406 64 60 64C74.3594 64 86 77.4315 86 94C86 97.3137 83.3137 100 80 100H40C36.6863 100 34 97.3137 34 94Z" fill="#78909c"/>
                                        <path d="M52 64L60 76L68 64H52Z" fill="#cfd8dc"/>
                                    </svg>
                                </div>
                            </div>

                            <!-- Identity Info -->
                            <div class="principal-profile-info">
                                <h3 class="principal-name">Divine Mam</h3>
                                <div class="principal-role">Principal</div>
                                <div class="principal-role-divider" aria-hidden="true"></div>
                                <p class="principal-org">
                                    Advaita School of Excellence<br>
                                    Parbhani
                                </p>
                            </div>

                            <!-- 3-Item Stats Bar -->
                            <div class="principal-stats-bar">
                                <div class="principal-stat-item">
                                    <span class="stat-top">Values</span>
                                    <span class="stat-bot">First</span>
                                </div>
                                <div class="principal-stat-divider" aria-hidden="true"></div>
                                <div class="principal-stat-item">
                                    <span class="stat-top">360°</span>
                                    <span class="stat-bot">Development</span>
                                </div>
                                <div class="principal-stat-divider" aria-hidden="true"></div>
                                <div class="principal-stat-item">
                                    <span class="stat-top">100%</span>
                                    <span class="stat-bot">Care</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Principal's Message Content -->
                <div class="principal-message-content">
                    <span class="principal-message-eyebrow">PRINCIPAL'S MESSAGE</span>
                    <h2 class="principal-message-title">
                        A Few Words from <span class="text-orange">Our Principal</span>
                    </h2>

                    <div class="principal-salutation">
                        Dear Students, Parents and Well-wishers,
                    </div>

                    <p>
                        At <strong>Advaita School of Excellence</strong>, we are committed to providing a nurturing and inspiring environment where every child is encouraged to learn, grow, and succeed. Our aim is to create a strong academic foundation with a focus on overall personality development.
                    </p>

                    <p>
                        Education, in today's world, is not limited to textbooks. It is about <strong>building character</strong>, developing critical thinking, and preparing students to face real-life challenges with <strong>confidence</strong>. Along with CBSE academics, we provide integrated NEET/IIT foundation and preparation for various competitive exams, ensuring that students are well-prepared for the future.
                    </p>

                    <!-- Quote Box -->
                    <div class="principal-quote-box">
                        <div class="principal-quote-icon" aria-hidden="true"><i class="fa-solid fa-quote-left"></i></div>
                        <p class="principal-quote-text">
                            With the support of dedicated teachers, modern teaching methodologies and a student-centric approach, we strive to make learning meaningful and enjoyable.
                        </p>
                    </div>

                    <p>
                        We believe in encouraging curiosity, creativity, and participation in academics, sports, arts and co-curricular activities. Our goal is to guide every student towards excellence and help them realize their true potential.
                    </p>

                    <p>
                        I extend my best wishes to all our students and parents for a successful and enriching journey with us.
                    </p>

                    <!-- Signature Block -->
                    <div class="principal-signature-block">
                        <div class="principal-signature-name">— Divine Mam</div>
                        <div class="principal-signature-role">Principal, Advaita School of Excellence, Parbhani</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. OUR COMMITMENT: Four Things We Promise (4 Cards)
         ========================================================================= -->
    <section class="principal-commitment-section">
        <!-- Side dot decor -->
        <div class="principal-commitment-dots-left" aria-hidden="true"></div>
        <div class="principal-commitment-dots-right" aria-hidden="true"></div>

        <div class="principal-commitment-container">
            <div class="principal-commitment-header text-center">
                <span class="principal-commitment-eyebrow">OUR COMMITMENT</span>
                <h2 class="principal-commitment-heading">
                    Four Things We <span class="text-orange">Promise</span>
                </h2>
            </div>

            <!-- 4 Commitment Cards Grid -->
            <div class="principal-commitment-grid">
                <!-- Card 1: Strong Academic Foundation -->
                <div class="principal-commitment-card">
                    <div class="principal-commitment-icon icon-blue">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="principal-commitment-card-title">Strong Academic Foundation</h3>
                    <p class="principal-commitment-desc">
                        A robust curriculum with CBSE excellence and integrated NEET/IIT foundation.
                    </p>
                </div>

                <!-- Card 2: Character & Values -->
                <div class="principal-commitment-card">
                    <div class="principal-commitment-icon icon-orange">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3 class="principal-commitment-card-title">Character &amp; Values</h3>
                    <p class="principal-commitment-desc">
                        Discipline, compassion and a positive attitude — the qualities that shape responsible citizens.
                    </p>
                </div>

                <!-- Card 3: Curiosity & Creativity -->
                <div class="principal-commitment-card">
                    <div class="principal-commitment-icon icon-sky">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h3 class="principal-commitment-card-title">Curiosity &amp; Creativity</h3>
                    <p class="principal-commitment-desc">
                        We encourage questions, exploration and original thinking — not just the right answer.
                    </p>
                </div>

                <!-- Card 4: All-round Excellence -->
                <div class="principal-commitment-card">
                    <div class="principal-commitment-icon icon-rose">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h3 class="principal-commitment-card-title">All-round Excellence</h3>
                    <p class="principal-commitment-desc">
                        Academics, sports, arts and clubs — every child finds a stage to shine on.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. CTA BANNER SECTION: Full-Width Wave Banner (Come see the school for yourself)
         ========================================================================= -->
    <section class="principal-cta-banner-section">
        <div class="principal-cta-banner-canvas">

            <!-- Background Image & Sky on the Right -->
            <div class="principal-cta-bg-visual" aria-hidden="true">
                <img src="assets/images/about-hero-building.jpg" alt="Advaita School of Excellence Campus" class="principal-cta-bg-img" loading="lazy">
            </div>

            <!-- Full Width Wave Mask Overlay with ambient blue contour -->
            <div class="principal-cta-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1440 460" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="principalCtaWaveGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#0284C7"/>
                            <stop offset="50%" stop-color="#38BDF8"/>
                            <stop offset="100%" stop-color="#60A5FA"/>
                        </linearGradient>
                    </defs>
                    <!-- Ambient soft blue aura at far left -->
                    <path d="M0,40 C80,40 130,140 130,240 C130,340 75,410 0,430 Z" fill="#E8F4FE" opacity="0.85"/>
                    <!-- Outer vibrant sky-blue contour wave -->
                    <path d="M0,0 L855,0 C790,115 750,230 790,345 C815,400 845,435 870,460 L0,460 Z" fill="url(#principalCtaWaveGrad)" opacity="0.95"/>
                    <!-- Mid soft blue contour wave -->
                    <path d="M0,0 L840,0 C775,115 735,230 775,345 C800,400 830,435 855,460 L0,460 Z" fill="#BAE6FD"/>
                    <!-- Main solid white wave panel covering left side completely -->
                    <path d="M0,0 L825,0 C760,115 720,230 760,345 C785,400 815,435 840,460 L0,460 Z" fill="#FFFFFF"/>
                </svg>
            </div>

            <!-- Left Dot Matrix Decor -->
            <div class="principal-cta-dots-decor" aria-hidden="true"></div>

            <!-- Right Interactive Elements Overlay (Above Wave) -->
            <div class="principal-cta-right-overlay">
                <!-- Floating School Logo Badge on Top Center of Building -->
                <div class="principal-cta-building-badge">
                    <img src="assets/images/logo-cropped.png" alt="Advaita School of Excellence">
                </div>

                <!-- Action Buttons Overlaid on Building -->
                <div class="principal-cta-action-buttons">
                    <a href="index.php#admissions" class="principal-cta-btn-orange">
                        <span class="cta-btn-icon"><i class="fa-solid fa-calendar-days"></i></span>
                        <span class="cta-btn-text">Book A Campus Visit</span>
                        <i class="fa-solid fa-arrow-right cta-btn-arrow"></i>
                    </a>
                    <a href="index.php#contact" class="principal-cta-btn-white">
                        <span class="cta-btn-icon"><i class="fa-regular fa-envelope"></i></span>
                        <span class="cta-btn-text">Contact Us</span>
                    </a>
                </div>
            </div>

            <!-- Left Content Panel -->
            <div class="principal-cta-left-panel">
                <div class="principal-cta-content-inner">
                    <span class="principal-cta-eyebrow">BEGIN YOUR CHILD'S JOURNEY</span>
                    <h2 class="principal-cta-title">
                        Come see the school<br>
                        for <span class="text-orange">yourself.</span>
                    </h2>
                    <p class="principal-cta-desc">
                        We welcome you to visit the campus, meet our teachers, and<br class="d-none d-lg-inline">
                        see for yourself the environment in which your child will grow.
                    </p>

                    <!-- 3 Feature Pills in Single Row -->
                    <div class="principal-cta-pills-row">
                        <div class="principal-cta-pill-item">
                            <span class="cta-pill-icon icon-blue"><i class="fa-solid fa-compass"></i></span>
                            <span class="cta-pill-text">Interactive Campus Tour</span>
                        </div>
                        <div class="principal-cta-pill-item">
                            <span class="cta-pill-icon icon-orange"><i class="fa-solid fa-users"></i></span>
                            <span class="cta-pill-text">Meet Our Faculty</span>
                        </div>
                        <div class="principal-cta-pill-item">
                            <span class="cta-pill-icon icon-purple"><i class="fa-solid fa-shapes"></i></span>
                            <span class="cta-pill-text">Experience Our Programs</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
