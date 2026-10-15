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
            <a href="{{ route('admin.faqs.section-header') }}" class="btn-admin btn-secondary" title="Edit section header on a separate page">
                <i class="fa-solid fa-sliders"></i>
                <span>Edit Section Header</span>
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
                        <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST" data-confirm="Delete this FAQ question?" data-confirm-title="Delete FAQ" class="d-inline">
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
