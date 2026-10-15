@extends('layouts.admin')

@section('title', 'Campus Gallery Section Header Settings · Advaita Admin')
@section('page_title', 'Campus Gallery Section Header Configuration')

@section('content')
<div class="admin-container">

    <!-- Top Action / Breadcrumbs Bar -->
    <div class="pillar-header-bar mb-20">
        <div class="d-flex align-items-center gap-12">
            <a href="{{ route('admin.gallery.index') }}" class="btn-back-square" title="Back to Gallery Photos">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <div>
                <div class="page-breadcrumb-line">
                    <a href="{{ route('admin.gallery.index') }}" class="breadcrumb-link">
                        <i class="fa-solid fa-camera-retro"></i> Campus Gallery
                    </a>
                    <i class="fa-solid fa-chevron-right breadcrumb-separator"></i>
                    <span class="breadcrumb-current">Section Header Settings</span>
                </div>
                <h2 class="text-navy fs-22 font-extrabold mb-4">Gallery Section Header &amp; Buttons</h2>
                <p class="text-muted fs-13">Configure the headline, subtitle, eyebrow kicker, and action buttons displayed above the photo showcase on the homepage.</p>
            </div>
        </div>
        <div class="d-flex gap-12 align-items-center">
            <a href="{{ route('home') }}#gallery" target="_blank" class="btn-view-live" title="View Frontend Section">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>View on Homepage</span>
            </a>
            <a href="{{ route('admin.gallery.index') }}" class="btn-admin btn-secondary">
                <i class="fa-solid fa-table-list"></i>
                <span>Manage Gallery Photos</span>
            </a>
        </div>
    </div>

    <!-- Section Header & Heading Configuration Card -->
    <div class="section-settings-card">
        <div class="section-settings-head">
            <h4>
                <i class="fa-solid fa-heading text-orange"></i>
                <span>Section Heading &amp; Action Buttons Configuration</span>
            </h4>
            <span class="text-muted fs-12">Live preview updates dynamically below</span>
        </div>

        <div class="section-settings-body">
            <!-- Live Preview of Section Header -->
            <div class="header-live-preview-box mb-24">
                <div class="preview-eyebrow">
                    <i class="fa-solid fa-camera"></i>
                    <span id="previewEyebrow">{{ $sectionSettings['eyebrow'] }}</span>
                </div>
                <div class="preview-title">
                    <span class="part-dark" id="previewTitle1">{{ $sectionSettings['title_1'] }}</span>
                    <span class="part-orange" id="previewTitle2">{{ $sectionSettings['title_2'] }}</span>
                </div>
                <p class="preview-subtitle" id="previewSubtitle">
                    {{ $sectionSettings['subtitle'] }}
                </p>
                <div class="preview-buttons-wrap">
                    <div class="preview-btn-main">
                        <span id="previewBtn1">{{ $sectionSettings['btn_1_text'] }}</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <div class="preview-btn-video">
                        <i class="fa-solid fa-play"></i>
                        <span id="previewBtn2">{{ $sectionSettings['btn_2_text'] }}</span>
                    </div>
                </div>
            </div>

            <!-- Header Form -->
            <form action="{{ route('admin.gallery.section-header') }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-grid-3 mb-16">
                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Eyebrow Tag</span>
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="inputEyebrow" name="eyebrow" class="form-input-custom" value="{{ old('eyebrow', $sectionSettings['eyebrow']) }}" required maxlength="150" placeholder="e.g. CAMPUS GALLERY">
                    </div>

                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Title Part 1 (Navy Dark)</span>
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="inputTitle1" name="title_1" class="form-input-custom" value="{{ old('title_1', $sectionSettings['title_1']) }}" required maxlength="255" placeholder="e.g. A day at Advaita,">
                    </div>

                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Title Part 2 (Orange Italic Accent)</span>
                        </label>
                        <input type="text" id="inputTitle2" name="title_2" class="form-input-custom" value="{{ old('title_2', $sectionSettings['title_2']) }}" maxlength="255" placeholder="e.g. in pictures.">
                    </div>
                </div>

                <div class="form-group-custom mb-16">
                    <label class="form-label-custom">
                        <span>Section Subtitle Description</span>
                    </label>
                    <textarea id="inputSubtitle" name="subtitle" rows="3" class="form-input-custom" placeholder="Brief summary describing the campus activities...">{{ old('subtitle', $sectionSettings['subtitle']) }}</textarea>
                </div>

                <div class="form-grid-2 mb-24">
                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Primary Button (Explore Gallery) Text &amp; URL</span>
                        </label>
                        <div class="d-flex gap-8">
                            <input type="text" id="inputBtn1" name="btn_1_text" class="form-input-custom flex-1" value="{{ old('btn_1_text', $sectionSettings['btn_1_text']) }}" placeholder="Button text" maxlength="100">
                            <input type="text" name="btn_1_url" class="form-input-custom flex-2" value="{{ old('btn_1_url', $sectionSettings['btn_1_url']) }}" placeholder="URL (e.g. /gallery)" maxlength="255">
                        </div>
                    </div>

                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Secondary Video Button Text &amp; URL</span>
                        </label>
                        <div class="d-flex gap-8">
                            <input type="text" id="inputBtn2" name="btn_2_text" class="form-input-custom flex-1" value="{{ old('btn_2_text', $sectionSettings['btn_2_text']) }}" placeholder="Button text" maxlength="100">
                            <input type="text" name="btn_2_url" class="form-input-custom flex-2" value="{{ old('btn_2_url', $sectionSettings['btn_2_url']) }}" placeholder="URL (e.g. #hero)" maxlength="255">
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between pt-16 border-top">
                    <a href="{{ route('admin.gallery.index') }}" class="btn-admin btn-secondary">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>Back to Gallery</span>
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
    const btn1Input = document.getElementById('inputBtn1');
    const btn2Input = document.getElementById('inputBtn2');

    if (eyebrowInput) eyebrowInput.addEventListener('input', () => {
        document.getElementById('previewEyebrow').textContent = eyebrowInput.value || 'CAMPUS GALLERY';
    });
    if (title1Input) title1Input.addEventListener('input', () => {
        document.getElementById('previewTitle1').textContent = title1Input.value || 'A day at Advaita,';
    });
    if (title2Input) title2Input.addEventListener('input', () => {
        document.getElementById('previewTitle2').textContent = title2Input.value || 'in pictures.';
    });
    if (subtitleInput) subtitleInput.addEventListener('input', () => {
        document.getElementById('previewSubtitle').textContent = subtitleInput.value || '';
    });
    if (btn1Input) btn1Input.addEventListener('input', () => {
        document.getElementById('previewBtn1').textContent = btn1Input.value || 'Explore Photo Gallery';
    });
    if (btn2Input) btn2Input.addEventListener('input', () => {
        document.getElementById('previewBtn2').textContent = btn2Input.value || 'Watch Campus Highlights';
    });
</script>
@endsection
