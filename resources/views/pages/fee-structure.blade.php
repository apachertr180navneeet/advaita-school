@extends('layouts.app')

@section('title', "Fee Structure 2026-27 - Advaita School of Excellence, Parbhani | Transparent Fees")

@section('content')
<main id="main" class="main-content-wrapper fee-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Breadcrumb + Title + Visual with 3 Students & Script Tag
         ========================================================================= -->
    <section class="admission-hero-section">
        <div class="admission-hero-canvas">
            <!-- Hero Students Visual -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="{{ asset($content['hero_image'] ?? 'assets/images/about-cta-students-clean.png') }}" alt="Advaita Students" class="admission-hero-bg-img" width="1024" height="682">
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
                        <a href="{{ route('home') }}">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="{{ route('admission-info') }}">Admissions</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Fee Structure</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">{{ $content['hero_badge'] ?? 'ADMISSIONS 2026–27' }}</div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        {{ $content['hero_title'] ?? 'Fees, paid in simple terms.' }}
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        {{ $content['hero_desc'] ?? 'A clear, transparent fee structure designed to make quality education accessible for every child.' }}
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
        @if($isPublished && $allFees->isNotEmpty())
        <div class="fee-main-card" id="fee-tables">
            <div class="fee-main-card-head">
                <div class="fee-card-head-left">
                    <div class="fee-card-icon-box" aria-hidden="true">
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                    <div>
                        <h2 class="fee-card-main-title">Class-wise Fee Structure</h2>
                        <p class="fee-card-main-sub">Academic Session {{ $academicYear }} &nbsp;|&nbsp; Nursery to Class 10 &nbsp;|&nbsp; <span class="text-muted">Updated: {{ $lastUpdated }}</span></p>
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
                            <th scope="col" class="fee-th-class">Class / Grade</th>
                            <th scope="col" class="text-right fee-th-col20">Tuition Fee<br><span class="fee-th-subtext">(Annual)</span></th>
                            <th scope="col" class="text-right fee-th-col20">Development Fee<br><span class="fee-th-subtext">(Annual)</span></th>
                            <th scope="col" class="text-right fee-th-col18">Exam Fee<br><span class="fee-th-subtext">(Annual)</span></th>
                            <th scope="col" class="text-right fee-th-col20">Total Annual Fee</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allFees as $fee)
                        <tr>
                            <td class="td-class">
                                <strong>{{ $fee->class_name }}</strong>
                                <span class="d-block small text-muted">{{ \App\Models\FeeStructure::WINGS[$fee->wing]['label'] ?? '' }}</span>
                            </td>
                            <td class="td-amount">₹ {{ number_format((float) $fee->tuition_fee, 0) }}</td>
                            <td class="td-amount">₹ {{ number_format((float) $fee->development_fee, 0) }}</td>
                            <td class="td-amount">₹ {{ number_format((float) $fee->exam_fee, 0) }}</td>
                            <td class="td-total">{{ $fee->formatted_annual_total }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Table 2: Term-wise Fee Breakdown (Hidden until toggled) -->
            <div class="fee-table-responsive fee-table-hidden" id="feeTableTerm">
                <table class="fee-classwise-table">
                    <thead>
                        <tr>
                            <th scope="col" class="fee-th-col25">Class / Grade</th>
                            <th scope="col" class="text-right fee-th-col25">Term 1<br><span class="fee-th-subtext">(Due at Admission)</span></th>
                            <th scope="col" class="text-right fee-th-col25">Term 2<br><span class="fee-th-subtext">(Due Sept/Oct)</span></th>
                            <th scope="col" class="text-right fee-th-col25">Term 3<br><span class="fee-th-subtext">(Due Dec/Jan)</span></th>
                            <th scope="col" class="text-right fee-th-col25">Total Payable</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allFees as $fee)
                        <tr>
                            <td class="td-class">
                                <strong>{{ $fee->class_name }}</strong>
                            </td>
                            <td class="td-amount">₹ {{ number_format((float) ($fee->term1_fee ?: ($fee->annual_total / 3)), 0) }}</td>
                            <td class="td-amount">₹ {{ number_format((float) ($fee->term2_fee ?: ($fee->annual_total / 3)), 0) }}</td>
                            <td class="td-amount">₹ {{ number_format((float) ($fee->term3_fee ?: ($fee->annual_total / 3)), 0) }}</td>
                            <td class="td-total">{{ $fee->formatted_annual_total }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Table Note -->
            <div class="fee-table-note">
                <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                <span><strong>Note:</strong> The above fee structure is for Academic Session {{ $academicYear }}. One-time admission fee applies for fresh enrollments only. Transport charges are computed separately by route corridor.</span>
            </div>
        </div>
        @else
        <!-- Official Management Review / Under Finalization Notice -->
        <div class="fee-pending-review-card" id="fee-tables">
            <div class="pending-badge-row">
                <span class="badge-pending-status">
                    <i class="fa-solid fa-hourglass-half me-1"></i> Under Final Management Review
                </span>
                <span class="pending-session-tag">Academic Session {{ $academicYear }}</span>
            </div>

            <div class="pending-content-grid">
                <div class="pending-text-col">
                    <h2 class="pending-title">Class-wise Fee Structure ({{ $academicYear }})</h2>
                    <p class="pending-lead">
                        {{ $pendingNotice }}
                    </p>

                    <div class="fee-policy-highlights">
                        <div class="policy-item">
                            <i class="fa-solid fa-shield-halved policy-icon text-primary"></i>
                            <div>
                                <strong>Strict CBSE Transparency</strong>
                                <p class="mb-0 text-muted small">No capitation fees, no hidden building funds, and no unapproved recurring levies.</p>
                            </div>
                        </div>
                        <div class="policy-item">
                            <i class="fa-solid fa-calendar-days policy-icon text-success"></i>
                            <div>
                                <strong>Term-wise Installments</strong>
                                <p class="mb-0 text-muted small">School fees are split into 3 convenient term installments payable across the academic calendar.</p>
                            </div>
                        </div>
                        <div class="policy-item">
                            <i class="fa-solid fa-bus-simple policy-icon text-warning"></i>
                            <div>
                                <strong>Route-Based Transport</strong>
                                <p class="mb-0 text-muted small">Transport charges vary strictly according to the designated pickup/drop corridor within Parbhani.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pending-action-group">
                        <a href="{{ route('admission-info') }}#quick-enquiry" class="btn-adv-primary">
                            <i class="fa-solid fa-paper-plane me-2"></i> Submit Quick Enquiry for Fees
                        </a>
                        <a href="{{ route('online-registration') }}" class="btn-adv-secondary">
                            <i class="fa-solid fa-file-pen me-2"></i> Register Online
                        </a>
                        <a href="tel:+919422175522" class="btn-adv-outline">
                            <i class="fa-solid fa-phone me-2"></i> Call: +91 94221 75522
                        </a>
                    </div>
                </div>

                <div class="pending-summary-box">
                    <div class="summary-box-header">
                        <i class="fa-solid fa-clipboard-list text-primary"></i>
                        <h5>Fee Components Overview</h5>
                    </div>
                    <ul class="summary-points-list">
                        <li>
                            <span class="point-label">Admission Fee:</span>
                            <span class="point-val">One-time (New Admissions Only)</span>
                        </li>
                        <li>
                            <span class="point-label">Tuition Fee:</span>
                            <span class="point-val">Term-wise / Annual Schedule</span>
                        </li>
                        <li>
                            <span class="point-label">Exam &amp; Activities:</span>
                            <span class="point-val">Inclusive of Term Assessments</span>
                        </li>
                        <li>
                            <span class="point-label">Books &amp; Uniforms:</span>
                            <span class="point-val">Authorized Vendor at MRP</span>
                        </li>
                        <li>
                            <span class="point-label">Transport Service:</span>
                            <span class="point-val">Optional, Corridor-based</span>
                        </li>
                    </ul>
                    <div class="summary-box-footer">
                        <small class="text-muted"><i class="fa-solid fa-circle-check text-success me-1"></i> Authorized by Sanmati Sevabhavi Sanstha</small>
                    </div>
                </div>
            </div>
        </div>
        @endif

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
                        <div class="fee-addon-sub">(One-time, fresh admissions)</div>
                        <div class="fee-addon-amount">
                            @if($isPublished)
                                ₹ 5,000
                            @else
                                <span class="fee-status-badge text-warning small">As Approved by Board</span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Transport Fee -->
                <div class="fee-addon-card">
                    <div class="fee-addon-icon blue" aria-hidden="true">
                        <i class="fa-solid fa-bus"></i>
                    </div>
                    <div class="fee-addon-info">
                        <div class="fee-addon-title">Transport Facility</div>
                        <div class="fee-addon-sub">(Optional, GPS/CCTV fleet)</div>
                        <div class="fee-addon-amount">
                            @if($isPublished)
                                Route-Based
                            @else
                                <span class="fee-status-badge text-info small">Route-wise Distance</span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Uniform Set -->
                <div class="fee-addon-card">
                    <div class="fee-addon-icon purple" aria-hidden="true">
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                    <div class="fee-addon-info">
                        <div class="fee-addon-title">Prescribed Uniform</div>
                        <div class="fee-addon-sub">(Regular + Sports + Shoes)</div>
                        <div class="fee-addon-amount">
                            <span class="fee-status-badge text-secondary small">Authorized Counter</span>
                        </div>
                    </div>
                </div>

                <!-- Books & Stationery -->
                <div class="fee-addon-card">
                    <div class="fee-addon-icon mint" aria-hidden="true">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <div class="fee-addon-info">
                        <div class="fee-addon-title">Books &amp; Notebooks</div>
                        <div class="fee-addon-sub">(NCERT / CBSE Curated)</div>
                        <div class="fee-addon-amount">
                            <span class="fee-status-badge text-secondary small">Publisher Price (MRP)</span>
                        </div>
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
                <a href="tel:{{ $globalSite['phone_primary'] ?? '094130 62851' }}" class="fee-btn-call">
                    <i class="fa-solid fa-phone"></i>
                    <span>Call the Admissions Team</span>
                </a>
                <a href="https://wa.me/919876543210?text=Hello%20Advaita%20School,%20I%20have%20a%20query%20regarding%20the%20fee%20structure." target="_blank" rel="noopener noreferrer" class="fee-btn-wa">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>Chat on WhatsApp</span>
                </a>
            </div>

            <div class="fee-cta-avatar" aria-hidden="true">
                <img src="{{ asset($content['cta_image'] ?? 'assets/images/about-story-student.jpg') }}" alt="Advaita Student">
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
@endsection
