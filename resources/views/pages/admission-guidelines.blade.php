@extends('layouts.app')

@section('title', $seo['title'] ?? 'Admission Guidelines - Advaita School of Excellence, Parbhani')
@section('meta_description', $seo['description'] ?? 'Official admission guidelines, age criteria, phased schedule, document checklists, and CBSE eligibility requirements for Pre-Primary to Grade X at Advaita School of Excellence, Parbhani.')
@section('meta_keywords', $seo['keywords'] ?? 'Advaita School admission guidelines, age criteria 30 June, CBSE admission rules Grade 9 10, Parbhani school admission process, required documents')

@section('content')
<div class="admission-page-wrapper">

    <!-- Hero Section -->
    <section class="admission-hero-section">
        <div class="admission-hero-bg-accent"></div>
        <div class="adv-container position-relative">
            <!-- Decorative SVG Waves -->
            <div class="admission-hero-doodles" aria-hidden="true">
                <svg width="120" height="40" viewBox="0 0 120 40" fill="none" class="doodle-wave">
                    <path d="M4 20C38 8 84 9 116 22" stroke="#F37021" stroke-width="3" stroke-linecap="round"/>
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
                        <span class="active">Admission Guidelines</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">PRE-PRIMARY TO GRADE X &middot; SESSION {{ $academicYear ?? '2026–27' }}</div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        Admission Guidelines &amp; <span class="highlight-serif">Eligibility Protocol.</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        Official, transparent guidelines covering minimum age criteria, phased implementation schedules, required documents, 5-step admission procedure, and CBSE regulatory compliance for Advaita School of Excellence, Parbhani.
                    </p>

                    <!-- Quick Navigation CTA Group -->
                    <div class="d-flex align-items-center gap-12 flex-wrap mt-20">
                        <a href="{{ route('admission-guidelines.download') }}" class="admission-btn-primary" title="Download Official Admission Guidelines PDF">
                            <i class="fa-solid fa-file-pdf"></i>
                            <span>Download Guidelines PDF</span>
                        </a>
                        <a href="{{ route('online-registration') }}" class="admission-btn-visit" style="background: rgba(8, 59, 122, 0.08); border-color: rgba(8, 59, 122, 0.2); color: #083B7A;">
                            <i class="fa-solid fa-file-pen"></i>
                            <span>Online Registration</span>
                        </a>
                        <a href="#documents-required" class="admission-btn-visit">
                            <i class="fa-solid fa-clipboard-check"></i>
                            <span>Check Required Documents</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Navigation Sub-bar -->
    <div class="admission-subnav-bar">
        <div class="adv-container">
            <nav class="admission-subnav-links" aria-label="Guidelines Section Navigation">
                <a href="#quick-actions" class="subnav-link">
                    <i class="fa-solid fa-bolt text-orange"></i>
                    <span>Quick Actions</span>
                </a>
                <a href="#age-criteria" class="subnav-link">
                    <i class="fa-solid fa-calendar-check text-navy"></i>
                    <span>A. Age Criteria &amp; Phased Rollout</span>
                </a>
                <a href="#documents-required" class="subnav-link">
                    <i class="fa-solid fa-file-shield text-purple"></i>
                    <span>B. Documents Required</span>
                </a>
                <a href="#admission-procedure" class="subnav-link">
                    <i class="fa-solid fa-list-ol text-green"></i>
                    <span>C. Admission Procedure</span>
                </a>
                <a href="#class-eligibility" class="subnav-link">
                    <i class="fa-solid fa-shield-halved text-blue"></i>
                    <span>D. Class Eligibility &amp; CBSE</span>
                </a>
                <a href="#important-instructions" class="subnav-link">
                    <i class="fa-solid fa-circle-exclamation text-orange"></i>
                    <span>E. Important Instructions</span>
                </a>
                <a href="#counsellor-helpline" class="subnav-link">
                    <i class="fa-solid fa-headset text-teal"></i>
                    <span>Helpline Desk</span>
                </a>
            </nav>
        </div>
    </div>

    <!-- Quick Actions Section -->
    <section class="admission-quick-actions-section" id="quick-actions">
        <div class="adv-container">
            <div class="section-header-pill">
                <span class="pill-badge">IMMEDIATE ACTIONS</span>
                <h2 class="pill-title">Admissions Quick Actions &amp; Verified Contacts</h2>
                <p class="pill-subtitle">Direct, verified access to download documents, connect with counsellors, navigate to our campus, and start registration.</p>
            </div>

            <div class="qa-grid-container">
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
                <div class="qa-card highlight-card">
                    <div>
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap orange" aria-hidden="true">
                                <i class="fa-solid fa-file-arrow-down"></i>
                            </div>
                            <span class="qa-badge orange">Official PDF</span>
                        </div>
                        <div class="qa-card-body">
                            <h3 class="qa-card-title">2. Download Admission Guidelines</h3>
                            <p class="qa-card-desc">Official PDF document containing full age tables, document checklists, and CBSE regulations.</p>
                        </div>
                    </div>
                    <div class="qa-card-footer">
                        <a href="{{ route('admission-guidelines.download') }}" class="btn-qa-action orange" title="Download Admission Guidelines PDF">
                            <i class="fa-solid fa-file-pdf me-1" aria-hidden="true"></i>
                            <span>Download Official PDF</span>
                        </a>
                        <a href="{{ route('admission-guidelines.print') }}" target="_blank" class="btn-qa-action outline mt-2" style="font-size: 13px;">
                            <i class="fa-solid fa-print me-1" aria-hidden="true"></i>
                            <span>Print Preview</span>
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
                            <span class="qa-badge navy">7 Categories</span>
                        </div>
                        <div class="qa-card-body">
                            <h3 class="qa-card-title">3. Check Required Documents</h3>
                            <p class="qa-card-desc">Comprehensive 7-point checklist required for student registration and confirmation.</p>
                        </div>
                    </div>
                    <div class="qa-card-footer">
                        <a href="#documents-required" class="btn-qa-action outline">
                            <i class="fa-solid fa-list-check me-1" aria-hidden="true"></i>
                            <span>Check Required Documents</span>
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
                            <span>Talk to an Admission Counsellor</span>
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
                            <span>Get Directions to School</span>
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

                <!-- 7. WhatsApp Enquiry -->
                <div class="qa-card" style="border-color: #86efac; background: linear-gradient(180deg, #f0fdf4 0%, #ffffff 100%);">
                    <div>
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap whatsapp" aria-hidden="true">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <span class="qa-badge green">Instant Chat</span>
                        </div>
                        <div class="qa-card-body">
                            <h3 class="qa-card-title" style="color: #166534;">7. WhatsApp Enquiry</h3>
                            <p class="qa-card-desc">Chat directly with the admissions team. Pre-filled enquiry is ready for your questions.</p>
                        </div>
                    </div>
                    <div class="qa-card-footer">
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener noreferrer" class="btn-qa-action whatsapp">
                            <i class="fa-brands fa-whatsapp me-1" aria-hidden="true"></i>
                            <span>WhatsApp Enquiry</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION A: AGE CRITERIA & PHASED IMPLEMENTATION -->
    <section class="admission-section-wrapper" id="age-criteria">
        <div class="adv-container">
            <div class="section-header-pill">
                <span class="pill-badge">SECTION A</span>
                <h2 class="pill-title">Age Criteria &amp; Phased Implementation Schedule</h2>
                <p class="pill-subtitle">Admissions adhere strictly to statutory age requirements and phased foundation stages.</p>
            </div>

            <!-- Cut-off Highlight Banner -->
            <div class="guidelines-cutoff-banner">
                <div class="cutoff-icon-wrap">
                    <i class="fa-solid fa-calendar-star"></i>
                </div>
                <div class="cutoff-content">
                    <div class="cutoff-title">Prescribed Age Cut-Off Date: <strong>{{ $cutoffDate ?? '30 June' }}</strong></div>
                    <p class="cutoff-desc">
                        The candidate's age must satisfy the prescribed criteria as on <strong>{{ $cutoffDate ?? '30 June' }}</strong> of the academic year for which admission is sought. Applicable state notifications and school education norms for the relevant session must be followed.
                    </p>
                </div>
                <div class="cutoff-badge">
                    <span>OFFICIAL CUT-OFF</span>
                    <strong>30 JUNE</strong>
                </div>
            </div>

            <!-- Age Criteria Table -->
            <div class="guidelines-table-card mt-30">
                <div class="guidelines-table-header">
                    <div>
                        <h3 class="guidelines-table-title"><i class="fa-solid fa-table-list text-orange me-2"></i>Class-wise Minimum Age Matrix</h3>
                        <p class="guidelines-table-subtitle">Applicable for Nursery to Grade X under CBSE &amp; Maharashtra Education Department framework.</p>
                    </div>
                    <a href="{{ route('admission-guidelines.download') }}" class="btn-guidelines-sm">
                        <i class="fa-solid fa-file-arrow-down me-1"></i>
                        <span>Download Matrix</span>
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table guidelines-custom-table">
                        <thead>
                            <tr>
                                <th style="width: 22%;">Class / Grade</th>
                                <th style="width: 28%;">Minimum Age / Eligibility</th>
                                <th style="width: 50%;">Statutory Regulation &amp; Schedule Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ageCriteria as $item)
                            <tr>
                                <td>
                                    <div class="class-cell-badge">
                                        <strong>{{ $item['class'] }}</strong>
                                    </div>
                                </td>
                                <td>
                                    <span class="age-eligibility-highlight">
                                        <i class="fa-solid fa-circle-check text-green me-1"></i>
                                        {{ $item['eligibility'] }}
                                    </span>
                                </td>
                                <td>
                                    <div class="regulation-cell">
                                        <div class="schedule-tag {{ str_contains($item['phased_year'], 'Academic Year') ? 'phased' : 'active' }}">
                                            <i class="fa-solid fa-clock-rotate-left me-1"></i>
                                            {{ $item['phased_year'] }}
                                        </div>
                                        <div class="notes-text">{{ $item['notes'] }}</div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Phased Implementation Schedule Highlights -->
            <div class="phased-schedule-box mt-30">
                <div class="phased-box-header">
                    <div class="phased-badge">STATUTORY TIMELINE</div>
                    <h3 class="phased-box-title">Phased Implementation Schedule</h3>
                    <p class="phased-box-desc">As per official educational guidelines, the foundational age restructuring follows this planned schedule:</p>
                </div>
                <div class="phased-cards-grid">
                    @foreach($phasedSchedule as $phase)
                    <div class="phased-step-card">
                        <div class="phase-number">{{ $loop->iteration }}</div>
                        <div class="phase-grade">{{ $phase['grade'] }}</div>
                        <div class="phase-year">{{ $phase['year'] }}</div>
                        <div class="phase-status"><i class="fa-regular fa-calendar-check me-1"></i>{{ $phase['status'] }}</div>
                    </div>
                    @endforeach
                </div>

                <!-- Regulatory Disclaimer -->
                <div class="guidelines-disclaimer-card">
                    <i class="fa-solid fa-scale-balanced disclaimer-icon"></i>
                    <div class="disclaimer-text">
                        <strong>Official Policy &amp; Government Directive Notice:</strong>
                        The age criteria and phased implementation schedule are subject to applicable government notifications (Government of Maharashtra School Education Department) and Advaita School of Excellence policy.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION B: DOCUMENTS REQUIRED -->
    <section class="admission-section-wrapper bg-light-alt" id="documents-required">
        <div class="adv-container">
            <div class="section-header-pill">
                <span class="pill-badge">SECTION B</span>
                <h2 class="pill-title">Documents Required for Admission</h2>
                <p class="pill-subtitle">All candidates must furnish authentic, verified documents to complete the enrolment procedure.</p>
            </div>

            <div class="docs-checklist-container">
                <div class="docs-header-bar">
                    <div class="docs-header-left">
                        <i class="fa-solid fa-folder-closed text-orange fs-4"></i>
                        <div>
                            <h3 class="docs-header-title">7-Category Verification Checklist</h3>
                            <p class="docs-header-sub">Submit copies along with originals for spot verification at the school office.</p>
                        </div>
                    </div>
                    <div class="docs-header-actions">
                        <a href="{{ route('admission-guidelines.download') }}" class="btn-guidelines-sm">
                            <i class="fa-solid fa-download me-1"></i>
                            <span>Print Checklist</span>
                        </a>
                        <a href="{{ route('online-registration') }}" class="btn-guidelines-primary">
                            <i class="fa-solid fa-file-pen me-1"></i>
                            <span>Apply for Admission</span>
                        </a>
                    </div>
                </div>

                <div class="docs-list-grid">
                    @foreach($requiredDocuments as $doc)
                    <div class="doc-item-card">
                        <div class="doc-item-number">{{ $doc['number'] }}</div>
                        <div class="doc-item-icon">
                            <i class="{{ $doc['icon'] }}"></i>
                        </div>
                        <div class="doc-item-content">
                            <div class="doc-item-top">
                                <h4 class="doc-item-title">{{ $doc['name'] }}</h4>
                                <span class="doc-item-badge">{{ $doc['badge'] }}</span>
                            </div>
                            <p class="doc-item-desc">{{ $doc['description'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="docs-verification-notice">
                    <i class="fa-solid fa-triangle-exclamation text-orange me-2"></i>
                    <span><strong>Verification Requirement:</strong> Original documents must be produced for physical verification during the interaction/fee payment stage. Photocopies will be retained for school registry archives.</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION C: ADMISSION PROCEDURE -->
    <section class="admission-section-wrapper" id="admission-procedure">
        <div class="adv-container">
            <div class="section-header-pill">
                <span class="pill-badge">SECTION C</span>
                <h2 class="pill-title">5-Step Admission Procedure</h2>
                <p class="pill-subtitle">A seamless, parent-friendly progression from initial application to final enrolment confirmation.</p>
            </div>

            <div class="procedure-sequence-wrapper">
                @foreach($procedureSteps as $step)
                <div class="procedure-sequence-item">
                    <div class="procedure-step-badge">
                        <span>STEP</span>
                        <strong>0{{ $step['step'] }}</strong>
                    </div>
                    <div class="procedure-card">
                        <div class="procedure-card-icon">
                            <i class="{{ $step['icon'] }}"></i>
                        </div>
                        <div class="procedure-card-body">
                            <h3 class="procedure-card-title">{{ $step['title'] }}</h3>
                            <p class="procedure-card-desc">{{ $step['desc'] }}</p>
                            @if($step['step'] === 1)
                            <div class="mt-12">
                                <a href="{{ route('online-registration') }}" class="btn-step-action">
                                    <i class="fa-solid fa-arrow-up-right-from-square me-1"></i>
                                    <span>Open Online Registration Form</span>
                                </a>
                            </div>
                            @elseif($step['step'] === 2)
                            <div class="mt-12">
                                <a href="#documents-required" class="btn-step-action secondary">
                                    <i class="fa-solid fa-list-check me-1"></i>
                                    <span>Review 7 Document Categories</span>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Big Call to Action Banner -->
            <div class="procedure-cta-banner mt-40">
                <div class="cta-banner-content">
                    <span class="cta-banner-eyebrow">READY TO PROCEED?</span>
                    <h3 class="cta-banner-title">Start Your Child's Enrolment Today</h3>
                    <p class="cta-banner-desc">Complete the online registration form in under 10 minutes to reserve your preference.</p>
                </div>
                <div class="cta-banner-buttons">
                    <a href="{{ route('online-registration') }}" class="btn-cta-main">
                        <i class="fa-solid fa-file-pen me-2"></i>
                        <span>Online Registration</span>
                    </a>
                    <a href="tel:{{ $counsellorPhone }}" class="btn-cta-alt">
                        <i class="fa-solid fa-headset me-2"></i>
                        <span>Talk to Counsellor ({{ $counsellorPhone }})</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION D: CLASS ELIGIBILITY -->
    <section class="admission-section-wrapper bg-light-alt" id="class-eligibility">
        <div class="adv-container">
            <div class="section-header-pill">
                <span class="pill-badge">SECTION D</span>
                <h2 class="pill-title">Class Eligibility &amp; CBSE Rules</h2>
                <p class="pill-subtitle">Mandatory eligibility parameters governing admission into middle school, secondary grades, and board classes.</p>
            </div>

            <div class="class-eligibility-grid">
                @foreach($classEligibility as $el)
                <div class="eligibility-card {{ str_contains($el['classes'], 'Grade X') ? 'restricted-card' : '' }}">
                    <div class="eligibility-card-header">
                        <div class="eligibility-icon-wrap">
                            <i class="{{ $el['icon'] }}"></i>
                        </div>
                        <div>
                            <span class="eligibility-grade-badge">{{ $el['classes'] }}</span>
                            <h3 class="eligibility-rule-title">{{ $el['rule'] }}</h3>
                        </div>
                    </div>
                    <div class="eligibility-card-body">
                        <p class="eligibility-detail-text">{{ $el['detail'] }}</p>
                    </div>
                    <div class="eligibility-card-footer">
                        @if(str_contains($el['classes'], 'Grade X'))
                        <div class="cbse-warning-tag">
                            <i class="fa-solid fa-triangle-exclamation me-1"></i>
                            <span>CBSE Examination Bye-Laws: No Direct Admission</span>
                        </div>
                        @else
                        <div class="cbse-ok-tag">
                            <i class="fa-solid fa-circle-check me-1"></i>
                            <span>Subject to Valid Transfer Certificate</span>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SECTION E: IMPORTANT INSTRUCTIONS -->
    <section class="admission-section-wrapper" id="important-instructions">
        <div class="adv-container">
            <div class="section-header-pill">
                <span class="pill-badge">SECTION E</span>
                <h2 class="pill-title">Important Instructions &amp; Mandatory Notices</h2>
                <p class="pill-subtitle">Essential guidelines that parents, applicants, and guardians must note before submitting applications.</p>
            </div>

            <div class="important-instructions-card">
                <div class="instructions-header">
                    <i class="fa-solid fa-shield-halved text-orange fs-3"></i>
                    <div>
                        <h3 class="instructions-title">Institutional Terms &amp; Compliance Requirements</h3>
                        <p class="instructions-subtitle">Applicable for Academic Session {{ $academicYear }}</p>
                    </div>
                </div>

                <div class="instructions-list">
                    @foreach($importantInstructions as $ins)
                    <div class="instruction-item">
                        <div class="instruction-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="instruction-text">
                            {{ $ins }}
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="instructions-footer-note">
                    <i class="fa-solid fa-clock-rotate-left me-2 text-navy"></i>
                    <span>For any clarifications on eligibility criteria or documentation, please contact the Admission Counsellor desk immediately.</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Counsellor & Quick Contact Helpline -->
    <section class="admission-helpline-section" id="counsellor-helpline">
        <div class="adv-container">
            <div class="helpline-card">
                <div class="helpline-left">
                    <span class="helpline-eyebrow">DEDICATED ADMISSION ASSISTANCE</span>
                    <h3 class="helpline-title">Speak with Ms. Vaishnavi, Admission Counsellor</h3>
                    <p class="helpline-desc">
                        Have queries regarding minimum age criteria, previous class documents, or CBSE board registration? Our counsellor desk provides direct, personalized guidance for parents.
                    </p>
                    <div class="helpline-meta-list">
                        <div class="meta-item">
                            <i class="fa-solid fa-phone text-orange"></i>
                            <span>Counsellor Phone: <strong>{{ $counsellorPhone }}</strong></span>
                        </div>
                        <div class="meta-item">
                            <i class="fa-solid fa-building text-orange"></i>
                            <span>School Lines: <strong>{{ $schoolPhone1 }} / {{ $schoolPhone2 }}</strong></span>
                        </div>
                        <div class="meta-item">
                            <i class="fa-solid fa-location-dot text-orange"></i>
                            <span>{{ $campusAddress }}</span>
                        </div>
                    </div>
                </div>

                <div class="helpline-right">
                    <div class="helpline-buttons-stack">
                        <a href="tel:{{ $counsellorPhone }}" class="btn-helpline-call">
                            <i class="fa-solid fa-phone"></i>
                            <span>Talk to Admission Counsellor</span>
                        </a>
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener noreferrer" class="btn-helpline-wa">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span>WhatsApp Enquiry ({{ $counsellorPhone }})</span>
                        </a>
                        <a href="{{ $directionsUrl }}" target="_blank" rel="noopener noreferrer" class="btn-helpline-dir">
                            <i class="fa-solid fa-diamond-turn-right"></i>
                            <span>Get Directions to School</span>
                        </a>
                        <a href="{{ route('admission-guidelines.download') }}" class="btn-helpline-pdf">
                            <i class="fa-solid fa-file-pdf"></i>
                            <span>Download Admission Guidelines PDF</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
