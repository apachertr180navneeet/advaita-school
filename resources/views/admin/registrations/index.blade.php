@extends('layouts.admin')

@section('title', 'Online Student Registrations')
@section('page_title', 'Admissions & Registrations Management')

@section('styles')
<style>
    .filter-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        padding: 18px 24px;
        margin-bottom: 24px;
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        align-items: center;
        justify-content: space-between;
    }

    .filter-form {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        align-items: center;
        flex: 1;
    }

    .filter-input {
        background: #F8FAFC;
        border: 1px solid var(--admin-border);
        border-radius: 10px;
        padding: 9px 14px;
        font-size: 13.5px;
        font-family: inherit;
        color: var(--admin-text-main);
        outline: none;
    }

    .filter-input:focus {
        border-color: var(--admin-navy);
        background: #ffffff;
    }

    .btn-filter {
        background: var(--admin-navy);
        color: #ffffff;
        border: none;
        border-radius: 10px;
        padding: 9px 16px;
        font-size: 13.5px;
        font-weight: 700;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: background 0.2s;
    }

    .btn-filter:hover {
        background: var(--admin-navy-deep);
    }

    .btn-reset {
        color: #64748B;
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
        padding: 9px 12px;
    }

    .content-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 18px;
        padding: 24px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
    }

    .status-select {
        background: #F8FAFC;
        border: 1px solid var(--admin-border);
        border-radius: 8px;
        padding: 5px 8px;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
    }

    .btn-delete {
        background: transparent;
        border: 1px solid rgba(239, 68, 68, 0.3);
        color: #EF4444;
        border-radius: 8px;
        padding: 6px 10px;
        cursor: pointer;
        font-size: 12px;
        transition: all 0.2s;
    }

    .btn-delete:hover {
        background: #EF4444;
        color: #ffffff;
    }

    .pagination-wrapper {
        margin-top: 24px;
        display: flex;
        justify-content: flex-end;
    }
</style>
@endsection

@section('content')

<!-- Filter and Search Bar -->
<div class="filter-card">
    <form action="{{ route('admin.registrations.index') }}" method="GET" class="filter-form">
        <input 
            type="text" 
            name="search" 
            placeholder="Search student, app no, phone..." 
            value="{{ request('search') }}" 
            class="filter-input"
            style="min-width: 260px;"
        >

        <select name="class" class="filter-input">
            <option value="">All Classes</option>
            <option value="Nursery" {{ request('class') == 'Nursery' ? 'selected' : '' }}>Nursery</option>
            <option value="LKG" {{ request('class') == 'LKG' ? 'selected' : '' }}>LKG</option>
            <option value="UKG" {{ request('class') == 'UKG' ? 'selected' : '' }}>UKG</option>
            @for($i = 1; $i <= 10; $i++)
            <option value="Class {{ $i }}" {{ request('class') == "Class $i" ? 'selected' : '' }}>Class {{ $i }}</option>
            @endfor
        </select>

        <select name="status" class="filter-input">
            <option value="">All Statuses</option>
            <option value="submitted" {{ request('status') == 'submitted' ? 'selected' : '' }}>Submitted (New)</option>
            <option value="under_review" {{ request('status') == 'under_review' ? 'selected' : '' }}>Under Review</option>
            <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approved</option>
            <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
        </select>

        <button type="submit" class="btn-filter">
            <i class="fa-solid fa-filter"></i>
            <span>Apply</span>
        </button>

        @if(request()->hasAny(['search', 'class', 'status']))
        <a href="{{ route('admin.registrations.index') }}" class="btn-reset">Clear Filters</a>
        @endif
    </form>
</div>

<!-- Table Card -->
<div class="content-card">
    <div style="margin-bottom: 16px; font-weight: 700; color: #475569; font-size: 14px;">
        Showing {{ $registrations->total() }} Applications
    </div>

    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>App No</th>
                    <th>Student Name</th>
                    <th>Grade</th>
                    <th>Parent / Contact</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($registrations as $reg)
                <tr>
                    <td>
                        <strong style="font-family: monospace; color: var(--admin-navy);">{{ $reg->application_no }}</strong>
                    </td>
                    <td>
                        <div style="font-weight: 700; color: #0F172A;">{{ $reg->full_name }}</div>
                        <div style="font-size: 11.5px; color: #64748B;">{{ $reg->gender }} &middot; DOB: {{ $reg->dob ? date('d M Y', strtotime($reg->dob)) : 'N/A' }}</div>
                    </td>
                    <td>
                        <span class="class-pill">{{ $reg->applying_class }}</span>
                    </td>
                    <td>
                        <div style="font-size: 13px; font-weight: 600;">{{ $reg->father_name ?? $reg->mother_name ?? 'Parent' }}</div>
                        <div style="font-size: 12px; color: #64748B;">{{ $reg->phone }}</div>
                    </td>
                    <td>
                        <span style="font-size: 12px; color: #64748B;">{{ $reg->created_at->format('d M Y') }}</span>
                    </td>
                    <td>
                        <!-- Inline Status Updater -->
                        <form action="{{ route('admin.registrations.status', $reg->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('PATCH')
                            <select name="status" class="status-select" onchange="this.form.submit()">
                                <option value="submitted" {{ $reg->status == 'submitted' ? 'selected' : '' }}>Submitted</option>
                                <option value="under_review" {{ $reg->status == 'under_review' ? 'selected' : '' }}>Under Review</option>
                                <option value="approved" {{ $reg->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                <option value="rejected" {{ $reg->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                            </select>
                        </form>
                    </td>
                    <td>
                        <div style="display: flex; gap: 8px;">
                            <a href="{{ route('admin.registrations.show', $reg->id) }}" class="btn-action-view" title="View Full Details">
                                <i class="fa-regular fa-eye"></i>
                                <span>Details</span>
                            </a>
                            <form action="{{ route('admin.registrations.destroy', $reg->id) }}" method="POST" onsubmit="return confirm('Delete registration #{{ $reg->application_no }}? This cannot be undone.');" style="margin: 0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete" title="Delete record">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align: center; color: #94A3B8; padding: 40px;">
                        No applications matched your filter criteria.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="pagination-wrapper">
        {{ $registrations->links() }}
    </div>
</div>

@endsection
