@extends('layouts.admin')

@section('title', 'Online Student Registrations')
@section('page_title', 'Admissions & Student Registrations')

@section('styles')
<style>
    .admissions-wrapper {
        display: flex;
        flex-direction: column;
        gap: 24px;
        width: 100%;
    }

    /* Top Summary Stat Cards / Quick Filter Pills */
    .admissions-stat-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 16px;
    }

    .adm-stat-pill {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 14px;
        padding: 18px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        text-decoration: none;
        color: inherit;
        transition: all 0.2s ease;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
    }

    .adm-stat-pill:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(8, 59, 122, 0.08);
        border-color: #CBD5E1;
    }

    .adm-stat-pill.active {
        border-color: var(--admin-navy);
        background: #F8FAFC;
        box-shadow: 0 4px 14px rgba(8, 59, 122, 0.1);
    }

    .adm-stat-info h4 {
        font-size: 24px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0 0 4px 0;
        line-height: 1;
    }

    .adm-stat-info span {
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748B;
    }

    .adm-stat-icon-wrap {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }

    .adm-icon-all { background: #EFF6FF; color: #2563EB; }
    .adm-icon-submitted { background: #FEF3C7; color: #D97706; }
    .adm-icon-review { background: #E0F2FE; color: #0284C7; }
    .adm-icon-approved { background: #DCFCE7; color: #16A34A; }

    /* Filter Card */
    .filter-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        padding: 20px 24px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
    }

    .filter-form-grid {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr auto;
        gap: 14px;
        align-items: center;
    }

    @media (max-width: 992px) {
        .filter-form-grid {
            grid-template-columns: 1fr;
        }
    }

    .search-input-group {
        position: relative;
        display: flex;
        align-items: center;
    }

    .search-input-group i {
        position: absolute;
        left: 14px;
        color: #94A3B8;
        font-size: 14px;
        pointer-events: none;
    }

    .filter-input-text {
        width: 100%;
        background: #F8FAFC;
        border: 1px solid var(--admin-border);
        border-radius: 10px;
        padding: 10px 14px 10px 38px;
        font-size: 13.5px;
        font-family: inherit;
        color: var(--admin-text-main);
        outline: none;
        transition: all 0.2s;
    }

    .filter-input-text:focus {
        border-color: var(--admin-navy);
        background: #ffffff;
        box-shadow: 0 0 0 3px rgba(8, 59, 122, 0.08);
    }

    .filter-select {
        width: 100%;
        background: #F8FAFC;
        border: 1px solid var(--admin-border);
        border-radius: 10px;
        padding: 10px 14px;
        font-size: 13.5px;
        font-family: inherit;
        color: var(--admin-text-main);
        outline: none;
        cursor: pointer;
        transition: all 0.2s;
    }

    .filter-select:focus {
        border-color: var(--admin-navy);
        background: #ffffff;
        box-shadow: 0 0 0 3px rgba(8, 59, 122, 0.08);
    }

    .filter-btn-group {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .btn-apply-filter {
        background: var(--admin-navy);
        color: #ffffff;
        border: none;
        border-radius: 10px;
        padding: 10px 18px;
        font-size: 13.5px;
        font-weight: 700;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: background 0.2s;
        white-space: nowrap;
    }

    .btn-apply-filter:hover {
        background: var(--admin-navy-deep);
    }

    .btn-clear-filter {
        background: #F1F5F9;
        color: #475569;
        border: 1px solid #E2E8F0;
        border-radius: 10px;
        padding: 10px 14px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: all 0.2s;
        white-space: nowrap;
    }

    .btn-clear-filter:hover {
        background: #E2E8F0;
        color: #0F172A;
    }

    /* Main Table Content Card */
    .content-table-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 18px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        overflow: hidden;
    }

    .table-header-bar {
        padding: 20px 24px;
        background: #FAFBFD;
        border-bottom: 1px solid var(--admin-border);
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
    }

    .table-header-title {
        font-size: 16px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .table-count-badge {
        font-size: 12px;
        font-weight: 700;
        background: #EFF6FF;
        color: #2563EB;
        padding: 3px 10px;
        border-radius: 20px;
        border: 1px solid #BFDBFE;
    }

    /* Table Specific Styles */
    .app-no-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-family: 'SFMono-Regular', Consolas, 'Liberation Mono', Menlo, monospace;
        font-size: 12.5px;
        font-weight: 700;
        color: var(--admin-navy);
        background: #F1F5F9;
        padding: 4px 9px;
        border-radius: 6px;
        border: 1px solid #E2E8F0;
        white-space: nowrap;
    }

    .student-cell {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .student-avatar {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: linear-gradient(135deg, #083B7A 0%, #1E40AF 100%);
        color: #ffffff;
        font-size: 13px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 2px 6px rgba(8, 59, 122, 0.2);
    }

    .student-avatar.female {
        background: linear-gradient(135deg, #BE185D 0%, #DB2777 100%);
    }

    .student-name-text {
        font-size: 14px;
        font-weight: 700;
        color: #0F172A;
        line-height: 1.25;
        margin-bottom: 3px;
    }

    .student-subtext {
        font-size: 12px;
        color: #64748B;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .class-badge {
        display: inline-block;
        background: #EEF2FF;
        color: #4338CA;
        font-size: 12.5px;
        font-weight: 700;
        padding: 4px 10px;
        border-radius: 8px;
        border: 1px solid #C7D2FE;
        white-space: nowrap;
    }

    .parent-name {
        font-size: 13.5px;
        font-weight: 600;
        color: #1E293B;
        line-height: 1.25;
        margin-bottom: 3px;
    }

    .phone-link {
        font-size: 12.5px;
        color: #0284C7;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-weight: 600;
    }

    .phone-link:hover {
        text-decoration: underline;
    }

    /* Custom Status Selector Pill */
    .status-dropdown-wrap {
        position: relative;
        display: inline-block;
    }

    .status-select-pill {
        appearance: none;
        -webkit-appearance: none;
        padding: 6px 26px 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        outline: none;
        border: 1px solid transparent;
        transition: all 0.2s;
        font-family: inherit;
    }

    .status-select-pill.status-submitted {
        background: #FEF3C7;
        color: #92400E;
        border-color: #FCD34D;
    }

    .status-select-pill.status-under_review {
        background: #E0F2FE;
        color: #0369A1;
        border-color: #BAE6FD;
    }

    .status-select-pill.status-approved {
        background: #DCFCE7;
        color: #15803D;
        border-color: #86EFAC;
    }

    .status-select-pill.status-rejected {
        background: #FEE2E2;
        color: #B91C1C;
        border-color: #FCA5A5;
    }

    .status-dropdown-arrow {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        pointer-events: none;
        font-size: 10px;
        opacity: 0.7;
    }

    .date-text {
        font-size: 12.5px;
        font-weight: 600;
        color: #475569;
    }

    .date-timeago {
        font-size: 11px;
        color: #94A3B8;
    }

    /* Pagination Footer */
    .table-footer-bar {
        padding: 16px 24px;
        background: #FAFBFD;
        border-top: 1px solid var(--admin-border);
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 12px;
    }
</style>
@endsection

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
                <i class="fa-solid fa-user-graduate" style="color: var(--admin-orange);"></i>
                <span>Student Admissions Registry</span>
                <span class="table-count-badge">{{ $registrations->total() }} Applications</span>
            </h3>

            <div style="font-size: 12.5px; color: #64748B;">
                Page {{ $registrations->currentPage() }} of {{ max(1, $registrations->lastPage()) }}
            </div>
        </div>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 130px;">App No</th>
                        <th>Student Name</th>
                        <th style="width: 120px;">Grade</th>
                        <th>Parent / Contact</th>
                        <th style="width: 130px;">Applied Date</th>
                        <th style="width: 150px;">Status</th>
                        <th style="width: 120px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($registrations as $reg)
                    <tr>
                        <!-- Application Number -->
                        <td>
                            <span class="app-no-badge">
                                <i class="fa-solid fa-hashtag" style="font-size: 10px; opacity: 0.6;"></i>
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
                                <div style="font-size: 11px; color: #94A3B8; margin-top: 3px;">{{ $reg->academic_year }}</div>
                            @endif
                        </td>

                        <!-- Parent Details -->
                        <td>
                            <div class="parent-name">
                                {{ $reg->father_name ?? $reg->mother_name ?? 'Parent' }}
                            </div>
                            @if($reg->phone)
                                <a href="tel:{{ $reg->phone }}" class="phone-link">
                                    <i class="fa-solid fa-phone" style="font-size: 11px;"></i>
                                    <span>{{ $reg->phone }}</span>
                                </a>
                            @else
                                <span style="font-size: 12px; color: #94A3B8;">No phone</span>
                            @endif
                        </td>

                        <!-- Submission Date -->
                        <td>
                            <div class="date-text">{{ $reg->created_at->format('d M Y') }}</div>
                            <div class="date-timeago">{{ $reg->created_at->diffForHumans() }}</div>
                        </td>

                        <!-- Inline Status Updater -->
                        <td>
                            <form action="{{ route('admin.registrations.status', $reg->id) }}" method="POST" style="margin: 0;">
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
                        <td style="text-align: right;">
                            <div style="display: inline-flex; align-items: center; gap: 6px;">
                                <a href="{{ route('admin.registrations.show', $reg->id) }}" class="btn-action-view" title="View Full Application Details">
                                    <i class="fa-solid fa-eye"></i>
                                    <span>Details</span>
                                </a>

                                <form action="{{ route('admin.registrations.destroy', $reg->id) }}" method="POST" onsubmit="return confirm('Delete registration #{{ $reg->application_no }}? This action cannot be undone.');" style="margin: 0;">
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
                        <td colspan="7" style="text-align: center; padding: 60px 20px;">
                            <div style="max-width: 380px; margin: 0 auto; text-align: center;">
                                <div style="width: 56px; height: 56px; border-radius: 50%; background: #F1F5F9; color: #94A3B8; display: flex; align-items: center; justify-content: center; font-size: 24px; margin: 0 auto 16px auto;">
                                    <i class="fa-solid fa-inbox"></i>
                                </div>
                                <h4 style="font-size: 16px; font-weight: 700; color: var(--admin-navy); margin-bottom: 6px;">
                                    No Applications Found
                                </h4>
                                <p style="font-size: 13px; color: #64748B; margin-bottom: 16px;">
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
            <div style="font-size: 13px; color: #64748B;">
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
