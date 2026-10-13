@extends('layouts.admin')

@section('title', 'Edit Hero Slide #' . $slider->id)
@section('page_title', 'Edit Hero Slide')

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
        outline: none;
        transition: border-color 0.2s, background 0.2s;
    }

    .form-control:focus {
        border-color: var(--admin-navy);
        background: #ffffff;
    }

    textarea.form-control {
        min-height: 100px;
        resize: vertical;
    }

    /* Current Image Showcase Box */
    .current-img-box {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 12px 16px;
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        border-radius: 12px;
        margin-bottom: 12px;
    }

    .current-thumb-wrap {
        width: 140px;
        height: 75px;
        border-radius: 8px;
        overflow: hidden;
        background: #0B192C;
        border: 1px solid #CBD5E1;
        flex-shrink: 0;
    }

    .current-thumb-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .current-thumb-wrap.overlay-wrap {
        width: 65px;
        height: 65px;
        background: #F1F5F9;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 4px;
    }

    .current-thumb-wrap.overlay-wrap img {
        object-fit: contain;
    }

    .current-meta-info {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .current-meta-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-size: 11.5px;
        font-weight: 700;
        color: #0369A1;
        background: #E0F2FE;
        border: 1px solid #BAE6FD;
        padding: 2px 8px;
        border-radius: 6px;
        width: fit-content;
    }

    .current-meta-badge.filesize {
        color: #475569;
        background: #F1F5F9;
        border-color: #E2E8F0;
    }

    .upload-zone-card {
        border: 2px dashed #CBD5E1;
        border-radius: 14px;
        padding: 20px;
        background: #FAFBFD;
        transition: all 0.2s ease;
        position: relative;
    }

    .upload-zone-card:hover {
        border-color: var(--admin-orange);
        background: #FFFDFB;
    }

    .upload-guide-banner {
        background: #EFF6FF;
        border: 1px solid #BFDBFE;
        border-radius: 8px;
        padding: 10px 14px;
        font-size: 12.5px;
        color: #1E40AF;
        margin-bottom: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .upload-guide-banner.overlay-guide {
        background: #FFF7ED;
        border-color: #FED7AA;
        color: #9A3412;
    }

    .custom-file-input {
        display: none;
    }

    .file-trigger-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--admin-navy);
        color: #ffffff;
        padding: 9px 18px;
        border-radius: 8px;
        font-size: 13.5px;
        font-weight: 700;
        cursor: pointer;
        transition: background 0.2s;
    }

    .file-trigger-btn:hover {
        background: #0D4E9B;
    }

    /* Live Preview & Size Detector Pill */
    .preview-box {
        margin-top: 14px;
        display: none;
        align-items: center;
        gap: 16px;
        padding: 12px;
        background: #ffffff;
        border-radius: 10px;
        border: 1px solid #E2E8F0;
    }

    .preview-img-container {
        width: 120px;
        height: 68px;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #CBD5E1;
        background: #0B192C;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .preview-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .preview-img-container.overlay-mode {
        width: 68px;
        height: 68px;
        background: #F1F5F9;
    }

    .preview-img-container.overlay-mode img {
        object-fit: contain;
    }

    .size-detector-details {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .size-live-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        font-weight: 700;
        color: #047857;
        background: #D1FAE5;
        border: 1px solid #A7F3D0;
        padding: 3px 10px;
        border-radius: 20px;
        width: fit-content;
    }

    .size-filename {
        font-size: 12.5px;
        font-weight: 600;
        color: var(--admin-text-main);
    }

    .size-dim-text {
        font-size: 12px;
        color: #64748B;
    }

    /* Action Buttons */
    .form-actions-bar {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 14px;
        margin-top: 10px;
        padding-top: 20px;
        border-top: 1px solid var(--admin-border);
    }

    .btn-submit {
        background: linear-gradient(135deg, var(--admin-orange) 0%, #D9560A 100%);
        color: #ffffff;
        border: none;
        border-radius: 10px;
        padding: 12px 28px;
        font-size: 14.5px;
        font-weight: 800;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 4px 14px rgba(243, 112, 33, 0.35);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(243, 112, 33, 0.45);
    }

    .btn-cancel {
        background: #F1F5F9;
        color: #475569;
        border: 1px solid var(--admin-border);
        border-radius: 10px;
        padding: 12px 22px;
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        transition: background 0.2s;
    }

    .btn-cancel:hover {
        background: #E2E8F0;
        color: #0F172A;
    }

    @media (max-width: 768px) {
        .form-grid-2 {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('content')
<div class="admin-container">

    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px;">
        <div>
            <h2 style="font-size: 22px; font-weight: 800; color: var(--admin-navy);">Edit Hero Slide #{{ $slider->id }}</h2>
            <p style="font-size: 13.5px; color: var(--admin-text-muted);">Modify titles, description, main banner image, image on image and display settings.</p>
        </div>
        <a href="{{ route('admin.sliders.index') }}" class="btn-cancel">
            <i class="fa-solid fa-arrow-left"></i> Back to Sliders
        </a>
    </div>

    @if ($errors->any())
        <div style="background: #FEF2F2; border: 1px solid #FECACA; border-radius: 12px; padding: 16px 20px; margin-bottom: 24px; color: #991B1B;">
            <div style="font-weight: 700; font-size: 14px; margin-bottom: 6px;"><i class="fa-solid fa-triangle-exclamation"></i> Please fix the following errors:</div>
            <ul style="margin-left: 20px; font-size: 13px;">
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
            <h3 style="font-size: 16px; font-weight: 800; color: var(--admin-navy); margin-bottom: 20px; display: flex; align-items: center; gap: 8px;">
                <i class="fa-solid fa-heading" style="color: var(--admin-orange);"></i> 1. Title 1, Title 2 & Description
            </h3>

            <div class="form-grid-2">
                <!-- Title 1 -->
                <div class="form-group">
                    <label class="form-label">
                        Title 1 (Primary Headline) <span class="required">*</span>
                        <span class="helper-hint">(Displayed in crisp white text)</span>
                    </label>
                    <input type="text" name="title_1" class="form-control" value="{{ old('title_1', $slider->title_1) }}" required>
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

        <!-- 2. Slider Image & Size Section -->
        <div class="form-container-card">
            <h3 style="font-size: 16px; font-weight: 800; color: var(--admin-navy); margin-bottom: 20px; display: flex; align-items: center; gap: 8px;">
                <i class="fa-solid fa-image" style="color: var(--admin-orange);"></i> 2. Slider Image & Size Inspection
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
                        <div style="font-size: 12.5px; font-weight: 700; color: var(--admin-navy);">Current Image Size:</div>
                        <div style="display: flex; flex-wrap: wrap; gap: 4px;">
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
                            <strong>Recommended Size:</strong> 1920 × 800 px (or 1024 × 540 px, ~16:9 aspect ratio)<br>
                            <span style="font-size: 11.5px; color: #3B82F6;">Leave empty to keep existing image. Allowed: JPG, PNG, WebP (Max 5MB)</span>
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
            <h3 style="font-size: 16px; font-weight: 800; color: var(--admin-navy); margin-bottom: 20px; display: flex; align-items: center; gap: 8px;">
                <i class="fa-solid fa-sliders" style="color: var(--admin-orange);"></i> 3. Display Settings
            </h3>

            <div class="form-grid-2">
                <div>
                    <label class="form-label">Display Order</label>
                    <input type="number" name="order" class="form-control" value="{{ old('order', $slider->order) }}" min="1">
                </div>
                <div>
                    <label class="form-label">Status</label>
                    <select name="is_active" class="form-control" style="font-weight: 700;">
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
