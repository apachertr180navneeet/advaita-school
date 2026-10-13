@extends('layouts.admin')

@section('title', 'Parent Testimonials Management')
@section('page_title', 'Parent Testimonials (Voices That Inspire Us)')

@section('styles')
<style>
    .testi-mgmt-wrapper {
        display: flex;
        flex-direction: column;
        gap: 24px;
        width: 100%;
    }

    .testi-top-bar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
    }

    .testi-top-title h3 {
        font-size: 20px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0 0 4px 0;
    }

    .testi-top-title p {
        font-size: 13.5px;
        color: #64748B;
        margin: 0;
    }

    .testi-metrics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 16px;
    }

    .testi-metric-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 14px;
        padding: 16px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
    }

    .testi-metric-info h4 {
        font-size: 22px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0 0 3px 0;
        line-height: 1;
    }

    .testi-metric-info span {
        font-size: 11.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748B;
    }

    .testi-metric-icon {
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
    .metric-icon-orange { background: #FFF7ED; color: #EA580C; }

    /* Section Header Card */
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

    /* Testimonial Cards Grid */
    .testi-grid-cards {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 20px;
    }

    .testi-card-item {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        padding: 20px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 16px;
        position: relative;
        transition: transform 0.2s;
    }

    .testi-card-item:hover {
        transform: translateY(-3px);
    }

    .testi-card-item.theme-orange {
        border-top: 4px solid var(--admin-orange);
    }

    .testi-card-item.theme-blue {
        border-top: 4px solid #0284C7;
    }

    .testi-top-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .testi-stars-row {
        color: #F59E0B;
        font-size: 13px;
        display: flex;
        gap: 3px;
    }

    .theme-pill {
        font-size: 11px;
        font-weight: 700;
        padding: 3px 8px;
        border-radius: 6px;
        text-transform: uppercase;
    }

    .theme-pill.orange { background: #FFF7ED; color: #EA580C; }
    .theme-pill.blue { background: #EFF6FF; color: #0284C7; }

    .testi-quote-text {
        font-size: 13.5px;
        color: #334155;
        line-height: 1.5;
        font-style: italic;
        margin: 0;
        flex: 1;
    }

    .testi-author-row {
        display: flex;
        align-items: center;
        gap: 12px;
        padding-top: 12px;
        border-top: 1px dashed var(--admin-border);
    }

    .testi-avatar-img {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid var(--admin-border);
        flex-shrink: 0;
    }

    .testi-author-meta h5 {
        font-size: 14px;
        font-weight: 700;
        color: var(--admin-navy);
        margin: 0 0 2px 0;
    }

    .testi-author-meta span {
        font-size: 12px;
        color: #64748B;
        display: block;
        white-space: pre-line;
    }

    .testi-footer-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 6px;
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
<div class="testi-mgmt-wrapper">

    <!-- Top Action Bar -->
    <div class="testi-top-bar">
        <div class="testi-top-title">
            <h3>Parent Testimonials Management</h3>
            <p>Manage genuine parent quotes, star ratings, student grade notes, and avatars displayed in Section 8.</p>
        </div>
        <div style="display: flex; gap: 10px; align-items: center;">
            <a href="{{ route('home') }}#testimonials" target="_blank" class="btn-admin btn-secondary" title="View live on Homepage">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>View on Homepage</span>
            </a>
            <a href="{{ route('admin.testimonials.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add Testimonial</span>
            </a>
        </div>
    </div>

    <!-- Metrics Row -->
    <div class="testi-metrics-grid">
        <div class="testi-metric-card">
            <div class="testi-metric-info">
                <h4>{{ $testimonials->count() }}</h4>
                <span>Total Testimonials</span>
            </div>
            <div class="testi-metric-icon metric-icon-total">
                <i class="fa-solid fa-comment-dots"></i>
            </div>
        </div>
        <div class="testi-metric-card">
            <div class="testi-metric-info">
                <h4>{{ $testimonials->where('is_active', true)->count() }}</h4>
                <span>Active on Homepage</span>
            </div>
            <div class="testi-metric-icon metric-icon-active">
                <i class="fa-solid fa-check"></i>
            </div>
        </div>
        <div class="testi-metric-card">
            <div class="testi-metric-info">
                <h4>{{ $testimonials->avg('rating') ? number_format($testimonials->avg('rating'), 1) : '5.0' }} <span style="font-size: 14px; color: #F59E0B;">★</span></h4>
                <span>Average Rating</span>
            </div>
            <div class="testi-metric-icon metric-icon-orange">
                <i class="fa-solid fa-star"></i>
            </div>
        </div>
    </div>

    <!-- Section Heading Editor Accordion Card -->
    <div class="section-settings-card">
        <div class="section-settings-head" onclick="document.getElementById('settingsBody').classList.toggle('d-none')">
            <h4>
                <i class="fa-solid fa-heading" style="color: var(--admin-orange);"></i>
                <span>Testimonials Section Header Settings</span>
            </h4>
            <span style="font-size: 12.5px; color: #64748B;">Click to edit header texts <i class="fa-solid fa-chevron-down ms-1"></i></span>
        </div>
        <div class="settings-body" id="settingsBody">
            <form action="{{ route('admin.testimonials.section-header') }}" method="POST">
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
                        <input type="text" name="title_2" class="form-input-item" value="{{ old('title_2', $sectionSettings['title_2']) }}" placeholder="e.g. Inspire Us" maxlength="255">
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

    <!-- Testimonial Cards Grid -->
    <div class="testi-grid-cards">
        @forelse($testimonials as $testi)
        <div class="testi-card-item theme-{{ $testi->theme_color === 'blue' ? 'blue' : 'orange' }}">
            <div class="testi-top-row">
                <div class="testi-stars-row">
                    @for($i = 1; $i <= ($testi->rating ?: 5); $i++)
                        <i class="fa-solid fa-star"></i>
                    @endfor
                </div>
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span class="theme-pill {{ $testi->theme_color === 'blue' ? 'blue' : 'orange' }}">{{ ucfirst($testi->theme_color) }} Theme</span>
                    <span style="font-size: 11px; font-weight: 800; color: #64748B;">#{{ $testi->order }}</span>
                </div>
            </div>

            <p class="testi-quote-text">
                &ldquo;{{ $testi->content }}&rdquo;
            </p>

            <div class="testi-author-row">
                <img src="{{ $testi->avatar_url }}" alt="{{ $testi->parent_name }}" class="testi-avatar-img">
                <div class="testi-author-meta">
                    <h5>{{ $testi->parent_name }}</h5>
                    <span>{{ $testi->child_info ?: 'Parent at Advaita' }}</span>
                </div>
            </div>

            <div class="testi-footer-bar">
                <form action="{{ route('admin.testimonials.toggle-status', $testi->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('PATCH')
                    <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                        <span class="status-badge {{ $testi->is_active ? 'active' : 'inactive' }}" title="Click to toggle status">
                            <i class="fa-solid {{ $testi->is_active ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                            <span>{{ $testi->is_active ? 'Active' : 'Hidden' }}</span>
                        </span>
                    </button>
                </form>

                <div class="action-btns-group">
                    <a href="{{ route('admin.testimonials.edit', $testi->id) }}" class="btn-action btn-action-edit" title="Edit Testimonial">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <form action="{{ route('admin.testimonials.destroy', $testi->id) }}" method="POST" onsubmit="return confirm('Delete this testimonial?');" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-action btn-action-delete" title="Delete Testimonial">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div style="grid-column: 1 / -1; padding: 60px; text-align: center; background: #ffffff; border: 1px dashed var(--admin-border); border-radius: 16px;">
            <i class="fa-solid fa-comment-dots" style="font-size: 40px; color: #CBD5E1; margin-bottom: 12px;"></i>
            <h4 style="color: var(--admin-navy); margin: 0 0 6px 0;">No Testimonials Found</h4>
            <p style="color: #64748B; font-size: 13.5px; margin: 0 0 16px 0;">Add your first parent feedback review to display on the homepage.</p>
            <a href="{{ route('admin.testimonials.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add Testimonial</span>
            </a>
        </div>
        @endforelse
    </div>

</div>
@endsection
