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

    <!-- 3. Filters Bar Card -->
    <div class="cards-table-card p-18">
        <form method="GET" action="{{ route('admin.results.index') }}" class="d-flex align-items-center gap-16 flex-wrap m-0">
            <div class="d-flex align-items-center gap-8">
                <label class="fs-13 font-bold text-navy m-0"><i class="fa-solid fa-filter text-orange me-1"></i> Category:</label>
                <select name="category" class="form-control" style="width: auto; padding: 7px 14px; font-size: 13px;" onchange="this.form.submit()">
                    <option value="">All Categories ({{ \App\Models\AcademicResult::count() }})</option>
                    @foreach($categories as $catKey => $cat)
                    <option value="{{ $catKey }}" {{ $selectedCategory === $catKey ? 'selected' : '' }}>
                        {{ $cat['label'] }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex align-items-center gap-8">
                <label class="fs-13 font-bold text-navy m-0"><i class="fa-regular fa-calendar-days text-navy me-1"></i> Session:</label>
                <select name="year" class="form-control" style="width: auto; padding: 7px 14px; font-size: 13px;" onchange="this.form.submit()">
                    <option value="">All Academic Sessions</option>
                    @foreach($academicYears as $yr)
                    <option value="{{ $yr }}" {{ $selectedYear === $yr ? 'selected' : '' }}>
                        Session {{ $yr }}
                    </option>
                    @endforeach
                </select>
            </div>

            @if(!empty($selectedCategory) || !empty($selectedYear))
            <a href="{{ route('admin.results.index') }}" class="btn-admin btn-secondary" style="padding: 7px 14px; font-size: 12px;">
                <i class="fa-solid fa-xmark"></i>
                <span>Clear Filters</span>
            </a>
            @endif
        </form>
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
                        <th style="width: 70px; text-align: center;">Order</th>
                        <th style="width: 80px;">Student</th>
                        <th>Student &amp; Achievement Title</th>
                        <th style="width: 220px;">Category &amp; Exam</th>
                        <th style="width: 160px;">Score &amp; Rank</th>
                        <th style="width: 120px;">Academic Year</th>
                        <th style="width: 110px; text-align: center;">Status</th>
                        <th style="width: 110px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($results as $result)
                    <tr>
                        <!-- Order -->
                        <td style="text-align: center;">
                            <span class="badge-neutral font-bold">#{{ $result->order }}</span>
                        </td>

                        <!-- Student Photo -->
                        <td>
                            <div class="user-avatar-circle" style="width: 52px; height: 52px; overflow: hidden; border-radius: 12px; border: 2px solid #E2E8F0; background: #083B7A;">
                                <img src="{{ $result->photo_url }}" alt="{{ $result->student_name }}" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </td>

                        <!-- Title & Student -->
                        <td>
                            <div class="font-extrabold text-navy fs-14">{{ $result->student_name }}</div>
                            <div class="text-orange font-bold fs-12 mt-2">{{ $result->title }}</div>
                            <div class="d-flex align-items-center gap-6 mt-4 flex-wrap">
                                @if($result->class_grade)
                                <span class="badge-blue-pill">
                                    {{ $result->class_grade }}
                                </span>
                                @endif
                                @if($result->is_featured)
                                <span class="badge-orange-pill">
                                    <i class="fa-solid fa-crown"></i> District Topper
                                </span>
                                @endif
                            </div>
                        </td>

                        <!-- Category & Exam -->
                        <td>
                            <span class="badge-stage {{ $result->category === 'board' ? 'secondary' : ($result->category === 'olympiad' ? 'primary' : 'pre_primary') }} mb-4 d-inline-block">
                                <i class="{{ $result->category_icon }}"></i>
                                {{ $result->category_label }}
                            </span>
                            <div class="text-muted fs-12">{{ $result->exam_name }}</div>
                        </td>

                        <!-- Score & Rank -->
                        <td>
                            @if($result->score)
                            <div class="font-extrabold text-navy fs-15">{{ $result->score }}</div>
                            @endif
                            @if($result->rank)
                            <div class="text-orange font-bold fs-12 mt-2">{{ $result->rank }}</div>
                            @endif
                            @if($result->certificate_url)
                            <a href="{{ $result->certificate_url }}" target="_blank" class="text-blue fs-11 font-bold d-inline-flex align-items-center gap-4 mt-2" title="View Certificate/Poster">
                                <i class="fa-solid fa-file-image"></i> View Certificate
                            </a>
                            @endif
                        </td>

                        <!-- Session -->
                        <td>
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
                        <td colspan="8" class="text-center py-40">
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
            <div class="visual-card-item">
                <div class="visual-card-media" style="height: 190px;">
                    <img src="{{ $res->photo_url }}" alt="{{ $res->student_name }}" loading="lazy">
                    <div class="visual-card-badge badge-orange-pill" style="top: 10px; left: 10px; border-radius: 20px;">
                        <i class="{{ $res->category_icon }}"></i>
                        {{ $res->category_label }}
                    </div>
                    <div class="live-visual-order">#{{ $res->order }}</div>
                </div>

                <div class="visual-card-body">
                    <div class="d-flex align-items-center justify-content-between gap-6 mb-8">
                        <span class="fs-12 font-bold text-dark"><i class="fa-solid fa-school text-muted me-1"></i>{{ $res->class_grade ?? 'CBSE' }}</span>
                        <span class="badge-neutral font-bold">Session {{ $res->academic_year }}</span>
                    </div>

                    <h4 class="text-navy fs-16 font-extrabold mb-4">{{ $res->student_name }}</h4>
                    <p class="text-orange fs-13 font-bold mb-8">{{ $res->title }}</p>

                    <div class="d-flex align-items-center gap-8 mb-14 flex-wrap">
                        @if($res->score)
                        <div class="badge-blue-pill fs-12 font-extrabold">{{ $res->score }}</div>
                        @endif
                        @if($res->rank)
                        <div class="badge-orange-pill fs-12 font-extrabold">{{ $res->rank }}</div>
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
