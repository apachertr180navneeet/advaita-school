@extends('layouts.admin')

@section('title', 'Edit Academic Programme · Advaita Admin')
@section('page_title', 'Edit Academic Programme')

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
            <i class="fa-solid fa-pen-to-square text-orange"></i>
            <span>Edit Academic Programme</span>
        </h3>

        <form action="{{ route('admin.academic-programmes.update', $programme->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-grid-2">
                <!-- Academic Stage -->
                <div class="form-group">
                    <label class="form-label" for="stage">
                        <span>Academic Stage</span>
                        <span class="required">*</span>
                    </label>
                    <select id="stage" name="stage" class="form-control @error('stage') is-invalid @enderror" required>
                        @foreach($stages as $key => $s)
                            <option value="{{ $key }}" {{ old('stage', $programme->stage) === $key ? 'selected' : '' }}>
                                {{ $s['label'] }} ({{ $s['classes'] }})
                            </option>
                        @endforeach
                    </select>
                    @error('stage')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Classes / Target Grades -->
                <div class="form-group">
                    <label class="form-label" for="classes">
                        <span>Classes / Target Grades</span>
                    </label>
                    <input type="text" id="classes" name="classes" class="form-control @error('classes') is-invalid @enderror"
                           value="{{ old('classes', $programme->classes) }}" maxlength="150">
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
                           value="{{ old('title', $programme->title) }}" required maxlength="255">
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
                           value="{{ old('subtitle', $programme->subtitle) }}" maxlength="255">
                    @error('subtitle')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Badge Text -->
                <div class="form-group">
                    <label class="form-label" for="badge_text">
                        <span>Badge Text</span>
                    </label>
                    <input type="text" id="badge_text" name="badge_text" class="form-control @error('badge_text') is-invalid @enderror"
                           value="{{ old('badge_text', $programme->badge_text) }}" maxlength="100">
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
                           value="{{ old('order', $programme->order) }}" min="0" required>
                    @error('order')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Description -->
                <div class="form-group full-width">
                    <label class="form-label" for="description">
                        <span>Comprehensive Description</span>
                    </label>
                    <textarea id="description" name="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description', $programme->description) }}</textarea>
                    @error('description')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Key Highlights (One per line) -->
                <div class="form-group">
                    <label class="form-label" for="features_text">
                        <span>Key Highlights / Features</span>
                        <span class="helper-hint">(One item per line)</span>
                    </label>
                    <textarea id="features_text" name="features_text" rows="5" class="form-control font-mono fs-13">{{ old('features_text', is_array($programme->features) ? implode("\n", $programme->features) : '') }}</textarea>
                </div>

                <!-- Focus Areas / Subjects (One per line) -->
                <div class="form-group">
                    <label class="form-label" for="subjects_text">
                        <span>Focus Areas / Subjects</span>
                        <span class="helper-hint">(One item per line)</span>
                    </label>
                    <textarea id="subjects_text" name="subjects_text" rows="5" class="form-control font-mono fs-13">{{ old('subjects_text', is_array($programme->subjects) ? implode("\n", $programme->subjects) : '') }}</textarea>
                </div>

                <!-- Current Image Preview -->
                @if($programme->image)
                <div class="form-group full-width">
                    <label class="form-label">Current Programme Image</label>
                    <div style="width: 140px; height: 90px; border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0;">
                        <img src="{{ $programme->image_url }}" alt="{{ $programme->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </div>
                @endif

                <!-- Upload New Image -->
                <div class="form-group full-width">
                    <label class="form-label" for="image">
                        <span>Replace Image</span>
                        <span class="helper-hint">(Leave blank to keep existing image)</span>
                    </label>
                    <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                    @error('image')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Active Toggle -->
                <div class="form-group full-width">
                    <label class="d-flex align-items-center gap-10 cursor-pointer">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $programme->is_active) ? 'checked' : '' }} style="width: 18px; height: 18px;">
                        <span class="font-bold text-navy">Publish and display this programme on website</span>
                    </label>
                </div>
            </div>

            <div class="form-actions mt-24">
                <button type="submit" class="btn-admin btn-primary">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Update Programme</span>
                </button>
                <a href="{{ route('admin.academic-programmes.index') }}" class="btn-admin btn-secondary">
                    <span>Cancel</span>
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
