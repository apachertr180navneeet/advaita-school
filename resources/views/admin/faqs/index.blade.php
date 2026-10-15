@extends('layouts.admin')

@section('title', 'FAQs Management')
@section('page_title', 'Frequently Asked Questions (FAQ Accordion)')



@section('content')
<div class="faq-mgmt-wrapper">

    <!-- Top Action Bar -->
    <div class="faq-top-bar">
        <div class="faq-top-title">
            <h3>Frequently Asked Questions</h3>
            <p>Manage curriculum, admissions, fees, and safety questions in the homepage FAQ accordion.</p>
        </div>
        <div class="d-flex align-items-center gap-10">
            <a href="{{ route('home') }}#faq" target="_blank" class="btn-admin btn-secondary" title="View live on Homepage">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>View on Homepage</span>
            </a>
            <a href="{{ route('admin.faqs.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add Question</span>
            </a>
        </div>
    </div>

    <!-- Metrics Row -->
    <div class="faq-metrics-grid">
        <div class="faq-metric-card">
            <div class="faq-metric-info">
                <h4>{{ $faqs->count() }}</h4>
                <span>Total Questions</span>
            </div>
            <div class="faq-metric-icon metric-icon-total">
                <i class="fa-solid fa-circle-question"></i>
            </div>
        </div>
        <div class="faq-metric-card">
            <div class="faq-metric-info">
                <h4>{{ $faqs->where('is_active', true)->count() }}</h4>
                <span>Active on Homepage</span>
            </div>
            <div class="faq-metric-icon metric-icon-active">
                <i class="fa-solid fa-check"></i>
            </div>
        </div>
        <div class="faq-metric-card">
            <div class="faq-metric-info">
                <h4>{{ $faqs->where('is_active', false)->count() }}</h4>
                <span>Hidden Questions</span>
            </div>
            <div class="faq-metric-icon metric-icon-inactive">
                <i class="fa-solid fa-eye-slash"></i>
            </div>
        </div>
    </div>

    <!-- Section Heading Editor Accordion Card -->
    <div class="section-settings-card">
        <div class="section-settings-head" onclick="document.getElementById('settingsBody').classList.toggle('d-none')">
            <h4>
                <i class="fa-solid fa-heading text-orange"></i>
                <span>FAQ Section Header Settings</span>
            </h4>
            <span class="text-muted fs-12">Click to edit header texts <i class="fa-solid fa-chevron-down ms-1"></i></span>
        </div>
        <div class="settings-body" id="settingsBody">
            <form action="{{ route('admin.faqs.section-header') }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-grid-2">
                    <div class="form-group-item">
                        <label class="form-label-item">Eyebrow Tag</label>
                        <input type="text" name="eyebrow" class="form-input-item" value="{{ old('eyebrow', $sectionSettings['eyebrow']) }}" required maxlength="150">
                    </div>
                    <div class="form-group-item">
                        <label class="form-label-item">Title Part 1 (Navy Dark)</label>
                        <input type="text" name="title_1" class="form-input-item" value="{{ old('title_1', $sectionSettings['title_1']) }}" required maxlength="255">
                    </div>
                </div>

                <div class="form-grid-2">
                    <div class="form-group-item">
                        <label class="form-label-item">Title Part 2 (Orange Highlight)</label>
                        <input type="text" name="title_2" class="form-input-item" value="{{ old('title_2', $sectionSettings['title_2']) }}" placeholder="e.g. Questions" maxlength="255">
                    </div>
                    <div class="form-group-item">
                        <label class="form-label-item">Subtitle Description</label>
                        <input type="text" name="subtitle" class="form-input-item" value="{{ old('subtitle', $sectionSettings['subtitle']) }}" placeholder="Section description...">
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-10">
                    <button type="submit" class="btn-admin btn-primary">
                        <i class="fa-solid fa-floppy-disk"></i>
                        <span>Save Section Header</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- FAQ Accordion Items List -->
    <div class="faq-list-container">
        @forelse($faqs as $faq)
        <div class="faq-card-item">
            <div class="faq-card-header">
                <div class="faq-q-left">
                    <div class="faq-num-badge">
                        {{ sprintf('%02d', $loop->iteration) }}
                    </div>
                    <div>
                        <h4 class="faq-q-title">{{ $faq->question }}</h4>
                        <span class="text-muted fs-11">Sort Order: #{{ $faq->order }}</span>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-12">
                    <form action="{{ route('admin.faqs.toggle-status', $faq->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn-reset-raw">
                            <span class="status-badge {{ $faq->is_active ? 'active' : 'inactive' }}" title="Click to toggle status">
                                <i class="fa-solid {{ $faq->is_active ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                <span>{{ $faq->is_active ? 'Active' : 'Hidden' }}</span>
                            </span>
                        </button>
                    </form>

                    <div class="action-btns-group">
                        <a href="{{ route('admin.faqs.edit', $faq->id) }}" class="btn-action btn-action-edit" title="Edit Question">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST" onsubmit="return confirm('Delete this FAQ question?');" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-action btn-action-delete" title="Delete Question">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="faq-card-body">
                {{ $faq->answer }}
            </div>
        </div>
        @empty
        <div class="admin-empty-dashed-box">
            <i class="fa-solid fa-circle-question empty-icon-lg"></i>
            <h4 class="text-navy mb-6">No FAQ Questions Found</h4>
            <p class="text-muted fs-13 mb-16">Add your first frequently asked question to display on the homepage.</p>
            <a href="{{ route('admin.faqs.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add First Question</span>
            </a>
        </div>
        @endforelse
    </div>

</div>
@endsection
