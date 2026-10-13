@extends('layouts.admin')

@section('title', 'Add Advantage Card')
@section('page_title', 'Add Advantage Card')

@section('styles')
<style>
    .form-container-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        margin-bottom: 30px;
    }

    .form-grid-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
    }

    @media (max-width: 768px) {
        .form-grid-2 {
            grid-template-columns: 1fr;
        }
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-bottom: 20px;
    }

    .form-group.full-width {
        grid-column: 1 / -1;
    }

    .form-label {
        font-size: 13.5px;
        font-weight: 700;
        color: var(--admin-text-main);
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .form-label .required {
        color: #EF4444;
    }

    .form-label .helper-hint {
        font-size: 12px;
        font-weight: 500;
        color: var(--admin-text-muted);
    }

    .form-control {
        background: #F8FAFC;
        border: 1px solid var(--admin-border);
        border-radius: 10px;
        padding: 11px 14px;
        font-size: 14px;
        font-family: inherit;
        color: var(--admin-text-main);
        transition: all 0.2s ease;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--admin-navy);
        background: #ffffff;
        box-shadow: 0 0 0 3px rgba(8, 59, 122, 0.1);
    }

    /* Color Selection Grid */
    .theme-color-options-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
        gap: 12px;
    }

    .theme-color-option-label {
        border: 2px solid var(--admin-border);
        border-radius: 12px;
        padding: 10px 12px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: all 0.2s ease;
        background: #ffffff;
        user-select: none;
    }

    .theme-color-option-label:hover {
        border-color: #94A3B8;
        transform: translateY(-1px);
    }

    .theme-color-option-label input[type="radio"] {
        display: none;
    }

    .theme-color-option-label.selected {
        border-color: var(--admin-navy);
        background: #EFF6FF;
        box-shadow: 0 4px 12px rgba(8, 59, 122, 0.12);
    }

    .color-swatch-circle {
        width: 22px;
        height: 22px;
        border-radius: 50%;
        flex-shrink: 0;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
    }

    .color-name-text {
        font-size: 12.5px;
        font-weight: 700;
        color: var(--admin-navy);
    }

    /* Upload Box & Preview */
    .image-upload-wrapper {
        border: 2px dashed #CBD5E1;
        border-radius: 14px;
        padding: 24px;
        text-align: center;
        background: #F8FAFC;
        cursor: pointer;
        transition: all 0.2s;
        position: relative;
    }

    .image-upload-wrapper:hover {
        border-color: var(--admin-orange);
        background: #FFFBF7;
    }

    .image-upload-input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .upload-icon-circle {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #E2E8F0;
        color: var(--admin-navy);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        margin: 0 auto 10px auto;
    }

    .preview-box {
        margin-top: 14px;
        display: none;
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 12px;
        padding: 12px;
        align-items: center;
        gap: 16px;
    }

    .preview-thumb {
        width: 100px;
        height: 70px;
        border-radius: 8px;
        object-fit: cover;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .preview-info {
        font-size: 12.5px;
        color: #475569;
        line-height: 1.4;
    }
</style>
@endsection

@section('content')
<div class="create-card-wrapper" style="max-width: 900px;">

    <!-- Top Action Link -->
    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.why-choose.index') }}" class="btn-admin btn-secondary" style="display: inline-flex;">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Advantage Cards</span>
        </a>
    </div>

    <div class="form-container-card">
        <h3 style="font-size: 18px; font-weight: 800; color: var(--admin-navy); margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-award" style="color: var(--admin-orange);"></i>
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
                        <span style="font-size: 12px; color: #EF4444; font-weight: 600;">{{ $message }}</span>
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
                        <span style="font-size: 12px; color: #EF4444; font-weight: 600;">{{ $message }}</span>
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
                        <span style="font-size: 12px; color: #EF4444; font-weight: 600;">{{ $message }}</span>
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
                        <span style="font-size: 12px; color: #EF4444; font-weight: 600;">{{ $message }}</span>
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
                                <span class="color-swatch-circle" style="background: {{ $colorConfig['gradient'] }};"></span>
                                <span class="color-name-text">{{ $colorConfig['label'] }}</span>
                            </label>
                        @endforeach
                    </div>
                    @error('theme_color')
                        <span style="font-size: 12px; color: #EF4444; font-weight: 600;">{{ $message }}</span>
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
                        <h4 style="font-size: 14px; font-weight: 700; color: var(--admin-navy); margin-bottom: 4px;">
                            Click or drag image file here to upload
                        </h4>
                        <p style="font-size: 12px; color: #64748B; margin: 0;">Supports JPG, PNG, WEBP, AVIF up to 4MB</p>
                    </div>

                    <!-- Live Image Preview Box -->
                    <div class="preview-box" id="previewBox">
                        <img src="" alt="Selected Preview" class="preview-thumb" id="previewThumb">
                        <div class="preview-info">
                            <strong id="previewFileName" style="color: var(--admin-navy);">image.jpg</strong><br>
                            <span id="previewFileSize">0 KB</span> &bull; <span id="previewFileDims">Calculating dimensions...</span>
                        </div>
                    </div>

                    @error('image')
                        <span style="font-size: 12px; color: #EF4444; font-weight: 600;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Active Toggle -->
                <div class="form-group full-width" style="margin-top: 10px;">
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; user-select: none;">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--admin-orange);">
                        <span style="font-size: 14px; font-weight: 700; color: var(--admin-navy);">
                            Make this card active immediately on public homepage slider
                        </span>
                    </label>
                </div>
            </div>

            <div style="display: flex; justify-content: flex-end; gap: 12px; margin-top: 24px; padding-top: 20px; border-top: 1px solid var(--admin-border);">
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
