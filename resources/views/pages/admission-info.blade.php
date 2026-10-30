@extends('layouts.app')

@section('title', "Admission Information (" . ($academicYear ?? '2026-27') . ") - Advaita School of Excellence, Parbhani | Process, Documents & Fees")

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/admissions.css') }}?v={{ file_exists(public_path('assets/css/admissions.css')) ? filemtime(public_path('assets/css/admissions.css')) : '1.0' }}">
@endsection

@section('content')
<main id="main" class="main-content-wrapper admission-page-wrapper">

    <!-- Flash message alerts -->
    @if(session('success'))
    <div class="admission-section-container pt-20">
        <div class="alert alert-success d-flex align-items-center justify-content-between p-16 rounded-16" style="background: #DCFCE7; border: 1.5px solid #86EFAC; color: #166534;">
            <div class="d-flex align-items-center gap-10">
                <i class="fa-solid fa-circle-check fs-20 text-success"></i>
                <span class="fs-14 font-bold">{{ session('success') }}</span>
            </div>
            <button type="button" class="btn-close" onclick="this.parentElement.remove()" aria-label="Close"></button>
        </div>
    </div>
    @endif

    <!-- =========================================================================
         1. HERO SECTION: Breadcrumb + Title + Visual with School & Students
         ========================================================================= -->
    <section class="admission-hero-section">
        <div class="admission-hero-canvas">
            <!-- Hero Composite Visual: School Campus Building + 3 Students Cutout (Crystal Clear Full HD) -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <div class="admission-hero-building-layer">
                    <img src="{{ asset($content['hero_building_image'] ?? 'assets/images/about-hero-building.jpg') }}" alt="Advaita Campus Building" class="admission-hero-building-img" width="1024" height="731">
                </div>
                <div class="admission-hero-students-layer">
                    <img src="{{ asset($content['hero_students_image'] ?? 'assets/images/about-cta-students-clean.png') }}" alt="Advaita Students" width="1024" height="682">
                </div>
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
                <span class="script-title">{{ $content['hero_script'] ?? 'More Than A School' }}</span>
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
                    <div class="admission-eyebrow">{{ $content['hero_badge'] ?? 'ADMISSIONS' }}</div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        {!! nl2br(e($content['hero_title'] ?? "Begin Your Child's Journey at")) !!}
                        <span class="highlight-serif">{{ $content['hero_highlight'] ?? 'Advaita.' }}</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        {{ $content['hero_desc'] ?? 'A simple, transparent and supportive admission process designed to help your child take the right step towards a brighter future.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. FIVE-STEP ADMISSION PROCESS SECTION
         ========================================================================= -->
    <section class="admission-process-section" id="admission-process">
        <div class="admission-section-container">
            <div class="admission-section-header">
                <div class="admission-eyebrow">{{ $content['process_eyebrow'] ?? '— THE ADMISSION PROCESS —' }}</div>
                <h2 class="admission-section-title">
                    {{ $content['process_title'] ?? 'From application to' }}
                    <span class="highlight-serif">{{ $content['process_highlight'] ?? 'welcome,' }}</span>
                    {{ $content['process_suffix'] ?? 'in five clear steps.' }}
                </h2>
                <p class="admission-section-desc">
                    {{ $content['process_desc'] ?? 'Admission is open to all children, irrespective of caste, creed or community, and decisions are communicated transparently, on merit and fit.' }}
                </p>
            </div>

            <div class="admission-steps-wrapper">
                @foreach($admissionSteps ?? [] as $index => $step)
                @php
                    $actionType = $step['action_type'] ?? 'scroll';
                    $target = $step['target'] ?? '#';
                @endphp
                @if($actionType === 'scroll')
                <a href="{{ $target }}" class="admission-step-card step-interactive-card" title="Click to view {{ $step['title'] }}">
                @elseif($actionType === 'enquiry_modal')
                <button type="button" onclick="openEnquiryModal()" class="admission-step-card step-interactive-card text-start" title="Open Quick Enquiry Form">
                @elseif($actionType === 'link')
                <a href="{{ $target }}" class="admission-step-card step-interactive-card" title="Go to {{ $step['title'] }}">
                @else
                <div class="admission-step-card">
                @endif
                    <span class="step-num-pill {{ $step['badge_class'] ?? 'step-pill-orange' }}">{{ $step['step'] ?? sprintf('%02d', $index + 1) }}</span>
                    <div class="step-icon-box {{ $step['icon_class'] ?? 'step-icon-orange' }}" aria-hidden="true">
                        <i class="{{ $step['icon'] ?? 'fa-solid fa-circle-check' }}"></i>
                    </div>
                    <h3 class="step-card-title">{{ $step['title'] }}</h3>
                    <p class="step-card-desc">{{ $step['desc'] }}</p>
                    <span class="step-action-hint">
                        @if($actionType === 'enquiry_modal')
                            <span>Open Form</span> <i class="fa-solid fa-arrow-up-right-from-square fs-10"></i>
                        @elseif($actionType === 'link')
                            <span>Register Now</span> <i class="fa-solid fa-arrow-right fs-10"></i>
                        @else
                            <span>Explore Step</span> <i class="fa-solid fa-arrow-down fs-10"></i>
                        @endif
                    </span>
                @if($actionType === 'scroll' || $actionType === 'link')
                </a>
                @elseif($actionType === 'enquiry_modal')
                </button>
                @else
                </div>
                @endif

                @if(!$loop->last)
                <div class="step-arrow-divider" aria-hidden="true">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. ADMISSION INFORMATION & GUIDELINES (SPLIT WITH STUDENT PHOTO)
         ========================================================================= -->
    <section class="admission-info-split-section" id="admission-guidelines">
        <div class="admission-section-container">
            <div class="admission-split-grid">
                <!-- Left Column: Student Image from Design Mockup -->
                <div class="admission-split-media">
                    <div class="admission-student-image-card">
                        <img src="{{ asset($content['guidelines_image'] ?? 'assets/images/admission-guidelines-student.jpg') }}" 
                             alt="Student learning attentively at Advaita School of Excellence" 
                             class="admission-student-img">
                    </div>
                </div>

                <!-- Right Column: Information & 4-Grid Cards -->
                <div class="admission-split-content">
                    <div class="admission-eyebrow">{{ $content['guidelines_eyebrow'] ?? '— ADMISSION INFORMATION —' }}</div>
                    <h2 class="admission-section-title text-start">
                        {{ $content['guidelines_title'] ?? 'Guidelines for a smooth start at' }}
                        <span class="highlight-serif">{{ $content['guidelines_highlight'] ?? 'Advaita.' }}</span>
                    </h2>
                    <p class="admission-split-desc">
                        {{ $content['guidelines_desc'] ?? 'We welcome applications from aspiring learners who are eager to grow in a nurturing and future-focused environment. Our admission process is fair, transparent and designed to ensure the best fit for every child.' }}
                    </p>

                    <!-- 2x2 Feature Mini-Cards Grid -->
                    <div class="admission-features-grid">
                        <div class="adm-feature-card">
                            <div class="afc-icon" aria-hidden="true">
                                <i class="fa-solid fa-user-graduate"></i>
                            </div>
                            <div class="afc-text">
                                <h4 class="afc-title">{{ $content['feature1_title'] ?? 'Classes Offered' }}</h4>
                                <p class="afc-desc">{{ $content['feature1_desc'] ?? 'Nursery to Class X (As per availability)' }}</p>
                            </div>
                        </div>

                        <div class="adm-feature-card">
                            <div class="afc-icon" aria-hidden="true">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                            <div class="afc-text">
                                <h4 class="afc-title">{{ $content['feature2_title'] ?? 'Eligibility' }}</h4>
                                <p class="afc-desc">{{ $content['feature2_desc'] ?? 'Age-appropriate as per class guidelines' }}</p>
                            </div>
                        </div>

                        <div class="adm-feature-card">
                            <div class="afc-icon" aria-hidden="true">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                            <div class="afc-text">
                                <h4 class="afc-title">{{ $content['feature3_title'] ?? 'Selection Process' }}</h4>
                                <p class="afc-desc">{{ $content['feature3_desc'] ?? 'Based on interaction and assessment (as applicable)' }}</p>
                            </div>
                        </div>

                        <div class="adm-feature-card">
                            <div class="afc-icon" aria-hidden="true">
                                <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="afc-text">
                                <h4 class="afc-title">{{ $content['feature4_title'] ?? 'Important Dates' }}</h4>
                                <p class="afc-desc">{{ $content['feature4_desc'] ?? ('Admissions open for the academic session ' . ($academicYear ?? '2026–27')) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. DOCUMENTS REQUIRED SECTION
         ========================================================================= -->
    <section class="admission-docs-section-v2" id="required-documents">
        <div class="admission-section-container">
            <div class="admission-section-header">
                <div class="admission-eyebrow">{{ $content['docs_eyebrow'] ?? '— DOCUMENTS REQUIRED —' }}</div>
                <h2 class="admission-section-title">
                    {{ $content['docs_title'] ?? 'Keep these ready for a' }}
                    <span class="highlight-serif">{{ $content['docs_highlight'] ?? 'faster process.' }}</span>
                </h2>
                <p class="admission-section-desc">
                    {{ $content['docs_desc'] ?? 'Please carry self-attested photocopies of the following documents at the time of admission.' }}
                </p>
            </div>

            <div class="docs-checklist-split-grid">
                <!-- Left Column: 10 Numbered Items -->
                <div class="docs-items-list">
                    @foreach($documentsList ?? [] as $doc)
                    <div class="doc-list-row {{ !empty($doc['options']) || !empty($doc['subtext']) ? 'has-subline' : '' }}">
                        <span class="doc-num-badge">{{ sprintf('%02d', $doc['number'] ?? $loop->iteration) }}</span>
                        <div class="doc-list-text">
                            <div>{{ $doc['title'] }}</div>
                            @if(!empty($doc['options']))
                            <div class="doc-options-subtext">
                                {{ implode('  |  ', $doc['options']) }}
                            </div>
                            @elseif(!empty($doc['subtext']))
                            <div class="doc-options-subtext">
                                {{ $doc['subtext'] }}
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Right Column: Clipboard Checklist Visual from Design Image -->
                <div class="docs-checklist-media">
                    <div class="docs-clipboard-card">
                        <img src="{{ asset($content['docs_image'] ?? 'assets/images/admission-required-documents.jpg') }}" 
                             alt="Required Documents Checklist on Clipboard" 
                             class="docs-clipboard-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. TWO ACTION CARDS: QUICK ENQUIRY vs ONLINE REGISTRATION
         ========================================================================= -->
    <section class="admission-dual-cta-section">
        <div class="admission-section-container">
            <div class="dual-cta-grid">
                <!-- Card 1: Quick Enquiry Registration -->
                <div class="cta-action-box orange-box">
                    <div class="cta-box-content">
                        <span class="cta-tag-pill orange-pill">{{ $content['qe_tag'] ?? 'QUICK ENQUIRY REGISTRATION' }}</span>
                        <h3 class="cta-box-title">{{ $content['qe_title'] ?? "Share a few details and we'll get in touch." }}</h3>
                        <p class="cta-box-desc">{{ $content['qe_desc'] ?? 'Fill in your basic details and our admissions team will connect with you shortly.' }}</p>
                        
                        <button type="button" onclick="openEnquiryModal()" class="btn-cta-action orange-btn">
                            <span>{{ $content['qe_btn'] ?? 'Quick Enquiry Form' }}</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                    <div class="cta-box-graphic" aria-hidden="true">
                        <img src="{{ asset($content['qe_graphic'] ?? 'assets/images/admission-qe-graphic.png') }}" 
                             alt="Quick Enquiry Illustration" 
                             class="cta-box-img">
                    </div>
                </div>

                <!-- Card 2: Online Admission Registration -->
                <div class="cta-action-box blue-box">
                    <div class="cta-box-content">
                        <span class="cta-tag-pill blue-pill">{{ $content['online_tag'] ?? 'ONLINE ADMISSION REGISTRATION' }}</span>
                        <h3 class="cta-box-title">{{ $content['online_title'] ?? 'Ready to apply? Complete the online form.' }}</h3>
                        <p class="cta-box-desc">{{ $content['online_desc'] ?? 'Fill in the detailed application form to formally register your ward for admission.' }}</p>
                        
                        <a href="{{ route('online-registration') }}" class="btn-cta-action blue-btn">
                            <span>{{ $content['online_btn'] ?? 'Apply Online' }}</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="cta-box-graphic" aria-hidden="true">
                        <img src="{{ asset($content['online_graphic'] ?? 'assets/images/admission-online-graphic.png') }}" 
                             alt="Online Registration Application" 
                             class="cta-box-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. FEE STRUCTURE SECTION
         ========================================================================= -->
    <section class="admission-fee-section-v2" id="fee-structure">
        <div class="admission-section-container">
            <div class="admission-section-header">
                <div class="admission-eyebrow">{{ $content['fee_eyebrow'] ?? '— FEE STRUCTURE —' }}</div>
                <h2 class="admission-section-title">
                    {{ $content['fee_title'] ?? 'Fees, paid in' }}
                    <span class="highlight-serif">{{ $content['fee_highlight'] ?? 'simple terms.' }}</span>
                </h2>
                <p class="admission-section-desc">
                    {{ $content['fee_desc'] ?? 'Our fee structure is designed to be fair, transparent and value-driven.' }}
                </p>
            </div>

            <!-- Two Main Class Cards -->
            <div class="fee-band-cards-grid">
                <div class="fee-band-card">
                    <div class="fbc-left">
                        <div class="fbc-icon-circle" aria-hidden="true">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <div class="fbc-info">
                            <h3 class="fbc-title">{{ $content['fee_band1_title'] ?? 'Classes I to V' }}</h3>
                            <p class="fbc-subtitle">{{ $content['fee_band1_subtitle'] ?? 'Strong foundation for a bright future.' }}</p>
                        </div>
                    </div>
                    <div class="fbc-right">
                        <button type="button" onclick="openFeeModal('primary')" class="btn-fee-band" aria-label="View Fee Details for Classes I to V">
                            <span>View Fee Details</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <div class="fee-band-card">
                    <div class="fbc-left">
                        <div class="fbc-icon-circle" aria-hidden="true">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div class="fbc-info">
                            <h3 class="fbc-title">{{ $content['fee_band2_title'] ?? 'Classes VI to X' }}</h3>
                            <p class="fbc-subtitle">{{ $content['fee_band2_subtitle'] ?? 'Empowering learners for higher goals.' }}</p>
                        </div>
                    </div>
                    <div class="fbc-right">
                        <button type="button" onclick="openFeeModal('secondary')" class="btn-fee-band" aria-label="View Fee Details for Classes VI to X">
                            <span>View Fee Details</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- 4 Information Cards in a row (Clickable to open corresponding fee tab) -->
            <div class="fee-info-row-grid">
                <div class="fee-info-pill-card clickable-pill" onclick="openFeeModal('primary')" role="button" tabindex="0" title="Click to view Annual Fee Details">
                    <div class="fip-icon blue" aria-hidden="true">
                        <i class="fa-regular fa-file-lines"></i>
                    </div>
                    <div class="fip-text">
                        <h4 class="fip-title">{{ $content['fee_info1_title'] ?? 'Annual Fee Details' }}</h4>
                        <p class="fip-desc">{{ $content['fee_info1_desc'] ?? 'Tuition, development and other charges' }}</p>
                    </div>
                </div>

                <div class="fee-info-pill-card clickable-pill" onclick="openFeeModal('transport')" role="button" tabindex="0" title="Click to view Transport Charges">
                    <div class="fip-icon green" aria-hidden="true">
                        <i class="fa-solid fa-bus"></i>
                    </div>
                    <div class="fip-text">
                        <h4 class="fip-title">{{ $content['fee_info2_title'] ?? 'Transport Charges' }}</h4>
                        <p class="fip-desc">{{ $content['fee_info2_desc'] ?? 'Route-wise transport facility details' }}</p>
                    </div>
                </div>

                <div class="fee-info-pill-card clickable-pill" onclick="openFeeModal('schedule')" role="button" tabindex="0" title="Click to view Payment Schedule">
                    <div class="fip-icon pink" aria-hidden="true">
                        <i class="fa-regular fa-calendar-check"></i>
                    </div>
                    <div class="fip-text">
                        <h4 class="fip-title">{{ $content['fee_info3_title'] ?? 'Payment Schedule' }}</h4>
                        <p class="fip-desc">{{ $content['fee_info3_desc'] ?? 'Term-wise / annual payment options' }}</p>
                    </div>
                </div>

                <div class="fee-info-pill-card clickable-pill" onclick="openFeeModal('schedule')" role="button" tabindex="0" title="Click to view Important Notes">
                    <div class="fip-icon cyan" aria-hidden="true">
                        <i class="fa-solid fa-circle-info"></i>
                    </div>
                    <div class="fip-text">
                        <h4 class="fip-title">{{ $content['fee_info4_title'] ?? 'Important Notes' }}</h4>
                        <p class="fip-desc">{{ $content['fee_info4_desc'] ?? 'Fees are subject to the school policy for the academic session.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         7. BOTTOM CTA BANNER: READY TO TAKE THE FIRST STEP?
         ========================================================================= -->
    <section class="admission-cta-banner-section">
        <div class="admission-section-container">
            <div class="admission-peach-cta-box">
                <div class="apc-left">
                    <span class="apc-pill">{{ $content['cta_pill'] ?? "LET'S BEGIN TOGETHER" }}</span>
                    <h2 class="apc-title">{{ $content['cta_title'] ?? 'Ready to take the first step?' }}</h2>
                    <p class="apc-desc">{{ $content['cta_desc'] ?? 'Apply now and give your child the opportunity to grow, learn and excel at Advaita.' }}</p>
                </div>
                <div class="apc-actions">
                    <a href="{{ route('online-registration') }}" class="btn-apc-primary">
                        <span>{{ $content['cta_primary_btn'] ?? 'Apply for Admission' }}</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="{{ route('contact') }}" class="btn-apc-secondary">
                        <i class="fa-regular fa-calendar-check"></i>
                        <span>{{ $content['cta_secondary_btn'] ?? 'Schedule a Campus Visit' }}</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         8. DYNAMIC INTERACTIVE FEE DETAILS MODAL
         ========================================================================= -->
    <div id="advFeeModal" class="adv-enquiry-modal-backdrop" aria-hidden="true">
        <div class="adv-enquiry-modal-card fee-modal-card" role="dialog" aria-modal="true" aria-labelledby="feeModalTitle">
            <div class="aem-header">
                <div class="d-flex align-items-center gap-10">
                    <div class="fbc-icon-circle" style="width: 36px; height: 36px; font-size: 1rem;" aria-hidden="true">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                    </div>
                    <div>
                        <h3 class="aem-title" id="feeModalTitle">Fee Structure & Schedule</h3>
                        <span class="fs-12 text-white-50">Academic Session {{ $academicYear ?? '2026–27' }}</span>
                    </div>
                </div>
                <button type="button" class="aem-close-btn" onclick="closeFeeModal()" aria-label="Close dialog">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <!-- Tab Navigation Header -->
            <div class="fee-modal-tabs-nav">
                <button type="button" class="fee-tab-btn active" data-tab="primary" onclick="switchFeeTab('primary')">
                    <i class="fa-solid fa-book-open"></i>
                    <span>Classes I–V</span>
                </button>
                <button type="button" class="fee-tab-btn" data-tab="secondary" onclick="switchFeeTab('secondary')">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span>Classes VI–X</span>
                </button>
                <button type="button" class="fee-tab-btn" data-tab="transport" onclick="switchFeeTab('transport')">
                    <i class="fa-solid fa-bus"></i>
                    <span>Transport</span>
                </button>
                <button type="button" class="fee-tab-btn" data-tab="schedule" onclick="switchFeeTab('schedule')">
                    <i class="fa-regular fa-calendar-check"></i>
                    <span>Policy & Terms</span>
                </button>
            </div>

            <div class="aem-body fee-modal-body">
                <!-- Tab Pane 1: Classes I to V -->
                <div class="fee-tab-pane active" id="feeTabPane-primary">
                    <div class="fee-pane-header">
                        <span class="fee-wing-badge orange">PRIMARY WING</span>
                        <h4 class="fee-pane-title">Classes I to V — Detailed Breakdown</h4>
                        <p class="fee-pane-desc">Tuition, term installments and annual structure designed for foundational primary education.</p>
                    </div>

                    @if(isset($primaryFees) && $primaryFees->count() > 0)
                    <div class="table-responsive fee-table-wrap">
                        <table class="table fee-details-table">
                            <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Admission Fee</th>
                                    <th>Tuition Fee</th>
                                    <th>Term 1</th>
                                    <th>Term 2</th>
                                    <th>Term 3</th>
                                    <th>Annual Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($primaryFees as $fee)
                                <tr>
                                    <td class="font-bold text-navy">{{ $fee->class_name }}</td>
                                    <td>₹{{ number_format($fee->admission_fee) }}</td>
                                    <td>₹{{ number_format($fee->tuition_fee) }}</td>
                                    <td>₹{{ number_format($fee->term1_fee) }}</td>
                                    <td>₹{{ number_format($fee->term2_fee) }}</td>
                                    <td>₹{{ number_format($fee->term3_fee) }}</td>
                                    <td class="font-bold text-orange">₹{{ number_format($fee->annual_total) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="fee-fallback-slab-grid">
                        <div class="fee-slab-card">
                            <span class="slab-badge">Class 1 & 2</span>
                            <div class="slab-amount">₹32,000 <span class="fs-12 text-muted">/ year</span></div>
                            <div class="slab-terms">Term 1: ₹12,000 | Term 2: ₹10,000 | Term 3: ₹10,000</div>
                        </div>
                        <div class="fee-slab-card">
                            <span class="slab-badge">Class 3 to 5</span>
                            <div class="slab-amount">₹36,000 <span class="fs-12 text-muted">/ year</span></div>
                            <div class="slab-terms">Term 1: ₹14,000 | Term 2: ₹11,000 | Term 3: ₹11,000</div>
                        </div>
                    </div>
                    @endif

                    <div class="fee-notice-banner mt-16">
                        <i class="fa-solid fa-circle-info text-blue"></i>
                        <span>{{ $feePolicyNote ?? 'Fees can be conveniently paid in three term-wise installments or an annual one-time payment.' }}</span>
                    </div>
                </div>

                <!-- Tab Pane 2: Classes VI to X -->
                <div class="fee-tab-pane" id="feeTabPane-secondary">
                    <div class="fee-pane-header">
                        <span class="fee-wing-badge purple">SECONDARY WING</span>
                        <h4 class="fee-pane-title">Classes VI to X — Detailed Breakdown</h4>
                        <p class="fee-pane-desc">Empowering learners with modern science labs, computer education, and competitive exam foundations.</p>
                    </div>

                    @if(isset($secondaryFees) && $secondaryFees->count() > 0)
                    <div class="table-responsive fee-table-wrap">
                        <table class="table fee-details-table">
                            <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Admission Fee</th>
                                    <th>Tuition Fee</th>
                                    <th>Term 1</th>
                                    <th>Term 2</th>
                                    <th>Term 3</th>
                                    <th>Annual Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($secondaryFees as $fee)
                                <tr>
                                    <td class="font-bold text-navy">{{ $fee->class_name }}</td>
                                    <td>₹{{ number_format($fee->admission_fee) }}</td>
                                    <td>₹{{ number_format($fee->tuition_fee) }}</td>
                                    <td>₹{{ number_format($fee->term1_fee) }}</td>
                                    <td>₹{{ number_format($fee->term2_fee) }}</td>
                                    <td>₹{{ number_format($fee->term3_fee) }}</td>
                                    <td class="font-bold text-orange">₹{{ number_format($fee->annual_total) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="fee-fallback-slab-grid">
                        <div class="fee-slab-card">
                            <span class="slab-badge">Class 6 to 8</span>
                            <div class="slab-amount">₹42,000 <span class="fs-12 text-muted">/ year</span></div>
                            <div class="slab-terms">Term 1: ₹16,000 | Term 2: ₹13,000 | Term 3: ₹13,000</div>
                        </div>
                        <div class="fee-slab-card">
                            <span class="slab-badge">Class 9 & 10</span>
                            <div class="slab-amount">₹48,000 <span class="fs-12 text-muted">/ year</span></div>
                            <div class="slab-terms">Term 1: ₹18,000 | Term 2: ₹15,000 | Term 3: ₹15,000</div>
                        </div>
                    </div>
                    @endif

                    <div class="fee-notice-banner mt-16">
                        <i class="fa-solid fa-circle-info text-blue"></i>
                        <span>Includes computer lab, science laboratory, and co-curricular programs. Board registration charges extra as per CBSE norms.</span>
                    </div>
                </div>

                <!-- Tab Pane 3: Transport Charges -->
                <div class="fee-tab-pane" id="feeTabPane-transport">
                    <div class="fee-pane-header">
                        <span class="fee-wing-badge green">BUS SERVICE</span>
                        <h4 class="fee-pane-title">Safe & Tracked School Bus Facility</h4>
                        <p class="fee-pane-desc">Our buses are fitted with GPS tracking, CCTV surveillance, speed governors, and trained attendants.</p>
                    </div>

                    <div class="transport-routes-list">
                        @foreach($transportRoutes ?? [] as $tr)
                        <div class="tr-route-row">
                            <div class="tr-icon-box"><i class="{{ $tr['icon'] ?? 'fa-solid fa-bus' }}"></i></div>
                            <div class="tr-info">
                                <h5 class="tr-name">{{ $tr['route'] }}</h5>
                                <p class="tr-stops">{{ $tr['coverage'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="fee-notice-banner mt-16">
                        <i class="fa-solid fa-location-dot text-green"></i>
                        <span>Transport fees are calculated route-wise and paid in term installments. Contact our transport coordinator for custom stop inquiries.</span>
                    </div>
                </div>

                <!-- Tab Pane 4: Payment Schedule & Policy -->
                <div class="fee-tab-pane" id="feeTabPane-schedule">
                    <div class="fee-pane-header">
                        <span class="fee-wing-badge blue">PAYMENT POLICY</span>
                        <h4 class="fee-pane-title">Installment Schedule & Transparency Policy</h4>
                        <p class="fee-pane-desc">Clear, predictable deadlines with zero surprise expenses.</p>
                    </div>

                    <div class="schedule-timeline-grid">
                        <div class="timeline-step-card">
                            <div class="tsc-num">1st Installment</div>
                            <div class="tsc-title">At Admission / Re-opening</div>
                            <div class="tsc-desc">Due on or before 15th June. Covers admission, first term tuition, and development fund.</div>
                        </div>
                        <div class="timeline-step-card">
                            <div class="tsc-num">2nd Installment</div>
                            <div class="tsc-title">Mid-Term (Post-Diwali)</div>
                            <div class="tsc-desc">Due on or before 15th October. Covers term 2 tuition and semester examination fees.</div>
                        </div>
                        <div class="timeline-step-card">
                            <div class="tsc-num">3rd Installment</div>
                            <div class="tsc-title">Final Term</div>
                            <div class="tsc-desc">Due on or before 15th January. Final term settlement and annual assessment.</div>
                        </div>
                    </div>

                    <div class="fee-policy-bullets mt-16">
                        <div class="fpb-item">
                            <i class="fa-solid fa-circle-check text-success"></i>
                            <span><strong>Payment Modes:</strong> Online NetBanking, UPI, Debit/Credit Card, or Demand Draft / Cheque in favor of "Advaita School of Excellence".</span>
                        </div>
                        <div class="fpb-item">
                            <i class="fa-solid fa-circle-check text-success"></i>
                            <span><strong>Sibling Concession:</strong> Available for the second and third child as per management policy.</span>
                        </div>
                        <div class="fpb-item">
                            <i class="fa-solid fa-circle-check text-success"></i>
                            <span>{{ $feeTransparencyNote ?? 'No hidden charges or mandatory surprise fees. Detailed receipts are issued for all transactions.' }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="fee-modal-footer">
                <a href="{{ route('fee-structure') }}" class="btn-fee-page-link">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    <span>Official Fee Policy Page</span>
                </a>
                <button type="button" onclick="closeFeeModal(); openEnquiryModal();" class="btn-apc-primary py-8 px-18 fs-13">
                    <i class="fa-solid fa-paper-plane"></i>
                    <span>Enquire About Fees</span>
                </button>
            </div>
        </div>
    </div>

    <!-- =========================================================================
         9. INTERACTIVE QUICK ENQUIRY MODAL POPUP
         ========================================================================= -->
    <div id="advEnquiryModal" class="adv-enquiry-modal-backdrop" aria-hidden="true">
        <div class="adv-enquiry-modal-card" role="dialog" aria-modal="true" aria-labelledby="enquiryModalTitle">
            <div class="aem-header">
                <h3 class="aem-title" id="enquiryModalTitle">
                    <i class="fa-solid fa-paper-plane text-orange"></i>
                    <span>Quick Admission Enquiry</span>
                </h3>
                <button type="button" class="aem-close-btn" onclick="closeEnquiryModal()" aria-label="Close dialog">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="aem-body" id="enquiryModalBody">
                <!-- Live Alert Container -->
                <div id="modalAlertBox" style="display: none;" class="mb-14"></div>

                <form action="{{ route('admission-enquiry.store') }}" method="POST" id="quickAdmissionModalForm">
                    @csrf

                    <!-- Honeypot anti-spam -->
                    <div style="display:none !important;" aria-hidden="true">
                        <input type="text" name="website" tabindex="-1" autocomplete="off">
                        <input type="text" name="security_token_trap" tabindex="-1" autocomplete="off">
                    </div>

                    <input type="hidden" name="academic_year" value="{{ $academicYear ?? '2026-27' }}">

                    <div class="mb-14">
                        <label class="form-label font-bold text-navy fs-13 mb-4" for="modal_parent_name">
                            Parent / Guardian Name <span class="text-danger">*</span>
                        </label>
                        <div class="input-with-icon-wrap">
                            <i class="fa-regular fa-user"></i>
                            <input type="text" id="modal_parent_name" name="parent_name" 
                                   class="form-control" placeholder="e.g. Rameshwar Patil" required maxlength="255">
                        </div>
                    </div>

                    <div class="mb-14">
                        <label class="form-label font-bold text-navy fs-13 mb-4" for="modal_ward_name">
                            Ward / Child Name <span class="text-danger">*</span>
                        </label>
                        <div class="input-with-icon-wrap">
                            <i class="fa-solid fa-child"></i>
                            <input type="text" id="modal_ward_name" name="ward_name" 
                                   class="form-control" placeholder="e.g. Aarav Patil" required maxlength="255">
                        </div>
                    </div>

                    <div class="mb-14">
                        <label class="form-label font-bold text-navy fs-13 mb-4" for="modal_mobile_number">
                            Mobile Number (10 Digits) <span class="text-danger">*</span>
                        </label>
                        <div class="input-with-icon-wrap">
                            <i class="fa-solid fa-phone"></i>
                            <input type="tel" id="modal_mobile_number" name="mobile_number" 
                                   class="form-control" placeholder="e.g. 9822012345" required pattern="[6-9][0-9]{9}" maxlength="10">
                        </div>
                    </div>

                    <div class="mb-14">
                        <label class="form-label font-bold text-navy fs-13 mb-4" for="modal_applying_class">
                            Target Class
                        </label>
                        <div class="input-with-icon-wrap">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <select id="modal_applying_class" name="applying_class" class="form-control">
                                <option value="">Select target class...</option>
                                @foreach($classList ?? ['Nursery', 'LKG', 'UKG', 'Class 1', 'Class 2', 'Class 3', 'Class 4', 'Class 5', 'Class 6', 'Class 7', 'Class 8', 'Class 9', 'Class 10'] as $cls)
                                <option value="{{ $cls }}">{{ $cls }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-20">
                        <label class="form-label font-bold text-navy fs-13 mb-4" for="modal_notes">
                            Specific Questions / Notes (Optional)
                        </label>
                        <textarea id="modal_notes" name="notes" rows="2" class="form-control" 
                                  placeholder="e.g. Transport route, school timings, admission schedule..."></textarea>
                    </div>

                    <button type="submit" id="modalSubmitBtn" class="btn-apc-primary w-100 justify-content-center" style="border: none; cursor: pointer;">
                        <i class="fa-solid fa-paper-plane" id="modalSubmitIcon"></i>
                        <span id="modalSubmitText">Submit Enquiry</span>
                    </button>

                    <div class="text-center mt-12 text-muted fs-11">
                        <i class="fa-solid fa-shield-halved text-success me-1"></i> Your contact details will be kept confidential.
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>
@endsection

@section('scripts')
<script>
// ==========================================
// 1. Quick Enquiry Modal Management & AJAX
// ==========================================
function openEnquiryModal() {
    const modal = document.getElementById('advEnquiryModal');
    if (modal) {
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }
}

function closeEnquiryModal() {
    const modal = document.getElementById('advEnquiryModal');
    if (modal) {
        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }
}

// ==========================================
// 2. Fee Structure Interactive Modal
// ==========================================
function openFeeModal(tabName = 'primary') {
    const modal = document.getElementById('advFeeModal');
    if (modal) {
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        switchFeeTab(tabName);
    }
}

function closeFeeModal() {
    const modal = document.getElementById('advFeeModal');
    if (modal) {
        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }
}

function switchFeeTab(tabName) {
    // Map shortcut tab keys
    const tabMap = {
        'primary': 'primary',
        'secondary': 'secondary',
        'transport': 'transport',
        'schedule': 'schedule',
        'annual': 'primary',
        'notes': 'schedule'
    };
    const targetKey = tabMap[tabName] || 'primary';

    // Buttons
    document.querySelectorAll('.fee-tab-btn').forEach(btn => {
        btn.classList.toggle('active', btn.getAttribute('data-tab') === targetKey);
    });

    // Panes
    document.querySelectorAll('.fee-tab-pane').forEach(pane => {
        pane.classList.remove('active');
    });
    const targetPane = document.getElementById('feeTabPane-' + targetKey);
    if (targetPane) {
        targetPane.classList.add('active');
    }
}

// ==========================================
// 3. Modal Backdrop & Escape Key Handlers
// ==========================================
document.getElementById('advEnquiryModal')?.addEventListener('click', function(e) {
    if (e.target === this) closeEnquiryModal();
});

document.getElementById('advFeeModal')?.addEventListener('click', function(e) {
    if (e.target === this) closeFeeModal();
});

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeEnquiryModal();
        closeFeeModal();
    }
});

// ==========================================
// 5. AJAX Form Submission with Feedback
// ==========================================
document.getElementById('quickAdmissionModalForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    const form = this;
    const submitBtn = document.getElementById('modalSubmitBtn');
    const submitIcon = document.getElementById('modalSubmitIcon');
    const submitText = document.getElementById('modalSubmitText');
    const alertBox = document.getElementById('modalAlertBox');
    const bodyBox = document.getElementById('enquiryModalBody');

    // UI loading state
    if (submitBtn) submitBtn.disabled = true;
    if (submitIcon) submitIcon.className = 'fa-solid fa-spinner fa-spin';
    if (submitText) submitText.innerText = 'Submitting...';

    const formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        }
    })
    .then(response => {
        if (!response.ok) {
            return response.json().then(data => { throw data; });
        }
        return response.json();
    })
    .then(data => {
        const parentName = formData.get('parent_name') || 'Parent';
        const wardName = formData.get('ward_name') || 'Child';
        const phone = '{{ $counsellorPhone ?? "9689898973" }}';
        const counsellor = '{{ $counsellorName ?? "Ms. Vaishnavi" }}';

        if (bodyBox) {
            bodyBox.innerHTML = `
                <div class="aem-success-box">
                    <div class="asb-icon-wrap">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <h4 class="asb-title">Enquiry Received!</h4>
                    <p class="asb-desc">
                        Thank you, <strong>${parentName}</strong>! Your admission enquiry for <strong>${wardName}</strong> has been successfully registered. Our admission coordinator (<strong>${counsellor}</strong>) will contact you shortly.
                    </p>
                    <div class="d-flex flex-column gap-10">
                        <a href="https://wa.me/91${phone}?text=Hello%20${encodeURIComponent(counsellor)},%20I%20have%20submitted%20an%20admission%20enquiry%20for%20${encodeURIComponent(wardName)}." target="_blank" class="btn-apc-primary justify-content-center">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span>Chat on WhatsApp</span>
                        </a>
                        <button type="button" onclick="closeEnquiryModal()" class="btn-cta-action blue-btn justify-content-center py-10">
                            <span>Done</span>
                        </button>
                    </div>
                </div>
            `;
        }
    })
    .catch(error => {
        if (submitBtn) submitBtn.disabled = false;
        if (submitIcon) submitIcon.className = 'fa-solid fa-paper-plane';
        if (submitText) submitText.innerText = 'Submit Enquiry';

        if (alertBox) {
            let errorMsg = 'An error occurred while submitting. Please check your inputs and try again.';
            if (error && error.message) {
                errorMsg = error.message;
            } else if (error && error.errors) {
                errorMsg = Object.values(error.errors).flat().join('<br>');
            }
            alertBox.style.display = 'block';
            alertBox.className = 'alert alert-danger p-12 rounded-12 fs-13';
            alertBox.innerHTML = '<i class="fa-solid fa-circle-exclamation me-1"></i> ' + errorMsg;
        }
    });
});
</script>
@endsection
