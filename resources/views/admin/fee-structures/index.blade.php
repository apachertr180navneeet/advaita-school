@extends('layouts.admin')

@section('title', 'Class-wise Fee Structure · Advaita Admin')
@section('page_title', 'Fee Structure Management')

@section('content')
<div class="academic-mgmt-wrapper">

    <!-- 1. Top Header Action Bar -->
    <div class="academic-top-bar">
        <div class="cph-title-wrap">
            <div class="cph-icon-box">
                <i class="fa-solid fa-indian-rupee-sign"></i>
            </div>
            <div class="academic-top-title">
                <h3>Class-wise Fee Structure CMS</h3>
                <p>Manage tuition fees, development charges, term installment schedules, and public review notices.</p>
            </div>
        </div>
        <div class="d-flex align-items-center gap-12 flex-wrap">
            <a href="{{ route('fee-structure') }}" target="_blank" class="btn-admin btn-secondary" title="View live fee structure page">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>Live Fee Page</span>
            </a>
            <a href="{{ route('admin.fee-structures.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add Class Fee</span>
            </a>
        </div>
    </div>

    <!-- 2. Global Management Notice & Publish Status Banner -->
    <div class="cards-table-card p-24 mb-24" style="background: {{ $isPublished ? '#F0FDF4' : '#FFFBEB' }}; border-color: {{ $isPublished ? '#BBF7D0' : '#FDE68A' }};">
        <div class="d-flex align-items-center justify-content-between gap-16 flex-wrap">
            <div class="d-flex align-items-center gap-14">
                <div style="width: 44px; height: 44px; border-radius: 12px; background: {{ $isPublished ? '#DCFCE7' : '#FEF3C7' }}; color: {{ $isPublished ? '#15803D' : '#B45309' }}; display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                    <i class="fa-solid {{ $isPublished ? 'fa-circle-check' : 'fa-triangle-exclamation' }}"></i>
                </div>
                <div>
                    <div class="d-flex align-items-center gap-8 flex-wrap">
                        <h4 class="m-0 font-extrabold fs-16" style="color: {{ $isPublished ? '#14532D' : '#78350F' }};">
                            Fee Visibility: {{ $isPublished ? 'Published Live on Website' : 'Hidden — Showing Official Review Notice' }}
                        </h4>
                        <span class="badge-neutral font-bold">Academic Session {{ $academicYear }}</span>
                        <span class="badge-neutral font-bold">Last Updated: {{ $lastUpdated }}</span>
                    </div>
                    <p class="m-0 mt-4 fs-13" style="color: {{ $isPublished ? '#166534' : '#92400E' }};">
                        @if($isPublished)
                        The verified class-wise fee table and term installment breakdowns are actively visible to parents on the public website.
                        @else
                        {{ $pendingNotice }}
                        @endif
                    </p>
                </div>
            </div>

            <div class="d-flex align-items-center gap-10">
                <form action="{{ route('admin.fee-structures.toggle-publish') }}" method="POST" class="m-0">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn-admin {{ $isPublished ? 'btn-secondary' : 'btn-primary' }}" style="padding: 10px 18px;">
                        <i class="fa-solid {{ $isPublished ? 'fa-eye-slash' : 'fa-bullhorn' }}"></i>
                        <span>{{ $isPublished ? 'Switch to Review Notice' : 'Publish Fee Tables Live' }}</span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- 3. Wing Filter Pills Bar -->
    <div class="d-flex align-items-center justify-content-between gap-16 flex-wrap mb-16">
        <div class="stage-filter-pills-bar m-0 flex-grow-1">
            <a href="{{ route('admin.fee-structures.index') }}" class="btn-stage-pill {{ empty($selectedWing) ? 'active' : '' }}">
                <i class="fa-solid fa-layer-group"></i>
                <span>All Classes</span>
                <span class="pill-badge">{{ $feeStructures->count() }}</span>
            </a>
            @foreach($wings as $wKey => $w)
            <a href="{{ route('admin.fee-structures.index', ['wing' => $wKey]) }}" class="btn-stage-pill {{ $selectedWing === $wKey ? 'active' : '' }}">
                <i class="fa-solid fa-graduation-cap"></i>
                <span>{{ $w['label'] }}</span>
                <span class="pill-badge">{{ $feeStructures->where('wing', $wKey)->count() }}</span>
            </a>
            @endforeach
        </div>
    </div>

    <!-- 4. Class-wise Fee Table Card -->
    <div class="cards-table-card">
        <div class="table-top-actions-bar">
            <div class="d-flex align-items-center gap-12 flex-wrap">
                <h3 class="text-navy fs-16 font-extrabold d-flex align-items-center gap-8 m-0">
                    <i class="fa-solid fa-table-list text-orange"></i>
                    <span>Class-wise Annual &amp; Term Installments ({{ $feeStructures->count() }} Entries)</span>
                </h3>
            </div>
        </div>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 65px; text-align: center;">Order</th>
                        <th>Class &amp; Wing</th>
                        <th style="width: 120px; text-align: right;">Tuition Fee</th>
                        <th style="width: 110px; text-align: right;">Dev. Fee</th>
                        <th style="width: 100px; text-align: right;">Exam Fee</th>
                        <th style="width: 130px; text-align: right;">Annual Total</th>
                        <th style="width: 220px; text-align: center;">Term Installments (T1 / T2 / T3)</th>
                        <th style="width: 100px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($feeStructures as $fee)
                    <tr>
                        <td style="text-align: center;">
                            <span class="badge-neutral font-bold">#{{ $fee->order }}</span>
                        </td>

                        <!-- Class & Wing -->
                        <td>
                            <div class="font-extrabold text-navy fs-15">{{ $fee->class_name }}</div>
                            <span class="badge-stage {{ $fee->wing === 'pre_primary' ? 'pre_primary' : ($fee->wing === 'primary' ? 'primary' : 'secondary') }} mt-2">
                                {{ $wings[$fee->wing]['label'] ?? ucfirst($fee->wing) }}
                            </span>
                        </td>

                        <!-- Tuition -->
                        <td style="text-align: right;" class="font-bold text-dark">
                            ₹ {{ number_format($fee->tuition_fee, 0) }}
                        </td>

                        <!-- Development -->
                        <td style="text-align: right;" class="text-muted">
                            ₹ {{ number_format($fee->development_fee, 0) }}
                        </td>

                        <!-- Exam -->
                        <td style="text-align: right;" class="text-muted">
                            ₹ {{ number_format($fee->exam_fee, 0) }}
                        </td>

                        <!-- Total -->
                        <td style="text-align: right;">
                            <span class="score-badge font-extrabold fs-14">
                                ₹ {{ number_format($fee->annual_total ?: ($fee->tuition_fee + $fee->development_fee + $fee->exam_fee), 0) }}
                            </span>
                        </td>

                        <!-- Terms -->
                        <td style="text-align: center;">
                            <div class="d-inline-flex align-items-center gap-6 fs-12">
                                <span class="badge-neutral font-bold" title="Term 1 (At Admission / June)">T1: ₹{{ number_format($fee->term1_fee, 0) }}</span>
                                <span class="badge-neutral font-bold" title="Term 2 (October)">T2: ₹{{ number_format($fee->term2_fee, 0) }}</span>
                                <span class="badge-neutral font-bold" title="Term 3 (January)">T3: ₹{{ number_format($fee->term3_fee, 0) }}</span>
                            </div>
                        </td>

                        <!-- Actions -->
                        <td style="text-align: right;">
                            <div class="btn-action-group">
                                <a href="{{ route('admin.fee-structures.edit', $fee->id) }}" class="btn-act btn-act-edit" title="Edit Fee Entry">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.fee-structures.destroy', $fee->id) }}" method="POST" class="m-0" data-confirm="Delete fee structure for '{{ $fee->class_name }}'?" data-confirm-title="Delete Fee Entry">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-act btn-act-del" title="Delete Fee Entry">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center py-40">
                            <div class="empty-state-box p-30">
                                <i class="fa-solid fa-indian-rupee-sign fs-36 text-muted mb-12"></i>
                                <h4 class="text-navy font-bold fs-16 mb-6">No class fee structures configured</h4>
                                <p class="text-muted fs-13 mb-16">Add approved class-wise fees and installment plans to display on the school portal.</p>
                                <a href="{{ route('admin.fee-structures.create') }}" class="btn-admin btn-primary">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Add Class Fee</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- 5. Global Fee Settings Form Card -->
    <div class="cards-table-card p-24 mt-24">
        <h3 class="form-section-title mb-18">
            <i class="fa-solid fa-sliders text-orange"></i>
            <span>Global Academic Year &amp; Management Review Policy Text</span>
        </h3>

        <form action="{{ route('admin.fee-structures.global-settings') }}" method="POST">
            @csrf
            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label" for="academic_year">
                        <span>Current Academic Session</span>
                        <span class="required">*</span>
                    </label>
                    <input type="text" id="academic_year" name="academic_year" value="{{ old('academic_year', $academicYear) }}" class="form-control" required placeholder="e.g. 2026–27">
                </div>

                <div class="form-group full-width">
                    <label class="form-label" for="pending_notice">
                        <span>Official Review / Pending Message (Displayed when fees are under review)</span>
                        <span class="required">*</span>
                    </label>
                    <textarea id="pending_notice" name="pending_notice" rows="3" class="form-control" required>{{ old('pending_notice', $pendingNotice) }}</textarea>
                    <span class="helper-hint fs-12 text-muted mt-2">This official message informs parents when management has not yet finalized next session fees, preventing unapproved figures from publishing.</span>
                </div>
            </div>

            <div class="form-actions mt-18">
                <button type="submit" class="btn-admin btn-primary">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Save Global Policy Settings</span>
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
