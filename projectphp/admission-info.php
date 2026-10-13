<?php
/**
 * Admission Info Page - Advaita School of Excellence
 * Process, Transparent Fee Structure, Uniform & Discipline
 * Clean Semantic HTML - Header and Footer Preserved
 */
$pageTitle = "Admission Info - Advaita School of Excellence, Parbhani | Admission Process & Fees";
$activePage = "admission-info";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper admission-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Breadcrumb + Title + Visual with 3 Students & Script Tag
         ========================================================================= -->
    <section class="admission-hero-section">
        <div class="admission-hero-canvas">
            <!-- Hero Students Visual -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="assets/images/about-cta-students-clean.png?v=<?php echo filemtime(__DIR__ . '/assets/images/about-cta-students-clean.png'); ?>" alt="Advaita Students" class="admission-hero-bg-img" width="1024" height="682">
            </div>

            <!-- SVG Wave Overlay for Smooth Translucent Backdrop -->
            <div class="admission-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H540C570 120 520 280 620 440H0V0Z" fill="#EEF6FC" fill-opacity="0.96"/>
                    <path d="M520 0C550 140 500 280 600 440H580C480 280 530 140 500 0H520Z" fill="#F37021" fill-opacity="0.25"/>
                </svg>
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
                        <a href="admission-info.php">Admissions</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Admission Info</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">ADMISSIONS</div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        Begin Your Child's Journey at <span class="highlight-serif">Advaita.</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        A simple, transparent and supportive admission process designed to help your child take the right step towards a brighter future.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. FIVE-STEP ADMISSION PROCESS
         ========================================================================= -->
    <section class="admission-process-section" id="admission-process">
        <div class="admission-section-container">
            <div class="admission-section-header">
                <div class="admission-eyebrow">— THE ADMISSION PROCESS —</div>
                <h2 class="admission-section-title">
                    From application to <span class="highlight-serif">welcome</span>, in five clear steps.
                </h2>
                <p class="admission-section-desc">
                    Admission is open to all children, irrespective of caste, creed or community, and decisions are communicated transparently, on merit and fit.
                </p>
            </div>

            <!-- Steps Grid / Row with Flow Connectors -->
            <div class="admission-steps-wrapper">
                <!-- Step 01 -->
                <div class="admission-step-card">
                    <span class="step-num-pill">01</span>
                    <div class="step-icon-circle orange" aria-hidden="true">
                        <i class="fa-solid fa-laptop"></i>
                    </div>
                    <h3 class="step-card-title">Fill the Online Form</h3>
                    <p class="step-card-desc">Complete the admission enquiry form on our website.</p>
                </div>

                <div class="step-arrow-divider" aria-hidden="true">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>

                <!-- Step 02 -->
                <div class="admission-step-card">
                    <span class="step-num-pill">02</span>
                    <div class="step-icon-circle mint" aria-hidden="true">
                        <i class="fa-solid fa-file-arrow-up"></i>
                    </div>
                    <h3 class="step-card-title">Submit Documents</h3>
                    <p class="step-card-desc">Upload/submit the required documents as per the admission guidelines.</p>
                </div>

                <div class="step-arrow-divider" aria-hidden="true">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>

                <!-- Step 03 -->
                <div class="admission-step-card">
                    <span class="step-num-pill">03</span>
                    <div class="step-icon-circle purple" aria-hidden="true">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3 class="step-card-title">Counselor Interaction</h3>
                    <p class="step-card-desc">Our academic counselor will guide you and answer your queries.</p>
                </div>

                <div class="step-arrow-divider" aria-hidden="true">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>

                <!-- Step 04 -->
                <div class="admission-step-card">
                    <span class="step-num-pill">04</span>
                    <div class="step-icon-circle pink" aria-hidden="true">
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                    <h3 class="step-card-title">Assessment / Interaction</h3>
                    <p class="step-card-desc">Student interaction or assessment (as applicable for the respective grade).</p>
                </div>

                <div class="step-arrow-divider" aria-hidden="true">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>

                <!-- Step 05 -->
                <div class="admission-step-card">
                    <span class="step-num-pill">05</span>
                    <div class="step-icon-circle gold" aria-hidden="true">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <h3 class="step-card-title">Admission Confirmation</h3>
                    <p class="step-card-desc">On successful completion, you will receive the admission confirmation and further details.</p>
                </div>
            </div>

            <!-- Policy Callout Note -->
            <div class="admission-process-note">
                <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                <span><strong>Note:</strong> The final admission is subject to document verification and seat availability as per the school policy.</span>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. TRANSPARENT FEE STRUCTURE
         ========================================================================= -->
    <section class="admission-fee-section" id="fee-structure">
        <div class="admission-section-container">
            <div class="admission-section-header">
                <div class="admission-eyebrow">— TRANSPARENT FEE STRUCTURE —</div>
                <h2 class="admission-section-title">
                    Fees, paid in <span class="highlight-serif">simple terms.</span>
                </h2>
                <p class="admission-section-desc">
                    Our fee structure is designed to be fair, transparent and value-driven.
                </p>
            </div>

            <!-- Fee Cards 2-Col Grid -->
            <div class="fee-cards-grid">
                <!-- Classes I to V -->
                <div class="fee-card">
                    <div class="fee-card-head">
                        <div class="fee-head-icon" aria-hidden="true">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <div>
                            <h3 class="fee-head-title">Classes I to V</h3>
                            <p class="fee-head-sub">Strong foundation for a bright future.</p>
                        </div>
                    </div>

                    <table class="fee-table">
                        <thead>
                            <tr>
                                <th>Particulars</th>
                                <th class="th-amount">Annual Fee (₹)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tuition Fee</td>
                                <td class="td-amount">₹ 28,000</td>
                            </tr>
                            <tr>
                                <td>Development Fee</td>
                                <td class="td-amount">₹ 5,000</td>
                            </tr>
                            <tr>
                                <td>Activity &amp; Resource Fee</td>
                                <td class="td-amount">₹ 3,000</td>
                            </tr>
                            <tr>
                                <td>Examination Fee</td>
                                <td class="td-amount">₹ 2,000</td>
                            </tr>
                            <tr class="fee-total-row">
                                <td>Total - Annual</td>
                                <td class="td-amount">₹ 38,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Classes VI to X -->
                <div class="fee-card">
                    <div class="fee-card-head">
                        <div class="fee-head-icon" aria-hidden="true">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div>
                            <h3 class="fee-head-title">Classes VI to X</h3>
                            <p class="fee-head-sub">Empowering learners for higher goals.</p>
                        </div>
                    </div>

                    <table class="fee-table">
                        <thead>
                            <tr>
                                <th>Particulars</th>
                                <th class="th-amount">Annual Fee (₹)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tuition Fee</td>
                                <td class="td-amount">₹ 32,000</td>
                            </tr>
                            <tr>
                                <td>Development Fee</td>
                                <td class="td-amount">₹ 6,000</td>
                            </tr>
                            <tr>
                                <td>Activity &amp; Resource Fee</td>
                                <td class="td-amount">₹ 4,000</td>
                            </tr>
                            <tr>
                                <td>Examination Fee</td>
                                <td class="td-amount">₹ 3,000</td>
                            </tr>
                            <tr class="fee-total-row">
                                <td>Total - Annual</td>
                                <td class="td-amount">₹ 45,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Fee Note Card -->
            <div class="admission-fee-notes-card">
                <div class="fee-note-icon" aria-hidden="true">
                    <i class="fa-solid fa-circle-info"></i>
                </div>
                <div class="fee-note-content">
                    <strong>Note:</strong>
                    <ul class="fee-note-list">
                        <li>The fees mentioned above are annual fees for the academic session 2026–27.</li>
                        <li>The fee is to be paid as per the school's policy (one-time or in installments).</li>
                        <li>Transport, uniform and other optional services are charged separately.</li>
                        <li>The school reserves the right to revise the fees as per institutional requirements.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. UNIFORM & DISCIPLINE
         ========================================================================= -->
    <section class="admission-uniform-section" id="uniform-discipline">
        <div class="admission-section-container">
            <div class="admission-section-header">
                <div class="admission-eyebrow">— UNIFORM &amp; DISCIPLINE —</div>
                <h2 class="admission-section-title">
                    Worn with <span class="highlight-serif">quiet pride.</span>
                </h2>
                <p class="admission-section-desc">
                    A school uniform reflects the unity and discipline of an institution. The prescribed colour and pattern are followed on all working days.
                </p>
            </div>

            <div class="uniform-cards-grid">
                <!-- Primary Wing (Classes I to V) -->
                <div class="uniform-card">
                    <div class="uniform-card-head">
                        <div class="uniform-head-icon orange" aria-hidden="true">
                            <i class="fa-solid fa-shirt"></i>
                        </div>
                        <div>
                            <h3 class="uniform-head-title">Classes I to V</h3>
                            <p class="uniform-head-sub">Primary Wing (Classes I to V)</p>
                        </div>
                    </div>

                    <ul class="uniform-checklist">
                        <li class="uniform-check-item orange">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span>Shirt, shorts / skirt with school badge</span>
                        </li>
                        <li class="uniform-check-item orange">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span>Belt and ID card (mandatory)</span>
                        </li>
                        <li class="uniform-check-item orange">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span>Black shoes and white socks</span>
                        </li>
                        <li class="uniform-check-item orange">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span>School sweater / blazer (winter)</span>
                        </li>
                        <li class="uniform-check-item orange">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span>Sports uniform for PT and activities</span>
                        </li>
                    </ul>
                </div>

                <!-- Senior Wing (Classes VI to X) -->
                <div class="uniform-card">
                    <div class="uniform-card-head">
                        <div class="uniform-head-icon blue" aria-hidden="true">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>
                        <div>
                            <h3 class="uniform-head-title">Classes VI to X</h3>
                            <p class="uniform-head-sub">Senior Wing (Classes VI to X)</p>
                        </div>
                    </div>

                    <ul class="uniform-checklist">
                        <li class="uniform-check-item blue">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span>Shirt, trousers / skirt with school badge</span>
                        </li>
                        <li class="uniform-check-item blue">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span>Tie, belt and ID card (mandatory)</span>
                        </li>
                        <li class="uniform-check-item blue">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span>Black shoes and white socks</span>
                        </li>
                        <li class="uniform-check-item blue">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span>School blazer (winter)</span>
                        </li>
                        <li class="uniform-check-item blue">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span>Sports uniform for PT and activities</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. PRE-FOOTER CALL TO ACTION BANNER
         ========================================================================= -->
    <section class="admission-cta-section">
        <div class="admission-section-container">
            <div class="admission-cta-box">
                <div class="admission-cta-left">
                    <span class="admission-cta-pill">LET'S BEGIN TOGETHER</span>
                    <h2 class="admission-cta-headline">Ready to take the first step?</h2>
                    <p class="admission-cta-desc">Apply now and give your child the opportunity to grow, learn and excel at Advaita.</p>
                </div>

                <div class="admission-cta-actions">
                    <a href="index.php#admissions" class="admission-btn-primary">
                        <span>Apply for Admission</span>
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                    <a href="contact.php" class="admission-btn-visit">
                        <i class="fa-regular fa-calendar-check" aria-hidden="true"></i>
                        <span>Schedule a Campus Visit</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
