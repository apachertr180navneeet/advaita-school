@extends('layouts.admin')

@section('title', 'Edit Gallery Photo')
@section('page_title', 'Edit Campus Gallery Photo')

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

    .current-photo-box {
        display: flex;
        gap: 16px;
        align-items: center;
        padding: 14px;
        background: #F8FAFC;
        border: 1px solid var(--admin-border);
        border-radius: 12px;
        margin-bottom: 14px;
    }

    .current-photo-img {
        width: 140px;
        height: 90px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid var(--admin-border);
    }

    /* Dropzone */
    .upload-dropzone {
        border: 2px dashed #CBD5E1;
        border-radius: 14px;
        padding: 20px;
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
        max-width: 240px;
        height: 140px;
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
                <i class="fa-solid fa-pen-to-square" style="color: var(--admin-orange);"></i>
                <span>Edit Photo #{{ $item->id }} &mdash; {{ $item->category }}</span>
            </h4>
            <span style="font-size: 12px; color: #64748B;">Leave file empty to keep current picture</span>
        </div>

        <form action="{{ route('admin.gallery.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-body-content">
                <!-- Current Photo Specs Preview -->
                <div class="current-photo-box">
                    <img src="{{ $item->image_url }}" alt="{{ $item->caption ?? $item->category }}" class="current-photo-img">
                    <div>
                        <div style="font-size: 13.5px; font-weight: 700; color: var(--admin-navy); margin-bottom: 4px;">
                            Current Photo
                        </div>
                        <div style="font-size: 12px; color: #64748B;">
                            Size: {{ $item->image_size ?? 'Optimized' }} &middot; Dimensions: {{ $item->image_dimensions ?? 'Standard' }}
                        </div>
                    </div>
                </div>

                <!-- Replace Image Upload -->
                <div class="form-group-item" style="margin-bottom: 22px;">
                    <label class="form-label-item">
                        <span>Replace Photo File (Optional)</span>
                    </label>
                    <div class="upload-dropzone">
                        <input type="file" name="image" id="galleryImageInput" accept="image/*">
                        <i class="fa-solid fa-cloud-arrow-up" style="font-size: 26px; color: var(--admin-orange); margin-bottom: 6px;"></i>
                        <h5 style="font-size: 13.5px; font-weight: 700; color: var(--admin-navy); margin: 0 0 2px 0;">Click or drop image to replace existing photo</h5>
                        <p style="font-size: 11.5px; color: #64748B; margin: 0;">Leave empty to keep current image</p>
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
                        <input type="text" name="category" class="form-input-item" value="{{ old('category', $item->category) }}" placeholder="e.g. School Band & Assembly" maxlength="100">
                    </div>

                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>FontAwesome Icon Class</span>
                        </label>
                        <input type="text" name="icon" class="form-input-item" value="{{ old('icon', $item->icon) }}" placeholder="e.g. fa-solid fa-drum" maxlength="100">
                    </div>
                </div>

                <div class="form-group-item" style="margin-bottom: 20px;">
                    <label class="form-label-item">
                        <span>Photo Caption / Alt Description</span>
                    </label>
                    <input type="text" name="caption" class="form-input-item" value="{{ old('caption', $item->caption) }}" placeholder="Brief description of the activity or event..." maxlength="255">
                </div>

                <div class="form-grid-2">
                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Display Sort Order</span>
                            <span style="color: #EF4444;">*</span>
                        </label>
                        <input type="number" name="order" class="form-input-item" value="{{ old('order', $item->order) }}" min="0" required>
                    </div>

                    <div class="form-group-item" style="justify-content: center;">
                        <label class="form-label-item">
                            <span>Active Visibility Status</span>
                        </label>
                        <div style="display: flex; align-items: center; gap: 10px; margin-top: 6px;">
                            <input type="checkbox" name="is_active" value="1" id="isActiveCheck" {{ old('is_active', $item->is_active) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--admin-orange);">
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
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Save Changes</span>
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
