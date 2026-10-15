@extends('layouts.admin')

@section('title', 'Why Choose Advaita Section Header Settings · Advaita Admin')
@section('page_title', 'Why Choose Advaita Section Header Configuration')

@section('content')
<div class="admin-container">

    <!-- Top Action / Breadcrumbs Bar -->
    <div class="pillar-header-bar mb-20">
        <div class="d-flex align-items-center gap-12">
            <a href="{{ route('admin.why-choose.index') }}" class="btn-back-square" title="Back to Advantage Cards List">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <div>
                <div class="page-breadcrumb-line">
                    <a href="{{ route('admin.why-choose.index') }}" class="breadcrumb-link">
                        <i class="fa-solid fa-award"></i> Why Choose Advaita
                    </a>
                    <i class="fa-solid fa-chevron-right breadcrumb-separator"></i>
                    <span class="breadcrumb-current">Section Header Settings</span>
                </div>
                <h2 class="text-navy fs-22 font-extrabold mb-4">Why Choose Section Header</h2>
                <p class="text-muted fs-13">Configure the headline, subtitle, eyebrow badge, and call-to-action button displayed above the advantage cards on the homepage.</p>
            </div>
        </div>
        <div class="d-flex gap-12 align-items-center">
            <a href="{{ route('home') }}#why-choose" target="_blank" class="btn-view-live" title="View Frontend Section">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>View on Homepage</span>
            </a>
            <a href="{{ route('admin.why-choose.index') }}" class="btn-admin btn-secondary">
                <i class="fa-solid fa-table-list"></i>
                <span>Manage Advantage Cards</span>
            </a>
        </div>
    </div>

    <!-- Section Header Settings Card -->
    <div class="section-settings-card">
        <div class="section-settings-head">
            <h4>
                <i class="fa-solid fa-heading text-orange"></i>
                <span>Section Heading &amp; Subtitle Configuration</span>
            </h4>
            <span class="text-muted fs-12">Live preview updates as you type below</span>
        </div>

        <div class="section-settings-body">
            <!-- Live Preview of Section Header -->
            <div class="header-live-preview-box mb-24">
                <div class="preview-eyebrow">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span id="previewEyebrow">{{ $sectionSettings['eyebrow'] }}</span>
                </div>
                <div class="preview-title">
                    <span class="part-dark" id="previewTitle1">{{ $sectionSettings['title_1'] }}</span>
                    <span class="part-orange" id="previewTitle2">{{ $sectionSettings['title_2'] }}</span>
                </div>
                <p class="preview-subtitle" id="previewSubtitle">
                    {{ $sectionSettings['subtitle'] }}
                </p>
                <div class="preview-cta-btn">
                    <span id="previewCta">{{ $sectionSettings['cta_text'] }}</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <!-- Form -->
            <form action="{{ route('admin.why-choose.section-header') }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-grid-3 mb-16">
                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Eyebrow Badge Text</span>
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="inputEyebrow" name="eyebrow" class="form-input-custom" value="{{ old('eyebrow', $sectionSettings['eyebrow']) }}" required maxlength="150" placeholder="e.g. WHY CHOOSE ADVAITA?">
                    </div>

                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Title Part 1 (Navy Dark)</span>
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="inputTitle1" name="title_1" class="form-input-custom" value="{{ old('title_1', $sectionSettings['title_1']) }}" required maxlength="255" placeholder="e.g. Why Choose">
                    </div>

                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Title Part 2 (Orange Accent)</span>
                        </label>
                        <input type="text" id="inputTitle2" name="title_2" class="form-input-custom" value="{{ old('title_2', $sectionSettings['title_2']) }}" maxlength="255" placeholder="e.g. Advaita?">
                    </div>
                </div>

                <div class="form-group-custom mb-16">
                    <label class="form-label-custom">
                        <span>Section Subtitle Description</span>
                    </label>
                    <textarea id="inputSubtitle" name="subtitle" rows="3" class="form-input-custom" placeholder="Brief summary of the school advantages...">{{ old('subtitle', $sectionSettings['subtitle']) }}</textarea>
                </div>

                <div class="card-grid-260 mb-24">
                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Bottom CTA Button Text</span>
                        </label>
                        <input type="text" id="inputCta" name="cta_text" class="form-input-custom" value="{{ old('cta_text', $sectionSettings['cta_text']) }}" maxlength="100" placeholder="e.g. Discover the Advaita Difference">
                    </div>

                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Bottom CTA Button URL</span>
                        </label>
                        <input type="text" name="cta_url" class="form-input-custom" value="{{ old('cta_url', $sectionSettings['cta_url']) }}" maxlength="255" placeholder="e.g. #admissions or /admission-info">
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between pt-16 border-top">
                    <a href="{{ route('admin.why-choose.index') }}" class="btn-admin btn-secondary">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>Back to Advantage Cards</span>
                    </a>
                    <button type="submit" class="btn-admin btn-primary">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Save Section Heading</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>

<script>
    const eyebrowInput = document.getElementById('inputEyebrow');
    const title1Input = document.getElementById('inputTitle1');
    const title2Input = document.getElementById('inputTitle2');
    const subtitleInput = document.getElementById('inputSubtitle');
    const ctaInput = document.getElementById('inputCta');

    if (eyebrowInput) eyebrowInput.addEventListener('input', () => {
        document.getElementById('previewEyebrow').textContent = eyebrowInput.value || 'WHY CHOOSE ADVAITA?';
    });
    if (title1Input) title1Input.addEventListener('input', () => {
        document.getElementById('previewTitle1').textContent = title1Input.value || 'Why Choose';
    });
    if (title2Input) title2Input.addEventListener('input', () => {
        document.getElementById('previewTitle2').textContent = title2Input.value || 'Advaita?';
    });
    if (subtitleInput) subtitleInput.addEventListener('input', () => {
        document.getElementById('previewSubtitle').textContent = subtitleInput.value || 'Section subtitle...';
    });
    if (ctaInput) ctaInput.addEventListener('input', () => {
        document.getElementById('previewCta').textContent = ctaInput.value || 'Discover the Advaita Difference';
    });
</script>
@endsection
