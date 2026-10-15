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
            <a href="{{ route('admin.gallery.section-header') }}" class="btn-admin btn-secondary" title="Edit section heading, subtitle, and action buttons on a separate page">
                <i class="fa-solid fa-sliders"></i>
                <span>Edit Section Header</span>
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
