@extends('layouts.app')

@section('title', "Admission Info 2026-27 - Advaita School of Excellence, Parbhani | Process, Eligibility & Guidelines")

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/admissions.css') }}?v={{ file_exists(public_path('assets/css/admissions.css')) ? filemtime(public_path('assets/css/admissions.css')) : '1.0' }}">
@endsection

@section('content')
<main id="main" class="main-content-wrapper admission-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Breadcrumb + Title + Visual with Students
         ========================================================================= -->
    <section class="admission-hero-section">
        <div class="admission-hero-canvas">
            <!-- Hero Students Visual -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="{{ asset('assets/images/about-cta-students-clean.png') }}" alt="Advaita Students" class="admission-hero-bg-img" width="1024" height="682">
            </div>

            <!-- SVG Wave Overlay for Smooth Translucent Backdrop -->
            <div class="admission-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H540C570 120 520 280 620 440H0V0Z" fill="#EEF6FC" fill-opacity="0.96"/>
                    <path d="M520 0C550 140 500 280 600 440H580C480 280 530 140 500 0H520Z" fill="#F37021" fill-opacity="0.25"/>
                </svg>
            </div>

            <!-- Floating Script Tag at Top Right -->
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
                        <span class="active">Admission Info</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">ADMISSIONS {{ $academicYear ?? '2026–27' }}</div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        Begin Your Child's Journey at <span class="highlight-serif">Advaita.</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        A supportive, transparent admission process designed to help your child take the right step towards excellence in CBSE academics, Abacus, Olympiads, and NEET/IIT Foundation.
                    </p>

                    <!-- Quick Navigation CTA Group -->
                    <div class="d-flex align-items-center gap-12 flex-wrap mt-20">
                        <a href="#quick-enquiry" class="admission-btn-primary">
                            <i class="fa-solid fa-bolt"></i>
                            <span>Quick Enquiry Form</span>
                        </a>
                        <a href="{{ route('online-registration') }}" class="admission-btn-visit" style="background: rgba(8, 59, 122, 0.08); border-color: rgba(8, 59, 122, 0.2); color: #083B7A;">
                            <i class="fa-solid fa-file-pen"></i>
                            <span>Detailed Application</span>
                        </a>
                        <a href="{{ route('fee-structure') }}" class="admission-btn-visit">
                            <i class="fa-solid fa-indian-rupee-sign"></i>
                            <span>Fee Structure</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Navigation Sub-bar -->
    <div class="admission-subnav-bar">
        <div class="admission-section-container">
            <div class="subnav-links-wrap">
                <a href="#quick-actions" class="subnav-link highlight"><i class="fa-solid fa-bolt"></i> Quick Actions</a>
                <a href="#admission-process" class="subnav-link"><i class="fa-solid fa-list-check"></i> Admission Process</a>
                <a href="#eligibility-criteria" class="subnav-link"><i class="fa-solid fa-user-check"></i> Eligibility Criteria</a>
                <a href="#required-documents" class="subnav-link"><i class="fa-solid fa-folder-open"></i> Required Documents</a>
                <a href="#books-uniforms" class="subnav-link"><i class="fa-solid fa-shirt"></i> Books &amp; Uniforms</a>
                <a href="#transport-facilities" class="subnav-link"><i class="fa-solid fa-bus"></i> Transport Facilities</a>
                <a href="#quick-enquiry" class="subnav-link"><i class="fa-solid fa-paper-plane"></i> Quick Enquiry</a>
            </div>
        </div>
    </div>

    <!-- =========================================================================
         QUICK ACTIONS SECTION (All 7 Verified Actions & Contact Hub)
         ========================================================================= -->
    <section class="admission-quick-actions-section" id="quick-actions">
        <div class="admission-section-container">
            <div class="admission-section-header">
                <div class="admission-eyebrow">— ADMISSIONS QUICK ACTIONS &amp; CONTACT HUB —</div>
                <h2 class="admission-section-title">
                    Instant Assistance &amp; <span class="highlight-serif">Direct Connect.</span>
                </h2>
                <p class="admission-section-desc">
                    Connect directly with our admissions counsellor, access fee structures, download guidelines, or get directions to our campus.
                </p>
            </div>

            <div class="quick-actions-grid">
                <!-- 1. View Fee Structure -->
                <div class="qa-card">
                    <div>
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap navy" aria-hidden="true">
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                            </div>
                            <span class="qa-badge navy">Session {{ $academicYear }}</span>
                        </div>
                        <div class="qa-card-body">
                            <h3 class="qa-card-title">1. View Fee Structure</h3>
                            <p class="qa-card-desc">Review transparent class-wise tuition fees, term installment schedules, and policy guidelines.</p>
                        </div>
                    </div>
                    <div class="qa-card-footer">
                        <a href="{{ route('fee-structure') }}" class="btn-qa-action primary">
                            <span>View Fee Structure</span>
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <!-- 2. Download Admission Guidelines -->
                <div class="qa-card">
                    <div>
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap orange" aria-hidden="true">
                                <i class="fa-solid fa-file-arrow-down"></i>
                            </div>
                            <span class="qa-badge orange">Official PDF</span>
                        </div>
                        <div class="qa-card-body">
                            <h3 class="qa-card-title">2. Download Admission Guidelines</h3>
                            <p class="qa-card-desc">Complete 5-step admission protocol, age criteria matrix, and regulatory verification instructions.</p>
                        </div>
                    </div>
                    <div class="qa-card-footer">
                        <a href="{{ route('admission-guidelines.download') }}" class="btn-qa-action orange" title="Download Admission Guidelines PDF">
                            <i class="fa-solid fa-file-pdf me-1" aria-hidden="true"></i>
                            <span>Download Official PDF</span>
                        </a>
                        <a href="{{ route('admission-guidelines') }}" class="btn-qa-action outline mt-2" style="font-size: 13px;">
                            <i class="fa-solid fa-book-open me-1" aria-hidden="true"></i>
                            <span>View Full Guidelines</span>
                        </a>
                    </div>
                </div>

                <!-- 3. Check Required Documents -->
                <div class="qa-card">
                    <div>
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap purple" aria-hidden="true">
                                <i class="fa-solid fa-clipboard-check"></i>
                            </div>
                            <span class="qa-badge navy">10 Documents</span>
                        </div>
                        <div class="qa-card-body">
                            <h3 class="qa-card-title">3. Check Required Documents</h3>
                            <p class="qa-card-desc">Management-approved checklist of documents required for student admission confirmation.</p>
                        </div>
                    </div>
                    <div class="qa-card-footer">
                        <a href="#required-documents" class="btn-qa-action outline" title="Scroll to documents checklist on this page">
                            <i class="fa-solid fa-list-check me-1" aria-hidden="true"></i>
                            <span>Check Required Documents</span>
                        </a>
                        <a href="{{ route('admission-guidelines') }}#documents-required" class="btn-qa-action primary mt-2" style="font-size: 13px;">
                            <i class="fa-solid fa-circle-check me-1" aria-hidden="true"></i>
                            <span>Guidelines Checklist</span>
                        </a>
                    </div>
                </div>

                <!-- 4. Talk to an Admission Counsellor -->
                <div class="qa-card highlight-card">
                    <div>
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap orange" aria-hidden="true">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <span class="qa-badge orange">Counsellor Desk</span>
                        </div>
                        <div class="qa-card-body">
                            <h3 class="qa-card-title">4. Talk to an Admission Counsellor</h3>
                            <p class="qa-card-desc">Speak directly with our dedicated admissions counsellor for personalized academic guidance.</p>
                            <div class="qa-card-meta">
                                <i class="fa-solid fa-user-tie" aria-hidden="true"></i>
                                <span>{{ $counsellorName }} &middot; {{ $counsellorPhone }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="qa-card-footer">
                        <a href="tel:{{ $counsellorPhone }}" class="btn-qa-action orange">
                            <i class="fa-solid fa-phone me-1" aria-hidden="true"></i>
                            <span>Call {{ $counsellorName }}: {{ $counsellorPhone }}</span>
                        </a>
                    </div>
                </div>

                <!-- 5. Get Directions to School -->
                <div class="qa-card">
                    <div>
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap blue" aria-hidden="true">
                                <i class="fa-solid fa-diamond-turn-right"></i>
                            </div>
                            <span class="qa-badge navy">Google Maps</span>
                        </div>
                        <div class="qa-card-body">
                            <h3 class="qa-card-title">5. Get Directions to School</h3>
                            <p class="qa-card-desc">Turn-by-turn route navigation directly to Advaita School of Excellence campus.</p>
                            <div class="qa-card-meta" style="color: #475569;">
                                <i class="fa-solid fa-location-dot text-orange" aria-hidden="true"></i>
                                <span>{{ $campusAddress }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="qa-card-footer">
                        <a href="{{ $directionsUrl }}" target="_blank" rel="noopener noreferrer" class="btn-qa-action primary">
                            <i class="fa-solid fa-location-arrow me-1" aria-hidden="true"></i>
                            <span>Get Directions</span>
                        </a>
                    </div>
                </div>

                <!-- 6. Call the School -->
                <div class="qa-card">
                    <div>
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap teal" aria-hidden="true">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <span class="qa-badge green">Official Lines</span>
                        </div>
                        <div class="qa-card-body">
                            <h3 class="qa-card-title">6. Call the School</h3>
                            <p class="qa-card-desc">Tap either verified official telephone number to connect with the school reception:</p>
                        </div>
                    </div>
                    <div class="qa-card-footer">
                        <div class="qa-dual-buttons">
                            <a href="tel:{{ $schoolPhone1 }}" class="btn-qa-action primary" title="Call Line 1">
                                <i class="fa-solid fa-phone me-1" aria-hidden="true"></i>
                                <span>{{ $schoolPhone1 }}</span>
                            </a>
                            <a href="tel:{{ $schoolPhone2 }}" class="btn-qa-action outline" title="Call Line 2">
                                <i class="fa-solid fa-phone me-1" aria-hidden="true"></i>
                                <span>{{ $schoolPhone2 }}</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 7. WhatsApp Enquiry Banner (Full Width Feature) -->
                <div class="qa-card qa-card-banner">
                    <div class="qa-banner-content">
                        <div class="qa-icon-wrap whatsapp" aria-hidden="true">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div class="qa-banner-text">
                            <div class="d-flex align-items-center gap-10 flex-wrap mb-6">
                                <h3 class="qa-card-title m-0">7. Instant WhatsApp Enquiry Desk</h3>
                                <span class="qa-badge whatsapp"><i class="fa-solid fa-bolt me-1"></i> Quick Response</span>
                            </div>
                            <p class="qa-card-desc m-0">Prefer instant messaging? Connect directly with our admissions counsellor on WhatsApp (<strong>{{ $whatsappNumber }}</strong>) to ask quick questions, receive fee schedules, or request the admission prospectus.</p>
                        </div>
                    </div>
                    <div class="qa-banner-action">
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener noreferrer" class="btn-qa-action whatsapp">
                            <i class="fa-brands fa-whatsapp me-2" aria-hidden="true"></i>
                            <span>Chat on WhatsApp ({{ $whatsappNumber }})</span>
                            <i class="fa-solid fa-arrow-up-right-from-square ms-2 fs-12" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. SECTION A: FIVE-STEP ADMISSION PROCESS & IMPORTANT DATES
         ========================================================================= -->
    <section class="admission-process-section" id="admission-process">
        <div class="admission-section-container">
            <div class="admission-section-header">
                <div class="admission-eyebrow">— ADMISSION GUIDELINES —</div>
                <h2 class="admission-section-title">
                    From application to <span class="highlight-serif">welcome</span>, in five clear steps.
                </h2>
                <p class="admission-section-desc">
                    Admission is open to all children irrespective of caste, creed, or community. All decisions are communicated transparently based on seat availability and age eligibility.
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
                    <h3 class="step-card-title">Enquiry / Application</h3>
                    <p class="step-card-desc">Submit the Quick Enquiry or complete the detailed Online Admission Registration form.</p>
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
                    <h3 class="step-card-title">Document Verification</h3>
                    <p class="step-card-desc">Submit required documents (Birth Certificate, TC, Report Card) for verification.</p>
                </div>

                <div class="step-arrow-divider" aria-hidden="true">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>

                <!-- Step 03 -->
                <div class="admission-step-card">
                    <span class="step-num-pill">03</span>
                    <div class="step-icon-circle purple" aria-hidden="true">
                        <i class="fa-solid fa-comments"></i>
                    </div>
                    <h3 class="step-card-title">Counselor Interaction</h3>
                    <p class="step-card-desc">Our admissions counselor guides parents through the curriculum, pedagogy, and facilities.</p>
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
                    <h3 class="step-card-title">Student Interaction</h3>
                    <p class="step-card-desc">Friendly informal interaction / grade-appropriate baseline review for higher classes.</p>
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
                    <p class="step-card-desc">Upon seat allocation, receive admission confirmation and complete fee formalities.</p>
                </div>
            </div>

            <!-- Important Dates Card -->
            <div class="admission-dates-banner mt-32">
                <div class="d-flex align-items-center justify-content-between gap-16 flex-wrap">
                    <div class="d-flex align-items-center gap-14">
                        <div class="adm-dates-icon" aria-hidden="true">
                            <i class="fa-regular fa-calendar-days"></i>
                        </div>
                        <div>
                            <h4 class="m-0 text-navy fs-16 font-extrabold">Academic Session {{ $academicYear ?? '2026–27' }} Admission Schedule</h4>
                            <p class="m-0 text-muted fs-13 mt-2">Registrations are currently open for Nursery to Class 10. Limited seats are allocated strictly on early confirmation to maintain an optimal 25:1 student-teacher ratio.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-10">
                        <span class="badge-featured-pill font-extrabold fs-12">
                            <i class="fa-solid fa-fire text-orange"></i> Admissions Open
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. SECTION A (CONT): CLASS-WISE ELIGIBILITY CRITERIA & AGE REQUIREMENTS
         ========================================================================= -->
    <section class="admission-eligibility-section" id="eligibility-criteria">
        <div class="admission-section-container">
            <div class="admission-section-header">
                <div class="admission-eyebrow">— ELIGIBILITY CRITERIA —</div>
                <h2 class="admission-section-title">
                    Class-wise <span class="highlight-serif">age &amp; admission</span> requirements.
                </h2>
                <p class="admission-section-desc">
                    Age criteria are formulated in alignment with the National Education Policy (NEP) and government guidelines for CBSE affiliated institutions.
                </p>
            </div>

            <div class="eligibility-table-card">
                <!-- Table Card Top Header Bar -->
                <div class="table-card-topbar">
                    <div class="d-flex align-items-center gap-12 flex-wrap">
                        <div class="table-topbar-icon" aria-hidden="true">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div>
                            <h3 class="table-topbar-title">Class-wise Age &amp; Admission Norms Matrix</h3>
                            <p class="table-topbar-sub">Academic Session {{ $academicYear ?? '2026–27' }} &middot; Structured in accordance with NEP 2020 &amp; CBSE admission bylaws</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-10 flex-wrap">
                        <span class="table-cutoff-pill">
                            <i class="fa-solid fa-calendar-check text-orange"></i>
                            <span>Cut-Off Date: <strong>31st December</strong></span>
                        </span>
                        <a href="{{ route('admission-guidelines.download') }}" class="btn-table-topbar" title="Download Guidelines PDF">
                            <i class="fa-solid fa-file-arrow-down"></i>
                            <span>Download PDF</span>
                        </a>
                    </div>
                </div>

                <!-- Table Content -->
                <div class="table-responsive">
                    <table class="eligibility-table">
                        <thead>
                            <tr>
                                <th style="width: 20%;">Class / Grade</th>
                                <th style="width: 25%;">Minimum Age Criteria</th>
                                <th style="width: 40%;">Eligibility &amp; Document Requirements</th>
                                <th style="width: 15%; text-align: center;">Status &amp; Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($eligibilityList as $el)
                            <tr>
                                <td>
                                    <div class="class-grade-wrap">
                                        <div class="class-grade-name">{{ $el['grade'] }}</div>
                                        <span class="wing-tag {{ $el['wing_type'] ?? 'primary' }}">
                                            @if(($el['wing_type'] ?? '') === 'preprimary')
                                            <i class="fa-solid fa-shapes"></i>
                                            @elseif(($el['wing_type'] ?? '') === 'secondary')
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            @else
                                            <i class="fa-solid fa-book-open"></i>
                                            @endif
                                            <span>{{ $el['wing'] ?? 'Advaita Wing' }}</span>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="age-badge-group">
                                        <span class="age-pill {{ $el['wing_type'] ?? 'primary' }}">
                                            <i class="fa-regular fa-clock"></i>
                                            <strong>{{ $el['age_badge'] ?? $el['age'] }}</strong>
                                        </span>
                                        <span class="age-subtext">{{ $el['age_note'] ?? 'As on 31st Dec 2026' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="criterion-content">
                                        <div class="criterion-text">{{ $el['criterion'] }}</div>
                                        @if(!empty($el['doc_req']))
                                        <div class="criterion-req-tag">
                                            <i class="fa-solid fa-file-circle-check"></i>
                                            <span>{{ $el['doc_req'] }}</span>
                                        </div>
                                        @endif
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="entry-mode-cell">
                                        <span class="status-live-chip">
                                            <span class="status-live-dot"></span>
                                            <span>Admissions Open</span>
                                        </span>
                                        <a href="#quick-enquiry" class="btn-table-apply-row">
                                            <span>Enquire</span>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Table Card Bottom Callout -->
                <div class="eligibility-table-footer">
                    <div class="etf-icon" aria-hidden="true">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="etf-content">
                        <strong>Statutory Age Verification Rule:</strong> Proof of date of birth must be established through a verified birth certificate issued by Municipal Corporation, Nagar Palika, or Gram Panchayat. For Class 2 onwards, an original counter-signed Transfer Certificate (TC) is strictly mandatory before admission confirmation.
                    </div>
                    <div class="etf-action">
                        <a href="{{ route('admission-guidelines') }}" class="btn-etf-link">
                            <span>Full Guidelines</span>
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. SECTION B: REQUIRED DOCUMENTS CHECKLIST
         ========================================================================= -->
    <section class="admission-docs-section" id="required-documents">
        <div class="admission-section-container">
            <div class="admission-section-header">
                <div class="admission-eyebrow">— DOCUMENTATION CHECKLIST —</div>
                <h2 class="admission-section-title">
                    Documents Required for <span class="highlight-serif">School Admission.</span>
                </h2>
                <p class="admission-section-desc">
                    Please ensure the following management-approved documents are ready during application submission and verification:
                </p>
            </div>

            <div class="docs-checklist-grid">
                @foreach($documentsList as $doc)
                <div class="doc-card-item">
                    <div class="doc-card-number-badge">
                        {{ sprintf('%02d', $doc['number'] ?? $loop->iteration) }}
                    </div>
                    <div class="doc-card-icon" aria-hidden="true">
                        <i class="{{ $doc['icon'] }}"></i>
                    </div>
                    <div class="doc-card-content">
                        <div class="d-flex align-items-center justify-content-between gap-6 mb-4 flex-wrap">
                            <h3 class="doc-card-title">{{ $doc['title'] }}</h3>
                            <div class="d-flex align-items-center gap-6">
                                @if(!empty($doc['badge']))
                                <span class="badge-neutral font-bold fs-11" style="background: #EEF2F6; color: #083B7A; padding: 2px 8px; border-radius: 6px;">{{ $doc['badge'] }}</span>
                                @endif
                                @if($doc['mandatory'])
                                <span class="doc-badge-mandatory">Mandatory</span>
                                @else
                                <span class="doc-badge-optional">If Applicable</span>
                                @endif
                            </div>
                        </div>
                        <p class="doc-card-desc">{{ $doc['desc'] }}</p>

                        @if(!empty($doc['options']))
                        <div class="doc-options-list mt-8">
                            <span class="fs-11 font-bold text-navy me-1">Accepted Documents:</span>
                            @foreach($doc['options'] as $opt)
                            <span class="badge-option-tag">{{ $opt }}</span>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Official Requirements Notice Box -->
            <div class="docs-submission-alert mt-24">
                <div class="docs-submission-alert-inner">
                    <div class="dsa-icon" aria-hidden="true"><i class="fa-solid fa-clipboard-check"></i></div>
                    <div class="docs-submission-alert-content">
                        <h4 class="m-0 fs-14 font-extrabold text-navy">Important Admission Document Notice</h4>
                        <p class="m-0 fs-12 text-muted mt-2">
                            <strong>Note:</strong> Please verify the school's current document requirements before submitting the application. All original documents will be inspected by the verification desk and returned immediately.
                        </p>
                    </div>
                    <a href="{{ route('online-registration') }}" class="btn-adv-primary">
                        <span>Proceed to Registration</span>
                        <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. SECTION C: BOOKS, UNIFORMS & SHOES
         ========================================================================= -->
    <section class="admission-uniform-section" id="books-uniforms">
        <div class="admission-section-container">
            <div class="admission-section-header">
                <div class="admission-eyebrow">— BOOKS, UNIFORMS &amp; SHOES —</div>
                <h2 class="admission-section-title">
                    Prescribed guidelines for <span class="highlight-serif">books &amp; school uniform.</span>
                </h2>
                <p class="admission-section-desc">
                    Advaita School of Excellence maintains standardized, high-quality curriculum material and uniform decorum reflecting dignity, discipline, and unity.
                </p>
            </div>

            <!-- Books & Stationery Protocol Card -->
            <div class="books-procurement-card mb-24">
                <div class="bpc-head">
                    <div class="d-flex align-items-center gap-12">
                        <div class="bpc-icon"><i class="fa-solid fa-book-bookmark"></i></div>
                        <div>
                            <h3 class="m-0 text-navy fs-18 font-extrabold">NCERT / CBSE Textbooks &amp; Curriculum Kits</h3>
                            <span class="text-muted fs-13">Academic Session {{ $academicYear ?? '2026–27' }} Book Guidelines</span>
                        </div>
                    </div>
                    <span class="badge-blue-pill font-bold">Authorized Distribution Counter</span>
                </div>
                <div class="bpc-body">
                    <div class="bpc-grid">
                        <div class="bpc-item">
                            <i class="fa-solid fa-circle-check text-success"></i>
                            <div>
                                <strong class="text-navy fs-14 d-block">Curriculum Prescribed Sets</strong>
                                <span class="text-muted fs-12">Strictly follows NCERT and CBSE approved curriculum guidelines with Abacus workbook kits for Primary classes and Foundation modules for Secondary classes.</span>
                            </div>
                        </div>
                        <div class="bpc-item">
                            <i class="fa-solid fa-circle-check text-success"></i>
                            <div>
                                <strong class="text-navy fs-14 d-block">Procurement &amp; Counter Location</strong>
                                <span class="text-muted fs-12">To prevent outdated editions, customized book kits and notebooks bearing the school crest are made available at the school campus bookstore counter during admission confirmation.</span>
                            </div>
                        </div>
                        <div class="bpc-item">
                            <i class="fa-solid fa-circle-check text-success"></i>
                            <div>
                                <strong class="text-navy fs-14 d-block">Transparent Pricing</strong>
                                <span class="text-muted fs-12">All book packages are provided strictly on printed MRP with detailed itemized receipts provided to parents.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Uniform Specification Cards (Primary & Senior) -->
            <div class="uniform-cards-grid">
                <!-- Primary Wing (Classes 1 to 5) -->
                <div class="uniform-card">
                    <div class="uniform-card-head">
                        <div class="uniform-head-icon orange" aria-hidden="true">
                            <i class="fa-solid fa-shirt"></i>
                        </div>
                        <div>
                            <h3 class="uniform-head-title">Primary Wing (Classes 1 to 5)</h3>
                            <p class="uniform-head-sub">Daily Dress Code &amp; Specifications</p>
                        </div>
                    </div>

                    <ul class="uniform-checklist">
                        <li class="uniform-check-item orange">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span><strong>Boys:</strong> Check pattern short-sleeve shirt with navy shorts/trousers and school badge.</span>
                        </li>
                        <li class="uniform-check-item orange">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span><strong>Girls:</strong> Check pattern shirt with navy pleated skirt / pinafore and school badge.</span>
                        </li>
                        <li class="uniform-check-item orange">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span><strong>Footwear:</strong> Polished black leather shoes with navy socks with orange stripes (Mon, Tue, Thu, Fri).</span>
                        </li>
                        <li class="uniform-check-item orange">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span><strong>Sports (PT):</strong> House-colored t-shirt with navy track pants and clean white canvas shoes (Wed &amp; Sat).</span>
                        </li>
                        <li class="uniform-check-item orange">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span><strong>Winter Wear:</strong> Prescribed navy blue cardigan / school sweater with Advaita crest.</span>
                        </li>
                    </ul>
                </div>

                <!-- Senior Wing (Classes 6 to 10) -->
                <div class="uniform-card">
                    <div class="uniform-card-head">
                        <div class="uniform-head-icon blue" aria-hidden="true">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>
                        <div>
                            <h3 class="uniform-head-title">Secondary Wing (Classes 6 to 10)</h3>
                            <p class="uniform-head-sub">Senior Uniform Standards &amp; Formal Code</p>
                        </div>
                    </div>

                    <ul class="uniform-checklist">
                        <li class="uniform-check-item blue">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span><strong>Boys:</strong> Prescribed check shirt with navy tailored formal trousers, school tie, and belt.</span>
                        </li>
                        <li class="uniform-check-item blue">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span><strong>Girls:</strong> Prescribed check shirt with navy divided skirt / salwar kameez with school tie.</span>
                        </li>
                        <li class="uniform-check-item blue">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span><strong>Footwear:</strong> Formal black leather shoes with navy socks on regular weekdays.</span>
                        </li>
                        <li class="uniform-check-item blue">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span><strong>Sports (PT):</strong> Official sports house uniform with white sports sneakers on activity days.</span>
                        </li>
                        <li class="uniform-check-item blue">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <span><strong>Winter Blazer:</strong> Formal Advaita navy blazer with golden embroidered school crest (mandatory in winter).</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Authorized Counter Info Note -->
            <div class="admission-process-note mt-20">
                <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                <span><strong>Authorized Supplier Counter:</strong> Prescribed school uniforms, ties, belts, and sports kits are available at the authorized school campus store on all working days from 9:00 AM to 4:30 PM.</span>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. SECTION D: TRANSPORT FACILITIES
         ========================================================================= -->
    <section class="admission-transport-section" id="transport-facilities">
        <div class="admission-section-container">
            <div class="admission-section-header">
                <div class="admission-eyebrow">— TRANSPORT FACILITIES —</div>
                <h2 class="admission-section-title">
                    Safe, connected, and <span class="highlight-serif">GPS-monitored</span> bus transport.
                </h2>
                <p class="admission-section-desc">
                    Advaita School of Excellence operates a fleet of modern, safety-compliant buses covering key residential hubs across Parbhani.
                </p>
            </div>

            <!-- Safety Badges 4-Grid -->
            <div class="transport-safety-grid mb-24">
                <div class="safety-feature-card">
                    <div class="sfc-icon"><i class="fa-solid fa-satellite-dish"></i></div>
                    <h4 class="sfc-title">Live GPS Tracking</h4>
                    <p class="sfc-desc">Real-time route monitoring accessible to the transport desk for accurate arrival updates.</p>
                </div>

                <div class="safety-feature-card">
                    <div class="sfc-icon"><i class="fa-solid fa-video"></i></div>
                    <h4 class="sfc-title">CCTV Surveillance</h4>
                    <p class="sfc-desc">Interior CCTV cameras installed in all buses ensuring continuous student safety and discipline.</p>
                </div>

                <div class="safety-feature-card">
                    <div class="sfc-icon"><i class="fa-solid fa-person-dress"></i></div>
                    <h4 class="sfc-title">Female Bus Attendant</h4>
                    <p class="sfc-desc">Trained female attendant on board every bus to assist younger students during boarding and drop-off.</p>
                </div>

                <div class="safety-feature-card">
                    <div class="sfc-icon"><i class="fa-solid fa-gauge-high"></i></div>
                    <h4 class="sfc-title">Speed Governors &amp; First Aid</h4>
                    <p class="sfc-desc">Certified speed governors (max 40 km/h in city limit), fire extinguishers, and emergency medical kits.</p>
                </div>
            </div>

            <!-- Route Corridors Grid -->
            <div class="transport-routes-grid">
                @foreach($transportRoutes as $tr)
                <div class="route-item-card">
                    <div class="d-flex align-items-center gap-12 mb-8">
                        <div class="ric-icon"><i class="{{ $tr['icon'] }}"></i></div>
                        <h4 class="ric-title">{{ $tr['route'] }}</h4>
                    </div>
                    <div class="ric-coverage">
                        <i class="fa-solid fa-location-dot text-orange me-1"></i>
                        <span>{{ $tr['coverage'] }}</span>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Transport Policy Note -->
            <div class="admission-fee-notes-card mt-24">
                <div class="fee-note-icon" aria-hidden="true">
                    <i class="fa-solid fa-bus"></i>
                </div>
                <div class="fee-note-content">
                    <strong>Transport Availability &amp; Policy Notice:</strong>
                    <ul class="fee-note-list">
                        <li>School transport is optional and provided on a first-come, first-served basis subject to seat availability on designated routes.</li>
                        <li>Bus charges depend on the distance from the school campus and approved route stops.</li>
                        <li>For specific pickup points, timing, and fee calculation, please connect with the Transport Desk at <strong>{{ $contactPhone }}</strong>.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         7. SECTION E: QUICK ENQUIRY REGISTRATION FORM (EMBEDDED)
         ========================================================================= -->
    <section class="admission-quick-enquiry-section" id="quick-enquiry">
        <div class="admission-section-container">
            <div class="quick-enquiry-wrapper">
                <div class="quick-enquiry-layout">
                    
                    <!-- Left Pitch Column -->
                    <div class="qe-pitch-col">
                        <div class="qe-pitch-box">
                            <span class="badge-featured-pill mb-12 d-inline-block">EXPRESS ADMISSION INTEREST</span>
                            <h2 class="qe-headline">
                                Submit a <span class="text-orange">Quick Enquiry</span>
                            </h2>
                            <p class="qe-subtext">
                                Not ready for the full application yet? Send us your contact information and our dedicated admissions counselor will reach out to schedule your personalized campus tour and consultation.
                            </p>

                            <div class="qe-perks-list">
                                <div class="qe-perk-item">
                                    <i class="fa-solid fa-circle-check text-orange"></i>
                                    <span>Guaranteed callback within 24 working hours</span>
                                </div>
                                <div class="qe-perk-item">
                                    <i class="fa-solid fa-circle-check text-orange"></i>
                                    <span>Personalized fee estimate &amp; sibling benefit details</span>
                                </div>
                                <div class="qe-perk-item">
                                    <i class="fa-solid fa-circle-check text-orange"></i>
                                    <span>Priority campus counseling slot</span>
                                </div>
                            </div>

                            <div class="qe-helpline-box mt-24">
                                <div class="d-flex align-items-center justify-content-between mb-8 pb-8 border-bottom">
                                    <div>
                                        <div class="text-muted fs-11 font-bold text-uppercase">Admissions Counsellor</div>
                                        <strong class="text-navy fs-15">{{ $counsellorName }}</strong>
                                    </div>
                                    <span class="badge-neutral font-bold fs-11" style="background: #FFF7ED; color: #EA580C; padding: 2px 8px; border-radius: 6px;">Available</span>
                                </div>

                                <div class="d-flex flex-column gap-6">
                                    <a href="tel:{{ $schoolPhone1 }}" class="qe-phone-link">
                                        <i class="fa-solid fa-phone-volume text-orange"></i>
                                        <span>{{ $schoolPhone1 }}</span>
                                        <small class="text-muted ms-auto fs-11">(Line 1 / Counsellor)</small>
                                    </a>
                                    <a href="tel:{{ $schoolPhone2 }}" class="qe-phone-link">
                                        <i class="fa-solid fa-phone text-navy"></i>
                                        <span>{{ $schoolPhone2 }}</span>
                                        <small class="text-muted ms-auto fs-11">(Line 2 / Office)</small>
                                    </a>
                                </div>

                                <div class="d-flex align-items-center gap-8 mt-12 pt-10 border-top flex-wrap">
                                    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener noreferrer" class="btn-qa-action whatsapp" style="flex: 1; padding: 8px 12px; font-size: 12.5px;">
                                        <i class="fa-brands fa-whatsapp"></i>
                                        <span>WhatsApp ({{ $whatsappNumber }})</span>
                                    </a>
                                    <a href="{{ $directionsUrl }}" target="_blank" rel="noopener noreferrer" class="btn-qa-action outline" style="flex: 1; padding: 8px 12px; font-size: 12.5px;">
                                        <i class="fa-solid fa-location-dot text-orange"></i>
                                        <span>Directions</span>
                                    </a>
                                </div>
                                <span class="text-muted fs-11 d-block mt-2 text-center">Monday to Saturday &middot; 9:00 AM to 5:00 PM</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Form Column -->
                    <div class="qe-form-col">
                        <div class="qe-form-card">
                            <div class="qe-form-header">
                                <h3 class="qe-form-title">
                                    <i class="fa-solid fa-paper-plane text-orange me-2"></i> Quick Admission Enquiry
                                </h3>
                                <p class="qe-form-desc">Fill in basic contact details to begin the conversation.</p>
                            </div>

                            @if(session('success'))
                            <div class="alert alert-success d-flex align-items-center gap-10 mb-20 p-14 rounded-12" style="background: #DCFCE7; border: 1.5px solid #86EFAC; color: #166534;">
                                <i class="fa-solid fa-circle-check fs-18"></i>
                                <span class="fs-13 font-bold">{{ session('success') }}</span>
                            </div>
                            @endif

                            @if($errors->any())
                            <div class="alert alert-danger mb-20 p-14 rounded-12" style="background: #FEE2E2; border: 1.5px solid #FCA5A5; color: #991B1B;">
                                <div class="font-bold fs-13 mb-4"><i class="fa-solid fa-triangle-exclamation me-1"></i> Please correct the highlighted errors:</div>
                                <ul class="m-0 fs-12 ps-16">
                                    @foreach($errors->all() as $err)
                                    <li>{{ $err }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form action="{{ route('admission-enquiry.store') }}" method="POST" id="quickAdmissionForm" class="qe-actual-form">
                                @csrf

                                <!-- Honeypot anti-spam (invisible) -->
                                <div style="display:none !important;" aria-hidden="true">
                                    <input type="text" name="website" tabindex="-1" autocomplete="off">
                                    <input type="text" name="security_token_trap" tabindex="-1" autocomplete="off">
                                </div>

                                <div class="form-grid-2">
                                    <!-- Parent's Full Name -->
                                    <div class="form-group">
                                        <label class="form-label" for="qe_parent_name">
                                            <span>Parent / Guardian Name</span>
                                            <span class="required">*</span>
                                        </label>
                                        <div class="input-with-icon-wrap">
                                            <i class="fa-regular fa-user"></i>
                                            <input type="text" id="qe_parent_name" name="parent_name" value="{{ old('parent_name') }}" 
                                                   class="form-control @error('parent_name') is-invalid @enderror" 
                                                   placeholder="e.g. Rameshwar Patil" required maxlength="255">
                                        </div>
                                        @error('parent_name')
                                        <span class="form-error-msg">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Ward's Full Name -->
                                    <div class="form-group">
                                        <label class="form-label" for="qe_ward_name">
                                            <span>Ward / Child Name</span>
                                            <span class="required">*</span>
                                        </label>
                                        <div class="input-with-icon-wrap">
                                            <i class="fa-solid fa-child"></i>
                                            <input type="text" id="qe_ward_name" name="ward_name" value="{{ old('ward_name') }}" 
                                                   class="form-control @error('ward_name') is-invalid @enderror" 
                                                   placeholder="e.g. Aarav Patil" required maxlength="255">
                                        </div>
                                        @error('ward_name')
                                        <span class="form-error-msg">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Mobile Number -->
                                    <div class="form-group">
                                        <label class="form-label" for="qe_mobile_number">
                                            <span>Mobile Number (10 Digits)</span>
                                            <span class="required">*</span>
                                        </label>
                                        <div class="input-with-icon-wrap">
                                            <i class="fa-solid fa-phone"></i>
                                            <input type="tel" id="qe_mobile_number" name="mobile_number" value="{{ old('mobile_number') }}" 
                                                   class="form-control @error('mobile_number') is-invalid @enderror" 
                                                   placeholder="e.g. 9822012345" required pattern="[6-9][0-9]{9}" maxlength="10">
                                        </div>
                                        @error('mobile_number')
                                        <span class="form-error-msg">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Class of Interest -->
                                    <div class="form-group">
                                        <label class="form-label" for="qe_applying_class">
                                            <span>Seeking Admission in Class</span>
                                        </label>
                                        <div class="input-with-icon-wrap">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <select id="qe_applying_class" name="applying_class" class="form-control">
                                                <option value="">Select Target Class...</option>
                                                <option value="Nursery" {{ old('applying_class') === 'Nursery' ? 'selected' : '' }}>Nursery (Age 3+)</option>
                                                <option value="LKG" {{ old('applying_class') === 'LKG' ? 'selected' : '' }}>LKG (Age 4+)</option>
                                                <option value="UKG" {{ old('applying_class') === 'UKG' ? 'selected' : '' }}>UKG (Age 5+)</option>
                                                @for($i = 1; $i <= 10; $i++)
                                                <option value="Class {{ $i }}" {{ old('applying_class') === "Class $i" ? 'selected' : '' }}>Class {{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Academic Session (Preset) -->
                                    <input type="hidden" name="academic_year" value="2026-27">

                                    <!-- Brief Query / Note -->
                                    <div class="form-group full-width">
                                        <label class="form-label" for="qe_notes">
                                            <span>Questions / Specific Requirements (Optional)</span>
                                        </label>
                                        <textarea id="qe_notes" name="notes" rows="2" class="form-control" 
                                                  placeholder="e.g. Inquiring about school transport, hostel, or scholarship eligibility...">{{ old('notes') }}</textarea>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-between gap-16 flex-wrap mt-20">
                                    <button type="submit" class="qe-submit-btn" id="btnSubmitQuickEnquiry">
                                        <i class="fa-solid fa-paper-plane"></i>
                                        <span>Submit Quick Enquiry</span>
                                    </button>

                                    <div class="text-muted fs-12 d-flex align-items-center gap-6">
                                        <i class="fa-solid fa-shield-halved text-success"></i>
                                        <span>Your contact details are strictly confidential.</span>
                                    </div>
                                </div>
                            </form>

                            <!-- Alternative Link to Detailed Form -->
                            <div class="mt-20 pt-16 border-top text-center">
                                <span class="fs-13 text-muted">Ready to fill out the comprehensive admission form?</span>
                                <a href="{{ route('online-registration') }}" class="fs-13 font-bold text-navy ms-1" style="text-decoration: underline;">
                                    Switch to Detailed Online Registration <i class="fa-solid fa-arrow-right fs-11"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         8. PRE-FOOTER CALL TO ACTION BANNER
         ========================================================================= -->
    <section class="admission-cta-section">
        <div class="admission-section-container">
            <div class="admission-cta-box">
                <div class="admission-cta-left">
                    <span class="admission-cta-pill">SCHEDULE A CAMPUS TOUR</span>
                    <h2 class="admission-cta-headline">Experience Advaita in Person</h2>
                    <p class="admission-cta-desc">Walk through our smart classrooms, science labs, splash pool, and robotics center with our school leadership.</p>
                </div>

                <div class="admission-cta-actions">
                    <a href="{{ route('online-registration') }}" class="admission-btn-primary">
                        <span>Fill Online Application</span>
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('contact') }}" class="admission-btn-visit">
                        <i class="fa-regular fa-calendar-check" aria-hidden="true"></i>
                        <span>Contact Admissions Desk</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const subnavLinks = document.querySelectorAll('.subnav-link');
    const sections = Array.from(subnavLinks).map(link => {
        const id = link.getAttribute('href');
        if (id && id.startsWith('#')) {
            return document.querySelector(id);
        }
        return null;
    }).filter(Boolean);

    function updateActiveSubnav() {
        const scrollPosition = window.scrollY + 130;
        let currentSectionId = '';

        sections.forEach(section => {
            const top = section.offsetTop;
            const height = section.offsetHeight;
            if (scrollPosition >= top && scrollPosition < top + height) {
                currentSectionId = '#' + section.getAttribute('id');
            }
        });

        if (currentSectionId) {
            subnavLinks.forEach(link => {
                if (link.getAttribute('href') === currentSectionId) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        }
    }

    window.addEventListener('scroll', updateActiveSubnav, { passive: true });
    updateActiveSubnav();
});
</script>
@endsection
