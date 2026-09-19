<?php
/**
 * Activities & Holistic Development Page - Advaita School of Excellence
 * Clean Semantic HTML - Strictly No Inline CSS
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
                    <div class="adv-facility-grid">
                        
                        <div class="adv-facility-card">
                            <img src="assets/images/fac-sports.jpg" alt="Sports & Athletics">
                            <div class="adv-facility-body">
                                <h3><i class="fa-solid fa-trophy"></i> Sports & Athletics</h3>
                                <p>Professional coaching in Football, Cricket, Basketball, Badminton, Table Tennis, Skating, Karate, Athletics, and Yoga.</p>
                            </div>
                        </div>

                        <div class="adv-facility-card">
                            <img src="assets/images/fac-arts.jpg" alt="Arts & Music">
                            <div class="adv-facility-body">
                                <h3><i class="fa-solid fa-music"></i> Music, Dance & Theatre</h3>
                                <p>Vocal music (classical & contemporary), instrumental training (keyboard, guitar, tabla, harmonium), classical and folk dance forms, drama and theatrical stage plays.</p>
                            </div>
                        </div>

                        <div class="adv-facility-card">
                            <img src="assets/images/gallery-stem.jpg" alt="STEAM & Robotics">
                            <div class="adv-facility-body">
                                <h3><i class="fa-solid fa-microchip"></i> STEAM & Coding Club</h3>
                                <p>Hands-on coding bootcamps, AI hackathons, robotics tournaments, 3D prototyping, science exhibitions, and mathematics Olympiads.</p>
                            </div>
                        </div>

                        <div class="adv-facility-card">
                            <img src="assets/images/gallery-assembly.jpg" alt="House System & Leadership">
                            <div class="adv-facility-body">
                                <h3><i class="fa-solid fa-flag"></i> 4-House System & Council</h3>
                                <p>Students are grouped into four dynamic houses (Ruby, Sapphire, Emerald, Topaz) fostering healthy competition, camaraderie, and democratic student governance.</p>
                            </div>
                        </div>

                    </div>

                    <h2>Clubs & Student Societies</h2>
                    <ul>
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
