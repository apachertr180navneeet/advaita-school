@extends('layouts.admin')

@section('title', 'Edit Faculty Member · Advaita Admin')
@section('page_title', 'Edit Faculty Member')

@section('content')
<div class="create-card-wrapper form-card-max900">

    <!-- Top Action Link -->
    <div class="mb-20">
        <a href="{{ route('admin.staff.index') }}" class="btn-admin btn-secondary d-inline-flex">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Faculty Roster</span>
        </a>
    </div>

    <div class="form-container-card">
        <h3 class="form-section-title">
            <i class="fa-solid fa-user-pen text-orange"></i>
            <span>Edit Faculty Member: {{ $staff->name }}</span>
        </h3>

        <form action="{{ route('admin.staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-grid-2">
                <!-- Full Name -->
                <div class="form-group">
                    <label class="form-label" for="name">
                        <span>Full Name</span>
                        <span class="required">*</span>
                    </label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name', $staff->name) }}" required placeholder="e.g. Divine Mam or Dr. Ramesh Patil" maxlength="255">
                    @error('name')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Designation / Role -->
                <div class="form-group">
                    <label class="form-label" for="designation">
                        <span>Designation / Role Title</span>
                        <span class="required">*</span>
                        <span class="helper-hint">(Uppercase recommended)</span>
                    </label>
                    <input type="text" id="designation" name="designation" class="form-control @error('designation') is-invalid @enderror"
                           value="{{ old('designation', $staff->designation) }}" required placeholder="e.g. PRINCIPAL, VICE PRINCIPAL" maxlength="255">
                    @error('designation')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Educational Qualification -->
                <div class="form-group">
                    <label class="form-label" for="qualification">
                        <span>Educational Qualification</span>
                        <span class="required">*</span>
                    </label>
                    <input type="text" id="qualification" name="qualification" class="form-control @error('qualification') is-invalid @enderror"
                           value="{{ old('qualification', $staff->qualification) }}" required placeholder="e.g. M.A., B.Ed." maxlength="255">
                    @error('qualification')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Display Order -->
                <div class="form-group">
                    <label class="form-label" for="order">
                        <span>Display Order</span>
                        <span class="required">*</span>
                        <span class="helper-hint">(Lower numbers appear first)</span>
                    </label>
                    <input type="number" id="order" name="order" class="form-control @error('order') is-invalid @enderror"
                           value="{{ old('order', $staff->order) }}" min="0" required>
                    @error('order')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Badge Color Theme -->
                <div class="form-group full-width">
                    <label class="form-label">
                        <span>Badge Color Theme</span>
                        <span class="required">*</span>
                        <span class="helper-hint">(Determines the pill badge styling on the website)</span>
                    </label>
                    <div class="badge-color-selector-grid">
                        @foreach($badgeColors as $key => $color)
                            <label class="badge-color-card {{ old('badge_color', $staff->badge_color) === $key ? 'selected' : '' }}" data-color="{{ $key }}">
                                <input type="radio" name="badge_color" value="{{ $key }}" {{ old('badge_color', $staff->badge_color) === $key ? 'checked' : '' }} required>
                                <span class="badge-color-dot" style="background: {{ $color['color'] }};"></span>
                                <span class="staff-role-badge role-{{ $key }}">{{ $color['label'] }}</span>
                            </label>
                        @endforeach
                    </div>
                    @error('badge_color')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Profile Photo Upload -->
                <div class="form-group full-width">
                    <label class="form-label" for="photo">
                        <span>Profile Photo</span>
                        <span class="helper-hint">(Square 1:1 or portrait recommended, up to 5MB)</span>
                    </label>

                    @if($staff->photo_url)
                        <div class="d-flex align-items-center gap-16 mb-16 p-14 border rounded-12 bg-light" style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-radius: 12px; padding: 14px 16px;">
                            <div class="staff-avatar-thumb" style="width: 54px; height: 54px;">
                                <img src="{{ $staff->photo_url }}" alt="{{ $staff->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="flex-grow-1">
                                <div class="font-bold text-navy fs-13">Current Profile Photo</div>
                                <label class="d-inline-flex align-items-center gap-8 mt-6 cursor-pointer" style="cursor: pointer;">
                                    <input type="checkbox" name="remove_photo" id="removePhotoCheck" value="1" style="accent-color: #EF4444; width: 16px; height: 16px;">
                                    <span class="text-danger fs-12 font-bold">Remove photo and revert to default avatar</span>
                                </label>
                            </div>
                        </div>
                    @endif

                    <div class="image-upload-wrapper">
                        <input type="file" id="photo" name="photo" class="image-upload-input @error('photo') is-invalid @enderror" accept="image/*">
                        <div class="upload-icon-circle">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                        </div>
                        <h4 class="form-switch-label mb-4">
                            Click or drag new photo to replace
                        </h4>
                        <p class="text-muted fs-12 m-0">Leave blank to keep existing photo. Supports JPG, PNG, WEBP, AVIF.</p>
                    </div>

                    <!-- Live Image Preview Box -->
                    <div class="preview-box" id="previewBox" style="display: none;">
                        <img src="" alt="Selected Photo Preview" class="preview-thumb" id="previewThumb" style="border-radius: 50%; width: 64px; height: 64px; object-fit: cover;">
                        <div class="preview-info">
                            <strong id="previewFileName" class="text-navy">photo.jpg</strong><br>
                            <span id="previewFileSize">0 KB</span> &bull; <span id="previewFileDims">Calculating dimensions...</span>
                        </div>
                    </div>

                    @error('photo')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Active Toggle Switch -->
                <div class="form-group full-width mt-10">
                    <label class="toggle-switch-card">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $staff->is_active) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: #F37021; cursor: pointer;">
                        <div>
                            <div class="toggle-card-title">Active on Website</div>
                            <div class="toggle-card-desc">Make this faculty member visible on the public "Our Staff" page.</div>
                        </div>
                    </label>
                </div>
            </div>

            <!-- Form Actions Footer -->
            <div class="form-actions">
                <a href="{{ route('admin.staff.index') }}" class="btn-admin btn-secondary">Cancel</a>
                <button type="submit" class="btn-admin btn-primary">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Update Faculty Member</span>
                </button>
            </div>
        </form>
    </div>

</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Badge color radio selection
    const colorCards = document.querySelectorAll('.badge-color-card');
    colorCards.forEach(card => {
        card.addEventListener('click', function () {
            colorCards.forEach(c => c.classList.remove('selected'));
            this.classList.add('selected');
            const radio = this.querySelector('input[type="radio"]');
            if (radio) radio.checked = true;
        });
    });

    // Image preview
    const photoInput = document.getElementById('photo');
    const previewBox = document.getElementById('previewBox');
    const previewThumb = document.getElementById('previewThumb');
    const previewFileName = document.getElementById('previewFileName');
    const previewFileSize = document.getElementById('previewFileSize');
    const previewFileDims = document.getElementById('previewFileDims');

    if (photoInput) {
        photoInput.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                previewFileName.textContent = file.name;
                previewFileSize.textContent = (file.size / 1024).toFixed(1) + ' KB';

                const reader = new FileReader();
                reader.onload = function (event) {
                    previewThumb.src = event.target.result;
                    previewBox.style.display = 'flex';

                    const img = new Image();
                    img.onload = function () {
                        previewFileDims.textContent = `${this.width} × ${this.height} px`;
                    };
                    img.src = event.target.result;
                };
                reader.readAsDataURL(file);
            } else {
                previewBox.style.display = 'none';
            }
        });
    }
});
</script>
@endsection
