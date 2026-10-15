@extends('layouts.admin')

@section('title', 'Parent Testimonials Section Header Settings · Advaita Admin')
@section('page_title', 'Parent Testimonials Section Header Configuration')

@section('content')
<div class="admin-container">

    <!-- Top Action / Breadcrumbs Bar -->
    <div class="testi-top-bar mb-20">
        <div class="d-flex align-items-center gap-12">
            <a href="{{ route('admin.testimonials.index') }}" class="btn-back-square" title="Back to Testimonials List">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <div>
                <div class="page-breadcrumb-line">
                    <a href="{{ route('admin.testimonials.index') }}" class="breadcrumb-link">
                        <i class="fa-solid fa-comment-dots"></i> Parent Testimonials
                    </a>
                    <i class="fa-solid fa-chevron-right breadcrumb-separator"></i>
                    <span class="breadcrumb-current">Section Header Settings</span>
                </div>
                <h2 class="text-navy fs-22 font-extrabold mb-4">Testimonials Section Header</h2>
                <p class="text-muted fs-13">Configure the eyebrow kicker, headline, and subtitle for Section 8 on the public website.</p>
            </div>
        </div>
        <div class="d-flex gap-12 align-items-center">
            <a href="{{ route('home') }}#testimonials" target="_blank" class="btn-view-live" title="View Frontend Section">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>View on Homepage</span>
            </a>
            <a href="{{ route('admin.testimonials.index') }}" class="btn-admin btn-secondary">
                <i class="fa-solid fa-table-list"></i>
                <span>Manage Testimonials</span>
            </a>
        </div>
    </div>

    <!-- Section Heading Editor Card -->
    <div class="section-settings-card">
        <div class="section-settings-head">
            <h4>
                <i class="fa-solid fa-heading text-orange"></i>
                <span>Testimonials Section Header Settings</span>
            </h4>
            <span class="text-muted fs-12">Displayed above parent reviews on the homepage</span>
        </div>
        <div class="section-settings-body">
            <form action="{{ route('admin.testimonials.section-header') }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-grid-2 mb-16">
                    <div class="form-group-item">
                        <label class="form-label-item">Eyebrow Tag</label>
                        <input type="text" name="eyebrow" class="form-input-item" value="{{ old('eyebrow', $sectionSettings['eyebrow']) }}" required maxlength="150" placeholder="e.g. TESTIMONIALS">
                    </div>
                    <div class="form-group-item">
                        <label class="form-label-item">Title Part 1 (Navy Dark)</label>
                        <input type="text" name="title_1" class="form-input-item" value="{{ old('title_1', $sectionSettings['title_1']) }}" required maxlength="255" placeholder="e.g. Voices That">
                    </div>
                </div>

                <div class="form-grid-2 mb-20">
                    <div class="form-group-item">
                        <label class="form-label-item">Title Part 2 (Orange Highlight)</label>
                        <input type="text" name="title_2" class="form-input-item" value="{{ old('title_2', $sectionSettings['title_2']) }}" placeholder="e.g. Inspire Us" maxlength="255">
                    </div>
                    <div class="form-group-item">
                        <label class="form-label-item">Subtitle Description</label>
                        <input type="text" name="subtitle" class="form-input-item" value="{{ old('subtitle', $sectionSettings['subtitle']) }}" placeholder="Section description...">
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between pt-16 border-top">
                    <a href="{{ route('admin.testimonials.index') }}" class="btn-admin btn-secondary">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>Back to Testimonials</span>
                    </a>
                    <button type="submit" class="btn-admin btn-primary">
                        <i class="fa-solid fa-floppy-disk"></i>
                        <span>Save Section Header</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
