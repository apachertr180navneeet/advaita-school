@extends('layouts.admin')

@section('title', 'Add Faculty Member · Advaita Admin')
@section('page_title', 'Add New Faculty Member')

@section('content')
<div class="academic-mgmt-wrapper">
    <!-- Top Action Bar -->
    <div class="academic-top-bar">
        <div class="cph-title-wrap">
            <div class="cph-icon-box" style="background: linear-gradient(135deg, #F37021 0%, #d95d12 100%); color: #fff;">
                <i class="fa-solid fa-user-plus"></i>
            </div>
            <div class="academic-top-title">
                <h3>Add New Faculty Member</h3>
                <p>Register a teacher, coordinator, or leadership profile for the "Our Staff" section.</p>
            </div>
        </div>
        <a href="{{ route('admin.staff.index') }}" class="btn-admin btn-secondary">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Roster</span>
        </a>
    </div>

    <!-- Create Card Form -->
    <div class="cards-table-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px;">
        <form action="{{ route('admin.staff.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row g-4">
                <!-- Name -->
                <div class="col-md-6">
                    <label class="form-label font-weight-bold" style="font-weight: 700; color: #083B7A;">
                        Full Name <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="e.g. Divine Mam or Dr. Ramesh Patil" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Designation / Role -->
                <div class="col-md-6">
                    <label class="form-label font-weight-bold" style="font-weight: 700; color: #083B7A;">
                        Designation / Role Title <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" value="{{ old('designation') }}" placeholder="e.g. PRINCIPAL, VICE PRINCIPAL, HEAD - ENGLISH DEPARTMENT" required>
                    <small class="text-muted">Uppercase title recommended for visual consistency.</small>
                    @error('designation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Qualification -->
                <div class="col-md-6">
                    <label class="form-label font-weight-bold" style="font-weight: 700; color: #083B7A;">
                        Educational Qualification <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="qualification" class="form-control @error('qualification') is-invalid @enderror" value="{{ old('qualification') }}" placeholder="e.g. M.A., B.Ed. or M.Sc. (Physics), B.Ed." required>
                    @error('qualification')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Badge Color Theme -->
                <div class="col-md-3">
                    <label class="form-label font-weight-bold" style="font-weight: 700; color: #083B7A;">
                        Badge Color Theme <span class="text-danger">*</span>
                    </label>
                    <select name="badge_color" class="form-select @error('badge_color') is-invalid @enderror" required>
                        @foreach($badgeColors as $key => $color)
                            <option value="{{ $key }}" {{ old('badge_color', 'blue') === $key ? 'selected' : '' }}>
                                {{ $color['label'] }}
                            </option>
                        @endforeach
                    </select>
                    @error('badge_color')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Display Order -->
                <div class="col-md-3">
                    <label class="form-label font-weight-bold" style="font-weight: 700; color: #083B7A;">
                        Display Order <span class="text-danger">*</span>
                    </label>
                    <input type="number" name="order" class="form-control @error('order') is-invalid @enderror" value="{{ old('order', $nextOrder) }}" min="0" required>
                    <small class="text-muted">Lower numbers appear first.</small>
                    @error('order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Photo Upload -->
                <div class="col-md-8">
                    <label class="form-label font-weight-bold" style="font-weight: 700; color: #083B7A;">
                        Profile Photo <small class="text-muted">(Optional - Square 1:1 or portrait recommended)</small>
                    </label>
                    <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" accept="image/*">
                    <small class="text-muted">Leave empty to display default clean silhouette avatar placeholder.</small>
                    @error('photo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Active Toggle -->
                <div class="col-md-4 d-flex align-items-center">
                    <div class="form-check form-switch mt-3">
                        <input class="form-check-input" type="checkbox" name="is_active" id="isActiveSwitch" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                        <label class="form-check-label font-weight-bold" for="isActiveSwitch" style="font-weight: 700; color: #083B7A;">
                            Active on Website
                        </label>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="col-12 text-end pt-3 border-top mt-4">
                    <a href="{{ route('admin.staff.index') }}" class="btn btn-light me-2 border">Cancel</a>
                    <button type="submit" class="btn-admin btn-primary">
                        <i class="fa-solid fa-plus me-1"></i>
                        <span>Save Faculty Member</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

