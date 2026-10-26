@extends('layouts.admin')

@section('title', 'Edit Student Achievement · Advaita Admin')
@section('page_title', 'Edit Student Achievement')

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
            <i class="fa-solid fa-pen-to-square text-orange"></i>
            <span>Edit Student Achievement Record</span>
        </h3>

        <form action="{{ route('admin.results.update', $result->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-grid-2">
                <!-- Examination Category -->
                <div class="form-group">
                    <label class="form-label" for="category">
                        <span>Examination Category</span>
                        <span class="required">*</span>
                    </label>
                    <select id="category" name="category" class="form-control @error('category') is-invalid @enderror" required>
                        @foreach($categories as $key => $cat)
                            <option value="{{ $key }}" {{ old('category', $result->category) === $key ? 'selected' : '' }}>
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
                           value="{{ old('academic_year', $result->academic_year) }}" required maxlength="50" list="academicYearSuggestions">
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
                           value="{{ old('student_name', $result->student_name) }}" required maxlength="255">
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
                           value="{{ old('class_grade', $result->class_grade) }}" maxlength="100">
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
                           value="{{ old('title', $result->title) }}" required maxlength="255">
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
                           value="{{ old('exam_name', $result->exam_name) }}" required maxlength="255">
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
                           value="{{ old('score', $result->score) }}" maxlength="100">
                    @error('score')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Rank / Standing -->
                <div class="form-group">
                    <label class="form-label" for="rank">
                        <span>Rank / Standing</span>
                    </label>
                    <input type="text" id="rank" name="rank" class="form-control @error('rank') is-invalid @enderror"
                           value="{{ old('rank', $result->rank) }}" maxlength="150">
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
                           value="{{ old('order', $result->order) }}" min="0" required>
                    @error('order')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Current Photo Preview -->
                <div class="form-group">
                    <label class="form-label">Current Photo</label>
                    <div class="d-flex align-items-center gap-12">
                        <div style="width: 54px; height: 54px; border-radius: 50%; overflow: hidden; border: 2px solid #e2e8f0;">
                            <img src="{{ $result->photo_url }}" alt="{{ $result->student_name }}" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <input type="file" id="photo" name="photo" class="form-control" accept="image/*">
                    </div>
                </div>

                <!-- Certificate File Upload / Preview -->
                <div class="form-group full-width">
                    <label class="form-label" for="certificate">
                        <span>Certificate / Poster Document</span>
                        @if($result->certificate)
                            <a href="{{ $result->certificate_url }}" target="_blank" class="ms-8 text-blue font-bold fs-12">
                                <i class="fa-solid fa-file-arrow-down"></i> View current file
                            </a>
                        @endif
                    </label>
                    <input type="file" id="certificate" name="certificate" class="form-control" accept=".pdf,image/*">
                </div>

                <!-- Description / Citations -->
                <div class="form-group full-width">
                    <label class="form-label" for="description">
                        <span>Achievement Summary / Remarks</span>
                    </label>
                    <textarea id="description" name="description" rows="3" class="form-control @error('description') is-invalid @enderror">{{ old('description', $result->description) }}</textarea>
                    @error('description')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Featured Topper Checkbox -->
                <div class="form-group">
                    <label class="toggle-switch-card" for="is_featured">
                        <input type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $result->is_featured) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: #F37021;">
                        <div>
                            <div class="toggle-card-title d-flex align-items-center gap-6">
                                <i class="fa-solid fa-crown text-orange"></i>
                                <span>Featured District Topper Spotlight</span>
                            </div>
                            <div class="toggle-card-desc">Showcase prominently in the hero spotlight card on the Results page.</div>
                        </div>
                    </label>
                </div>

                <!-- Active Toggle -->
                <div class="form-group">
                    <label class="toggle-switch-card" for="is_active">
                        <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $result->is_active) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: #083B7A;">
                        <div>
                            <div class="toggle-card-title d-flex align-items-center gap-6">
                                <i class="fa-solid fa-globe text-blue"></i>
                                <span>Publish on Public Website</span>
                            </div>
                            <div class="toggle-card-desc">Enable visibility on the frontend Results &amp; Achievements directory.</div>
                        </div>
                    </label>
                </div>
            </div>

            <div class="form-actions mt-24">
                <button type="submit" class="btn-admin btn-primary">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Update Achievement</span>
                </button>
                <a href="{{ route('admin.results.index') }}" class="btn-admin btn-secondary">
                    <span>Cancel</span>
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
