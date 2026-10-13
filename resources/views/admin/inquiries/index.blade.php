@extends('layouts.admin')

@section('title', 'Contact Inquiries')
@section('page_title', 'Parent & Contact Inquiries')

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
    <form action="{{ route('admin.inquiries.index') }}" method="GET" class="filter-form">
        <input 
            type="text" 
            name="search" 
            placeholder="Search by name, email, subject, phone..." 
            value="{{ request('search') }}" 
            class="filter-input"
            style="min-width: 280px;"
        >

        <select name="status" class="filter-input">
            <option value="">All Statuses</option>
            <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>New (Unread)</option>
            <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
            <option value="resolved" {{ request('status') == 'resolved' ? 'selected' : '' }}>Resolved</option>
        </select>

        <button type="submit" class="btn-filter">
            <i class="fa-solid fa-filter"></i>
            <span>Filter</span>
        </button>

        @if(request()->hasAny(['search', 'status']))
        <a href="{{ route('admin.inquiries.index') }}" class="btn-reset">Clear Filters</a>
        @endif
    </form>
</div>

<!-- Table Card -->
<div class="content-card">
    <div style="margin-bottom: 16px; font-weight: 700; color: #475569; font-size: 14px;">
        Showing {{ $inquiries->total() }} Inquiries
    </div>

    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Sender Name</th>
                    <th>Contact Info</th>
                    <th>Subject</th>
                    <th>Message Snippet</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($inquiries as $inq)
                <tr>
                    <td>
                        <strong style="color: #0F172A;">{{ $inq->name }}</strong>
                    </td>
                    <td>
                        <div style="font-size: 13px;">{{ $inq->email }}</div>
                        <div style="font-size: 12px; color: #64748B;">{{ $inq->phone ?? 'No phone' }}</div>
                    </td>
                    <td>
                        <span style="font-weight: 700; color: #334155;">{{ $inq->subject ?? 'General Enquiry' }}</span>
                    </td>
                    <td>
                        <div style="max-width: 250px; font-size: 12.5px; color: #64748B; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                            {{ $inq->message }}
                        </div>
                    </td>
                    <td>
                        <span style="font-size: 12px; color: #64748B;">{{ $inq->created_at->format('d M Y') }}</span>
                    </td>
                    <td>
                        <form action="{{ route('admin.inquiries.status', $inq->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('PATCH')
                            <select name="status" class="status-select" onchange="this.form.submit()">
                                <option value="new" {{ $inq->status == 'new' ? 'selected' : '' }}>New</option>
                                <option value="in_progress" {{ $inq->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                <option value="resolved" {{ $inq->status == 'resolved' ? 'selected' : '' }}>Resolved</option>
                            </select>
                        </form>
                    </td>
                    <td>
                        <div style="display: flex; gap: 8px;">
                            <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="btn-action-view" title="Read message">
                                <i class="fa-regular fa-envelope-open"></i>
                                <span>Read</span>
                            </a>
                            <form action="{{ route('admin.inquiries.destroy', $inq->id) }}" method="POST" onsubmit="return confirm('Delete inquiry from {{ $inq->name }}?');" style="margin: 0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete" title="Delete inquiry">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align: center; color: #94A3B8; padding: 40px;">
                        No inquiries found matching your filters.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="pagination-wrapper">
        {{ $inquiries->links() }}
    </div>
</div>

@endsection
