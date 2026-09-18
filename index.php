<?php
/**
 * Home Page
 * Advaita School of Excellence
 */
$pageTitle = "Home - Advaita School of Excellence";
$activePage = "index";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper">
    <!-- ====================================================================
         HERO SLIDER SECTION (Matching Reference Design)
         ==================================================================== -->
    <section class="adv-hero-slider-section" aria-label="Campus Hero Slider">
        <div class="adv-slider-container">
            <div class="adv-slider-wrapper">

                <!-- ----------------------------------------------------
                     SLIDE 1: Main Campus & Academic Excellence
                     ---------------------------------------------------- -->
                <div class="adv-slide active" data-slide-index="0">
                    <!-- Background Campus Image -->
                    <div class="adv-slide-bg" style="background-image: url('assets/images/hero-campus-1.jpg');"></div>
                    <div class="adv-slide-overlay"></div>
                    <div class="adv-slide-vignette"></div>

                    <!-- Floating Polaroid 1 (Left Side - Taped) -->
                    <div class="adv-slider-polaroid left-card" title="Student Achievements">
                        <div class="adv-polaroid-tape" aria-hidden="true"></div>
                        <div class="adv-polaroid-image-wrap">
                            <img src="assets/images/card-student-1.jpg" alt="Proud Advaitians - Students Celebrating" loading="eager">
                        </div>
                        <div class="adv-polaroid-caption">
                            <span class="adv-polaroid-tag">
                                <span class="badge-dot"></span> LIVE ON CAMPUS
                            </span>
                            <h4 class="adv-polaroid-title">Proud Advaitians</h4>
                            <p class="adv-polaroid-sub">Where every win is celebrated</p>
                        </div>
                    </div>

                    <!-- Floating Polaroid 2 (Right Side - Taped) -->
                    <div class="adv-slider-polaroid right-card" title="Peer Mentorship">
                        <div class="adv-polaroid-tape" aria-hidden="true"></div>
                        <div class="adv-polaroid-image-wrap">
                            <img src="assets/images/card-student-2.jpg" alt="Peer Group Support - Classroom Mentoring" loading="eager">
                        </div>
                        <div class="adv-polaroid-caption">
                            <span class="adv-polaroid-tag">
                                <span class="badge-dot"></span> LIVE ON CAMPUS
                            </span>
                            <h4 class="adv-polaroid-title">Peer Group Support</h4>
                            <p class="adv-polaroid-sub">Older students mentoring younger ones</p>
                        </div>
                    </div>

                    <!-- Slide Content -->
                    <div class="adv-slide-content">
                        <div class="adv-slide-top-spacer"></div>

                        <!-- Center Info & Action Area -->
                        <div class="adv-slide-center-block">
                            <div class="adv-hero-pill-tag">
                                <span class="tag-dot"></span> ADVAITA SCHOOL OF EXCELLENCE
                            </div>
                            <h1 class="adv-slide-title">
                                Inspiring Minds, <span class="highlight">Shaping Future Leaders</span>
                            </h1>
                            <p class="adv-slide-lead">
                                A holistic CBSE learning environment designed for academic rigor, ethical grounding, and creative innovation.
                            </p>

                            <!-- Feature Tags Area -->
                            <div class="adv-slider-features">
                                <span class="adv-slider-feature-item">
                                    <i class="fa-solid fa-graduation-cap"></i> CBSE Curriculum
                                </span>
                                <span class="adv-slider-feature-item">
                                    <i class="fa-solid fa-microchip"></i> Smart STEM Labs
                                </span>
                                <span class="adv-slider-feature-item">
                                    <i class="fa-solid fa-medal"></i> Sports Academy
                                </span>
                            </div>

                            <!-- Action CTA Buttons matching reference design -->
                            <div class="adv-slider-actions">
                                <a href="#admissions" class="adv-btn-admission-pill">
                                    <span class="pulsing-dot"></span> ADMISSION 2025-26 OPEN
                                </a>
                                <a href="#apply-now" class="adv-btn-hero-primary">
                                    <span>Apply Now</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a href="#campus-tour" class="adv-btn-hero-secondary">
                                    <i class="fa-solid fa-play"></i>
                                    <span>Take a campus tour</span>
                                </a>
                            </div>
                        </div>

                        <!-- Integrated Bottom Stats Strip -->
                        <div class="adv-slider-stats-strip">
                            <ul class="adv-slider-stats-list">
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-award"></i>
                                    <span>CBSE AFFILIATED</span>
                                </li>
                                <li class="adv-slider-stat-sep">•</li>
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-trophy"></i>
                                    <span>100% BOARD PASS - 2024</span>
                                </li>
                                <li class="adv-slider-stat-sep">•</li>
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-users"></i>
                                    <span>1500+ STUDENTS</span>
                                </li>
                                <li class="adv-slider-stat-sep">•</li>
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-star"></i>
                                    <span>TOP RANKED FACULTY</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ----------------------------------------------------
                     SLIDE 2: Modern Campus, Innovation & Sports
                     ---------------------------------------------------- -->
                <div class="adv-slide" data-slide-index="1">
                    <!-- Background Campus Image -->
                    <div class="adv-slide-bg" style="background-image: url('assets/images/hero-campus-2.jpg');"></div>
                    <div class="adv-slide-overlay"></div>
                    <div class="adv-slide-vignette"></div>

                    <!-- Floating Polaroid 1 (Left Side - Taped) -->
                    <div class="adv-slider-polaroid left-card" title="Robotics & Innovation">
                        <div class="adv-polaroid-tape" aria-hidden="true"></div>
                        <div class="adv-polaroid-image-wrap">
                            <img src="assets/images/card-student-3.jpg" alt="STEM & Robotics Innovation" loading="lazy">
                        </div>
                        <div class="adv-polaroid-caption">
                            <span class="adv-polaroid-tag">
                                <span class="badge-dot"></span> INNOVATION LAB
                            </span>
                            <h4 class="adv-polaroid-title">Future-Ready Skills</h4>
                            <p class="adv-polaroid-sub">AI, Coding & Robotics Studio</p>
                        </div>
                    </div>

                    <!-- Floating Polaroid 2 (Right Side - Taped) -->
                    <div class="adv-slider-polaroid right-card" title="Sports & Athletics">
                        <div class="adv-polaroid-tape" aria-hidden="true"></div>
                        <div class="adv-polaroid-image-wrap">
                            <img src="assets/images/card-student-4.jpg" alt="Sports & Physical Education" loading="lazy">
                        </div>
                        <div class="adv-polaroid-caption">
                            <span class="adv-polaroid-tag">
                                <span class="badge-dot"></span> CHAMPIONS HUB
                            </span>
                            <h4 class="adv-polaroid-title">Sports Excellence</h4>
                            <p class="adv-polaroid-sub">Olympic standard facilities & coaching</p>
                        </div>
                    </div>

                    <!-- Slide Content -->
                    <div class="adv-slide-content">
                        <div class="adv-slide-top-spacer"></div>

                        <!-- Center Info & Action Area -->
                        <div class="adv-slide-center-block">
                            <div class="adv-hero-pill-tag">
                                <span class="tag-dot"></span> WORLD-CLASS INFRASTRUCTURE
                            </div>
                            <h2 class="adv-slide-title">
                                Beyond Academics: <span class="highlight">All-Round Growth</span>
                            </h2>
                            <p class="adv-slide-lead">
                                Expansive green sports grounds, cutting-edge science labs, performing arts auditorium, and modern digital library.
                            </p>

                            <!-- Feature Tags Area -->
                            <div class="adv-slider-features">
                                <span class="adv-slider-feature-item">
                                    <i class="fa-solid fa-tree"></i> 10-Acre Eco Campus
                                </span>
                                <span class="adv-slider-feature-item">
                                    <i class="fa-solid fa-futbol"></i> 12+ Sports Disciplines
                                </span>
                                <span class="adv-slider-feature-item">
                                    <i class="fa-solid fa-shield-halved"></i> 24/7 Monitored Campus
                                </span>
                            </div>

                            <!-- Action CTA Buttons -->
                            <div class="adv-slider-actions">
                                <a href="#admissions" class="adv-btn-admission-pill">
                                    <span class="pulsing-dot"></span> ADMISSION 2025-26 OPEN
                                </a>
                                <a href="#apply-now" class="adv-btn-hero-primary">
                                    <span>Apply Now</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a href="#campus-tour" class="adv-btn-hero-secondary">
                                    <i class="fa-solid fa-play"></i>
                                    <span>Take a campus tour</span>
                                </a>
                            </div>
                        </div>

                        <!-- Integrated Bottom Stats Strip -->
                        <div class="adv-slider-stats-strip">
                            <ul class="adv-slider-stats-list">
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-award"></i>
                                    <span>CBSE AFFILIATED</span>
                                </li>
                                <li class="adv-slider-stat-sep">•</li>
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-trophy"></i>
                                    <span>100% BOARD PASS - 2024</span>
                                </li>
                                <li class="adv-slider-stat-sep">•</li>
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-users"></i>
                                    <span>1500+ STUDENTS</span>
                                </li>
                                <li class="adv-slider-stat-sep">•</li>
                                <li class="adv-slider-stat-node">
                                    <i class="fa-solid fa-user-tie"></i>
                                    <span>80+ QUALIFIED EDUCATORS</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Slider Navigation Arrows -->
            <button type="button" class="adv-slider-arrow prev-arrow" aria-label="Previous Slide">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button type="button" class="adv-slider-arrow next-arrow" aria-label="Next Slide">
                <i class="fa-solid fa-chevron-right"></i>
            </button>

            <!-- Slider Dots Pagination -->
            <div class="adv-slider-dots" role="tablist" aria-label="Slide Selection">
                <button type="button" class="adv-slider-dot active" role="tab" aria-selected="true" aria-label="Slide 1"></button>
                <button type="button" class="adv-slider-dot" role="tab" aria-selected="false" aria-label="Slide 2"></button>
            </div>
        </div>
    </section>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>