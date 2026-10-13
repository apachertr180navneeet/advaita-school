@extends('layouts.admin')

@section('title', 'Campus Gallery Management')
@section('page_title', 'Campus Gallery (A Day at Advaita, in Pictures)')

@section('styles')
<style>
    .gallery-mgmt-wrapper {
        display: flex;
        flex-direction: column;
        gap: 24px;
        width: 100%;
    }

    .gallery-top-bar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
    }

    .gallery-top-title h3 {
        font-size: 20px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0 0 4px 0;
    }

    .gallery-top-title p {
        font-size: 13.5px;
        color: #64748B;
        margin: 0;
    }

    .gallery-metrics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 16px;
    }

    .gallery-metric-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 14px;
        padding: 16px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
    }

    .gallery-metric-info h4 {
        font-size: 22px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0 0 3px 0;
        line-height: 1;
    }

    .gallery-metric-info span {
        font-size: 11.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748B;
    }

    .gallery-metric-icon {
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

    /* Settings Card */
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

    /* Gallery Items Grid */
    .gallery-grid-cards {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
    }

    .gallery-card-item {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        display: flex;
        flex-direction: column;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .gallery-card-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    }

    .gallery-card-thumb-wrap {
        position: relative;
        height: 180px;
        background: #0f172a;
        overflow: hidden;
    }

    .gallery-card-thumb {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .gallery-badge-overlay {
        position: absolute;
        top: 12px;
        left: 12px;
        background: rgba(15, 23, 42, 0.85);
        backdrop-filter: blur(8px);
        color: #ffffff;
        padding: 5px 12px;
        border-radius: 30px;
        font-size: 11.5px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 6px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }

    .gallery-badge-overlay i {
        color: var(--admin-orange);
    }

    .gallery-order-tag {
        position: absolute;
        top: 12px;
        right: 12px;
        background: var(--admin-orange);
        color: #ffffff;
        font-size: 11px;
        font-weight: 800;
        padding: 3px 8px;
        border-radius: 6px;
    }

    .gallery-card-details {
        padding: 16px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        flex: 1;
    }

    .gallery-caption-text {
        font-size: 13px;
        color: #334155;
        line-height: 1.4;
        margin: 0;
        min-height: 38px;
    }

    .gallery-specs-row {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 11.5px;
        color: #64748B;
        padding-top: 8px;
        border-top: 1px dashed var(--admin-border);
    }

    .gallery-card-footer {
        padding: 12px 16px;
        background: #FAFBFD;
        border-top: 1px solid var(--admin-border);
        display: flex;
        align-items: center;
        justify-content: space-between;
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
<div class="gallery-mgmt-wrapper">

    <!-- Top Action Bar -->
    <div class="gallery-top-bar">
        <div class="gallery-top-title">
            <h3>Campus Gallery Photos</h3>
            <p>Manage pictures displayed in Section 7 of the homepage with categories, badges, and ordering.</p>
        </div>
        <div style="display: flex; gap: 10px; align-items: center;">
            <a href="{{ route('home') }}#gallery" target="_blank" class="btn-admin btn-secondary" title="View live on Homepage">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>View on Homepage</span>
            </a>
            <a href="{{ route('admin.gallery.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add Gallery Photo</span>
            </a>
        </div>
    </div>

    <!-- Metrics Row -->
    <div class="gallery-metrics-grid">
        <div class="gallery-metric-card">
            <div class="gallery-metric-info">
                <h4>{{ $items->count() }}</h4>
                <span>Total Photos</span>
            </div>
            <div class="gallery-metric-icon metric-icon-total">
                <i class="fa-solid fa-images"></i>
            </div>
        </div>
        <div class="gallery-metric-card">
            <div class="gallery-metric-info">
                <h4>{{ $items->where('is_active', true)->count() }}</h4>
                <span>Visible on Site</span>
            </div>
            <div class="gallery-metric-icon metric-icon-active">
                <i class="fa-solid fa-eye"></i>
            </div>
        </div>
        <div class="gallery-metric-card">
            <div class="gallery-metric-info">
                <h4>{{ $items->where('is_active', false)->count() }}</h4>
                <span>Hidden / Inactive</span>
            </div>
            <div class="gallery-metric-icon metric-icon-inactive">
                <i class="fa-solid fa-eye-slash"></i>
            </div>
        </div>
    </div>

    <!-- Section Heading Editor Accordion Card -->
    <div class="section-settings-card">
        <div class="section-settings-head" onclick="document.getElementById('settingsBody').classList.toggle('d-none')">
            <h4>
                <i class="fa-solid fa-heading" style="color: var(--admin-orange);"></i>
                <span>Gallery Section Header &amp; Action Buttons</span>
            </h4>
            <span style="font-size: 12.5px; color: #64748B;">Click to edit header texts <i class="fa-solid fa-chevron-down ms-1"></i></span>
        </div>
        <div class="settings-body" id="settingsBody">
            <form action="{{ route('admin.gallery.section-header') }}" method="POST">
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
                        <label class="form-label-item">Title Part 2 (Orange Italic Highlight)</label>
                        <input type="text" name="title_2" class="form-input-item" value="{{ old('title_2', $sectionSettings['title_2']) }}" placeholder="e.g. in pictures." maxlength="255">
                    </div>
                    <div class="form-group-item">
                        <label class="form-label-item">Subtitle Description</label>
                        <input type="text" name="subtitle" class="form-input-item" value="{{ old('subtitle', $sectionSettings['subtitle']) }}" placeholder="Section description paragraph...">
                    </div>
                </div>

                <div class="form-grid-2">
                    <div class="form-group-item">
                        <label class="form-label-item">Primary Button Text &amp; URL</label>
                        <div style="display: flex; gap: 8px;">
                            <input type="text" name="btn_1_text" class="form-input-item" style="flex: 1;" value="{{ old('btn_1_text', $sectionSettings['btn_1_text']) }}" placeholder="Button text">
                            <input type="text" name="btn_1_url" class="form-input-item" style="flex: 2;" value="{{ old('btn_1_url', $sectionSettings['btn_1_url']) }}" placeholder="URL (e.g. /gallery)">
                        </div>
                    </div>
                    <div class="form-group-item">
                        <label class="form-label-item">Secondary Video Button Text &amp; URL</label>
                        <div style="display: flex; gap: 8px;">
                            <input type="text" name="btn_2_text" class="form-input-item" style="flex: 1;" value="{{ old('btn_2_text', $sectionSettings['btn_2_text']) }}" placeholder="Button text">
                            <input type="text" name="btn_2_url" class="form-input-item" style="flex: 2;" value="{{ old('btn_2_url', $sectionSettings['btn_2_url']) }}" placeholder="URL (e.g. #hero)">
                        </div>
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

    <!-- Gallery Photos Grid -->
    <div class="gallery-grid-cards">
        @forelse($items as $item)
        <div class="gallery-card-item">
            <div class="gallery-card-thumb-wrap">
                <img src="{{ $item->image_url }}" alt="{{ $item->caption ?? $item->category }}" class="gallery-card-thumb" loading="lazy">
                @if(!empty($item->category))
                <div class="gallery-badge-overlay">
                    <i class="{{ $item->icon ?: 'fa-solid fa-camera' }}"></i>
                    <span>{{ $item->category }}</span>
                </div>
                @endif
                <span class="gallery-order-tag">#{{ $item->order }}</span>
            </div>

            <div class="gallery-card-details">
                <p class="gallery-caption-text">
                    {{ $item->caption ?: 'No caption specified.' }}
                </p>
                <div class="gallery-specs-row">
                    <span><i class="fa-solid fa-file-image me-1"></i> {{ $item->image_size ?? 'Optimized' }}</span>
                    <span><i class="fa-solid fa-expand me-1"></i> {{ $item->image_dimensions ?? 'Standard' }}</span>
                </div>
            </div>

            <div class="gallery-card-footer">
                <div>
                    <form action="{{ route('admin.gallery.toggle-status', $item->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PATCH')
                        <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                            <span class="status-badge {{ $item->is_active ? 'active' : 'inactive' }}" title="Click to toggle status">
                                <i class="fa-solid {{ $item->is_active ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                <span>{{ $item->is_active ? 'Active' : 'Hidden' }}</span>
                            </span>
                        </button>
                    </form>
                </div>
                <div class="action-btns-group">
                    <a href="{{ route('admin.gallery.edit', $item->id) }}" class="btn-action btn-action-edit" title="Edit Photo">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Delete this gallery photo?');" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-action btn-action-delete" title="Delete Photo">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div style="grid-column: 1 / -1; padding: 60px; text-align: center; background: #ffffff; border: 1px dashed var(--admin-border); border-radius: 16px;">
            <i class="fa-solid fa-camera-retro" style="font-size: 40px; color: #CBD5E1; margin-bottom: 12px;"></i>
            <h4 style="color: var(--admin-navy); margin: 0 0 6px 0;">No Gallery Photos Found</h4>
            <p style="color: #64748B; font-size: 13.5px; margin: 0 0 16px 0;">Get started by uploading your first photo for the homepage gallery.</p>
            <a href="{{ route('admin.gallery.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add First Photo</span>
            </a>
        </div>
        @endforelse
    </div>

</div>
@endsection
