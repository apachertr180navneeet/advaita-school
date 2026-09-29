<?php
/**
 * Fee Structure Page - Advaita School of Excellence, Parbhani
 * Academic Session 2026–27 | Class-wise fee breakdown, Add-ons, Covers, Payment options & FAQs
 * Semantic HTML & Consistent Design - Header and Footer Preserved
 */
$pageTitle = "Fee Structure 2026-27 - Advaita School of Excellence, Parbhani | Transparent Fees";
$activePage = "fee-structure";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper fee-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Breadcrumb + Title + Visual with 3 Students & Script Tag
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

            <!-- Student Cutout on the Right Side -->
            <div class="admission-hero-students" aria-hidden="true">
                <img src="assets/images/about-cta-students-final.png" alt="Advaita Students in School Uniform" width="480" height="400">
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
                        <span class="active">Fee Structure</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">ADMISSIONS 2026–27</div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        Fees, paid in <span class="highlight-orange">simple terms.</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        A clear, transparent fee structure designed to make quality education accessible for every child.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Container -->
    <div class="fee-page-container">

        <!-- =========================================================================
             2. CLASS-WISE FEE STRUCTURE CARD (With Annual / Term-wise Toggle)
             ========================================================================= -->
        <div class="fee-main-card" id="fee-tables">
            <div class="fee-main-card-head">
                <div class="fee-card-head-left">
                    <div class="fee-card-icon-box" aria-hidden="true">
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                    <div>
                        <h2 class="fee-card-main-title">Class-wise Fee Structure</h2>
                        <p class="fee-card-main-sub">Academic Session 2026 – 27 &nbsp;|&nbsp; Nursery to Class 10</p>
                    </div>
                </div>

                <!-- Annual vs Term-wise Fee Toggle -->
                <div class="fee-toggle-pill-group" role="tablist" aria-label="Fee View Mode">
                    <button type="button" class="btn-fee-toggle active" id="btnToggleAnnual" role="tab" aria-selected="true" aria-controls="feeTableAnnual">
                        Annual Fee (Recommended)
                    </button>
                    <button type="button" class="btn-fee-toggle" id="btnToggleTerm" role="tab" aria-selected="false" aria-controls="feeTableTerm">
                        Term-wise Fee
                    </button>
                </div>
            </div>

            <!-- Table 1: Annual Fee Breakdown (Default) -->
            <div class="fee-table-responsive" id="feeTableAnnual">
                <table class="fee-classwise-table">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 22%;">Class</th>
                            <th scope="col" class="text-right" style="width: 20%;">Tuition Fee<br><span style="font-size: 0.72rem; font-weight: 500; color: #64748b;">(Annual)</span></th>
                            <th scope="col" class="text-right" style="width: 20%;">Development Fee<br><span style="font-size: 0.72rem; font-weight: 500; color: #64748b;">(Annual)</span></th>
                            <th scope="col" class="text-right" style="width: 18%;">Examination Fee<br><span style="font-size: 0.72rem; font-weight: 500; color: #64748b;">(Annual)</span></th>
                            <th scope="col" class="text-right" style="width: 20%;">Total Annual Fee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="td-class">Nursery</td>
                            <td class="td-amount">₹ 48,000</td>
                            <td class="td-amount">₹ 8,000</td>
                            <td class="td-amount">₹ 2,000</td>
                            <td class="td-total">₹ 58,000</td>
                        </tr>
                        <tr>
                            <td class="td-class">LKG</td>
                            <td class="td-amount">₹ 52,000</td>
                            <td class="td-amount">₹ 8,000</td>
                            <td class="td-amount">₹ 2,000</td>
                            <td class="td-total">₹ 62,000</td>
                        </tr>
                        <tr>
                            <td class="td-class">UKG</td>
                            <td class="td-amount">₹ 54,000</td>
                            <td class="td-amount">₹ 8,000</td>
                            <td class="td-amount">₹ 2,000</td>
                            <td class="td-total">₹ 64,000</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 1</td>
                            <td class="td-amount">₹ 60,000</td>
                            <td class="td-amount">₹ 10,000</td>
                            <td class="td-amount">₹ 2,500</td>
                            <td class="td-total">₹ 72,500</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 2</td>
                            <td class="td-amount">₹ 62,000</td>
                            <td class="td-amount">₹ 10,000</td>
                            <td class="td-amount">₹ 2,500</td>
                            <td class="td-total">₹ 74,500</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 3</td>
                            <td class="td-amount">₹ 64,000</td>
                            <td class="td-amount">₹ 10,000</td>
                            <td class="td-amount">₹ 2,500</td>
                            <td class="td-total">₹ 76,500</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 4</td>
                            <td class="td-amount">₹ 68,000</td>
                            <td class="td-amount">₹ 12,000</td>
                            <td class="td-amount">₹ 3,000</td>
                            <td class="td-total">₹ 83,000</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 5</td>
                            <td class="td-amount">₹ 70,000</td>
                            <td class="td-amount">₹ 12,000</td>
                            <td class="td-amount">₹ 3,000</td>
                            <td class="td-total">₹ 85,000</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 6</td>
                            <td class="td-amount">₹ 72,000</td>
                            <td class="td-amount">₹ 12,000</td>
                            <td class="td-amount">₹ 3,000</td>
                            <td class="td-total">₹ 87,000</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 7</td>
                            <td class="td-amount">₹ 74,000</td>
                            <td class="td-amount">₹ 14,000</td>
                            <td class="td-amount">₹ 3,000</td>
                            <td class="td-total">₹ 91,000</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 8</td>
                            <td class="td-amount">₹ 76,000</td>
                            <td class="td-amount">₹ 14,000</td>
                            <td class="td-amount">₹ 3,500</td>
                            <td class="td-total">₹ 93,500</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 9</td>
                            <td class="td-amount">₹ 78,000</td>
                            <td class="td-amount">₹ 15,000</td>
                            <td class="td-amount">₹ 3,500</td>
                            <td class="td-total">₹ 96,500</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 10</td>
                            <td class="td-amount">₹ 80,000</td>
                            <td class="td-amount">₹ 15,000</td>
                            <td class="td-amount">₹ 3,500</td>
                            <td class="td-total">₹ 98,500</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Table 2: Term-wise Fee Breakdown (Hidden until toggled) -->
            <div class="fee-table-responsive" id="feeTableTerm" style="display: none;">
                <table class="fee-classwise-table">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 25%;">Class</th>
                            <th scope="col" class="text-right" style="width: 25%;">Term 1 Fee<br><span style="font-size: 0.72rem; font-weight: 500; color: #64748b;">(April – Due at Admission)</span></th>
                            <th scope="col" class="text-right" style="width: 25%;">Term 2 Fee<br><span style="font-size: 0.72rem; font-weight: 500; color: #64748b;">(October – Mid Session)</span></th>
                            <th scope="col" class="text-right" style="width: 25%;">Total Annual Fee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="td-class">Nursery</td>
                            <td class="td-amount">₹ 29,000</td>
                            <td class="td-amount">₹ 29,000</td>
                            <td class="td-total">₹ 58,000</td>
                        </tr>
                        <tr>
                            <td class="td-class">LKG</td>
                            <td class="td-amount">₹ 31,000</td>
                            <td class="td-amount">₹ 31,000</td>
                            <td class="td-total">₹ 62,000</td>
                        </tr>
                        <tr>
                            <td class="td-class">UKG</td>
                            <td class="td-amount">₹ 32,000</td>
                            <td class="td-amount">₹ 32,000</td>
                            <td class="td-total">₹ 64,000</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 1</td>
                            <td class="td-amount">₹ 36,250</td>
                            <td class="td-amount">₹ 36,250</td>
                            <td class="td-total">₹ 72,500</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 2</td>
                            <td class="td-amount">₹ 37,250</td>
                            <td class="td-amount">₹ 37,250</td>
                            <td class="td-total">₹ 74,500</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 3</td>
                            <td class="td-amount">₹ 38,250</td>
                            <td class="td-amount">₹ 38,250</td>
                            <td class="td-total">₹ 76,500</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 4</td>
                            <td class="td-amount">₹ 41,500</td>
                            <td class="td-amount">₹ 41,500</td>
                            <td class="td-total">₹ 83,000</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 5</td>
                            <td class="td-amount">₹ 42,500</td>
                            <td class="td-amount">₹ 42,500</td>
                            <td class="td-total">₹ 85,000</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 6</td>
                            <td class="td-amount">₹ 43,500</td>
                            <td class="td-amount">₹ 43,500</td>
                            <td class="td-total">₹ 87,000</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 7</td>
                            <td class="td-amount">₹ 45,500</td>
                            <td class="td-amount">₹ 45,500</td>
                            <td class="td-total">₹ 91,000</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 8</td>
                            <td class="td-amount">₹ 46,750</td>
                            <td class="td-amount">₹ 46,750</td>
                            <td class="td-total">₹ 93,500</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 9</td>
                            <td class="td-amount">₹ 48,250</td>
                            <td class="td-amount">₹ 48,250</td>
                            <td class="td-total">₹ 96,500</td>
                        </tr>
                        <tr>
                            <td class="td-class">Class 10</td>
                            <td class="td-amount">₹ 49,250</td>
                            <td class="td-amount">₹ 49,250</td>
                            <td class="td-total">₹ 98,500</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Table Note -->
            <div class="fee-table-note">
                <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                <span><strong>Note:</strong> The above fees are for the academic session 2026–27. The fee structure is subject to change as per school policy.</span>
            </div>
        </div>

        <!-- =========================================================================
             3. ADDITIONAL CHARGES (One-time / Applicable when required)
             ========================================================================= -->
        <section class="fee-section-block">
            <div class="fee-section-title-wrap">
                <div class="fee-accent-bar" aria-hidden="true"></div>
                <div>
                    <h2>Additional Charges <span class="fee-sub-inline">(One-time / Applicable when required)</span></h2>
                </div>
            </div>

            <div class="fee-additional-grid">
                <!-- Admission Fee -->
                <div class="fee-addon-card">
                    <div class="fee-addon-icon orange" aria-hidden="true">
                        <i class="fa-solid fa-id-card"></i>
                    </div>
                    <div class="fee-addon-info">
                        <div class="fee-addon-title">Admission Fee</div>
                        <div class="fee-addon-sub">(One-time, non-refundable)</div>
                        <div class="fee-addon-amount">₹ 5,000</div>
                    </div>
                </div>

                <!-- Transport Fee -->
                <div class="fee-addon-card">
                    <div class="fee-addon-icon blue" aria-hidden="true">
                        <i class="fa-solid fa-bus"></i>
                    </div>
                    <div class="fee-addon-info">
                        <div class="fee-addon-title">Transport Fee</div>
                        <div class="fee-addon-sub">(Annual, optional)</div>
                        <div class="fee-addon-amount">₹ 18,000</div>
                    </div>
                </div>

                <!-- Uniform Set -->
                <div class="fee-addon-card">
                    <div class="fee-addon-icon purple" aria-hidden="true">
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                    <div class="fee-addon-info">
                        <div class="fee-addon-title">Uniform Set</div>
                        <div class="fee-addon-sub">(Approximate, optional)</div>
                        <div class="fee-addon-amount">₹ 6,000</div>
                    </div>
                </div>

                <!-- Books & Stationery -->
                <div class="fee-addon-card">
                    <div class="fee-addon-icon mint" aria-hidden="true">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <div class="fee-addon-info">
                        <div class="fee-addon-title">Books &amp; Stationery</div>
                        <div class="fee-addon-sub">(Approximate, optional)</div>
                        <div class="fee-addon-amount">₹ 8,000</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             4. THE FEE COVERS ALL OF THIS
             ========================================================================= -->
        <section class="fee-section-block">
            <div class="fee-section-title-wrap">
                <div class="fee-accent-bar" aria-hidden="true"></div>
                <div>
                    <h2>The Fee Covers All of This</h2>
                    <p class="fee-section-desc">A holistic learning experience with no hidden costs.</p>
                </div>
            </div>

            <div class="fee-covers-grid">
                <!-- Academic Tuition -->
                <div class="fee-cover-card">
                    <div class="cover-icon-circle orange" aria-hidden="true">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <div class="cover-card-title">Academic Tuition</div>
                    <p class="cover-card-desc">Well-structured curriculum &amp; classroom learning</p>
                </div>

                <!-- Labs & Practicals -->
                <div class="fee-cover-card">
                    <div class="cover-icon-circle teal" aria-hidden="true">
                        <i class="fa-solid fa-flask"></i>
                    </div>
                    <div class="cover-card-title">Labs &amp; Practicals</div>
                    <p class="cover-card-desc">Science, computer and skill-based learning</p>
                </div>

                <!-- Co-curricular Activities -->
                <div class="fee-cover-card">
                    <div class="cover-icon-circle purple" aria-hidden="true">
                        <i class="fa-solid fa-palette"></i>
                    </div>
                    <div class="cover-card-title">Co-curricular Activities</div>
                    <p class="cover-card-desc">Sports, arts, music and student clubs</p>
                </div>

                <!-- Examinations -->
                <div class="fee-cover-card">
                    <div class="cover-icon-circle pink" aria-hidden="true">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <div class="cover-card-title">Examinations</div>
                    <p class="cover-card-desc">Periodic tests, terminal exams and evaluation</p>
                </div>

                <!-- School Facilities -->
                <div class="fee-cover-card">
                    <div class="cover-icon-circle blue" aria-hidden="true">
                        <i class="fa-solid fa-school"></i>
                    </div>
                    <div class="cover-card-title">School Facilities</div>
                    <p class="cover-card-desc">Library, digital resources and campus amenities</p>
                </div>

                <!-- Student Support -->
                <div class="fee-cover-card">
                    <div class="cover-icon-circle green" aria-hidden="true">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <div class="cover-card-title">Student Support</div>
                    <p class="cover-card-desc">Counseling, health &amp; wellness programs</p>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             5. HOW TO PAY?
             ========================================================================= -->
        <section class="fee-section-block">
            <div class="fee-section-title-wrap">
                <div class="fee-accent-bar" aria-hidden="true"></div>
                <div>
                    <h2>How to Pay?</h2>
                    <p class="fee-section-desc">We offer multiple, secure and convenient payment options.</p>
                </div>
            </div>

            <div class="fee-pay-layout">
                <!-- Left: 4 Payment Methods Grid -->
                <div class="fee-pay-methods-grid">
                    <!-- Online Payment -->
                    <div class="fee-pay-method-card">
                        <div class="pay-icon-box pink" aria-hidden="true">
                            <i class="fa-solid fa-credit-card"></i>
                        </div>
                        <div class="pay-method-body">
                            <div class="pay-method-title">Online Payment</div>
                            <p class="pay-method-sub">Pay via secure online gateway (UPI, Net Banking, Cards)</p>
                        </div>
                    </div>

                    <!-- Bank Transfer -->
                    <div class="fee-pay-method-card">
                        <div class="pay-icon-box amber" aria-hidden="true">
                            <i class="fa-solid fa-building-columns"></i>
                        </div>
                        <div class="pay-method-body">
                            <div class="pay-method-title">Bank Transfer</div>
                            <p class="pay-method-sub">Direct transfer to the school account</p>
                        </div>
                    </div>

                    <!-- Cheque / DD -->
                    <div class="fee-pay-method-card">
                        <div class="pay-icon-box blue" aria-hidden="true">
                            <i class="fa-solid fa-money-check-dollar"></i>
                        </div>
                        <div class="pay-method-body">
                            <div class="pay-method-title">Cheque / DD</div>
                            <p class="pay-method-sub">In favour of Advaita School of Excellence</p>
                        </div>
                    </div>

                    <!-- At School Office -->
                    <div class="fee-pay-method-card">
                        <div class="pay-icon-box orange" aria-hidden="true">
                            <i class="fa-solid fa-school"></i>
                        </div>
                        <div class="pay-method-body">
                            <div class="pay-method-title">At School Office</div>
                            <p class="pay-method-sub">Cash/Card/UPI at the school accounts desk</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Important Note Card -->
                <div class="fee-pay-note-card">
                    <div class="pay-note-head">
                        <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                        <strong>Important Note:</strong>
                    </div>
                    <ul class="pay-note-list">
                        <li>Fees once paid are non-refundable.</li>
                        <li>Transport, uniform and books are optional.</li>
                        <li>Late fee may be applicable as per school policy.</li>
                        <li>For any queries, please contact our admissions team.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             6. FREQUENTLY ASKED QUESTIONS
             ========================================================================= -->
        <section class="fee-section-block">
            <div class="fee-section-title-wrap">
                <div class="fee-accent-bar" aria-hidden="true"></div>
                <div>
                    <h2>Frequently Asked Questions</h2>
                </div>
            </div>

            <div class="fee-faq-grid">
                <!-- Column 1 -->
                <div class="fee-faq-col">
                    <!-- FAQ 1 -->
                    <div class="fee-faq-card">
                        <div class="fee-faq-question" role="button" tabindex="0" aria-expanded="false">
                            <h3 class="fee-faq-q-text">1. &nbsp;Is the transport fee mandatory?</h3>
                            <i class="fa-solid fa-chevron-down fee-faq-chevron" aria-hidden="true"></i>
                        </div>
                        <div class="fee-faq-answer">
                            No, school transport is completely optional. Parents who prefer to arrange their own private commute or drop off their wards are free to do so.
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="fee-faq-card">
                        <div class="fee-faq-question" role="button" tabindex="0" aria-expanded="false">
                            <h3 class="fee-faq-q-text">2. &nbsp;Can the fee be paid in installments?</h3>
                            <i class="fa-solid fa-chevron-down fee-faq-chevron" aria-hidden="true"></i>
                        </div>
                        <div class="fee-faq-answer">
                            Yes, parents can choose to pay the total fee in two term-wise installments (Term 1 in April at admission and Term 2 in October).
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="fee-faq-card">
                        <div class="fee-faq-question" role="button" tabindex="0" aria-expanded="false">
                            <h3 class="fee-faq-q-text">3. &nbsp;Is there any concession for siblings?</h3>
                            <i class="fa-solid fa-chevron-down fee-faq-chevron" aria-hidden="true"></i>
                        </div>
                        <div class="fee-faq-answer">
                            Yes, Advaita offers a sibling concession on tuition fees for the second child enrolled concurrently in the school. Please contact our admissions desk for exact details.
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="fee-faq-col">
                    <!-- FAQ 4 -->
                    <div class="fee-faq-card">
                        <div class="fee-faq-question" role="button" tabindex="0" aria-expanded="false">
                            <h3 class="fee-faq-q-text">4. &nbsp;What happens if I delay the fee payment?</h3>
                            <i class="fa-solid fa-chevron-down fee-faq-chevron" aria-hidden="true"></i>
                        </div>
                        <div class="fee-faq-answer">
                            A nominal late fee may be applicable as per the school policy after the specified due date. In case of unforeseen difficulties, parents may contact the accounts team in advance.
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="fee-faq-card">
                        <div class="fee-faq-question" role="button" tabindex="0" aria-expanded="false">
                            <h3 class="fee-faq-q-text">5. &nbsp;Are the Books and Uniform compulsory?</h3>
                            <i class="fa-solid fa-chevron-down fee-faq-chevron" aria-hidden="true"></i>
                        </div>
                        <div class="fee-faq-answer">
                            Wearing the prescribed uniform and having standard books and notebooks is mandatory for all students, but parents are free to procure them from authorized vendors.
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="fee-faq-card">
                        <div class="fee-faq-question" role="button" tabindex="0" aria-expanded="false">
                            <h3 class="fee-faq-q-text">6. &nbsp;Is the fee structure the same for the entire academic year?</h3>
                            <i class="fa-solid fa-chevron-down fee-faq-chevron" aria-hidden="true"></i>
                        </div>
                        <div class="fee-faq-answer">
                            Yes, the fee schedule declared at the start of the academic year 2026–27 remains constant and fixed for the entire duration of that session.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             7. STILL HAVE QUESTIONS CTA BOX
             ========================================================================= -->
        <div class="fee-cta-box">
            <div class="fee-cta-left">
                <span class="fee-cta-eyebrow">FREQUENT QUESTIONS</span>
                <h3 class="fee-cta-title">
                    Still have questions about <span class="highlight-orange">our fee structure?</span>
                </h3>
                <p class="fee-cta-desc">Our admissions team is happy to help you with any queries.</p>
            </div>

            <div class="fee-cta-actions">
                <a href="tel:+919876543210" class="fee-btn-call">
                    <i class="fa-solid fa-phone"></i>
                    <span>Call the Admissions Team</span>
                </a>
                <a href="https://wa.me/919876543210?text=Hello%20Advaita%20School,%20I%20have%20a%20query%20regarding%20the%20fee%20structure." target="_blank" rel="noopener noreferrer" class="fee-btn-wa">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>Chat on WhatsApp</span>
                </a>
            </div>

            <div class="fee-cta-avatar" aria-hidden="true">
                <img src="assets/images/about-story-student.jpg" alt="Advaita Student">
            </div>
        </div>

    </div><!-- /.fee-page-container -->

</main>

<!-- Interactive Scripts for Fee Toggle and FAQ Accordion -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Fee Toggle (Annual vs Term-wise)
    const btnAnnual = document.getElementById('btnToggleAnnual');
    const btnTerm = document.getElementById('btnToggleTerm');
    const tableAnnual = document.getElementById('feeTableAnnual');
    const tableTerm = document.getElementById('feeTableTerm');

    if (btnAnnual && btnTerm && tableAnnual && tableTerm) {
        btnAnnual.addEventListener('click', function() {
            btnAnnual.classList.add('active');
            btnAnnual.setAttribute('aria-selected', 'true');
            btnTerm.classList.remove('active');
            btnTerm.setAttribute('aria-selected', 'false');
            tableAnnual.style.display = 'block';
            tableTerm.style.display = 'none';
        });

        btnTerm.addEventListener('click', function() {
            btnTerm.classList.add('active');
            btnTerm.setAttribute('aria-selected', 'true');
            btnAnnual.classList.remove('active');
            btnAnnual.setAttribute('aria-selected', 'false');
            tableAnnual.style.display = 'none';
            tableTerm.style.display = 'block';
        });
    }

    // 2. FAQ Accordion Toggle
    const faqCards = document.querySelectorAll('.fee-faq-card');
    faqCards.forEach(function(card) {
        const questionBtn = card.querySelector('.fee-faq-question');
        if (questionBtn) {
            questionBtn.addEventListener('click', function() {
                const isOpen = card.classList.contains('open');
                card.classList.toggle('open');
                questionBtn.setAttribute('aria-expanded', !isOpen);
            });
            questionBtn.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    questionBtn.click();
                }
            });
        }
    });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
