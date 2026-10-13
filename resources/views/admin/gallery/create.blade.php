@extends('layouts.admin')

@section('title', 'Add Gallery Photo')
@section('page_title', 'Add New Campus Gallery Photo')

@section('styles')
<style>
    .form-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 18px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        overflow: hidden;
        max-width: 860px;
        margin: 0 auto;
    }

    .form-header-bar {
        padding: 18px 24px;
        background: #FAFBFD;
        border-bottom: 1px solid var(--admin-border);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .form-header-bar h4 {
        font-size: 15px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .form-body-content {
        padding: 26px;
    }

    .form-grid-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group-item {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .form-label-item {
        font-size: 13px;
        font-weight: 700;
        color: var(--admin-navy);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .form-input-item {
        padding: 10px 14px;
        border: 1px solid var(--admin-border);
        border-radius: 10px;
        font-size: 13.5px;
        outline: none;
        transition: border-color 0.2s;
        width: 100%;
        box-sizing: border-box;
    }

    .form-input-item:focus {
        border-color: var(--admin-orange);
    }

    /* Dropzone */
    .upload-dropzone {
        border: 2px dashed #CBD5E1;
        border-radius: 14px;
        padding: 24px;
        text-align: center;
        background: #F8FAFC;
        cursor: pointer;
        transition: all 0.2s;
        position: relative;
    }

    .upload-dropzone:hover {
        border-color: var(--admin-orange);
        background: #FFFBF7;
    }

    .upload-dropzone input[type="file"] {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .dropzone-preview {
        max-width: 320px;
        height: 180px;
        object-fit: cover;
        border-radius: 10px;
        margin-top: 12px;
        border: 1px solid var(--admin-border);
        display: none;
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
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
        <a href="{{ route('admin.gallery.index') }}" class="btn-admin btn-secondary">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Photos</span>
        </a>
    </div>

    <div class="form-card">
        <div class="form-header-bar">
            <h4>
                <i class="fa-solid fa-camera" style="color: var(--admin-orange);"></i>
                <span>Upload New Campus Gallery Photo</span>
            </h4>
            <span style="font-size: 12px; color: #64748B;">Recommended: 600 × 400 px or 16:9 aspect ratio</span>
        </div>

        <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-body-content">
                <!-- Image Upload Dropzone -->
                <div class="form-group-item" style="margin-bottom: 22px;">
                    <label class="form-label-item">
                        <span>Gallery Photo File</span>
                        <span style="color: #EF4444;">*</span>
                    </label>
                    <div class="upload-dropzone">
                        <input type="file" name="image" id="galleryImageInput" accept="image/*" required>
                        <i class="fa-solid fa-cloud-arrow-up" style="font-size: 32px; color: var(--admin-orange); margin-bottom: 8px;"></i>
                        <h5 style="font-size: 14px; font-weight: 700; color: var(--admin-navy); margin: 0 0 4px 0;">Drag & drop image here, or click to browse</h5>
                        <p style="font-size: 12px; color: #64748B; margin: 0;">Supports JPG, PNG, WEBP up to 5 MB</p>
                        <img id="previewImage" class="dropzone-preview" alt="Selected Preview">
                    </div>
                    @error('image')
                        <span style="font-size: 11.5px; color: #EF4444; margin-top: 4px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-grid-2">
                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Category / Badge Label</span>
                        </label>
                        <input type="text" name="category" class="form-input-item" value="{{ old('category') }}" placeholder="e.g. School Band & Assembly" maxlength="100">
                    </div>

                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>FontAwesome Icon Class</span>
                        </label>
                        <input type="text" name="icon" class="form-input-item" value="{{ old('icon', 'fa-solid fa-camera') }}" placeholder="e.g. fa-solid fa-drum, fa-solid fa-futbol" maxlength="100">
                    </div>
                </div>

                <div class="form-group-item" style="margin-bottom: 20px;">
                    <label class="form-label-item">
                        <span>Photo Caption / Alt Description</span>
                    </label>
                    <input type="text" name="caption" class="form-input-item" value="{{ old('caption') }}" placeholder="Brief description of the activity or event..." maxlength="255">
                </div>

                <div class="form-grid-2">
                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Display Sort Order</span>
                            <span style="color: #EF4444;">*</span>
                        </label>
                        <input type="number" name="order" class="form-input-item" value="{{ old('order', $nextOrder) }}" min="0" required>
                    </div>

                    <div class="form-group-item" style="justify-content: center;">
                        <label class="form-label-item">
                            <span>Active Visibility Status</span>
                        </label>
                        <div style="display: flex; align-items: center; gap: 10px; margin-top: 6px;">
                            <input type="checkbox" name="is_active" value="1" id="isActiveCheck" {{ old('is_active', true) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--admin-orange);">
                            <label for="isActiveCheck" style="font-size: 13.5px; font-weight: 600; color: var(--admin-navy); cursor: pointer;">
                                Visible on public homepage gallery
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-actions-footer">
                <a href="{{ route('admin.gallery.index') }}" class="btn-admin btn-secondary">Cancel</a>
                <button type="submit" class="btn-admin btn-primary">
                    <i class="fa-solid fa-upload"></i>
                    <span>Upload &amp; Save Photo</span>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const input = document.getElementById('galleryImageInput');
    const preview = document.getElementById('previewImage');
    if (input && preview) {
        input.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (ev) => {
                    preview.src = ev.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    }
</script>
@endsection
