<?php
/**
 * Principal's Desk - Advaita School of Excellence, Parbhani
 * CBSE Affiliated (Affiliation No. 1130920)
 * Clean Semantic Layout matching the Project Standards (100% Full-Width Canvas)
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
            <!-- Background Visual: Campus on the Right -->
            <div class="principal-hero-bg-visual">
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

            <!-- Left Organic White Panel with Curved Boundary -->
            <div class="principal-hero-left-panel">
                <div class="principal-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <nav class="principal-hero-breadcrumb" aria-label="Breadcrumb">
                        <ol class="principal-breadcrumb-list">
                            <li><a href="index.php">Home</a></li>
                            <li class="principal-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li class="principal-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="principal-breadcrumb-current" aria-current="page">Principal's Message</li>
                        </ol>
                    </nav>

                    <span class="principal-hero-eyebrow">— FROM THE PRINCIPAL —</span>
                    <h1 class="principal-hero-title">
                        Nurturing Potential<br>
                        for a <span>Brighter Tomorrow</span>
                    </h1>
                    
                    <div class="principal-hero-pillars">
                        <span>Academic Excellence</span>
                        <span class="pillar-pipe">|</span>
                        <span>Character</span>
                        <span class="pillar-pipe">|</span>
                        <span>Opportunities</span>
                        <span class="pillar-pipe">|</span>
                        <span>Lifelong Learning</span>
                    </div>
                </div>

                <!-- Organic Wave Edge SVG -->
                <div class="principal-hero-wave-edge" aria-hidden="true">
                    <svg viewBox="0 0 100 600" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0 C35 80 85 160 85 270 C85 390 30 480 75 600 L0 600 Z" fill="#d8ecff" opacity="0.6"/>
                        <path d="M0 0 C25 80 65 160 65 270 C65 390 15 480 55 600 L0 600 Z" fill="#ffffff"/>
                    </svg>
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
            <div class="principal-message-grid">

                <!-- Left Column: Principal Profile Card with Viewfinder Frame & Stats -->
                <div class="principal-profile-col">
                    <div class="principal-profile-card-wrapper">
                        <!-- Blue Accent Tab on Right/Left -->
                        <div class="principal-profile-blue-tab" aria-hidden="true"></div>
                        
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
                                        <!-- Soft female educator avatar silhouette -->
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
                    <span class="principal-message-eyebrow">— PRINCIPAL'S MESSAGE —</span>
                    <h2 class="principal-message-title">
                        A Few Words from <span>Our Principal</span>
                    </h2>

                    <div class="principal-salutation">
                        Dear Students, Parents and Well-wishers,
                    </div>

                    <p>
                        At <strong class="text-navy">Advaita School of Excellence</strong>, we are committed to providing a nurturing and inspiring environment where every child is encouraged to learn, grow, and succeed. Our aim is to create a strong academic foundation with a focus on overall personality development.
                    </p>

                    <p>
                        Education, in today's world, is not limited to textbooks. It is about <strong>building character</strong>, developing critical thinking, and preparing students to face real-life challenges with <strong>confidence</strong>. Along with CBSE academics, we provide integrated NEET/IIT foundation and preparation for various competitive exams, ensuring that students are well-prepared for the future.
                    </p>

                    <!-- Quote Box -->
                    <div class="principal-quote-box">
                        <div class="principal-quote-icon" aria-hidden="true">“</div>
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
        <div class="principal-commitment-container">
            <div class="principal-commitment-header">
                <span class="principal-commitment-eyebrow">— OUR COMMITMENT —</span>
                <h2 class="principal-commitment-title">
                    Four Things We <em>Promise</em>
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
                        We encourage questions, exploration and original thinking — not just the right answers.
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
         4. CAMPUS VISIT CTA BANNER: Come see the school for yourself
         ========================================================================= -->
    <section class="principal-cta-banner-section">
        <div class="principal-cta-banner-full">
            <!-- Left Content Area -->
            <div class="principal-cta-left-content">
                <span class="principal-cta-eyebrow">— BEGIN YOUR CHILD'S JOURNEY —</span>
                <h2 class="principal-cta-title">
                    Come see the school<br>
                    for <span>yourself.</span>
                </h2>
                <p class="principal-cta-desc">
                    We welcome you to visit the campus, meet our teachers, and see for yourself the environment in which your child will grow.
                </p>

                <!-- 3 Feature Badges -->
                <div class="principal-cta-features">
                    <div class="principal-feature-badge">
                        <i class="fa-solid fa-compass"></i>
                        <span>Interactive Campus Tour</span>
                    </div>
                    <div class="principal-feature-badge">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <span>Meet Our Faculty</span>
                    </div>
                    <div class="principal-feature-badge">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>Experience Our Programs</span>
                    </div>
                </div>
            </div>

            <!-- Right Visual Area with Campus Image & Floating Action Buttons -->
            <div class="principal-cta-right-visual">
                <div class="principal-cta-arch-wrapper">
                    <img src="assets/images/campus-visit-building.jpg" alt="Advaita School Campus" class="principal-cta-arch-img" loading="lazy">
                    
                    <!-- Floating CTA Actions Card -->
                    <div class="principal-cta-actions-card">
                        <a href="index.php#admissions" class="principal-btn-orange">
                            <i class="fa-regular fa-calendar-check"></i>
                            <span>Book A Campus Visit</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="index.php#contact" class="principal-btn-contact">
                            <i class="fa-regular fa-envelope"></i>
                            <span>Contact Us</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
