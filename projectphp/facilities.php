<?php
/**
 * Facilities Page - Advaita School of Excellence
 * World-Class Infrastructure & Learning Spaces
 * Clean Semantic HTML - Header and Footer Preserved
 */
$pageTitle = 'Campus Facilities - Advaita School of Excellence, Parbhani | Modern Learning Spaces';
$activePage = 'facilities';

require_once __DIR__.'/includes/header.php';
?>

<main id="main" class="main-content-wrapper facilities-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Centered Hero (No Building Visual, Clean Center Layout)
         ========================================================================= -->
    <section class="facilities-hero-section">
        <div class="facilities-hero-canvas">
            <div class="facilities-hero-inner">
                <!-- Centered Breadcrumb -->
                <nav class="facilities-breadcrumb" aria-label="Breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                    <span class="active">Facilities</span>
                </nav>

                <!-- Centered Eyebrow -->
                <div class="facilities-eyebrow">— OUR CAMPUS —</div>

                <!-- Centered Main Title -->
                <h1 class="facilities-hero-title">
                    More than Classrooms,<br>
                    A Place to <span class="highlight-serif">Grow.</span>
                </h1>

                <!-- Centered Description -->
                <p class="facilities-hero-desc">
                    Our campus is thoughtfully designed to provide a safe, modern and inspiring environment where every child can learn, explore and excel.
                </p>

                <!-- 4 Feature Pills Badges Under Centered Hero -->
                <div class="facilities-pills-grid">
                    <div class="facilities-pill-card">
                        <div class="pill-icon orange" aria-hidden="true">
                            <i class="fa-solid fa-building-columns"></i>
                        </div>
                        <span class="pill-text">Modern<br>Infrastructure</span>
                    </div>

                    <div class="facilities-pill-card">
                        <div class="pill-icon blue" aria-hidden="true">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <span class="pill-text">Safe &amp; Secure<br>Campus</span>
                    </div>

                    <div class="facilities-pill-card">
                        <div class="pill-icon pink" aria-hidden="true">
                            <i class="fa-solid fa-users-line"></i>
                        </div>
                        <span class="pill-text">Holistic<br>Development</span>
                    </div>

                    <div class="facilities-pill-card">
                        <div class="pill-icon green" aria-hidden="true">
                            <i class="fa-solid fa-seedling"></i>
                        </div>
                        <span class="pill-text">Clean &amp; Green<br>Surroundings</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. MAIN FACILITIES GRID SECTION: 12 Facility Cards
         ========================================================================= -->
    <section class="facilities-main-section">
        <div class="facilities-container">
            
            <!-- Section Header -->
            <div class="facilities-section-header">
                <span class="facilities-eyebrow">— OUR FACILITIES —</span>
                <h2 class="facilities-section-title">
                    Spaces That <span class="highlight-serif">Inspire</span> Every Day.
                </h2>
                <p class="facilities-section-desc">
                    From academics to co-curriculars, our facilities support every learner's journey with comfort, technology and care.
                </p>
            </div>

            <!-- 12 Facility Cards Grid -->
            <div class="facilities-grid">

                <!-- Card 1: Well-Equipped Futuristic Library -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/fac-library.jpg" alt="Well-Equipped Futuristic Library at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-badge-overlay">
                            <i class="fa-solid fa-book-bookmark"></i>
                            <span>Futuristic Library</span>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="facility-meta-row">
                            <span class="facility-tag-pill" style="color: #4338ca; background: #eef2ff; border: 1px solid #c7d2fe;">CBSE Curriculum</span>
                            <span class="facility-spec-text">10,000+ Volumes</span>
                        </div>
                        <h3 class="facility-card-title">Well-Equipped Futuristic Library</h3>
                        <p class="facility-card-desc">
                            A peaceful, high-tech reading sanctuary housing 10,000+ curated volumes, children's literature, encyclopedias, journals, and digital research bays that nurture lifelong inquisitive minds.
                        </p>
                        <a href="gallery.php" class="facility-card-link-btn">
                            <span>Explore Library</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Dedicated Dance Studio -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/gallery/dance.jpg" alt="Dedicated Dance Studio at Advaita School of Excellence" class="facility-thumb-img" loading="lazy">
                        <div class="facility-badge-overlay">
                            <i class="fa-solid fa-person-chalkboard"></i>
                            <span>Dance Studio</span>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="facility-meta-row">
                            <span class="facility-tag-pill" style="color: #c026d3; background: #fdf4ff; border: 1px solid #f5d0fe;">Performing Arts</span>
                            <span class="facility-spec-text">Mirrored Floor</span>
                        </div>
                        <h3 class="facility-card-title">Dedicated Dance Room</h3>
                        <p class="facility-card-desc">
                            Spacious performing arts studio designed for Indian classical dance, Bharatnatyam, folk choreography, and rhythm movement under specialized instructors to develop poise and grace.
                        </p>
                        <a href="gallery.php" class="facility-card-link-btn">
                            <span>View Dance Performances</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 3: High-Tech Computer Lab -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/gallery/computer-lab.png" alt="High-Tech Computer Laboratory at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-badge-overlay">
                            <i class="fa-solid fa-desktop"></i>
                            <span>Computer Lab</span>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="facility-meta-row">
                            <span class="facility-tag-pill" style="color: #0284c7; background: #f0f9ff; border: 1px solid #bae6fd;">56 m² IT Arena</span>
                            <span class="facility-spec-text">1:1 Student Ratio</span>
                        </div>
                        <h3 class="facility-card-title">High-Tech Computer Lab</h3>
                        <p class="facility-card-desc">
                            State-of-the-art computer workstations connected to high-speed fiber internet for AI coding, Python programming, Typing Master, and foundational digital literacy in a secure environment.
                        </p>
                        <a href="academics.php" class="facility-card-link-btn">
                            <span>Explore Digital Skills</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 4: Music Room & Instrumental Studio -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/gallery/gallery-school-band.jpg" alt="Music Room and School Band at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-badge-overlay">
                            <i class="fa-solid fa-music"></i>
                            <span>Music Studio</span>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="facility-meta-row">
                            <span class="facility-tag-pill" style="color: #ea580c; background: #fff7ed; border: 1px solid #fed7aa;">Vocal &amp; Band</span>
                            <span class="facility-spec-text">Marching Troupe</span>
                        </div>
                        <h3 class="facility-card-title">Music Room &amp; Band Studio</h3>
                        <p class="facility-card-desc">
                            Acoustically optimized practice studio for classical vocal training, harmonium, keyboards, tabla, and ceremonial school marching band brass and percussion troupes.
                        </p>
                        <a href="gallery.php" class="facility-card-link-btn">
                            <span>View Music Gallery</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 5: Grand Auditorium & Assembly Hall -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/gallery/cultural.jpg" alt="Grand Auditorium & Assembly Hall at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-badge-overlay">
                            <i class="fa-solid fa-masks-theater"></i>
                            <span>Auditorium</span>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="facility-meta-row">
                            <span class="facility-tag-pill" style="color: #b45309; background: #fffbeb; border: 1px solid #fde68a;">Central Space</span>
                            <span class="facility-spec-text">Acoustic Sound &amp; Lights</span>
                        </div>
                        <h3 class="facility-card-title">Auditorium &amp; Assembly Hall</h3>
                        <p class="facility-card-desc">
                            Magnificent multi-purpose indoor auditorium equipped with theatrical stage lighting, modern acoustic sound systems, and seating for annual gatherings, debates, seminars, and fests.
                        </p>
                        <a href="gallery.php" class="facility-card-link-btn">
                            <span>View Cultural Events</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 6: Big Playing Green Lawn -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/gallery/gallery-parachute-lawn-building.jpg" alt="Big Playing Green Lawn at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-badge-overlay">
                            <i class="fa-solid fa-clover"></i>
                            <span>Big Green Lawn</span>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="facility-meta-row">
                            <span class="facility-tag-pill" style="color: #15803d; background: #f0fdf4; border: 1px solid #bbf7d0;">Lush Turf</span>
                            <span class="facility-spec-text">Campus Frontage</span>
                        </div>
                        <h3 class="facility-card-title">Big Playing Green Lawn</h3>
                        <p class="facility-card-desc">
                            Expansive, manicured natural grass lawn in front of the main campus building dedicated to morning community bonding, parachute activities, open-air physical training, and free play.
                        </p>
                        <a href="gallery.php" class="facility-card-link-btn">
                            <span>View Lawn Activities</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 7: Cricket Field & Practice Nets -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/gallery/gallery-sports-field-agility.jpg" alt="Cricket Field and Net Practice Arena at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-badge-overlay">
                            <i class="fa-solid fa-baseball-bat-ball"></i>
                            <span>Cricket Arena</span>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="facility-meta-row">
                            <span class="facility-tag-pill" style="color: #d97706; background: #fffbeb; border: 1px solid #fde68a;">Cricket Nets</span>
                            <span class="facility-spec-text">Turf Pitch</span>
                        </div>
                        <h3 class="facility-card-title">Cricket Field &amp; Practice Nets</h3>
                        <p class="facility-card-desc">
                            Dedicated cricket ground with practice turf nets for batting drills, bowling run-ups, and fielding reflexes under the expert supervision of qualified cricket mentors.
                        </p>
                        <a href="gallery.php" class="facility-card-link-btn">
                            <span>View Cricket Drills</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 8: Basketball & Volleyball Courts -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/fac-sports.jpg" alt="Basketball and Volleyball Courts at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-badge-overlay">
                            <i class="fa-solid fa-volleyball"></i>
                            <span>Court Sports</span>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="facility-meta-row">
                            <span class="facility-tag-pill" style="color: #dc2626; background: #fef2f2; border: 1px solid #fecaca;">Hardcourt Surface</span>
                            <span class="facility-spec-text">Standard Marking</span>
                        </div>
                        <h3 class="facility-card-title">Basketball &amp; Volleyball Courts</h3>
                        <p class="facility-card-desc">
                            Professionally surfaced outdoor multi-sport courts for basketball and volleyball, fostering quick agility, vertical jumping, hand-eye coordination, and tournament-ready teamwork.
                        </p>
                        <a href="gallery.php" class="facility-card-link-btn">
                            <span>View Court Sports</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 9: Full-Sized Football Ground -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/gallery/gallery-football-match-sprint.jpg" alt="Full-Sized Football Ground at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-badge-overlay">
                            <i class="fa-solid fa-futbol"></i>
                            <span>Football Ground</span>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="facility-meta-row">
                            <span class="facility-tag-pill" style="color: #16a34a; background: #f0fdf4; border: 1px solid #bbf7d0;">Lush Grass Pitch</span>
                            <span class="facility-spec-text">Regulation Posts</span>
                        </div>
                        <h3 class="facility-card-title">Full-Sized Football Ground</h3>
                        <p class="facility-card-desc">
                            Lush natural grass football ground with regulation goalposts where students train in competitive sprint stamina, passing precision, and inter-house football championship matches.
                        </p>
                        <a href="gallery.php" class="facility-card-link-btn">
                            <span>View Football Matches</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 10: Composite Science Laboratories -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/gallery/science-lab.png" alt="Composite Science Laboratories at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-badge-overlay">
                            <i class="fa-solid fa-flask-vial"></i>
                            <span>Science Labs</span>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="facility-meta-row">
                            <span class="facility-tag-pill" style="color: #0891b2; background: #ecfeff; border: 1px solid #a5f3fc;">Physics · Chem · Bio</span>
                            <span class="facility-spec-text">56 m² CBSE Lab</span>
                        </div>
                        <h3 class="facility-card-title">Composite Science Laboratories</h3>
                        <p class="facility-card-desc">
                            Fully equipped composite science laboratory for hands-on experimentation across Physics, Chemistry, and Biology with high-grade optical microscopes and strict safety protocols.
                        </p>
                        <a href="academics.php" class="facility-card-link-btn">
                            <span>Explore Science Labs</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 11: Robotics & STEAM Innovation Lab -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/gallery/robotics-lab.png" alt="Robotics and STEAM Innovation Lab at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-badge-overlay">
                            <i class="fa-solid fa-robot"></i>
                            <span>Robotics &amp; STEAM</span>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="facility-meta-row">
                            <span class="facility-tag-pill" style="color: #7c3aed; background: #f5f3ff; border: 1px solid #ddd6fe;">Microcontrollers &amp; AI</span>
                            <span class="facility-spec-text">Hands-On Kits</span>
                        </div>
                        <h3 class="facility-card-title">Robotics &amp; STEAM Innovation Lab</h3>
                        <p class="facility-card-desc">
                            Experiential robotics arena with microcontrollers, motorized building kits, sensors, and coding puzzles where young innovators build automated projects and computational logic.
                        </p>
                        <a href="academics.php" class="facility-card-link-btn">
                            <span>Explore Robotics Track</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 12: Mathematics & Abacus Activity Lab -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/gallery/academic-learning.png" alt="Mathematics and Abacus Activity Lab at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-badge-overlay">
                            <i class="fa-solid fa-calculator"></i>
                            <span>Math &amp; Abacus</span>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="facility-meta-row">
                            <span class="facility-tag-pill" style="color: #0284c7; background: #f0f9ff; border: 1px solid #bae6fd;">Speed Arithmetic</span>
                            <span class="facility-spec-text">47 m² Lab</span>
                        </div>
                        <h3 class="facility-card-title">Mathematics &amp; Abacus Lab</h3>
                        <p class="facility-card-desc">
                            Dedicated math activity space featuring Abacus apparatus, tactile geometric kits, 3D solids, and mental math tools making arithmetic intuitive and engaging for all age groups.
                        </p>
                        <a href="academics.php" class="facility-card-link-btn">
                            <span>Explore Abacus Track</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 13: 25 Smart Classrooms -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/fac-smart-class.jpg" alt="25 Smart Classrooms at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-badge-overlay">
                            <i class="fa-solid fa-chalkboard-user"></i>
                            <span>Smart Classrooms</span>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="facility-meta-row">
                            <span class="facility-tag-pill" style="color: #ea580c; background: #fff7ed; border: 1px solid #fed7aa;">25 Classrooms</span>
                            <span class="facility-spec-text">47.08 m² each</span>
                        </div>
                        <h3 class="facility-card-title">Interactive Smart Classrooms</h3>
                        <p class="facility-card-desc">
                            Well-ventilated, spacious air-cooled classrooms adhering to CBSE spatial norms, equipped with interactive multimedia panels, natural airflow, and child-safe ergonomic furniture.
                        </p>
                        <a href="academics.php" class="facility-card-link-btn">
                            <span>Explore Classrooms</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 14: GPS-Enabled Transport Fleet -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/fac-transport.jpg" alt="GPS-Enabled School Transport Fleet" class="facility-thumb-img" loading="lazy">
                        <div class="facility-badge-overlay">
                            <i class="fa-solid fa-bus"></i>
                            <span>GPS Fleet</span>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="facility-meta-row">
                            <span class="facility-tag-pill" style="color: #ea580c; background: #fff7ed; border: 1px solid #fed7aa;">Third Party</span>
                            <span class="facility-spec-text">Head: Shakir Bhai</span>
                        </div>
                        <h3 class="facility-card-title">GPS-Enabled School Transport</h3>
                        <p class="facility-card-desc">
                            Dedicated school transport provided via a verified third party, managed by Transport Head <strong>Shakir Bhai (<a href="tel:+919923747775" class="text-orange fw-bold">+91 99237 47775</a>)</strong> with GPS tracking, speed governors, and female attendants.
                        </p>
                        <a href="admission-info.php#fee-structure" class="facility-card-link-btn">
                            <span>View Bus Routes</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 15: Safety & 24/7 CCTV Security -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/fac-security.jpg" alt="Safety and 24/7 CCTV Security Surveillance" class="facility-thumb-img" loading="lazy">
                        <div class="facility-badge-overlay">
                            <i class="fa-solid fa-shield-halved"></i>
                            <span>24/7 Monitored</span>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <div class="facility-meta-row">
                            <span class="facility-tag-pill" style="color: #0369a1; background: #f0f9ff; border: 1px solid #bae6fd;">CCTV Network</span>
                            <span class="facility-spec-text">Full-Time Nurse</span>
                        </div>
                        <h3 class="facility-card-title">24/7 CCTV Campus Safety &amp; Infirmary</h3>
                        <p class="facility-card-desc">
                            Full perimeter boundary wall, round-the-clock CCTV cameras across checkpoints and corridors, guarded gates, campus sick bay with full-time nurse, and pure RO drinking water stations.
                        </p>
                        <a href="mandatory-disclosure.php" class="facility-card-link-btn">
                            <span>View Safety Certifications</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- 3. Stats Highlight Strip -->
            <div class="facilities-stats-bar">
                <div class="facilities-stat-item">
                    <i class="fa-solid fa-users facilities-stat-icon orange" aria-hidden="true"></i>
                    <div>
                        <span class="facilities-stat-num">15+</span>
                        <span class="facilities-stat-label">Modern Facilities</span>
                    </div>
                </div>

                <div class="facilities-stat-item">
                    <i class="fa-solid fa-shield-halved facilities-stat-icon blue" aria-hidden="true"></i>
                    <div>
                        <span class="facilities-stat-num">100%</span>
                        <span class="facilities-stat-label">Safe &amp; Secure Campus</span>
                    </div>
                </div>

                <div class="facilities-stat-item">
                    <i class="fa-solid fa-leaf facilities-stat-icon green" aria-hidden="true"></i>
                    <div>
                        <span class="facilities-stat-num">Green</span>
                        <span class="facilities-stat-label">Clean &amp; Eco-Friendly</span>
                    </div>
                </div>

                <div class="facilities-stat-item">
                    <i class="fa-solid fa-star facilities-stat-icon gold" aria-hidden="true"></i>
                    <div>
                        <span class="facilities-stat-num">All-Round</span>
                        <span class="facilities-stat-label">Holistic Development</span>
                    </div>
                </div>
            </div>

            <!-- 4. Pre-Footer Campus Tour CTA Banner -->
            <div class="facilities-cta-box">
                <div class="facilities-cta-left">
                    <span class="facilities-cta-pill">EXPERIENCE IT YOURSELF</span>
                    <h2 class="facilities-cta-headline">
                        Take a Campus <span class="highlight-serif">Tour.</span>
                    </h2>
                    <p class="facilities-cta-desc">
                        Visit our campus and explore the facilities that make learning at Advaita a truly enriching experience.
                    </p>
                </div>

                <div class="facilities-cta-actions">
                    <a href="contact.php" class="facilities-btn-primary">
                        <span>Schedule a Campus Visit</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="contact.php#campus-map" class="facilities-btn-map">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>View on Map</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
require_once __DIR__.'/includes/footer.php';
?>
