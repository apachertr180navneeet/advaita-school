<?php
/**
 * Vision & Mission Page - Advaita School of Excellence
 * Clean Semantic HTML - Strictly No Inline CSS
 */
$pageTitle = "Vision & Mission - Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)";
$activePage = "school";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper">

    <!-- Page Banner -->
    <section class="adv-page-banner" aria-label="Page Header">
        <div class="adv-container">
            <div class="adv-banner-content">
                <span class="adv-banner-eyebrow">
                    <i class="fa-solid fa-bullseye"></i> GUIDING PRINCIPLES
                </span>
                <h1 class="adv-banner-title">Vision & Mission</h1>
                <p class="adv-banner-desc">
                    Our educational compass: empowering minds with wisdom, ethics, and global vision.
                </p>
                <ul class="adv-breadcrumb">
                    <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li class="adv-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li class="adv-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                    <li class="adv-breadcrumb-active">Vision & Mission</li>
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
                    <!-- Vision Card -->
                    <div class="adv-vision-card">
                        <span class="adv-vision-eyebrow">OUR VISION</span>
                        <h2>Building Curious Minds, Shaping Confident Futures</h2>
                        <p>
                            To be a center of educational distinction that empowers every learner with critical thinking, ethical integrity, scientific curiosity, and the resilience to thrive and lead in a rapidly changing global society.
                        </p>
                    </div>

                    <!-- Mission Pillars -->
                    <h2>Our Mission Statement</h2>
                    <p>
                        <strong>Advaita School of Excellence</strong> is committed to providing an inspiring learning environment where every child discovers their inner potential. We realize our vision through four fundamental pillars:
                    </p>

                    <div class="adv-mission-grid">
                        <div class="adv-mission-pillar">
                            <h3>1. Academic Rigour</h3>
                            <p>
                                Delivering experiential CBSE curriculum enhanced with modern digital tools, scientific enquiry, and analytical problem-solving skills.
                            </p>
                        </div>
                        <div class="adv-mission-pillar accent-orange">
                            <h3>2. Values & Character</h3>
                            <p>
                                Instilling timeless Indian moral values, universal empathy, discipline, and active social responsibility.
                            </p>
                        </div>
                        <div class="adv-mission-pillar accent-gold">
                            <h3>3. Holistic Enrichment</h3>
                            <p>
                                Fostering artistic expression, sportsmanship, physical wellness, and leadership through co-curricular initiatives.
                            </p>
                        </div>
                        <div class="adv-mission-pillar accent-green">
                            <h3>4. Global Competencies</h3>
                            <p>
                                Equipping students with AI, coding, effective communication, and collaborative skills required for top global universities.
                            </p>
                        </div>
                    </div>

                    <h2>Core Institutional Ethos: A-D-V-A-I-T-A</h2>
                    <ul>
                        <li><strong>A - Authenticity:</strong> Encouraging honesty, moral courage, and genuine self-expression.</li>
                        <li><strong>D - Discipline:</strong> Nurturing self-control, commitment, and principled leadership.</li>
                        <li><strong>V - Vision:</strong> Inspiring learners to dream boldly and impact the world positively.</li>
                        <li><strong>A - Adaptability:</strong> Cultivating agile minds ready for continuous learning in an evolving world.</li>
                        <li><strong>I - Integrity:</strong> Upholding truthfulness, fairness, and ethical responsibility in every action.</li>
                        <li><strong>T - Tenacity:</strong> Fostering resilience and an undying spirit to overcome challenges.</li>
                        <li><strong>A - Altruism:</strong> Instilling empathy, compassion, and a spirit of community service.</li>
                    </ul>
                </div>

                <!-- Sidebar -->
                <aside class="adv-sidebar">
                    <div class="adv-widget">
                        <h4 class="adv-widget-title">About Us</h4>
                        <ul class="adv-widget-links">
                            <li><a href="about-us.php"><span>About Advaita</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li class="active"><a href="vision-mission.php"><span>Vision & Mission</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="leadership.php"><span>Director's Desk & Leadership</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="facilities.php"><span>Infrastructure & Facilities</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="mandatory-disclosure.php"><span>Mandatory Public Disclosure</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                        </ul>
                    </div>

                    <div class="adv-widget-cta">
                        <div class="cta-icon">
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </div>
                        <h4>Connect With Us</h4>
                        <p>Have questions about our academic philosophy or admission process? We are here to guide you.</p>
                        <a href="contact.php" class="btn-cta">Contact School</a>
                    </div>
                </aside>

            </div>
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
