@extends('layouts.admin')

@section('title', 'Add Parent Testimonial')
@section('page_title', 'Add New Parent Testimonial')

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

    .avatar-preview {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        margin: 10px auto 0 auto;
        border: 2px solid var(--admin-orange);
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
        <a href="{{ route('admin.testimonials.index') }}" class="btn-admin btn-secondary">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Testimonials</span>
        </a>
    </div>

    <div class="form-card">
        <div class="form-header-bar">
            <h4>
                <i class="fa-solid fa-comment-dots" style="color: var(--admin-orange);"></i>
                <span>Add Parent Testimonial Review</span>
            </h4>
            <span style="font-size: 12px; color: #64748B;">Displays on homepage section 8</span>
        </div>

        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-body-content">
                <div class="form-grid-2">
                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Parent Name</span>
                            <span style="color: #EF4444;">*</span>
                        </label>
                        <input type="text" name="parent_name" class="form-input-item" value="{{ old('parent_name') }}" required placeholder="e.g. Priya Sharma" maxlength="255">
                        @error('parent_name')
                            <span style="font-size: 11.5px; color: #EF4444;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Child Info / Role</span>
                        </label>
                        <input type="text" name="child_info" class="form-input-item" value="{{ old('child_info') }}" placeholder="e.g. Parent of Ananya Sharma | Class VI" maxlength="255">
                    </div>
                </div>

                <div class="form-group-item" style="margin-bottom: 20px;">
                    <label class="form-label-item">
                        <span>Parent Testimonial Message</span>
                        <span style="color: #EF4444;">*</span>
                    </label>
                    <textarea name="content" rows="4" class="form-input-item" required placeholder="What the parent says about Advaita School...">{{ old('content') }}</textarea>
                    @error('content')
                        <span style="font-size: 11.5px; color: #EF4444;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-grid-2">
                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Card Theme Accent</span>
                            <span style="color: #EF4444;">*</span>
                        </label>
                        <select name="theme_color" class="form-input-item" required>
                            <option value="orange" {{ old('theme_color') === 'orange' ? 'selected' : '' }}>Warm Orange (Default)</option>
                            <option value="blue" {{ old('theme_color') === 'blue' ? 'selected' : '' }}>Sky Blue Accent</option>
                        </select>
                    </div>

                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Star Rating (1 to 5)</span>
                            <span style="color: #EF4444;">*</span>
                        </label>
                        <select name="rating" class="form-input-item" required>
                            <option value="5" {{ old('rating', 5) == 5 ? 'selected' : '' }}>★★★★★ (5 Stars)</option>
                            <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>★★★★☆ (4 Stars)</option>
                            <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>★★★☆☆ (3 Stars)</option>
                        </select>
                    </div>
                </div>

                <!-- Avatar Upload Dropzone -->
                <div class="form-group-item" style="margin-bottom: 22px;">
                    <label class="form-label-item">
                        <span>Parent Photo / Avatar (Optional)</span>
                    </label>
                    <div class="upload-dropzone">
                        <input type="file" name="avatar" id="avatarInput" accept="image/*">
                        <i class="fa-solid fa-user-circle" style="font-size: 28px; color: var(--admin-orange); margin-bottom: 6px;"></i>
                        <h5 style="font-size: 13.5px; font-weight: 700; color: var(--admin-navy); margin: 0 0 2px 0;">Click or drop avatar photo</h5>
                        <p style="font-size: 11.5px; color: #64748B; margin: 0;">Square 1:1 image recommended (e.g. 200 × 200 px)</p>
                        <img id="avatarPreview" class="avatar-preview" alt="Avatar Preview">
                    </div>
                    @error('avatar')
                        <span style="font-size: 11.5px; color: #EF4444; margin-top: 4px;">{{ $message }}</span>
                    @enderror
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
                                Visible on public homepage
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-actions-footer">
                <a href="{{ route('admin.testimonials.index') }}" class="btn-admin btn-secondary">Cancel</a>
                <button type="submit" class="btn-admin btn-primary">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Save Testimonial</span>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const input = document.getElementById('avatarInput');
    const preview = document.getElementById('avatarPreview');
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
