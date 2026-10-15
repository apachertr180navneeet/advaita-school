@extends('layouts.admin')

@section('title', 'Add Advantage Card')
@section('page_title', 'Add Advantage Card')



@section('content')
<div class="create-card-wrapper form-card-max900">

    <!-- Top Action Link -->
    <div class="mb-20">
        <a href="{{ route('admin.why-choose.index') }}" class="btn-admin btn-secondary d-inline-flex">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Advantage Cards</span>
        </a>
    </div>

    <div class="form-container-card">
        <h3 class="form-section-title">
            <i class="fa-solid fa-award text-orange"></i>
            <span>Create New Advantage Card</span>
        </h3>

        <form action="{{ route('admin.why-choose.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-grid-2">
                <!-- Card Title -->
                <div class="form-group full-width">
                    <label class="form-label" for="title">
                        <span>Card Title</span>
                        <span class="required">*</span>
                    </label>
                    <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title') }}" required placeholder="e.g. Safe & Secure Campus" maxlength="255">
                    @error('title')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Description -->
                <div class="form-group full-width">
                    <label class="form-label" for="description">
                        <span>Description</span>
                        <span class="required">*</span>
                    </label>
                    <textarea id="description" name="description" rows="3" class="form-control @error('description') is-invalid @enderror"
                              required placeholder="Highlight the benefits and key details for students and parents...">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Badge Number -->
                <div class="form-group">
                    <label class="form-label" for="badge_number">
                        <span>Badge Number</span>
                        <span class="helper-hint">(e.g. 01, 02, 07)</span>
                    </label>
                    <input type="text" id="badge_number" name="badge_number" class="form-control @error('badge_number') is-invalid @enderror"
                           value="{{ old('badge_number', $nextBadge) }}" placeholder="e.g. 07" maxlength="10">
                    @error('badge_number')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Display Order -->
                <div class="form-group">
                    <label class="form-label" for="order">
                        <span>Display Order</span>
                        <span class="helper-hint">(Determines position in slider)</span>
                    </label>
                    <input type="number" id="order" name="order" class="form-control @error('order') is-invalid @enderror"
                           value="{{ old('order', $nextOrder) }}" min="1">
                    @error('order')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Theme Color Selector -->
                <div class="form-group full-width">
                    <label class="form-label">
                        <span>Theme Color Badge</span>
                        <span class="required">*</span>
                        <span class="helper-hint">(Colors the number badge in the top-left)</span>
                    </label>
                    <div class="theme-color-options-grid">
                        @foreach($themeColors as $colorKey => $colorConfig)
                            <label class="theme-color-option-label {{ old('theme_color', 'orange') === $colorKey ? 'selected' : '' }}" data-color="{{ $colorKey }}">
                                <input type="radio" name="theme_color" value="{{ $colorKey }}" {{ old('theme_color', 'orange') === $colorKey ? 'checked' : '' }} required>
                                <span class="color-swatch-circle theme-gradient-{{ $colorKey }}"></span>
                                <span class="color-name-text">{{ $colorConfig['label'] }}</span>
                            </label>
                        @endforeach
                    </div>
                    @error('theme_color')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Image Upload -->
                <div class="form-group full-width">
                    <label class="form-label" for="image">
                        <span>Card Banner Image</span>
                        <span class="required">*</span>
                        <span class="helper-hint">(Recommended: 600 × 400 px, max 4MB)</span>
                    </label>

                    <div class="image-upload-wrapper">
                        <input type="file" id="image" name="image" class="image-upload-input @error('image') is-invalid @enderror" accept="image/*" required>
                        <div class="upload-icon-circle">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                        </div>
                        <h4 class="form-switch-label mb-4">
                            Click or drag image file here to upload
                        </h4>
                        <p class="text-muted fs-12 m-0">Supports JPG, PNG, WEBP, AVIF up to 4MB</p>
                    </div>

                    <!-- Live Image Preview Box -->
                    <div class="preview-box" id="previewBox">
                        <img src="" alt="Selected Preview" class="preview-thumb" id="previewThumb">
                        <div class="preview-info">
                            <strong id="previewFileName" class="text-navy">image.jpg</strong><br>
                            <span id="previewFileSize">0 KB</span> &bull; <span id="previewFileDims">Calculating dimensions...</span>
                        </div>
                    </div>

                    @error('image')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Active Toggle -->
                <div class="form-group full-width mt-10">
                    <label class="form-switch-wrap">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} class="checkbox-orange">
                        <span class="form-switch-label">
                            Make this card active immediately on public homepage slider
                        </span>
                    </label>
                </div>
            </div>

            <div class="form-action-footer">
                <a href="{{ route('admin.why-choose.index') }}" class="btn-admin btn-secondary">Cancel</a>
                <button type="submit" class="btn-admin btn-primary">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Save Advantage Card</span>
                </button>
            </div>
        </form>
    </div>

</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Radio theme selection interaction
    document.querySelectorAll('.theme-color-option-label').forEach(function (label) {
        label.addEventListener('click', function () {
            document.querySelectorAll('.theme-color-option-label').forEach(l => l.classList.remove('selected'));
            this.classList.add('selected');
        });
    });

    // Image file preview
    const imageInput = document.getElementById('image');
    const previewBox = document.getElementById('previewBox');
    const previewThumb = document.getElementById('previewThumb');
    const previewFileName = document.getElementById('previewFileName');
    const previewFileSize = document.getElementById('previewFileSize');
    const previewFileDims = document.getElementById('previewFileDims');

    if (imageInput) {
        imageInput.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                previewFileName.textContent = file.name;
                previewFileSize.textContent = (file.size / 1024).toFixed(1) + ' KB';

                const reader = new FileReader();
                reader.onload = function (event) {
                    previewThumb.src = event.target.result;
                    previewBox.style.display = 'flex';

                    // Compute dimensions
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
