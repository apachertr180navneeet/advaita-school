<?php
/**
 * Principal's Desk - Advaita School of Excellence, Parbhani
 * CBSE Affiliated (Affiliation No. 1130920)
 * Clean Semantic Layout with Header & Footer
 */
$pageTitle = "Principal's Desk - Advaita School of Excellence, Parbhani";
$activePage = "principals-desk";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper principal-page-wrapper">

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
                    <li class="adv-breadcrumb-current" aria-current="page">Principal's Desk</li>
                </ol>
            </nav>

            <span class="adv-inner-banner-eyebrow">— FROM THE PRINCIPAL —</span>
            <h1 class="adv-inner-banner-title">
                Principal's <span>Desk</span>
            </h1>
            <p class="adv-inner-banner-subtitle">
                Guiding students with visionary leadership, academic rigor, and compassionate mentorship.
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
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h2 class="adv-placeholder-heading">Principal's Desk</h2>
                <p class="adv-placeholder-text">
                    This page is initialized with the global header, navigation, and footer. Ready for message and profile section UI components.
                </p>
            </div>
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
