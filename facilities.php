<?php
/**
 * Facilities Page - Advaita School of Excellence
 * World-Class Infrastructure & Learning Spaces
 * Clean Semantic HTML - Header and Footer Preserved
 */
$pageTitle = "Campus Facilities - Advaita School of Excellence, Parbhani | Modern Learning Spaces";
$activePage = "facilities";

require_once __DIR__ . '/includes/header.php';
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

                <!-- Card 1: Smart Classrooms -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/fac-smart-class.jpg" alt="Smart Classrooms at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-orange" aria-hidden="true">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <h3 class="facility-card-title">Smart Classrooms</h3>
                        <p class="facility-card-desc">
                            Well-ventilated, spacious and technology-enabled classrooms for an interactive and engaging learning experience.
                        </p>
                        <a href="about-us.php" class="facility-card-link">
                            <span>View Gallery</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Science Laboratories -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/fac-science-lab.jpg" alt="Science Laboratories at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-blue" aria-hidden="true">
                            <i class="fa-solid fa-flask"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <h3 class="facility-card-title">Science Laboratories</h3>
                        <p class="facility-card-desc">
                            Well-equipped labs for Physics, Chemistry and Biology to encourage hands-on learning, observation and experimentation.
                        </p>
                        <a href="about-us.php" class="facility-card-link">
                            <span>View Gallery</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 3: Computer Lab -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/fac-computer.jpg" alt="Modern Computer Lab at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-purple" aria-hidden="true">
                            <i class="fa-solid fa-laptop"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <h3 class="facility-card-title">Computer Lab</h3>
                        <p class="facility-card-desc">
                            Modern computer lab with high-speed internet and latest systems for digital literacy, coding and research.
                        </p>
                        <a href="about-us.php" class="facility-card-link">
                            <span>View Gallery</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 4: Library -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/fac-library.jpg" alt="School Library at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-violet" aria-hidden="true">
                            <i class="fa-solid fa-book-bookmark"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <h3 class="facility-card-title">Library</h3>
                        <p class="facility-card-desc">
                            A rich collection of books, reference materials, periodicals and e-resources to build reading habits and curiosity.
                        </p>
                        <a href="about-us.php" class="facility-card-link">
                            <span>View Gallery</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 5: Sports Facilities -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/fac-sports.jpg" alt="Sports Grounds and Courts" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-green" aria-hidden="true">
                            <i class="fa-solid fa-person-running"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <h3 class="facility-card-title">Sports Facilities</h3>
                        <p class="facility-card-desc">
                            Spacious playground and indoor sports setups to promote physical fitness, teamwork, agility and sportsmanship.
                        </p>
                        <a href="about-us.php" class="facility-card-link">
                            <span>View Gallery</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 6: Auditorium -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/gallery-assembly.jpg" alt="School Auditorium at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-amber" aria-hidden="true">
                            <i class="fa-solid fa-landmark"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <h3 class="facility-card-title">Auditorium</h3>
                        <p class="facility-card-desc">
                            A multi-purpose hall for assemblies, seminars, cultural events, debate competitions and talent showcases.
                        </p>
                        <a href="about-us.php" class="facility-card-link">
                            <span>View Gallery</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 7: Transport -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/fac-transport.jpg" alt="Safe School Transport at Advaita" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-orange" aria-hidden="true">
                            <i class="fa-solid fa-bus"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <h3 class="facility-card-title">Transport</h3>
                        <p class="facility-card-desc">
                            Safe and reliable transport facility with trained drivers, attendants and GPS-enabled buses across major routes.
                        </p>
                        <a href="about-us.php" class="facility-card-link">
                            <span>View Gallery</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 8: Safety & Security -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/fac-security.jpg" alt="24x7 Safety and CCTV Security" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-blue" aria-hidden="true">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <h3 class="facility-card-title">Safety &amp; Security</h3>
                        <p class="facility-card-desc">
                            24/7 CCTV surveillance, secured entry/exit checkpoints and a dedicated security team ensuring comprehensive safety.
                        </p>
                        <a href="about-us.php" class="facility-card-link">
                            <span>View Gallery</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 9: Cafeteria -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/gallery-day-1.jpg" alt="Hygienic School Cafeteria" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-red" aria-hidden="true">
                            <i class="fa-solid fa-utensils"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <h3 class="facility-card-title">Cafeteria</h3>
                        <p class="facility-card-desc">
                            Hygienic and nutritious meals prepared with utmost cleanliness in a comfortable, pleasant dining space.
                        </p>
                        <a href="about-us.php" class="facility-card-link">
                            <span>View Gallery</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 10: Medical Room -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/prog-early-years.jpg" alt="On-Campus Medical Room" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-pink" aria-hidden="true">
                            <i class="fa-solid fa-briefcase-medical"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <h3 class="facility-card-title">Medical Room</h3>
                        <p class="facility-card-desc">
                            On-campus infirmary with first-aid facilities, emergency equipment and trained staff dedicated to student health care.
                        </p>
                        <a href="about-us.php" class="facility-card-link">
                            <span>View Gallery</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 11: Green Campus -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/about-campus-courtyard.jpg" alt="Lush Green Eco Campus" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-green" aria-hidden="true">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <h3 class="facility-card-title">Green Campus</h3>
                        <p class="facility-card-desc">
                            A clean, green and eco-friendly campus with landscaped gardens promoting a serene and natural learning environment.
                        </p>
                        <a href="about-us.php" class="facility-card-link">
                            <span>View Gallery</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 12: Arts & Activity Rooms -->
                <div class="facility-card">
                    <div class="facility-thumb-wrap">
                        <img src="assets/images/fac-arts.jpg" alt="Arts and Music Activity Rooms" class="facility-thumb-img" loading="lazy">
                        <div class="facility-float-badge badge-teal" aria-hidden="true">
                            <i class="fa-solid fa-palette"></i>
                        </div>
                    </div>
                    <div class="facility-card-body">
                        <h3 class="facility-card-title">Arts &amp; Activity Rooms</h3>
                        <p class="facility-card-desc">
                            Dedicated studios for music, fine arts, dance and creative pursuits to nurture diverse talents beyond textbooks.
                        </p>
                        <a href="about-us.php" class="facility-card-link">
                            <span>View Gallery</span>
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
require_once __DIR__ . '/includes/footer.php';
?>
