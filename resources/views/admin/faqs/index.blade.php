@extends('layouts.admin')

@section('title', 'FAQs Management')
@section('page_title', 'Frequently Asked Questions (FAQ Accordion)')

@section('styles')
<style>
    .faq-mgmt-wrapper {
        display: flex;
        flex-direction: column;
        gap: 24px;
        width: 100%;
    }

    .faq-top-bar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
    }

    .faq-top-title h3 {
        font-size: 20px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0 0 4px 0;
    }

    .faq-top-title p {
        font-size: 13.5px;
        color: #64748B;
        margin: 0;
    }

    .faq-metrics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 16px;
    }

    .faq-metric-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 14px;
        padding: 16px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
    }

    .faq-metric-info h4 {
        font-size: 22px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0 0 3px 0;
        line-height: 1;
    }

    .faq-metric-info span {
        font-size: 11.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748B;
    }

    .faq-metric-icon {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }

    .metric-icon-total { background: #EFF6FF; color: #2563EB; }
    .metric-icon-active { background: #DCFCE7; color: #16A34A; }
    .metric-icon-inactive { background: #F1F5F9; color: #64748B; }

    /* Section Settings Card */
    .section-settings-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        overflow: hidden;
    }

    .section-settings-head {
        padding: 18px 24px;
        background: #FAFBFD;
        border-bottom: 1px solid var(--admin-border);
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
    }

    .section-settings-head h4 {
        font-size: 15px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .settings-body {
        padding: 24px;
    }

    .form-grid-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
        margin-bottom: 16px;
    }

    .form-group-item {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .form-label-item {
        font-size: 12.5px;
        font-weight: 700;
        color: var(--admin-navy);
    }

    .form-input-item {
        padding: 10px 14px;
        border: 1px solid var(--admin-border);
        border-radius: 10px;
        font-size: 13.5px;
        outline: none;
        transition: border-color 0.2s;
        width: 100%;
        box-sizing: border-box;
    }

    .form-input-item:focus {
        border-color: var(--admin-orange);
    }

    /* FAQ List */
    .faq-list-container {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .faq-card-item {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.02);
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .faq-card-item:hover {
        border-color: #CBD5E1;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
    }

    .faq-card-header {
        padding: 16px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 14px;
        background: #ffffff;
    }

    .faq-q-left {
        display: flex;
        align-items: center;
        gap: 12px;
        flex: 1;
    }

    .faq-num-badge {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        background: #FFF7ED;
        color: var(--admin-orange);
        font-weight: 800;
        font-size: 13px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .faq-q-title {
        font-size: 14.5px;
        font-weight: 700;
        color: var(--admin-navy);
        margin: 0;
    }

    .faq-card-body {
        padding: 0 20px 18px 64px;
        font-size: 13px;
        color: #475569;
        line-height: 1.6;
        border-top: 1px dashed #F1F5F9;
        padding-top: 14px;
    }

    .status-badge {
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 11.5px;
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .status-badge.active { background: #DCFCE7; color: #15803D; }
    .status-badge.inactive { background: #F1F5F9; color: #64748B; }

    .action-btns-group {
        display: flex;
        align-items: center;
        gap: 8px;
    }
</style>
@endsection

@section('content')
<div class="faq-mgmt-wrapper">

    <!-- Top Action Bar -->
    <div class="faq-top-bar">
        <div class="faq-top-title">
            <h3>Frequently Asked Questions</h3>
            <p>Manage curriculum, admissions, fees, and safety questions in the homepage FAQ accordion.</p>
        </div>
        <div style="display: flex; gap: 10px; align-items: center;">
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
                <i class="fa-solid fa-heading" style="color: var(--admin-orange);"></i>
                <span>FAQ Section Header Settings</span>
            </h4>
            <span style="font-size: 12.5px; color: #64748B;">Click to edit header texts <i class="fa-solid fa-chevron-down ms-1"></i></span>
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

                <div style="display: flex; justify-content: flex-end; margin-top: 10px;">
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
                        <span style="font-size: 11.5px; color: #94A3B8;">Sort Order: #{{ $faq->order }}</span>
                    </div>
                </div>

                <div style="display: flex; align-items: center; gap: 12px;">
                    <form action="{{ route('admin.faqs.toggle-status', $faq->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PATCH')
                        <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
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
                        <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST" onsubmit="return confirm('Delete this FAQ question?');" style="display: inline;">
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
        <div style="padding: 60px; text-align: center; background: #ffffff; border: 1px dashed var(--admin-border); border-radius: 16px;">
            <i class="fa-solid fa-circle-question" style="font-size: 40px; color: #CBD5E1; margin-bottom: 12px;"></i>
            <h4 style="color: var(--admin-navy); margin: 0 0 6px 0;">No FAQ Questions Found</h4>
            <p style="color: #64748B; font-size: 13.5px; margin: 0 0 16px 0;">Add your first frequently asked question to display on the homepage.</p>
            <a href="{{ route('admin.faqs.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add First Question</span>
            </a>
        </div>
        @endforelse
    </div>

</div>
@endsection
