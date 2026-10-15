@extends('layouts.admin')

@section('title', 'Edit Pillar Card #' . $pillar->id)
@section('page_title', 'Edit Pillar Card')



@section('content')
<div class="admin-container">

    <div class="d-flex align-items-center justify-content-between mb-24">
        <div>
            <h2 class="text-navy fs-22 font-extrabold">Edit Pillar Card #{{ $pillar->id }}</h2>
            <p class="text-muted fs-13">Modify title, badge number, color theme, image, description and feature tags.</p>
        </div>
        <a href="{{ route('admin.pillars.index') }}" class="btn-cancel">
            <i class="fa-solid fa-arrow-left"></i> Back to Pillars
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

    <form action="{{ route('admin.pillars.update', $pillar->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- 1. Card Basic Information -->
        <div class="form-container-card">
            <h3 class="form-section-header-navy">
                <i class="fa-solid fa-cube text-orange"></i> 1. Pillar Title, Badge &amp; Theme
            </h3>

            <div class="form-grid-2">
                <!-- Title -->
                <div class="form-group full-width">
                    <label class="form-label">
                        Pillar Title <span class="required">*</span>
                    </label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $pillar->title) }}" required>
                </div>

                <!-- Badge Number -->
                <div class="form-group">
                    <label class="form-label">
                        Badge Number
                        <span class="helper-hint">(e.g. 01, 02, 03)</span>
                    </label>
                    <input type="text" name="badge_number" class="form-control" value="{{ old('badge_number', $pillar->badge_number) }}">
                </div>

                <!-- Theme Color -->
                <div class="form-group">
                    <label class="form-label">
                        Card Color Theme <span class="required">*</span>
                    </label>
                    <div class="theme-selector-grid">
                        <div class="theme-radio-tile">
                            <input type="radio" id="themeOrange" name="theme_color" value="orange" {{ old('theme_color', $pillar->theme_color) == 'orange' ? 'checked' : '' }}>
                            <label for="themeOrange" class="theme-tile-label">
                                <span class="theme-color-swatch swatch-orange"></span>
                                <span>Orange</span>
                            </label>
                        </div>
                        <div class="theme-radio-tile">
                            <input type="radio" id="themeBlue" name="theme_color" value="blue" {{ old('theme_color', $pillar->theme_color) == 'blue' ? 'checked' : '' }}>
                            <label for="themeBlue" class="theme-tile-label">
                                <span class="theme-color-swatch swatch-blue"></span>
                                <span>Blue</span>
                            </label>
                        </div>
                        <div class="theme-radio-tile">
                            <input type="radio" id="themeTeal" name="theme_color" value="teal" {{ old('theme_color', $pillar->theme_color) == 'teal' ? 'checked' : '' }}>
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
                    </label>
                    <textarea name="description" class="form-control">{{ old('description', $pillar->description) }}</textarea>
                </div>
            </div>
        </div>

        <!-- 2. Pillar Image & Live Size Inspector -->
        <div class="form-container-card">
            <h3 class="form-section-header-navy">
                <i class="fa-solid fa-image text-orange"></i> 2. Pillar Card Image
            </h3>

            <!-- Existing Image Preview & Dimensions -->
            <div class="current-img-box">
                <a href="{{ $pillar->image_url }}" target="_blank" class="current-thumb-wrap" title="View Current Image">
                    <img src="{{ $pillar->image_url }}" alt="{{ $pillar->title }}">
                </a>
                <div class="current-meta-info">
                    <div class="text-navy fs-12 font-bold">Current Image Details:</div>
                    <div class="d-flex flex-wrap gap-4">
                        @if($pillar->image_dimensions)
                            <span class="current-meta-badge">
                                <i class="fa-solid fa-expand"></i> {{ $pillar->image_dimensions }}
                            </span>
                        @endif
                        @if($pillar->image_size)
                            <span class="current-meta-badge filesize">
                                <i class="fa-solid fa-hard-drive"></i> {{ $pillar->image_size }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Replace Image Zone -->
            <div class="upload-zone-card">
                <div class="upload-guide-banner">
                    <i class="fa-solid fa-ruler-combined"></i>
                    <div>
                        <strong>Recommended Image Size:</strong> 600 × 400 px or 800 × 530 px (~3:2 aspect ratio)<br>
                        <span class="text-blue fs-11">Leave empty to keep existing image. Allowed: JPG, PNG, WebP (Max 5MB).</span>
                    </div>
                </div>

                <label for="pillarImageInput" class="file-trigger-btn">
                    <i class="fa-solid fa-cloud-arrow-up"></i> Choose New Pillar Image
                </label>
                <input type="file" id="pillarImageInput" name="image" class="custom-file-input" accept="image/*">

                <!-- Live Size Detector Box -->
                <div class="preview-box" id="pillarImagePreviewBox">
                    <div class="preview-img-container">
                        <img id="pillarImagePreview" src="" alt="Pillar Image Preview">
                    </div>
                    <div class="size-detector-details">
                        <div class="size-filename" id="pillarImageName" class="text-navy fs-13 font-bold"></div>
                        <div class="size-live-badge">
                            <i class="fa-solid fa-circle-check"></i> <span id="pillarImageDimensions"></span>
                        </div>
                        <div id="pillarImageFileSize" class="text-muted fs-12"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Dynamic Feature Tags Repeater -->
        <div class="form-container-card">
            <h3 class="form-section-header-navy">
                <i class="fa-solid fa-tags text-orange"></i> 3. Feature Tag Pills (Icons &amp; Labels)
            </h3>

            <div class="tag-repeater-box">
                <p class="text-muted fs-13 mb-12">
                    Edit or add interactive pill tags with FontAwesome icons:
                </p>

                <div id="tagsListContainer">
                    @php
                        $existingTags = is_array($pillar->tags) ? $pillar->tags : [];
                    @endphp
                    @forelse($existingTags as $tagItem)
                        @php
                            $tLabel = is_array($tagItem) ? ($tagItem['label'] ?? '') : $tagItem;
                            $tIcon = is_array($tagItem) ? ($tagItem['icon'] ?? 'fa-solid fa-check') : 'fa-solid fa-check';
                        @endphp
                        <div class="tag-row-item">
                            <input type="text" name="tag_labels[]" class="tag-input-name" value="{{ $tLabel }}" placeholder="Tag Name">
                            <input type="text" name="tag_icons[]" class="tag-input-icon" value="{{ $tIcon }}" placeholder="Icon class">
                            <button type="button" class="btn-remove-tag" onclick="removeTagRow(this)" title="Remove tag">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    @empty
                        <div class="tag-row-item">
                            <input type="text" name="tag_labels[]" class="tag-input-name" placeholder="Tag Name">
                            <input type="text" name="tag_icons[]" class="tag-input-icon" value="fa-solid fa-check" placeholder="Icon class">
                            <button type="button" class="btn-remove-tag" onclick="removeTagRow(this)" title="Remove tag">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    @endforelse
                </div>

                <div class="d-flex align-items-center justify-content-between mt-14">
                    <button type="button" class="btn-add-tag-row" onclick="addTagRow()">
                        <i class="fa-solid fa-plus"></i> Add Another Feature Tag
                    </button>
                </div>

                <!-- Quick Icon Suggestions -->
                <div class="pt-12 mt-16 border-dashed-t">
                    <span class="text-muted fs-11 font-bold">Quick Icon Presets (Click to copy class into last tag):</span>
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
            <h3 class="form-section-header-navy">
                <i class="fa-solid fa-sliders text-orange"></i> 4. Display Settings
            </h3>

            <div class="form-grid-2">
                <div>
                    <label class="form-label">Display Order</label>
                    <input type="number" name="order" class="form-control" value="{{ old('order', $pillar->order) }}" min="1">
                </div>
                <div>
                    <label class="form-label">Status</label>
                    <select name="is_active" class="form-control font-bold">
                        <option value="1" {{ old('is_active', $pillar->is_active ? '1' : '0') == '1' ? 'selected' : '' }}>Active (Visible on Homepage)</option>
                        <option value="0" {{ old('is_active', $pillar->is_active ? '1' : '0') == '0' ? 'selected' : '' }}>Inactive (Hidden)</option>
                    </select>
                </div>
            </div>

            <!-- Bottom Actions -->
            <div class="form-actions-bar">
                <a href="{{ route('admin.pillars.index') }}" class="btn-cancel">Cancel</a>
                <button type="submit" class="btn-submit">
                    <i class="fa-solid fa-check"></i> Update Pillar Card
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
