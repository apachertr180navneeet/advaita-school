<?php
/**
 * Activities & Holistic Development Page - Advaita School of Excellence
 */
$pageTitle = "Activities & Holistic Development - Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)";
$activePage = "holistic";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper">

    <!-- Page Banner -->
    <section class="adv-page-banner" aria-label="Page Header">
        <div class="adv-container">
            <div class="adv-banner-content">
                <span class="adv-banner-eyebrow">
                    <i class="fa-solid fa-palette"></i> BEYOND THE CLASSROOM
                </span>
                <h1 class="adv-banner-title">Holistic Activities & Student Life</h1>
                <p class="adv-banner-desc">
                    Fostering creativity, leadership, sportsmanship, and cultural richness through diverse co-curricular avenues.
                </p>
                <ul class="adv-breadcrumb">
                    <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li class="adv-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                    <li><a href="activities.php">Holistic Life</a></li>
                    <li class="adv-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                    <li class="adv-breadcrumb-active">Co-Curricular & Sports</li>
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
                        <img src="assets/images/gallery-cultural.jpg" alt="Advaita Cultural & Sports Activities">
                    </div>

                    <h2>Nurturing the 360-Degree Potential of Every Student</h2>
                    <p>
                        At <strong>Advaita School of Excellence</strong>, co-curricular engagement is an indispensable dimension of education. We provide structured platforms in athletic sports, visual and performing arts, public speaking, coding hackathons, and community outreach.
                    </p>

                    <!-- Activities Pillars -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin: 32px 0;">
                        
                        <!-- Pillar 1: Sports & Physical Education -->
                        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                            <img src="assets/images/fac-sports.jpg" alt="Sports & Athletics" style="width: 100%; height: 180px; object-fit: cover;">
                            <div style="padding: 20px;">
                                <h3 style="color: #083B7A; font-size: 1.15rem; margin: 0 0 8px;"><i class="fa-solid fa-trophy" style="color: #F37021; margin-right: 6px;"></i> Sports & Athletics</h3>
                                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                                    Professional coaching in Football, Cricket, Basketball, Badminton, Table Tennis, Skating, Karate, Athletics, and Yoga.
                                </p>
                            </div>
                        </div>

                        <!-- Pillar 2: Performing & Visual Arts -->
                        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                            <img src="assets/images/fac-arts.jpg" alt="Arts & Music" style="width: 100%; height: 180px; object-fit: cover;">
                            <div style="padding: 20px;">
                                <h3 style="color: #083B7A; font-size: 1.15rem; margin: 0 0 8px;"><i class="fa-solid fa-music" style="color: #F37021; margin-right: 6px;"></i> Music, Dance & Theatre</h3>
                                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                                    Vocal music (classical & contemporary), instrumental training (keyboard, guitar, tabla, harmonium), classical and folk dance forms, drama and theatrical stage plays.
                                </p>
                            </div>
                        </div>

                        <!-- Pillar 3: STEAM, Robotics & Innovation -->
                        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                            <img src="assets/images/gallery-stem.jpg" alt="STEAM & Robotics" style="width: 100%; height: 180px; object-fit: cover;">
                            <div style="padding: 20px;">
                                <h3 style="color: #083B7A; font-size: 1.15rem; margin: 0 0 8px;"><i class="fa-solid fa-microchip" style="color: #F37021; margin-right: 6px;"></i> STEAM & Coding Club</h3>
                                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                                    Hands-on coding bootcamps, AI hackathons, robotics tournaments, 3D prototyping, science exhibitions, and mathematics Olympiads.
                                </p>
                            </div>
                        </div>

                        <!-- Pillar 4: House System & Leadership -->
                        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                            <img src="assets/images/gallery-assembly.jpg" alt="House System & Leadership" style="width: 100%; height: 180px; object-fit: cover;">
                            <div style="padding: 20px;">
                                <h3 style="color: #083B7A; font-size: 1.15rem; margin: 0 0 8px;"><i class="fa-solid fa-flag" style="color: #F37021; margin-right: 6px;"></i> 4-House System & Council</h3>
                                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">
                                    Students are grouped into four dynamic houses (Ruby, Sapphire, Emerald, Topaz) fostering healthy competition, camaraderie, and democratic student governance.
                                </p>
                            </div>
                        </div>

                    </div>

                    <h2>Clubs & Student Societies</h2>
                    <ul style="margin-bottom: 30px;">
                        <li><strong>Literary & Model UN (MUN) Society:</strong> Debates, elocution, creative writing, and mock UN assemblies.</li>
                        <li><strong>Eco & Green Club:</strong> Tree plantations, organic gardening, energy conservation, and recycling initiatives.</li>
                        <li><strong>Heritage & Culture Club:</strong> Celebrating Indian culture, historical site explorations, and community celebrations.</li>
                        <li><strong>Health & Wellness Club:</strong> Morning meditation, yoga workshops, nutritional awareness, and mental resilience seminars.</li>
                    </ul>

                    <div class="adv-highlight-box">
                        "Every child possesses a spark of genius. Through varied holistic avenues, Advaita ignites that spark into an enduring flame of self-confidence."
                    </div>

                </div>

                <!-- Sidebar -->
                <aside class="adv-sidebar">
                    <!-- Quick Navigation -->
                    <div class="adv-widget">
                        <h4 class="adv-widget-title">Holistic Life</h4>
                        <ul class="adv-widget-links">
                            <li class="active"><a href="activities.php"><span>Co-Curricular & Sports</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="facilities.php"><span>Campus Infrastructure</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="achievements.php"><span>Sports Laurels & Trophies</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="gallery.php"><span>Event Photo Gallery</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                            <li><a href="admissions.php"><span>Apply for Admission</span> <i class="fa-solid fa-chevron-right"></i></a></li>
                        </ul>
                    </div>

                    <!-- Admission CTA Widget -->
                    <div class="adv-widget-cta">
                        <div class="cta-icon">
                            <i class="fa-solid fa-medal"></i>
                        </div>
                        <h4>Discover Your Talents</h4>
                        <p>Experience an active school culture where academic excellence meets sporting passion.</p>
                        <a href="admissions.php" class="btn-cta">Enroll Today</a>
                    </div>
                </aside>

            </div>
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
