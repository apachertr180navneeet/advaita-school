@extends('layouts.admin')

@section('title', 'Admin Dashboard · Registrations & Enquiries')
@section('page_title', 'Dashboard Overview')



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
    <a href="{{ route('admin.sliders.index') }}" class="stat-card text-inherit-link">
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
    <a href="{{ route('admin.pillars.index') }}" class="stat-card text-inherit-link">
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
    <a href="{{ route('admin.why-choose.index') }}" class="stat-card text-inherit-link">
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
                            <strong class="td-code">{{ $item['identifier'] }}</strong>
                        </td>
                        <td>
                            <div class="td-main-bold">{{ $item['name'] }}</div>
                            <div class="td-sub-muted">{{ $item['subtext'] }}</div>
                        </td>
                        <td>
                            <div class="td-semi-bold">{{ $item['phone'] ?? 'No phone' }}</div>
                            <div class="td-sub-muted">{{ $item['email'] ?? 'No email' }}</div>
                        </td>
                        <td>
                            <div class="td-body-slate">{{ $item['created_at']->format('d M Y') }}</div>
                            <div class="td-date-muted">{{ $item['created_at']->diffForHumans() }}</div>
                        </td>
                        <td>
                            <!-- Inline Status Form -->
                            <form action="{{ $item['status_route'] }}" method="POST" class="d-inline-block m-0">
                                @csrf
                                @method('PATCH')
                                <select name="status" class="filter-input table-badge-select" onchange="this.form.submit()">
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
                            <div class="d-flex gap-6">
                                <button type="button" class="btn-quick-preview" onclick='openQuickView(@json($item))' title="Quick View Modal">
                                    <i class="fa-regular fa-eye"></i>
                                    <span>Preview</span>
                                </button>
                                <a href="{{ $item['show_route'] }}" class="btn-action-view" title="Open Full Details Page">
                                    <span>Details</span>
                                    <i class="fa-solid fa-arrow-right fs-10"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="table-empty-row">
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
    <div class="submission-panel" id="panelRegistrations" class="d-none">
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
                            <strong class="td-code">{{ $reg->application_no }}</strong>
                        </td>
                        <td>
                            <div class="td-main-bold">{{ $reg->full_name }}</div>
                            <div class="td-sub-muted">{{ $reg->gender }} &middot; DOB: {{ $reg->dob ? date('d M Y', strtotime($reg->dob)) : 'N/A' }}</div>
                        </td>
                        <td>
                            <span class="class-pill">{{ $reg->applying_class ?? 'N/A' }}</span>
                        </td>
                        <td>
                            <div class="td-semi-bold">{{ $reg->father_name ?? $reg->mother_name ?? 'Parent' }}</div>
                            <div class="td-sub-muted">{{ $reg->phone }}</div>
                        </td>
                        <td>
                            <span class="td-semi-bold">{{ $reg->academic_year ?? '2026-2027' }}</span>
                        </td>
                        <td>
                            <form action="{{ route('admin.registrations.status', $reg->id) }}" method="POST" class="m-0">
                                @csrf
                                @method('PATCH')
                                <select name="status" class="filter-input table-badge-select" onchange="this.form.submit()">
                                    <option value="submitted" {{ $reg->status == 'submitted' ? 'selected' : '' }}>Submitted</option>
                                    <option value="under_review" {{ $reg->status == 'under_review' ? 'selected' : '' }}>Under Review</option>
                                    <option value="approved" {{ $reg->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="rejected" {{ $reg->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                </select>
                            </form>
                        </td>
                        <td>
                            <div class="d-flex gap-6">
                                <a href="{{ route('admin.registrations.show', $reg->id) }}" class="btn-action-view">
                                    <i class="fa-regular fa-eye"></i>
                                    <span>Full Details</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="table-empty-row">
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
    <div class="submission-panel" id="panelEnquiries" class="d-none">
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
                            <strong class="td-code">#{{ str_pad($inq->id, 4, '0', STR_PAD_LEFT) }}</strong>
                        </td>
                        <td>
                            <div class="td-main-bold">{{ $inq->name }}</div>
                            <div class="td-date-muted">{{ $inq->created_at->format('d M Y') }}</div>
                        </td>
                        <td>
                            <span class="td-main-bold">{{ $inq->subject ?? 'General Enquiry' }}</span>
                        </td>
                        <td>
                            <div class="td-semi-bold">{{ $inq->phone ?? 'No phone' }}</div>
                            <div class="td-sub-muted">{{ $inq->email }}</div>
                        </td>
                        <td>
                            <div class="td-ellipsis-260">
                                {{ $inq->message }}
                            </div>
                        </td>
                        <td>
                            <form action="{{ route('admin.inquiries.status', $inq->id) }}" method="POST" class="m-0">
                                @csrf
                                @method('PATCH')
                                <select name="status" class="filter-input table-badge-select" onchange="this.form.submit()">
                                    <option value="new" {{ $inq->status == 'new' ? 'selected' : '' }}>New</option>
                                    <option value="in_progress" {{ $inq->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                    <option value="resolved" {{ $inq->status == 'resolved' ? 'selected' : '' }}>Resolved</option>
                                </select>
                            </form>
                        </td>
                        <td>
                            <div class="d-flex gap-6">
                                <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="btn-action-view">
                                    <i class="fa-regular fa-envelope-open"></i>
                                    <span>Read Message</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="table-empty-row">
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

            <div class="meta-pill-label">Details / Message:</div>
            <div class="modal-content-area" id="modalDetails"></div>

            <div class="modal-actions-bar">
                <div class="d-flex gap-8">
                    <a href="#" id="modalCallBtn" class="btn-action-view badge-sky-solid">
                        <i class="fa-solid fa-phone"></i>
                        <span>Call</span>
                    </a>
                    <a href="#" id="modalEmailBtn" class="btn-action-view">
                        <i class="fa-regular fa-envelope"></i>
                        <span>Email</span>
                    </a>
                </div>

                <a href="#" id="modalFullLink" class="btn-action-view btn-navy-solid">
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
            document.getElementById('modalTypeIcon').innerHTML = '<i class="fa-solid fa-user-graduate text-info"></i>';
            document.getElementById('modalTitle').textContent = 'Online Admission Registration';
        } else {
            document.getElementById('modalTypeIcon').innerHTML = '<i class="fa-solid fa-envelope-open-text text-orange"></i>';
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
