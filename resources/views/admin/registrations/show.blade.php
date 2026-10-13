@extends('layouts.admin')

@section('title', 'Application #' . $registration->application_no)
@section('page_title', 'Application Details')

@section('styles')
<style>
    .details-topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 24px;
        flex-wrap: wrap;
        gap: 16px;
    }

    .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--admin-navy);
        text-decoration: none;
        font-weight: 700;
        font-size: 13.5px;
    }

    .status-action-box {
        display: flex;
        align-items: center;
        gap: 12px;
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 12px;
        padding: 8px 16px;
    }

    .details-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 24px;
    }

    @media (max-width: 992px) {
        .details-grid {
            grid-template-columns: 1fr;
        }
    }

    .section-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        padding: 24px;
        margin-bottom: 24px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
    }

    .section-card-head {
        display: flex;
        align-items: center;
        gap: 10px;
        border-bottom: 1px solid var(--admin-border);
        padding-bottom: 14px;
        margin-bottom: 20px;
    }

    .section-card-head i {
        font-size: 18px;
        color: var(--admin-orange);
    }

    .section-card-head h3 {
        font-size: 16px;
        font-weight: 800;
        color: var(--admin-navy-deep);
    }

    .field-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
        margin-bottom: 14px;
    }

    @media (max-width: 600px) {
        .field-row {
            grid-template-columns: 1fr;
        }
    }

    .field-item {
        font-size: 13.5px;
    }

    .field-label {
        font-size: 11.5px;
        font-weight: 700;
        text-transform: uppercase;
        color: #64748B;
        letter-spacing: 0.5px;
        margin-bottom: 3px;
    }

    .field-val {
        font-weight: 600;
        color: #0F172A;
    }

    .doc-link-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 14px;
        border-radius: 8px;
        background: #F1F5F9;
        color: #0F172A;
        text-decoration: none;
        font-size: 12.5px;
        font-weight: 600;
        margin-top: 6px;
    }

    .doc-link-pill:hover {
        background: #E2E8F0;
    }
</style>
@endsection

@section('content')

<div class="details-topbar">
    <a href="{{ route('admin.registrations.index') }}" class="btn-back">
        <i class="fa-solid fa-arrow-left"></i>
        <span>Back to Registrations</span>
    </a>

    <div class="status-action-box">
        <span style="font-size: 13px; font-weight: 700; color: #64748B;">Application Status:</span>
        <form action="{{ route('admin.registrations.status', $registration->id) }}" method="POST" style="margin: 0; display: flex; gap: 8px;">
            @csrf
            @method('PATCH')
            <select name="status" class="filter-input" style="padding: 6px 12px; font-size: 13px;">
                <option value="submitted" {{ $registration->status == 'submitted' ? 'selected' : '' }}>Submitted</option>
                <option value="under_review" {{ $registration->status == 'under_review' ? 'selected' : '' }}>Under Review</option>
                <option value="approved" {{ $registration->status == 'approved' ? 'selected' : '' }}>Approved</option>
                <option value="rejected" {{ $registration->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
            <button type="submit" class="btn-filter" style="padding: 6px 14px; font-size: 12px;">Update</button>
        </form>
    </div>
</div>

<div class="details-grid">
    <!-- Left Main Column -->
    <div>
        <!-- Step 1: Admission & Academic Details -->
        <div class="section-card">
            <div class="section-card-head">
                <i class="fa-solid fa-graduation-cap"></i>
                <h3>Admission &amp; Academic Details</h3>
            </div>

            <div class="field-row">
                <div class="field-item">
                    <div class="field-label">Application Number</div>
                    <div class="field-val" style="color: var(--admin-navy); font-size: 15px;">{{ $registration->application_no }}</div>
                </div>
                <div class="field-item">
                    <div class="field-label">Academic Year</div>
                    <div class="field-val">{{ $registration->academic_year ?? '2026-2027' }}</div>
                </div>
            </div>

            <div class="field-row">
                <div class="field-item">
                    <div class="field-label">Applying For Class</div>
                    <div class="field-val">
                        <span class="class-pill">{{ $registration->applying_class }}</span>
                    </div>
                </div>
                <div class="field-item">
                    <div class="field-label">Parent Course / Stream</div>
                    <div class="field-val">{{ $registration->parent_course ?? 'General CBSE' }}</div>
                </div>
            </div>

            <div class="field-row">
                <div class="field-item">
                    <div class="field-label">Previous School</div>
                    <div class="field-val">{{ $registration->prev_school_name ?? 'N/A' }}</div>
                </div>
                <div class="field-item">
                    <div class="field-label">Previous Qualification / Score</div>
                    <div class="field-val">{{ $registration->highest_qualification ?? 'N/A' }} ({{ $registration->percentage ?? '-' }})</div>
                </div>
            </div>
        </div>

        <!-- Step 2: Student Personal Details -->
        <div class="section-card">
            <div class="section-card-head">
                <i class="fa-solid fa-user"></i>
                <h3>Student Personal Details</h3>
            </div>

            <div class="field-row">
                <div class="field-item">
                    <div class="field-label">Student Full Name</div>
                    <div class="field-val" style="font-size: 15px;">{{ $registration->full_name }}</div>
                </div>
                <div class="field-item">
                    <div class="field-label">Gender</div>
                    <div class="field-val">{{ $registration->gender ?? 'N/A' }}</div>
                </div>
            </div>

            <div class="field-row">
                <div class="field-item">
                    <div class="field-label">Date of Birth</div>
                    <div class="field-val">{{ $registration->dob ? date('d F Y', strtotime($registration->dob)) : 'N/A' }}</div>
                </div>
                <div class="field-item">
                    <div class="field-label">Blood Group</div>
                    <div class="field-val">{{ $registration->blood_group ?? 'N/A' }}</div>
                </div>
            </div>

            <div class="field-row">
                <div class="field-item">
                    <div class="field-label">Aadhaar Number</div>
                    <div class="field-val">{{ $registration->aadhar_no ?? 'N/A' }}</div>
                </div>
                <div class="field-item">
                    <div class="field-label">Religion / Category</div>
                    <div class="field-val">{{ $registration->religion ?? 'N/A' }} ({{ $registration->caste ?? '-' }})</div>
                </div>
            </div>
        </div>

        <!-- Step 3: Parent & Contact Details -->
        <div class="section-card">
            <div class="section-card-head">
                <i class="fa-solid fa-users"></i>
                <h3>Parent &amp; Family Information</h3>
            </div>

            <div class="field-row">
                <div class="field-item">
                    <div class="field-label">Father's Name</div>
                    <div class="field-val">{{ $registration->father_name ?? 'N/A' }}</div>
                </div>
                <div class="field-item">
                    <div class="field-label">Father's Occupation &amp; Phone</div>
                    <div class="field-val">{{ $registration->father_occupation ?? 'N/A' }} &middot; {{ $registration->father_phone ?? '-' }}</div>
                </div>
            </div>

            <div class="field-row">
                <div class="field-item">
                    <div class="field-label">Mother's Name</div>
                    <div class="field-val">{{ $registration->mother_name ?? 'N/A' }}</div>
                </div>
                <div class="field-item">
                    <div class="field-label">Mother's Occupation &amp; Phone</div>
                    <div class="field-val">{{ $registration->mother_occupation ?? 'N/A' }} &middot; {{ $registration->mother_phone ?? '-' }}</div>
                </div>
            </div>

            <div class="field-row">
                <div class="field-item">
                    <div class="field-label">Residential Address</div>
                    <div class="field-val">{{ $registration->residential_address ?? 'N/A' }}, {{ $registration->city ?? '' }}, {{ $registration->pincode ?? '' }}</div>
                </div>
                <div class="field-item">
                    <div class="field-label">Transportation Required</div>
                    <div class="field-val">{{ $registration->transportation_required ?? 'No' }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Sidebar Column -->
    <div>
        <!-- Application Meta Card -->
        <div class="section-card">
            <div class="section-card-head">
                <i class="fa-solid fa-info-circle"></i>
                <h3>Meta Information</h3>
            </div>

            <div style="margin-bottom: 12px;">
                <div class="field-label">Submitted On</div>
                <div class="field-val">{{ $registration->created_at->format('d M Y, h:i A') }}</div>
            </div>

            <div style="margin-bottom: 12px;">
                <div class="field-label">Registered Phone</div>
                <div class="field-val">{{ $registration->phone }}</div>
            </div>

            <div style="margin-bottom: 12px;">
                <div class="field-label">Registered Email</div>
                <div class="field-val">{{ $registration->email ?? 'N/A' }}</div>
            </div>

            <div style="margin-bottom: 12px;">
                <div class="field-label">Current Status</div>
                <span class="status-badge status-{{ $registration->status }}">
                    {{ ucfirst(str_replace('_', ' ', $registration->status)) }}
                </span>
            </div>

            <hr style="border: none; border-top: 1px solid var(--admin-border); margin: 16px 0;">

            <button type="button" onclick="window.print()" class="btn-filter" style="width: 100%; justify-content: center; background: #334155;">
                <i class="fa-solid fa-print"></i>
                <span>Print Application</span>
            </button>
        </div>

        <!-- Uploaded Documents Card -->
        <div class="section-card">
            <div class="section-card-head">
                <i class="fa-solid fa-file-arrow-up"></i>
                <h3>Uploaded Documents</h3>
            </div>

            @if($registration->student_photo_path)
            <div style="margin-bottom: 14px;">
                <div class="field-label">Student Photo</div>
                <a href="{{ asset('storage/' . $registration->student_photo_path) }}" target="_blank" class="doc-link-pill">
                    <i class="fa-solid fa-image"></i>
                    <span>View Student Photo</span>
                </a>
            </div>
            @endif

            @if($registration->prev_marksheet_path)
            <div style="margin-bottom: 14px;">
                <div class="field-label">Previous Marksheet</div>
                <a href="{{ asset('storage/' . $registration->prev_marksheet_path) }}" target="_blank" class="doc-link-pill">
                    <i class="fa-solid fa-file-pdf"></i>
                    <span>View Marksheet</span>
                </a>
            </div>
            @endif

            @if($registration->transfer_certificate_path)
            <div style="margin-bottom: 14px;">
                <div class="field-label">Transfer Certificate</div>
                <a href="{{ asset('storage/' . $registration->transfer_certificate_path) }}" target="_blank" class="doc-link-pill">
                    <i class="fa-solid fa-file-lines"></i>
                    <span>View Transfer Certificate</span>
                </a>
            </div>
            @endif

            @if(!$registration->student_photo_path && !$registration->prev_marksheet_path && !$registration->transfer_certificate_path)
            <div style="color: #94A3B8; font-size: 13px;">No documents attached during registration.</div>
            @endif
        </div>
    </div>
</div>

@endsection
