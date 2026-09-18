<?php
/**
 * Vision & Mission Page - Parshv International School
 */
$pageTitle = "Vision & Mission - Parshv International School, Jodhpur";
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
                    <li><a href="about-us.php">Our School</a></li>
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
                    <div style="background: linear-gradient(135deg, #031c3d 0%, #083B7A 100%); color: #ffffff; border-radius: 20px; padding: 40px; margin-bottom: 36px; box-shadow: 0 16px 40px rgba(8, 59, 122, 0.2);">
                        <span style="color: var(--adv-accent-gold); font-size: 0.8125rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 8px;">OUR VISION</span>
                        <h2 style="color: #ffffff; font-size: 1.85rem; margin-bottom: 16px;">Building Curious Minds, Shaping Confident Futures</h2>
                        <p style="color: #f1f5f9; font-size: 1.0625rem; line-height: 1.7; margin-bottom: 0;">
                            To be a center of educational distinction that empowers every learner with critical thinking, ethical integrity, scientific curiosity, and the resilience to thrive and lead in a rapidly changing global society.
                        </p>
                    </div>

                    <!-- Mission Pillars -->
                    <h2>Our Mission Statement</h2>
                    <p>
                        Parshv International School is committed to providing an inspiring learning environment where every child discovers their inner potential. We realize our vision through four fundamental pillars:
                    </p>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 28px 0;">
                        <div style="background: #f8fafc; border-radius: 14px; padding: 24px; border: 1px solid #e2e8f0; border-top: 4px solid var(--adv-primary);">
                            <h3 style="font-size: 1.15rem; margin-top: 0; color: var(--adv-primary);">1. Academic Rigour</h3>
                            <p style="font-size: 0.875rem; color: #64748b; margin-bottom: 0;">
                                Delivering experiential CBSE curriculum enhanced with modern digital tools, scientific enquiry, and analytical problem-solving skills.
                            </p>
                        </div>
                        <div style="background: #f8fafc; border-radius: 14px; padding: 24px; border: 1px solid #e2e8f0; border-top: 4px solid var(--adv-accent-orange);">
                            <h3 style="font-size: 1.15rem; margin-top: 0; color: var(--adv-accent-orange);">2. Values & Character</h3>
                            <p style="font-size: 0.875rem; color: #64748b; margin-bottom: 0;">
                                Instilling timeless Indian moral values, universal empathy, discipline, and active social responsibility.
                            </p>
                        </div>
                        <div style="background: #f8fafc; border-radius: 14px; padding: 24px; border: 1px solid #e2e8f0; border-top: 4px solid var(--adv-accent-gold);">
                            <h3 style="font-size: 1.15rem; margin-top: 0; color: #b45309;">3. Holistic Enrichment</h3>
                            <p style="font-size: 0.875rem; color: #64748b; margin-bottom: 0;">
                                Fostering artistic expression, sportsmanship, physical wellness, and leadership through co-curricular initiatives.
                            </p>
                        </div>
                        <div style="background: #f8fafc; border-radius: 14px; padding: 24px; border: 1px solid #e2e8f0; border-top: 4px solid #059669;">
                            <h3 style="font-size: 1.15rem; margin-top: 0; color: #059669;">4. Global Competencies</h3>
                            <p style="font-size: 0.875rem; color: #64748b; margin-bottom: 0;">
                                Equipping students with AI, coding, effective communication, and collaborative skills required for top global universities.
                            </p>
                        </div>
                    </div>

                    <h2>Core Institutional Ethos: P-A-R-S-H-V</h2>
                    <ul>
                        <li><strong>P - Perseverance:</strong> Fostering resilience and an undying spirit to overcome challenges.</li>
                        <li><strong>A - Authenticity:</strong> Encouraging honesty, moral courage, and genuine self-expression.</li>
                        <li><strong>R - Respect:</strong> Valuing diversity, community elders, cultural traditions, and nature.</li>
                        <li><strong>S - Scholarship:</strong> Cultivating an enduring passion for deep inquiry and lifelong learning.</li>
                        <li><strong>H - Harmony:</strong> Balancing emotional well-being, intellectual growth, and physical health.</li>
                        <li><strong>V - Vision:</strong> Inspiring learners to dream boldly and impact the world positively.</li>
                    </ul>
                </div>

                <!-- Sidebar -->
                <aside class="adv-sidebar">
                    <div class="adv-widget">
                        <h4 class="adv-widget-title">Our School</h4>
                        <ul class="adv-widget-links">
                            <li><a href="about-us.php"><span>About Parshv</span> <i class="fa-solid fa-chevron-right"></i></a></li>
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
