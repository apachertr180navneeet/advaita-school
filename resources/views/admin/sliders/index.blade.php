@extends('layouts.admin')

@section('title', 'Hero Sliders Management')
@section('page_title', 'Hero Sliders & Banners')

@section('styles')
<style>
    .slider-header-action-bar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        margin-bottom: 24px;
    }

    .slider-guide-box {
        background: linear-gradient(135deg, rgba(8, 59, 122, 0.05) 0%, rgba(243, 112, 33, 0.08) 100%);
        border: 1px solid rgba(243, 112, 33, 0.25);
        border-radius: 14px;
        padding: 16px 20px;
        margin-bottom: 24px;
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }

    .slider-guide-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--admin-orange);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
        box-shadow: 0 4px 12px rgba(243, 112, 33, 0.3);
    }

    .slider-guide-text h4 {
        font-size: 14.5px;
        font-weight: 700;
        color: var(--admin-navy);
        margin-bottom: 4px;
    }

    .slider-guide-text p {
        font-size: 13px;
        color: #475569;
        line-height: 1.5;
        margin: 0;
    }

    .slider-guide-pills {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 8px;
    }

    .size-guide-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 11.5px;
        font-weight: 700;
        padding: 3px 10px;
        border-radius: 20px;
        background: #ffffff;
        border: 1px solid rgba(8, 59, 122, 0.2);
        color: var(--admin-navy);
    }

    .size-guide-pill.overlay-pill {
        border-color: rgba(243, 112, 33, 0.3);
        color: #C2410C;
    }

    /* Slider Table Styles */
    .slider-table-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
    }

    .slider-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }

    .slider-table th {
        background: #F8FAFC;
        padding: 14px 18px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.6px;
        color: var(--admin-text-muted);
        border-bottom: 1px solid var(--admin-border);
    }

    .slider-table td {
        padding: 16px 18px;
        vertical-align: middle;
        border-bottom: 1px solid #F1F5F9;
        font-size: 13.5px;
    }

    .slider-table tr:hover {
        background-color: #FBFDFF;
    }

    /* Thumbnails */
    .thumb-wrapper {
        display: flex;
        flex-direction: column;
        gap: 6px;
        max-width: 180px;
    }

    .slide-thumb-img-box {
        position: relative;
        width: 140px;
        height: 75px;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid #CBD5E1;
        background: #0B192C;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }

    .slide-thumb-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .slide-thumb-img-box:hover img {
        transform: scale(1.08);
    }

    .overlay-thumb-img-box {
        position: relative;
        width: 60px;
        height: 60px;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #E2E8F0;
        background: #F1F5F9;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 4px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    }

    .overlay-thumb-img-box img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    /* Image Size Metadata Badges */
    .img-meta-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-size: 11px;
        font-weight: 700;
        color: #0369A1;
        background: #E0F2FE;
        border: 1px solid #BAE6FD;
        padding: 2px 8px;
        border-radius: 6px;
        width: fit-content;
    }

    .img-meta-badge.filesize {
        color: #475569;
        background: #F1F5F9;
        border-color: #E2E8F0;
    }

    .img-meta-badge.overlay {
        color: #9A3412;
        background: #FFEDD5;
        border-color: #FED7AA;
    }

    .badge-no-overlay {
        font-size: 11px;
        font-weight: 600;
        color: #94A3B8;
        background: #F8FAFC;
        border: 1px dashed #CBD5E1;
        padding: 4px 10px;
        border-radius: 6px;
        display: inline-block;
    }

    /* Titles formatting */
    .slide-title-primary {
        font-weight: 800;
        font-size: 14.5px;
        color: var(--admin-navy);
        line-height: 1.3;
    }

    .slide-title-secondary {
        font-weight: 700;
        font-size: 13.5px;
        color: var(--admin-orange);
        margin-top: 2px;
    }

    .slide-desc-snippet {
        font-size: 12px;
        color: #64748B;
        margin-top: 4px;
        max-width: 320px;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .slide-badge-tag {
        display: inline-block;
        font-size: 10.5px;
        font-weight: 700;
        color: #4338CA;
        background: #EEF2FF;
        border: 1px solid #C7D2FE;
        padding: 2px 8px;
        border-radius: 4px;
        margin-top: 6px;
    }

    /* Order badge */
    .order-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        border-radius: 8px;
        background: #F1F5F9;
        font-weight: 800;
        font-size: 13px;
        color: var(--admin-text-main);
    }

    /* Status badge */
    .status-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
        text-decoration: none;
        cursor: pointer;
        border: none;
        transition: opacity 0.2s;
    }

    .status-pill:hover {
        opacity: 0.85;
    }

    .status-pill.active {
        background: #DCFCE7;
        color: #15803D;
        border: 1px solid #86EFAC;
    }

    .status-pill.inactive {
        background: #FEE2E2;
        color: #B91C1C;
        border: 1px solid #FCA5A5;
    }

    /* Action Buttons */
    .btn-action-group {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .btn-act {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 8px;
        text-decoration: none;
        border: none;
        cursor: pointer;
        font-size: 13px;
        transition: all 0.2s;
    }

    .btn-act-edit {
        background: #E0F2FE;
        color: #0284C7;
        border: 1px solid #BAE6FD;
    }

    .btn-act-edit:hover {
        background: #0284C7;
        color: #ffffff;
    }

    .btn-act-del {
        background: #FEE2E2;
        color: #EF4444;
        border: 1px solid #FECACA;
    }

    .btn-act-del:hover {
        background: #EF4444;
        color: #ffffff;
    }

    /* Button Primary */
    .btn-add-slide {
        background: linear-gradient(135deg, var(--admin-orange) 0%, #E05A0B 100%);
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 10px;
        font-weight: 700;
        font-size: 14px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 4px 14px rgba(243, 112, 33, 0.35);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .btn-add-slide:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(243, 112, 33, 0.45);
        color: #ffffff;
    }

    .btn-view-live {
        background: #ffffff;
        color: var(--admin-navy);
        border: 1px solid var(--admin-border);
        padding: 10px 18px;
        border-radius: 10px;
        font-weight: 700;
        font-size: 14px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s;
    }

    .btn-view-live:hover {
        background: #F8FAFC;
        border-color: var(--admin-navy);
    }
</style>
@endsection

@section('content')
<div class="admin-container">

    <!-- Top Action Bar -->
    <div class="slider-header-action-bar">
        <div>
            <h2 style="font-size: 22px; font-weight: 800; color: var(--admin-navy); margin-bottom: 4px;">Homepage Hero Sliders</h2>
            <p style="font-size: 13.5px; color: var(--admin-text-muted);">Manage dynamic slides, banner images, overlay elements, taglines and image dimensions.</p>
        </div>
        <div style="display: flex; gap: 12px; align-items: center;">
            <a href="{{ route('home') }}" target="_blank" class="btn-view-live" title="View Frontend Homepage">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>View Frontend Home</span>
            </a>
            <a href="{{ route('admin.sliders.create') }}" class="btn-add-slide">
                <i class="fa-solid fa-plus"></i>
                <span>Add New Slide</span>
            </a>
        </div>
    </div>

    <!-- Image Size Guidelines Notice Box -->
    <div class="slider-guide-box">
        <div class="slider-guide-icon">
            <i class="fa-solid fa-ruler-combined"></i>
        </div>
        <div class="slider-guide-text">
            <h4>Recommended Image Dimensions & Specifications</h4>
            <p>To ensure high visual quality and fast page load times across desktops, tablets, and phones, follow these recommended image specifications:</p>
            <div class="slider-guide-pills">
                <span class="size-guide-pill">
                    <i class="fa-solid fa-image"></i>
                    <strong>Main Banner Image:</strong> 1920 × 800 px (or 1024 × 540 px, ~16:9 aspect ratio, max 4MB)
                </span>
                <span class="size-guide-pill overlay-pill">
                    <i class="fa-solid fa-layer-group"></i>
                    <strong>Image on Image (Overlay):</strong> 500 × 600 px or 400 × 400 px (transparent PNG / WebP cutout)
                </span>
            </div>
        </div>
    </div>

    <!-- Sliders Table Card -->
    <div class="slider-table-card">
        <table class="slider-table">
            <thead>
                <tr>
                    <th style="width: 60px; text-align: center;">Order</th>
                    <th style="width: 220px;">Main Banner & Size</th>
                    <th style="width: 180px;">Image on Image (Overlay)</th>
                    <th>Taglines & Description</th>
                    <th style="width: 120px; text-align: center;">Status</th>
                    <th style="width: 110px; text-align: right;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($sliders as $slide)
                <tr>
                    <!-- Order -->
                    <td style="text-align: center;">
                        <span class="order-badge">#{{ $slide->order }}</span>
                    </td>

                    <!-- Main Image & Size -->
                    <td>
                        <div class="thumb-wrapper">
                            <a href="{{ $slide->image_url }}" target="_blank" class="slide-thumb-img-box" title="View Full Main Image">
                                <img src="{{ $slide->image_url }}" alt="{{ $slide->title_1 }}">
                            </a>
                            <div style="display: flex; flex-wrap: wrap; gap: 4px;">
                                @if($slide->image_dimensions_formatted)
                                    <span class="img-meta-badge" title="Image Resolution">
                                        <i class="fa-solid fa-expand"></i> {{ $slide->image_dimensions_formatted }}
                                    </span>
                                @endif
                                @if($slide->image_size)
                                    <span class="img-meta-badge filesize" title="File Size">
                                        <i class="fa-solid fa-hard-drive"></i> {{ $slide->image_size }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </td>

                    <!-- Overlay Image ("Image on Image") & Size -->
                    <td>
                        @if($slide->overlay_image)
                            <div class="thumb-wrapper">
                                <a href="{{ $slide->overlay_image_url }}" target="_blank" class="overlay-thumb-img-box" title="View Overlay Image">
                                    <img src="{{ $slide->overlay_image_url }}" alt="Overlay">
                                </a>
                                <div style="display: flex; flex-direction: column; gap: 3px;">
                                    @if($slide->overlay_image_dimensions_formatted)
                                        <span class="img-meta-badge overlay" title="Overlay Dimensions">
                                            <i class="fa-solid fa-expand"></i> {{ $slide->overlay_image_dimensions_formatted }}
                                        </span>
                                    @endif
                                    @if($slide->overlay_image_size)
                                        <span class="img-meta-badge filesize" title="Overlay File Size">
                                            <i class="fa-solid fa-hard-drive"></i> {{ $slide->overlay_image_size }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @else
                            <span class="badge-no-overlay">
                                <i class="fa-solid fa-minus"></i> No Overlay
                            </span>
                        @endif
                    </td>

                    <!-- Titles & Description -->
                    <td>
                        <div class="slide-title-primary">{{ $slide->title_1 }}</div>
                        @if($slide->title_2)
                            <div class="slide-title-secondary">{{ $slide->title_2 }}</div>
                        @endif
                        @if($slide->description)
                            <div class="slide-desc-snippet">{{ $slide->description }}</div>
                        @endif

                        <div style="display: flex; flex-wrap: wrap; gap: 8px; align-items: center; margin-top: 6px;">
                            @if($slide->badge_text)
                                <span class="slide-badge-tag">
                                    <i class="fa-solid fa-award"></i> {{ $slide->badge_text }}
                                </span>
                            @endif
                            @if($slide->button_1_text)
                                <span style="font-size: 11px; color: #64748B;">
                                    <i class="fa-solid fa-link"></i> {{ $slide->button_1_text }}
                                </span>
                            @endif
                        </div>
                    </td>

                    <!-- Status -->
                    <td style="text-align: center;">
                        <form action="{{ route('admin.sliders.toggle-status', $slide->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="status-pill {{ $slide->is_active ? 'active' : 'inactive' }}" title="Click to toggle status">
                                <i class="fa-solid {{ $slide->is_active ? 'fa-check' : 'fa-xmark' }}"></i>
                                <span>{{ $slide->is_active ? 'Active' : 'Hidden' }}</span>
                            </button>
                        </form>
                    </td>

                    <!-- Actions -->
                    <td style="text-align: right;">
                        <div class="btn-action-group" style="justify-content: flex-end;">
                            <a href="{{ route('admin.sliders.edit', $slide->id) }}" class="btn-act btn-act-edit" title="Edit Slide">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('admin.sliders.destroy', $slide->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this slide?');" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-act btn-act-del" title="Delete Slide">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center; padding: 48px 20px; color: var(--admin-text-muted);">
                        <i class="fa-solid fa-images" style="font-size: 38px; color: #CBD5E1; margin-bottom: 12px; display: block;"></i>
                        <h4 style="font-size: 16px; color: var(--admin-navy); margin-bottom: 6px;">No hero slides created yet</h4>
                        <p style="font-size: 13.5px; margin-bottom: 16px;">Create your first hero slide to customize the homepage slider banner.</p>
                        <a href="{{ route('admin.sliders.create') }}" class="btn-add-slide">
                            <i class="fa-solid fa-plus"></i> Add First Slide
                        </a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
