@extends('layouts.admin')

@section('title', 'Edit Faculty Member · Advaita Admin')
@section('page_title', 'Edit Faculty Member: ' . $staff->name)

@section('content')
<div class="academic-mgmt-wrapper">
    <!-- Top Action Bar -->
    <div class="academic-top-bar">
        <div class="cph-title-wrap">
            <div class="cph-icon-box" style="background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%); color: #fff;">
                <i class="fa-solid fa-user-pen"></i>
            </div>
            <div class="academic-top-title">
                <h3>Edit Faculty Member</h3>
                <p>Update information for <strong>{{ $staff->name }}</strong>.</p>
            </div>
        </div>
        <a href="{{ route('admin.staff.index') }}" class="btn-admin btn-secondary">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Roster</span>
        </a>
    </div>

    <!-- Edit Card Form -->
    <div class="cards-table-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px;">
        <form action="{{ route('admin.staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row g-4">
                <!-- Name -->
                <div class="col-md-6">
                    <label class="form-label font-weight-bold" style="font-weight: 700; color: #083B7A;">
                        Full Name <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $staff->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Designation / Role -->
                <div class="col-md-6">
                    <label class="form-label font-weight-bold" style="font-weight: 700; color: #083B7A;">
                        Designation / Role Title <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" value="{{ old('designation', $staff->designation) }}" required>
                    @error('designation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Qualification -->
                <div class="col-md-6">
                    <label class="form-label font-weight-bold" style="font-weight: 700; color: #083B7A;">
                        Educational Qualification <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="qualification" class="form-control @error('qualification') is-invalid @enderror" value="{{ old('qualification', $staff->qualification) }}" required>
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
                            <option value="{{ $key }}" {{ old('badge_color', $staff->badge_color) === $key ? 'selected' : '' }}>
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
                    <input type="number" name="order" class="form-control @error('order') is-invalid @enderror" value="{{ old('order', $staff->order) }}" min="0" required>
                    @error('order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Current Photo Preview & Upload New -->
                <div class="col-md-8">
                    <label class="form-label font-weight-bold" style="font-weight: 700; color: #083B7A;">
                        Profile Photo
                    </label>

                    @if($staff->photo_url)
                        <div class="d-flex align-items-center gap-16 mb-12 p-12 border rounded bg-light">
                            <div style="width: 56px; height: 56px; border-radius: 50%; overflow: hidden; border: 2px solid #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                                <img src="{{ $staff->photo_url }}" alt="{{ $staff->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div>
                                <div style="font-weight: 700; font-size: 0.86rem; color: #083B7A;">Current Profile Picture</div>
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" name="remove_photo" id="removePhotoCheck" value="1">
                                    <label class="form-check-label text-danger" for="removePhotoCheck" style="font-size: 0.82rem; font-weight: 600;">
                                        Remove photo (revert to default avatar)
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endif

                    <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" accept="image/*">
                    <small class="text-muted">Upload a new image to replace current photo (Max 5MB).</small>
                    @error('photo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Active Toggle -->
                <div class="col-md-4 d-flex align-items-center">
                    <div class="form-check form-switch mt-3">
                        <input class="form-check-input" type="checkbox" name="is_active" id="isActiveSwitch" value="1" {{ old('is_active', $staff->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label font-weight-bold" for="isActiveSwitch" style="font-weight: 700; color: #083B7A;">
                            Active on Website
                        </label>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="col-12 text-end pt-3 border-top mt-4">
                    <a href="{{ route('admin.staff.index') }}" class="btn btn-light me-2 border">Cancel</a>
                    <button type="submit" class="btn-admin btn-primary">
                        <i class="fa-solid fa-check me-1"></i>
                        <span>Update Faculty Member</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

