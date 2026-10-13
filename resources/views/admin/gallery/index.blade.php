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

    /* Top Bar */
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

    /* Metrics Grid */
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
    .metric-icon-ratio { background: #FFF7ED; color: #EA580C; }
    .metric-icon-anchor { background: #F3E8FF; color: #7C3AED; }

    /* Section Settings Card */
    .section-settings-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 18px;
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
    }

    .section-settings-head h4 {
        font-size: 15px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .section-settings-body {
        padding: 24px;
    }

    /* Live Header Preview Box */
    .header-live-preview-box {
        background: #F8FAFC;
        border: 1px dashed #CBD5E1;
        border-radius: 14px;
        padding: 22px 24px;
        margin-bottom: 22px;
        text-align: center;
    }

    .preview-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 11px;
        font-weight: 800;
        color: var(--admin-orange);
        background: rgba(243, 112, 33, 0.1);
        border: 1px solid rgba(243, 112, 33, 0.25);
        padding: 4px 14px;
        border-radius: 20px;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .preview-title {
        font-size: 22px;
        font-weight: 800;
        margin-bottom: 8px;
        line-height: 1.25;
    }

    .preview-title .part-dark { color: #083B7A; }
    .preview-title .part-orange { color: #F37021; }

    .preview-subtitle {
        font-size: 13.5px;
        color: #64748B;
        max-width: 680px;
        margin: 0 auto 14px auto;
        line-height: 1.55;
    }

    .preview-buttons-wrap {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .preview-btn-main {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 12.5px;
        font-weight: 700;
        background: #F37021;
        color: #ffffff;
        padding: 7px 16px;
        border-radius: 20px;
        box-shadow: 0 2px 8px rgba(243, 112, 33, 0.25);
    }

    .preview-btn-video {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 12.5px;
        font-weight: 700;
        background: #083B7A;
        color: #ffffff;
        padding: 7px 16px;
        border-radius: 20px;
    }

    /* Form Fields */
    .form-grid-3 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 16px;
        margin-bottom: 16px;
    }

    .form-grid-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
        margin-bottom: 16px;
    }

    .form-group-custom {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .form-label-custom {
        font-size: 13px;
        font-weight: 700;
        color: #334155;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .form-input-custom {
        background: #F8FAFC;
        border: 1px solid var(--admin-border);
        border-radius: 10px;
        padding: 10px 14px;
        font-size: 13.5px;
        font-family: inherit;
        color: var(--admin-text-main);
        outline: none;
        transition: all 0.2s;
        width: 100%;
        box-sizing: border-box;
    }

    .form-input-custom:focus {
        border-color: var(--admin-navy);
        background: #ffffff;
        box-shadow: 0 0 0 3px rgba(8, 59, 122, 0.08);
    }

    /* Table & Grid Card */
    .gallery-table-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 18px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        overflow: hidden;
    }

    .table-top-actions-bar {
        padding: 18px 24px;
        background: #FAFBFD;
        border-bottom: 1px solid var(--admin-border);
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 14px;
    }

    .table-view-tabs {
        display: flex;
        align-items: center;
        gap: 6px;
        background: #F1F5F9;
        padding: 4px;
        border-radius: 10px;
        border: 1px solid #E2E8F0;
    }

    .view-tab-btn {
        background: transparent;
        border: none;
        padding: 6px 14px;
        border-radius: 8px;
        font-size: 12.5px;
        font-weight: 700;
        color: #64748B;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: all 0.2s;
    }

    .view-tab-btn.active {
        background: #ffffff;
        color: var(--admin-navy);
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    }

    /* Thumbnail Box in Table */
    .photo-thumb-wrap {
        display: flex;
        flex-direction: column;
        gap: 6px;
        width: 130px;
    }

    .photo-thumb-box {
        position: relative;
        width: 130px;
        height: 82px;
        border-radius: 10px;
        overflow: hidden;
        background: #0B192C;
        border: 1px solid #CBD5E1;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
    }

    .photo-thumb-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .photo-thumb-box:hover img {
        transform: scale(1.08);
    }

    .badge-icon-chip {
        position: absolute;
        top: 0;
        left: 0;
        font-size: 11px;
        font-weight: 800;
        color: #ffffff;
        background: rgba(15, 23, 42, 0.85);
        padding: 3px 8px;
        border-bottom-right-radius: 10px;
        backdrop-filter: blur(4px);
    }

    .spec-pill {
        font-size: 10.5px;
        font-weight: 700;
        padding: 2px 6px;
        border-radius: 4px;
        background: #F1F5F9;
        color: #475569;
        border: 1px solid #E2E8F0;
        display: inline-flex;
        align-items: center;
        gap: 3px;
    }

    .category-chip {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
        background: #EFF6FF;
        color: #1E40AF;
        border: 1px solid #DBEAFE;
    }

    .category-chip i {
        color: var(--admin-orange);
    }

    /* Grid Preview View */
    .gallery-visual-grid {
        display: none;
        padding: 24px;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 22px;
    }

    .visual-gallery-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.04);
        display: flex;
        flex-direction: column;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .visual-gallery-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(8, 59, 122, 0.09);
    }

    .visual-gallery-media {
        position: relative;
        height: 190px;
        overflow: hidden;
        background: #0f172a;
    }

    .visual-gallery-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .visual-gallery-card:hover .visual-gallery-media img {
        transform: scale(1.05);
    }

    .visual-badge-pill {
        position: absolute;
        top: 12px;
        left: 12px;
        background: rgba(15, 23, 42, 0.85);
        backdrop-filter: blur(8px);
        color: #ffffff;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 11.5px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .visual-badge-pill i {
        color: var(--admin-orange);
    }

    .visual-order-tag {
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

    .visual-card-body {
        padding: 16px 18px;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .visual-caption {
        font-size: 13px;
        color: #334155;
        line-height: 1.45;
        margin: 0 0 12px 0;
        min-height: 38px;
    }

    .visual-footer-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-top: 1px solid var(--admin-border);
        padding-top: 12px;
        margin-top: 8px;
    }
</style>
@endsection

@section('content')
<div class="gallery-mgmt-wrapper">

    <!-- 1. Header Action Bar -->
    <div class="gallery-top-bar">
        <div class="gallery-top-title">
            <h3>Campus Gallery Photos</h3>
            <p>Manage the homepage carousel photo slides, categories, and section header text shown to visitors.</p>
        </div>
        <div style="display: flex; gap: 10px; align-items: center;">
            <a href="{{ route('home') }}#gallery" target="_blank" class="btn-admin btn-secondary" title="View live on homepage">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>Preview Homepage</span>
            </a>
            <a href="{{ route('admin.gallery.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add Gallery Photo</span>
            </a>
        </div>
    </div>

    <!-- 2. Metric Stat Cards -->
    <div class="gallery-metrics-grid">
        <div class="gallery-metric-card">
            <div class="gallery-metric-info">
                <h4>{{ $items->count() }}</h4>
                <span>Total Photos</span>
            </div>
            <div class="gallery-metric-icon metric-icon-total">
                <i class="fa-solid fa-camera-retro"></i>
            </div>
        </div>

        <div class="gallery-metric-card">
            <div class="gallery-metric-info">
                <h4>{{ $items->where('is_active', true)->count() }}</h4>
                <span>Active in Slider</span>
            </div>
            <div class="gallery-metric-icon metric-icon-active">
                <i class="fa-solid fa-circle-check"></i>
            </div>
        </div>

        <div class="gallery-metric-card">
            <div class="gallery-metric-info">
                <h4>600 × 400</h4>
                <span>Optimal Ratio (16:9)</span>
            </div>
            <div class="gallery-metric-icon metric-icon-ratio">
                <i class="fa-solid fa-expand"></i>
            </div>
        </div>

        <div class="gallery-metric-card">
            <div class="gallery-metric-info">
                <h4>#gallery</h4>
                <span>Homepage Anchor</span>
            </div>
            <div class="gallery-metric-icon metric-icon-anchor">
                <i class="fa-solid fa-anchor"></i>
            </div>
        </div>
    </div>

    <!-- 3. Section Header & Heading Configuration Card -->
    <div class="section-settings-card">
        <div class="section-settings-head">
            <h4>
                <i class="fa-solid fa-heading" style="color: var(--admin-orange);"></i>
                <span>Section Heading &amp; Action Buttons Configuration</span>
            </h4>
            <span style="font-size: 12px; color: #64748B;">Appears above the photo carousel on the public website</span>
        </div>

        <div class="section-settings-body">
            <!-- Live Preview of Section Header -->
            <div class="header-live-preview-box">
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

                <div class="form-grid-3">
                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Eyebrow Tag</span>
                            <span style="color: #EF4444;">*</span>
                        </label>
                        <input type="text" id="inputEyebrow" name="eyebrow" class="form-input-custom" value="{{ old('eyebrow', $sectionSettings['eyebrow']) }}" required maxlength="150" placeholder="e.g. CAMPUS GALLERY">
                    </div>

                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Title Part 1 (Navy Dark)</span>
                            <span style="color: #EF4444;">*</span>
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

                <div class="form-group-custom" style="margin-bottom: 16px;">
                    <label class="form-label-custom">
                        <span>Section Subtitle Description</span>
                    </label>
                    <textarea id="inputSubtitle" name="subtitle" rows="2" class="form-input-custom" placeholder="Brief summary describing the campus activities...">{{ old('subtitle', $sectionSettings['subtitle']) }}</textarea>
                </div>

                <div class="form-grid-2" style="margin-bottom: 20px;">
                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Primary Button (Explore Gallery) Text &amp; URL</span>
                        </label>
                        <div style="display: flex; gap: 8px;">
                            <input type="text" id="inputBtn1" name="btn_1_text" class="form-input-custom" style="flex: 1;" value="{{ old('btn_1_text', $sectionSettings['btn_1_text']) }}" placeholder="Button text">
                            <input type="text" name="btn_1_url" class="form-input-custom" style="flex: 2;" value="{{ old('btn_1_url', $sectionSettings['btn_1_url']) }}" placeholder="URL (e.g. /gallery)">
                        </div>
                    </div>

                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Secondary Video Button Text &amp; URL</span>
                        </label>
                        <div style="display: flex; gap: 8px;">
                            <input type="text" id="inputBtn2" name="btn_2_text" class="form-input-custom" style="flex: 1;" value="{{ old('btn_2_text', $sectionSettings['btn_2_text']) }}" placeholder="Button text">
                            <input type="text" name="btn_2_url" class="form-input-custom" style="flex: 2;" value="{{ old('btn_2_url', $sectionSettings['btn_2_url']) }}" placeholder="URL (e.g. #hero)">
                        </div>
                    </div>
                </div>

                <div style="display: flex; justify-content: flex-end;">
                    <button type="submit" class="btn-admin btn-primary">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Save Section Heading</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- 4. Photos Registry (Table & Visual Switcher) -->
    <div class="gallery-table-card">
        <div class="table-top-actions-bar">
            <div style="display: flex; align-items: center; gap: 12px;">
                <h3 style="font-size: 16px; font-weight: 800; color: var(--admin-navy); margin: 0; display: flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-images" style="color: var(--admin-orange);"></i>
                    <span>Gallery Photos ({{ $items->count() }})</span>
                </h3>
                <span class="table-count-badge" style="background: #EFF6FF; color: #2563EB; border: 1px solid #BFDBFE; font-size: 11.5px; font-weight: 700; padding: 2px 8px; border-radius: 12px;">
                    {{ $items->where('is_active', true)->count() }} Active
                </span>
            </div>

            <div style="display: flex; align-items: center; gap: 12px;">
                <!-- View Toggle Buttons -->
                <div class="table-view-tabs">
                    <button type="button" class="view-tab-btn active" id="btnTableView" onclick="setGalleryView('table')">
                        <i class="fa-solid fa-table-list"></i>
                        <span>Table View</span>
                    </button>
                    <button type="button" class="view-tab-btn" id="btnGridView" onclick="setGalleryView('grid')">
                        <i class="fa-solid fa-grip"></i>
                        <span>Cards Preview</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- 4A. Modern Structured Table View -->
        <div class="table-responsive" id="galleryTableContainer">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 80px;">Order</th>
                        <th style="width: 150px;">Photo Preview</th>
                        <th style="width: 220px;">Category &amp; Icon</th>
                        <th>Caption / Description</th>
                        <th style="width: 130px;">Status</th>
                        <th style="width: 120px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $item)
                    <tr>
                        <!-- Order & Position -->
                        <td>
                            <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 2px;">
                                <strong style="font-size: 14px; color: var(--admin-navy);">#{{ $item->order }}</strong>
                                <span style="font-size: 10.5px; color: #64748B; font-weight: 600;">Slide {{ $loop->iteration }}</span>
                            </div>
                        </td>

                        <!-- Thumbnail with Specs -->
                        <td>
                            <div class="photo-thumb-wrap">
                                <div class="photo-thumb-box">
                                    <img src="{{ $item->image_url }}" alt="{{ $item->caption ?? $item->category }}" loading="lazy">
                                    <div class="badge-icon-chip">
                                        <i class="{{ $item->icon ?: 'fa-solid fa-camera' }}"></i>
                                    </div>
                                </div>
                                <div style="display: flex; gap: 4px; flex-wrap: wrap;">
                                    <span class="spec-pill"><i class="fa-solid fa-expand"></i> {{ $item->image_dimensions ?? 'Standard' }}</span>
                                    <span class="spec-pill"><i class="fa-solid fa-hard-drive"></i> {{ $item->image_size ?? 'Optimized' }}</span>
                                </div>
                            </div>
                        </td>

                        <!-- Category & Icon -->
                        <td>
                            <span class="category-chip">
                                <i class="{{ $item->icon ?: 'fa-solid fa-camera' }}"></i>
                                <span>{{ $item->category ?: 'Campus Life' }}</span>
                            </span>
                        </td>

                        <!-- Caption -->
                        <td>
                            <div style="font-size: 13.5px; color: #334155; line-height: 1.5; max-width: 540px;">
                                {{ $item->caption ?: 'No caption specified.' }}
                            </div>
                        </td>

                        <!-- Status Toggle -->
                        <td>
                            <form action="{{ route('admin.gallery.toggle-status', $item->id) }}" method="POST" style="margin: 0;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn-action-view" style="background: {{ $item->is_active ? '#DCFCE7' : '#F1F5F9' }}; color: {{ $item->is_active ? '#15803D' : '#64748B' }}; border-color: {{ $item->is_active ? '#86EFAC' : '#E2E8F0' }}; border-radius: 20px; padding: 5px 12px; font-size: 12px;" title="Click to {{ $item->is_active ? 'deactivate' : 'activate' }}">
                                    <i class="fa-solid fa-circle-{{ $item->is_active ? 'check' : 'xmark' }}"></i>
                                    <span>{{ $item->is_active ? 'Active' : 'Hidden' }}</span>
                                </button>
                            </form>
                        </td>

                        <!-- Actions -->
                        <td style="text-align: right;">
                            <div style="display: inline-flex; align-items: center; gap: 6px;">
                                <a href="{{ route('admin.gallery.edit', $item->id) }}" class="btn-action-view" title="Edit Photo">
                                    <i class="fa-solid fa-pen"></i>
                                    <span>Edit</span>
                                </a>

                                <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Delete this gallery photo?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-action-delete" title="Delete Photo">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" style="text-align: center; padding: 50px 20px; color: #94A3B8;">
                            No gallery photos found. Click "Add Gallery Photo" to get started.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- 4B. Visual Cards Grid (Toggled) -->
        <div class="gallery-visual-grid" id="galleryGridContainer">
            @foreach($items as $item)
            <div class="visual-gallery-card">
                <div class="visual-gallery-media">
                    <img src="{{ $item->image_url }}" alt="{{ $item->caption ?? $item->category }}" loading="lazy">
                    <div class="visual-badge-pill">
                        <i class="{{ $item->icon ?: 'fa-solid fa-camera' }}"></i>
                        <span>{{ $item->category ?: 'Campus Life' }}</span>
                    </div>
                    <span class="visual-order-tag">#{{ $item->order }}</span>
                </div>
                <div class="visual-card-body">
                    <p class="visual-caption">
                        {{ $item->caption ?: 'No caption specified.' }}
                    </p>
                    <div style="display: flex; gap: 6px; margin-bottom: 8px;">
                        <span class="spec-pill"><i class="fa-solid fa-expand"></i> {{ $item->image_dimensions ?? 'Standard' }}</span>
                        <span class="spec-pill"><i class="fa-solid fa-hard-drive"></i> {{ $item->image_size ?? 'Optimized' }}</span>
                    </div>
                    <div class="visual-footer-bar">
                        <span style="font-size: 12px; font-weight: 700; color: {{ $item->is_active ? '#15803D' : '#64748B' }};">
                            <i class="fa-solid fa-circle-{{ $item->is_active ? 'check' : 'xmark' }}"></i>
                            {{ $item->is_active ? 'Active' : 'Hidden' }}
                        </span>
                        <div style="display: flex; gap: 6px;">
                            <a href="{{ route('admin.gallery.edit', $item->id) }}" class="btn-action-view" style="padding: 5px 10px; font-size: 12px;">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Delete this photo?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action-delete" style="padding: 5px 8px;">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Real-Time Header Preview Updates
    const inputEyebrow = document.getElementById('inputEyebrow');
    const inputTitle1 = document.getElementById('inputTitle1');
    const inputTitle2 = document.getElementById('inputTitle2');
    const inputSubtitle = document.getElementById('inputSubtitle');
    const inputBtn1 = document.getElementById('inputBtn1');
    const inputBtn2 = document.getElementById('inputBtn2');

    const previewEyebrow = document.getElementById('previewEyebrow');
    const previewTitle1 = document.getElementById('previewTitle1');
    const previewTitle2 = document.getElementById('previewTitle2');
    const previewSubtitle = document.getElementById('previewSubtitle');
    const previewBtn1 = document.getElementById('previewBtn1');
    const previewBtn2 = document.getElementById('previewBtn2');

    if (inputEyebrow && previewEyebrow) {
        inputEyebrow.addEventListener('input', () => { previewEyebrow.textContent = inputEyebrow.value || 'CAMPUS GALLERY'; });
    }
    if (inputTitle1 && previewTitle1) {
        inputTitle1.addEventListener('input', () => { previewTitle1.textContent = inputTitle1.value || 'A day at Advaita,'; });
    }
    if (inputTitle2 && previewTitle2) {
        inputTitle2.addEventListener('input', () => { previewTitle2.textContent = inputTitle2.value || 'in pictures.'; });
    }
    if (inputSubtitle && previewSubtitle) {
        inputSubtitle.addEventListener('input', () => { previewSubtitle.textContent = inputSubtitle.value || ''; });
    }
    if (inputBtn1 && previewBtn1) {
        inputBtn1.addEventListener('input', () => { previewBtn1.textContent = inputBtn1.value || 'Explore Photo Gallery'; });
    }
    if (inputBtn2 && previewBtn2) {
        inputBtn2.addEventListener('input', () => { previewBtn2.textContent = inputBtn2.value || 'Watch Campus Highlights'; });
    }
});

// Switch Between Table View & Grid View
function setGalleryView(mode) {
    const tableContainer = document.getElementById('galleryTableContainer');
    const gridContainer = document.getElementById('galleryGridContainer');
    const btnTable = document.getElementById('btnTableView');
    const btnGrid = document.getElementById('btnGridView');

    if (mode === 'grid') {
        tableContainer.style.display = 'none';
        gridContainer.style.display = 'grid';
        btnTable.classList.remove('active');
        btnGrid.classList.add('active');
        localStorage.setItem('gallery_admin_view_mode', 'grid');
    } else {
        tableContainer.style.display = 'block';
        gridContainer.style.display = 'none';
        btnTable.classList.add('active');
        btnGrid.classList.remove('active');
        localStorage.setItem('gallery_admin_view_mode', 'table');
    }
}

// Persist Selected View Tab
const savedMode = localStorage.getItem('gallery_admin_view_mode');
if (savedMode === 'grid') {
    setGalleryView('grid');
}
</script>
@endsection
