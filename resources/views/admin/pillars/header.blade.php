@extends('layouts.admin')

@section('title', 'Three Pillars Section Header Settings · Advaita Admin')
@section('page_title', 'Three Pillars Section Header Configuration')

@section('content')
<div class="admin-container">

    <!-- Top Action / Breadcrumbs Bar -->
    <div class="pillar-header-bar mb-20">
        <div class="d-flex align-items-center gap-12">
            <a href="{{ route('admin.pillars.index') }}" class="btn-back-square" title="Back to Pillars List">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <div>
                <div class="page-breadcrumb-line">
                    <a href="{{ route('admin.pillars.index') }}" class="breadcrumb-link">
                        <i class="fa-solid fa-shapes"></i> Three Pillars
                    </a>
                    <i class="fa-solid fa-chevron-right breadcrumb-separator"></i>
                    <span class="breadcrumb-current">Section Header Settings</span>
                </div>
                <h2 class="text-navy fs-22 font-extrabold mb-4">Three Pillars Section Header</h2>
                <p class="text-muted fs-13">Configure the eyebrow kicker, dual-tone headline, description, and CTA button displayed on the homepage.</p>
            </div>
        </div>
        <div class="d-flex gap-12 align-items-center">
            <a href="{{ route('home') }}#why-advaita" target="_blank" class="btn-view-live" title="View Frontend Section">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>View on Homepage</span>
            </a>
            <a href="{{ route('admin.pillars.index') }}" class="btn-admin btn-secondary">
                <i class="fa-solid fa-table-list"></i>
                <span>Manage Pillar Cards</span>
            </a>
        </div>
    </div>

    <!-- Main Header Configuration Card -->
    <div class="pillar-section-settings-card">
        <div class="pillar-settings-title">
            <i class="fa-solid fa-sliders text-orange"></i>
            <span>Section Header &amp; Subtitle Content</span>
        </div>

        <form action="{{ route('admin.pillars.section-header') }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="card-subgrid-2col mb-16">
                <div>
                    <label class="form-label-bold">Eyebrow Badge Text</label>
                    <input type="text" name="eyebrow" class="form-control form-input-clean" value="{{ old('eyebrow', $sectionSettings['eyebrow']) }}" required maxlength="150" placeholder="e.g. WHAT MAKES ADVAITA SPECIAL">
                </div>
                <div>
                    <label class="form-label-bold">Title 1 (Dark Heading)</label>
                    <input type="text" name="title_1" class="form-control form-input-clean" value="{{ old('title_1', $sectionSettings['title_1']) }}" required maxlength="255" placeholder="e.g. Three pillars that shape">
                </div>
                <div>
                    <label class="form-label-orange">Title 2 (Orange Tagline)</label>
                    <input type="text" name="title_2" class="form-control form-input-clean" value="{{ old('title_2', $sectionSettings['title_2']) }}" maxlength="255" placeholder="e.g. brighter futures.">
                </div>
            </div>

            <div class="mb-16">
                <label class="form-label-bold">Section Subtitle / Description</label>
                <textarea name="subtitle" rows="3" class="form-textarea-clean" placeholder="Describe the section core message...">{{ old('subtitle', $sectionSettings['subtitle']) }}</textarea>
            </div>

            <div class="card-subgrid-2col mb-20">
                <div>
                    <label class="form-label-bold">CTA Button Text</label>
                    <input type="text" name="cta_text" placeholder="CTA Button Text" value="{{ old('cta_text', $sectionSettings['cta_text']) }}" class="form-control form-input-clean" maxlength="100">
                </div>
                <div>
                    <label class="form-label-bold">CTA Button Target Link</label>
                    <input type="text" name="cta_url" placeholder="CTA Link (e.g. #why-choose)" value="{{ old('cta_url', $sectionSettings['cta_url']) }}" class="form-control form-input-clean" maxlength="255">
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between pt-16 border-top">
                <a href="{{ route('admin.pillars.index') }}" class="btn-admin btn-secondary">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span>Back to Pillars</span>
                </a>
                <button type="submit" class="btn-admin btn-primary">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Save Section Heading</span>
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
