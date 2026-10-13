@extends('layouts.admin')

@section('title', 'Admin Dashboard · Registrations & Enquiries')
@section('page_title', 'Dashboard Overview')

@section('styles')
<style>
    /* Welcome Header */
    .dashboard-welcome-banner {
        background: linear-gradient(135deg, #061A38 0%, #0B2B5C 100%);
        border-radius: 20px;
        padding: 28px 32px;
        color: #ffffff;
        margin-bottom: 26px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 10px 30px rgba(6, 26, 56, 0.12);
        position: relative;
        overflow: hidden;
    }

    .dashboard-welcome-banner::after {
        content: '';
        position: absolute;
        top: -40px;
        right: -40px;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(243, 112, 33, 0.3) 0%, transparent 70%);
        pointer-events: none;
    }

    .welcome-text h1 {
        font-size: 22px;
        font-weight: 800;
        margin-bottom: 6px;
    }

    .welcome-text p {
        font-size: 14px;
        color: #94A3B8;
    }

    .welcome-quick-pills {
        display: flex;
        gap: 12px;
    }

    .welcome-pill {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.12);
        padding: 10px 16px;
        border-radius: 12px;
        text-align: right;
    }

    .welcome-pill-val {
        font-size: 18px;
        font-weight: 800;
        color: #F37021;
    }

    .welcome-pill-lbl {
        font-size: 11px;
        color: #CBD5E1;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Metric Stat Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
        gap: 20px;
        margin-bottom: 28px;
    }

    .stat-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        padding: 22px 24px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
        transition: transform 0.2s, box-shadow 0.2s;
        position: relative;
    }

    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    }

    .stat-card-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 12px;
    }

    .stat-icon-circle {
        width: 46px;
        height: 46px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 19px;
    }

    .stat-icon-blue { background: #E0F2FE; color: #0284C7; }
    .stat-icon-orange { background: #FFF7ED; color: #F37021; }
    .stat-icon-green { background: #ECFDF5; color: #10B981; }
    .stat-icon-purple { background: #F3E8FF; color: #9333EA; }

    .stat-title {
        font-size: 12.5px;
        font-weight: 700;
        color: var(--admin-text-muted);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .stat-value {
        font-size: 30px;
        font-weight: 800;
        color: var(--admin-navy-deep);
        line-height: 1.1;
        margin-bottom: 6px;
    }

    .stat-subtext {
        font-size: 12px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .sub-badge {
        padding: 2px 7px;
        border-radius: 6px;
        font-size: 11px;
        font-weight: 700;
    }

    .sub-badge.orange { background: #FFEDD5; color: #C2410C; }
    .sub-badge.green { background: #DCFCE7; color: #15803D; }

    /* Main Tabbed Card */
    .master-list-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 20px;
        padding: 24px 28px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
    }

    /* Tab Controls & Filter Bar */
    .tabs-header-wrap {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        margin-bottom: 22px;
        padding-bottom: 18px;
        border-bottom: 1px solid var(--admin-border);
    }

    .tab-pills-list {
        display: flex;
        align-items: center;
        gap: 8px;
        background: #F1F5F9;
        padding: 5px;
        border-radius: 14px;
    }

    .tab-pill-btn {
        background: transparent;
        border: none;
        padding: 9px 18px;
        border-radius: 10px;
        font-size: 13.5px;
        font-weight: 700;
        font-family: inherit;
        color: #64748B;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s ease;
    }

    .tab-pill-btn:hover {
        color: var(--admin-navy-deep);
    }

    .tab-pill-btn.active {
        background: #ffffff;
        color: var(--admin-navy-deep);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .tab-badge {
        background: #E2E8F0;
        color: #475569;
        font-size: 11px;
        padding: 2px 7px;
        border-radius: 12px;
        font-weight: 800;
    }

    .tab-pill-btn.active .tab-badge {
        background: rgba(243, 112, 33, 0.15);
        color: #D9560A;
    }

    /* Live Search & Filter Controls */
    .table-tools-wrap {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .search-input-box {
        position: relative;
        display: flex;
        align-items: center;
    }

    .search-input-box i {
        position: absolute;
        left: 12px;
        color: #94A3B8;
        font-size: 13px;
    }

    .search-input-box input {
        background: #F8FAFC;
        border: 1px solid var(--admin-border);
        border-radius: 10px;
        padding: 8px 12px 8px 34px;
        font-size: 13px;
        font-family: inherit;
        outline: none;
        width: 240px;
        transition: all 0.2s;
    }

    .search-input-box input:focus {
        width: 280px;
        border-color: var(--admin-navy);
        background: #ffffff;
    }

    /* Table Typography & Elements */
    .table-responsive {
        overflow-x: auto;
    }

    .admin-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 13px;
    }

    .admin-table th {
        text-align: left;
        padding: 12px 14px;
        font-size: 11.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.6px;
        color: var(--admin-text-muted);
        background: #F8FAFC;
        border-bottom: 1px solid var(--admin-border);
    }

    .admin-table td {
        padding: 14px 14px;
        border-bottom: 1px solid #F1F5F9;
        vertical-align: middle;
    }

    .admin-table tr:hover td {
        background: #F8FAFC;
    }

    /* Badges */
    .type-pill {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 4px 10px;
        border-radius: 8px;
        font-size: 11.5px;
        font-weight: 700;
        letter-spacing: 0.3px;
    }

    .type-registration {
        background: #EFF6FF;
        color: #1D4ED8;
        border: 1px solid #BFDBFE;
    }

    .type-inquiry {
        background: #FFF7ED;
        color: #C2410C;
        border: 1px solid #FED7AA;
    }

    .class-pill {
        display: inline-block;
        background: #F1F5F9;
        color: #334155;
        padding: 3px 8px;
        border-radius: 6px;
        font-size: 11.5px;
        font-weight: 700;
    }

    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 11.5px;
        font-weight: 700;
    }

    .status-submitted, .status-new {
        background: #FEF3C7;
        color: #92400E;
    }

    .status-under_review, .status-in_progress {
        background: #E0F2FE;
        color: #0369A1;
    }

    .status-approved, .status-resolved {
        background: #DCFCE7;
        color: #15803D;
    }

    .status-rejected {
        background: #FEE2E2;
        color: #B91C1C;
    }

    .btn-action-view {
        background: rgba(8, 59, 122, 0.08);
        border: 1px solid rgba(8, 59, 122, 0.16);
        color: var(--admin-navy);
        border-radius: 8px;
        padding: 6px 11px;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-action-view:hover {
        background: var(--admin-navy);
        color: #ffffff;
    }

    .btn-quick-preview {
        background: #F1F5F9;
        border: 1px solid #CBD5E1;
        color: #334155;
        border-radius: 8px;
        padding: 6px 11px;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: all 0.2s;
    }

    .btn-quick-preview:hover {
        background: #E2E8F0;
        color: #0F172A;
    }

    /* Interactive Modal */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(15, 23, 42, 0.65);
        backdrop-filter: blur(5px);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        padding: 20px;
    }

    .modal-overlay.show {
        display: flex;
    }

    .modal-box {
        background: #ffffff;
        border-radius: 20px;
        width: 100%;
        max-width: 680px;
        max-height: 90vh;
        overflow-y: auto;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.3);
        animation: popModal 0.25s ease;
    }

    @keyframes popModal {
        from { transform: scale(0.95); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }

    .modal-head {
        padding: 20px 24px;
        border-bottom: 1px solid var(--admin-border);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .modal-head-title {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 17px;
        font-weight: 800;
        color: var(--admin-navy-deep);
    }

    .modal-close-x {
        background: transparent;
        border: none;
        font-size: 20px;
        color: #94A3B8;
        cursor: pointer;
        padding: 4px;
    }

    .modal-close-x:hover {
        color: #0F172A;
    }

    .modal-body {
        padding: 24px;
    }

    .modal-meta-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
        margin-bottom: 20px;
        background: #F8FAFC;
        padding: 16px;
        border-radius: 12px;
        border: 1px solid var(--admin-border);
    }

    .modal-meta-item .lbl {
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        color: #64748B;
        margin-bottom: 2px;
    }

    .modal-meta-item .val {
        font-size: 14px;
        font-weight: 600;
        color: #0F172A;
    }

    .modal-content-area {
        background: #FAFAFA;
        border: 1px solid #E2E8F0;
        border-radius: 12px;
        padding: 18px;
        font-size: 14px;
        line-height: 1.6;
        color: #1E293B;
        white-space: pre-line;
        margin-bottom: 24px;
    }

    .modal-actions-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-top: 1px solid var(--admin-border);
        padding-top: 18px;
    }
</style>
@endsection

@section('content')

<!-- 1. Welcome Banner -->
<div class="dashboard-welcome-banner">
    <div class="welcome-text">
        <h1>Welcome, {{ Auth::user()->name ?? 'Administrator' }}!</h1>
        <p>Live submissions list: view and manage all student registrations & parent inquiries in one place.</p>
    </div>
    <div class="welcome-quick-pills">
        <div class="welcome-pill">
            <div class="welcome-pill-val">{{ $stats['total_registrations'] }}</div>
            <div class="welcome-pill-lbl">Online Registrations</div>
        </div>
        <div class="welcome-pill">
            <div class="welcome-pill-val">{{ $stats['total_inquiries'] }}</div>
            <div class="welcome-pill-lbl">Contact Enquiries</div>
        </div>
        <div class="welcome-pill">
            <div class="welcome-pill-val">{{ $stats['total_sliders'] ?? 0 }}</div>
            <div class="welcome-pill-lbl">Hero Sliders</div>
        </div>
    </div>
</div>

<!-- 2. Four High-Impact Metric Stat Cards -->
<div class="stats-grid">
    <!-- Stat 1: Total Registrations -->
    <div class="stat-card">
        <div class="stat-card-head">
            <span class="stat-title">Online Registrations</span>
            <div class="stat-icon-circle stat-icon-blue">
                <i class="fa-solid fa-user-graduate"></i>
            </div>
        </div>
        <div class="stat-value">{{ $stats['total_registrations'] }}</div>
        <div class="stat-subtext">
            <span class="sub-badge orange">{{ $stats['new_registrations'] }} New</span>
            <span>admission applications</span>
        </div>
    </div>

    <!-- Stat 2: Total Contact Inquiries -->
    <div class="stat-card">
        <div class="stat-card-head">
            <span class="stat-title">Contact Enquiries</span>
            <div class="stat-icon-circle stat-icon-orange">
                <i class="fa-solid fa-envelope-open-text"></i>
            </div>
        </div>
        <div class="stat-value">{{ $stats['total_inquiries'] }}</div>
        <div class="stat-subtext">
            <span class="sub-badge orange">{{ $stats['new_inquiries'] }} Unread</span>
            <span>parent questions</span>
        </div>
    </div>

    <!-- Stat 3: Approved Admissions -->
    <div class="stat-card">
        <div class="stat-card-head">
            <span class="stat-title">Approved Students</span>
            <div class="stat-icon-circle stat-icon-green">
                <i class="fa-solid fa-circle-check"></i>
            </div>
        </div>
        <div class="stat-value">{{ $stats['approved_registrations'] }}</div>
        <div class="stat-subtext">
            <span class="sub-badge green">Verified</span>
            <span>admissions confirmed</span>
        </div>
    </div>

    <!-- Stat 4: Under Review -->
    <div class="stat-card">
        <div class="stat-card-head">
            <span class="stat-title">In Progress</span>
            <div class="stat-icon-circle stat-icon-purple">
                <i class="fa-solid fa-clock-rotate-left"></i>
            </div>
        </div>
        <div class="stat-value">{{ $stats['reviewed_registrations'] }}</div>
        <div class="stat-subtext">
            <span>Documents being verified</span>
        </div>
    </div>

    <!-- Stat 5: Hero Sliders Management -->
    <a href="{{ route('admin.sliders.index') }}" class="stat-card" style="text-decoration: none; color: inherit;">
        <div class="stat-card-head">
            <span class="stat-title">Hero Sliders</span>
            <div class="stat-icon-circle stat-icon-orange">
                <i class="fa-solid fa-images"></i>
            </div>
        </div>
        <div class="stat-value">{{ $stats['total_sliders'] ?? 0 }}</div>
        <div class="stat-subtext">
            <span class="sub-badge green">{{ $stats['active_sliders'] ?? 0 }} Active</span>
            <span>manage banner images & sizes &rarr;</span>
        </div>
    </a>

    <!-- Stat 6: Three Pillars Management -->
    <a href="{{ route('admin.pillars.index') }}" class="stat-card" style="text-decoration: none; color: inherit;">
        <div class="stat-card-head">
            <span class="stat-title">Three Pillars</span>
            <div class="stat-icon-circle stat-icon-blue">
                <i class="fa-solid fa-shapes"></i>
            </div>
        </div>
        <div class="stat-value">{{ $stats['total_pillars'] ?? 0 }}</div>
        <div class="stat-subtext">
            <span class="sub-badge green">{{ $stats['active_pillars'] ?? 0 }} Active</span>
            <span>manage cards, themes & tags &rarr;</span>
        </div>
    </a>

    <!-- Stat 7: Why Choose Advaita Cards Management -->
    <a href="{{ route('admin.why-choose.index') }}" class="stat-card" style="text-decoration: none; color: inherit;">
        <div class="stat-card-head">
            <span class="stat-title">Why Choose Cards</span>
            <div class="stat-icon-circle stat-icon-purple">
                <i class="fa-solid fa-award"></i>
            </div>
        </div>
        <div class="stat-value">{{ $stats['total_why_choose'] ?? 0 }}</div>
        <div class="stat-subtext">
            <span class="sub-badge green">{{ $stats['active_why_choose'] ?? 0 }} Active</span>
            <span>manage slider advantage cards &rarr;</span>
        </div>
    </a>
</div>

<!-- 3. Master Interactive List: Both Registrations and Enquiries -->
<div class="master-list-card">

    <!-- Tab Buttons & Live Search -->
    <div class="tabs-header-wrap">
        <div class="tab-pills-list" role="tablist">
            <!-- Tab 1: Both Together -->
            <button type="button" class="tab-pill-btn active" id="tabBtnBoth" onclick="switchSubmissionTab('both')">
                <i class="fa-solid fa-layer-group"></i>
                <span>All Submissions (Both)</span>
                <span class="tab-badge">{{ $combinedList->count() }}</span>
            </button>

            <!-- Tab 2: Registrations Only -->
            <button type="button" class="tab-pill-btn" id="tabBtnRegistrations" onclick="switchSubmissionTab('registrations')">
                <i class="fa-solid fa-user-graduate"></i>
                <span>Online Registrations</span>
                <span class="tab-badge">{{ $registrations->count() }}</span>
            </button>

            <!-- Tab 3: Enquiries Only -->
            <button type="button" class="tab-pill-btn" id="tabBtnEnquiries" onclick="switchSubmissionTab('enquiries')">
                <i class="fa-solid fa-envelope-open-text"></i>
                <span>Contact Enquiries</span>
                <span class="tab-badge">{{ $inquiries->count() }}</span>
            </button>
        </div>

        <!-- Live Instant Search -->
        <div class="table-tools-wrap">
            <div class="search-input-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" id="liveSearchInput" placeholder="Filter list by name, phone, class..." onkeyup="filterActiveTable()">
            </div>
        </div>
    </div>

    <!-- =========================================================================
         PANEL 1: BOTH REGISTRATIONS & ENQUIRIES IN ONE CHRONOLOGICAL LIST
         ========================================================================= -->
    <div class="submission-panel active" id="panelBoth">
        <div class="table-responsive">
            <table class="admin-table" id="tableBoth">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Reference ID</th>
                        <th>Name &amp; Subject / Class</th>
                        <th>Contact (Phone &amp; Email)</th>
                        <th>Date Received</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($combinedList as $item)
                    <tr class="searchable-row" data-search="{{ strtolower($item['name'] . ' ' . $item['identifier'] . ' ' . $item['phone'] . ' ' . $item['email'] . ' ' . $item['subtext']) }}">
                        <td>
                            @if($item['type'] === 'registration')
                                <span class="type-pill type-registration">
                                    <i class="fa-solid fa-user-graduate"></i>
                                    <span>Register</span>
                                </span>
                            @else
                                <span class="type-pill type-inquiry">
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>Enquiry</span>
                                </span>
                            @endif
                        </td>
                        <td>
                            <strong style="font-family: monospace; color: var(--admin-navy);">{{ $item['identifier'] }}</strong>
                        </td>
                        <td>
                            <div style="font-weight: 700; color: #0F172A; font-size: 13.5px;">{{ $item['name'] }}</div>
                            <div style="font-size: 11.5px; color: #64748B;">{{ $item['subtext'] }}</div>
                        </td>
                        <td>
                            <div style="font-weight: 600; color: #334155;">{{ $item['phone'] ?? 'No phone' }}</div>
                            <div style="font-size: 11.5px; color: #64748B;">{{ $item['email'] ?? 'No email' }}</div>
                        </td>
                        <td>
                            <div style="font-size: 12.5px; color: #334155;">{{ $item['created_at']->format('d M Y') }}</div>
                            <div style="font-size: 11px; color: #94A3B8;">{{ $item['created_at']->diffForHumans() }}</div>
                        </td>
                        <td>
                            <!-- Inline Status Form -->
                            <form action="{{ $item['status_route'] }}" method="POST" style="margin: 0; display: inline-block;">
                                @csrf
                                @method('PATCH')
                                <select name="status" class="filter-input" style="padding: 4px 8px; font-size: 11.5px; font-weight: 600; border-radius: 6px;" onchange="this.form.submit()">
                                    @if($item['type'] === 'registration')
                                        <option value="submitted" {{ $item['status'] == 'submitted' ? 'selected' : '' }}>Submitted</option>
                                        <option value="under_review" {{ $item['status'] == 'under_review' ? 'selected' : '' }}>Under Review</option>
                                        <option value="approved" {{ $item['status'] == 'approved' ? 'selected' : '' }}>Approved</option>
                                        <option value="rejected" {{ $item['status'] == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                    @else
                                        <option value="new" {{ $item['status'] == 'new' ? 'selected' : '' }}>New</option>
                                        <option value="in_progress" {{ $item['status'] == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                        <option value="resolved" {{ $item['status'] == 'resolved' ? 'selected' : '' }}>Resolved</option>
                                    @endif
                                </select>
                            </form>
                        </td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button type="button" class="btn-quick-preview" onclick='openQuickView(@json($item))' title="Quick View Modal">
                                    <i class="fa-regular fa-eye"></i>
                                    <span>Preview</span>
                                </button>
                                <a href="{{ $item['show_route'] }}" class="btn-action-view" title="Open Full Details Page">
                                    <span>Details</span>
                                    <i class="fa-solid fa-arrow-right" style="font-size: 10px;"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" style="text-align: center; color: #94A3B8; padding: 40px;">
                            No online registrations or enquiries found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- =========================================================================
         PANEL 2: ONLINE REGISTRATIONS ONLY
         ========================================================================= -->
    <div class="submission-panel" id="panelRegistrations" style="display: none;">
        <div class="table-responsive">
            <table class="admin-table" id="tableRegistrations">
                <thead>
                    <tr>
                        <th>App No</th>
                        <th>Student Name</th>
                        <th>Class / Grade</th>
                        <th>Parent &amp; Phone</th>
                        <th>Academic Year</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($registrations as $reg)
                    <tr class="searchable-row" data-search="{{ strtolower($reg->full_name . ' ' . $reg->application_no . ' ' . $reg->phone . ' ' . $reg->applying_class . ' ' . $reg->email) }}">
                        <td>
                            <strong style="font-family: monospace; color: var(--admin-navy);">{{ $reg->application_no }}</strong>
                        </td>
                        <td>
                            <div style="font-weight: 700; color: #0F172A;">{{ $reg->full_name }}</div>
                            <div style="font-size: 11.5px; color: #64748B;">{{ $reg->gender }} &middot; DOB: {{ $reg->dob ? date('d M Y', strtotime($reg->dob)) : 'N/A' }}</div>
                        </td>
                        <td>
                            <span class="class-pill">{{ $reg->applying_class ?? 'N/A' }}</span>
                        </td>
                        <td>
                            <div style="font-weight: 600; color: #334155;">{{ $reg->father_name ?? $reg->mother_name ?? 'Parent' }}</div>
                            <div style="font-size: 11.5px; color: #64748B;">{{ $reg->phone }}</div>
                        </td>
                        <td>
                            <span style="font-size: 12.5px; font-weight: 600;">{{ $reg->academic_year ?? '2026-2027' }}</span>
                        </td>
                        <td>
                            <form action="{{ route('admin.registrations.status', $reg->id) }}" method="POST" style="margin: 0;">
                                @csrf
                                @method('PATCH')
                                <select name="status" class="filter-input" style="padding: 4px 8px; font-size: 11.5px; font-weight: 600; border-radius: 6px;" onchange="this.form.submit()">
                                    <option value="submitted" {{ $reg->status == 'submitted' ? 'selected' : '' }}>Submitted</option>
                                    <option value="under_review" {{ $reg->status == 'under_review' ? 'selected' : '' }}>Under Review</option>
                                    <option value="approved" {{ $reg->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="rejected" {{ $reg->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                </select>
                            </form>
                        </td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <a href="{{ route('admin.registrations.show', $reg->id) }}" class="btn-action-view">
                                    <i class="fa-regular fa-eye"></i>
                                    <span>Full Details</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" style="text-align: center; color: #94A3B8; padding: 40px;">
                            No online registrations found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- =========================================================================
         PANEL 3: CONTACT ENQUIRIES ONLY
         ========================================================================= -->
    <div class="submission-panel" id="panelEnquiries" style="display: none;">
        <div class="table-responsive">
            <table class="admin-table" id="tableEnquiries">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Sender Name</th>
                        <th>Subject</th>
                        <th>Contact (Phone &amp; Email)</th>
                        <th>Message Preview</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($inquiries as $inq)
                    <tr class="searchable-row" data-search="{{ strtolower($inq->name . ' ' . $inq->subject . ' ' . $inq->phone . ' ' . $inq->email . ' ' . $inq->message) }}">
                        <td>
                            <strong style="font-family: monospace; color: var(--admin-navy);">#{{ str_pad($inq->id, 4, '0', STR_PAD_LEFT) }}</strong>
                        </td>
                        <td>
                            <div style="font-weight: 700; color: #0F172A;">{{ $inq->name }}</div>
                            <div style="font-size: 11.5px; color: #94A3B8;">{{ $inq->created_at->format('d M Y') }}</div>
                        </td>
                        <td>
                            <span style="font-weight: 700; color: #334155;">{{ $inq->subject ?? 'General Enquiry' }}</span>
                        </td>
                        <td>
                            <div style="font-weight: 600; color: #334155;">{{ $inq->phone ?? 'No phone' }}</div>
                            <div style="font-size: 11.5px; color: #64748B;">{{ $inq->email }}</div>
                        </td>
                        <td>
                            <div style="max-width: 260px; font-size: 12px; color: #64748B; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                {{ $inq->message }}
                            </div>
                        </td>
                        <td>
                            <form action="{{ route('admin.inquiries.status', $inq->id) }}" method="POST" style="margin: 0;">
                                @csrf
                                @method('PATCH')
                                <select name="status" class="filter-input" style="padding: 4px 8px; font-size: 11.5px; font-weight: 600; border-radius: 6px;" onchange="this.form.submit()">
                                    <option value="new" {{ $inq->status == 'new' ? 'selected' : '' }}>New</option>
                                    <option value="in_progress" {{ $inq->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                    <option value="resolved" {{ $inq->status == 'resolved' ? 'selected' : '' }}>Resolved</option>
                                </select>
                            </form>
                        </td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="btn-action-view">
                                    <i class="fa-regular fa-envelope-open"></i>
                                    <span>Read Message</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" style="text-align: center; color: #94A3B8; padding: 40px;">
                            No contact enquiries found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- =============================================================================
     4. INTERACTIVE QUICK PREVIEW MODAL
     ============================================================================= -->
<div class="modal-overlay" id="quickPreviewModal" onclick="closeQuickView(event)">
    <div class="modal-box" onclick="event.stopPropagation()">
        <div class="modal-head">
            <div class="modal-head-title">
                <span id="modalTypeIcon"></span>
                <span id="modalTitle">Submission Details</span>
            </div>
            <button type="button" class="modal-close-x" onclick="closeQuickView()">&times;</button>
        </div>

        <div class="modal-body">
            <div class="modal-meta-grid">
                <div class="modal-meta-item">
                    <div class="lbl">Reference ID</div>
                    <div class="val" id="modalId">-</div>
                </div>
                <div class="modal-meta-item">
                    <div class="lbl">Name</div>
                    <div class="val" id="modalName">-</div>
                </div>
                <div class="modal-meta-item">
                    <div class="lbl">Phone Number</div>
                    <div class="val" id="modalPhone">-</div>
                </div>
                <div class="modal-meta-item">
                    <div class="lbl">Email Address</div>
                    <div class="val" id="modalEmail">-</div>
                </div>
                <div class="modal-meta-item">
                    <div class="lbl">Category / Subtext</div>
                    <div class="val" id="modalSubtext">-</div>
                </div>
                <div class="modal-meta-item">
                    <div class="lbl">Current Status</div>
                    <div class="val" id="modalStatus">-</div>
                </div>
            </div>

            <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; color: #64748B; margin-bottom: 6px;">Details / Message:</div>
            <div class="modal-content-area" id="modalDetails"></div>

            <div class="modal-actions-bar">
                <div style="display: flex; gap: 8px;">
                    <a href="#" id="modalCallBtn" class="btn-action-view" style="background: #E0F2FE; color: #0369A1; border-color: #BAE6FD;">
                        <i class="fa-solid fa-phone"></i>
                        <span>Call</span>
                    </a>
                    <a href="#" id="modalEmailBtn" class="btn-action-view">
                        <i class="fa-regular fa-envelope"></i>
                        <span>Email</span>
                    </a>
                </div>

                <a href="#" id="modalFullLink" class="btn-action-view" style="background: var(--admin-navy); color: #ffffff;">
                    <span>View Complete Record</span>
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    // Tab Switcher function
    function switchSubmissionTab(tab) {
        const panels = {
            'both': document.getElementById('panelBoth'),
            'registrations': document.getElementById('panelRegistrations'),
            'enquiries': document.getElementById('panelEnquiries')
        };
        const buttons = {
            'both': document.getElementById('tabBtnBoth'),
            'registrations': document.getElementById('tabBtnRegistrations'),
            'enquiries': document.getElementById('tabBtnEnquiries')
        };

        Object.keys(panels).forEach(key => {
            if (key === tab) {
                panels[key].style.display = 'block';
                buttons[key].classList.add('active');
            } else {
                panels[key].style.display = 'none';
                buttons[key].classList.remove('active');
            }
        });

        // Trigger filter on newly visible tab
        filterActiveTable();
    }

    // Live search function
    function filterActiveTable() {
        const query = document.getElementById('liveSearchInput').value.toLowerCase().trim();
        const activePanel = document.querySelector('.submission-panel[style*="block"], .submission-panel.active:not([style*="none"])');
        
        if (!activePanel) return;

        const rows = activePanel.querySelectorAll('.searchable-row');
        rows.forEach(row => {
            const data = row.getAttribute('data-search') || '';
            if (!query || data.includes(query)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    // Quick Preview Modal
    function openQuickView(item) {
        document.getElementById('modalId').textContent = item.identifier;
        document.getElementById('modalName').textContent = item.name;
        document.getElementById('modalPhone').textContent = item.phone || 'N/A';
        document.getElementById('modalEmail').textContent = item.email || 'N/A';
        document.getElementById('modalSubtext').textContent = item.subtext || '-';
        document.getElementById('modalStatus').textContent = item.status.replace('_', ' ').toUpperCase();
        document.getElementById('modalDetails').textContent = item.details || 'No details provided.';

        if (item.type === 'registration') {
            document.getElementById('modalTypeIcon').innerHTML = '<i class="fa-solid fa-user-graduate" style="color: #0284C7;"></i>';
            document.getElementById('modalTitle').textContent = 'Online Admission Registration';
        } else {
            document.getElementById('modalTypeIcon').innerHTML = '<i class="fa-solid fa-envelope-open-text" style="color: #F37021;"></i>';
            document.getElementById('modalTitle').textContent = 'Contact Enquiry';
        }

        // Contact buttons
        if (item.phone) {
            document.getElementById('modalCallBtn').href = 'tel:' + item.phone;
            document.getElementById('modalCallBtn').style.display = 'inline-flex';
        } else {
            document.getElementById('modalCallBtn').style.display = 'none';
        }

        if (item.email) {
            document.getElementById('modalEmailBtn').href = 'mailto:' + item.email;
            document.getElementById('modalEmailBtn').style.display = 'inline-flex';
        } else {
            document.getElementById('modalEmailBtn').style.display = 'none';
        }

        document.getElementById('modalFullLink').href = item.show_route;

        document.getElementById('quickPreviewModal').classList.add('show');
    }

    function closeQuickView(e) {
        if (!e || e.target.id === 'quickPreviewModal' || e.target.classList.contains('modal-close-x')) {
            document.getElementById('quickPreviewModal').classList.remove('show');
        }
    }
</script>
@endsection
