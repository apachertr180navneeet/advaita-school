@extends('layouts.admin')

@section('title', 'Add Student Achievement · Advaita Admin')
@section('page_title', 'Add Student Achievement')

@section('content')
<div class="create-card-wrapper form-card-max900">
    <div class="mb-20">
        <a href="{{ route('admin.results.index') }}" class="btn-admin btn-secondary d-inline-flex">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Results &amp; Achievements</span>
        </a>
    </div>

    <div class="form-container-card">
        <h3 class="form-section-title">
            <i class="fa-solid fa-trophy text-orange"></i>
            <span>Add Student Achievement Record</span>
        </h3>

        <form action="{{ route('admin.results.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-grid-2">
                <!-- Examination Category -->
                <div class="form-group">
                    <label class="form-label" for="category">
                        <span>Examination Category</span>
                        <span class="required">*</span>
                    </label>
                    <select id="category" name="category" class="form-control @error('category') is-invalid @enderror" required>
                        @foreach($categories as $key => $cat)
                            <option value="{{ $key }}" {{ old('category') === $key ? 'selected' : '' }}>
                                {{ $cat['label'] }}
                            </option>
                        @endforeach
                    </select>
                    @error('category')
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
                           value="{{ old('academic_year', '2025-26') }}" required placeholder="e.g. 2025-26" maxlength="50" list="academicYearSuggestions">
                    <datalist id="academicYearSuggestions">
                        @foreach($academicYears as $yr)
                            <option value="{{ $yr }}">
                        @endforeach
                    </datalist>
                    @error('academic_year')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Student Full Name -->
                <div class="form-group">
                    <label class="form-label" for="student_name">
                        <span>Student Full Name</span>
                        <span class="required">*</span>
                    </label>
                    <input type="text" id="student_name" name="student_name" class="form-control @error('student_name') is-invalid @enderror"
                           value="{{ old('student_name') }}" required placeholder="e.g. Om Dhoot" maxlength="255">
                    @error('student_name')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Class / Grade -->
                <div class="form-group">
                    <label class="form-label" for="class_grade">
                        <span>Class / Grade</span>
                    </label>
                    <input type="text" id="class_grade" name="class_grade" class="form-control @error('class_grade') is-invalid @enderror"
                           value="{{ old('class_grade') }}" placeholder="e.g. Class 10, Class 5" maxlength="100">
                    @error('class_grade')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Achievement Title -->
                <div class="form-group full-width">
                    <label class="form-label" for="title">
                        <span>Achievement Title</span>
                        <span class="required">*</span>
                    </label>
                    <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title') }}" required placeholder="e.g. CBSE Class 10th District 1st Rank" maxlength="255">
                    @error('title')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Examination Name -->
                <div class="form-group full-width">
                    <label class="form-label" for="exam_name">
                        <span>Official Examination Name</span>
                        <span class="required">*</span>
                    </label>
                    <input type="text" id="exam_name" name="exam_name" class="form-control @error('exam_name') is-invalid @enderror"
                           value="{{ old('exam_name') }}" required placeholder="e.g. CBSE Class X All-India Secondary School Examination" maxlength="255">
                    @error('exam_name')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Score / Percentage -->
                <div class="form-group">
                    <label class="form-label" for="score">
                        <span>Score / Percentage</span>
                    </label>
                    <input type="text" id="score" name="score" class="form-control @error('score') is-invalid @enderror"
                           value="{{ old('score') }}" placeholder="e.g. 98.40%, 100/100, Gold Medal" maxlength="100">
                    @error('score')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Rank / Standing -->
                <div class="form-group">
                    <label class="form-label" for="rank">
                        <span>Rank / Honor</span>
                    </label>
                    <input type="text" id="rank" name="rank" class="form-control @error('rank') is-invalid @enderror"
                           value="{{ old('rank') }}" placeholder="e.g. District 1st Topper, State Rank 2" maxlength="150">
                    @error('rank')
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

                <!-- Student Photograph Upload -->
                <div class="form-group">
                    <label class="form-label" for="photo">
                        <span>Student Photograph</span>
                        <span class="helper-hint">(Square crop recommended · Max 5MB)</span>
                    </label>
                    <input type="file" id="photo" name="photo" class="form-control @error('photo') is-invalid @enderror" accept="image/*">
                    @error('photo')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Certificate / Poster Document Upload -->
                <div class="form-group full-width">
                    <label class="form-label" for="certificate">
                        <span>Certificate / Result Poster File</span>
                        <span class="helper-hint">(PDF, JPG, PNG · Max 10MB)</span>
                    </label>
                    <input type="file" id="certificate" name="certificate" class="form-control @error('certificate') is-invalid @enderror" accept=".pdf,image/*">
                    @error('certificate')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Description / Citations -->
                <div class="form-group full-width">
                    <label class="form-label" for="description">
                        <span>Achievement Summary / Remarks</span>
                    </label>
                    <textarea id="description" name="description" rows="3" class="form-control @error('description') is-invalid @enderror"
                              placeholder="Detail subject breakdown, specific honors, or mentor remarks...">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Featured Topper Checkbox -->
                <div class="form-group">
                    <label class="d-flex align-items-center gap-10 cursor-pointer">
                        <input type="checkbox" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }} style="width: 18px; height: 18px;">
                        <span class="font-bold text-navy">Highlight as Featured Topper (Top of Results Page)</span>
                    </label>
                </div>

                <!-- Active Toggle -->
                <div class="form-group">
                    <label class="d-flex align-items-center gap-10 cursor-pointer">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} style="width: 18px; height: 18px;">
                        <span class="font-bold text-navy">Publish achievement on public website</span>
                    </label>
                </div>
            </div>

            <div class="form-actions mt-24">
                <button type="submit" class="btn-admin btn-primary">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Save Achievement</span>
                </button>
                <a href="{{ route('admin.results.index') }}" class="btn-admin btn-secondary">
                    <span>Cancel</span>
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
