<?php
/**
 * Academics Page - Advaita School of Excellence, Parbhani
 * Programmes > Academics: Holistic Curriculum, Stages, Streams, Approach & Activities
 * Clean Semantic HTML - Header and Footer Preserved
 */
$pageTitle = 'Academics - Advaita School of Excellence, Parbhani | Holistic Learning';
$activePage = 'academics';

require_once __DIR__.'/includes/header.php';
?>

<main id="main" class="main-content-wrapper acad-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Breadcrumb + Title + Visual with 3 Students & Script Tag
         ========================================================================= -->
    <section class="admission-hero-section">
        <div class="admission-hero-canvas">
            <!-- Hero Students Visual -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="assets/images/about-cta-students-clean.png?v=<?php echo filemtime(__DIR__.'/assets/images/about-cta-students-clean.png'); ?>" alt="Advaita Students" class="admission-hero-bg-img" width="1024" height="682">
            </div>

            <!-- SVG Wave Overlay for Smooth Translucent Backdrop -->
            <div class="admission-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H540C570 120 520 280 620 440H0V0Z" fill="#EEF6FC" fill-opacity="0.96"/>
                    <path d="M520 0C550 140 500 280 600 440H580C480 280 530 140 500 0H520Z" fill="#F37021" fill-opacity="0.25"/>
                </svg>
            </div>


            <!-- Floating Handwritten Script Tag at Top Right -->
            <div class="admission-hero-script-tag" aria-hidden="true">
                <span class="script-title">More<br>Than A School</span>
                <svg class="script-underline" viewBox="0 0 120 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 12C38 3 84 4 116 14" stroke="#083B7A" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </div>

            <!-- Left Content Panel -->
            <div class="admission-hero-left-panel">
                <div class="admission-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <nav class="admission-breadcrumb" aria-label="Breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="academics.php">Programmes</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Academics</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">— OUR ACADEMICS —</div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        A Strong Foundation for a Brighter <span class="highlight-orange">Tomorrow.</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        A thoughtfully designed curriculum that nurtures curiosity, builds strong concepts and prepares students for lifelong success.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Container -->
    <div class="acad-container">

        <!-- =========================================================================
             3. OUR CURRICULUM SECTION (4 Cards)
             ========================================================================= -->
        <section class="acad-section" id="our-curriculum">
            <div class="acad-section-header">
                <span class="acad-eyebrow">— OUR CURRICULUM —</span>
                <h2 class="acad-section-title">
                    Holistic Learning for <span class="highlight-orange">Every Stage.</span>
                </h2>
                <p class="acad-section-desc">
                    Our academic programme is aligned with the latest education standards and focuses on conceptual clarity, critical thinking and real-world application.
                </p>
            </div>

            <div class="acad-curriculum-grid">
                <!-- Card 1 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon orange" aria-hidden="true">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="acad-curr-title">Concept-Based Learning</h3>
                    <p class="acad-curr-desc">Strong fundamentals across all subjects.</p>
                </div>

                <!-- Card 2 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon blue" aria-hidden="true">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <h3 class="acad-curr-title">Interdisciplinary Approach</h3>
                    <p class="acad-curr-desc">Connecting knowledge beyond textbooks.</p>
                </div>

                <!-- Card 3 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon teal" aria-hidden="true">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3 class="acad-curr-title">Experiential Learning</h3>
                    <p class="acad-curr-desc">Learning through projects, activities and real-life exposure.</p>
                </div>

                <!-- Card 4 -->
                <div class="acad-curriculum-card">
                    <div class="acad-curr-icon pink" aria-hidden="true">
                        <i class="fa-solid fa-user-check"></i>
                    </div>
                    <h3 class="acad-curr-title">Continuous Assessment</h3>
                    <p class="acad-curr-desc">Regular feedback to track and support every child's progress.</p>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             4. ACADEMIC STAGES SECTION (4 Stages)
             ========================================================================= -->
        <section class="acad-section" id="academic-stages">
            <div class="acad-section-header">
                <span class="acad-eyebrow">— ACADEMIC STAGES —</span>
                <h2 class="acad-section-title">
                    A Well-Structured Journey from <span class="highlight-orange">Foundation to Future.</span>
                </h2>
                <p class="acad-section-desc">
                    Our academic programme is designed for students from Play Group to Class 10, aligned with the NEP 2020 pedagogical framework and progressive learning goals.
                </p>
            </div>

            <div class="acad-stages-grid">
                <!-- Stage 1: Foundational Stage -->
                <a href="pre-primary.php" class="acad-stage-card">
                    <div class="acad-stage-thumb">
                        <img src="assets/images/gallery/gallery-crawl-tunnel-kids.jpg" alt="Foundational Stage Students at Advaita" loading="lazy">
                        <span class="stage-badge-top orange">
                            <i class="fa-solid fa-shapes me-1"></i> Ages 3–8 · Foundational
                        </span>
                    </div>
                    <div class="acad-stage-body">
                        <div class="acad-stage-header">
                            <h3 class="acad-stage-title">Foundational Stage</h3>
                            <span class="acad-stage-classes">Play Group &bull; Nursery &bull; LKG &bull; UKG &bull; Classes 1–2</span>
                        </div>
                        <p class="acad-stage-desc">Play-based early learning, multi-sensory discovery, jolly phonics, and foundational literacy &amp; numeracy in a joyful, child-safe environment.</p>
                        <ul class="stage-highlights-list">
                            <li><i class="fa-solid fa-circle-check"></i> Play-way experiential pedagogy</li>
                            <li><i class="fa-solid fa-circle-check"></i> Tactile blocks, sand &amp; music stations</li>
                            <li><i class="fa-solid fa-circle-check"></i> 100% child-safe CCTV campus</li>
                        </ul>
                        <div class="stage-card-footer-btn">
                            <span>Explore Pre-Primary Wing</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>

                <!-- Stage 2: Preparatory Stage -->
                <a href="primary.php" class="acad-stage-card">
                    <div class="acad-stage-thumb">
                        <img src="assets/images/about-story-student.jpg" alt="Preparatory Stage Students at Advaita" loading="lazy">
                        <span class="stage-badge-top blue">
                            <i class="fa-solid fa-pencil me-1"></i> Ages 8–11 · Preparatory
                        </span>
                    </div>
                    <div class="acad-stage-body">
                        <div class="acad-stage-header">
                            <h3 class="acad-stage-title">Preparatory Stage</h3>
                            <span class="acad-stage-classes">Classes 3 to 5 (Grades III–V)</span>
                        </div>
                        <p class="acad-stage-desc">Building strong bilingual literacy, numeracy, mental arithmetic with Abacus, and early Olympiad conceptual drills.</p>
                        <ul class="stage-highlights-list">
                            <li><i class="fa-solid fa-circle-check"></i> Introductory Abacus &amp; Vedic Math</li>
                            <li><i class="fa-solid fa-circle-check"></i> Reading clubs &amp; expressive communication</li>
                            <li><i class="fa-solid fa-circle-check"></i> Joyful STEAM experiment corners</li>
                        </ul>
                        <div class="stage-card-footer-btn">
                            <span>Explore Primary School Wing</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>

                <!-- Stage 3: Middle Stage -->
                <a href="primary.php#abacus-section" class="acad-stage-card">
                    <div class="acad-stage-thumb">
                        <img src="assets/images/gallery/robotics-lab.png" alt="Middle Stage Students at Advaita" loading="lazy">
                        <span class="stage-badge-top teal">
                            <i class="fa-solid fa-calculator me-1"></i> Ages 11–14 · Middle School
                        </span>
                    </div>
                    <div class="acad-stage-body">
                        <div class="acad-stage-header">
                            <h3 class="acad-stage-title">Middle Stage</h3>
                            <span class="acad-stage-classes">Classes 6 to 8 (Grades VI–VIII)</span>
                        </div>
                        <p class="acad-stage-desc">Subject depth in sciences and mathematics, experiential learning, SOF Olympiad competitive exam mastery, and robotics foundation.</p>
                        <ul class="stage-highlights-list">
                            <li><i class="fa-solid fa-circle-check"></i> State &amp; National Abacus &amp; Olympiad Trophies</li>
                            <li><i class="fa-solid fa-circle-check"></i> NSO, IMO &amp; IEO Olympiad mentoring</li>
                            <li><i class="fa-solid fa-circle-check"></i> Robotics &amp; computer coding foundation</li>
                        </ul>
                        <div class="stage-card-footer-btn">
                            <span>Explore Middle School</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>

                <!-- Stage 4: Secondary Stage -->
                <a href="secondary.php" class="acad-stage-card">
                    <div class="acad-stage-thumb">
                        <img src="assets/images/about-philosophy-student.jpg" alt="Secondary Stage Students at Advaita" loading="lazy">
                        <span class="stage-badge-top purple">
                            <i class="fa-solid fa-atom me-1"></i> Ages 14–16 · Secondary Track
                        </span>
                    </div>
                    <div class="acad-stage-body">
                        <div class="acad-stage-header">
                            <h3 class="acad-stage-title">Secondary Stage</h3>
                            <span class="acad-stage-classes">Classes 9 &amp; 10 (Grades IX–X)</span>
                        </div>
                        <p class="acad-stage-desc">Consistent 100% CBSE Class 10 Board results paired with integrated NEET/IIT Foundation mentoring and high-tech labs.</p>
                        <ul class="stage-highlights-list">
                            <li><i class="fa-solid fa-circle-check"></i> 100% Board Pass Rate (District 1st Topper)</li>
                            <li><i class="fa-solid fa-circle-check"></i> Integrated JEE / NEET Milestone series</li>
                            <li><i class="fa-solid fa-circle-check"></i> Composite Science &amp; Robotics Labs</li>
                        </ul>
                        <div class="stage-card-footer-btn">
                            <span>Explore Secondary &amp; IIT Track</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <!-- =========================================================================
             5. LEARNING STREAMS SECTION (6 Cards with Student Photos)
             ========================================================================= -->
        <section class="acad-section" id="learning-streams">
            <div class="acad-section-header">
                <span class="acad-eyebrow">— LEARNING STREAMS —</span>
                <h2 class="acad-section-title">
                    A Balanced Curriculum for <span class="highlight-orange">All-Round Growth.</span>
                </h2>
                <p class="acad-section-desc">
                    We offer a comprehensive curriculum with a focus on academics, creativity, values and real-world skills.
                </p>
            </div>

            <div class="acad-streams-grid">
                <!-- Languages & Literature -->
                <div class="acad-stream-card">
                    <div class="acad-stream-thumb">
                        <img src="assets/images/gallery/gallery-classroom-learning.jpg" alt="Languages &amp; Literature students at Advaita" loading="lazy">
                        <span class="acad-stream-tag orange">
                            <i class="fa-solid fa-book-bookmark"></i>
                            <span>Languages</span>
                        </span>
                    </div>
                    <div class="acad-stream-body">
                        <h3 class="acad-stream-title">Languages &amp; Literature</h3>
                        <p class="acad-stream-desc">English fluency, Hindi, Sanskrit, and Marathi language comprehension, storytelling circles, and expressive public speaking.</p>
                    </div>
                </div>

                <!-- Mathematics & Logic -->
                <div class="acad-stream-card">
                    <div class="acad-stream-thumb">
                        <img src="assets/images/gallery/academic-learning.png" alt="Mathematics &amp; Logic students at Advaita" loading="lazy">
                        <span class="acad-stream-tag blue">
                            <i class="fa-solid fa-calculator"></i>
                            <span>Mathematics</span>
                        </span>
                    </div>
                    <div class="acad-stream-body">
                        <h3 class="acad-stream-title">Mathematics &amp; Logic</h3>
                        <p class="acad-stream-desc">Conceptual arithmetic, geometry proofs, Abacus speed calculations, and multi-step analytical problem solving.</p>
                    </div>
                </div>

                <!-- Science & Discovery -->
                <div class="acad-stream-card">
                    <div class="acad-stream-thumb">
                        <img src="assets/images/fac-science-lab.jpg" alt="Science &amp; Discovery students at Advaita" loading="lazy">
                        <span class="acad-stream-tag teal">
                            <i class="fa-solid fa-flask-vial"></i>
                            <span>Science</span>
                        </span>
                    </div>
                    <div class="acad-stream-body">
                        <h3 class="acad-stream-title">Science &amp; Discovery</h3>
                        <p class="acad-stream-desc">Hands-on experimentation across Physics, Chemistry, Biology, and interactive science laboratories.</p>
                    </div>
                </div>

                <!-- Social Sciences -->
                <div class="acad-stream-card">
                    <div class="acad-stream-thumb">
                        <img src="assets/images/gallery/educational-tour.jpg" alt="Social Sciences students at Advaita" loading="lazy">
                        <span class="acad-stream-tag purple">
                            <i class="fa-solid fa-globe"></i>
                            <span>Social Studies</span>
                        </span>
                    </div>
                    <div class="acad-stream-body">
                        <h3 class="acad-stream-title">Social Sciences</h3>
                        <p class="acad-stream-desc">Understanding history, democratic values, global geography, heritage field exploration, and civic stewardship.</p>
                    </div>
                </div>

                <!-- Arts & Expression -->
                <div class="acad-stream-card">
                    <div class="acad-stream-thumb">
                        <img src="assets/images/gallery/gallery-art-circle-kids.jpg" alt="Arts &amp; Expression students at Advaita" loading="lazy">
                        <span class="acad-stream-tag pink">
                            <i class="fa-solid fa-palette"></i>
                            <span>Arts &amp; Music</span>
                        </span>
                    </div>
                    <div class="acad-stream-body">
                        <h3 class="acad-stream-title">Arts &amp; Expression</h3>
                        <p class="acad-stream-desc">Visual art, Indian classical dance, vocal music, drama, origami craft, and digital creative media.</p>
                    </div>
                </div>

                <!-- Sports & Physical Fitness -->
                <div class="acad-stream-card">
                    <div class="acad-stream-thumb">
                        <img src="assets/images/gallery/gallery-football-match-sprint.jpg" alt="Sports &amp; Physical Fitness students at Advaita" loading="lazy">
                        <span class="acad-stream-tag amber">
                            <i class="fa-solid fa-dumbbell"></i>
                            <span>Physical Fitness</span>
                        </span>
                    </div>
                    <div class="acad-stream-body">
                        <h3 class="acad-stream-title">Sports &amp; Physical Fitness</h3>
                        <p class="acad-stream-desc">Athletics, cricket, badminton, yoga, gymnastics, and team sports fostering lifelong physical health and teamwork.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             6. OUR APPROACH SECTION (4 Cards with Student Photos)
             ========================================================================= -->
        <section class="acad-section" id="our-approach">
            <div class="acad-section-header">
                <span class="acad-eyebrow">— OUR APPROACH —</span>
                <h2 class="acad-section-title">
                    More Than <span class="highlight-orange">Just Academics.</span>
                </h2>
                <p class="acad-section-desc">
                    We focus on the overall development of each child — intellectually, emotionally, socially and physically.
                </p>
            </div>

            <div class="acad-approach-grid">
                <!-- Card 1 -->
                <div class="acad-approach-card">
                    <div class="acad-approach-thumb">
                        <img src="assets/images/gallery/gallery-classroom-learning.jpg" alt="Student-Centric Learning at Advaita" loading="lazy">
                        <div class="acad-approach-icon-badge orange" aria-hidden="true">
                            <i class="fa-regular fa-lightbulb"></i>
                        </div>
                    </div>
                    <div class="acad-approach-body">
                        <h3 class="acad-approach-title">Student-Centric Learning</h3>
                        <p class="acad-approach-desc">Low teacher-student ratio ensuring individualized academic attention, remedial guidance, and differentiated pace.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="acad-approach-card">
                    <div class="acad-approach-thumb">
                        <img src="assets/images/about-vision-students.jpg" alt="Safe &amp; Supportive Environment at Advaita" loading="lazy">
                        <div class="acad-approach-icon-badge blue" aria-hidden="true">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                    </div>
                    <div class="acad-approach-body">
                        <h3 class="acad-approach-title">Safe &amp; Supportive Environment</h3>
                        <p class="acad-approach-desc">A nurturing, fully CCTV-monitored campus with compassionate faculty where every child feels respected and inspired.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="acad-approach-card">
                    <div class="acad-approach-thumb">
                        <img src="assets/images/gallery/yoga.jpg" alt="Focus on Values &amp; Character at Advaita" loading="lazy">
                        <div class="acad-approach-icon-badge teal" aria-hidden="true">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                    <div class="acad-approach-body">
                        <h3 class="acad-approach-title">Focus on Values &amp; Character</h3>
                        <p class="acad-approach-desc">Instilling integrity, social responsibility, empathy, and cultural respect alongside academic achievement.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="acad-approach-card">
                    <div class="acad-approach-thumb">
                        <img src="assets/images/gallery/computer-lab.png" alt="Future-Ready Competencies at Advaita" loading="lazy">
                        <div class="acad-approach-icon-badge pink" aria-hidden="true">
                            <i class="fa-solid fa-rocket"></i>
                        </div>
                    </div>
                    <div class="acad-approach-body">
                        <h3 class="acad-approach-title">Future-Ready Competencies</h3>
                        <p class="acad-approach-desc">Equipping students with analytical reasoning, technological literacy, and confidence for higher competitive success.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             7. BEYOND THE CLASSROOM SECTION (Clubs with Student Photos)
             ========================================================================= -->
        <section class="acad-section" id="beyond-classroom">
            <div class="acad-section-header">
                <span class="acad-eyebrow">— BEYOND THE CLASSROOM —</span>
                <h2 class="acad-section-title">
                    Learning That <span class="highlight-orange">Goes Further.</span>
                </h2>
                <p class="acad-section-desc">
                    Our academic programme is enriched with co-curricular clubs, competitions, and leadership opportunities that let students discover their unique passions.
                </p>
            </div>

            <div class="acad-clubs-grid">
                <!-- Club 1: Science & STEM -->
                <div class="acad-club-card">
                    <div class="acad-club-thumb">
                        <img src="assets/images/gallery/robotics-lab.png" alt="Science &amp; STEM Club students" loading="lazy">
                        <span class="acad-club-pill c1">
                            <i class="fa-solid fa-microscope"></i>
                            <span>STEM</span>
                        </span>
                    </div>
                    <div class="acad-club-body">
                        <h4>Science &amp; STEM Club</h4>
                        <p>Science exhibitions, robotics challenges, and observational nature experiments.</p>
                    </div>
                </div>

                <!-- Club 2: Literary & Editorial -->
                <div class="acad-club-card">
                    <div class="acad-club-thumb">
                        <img src="assets/images/fac-library.jpg" alt="Literary &amp; Editorial students" loading="lazy">
                        <span class="acad-club-pill c2">
                            <i class="fa-solid fa-book-open"></i>
                            <span>Literary</span>
                        </span>
                    </div>
                    <div class="acad-club-body">
                        <h4>Literary &amp; Editorial</h4>
                        <p>Creative writing, school magazine editorial board, and poetry recitations.</p>
                    </div>
                </div>

                <!-- Club 3: Debate & Elocution -->
                <div class="acad-club-card">
                    <div class="acad-club-thumb">
                        <img src="assets/images/gallery/gallery-foundation-achievers.jpg" alt="Debate &amp; Elocution students" loading="lazy">
                        <span class="acad-club-pill c3">
                            <i class="fa-solid fa-bullhorn"></i>
                            <span>Debate</span>
                        </span>
                    </div>
                    <div class="acad-club-body">
                        <h4>Debate &amp; Elocution</h4>
                        <p>Public speaking, parliamentary debate drills, and Model United Nations (MUN).</p>
                    </div>
                </div>

                <!-- Club 4: Fine Arts & Music -->
                <div class="acad-club-card">
                    <div class="acad-club-thumb">
                        <img src="assets/images/gallery/gallery-school-band.jpg" alt="Fine Arts &amp; Music students" loading="lazy">
                        <span class="acad-club-pill c4">
                            <i class="fa-solid fa-music"></i>
                            <span>Arts</span>
                        </span>
                    </div>
                    <div class="acad-club-body">
                        <h4>Fine Arts &amp; Music</h4>
                        <p>Vocal training, classical instrumental music, painting, and craft workshops.</p>
                    </div>
                </div>

                <!-- Club 5: Sports & Athletics -->
                <div class="acad-club-card">
                    <div class="acad-club-thumb">
                        <img src="assets/images/gallery/gallery-football-match-sprint.jpg" alt="Sports &amp; Athletics students" loading="lazy">
                        <span class="acad-club-pill c5">
                            <i class="fa-solid fa-person-running"></i>
                            <span>Sports</span>
                        </span>
                    </div>
                    <div class="acad-club-body">
                        <h4>Sports &amp; Athletics</h4>
                        <p>Inter-house tournaments, physical agility drills, cricket, and martial arts.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             8. ADMISSIONS OPEN CTA BANNER
             ========================================================================= -->
        <div class="acad-cta-banner">
            <div class="acad-cta-left">
                <span class="acad-cta-eyebrow">— ADMISSIONS OPEN —</span>
                <h3 class="acad-cta-title">
                    Give Your Child the <span class="highlight-orange">Advaita Advantage.</span>
                </h3>
                <p class="acad-cta-desc">A strong academic foundation today, for a brighter and bolder tomorrow.</p>
            </div>

            <div class="acad-cta-actions">
                <a href="online-registration.php" class="acad-btn-primary">
                    <span>Apply for Admission</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="contact.php#campus-map" class="acad-btn-secondary">
                    <i class="fa-regular fa-calendar-check"></i>
                    <span>Schedule a Campus Visit</span>
                </a>
            </div>
        </div>

    </div><!-- /.acad-container -->

</main>

<?php require_once __DIR__.'/includes/footer.php'; ?>
