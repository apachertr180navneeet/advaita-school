<?php
/**
 * Chairman's Desk - Advaita School of Excellence, Parbhani
 * CBSE Affiliated (Affiliation No. 1130920)
 * Clean Semantic Layout matching the Official Design
 */
$pageTitle = "Chairman's Desk - Advaita School of Excellence, Parbhani";
$activePage = "chairmans-desk";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper chairman-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Building Stronger Foundations for Brighter Tomorrows
         ========================================================================= -->
    <section class="chairman-hero-section">
        <div class="chairman-hero-canvas">
            <!-- Background Image & Sky on the Right -->
            <div class="chairman-hero-bg-visual" aria-hidden="true">
                <img src="assets/images/about-hero-building.jpg" alt="Advaita School of Excellence Campus" class="chairman-hero-bg-img" loading="eager">
                <!-- Floating Script Badge in Sky -->
                <div class="chairman-hero-script-tag">
                    <span class="script-title">More<br>Than A School</span>
                    <svg class="script-underline" viewBox="0 0 140 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M4 10C36 4 98 4 136 12" stroke="#F37021" stroke-width="3.5" stroke-linecap="round"/>
                        <path d="M18 14C48 9 92 8 126 15" stroke="#F37021" stroke-width="2.5" stroke-linecap="round" opacity="0.75"/>
                    </svg>
                </div>
            </div>

            <!-- Full Width Wave Mask Overlay with ambient blue contour -->
            <div class="chairman-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1440 480" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="chairmanWaveGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#0284C7"/>
                            <stop offset="50%" stop-color="#38BDF8"/>
                            <stop offset="100%" stop-color="#60A5FA"/>
                        </linearGradient>
                    </defs>
                    <!-- Ambient soft blue aura at far left -->
                    <path d="M0,60 C90,60 140,160 140,260 C140,360 85,430 0,450 Z" fill="#E8F4FE" opacity="0.85"/>
                    <!-- Outer vibrant sky-blue contour wave -->
                    <path d="M0,0 L615,0 C680,110 720,230 685,330 C655,410 590,455 535,480 L0,480 Z" fill="url(#chairmanWaveGrad)" opacity="0.95"/>
                    <!-- Mid soft blue contour wave -->
                    <path d="M0,0 L600,0 C665,110 705,230 670,330 C640,410 575,455 520,480 L0,480 Z" fill="#BAE6FD"/>
                    <!-- Main solid white wave panel covering left side completely -->
                    <path d="M0,0 L585,0 C650,110 690,230 655,330 C625,410 560,455 505,480 L0,480 Z" fill="#FFFFFF"/>
                </svg>
            </div>

            <!-- Left Dot Matrix Decor -->
            <div class="chairman-hero-dots-decor" aria-hidden="true"></div>

            <!-- Left Content Panel -->
            <div class="chairman-hero-left-panel">
                <div class="chairman-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <div class="chairman-breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="about-us.php">About Us</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Chairman's Desk</span>
                    </div>

                    <span class="chairman-eyebrow">FROM THE CHAIRMAN</span>
                    <h1 class="chairman-hero-title">
                        Building Stronger<br>
                        Foundations for<br>
                        <span class="text-orange">Brighter Tomorrows.</span>
                    </h1>

                    <!-- Pipeline Sub-list -->
                    <div class="chairman-hero-pillars">
                        <span>Education</span>
                        <span class="pillar-pipe">|</span>
                        <span>Values</span>
                        <span class="pillar-pipe">|</span>
                        <span>Discipline</span>
                        <span class="pillar-pipe">|</span>
                        <span>Opportunities</span>
                        <span class="pillar-pipe">|</span>
                        <span>A Better Society</span>
                    </div>

                    <p class="chairman-hero-desc">
                        At Advaita School of Excellence, we go beyond textbooks to create a nurturing environment where every child is encouraged to learn, grow and shape a brighter future.
                    </p>

                    <!-- Hero Action Buttons -->
                    <div class="chairman-hero-actions">
                        <a href="about-us.php" class="chairman-btn-orange">
                            <span>Our Journey</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="index.php#tour" class="chairman-btn-video">
                            <span class="video-circle-icon"><i class="fa-solid fa-play"></i></span>
                            <span>Watch Video</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. CHAIRMAN'S MESSAGE SECTION
         ========================================================================= -->
    <section class="chairman-message-section">
        <!-- Background Side Dot Matrices -->
        <div class="chairman-message-dots-left" aria-hidden="true"></div>
        <div class="chairman-message-dots-right" aria-hidden="true"></div>

        <div class="chairman-message-container">
            <div class="chairman-message-card">

                <!-- Left: Message Content -->
                <div class="chairman-message-content">
                    <span class="chairman-message-eyebrow">—— CHAIRMAN'S MESSAGE ——</span>
                    <h2 class="chairman-message-title">
                        A Few Words from<br>
                        <span>Our Chairman.</span>
                    </h2>

                    <div class="chairman-salutation">
                        Dear Students, Parents and Well-wishers,
                    </div>

                    <p>
                        At Advaita School of Excellence, our vision has always been to create an education ecosystem that goes beyond textbooks. We believe in nurturing young minds with the right blend of knowledge, values, discipline and life skills, so that they grow into confident, compassionate and responsible global citizens.
                    </p>

                    <p>
                        In today's rapidly evolving world, academic excellence alone is not enough. That is why Advaita is committed to providing a strong foundation for NEET, IIT and various competitive exams along with holistic development in a supportive and inspiring environment.
                    </p>

                    <p>
                        Our focus is on creating opportunities where curiosity is encouraged, creativity is nurtured and every child is given the confidence to excel — not just in exams, but in life.
                    </p>

                    <!-- Quote Box -->
                    <div class="chairman-quote-box">
                        <div class="chairman-quote-icon" aria-hidden="true">“</div>
                        <p class="chairman-quote-text">
                            With a strong foundation in education, ethics and innovation, we aim to develop responsible individuals who contribute positively to society.
                        </p>
                    </div>
                </div>

                <!-- Right: Chairman Profile Column -->
                <div class="chairman-profile-col">
                    <div class="chairman-profile-card-wrapper">
                        <!-- Blue Accent Tab on Left -->
                        <div class="chairman-profile-blue-tab" aria-hidden="true"></div>
                        <!-- Dot Grid Background Accent -->
                        <div class="chairman-profile-dots-decor" aria-hidden="true"></div>

                        <div class="chairman-profile-card">
                            <div class="chairman-profile-photo-wrap">
                                <img src="assets/images/chairman-real.png" alt="Shri. Vishal Vishal Wattamwar - Chairman" class="chairman-profile-photo" loading="lazy">
                            </div>
                            <div class="chairman-profile-info">
                                <h3 class="chairman-name">Shri. Vishal Vishal Wattamwar</h3>
                                <div class="chairman-role">Chairman,</div>
                                <p class="chairman-org">Sanmati Sevabhavi Sansthan, Parbhani</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. COMMITMENT SECTION: Four Beliefs That Guide Us (4 Cards)
         ========================================================================= -->
    <section class="chairman-commitment-section">
        <div class="chairman-commitment-container">
            <div class="about-section-header text-center">
                <span class="about-eyebrow">—— OUR COMMITMENT ——</span>
                <h2 class="about-section-heading">
                    Four Beliefs That <span>Guide Us.</span>
                </h2>
            </div>

            <!-- 4 Commitment Cards -->
            <div class="chairman-commitment-grid">
                <!-- Card 1: Excellence -->
                <div class="chairman-commitment-card">
                    <div class="chairman-commitment-icon icon-blue">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="chairman-commitment-card-title">Excellence</h3>
                    <p class="chairman-commitment-desc">
                        Consistent pursuit of academic and personal growth.
                    </p>
                </div>

                <!-- Card 2: Opportunity -->
                <div class="chairman-commitment-card">
                    <div class="chairman-commitment-icon icon-orange">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3 class="chairman-commitment-card-title">Opportunity</h3>
                    <p class="chairman-commitment-desc">
                        Creating platforms to help every child discover their potential.
                    </p>
                </div>

                <!-- Card 3: Values -->
                <div class="chairman-commitment-card">
                    <div class="chairman-commitment-icon icon-blue">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <h3 class="chairman-commitment-card-title">Values</h3>
                    <p class="chairman-commitment-desc">
                        Nurturing integrity, empathy and responsible citizenship.
                    </p>
                </div>

                <!-- Card 4: Future Ready -->
                <div class="chairman-commitment-card">
                    <div class="chairman-commitment-icon icon-rose">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h3 class="chairman-commitment-card-title">Future Ready</h3>
                    <p class="chairman-commitment-desc">
                        Preparing students for NEET, IIT and a wide range of competitive exams, along with life skills.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. CTA BANNER SECTION: Be A Part of Advaita
         ========================================================================= -->
    <section class="admission-banner">
        <!-- Background Shapes -->
        <div class="shape-one"></div>
        <div class="shape-two"></div>
        <div class="shape-three"></div>

        <!-- Dots -->
        <div class="dot-pattern"></div>

        <!-- Airplane Graphic Decor -->
        <div class="shape-airplane" aria-hidden="true">
            <img src="assets/images/staff-airplane-trail.svg" alt="" class="airplane-svg">
        </div>

        <!-- Content -->
        <div class="banner-content">
            <div class="copy">
                <!-- Eyebrow -->
                <div class="eyebrow">
                    BE A PART OF ADVAITA
                    <span class="eyebrow-line"></span>
                </div>

                <!-- Heading -->
                <h2 class="headline">
                    Together, let’s build<br>
                    <span class="text-orange">brighter tomorrows.</span>
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
                        <span>Enquire Now</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Students Image -->
        <div class="students">
            <img src="assets/images/about-cta-students-trio.png" alt="Advaita Students" loading="lazy">
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
