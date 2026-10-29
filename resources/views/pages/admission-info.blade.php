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
            <!-- Hero Visual from Design Image -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="{{ asset($content['hero_image'] ?? 'assets/images/admission-hero-design.jpg') }}" 
                     alt="Advaita Students and Campus" 
                     class="admission-hero-design-img">
            </div>

            <!-- SVG Wave Overlay for Smooth Translucent Backdrop -->
            <div class="admission-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H540C570 120 520 280 620 440H0V0Z" fill="#EEF6FC" fill-opacity="0.96"/>
                    <path d="M520 0C550 140 500 280 600 440H580C480 280 530 140 500 0H520Z" fill="#F37021" fill-opacity="0.25"/>
                </svg>
            </div>

            <!-- Floating Script Tag at Top Right (if not using design composite) -->
            @if(isset($content['hero_script']) && !empty($content['hero_script']) && ($content['hero_image'] ?? '') !== 'assets/images/admission-hero-design.jpg')
            <div class="admission-hero-script-tag" aria-hidden="true">
                <span class="script-title">{{ $content['hero_script'] }}</span>
                <svg class="script-underline" viewBox="0 0 120 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 12C38 3 84 4 116 14" stroke="#083B7A" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </div>
            @endif

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
                <div class="admission-step-card">
                    <span class="step-num-pill {{ $step['badge_class'] ?? 'step-pill-orange' }}">{{ $step['step'] ?? sprintf('%02d', $index + 1) }}</span>
                    <div class="step-icon-box {{ $step['icon_class'] ?? 'step-icon-orange' }}" aria-hidden="true">
                        <i class="{{ $step['icon'] ?? 'fa-solid fa-circle-check' }}"></i>
                    </div>
                    <h3 class="step-card-title">{{ $step['title'] }}</h3>
                    <p class="step-card-desc">{{ $step['desc'] }}</p>
                </div>

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
                        <a href="{{ route('fee-structure') }}" class="btn-fee-band">
                            <span>View Fee Details</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
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
                        <a href="{{ route('fee-structure') }}" class="btn-fee-band">
                            <span>View Fee Details</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 4 Information Cards in a row -->
            <div class="fee-info-row-grid">
                <div class="fee-info-pill-card">
                    <div class="fip-icon blue" aria-hidden="true">
                        <i class="fa-regular fa-file-lines"></i>
                    </div>
                    <div class="fip-text">
                        <h4 class="fip-title">{{ $content['fee_info1_title'] ?? 'Annual Fee Details' }}</h4>
                        <p class="fip-desc">{{ $content['fee_info1_desc'] ?? 'Tuition, development and other charges' }}</p>
                    </div>
                </div>

                <div class="fee-info-pill-card">
                    <div class="fip-icon green" aria-hidden="true">
                        <i class="fa-solid fa-bus"></i>
                    </div>
                    <div class="fip-text">
                        <h4 class="fip-title">{{ $content['fee_info2_title'] ?? 'Transport Charges' }}</h4>
                        <p class="fip-desc">{{ $content['fee_info2_desc'] ?? 'Route-wise transport facility details' }}</p>
                    </div>
                </div>

                <div class="fee-info-pill-card">
                    <div class="fip-icon pink" aria-hidden="true">
                        <i class="fa-regular fa-calendar-check"></i>
                    </div>
                    <div class="fip-text">
                        <h4 class="fip-title">{{ $content['fee_info3_title'] ?? 'Payment Schedule' }}</h4>
                        <p class="fip-desc">{{ $content['fee_info3_desc'] ?? 'Term-wise / annual payment options' }}</p>
                    </div>
                </div>

                <div class="fee-info-pill-card">
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
         8. INTERACTIVE QUICK ENQUIRY MODAL POPUP
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
            <div class="aem-body">
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

                    <button type="submit" class="btn-apc-primary w-100 justify-content-center" style="border: none; cursor: pointer;">
                        <i class="fa-solid fa-paper-plane"></i>
                        <span>Submit Enquiry</span>
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

// Close on backdrop click
document.getElementById('advEnquiryModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeEnquiryModal();
    }
});

// Close on Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeEnquiryModal();
    }
});
</script>
@endsection
