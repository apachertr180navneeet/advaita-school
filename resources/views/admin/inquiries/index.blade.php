@extends('layouts.admin')

@section('title', 'Parent & Contact Inquiries')
@section('page_title', 'Parent & Contact Inquiries')

@section('styles')
<style>
    .inquiries-wrapper {
        display: flex;
        flex-direction: column;
        gap: 24px;
        width: 100%;
    }

    /* Top Summary Stat Cards / Quick Filter Pills */
    .inquiries-stat-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 16px;
    }

    .inq-stat-pill {
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

    .inq-stat-pill:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(8, 59, 122, 0.08);
        border-color: #CBD5E1;
    }

    .inq-stat-pill.active {
        border-color: var(--admin-navy);
        background: #F8FAFC;
        box-shadow: 0 4px 14px rgba(8, 59, 122, 0.1);
    }

    .inq-stat-info h4 {
        font-size: 24px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0 0 4px 0;
        line-height: 1;
    }

    .inq-stat-info span {
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748B;
    }

    .inq-stat-icon-wrap {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }

    .inq-icon-all { background: #EFF6FF; color: #2563EB; }
    .inq-icon-new { background: #FEF3C7; color: #D97706; }
    .inq-icon-progress { background: #E0F2FE; color: #0284C7; }
    .inq-icon-resolved { background: #DCFCE7; color: #16A34A; }

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
        grid-template-columns: 2fr 1fr auto;
        gap: 14px;
        align-items: center;
    }

    @media (max-width: 768px) {
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

    .status-select-pill.status-new {
        background: #FEF3C7;
        color: #92400E;
        border-color: #FCD34D;
    }

    .status-select-pill.status-in_progress {
        background: #E0F2FE;
        color: #0369A1;
        border-color: #BAE6FD;
    }

    .status-select-pill.status-resolved {
        background: #DCFCE7;
        color: #15803D;
        border-color: #86EFAC;
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

    .sender-avatar {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: linear-gradient(135deg, #F37021 0%, #EA580C 100%);
        color: #ffffff;
        font-size: 14px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 2px 6px rgba(243, 112, 33, 0.25);
    }

    .sender-cell {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .sender-name-text {
        font-size: 14px;
        font-weight: 700;
        color: #0F172A;
        line-height: 1.25;
        margin-bottom: 3px;
    }

    .subject-pill {
        display: inline-block;
        background: #F1F5F9;
        color: #1E293B;
        font-size: 12.5px;
        font-weight: 700;
        padding: 3px 9px;
        border-radius: 6px;
        border: 1px solid #E2E8F0;
    }

    .message-excerpt {
        max-width: 280px;
        font-size: 12.5px;
        color: #64748B;
        line-height: 1.4;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
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
<div class="inquiries-wrapper">

    <!-- 1. Top Stat Cards / Quick Filter Tabs -->
    <div class="inquiries-stat-grid">
        <a href="{{ route('admin.inquiries.index') }}" class="inq-stat-pill {{ !request('status') ? 'active' : '' }}">
            <div class="inq-stat-info">
                <h4>{{ $counts['all'] ?? $inquiries->total() }}</h4>
                <span>All Enquiries</span>
            </div>
            <div class="inq-stat-icon-wrap inq-icon-all">
                <i class="fa-solid fa-envelope-open-text"></i>
            </div>
        </a>

        <a href="{{ route('admin.inquiries.index', ['status' => 'new']) }}" class="inq-stat-pill {{ request('status') === 'new' ? 'active' : '' }}">
            <div class="inq-stat-info">
                <h4>{{ $counts['new'] ?? 0 }}</h4>
                <span>New / Unread</span>
            </div>
            <div class="inq-stat-icon-wrap inq-icon-new">
                <i class="fa-solid fa-bell"></i>
            </div>
        </a>

        <a href="{{ route('admin.inquiries.index', ['status' => 'in_progress']) }}" class="inq-stat-pill {{ request('status') === 'in_progress' ? 'active' : '' }}">
            <div class="inq-stat-info">
                <h4>{{ $counts['in_progress'] ?? 0 }}</h4>
                <span>In Progress</span>
            </div>
            <div class="inq-stat-icon-wrap inq-icon-progress">
                <i class="fa-solid fa-hourglass-half"></i>
            </div>
        </a>

        <a href="{{ route('admin.inquiries.index', ['status' => 'resolved']) }}" class="inq-stat-pill {{ request('status') === 'resolved' ? 'active' : '' }}">
            <div class="inq-stat-info">
                <h4>{{ $counts['resolved'] ?? 0 }}</h4>
                <span>Resolved</span>
            </div>
            <div class="inq-stat-icon-wrap inq-icon-resolved">
                <i class="fa-solid fa-circle-check"></i>
            </div>
        </a>
    </div>

    <!-- 2. Search & Filter Bar -->
    <div class="filter-card">
        <form action="{{ route('admin.inquiries.index') }}" method="GET">
            <div class="filter-form-grid">
                <!-- Search Input -->
                <div class="search-input-group">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Search by sender name, email, phone, subject, or message..." 
                        value="{{ request('search') }}" 
                        class="filter-input-text"
                    >
                </div>

                <!-- Status Filter -->
                <div>
                    <select name="status" class="filter-select">
                        <option value="">All Statuses</option>
                        <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>New (Unread)</option>
                        <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="resolved" {{ request('status') == 'resolved' ? 'selected' : '' }}>Resolved</option>
                    </select>
                </div>

                <!-- Actions -->
                <div class="filter-btn-group">
                    <button type="submit" class="btn-apply-filter">
                        <i class="fa-solid fa-filter"></i>
                        <span>Apply</span>
                    </button>

                    @if(request()->hasAny(['search', 'status']))
                    <a href="{{ route('admin.inquiries.index') }}" class="btn-clear-filter" title="Reset all filters">
                        <i class="fa-solid fa-rotate-left"></i>
                        <span>Reset</span>
                    </a>
                    @endif
                </div>
            </div>
        </form>
    </div>

    <!-- 3. Inquiries Data Table Card -->
    <div class="content-table-card">
        <div class="table-header-bar">
            <h3 class="table-header-title">
                <i class="fa-solid fa-inbox" style="color: var(--admin-orange);"></i>
                <span>Parent &amp; Website Inquiries</span>
                <span class="table-count-badge">{{ $inquiries->total() }} Inquiries</span>
            </h3>

            <div style="font-size: 12.5px; color: #64748B;">
                Page {{ $inquiries->currentPage() }} of {{ max(1, $inquiries->lastPage()) }}
            </div>
        </div>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Sender Name</th>
                        <th>Contact Details</th>
                        <th>Subject</th>
                        <th>Message Preview</th>
                        <th style="width: 130px;">Received Date</th>
                        <th style="width: 150px;">Status</th>
                        <th style="width: 120px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($inquiries as $inq)
                    <tr>
                        <!-- Sender Cell with Avatar -->
                        <td>
                            <div class="sender-cell">
                                <div class="sender-avatar">
                                    {{ strtoupper(substr($inq->name ?? 'P', 0, 1)) }}
                                </div>
                                <div>
                                    <div class="sender-name-text">{{ $inq->name }}</div>
                                    <div style="font-size: 11.5px; color: #94A3B8;">Parent / Visitor</div>
                                </div>
                            </div>
                        </td>

                        <!-- Contact Details -->
                        <td>
                            <div style="font-size: 13px; font-weight: 600; color: #1E293B;">
                                <a href="mailto:{{ $inq->email }}" style="color: #0284C7; text-decoration: none;">
                                    <i class="fa-regular fa-envelope" style="font-size: 11px;"></i> {{ $inq->email }}
                                </a>
                            </div>
                            <div style="font-size: 12px; color: #64748B; margin-top: 3px;">
                                @if($inq->phone)
                                    <a href="tel:{{ $inq->phone }}" style="color: #64748B; text-decoration: none;">
                                        <i class="fa-solid fa-phone" style="font-size: 10px;"></i> {{ $inq->phone }}
                                    </a>
                                @else
                                    <span style="color: #94A3B8;">No phone provided</span>
                                @endif
                            </div>
                        </td>

                        <!-- Subject -->
                        <td>
                            <span class="subject-pill">{{ $inq->subject ?? 'General Enquiry' }}</span>
                        </td>

                        <!-- Message Snippet -->
                        <td>
                            <div class="message-excerpt" title="{{ $inq->message }}">
                                {{ $inq->message }}
                            </div>
                        </td>

                        <!-- Date -->
                        <td>
                            <div style="font-size: 12.5px; font-weight: 600; color: #475569;">
                                {{ $inq->created_at->format('d M Y') }}
                            </div>
                            <div style="font-size: 11px; color: #94A3B8;">
                                {{ $inq->created_at->diffForHumans() }}
                            </div>
                        </td>

                        <!-- Status Dropdown -->
                        <td>
                            <form action="{{ route('admin.inquiries.status', $inq->id) }}" method="POST" style="margin: 0;">
                                @csrf
                                @method('PATCH')
                                <div class="status-dropdown-wrap">
                                    <select name="status" class="status-select-pill status-{{ $inq->status }}" onchange="this.form.submit()">
                                        <option value="new" {{ $inq->status == 'new' ? 'selected' : '' }}>New (Unread)</option>
                                        <option value="in_progress" {{ $inq->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                        <option value="resolved" {{ $inq->status == 'resolved' ? 'selected' : '' }}>Resolved</option>
                                    </select>
                                    <i class="fa-solid fa-chevron-down status-dropdown-arrow"></i>
                                </div>
                            </form>
                        </td>

                        <!-- Actions -->
                        <td style="text-align: right;">
                            <div style="display: inline-flex; align-items: center; gap: 6px;">
                                <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="btn-action-view" title="Read Full Message">
                                    <i class="fa-solid fa-eye"></i>
                                    <span>View</span>
                                </a>

                                <form action="{{ route('admin.inquiries.destroy', $inq->id) }}" method="POST" onsubmit="return confirm('Delete inquiry from {{ addslashes($inq->name) }}?');" style="margin: 0;">
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
                                    No Inquiries Found
                                </h4>
                                <p style="font-size: 13px; color: #64748B; margin-bottom: 16px;">
                                    No parent inquiries match your filter criteria.
                                </p>
                                @if(request()->hasAny(['search', 'status']))
                                    <a href="{{ route('admin.inquiries.index') }}" class="btn-clear-filter">
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

        @if($inquiries->hasPages())
        <div class="table-footer-bar">
            <div style="font-size: 13px; color: #64748B;">
                Showing {{ $inquiries->firstItem() }} to {{ $inquiries->lastItem() }} of {{ $inquiries->total() }} results
            </div>
            <div>
                {{ $inquiries->links() }}
            </div>
        </div>
        @endif
    </div>

</div>
@endsection
