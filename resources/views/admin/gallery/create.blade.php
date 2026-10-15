@extends('layouts.admin')

@section('title', 'Add Gallery Photo')
@section('page_title', 'Add New Campus Gallery Photo')



@section('content')
<div class="pb-30">
    <!-- Breadcrumb / Back Navigation -->
    <div class="d-flex align-items-center justify-content-between mb-20">
        <a href="{{ route('admin.gallery.index') }}" class="btn-admin btn-secondary">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Gallery</span>
        </a>
    </div>

    <div class="form-page-layout">
        <!-- Left: Upload Form -->
        <div class="form-container-card">
            <div class="form-card-head">
                <h4>
                    <i class="fa-solid fa-camera text-orange"></i>
                    <span>Upload New Campus Photo</span>
                </h4>
                <span class="text-muted fs-12">Adds photo to Section 7 carousel</span>
            </div>

            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-card-body">
                    <!-- Dropzone -->
                    <div class="form-group-custom">
                        <label class="form-label-custom">
                            <span>Photo File</span>
                            <span class="text-danger">*</span>
                        </label>
                        <div class="image-dropzone">
                            <input type="file" name="image" id="inputImage" accept="image/*" required>
                            <div class="dropzone-icon-box">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                            </div>
                            <h5 class="form-switch-label mb-4">Drag &amp; drop photo here, or click to browse</h5>
                            <p class="text-muted fs-12 m-0">Recommended: 600 × 400 px or 16:9 ratio (JPG, PNG, WEBP up to 5 MB)</p>
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
                            <input type="text" id="inputCategory" name="category" class="form-input-custom" value="{{ old('category', 'Smart Classroom') }}" placeholder="e.g. School Band & Assembly" maxlength="100">
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
                            <input type="text" id="inputIcon" name="icon" class="form-input-custom" value="{{ old('icon', 'fa-solid fa-chalkboard-user') }}" placeholder="e.g. fa-solid fa-drum" maxlength="100">
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
                        <input type="text" id="inputCaption" name="caption" class="form-input-custom" value="{{ old('caption') }}" placeholder="Brief description of the classroom, student activity, or campus event..." maxlength="255">
                    </div>

                    <!-- Order and Visibility -->
                    <div class="form-grid-2">
                        <div class="form-group-custom">
                            <label class="form-label-custom">
                                <span>Sort Order Position</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" id="inputOrder" name="order" class="form-input-custom" value="{{ old('order', $nextOrder) }}" min="0" required>
                        </div>

                        <div class="form-group-custom justify-content-center">
                            <label class="form-label-custom">
                                <span>Visibility Status</span>
                            </label>
                            <div class="d-flex align-items-center gap-10 mt-8">
                                <input type="checkbox" name="is_active" value="1" id="isActiveCheck" {{ old('is_active', true) ? 'checked' : '' }} class="checkbox-orange">
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
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Upload &amp; Save Photo</span>
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
                        <img id="previewImg" src="{{ asset('assets/images/gallery/gallery-classroom-learning.jpg') }}" alt="Preview" class="live-visual-img">
                        <div class="live-visual-badge">
                            <i id="previewIcon" class="fa-solid fa-chalkboard-user"></i>
                            <span id="previewCategory">Smart Classroom</span>
                        </div>
                        <span class="live-visual-order" id="previewOrder">#{{ $nextOrder }}</span>
                    </div>
                    <div class="live-visual-details">
                        <p class="live-visual-caption" id="previewCaption">
                            Students actively engaging in a modern interactive smart classroom session.
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

    // Live Image Preview
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
