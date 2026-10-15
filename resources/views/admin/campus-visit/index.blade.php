@extends('layouts.admin')

@section('title', 'Campus Visit & Admissions Banner')
@section('page_title', 'Campus Visit & Admissions CTA Banner')



@section('content')
<div class="visit-mgmt-wrapper">

    <!-- 1. Header Action Bar -->
    <div class="visit-top-bar">
        <div class="visit-top-title">
            <h3>Campus Visit &amp; Admissions Banner</h3>
            <p>Customize the high-converting campus visit banner, headline text, counsellor contact, and building photo.</p>
        </div>
        <div>
            <a href="{{ route('home') }}#admissions" target="_blank" class="btn-admin btn-secondary" title="View live banner on Homepage">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>Preview Homepage Banner</span>
            </a>
        </div>
    </div>

    <!-- 2. Interactive Real-Time Live Preview -->
    <div class="banner-preview-card">
        <div class="banner-preview-head">
            <h4>
                <i class="fa-solid fa-eye text-orange"></i>
                <span>Live Banner Visual Preview (Public Website Representation)</span>
            </h4>
            <span class="text-muted fs-12">Updates in real time as you edit</span>
        </div>
        <div class="banner-preview-body">
            <div class="mini-banner-container">
                <!-- Left Info Side -->
                <div class="mini-banner-left">
                    <div>
                        <div class="mini-eyebrow">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span id="previewBadge">{{ $settings['badge'] }}</span>
                        </div>
                        <h2 class="mini-heading mt-10">
                            <span id="previewTitle1">{{ $settings['title_1'] }}</span> <br>
                            @php
                                $adminRawTitle2 = trim($settings['title_2'] ?? '');
                                $adminHighlight = str_starts_with(strtolower($adminRawTitle2), 'for ') ? trim(substr($adminRawTitle2, 4)) : $adminRawTitle2;
                            @endphp
                            for <span class="orange" id="previewTitle2">{{ $adminHighlight ?: 'yourself.' }}</span>
                        </h2>
                    </div>

                    <p class="mini-desc" id="previewDesc">
                        {{ $settings['description'] }}
                    </p>

                    <div class="mini-features-row">
                        <div class="mini-feat-item">
                            <span class="mini-feat-dot"></span>
                            <span id="previewFeat1">{{ $settings['feat_1_title'] }}</span>
                        </div>
                        <div class="mini-feat-item">
                            <span class="mini-feat-dot"></span>
                            <span id="previewFeat2">{{ $settings['feat_2_title'] }}</span>
                        </div>
                        <div class="mini-feat-item">
                            <span class="mini-feat-dot"></span>
                            <span id="previewFeat3">{{ $settings['feat_3_title'] }}</span>
                        </div>
                    </div>
                </div>

                <!-- Right Visual Side -->
                <div class="mini-banner-right">
                    <img src="{{ $settings['image_url'] }}" alt="Campus Preview" class="mini-banner-img" id="previewImage">
                    
                    <div class="mini-floating-pods">
                        <div class="mini-pod-orange">
                            <div>
                                <strong class="fs-13" id="previewBtnTitle">{{ $settings['btn_title'] }}</strong><br>
                                <span class="fs-10 opacity-90" id="previewBtnSub">{{ $settings['btn_sub'] }}</span>
                            </div>
                            <i class="fa-solid fa-arrow-right fs-12"></i>
                        </div>

                        <div class="mini-pod-white">
                            <div class="avatar-circle-sm">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <span class="text-muted fs-10 font-bold" id="previewPhoneLabel">{{ $settings['phone_label'] }}</span><br>
                                <strong class="text-navy fs-13" id="previewPhoneNumber">{{ $settings['phone_number'] }}</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Form Settings Card -->
    <div class="settings-form-card">
        <div class="form-header-bar">
            <h4>
                <i class="fa-solid fa-sliders text-orange"></i>
                <span>Banner Content &amp; Media Configuration</span>
            </h4>
        </div>

        <form action="{{ route('admin.campus-visit.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-body-content">
                
                <!-- SECTION: Campus Image -->
                <div class="form-section-divider">
                    <i class="fa-solid fa-image text-orange"></i>
                    <span>Campus Visual Image</span>
                </div>

                <div class="image-uploader-card">
                    <div class="current-img-box">
                        <img src="{{ $settings['image_url'] }}" alt="Current Campus Image" id="currentThumb">
                    </div>

                    <div>
                        <div class="text-navy fs-13 font-bold mb-4">
                            Active Image Specs:
                        </div>
                        <div class="text-muted fs-12 mb-12">
                            Dimensions: <strong>{{ $settings['image_dimensions'] }}</strong> &bull; Size: <strong>{{ $settings['image_size'] }}</strong>
                        </div>

                        <div class="upload-dropzone">
                            <input type="file" name="image" id="inputImage" accept="image/*">
                            <i class="fa-solid fa-cloud-arrow-up fs-24 text-orange mb-6"></i>
                            <div class="text-navy fs-13 font-bold">
                                Click or drag new campus photo here
                            </div>
                            <div class="text-muted fs-11">
                                Recommended: 1200 × 750 px or 16:9 ratio (JPG, PNG, WEBP up to 5MB)
                            </div>
                        </div>

                        @error('image')
                            <p class="form-error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- SECTION: Headlines & Text -->
                <div class="form-section-divider">
                    <i class="fa-solid fa-heading text-orange"></i>
                    <span>Banner Headlines &amp; Copy</span>
                </div>

                <div class="form-grid-3">
                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Top Eyebrow Badge</span>
                        </label>
                        <input type="text" id="inputBadge" name="badge" class="form-input-item" value="{{ old('badge', $settings['badge']) }}" placeholder="e.g. ADMISSIONS 2026–27 OPEN" maxlength="150">
                    </div>

                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Title Part 1 (Navy Dark)</span>
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="inputTitle1" name="title_1" class="form-input-item" value="{{ old('title_1', $settings['title_1']) }}" required placeholder="e.g. Come see the school" maxlength="255">
                        @error('title_1')
                            <span class="text-danger fs-11">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Title Part 2 (Orange Italic)</span>
                        </label>
                        <input type="text" id="inputTitle2" name="title_2" class="form-input-item" value="{{ old('title_2', $settings['title_2']) }}" placeholder="e.g. yourself." maxlength="255">
                    </div>
                </div>

                <div class="form-grid-2">
                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Description Paragraph</span>
                            <span class="text-danger">*</span>
                        </label>
                        <textarea id="inputDesc" name="description" rows="3" class="form-input-item" required placeholder="Detailed message encouraging parents to book a tour...">{{ old('description', $settings['description']) }}</textarea>
                        @error('description')
                            <span class="text-danger fs-11">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Cursive Accent Tag Text</span>
                        </label>
                        <input type="text" name="cursive_tag" class="form-input-item" value="{{ old('cursive_tag', $settings['cursive_tag']) }}" placeholder="e.g. Experience it Yourself" maxlength="100">
                        <span class="text-muted fs-12 mt-4">Displays with orange hand-drawn curve underneath.</span>
                    </div>
                </div>

                <!-- SECTION: 3 Feature Points -->
                <div class="form-section-divider">
                    <i class="fa-solid fa-list-check text-orange"></i>
                    <span>Bottom Three Feature Points</span>
                </div>

                <div class="form-grid-3">
                    <!-- Feature 1 -->
                    <div class="form-group-item visit-detail-box">
                        <strong class="text-navy fs-12 mb-6">Feature 1</strong>
                        <input type="text" id="inputFeat1" name="feat_1_title" class="form-input-item" value="{{ old('feat_1_title', $settings['feat_1_title']) }}" placeholder="e.g. Counsellors available" maxlength="100" class="mb-6">
                        <input type="text" name="feat_1_sub" class="form-input-item" value="{{ old('feat_1_sub', $settings['feat_1_sub']) }}" placeholder="e.g. Mon–Sat · 9 AM to 5 PM" maxlength="150">
                    </div>

                    <!-- Feature 2 -->
                    <div class="form-group-item visit-detail-box">
                        <strong class="text-navy fs-12 mb-6">Feature 2</strong>
                        <input type="text" id="inputFeat2" name="feat_2_title" class="form-input-item" value="{{ old('feat_2_title', $settings['feat_2_title']) }}" placeholder="e.g. Hindi · English" maxlength="100" class="mb-6">
                        <input type="text" name="feat_2_sub" class="form-input-item" value="{{ old('feat_2_sub', $settings['feat_2_sub']) }}" placeholder="e.g. On-call & on-campus" maxlength="150">
                    </div>

                    <!-- Feature 3 -->
                    <div class="form-group-item visit-detail-box">
                        <strong class="text-navy fs-12 mb-6">Feature 3</strong>
                        <input type="text" id="inputFeat3" name="feat_3_title" class="form-input-item" value="{{ old('feat_3_title', $settings['feat_3_title']) }}" placeholder="e.g. No obligation" maxlength="100" class="mb-6">
                        <input type="text" name="feat_3_sub" class="form-input-item" value="{{ old('feat_3_sub', $settings['feat_3_sub']) }}" placeholder="e.g. Just a friendly chat" maxlength="150">
                    </div>
                </div>

                <!-- SECTION: Floating Action Pods -->
                <div class="form-section-divider">
                    <i class="fa-solid fa-phone-volume text-orange"></i>
                    <span>Floating Action Pods (Buttons)</span>
                </div>

                <div class="form-grid-2">
                    <!-- Pod 1: Campus Visit Button -->
                    <div class="notice-box-orange">
                        <strong class="text-orange fs-13 d-block mb-12">
                            <i class="fa-solid fa-calendar-days"></i> Primary Button: Book A Campus Visit
                        </strong>
                        <div class="form-group-item mb-10">
                            <label class="form-label-item">Button Title</label>
                            <input type="text" id="inputBtnTitle" name="btn_title" class="form-input-item" value="{{ old('btn_title', $settings['btn_title']) }}" placeholder="e.g. Book A Campus Visit" maxlength="100">
                        </div>
                        <div class="form-group-item mb-10">
                            <label class="form-label-item">Button Subtitle</label>
                            <input type="text" id="inputBtnSub" name="btn_sub" class="form-input-item" value="{{ old('btn_sub', $settings['btn_sub']) }}" placeholder="e.g. Pick A Slot · Free" maxlength="100">
                        </div>
                        <div class="form-group-item">
                            <label class="form-label-item">Button URL / Link</label>
                            <input type="text" name="btn_url" class="form-input-item" value="{{ old('btn_url', $settings['btn_url']) }}" placeholder="e.g. #contact or /online-registration" maxlength="255">
                        </div>
                    </div>

                    <!-- Pod 2: Counsellor Phone Button -->
                    <div class="notice-box-green">
                        <strong class="text-success fs-13 d-block mb-12">
                            <i class="fa-solid fa-phone"></i> Secondary Pod: Counsellor Phone Call
                        </strong>
                        <div class="form-group-item mb-10">
                            <label class="form-label-item">Label Text</label>
                            <input type="text" id="inputPhoneLabel" name="phone_label" class="form-input-item" value="{{ old('phone_label', $settings['phone_label']) }}" placeholder="e.g. TALK TO OUR COUNSELLOR" maxlength="100">
                        </div>
                        <div class="form-group-item">
                            <label class="form-label-item">Phone Number</label>
                            <input type="text" id="inputPhoneNumber" name="phone_number" class="form-input-item" value="{{ old('phone_number', $settings['phone_number']) }}" placeholder="e.g. 094130 62851" maxlength="50">
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-actions-footer">
                <a href="{{ route('admin.dashboard') }}" class="btn-admin btn-secondary">Cancel</a>
                <button type="submit" class="btn-admin btn-primary">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Save Banner Changes</span>
                </button>
            </div>
        </form>
    </div>

</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Dynamic real-time preview updates
    const inputBadge = document.getElementById('inputBadge');
    const inputTitle1 = document.getElementById('inputTitle1');
    const inputTitle2 = document.getElementById('inputTitle2');
    const inputDesc = document.getElementById('inputDesc');
    const inputFeat1 = document.getElementById('inputFeat1');
    const inputFeat2 = document.getElementById('inputFeat2');
    const inputFeat3 = document.getElementById('inputFeat3');
    const inputBtnTitle = document.getElementById('inputBtnTitle');
    const inputBtnSub = document.getElementById('inputBtnSub');
    const inputPhoneLabel = document.getElementById('inputPhoneLabel');
    const inputPhoneNumber = document.getElementById('inputPhoneNumber');

    const previewBadge = document.getElementById('previewBadge');
    const previewTitle1 = document.getElementById('previewTitle1');
    const previewTitle2 = document.getElementById('previewTitle2');
    const previewDesc = document.getElementById('previewDesc');
    const previewFeat1 = document.getElementById('previewFeat1');
    const previewFeat2 = document.getElementById('previewFeat2');
    const previewFeat3 = document.getElementById('previewFeat3');
    const previewBtnTitle = document.getElementById('previewBtnTitle');
    const previewBtnSub = document.getElementById('previewBtnSub');
    const previewPhoneLabel = document.getElementById('previewPhoneLabel');
    const previewPhoneNumber = document.getElementById('previewPhoneNumber');

    if (inputBadge) inputBadge.addEventListener('input', () => { previewBadge.textContent = inputBadge.value || 'ADMISSIONS 2026–27 OPEN'; });
    if (inputTitle1) inputTitle1.addEventListener('input', () => { previewTitle1.textContent = inputTitle1.value || 'Come see the school'; });
    if (inputTitle2) inputTitle2.addEventListener('input', () => { 
        let val = (inputTitle2.value || '').trim();
        if (val.toLowerCase().startsWith('for ')) {
            val = val.substring(4).trim();
        }
        previewTitle2.textContent = val || 'yourself.'; 
    });
    if (inputDesc) inputDesc.addEventListener('input', () => { previewDesc.textContent = inputDesc.value || ''; });
    if (inputFeat1) inputFeat1.addEventListener('input', () => { previewFeat1.textContent = inputFeat1.value || 'Counsellors available'; });
    if (inputFeat2) inputFeat2.addEventListener('input', () => { previewFeat2.textContent = inputFeat2.value || 'Hindi · English'; });
    if (inputFeat3) inputFeat3.addEventListener('input', () => { previewFeat3.textContent = inputFeat3.value || 'No obligation'; });
    if (inputBtnTitle) inputBtnTitle.addEventListener('input', () => { previewBtnTitle.textContent = inputBtnTitle.value || 'Book A Campus Visit'; });
    if (inputBtnSub) inputBtnSub.addEventListener('input', () => { previewBtnSub.textContent = inputBtnSub.value || 'Pick A Slot · Free'; });
    if (inputPhoneLabel) inputPhoneLabel.addEventListener('input', () => { previewPhoneLabel.textContent = inputPhoneLabel.value || 'TALK TO OUR COUNSELLOR'; });
    if (inputPhoneNumber) inputPhoneNumber.addEventListener('input', () => { previewPhoneNumber.textContent = inputPhoneNumber.value || '094130 62851'; });

    // Image file live preview
    const inputImage = document.getElementById('inputImage');
    const previewImage = document.getElementById('previewImage');
    const currentThumb = document.getElementById('currentThumb');

    if (inputImage) {
        inputImage.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    previewImage.src = event.target.result;
                    currentThumb.src = event.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    }
});
</script>
@endsection
