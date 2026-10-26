@extends('layouts.admin')

@section('title', 'Results & Student Achievements · Advaita Admin')
@section('page_title', 'Results & Achievements Manager')

@section('content')
<div class="academic-mgmt-wrapper">

    <!-- 1. Top Header Action Bar -->
    <div class="academic-top-bar">
        <div class="cph-title-wrap">
            <div class="cph-icon-box">
                <i class="fa-solid fa-trophy"></i>
            </div>
            <div class="academic-top-title">
                <h3>Results &amp; Student Achievements</h3>
                <p>Manage Class 10 Board exam toppers, Olympiad medalists, Abacus competitions, and NEET/IIT Foundation honors.</p>
            </div>
        </div>
        <div class="d-flex align-items-center gap-12 flex-wrap">
            <a href="{{ route('results') }}" target="_blank" class="btn-admin btn-secondary" title="View live results page on frontend">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>Live Results Hub</span>
            </a>
            <a href="{{ route('admin.results.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add Achievement</span>
            </a>
        </div>
    </div>

    <!-- 2. Overview Metrics Row -->
    <div class="pages-directory-metrics-grid">
        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>{{ $results->count() }}</h4>
                <span>Total Achievements</span>
            </div>
            <div class="dm-icon dm-icon-pages">
                <i class="fa-solid fa-trophy"></i>
            </div>
        </div>

        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>{{ $results->where('category', 'board')->count() }}</h4>
                <span>Board Exam Toppers</span>
            </div>
            <div class="dm-icon dm-icon-fields">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>
        </div>

        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>{{ $results->where('category', 'olympiad')->count() }}</h4>
                <span>Olympiad Medals</span>
            </div>
            <div class="dm-icon dm-icon-images">
                <i class="fa-solid fa-medal"></i>
            </div>
        </div>

        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>{{ $results->whereIn('category', ['abacus', 'iit_foundation', 'competitive'])->count() }}</h4>
                <span>Abacus &amp; Foundation</span>
            </div>
            <div class="dm-icon dm-icon-sync">
                <i class="fa-solid fa-award"></i>
            </div>
        </div>
    </div>

    <!-- 3. Category Filter Pills Bar & Session Filter Row -->
    <div class="d-flex align-items-center justify-content-between gap-16 flex-wrap mb-16">
        <div class="stage-filter-pills-bar m-0 flex-grow-1">
            <a href="{{ route('admin.results.index', array_filter(['year' => $selectedYear])) }}" class="btn-stage-pill {{ empty($selectedCategory) ? 'active' : '' }}">
                <i class="fa-solid fa-trophy"></i>
                <span>All Achievements</span>
                <span class="pill-badge">{{ \App\Models\AcademicResult::when($selectedYear, fn($q) => $q->where('academic_year', $selectedYear))->count() }}</span>
            </a>
            @foreach($categories as $catKey => $cat)
            <a href="{{ route('admin.results.index', array_filter(['category' => $catKey, 'year' => $selectedYear])) }}" class="btn-stage-pill {{ $selectedCategory === $catKey ? 'active' : '' }}">
                <i class="{{ $cat['icon'] }}"></i>
                <span>{{ $cat['label'] }}</span>
                <span class="pill-badge">{{ \App\Models\AcademicResult::where('category', $catKey)->when($selectedYear, fn($q) => $q->where('academic_year', $selectedYear))->count() }}</span>
            </a>
            @endforeach
        </div>

        <!-- Academic Session Filter -->
        <div class="results-session-filter-wrap">
            <label class="session-filter-label" for="resultsSessionSelect">
                <i class="fa-regular fa-calendar-days text-orange"></i>
                <span>Session:</span>
            </label>
            <select id="resultsSessionSelect" class="session-filter-select" onchange="location.href=this.value">
                <option value="{{ route('admin.results.index', array_filter(['category' => $selectedCategory])) }}">All Academic Sessions</option>
                @foreach($academicYears as $yr)
                <option value="{{ route('admin.results.index', array_filter(['category' => $selectedCategory, 'year' => $yr])) }}" {{ $selectedYear === $yr ? 'selected' : '' }}>
                    Session {{ $yr }}
                </option>
                @endforeach
            </select>
            @if(!empty($selectedCategory) || !empty($selectedYear))
            <a href="{{ route('admin.results.index') }}" class="btn-clear-filter" title="Clear all active filters">
                <i class="fa-solid fa-xmark"></i>
                <span>Clear</span>
            </a>
            @endif
        </div>
    </div>

    <!-- 4. Table & Cards Switcher Card -->
    <div class="cards-table-card">
        <div class="table-top-actions-bar">
            <div class="d-flex align-items-center gap-12 flex-wrap">
                <h3 class="text-navy fs-16 font-extrabold d-flex align-items-center gap-8 m-0">
                    <i class="fa-solid fa-award text-orange"></i>
                    <span>Student Achievements Registry ({{ $results->count() }})</span>
                </h3>
                <span class="badge-blue-pill">
                    {{ $results->where('is_active', true)->count() }} Verified Active
                </span>
            </div>

            <!-- View Switcher -->
            <div class="table-view-tabs">
                <button type="button" class="view-tab-btn active" id="btnResTableView" onclick="setResultsView('table')">
                    <i class="fa-solid fa-table-list"></i>
                    <span>Table View</span>
                </button>
                <button type="button" class="view-tab-btn" id="btnResGridView" onclick="setResultsView('grid')">
                    <i class="fa-solid fa-grip"></i>
                    <span>Cards Preview</span>
                </button>
            </div>
        </div>

        <!-- 4A. Structured Table View -->
        <div class="table-responsive" id="resultsTableContainer">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 65px; text-align: center;">Order</th>
                        <th>Student &amp; Achievement</th>
                        <th style="width: 220px;">Category &amp; Exam</th>
                        <th style="width: 170px;">Score &amp; Honors</th>
                        <th style="width: 130px; text-align: center;">Session</th>
                        <th style="width: 110px; text-align: center;">Status</th>
                        <th style="width: 100px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($results as $result)
                    <tr>
                        <!-- Order -->
                        <td style="text-align: center;">
                            <span class="badge-neutral font-bold">#{{ $result->order }}</span>
                        </td>

                        <!-- Student & Achievement Info -->
                        <td>
                            <div class="d-flex align-items-center gap-14">
                                <div class="student-avatar-box">
                                    <img src="{{ $result->photo_url }}" alt="{{ $result->student_name }}" loading="lazy">
                                    @if($result->is_featured)
                                    <span class="avatar-crown-badge" title="District Topper Spotlight">
                                        <i class="fa-solid fa-crown"></i>
                                    </span>
                                    @endif
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center gap-8 flex-wrap">
                                        <span class="student-name-text">{{ $result->student_name }}</span>
                                        @if($result->class_grade)
                                        <span class="badge-blue-pill">{{ $result->class_grade }}</span>
                                        @endif
                                        @if($result->is_featured)
                                        <span class="badge-featured-pill">
                                            <i class="fa-solid fa-crown"></i> District Topper
                                        </span>
                                        @endif
                                    </div>
                                    <div class="achievement-title-text">{{ $result->title }}</div>
                                    @if($result->description)
                                    <div class="achievement-desc-preview">{{ Str::limit($result->description, 80) }}</div>
                                    @endif
                                </div>
                            </div>
                        </td>

                        <!-- Category & Exam -->
                        <td>
                            <div class="badge-cat-pill {{ $result->category }}">
                                <i class="{{ $result->category_icon }}"></i>
                                <span>{{ $result->category_label }}</span>
                            </div>
                            <div class="exam-name-text">{{ $result->exam_name }}</div>
                        </td>

                        <!-- Score & Honors -->
                        <td>
                            <div class="d-flex align-items-center gap-6 flex-wrap">
                                @if($result->score)
                                <span class="score-badge">{{ $result->score }}</span>
                                @endif
                                @if($result->rank)
                                <span class="rank-badge">{{ $result->rank }}</span>
                                @endif
                            </div>
                            @if($result->certificate_url)
                            <a href="{{ $result->certificate_url }}" target="_blank" class="certificate-link-pill" title="View Official Certificate/Poster">
                                <i class="fa-solid fa-file-image"></i>
                                <span>Certificate</span>
                            </a>
                            @endif
                        </td>

                        <!-- Session -->
                        <td style="text-align: center;">
                            <span class="badge-neutral font-bold">Session {{ $result->academic_year }}</span>
                        </td>

                        <!-- Status Toggle -->
                        <td style="text-align: center;">
                            <form action="{{ route('admin.results.toggle-status', $result->id) }}" method="POST" class="m-0">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="status-pill {{ $result->is_active ? 'active' : 'inactive' }}" title="Click to toggle status">
                                    <i class="fa-solid {{ $result->is_active ? 'fa-check' : 'fa-xmark' }}"></i>
                                    <span>{{ $result->is_active ? 'Active' : 'Hidden' }}</span>
                                </button>
                            </form>
                        </td>

                        <!-- Actions -->
                        <td style="text-align: right;">
                            <div class="btn-action-group">
                                <a href="{{ route('admin.results.edit', $result->id) }}" class="btn-act btn-act-edit" title="Edit Achievement">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.results.destroy', $result->id) }}" method="POST" class="m-0" data-confirm="Delete achievement '{{ addslashes($result->student_name) }}'?" data-confirm-title="Delete Achievement">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-act btn-act-del" title="Delete Achievement">
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
                                <i class="fa-solid fa-trophy fs-36 text-muted mb-12"></i>
                                <h4 class="text-navy font-bold fs-16 mb-6">No student achievements found</h4>
                                <p class="text-muted fs-13 mb-16">Add verified student results, ranks, and medals to showcase on the website.</p>
                                <a href="{{ route('admin.results.create') }}" class="btn-admin btn-primary">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Add Achievement</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- 4B. Visual Cards Grid (Toggled Mode) -->
        <div class="cards-visual-grid" id="resultsGridContainer">
            @foreach($results as $res)
            <div class="visual-card-item student-result-card">
                <div class="visual-card-media student-card-media">
                    <img src="{{ $res->photo_url }}" alt="{{ $res->student_name }}" loading="lazy">
                    <div class="badge-cat-pill {{ $res->category }} card-floating-cat">
                        <i class="{{ $res->category_icon }}"></i>
                        <span>{{ $res->category_label }}</span>
                    </div>
                    @if($res->is_featured)
                    <div class="card-floating-crown">
                        <i class="fa-solid fa-crown"></i> District Topper
                    </div>
                    @endif
                    <div class="live-visual-order">#{{ $res->order }}</div>
                </div>

                <div class="visual-card-body">
                    <div class="d-flex align-items-center justify-content-between gap-6 mb-8">
                        <span class="fs-12 font-bold text-dark"><i class="fa-solid fa-school text-muted me-1"></i>{{ $res->class_grade ?? 'CBSE Wing' }}</span>
                        <span class="badge-neutral font-bold">Session {{ $res->academic_year }}</span>
                    </div>

                    <h4 class="student-card-name">{{ $res->student_name }}</h4>
                    <p class="student-card-title">{{ $res->title }}</p>

                    <div class="d-flex align-items-center gap-6 mb-12 flex-wrap">
                        @if($res->score)
                        <span class="score-badge">{{ $res->score }}</span>
                        @endif
                        @if($res->rank)
                        <span class="rank-badge">{{ $res->rank }}</span>
                        @endif
                        @if($res->certificate_url)
                        <a href="{{ $res->certificate_url }}" target="_blank" class="certificate-link-pill">
                            <i class="fa-solid fa-file-image"></i> Certificate
                        </a>
                        @endif
                    </div>

                    <div class="d-flex align-items-center justify-content-between pt-12 mt-auto border-top">
                        <form action="{{ route('admin.results.toggle-status', $res->id) }}" method="POST" class="m-0">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="status-pill {{ $res->is_active ? 'active' : 'inactive' }}">
                                <i class="fa-solid {{ $res->is_active ? 'fa-check' : 'fa-xmark' }}"></i>
                                <span>{{ $res->is_active ? 'Active' : 'Hidden' }}</span>
                            </button>
                        </form>

                        <div class="btn-action-group">
                            <a href="{{ route('admin.results.edit', $res->id) }}" class="btn-act btn-act-edit" title="Edit">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('admin.results.destroy', $res->id) }}" method="POST" class="m-0" data-confirm="Delete achievement '{{ addslashes($res->student_name) }}'?" data-confirm-title="Delete Achievement">
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
function setResultsView(mode) {
    const tableContainer = document.getElementById('resultsTableContainer');
    const gridContainer = document.getElementById('resultsGridContainer');
    const btnTable = document.getElementById('btnResTableView');
    const btnGrid = document.getElementById('btnResGridView');

    if (mode === 'grid') {
        tableContainer.style.display = 'none';
        gridContainer.style.display = 'grid';
        btnTable.classList.remove('active');
        btnGrid.classList.add('active');
        localStorage.setItem('advaita_res_view', 'grid');
    } else {
        tableContainer.style.display = 'block';
        gridContainer.style.display = 'none';
        btnTable.classList.add('active');
        btnGrid.classList.remove('active');
        localStorage.setItem('advaita_res_view', 'table');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const savedView = localStorage.getItem('advaita_res_view');
    if (savedView === 'grid') {
        setResultsView('grid');
    }
});
</script>
@endsection
