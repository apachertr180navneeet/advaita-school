@extends('layouts.app')

@section('title', "Admission Information (" . ($academicYear ?? '2027-28') . ") - Advaita School of Excellence, Parbhani | Process, Documents & Fees")

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
            <!-- Hero Visual: School Campus Building -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <div class="admission-hero-building-layer">
                    <img src="{{ asset($content['hero_building_image'] ?? 'assets/images/about-hero-building.jpg') }}" alt="Advaita Campus Building" class="admission-hero-building-img" width="1024" height="731">
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
                <div class="admission-eyebrow">{{ $content['process_eyebrow'] ?? 'THE ADMISSION PROCESS' }}</div>
                <h2 class="admission-section-title">
                    {{ $content['process_title'] ?? 'From application to' }}
                    <span class="highlight-serif">{{ $content['process_highlight'] ?? 'welcome,' }}</span>
                    {{ $content['process_suffix'] ?? 'in five clear steps.' }}
                </h2>
                <p class="admission-section-desc">
                    {{ $content['process_desc'] ?? 'Admission is open to all children, irrespective of caste, creed or community, and decisions are communicated transparently, on merit and fit.' }}
                </p>
                <div class="steps-swipe-pill d-md-none mt-10">
                    <i class="fa-solid fa-arrows-left-right text-orange"></i>
                    <span>Swipe 5 steps horizontally</span>
                </div>
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
                <button type="button" onclick="openEnquiryModal()" class="admission-step-card step-interactive-card" title="Open Quick Enquiry Form">
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

            <!-- Quick Admission Enquiry Callout 1 (After 5-Step Process) -->
            <div class="adm-inline-enquiry-bar">
                <div class="aieb-content">
                    <span class="aieb-badge"><i class="fa-solid fa-bolt text-orange"></i> ADMISSIONS 2027–28 LIVE · NURSERY TO CLASS X</span>
                    <p class="aieb-lead"><strong>Ready to give your child an exceptional learning foundation?</strong> Limited seats per division to preserve our 1:15 student-teacher ratio. Get instant admission assistance today.</p>
                </div>
                <div class="aieb-buttons">
                    <button type="button" onclick="openEnquiryModal()" class="btn-enquiry-pill">
                        <i class="fa-solid fa-paper-plane"></i>
                        <span>Quick Admission Enquiry (30 Sec)</span>
                    </button>
                    <a href="tel:{{ $contactPhone ?? '9689898973' }}" class="btn-call-pill">
                        <i class="fa-solid fa-phone"></i>
                        <span>Call: {{ $counsellorPhone ?? '9689898973' }}</span>
                    </a>
                </div>
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
                    <h2 class="admission-section-title">
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
                                <p class="afc-desc">{{ preg_replace('/202[0-6][–\-\/](?:20)?2[0-7]/', ($academicYear ?? '2027–28'), $content['feature4_desc'] ?? ('Admissions open for the academic session ' . ($academicYear ?? '2027–28'))) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Admission Enquiry Callout 2 (After Guidelines) -->
            <div class="adm-inline-enquiry-bar alt-teal">
                <div class="aieb-content">
                    <span class="aieb-badge"><i class="fa-solid fa-comments"></i> 1-ON-1 ADMISSION GUIDANCE</span>
                    <p class="aieb-lead"><strong>Have questions regarding age criteria, syllabus fit, or class availability?</strong> Our admissions counselor {{ $counsellorName ?? 'Ms. Vaishnavi' }} is ready to assist you.</p>
                </div>
                <div class="aieb-buttons">
                    <button type="button" onclick="openEnquiryModal()" class="btn-enquiry-pill">
                        <i class="fa-solid fa-headset"></i>
                        <span>Talk to Admission Counselor</span>
                    </button>
                    <a href="{{ $whatsappUrl ?? 'https://wa.me/919689898973' }}" target="_blank" class="btn-wa-pill">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>WhatsApp Admissions</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         PARENT TRUST & DECISION SECTION (Why Parents Choose Advaita)
         ========================================================================= -->
    <section class="admission-convince-section" id="why-advaita">
        <div class="admission-section-container">
            <div class="admission-section-header">
                <div class="admission-eyebrow text-orange"><i class="fa-solid fa-star me-1"></i> PARENT TRUST &amp; PROVEN RESULTS</div>
                <h2 class="admission-section-title">
                    Why 1,500+ Parents Entrust Their Child's Future to <span class="highlight-serif highlight-orange">Advaita.</span>
                </h2>
                <p class="admission-section-desc">
                    From joyful early foundational learning to Class 10 board exam mastery, Advaita blends rigorous CBSE academics with empathetic, holistic care so your child thrives every single day.
                </p>
            </div>

            <div class="convince-pillars-grid">
                <!-- Pillar 1 -->
                <div class="convince-pillar-card p-orange">
                    <div class="cpc-badge">ACADEMIC PINNACLE</div>
                    <div class="cpc-icon-wrap"><i class="fa-solid fa-trophy"></i></div>
                    <h3 class="cpc-title">100% CBSE Board Pass &amp; District 1st Topper</h3>
                    <p class="cpc-desc">Consistently delivering top board ranks in Parbhani with 98.40% district first rank and 35%+ of our students scoring above 90% in CBSE Class 10.</p>
                    <div class="cpc-foot-tag"><i class="fa-solid fa-circle-check"></i> Proven Academic Excellence</div>
                </div>

                <!-- Pillar 2 -->
                <div class="convince-pillar-card p-blue">
                    <div class="cpc-badge">COMPETITIVE EDGE</div>
                    <div class="cpc-icon-wrap"><i class="fa-solid fa-atom"></i></div>
                    <h3 class="cpc-title">Integrated NEET &amp; IIT Foundation</h3>
                    <p class="cpc-desc">Advanced Olympiad, Abacus, and JEE/NEET analytical foundation embedded right into daily curriculum from Class 6 onwards—no outside tuition stress.</p>
                    <div class="cpc-foot-tag"><i class="fa-solid fa-circle-check"></i> Zero Tuition Fatigue</div>
                </div>

                <!-- Pillar 3 -->
                <div class="convince-pillar-card p-green">
                    <div class="cpc-badge">UNCOMPROMISED SAFETY</div>
                    <div class="cpc-icon-wrap"><i class="fa-solid fa-shield-heart"></i></div>
                    <h3 class="cpc-title">360° Child-Safe &amp; Caring Campus</h3>
                    <p class="cpc-desc">100% CCTV coverage, RFID student tracking, GPS-monitored fleet with female attendants, fire-safety certified, and full-time trained female nurse.</p>
                    <div class="cpc-foot-tag"><i class="fa-solid fa-circle-check"></i> Complete Parental Peace of Mind</div>
                </div>

                <!-- Pillar 4 -->
                <div class="convince-pillar-card p-purple">
                    <div class="cpc-badge">STUDENT CENTRIC</div>
                    <div class="cpc-icon-wrap"><i class="fa-solid fa-heart-pulse"></i></div>
                    <h3 class="cpc-title">1:15 Ratio &amp; Transparent Support</h3>
                    <p class="cpc-desc">Low teacher-student ratio ensures gentle personal attention. Fast 48-hour admission confirmation, zero hidden fees, and transparent term installments.</p>
                    <div class="cpc-foot-tag"><i class="fa-solid fa-circle-check"></i> Transparent &amp; Fair Process</div>
                </div>
            </div>

            <!-- Inline Enquiry Action -->
            <div class="convince-cta-strip">
                <div class="ccs-left">
                    <strong>Seats for Academic Session {{ $academicYear ?? '2027–28' }} are limited to preserve our 1:15 ratio.</strong>
                    <span>Take the first step today — submit a quick enquiry to schedule your campus visit and secure your seat.</span>
                </div>
                <div class="ccs-right">
                    <button type="button" onclick="openEnquiryModal()" class="btn-enquiry-pill">
                        <i class="fa-solid fa-paper-plane"></i> Quick Admission Enquiry (30 Sec)
                    </button>
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
                <div class="admission-eyebrow">{{ $content['docs_eyebrow'] ?? 'DOCUMENTS REQUIRED' }}</div>
                <h2 class="admission-section-title">
                    {{ $content['docs_title'] ?? 'Documents Required for a' }}
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

            <!-- Quick Admission Enquiry Callout 3 (After Required Documents) -->
            <div class="adm-inline-enquiry-bar alt-purple">
                <div class="aieb-content">
                    <span class="aieb-badge"><i class="fa-solid fa-file-shield"></i> FAST-TRACK PROVISIONAL ADMISSION</span>
                    <p class="aieb-lead"><strong>Awaiting previous school report card or Transfer Certificate (TC)?</strong> Don't let documentation delays cost your child a seat. Submit a quick enquiry to secure provisional admission while paperwork is completed.</p>
                </div>
                <div class="aieb-buttons">
                    <button type="button" onclick="openEnquiryModal()" class="btn-enquiry-pill">
                        <i class="fa-solid fa-calendar-check"></i>
                        <span>Reserve Provisional Seat</span>
                    </button>
                    <a href="tel:{{ $contactPhone ?? '9689898973' }}" class="btn-call-pill">
                        <i class="fa-solid fa-phone"></i>
                        <span>Call Desk</span>
                    </a>
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
                <div class="admission-eyebrow">{{ $content['fee_eyebrow'] ?? 'FEE STRUCTURE' }}</div>
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
                        <p class="fip-desc">{{ $content['fee_info2_desc'] ?? 'Third-party facility • Head: Shakir Bhai (+91 99237 47775)' }}</p>
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

            <!-- Quick Admission Enquiry Callout 4 (After Fee Structure) -->
            <div class="adm-inline-enquiry-bar alt-amber">
                <div class="aieb-content">
                    <span class="aieb-badge"><i class="fa-solid fa-receipt"></i> 100% TRANSPARENT FEE POLICY</span>
                    <p class="aieb-lead"><strong>Want a detailed breakdown of tuition fees, transport bus routes, or installment payment plans?</strong> We believe in complete transparency with zero hidden surprises.</p>
                </div>
                <div class="aieb-buttons">
                    <button type="button" onclick="openFeeModal('primary')" class="btn-enquiry-pill">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                        <span>View Detailed Fee Breakdown</span>
                    </button>
                    <button type="button" onclick="openEnquiryModal()" class="btn-call-pill">
                        <i class="fa-solid fa-envelope-open-text"></i>
                        <span>Enquire About Installments</span>
                    </button>
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
                        <span class="fs-12 text-white-50">Academic Session {{ $academicYear ?? '2027–28' }}</span>
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
                        <span class="fee-wing-badge green">BUS SERVICE &amp; COMMUTE</span>
                        <h4 class="fee-pane-title">Safe &amp; Tracked School Bus Facility</h4>
                        <p class="fee-pane-desc">Advaita School of Excellence provides safe, dependable transport facility via a verified third party, equipped with GPS tracking, CCTV surveillance, speed governors, and female attendants.</p>
                    </div>

                    <!-- Third-Party Transport Coordinator Card -->
                    <div class="transport-coordinator-card">
                        <div class="tcc-left">
                            <div class="tcc-avatar">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <div class="tcc-details">
                                <span class="tcc-kicker"><i class="fa-solid fa-shield-halved text-green me-1"></i> THIRD-PARTY TRANSPORT SERVICE</span>
                                <h4 class="tcc-name">Shakir Bhai</h4>
                                <p class="tcc-role">Head of Transport Facility</p>
                                <p class="tcc-note">School transport is managed via third party under Shakir Bhai. For exact route-wise bus charges, pickup/drop points, and seat availability, please connect with him directly.</p>
                            </div>
                        </div>
                        <div class="tcc-actions">
                            <a href="tel:+919923747775" class="btn-tcc-call">
                                <i class="fa-solid fa-phone"></i>
                                <span>+91 99237 47775</span>
                            </a>
                            <a href="https://wa.me/919923747775?text=Hello%20Shakir%20Bhai,%20I%20would%20like%20to%20enquire%20about%20Advaita%20School%20bus%20routes%20and%20charges" target="_blank" class="btn-tcc-wa">
                                <i class="fa-brands fa-whatsapp"></i>
                                <span>WhatsApp Shakir Bhai</span>
                            </a>
                        </div>
                    </div>

                    <div class="transport-routes-list mt-20">
                        <div class="routes-header-badge">
                            <i class="fa-solid fa-route text-orange me-1"></i>
                            <span>Key Operational Bus Corridors in Parbhani</span>
                        </div>
                        @foreach($transportRoutes ?? [] as $tr)
                        <div class="tr-route-row">
                            <div class="tr-icon-box"><i class="{{ $tr['icon'] ?? 'fa-solid fa-bus' }}"></i></div>
                            <div class="tr-info">
                                <h5 class="tr-name">{{ $tr['route'] }}</h5>
                                <p class="tr-stops">{{ $tr['coverage'] }}</p>
                            </div>
                            <div class="tr-action-tag">
                                <a href="tel:+919923747775" class="tr-call-link" title="Call Shakir Bhai for route fare">
                                    <i class="fa-solid fa-phone"></i> Enquire Fare
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="fee-notice-banner mt-16">
                        <i class="fa-solid fa-circle-info text-green"></i>
                        <span><strong>Important Note:</strong> Transport is provided via a third party. Route-wise bus charges are calculated according to the designated pickup/drop corridor across Parbhani. Please contact <strong>Shakir Bhai (Head of Transport Facility) at <a href="tel:+919923747775" class="text-green fw-bold">+91 99237 47775</a></strong> for route-wise fare details and seat booking.</span>
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

</main>
@endsection

@section('scripts')
<script>
// ==========================================
// 1. Fee Structure Interactive Modal
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

// Fee Modal Backdrop & Escape Key Handlers
document.getElementById('advFeeModal')?.addEventListener('click', function(e) {
    if (e.target === this) closeFeeModal();
});

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeFeeModal();
    }
});

// ==========================================
// 2. Admission Steps Mobile Auto-Slider
// ==========================================
(function() {
    const wrapper = document.querySelector('.admission-steps-wrapper');
    if (!wrapper) {
        return;
    }

    const cards = Array.from(wrapper.querySelectorAll('.admission-step-card'));
    if (cards.length < 2) {
        return;
    }

    let currentIndex = 0;
    let timerId = null;
    let resumeTimeoutId = null;
    const INTERVAL_MS = 3000;

    function isMobileSliderActive() {
        return window.innerWidth < 992 && wrapper.scrollWidth > wrapper.clientWidth + 4;
    }

    function syncCurrentIndexFromScroll() {
        const wrapperRect = wrapper.getBoundingClientRect();
        let closestIdx = 0;
        let minDiff = Infinity;

        cards.forEach((card, idx) => {
            const diff = Math.abs(card.getBoundingClientRect().left - wrapperRect.left);
            if (diff < minDiff) {
                minDiff = diff;
                closestIdx = idx;
            }
        });

        currentIndex = closestIdx;
    }

    function advanceSlide() {
        if (!isMobileSliderActive() || document.hidden) {
            return;
        }

        const maxScroll = wrapper.scrollWidth - wrapper.clientWidth;
        if (wrapper.scrollLeft >= maxScroll - 8) {
            currentIndex = 0;
            wrapper.scrollTo({ left: 0, behavior: 'smooth' });
            return;
        }

        currentIndex = (currentIndex + 1) % cards.length;
        const targetCard = cards[currentIndex];
        const targetLeft = Math.min(targetCard.offsetLeft - wrapper.offsetLeft, maxScroll);
        wrapper.scrollTo({ left: Math.max(0, targetLeft), behavior: 'smooth' });
    }

    function startAutoSlide() {
        stopAutoSlide();
        if (!isMobileSliderActive()) {
            return;
        }
        timerId = setInterval(advanceSlide, INTERVAL_MS);
    }

    function stopAutoSlide() {
        if (timerId) {
            clearInterval(timerId);
            timerId = null;
        }
        if (resumeTimeoutId) {
            clearTimeout(resumeTimeoutId);
            resumeTimeoutId = null;
        }
    }

    function pauseAndResumeLater() {
        stopAutoSlide();
        resumeTimeoutId = setTimeout(function() {
            syncCurrentIndexFromScroll();
            startAutoSlide();
        }, 4000);
    }

    wrapper.addEventListener('touchstart', stopAutoSlide, { passive: true });
    wrapper.addEventListener('touchend', pauseAndResumeLater, { passive: true });
    wrapper.addEventListener('pointerdown', stopAutoSlide, { passive: true });
    wrapper.addEventListener('pointerup', pauseAndResumeLater, { passive: true });
    wrapper.addEventListener('mouseenter', stopAutoSlide);
    wrapper.addEventListener('mouseleave', startAutoSlide);

    window.addEventListener('resize', function() {
        if (isMobileSliderActive()) {
            startAutoSlide();
        } else {
            stopAutoSlide();
        }
    });

    document.addEventListener('visibilitychange', function() {
        if (document.hidden) {
            stopAutoSlide();
        } else {
            startAutoSlide();
        }
    });

    startAutoSlide();
})();
</script>
@endsection
