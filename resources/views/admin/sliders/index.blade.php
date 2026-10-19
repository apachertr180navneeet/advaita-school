@extends('layouts.admin')

@section('title', 'Hero Sliders Management')
@section('page_title', 'Hero Sliders & Banners')



@section('content')
<div class="admin-container">

    <!-- Top Action Bar -->
    <div class="slider-header-action-bar">
        <div>
            <h2 class="text-navy fs-22 font-extrabold mb-4">Homepage Hero Sliders</h2>
            <p class="text-muted fs-13">Manage dynamic slides: slider banner image, title 1, title 2, description & image file sizes.</p>
        </div>
        <div class="d-flex gap-12 align-items-center">
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
            <p>Dimensions and file sizes are dynamically analyzed and shown below for every slide image:</p>
            <div class="slider-guide-pills">
                <span class="size-guide-pill">
                    <i class="fa-solid fa-image"></i>
                    <strong>Slider Image:</strong> 1920 × 800 px (or 1024 × 540 px, ~16:9 aspect ratio, max 5MB JPG/PNG/WebP)
                </span>
            </div>
        </div>
    </div>

    <!-- Sliders Table Card -->
    <div class="slider-table-card">
        <table class="slider-table">
            <thead>
                <tr>
                    <th class="col-w60 text-center">Order</th>
                    <th class="col-w260">Slider Image & Size</th>
                    <th>Title 1, Title 2 & Description</th>
                    <th class="col-w120 text-center">Status</th>
                    <th class="col-w110 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($sliders as $slide)
                <tr>
                    <!-- Order -->
                    <td class="text-center">
                        <span class="order-badge">#{{ $slide->order }}</span>
                    </td>

                    <!-- Main Image & Size -->
                    <td>
                        <div class="thumb-wrapper">
                            <a href="{{ $slide->image_url }}" target="_blank" class="slide-thumb-img-box" title="View Full Image">
                                <img src="{{ $slide->image_url }}" alt="{{ $slide->title_1 ?? 'Hero Slide' }}">
                            </a>
                            <div class="d-flex flex-wrap gap-4">
                                @if($slide->image_dimensions)
                                    <span class="img-meta-badge" title="Image Resolution">
                                        <i class="fa-solid fa-expand"></i> {{ $slide->image_dimensions }}
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

                    <!-- Titles & Description -->
                    <td>
                        @if($slide->title_1)
                            <div class="slide-title-primary">{{ $slide->title_1 }}</div>
                        @endif
                        @if($slide->title_2)
                            <div class="slide-title-secondary">{{ $slide->title_2 }}</div>
                        @endif
                        @if(!$slide->title_1 && !$slide->title_2)
                            <span class="text-muted fs-13 fst-italic">(No title)</span>
                        @endif
                        @if($slide->description)
                            <div class="slide-desc-snippet">{{ $slide->description }}</div>
                        @endif
                    </td>

                    <!-- Status -->
                    <td class="text-center">
                        <form action="{{ route('admin.sliders.toggle-status', $slide->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="status-pill {{ $slide->is_active ? 'active' : 'inactive' }}" title="Click to toggle status">
                                <i class="fa-solid {{ $slide->is_active ? 'fa-check' : 'fa-xmark' }}"></i>
                                <span>{{ $slide->is_active ? 'Active' : 'Hidden' }}</span>
                            </button>
                        </form>
                    </td>

                    <!-- Actions -->
                    <td class="text-right">
                        <div class="btn-action-group justify-content-end">
                            <a href="{{ route('admin.sliders.edit', $slide->id) }}" class="btn-act btn-act-edit" title="Edit Slide">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('admin.sliders.destroy', $slide->id) }}" method="POST" data-confirm="Are you sure you want to delete this slide?" data-confirm-title="Delete Hero Slide" class="d-inline">
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
                    <td colspan="5" class="table-empty-pad">
                        <i class="fa-solid fa-images empty-icon-lg"></i>
                        <h4 class="text-navy fs-16 mb-6">No hero slides created yet</h4>
                        <p class="fs-13 mb-16">Create your first hero slide to customize the homepage slider banner.</p>
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
