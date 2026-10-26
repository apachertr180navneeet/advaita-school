@extends('layouts.admin')

@section('title', 'Add Academic Programme · Advaita Admin')
@section('page_title', 'Add Academic Programme')

@section('content')
<div class="create-card-wrapper form-card-max900">
    <div class="mb-20">
        <a href="{{ route('admin.academic-programmes.index') }}" class="btn-admin btn-secondary d-inline-flex">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Programmes</span>
        </a>
    </div>

    <div class="form-container-card">
        <h3 class="form-section-title">
            <i class="fa-solid fa-book-open-reader text-orange"></i>
            <span>Create New Academic Programme</span>
        </h3>

        <form action="{{ route('admin.academic-programmes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-grid-2">
                <!-- Academic Stage -->
                <div class="form-group">
                    <label class="form-label" for="stage">
                        <span>Academic Stage</span>
                        <span class="required">*</span>
                    </label>
                    <select id="stage" name="stage" class="form-control @error('stage') is-invalid @enderror" required>
                        @foreach($stages as $key => $s)
                            <option value="{{ $key }}" {{ old('stage') === $key ? 'selected' : '' }}>
                                {{ $s['label'] }} ({{ $s['classes'] }})
                            </option>
                        @endforeach
                    </select>
                    @error('stage')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Classes / Grade Level -->
                <div class="form-group">
                    <label class="form-label" for="classes">
                        <span>Classes / Target Grades</span>
                        <span class="helper-hint">(e.g. Classes 1 to 5, Nursery - UKG)</span>
                    </label>
                    <input type="text" id="classes" name="classes" class="form-control @error('classes') is-invalid @enderror"
                           value="{{ old('classes') }}" placeholder="e.g. Classes 6 to 10" maxlength="150">
                    @error('classes')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Programme Title -->
                <div class="form-group full-width">
                    <label class="form-label" for="title">
                        <span>Programme Title</span>
                        <span class="required">*</span>
                    </label>
                    <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title') }}" required placeholder="e.g. NEET / IIT Foundation Programme" maxlength="255">
                    @error('title')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Subtitle / Tagline -->
                <div class="form-group full-width">
                    <label class="form-label" for="subtitle">
                        <span>Subtitle / Tagline</span>
                    </label>
                    <input type="text" id="subtitle" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror"
                           value="{{ old('subtitle') }}" placeholder="e.g. Early Career Readiness & Advanced Problem Solving" maxlength="255">
                    @error('subtitle')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Badge Text -->
                <div class="form-group">
                    <label class="form-label" for="badge_text">
                        <span>Badge Text</span>
                        <span class="helper-hint">(e.g. Featured Track, Brain Math)</span>
                    </label>
                    <input type="text" id="badge_text" name="badge_text" class="form-control @error('badge_text') is-invalid @enderror"
                           value="{{ old('badge_text') }}" placeholder="e.g. Specialized Career Track" maxlength="100">
                    @error('badge_text')
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

                <!-- Description -->
                <div class="form-group full-width">
                    <label class="form-label" for="description">
                        <span>Comprehensive Description</span>
                    </label>
                    <textarea id="description" name="description" rows="4" class="form-control @error('description') is-invalid @enderror"
                              placeholder="Detail the curriculum design, pedagogical methodology, and learning outcomes...">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Key Highlights (One per line) -->
                <div class="form-group">
                    <label class="form-label" for="features_text">
                        <span>Key Highlights / Features</span>
                        <span class="helper-hint">(Enter one item per line)</span>
                    </label>
                    <textarea id="features_text" name="features_text" rows="5" class="form-control font-mono fs-13"
                              placeholder="Integrated Curriculum with CBSE School Timetable&#10;Weekly Concept Revision & Mock Tests&#10;Error Analysis & Doubts Solving">{{ old('features_text') }}</textarea>
                </div>

                <!-- Subjects Offered (One per line) -->
                <div class="form-group">
                    <label class="form-label" for="subjects_text">
                        <span>Subjects / Focus Areas</span>
                        <span class="helper-hint">(Enter one item per line)</span>
                    </label>
                    <textarea id="subjects_text" name="subjects_text" rows="5" class="form-control font-mono fs-13"
                              placeholder="Physics Fundamentals&#10;Mathematics & Kinematics&#10;Logical Reasoning & Mental Ability">{{ old('subjects_text') }}</textarea>
                </div>

                <!-- Feature Photo Upload -->
                <div class="form-group full-width">
                    <label class="form-label" for="image">
                        <span>Programme Image</span>
                        <span class="helper-hint">(JPG, PNG, WEBP · Max 5MB)</span>
                    </label>
                    <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                    @error('image')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Active Toggle -->
                <div class="form-group full-width">
                    <label class="d-flex align-items-center gap-10 cursor-pointer">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} style="width: 18px; height: 18px;">
                        <span class="font-bold text-navy">Publish and display this programme on website</span>
                    </label>
                </div>
            </div>

            <div class="form-actions mt-24">
                <button type="submit" class="btn-admin btn-primary">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Save Programme</span>
                </button>
                <a href="{{ route('admin.academic-programmes.index') }}" class="btn-admin btn-secondary">
                    <span>Cancel</span>
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
