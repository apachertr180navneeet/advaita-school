@extends('layouts.admin')

@section('title', 'Edit Gallery Photo')
@section('page_title', 'Edit Campus Gallery Photo')

@section('styles')
<style>
    .form-page-layout {
        display: grid;
        grid-template-columns: 1fr 340px;
        gap: 24px;
        align-items: start;
    }

    @media (max-width: 992px) {
        .form-page-layout {
            grid-template-columns: 1fr;
        }
    }

    .form-container-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 18px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        overflow: hidden;
    }

    .form-card-head {
        padding: 20px 26px;
        background: #FAFBFD;
        border-bottom: 1px solid var(--admin-border);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .form-card-head h4 {
        font-size: 16px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .form-card-body {
        padding: 26px;
    }

    .form-grid-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group-custom {
        display: flex;
        flex-direction: column;
        gap: 7px;
        margin-bottom: 18px;
    }

    .form-label-custom {
        font-size: 13px;
        font-weight: 700;
        color: var(--admin-navy);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .form-input-custom {
        background: #F8FAFC;
        border: 1px solid var(--admin-border);
        border-radius: 10px;
        padding: 11px 14px;
        font-size: 13.5px;
        font-family: inherit;
        color: var(--admin-text-main);
        outline: none;
        transition: all 0.2s;
        width: 100%;
        box-sizing: border-box;
    }

    .form-input-custom:focus {
        border-color: var(--admin-navy);
        background: #ffffff;
        box-shadow: 0 0 0 3px rgba(8, 59, 122, 0.08);
    }

    /* Current Photo Specs Pill Bar */
    .current-photo-info-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 14px;
        background: #F8FAFC;
        border: 1px solid var(--admin-border);
        border-radius: 10px;
        margin-bottom: 12px;
        font-size: 12.5px;
        color: #64748B;
    }

    /* Category Chip Presets */
    .chip-presets-row {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        margin-top: 6px;
    }

    .chip-preset-btn {
        background: #F1F5F9;
        border: 1px solid #E2E8F0;
        padding: 4px 10px;
        border-radius: 16px;
        font-size: 11.5px;
        font-weight: 600;
        color: #475569;
        cursor: pointer;
        transition: all 0.2s;
    }

    .chip-preset-btn:hover {
        background: #E2E8F0;
        color: var(--admin-navy);
    }

    /* Upload Dropzone */
    .image-dropzone {
        border: 2px dashed #CBD5E1;
        border-radius: 14px;
        padding: 22px;
        text-align: center;
        background: #F8FAFC;
        cursor: pointer;
        transition: all 0.2s;
        position: relative;
    }

    .image-dropzone:hover {
        border-color: var(--admin-orange);
        background: #FFFBF7;
    }

    .image-dropzone input[type="file"] {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .dropzone-icon-box {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: #EFF6FF;
        color: #2563EB;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        margin: 0 auto 8px auto;
    }

    /* Live Preview Card (Right Column) */
    .preview-sticky-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 18px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        overflow: hidden;
        position: sticky;
        top: 24px;
    }

    .preview-card-head {
        padding: 16px 20px;
        background: #FAFBFD;
        border-bottom: 1px solid var(--admin-border);
        font-size: 13.5px;
        font-weight: 800;
        color: var(--admin-navy);
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .preview-card-body {
        padding: 20px;
    }

    .live-visual-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06);
    }

    .live-visual-media {
        position: relative;
        height: 170px;
        background: #0f172a;
        overflow: hidden;
    }

    .live-visual-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .live-visual-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background: rgba(15, 23, 42, 0.88);
        backdrop-filter: blur(8px);
        color: #ffffff;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .live-visual-badge i {
        color: var(--admin-orange);
    }

    .live-visual-order {
        position: absolute;
        top: 10px;
        right: 10px;
        background: var(--admin-orange);
        color: #ffffff;
        font-size: 10.5px;
        font-weight: 800;
        padding: 3px 8px;
        border-radius: 6px;
    }

    .live-visual-details {
        padding: 14px;
    }

    .live-visual-caption {
        font-size: 12.5px;
        color: #334155;
        line-height: 1.45;
        margin: 0;
        min-height: 36px;
    }

    .form-actions-footer {
        padding: 18px 26px;
        background: #FAFBFD;
        border-top: 1px solid var(--admin-border);
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 12px;
    }
</style>
@endsection

@section('content')
<div style="padding-bottom: 30px;">
    <!-- Back Navigation -->
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
        <a href="{{ route('admin.gallery.index') }}" class="btn-admin btn-secondary">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Gallery</span>
        </a>
    </div>

    <div class="form-page-layout">
        <!-- Left: Edit Form -->
        <div class="form-container-card">
            <div class="form-card-head">
                <h4>
                    <i class="fa-solid fa-pen-to-square" style="color: var(--admin-orange);"></i>
                    <span>Edit Photo #{{ $item->id }} &mdash; {{ $item->category }}</span>
                </h4>
                <span style="font-size: 12px; color: #64748B;">Slide Order #{{ $item->order }}</span>
            </div>

            <form action="{{ route('admin.gallery.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-card-body">
                    <!-- Current Photo Specs Bar -->
                    <div class="current-photo-info-bar">
                        <span><i class="fa-solid fa-image me-1"></i> Current Image</span>
                        <span>
                            <strong style="color: var(--admin-navy);">{{ $item->image_dimensions ?? 'Standard' }}</strong>
                            &middot;
                            {{ $item->image_size ?? 'Optimized' }}
                        </span>
                    </div>

                    <!-- Replace Photo Dropzone -->
                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Replace Photo File (Optional)</span>
                        </label>
                        <div class="image-dropzone">
                            <input type="file" name="image" id="inputImage" accept="image/*">
                            <div class="dropzone-icon-box">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                            </div>
                            <h5 style="font-size: 13.5px; font-weight: 700; color: var(--admin-navy); margin: 0 0 2px 0;">Click or drop new photo to replace current</h5>
                            <p style="font-size: 11.5px; color: #64748B; margin: 0;">Leave empty to keep existing photo (JPG, PNG, WEBP)</p>
                        </div>
                        @error('image')
                            <span style="font-size: 11.5px; color: #EF4444; margin-top: 4px;">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Category & Icon -->
                    <div class="form-grid-2">
                        <div class="form-group-custom">
                            <label class="form-label-custom">
                                <span>Category / Activity Tag</span>
                            </label>
                            <input type="text" id="inputCategory" name="category" class="form-input-custom" value="{{ old('category', $item->category) }}" placeholder="e.g. School Band & Assembly" maxlength="100">
                            <!-- Quick Category Presets -->
                            <div class="chip-presets-row">
                                <button type="button" class="chip-preset-btn" onclick="setCategory('School Band & Assembly', 'fa-solid fa-drum')">School Band</button>
                                <button type="button" class="chip-preset-btn" onclick="setCategory('Math & Science Labs', 'fa-solid fa-flask-vial')">Science Labs</button>
                                <button type="button" class="chip-preset-btn" onclick="setCategory('Football League & Turf', 'fa-solid fa-futbol')">Football</button>
                                <button type="button" class="chip-preset-btn" onclick="setCategory('Art Studio & Origami', 'fa-solid fa-palette')">Art Studio</button>
                                <button type="button" class="chip-preset-btn" onclick="setCategory('Robotics & AI Lab', 'fa-solid fa-robot')">Robotics</button>
                            </div>
                        </div>

                        <div class="form-group-custom">
                            <label class="form-label-custom">
                                <span>FontAwesome Icon Class</span>
                            </label>
                            <input type="text" id="inputIcon" name="icon" class="form-input-custom" value="{{ old('icon', $item->icon) }}" placeholder="e.g. fa-solid fa-drum" maxlength="100">
                            <!-- Quick Icon Presets -->
                            <div class="chip-presets-row">
                                <button type="button" class="chip-preset-btn" onclick="setIcon('fa-solid fa-camera')"><i class="fa-solid fa-camera"></i> Camera</button>
                                <button type="button" class="chip-preset-btn" onclick="setIcon('fa-solid fa-drum')"><i class="fa-solid fa-drum"></i> Drum</button>
                                <button type="button" class="chip-preset-btn" onclick="setIcon('fa-solid fa-flask-vial')"><i class="fa-solid fa-flask-vial"></i> Lab</button>
                                <button type="button" class="chip-preset-btn" onclick="setIcon('fa-solid fa-futbol')"><i class="fa-solid fa-futbol"></i> Sports</button>
                                <button type="button" class="chip-preset-btn" onclick="setIcon('fa-solid fa-graduation-cap')"><i class="fa-solid fa-graduation-cap"></i> Academic</button>
                            </div>
                        </div>
                    </div>

                    <!-- Caption Description -->
                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Caption / Alt Description</span>
                        </label>
                        <input type="text" id="inputCaption" name="caption" class="form-input-custom" value="{{ old('caption', $item->caption) }}" placeholder="Brief description of the classroom, student activity, or campus event..." maxlength="255">
                    </div>

                    <!-- Order and Visibility -->
                    <div class="form-grid-2">
                        <div class="form-group-custom">
                            <label class="form-label-custom">
                                <span>Sort Order Position</span>
                                <span style="color: #EF4444;">*</span>
                            </label>
                            <input type="number" id="inputOrder" name="order" class="form-input-custom" value="{{ old('order', $item->order) }}" min="0" required>
                        </div>

                        <div class="form-group-custom" style="justify-content: center;">
                            <label class="form-label-custom">
                                <span>Visibility Status</span>
                            </label>
                            <div style="display: flex; align-items: center; gap: 10px; margin-top: 8px;">
                                <input type="checkbox" name="is_active" value="1" id="isActiveCheck" {{ old('is_active', $item->is_active) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--admin-orange);">
                                <label for="isActiveCheck" style="font-size: 13.5px; font-weight: 600; color: var(--admin-navy); cursor: pointer;">
                                    Visible in homepage carousel
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-actions-footer">
                    <a href="{{ route('admin.gallery.index') }}" class="btn-admin btn-secondary">Cancel</a>
                    <button type="submit" class="btn-admin btn-primary">
                        <i class="fa-solid fa-floppy-disk"></i>
                        <span>Save Changes</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Right: Live Card Preview Sticky Box -->
        <div class="preview-sticky-card">
            <div class="preview-card-head">
                <i class="fa-solid fa-eye" style="color: var(--admin-orange);"></i>
                <span>Live Card Preview</span>
            </div>
            <div class="preview-card-body">
                <div class="live-visual-card">
                    <div class="live-visual-media">
                        <img id="previewImg" src="{{ $item->image_url }}" alt="{{ $item->caption ?? $item->category }}" class="live-visual-img">
                        <div class="live-visual-badge">
                            <i id="previewIcon" class="{{ $item->icon ?: 'fa-solid fa-camera' }}"></i>
                            <span id="previewCategory">{{ $item->category ?: 'Campus Life' }}</span>
                        </div>
                        <span class="live-visual-order" id="previewOrder">#{{ $item->order }}</span>
                    </div>
                    <div class="live-visual-details">
                        <p class="live-visual-caption" id="previewCaption">
                            {{ $item->caption ?: 'Brief caption description...' }}
                        </p>
                    </div>
                </div>
                <p style="font-size: 11.5px; color: #94A3B8; text-align: center; margin: 14px 0 0 0;">
                    Real-time simulation of how this photo card appears in the homepage slider.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const inputImage = document.getElementById('inputImage');
    const inputCategory = document.getElementById('inputCategory');
    const inputIcon = document.getElementById('inputIcon');
    const inputCaption = document.getElementById('inputCaption');
    const inputOrder = document.getElementById('inputOrder');

    const previewImg = document.getElementById('previewImg');
    const previewCategory = document.getElementById('previewCategory');
    const previewIcon = document.getElementById('previewIcon');
    const previewCaption = document.getElementById('previewCaption');
    const previewOrder = document.getElementById('previewOrder');

    // Live Image Preview on File Change
    if (inputImage && previewImg) {
        inputImage.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (ev) => {
                    previewImg.src = ev.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    }

    if (inputCategory && previewCategory) {
        inputCategory.addEventListener('input', () => {
            previewCategory.textContent = inputCategory.value || 'Campus Life';
        });
    }

    if (inputIcon && previewIcon) {
        inputIcon.addEventListener('input', () => {
            previewIcon.className = inputIcon.value || 'fa-solid fa-camera';
        });
    }

    if (inputCaption && previewCaption) {
        inputCaption.addEventListener('input', () => {
            previewCaption.textContent = inputCaption.value || 'Brief caption description...';
        });
    }

    if (inputOrder && previewOrder) {
        inputOrder.addEventListener('input', () => {
            previewOrder.textContent = '#' + (inputOrder.value || '1');
        });
    }
});

function setCategory(cat, icon) {
    document.getElementById('inputCategory').value = cat;
    document.getElementById('inputIcon').value = icon;
    document.getElementById('previewCategory').textContent = cat;
    document.getElementById('previewIcon').className = icon;
}

function setIcon(icon) {
    document.getElementById('inputIcon').value = icon;
    document.getElementById('previewIcon').className = icon;
}
</script>
@endsection
