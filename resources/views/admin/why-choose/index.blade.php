@extends('layouts.admin')

@section('title', 'Why Choose Advaita Management')
@section('page_title', 'Why Choose Advaita (Advantage Cards)')

@section('styles')
<style>
    .why-mgmt-wrapper {
        display: flex;
        flex-direction: column;
        gap: 24px;
        width: 100%;
    }

    /* Header Bar */
    .why-top-bar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
    }

    .why-top-title h3 {
        font-size: 20px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0 0 4px 0;
    }

    .why-top-title p {
        font-size: 13.5px;
        color: #64748B;
        margin: 0;
    }

    /* Metric Stat Pills */
    .why-metrics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 16px;
    }

    .why-metric-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 14px;
        padding: 16px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
    }

    .why-metric-info h4 {
        font-size: 22px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0 0 3px 0;
        line-height: 1;
    }

    .why-metric-info span {
        font-size: 11.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748B;
    }

    .why-metric-icon {
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
        border-radius: 16px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        overflow: hidden;
    }

    .section-settings-head {
        padding: 18px 24px;
        background: #FAFBFD;
        border-bottom: 1px solid var(--admin-border);
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
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
        border-radius: 12px;
        padding: 18px 20px;
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
        padding: 4px 12px;
        border-radius: 20px;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        margin-bottom: 8px;
    }

    .preview-title {
        font-size: 18px;
        font-weight: 800;
        margin-bottom: 6px;
        line-height: 1.25;
    }

    .preview-title .part-dark { color: #083B7A; }
    .preview-title .part-orange { color: #F37021; }

    .preview-subtitle {
        font-size: 13px;
        color: #64748B;
        max-width: 620px;
        margin: 0 auto 10px auto;
        line-height: 1.5;
    }

    .preview-cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        font-weight: 700;
        background: #F37021;
        color: #ffffff;
        padding: 6px 14px;
        border-radius: 20px;
        box-shadow: 0 2px 8px rgba(243, 112, 33, 0.25);
    }

    /* Form Inputs */
    .form-grid-3 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
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
    }

    .form-input-custom:focus {
        border-color: var(--admin-navy);
        background: #ffffff;
        box-shadow: 0 0 0 3px rgba(8, 59, 122, 0.08);
    }

    /* Main Cards Table Card */
    .cards-table-card {
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

    /* Thumbnail Box */
    .card-thumb-wrap {
        display: flex;
        flex-direction: column;
        gap: 6px;
        width: 130px;
    }

    .card-thumb-box {
        position: relative;
        width: 130px;
        height: 80px;
        border-radius: 10px;
        overflow: hidden;
        background: #0B192C;
        border: 1px solid #CBD5E1;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
    }

    .card-thumb-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .card-thumb-box:hover img {
        transform: scale(1.08);
    }

    .badge-number-chip {
        position: absolute;
        top: 0;
        left: 0;
        font-size: 12px;
        font-weight: 800;
        color: #ffffff;
        padding: 3px 10px 3px 8px;
        border-bottom-right-radius: 12px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.25);
    }

    .card-specs-row {
        display: flex;
        align-items: center;
        gap: 4px;
        flex-wrap: wrap;
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

    /* Theme Pill */
    .theme-color-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 11.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    /* Grid Preview View (Alternative view mode) */
    .cards-visual-grid {
        display: none;
        padding: 24px;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 24px;
    }

    .visual-card-item {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.04);
        display: flex;
        flex-direction: column;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .visual-card-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(8, 59, 122, 0.08);
    }

    .visual-card-media {
        position: relative;
        height: 180px;
        overflow: hidden;
        background: #0f172a;
    }

    .visual-card-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .visual-card-badge {
        position: absolute;
        top: 0;
        left: 0;
        font-size: 15px;
        font-weight: 800;
        color: #ffffff;
        padding: 6px 14px;
        border-bottom-right-radius: 16px;
    }

    .visual-card-body {
        padding: 18px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
</style>
@endsection

@section('content')
<div class="why-mgmt-wrapper">

    <!-- 1. Header Action Bar -->
    <div class="why-top-bar">
        <div class="why-top-title">
            <h3>Why Choose Advaita (Advantage Cards)</h3>
            <p>Manage the homepage carousel cards and header text shown to prospective parents and students.</p>
        </div>
        <div style="display: flex; gap: 10px; align-items: center;">
            <a href="{{ route('home') }}#why-choose" target="_blank" class="btn-admin btn-secondary" title="View live on homepage">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>Preview Homepage</span>
            </a>
            <a href="{{ route('admin.why-choose.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add Advantage Card</span>
            </a>
        </div>
    </div>

    <!-- 2. Metric Stat Cards -->
    <div class="why-metrics-grid">
        <div class="why-metric-card">
            <div class="why-metric-info">
                <h4>{{ $cards->count() }}</h4>
                <span>Total Cards</span>
            </div>
            <div class="why-metric-icon metric-icon-total">
                <i class="fa-solid fa-layer-group"></i>
            </div>
        </div>

        <div class="why-metric-card">
            <div class="why-metric-info">
                <h4>{{ $cards->where('is_active', true)->count() }}</h4>
                <span>Active in Slider</span>
            </div>
            <div class="why-metric-icon metric-icon-active">
                <i class="fa-solid fa-circle-check"></i>
            </div>
        </div>

        <div class="why-metric-card">
            <div class="why-metric-info">
                <h4>600 × 400</h4>
                <span>Optimal Ratio (3:2)</span>
            </div>
            <div class="why-metric-icon metric-icon-ratio">
                <i class="fa-solid fa-expand"></i>
            </div>
        </div>

        <div class="why-metric-card">
            <div class="why-metric-info">
                <h4>#why-choose</h4>
                <span>Homepage Anchor</span>
            </div>
            <div class="why-metric-icon metric-icon-anchor">
                <i class="fa-solid fa-anchor"></i>
            </div>
        </div>
    </div>

    <!-- 3. Section Header & Heading Settings Card -->
    <div class="section-settings-card">
        <div class="section-settings-head">
            <h4>
                <i class="fa-solid fa-heading" style="color: var(--admin-orange);"></i>
                <span>Section Heading &amp; Subtitle Configuration</span>
            </h4>
            <span style="font-size: 12px; color: #64748B;">Appears above the slider cards on the public homepage</span>
        </div>

        <div class="section-settings-body">
            <!-- Live Preview of Section Header -->
            <div class="header-live-preview-box">
                <div class="preview-eyebrow">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span id="previewEyebrow">{{ $sectionSettings['eyebrow'] }}</span>
                </div>
                <div class="preview-title">
                    <span class="part-dark" id="previewTitle1">{{ $sectionSettings['title_1'] }}</span>
                    <span class="part-orange" id="previewTitle2">{{ $sectionSettings['title_2'] }}</span>
                </div>
                <p class="preview-subtitle" id="previewSubtitle">
                    {{ $sectionSettings['subtitle'] }}
                </p>
                <div class="preview-cta-btn">
                    <span id="previewCta">{{ $sectionSettings['cta_text'] }}</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <!-- Form -->
            <form action="{{ route('admin.why-choose.section-header') }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-grid-3">
                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Eyebrow Badge Text</span>
                            <span style="color: #EF4444;">*</span>
                        </label>
                        <input type="text" id="inputEyebrow" name="eyebrow" class="form-input-custom" value="{{ old('eyebrow', $sectionSettings['eyebrow']) }}" required maxlength="150" placeholder="e.g. WHY CHOOSE ADVAITA?">
                    </div>

                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Title Part 1 (Navy Dark)</span>
                            <span style="color: #EF4444;">*</span>
                        </label>
                        <input type="text" id="inputTitle1" name="title_1" class="form-input-custom" value="{{ old('title_1', $sectionSettings['title_1']) }}" required maxlength="255" placeholder="e.g. Why Choose">
                    </div>

                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Title Part 2 (Orange Accent)</span>
                        </label>
                        <input type="text" id="inputTitle2" name="title_2" class="form-input-custom" value="{{ old('title_2', $sectionSettings['title_2']) }}" maxlength="255" placeholder="e.g. Advaita?">
                    </div>
                </div>

                <div class="form-group-custom" style="margin-bottom: 16px;">
                    <label class="form-label-custom">
                        <span>Section Subtitle Description</span>
                    </label>
                    <textarea id="inputSubtitle" name="subtitle" rows="2" class="form-input-custom" placeholder="Brief summary of the school advantages...">{{ old('subtitle', $sectionSettings['subtitle']) }}</textarea>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin-bottom: 20px;">
                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Bottom CTA Button Text</span>
                        </label>
                        <input type="text" id="inputCta" name="cta_text" class="form-input-custom" value="{{ old('cta_text', $sectionSettings['cta_text']) }}" maxlength="100" placeholder="e.g. Discover the Advaita Difference">
                    </div>

                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Bottom CTA Button URL</span>
                        </label>
                        <input type="text" name="cta_url" class="form-input-custom" value="{{ old('cta_url', $sectionSettings['cta_url']) }}" maxlength="255" placeholder="e.g. #admissions or /admission-info">
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

    <!-- 4. Advantage Cards Registry (Table & Visual Switcher) -->
    <div class="cards-table-card">
        <div class="table-top-actions-bar">
            <div style="display: flex; align-items: center; gap: 12px;">
                <h3 style="font-size: 16px; font-weight: 800; color: var(--admin-navy); margin: 0; display: flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-award" style="color: var(--admin-orange);"></i>
                    <span>Advantage Cards ({{ $cards->count() }})</span>
                </h3>
                <span class="table-count-badge" style="background: #EFF6FF; color: #2563EB; border: 1px solid #BFDBFE; font-size: 11.5px; font-weight: 700; padding: 2px 8px; border-radius: 12px;">
                    {{ $cards->where('is_active', true)->count() }} Active
                </span>
            </div>

            <div style="display: flex; align-items: center; gap: 12px;">
                <!-- View Toggle Buttons -->
                <div class="table-view-tabs">
                    <button type="button" class="view-tab-btn active" id="btnTableView" onclick="setCardsView('table')">
                        <i class="fa-solid fa-table-list"></i>
                        <span>Table View</span>
                    </button>
                    <button type="button" class="view-tab-btn" id="btnGridView" onclick="setCardsView('grid')">
                        <i class="fa-solid fa-grip"></i>
                        <span>Cards Preview</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- 4A. Modern Structured Table View -->
        <div class="table-responsive" id="cardsTableContainer">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 80px;">Order</th>
                        <th style="width: 150px;">Banner Image</th>
                        <th style="width: 140px;">Theme Badge</th>
                        <th>Card Title &amp; Description</th>
                        <th style="width: 130px;">Status</th>
                        <th style="width: 120px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($cards as $card)
                    @php
                        $themeInfo = \App\Models\WhyChooseCard::THEME_COLORS[$card->theme_color] ?? \App\Models\WhyChooseCard::THEME_COLORS['orange'];
                    @endphp
                    <tr>
                        <!-- Order & Badge -->
                        <td>
                            <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 2px;">
                                <strong style="font-size: 14px; color: var(--admin-navy);">#{{ $card->order }}</strong>
                                <span style="font-size: 10.5px; color: #64748B; font-weight: 600;">Pos {{ $loop->iteration }}</span>
                            </div>
                        </td>

                        <!-- Thumbnail with Badge & Specs -->
                        <td>
                            <div class="card-thumb-wrap">
                                <div class="card-thumb-box">
                                    <img src="{{ $card->image_url }}" alt="{{ $card->title }}" loading="lazy">
                                    <div class="badge-number-chip" style="background: {{ $themeInfo['gradient'] }};">
                                        {{ $card->badge_label }}
                                    </div>
                                </div>
                                <div class="card-specs-row">
                                    <span class="spec-pill"><i class="fa-solid fa-expand"></i> {{ $card->image_dimensions ?? 'Standard' }}</span>
                                    <span class="spec-pill"><i class="fa-solid fa-hard-drive"></i> {{ $card->image_size ?? 'Optimized' }}</span>
                                </div>
                            </div>
                        </td>

                        <!-- Theme Pill -->
                        <td>
                            <span class="theme-color-pill" style="background: {{ $themeInfo['badge'] }}18; color: {{ $themeInfo['badge'] }}; border: 1px solid {{ $themeInfo['badge'] }}35;">
                                <span style="width: 8px; height: 8px; border-radius: 50%; background: {{ $themeInfo['badge'] }};"></span>
                                {{ $themeInfo['label'] }}
                            </span>
                        </td>

                        <!-- Card Title & Description -->
                        <td>
                            <div style="font-size: 14.5px; font-weight: 800; color: var(--admin-navy); margin-bottom: 4px;">
                                {{ $card->title }}
                            </div>
                            <div style="font-size: 13px; color: #64748B; line-height: 1.5; max-width: 580px;">
                                {{ $card->description }}
                            </div>
                        </td>

                        <!-- Status Toggle -->
                        <td>
                            <form action="{{ route('admin.why-choose.toggle-status', $card) }}" method="POST" style="margin: 0;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn-action-view" style="background: {{ $card->is_active ? '#DCFCE7' : '#F1F5F9' }}; color: {{ $card->is_active ? '#15803D' : '#64748B' }}; border-color: {{ $card->is_active ? '#86EFAC' : '#E2E8F0' }}; border-radius: 20px; padding: 5px 12px; font-size: 12px;" title="Click to {{ $card->is_active ? 'deactivate' : 'activate' }}">
                                    <i class="fa-solid fa-circle-{{ $card->is_active ? 'check' : 'xmark' }}"></i>
                                    <span>{{ $card->is_active ? 'Active' : 'Inactive' }}</span>
                                </button>
                            </form>
                        </td>

                        <!-- Actions -->
                        <td style="text-align: right;">
                            <div style="display: inline-flex; align-items: center; gap: 6px;">
                                <a href="{{ route('admin.why-choose.edit', $card) }}" class="btn-action-view" title="Edit Card">
                                    <i class="fa-solid fa-pen"></i>
                                    <span>Edit</span>
                                </a>

                                <form action="{{ route('admin.why-choose.destroy', $card) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Delete advantage card \'{{ addslashes($card->title) }}\'?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-action-delete" title="Delete card">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" style="text-align: center; padding: 50px 20px; color: #94A3B8;">
                            No advantage cards found. Click "Add Advantage Card" to get started.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- 4B. Visual Cards Grid (Toggled) -->
        <div class="cards-visual-grid" id="cardsGridContainer">
            @foreach($cards as $card)
            @php
                $themeInfo = \App\Models\WhyChooseCard::THEME_COLORS[$card->theme_color] ?? \App\Models\WhyChooseCard::THEME_COLORS['orange'];
            @endphp
            <div class="visual-card-item">
                <div class="visual-card-media">
                    <img src="{{ $card->image_url }}" alt="{{ $card->title }}" loading="lazy">
                    <div class="visual-card-badge" style="background: {{ $themeInfo['gradient'] }};">
                        {{ $card->badge_label }}
                    </div>
                </div>
                <div class="visual-card-body">
                    <span class="theme-color-pill" style="background: {{ $themeInfo['badge'] }}18; color: {{ $themeInfo['badge'] }}; border: 1px solid {{ $themeInfo['badge'] }}35; width: fit-content; margin-bottom: 8px;">
                        <span style="width: 7px; height: 7px; border-radius: 50%; background: {{ $themeInfo['badge'] }};"></span>
                        {{ $themeInfo['label'] }}
                    </span>
                    <h4 style="font-size: 15px; font-weight: 800; color: var(--admin-navy); margin: 0 0 6px 0;">{{ $card->title }}</h4>
                    <p style="font-size: 12.5px; color: #64748B; line-height: 1.5; flex: 1; margin: 0 0 14px 0;">{{ $card->description }}</p>

                    <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid var(--admin-border); padding-top: 12px;">
                        <span style="font-size: 12px; font-weight: 700; color: {{ $card->is_active ? '#15803D' : '#64748B' }};">
                            <i class="fa-solid fa-circle-{{ $card->is_active ? 'check' : 'xmark' }}"></i>
                            {{ $card->is_active ? 'Active' : 'Inactive' }}
                        </span>
                        <div style="display: flex; gap: 6px;">
                            <a href="{{ route('admin.why-choose.edit', $card) }}" class="btn-action-view" style="padding: 5px 10px; font-size: 12px;">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form action="{{ route('admin.why-choose.destroy', $card) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Delete this card?');">
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
    // Interactive live preview updates
    const inputEyebrow = document.getElementById('inputEyebrow');
    const inputTitle1 = document.getElementById('inputTitle1');
    const inputTitle2 = document.getElementById('inputTitle2');
    const inputSubtitle = document.getElementById('inputSubtitle');
    const inputCta = document.getElementById('inputCta');

    const previewEyebrow = document.getElementById('previewEyebrow');
    const previewTitle1 = document.getElementById('previewTitle1');
    const previewTitle2 = document.getElementById('previewTitle2');
    const previewSubtitle = document.getElementById('previewSubtitle');
    const previewCta = document.getElementById('previewCta');

    if (inputEyebrow) {
        inputEyebrow.addEventListener('input', () => { previewEyebrow.textContent = inputEyebrow.value || 'WHY CHOOSE ADVAITA?'; });
        inputTitle1.addEventListener('input', () => { previewTitle1.textContent = inputTitle1.value || 'Why Choose'; });
        inputTitle2.addEventListener('input', () => { previewTitle2.textContent = inputTitle2.value || ''; });
        inputSubtitle.addEventListener('input', () => { previewSubtitle.textContent = inputSubtitle.value || ''; });
        inputCta.addEventListener('input', () => { previewCta.textContent = inputCta.value || 'Discover the Advaita Difference'; });
    }
});

function setCardsView(mode) {
    const tableContainer = document.getElementById('cardsTableContainer');
    const gridContainer = document.getElementById('cardsGridContainer');
    const btnTable = document.getElementById('btnTableView');
    const btnGrid = document.getElementById('btnGridView');

    if (mode === 'grid') {
        tableContainer.style.display = 'none';
        gridContainer.style.display = 'grid';
        btnTable.classList.remove('active');
        btnGrid.classList.add('active');
    } else {
        tableContainer.style.display = 'block';
        gridContainer.style.display = 'none';
        btnTable.classList.add('active');
        btnGrid.classList.remove('active');
    }
}
</script>
@endsection
