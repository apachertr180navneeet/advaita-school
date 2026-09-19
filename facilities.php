<?php
/**
 * Facilities & Campus Infrastructure Page - Advaita School of Excellence
 * Clean Semantic HTML - Strictly No Inline CSS
 */
$pageTitle = "Campus Infrastructure & Facilities - Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)";
$activePage = "school";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper">

    <!-- Page Banner -->
    <section class="adv-page-banner" aria-label="Page Header">
        <div class="adv-container">
            <div class="adv-banner-content">
                <span class="adv-banner-eyebrow">
                    <i class="fa-solid fa-building-columns"></i> WORLD-CLASS INFRASTRUCTURE
                </span>
                <h1 class="adv-banner-title">Campus Facilities & Infrastructure</h1>
                <p class="adv-banner-desc">
                    State-of-the-art smart classrooms, cutting-edge STEM labs, expansive sports arenas, and safe learning environments in Parbhani.
                </p>
                <ul class="adv-breadcrumb">
                    <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li class="adv-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                    <li><a href="about-us.php">Our School</a></li>
                    <li class="adv-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                    <li class="adv-breadcrumb-active">Facilities</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Main Content Layout -->
    <section class="adv-inner-layout">
        <div class="adv-container">
            <div class="adv-inner-grid">
                
                <!-- Main Content -->
                <div class="adv-content-block">
                    <div class="adv-feature-img-card">
                        <img src="assets/images/about-campus.jpg" alt="Advaita School of Excellence Infrastructure">
                    </div>

                    <h2>Modern Campus Designed for Discovery and Growth</h2>
                    <p>
                        Spread across a sprawling, eco-friendly green campus in Parbhani, <strong>Advaita School of Excellence</strong> offers an environment engineered for physical safety, mental well-being, and academic exploration. Every space—from spacious smart classrooms to sports grounds—is crafted to nurture potential.
                    </p>

                    <!-- Facility Cards Grid -->
                    <div class="adv-facility-grid">
                        
                        <div class="adv-facility-card">
                            <img src="assets/images/fac-smart-class.jpg" alt="Smart Classrooms">
                            <div class="adv-facility-body">
                                <h3><i class="fa-solid fa-chalkboard-user"></i> Interactive Smart Classrooms</h3>
                                <p>Equipped with interactive touchscreen smart boards, high-speed Wi-Fi, ergonomic furniture, and audio-visual multimedia learning modules.</p>
                            </div>
                        </div>

                        <div class="adv-facility-card">
                            <img src="assets/images/fac-science-lab.jpg" alt="Composite Science Labs">
                            <div class="adv-facility-body">
                                <h3><i class="fa-solid fa-flask-vial"></i> Advanced Science Labs</h3>
                                <p>Dedicated, fully furnished Physics, Chemistry, and Biology laboratories compliant with CBSE senior secondary practical examination standards.</p>
                            </div>
                        </div>

                        <div class="adv-facility-card">
                            <img src="assets/images/fac-robotics.jpg" alt="Robotics and AI Lab">
                            <div class="adv-facility-body">
                                <h3><i class="fa-solid fa-robot"></i> STEAM & Robotics Hub</h3>
                                <p>Specialized innovation lab with Arduino, LEGO Mindstorms, 3D printing, AI simulation tools, and IoT coding kits for hands-on engineering.</p>
                            </div>
                        </div>

                        <div class="adv-facility-card">
                            <img src="assets/images/fac-computer.jpg" alt="Computer Lab">
                            <div class="adv-facility-body">
                                <h3><i class="fa-solid fa-desktop"></i> High-Tech IT Lab</h3>
                                <p>Modern computer stations equipped with the latest software, Python/Java coding platforms, cyber-safety filters, and digital literacy tools.</p>
                            </div>
                        </div>

                        <div class="adv-facility-card">
                            <img src="assets/images/fac-library.jpg" alt="School Library">
                            <div class="adv-facility-body">
                                <h3><i class="fa-solid fa-book-bookmark"></i> Digital & Print Library</h3>
                                <p>Over 10,000+ volumes of academic texts, encyclopedias, international fiction, research journals, e-books, and quiet reading areas.</p>
                            </div>
                        </div>

                        <div class="adv-facility-card">
                            <img src="assets/images/fac-sports.jpg" alt="Sports Complex">
                            <div class="adv-facility-body">
                                <h3><i class="fa-solid fa-volleyball"></i> Sports Arena & Grounds</h3>
                                <p>Cricket pitch, football ground, basketball court, badminton, table tennis, yoga pavilion, and dedicated physical fitness trainers.</p>
                            </div>
                        </div>

                    </div>

                    <h2>Safety, Security & Campus Transport</h2>
                    <p>
                        Student safety is our utmost priority. The entire campus is under <strong>24/7 CCTV surveillance</strong> with security personnel stationed at all access gates. Our fleet of GPS-tracked school buses covers major routes across Parbhani, operated by verified drivers and trained bus attendants.
                    </p>

                    <div class="adv-highlight-box">
                        "State-of-the-art facilities empower students to explore their boundless curiosity with safety, comfort, and technological excellence."
                    </div>

                </div>

                <!-- Sidebar -->
                <aside class="adv-sidebar">
                    <div class="adv-widget">
                        <h4 class="adv-widget-title">Campus & Facilities</h4>
                        <ul class="adv-widget-links">
                            <li><a href="about-us.php"><span>About Our Campus</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li class="active"><a href="facilities.php"><span>Infrastructure Overview</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="activities.php"><span>Sports & Arts</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="gallery.php"><span>Photo Gallery</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="mandatory-disclosure.php"><span>Safety Certifications</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                        </ul>
                    </div>

                    <div class="adv-widget-cta">
                        <div class="cta-icon">
                            <i class="fa-solid fa-bus"></i>
                        </div>
                        <h4>Book a Campus Tour</h4>
                        <p>Experience our vibrant classrooms, labs, and sports facilities in person with your family.</p>
                        <a href="contact.php" class="btn-cta">Schedule Visit</a>
                    </div>
                </aside>

            </div>
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
