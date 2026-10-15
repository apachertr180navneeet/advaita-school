@extends('layouts.admin')

@section('title', 'Parent & Contact Inquiries')
@section('page_title', 'Parent & Contact Inquiries')



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
                <i class="fa-solid fa-inbox text-orange"></i>
                <span>Parent &amp; Website Inquiries</span>
                <span class="table-count-badge">{{ $inquiries->total() }} Inquiries</span>
            </h3>

            <div class="text-muted fs-12">
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
                        <th class="col-w130">Received Date</th>
                        <th class="col-w150">Status</th>
                        <th class="col-w120 text-right">Actions</th>
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
                                    <div class="text-muted fs-11">Parent / Visitor</div>
                                </div>
                            </div>
                        </td>

                        <!-- Contact Details -->
                        <td>
                            <div class="text-dark fs-13 font-semibold">
                                <a href="mailto:{{ $inq->email }}" class="text-info text-hover-underline">
                                    <i class="fa-regular fa-envelope fs-11"></i> {{ $inq->email }}
                                </a>
                            </div>
                            <div class="text-muted fs-12 mt-3">
                                @if($inq->phone)
                                    <a href="tel:{{ $inq->phone }}" class="text-muted text-hover-underline">
                                        <i class="fa-solid fa-phone fs-10"></i> {{ $inq->phone }}
                                    </a>
                                @else
                                    <span class="text-muted">No phone provided</span>
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
                            <div class="text-slate fs-12 font-semibold">
                                {{ $inq->created_at->format('d M Y') }}
                            </div>
                            <div class="td-date-muted">
                                {{ $inq->created_at->diffForHumans() }}
                            </div>
                        </td>

                        <!-- Status Dropdown -->
                        <td>
                            <form action="{{ route('admin.inquiries.status', $inq->id) }}" method="POST" class="m-0">
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
                        <td class="text-right">
                            <div class="d-inline-flex align-items-center gap-6">
                                <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="btn-action-view" title="Read Full Message">
                                    <i class="fa-solid fa-eye"></i>
                                    <span>View</span>
                                </a>

                                <form action="{{ route('admin.inquiries.destroy', $inq->id) }}" method="POST" onsubmit="return confirm('Delete inquiry from {{ addslashes($inq->name) }}?');" class="m-0">
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
                                    No Inquiries Found
                                </h4>
                                <p class="text-muted fs-13 mb-16">
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
            <div class="text-muted">
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
