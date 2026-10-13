@extends('layouts.admin')

@section('title', 'Three Pillars Management')
@section('page_title', 'Three Pillars (What Makes Advaita Special)')

@section('styles')
<style>
    .pillar-header-bar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        margin-bottom: 24px;
    }

    .pillar-section-settings-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        padding: 24px;
        margin-bottom: 24px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
    }

    .pillar-settings-title {
        font-size: 16px;
        font-weight: 800;
        color: var(--admin-navy);
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .pillar-guide-box {
        background: linear-gradient(135deg, rgba(8, 59, 122, 0.05) 0%, rgba(243, 112, 33, 0.08) 100%);
        border: 1px solid rgba(243, 112, 33, 0.25);
        border-radius: 14px;
        padding: 16px 20px;
        margin-bottom: 24px;
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }

    .pillar-guide-icon {
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

    .pillar-guide-text h4 {
        font-size: 14.5px;
        font-weight: 700;
        color: var(--admin-navy);
        margin-bottom: 4px;
    }

    .pillar-guide-text p {
        font-size: 13px;
        color: #475569;
        line-height: 1.5;
        margin: 0;
    }

    /* Cards Table */
    .pillar-table-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
    }

    .pillar-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }

    .pillar-table th {
        background: #F8FAFC;
        padding: 14px 18px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.6px;
        color: var(--admin-text-muted);
        border-bottom: 1px solid var(--admin-border);
    }

    .pillar-table td {
        padding: 16px 18px;
        vertical-align: middle;
        border-bottom: 1px solid #F1F5F9;
        font-size: 13.5px;
    }

    .pillar-table tr:hover {
        background-color: #FBFDFF;
    }

    /* Thumbnails */
    .pillar-thumb-wrap {
        display: flex;
        flex-direction: column;
        gap: 6px;
        max-width: 160px;
    }

    .pillar-thumb-box {
        width: 130px;
        height: 85px;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid #CBD5E1;
        background: #0B192C;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
        display: block;
    }

    .pillar-thumb-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .pillar-thumb-box:hover img {
        transform: scale(1.08);
    }

    .img-meta-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-size: 11px;
        font-weight: 700;
        color: #0369A1;
        background: #E0F2FE;
        border: 1px solid #BAE6FD;
        padding: 2px 7px;
        border-radius: 6px;
    }

    .img-meta-badge.filesize {
        color: #475569;
        background: #F1F5F9;
        border-color: #E2E8F0;
    }

    /* Theme Pill */
    .theme-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
        text-transform: capitalize;
    }

    .theme-badge.orange {
        background: #FFF7ED;
        color: #C2410C;
        border: 1px solid #FED7AA;
    }

    .theme-badge.blue {
        background: #EFF6FF;
        color: #1D4ED8;
        border: 1px solid #BFDBFE;
    }

    .theme-badge.teal {
        background: #ECFDF5;
        color: #047857;
        border: 1px solid #A7F3D0;
    }

    .badge-number-box {
        display: inline-block;
        font-weight: 800;
        font-size: 13px;
        padding: 2px 8px;
        border-radius: 6px;
        background: #0B192C;
        color: #ffffff;
        margin-right: 6px;
    }

    /* Tags Preview List */
    .pillar-tags-preview {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
        max-width: 280px;
        margin-top: 6px;
    }

    .pillar-tag-mini {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        font-size: 11px;
        background: #F1F5F9;
        border: 1px solid #E2E8F0;
        padding: 2px 7px;
        border-radius: 12px;
        color: #334155;
    }

    /* Action Buttons */
    .btn-add-pillar {
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

    .btn-add-pillar:hover {
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

    .btn-action-group {
        display: flex;
        align-items: center;
        gap: 8px;
        justify-content: flex-end;
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
</style>
@endsection

@section('content')
<div class="admin-container">

    <!-- Top Action Bar -->
    <div class="pillar-header-bar">
        <div>
            <h2 style="font-size: 22px; font-weight: 800; color: var(--admin-navy); margin-bottom: 4px;">Three Pillars Management</h2>
            <p style="font-size: 13.5px; color: var(--admin-text-muted);">Manage the "What Makes Advaita Special" section: section titles, pillar cards, images, themes &amp; tags.</p>
        </div>
        <div style="display: flex; gap: 12px; align-items: center;">
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
            <i class="fa-solid fa-sliders" style="color: var(--admin-orange);"></i>
            <span>Section Header &amp; Subtitle Content</span>
        </div>
        <form action="{{ route('admin.pillars.section-header') }}" method="POST">
            @csrf
            @method('PATCH')
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin-bottom: 16px;">
                <div>
                    <label style="font-size: 12.5px; font-weight: 700; color: var(--admin-navy); display: block; margin-bottom: 6px;">Eyebrow Badge Text</label>
                    <input type="text" name="eyebrow" class="form-control" value="{{ old('eyebrow', $sectionSettings['eyebrow']) }}" required style="width: 100%; padding: 9px 12px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13.5px;">
                </div>
                <div>
                    <label style="font-size: 12.5px; font-weight: 700; color: var(--admin-navy); display: block; margin-bottom: 6px;">Title 1 (Dark Heading)</label>
                    <input type="text" name="title_1" class="form-control" value="{{ old('title_1', $sectionSettings['title_1']) }}" required style="width: 100%; padding: 9px 12px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13.5px;">
                </div>
                <div>
                    <label style="font-size: 12.5px; font-weight: 700; color: var(--admin-orange); display: block; margin-bottom: 6px;">Title 2 (Orange Tagline)</label>
                    <input type="text" name="title_2" class="form-control" value="{{ old('title_2', $sectionSettings['title_2']) }}" style="width: 100%; padding: 9px 12px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13.5px;">
                </div>
            </div>
            <div style="margin-bottom: 16px;">
                <label style="font-size: 12.5px; font-weight: 700; color: var(--admin-navy); display: block; margin-bottom: 6px;">Section Subtitle / Description</label>
                <textarea name="subtitle" rows="2" style="width: 100%; padding: 9px 12px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13.5px; resize: vertical;">{{ old('subtitle', $sectionSettings['subtitle']) }}</textarea>
            </div>
            <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 12px; pt-2;">
                <div style="display: flex; gap: 12px; flex: 1; max-width: 600px;">
                    <div style="flex: 1;">
                        <input type="text" name="cta_text" placeholder="CTA Button Text" value="{{ old('cta_text', $sectionSettings['cta_text']) }}" style="width: 100%; padding: 8px 12px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13px;">
                    </div>
                    <div style="flex: 1;">
                        <input type="text" name="cta_url" placeholder="CTA Link (e.g. #why-choose)" value="{{ old('cta_url', $sectionSettings['cta_url']) }}" style="width: 100%; padding: 8px 12px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13px;">
                    </div>
                </div>
                <button type="submit" style="background: var(--admin-navy); color: #ffffff; border: none; padding: 9px 20px; border-radius: 8px; font-weight: 700; font-size: 13px; cursor: pointer;">
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
                    <th style="width: 60px; text-align: center;">Order</th>
                    <th style="width: 160px;">Image &amp; Size</th>
                    <th style="width: 140px;">Badge &amp; Theme</th>
                    <th>Title &amp; Description</th>
                    <th style="width: 250px;">Feature Tags</th>
                    <th style="width: 110px; text-align: center;">Status</th>
                    <th style="width: 110px; text-align: right;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pillars as $pillar)
                <tr>
                    <!-- Order -->
                    <td style="text-align: center;">
                        <strong style="color: var(--admin-navy); font-size: 14px;">#{{ $pillar->order }}</strong>
                    </td>

                    <!-- Image & Size -->
                    <td>
                        <div class="pillar-thumb-wrap">
                            <a href="{{ $pillar->image_url }}" target="_blank" class="pillar-thumb-box" title="View Full Image">
                                <img src="{{ $pillar->image_url }}" alt="{{ $pillar->title }}">
                            </a>
                            <div style="display: flex; flex-wrap: wrap; gap: 4px;">
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
                        <div style="display: flex; flex-direction: column; gap: 6px;">
                            <div>
                                <span class="badge-number-box">{{ $pillar->badge_label }}</span>
                            </div>
                            <span class="theme-badge {{ $pillar->theme_color ?: 'orange' }}">
                                <i class="fa-solid fa-circle" style="font-size: 8px;"></i>
                                {{ ucfirst($pillar->theme_color ?: 'orange') }}
                            </span>
                        </div>
                    </td>

                    <!-- Title & Description -->
                    <td>
                        <div style="font-weight: 800; font-size: 15px; color: var(--admin-navy); margin-bottom: 4px;">
                            {{ $pillar->title }}
                        </div>
                        @if($pillar->description)
                            <div style="font-size: 12.5px; color: #64748B; line-height: 1.4; max-width: 380px;">
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
                            <div style="font-size: 11.5px; font-weight: 700; color: #475569; margin-bottom: 4px;">
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
                            <span style="font-size: 12px; color: #94A3B8;">No tags attached</span>
                        @endif
                    </td>

                    <!-- Status -->
                    <td style="text-align: center;">
                        <form action="{{ route('admin.pillars.toggle-status', $pillar->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="status-pill {{ $pillar->is_active ? 'active' : 'inactive' }}" title="Click to toggle status">
                                <i class="fa-solid {{ $pillar->is_active ? 'fa-check' : 'fa-xmark' }}"></i>
                                <span>{{ $pillar->is_active ? 'Active' : 'Hidden' }}</span>
                            </button>
                        </form>
                    </td>

                    <!-- Actions -->
                    <td style="text-align: right;">
                        <div class="btn-action-group">
                            <a href="{{ route('admin.pillars.edit', $pillar->id) }}" class="btn-act btn-act-edit" title="Edit Pillar">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('admin.pillars.destroy', $pillar->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this pillar card?');" style="display: inline;">
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
                    <td colspan="7" style="text-align: center; padding: 48px 20px; color: var(--admin-text-muted);">
                        <i class="fa-solid fa-shapes" style="font-size: 38px; color: #CBD5E1; margin-bottom: 12px; display: block;"></i>
                        <h4 style="font-size: 16px; color: var(--admin-navy); margin-bottom: 6px;">No pillar cards created yet</h4>
                        <p style="font-size: 13.5px; margin-bottom: 16px;">Create your first pillar card to customize the Three Pillars section.</p>
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
