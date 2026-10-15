@extends('layouts.admin')

@section('title', 'Application #' . $registration->application_no)
@section('page_title', 'Application Details')



@section('content')

<div class="details-topbar">
    <a href="{{ route('admin.registrations.index') }}" class="btn-back">
        <i class="fa-solid fa-arrow-left"></i>
        <span>Back to Registrations</span>
    </a>

    <div class="status-action-box">
        <span class="text-muted fs-13 font-bold">Application Status:</span>
        <form action="{{ route('admin.registrations.status', $registration->id) }}" method="POST" class="m-0 d-flex gap-8">
            @csrf
            @method('PATCH')
            <select name="status" class="filter-input btn-pad-md-sm">
                <option value="submitted" {{ $registration->status == 'submitted' ? 'selected' : '' }}>Submitted</option>
                <option value="under_review" {{ $registration->status == 'under_review' ? 'selected' : '' }}>Under Review</option>
                <option value="approved" {{ $registration->status == 'approved' ? 'selected' : '' }}>Approved</option>
                <option value="rejected" {{ $registration->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
            <button type="submit" class="btn-filter btn-pad-md-sm">Update</button>
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
                    <div class="field-val text-navy fs-15">{{ $registration->application_no }}</div>
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
                    <div class="field-val fs-15">{{ $registration->full_name }}</div>
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

            <div class="mb-12">
                <div class="field-label">Submitted On</div>
                <div class="field-val">{{ $registration->created_at->format('d M Y, h:i A') }}</div>
            </div>

            <div class="mb-12">
                <div class="field-label">Registered Phone</div>
                <div class="field-val">{{ $registration->phone }}</div>
            </div>

            <div class="mb-12">
                <div class="field-label">Registered Email</div>
                <div class="field-val">{{ $registration->email ?? 'N/A' }}</div>
            </div>

            <div class="mb-12">
                <div class="field-label">Current Status</div>
                <span class="status-badge status-{{ $registration->status }}">
                    {{ ucfirst(str_replace('_', ' ', $registration->status)) }}
                </span>
            </div>

            <hr class="divider-subtle">

            <button type="button" onclick="window.print()" class="btn-filter btn-dark-slate">
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
            <div class="mb-14">
                <div class="field-label">Student Photo</div>
                <a href="{{ asset('storage/' . $registration->student_photo_path) }}" target="_blank" class="doc-link-pill">
                    <i class="fa-solid fa-image"></i>
                    <span>View Student Photo</span>
                </a>
            </div>
            @endif

            @if($registration->prev_marksheet_path)
            <div class="mb-14">
                <div class="field-label">Previous Marksheet</div>
                <a href="{{ asset('storage/' . $registration->prev_marksheet_path) }}" target="_blank" class="doc-link-pill">
                    <i class="fa-solid fa-file-pdf"></i>
                    <span>View Marksheet</span>
                </a>
            </div>
            @endif

            @if($registration->transfer_certificate_path)
            <div class="mb-14">
                <div class="field-label">Transfer Certificate</div>
                <a href="{{ asset('storage/' . $registration->transfer_certificate_path) }}" target="_blank" class="doc-link-pill">
                    <i class="fa-solid fa-file-lines"></i>
                    <span>View Transfer Certificate</span>
                </a>
            </div>
            @endif

            @if(!$registration->student_photo_path && !$registration->prev_marksheet_path && !$registration->transfer_certificate_path)
            <div class="text-muted fs-13">No documents attached during registration.</div>
            @endif
        </div>
    </div>
</div>

@endsection
