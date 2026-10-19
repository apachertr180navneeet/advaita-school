@extends('layouts.admin')

@section('title', 'Edit Hero Slide #' . $slider->id)
@section('page_title', 'Edit Hero Slide')



@section('content')
<div class="admin-container">

    <div class="d-flex align-items-center justify-content-between mb-24">
        <div>
            <h2 class="text-navy fs-22 font-extrabold">Edit Hero Slide #{{ $slider->id }}</h2>
            <p class="text-muted fs-13">Modify titles, description, main banner image, image on image and display settings.</p>
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

    <form action="{{ route('admin.sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- 1. Titles & Description -->
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
                    <input type="text" name="title_1" class="form-control" value="{{ old('title_1', $slider->title_1) }}">
                </div>

                <!-- Title 2 -->
                <div class="form-group">
                    <label class="form-label">
                        Title 2 (Highlight Tagline)
                        <span class="helper-hint">(Displayed in vibrant orange text)</span>
                    </label>
                    <input type="text" name="title_2" class="form-control" value="{{ old('title_2', $slider->title_2) }}">
                </div>

                <!-- Description -->
                <div class="form-group full-width">
                    <label class="form-label">
                        Description
                    </label>
                    <textarea name="description" class="form-control">{{ old('description', $slider->description) }}</textarea>
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
                        <span class="helper-hint">(Primary Orange Pill Button - leave blank to hide)</span>
                    </label>
                    <input type="text" name="btn_1_text" class="form-control" value="{{ old('btn_1_text', $slider->btn_1_text) }}" placeholder="e.g. Apply for Admission">
                </div>

                <!-- Button 1 URL -->
                <div class="form-group">
                    <label class="form-label">
                        Button 1 URL / Anchor Link
                        <span class="helper-hint">(Required if Button 1 Label is provided)</span>
                    </label>
                    <input type="text" name="btn_1_url" class="form-control" value="{{ old('btn_1_url', $slider->btn_1_url) }}" placeholder="e.g. #admissions or /admission-info">
                </div>

                <!-- Button 2 Text -->
                <div class="form-group">
                    <label class="form-label">
                        Button 2 Label
                        <span class="helper-hint">(Secondary Frosted Pill Button - leave blank to hide)</span>
                    </label>
                    <input type="text" name="btn_2_text" class="form-control" value="{{ old('btn_2_text', $slider->btn_2_text) }}" placeholder="e.g. Explore Our School">
                </div>

                <!-- Button 2 URL -->
                <div class="form-group">
                    <label class="form-label">
                        Button 2 URL / Anchor Link
                        <span class="helper-hint">(Required if Button 2 Label is provided)</span>
                    </label>
                    <input type="text" name="btn_2_url" class="form-control" value="{{ old('btn_2_url', $slider->btn_2_url) }}" placeholder="e.g. #about or /about-us">
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
                <label class="form-label">Slider Image (Banner)</label>

                <!-- Existing Image Details & Dimensions -->
                <div class="current-img-box">
                    <a href="{{ $slider->image_url }}" target="_blank" class="current-thumb-wrap" title="View Full Image">
                        <img src="{{ $slider->image_url }}" alt="{{ $slider->title_1 }}">
                    </a>
                    <div class="current-meta-info">
                        <div class="text-navy fs-12 font-bold">Current Image Size:</div>
                        <div class="d-flex flex-wrap gap-4">
                            @if($slider->image_dimensions)
                                <span class="current-meta-badge">
                                    <i class="fa-solid fa-expand"></i> {{ $slider->image_dimensions }}
                                </span>
                            @endif
                            @if($slider->image_size)
                                <span class="current-meta-badge filesize">
                                    <i class="fa-solid fa-hard-drive"></i> {{ $slider->image_size }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Replace Image Zone -->
                <div class="upload-zone-card" id="mainImageDropzone">
                    <div class="upload-guide-banner">
                        <i class="fa-solid fa-ruler-combined"></i>
                        <div>
                            <strong>Recommended Size:</strong> 1024 × 460 px (or 1920 × 860 px, ~2.2:1 aspect ratio)<br>
                            <span class="text-blue fs-11">Leave empty to keep existing image. Allowed: JPG, PNG, WebP (Max 5MB)</span>
                        </div>
                    </div>

                    <label for="mainImageInput" class="file-trigger-btn">
                        <i class="fa-solid fa-cloud-arrow-up"></i> Choose New Slider Image
                    </label>
                    <input type="file" id="mainImageInput" name="image" class="custom-file-input" accept="image/*">

                    <!-- Live Size Detector Box -->
                    <div class="preview-box" id="mainImagePreviewBox">
                        <div class="preview-img-container">
                            <img id="mainImagePreview" src="" alt="Main Image Preview">
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
                    <input type="number" name="order" class="form-control" value="{{ old('order', $slider->order) }}" min="1">
                </div>
                <div>
                    <label class="form-label">Status</label>
                    <select name="is_active" class="form-control font-bold">
                        <option value="1" {{ old('is_active', $slider->is_active ? '1' : '0') == '1' ? 'selected' : '' }}>Active (Visible)</option>
                        <option value="0" {{ old('is_active', $slider->is_active ? '1' : '0') == '0' ? 'selected' : '' }}>Inactive (Hidden)</option>
                    </select>
                </div>
            </div>

            <!-- Bottom Actions -->
            <div class="form-actions-bar">
                <a href="{{ route('admin.sliders.index') }}" class="btn-cancel">Cancel</a>
                <button type="submit" class="btn-submit">
                    <i class="fa-solid fa-check"></i> Update Hero Slide
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
