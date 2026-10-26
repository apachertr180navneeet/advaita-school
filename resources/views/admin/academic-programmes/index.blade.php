@extends('layouts.admin')

@section('title', 'Academic Programmes & Curriculum · Advaita Admin')
@section('page_title', 'Academic Programmes Manager')

@section('content')
<div class="content-page-header">
    <div class="cph-title-wrap">
        <div class="cph-icon-box">
            <i class="fa-solid fa-book-open-reader"></i>
        </div>
        <div>
            <h1 class="cph-title">Academic Programmes &amp; Curriculum</h1>
            <p class="cph-subtitle">Manage curriculum items, specialized tracks (Abacus, Olympiads, NEET/IIT Foundation), and stage-wise features.</p>
        </div>
    </div>
    <div class="cph-actions">
        <a href="{{ route('academics') }}" target="_blank" class="btn-admin btn-secondary" title="View live on website">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <span>Live Academics Hub</span>
        </a>
        <a href="{{ route('admin.academic-programmes.create') }}" class="btn-admin btn-primary">
            <i class="fa-solid fa-plus"></i>
            <span>Add Programme</span>
        </a>
    </div>
</div>

<!-- Metrics Row -->
<div class="pages-directory-metrics-grid mb-24">
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
            <span>Pre-Primary (Nursery-UKG)</span>
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

<!-- Stage Filter Pills -->
<div class="d-flex align-items-center gap-10 mb-20 flex-wrap">
    <a href="{{ route('admin.academic-programmes.index') }}" class="btn-admin {{ empty($selectedStage) ? 'btn-primary' : 'btn-secondary' }}">
        <i class="fa-solid fa-list-check"></i>
        <span>All Stages ({{ $programmes->count() }})</span>
    </a>
    @foreach($stages as $stageKey => $s)
    <a href="{{ route('admin.academic-programmes.index', ['stage' => $stageKey]) }}" class="btn-admin {{ $selectedStage === $stageKey ? 'btn-primary' : 'btn-secondary' }}">
        <i class="{{ $s['icon'] }}"></i>
        <span>{{ $s['label'] }} ({{ $programmes->where('stage', $stageKey)->count() }})</span>
    </a>
    @endforeach
</div>

<!-- Table Card -->
<div class="cards-table-card">
    <div class="table-responsive">
        <table class="table-admin">
            <thead>
                <tr>
                    <th style="width: 60px;">Order</th>
                    <th style="width: 100px;">Visual</th>
                    <th>Stage &amp; Title</th>
                    <th>Classes / Badge</th>
                    <th>Key Highlights</th>
                    <th style="width: 90px; text-align: center;">Status</th>
                    <th style="width: 130px; text-align: right;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($programmes as $programme)
                <tr>
                    <td>
                        <span class="badge-neutral font-bold">#{{ $programme->order }}</span>
                    </td>
                    <td>
                        <div class="slider-thumb-box" style="width: 80px; height: 54px; border-radius: 8px; overflow: hidden;">
                            <img src="{{ $programme->image_url }}" alt="{{ $programme->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </td>
                    <td>
                        <div class="font-extrabold text-navy fs-14">{{ $programme->title }}</div>
                        @if($programme->subtitle)
                        <div class="text-muted fs-12 mt-2">{{ Str::limit($programme->subtitle, 65) }}</div>
                        @endif
                        <span class="badge-blue-pill mt-4 d-inline-block" style="font-size: 11px;">
                            <i class="{{ \App\Models\AcademicProgramme::STAGES[$programme->stage]['icon'] ?? 'fa-solid fa-shapes' }}"></i>
                            {{ $programme->stage_label }}
                        </span>
                    </td>
                    <td>
                        <div class="fs-13 font-bold text-dark">{{ $programme->classes ?? '—' }}</div>
                        @if($programme->badge_text)
                        <span class="badge-orange-pill mt-4 d-inline-block" style="font-size: 11px;">
                            {{ $programme->badge_text }}
                        </span>
                        @endif
                    </td>
                    <td>
                        @if(!empty($programme->features))
                        <ul class="m-0 p-0 list-unstyled fs-12 text-muted">
                            @foreach(array_slice($programme->features, 0, 2) as $feat)
                            <li><i class="fa-solid fa-check text-green fs-10 me-1"></i> {{ $feat }}</li>
                            @endforeach
                            @if(count($programme->features) > 2)
                            <li class="text-orange fs-11 font-bold">+{{ count($programme->features) - 2 }} more</li>
                            @endif
                        </ul>
                        @else
                        <span class="text-muted fs-12">No highlights added</span>
                        @endif
                    </td>
                    <td style="text-align: center;">
                        <form action="{{ route('admin.academic-programmes.toggle-status', $programme->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="status-toggle-btn {{ $programme->is_active ? 'active' : '' }}" title="Click to {{ $programme->is_active ? 'deactivate' : 'activate' }}">
                                <span class="toggle-slider"></span>
                            </button>
                        </form>
                    </td>
                    <td style="text-align: right;">
                        <div class="d-flex align-items-center justify-content-end gap-6">
                            <a href="{{ route('admin.academic-programmes.edit', $programme->id) }}" class="btn-action-icon btn-edit" title="Edit Programme">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('admin.academic-programmes.destroy', $programme->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this programme?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action-icon btn-delete" title="Delete Programme">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center py-40">
                        <div class="empty-state-box">
                            <i class="fa-solid fa-book-open-reader fs-36 text-muted mb-12"></i>
                            <h4 class="text-navy font-bold">No academic programmes found</h4>
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
</div>
@endsection
