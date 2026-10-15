@extends('layouts.admin')

@section('title', 'FAQ Section Header Settings · Advaita Admin')
@section('page_title', 'FAQ Section Header Configuration')

@section('content')
<div class="admin-container">

    <!-- Top Action / Breadcrumbs Bar -->
    <div class="faq-top-bar mb-20">
        <div class="d-flex align-items-center gap-12">
            <a href="{{ route('admin.faqs.index') }}" class="btn-back-square" title="Back to FAQ Questions">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <div>
                <div class="page-breadcrumb-line">
                    <a href="{{ route('admin.faqs.index') }}" class="breadcrumb-link">
                        <i class="fa-solid fa-circle-question"></i> FAQs
                    </a>
                    <i class="fa-solid fa-chevron-right breadcrumb-separator"></i>
                    <span class="breadcrumb-current">Section Header Settings</span>
                </div>
                <h2 class="text-navy fs-22 font-extrabold mb-4">FAQ Section Header</h2>
                <p class="text-muted fs-13">Configure the eyebrow kicker, headline, and subtitle displayed above the accordion on the public website.</p>
            </div>
        </div>
        <div class="d-flex gap-12 align-items-center">
            <a href="{{ route('home') }}#faq" target="_blank" class="btn-admin btn-secondary" title="View live on Homepage">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>View on Homepage</span>
            </a>
            <a href="{{ route('admin.faqs.index') }}" class="btn-admin btn-secondary">
                <i class="fa-solid fa-table-list"></i>
                <span>Manage FAQ Questions</span>
            </a>
        </div>
    </div>

    <!-- Section Heading Editor Card -->
    <div class="section-settings-card">
        <div class="section-settings-head">
            <h4>
                <i class="fa-solid fa-heading text-orange"></i>
                <span>FAQ Section Header Settings</span>
            </h4>
            <span class="text-muted fs-12">Displayed above the FAQ accordion on the public website</span>
        </div>
        <div class="section-settings-body">
            <form action="{{ route('admin.faqs.section-header') }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-grid-2 mb-16">
                    <div class="form-group-item">
                        <label class="form-label-item">Eyebrow Tag</label>
                        <input type="text" name="eyebrow" class="form-input-item" value="{{ old('eyebrow', $sectionSettings['eyebrow']) }}" required maxlength="150" placeholder="e.g. FAQ">
                    </div>
                    <div class="form-group-item">
                        <label class="form-label-item">Title Part 1 (Navy Dark)</label>
                        <input type="text" name="title_1" class="form-input-item" value="{{ old('title_1', $sectionSettings['title_1']) }}" required maxlength="255" placeholder="e.g. Frequently Asked">
                    </div>
                </div>

                <div class="form-grid-2 mb-20">
                    <div class="form-group-item">
                        <label class="form-label-item">Title Part 2 (Orange Highlight)</label>
                        <input type="text" name="title_2" class="form-input-item" value="{{ old('title_2', $sectionSettings['title_2']) }}" placeholder="e.g. Questions" maxlength="255">
                    </div>
                    <div class="form-group-item">
                        <label class="form-label-item">Subtitle Description</label>
                        <input type="text" name="subtitle" class="form-input-item" value="{{ old('subtitle', $sectionSettings['subtitle']) }}" placeholder="Section description...">
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between pt-16 border-top">
                    <a href="{{ route('admin.faqs.index') }}" class="btn-admin btn-secondary">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>Back to FAQs</span>
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
