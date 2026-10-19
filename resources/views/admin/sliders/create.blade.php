@extends('layouts.admin')

@section('title', 'Add New Hero Slide')
@section('page_title', 'Create Hero Slide')



@section('content')
<div class="admin-container">

    <div class="d-flex align-items-center justify-content-between mb-24">
        <div>
            <h2 class="text-navy fs-22 font-extrabold">Create New Hero Slide</h2>
            <p class="text-muted fs-13">Add a dynamic slide with main banner image, title 1, title 2, description & image on image.</p>
        </div>
        <a href="{{ route('admin.sliders.index') }}" class="btn-cancel">
            <i class="fa-solid fa-arrow-left"></i> Back to Sliders
        </a>
    </div>

    @if ($errors->any())
        <div class="alert-danger-box">
            <div class="font-bold fs-14 mb-6"><i class="fa-solid fa-triangle-exclamation"></i> Please fix the following errors:</div>
            <ul class="ml-20 fs-13">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- 1. Headings & Description -->
        <div class="form-container-card">
            <h3 class="form-section-header-navy">
                <i class="fa-solid fa-heading text-orange"></i> 1. Title 1, Title 2 & Description
            </h3>

            <div class="form-grid-2">
                <!-- Title 1 -->
                <div class="form-group">
                    <label class="form-label">
                        Title 1 (Primary Headline)
                        <span class="helper-hint">(Displayed in crisp white text)</span>
                    </label>
                    <input type="text" name="title_1" class="form-control" value="{{ old('title_1') }}" placeholder="e.g. Building Curious Minds.">
                </div>

                <!-- Title 2 -->
                <div class="form-group">
                    <label class="form-label">
                        Title 2 (Highlight Tagline)
                        <span class="helper-hint">(Displayed in vibrant orange text)</span>
                    </label>
                    <input type="text" name="title_2" class="form-control" value="{{ old('title_2') }}" placeholder="e.g. Shaping Confident Futures.">
                </div>

                <!-- Description -->
                <div class="form-group full-width">
                    <label class="form-label">
                        Description
                        <span class="helper-hint">(Paragraph displayed below the titles)</span>
                    </label>
                    <textarea name="description" class="form-control" placeholder="e.g. Where knowledge meets values, creativity meets opportunity, and every child is encouraged to discover their true potential.">{{ old('description') }}</textarea>
                </div>
            </div>
        </div>

        <!-- 2. Call-to-Action Buttons -->
        <div class="form-container-card">
            <h3 class="form-section-header-navy">
                <i class="fa-solid fa-link text-orange"></i> 2. Call-to-Action Buttons
            </h3>

            <div class="form-grid-2">
                <!-- Button 1 Text -->
                <div class="form-group">
                    <label class="form-label">
                        Button 1 Label
                        <span class="helper-hint">(Primary Orange Pill Button)</span>
                    </label>
                    <input type="text" name="btn_1_text" class="form-control" value="{{ old('btn_1_text', 'Apply for Admission') }}" placeholder="Apply for Admission">
                </div>

                <!-- Button 1 URL -->
                <div class="form-group">
                    <label class="form-label">
                        Button 1 URL / Anchor Link
                    </label>
                    <input type="text" name="btn_1_url" class="form-control" value="{{ old('btn_1_url', '#admissions') }}" placeholder="#admissions">
                </div>

                <!-- Button 2 Text -->
                <div class="form-group">
                    <label class="form-label">
                        Button 2 Label
                        <span class="helper-hint">(Secondary Frosted Pill Button)</span>
                    </label>
                    <input type="text" name="btn_2_text" class="form-control" value="{{ old('btn_2_text', 'Explore Our School') }}" placeholder="Explore Our School">
                </div>

                <!-- Button 2 URL -->
                <div class="form-group">
                    <label class="form-label">
                        Button 2 URL / Anchor Link
                    </label>
                    <input type="text" name="btn_2_url" class="form-control" value="{{ old('btn_2_url', '#about') }}" placeholder="#about">
                </div>
            </div>
        </div>

        <!-- 3. Slider Image & Size Section -->
        <div class="form-container-card">
            <h3 class="form-section-header-navy">
                <i class="fa-solid fa-image text-orange"></i> 3. Slider Image & Size Inspection
            </h3>

            <!-- Slider Image Upload -->
            <div class="form-group">
                <label class="form-label">
                    Slider Image (Banner) <span class="required">*</span>
                </label>
                <div class="upload-zone-card" id="mainImageDropzone">
                    <div class="upload-guide-banner">
                        <i class="fa-solid fa-ruler-combined"></i>
                        <div>
                            <strong>Recommended Image Size:</strong> 1024 × 460 px (or 1920 × 860 px, ~2.2:1 aspect ratio)<br>
                            <span class="text-blue fs-11">Allowed formats: JPG, PNG, WebP (Max 5MB). The system automatically analyzes dimensions & file size on select.</span>
                        </div>
                    </div>

                    <label for="mainImageInput" class="file-trigger-btn">
                        <i class="fa-solid fa-cloud-arrow-up"></i> Choose Slider Image
                    </label>
                    <input type="file" id="mainImageInput" name="image" class="custom-file-input" accept="image/*" required>

                    <!-- Live Size Detector Box -->
                    <div class="preview-box" id="mainImagePreviewBox">
                        <div class="preview-img-container">
                            <img id="mainImagePreview" src="" alt="Slider Image Preview">
                        </div>
                        <div class="size-detector-details">
                            <div class="size-filename" id="mainImageName"></div>
                            <div class="size-live-badge">
                                <i class="fa-solid fa-circle-check"></i> <span id="mainImageDimensions"></span>
                            </div>
                            <div class="size-dim-text" id="mainImageFileSize"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Sort Order & Status -->
        <div class="form-container-card">
            <h3 class="form-section-header-navy">
                <i class="fa-solid fa-sliders text-orange"></i> 3. Display Settings
            </h3>

            <div class="form-grid-2">
                <div>
                    <label class="form-label">Display Order</label>
                    <input type="number" name="order" class="form-control" value="{{ old('order', $nextOrder) }}" min="1">
                </div>
                <div>
                    <label class="form-label">Status</label>
                    <select name="is_active" class="form-control font-bold">
                        <option value="1" {{ old('is_active', '1') == '1' ? 'selected' : '' }}>Active (Visible)</option>
                        <option value="0" {{ old('is_active', '0') == '0' ? 'selected' : '' }}>Inactive (Hidden)</option>
                    </select>
                </div>
            </div>

            <!-- Bottom Actions -->
            <div class="form-actions-bar">
                <a href="{{ route('admin.sliders.index') }}" class="btn-cancel">Cancel</a>
                <button type="submit" class="btn-submit">
                    <i class="fa-solid fa-check"></i> Save & Publish Hero Slide
                </button>
            </div>
        </div>

    </form>

</div>

<script>
    // Live Image Size & Dimension Detector
    function setupImageSizeDetector(inputId, previewBoxId, previewImgId, nameId, dimId, sizeId) {
        const input = document.getElementById(inputId);
        const previewBox = document.getElementById(previewBoxId);
        const previewImg = document.getElementById(previewImgId);
        const nameEl = document.getElementById(nameId);
        const dimEl = document.getElementById(dimId);
        const sizeEl = document.getElementById(sizeId);

        if (!input) return;

        input.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;

            nameEl.textContent = file.name;
            const fileSizeFormatted = formatFileSize(file.size);
            sizeEl.textContent = 'File Size: ' + fileSizeFormatted;

            const reader = new FileReader();
            reader.onload = function(event) {
                previewImg.src = event.target.result;
                const img = new Image();
                img.onload = function() {
                    dimEl.textContent = img.naturalWidth + ' × ' + img.naturalHeight + ' px';
                    previewBox.style.display = 'flex';
                };
                img.src = event.target.result;
            };
            reader.readAsDataURL(file);
        });
    }

    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(1)) + ' ' + sizes[i];
    }

    document.addEventListener('DOMContentLoaded', function() {
        setupImageSizeDetector('mainImageInput', 'mainImagePreviewBox', 'mainImagePreview', 'mainImageName', 'mainImageDimensions', 'mainImageFileSize');
    });
</script>
@endsection
