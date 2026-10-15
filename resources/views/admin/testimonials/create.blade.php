@extends('layouts.admin')

@section('title', 'Add Parent Testimonial')
@section('page_title', 'Add New Parent Testimonial')



@section('content')
<div class="pb-30">
    <div class="d-flex align-items-center justify-content-between mb-20">
        <a href="{{ route('admin.testimonials.index') }}" class="btn-admin btn-secondary">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Testimonials</span>
        </a>
    </div>

    <div class="form-card">
        <div class="form-header-bar">
            <h4>
                <i class="fa-solid fa-comment-dots text-orange"></i>
                <span>Add Parent Testimonial Review</span>
            </h4>
            <span class="text-muted fs-12">Displays on homepage section 8</span>
        </div>

        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-body-content">
                <div class="form-grid-2">
                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Parent Name</span>
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="parent_name" class="form-input-item" value="{{ old('parent_name') }}" required placeholder="e.g. Priya Sharma" maxlength="255">
                        @error('parent_name')
                            <span class="form-error-msg">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Child Info / Role</span>
                        </label>
                        <input type="text" name="child_info" class="form-input-item" value="{{ old('child_info') }}" placeholder="e.g. Parent of Ananya Sharma | Class VI" maxlength="255">
                    </div>
                </div>

                <div class="form-group-item mb-20">
                    <label class="form-label-item">
                        <span>Parent Testimonial Message</span>
                        <span class="text-danger">*</span>
                    </label>
                    <textarea name="content" rows="4" class="form-input-item" required placeholder="What the parent says about Advaita School...">{{ old('content') }}</textarea>
                    @error('content')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-grid-2">
                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Card Theme Accent</span>
                            <span class="text-danger">*</span>
                        </label>
                        <select name="theme_color" class="form-input-item" required>
                            <option value="orange" {{ old('theme_color') === 'orange' ? 'selected' : '' }}>Warm Orange (Default)</option>
                            <option value="blue" {{ old('theme_color') === 'blue' ? 'selected' : '' }}>Sky Blue Accent</option>
                        </select>
                    </div>

                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Star Rating (1 to 5)</span>
                            <span class="text-danger">*</span>
                        </label>
                        <select name="rating" class="form-input-item" required>
                            <option value="5" {{ old('rating', 5) == 5 ? 'selected' : '' }}>★★★★★ (5 Stars)</option>
                            <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>★★★★☆ (4 Stars)</option>
                            <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>★★★☆☆ (3 Stars)</option>
                        </select>
                    </div>
                </div>

                <!-- Avatar Upload Dropzone -->
                <div class="form-group-item mb-22">
                    <label class="form-label-item">
                        <span>Parent Photo / Avatar (Optional)</span>
                    </label>
                    <div class="upload-dropzone">
                        <input type="file" name="avatar" id="avatarInput" accept="image/*">
                        <i class="fa-solid fa-user-circle fs-28 text-orange mb-6"></i>
                        <h5 class="text-navy fs-13 font-bold mb-2">Click or drop avatar photo</h5>
                        <p class="text-muted fs-11 m-0">Square 1:1 image recommended (e.g. 200 × 200 px)</p>
                        <img id="avatarPreview" class="avatar-preview" alt="Avatar Preview">
                    </div>
                    @error('avatar')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-grid-2">
                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Display Sort Order</span>
                            <span class="text-danger">*</span>
                        </label>
                        <input type="number" name="order" class="form-input-item" value="{{ old('order', $nextOrder) }}" min="0" required>
                    </div>

                    <div class="form-group-item justify-content-center">
                        <label class="form-label-item">
                            <span>Active Visibility Status</span>
                        </label>
                        <div class="d-flex align-items-center gap-10 mt-6">
                            <input type="checkbox" name="is_active" value="1" id="isActiveCheck" {{ old('is_active', true) ? 'checked' : '' }} class="checkbox-orange">
                            <label for="isActiveCheck" class="text-navy font-semibold cursor-pointer fs-13">
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
