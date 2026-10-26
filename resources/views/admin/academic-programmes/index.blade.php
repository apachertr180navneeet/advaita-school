@extends('layouts.admin')

@section('title', 'Academic Programmes & Curriculum · Advaita Admin')
@section('page_title', 'Academic Programmes Manager')

@section('content')
<div class="academic-mgmt-wrapper">

    <!-- 1. Top Header Action Bar -->
    <div class="academic-top-bar">
        <div class="cph-title-wrap">
            <div class="cph-icon-box">
                <i class="fa-solid fa-book-open-reader"></i>
            </div>
            <div class="academic-top-title">
                <h3>Academic Programmes &amp; Curriculum</h3>
                <p>Manage curriculum tracks, specialized programmes (Abacus, Olympiads, NEET/IIT Foundation), and stage-wise features.</p>
            </div>
        </div>
        <div class="d-flex align-items-center gap-12 flex-wrap">
            <a href="{{ route('academics') }}" target="_blank" class="btn-admin btn-secondary" title="View live academics page on frontend">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>Live Academics Hub</span>
            </a>
            <a href="{{ route('admin.academic-programmes.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add Programme</span>
            </a>
        </div>
    </div>

    <!-- 2. Overview Metrics Row -->
    <div class="pages-directory-metrics-grid">
        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>{{ $programmes->count() }}</h4>
                <span>Total Programmes</span>
            </div>
            <div class="dm-icon dm-icon-pages">
                <i class="fa-solid fa-layer-group"></i>
            </div>
        </div>

        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>{{ $programmes->where('stage', 'pre_primary')->count() }}</h4>
                <span>Pre-Primary (Nursery–UKG)</span>
            </div>
            <div class="dm-icon dm-icon-fields">
                <i class="fa-solid fa-shapes"></i>
            </div>
        </div>

        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>{{ $programmes->where('stage', 'primary')->count() }}</h4>
                <span>Primary (Abacus &amp; Olympiads)</span>
            </div>
            <div class="dm-icon dm-icon-images">
                <i class="fa-solid fa-calculator"></i>
            </div>
        </div>

        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>{{ $programmes->where('stage', 'secondary')->count() }}</h4>
                <span>Secondary (IIT Foundation)</span>
            </div>
            <div class="dm-icon dm-icon-sync">
                <i class="fa-solid fa-atom"></i>
            </div>
        </div>
    </div>

    <!-- 3. Stage Filter Pills Bar -->
    <div class="stage-filter-pills-bar">
        <a href="{{ route('admin.academic-programmes.index') }}" class="btn-stage-pill {{ empty($selectedStage) ? 'active' : '' }}">
            <i class="fa-solid fa-list-check"></i>
            <span>All Stages</span>
            <span class="pill-badge">{{ $programmes->count() }}</span>
        </a>
        @foreach($stages as $stageKey => $s)
        <a href="{{ route('admin.academic-programmes.index', ['stage' => $stageKey]) }}" class="btn-stage-pill {{ $selectedStage === $stageKey ? 'active' : '' }}">
            <i class="{{ $s['icon'] }}"></i>
            <span>{{ $s['label'] }}</span>
            <span class="pill-badge">{{ $programmes->where('stage', $stageKey)->count() }}</span>
        </a>
        @endforeach
    </div>

    <!-- 4. Table & Cards Switcher Card -->
    <div class="cards-table-card">
        <div class="table-top-actions-bar">
            <div class="d-flex align-items-center gap-12 flex-wrap">
                <h3 class="text-navy fs-16 font-extrabold d-flex align-items-center gap-8 m-0">
                    <i class="fa-solid fa-book-bookmark text-orange"></i>
                    <span>Curriculum Directory ({{ $programmes->count() }})</span>
                </h3>
                <span class="badge-blue-pill">
                    {{ $programmes->where('is_active', true)->count() }} Active on Website
                </span>
            </div>

            <!-- View Toggle Switcher -->
            <div class="table-view-tabs">
                <button type="button" class="view-tab-btn active" id="btnTableView" onclick="setProgrammesView('table')">
                    <i class="fa-solid fa-table-list"></i>
                    <span>Table View</span>
                </button>
                <button type="button" class="view-tab-btn" id="btnGridView" onclick="setProgrammesView('grid')">
                    <i class="fa-solid fa-grip"></i>
                    <span>Cards Preview</span>
                </button>
            </div>
        </div>

        <!-- 4A. Structured Table View -->
        <div class="table-responsive" id="programmesTableContainer">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 70px; text-align: center;">Order</th>
                        <th style="width: 120px;">Visual</th>
                        <th>Programme Title &amp; Subtitle</th>
                        <th style="width: 180px;">Stage &amp; Classes</th>
                        <th style="width: 250px;">Key Highlights</th>
                        <th style="width: 110px; text-align: center;">Status</th>
                        <th style="width: 110px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($programmes as $programme)
                    <tr>
                        <!-- Order -->
                        <td style="text-align: center;">
                            <span class="badge-neutral font-bold">#{{ $programme->order }}</span>
                        </td>

                        <!-- Thumbnail -->
                        <td>
                            <div class="prog-thumb-wrap">
                                <a href="{{ $programme->image_url }}" target="_blank" class="prog-thumb-box" title="View Full Visual">
                                    <img src="{{ $programme->image_url }}" alt="{{ $programme->title }}">
                                </a>
                            </div>
                        </td>

                        <!-- Title & Subtitle -->
                        <td>
                            <div class="text-navy fs-14 font-extrabold mb-3">{{ $programme->title }}</div>
                            @if($programme->subtitle)
                                <div class="text-muted fs-12 mb-4" style="line-height: 1.4;">{{ Str::limit($programme->subtitle, 80) }}</div>
                            @endif
                            @if($programme->badge_text)
                                <span class="badge-orange-pill">
                                    <i class="fa-solid fa-sparkles text-orange me-1"></i>{{ $programme->badge_text }}
                                </span>
                            @endif
                        </td>

                        <!-- Stage & Classes -->
                        <td>
                            <div class="mb-4">
                                <span class="badge-stage {{ $programme->stage }}">
                                    <i class="{{ \App\Models\AcademicProgramme::STAGES[$programme->stage]['icon'] ?? 'fa-solid fa-shapes' }}"></i>
                                    {{ $programme->stage_label }}
                                </span>
                            </div>
                            <div class="fs-12 font-bold text-dark">
                                <i class="fa-solid fa-users text-muted me-1"></i>
                                {{ $programme->classes ?? 'All Classes' }}
                            </div>
                        </td>

                        <!-- Highlights -->
                        <td>
                            @if(!empty($programme->features))
                                <ul class="feature-check-list">
                                    @foreach(array_slice($programme->features, 0, 2) as $feat)
                                        <li><i class="fa-solid fa-circle-check"></i> <span>{{ $feat }}</span></li>
                                    @endforeach
                                    @if(count($programme->features) > 2)
                                        <li class="more-tag">+{{ count($programme->features) - 2 }} more features</li>
                                    @endif
                                </ul>
                            @else
                                <span class="text-muted fs-12 fst-italic">No highlights recorded</span>
                            @endif
                        </td>

                        <!-- Status Toggle -->
                        <td style="text-align: center;">
                            <form action="{{ route('admin.academic-programmes.toggle-status', $programme->id) }}" method="POST" class="m-0">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="status-pill {{ $programme->is_active ? 'active' : 'inactive' }}" title="Click to toggle status">
                                    <i class="fa-solid {{ $programme->is_active ? 'fa-check' : 'fa-xmark' }}"></i>
                                    <span>{{ $programme->is_active ? 'Active' : 'Hidden' }}</span>
                                </button>
                            </form>
                        </td>

                        <!-- Actions -->
                        <td style="text-align: right;">
                            <div class="btn-action-group">
                                <a href="{{ route('admin.academic-programmes.edit', $programme->id) }}" class="btn-act btn-act-edit" title="Edit Programme">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.academic-programmes.destroy', $programme->id) }}" method="POST" class="m-0" data-confirm="Delete programme '{{ addslashes($programme->title) }}'?" data-confirm-title="Delete Programme">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-act btn-act-del" title="Delete Programme">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-40">
                            <div class="empty-state-box p-30">
                                <i class="fa-solid fa-book-open-reader fs-36 text-muted mb-12"></i>
                                <h4 class="text-navy font-bold fs-16 mb-6">No academic programmes found</h4>
                                <p class="text-muted fs-13 mb-16">Get started by creating your first academic programme or curriculum track.</p>
                                <a href="{{ route('admin.academic-programmes.create') }}" class="btn-admin btn-primary">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Add Programme</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- 4B. Visual Cards Grid (Toggled Mode) -->
        <div class="cards-visual-grid" id="programmesGridContainer">
            @foreach($programmes as $programme)
            <div class="visual-card-item">
                <div class="visual-card-media">
                    <img src="{{ $programme->image_url }}" alt="{{ $programme->title }}" loading="lazy">
                    <div class="visual-card-badge badge-stage {{ $programme->stage }}" style="top: 10px; left: 10px; border-radius: 20px;">
                        <i class="{{ \App\Models\AcademicProgramme::STAGES[$programme->stage]['icon'] ?? 'fa-solid fa-shapes' }}"></i>
                        {{ $programme->stage_label }}
                    </div>
                    <div class="live-visual-order">#{{ $programme->order }}</div>
                </div>

                <div class="visual-card-body">
                    <div class="d-flex align-items-center justify-content-between gap-6 mb-8">
                        <span class="fs-12 font-bold text-dark"><i class="fa-solid fa-users text-muted me-1"></i>{{ $programme->classes ?? 'All Classes' }}</span>
                        @if($programme->badge_text)
                            <span class="badge-orange-pill">{{ $programme->badge_text }}</span>
                        @endif
                    </div>

                    <h4 class="text-navy fs-15 font-extrabold mb-4">{{ $programme->title }}</h4>
                    @if($programme->subtitle)
                        <p class="text-muted fs-12 mb-12" style="line-height: 1.4;">{{ Str::limit($programme->subtitle, 85) }}</p>
                    @endif

                    @if(!empty($programme->features))
                    <ul class="feature-check-list mb-16">
                        @foreach(array_slice($programme->features, 0, 3) as $feat)
                            <li><i class="fa-solid fa-circle-check"></i> <span>{{ $feat }}</span></li>
                        @endforeach
                    </ul>
                    @endif

                    <div class="d-flex align-items-center justify-content-between pt-12 mt-auto border-top">
                        <form action="{{ route('admin.academic-programmes.toggle-status', $programme->id) }}" method="POST" class="m-0">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="status-pill {{ $programme->is_active ? 'active' : 'inactive' }}">
                                <i class="fa-solid {{ $programme->is_active ? 'fa-check' : 'fa-xmark' }}"></i>
                                <span>{{ $programme->is_active ? 'Active' : 'Hidden' }}</span>
                            </button>
                        </form>

                        <div class="btn-action-group">
                            <a href="{{ route('admin.academic-programmes.edit', $programme->id) }}" class="btn-act btn-act-edit" title="Edit">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('admin.academic-programmes.destroy', $programme->id) }}" method="POST" class="m-0" data-confirm="Delete programme '{{ addslashes($programme->title) }}'?" data-confirm-title="Delete Programme">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-act btn-act-del" title="Delete">
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

<!-- View Switcher Script -->
<script>
function setProgrammesView(mode) {
    const tableContainer = document.getElementById('programmesTableContainer');
    const gridContainer = document.getElementById('programmesGridContainer');
    const btnTable = document.getElementById('btnTableView');
    const btnGrid = document.getElementById('btnGridView');

    if (mode === 'grid') {
        tableContainer.style.display = 'none';
        gridContainer.style.display = 'grid';
        btnTable.classList.remove('active');
        btnGrid.classList.add('active');
        localStorage.setItem('advaita_prog_view', 'grid');
    } else {
        tableContainer.style.display = 'block';
        gridContainer.style.display = 'none';
        btnTable.classList.add('active');
        btnGrid.classList.remove('active');
        localStorage.setItem('advaita_prog_view', 'table');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const savedView = localStorage.getItem('advaita_prog_view');
    if (savedView === 'grid') {
        setProgrammesView('grid');
    }
});
</script>
@endsection
