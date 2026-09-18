<?php
/**
 * Legacy Page - Advaita School of Excellence
 */
$pageTitle = "Educational Legacy - Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)";
$activePage = "school";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper">

    <!-- Page Banner -->
    <section class="adv-page-banner" aria-label="Page Header">
        <div class="adv-container">
            <div class="adv-banner-content">
                <span class="adv-banner-eyebrow">
                    <i class="fa-solid fa-award"></i> EDUCATIONAL HERITAGE
                </span>
                <h1 class="adv-banner-title">Our Legacy of Distinction</h1>
                <p class="adv-banner-desc">
                    Dedicated to inspiring curiosity, fostering leadership, and delivering value-based excellence under Sanmati Sevabhavi Sanstha.
                </p>
                <ul class="adv-breadcrumb">
                    <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li class="adv-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                    <li><a href="about-us.php">Our School</a></li>
                    <li class="adv-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                    <li class="adv-breadcrumb-active">Legacy</li>
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
                        <img src="assets/images/hero-campus-2.jpg" alt="Advaita Educational Legacy">
                    </div>

                    <h2>A Journey of Transformative Learning</h2>
                    <p>
                        Since its inception under <strong>Sanmati Sevabhavi Sanstha</strong>, <strong>Advaita School of Excellence</strong> has championed an educational philosophy combining academic rigour with ethical groundedness. What started as an earnest foundational school has evolved into Parbhani’s premier CBSE Senior Secondary landmark (CBSE Affiliation No. 1130920).
                    </p>

                    <!-- Milestone Timeline -->
                    <div style="display: flex; flex-direction: column; gap: 20px; margin: 32px 0;">
                        <div style="border-left: 4px solid #083B7A; padding-left: 20px;">
                            <h4 style="color: #083B7A; margin: 0 0 4px; font-size: 1.15rem;">Foundational Roots</h4>
                            <p style="color: #64748b; font-size: 0.9rem; margin: 0;">Started with early childhood education focusing on experiential discovery, moral values, and student care.</p>
                        </div>
                        <div style="border-left: 4px solid #F37021; padding-left: 20px;">
                            <h4 style="color: #083B7A; margin: 0 0 4px; font-size: 1.15rem;">CBSE Affiliation & Secondary School</h4>
                            <p style="color: #64748b; font-size: 0.9rem; margin: 0;">Affiliated with the Central Board of Secondary Education (CBSE), New Delhi (No. 1130920) for Class X Board examinations.</p>
                        </div>
                        <div style="border-left: 4px solid #059669; padding-left: 20px;">
                            <h4 style="color: #083B7A; margin: 0 0 4px; font-size: 1.15rem;">Senior Secondary Upgradation (Science, Commerce, Arts)</h4>
                            <p style="color: #64748b; font-size: 0.9rem; margin: 0;">Expanded with cutting-edge laboratories, comprehensive test prep, and dedicated career guidance.</p>
                        </div>
                        <div style="border-left: 4px solid #7c3aed; padding-left: 20px;">
                            <h4 style="color: #083B7A; margin: 0 0 4px; font-size: 1.15rem;">STEAM, Robotics & AI Innovation</h4>
                            <p style="color: #64748b; font-size: 0.9rem; margin: 0;">Introduced futuristic STEAM innovation labs, 3D printing facilities, and smart classrooms.</p>
                        </div>
                        <div style="border-left: 4px solid #b45309; padding-left: 20px;">
                            <h4 style="color: #083B7A; margin: 0 0 4px; font-size: 1.15rem;">Present Day — 1500+ Students & Proven Track Record</h4>
                            <p style="color: #64748b; font-size: 0.9rem; margin: 0;">Ranked among the most respected CBSE institutions with 100% board results and national Olympiad winners.</p>
                        </div>
                    </div>

                    <div class="adv-highlight-box">
                        "Our journey is a celebration of every student who walked through our gates and emerged as a leader of character and purpose."
                    </div>

                </div>

                <!-- Sidebar -->
                <aside class="adv-sidebar">
                    <!-- Quick Navigation -->
                    <div class="adv-widget">
                        <h4 class="adv-widget-title">About Advaita</h4>
                        <ul class="adv-widget-links">
                            <li><a href="about-us.php"><span>About Our School</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="vision-mission.php"><span>Vision & Mission</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="leadership.php"><span>Director's Desk</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li class="active"><a href="legacy.php"><span>Legacy</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="achievements.php"><span>Board Results & Laurels</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                        </ul>
                    </div>

                    <!-- Admission CTA Widget -->
                    <div class="adv-widget-cta">
                        <div class="cta-icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h4>Admissions Open</h4>
                        <p>Experience an institution backed by a legacy of educational trust.</p>
                        <a href="admissions.php" class="btn-cta">Apply for Admission</a>
                    </div>
                </aside>

            </div>
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
