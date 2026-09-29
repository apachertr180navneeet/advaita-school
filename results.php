<?php
/**
 * Board Results Page - Advaita School of Excellence, Parbhani
 * Programmes > Results: 100% CBSE Results, District Toppers & Academic Achievers
 * Clean Semantic HTML - Header and Footer Preserved
 */
$pageTitle = "Board Results - Advaita School of Excellence, Parbhani | 100% CBSE Results";
$activePage = "results";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper results-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Breadcrumb + Title + Visual with Campus & Script Tag
         ========================================================================= -->
    <section class="admission-hero-section">
        <div class="admission-hero-canvas">
            <!-- Background Visual with Campus -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="assets/images/about-campus.jpg" alt="Advaita School Campus" class="admission-hero-bg-img">
            </div>

            <!-- SVG Wave Overlay for Smooth Translucent Backdrop -->
            <div class="admission-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H540C570 120 520 280 620 440H0V0Z" fill="#EEF6FC" fill-opacity="0.96"/>
                    <path d="M520 0C550 140 500 280 600 440H580C480 280 530 140 500 0H520Z" fill="#F37021" fill-opacity="0.25"/>
                </svg>
            </div>

            <!-- School Building Visual on the Right Side -->
            <div class="admission-hero-students" aria-hidden="true" style="right: 30px; bottom: 0;">
                <img src="assets/images/about-hero-building.png" alt="Advaita School Building" width="460" height="380" style="object-fit: contain; object-position: bottom right;">
            </div>

            <!-- Floating Handwritten Script Tag at Top Right -->
            <div class="admission-hero-script-tag" aria-hidden="true">
                <span class="script-title">More<br>Than A School</span>
                <svg class="script-underline" viewBox="0 0 120 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 12C38 3 84 4 116 14" stroke="#083B7A" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </div>

            <!-- Left Content Panel -->
            <div class="admission-hero-left-panel">
                <div class="admission-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <nav class="admission-breadcrumb" aria-label="Breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="academics.php">Programmes</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Results</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">— OUR PERFORMANCE —</div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        Results that <span class="highlight-orange">speak for themselves.</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        Year after year, our students continue to excel, making us proud with outstanding academic results.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Container -->
    <div class="results-container">

        <!-- =========================================================================
             2. HIGHLIGHT METRICS (4 Stat Cards Floating Below Hero)
             ========================================================================= -->
        <div class="results-metrics-wrap">
            <div class="results-metrics-grid">
                <!-- Stat 1 -->
                <div class="results-metric-card">
                    <div class="results-metric-icon" aria-hidden="true">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div class="results-metric-body">
                        <span class="results-metric-sub">Back-to-back</span>
                        <h3 class="results-metric-val">100% Result</h3>
                        <span class="results-metric-sub">in Grade 10</span>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="results-metric-card">
                    <div class="results-metric-icon" aria-hidden="true">
                        <i class="fa-solid fa-chart-column"></i>
                    </div>
                    <div class="results-metric-body">
                        <h3 class="results-metric-val">35%</h3>
                        <span class="results-metric-sub">Students scored 90% and above</span>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="results-metric-card">
                    <div class="results-metric-icon" aria-hidden="true">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="results-metric-body">
                        <h3 class="results-metric-val">~33%</h3>
                        <span class="results-metric-sub">Students scored 80% – 90%</span>
                    </div>
                </div>

                <!-- Stat 4 -->
                <div class="results-metric-card">
                    <div class="results-metric-icon" aria-hidden="true">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="results-metric-body">
                        <h3 class="results-metric-title">Consistent Excellence</h3>
                        <span class="results-metric-sub">Every Year</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- =========================================================================
             3. SESSION SELECTOR TABS
             ========================================================================= -->
        <div class="results-year-tabs-wrap">
            <div class="results-year-pill-group" role="tablist" aria-label="Academic Session Results">
                <button type="button" class="btn-result-year active" id="tabYear2026" role="tab" aria-selected="true">
                    <span>2025 – 26 (Class 10)</span>
                </button>
                <button type="button" class="btn-result-year" id="tabYear2025" role="tab" aria-selected="false">
                    <span>2024 – 25 (Class 10)</span>
                </button>
                <button type="button" class="btn-result-year" id="tabPastYears" role="tab" aria-selected="false">
                    <i class="fa-regular fa-calendar-days"></i>
                    <span>Past Years</span>
                </button>
            </div>
        </div>

        <!-- =========================================================================
             4. MAIN RESULTS SHOWCASE CARD
             ========================================================================= -->
        <div class="results-main-showcase-card" id="resultsShowcaseSection">
            <!-- Showcase Header -->
            <div class="results-showcase-head">
                <div class="results-showcase-left">
                    <div class="results-trophy-box" aria-hidden="true">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <div class="results-showcase-titles">
                        <h2 class="results-showcase-title">
                            CBSE Results <span class="highlight-orange">2025 – 26</span>
                        </h2>
                        <div class="results-showcase-sub">Another year of hard work, dedication and excellence!</div>
                        <p class="results-showcase-desc">
                            Our students have once again made us proud with an outstanding performance in the CBSE Class 10 Board Examinations.
                        </p>
                    </div>
                </div>

                <!-- Laurel Wreath Badge -->
                <div class="results-laurel-badge" aria-label="100% Result in Grade 10">
                    <i class="fa-solid fa-award results-laurel-wreath-icon" aria-hidden="true"></i>
                    <span class="results-laurel-percent">100%</span>
                    <span class="results-laurel-label">Result in Grade 10</span>
                </div>
            </div>

            <!-- Slider / Showcase Viewport -->
            <div class="results-slider-wrapper">
                <button type="button" class="results-slider-arrow prev" id="sliderPrevBtn" aria-label="Previous Slide">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <div class="results-posters-viewport">
                    <div class="results-posters-grid" id="postersGrid">
                        <!-- Poster 1: District Toppers & 90%+ Achievers -->
                        <div class="results-poster-card" onclick="openResultsModal('assets/images/results-poster-toppers.jpg', 'CBSE Class 10th District Toppers 2025-26')">
                            <img src="assets/images/results-poster-toppers.jpg" alt="Advaita School CBSE Class 10th District Toppers 2025-26 - Om Dhoot 98.40%">
                            <div class="results-poster-zoom-hint">
                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                <span>Click to expand</span>
                            </div>
                        </div>

                        <!-- Poster 2: 80%+ Achievers & Full Highlights -->
                        <div class="results-poster-card" onclick="openResultsModal('assets/images/results-poster-achievers.jpg', 'CBSE Class 10th Board Achievers 2025-26')">
                            <img src="assets/images/results-poster-achievers.jpg" alt="Advaita School CBSE Class 10th Board Achievers Above 80% 2025-26">
                            <div class="results-poster-zoom-hint">
                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                <span>Click to expand</span>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="results-slider-arrow next" id="sliderNextBtn" aria-label="Next Slide">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>

            <!-- Pagination Dots -->
            <div class="results-slider-dots" role="tablist" aria-label="Slider Dots">
                <button type="button" class="results-dot active" aria-label="Slide 1"></button>
                <button type="button" class="results-dot" aria-label="Slide 2"></button>
                <button type="button" class="results-dot" aria-label="Slide 3"></button>
                <button type="button" class="results-dot" aria-label="Slide 4"></button>
            </div>
        </div>

        <!-- =========================================================================
             5. CONSISTENT ACADEMIC EXCELLENCE & DOWNLOAD PDF BANNER
             ========================================================================= -->
        <div class="results-download-banner">
            <div class="results-download-left">
                <div class="results-medal-icon-box" aria-hidden="true">
                    <i class="fa-solid fa-certificate"></i>
                </div>
                <div class="results-download-info">
                    <h3 class="results-download-title">Consistent Academic Excellence</h3>
                    <p class="results-download-desc">
                        Our results reflect the hard work of our students, the guidance of our teachers and the trust of our parents. Together, we continue to set higher benchmarks.
                    </p>
                </div>
            </div>

            <a href="assets/images/hero-slider-results.jpg" download="Advaita-CBSE-Class-10-Results-2025-26.jpg" class="results-btn-download" target="_blank">
                <i class="fa-solid fa-download"></i>
                <span>Download Full Result PDF</span>
            </a>
        </div>

        <!-- =========================================================================
             6. PRE-FOOTER CTA BOX (Have Questions?)
             ========================================================================= -->
        <div class="results-cta-banner">
            <div class="results-cta-left">
                <span class="results-cta-badge">HAVE QUESTIONS?</span>
                <h3 class="results-cta-title">
                    Want to know more about <span class="highlight-orange">our results?</span>
                </h3>
                <p class="results-cta-desc">
                    Our admissions team will be happy to share detailed results and help you with any queries.
                </p>
            </div>

            <div class="results-cta-actions">
                <a href="tel:+919876543210" class="results-btn-call">
                    <i class="fa-solid fa-phone"></i>
                    <span>Contact the Office</span>
                </a>
                <a href="https://wa.me/919876543210?text=Hello%20Advaita%20School,%20I%20would%20like%20to%20know%20more%20about%20your%20CBSE%20results." target="_blank" rel="noopener noreferrer" class="results-btn-wa">
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
        <img src="assets/images/hero-slider-results.jpg" alt="Full Board Results Preview" class="results-modal-img" id="modalResultImg">
    </div>
</div>

<!-- Interactive Modal & Tabs Scripts -->
<script>
function openResultsModal(imgSrc, title) {
    var modal = document.getElementById('resultsModal');
    var modalImg = document.getElementById('modalResultImg');
    if (modal && modalImg) {
        modalImg.src = imgSrc || 'assets/images/hero-slider-results.jpg';
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

    // Slider arrows toggle effect
    var prevBtn = document.getElementById('sliderPrevBtn');
    var nextBtn = document.getElementById('sliderNextBtn');
    var dots = document.querySelectorAll('.results-dot');

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
