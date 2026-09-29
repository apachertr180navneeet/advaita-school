<?php
/**
 * Board Results Page - Advaita School of Excellence, Parbhani
 * Programmes > Results: 100% CBSE Results, District Toppers & Academic Achievers
 * Strictly 1:1 match with official design mockup (media_1790710565135.jpg)
 * Clean Semantic HTML - Header and Footer Preserved
 */
$pageTitle = "Board Results - Advaita School of Excellence, Parbhani | 100% CBSE Results";
$activePage = "results";

require_once __DIR__ . '/includes/header.php';
?>

<!-- Dedicated Results Page Stylesheet -->
<link rel="stylesheet" href="assets/css/results.css?v=<?php echo file_exists(__DIR__ . '/assets/css/results.css') ? filemtime(__DIR__ . '/assets/css/results.css') : '1.0'; ?>">

<main id="main" class="main-content-wrapper results-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Clean layout, Breadcrumbs, Headline & Campus Facade
         ========================================================================= -->
    <section class="results-hero-section">
        <div class="results-hero-container">
            <div class="results-hero-grid">
                <!-- Left Text Content -->
                <div class="results-hero-text">
                    <!-- Breadcrumbs -->
                    <nav class="results-breadcrumb" aria-label="Breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Results</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="results-eyebrow">
                        <span class="results-eyebrow-line"></span>
                        <span>OUR PERFORMANCE</span>
                        <span class="results-eyebrow-line"></span>
                    </div>

                    <!-- Main Title matching mockup exactly -->
                    <h1 class="results-hero-title">
                        Results that
                        <span class="results-title-orange">speak for themselves.</span>
                    </h1>

                    <!-- Subtitle -->
                    <p class="results-hero-desc">
                        Year after year, our students continue to excel, making us proud with outstanding academic results.
                    </p>
                </div>

                <!-- Right Campus Image with Swoop Border & "More Than A School" -->
                <div class="results-hero-visual">
                    <img src="assets/images/results-hero-campus-right.jpg" alt="Advaita School of Excellence - More Than A School" class="results-hero-campus-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Main Container -->
    <div class="results-container">

        <!-- =========================================================================
             2. FOUR STAT CARDS (Metrics Bar)
             ========================================================================= -->
        <div class="results-stats-row">
            <!-- Card 1 -->
            <div class="results-stat-card">
                <div class="results-stat-icon" aria-hidden="true">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div class="results-stat-info">
                    <span class="results-stat-kicker">Back-to-back</span>
                    <strong class="results-stat-val">100% Result</strong>
                    <span class="results-stat-sub">in Grade 10</span>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="results-stat-card">
                <div class="results-stat-icon" aria-hidden="true">
                    <i class="fa-solid fa-chart-column"></i>
                </div>
                <div class="results-stat-info">
                    <strong class="results-stat-val">35%</strong>
                    <span class="results-stat-kicker">Students scored</span>
                    <span class="results-stat-sub">90% and above</span>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="results-stat-card">
                <div class="results-stat-icon" aria-hidden="true">
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="results-stat-info">
                    <strong class="results-stat-val">~33%</strong>
                    <span class="results-stat-kicker">Students scored</span>
                    <span class="results-stat-sub">80% – 90%</span>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="results-stat-card">
                <div class="results-stat-icon" aria-hidden="true">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="results-stat-info">
                    <span class="results-stat-kicker">Consistent</span>
                    <strong class="results-stat-val">Excellence</strong>
                    <span class="results-stat-sub">Every Year</span>
                </div>
            </div>
        </div>

        <!-- =========================================================================
             3. YEAR SELECTOR TABS WITH RADIANT SUNBURSTS
             ========================================================================= -->
        <div class="results-year-switcher-area">
            <div class="results-rays-left" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M18 20L8 14M20 12L7 12M18 4L8 10" stroke="#F37021" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
            </div>

            <div class="results-year-pills" role="tablist" aria-label="Academic Sessions">
                <button type="button" class="results-year-btn active" id="tabYear2026" role="tab" aria-selected="true">
                    <span class="y-main">2025 – 26</span>
                    <span class="y-sub">(Class 10)</span>
                </button>
                <button type="button" class="results-year-btn" id="tabYear2025" role="tab" aria-selected="false">
                    <span class="y-main">2024 – 25</span>
                    <span class="y-sub">(Class 10)</span>
                </button>
                <button type="button" class="results-year-btn" id="tabPastYears" role="tab" aria-selected="false">
                    <i class="fa-regular fa-calendar-days"></i>
                    <span class="y-main">Past Years</span>
                </button>
            </div>

            <div class="results-rays-right" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M6 20L16 14M4 12L17 12M6 4L16 10" stroke="#F37021" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
            </div>
        </div>

        <!-- =========================================================================
             4. MAIN RESULTS SHOWCASE CARD
             ========================================================================= -->
        <div class="results-main-showcase-card" id="resultsShowcaseSection">
            <div class="results-showcase-header">
                <div class="results-showcase-title-group">
                    <div class="results-trophy-symbol" aria-hidden="true">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <div class="results-showcase-heading-wrap">
                        <h2 class="results-showcase-title">
                            CBSE Results <span class="highlight-orange">2025 – 26</span>
                        </h2>
                        <p class="results-showcase-tagline">Another year of hard work, dedication and excellence!</p>
                        <p class="results-showcase-desc">Our students have once again made us proud with an outstanding performance in the CBSE Class 10 Board Examinations.</p>
                    </div>
                </div>

                <!-- Laurel Wreath Badge -->
                <div class="results-laurel-badge" aria-label="100% Result in Grade 10">
                    <svg class="laurel-branch left" viewBox="0 0 40 80" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M35 75C25 65 15 45 18 10" stroke="#E5A93C" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M30 68C22 66 18 58 24 55C30 52 32 60 30 68Z" fill="#F37021" opacity="0.85"/>
                        <path d="M24 53C16 50 14 42 20 40C26 38 28 46 24 53Z" fill="#E5A93C"/>
                        <path d="M21 38C13 34 13 26 19 25C25 24 26 32 21 38Z" fill="#F37021" opacity="0.85"/>
                        <path d="M20 23C14 18 16 11 22 12C27 13 26 20 20 23Z" fill="#E5A93C"/>
                        <path d="M22 10C19 5 23 2 27 4C30 7 27 11 22 10Z" fill="#F37021"/>
                    </svg>
                    <div class="results-laurel-inner">
                        <span class="laurel-number">100%</span>
                        <span class="laurel-label">Result in Grade 10</span>
                    </div>
                    <svg class="laurel-branch right" viewBox="0 0 40 80" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M5 75C15 65 25 45 22 10" stroke="#E5A93C" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M10 68C18 66 22 58 16 55C10 52 8 60 10 68Z" fill="#F37021" opacity="0.85"/>
                        <path d="M16 53C24 50 26 42 20 40C14 38 12 46 16 53Z" fill="#E5A93C"/>
                        <path d="M19 38C27 34 27 26 21 25C15 24 14 32 19 38Z" fill="#F37021" opacity="0.85"/>
                        <path d="M20 23C26 18 24 11 18 12C13 13 14 20 20 23Z" fill="#E5A93C"/>
                        <path d="M18 10C21 5 17 2 13 4C10 7 13 11 18 10Z" fill="#F37021"/>
                    </svg>
                </div>
            </div>

            <!-- Poster Showcase Slider Viewport -->
            <div class="results-slider-box">
                <button type="button" class="results-arrow-btn prev" id="sliderPrevBtn" aria-label="Previous Slide">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <div class="results-posters-container">
                    <div class="results-posters-pair" id="postersGrid">
                        <!-- Left Poster: Toppers Om Dhoot 98.40% -->
                        <div class="results-poster-frame" onclick="openResultsModal('assets/images/results-poster-toppers.jpg', 'CBSE Class 10th District Toppers 2025-26 - Om Dhoot 98.40%')">
                            <img src="assets/images/results-poster-toppers.jpg" alt="Advaita School CBSE Results 2025-26 - District Toppers Om Dhoot 98.40%">
                            <div class="poster-overlay-hint">
                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                <span>Click to view full</span>
                            </div>
                        </div>

                        <!-- Right Poster: Class 10th Board Result Above 90% -->
                        <div class="results-poster-frame" onclick="openResultsModal('assets/images/results-poster-achievers.jpg', 'CBSE Class 10th Board Result Above 90% Achievers')">
                            <img src="assets/images/results-poster-achievers.jpg" alt="Advaita School CBSE Results 2025-26 - Class 10th Board Result Above 90%">
                            <div class="poster-overlay-hint">
                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                <span>Click to view full</span>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="results-arrow-btn next" id="sliderNextBtn" aria-label="Next Slide">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>

            <!-- 5 Pagination Dots -->
            <div class="results-dots-nav" role="tablist" aria-label="Poster Carousel Pagination">
                <button type="button" class="dot-item active" aria-label="Slide 1"></button>
                <button type="button" class="dot-item" aria-label="Slide 2"></button>
                <button type="button" class="dot-item" aria-label="Slide 3"></button>
                <button type="button" class="dot-item" aria-label="Slide 4"></button>
                <button type="button" class="dot-item" aria-label="Slide 5"></button>
            </div>
        </div>

        <!-- =========================================================================
             5. CONSISTENT ACADEMIC EXCELLENCE & DOWNLOAD PDF BANNER
             ========================================================================= -->
        <div class="results-excellence-banner">
            <div class="excellence-left">
                <div class="excellence-medal-badge" aria-hidden="true">
                    <i class="fa-solid fa-award"></i>
                </div>
                <div class="excellence-copy">
                    <h3 class="excellence-title">Consistent Academic Excellence</h3>
                    <p class="excellence-desc">Our results reflect the hard work of our students, the guidance of our teachers and the trust of our parents. Together, we continue to set higher benchmarks.</p>
                </div>
            </div>

            <a href="assets/images/results-posters-full.jpg" download="Advaita-CBSE-Class-10-Results-2025-26.jpg" class="btn-excellence-download" target="_blank">
                <i class="fa-solid fa-download"></i>
                <span>Download Full Result PDF</span>
            </a>
        </div>

        <!-- =========================================================================
             6. PRE-FOOTER CTA BOX (Have Questions?)
             ========================================================================= -->
        <div class="results-bottom-cta">
            <div class="cta-left">
                <span class="cta-pill-tag">HAVE QUESTIONS?</span>
                <h3 class="cta-heading">Want to know more about <span class="highlight-orange">our results?</span></h3>
                <p class="cta-sub">Our admissions team will be happy to share detailed results and help you with any queries.</p>
            </div>

            <div class="cta-buttons">
                <a href="tel:+919689998973" class="btn-cta-office">
                    <i class="fa-solid fa-phone"></i>
                    <span>Contact the Office</span>
                </a>
                <a href="https://wa.me/919689998973?text=Hello%20Advaita%20School,%20I%20would%20like%20to%20know%20more%20about%20your%20CBSE%20results." target="_blank" rel="noopener noreferrer" class="btn-cta-wa">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>Chat on WhatsApp</span>
                </a>
            </div>
        </div>

    </div><!-- /.results-container -->

</main>

<!-- Lightbox Modal for Full View -->
<div class="results-modal-backdrop" id="resultsModal" onclick="closeResultsModal(event)">
    <div class="results-modal-content">
        <button type="button" class="results-modal-close" onclick="closeResultsModal(event)" aria-label="Close Preview">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <img src="assets/images/results-posters-full.jpg" alt="Full Board Results Preview" class="results-modal-img" id="modalResultImg">
    </div>
</div>

<!-- Interactive Modal & Tabs Scripts -->
<script>
function openResultsModal(imgSrc, title) {
    var modal = document.getElementById('resultsModal');
    var modalImg = document.getElementById('modalResultImg');
    if (modal && modalImg) {
        modalImg.src = imgSrc || 'assets/images/results-posters-full.jpg';
        if (title) modalImg.alt = title;
        modal.classList.add('open');
        document.body.style.overflow = 'hidden';
    }
}

function closeResultsModal(e) {
    if (e.target.classList.contains('results-modal-backdrop') || e.target.closest('.results-modal-close')) {
        var modal = document.getElementById('resultsModal');
        if (modal) {
            modal.classList.remove('open');
            document.body.style.overflow = '';
        }
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Year Tabs Interactive Switcher
    var tab2026 = document.getElementById('tabYear2026');
    var tab2025 = document.getElementById('tabYear2025');
    var tabPast = document.getElementById('tabPastYears');
    var yearButtons = [tab2026, tab2025, tabPast];

    yearButtons.forEach(function(btn) {
        if (!btn) return;
        btn.addEventListener('click', function() {
            yearButtons.forEach(function(b) { if (b) b.classList.remove('active'); });
            btn.classList.add('active');
        });
    });

    // Slider arrows toggle effect & pagination dots
    var prevBtn = document.getElementById('sliderPrevBtn');
    var nextBtn = document.getElementById('sliderNextBtn');
    var dots = document.querySelectorAll('.dot-item');

    if (prevBtn && nextBtn) {
        var currentSlide = 0;
        function updateDots(idx) {
            dots.forEach(function(d, i) {
                if (i === idx) d.classList.add('active');
                else d.classList.remove('active');
            });
        }
        nextBtn.addEventListener('click', function() {
            currentSlide = (currentSlide + 1) % dots.length;
            updateDots(currentSlide);
        });
        prevBtn.addEventListener('click', function() {
            currentSlide = (currentSlide - 1 + dots.length) % dots.length;
            updateDots(currentSlide);
        });
        dots.forEach(function(d, idx) {
            d.addEventListener('click', function() {
                currentSlide = idx;
                updateDots(currentSlide);
            });
        });
    }

    // Close modal on Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            var modal = document.getElementById('resultsModal');
            if (modal && modal.classList.contains('open')) {
                modal.classList.remove('open');
                document.body.style.overflow = '';
            }
        }
    });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
