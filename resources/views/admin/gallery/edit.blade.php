@extends('layouts.admin')

@section('title', 'Edit Gallery Photo')
@section('page_title', 'Edit Campus Gallery Photo')



@section('content')
<div class="pb-30">
    <!-- Back Navigation -->
    <div class="d-flex align-items-center justify-content-between mb-20">
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
                    <i class="fa-solid fa-pen-to-square text-orange"></i>
                    <span>Edit Photo #{{ $item->id }} &mdash; {{ $item->category }}</span>
                </h4>
                <span class="text-muted fs-12">Slide Order #{{ $item->order }}</span>
            </div>

            <form action="{{ route('admin.gallery.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-card-body">
                    <!-- Current Photo Specs Bar -->
                    <div class="current-photo-info-bar">
                        <span><i class="fa-solid fa-image me-1"></i> Current Image</span>
                        <span>
                            <strong class="text-navy">{{ $item->image_dimensions ?? 'Standard' }}</strong>
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
                            <h5 class="text-navy fs-13 font-bold mb-2">Click or drop new photo to replace current</h5>
                            <p class="text-muted fs-11 m-0">Leave empty to keep existing photo (JPG, PNG, WEBP)</p>
                        </div>
                        @error('image')
                            <span class="form-error-msg">{{ $message }}</span>
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
                                <button type="button" class="chip-preset-btn" onclick="setCategory('Life at Advaita', 'fa-solid fa-school-flag')">Life at Advaita</button>
                                <button type="button" class="chip-preset-btn" onclick="setCategory('Events & Celebrations', 'fa-solid fa-cake-candles')">Events &amp; Celebrations</button>
                                <button type="button" class="chip-preset-btn" onclick="setCategory('Academics and Science Activities', 'fa-solid fa-flask-vial')">Academics &amp; Science</button>
                                <button type="button" class="chip-preset-btn" onclick="setCategory('Educational Tours & Excursions', 'fa-solid fa-bus-simple')">Tours &amp; Excursions</button>
                                <button type="button" class="chip-preset-btn" onclick="setCategory('Sports & Competitions', 'fa-solid fa-trophy')">Sports &amp; Competitions</button>
                                <button type="button" class="chip-preset-btn" onclick="setCategory('Student Leadership & Achievements', 'fa-solid fa-award')">Leadership &amp; Achievements</button>
                                <button type="button" class="chip-preset-btn" onclick="setCategory('Art, Culture & Creativity', 'fa-solid fa-palette')">Art &amp; Culture</button>
                                <button type="button" class="chip-preset-btn" onclick="setCategory('Advaita Kids', 'fa-solid fa-child-reaching')">Advaita Kids</button>
                                <button type="button" class="chip-preset-btn" onclick="setCategory('Campus & Facilities', 'fa-solid fa-landmark')">Campus &amp; Facilities</button>
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
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" id="inputOrder" name="order" class="form-input-custom" value="{{ old('order', $item->order) }}" min="0" required>
                        </div>

                        <div class="form-group-custom justify-content-center">
                            <label class="form-label-custom">
                                <span>Visibility Status</span>
                            </label>
                            <div class="d-flex align-items-center gap-10 mt-8">
                                <input type="checkbox" name="is_active" value="1" id="isActiveCheck" {{ old('is_active', $item->is_active) ? 'checked' : '' }} class="checkbox-orange">
                                <label for="isActiveCheck" class="text-navy font-semibold cursor-pointer fs-13">
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
                <i class="fa-solid fa-eye text-orange"></i>
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
                <p class="text-muted text-center fs-11 mt-14">
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
