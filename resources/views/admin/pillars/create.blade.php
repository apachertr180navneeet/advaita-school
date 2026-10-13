@extends('layouts.admin')

@section('title', 'Add New Pillar Card')
@section('page_title', 'Create Pillar Card')

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
        min-height: 90px;
        resize: vertical;
    }

    /* Theme Picker Radio Tiles */
    .theme-selector-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
    }

    .theme-radio-tile {
        position: relative;
    }

    .theme-radio-tile input[type="radio"] {
        position: absolute;
        opacity: 0;
        pointer-events: none;
    }

    .theme-tile-label {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 14px;
        border-radius: 10px;
        border: 2px solid #E2E8F0;
        background: #F8FAFC;
        cursor: pointer;
        font-size: 13px;
        font-weight: 700;
        transition: all 0.2s;
    }

    .theme-color-swatch {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        display: inline-block;
    }

    .swatch-orange { background: #F37021; }
    .swatch-blue { background: #0284C7; }
    .swatch-teal { background: #10B981; }

    .theme-radio-tile input[type="radio"]:checked + .theme-tile-label {
        border-color: var(--admin-navy);
        background: #ffffff;
        box-shadow: 0 4px 12px rgba(8, 59, 122, 0.1);
    }

    /* Upload Zone */
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
        height: 80px;
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

    /* Tags Repeater */
    .tag-repeater-box {
        background: #F8FAFC;
        border: 1px solid var(--admin-border);
        border-radius: 12px;
        padding: 18px;
    }

    .tag-row-item {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 12px;
        background: #ffffff;
        padding: 10px 14px;
        border-radius: 10px;
        border: 1px solid #E2E8F0;
    }

    .tag-row-item input {
        border: 1px solid var(--admin-border);
        border-radius: 8px;
        padding: 8px 12px;
        font-size: 13.5px;
    }

    .tag-row-item .tag-input-name {
        flex: 2;
    }

    .tag-row-item .tag-input-icon {
        flex: 1.2;
    }

    .btn-remove-tag {
        background: #FEE2E2;
        color: #EF4444;
        border: 1px solid #FECACA;
        border-radius: 8px;
        width: 34px;
        height: 34px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s;
    }

    .btn-remove-tag:hover {
        background: #EF4444;
        color: #ffffff;
    }

    .btn-add-tag-row {
        background: #E0F2FE;
        color: #0284C7;
        border: 1px dashed #38BDF8;
        padding: 8px 16px;
        border-radius: 8px;
        font-weight: 700;
        font-size: 13px;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: all 0.2s;
    }

    .btn-add-tag-row:hover {
        background: #0284C7;
        color: #ffffff;
        border-style: solid;
    }

    .quick-icon-chips {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        margin-top: 10px;
        font-size: 12px;
    }

    .icon-chip {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        background: #ffffff;
        border: 1px solid #CBD5E1;
        padding: 3px 8px;
        border-radius: 14px;
        color: #334155;
        cursor: pointer;
        font-size: 11px;
        font-weight: 600;
        transition: all 0.2s;
    }

    .icon-chip:hover {
        background: var(--admin-navy);
        color: #ffffff;
        border-color: var(--admin-navy);
    }

    /* Actions */
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
</style>
@endsection

@section('content')
<div class="admin-container">

    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px;">
        <div>
            <h2 style="font-size: 22px; font-weight: 800; color: var(--admin-navy);">Create New Pillar Card</h2>
            <p style="font-size: 13.5px; color: var(--admin-text-muted);">Add a dynamic pillar card with image, theme, badge number, description and feature tags.</p>
        </div>
        <a href="{{ route('admin.pillars.index') }}" class="btn-cancel">
            <i class="fa-solid fa-arrow-left"></i> Back to Pillars
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

    <form action="{{ route('admin.pillars.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- 1. Card Basic Information -->
        <div class="form-container-card">
            <h3 style="font-size: 16px; font-weight: 800; color: var(--admin-navy); margin-bottom: 20px; display: flex; align-items: center; gap: 8px;">
                <i class="fa-solid fa-cube" style="color: var(--admin-orange);"></i> 1. Pillar Title, Badge &amp; Theme
            </h3>

            <div class="form-grid-2">
                <!-- Title -->
                <div class="form-group full-width">
                    <label class="form-label">
                        Pillar Title <span class="required">*</span>
                        <span class="helper-hint">(e.g. Future-ready Labs &amp; Smart Classrooms)</span>
                    </label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="e.g. Future-ready Labs & Smart Classrooms" required>
                </div>

                <!-- Badge Number -->
                <div class="form-group">
                    <label class="form-label">
                        Badge Number
                        <span class="helper-hint">(e.g. 01, 02, 03)</span>
                    </label>
                    <input type="text" name="badge_number" class="form-control" value="{{ old('badge_number', $suggestedBadge) }}" placeholder="e.g. 01">
                </div>

                <!-- Theme Color -->
                <div class="form-group">
                    <label class="form-label">
                        Card Color Theme <span class="required">*</span>
                    </label>
                    <div class="theme-selector-grid">
                        <div class="theme-radio-tile">
                            <input type="radio" id="themeOrange" name="theme_color" value="orange" {{ old('theme_color', 'orange') == 'orange' ? 'checked' : '' }}>
                            <label for="themeOrange" class="theme-tile-label">
                                <span class="theme-color-swatch swatch-orange"></span>
                                <span>Orange</span>
                            </label>
                        </div>
                        <div class="theme-radio-tile">
                            <input type="radio" id="themeBlue" name="theme_color" value="blue" {{ old('theme_color') == 'blue' ? 'checked' : '' }}>
                            <label for="themeBlue" class="theme-tile-label">
                                <span class="theme-color-swatch swatch-blue"></span>
                                <span>Blue</span>
                            </label>
                        </div>
                        <div class="theme-radio-tile">
                            <input type="radio" id="themeTeal" name="theme_color" value="teal" {{ old('theme_color') == 'teal' ? 'checked' : '' }}>
                            <label for="themeTeal" class="theme-tile-label">
                                <span class="theme-color-swatch swatch-teal"></span>
                                <span>Teal / Green</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="form-group full-width">
                    <label class="form-label">
                        Description
                        <span class="helper-hint">(Displayed below title)</span>
                    </label>
                    <textarea name="description" class="form-control" placeholder="e.g. From robotics for the youngest to digital language for senior school — learning that comes alive when you can touch it.">{{ old('description') }}</textarea>
                </div>
            </div>
        </div>

        <!-- 2. Pillar Image & Live Size Inspector -->
        <div class="form-container-card">
            <h3 style="font-size: 16px; font-weight: 800; color: var(--admin-navy); margin-bottom: 20px; display: flex; align-items: center; gap: 8px;">
                <i class="fa-solid fa-image" style="color: var(--admin-orange);"></i> 2. Pillar Card Image
            </h3>

            <div class="upload-zone-card">
                <div class="upload-guide-banner">
                    <i class="fa-solid fa-ruler-combined"></i>
                    <div>
                        <strong>Recommended Image Size:</strong> 600 × 400 px or 800 × 530 px (~3:2 aspect ratio)<br>
                        <span style="font-size: 11.5px; color: #3B82F6;">Allowed formats: JPG, PNG, WebP (Max 5MB). Live analyzer automatically detects dimensions & file size on selection.</span>
                    </div>
                </div>

                <label for="pillarImageInput" class="file-trigger-btn">
                    <i class="fa-solid fa-cloud-arrow-up"></i> Choose Pillar Image
                </label>
                <input type="file" id="pillarImageInput" name="image" class="custom-file-input" accept="image/*" required>

                <!-- Live Size Detector Box -->
                <div class="preview-box" id="pillarImagePreviewBox">
                    <div class="preview-img-container">
                        <img id="pillarImagePreview" src="" alt="Pillar Image Preview">
                    </div>
                    <div class="size-detector-details">
                        <div class="size-filename" id="pillarImageName" style="font-size: 13px; font-weight: 700; color: var(--admin-navy);"></div>
                        <div class="size-live-badge">
                            <i class="fa-solid fa-circle-check"></i> <span id="pillarImageDimensions"></span>
                        </div>
                        <div id="pillarImageFileSize" style="font-size: 12px; color: #64748B;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Dynamic Feature Tags Repeater -->
        <div class="form-container-card">
            <h3 style="font-size: 16px; font-weight: 800; color: var(--admin-navy); margin-bottom: 20px; display: flex; align-items: center; gap: 8px;">
                <i class="fa-solid fa-tags" style="color: var(--admin-orange);"></i> 3. Feature Tag Pills (Icons &amp; Labels)
            </h3>

            <div class="tag-repeater-box">
                <p style="font-size: 13px; color: #64748B; margin-bottom: 12px;">
                    Add interactive pill tags with FontAwesome icons (e.g. <code>fa-solid fa-robot</code>, <code>fa-solid fa-flask</code>):
                </p>

                <div id="tagsListContainer">
                    <!-- Default initial rows -->
                    <div class="tag-row-item">
                        <input type="text" name="tag_labels[]" class="tag-input-name" placeholder="Tag Name (e.g. Robotics Lab)">
                        <input type="text" name="tag_icons[]" class="tag-input-icon" value="fa-solid fa-robot" placeholder="Icon class (e.g. fa-solid fa-robot)">
                        <button type="button" class="btn-remove-tag" onclick="removeTagRow(this)" title="Remove tag">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                    <div class="tag-row-item">
                        <input type="text" name="tag_labels[]" class="tag-input-name" placeholder="Tag Name (e.g. Computer Lab)">
                        <input type="text" name="tag_icons[]" class="tag-input-icon" value="fa-solid fa-display" placeholder="Icon class">
                        <button type="button" class="btn-remove-tag" onclick="removeTagRow(this)" title="Remove tag">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </div>

                <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 14px;">
                    <button type="button" class="btn-add-tag-row" onclick="addTagRow()">
                        <i class="fa-solid fa-plus"></i> Add Another Feature Tag
                    </button>
                </div>

                <!-- Quick Icon Suggestions -->
                <div style="margin-top: 16px; padding-top: 12px; border-top: 1px dashed #CBD5E1;">
                    <span style="font-size: 11.5px; font-weight: 700; color: #64748B;">Quick Icon Presets (Click to copy class into last tag):</span>
                    <div class="quick-icon-chips">
                        <span class="icon-chip" onclick="applyPresetIcon('fa-solid fa-robot')"><i class="fa-solid fa-robot"></i> Robotics</span>
                        <span class="icon-chip" onclick="applyPresetIcon('fa-solid fa-display')"><i class="fa-solid fa-display"></i> Computer</span>
                        <span class="icon-chip" onclick="applyPresetIcon('fa-solid fa-flask')"><i class="fa-solid fa-flask"></i> Science</span>
                        <span class="icon-chip" onclick="applyPresetIcon('fa-solid fa-calculator')"><i class="fa-solid fa-calculator"></i> Maths</span>
                        <span class="icon-chip" onclick="applyPresetIcon('fa-solid fa-earth-americas')"><i class="fa-solid fa-earth-americas"></i> Language</span>
                        <span class="icon-chip" onclick="applyPresetIcon('fa-solid fa-trophy')"><i class="fa-solid fa-trophy"></i> Sports</span>
                        <span class="icon-chip" onclick="applyPresetIcon('fa-solid fa-music')"><i class="fa-solid fa-music"></i> Music</span>
                        <span class="icon-chip" onclick="applyPresetIcon('fa-solid fa-palette')"><i class="fa-solid fa-palette"></i> Arts</span>
                        <span class="icon-chip" onclick="applyPresetIcon('fa-solid fa-bus')"><i class="fa-solid fa-bus"></i> Tours</span>
                        <span class="icon-chip" onclick="applyPresetIcon('fa-solid fa-campground')"><i class="fa-solid fa-campground"></i> Camps</span>
                        <span class="icon-chip" onclick="applyPresetIcon('fa-solid fa-chalkboard-user')"><i class="fa-solid fa-chalkboard-user"></i> Faculty</span>
                        <span class="icon-chip" onclick="applyPresetIcon('fa-solid fa-shield')"><i class="fa-solid fa-shield"></i> Safe</span>
                        <span class="icon-chip" onclick="applyPresetIcon('fa-solid fa-heart')"><i class="fa-solid fa-heart"></i> Values</span>
                        <span class="icon-chip" onclick="applyPresetIcon('fa-solid fa-school')"><i class="fa-solid fa-school"></i> Campus</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Display Settings -->
        <div class="form-container-card">
            <h3 style="font-size: 16px; font-weight: 800; color: var(--admin-navy); margin-bottom: 20px; display: flex; align-items: center; gap: 8px;">
                <i class="fa-solid fa-sliders" style="color: var(--admin-orange);"></i> 4. Display Settings
            </h3>

            <div class="form-grid-2">
                <div>
                    <label class="form-label">Display Order</label>
                    <input type="number" name="order" class="form-control" value="{{ old('order', $nextOrder) }}" min="1">
                </div>
                <div>
                    <label class="form-label">Status</label>
                    <select name="is_active" class="form-control" style="font-weight: 700;">
                        <option value="1" {{ old('is_active', '1') == '1' ? 'selected' : '' }}>Active (Visible on Homepage)</option>
                        <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive (Hidden)</option>
                    </select>
                </div>
            </div>

            <!-- Bottom Actions -->
            <div class="form-actions-bar">
                <a href="{{ route('admin.pillars.index') }}" class="btn-cancel">Cancel</a>
                <button type="submit" class="btn-submit">
                    <i class="fa-solid fa-check"></i> Save &amp; Publish Pillar Card
                </button>
            </div>
        </div>

    </form>

</div>

<script>
    // Live Image Size & Dimension Detector
    const imageInput = document.getElementById('pillarImageInput');
    const previewBox = document.getElementById('pillarImagePreviewBox');
    const previewImg = document.getElementById('pillarImagePreview');
    const nameEl = document.getElementById('pillarImageName');
    const dimEl = document.getElementById('pillarImageDimensions');
    const sizeEl = document.getElementById('pillarImageFileSize');

    if (imageInput) {
        imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;

            nameEl.textContent = file.name;
            sizeEl.textContent = 'File Size: ' + formatFileSize(file.size);

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

    // Dynamic Tag Repeater
    function addTagRow() {
        const container = document.getElementById('tagsListContainer');
        const row = document.createElement('div');
        row.className = 'tag-row-item';
        row.innerHTML = `
            <input type="text" name="tag_labels[]" class="tag-input-name" placeholder="Tag Name">
            <input type="text" name="tag_icons[]" class="tag-input-icon" value="fa-solid fa-check" placeholder="Icon class">
            <button type="button" class="btn-remove-tag" onclick="removeTagRow(this)" title="Remove tag">
                <i class="fa-solid fa-trash-can"></i>
            </button>
        `;
        container.appendChild(row);
    }

    function removeTagRow(button) {
        const row = button.closest('.tag-row-item');
        if (row) {
            row.remove();
        }
    }

    function applyPresetIcon(iconClass) {
        const iconInputs = document.querySelectorAll('.tag-input-icon');
        if (iconInputs.length > 0) {
            const lastInput = iconInputs[iconInputs.length - 1];
            lastInput.value = iconClass;
        }
    }
</script>
@endsection
