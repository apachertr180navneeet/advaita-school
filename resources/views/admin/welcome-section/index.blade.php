@extends('layouts.admin')

@section('title', 'About School / Welcome Section')
@section('page_title', 'About School / Welcome Section')

@section('content')
<div class="visit-mgmt-wrapper">

    <!-- 1. Header Action Bar -->
    <div class="visit-top-bar">
        <div class="visit-top-title">
            <h3>About School / Welcome Section</h3>
            <p>Customize the introductory welcome section on the homepage including campus image, trust badge, mission quote, and core feature cards.</p>
        </div>
        <div>
            <a href="{{ route('home') }}#about" target="_blank" class="btn-admin btn-secondary" title="View section on Homepage">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>Preview On Homepage</span>
            </a>
        </div>
    </div>

    <!-- 2. Interactive Real-Time Live Preview -->
    <div class="banner-preview-card">
        <div class="banner-preview-head">
            <h4>
                <i class="fa-solid fa-eye text-orange"></i>
                <span>Live Section Visual Preview (Homepage Representation)</span>
            </h4>
            <span class="text-muted fs-12">Updates live as you edit the fields below</span>
        </div>
        <div class="banner-preview-body" style="background: #F8FAFC; padding: 24px;">
            <div style="background: #ffffff; border: 1px solid #E2E8F0; border-radius: 20px; padding: 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; align-items: start;">
                    
                    <!-- Left Preview Image Box -->
                    <div style="position: relative; border-radius: 16px; overflow: hidden; border: 1px solid #E2E8F0; background: #0f243a;">
                        <img src="{{ $settings['image_url'] }}" alt="Welcome Visual Preview" id="previewImage" style="width: 100%; height: 260px; object-fit: cover; display: block;">
                        
                        <!-- Floating Tag -->
                        <div style="position: absolute; top: 12px; left: 12px; background: rgba(15, 36, 58, 0.85); backdrop-filter: blur(8px); color: #fff; padding: 6px 14px; border-radius: 30px; font-size: 11.5px; font-weight: 700; display: inline-flex; align-items: center; gap: 6px;">
                            <i class="fa-solid fa-sparkles text-orange"></i>
                            <span id="previewImageTag">{{ $settings['image_tag'] }}</span>
                        </div>

                        <!-- Trust Badge -->
                        <div style="position: absolute; bottom: 12px; right: 12px; background: #ffffff; border-radius: 14px; padding: 10px 14px; box-shadow: 0 10px 25px rgba(0,0,0,0.18); display: flex; align-items: center; gap: 10px; max-width: 90%;">
                            <div style="width: 36px; height: 36px; border-radius: 10px; background: linear-gradient(135deg, #EE6C27, #f78b4d); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 16px;">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div>
                                <strong id="previewBadgeTitle" style="display: block; font-size: 13px; color: #0f243a; font-weight: 800; line-height: 1.2;">{{ $settings['badge_title'] }}</strong>
                                <span id="previewBadgeSub" style="font-size: 11px; color: #64748B; font-weight: 600;">{{ $settings['badge_sub'] }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content Preview -->
                    <div>
                        <div style="display: inline-flex; align-items: center; gap: 8px; background: #FFF7ED; border: 1px solid #FED7AA; color: #EA580C; padding: 4px 12px; border-radius: 20px; font-size: 11px; font-weight: 800; letter-spacing: 0.5px; text-transform: uppercase;">
                            <i class="fa-solid fa-landmark"></i>
                            <span id="previewEyebrow">{{ $settings['eyebrow'] }}</span>
                        </div>

                        <h3 style="font-size: 22px; font-weight: 800; margin: 10px 0 6px 0; color: #0f243a; line-height: 1.25;">
                            <span id="previewHeadingPrefix" style="color: #0f243a; font-weight: 800;">{{ $settings['heading_prefix'] }}</span>
                            <span id="previewHeadingBrand" style="color: #EE6C27; font-weight: 800;">{{ $settings['heading_brand'] }}</span>
                        </h3>

                        <div style="background: #F8FAFC; border-left: 4px solid #EE6C27; padding: 10px 14px; border-radius: 8px; margin: 12px 0;">
                            <p id="previewQuote" style="margin: 0; font-size: 12.5px; color: #334155; font-style: italic; line-height: 1.5;">
                                &ldquo;{{ $settings['quote'] }}&rdquo;
                            </p>
                        </div>

                        <p id="previewDesc" style="font-size: 12px; color: #64748B; line-height: 1.55; margin-bottom: 14px;">
                            {{ $settings['description'] }}
                        </p>

                        <!-- Mini 4 Features Grid -->
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 8px; margin-bottom: 14px;">
                            <div style="background: #FFF7ED; border: 1px solid #FFEDD5; border-radius: 8px; padding: 8px 10px; font-size: 11px;">
                                <strong id="previewFeat1Title" style="color: #0f243a; display: block;">{{ $settings['feat_1_title'] }}</strong>
                                <span id="previewFeat1Sub" style="color: #64748B; font-size: 10px;">{{ $settings['feat_1_sub'] }}</span>
                            </div>
                            <div style="background: #EFF6FF; border: 1px solid #DBEAFE; border-radius: 8px; padding: 8px 10px; font-size: 11px;">
                                <strong id="previewFeat2Title" style="color: #0f243a; display: block;">{{ $settings['feat_2_title'] }}</strong>
                                <span id="previewFeat2Sub" style="color: #64748B; font-size: 10px;">{{ $settings['feat_2_sub'] }}</span>
                            </div>
                            <div style="background: #F0FDFA; border: 1px solid #CCFBF1; border-radius: 8px; padding: 8px 10px; font-size: 11px;">
                                <strong id="previewFeat3Title" style="color: #0f243a; display: block;">{{ $settings['feat_3_title'] }}</strong>
                                <span id="previewFeat3Sub" style="color: #64748B; font-size: 10px;">{{ $settings['feat_3_sub'] }}</span>
                            </div>
                            <div style="background: #FEFCE8; border: 1px solid #FEF08A; border-radius: 8px; padding: 8px 10px; font-size: 11px;">
                                <strong id="previewFeat4Title" style="color: #0f243a; display: block;">{{ $settings['feat_4_title'] }}</strong>
                                <span id="previewFeat4Sub" style="color: #64748B; font-size: 10px;">{{ $settings['feat_4_sub'] }}</span>
                            </div>
                        </div>

                        <!-- Buttons Preview -->
                        <div style="display: flex; gap: 8px;">
                            <span id="previewBtn1Text" style="background: #EE6C27; color: #fff; font-size: 11.5px; font-weight: 700; padding: 6px 14px; border-radius: 6px;">{{ $settings['btn_1_text'] }}</span>
                            <span id="previewBtn2Text" style="border: 1px solid #CBD5E1; color: #0f243a; font-size: 11.5px; font-weight: 700; padding: 6px 14px; border-radius: 6px;">{{ $settings['btn_2_text'] }}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- 3. Form Content Editor -->
    <div class="banner-preview-card">
        <div class="banner-preview-head">
            <h4>
                <i class="fa-solid fa-sliders text-orange"></i>
                <span>Section Content &amp; Media Configuration</span>
            </h4>
        </div>

        <form action="{{ route('admin.welcome-section.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-body-content" style="padding: 24px;">
                
                <!-- SECTION 1: Campus Photo & Image Badges -->
                <div class="form-section-divider">
                    <i class="fa-solid fa-image text-orange"></i>
                    <span>Left Visual Area &amp; Trust Badges</span>
                </div>

                <div class="image-uploader-card" style="margin-bottom: 24px;">
                    <div class="current-img-box">
                        <img src="{{ $settings['image_url'] }}" alt="Current Campus Image" id="currentThumb">
                    </div>

                    <div style="flex: 1;">
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
                                Recommended: 800 × 600 px or 4:3 ratio (JPG, PNG, WEBP up to 5MB)
                            </div>
                        </div>

                        @error('image')
                            <p class="form-error-msg text-danger fs-12 mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-grid-3" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px; margin-bottom: 24px;">
                    <div class="form-group-item">
                        <label class="form-label-item font-bold fs-13 mb-6" style="display: block;">
                            <span>Floating Tag on Image</span>
                        </label>
                        <input type="text" id="inputImageTag" name="image_tag" class="form-input-item" value="{{ old('image_tag', $settings['image_tag']) }}" placeholder="e.g. Excellence in Every Child" maxlength="100">
                    </div>

                    <div class="form-group-item">
                        <label class="form-label-item font-bold fs-13 mb-6" style="display: block;">
                            <span>Trust Badge Main Text</span>
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="inputBadgeTitle" name="badge_title" class="form-input-item" value="{{ old('badge_title', $settings['badge_title']) }}" required placeholder="e.g. Play Group" maxlength="100">
                        @error('badge_title')
                            <span class="text-danger fs-11">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group-item">
                        <label class="form-label-item font-bold fs-13 mb-6" style="display: block;">
                            <span>Trust Badge Subtitle</span>
                        </label>
                        <input type="text" id="inputBadgeSub" name="badge_sub" class="form-input-item" value="{{ old('badge_sub', $settings['badge_sub']) }}" placeholder="e.g. CBSE Affiliation No. 1130920" maxlength="150">
                    </div>
                </div>

                <!-- SECTION 2: Headings & Intro Copy -->
                <div class="form-section-divider">
                    <i class="fa-solid fa-heading text-orange"></i>
                    <span>Headings, Quote &amp; Introductory Copy</span>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px; margin-bottom: 20px;">
                    <div class="form-group-item">
                        <label class="form-label-item font-bold fs-13 mb-6" style="display: block;">
                            <span>Eyebrow Pill Badge</span>
                        </label>
                        <input type="text" id="inputEyebrow" name="eyebrow" class="form-input-item" value="{{ old('eyebrow', $settings['eyebrow']) }}" placeholder="e.g. ABOUT OUR SCHOOL" maxlength="100">
                    </div>

                    <div class="form-group-item">
                        <label class="form-label-item font-bold fs-13 mb-6" style="display: block;">
                            <span>Heading Prefix (Navy)</span>
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="inputHeadingPrefix" name="heading_prefix" class="form-input-item" value="{{ old('heading_prefix', $settings['heading_prefix']) }}" required placeholder="e.g. Welcome to" maxlength="100">
                    </div>

                    <div class="form-group-item">
                        <label class="form-label-item font-bold fs-13 mb-6" style="display: block;">
                            <span>Heading Brand (Orange)</span>
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="inputHeadingBrand" name="heading_brand" class="form-input-item" value="{{ old('heading_brand', $settings['heading_brand']) }}" required placeholder="e.g. Advaita School of Excellence" maxlength="200">
                    </div>
                </div>

                <div class="form-group-item" style="margin-bottom: 20px;">
                    <label class="form-label-item font-bold fs-13 mb-6" style="display: block;">
                        <span>Quote Callout Box</span>
                        <span class="text-danger">*</span>
                    </label>
                    <textarea id="inputQuote" name="quote" class="form-input-item" rows="2" required placeholder="Enter the school ethos quote...">{{ old('quote', $settings['quote']) }}</textarea>
                </div>

                <div class="form-group-item" style="margin-bottom: 28px;">
                    <label class="form-label-item font-bold fs-13 mb-6" style="display: block;">
                        <span>Explanatory Paragraph</span>
                        <span class="text-danger">*</span>
                    </label>
                    <textarea id="inputDesc" name="description" class="form-input-item" rows="3" required placeholder="Enter introductory paragraph...">{{ old('description', $settings['description']) }}</textarea>
                </div>

                <!-- SECTION 3: The 4 Feature Cards -->
                <div class="form-section-divider">
                    <i class="fa-solid fa-cubes-stacked text-orange"></i>
                    <span>4 Core Feature Cards (2x2 Grid)</span>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px; margin-bottom: 28px;">
                    
                    <!-- Card 1 -->
                    <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 16px;">
                        <div style="font-weight: 800; font-size: 13px; color: #EE6C27; margin-bottom: 12px;">
                            <i class="fa-solid fa-book-open"></i> Card 1 (Orange Theme)
                        </div>
                        <div class="form-group-item mb-10">
                            <label class="fs-12 font-bold mb-4" style="display: block;">Card 1 Title <span class="text-danger">*</span></label>
                            <input type="text" id="inputFeat1Title" name="feat_1_title" class="form-input-item" value="{{ old('feat_1_title', $settings['feat_1_title']) }}" required maxlength="100">
                        </div>
                        <div class="form-group-item mb-10">
                            <label class="fs-12 font-bold mb-4" style="display: block;">Card 1 Subtext <span class="text-danger">*</span></label>
                            <input type="text" id="inputFeat1Sub" name="feat_1_sub" class="form-input-item" value="{{ old('feat_1_sub', $settings['feat_1_sub']) }}" required maxlength="200">
                        </div>
                        <div class="form-group-item">
                            <label class="fs-12 font-bold mb-4" style="display: block;">Card 1 Icon Class</label>
                            <input type="text" name="feat_1_icon" class="form-input-item" value="{{ old('feat_1_icon', $settings['feat_1_icon']) }}" placeholder="fa-solid fa-book-open" maxlength="80">
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 16px;">
                        <div style="font-weight: 800; font-size: 13px; color: #2563EB; margin-bottom: 12px;">
                            <i class="fa-solid fa-user-group"></i> Card 2 (Blue Theme)
                        </div>
                        <div class="form-group-item mb-10">
                            <label class="fs-12 font-bold mb-4" style="display: block;">Card 2 Title <span class="text-danger">*</span></label>
                            <input type="text" id="inputFeat2Title" name="feat_2_title" class="form-input-item" value="{{ old('feat_2_title', $settings['feat_2_title']) }}" required maxlength="100">
                        </div>
                        <div class="form-group-item mb-10">
                            <label class="fs-12 font-bold mb-4" style="display: block;">Card 2 Subtext <span class="text-danger">*</span></label>
                            <input type="text" id="inputFeat2Sub" name="feat_2_sub" class="form-input-item" value="{{ old('feat_2_sub', $settings['feat_2_sub']) }}" required maxlength="200">
                        </div>
                        <div class="form-group-item">
                            <label class="fs-12 font-bold mb-4" style="display: block;">Card 2 Icon Class</label>
                            <input type="text" name="feat_2_icon" class="form-input-item" value="{{ old('feat_2_icon', $settings['feat_2_icon']) }}" placeholder="fa-solid fa-user-group" maxlength="80">
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 16px;">
                        <div style="font-weight: 800; font-size: 13px; color: #0D9488; margin-bottom: 12px;">
                            <i class="fa-solid fa-shield-halved"></i> Card 3 (Teal Theme)
                        </div>
                        <div class="form-group-item mb-10">
                            <label class="fs-12 font-bold mb-4" style="display: block;">Card 3 Title <span class="text-danger">*</span></label>
                            <input type="text" id="inputFeat3Title" name="feat_3_title" class="form-input-item" value="{{ old('feat_3_title', $settings['feat_3_title']) }}" required maxlength="100">
                        </div>
                        <div class="form-group-item mb-10">
                            <label class="fs-12 font-bold mb-4" style="display: block;">Card 3 Subtext <span class="text-danger">*</span></label>
                            <input type="text" id="inputFeat3Sub" name="feat_3_sub" class="form-input-item" value="{{ old('feat_3_sub', $settings['feat_3_sub']) }}" required maxlength="200">
                        </div>
                        <div class="form-group-item">
                            <label class="fs-12 font-bold mb-4" style="display: block;">Card 3 Icon Class</label>
                            <input type="text" name="feat_3_icon" class="form-input-item" value="{{ old('feat_3_icon', $settings['feat_3_icon']) }}" placeholder="fa-solid fa-shield-halved" maxlength="80">
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 16px;">
                        <div style="font-weight: 800; font-size: 13px; color: #D97706; margin-bottom: 12px;">
                            <i class="fa-regular fa-lightbulb"></i> Card 4 (Amber Theme)
                        </div>
                        <div class="form-group-item mb-10">
                            <label class="fs-12 font-bold mb-4" style="display: block;">Card 4 Title <span class="text-danger">*</span></label>
                            <input type="text" id="inputFeat4Title" name="feat_4_title" class="form-input-item" value="{{ old('feat_4_title', $settings['feat_4_title']) }}" required maxlength="100">
                        </div>
                        <div class="form-group-item mb-10">
                            <label class="fs-12 font-bold mb-4" style="display: block;">Card 4 Subtext <span class="text-danger">*</span></label>
                            <input type="text" id="inputFeat4Sub" name="feat_4_sub" class="form-input-item" value="{{ old('feat_4_sub', $settings['feat_4_sub']) }}" required maxlength="200">
                        </div>
                        <div class="form-group-item">
                            <label class="fs-12 font-bold mb-4" style="display: block;">Card 4 Icon Class</label>
                            <input type="text" name="feat_4_icon" class="form-input-item" value="{{ old('feat_4_icon', $settings['feat_4_icon']) }}" placeholder="fa-regular fa-lightbulb" maxlength="80">
                        </div>
                    </div>

                </div>

                <!-- SECTION 4: Action Buttons -->
                <div class="form-section-divider">
                    <i class="fa-solid fa-arrow-pointer text-orange"></i>
                    <span>Action Buttons</span>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px; margin-bottom: 32px;">
                    <div class="form-group-item">
                        <label class="fs-13 font-bold mb-4" style="display: block;">Button 1 Label (Orange Solid)</label>
                        <input type="text" id="inputBtn1Text" name="btn_1_text" class="form-input-item" value="{{ old('btn_1_text', $settings['btn_1_text']) }}" placeholder="Know More About Us" maxlength="100">
                    </div>
                    <div class="form-group-item">
                        <label class="fs-13 font-bold mb-4" style="display: block;">Button 1 Target URL</label>
                        <input type="text" name="btn_1_url" class="form-input-item" value="{{ old('btn_1_url', $settings['btn_1_url']) }}" placeholder="#why-advaita" maxlength="255">
                    </div>
                    <div class="form-group-item">
                        <label class="fs-13 font-bold mb-4" style="display: block;">Button 2 Label (Outline)</label>
                        <input type="text" id="inputBtn2Text" name="btn_2_text" class="form-input-item" value="{{ old('btn_2_text', $settings['btn_2_text']) }}" placeholder="Take a Campus Tour" maxlength="100">
                    </div>
                    <div class="form-group-item">
                        <label class="fs-13 font-bold mb-4" style="display: block;">Button 2 Target URL</label>
                        <input type="text" name="btn_2_url" class="form-input-item" value="{{ old('btn_2_url', $settings['btn_2_url']) }}" placeholder="#gallery" maxlength="255">
                    </div>
                </div>

                <!-- Submit Button -->
                <div style="display: flex; justify-content: flex-end; gap: 12px; padding-top: 20px; border-top: 1px solid #E2E8F0;">
                    <a href="{{ route('admin.dashboard') }}" class="btn-admin btn-secondary">
                        <i class="fa-solid fa-xmark"></i>
                        <span>Cancel</span>
                    </a>
                    <button type="submit" class="btn-admin btn-primary">
                        <i class="fa-solid fa-floppy-disk"></i>
                        <span>Save Changes</span>
                    </button>
                </div>

            </div>
        </form>
    </div>

</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Live update helper
    function bindInputToPreview(inputId, previewId, fallback = '') {
        const input = document.getElementById(inputId);
        const preview = document.getElementById(previewId);
        if (!input || !preview) return;

        input.addEventListener('input', function () {
            preview.textContent = this.value.trim() ? this.value : fallback;
        });
    }

    bindInputToPreview('inputImageTag', 'previewImageTag', 'Excellence in Every Child');
    bindInputToPreview('inputBadgeTitle', 'previewBadgeTitle', 'Play Group');
    bindInputToPreview('inputBadgeSub', 'previewBadgeSub', 'CBSE Affiliation No. 1130920');

    bindInputToPreview('inputEyebrow', 'previewEyebrow', 'ABOUT OUR SCHOOL');
    bindInputToPreview('inputHeadingPrefix', 'previewHeadingPrefix', 'Welcome to');
    bindInputToPreview('inputHeadingBrand', 'previewHeadingBrand', 'Advaita School of Excellence');
    bindInputToPreview('inputQuote', 'previewQuote', 'At Advaita School of Excellence, we believe education is more than academic achievement...');
    bindInputToPreview('inputDesc', 'previewDesc', 'Established with a deep commitment to educational excellence...');

    bindInputToPreview('inputFeat1Title', 'previewFeat1Title', 'Academic Excellence');
    bindInputToPreview('inputFeat1Sub', 'previewFeat1Sub', 'Strong foundation for brighter futures');

    bindInputToPreview('inputFeat2Title', 'previewFeat2Title', 'Holistic Development');
    bindInputToPreview('inputFeat2Sub', 'previewFeat2Sub', 'Nurturing mind, body and character');

    bindInputToPreview('inputFeat3Title', 'previewFeat3Title', 'Safe & Supportive Campus');
    bindInputToPreview('inputFeat3Sub', 'previewFeat3Sub', 'A second home for every child');

    bindInputToPreview('inputFeat4Title', 'previewFeat4Title', 'Future-Ready Learning');
    bindInputToPreview('inputFeat4Sub', 'previewFeat4Sub', 'Skills for a changing world');

    bindInputToPreview('inputBtn1Text', 'previewBtn1Text', 'Know More About Us');
    bindInputToPreview('inputBtn2Text', 'previewBtn2Text', 'Take a Campus Tour');

    // Live preview for image file upload
    const inputImage = document.getElementById('inputImage');
    const previewImage = document.getElementById('previewImage');
    const currentThumb = document.getElementById('currentThumb');

    if (inputImage) {
        inputImage.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    if (previewImage) previewImage.src = event.target.result;
                    if (currentThumb) currentThumb.src = event.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    }
});
</script>
@endpush
@endsection

