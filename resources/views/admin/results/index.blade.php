@extends('layouts.admin')

@section('title', 'Results & Student Achievements · Advaita Admin')
@section('page_title', 'Results & Achievements Manager')

@section('content')
<div class="content-page-header">
    <div class="cph-title-wrap">
        <div class="cph-icon-box">
            <i class="fa-solid fa-trophy"></i>
        </div>
        <div>
            <h1 class="cph-title">Results &amp; Student Achievements</h1>
            <p class="cph-subtitle">Manage Class 10 Board exam toppers, Olympiads, Abacus competitions, and NEET/IIT Foundation results.</p>
        </div>
    </div>
    <div class="cph-actions">
        <a href="{{ route('results') }}" target="_blank" class="btn-admin btn-secondary" title="View live results page">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <span>Live Results Hub</span>
        </a>
        <a href="{{ route('admin.results.create') }}" class="btn-admin btn-primary">
            <i class="fa-solid fa-plus"></i>
            <span>Add Student Achievement</span>
        </a>
    </div>
</div>

<!-- Metrics Row -->
<div class="pages-directory-metrics-grid mb-24">
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
            <span>Abacus &amp; IIT Foundation</span>
        </div>
        <div class="dm-icon dm-icon-sync">
            <i class="fa-solid fa-award"></i>
        </div>
    </div>
</div>

<!-- Filters Bar -->
<div class="cards-table-card mb-20 p-16">
    <form method="GET" action="{{ route('admin.results.index') }}" class="d-flex align-items-center gap-14 flex-wrap">
        <div class="d-flex align-items-center gap-8">
            <label class="fs-13 font-bold text-navy m-0">Category:</label>
            <select name="category" class="form-control" style="width: auto; padding: 6px 12px; font-size: 13px;" onchange="this.form.submit()">
                <option value="">All Categories ({{ \App\Models\AcademicResult::count() }})</option>
                @foreach($categories as $catKey => $cat)
                <option value="{{ $catKey }}" {{ $selectedCategory === $catKey ? 'selected' : '' }}>
                    {{ $cat['label'] }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="d-flex align-items-center gap-8">
            <label class="fs-13 font-bold text-navy m-0">Academic Year:</label>
            <select name="year" class="form-control" style="width: auto; padding: 6px 12px; font-size: 13px;" onchange="this.form.submit()">
                <option value="">All Academic Years</option>
                @foreach($academicYears as $yr)
                <option value="{{ $yr }}" {{ $selectedYear === $yr ? 'selected' : '' }}>
                    {{ $yr }}
                </option>
                @endforeach
            </select>
        </div>

        @if(!empty($selectedCategory) || !empty($selectedYear))
        <a href="{{ route('admin.results.index') }}" class="btn-admin btn-secondary" style="padding: 6px 12px; font-size: 12px;">
            <i class="fa-solid fa-xmark"></i>
            <span>Clear Filter</span>
        </a>
        @endif
    </form>
</div>

<!-- Results Table -->
<div class="cards-table-card">
    <div class="table-responsive">
        <table class="table-admin">
            <thead>
                <tr>
                    <th style="width: 50px;">Order</th>
                    <th style="width: 70px;">Student</th>
                    <th>Student &amp; Achievement Title</th>
                    <th>Category &amp; Exam</th>
                    <th>Score / Rank</th>
                    <th>Academic Year</th>
                    <th style="width: 80px; text-align: center;">Status</th>
                    <th style="width: 120px; text-align: right;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($results as $result)
                <tr>
                    <td>
                        <span class="badge-neutral font-bold">#{{ $result->order }}</span>
                    </td>
                    <td>
                        <div class="user-avatar-circle" style="width: 50px; height: 50px; overflow: hidden; border-radius: 50%; border: 2px solid #e2e8f0;">
                            <img src="{{ $result->photo_url }}" alt="{{ $result->student_name }}" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </td>
                    <td>
                        <div class="font-extrabold text-navy fs-14">{{ $result->student_name }}</div>
                        <div class="text-orange font-bold fs-12 mt-1">{{ $result->title }}</div>
                        @if($result->class_grade)
                        <span class="badge-blue-pill mt-4 d-inline-block" style="font-size: 11px;">
                            {{ $result->class_grade }}
                        </span>
                        @endif
                        @if($result->is_featured)
                        <span class="badge-orange-pill mt-4 d-inline-block" style="font-size: 11px;">
                            <i class="fa-solid fa-star"></i> Featured Topper
                        </span>
                        @endif
                    </td>
                    <td>
                        <span class="badge-blue-pill d-inline-block mb-4" style="font-size: 11px; background: rgba(8, 59, 122, 0.08); color: #083B7A;">
                            <i class="{{ $result->category_icon }}"></i>
                            {{ $result->category_label }}
                        </span>
                        <div class="text-muted fs-12">{{ $result->exam_name }}</div>
                    </td>
                    <td>
                        @if($result->score)
                        <div class="font-extrabold text-navy fs-14">{{ $result->score }}</div>
                        @endif
                        @if($result->rank)
                        <div class="text-orange font-bold fs-12">{{ $result->rank }}</div>
                        @endif
                        @if($result->certificate_url)
                        <a href="{{ $result->certificate_url }}" target="_blank" class="text-blue fs-11 font-bold d-inline-flex align-items-center gap-4 mt-2" title="View Certificate/Poster">
                            <i class="fa-solid fa-file-image"></i> Certificate
                        </a>
                        @endif
                    </td>
                    <td>
                        <span class="badge-neutral font-bold">{{ $result->academic_year }}</span>
                    </td>
                    <td style="text-align: center;">
                        <form action="{{ route('admin.results.toggle-status', $result->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="status-toggle-btn {{ $result->is_active ? 'active' : '' }}" title="Click to {{ $result->is_active ? 'deactivate' : 'activate' }}">
                                <span class="toggle-slider"></span>
                            </button>
                        </form>
                    </td>
                    <td style="text-align: right;">
                        <div class="d-flex align-items-center justify-content-end gap-6">
                            <a href="{{ route('admin.results.edit', $result->id) }}" class="btn-action-icon btn-edit" title="Edit Achievement">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('admin.results.destroy', $result->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this achievement record?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action-icon btn-delete" title="Delete Achievement">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center py-40">
                        <div class="empty-state-box">
                            <i class="fa-solid fa-trophy fs-36 text-muted mb-12"></i>
                            <h4 class="text-navy font-bold">No student achievements found</h4>
                            <p class="text-muted fs-13 mb-16">Add verified student results, ranks, and medals to showcase on the website.</p>
                            <a href="{{ route('admin.results.create') }}" class="btn-admin btn-primary">
                                <i class="fa-solid fa-plus"></i>
                                <span>Add Student Achievement</span>
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
