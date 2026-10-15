@extends('layouts.admin')

@section('title', 'Online Student Registrations')
@section('page_title', 'Admissions & Student Registrations')



@section('content')
<div class="admissions-wrapper">

    <!-- 1. Top Stat Cards / Quick Filter Tabs -->
    <div class="admissions-stat-grid">
        <a href="{{ route('admin.registrations.index') }}" class="adm-stat-pill {{ !request('status') ? 'active' : '' }}">
            <div class="adm-stat-info">
                <h4>{{ $counts['all'] ?? $registrations->total() }}</h4>
                <span>Total Applications</span>
            </div>
            <div class="adm-stat-icon-wrap adm-icon-all">
                <i class="fa-solid fa-users"></i>
            </div>
        </a>

        <a href="{{ route('admin.registrations.index', ['status' => 'submitted']) }}" class="adm-stat-pill {{ request('status') === 'submitted' ? 'active' : '' }}">
            <div class="adm-stat-info">
                <h4>{{ $counts['submitted'] ?? 0 }}</h4>
                <span>New / Submitted</span>
            </div>
            <div class="adm-stat-icon-wrap adm-icon-submitted">
                <i class="fa-solid fa-clock"></i>
            </div>
        </a>

        <a href="{{ route('admin.registrations.index', ['status' => 'under_review']) }}" class="adm-stat-pill {{ request('status') === 'under_review' ? 'active' : '' }}">
            <div class="adm-stat-info">
                <h4>{{ $counts['under_review'] ?? 0 }}</h4>
                <span>Under Review</span>
            </div>
            <div class="adm-stat-icon-wrap adm-icon-review">
                <i class="fa-solid fa-spinner"></i>
            </div>
        </a>

        <a href="{{ route('admin.registrations.index', ['status' => 'approved']) }}" class="adm-stat-pill {{ request('status') === 'approved' ? 'active' : '' }}">
            <div class="adm-stat-info">
                <h4>{{ $counts['approved'] ?? 0 }}</h4>
                <span>Approved</span>
            </div>
            <div class="adm-stat-icon-wrap adm-icon-approved">
                <i class="fa-solid fa-check-double"></i>
            </div>
        </a>
    </div>

    <!-- 2. Search & Filter Bar -->
    <div class="filter-card">
        <form action="{{ route('admin.registrations.index') }}" method="GET">
            <div class="filter-form-grid">
                <!-- Search Input -->
                <div class="search-input-group">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Search student name, app no, parent, phone..." 
                        value="{{ request('search') }}" 
                        class="filter-input-text"
                    >
                </div>

                <!-- Class Filter -->
                <div>
                    <select name="class" class="filter-select">
                        <option value="">All Classes</option>
                        <option value="Nursery" {{ request('class') == 'Nursery' ? 'selected' : '' }}>Nursery</option>
                        <option value="LKG" {{ request('class') == 'LKG' ? 'selected' : '' }}>LKG</option>
                        <option value="UKG" {{ request('class') == 'UKG' ? 'selected' : '' }}>UKG</option>
                        @for($i = 1; $i <= 10; $i++)
                        <option value="Class {{ $i }}" {{ request('class') == "Class $i" ? 'selected' : '' }}>Class {{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <!-- Status Filter -->
                <div>
                    <select name="status" class="filter-select">
                        <option value="">All Statuses</option>
                        <option value="submitted" {{ request('status') == 'submitted' ? 'selected' : '' }}>Submitted (New)</option>
                        <option value="under_review" {{ request('status') == 'under_review' ? 'selected' : '' }}>Under Review</option>
                        <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approved</option>
                        <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    </select>
                </div>

                <!-- Actions -->
                <div class="filter-btn-group">
                    <button type="submit" class="btn-apply-filter">
                        <i class="fa-solid fa-filter"></i>
                        <span>Apply</span>
                    </button>

                    @if(request()->hasAny(['search', 'class', 'status']))
                    <a href="{{ route('admin.registrations.index') }}" class="btn-clear-filter" title="Reset all filters">
                        <i class="fa-solid fa-rotate-left"></i>
                        <span>Reset</span>
                    </a>
                    @endif
                </div>
            </div>
        </form>
    </div>

    <!-- 3. Admissions Data Table Card -->
    <div class="content-table-card">
        <div class="table-header-bar">
            <h3 class="table-header-title">
                <i class="fa-solid fa-user-graduate text-orange"></i>
                <span>Student Admissions Registry</span>
                <span class="table-count-badge">{{ $registrations->total() }} Applications</span>
            </h3>

            <div class="text-muted fs-12">
                Page {{ $registrations->currentPage() }} of {{ max(1, $registrations->lastPage()) }}
            </div>
        </div>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th class="col-w130">App No</th>
                        <th>Student Name</th>
                        <th class="col-w120">Grade</th>
                        <th>Parent / Contact</th>
                        <th class="col-w130">Applied Date</th>
                        <th class="col-w150">Status</th>
                        <th class="col-w120 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($registrations as $reg)
                    <tr>
                        <!-- Application Number -->
                        <td>
                            <span class="app-no-badge">
                                <i class="fa-solid fa-hashtag fs-10 opacity-60"></i>
                                {{ $reg->application_no }}
                            </span>
                        </td>

                        <!-- Student Details with Avatar -->
                        <td>
                            <div class="student-cell">
                                <div class="student-avatar {{ strtolower($reg->gender ?? '') === 'female' ? 'female' : '' }}">
                                    {{ strtoupper(substr($reg->first_name ?? $reg->full_name ?? 'S', 0, 1)) }}
                                </div>
                                <div>
                                    <div class="student-name-text">{{ $reg->full_name }}</div>
                                    <div class="student-subtext">
                                        <span>{{ $reg->gender ?? 'Student' }}</span>
                                        <span>&bull;</span>
                                        <span>DOB: {{ $reg->dob ? date('d M Y', strtotime($reg->dob)) : 'N/A' }}</span>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <!-- Applying Grade -->
                        <td>
                            <span class="class-badge">{{ $reg->applying_class ?? 'N/A' }}</span>
                            @if($reg->academic_year)
                                <div class="text-muted fs-11 mt-3">{{ $reg->academic_year }}</div>
                            @endif
                        </td>

                        <!-- Parent Details -->
                        <td>
                            <div class="parent-name">
                                {{ $reg->father_name ?? $reg->mother_name ?? 'Parent' }}
                            </div>
                            @if($reg->phone)
                                <a href="tel:{{ $reg->phone }}" class="phone-link">
                                    <i class="fa-solid fa-phone fs-11"></i>
                                    <span>{{ $reg->phone }}</span>
                                </a>
                            @else
                                <span class="td-date-muted">No phone</span>
                            @endif
                        </td>

                        <!-- Submission Date -->
                        <td>
                            <div class="date-text">{{ $reg->created_at->format('d M Y') }}</div>
                            <div class="date-timeago">{{ $reg->created_at->diffForHumans() }}</div>
                        </td>

                        <!-- Inline Status Updater -->
                        <td>
                            <form action="{{ route('admin.registrations.status', $reg->id) }}" method="POST" class="m-0">
                                @csrf
                                @method('PATCH')
                                <div class="status-dropdown-wrap">
                                    <select name="status" class="status-select-pill status-{{ $reg->status }}" onchange="this.form.submit()">
                                        <option value="submitted" {{ $reg->status == 'submitted' ? 'selected' : '' }}>Submitted</option>
                                        <option value="under_review" {{ $reg->status == 'under_review' ? 'selected' : '' }}>Under Review</option>
                                        <option value="approved" {{ $reg->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                        <option value="rejected" {{ $reg->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                    </select>
                                    <i class="fa-solid fa-chevron-down status-dropdown-arrow"></i>
                                </div>
                            </form>
                        </td>

                        <!-- Action Buttons -->
                        <td class="text-right">
                            <div class="d-inline-flex align-items-center gap-6">
                                <a href="{{ route('admin.registrations.show', $reg->id) }}" class="btn-action-view" title="View Full Application Details">
                                    <i class="fa-solid fa-eye"></i>
                                    <span>Details</span>
                                </a>

                                <form action="{{ route('admin.registrations.destroy', $reg->id) }}" method="POST" onsubmit="return confirm('Delete registration #{{ $reg->application_no }}? This action cannot be undone.');" class="m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-action-delete" title="Delete record">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="table-empty-pad">
                            <div class="max-w-380 mx-auto text-center">
                                <div class="empty-state-avatar-lg">
                                    <i class="fa-solid fa-inbox"></i>
                                </div>
                                <h4 class="text-navy fs-16 font-bold mb-6">
                                    No Applications Found
                                </h4>
                                <p class="text-muted fs-13 mb-16">
                                    We couldn't find any student registrations matching your search criteria.
                                </p>
                                @if(request()->hasAny(['search', 'class', 'status']))
                                    <a href="{{ route('admin.registrations.index') }}" class="btn-clear-filter">
                                        <i class="fa-solid fa-rotate-left"></i>
                                        <span>Clear Search Filters</span>
                                    </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($registrations->hasPages())
        <div class="table-footer-bar">
            <div class="text-muted">
                Showing {{ $registrations->firstItem() }} to {{ $registrations->lastItem() }} of {{ $registrations->total() }} results
            </div>
            <div>
                {{ $registrations->links() }}
            </div>
        </div>
        @endif
    </div>

</div>
@endsection
