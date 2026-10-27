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
                <span class="script-title">Transparent<br>Education Fees</span>
                <svg class="script-underline" viewBox="0 0 120 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 12C38 3 84 4 116 14" stroke="#F37021" stroke-width="3" stroke-linecap="round"/>
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

                    <!-- Eyebrow Pill -->
                    <div class="admission-eyebrow">
                        <i class="fa-solid fa-graduation-cap me-1"></i> {{ $content['hero_badge'] ?? 'ADMISSIONS 2026–27' }}
                    </div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        Fees, Paid in <span class="highlight-serif">Simple Terms.</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        {{ $content['hero_desc'] ?? 'A clear, transparent fee structure designed to make quality education accessible for every child with zero hidden levies.' }}
                    </p>

                    <!-- Quick Navigation CTA Group -->
                    <div class="d-flex align-items-center gap-12 flex-wrap mt-20">
                        <a href="#fee-tables" class="admission-btn-primary" title="View Fee Schedule">
                            <i class="fa-solid fa-table-list"></i>
                            <span>View Class Fee Table</span>
                        </a>
                        <a href="{{ route('online-registration') }}" class="admission-btn-visit" style="background: rgba(8, 59, 122, 0.08); border-color: rgba(8, 59, 122, 0.2); color: #083B7A;" title="Online Registration">
                            <i class="fa-solid fa-file-pen"></i>
                            <span>Register Online</span>
                        </a>
                        <a href="{{ route('admission-guidelines') }}" class="admission-btn-visit" title="Admission Guidelines">
                            <i class="fa-solid fa-book-open-reader"></i>
                            <span>Admission Guidelines</span>
                        </a>
                    </div>
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
                        <i class="fa-solid fa-table-cells"></i>
                    </div>
                    <div>
                        <h2 class="fee-card-main-title">Class-wise Fee Structure</h2>
                        <p class="fee-card-main-sub">
                            <span class="badge-sub-session"><i class="fa-solid fa-graduation-cap me-1"></i> Academic Session {{ $academicYear }}</span>
                            <span>&bull; Nursery to Class 10 &bull;</span>
                            <span class="text-muted"><i class="fa-solid fa-clock-rotate-left me-1"></i> Updated: {{ $lastUpdated }}</span>
                        </p>
                    </div>
                </div>

                <!-- Annual vs Term-wise Fee Toggle -->
                <div class="fee-toggle-pill-group" role="tablist" aria-label="Fee View Mode">
                    <button type="button" class="btn-fee-toggle active" id="btnToggleAnnual" role="tab" aria-selected="true" aria-controls="feeTableAnnual">
                        <i class="fa-solid fa-calendar-check me-2"></i> Annual Fee (Recommended)
                    </button>
                    <button type="button" class="btn-fee-toggle" id="btnToggleTerm" role="tab" aria-selected="false" aria-controls="feeTableTerm">
                        <i class="fa-solid fa-calendar-days me-2"></i> Term-wise Fee
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
                                <div class="fee-grade-wrap">
                                    <span class="fee-grade-title">{{ $fee->class_name }}</span>
                                    @php
                                        $wingMeta = \App\Models\FeeStructure::WINGS[$fee->wing] ?? null;
                                    @endphp
                                    @if($wingMeta)
                                        <span class="fee-wing-badge fee-wing-{{ $fee->wing }}">{{ $wingMeta['label'] }}</span>
                                    @endif
                                </div>
                            </td>
                            <td class="td-amount"><span class="currency-symbol">₹</span> {{ number_format((float) $fee->tuition_fee, 0) }}</td>
                            <td class="td-amount"><span class="currency-symbol">₹</span> {{ number_format((float) $fee->development_fee, 0) }}</td>
                            <td class="td-amount"><span class="currency-symbol">₹</span> {{ number_format((float) $fee->exam_fee, 0) }}</td>
                            <td class="td-total"><span class="fee-total-highlight">{{ $fee->formatted_annual_total }}</span></td>
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
                                <div class="fee-grade-wrap">
                                    <span class="fee-grade-title">{{ $fee->class_name }}</span>
                                    @php
                                        $wingMeta = \App\Models\FeeStructure::WINGS[$fee->wing] ?? null;
                                    @endphp
                                    @if($wingMeta)
                                        <span class="fee-wing-badge fee-wing-{{ $fee->wing }}">{{ $wingMeta['label'] }}</span>
                                    @endif
                                </div>
                            </td>
                            <td class="td-amount"><span class="currency-symbol">₹</span> {{ number_format((float) ($fee->term1_fee ?: ($fee->annual_total / 3)), 0) }}</td>
                            <td class="td-amount"><span class="currency-symbol">₹</span> {{ number_format((float) ($fee->term2_fee ?: ($fee->annual_total / 3)), 0) }}</td>
                            <td class="td-amount"><span class="currency-symbol">₹</span> {{ number_format((float) ($fee->term3_fee ?: ($fee->annual_total / 3)), 0) }}</td>
                            <td class="td-total"><span class="fee-total-highlight">{{ $fee->formatted_annual_total }}</span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Table Note -->
            <div class="fee-table-note">
                <div class="fee-note-icon"><i class="fa-solid fa-circle-info"></i></div>
                <div class="fee-note-text">
                    <strong>Transparent Fee Policy:</strong> The above fee structure is officially applicable for Academic Session {{ $academicYear }}. One-time admission fee applies for fresh enrollments only. Transport charges are computed separately according to designated pickup corridors across Parbhani.
                </div>
            </div>
        </div>
        @else
        <!-- Official Management Review / Under Finalization Notice -->
        <div class="fee-pending-review-card" id="fee-tables">
            <div class="pending-badge-row">
                <span class="badge-pending-status">
                    <i class="fa-solid fa-hourglass-half me-1"></i> Under Final Management Review
                </span>
                <span class="pending-session-tag"><i class="fa-solid fa-calendar me-1 text-orange"></i> Academic Session {{ $academicYear }}</span>
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
            <div class="section-header-pill">
                <span class="pill-badge"><i class="fa-solid fa-tags"></i> Transparent Breakdown</span>
                <h2 class="pill-title">Additional Charges <span class="pill-title-highlight">(One-time &amp; Add-ons)</span></h2>
                <p class="pill-subtitle">Clear breakdown of optional campus amenities, one-time enrollment charges, and student learning resources.</p>
            </div>

            <div class="fee-additional-grid">
                <!-- Admission Fee -->
                <div class="fee-addon-card">
                    <div class="fee-addon-top">
                        <div class="fee-addon-icon orange" aria-hidden="true">
                            <i class="fa-solid fa-id-card-clip"></i>
                        </div>
                        <span class="fee-addon-tag">One-time</span>
                    </div>
                    <div class="fee-addon-body">
                        <h3 class="fee-addon-title">Admission Fee</h3>
                        <p class="fee-addon-sub">One-time charge for fresh enrollment into Advaita.</p>
                        <div class="fee-addon-price-badge">
                            @if($isPublished)
                                <span>₹ 5,000</span>
                                <span class="fee-status-badge text-muted small">At Enrollment</span>
                            @else
                                <span class="fee-status-badge text-warning small">As Approved by Board</span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Transport Fee -->
                <div class="fee-addon-card">
                    <div class="fee-addon-top">
                        <div class="fee-addon-icon blue" aria-hidden="true">
                            <i class="fa-solid fa-van-shuttle"></i>
                        </div>
                        <span class="fee-addon-tag">Optional</span>
                    </div>
                    <div class="fee-addon-body">
                        <h3 class="fee-addon-title">Transport Facility</h3>
                        <p class="fee-addon-sub">GPS tracked &amp; CCTV secured school bus corridors.</p>
                        <div class="fee-addon-price-badge">
                            @if($isPublished)
                                <span>Route-Based</span>
                                <span class="fee-status-badge text-info small">Corridor Matrix</span>
                            @else
                                <span class="fee-status-badge text-info small">Route-wise Distance</span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Uniform Set -->
                <div class="fee-addon-card">
                    <div class="fee-addon-top">
                        <div class="fee-addon-icon purple" aria-hidden="true">
                            <i class="fa-solid fa-shirt"></i>
                        </div>
                        <span class="fee-addon-tag">Mandatory</span>
                    </div>
                    <div class="fee-addon-body">
                        <h3 class="fee-addon-title">Prescribed Uniform</h3>
                        <p class="fee-addon-sub">Regular + Sports uniforms, belt, and footwear.</p>
                        <div class="fee-addon-price-badge">
                            <span>Direct Vendor</span>
                            <span class="fee-status-badge text-secondary small">Authorized MRP</span>
                        </div>
                    </div>
                </div>

                <!-- Books & Stationery -->
                <div class="fee-addon-card">
                    <div class="fee-addon-top">
                        <div class="fee-addon-icon mint" aria-hidden="true">
                            <i class="fa-solid fa-book-bookmark"></i>
                        </div>
                        <span class="fee-addon-tag">Curated</span>
                    </div>
                    <div class="fee-addon-body">
                        <h3 class="fee-addon-title">Books &amp; Notebooks</h3>
                        <p class="fee-addon-sub">NCERT / CBSE standard curriculum course material.</p>
                        <div class="fee-addon-price-badge">
                            <span>Publisher MRP</span>
                            <span class="fee-status-badge text-secondary small">Direct Purchase</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             4. THE FEE COVERS ALL OF THIS
             ========================================================================= -->
        <section class="fee-section-block">
            <div class="section-header-pill">
                <span class="pill-badge"><i class="fa-solid fa-shield-heart"></i> Comprehensive Value</span>
                <h2 class="pill-title">The Fee Covers <span class="pill-title-highlight">All of This</span></h2>
                <p class="pill-subtitle">A holistic learning experience where world-class curriculum, STEAM labs, arts, and student care are fully covered with no hidden costs.</p>
            </div>

            <div class="fee-covers-grid">
                <!-- Academic Tuition -->
                <div class="fee-cover-card">
                    <div class="cover-icon-circle orange" aria-hidden="true">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <div class="cover-card-content">
                        <h3 class="cover-card-title">Academic Tuition</h3>
                        <p class="cover-card-desc">Concept-driven NEP 2020 curriculum delivered by certified CBSE educators with small class sizes.</p>
                    </div>
                </div>

                <!-- Labs & Practicals -->
                <div class="fee-cover-card">
                    <div class="cover-icon-circle teal" aria-hidden="true">
                        <i class="fa-solid fa-flask-vial"></i>
                    </div>
                    <div class="cover-card-content">
                        <h3 class="cover-card-title">STEAM Labs &amp; Practicals</h3>
                        <p class="cover-card-desc">Access to Robotics, Computer, Physics, Chemistry, and Biology laboratories with hands-on kits.</p>
                    </div>
                </div>

                <!-- Co-curricular Activities -->
                <div class="fee-cover-card">
                    <div class="cover-icon-circle purple" aria-hidden="true">
                        <i class="fa-solid fa-palette"></i>
                    </div>
                    <div class="cover-card-content">
                        <h3 class="cover-card-title">Arts, Music &amp; Sports</h3>
                        <p class="cover-card-desc">Structured training in visual arts, classical music, yoga, athletics, cricket, and indoor games.</p>
                    </div>
                </div>

                <!-- Examinations -->
                <div class="fee-cover-card">
                    <div class="cover-icon-circle pink" aria-hidden="true">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <div class="cover-card-content">
                        <h3 class="cover-card-title">Examinations &amp; Reports</h3>
                        <p class="cover-card-desc">Periodic formative assessments, terminal exams, Olympiad preparation, and continuous progress reports.</p>
                    </div>
                </div>

                <!-- School Facilities -->
                <div class="fee-cover-card">
                    <div class="cover-icon-circle blue" aria-hidden="true">
                        <i class="fa-solid fa-school"></i>
                    </div>
                    <div class="cover-card-content">
                        <h3 class="cover-card-title">Campus Amenities</h3>
                        <p class="cover-card-desc">Modern digital classrooms, reading library, high-speed Wi-Fi, purified RO water, and 24/7 security.</p>
                    </div>
                </div>

                <!-- Student Support -->
                <div class="fee-cover-card">
                    <div class="cover-icon-circle green" aria-hidden="true">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <div class="cover-card-content">
                        <h3 class="cover-card-title">Student Care &amp; Health</h3>
                        <p class="cover-card-desc">Annual health checkups, dedicated student counselling desk, first-aid infirmary, and life skills workshops.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             5. HOW TO PAY?
             ========================================================================= -->
        <section class="fee-section-block">
            <div class="section-header-pill">
                <span class="pill-badge"><i class="fa-solid fa-wallet"></i> Multiple Channels</span>
                <h2 class="pill-title">How to <span class="pill-title-highlight">Pay School Fees?</span></h2>
                <p class="pill-subtitle">We offer multiple, secure, and flexible payment options designed for parents' convenience.</p>
            </div>

            <div class="fee-pay-layout">
                <!-- Left: 4 Payment Methods Grid -->
                <div class="fee-pay-methods-grid">
                    <!-- Online Payment -->
                    <div class="fee-pay-method-card">
                        <div class="pay-card-top">
                            <div class="pay-icon-box pink" aria-hidden="true">
                                <i class="fa-solid fa-credit-card"></i>
                            </div>
                            <span class="pay-method-badge">Instant / UPI</span>
                        </div>
                        <div class="pay-method-body">
                            <h3 class="pay-method-title">Online Payment Gateway</h3>
                            <p class="pay-method-sub">Pay via secure gateway with Instant UPI (Google Pay, PhonePe, Paytm), Net Banking, and Debit/Credit Cards.</p>
                        </div>
                    </div>

                    <!-- Bank Transfer -->
                    <div class="fee-pay-method-card">
                        <div class="pay-card-top">
                            <div class="pay-icon-box amber" aria-hidden="true">
                                <i class="fa-solid fa-building-columns"></i>
                            </div>
                            <span class="pay-method-badge">NEFT / RTGS</span>
                        </div>
                        <div class="pay-method-body">
                            <h3 class="pay-method-title">Bank Transfer</h3>
                            <p class="pay-method-sub">Direct electronic fund transfer into the official school bank account with transaction reference submission.</p>
                        </div>
                    </div>

                    <!-- Cheque / DD -->
                    <div class="fee-pay-method-card">
                        <div class="pay-card-top">
                            <div class="pay-icon-box blue" aria-hidden="true">
                                <i class="fa-solid fa-money-check-dollar"></i>
                            </div>
                            <span class="pay-method-badge">Cheque / DD</span>
                        </div>
                        <div class="pay-method-body">
                            <h3 class="pay-method-title">Demand Draft / Cheque</h3>
                            <p class="pay-method-sub">Drawn in favour of <strong>"Advaita School of Excellence"</strong>, payable at Parbhani with student's name on reverse.</p>
                        </div>
                    </div>

                    <!-- At School Office -->
                    <div class="fee-pay-method-card">
                        <div class="pay-card-top">
                            <div class="pay-icon-box orange" aria-hidden="true">
                                <i class="fa-solid fa-school"></i>
                            </div>
                            <span class="pay-method-badge">Campus Counter</span>
                        </div>
                        <div class="pay-method-body">
                            <h3 class="pay-method-title">School Accounts Desk</h3>
                            <p class="pay-method-sub">Visit our school administrative office during working hours (9:00 AM – 4:00 PM) for in-person receipts.</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Important Note Card -->
                <div class="fee-pay-note-card">
                    <div>
                        <div class="pay-note-head">
                            <i class="fa-solid fa-shield-halved" aria-hidden="true"></i>
                            <strong>Fee Guidelines &amp; Policies</strong>
                        </div>
                        <ul class="pay-note-list">
                            <li><i class="fa-solid fa-circle-check"></i> <span>Fees once deposited are strictly non-refundable and non-transferable.</span></li>
                            <li><i class="fa-solid fa-circle-check"></i> <span>Transport, uniform, and books are completely optional amenities.</span></li>
                            <li><i class="fa-solid fa-circle-check"></i> <span>Term-wise installments must be cleared before the announced deadlines.</span></li>
                            <li><i class="fa-solid fa-circle-check"></i> <span>Official printed receipts are issued for all transactions immediately.</span></li>
                        </ul>
                    </div>
                    <div class="pay-note-footer">
                        <i class="fa-solid fa-headset text-orange"></i>
                        <span>Need payment assistance? Contact our accounts helpline.</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             6. FREQUENTLY ASKED QUESTIONS
             ========================================================================= -->
        <section class="fee-section-block">
            <div class="section-header-pill">
                <span class="pill-badge"><i class="fa-solid fa-circle-question"></i> Help &amp; FAQs</span>
                <h2 class="pill-title">Frequently Asked <span class="pill-title-highlight">Questions</span></h2>
                <p class="pill-subtitle">Clear answers to common parent inquiries regarding installment plans, concessions, and fee terms.</p>
            </div>

            <div class="fee-faq-grid">
                <!-- Column 1 -->
                <div class="fee-faq-col">
                    <!-- FAQ 1 -->
                    <div class="fee-faq-card">
                        <div class="fee-faq-question" role="button" tabindex="0" aria-expanded="false">
                            <h3 class="fee-faq-q-text">1. Is school transport mandatory?</h3>
                            <i class="fa-solid fa-chevron-down fee-faq-chevron" aria-hidden="true"></i>
                        </div>
                        <div class="fee-faq-answer">
                            No, school transport is completely optional. Parents who prefer to arrange their own private commute, carpool, or drop off their wards personally are completely free to do so.
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="fee-faq-card">
                        <div class="fee-faq-question" role="button" tabindex="0" aria-expanded="false">
                            <h3 class="fee-faq-q-text">2. Can the school fee be paid in installments?</h3>
                            <i class="fa-solid fa-chevron-down fee-faq-chevron" aria-hidden="true"></i>
                        </div>
                        <div class="fee-faq-answer">
                            Yes, parents can pay the total fee in convenient term-wise installments (Term 1 at admission in April, Term 2 in September/October, and Term 3 in December/January).
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="fee-faq-card">
                        <div class="fee-faq-question" role="button" tabindex="0" aria-expanded="false">
                            <h3 class="fee-faq-q-text">3. Is there any concession for siblings?</h3>
                            <i class="fa-solid fa-chevron-down fee-faq-chevron" aria-hidden="true"></i>
                        </div>
                        <div class="fee-faq-answer">
                            Yes, Advaita School of Excellence offers a sibling concession on tuition fees for the second child enrolled concurrently in the school. Please contact our admissions desk for exact application details.
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="fee-faq-col">
                    <!-- FAQ 4 -->
                    <div class="fee-faq-card">
                        <div class="fee-faq-question" role="button" tabindex="0" aria-expanded="false">
                            <h3 class="fee-faq-q-text">4. What happens if I delay the fee payment?</h3>
                            <i class="fa-solid fa-chevron-down fee-faq-chevron" aria-hidden="true"></i>
                        </div>
                        <div class="fee-faq-answer">
                            A nominal grace period is extended, after which a standard late fee may be applicable as per the school policy. In case of genuine personal emergencies, parents are requested to contact the accounts officer in advance.
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="fee-faq-card">
                        <div class="fee-faq-question" role="button" tabindex="0" aria-expanded="false">
                            <h3 class="fee-faq-q-text">5. Are books and uniform compulsory?</h3>
                            <i class="fa-solid fa-chevron-down fee-faq-chevron" aria-hidden="true"></i>
                        </div>
                        <div class="fee-faq-answer">
                            Wearing the prescribed uniform and having standard CBSE/NCERT books is mandatory for all students, but parents are free to procure them from authorized retail counters at MRP.
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="fee-faq-card">
                        <div class="fee-faq-question" role="button" tabindex="0" aria-expanded="false">
                            <h3 class="fee-faq-q-text">6. Is the fee structure fixed for the entire academic year?</h3>
                            <i class="fa-solid fa-chevron-down fee-faq-chevron" aria-hidden="true"></i>
                        </div>
                        <div class="fee-faq-answer">
                            Yes, the fee schedule declared at the start of Academic Session 2026–27 remains strictly constant and fixed for the entire duration of that session with zero mid-term escalations.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================================
             7. COUNSELLOR & ACCOUNTS HELPLINE BANNER
             ========================================================================= -->
        <div class="fee-helpline-card">
            <div class="fee-helpline-left">
                <span class="fee-helpline-eyebrow">DEDICATED ADMISSION ASSISTANCE</span>
                <h3 class="fee-helpline-title">
                    Still have questions about our <span class="highlight-orange">fee structure?</span>
                </h3>
                <p class="fee-helpline-desc">
                    Our admissions counsellor and accounts desk are here to assist you with transparent calculations, transport route fees, and installment schedules.
                </p>

                <div class="fee-helpline-meta-list">
                    <div class="fee-meta-row">
                        <i class="fa-solid fa-user-tie"></i>
                        <span>Admission Counsellor: <strong>Ms. Vaishnavi (+91 94221 75522)</strong></span>
                    </div>
                    <div class="fee-meta-row">
                        <i class="fa-solid fa-building-columns"></i>
                        <span>Campus Lines: <strong>094130 62851 &bull; 02452 297298</strong></span>
                    </div>
                    <div class="fee-meta-row">
                        <i class="fa-solid fa-clock"></i>
                        <span>Office Hours: <strong>Monday – Saturday (9:00 AM – 4:00 PM)</strong></span>
                    </div>
                </div>
            </div>

            <div class="fee-helpline-right">
                <a href="tel:+919422175522" class="btn-fee-call" title="Call the Admissions Team">
                    <i class="fa-solid fa-phone"></i>
                    <span>Call Admission Counsellor</span>
                </a>
                <a href="https://wa.me/919422175522?text=Hello%20Advaita%20School,%20I%20have%20a%20query%20regarding%20the%20fee%20structure%202026-27." target="_blank" rel="noopener noreferrer" class="btn-fee-wa" title="Chat on WhatsApp">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>Chat on WhatsApp (+91 94221 75522)</span>
                </a>
                <a href="{{ route('admission-info') }}#quick-enquiry" class="btn-fee-enquiry" title="Submit Quick Enquiry">
                    <i class="fa-solid fa-paper-plane"></i>
                    <span>Submit Quick Enquiry Online</span>
                </a>
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
            tableAnnual.classList.remove('fee-table-hidden');
            tableTerm.classList.add('fee-table-hidden');
        });

        btnTerm.addEventListener('click', function() {
            btnTerm.classList.add('active');
            btnTerm.setAttribute('aria-selected', 'true');
            btnAnnual.classList.remove('active');
            btnAnnual.setAttribute('aria-selected', 'false');
            tableAnnual.classList.add('fee-table-hidden');
            tableTerm.classList.remove('fee-table-hidden');
        });
    }

    // 2. FAQ Accordion Toggle
    const faqCards = document.querySelectorAll('.fee-faq-card');
    faqCards.forEach(function(card) {
        const questionBtn = card.querySelector('.fee-faq-question');
        if (questionBtn) {
            questionBtn.addEventListener('click', function() {
                const isOpen = card.classList.contains('open');
                // Optional: close other cards if accordion behavior is desired, or keep independent
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
