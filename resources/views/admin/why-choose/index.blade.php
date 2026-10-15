@extends('layouts.admin')

@section('title', 'Why Choose Advaita Management')
@section('page_title', 'Why Choose Advaita (Advantage Cards)')



@section('content')
<div class="why-mgmt-wrapper">

    <!-- 1. Header Action Bar -->
    <div class="why-top-bar">
        <div class="why-top-title">
            <h3>Why Choose Advaita (Advantage Cards)</h3>
            <p>Manage the homepage carousel cards and header text shown to prospective parents and students.</p>
        </div>
        <div class="d-flex align-items-center gap-10">
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
                <i class="fa-solid fa-heading text-orange"></i>
                <span>Section Heading &amp; Subtitle Configuration</span>
            </h4>
            <span class="text-muted fs-12">Appears above the slider cards on the public homepage</span>
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
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="inputEyebrow" name="eyebrow" class="form-input-custom" value="{{ old('eyebrow', $sectionSettings['eyebrow']) }}" required maxlength="150" placeholder="e.g. WHY CHOOSE ADVAITA?">
                    </div>

                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Title Part 1 (Navy Dark)</span>
                            <span class="text-danger">*</span>
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

                <div class="form-group-custom mb-16">
                    <label class="form-label-custom">
                        <span>Section Subtitle Description</span>
                    </label>
                    <textarea id="inputSubtitle" name="subtitle" rows="2" class="form-input-custom" placeholder="Brief summary of the school advantages...">{{ old('subtitle', $sectionSettings['subtitle']) }}</textarea>
                </div>

                <div class="card-grid-260">
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

                <div class="d-flex justify-content-end">
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
            <div class="d-flex align-items-center gap-12">
                <h3 class="text-navy fs-16 font-extrabold d-flex align-items-center gap-8 m-0">
                    <i class="fa-solid fa-award text-orange"></i>
                    <span>Advantage Cards ({{ $cards->count() }})</span>
                </h3>
                <span class="table-count-badge badge-blue-pill">
                    {{ $cards->where('is_active', true)->count() }} Active
                </span>
            </div>

            <div class="d-flex align-items-center gap-12">
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
                        <th class="col-w80">Order</th>
                        <th class="col-w150">Banner Image</th>
                        <th class="col-w140">Theme Badge</th>
                        <th>Card Title &amp; Description</th>
                        <th class="col-w130">Status</th>
                        <th class="col-w120 text-right">Actions</th>
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
                            <div class="d-flex flex-column align-items-start gap-2">
                                <strong class="text-navy fs-14">#{{ $card->order }}</strong>
                                <span class="text-muted fs-10 font-semibold">Pos {{ $loop->iteration }}</span>
                            </div>
                        </td>

                        <!-- Thumbnail with Badge & Specs -->
                        <td>
                            <div class="card-thumb-wrap">
                                <div class="card-thumb-box">
                                    <img src="{{ $card->image_url }}" alt="{{ $card->title }}" loading="lazy">
                                    <div class="badge-number-chip theme-gradient-{{ $card->theme_color ?? 'orange' }}">
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
                            <span class="theme-color-pill theme-badge-{{ $card->theme_color ?? 'orange' }}">
                                <span class="theme-dot theme-dot-{{ $card->theme_color ?? 'orange' }}"></span>
                                {{ $themeInfo['label'] }}
                            </span>
                        </td>

                        <!-- Card Title & Description -->
                        <td>
                            <div class="text-navy fs-14 font-extrabold mb-4">
                                {{ $card->title }}
                            </div>
                            <div class="text-muted fs-13 line-clamp-desc-lg">
                                {{ $card->description }}
                            </div>
                        </td>

                        <!-- Status Toggle -->
                        <td>
                            <form action="{{ route('admin.why-choose.toggle-status', $card) }}" method="POST" class="m-0">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn-action-view btn-status-toggle {{ $card->is_active ? 'is-active' : 'is-inactive' }}" title="Click to {{ $card->is_active ? 'deactivate' : 'activate' }}">
                                    <i class="fa-solid fa-circle-{{ $card->is_active ? 'check' : 'xmark' }}"></i>
                                    <span>{{ $card->is_active ? 'Active' : 'Inactive' }}</span>
                                </button>
                            </form>
                        </td>

                        <!-- Actions -->
                        <td class="text-right">
                            <div class="d-inline-flex align-items-center gap-6">
                                <a href="{{ route('admin.why-choose.edit', $card) }}" class="btn-action-view" title="Edit Card">
                                    <i class="fa-solid fa-pen"></i>
                                    <span>Edit</span>
                                </a>

                                <form action="{{ route('admin.why-choose.destroy', $card) }}" method="POST" class="m-0" data-confirm="Delete advantage card '{{ addslashes($card->title) }}'?" data-confirm-title="Delete Advantage Card">
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
                        <td colspan="6" class="table-empty-pad">
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
                    <div class="visual-card-badge theme-gradient-{{ $card->theme_color ?? 'orange' }}">
                        {{ $card->badge_label }}
                    </div>
                </div>
                <div class="visual-card-body">
                    <span class="theme-color-pill theme-badge-{{ $card->theme_color ?? 'orange' }} w-fit mb-8">
                        <span class="theme-dot-sm theme-dot-{{ $card->theme_color ?? 'orange' }}"></span>
                        {{ $themeInfo['label'] }}
                    </span>
                    <h4 class="text-navy fs-15 font-extrabold mb-6">{{ $card->title }}</h4>
                    <p class="text-muted fs-12 flex-1 mb-14">{{ $card->description }}</p>

                    <div class="d-flex align-items-center justify-content-between border-t pt-12">
                        <span class="fs-12 font-bold {{ $card->is_active ? 'text-success' : 'text-muted' }}">
                            <i class="fa-solid fa-circle-{{ $card->is_active ? 'check' : 'xmark' }}"></i>
                            {{ $card->is_active ? 'Active' : 'Inactive' }}
                        </span>
                        <div class="d-flex gap-6">
                            <a href="{{ route('admin.why-choose.edit', $card) }}" class="btn-action-view btn-pad-sm">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form action="{{ route('admin.why-choose.destroy', $card) }}" method="POST" class="m-0" data-confirm="Delete this advantage card?" data-confirm-title="Delete Advantage Card">
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
