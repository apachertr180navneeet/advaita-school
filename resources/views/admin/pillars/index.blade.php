@extends('layouts.admin')

@section('title', 'Three Pillars Management')
@section('page_title', 'Three Pillars (What Makes Advaita Special)')



@section('content')
<div class="admin-container">

    <!-- Top Action Bar -->
    <div class="pillar-header-bar">
        <div>
            <h2 class="text-navy fs-22 font-extrabold mb-4">Three Pillars Management</h2>
            <p class="text-muted fs-13">Manage the "What Makes Advaita Special" section: section titles, pillar cards, images, themes &amp; tags.</p>
        </div>
        <div class="d-flex gap-12 align-items-center">
            <a href="{{ route('home') }}#why-advaita" target="_blank" class="btn-view-live" title="View Frontend Section">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>View On Homepage</span>
            </a>
            <a href="{{ route('admin.pillars.create') }}" class="btn-add-pillar">
                <i class="fa-solid fa-plus"></i>
                <span>Add New Pillar</span>
            </a>
        </div>
    </div>

    <!-- Section Header Settings Card -->
    <div class="pillar-section-settings-card">
        <div class="pillar-settings-title">
            <i class="fa-solid fa-sliders text-orange"></i>
            <span>Section Header &amp; Subtitle Content</span>
        </div>
        <form action="{{ route('admin.pillars.section-header') }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="card-subgrid-2col mb-16">
                <div>
                    <label class="form-label-bold">Eyebrow Badge Text</label>
                    <input type="text" name="eyebrow" class="form-control" value="{{ old('eyebrow', $sectionSettings['eyebrow']) }}" required class="form-input-clean">
                </div>
                <div>
                    <label class="form-label-bold">Title 1 (Dark Heading)</label>
                    <input type="text" name="title_1" class="form-control" value="{{ old('title_1', $sectionSettings['title_1']) }}" required class="form-input-clean">
                </div>
                <div>
                    <label class="form-label-orange">Title 2 (Orange Tagline)</label>
                    <input type="text" name="title_2" class="form-control" value="{{ old('title_2', $sectionSettings['title_2']) }}" class="form-input-clean">
                </div>
            </div>
            <div class="mb-16">
                <label class="form-label-bold">Section Subtitle / Description</label>
                <textarea name="subtitle" rows="2" class="form-textarea-clean">{{ old('subtitle', $sectionSettings['subtitle']) }}</textarea>
            </div>
            <div class="filter-bar-wrap">
                <div class="filter-bar-inputs">
                    <div class="flex-1">
                        <input type="text" name="cta_text" placeholder="CTA Button Text" value="{{ old('cta_text', $sectionSettings['cta_text']) }}" class="form-input-clean">
                    </div>
                    <div class="flex-1">
                        <input type="text" name="cta_url" placeholder="CTA Link (e.g. #why-choose)" value="{{ old('cta_url', $sectionSettings['cta_url']) }}" class="form-input-clean">
                    </div>
                </div>
                <button type="submit" class="btn-filter-submit">
                    <i class="fa-solid fa-floppy-disk"></i> Save Section Heading
                </button>
            </div>
        </form>
    </div>

    <!-- Image Size Guidelines Notice Box -->
    <div class="pillar-guide-box">
        <div class="pillar-guide-icon">
            <i class="fa-solid fa-ruler-combined"></i>
        </div>
        <div class="pillar-guide-text">
            <h4>Pillar Card Image Specifications</h4>
            <p>Recommended image resolution: <strong>600 × 400 px</strong> or <strong>800 × 530 px</strong> (~3:2 aspect ratio). Images are automatically analyzed for pixel dimensions and file size upon upload.</p>
        </div>
    </div>

    <!-- Pillar Cards Table -->
    <div class="pillar-table-card">
        <table class="pillar-table">
            <thead>
                <tr>
                    <th class="col-w60 text-center">Order</th>
                    <th class="col-w160">Image &amp; Size</th>
                    <th class="col-w140">Badge &amp; Theme</th>
                    <th>Title &amp; Description</th>
                    <th class="col-w250">Feature Tags</th>
                    <th class="col-w110 text-center">Status</th>
                    <th class="col-w110 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pillars as $pillar)
                <tr>
                    <!-- Order -->
                    <td class="text-center">
                        <strong class="text-navy fs-14">#{{ $pillar->order }}</strong>
                    </td>

                    <!-- Image & Size -->
                    <td>
                        <div class="pillar-thumb-wrap">
                            <a href="{{ $pillar->image_url }}" target="_blank" class="pillar-thumb-box" title="View Full Image">
                                <img src="{{ $pillar->image_url }}" alt="{{ $pillar->title }}">
                            </a>
                            <div class="d-flex flex-wrap gap-4">
                                @if($pillar->image_dimensions)
                                    <span class="img-meta-badge" title="Resolution">
                                        <i class="fa-solid fa-expand"></i> {{ $pillar->image_dimensions }}
                                    </span>
                                @endif
                                @if($pillar->image_size)
                                    <span class="img-meta-badge filesize" title="File Size">
                                        <i class="fa-solid fa-hard-drive"></i> {{ $pillar->image_size }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </td>

                    <!-- Badge & Theme -->
                    <td>
                        <div class="d-flex flex-column gap-6">
                            <div>
                                <span class="badge-number-box">{{ $pillar->badge_label }}</span>
                            </div>
                            <span class="theme-badge {{ $pillar->theme_color ?: 'orange' }}">
                                <i class="fa-solid fa-circle fs-8"></i>
                                {{ ucfirst($pillar->theme_color ?: 'orange') }}
                            </span>
                        </div>
                    </td>

                    <!-- Title & Description -->
                    <td>
                        <div class="text-navy fs-15 font-extrabold mb-4">
                            {{ $pillar->title }}
                        </div>
                        @if($pillar->description)
                            <div class="text-muted fs-12 line-clamp-desc">
                                {{ $pillar->description }}
                            </div>
                        @endif
                    </td>

                    <!-- Feature Tags -->
                    <td>
                        @php
                            $tagsList = is_array($pillar->tags) ? $pillar->tags : [];
                        @endphp
                        @if(count($tagsList) > 0)
                            <div class="text-slate fs-11 font-bold mb-4">
                                <i class="fa-solid fa-tags"></i> {{ count($tagsList) }} Feature Pills:
                            </div>
                            <div class="pillar-tags-preview">
                                @foreach($tagsList as $tagItem)
                                    @php
                                        $tLabel = is_array($tagItem) ? ($tagItem['label'] ?? '') : $tagItem;
                                        $tIcon = is_array($tagItem) ? ($tagItem['icon'] ?? 'fa-solid fa-check') : 'fa-solid fa-check';
                                    @endphp
                                    @if(!empty($tLabel))
                                    <span class="pillar-tag-mini">
                                        <i class="{{ $tIcon }}"></i> {{ $tLabel }}
                                    </span>
                                    @endif
                                @endforeach
                            </div>
                        @else
                            <span class="td-date-muted">No tags attached</span>
                        @endif
                    </td>

                    <!-- Status -->
                    <td class="text-center">
                        <form action="{{ route('admin.pillars.toggle-status', $pillar->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="status-pill {{ $pillar->is_active ? 'active' : 'inactive' }}" title="Click to toggle status">
                                <i class="fa-solid {{ $pillar->is_active ? 'fa-check' : 'fa-xmark' }}"></i>
                                <span>{{ $pillar->is_active ? 'Active' : 'Hidden' }}</span>
                            </button>
                        </form>
                    </td>

                    <!-- Actions -->
                    <td class="text-right">
                        <div class="btn-action-group">
                            <a href="{{ route('admin.pillars.edit', $pillar->id) }}" class="btn-act btn-act-edit" title="Edit Pillar">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('admin.pillars.destroy', $pillar->id) }}" method="POST" data-confirm="Are you sure you want to delete this pillar card?" data-confirm-title="Delete Pillar Card" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-act btn-act-del" title="Delete Pillar">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="table-empty-pad">
                        <i class="fa-solid fa-shapes empty-icon-lg"></i>
                        <h4 class="text-navy fs-16 mb-6">No pillar cards created yet</h4>
                        <p class="fs-13 mb-16">Create your first pillar card to customize the Three Pillars section.</p>
                        <a href="{{ route('admin.pillars.create') }}" class="btn-add-pillar">
                            <i class="fa-solid fa-plus"></i> Add First Pillar
                        </a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
