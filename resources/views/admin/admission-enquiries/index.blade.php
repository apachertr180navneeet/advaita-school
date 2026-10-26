@extends('layouts.admin')

@section('title', 'Quick Admission Enquiries · Advaita Admin')
@section('page_title', 'Admission Enquiries')

@section('content')
<div class="academic-mgmt-wrapper">

    <!-- 1. Top Header Action Bar -->
    <div class="academic-top-bar">
        <div class="cph-title-wrap">
            <div class="cph-icon-box">
                <i class="fa-solid fa-clipboard-question"></i>
            </div>
            <div class="academic-top-title">
                <h3>Quick Admission Enquiries</h3>
                <p>Manage interest submissions, parent phone enquiries, and follow-up schedules for Academic Session 2026–27.</p>
            </div>
        </div>
        <div class="d-flex align-items-center gap-12 flex-wrap">
            <a href="{{ route('admission-info') }}#quick-enquiry" target="_blank" class="btn-admin btn-secondary" title="View live quick enquiry form">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>Live Enquiry Form</span>
            </a>
            <a href="{{ route('admin.registrations.index') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-user-graduate"></i>
                <span>Detailed Applications ({{ \App\Models\OnlineRegistration::count() }})</span>
            </a>
        </div>
    </div>

    <!-- 2. Overview Metrics Row -->
    <div class="pages-directory-metrics-grid">
        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>{{ $counts['all'] ?? 0 }}</h4>
                <span>Total Enquiries</span>
            </div>
            <div class="dm-icon dm-icon-pages">
                <i class="fa-solid fa-clipboard-list"></i>
            </div>
        </div>

        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>{{ $counts['new'] ?? 0 }}</h4>
                <span>New / Uncontacted</span>
            </div>
            <div class="dm-icon dm-icon-fields">
                <i class="fa-solid fa-bell"></i>
            </div>
        </div>

        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>{{ $counts['contacted'] ?? 0 }}</h4>
                <span>Contacted</span>
            </div>
            <div class="dm-icon dm-icon-images">
                <i class="fa-solid fa-phone-volume"></i>
            </div>
        </div>

        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>{{ $counts['admitted'] ?? 0 }}</h4>
                <span>Admitted</span>
            </div>
            <div class="dm-icon dm-icon-sync">
                <i class="fa-solid fa-circle-check"></i>
            </div>
        </div>
    </div>

    <!-- 3. Status Filter Pills Bar -->
    <div class="d-flex align-items-center justify-content-between gap-16 flex-wrap mb-16">
        <div class="stage-filter-pills-bar m-0 flex-grow-1">
            <a href="{{ route('admin.admission-enquiries.index', array_filter(['class' => request('class'), 'search' => request('search')])) }}" 
               class="btn-stage-pill {{ !request('status') ? 'active' : '' }}">
                <i class="fa-solid fa-list-check"></i>
                <span>All Enquiries</span>
                <span class="pill-badge">{{ $counts['all'] ?? 0 }}</span>
            </a>
            @foreach(\App\Models\AdmissionEnquiry::STATUSES as $stKey => $st)
            <a href="{{ route('admin.admission-enquiries.index', array_filter(['status' => $stKey, 'class' => request('class'), 'search' => request('search')])) }}" 
               class="btn-stage-pill {{ request('status') === $stKey ? 'active' : '' }}">
                <i class="{{ $st['icon'] }}"></i>
                <span>{{ $st['label'] }}</span>
                <span class="pill-badge">{{ $counts[$stKey] ?? 0 }}</span>
            </a>
            @endforeach
        </div>
    </div>

    <!-- 4. Search & Class Filter Card -->
    <div class="cards-table-card p-18 mb-20">
        <form method="GET" action="{{ route('admin.admission-enquiries.index') }}" class="d-flex align-items-center gap-16 flex-wrap m-0">
            @if(request('status'))
            <input type="hidden" name="status" value="{{ request('status') }}">
            @endif

            <div class="d-flex align-items-center gap-8 flex-grow-1" style="min-width: 250px;">
                <label class="fs-13 font-bold text-navy m-0"><i class="fa-solid fa-magnifying-glass text-orange me-1"></i> Search:</label>
                <input type="text" name="search" value="{{ request('search') }}" class="form-control" 
                       placeholder="Search parent name, child name, mobile, remarks..." style="font-size: 13px;">
            </div>

            <div class="d-flex align-items-center gap-8">
                <label class="fs-13 font-bold text-navy m-0"><i class="fa-solid fa-graduation-cap text-navy me-1"></i> Class:</label>
                <select name="class" class="form-control" style="width: auto; padding: 7px 14px; font-size: 13px;" onchange="this.form.submit()">
                    <option value="">All Classes</option>
                    @foreach($classes as $cls)
                    <option value="{{ $cls }}" {{ request('class') === $cls ? 'selected' : '' }}>
                        {{ $cls }}
                    </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn-admin btn-primary" style="padding: 7px 16px; font-size: 13px;">
                <i class="fa-solid fa-filter"></i>
                <span>Filter</span>
            </button>

            @if(request('search') || request('class') || request('status'))
            <a href="{{ route('admin.admission-enquiries.index') }}" class="btn-admin btn-secondary" style="padding: 7px 14px; font-size: 12px;">
                <i class="fa-solid fa-xmark"></i>
                <span>Reset</span>
            </a>
            @endif
        </form>
    </div>

    <!-- 5. Structured Table View Card -->
    <div class="cards-table-card">
        <div class="table-top-actions-bar">
            <div class="d-flex align-items-center gap-12 flex-wrap">
                <h3 class="text-navy fs-16 font-extrabold d-flex align-items-center gap-8 m-0">
                    <i class="fa-solid fa-clipboard-check text-orange"></i>
                    <span>Enquiries Log ({{ $enquiries->total() }})</span>
                </h3>
                <span class="badge-blue-pill">
                    {{ $counts['new'] ?? 0 }} Pending Follow-ups
                </span>
            </div>
        </div>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 60px; text-align: center;">ID</th>
                        <th>Parent &amp; Ward Details</th>
                        <th style="width: 140px;">Class &amp; Session</th>
                        <th style="width: 150px;">Contact Phone</th>
                        <th>Parent Remarks &amp; Admin Notes</th>
                        <th style="width: 130px; text-align: center;">Status</th>
                        <th style="width: 130px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($enquiries as $enquiry)
                    <tr>
                        <td style="text-align: center;">
                            <span class="badge-neutral font-bold">#{{ $enquiry->id }}</span>
                        </td>

                        <!-- Parent & Ward -->
                        <td>
                            <div class="font-extrabold text-navy fs-14">
                                <i class="fa-solid fa-child text-orange me-1"></i>
                                {{ $enquiry->ward_name }}
                            </div>
                            <div class="text-muted fs-12 mt-2">
                                <i class="fa-solid fa-user me-1"></i>
                                Parent: <strong class="text-dark">{{ $enquiry->parent_name }}</strong>
                            </div>
                            <div class="text-muted fs-11 mt-2">
                                <i class="fa-regular fa-clock me-1"></i>
                                {{ $enquiry->created_at->format('d M Y, h:i A') }} ({{ $enquiry->created_at->diffForHumans() }})
                            </div>
                        </td>

                        <!-- Class & Session -->
                        <td>
                            <span class="badge-blue-pill font-bold">
                                {{ $enquiry->applying_class ?? 'General Admission' }}
                            </span>
                            <div class="text-muted fs-11 mt-4">
                                Session {{ $enquiry->academic_year }}
                            </div>
                        </td>

                        <!-- Phone -->
                        <td>
                            <a href="tel:{{ $enquiry->mobile_number }}" class="text-navy font-extrabold fs-13 d-inline-flex align-items-center gap-6" title="Click to call parent">
                                <i class="fa-solid fa-phone text-orange"></i>
                                <span>{{ $enquiry->mobile_number }}</span>
                            </a>
                            <div class="mt-4">
                                <a href="https://wa.me/91{{ $enquiry->mobile_number }}?text=Hello%20{{ urlencode($enquiry->parent_name) }},%20greetings%20from%20Advaita%20School%20of%20Excellence,%20Parbhani%20regarding%20admission%20for%20{{ urlencode($enquiry->ward_name) }}." 
                                   target="_blank" class="fs-11 font-bold text-success d-inline-flex align-items-center gap-4" title="Open WhatsApp chat">
                                    <i class="fa-brands fa-whatsapp"></i> Chat WhatsApp
                                </a>
                            </div>
                        </td>

                        <!-- Notes -->
                        <td>
                            @if($enquiry->notes)
                            <div class="text-dark fs-12 mb-4">
                                <span class="text-muted font-bold">Parent Note:</span>
                                <em>"{{ $enquiry->notes }}"</em>
                            </div>
                            @endif

                            @if($enquiry->admin_notes)
                            <div class="p-8 rounded" style="background: #F1F5F9; border-left: 3px solid #083B7A;">
                                <span class="text-navy font-bold fs-11 d-block"><i class="fa-solid fa-user-pen me-1"></i> Counselor Remarks:</span>
                                <span class="text-muted fs-11">{{ $enquiry->admin_notes }}</span>
                            </div>
                            @else
                            <span class="text-muted fs-11">No counselor notes recorded yet.</span>
                            @endif
                        </td>

                        <!-- Status -->
                        <td style="text-align: center;">
                            @php
                                $statusInfo = \App\Models\AdmissionEnquiry::STATUSES[$enquiry->status] ?? null;
                            @endphp
                            <span class="{{ $statusInfo['badge_class'] ?? 'badge-neutral' }} d-inline-flex align-items-center gap-4">
                                <i class="{{ $statusInfo['icon'] ?? 'fa-solid fa-circle-dot' }}"></i>
                                <span>{{ $statusInfo['label'] ?? ucfirst($enquiry->status) }}</span>
                            </span>
                        </td>

                        <!-- Actions -->
                        <td style="text-align: right;">
                            <div class="btn-action-group">
                                <!-- Status update trigger -->
                                <button type="button" class="btn-act btn-act-edit" onclick="openEnquiryModal('{{ $enquiry->id }}', '{{ addslashes($enquiry->ward_name) }}', '{{ $enquiry->status }}', '{{ addslashes($enquiry->admin_notes ?? '') }}')" title="Update Status & Remarks">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <!-- Delete form -->
                                <form action="{{ route('admin.admission-enquiries.destroy', $enquiry->id) }}" method="POST" class="m-0" data-confirm="Delete enquiry for '{{ addslashes($enquiry->ward_name) }}'?" data-confirm-title="Delete Admission Enquiry">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-act btn-act-del" title="Delete Enquiry">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-40">
                            <div class="empty-state-box p-30">
                                <i class="fa-solid fa-clipboard-question fs-36 text-muted mb-12"></i>
                                <h4 class="text-navy font-bold fs-16 mb-6">No admission enquiries found</h4>
                                <p class="text-muted fs-13 mb-16">Parent enquiry submissions from the website will appear here in real time.</p>
                                <a href="{{ route('admission-info') }}" target="_blank" class="btn-admin btn-primary">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    <span>View Public Enquiry Form</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($enquiries->hasPages())
        <div class="p-18 border-top">
            {{ $enquiries->links() }}
        </div>
        @endif
    </div>

</div>

<!-- Modal for Updating Status & Counselor Notes -->
<div id="enquiryModal" class="modal-backdrop" style="display: none; position: fixed; inset: 0; background: rgba(15, 23, 42, 0.6); z-index: 9999; align-items: center; justify-content: center; padding: 20px;">
    <div class="modal-box" style="background: #ffffff; width: 100%; max-width: 520px; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.2);">
        <div class="modal-head" style="background: #083B7A; color: #ffffff; padding: 18px 24px; display: flex; align-items: center; justify-content: space-between;">
            <h4 class="m-0 fs-16 font-extrabold text-white" id="modalWardTitle">
                <i class="fa-solid fa-clipboard-check text-orange me-2"></i> Update Enquiry Status
            </h4>
            <button type="button" onclick="closeEnquiryModal()" style="background: transparent; border: none; color: #ffffff; font-size: 18px; cursor: pointer;">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <form id="enquiryUpdateForm" method="POST" action="">
            @csrf
            @method('PATCH')
            <div style="padding: 24px;">
                <div class="form-group mb-18">
                    <label class="form-label" for="modalStatusSelect">
                        <span>Admission Status</span>
                        <span class="required">*</span>
                    </label>
                    <select id="modalStatusSelect" name="status" class="form-control" required>
                        @foreach(\App\Models\AdmissionEnquiry::STATUSES as $stKey => $st)
                        <option value="{{ $stKey }}">{{ $st['label'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-18">
                    <label class="form-label" for="modalAdminNotes">
                        <span>Counselor Remarks / Follow-up Notes</span>
                    </label>
                    <textarea id="modalAdminNotes" name="admin_notes" rows="4" class="form-control" placeholder="Record date of call, parent response, scheduled school visit, or admission outcome..."></textarea>
                </div>

                <div class="d-flex align-items-center justify-content-end gap-12 pt-12 border-top">
                    <button type="button" class="btn-admin btn-secondary" onclick="closeEnquiryModal()">Cancel</button>
                    <button type="submit" class="btn-admin btn-primary">
                        <i class="fa-solid fa-check"></i>
                        <span>Save Status</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
function openEnquiryModal(id, wardName, currentStatus, currentNotes) {
    const modal = document.getElementById('enquiryModal');
    const form = document.getElementById('enquiryUpdateForm');
    const title = document.getElementById('modalWardTitle');
    const select = document.getElementById('modalStatusSelect');
    const notes = document.getElementById('modalAdminNotes');

    form.action = "{{ url('admin/admission-enquiries') }}/" + id + "/status";
    title.innerHTML = '<i class="fa-solid fa-clipboard-check text-orange me-2"></i> Update Enquiry: ' + wardName;
    select.value = currentStatus;
    notes.value = currentNotes;

    modal.style.display = 'flex';
}

function closeEnquiryModal() {
    document.getElementById('enquiryModal').style.display = 'none';
}

// Close when clicking backdrop
document.getElementById('enquiryModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeEnquiryModal();
    }
});
</script>
@endsection
