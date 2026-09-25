<?php
/**
 * About Us Page - Advaita School of Excellence
 * Clean Semantic HTML - Strictly No Inline CSS
 */
$pageTitle = "About Us - Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)";
$activePage = "school";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper about-page-wrapper">

    <!-- 1. Hero Section -->
    <section class="about-hero" aria-label="About Advaita School of Excellence">
        <div class="about-container about-hero-container">
            <div class="about-hero-grid">
                
                <!-- Hero Content Left -->
                <div class="about-hero-content">
                    <span class="about-eyebrow">— ABOUT US —</span>
                    <h1 class="about-hero-title">
                        A Strong Foundation<br>
                        for a Brighter<br>
                        <span class="about-text-orange">Tomorrow</span>
                    </h1>
                    <p class="about-hero-desc">
                        At Advaita School of Excellence, we believe education is not just about academic achievement, but about shaping curious thinkers, compassionate human beings, and confident leaders for a rapidly changing world.
                    </p>
                    
                    <!-- 3 Metric & Status Badges -->
                    <div class="about-hero-badges">
                        <div class="about-badge-card">
                            <div class="about-badge-icon badge-orange">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="about-badge-info">
                                <strong class="about-badge-val">2026</strong>
                                <span class="about-badge-lbl">Academic Session</span>
                            </div>
                        </div>

                        <div class="about-badge-card">
                            <div class="about-badge-icon badge-navy">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="about-badge-info">
                                <strong class="about-badge-val">Nursery to Grade X</strong>
                                <span class="about-badge-lbl">Classes</span>
                            </div>
                        </div>

                        <span class="about-badge-dot" aria-hidden="true">·</span>

                        <div class="about-badge-card">
                            <div class="about-badge-icon badge-tan">
                                <i class="fa-solid fa-award"></i>
                            </div>
                            <div class="about-badge-info">
                                <strong class="about-badge-val">CBSE</strong>
                                <span class="about-badge-lbl">Affiliated (No. 1130920)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hero Visual Right -->
                <div class="about-hero-visual">
                    <img src="assets/images/about-hero-building.jpg" alt="Advaita School of Excellence Campus Building" class="about-hero-img" loading="eager">
                </div>

            </div>
        </div>
    </section>

    <!-- 2. Our Story Section -->
    <section class="about-story" aria-label="Our Story">
        <div class="about-container">
            <div class="about-story-grid">

                <!-- Left Content -->
                <div class="about-story-content">
                    <span class="about-eyebrow">— OUR STORY —</span>
                    <h2 class="about-story-title">
                        Built on Values.<br>
                        Driven by <span class="about-text-orange">Purpose</span>.
                    </h2>
                    <p class="about-story-p">
                        Advaita School of Excellence is a proud initiative of Sanmati Sevabhavi Sanstha, established with a vision to create a modern, future-ready learning environment in Parbhani.
                    </p>
                    <p class="about-story-p">
                        Our journey began with a simple yet powerful belief — that every child deserves access to quality education, values and opportunities to discover their unique potential.
                    </p>
                    <a href="#philosophy" class="about-pill-btn">
                        <span>Our Journey</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Right Visual with Backdrop & Script -->
                <div class="about-story-visual-wrap">
                    <div class="about-story-backdrop" aria-hidden="true"></div>
                    <div class="about-story-frame">
                        <img src="assets/images/about-story-student.jpg" alt="Advaita Student Participating in Classroom" class="about-story-img" loading="lazy">
                    </div>
                    <div class="about-floating-script-badge" aria-hidden="true">
                        <span class="script-text">More<br>Than A School</span>
                        <svg class="script-swoosh" viewBox="0 0 100 20" fill="none">
                            <path d="M5 12 Q 50 18 95 6" stroke="#F37021" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>

            </div>

            <!-- Vision, Mission & Values Unified Card -->
            <div id="vmv" class="about-vmv-box" aria-label="Our Vision, Mission, and Values">
                <!-- Vision Column -->
                <div class="about-vmv-col">
                    <div class="about-vmv-icon-ring">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <div class="about-vmv-body">
                        <h3 class="about-vmv-title">Our Vision</h3>
                        <p class="about-vmv-desc">
                            To nurture confident, creative and compassionate global citizens.
                        </p>
                    </div>
                </div>

                <!-- Mission Column -->
                <div class="about-vmv-col">
                    <div class="about-vmv-icon-ring">
                        <i class="fa-solid fa-rocket"></i>
                    </div>
                    <div class="about-vmv-body">
                        <h3 class="about-vmv-title">Our Mission</h3>
                        <p class="about-vmv-desc">
                            To provide a holistic, value-based education that empowers every child to excel in academics, life skills and character.
                        </p>
                    </div>
                </div>

                <!-- Values Column -->
                <div class="about-vmv-col">
                    <div class="about-vmv-icon-ring">
                        <i class="fa-solid fa-gem"></i>
                    </div>
                    <div class="about-vmv-body">
                        <h3 class="about-vmv-title">Our Values</h3>
                        <p class="about-vmv-desc">
                            Excellence &nbsp;|&nbsp; Integrity &nbsp;|&nbsp;<br>
                            Respect &nbsp;|&nbsp; Empathy &nbsp;|&nbsp;<br>
                            Lifelong Learning
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 4. Our Philosophy -->
    <section id="philosophy" class="about-philosophy" aria-label="Our Philosophy">
        <div class="about-container">
            <div class="about-philosophy-grid">

                <!-- Left Student Visual -->
                <div class="about-philosophy-visual">
                    <img src="assets/images/about-philosophy-student.jpg" alt="Advaita School Student Reflecting" class="about-philosophy-img" loading="lazy">
                </div>

                <!-- Center Philosophy Text -->
                <div class="about-philosophy-content">
                    <span class="about-eyebrow">— OUR PHILOSOPHY —</span>
                    <h2 class="about-philosophy-title">
                        Education for<br>
                        Life, Not <span class="about-text-orange">Just Exams</span>.
                    </h2>
                    <p class="about-philosophy-desc">
                        We follow a balanced approach that integrates academic rigor with co-curricular experiences, life skills and value education. Our child-centric methodology focuses on inquiry, creativity and real-world application, helping students become adaptable, responsible and empathetic individuals.
                    </p>
                    <a href="academics.php" class="about-pill-btn">
                        <span>Our Approach</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Right Feature Pills Stack -->
                <div class="about-philosophy-pills">
                    <div class="about-feature-pill">
                        <div class="pill-icon pill-navy">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <span>Holistic Development</span>
                    </div>

                    <div class="about-feature-pill">
                        <div class="pill-icon pill-navy">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <span>Experiential Learning</span>
                    </div>

                    <div class="about-feature-pill">
                        <div class="pill-icon pill-orange">
                            <i class="fa-solid fa-gem"></i>
                        </div>
                        <span>Value-Based Education</span>
                    </div>

                    <div class="about-feature-pill">
                        <div class="pill-icon pill-orange">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>
                        <span>Student-Centric Approach</span>
                    </div>

                    <div class="about-feature-pill">
                        <div class="pill-icon pill-orange">
                            <i class="fa-solid fa-gears"></i>
                        </div>
                        <span>Future-Ready Skills</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. What Sets Us Apart -->
    <section class="about-why-choose" aria-label="Why Choose Advaita">
        <div class="about-container">
            
            <!-- Section Header -->
            <span class="about-eyebrow text-center">— WHY CHOOSE ADVAITA —</span>
            <h2 class="about-section-heading text-center">
                What Sets <span class="about-text-orange">Us Apart</span>
            </h2>
            <p class="about-section-subhead text-center">
                We go beyond conventional education to create a nurturing ecosystem where every child can learn, grow and belong.
            </p>

            <!-- 6 Feature Cards Grid -->
            <div class="about-apart-grid">

                <div class="about-apart-card">
                    <div class="apart-icon-box apart-navy">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="apart-title">Experienced<br>Faculty</h3>
                    <p class="apart-desc">A dedicated team committed to every child's success.</p>
                </div>

                <div class="about-apart-card">
                    <div class="apart-icon-box apart-orange">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <h3 class="apart-title">Modern<br>Infrastructure</h3>
                    <p class="apart-desc">Spacious classrooms, advanced labs and safe campus.</p>
                </div>

                <div class="about-apart-card">
                    <div class="apart-icon-box apart-orange">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3 class="apart-title">Focus on<br>Individual Growth</h3>
                    <p class="apart-desc">Personal attention and mentoring.</p>
                </div>

                <div class="about-apart-card">
                    <div class="apart-icon-box apart-navy">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h3 class="apart-title">Academic<br>Excellence</h3>
                    <p class="apart-desc">Strong foundation with CBSE curriculum.</p>
                </div>

                <div class="about-apart-card">
                    <div class="apart-icon-box apart-orange">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h3 class="apart-title">Vibrant<br>Campus Life</h3>
                    <p class="apart-desc">Sports, arts, cultural and leadership opportunities.</p>
                </div>

                <div class="about-apart-card">
                    <div class="apart-icon-box apart-green">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <h3 class="apart-title">Safe & Supportive<br>Environment</h3>
                    <p class="apart-desc">Where children feel secure, valued and inspired.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. Our Campus -->
    <section id="campus" class="about-campus-showcase" aria-label="Our Campus">
        <div class="about-container">
            <div class="about-campus-grid">

                <!-- Left Content -->
                <div class="about-campus-content">
                    <span class="about-eyebrow">— OUR CAMPUS —</span>
                    <h2 class="about-campus-title">
                        A Space to Learn,<br>
                        <span class="about-text-orange">Explore and Excel</span>
                    </h2>
                    <p class="about-campus-desc">
                        Located in the heart of Parbhani, our thoughtfully designed campus provides a safe, inspiring and future-ready environment for students to pursue their dreams.
                    </p>
                    <a href="gallery.php" class="about-pill-btn">
                        <span>Explore Campus Gallery</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Right Visual with Orange Outline Frame and Floating Inset Badge -->
                <div class="about-campus-visual-wrap">
                    <div class="about-campus-outline-frame" aria-hidden="true"></div>
                    <div class="about-campus-frame">
                        <img src="assets/images/about-campus-courtyard.jpg" alt="Advaita School Campus Inner Courtyard" class="about-campus-img" loading="lazy">
                    </div>
                    <div class="about-floating-campus-card">
                        <img src="assets/images/campus-visit-visual.jpg" alt="Campus Building Thumbnail" class="campus-thumb" loading="lazy">
                        <div class="campus-thumb-text">
                            <strong>Spacious Campus</strong>
                            <span>for Holistic Growth</span>
                        </div>
                        <a href="gallery.php" class="campus-thumb-arrow" aria-label="Explore Campus Gallery">
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. CTA Banner: Be a Part of Advaita -->
    <section class="about-cta-banner" aria-label="Join Advaita School of Excellence">
        <div class="about-cta-box">

            <!-- Left CTA Content -->
            <div class="about-cta-content">
                <div class="about-cta-watermark" aria-hidden="true">
                    <img src="assets/images/logo-seal.png" alt="" class="about-cta-watermark-img">
                </div>
                <div class="about-cta-text-wrap">
                    <h2 class="about-cta-title">Be a Part of Advaita</h2>
                    <p class="about-cta-desc">Give your child the right start for a brighter tomorrow.</p>
                    <div class="about-cta-actions">
                        <a href="admissions.php" class="about-btn-orange">
                            <span>Enquire Now</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="contact.php" class="about-btn-outline">
                            <span>Schedule a Campus Visit</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right CTA Students Visual -->
            <div class="about-cta-students-wrap">
                <img src="assets/images/about-cta-students-clean.jpg" alt="Happy Advaita Students" class="about-cta-students-img" loading="lazy">
            </div>

        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
