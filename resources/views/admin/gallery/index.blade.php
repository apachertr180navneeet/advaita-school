@extends('layouts.admin')

@section('title', 'Campus Gallery Management')
@section('page_title', 'Campus Gallery (A Day at Advaita, in Pictures)')



@section('content')
<div class="gallery-mgmt-wrapper">

    <!-- 1. Header Action Bar -->
    <div class="gallery-top-bar">
        <div class="gallery-top-title">
            <h3>Campus Gallery Photos</h3>
            <p>Manage the homepage carousel photo slides, categories, and section header text shown to visitors.</p>
        </div>
        <div class="d-flex align-items-center gap-10">
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
                <i class="fa-solid fa-heading text-orange"></i>
                <span>Section Heading &amp; Action Buttons Configuration</span>
            </h4>
            <span class="text-muted fs-12">Appears above the photo carousel on the public website</span>
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
                    <textarea id="inputSubtitle" name="subtitle" rows="2" class="form-input-custom" placeholder="Brief summary describing the campus activities...">{{ old('subtitle', $sectionSettings['subtitle']) }}</textarea>
                </div>

                <div class="form-grid-2 mb-20">
                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Primary Button (Explore Gallery) Text &amp; URL</span>
                        </label>
                        <div class="d-flex gap-8">
                            <input type="text" id="inputBtn1" name="btn_1_text" class="form-input-custom flex-1" value="{{ old('btn_1_text', $sectionSettings['btn_1_text']) }}" placeholder="Button text">
                            <input type="text" name="btn_1_url" class="form-input-custom flex-2" value="{{ old('btn_1_url', $sectionSettings['btn_1_url']) }}" placeholder="URL (e.g. /gallery)">
                        </div>
                    </div>

                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Secondary Video Button Text &amp; URL</span>
                        </label>
                        <div class="d-flex gap-8">
                            <input type="text" id="inputBtn2" name="btn_2_text" class="form-input-custom flex-1" value="{{ old('btn_2_text', $sectionSettings['btn_2_text']) }}" placeholder="Button text">
                            <input type="text" name="btn_2_url" class="form-input-custom flex-2" value="{{ old('btn_2_url', $sectionSettings['btn_2_url']) }}" placeholder="URL (e.g. #hero)">
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
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
            <div class="d-flex align-items-center gap-12">
                <h3 class="text-navy fs-16 font-extrabold d-flex align-items-center gap-8 m-0">
                    <i class="fa-solid fa-images text-orange"></i>
                    <span>Gallery Photos ({{ $items->count() }})</span>
                </h3>
                <span class="table-count-badge badge-blue-pill">
                    {{ $items->where('is_active', true)->count() }} Active
                </span>
            </div>

            <div class="d-flex align-items-center gap-12">
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
                        <th class="col-w80">Order</th>
                        <th class="col-w150">Photo Preview</th>
                        <th class="col-w220">Category &amp; Icon</th>
                        <th>Caption / Description</th>
                        <th class="col-w130">Status</th>
                        <th class="col-w120 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $item)
                    <tr>
                        <!-- Order & Position -->
                        <td>
                            <div class="d-flex flex-column align-items-start gap-2">
                                <strong class="text-navy fs-14">#{{ $item->order }}</strong>
                                <span class="text-muted fs-10 font-semibold">Slide {{ $loop->iteration }}</span>
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
                                <div class="d-flex gap-4 flex-wrap">
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
                            <div class="text-slate fs-13 line-clamp-desc-lg">
                                {{ $item->caption ?: 'No caption specified.' }}
                            </div>
                        </td>

                        <!-- Status Toggle -->
                        <td>
                            <form action="{{ route('admin.gallery.toggle-status', $item->id) }}" method="POST" class="m-0">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn-action-view btn-status-toggle {{ $item->is_active ? 'is-active' : 'is-inactive' }}" title="Click to {{ $item->is_active ? 'deactivate' : 'activate' }}">
                                    <i class="fa-solid fa-circle-{{ $item->is_active ? 'check' : 'xmark' }}"></i>
                                    <span>{{ $item->is_active ? 'Active' : 'Hidden' }}</span>
                                </button>
                            </form>
                        </td>

                        <!-- Actions -->
                        <td class="text-right">
                            <div class="d-inline-flex align-items-center gap-6">
                                <a href="{{ route('admin.gallery.edit', $item->id) }}" class="btn-action-view" title="Edit Photo">
                                    <i class="fa-solid fa-pen"></i>
                                    <span>Edit</span>
                                </a>

                                <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" class="m-0" data-confirm="Delete this gallery photo?" data-confirm-title="Delete Photo">
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
                        <td colspan="6" class="table-empty-pad">
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
                    <div class="d-flex gap-6 mb-8">
                        <span class="spec-pill"><i class="fa-solid fa-expand"></i> {{ $item->image_dimensions ?? 'Standard' }}</span>
                        <span class="spec-pill"><i class="fa-solid fa-hard-drive"></i> {{ $item->image_size ?? 'Optimized' }}</span>
                    </div>
                    <div class="visual-footer-bar">
                        <span class="fs-12 font-bold {{ $item->is_active ? 'text-success' : 'text-muted' }}">
                            <i class="fa-solid fa-circle-{{ $item->is_active ? 'check' : 'xmark' }}"></i>
                            {{ $item->is_active ? 'Active' : 'Hidden' }}
                        </span>
                        <div class="d-flex gap-6">
                            <a href="{{ route('admin.gallery.edit', $item->id) }}" class="btn-action-view btn-pad-sm">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" class="m-0" data-confirm="Delete this photo?" data-confirm-title="Delete Photo">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action-delete btn-pad-xs">
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
