@extends('layouts.admin')

@section('title', 'Add Class Fee Structure · Advaita Admin')
@section('page_title', 'Add Class Fee')

@section('content')
<div class="create-card-wrapper form-card-max900">
    <div class="mb-20">
        <a href="{{ route('admin.fee-structures.index') }}" class="btn-admin btn-secondary d-inline-flex">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Fee Structures</span>
        </a>
    </div>

    <div class="form-container-card">
        <h3 class="form-section-title">
            <i class="fa-solid fa-indian-rupee-sign text-orange"></i>
            <span>Configure Class Fee &amp; Installments</span>
        </h3>

        <form action="{{ route('admin.fee-structures.store') }}" method="POST">
            @csrf

            <div class="form-grid-2">
                <!-- Class Name -->
                <div class="form-group">
                    <label class="form-label" for="class_name">
                        <span>Class / Grade Name</span>
                        <span class="required">*</span>
                    </label>
                    <input type="text" id="class_name" name="class_name" class="form-control @error('class_name') is-invalid @enderror"
                           value="{{ old('class_name') }}" required placeholder="e.g. Class 1, Nursery, Class 9">
                    @error('class_name')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Wing -->
                <div class="form-group">
                    <label class="form-label" for="wing">
                        <span>School Wing</span>
                        <span class="required">*</span>
                    </label>
                    <select id="wing" name="wing" class="form-control @error('wing') is-invalid @enderror" required>
                        @foreach($wings as $wKey => $w)
                        <option value="{{ $wKey }}" {{ old('wing') === $wKey ? 'selected' : '' }}>
                            {{ $w['label'] }}
                        </option>
                        @endforeach
                    </select>
                    @error('wing')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Academic Year -->
                <div class="form-group">
                    <label class="form-label" for="academic_year">
                        <span>Academic Year</span>
                        <span class="required">*</span>
                    </label>
                    <input type="text" id="academic_year" name="academic_year" class="form-control @error('academic_year') is-invalid @enderror"
                           value="{{ old('academic_year', '2026-27') }}" required placeholder="e.g. 2026-27">
                    @error('academic_year')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Display Order -->
                <div class="form-group">
                    <label class="form-label" for="order">
                        <span>Display Order</span>
                        <span class="required">*</span>
                    </label>
                    <input type="number" id="order" name="order" class="form-control @error('order') is-invalid @enderror"
                           value="{{ old('order', $nextOrder) }}" min="0" required>
                    @error('order')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Admission Fee (One-time) -->
                <div class="form-group">
                    <label class="form-label" for="admission_fee">
                        <span>Admission Fee (₹)</span>
                        <span class="helper-hint">(One-time, non-refundable)</span>
                    </label>
                    <input type="number" id="admission_fee" name="admission_fee" class="form-control @error('admission_fee') is-invalid @enderror"
                           value="{{ old('admission_fee', 5000) }}" min="0" step="100">
                    @error('admission_fee')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Tuition Fee (Annual) -->
                <div class="form-group">
                    <label class="form-label" for="tuition_fee">
                        <span>Tuition Fee (₹)</span>
                        <span class="required">*</span>
                        <span class="helper-hint">(Core annual tuition)</span>
                    </label>
                    <input type="number" id="tuition_fee" name="tuition_fee" class="form-control @error('tuition_fee') is-invalid @enderror"
                           value="{{ old('tuition_fee', 45000) }}" min="0" step="100" required>
                    @error('tuition_fee')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Development Fee -->
                <div class="form-group">
                    <label class="form-label" for="development_fee">
                        <span>Development Fee (₹)</span>
                    </label>
                    <input type="number" id="development_fee" name="development_fee" class="form-control @error('development_fee') is-invalid @enderror"
                           value="{{ old('development_fee', 7000) }}" min="0" step="100">
                    @error('development_fee')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Exam Fee -->
                <div class="form-group">
                    <label class="form-label" for="exam_fee">
                        <span>Examination Fee (₹)</span>
                    </label>
                    <input type="number" id="exam_fee" name="exam_fee" class="form-control @error('exam_fee') is-invalid @enderror"
                           value="{{ old('exam_fee', 2500) }}" min="0" step="100">
                    @error('exam_fee')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Term 1 Installment -->
                <div class="form-group">
                    <label class="form-label" for="term1_fee">
                        <span>Term 1 Installment (₹)</span>
                        <span class="helper-hint">(Payable in June / at admission)</span>
                    </label>
                    <input type="number" id="term1_fee" name="term1_fee" class="form-control @error('term1_fee') is-invalid @enderror"
                           value="{{ old('term1_fee', 22000) }}" min="0" step="100">
                    @error('term1_fee')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Term 2 Installment -->
                <div class="form-group">
                    <label class="form-label" for="term2_fee">
                        <span>Term 2 Installment (₹)</span>
                        <span class="helper-hint">(Payable in October)</span>
                    </label>
                    <input type="number" id="term2_fee" name="term2_fee" class="form-control @error('term2_fee') is-invalid @enderror"
                           value="{{ old('term2_fee', 16250) }}" min="0" step="100">
                    @error('term2_fee')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Term 3 Installment -->
                <div class="form-group">
                    <label class="form-label" for="term3_fee">
                        <span>Term 3 Installment (₹)</span>
                        <span class="helper-hint">(Payable in January)</span>
                    </label>
                    <input type="number" id="term3_fee" name="term3_fee" class="form-control @error('term3_fee') is-invalid @enderror"
                           value="{{ old('term3_fee', 16250) }}" min="0" step="100">
                    @error('term3_fee')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remarks / Notes -->
                <div class="form-group">
                    <label class="form-label" for="notes">
                        <span>Special Inclusions / Notes</span>
                    </label>
                    <input type="text" id="notes" name="notes" class="form-control @error('notes') is-invalid @enderror"
                           value="{{ old('notes', 'Includes CBSE core curriculum & sports') }}" placeholder="e.g. Includes robotics lab, Abacus kit">
                    @error('notes')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-actions mt-24">
                <button type="submit" class="btn-admin btn-primary">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Save Class Fee Entry</span>
                </button>
                <a href="{{ route('admin.fee-structures.index') }}" class="btn-admin btn-secondary">
                    <span>Cancel</span>
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
