@extends('layouts.admin')

@section('title', 'Add New Hero Slide')
@section('page_title', 'Create Hero Slide')

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

    /* Upload Zone with Size Recommendation */
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
            <h2 style="font-size: 22px; font-weight: 800; color: var(--admin-navy);">Create New Hero Slide</h2>
            <p style="font-size: 13.5px; color: var(--admin-text-muted);">Add a dynamic slide with main banner image, title 1, title 2, description & image on image.</p>
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

    <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- 1. Headings & Description -->
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
                    <input type="text" name="title_1" class="form-control" value="{{ old('title_1') }}" placeholder="e.g. Building Curious Minds." required>
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

        <!-- 2. Images & Image Size Section -->
        <div class="form-container-card">
            <h3 style="font-size: 16px; font-weight: 800; color: var(--admin-navy); margin-bottom: 20px; display: flex; align-items: center; gap: 8px;">
                <i class="fa-solid fa-images" style="color: var(--admin-orange);"></i> 2. Main Image & Image on Image Upload
            </h3>

            <div class="form-grid-2">
                <!-- Main Image Upload -->
                <div class="form-group">
                    <label class="form-label">
                        Main Image (Background Banner) <span class="required">*</span>
                    </label>
                    <div class="upload-zone-card" id="mainImageDropzone">
                        <div class="upload-guide-banner">
                            <i class="fa-solid fa-ruler-combined"></i>
                            <div>
                                <strong>Recommended Image Size:</strong> 1920 × 800 px (or 1024 × 540 px)<br>
                                <span style="font-size: 11.5px; color: #3B82F6;">Optimal ~16:9 / 2:1 aspect ratio | Allowed: JPG, PNG, WebP (Max 5MB)</span>
                            </div>
                        </div>

                        <label for="mainImageInput" class="file-trigger-btn">
                            <i class="fa-solid fa-cloud-arrow-up"></i> Choose Main Image
                        </label>
                        <input type="file" id="mainImageInput" name="image" class="custom-file-input" accept="image/*" required>

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

                <!-- Image on Image Upload -->
                <div class="form-group">
                    <label class="form-label">
                        Image on Image (Overlay Graphic / Cutout)
                        <span class="helper-hint">(Optional)</span>
                    </label>
                    <div class="upload-zone-card" id="overlayImageDropzone">
                        <div class="upload-guide-banner overlay-guide">
                            <i class="fa-solid fa-layer-group"></i>
                            <div>
                                <strong>Recommended Image Size:</strong> 500 × 600 px (or 400 × 400 px)<br>
                                <span style="font-size: 11.5px; color: #EA580C;">Transparent PNG / WebP for floating sticker, badge or student cutout</span>
                            </div>
                        </div>

                        <label for="overlayImageInput" class="file-trigger-btn" style="background: #334155;">
                            <i class="fa-solid fa-wand-magic-sparkles"></i> Choose Image on Image
                        </label>
                        <input type="file" id="overlayImageInput" name="image_on_image" class="custom-file-input" accept="image/*">

                        <!-- Live Size Detector Box -->
                        <div class="preview-box" id="overlayImagePreviewBox">
                            <div class="preview-img-container overlay-mode">
                                <img id="overlayImagePreview" src="" alt="Image on Image Preview">
                            </div>
                            <div class="size-detector-details">
                                <div class="size-filename" id="overlayImageName"></div>
                                <div class="size-live-badge" style="background: #FFEDD5; color: #9A3412; border-color: #FED7AA;">
                                    <i class="fa-solid fa-circle-check"></i> <span id="overlayImageDimensions"></span>
                                </div>
                                <div class="size-dim-text" id="overlayImageFileSize"></div>
                            </div>
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
                    <input type="number" name="order" class="form-control" value="{{ old('order', $nextOrder) }}" min="1">
                </div>
                <div>
                    <label class="form-label">Status</label>
                    <select name="is_active" class="form-control" style="font-weight: 700;">
                        <option value="1" {{ old('is_active', '1') == '1' ? 'selected' : '' }}>Active (Visible)</option>
                        <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive (Hidden)</option>
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
    // Live Image Size & Dimension Detectors
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
        setupImageSizeDetector('overlayImageInput', 'overlayImagePreviewBox', 'overlayImagePreview', 'overlayImageName', 'overlayImageDimensions', 'overlayImageFileSize');
    });
</script>
@endsection
