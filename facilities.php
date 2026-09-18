<?php
/**
 * Facilities & Campus Infrastructure Page - Parshv International School
 */
$pageTitle = "Campus Infrastructure & Facilities - Parshv International School, Jodhpur";
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
                    State-of-the-art smart classrooms, cutting-edge STEM labs, expansive sports arenas, and safe learning environments.
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
                        <img src="assets/images/about-campus.jpg" alt="Parshv International School Infrastructure">
                    </div>

                    <h2>Modern Campus Designed for Discovery and Growth</h2>
                    <p>
                        Spread across a sprawling, eco-friendly green campus in Jodhpur, <strong>Parshv International School</strong> offers an environment engineered for physical safety, mental well-being, and academic exploration. Every space—from spacious smart classrooms to Olympic-grade sports tracks—is crafted to nurture potential.
                    </p>

                    <!-- Facility Cards Grid -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin: 32px 0;">
                        
                        <!-- Facility 1: Smart Classrooms -->
                        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
                            <img src="assets/images/fac-smart-class.jpg" alt="Smart Classrooms" style="width: 100%; height: 180px; object-fit: cover;">
                            <div style="padding: 20px;">
                                <h3 style="color: #083B7A; font-size: 1.15rem; margin: 0 0 8px;"><i class="fa-solid fa-chalkboard-user" style="color: #F37021; margin-right: 6px;"></i> Interactive Smart Classrooms</h3>
                                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                                    Equipped with interactive touchscreen smart boards, high-speed Wi-Fi, ergonomic furniture, and audio-visual multimedia learning modules.
                                </p>
                            </div>
                        </div>

                        <!-- Facility 2: Science Laboratories -->
                        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
                            <img src="assets/images/fac-science-lab.jpg" alt="Composite Science Labs" style="width: 100%; height: 180px; object-fit: cover;">
                            <div style="padding: 20px;">
                                <h3 style="color: #083B7A; font-size: 1.15rem; margin: 0 0 8px;"><i class="fa-solid fa-flask-vial" style="color: #F37021; margin-right: 6px;"></i> Advanced Science Labs</h3>
                                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                                    Dedicated, fully furnished Physics, Chemistry, and Biology laboratories compliant with CBSE senior secondary practical examination standards.
                                </p>
                            </div>
                        </div>

                        <!-- Facility 3: Robotics & AI Lab -->
                        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
                            <img src="assets/images/fac-robotics.jpg" alt="Robotics and AI Lab" style="width: 100%; height: 180px; object-fit: cover;">
                            <div style="padding: 20px;">
                                <h3 style="color: #083B7A; font-size: 1.15rem; margin: 0 0 8px;"><i class="fa-solid fa-robot" style="color: #F37021; margin-right: 6px;"></i> STEAM & Robotics Hub</h3>
                                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                                    Specialized innovation lab with Arduino, LEGO Mindstorms, 3D printing, AI simulation tools, and IoT coding kits for hands-on engineering.
                                </p>
                            </div>
                        </div>

                        <!-- Facility 4: Computer Center -->
                        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
                            <img src="assets/images/fac-computer.jpg" alt="Computer Lab" style="width: 100%; height: 180px; object-fit: cover;">
                            <div style="padding: 20px;">
                                <h3 style="color: #083B7A; font-size: 1.15rem; margin: 0 0 8px;"><i class="fa-solid fa-desktop" style="color: #F37021; margin-right: 6px;"></i> High-Tech IT Lab</h3>
                                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                                    Modern computer stations equipped with the latest software, Python/Java coding platforms, cyber-safety filters, and digital literacy tools.
                                </p>
                            </div>
                        </div>

                        <!-- Facility 5: Knowledge Resource Library -->
                        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
                            <img src="assets/images/fac-library.jpg" alt="School Library" style="width: 100%; height: 180px; object-fit: cover;">
                            <div style="padding: 20px;">
                                <h3 style="color: #083B7A; font-size: 1.15rem; margin: 0 0 8px;"><i class="fa-solid fa-book-bookmark" style="color: #F37021; margin-right: 6px;"></i> Digital & Print Library</h3>
                                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                                    Over 10,000+ volumes of academic texts, encyclopedias, international fiction, research journals, e-books, and quiet reading areas.
                                </p>
                            </div>
                        </div>

                        <!-- Facility 6: Sports & Athletics Arena -->
                        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
                            <img src="assets/images/fac-sports.jpg" alt="Sports Complex" style="width: 100%; height: 180px; object-fit: cover;">
                            <div style="padding: 20px;">
                                <h3 style="color: #083B7A; font-size: 1.15rem; margin: 0 0 8px;"><i class="fa-solid fa-volleyball" style="color: #F37021; margin-right: 6px;"></i> Sports Arena & Grounds</h3>
                                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                                    Cricket pitch, football ground, basketball court, badminton, table tennis, yoga pavilion, and dedicated physical fitness trainers.
                                </p>
                            </div>
                        </div>

                    </div>

                    <h2>Safety, Security & Campus Transport</h2>
                    <p>
                        Student safety is our utmost priority. The entire campus is under <strong>24/7 CCTV surveillance</strong> with security personnel stationed at all access gates. Our fleet of GPS-tracked school buses covers major routes across Jodhpur, operated by verified drivers and trained bus attendants.
                    </p>

                    <div class="adv-highlight-box" style="margin-top: 30px;">
                        "State-of-the-art facilities empower students to explore their boundless curiosity with safety, comfort, and technological excellence."
                    </div>

                </div>

                <!-- Sidebar -->
                <aside class="adv-sidebar">
                    <!-- Quick Navigation -->
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

                    <!-- Admission CTA Widget -->
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
