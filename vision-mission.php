<?php
/**
 * Vision & Mission - Advaita School of Excellence, Parbhani
 * CBSE Affiliated (Affiliation No. 1130920)
 * Clean Semantic Layout with Header & Footer
 */
$pageTitle = "Vision & Mission - Advaita School of Excellence, Parbhani";
$activePage = "vision-mission";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper vision-mission-page-wrapper">

    <!-- =========================================================================
         1. HERO / BANNER SECTION
         ========================================================================= -->
    <section class="adv-inner-page-banner">
        <div class="adv-inner-banner-canvas">
            <!-- Breadcrumbs -->
            <nav class="adv-inner-breadcrumb" aria-label="Breadcrumb">
                <ol class="adv-inner-breadcrumb-list">
                    <li><a href="index.php">Home</a></li>
                    <li class="adv-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li class="adv-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                    <li class="adv-breadcrumb-current" aria-current="page">Vision &amp; Mission</li>
                </ol>
            </nav>

            <span class="adv-inner-banner-eyebrow">— OUR GUIDING PURPOSE —</span>
            <h1 class="adv-inner-banner-title">
                Vision &amp; <span>Mission</span>
            </h1>
            <p class="adv-inner-banner-subtitle">
                Nurturing intellect, character, and lifelong values to empower future leaders.
            </p>
        </div>
    </section>

    <!-- =========================================================================
         2. PAGE CONTENT CONTAINER
         ========================================================================= -->
    <section class="adv-inner-page-content-section">
        <div class="adv-inner-content-container">
            <div class="adv-blank-page-placeholder">
                <div class="adv-placeholder-icon">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
                <h2 class="adv-placeholder-heading">Vision &amp; Mission</h2>
                <p class="adv-placeholder-text">
                    This page is initialized with the global header, navigation, and footer. Ready for vision pillars, mission cards, and core values UI components.
                </p>
            </div>
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
