@extends('layouts.admin')

@section('title', 'Campus Visit & Admissions Banner')
@section('page_title', 'Campus Visit & Admissions CTA Banner')

@section('styles')
<style>
    .visit-mgmt-wrapper {
        display: flex;
        flex-direction: column;
        gap: 24px;
        width: 100%;
    }

    /* Header Bar */
    .visit-top-bar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
    }

    .visit-top-title h3 {
        font-size: 20px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0 0 4px 0;
    }

    .visit-top-title p {
        font-size: 13.5px;
        color: #64748B;
        margin: 0;
    }

    /* Live Banner Preview Box */
    .banner-preview-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 18px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        overflow: hidden;
    }

    .banner-preview-head {
        padding: 16px 24px;
        background: #FAFBFD;
        border-bottom: 1px solid var(--admin-border);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .banner-preview-head h4 {
        font-size: 15px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .banner-preview-body {
        padding: 24px;
        background: #F8FAFC;
    }

    /* Mini Simulated Banner */
    .mini-banner-container {
        background: #ffffff;
        border: 1px solid #E2E8F0;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        display: grid;
        grid-template-columns: 1.15fr 1fr;
        overflow: hidden;
        min-height: 290px;
    }

    @media (max-width: 900px) {
        .mini-banner-container {
            grid-template-columns: 1fr;
        }
    }

    .mini-banner-left {
        padding: 24px 28px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 14px;
    }

    .mini-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 11px;
        font-weight: 800;
        color: var(--admin-orange);
        background: rgba(243, 112, 33, 0.1);
        border: 1px solid rgba(243, 112, 33, 0.3);
        padding: 4px 10px;
        border-radius: 20px;
        width: fit-content;
    }

    .mini-heading {
        font-size: 22px;
        font-weight: 800;
        color: #083B7A;
        line-height: 1.2;
        margin: 0;
    }

    .mini-heading .orange {
        color: #F37021;
        font-style: italic;
    }

    .mini-desc {
        font-size: 12.5px;
        color: #64748B;
        line-height: 1.5;
        margin: 0;
    }

    .mini-features-row {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        padding-top: 10px;
        border-top: 1px dashed #E2E8F0;
    }

    .mini-feat-item {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 11.5px;
        font-weight: 700;
        color: #334155;
    }

    .mini-feat-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #F37021;
    }

    .mini-banner-right {
        position: relative;
        background: #0f172a;
        overflow: hidden;
        min-height: 220px;
    }

    .mini-banner-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .mini-floating-pods {
        position: absolute;
        bottom: 16px;
        left: 16px;
        right: 16px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        z-index: 2;
    }

    .mini-pod-orange {
        background: linear-gradient(135deg, #F37021 0%, #D85D13 100%);
        color: #ffffff;
        border-radius: 12px;
        padding: 8px 14px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 4px 14px rgba(243, 112, 33, 0.35);
    }

    .mini-pod-white {
        background: #ffffff;
        color: #083B7A;
        border-radius: 12px;
        padding: 8px 14px;
        display: flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.12);
    }

    /* Form Styles */
    .settings-form-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 18px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        overflow: hidden;
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
        padding: 24px;
    }

    .form-section-divider {
        font-size: 13.5px;
        font-weight: 800;
        color: var(--admin-navy);
        padding-bottom: 8px;
        margin-bottom: 16px;
        border-bottom: 1px solid var(--admin-border);
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .form-grid-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-grid-3 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 16px;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .form-grid-2 {
            grid-template-columns: 1fr;
        }
    }

    .form-group-item {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .form-label-item {
        font-size: 13px;
        font-weight: 700;
        color: #334155;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .form-input-item {
        background: #F8FAFC;
        border: 1px solid var(--admin-border);
        border-radius: 10px;
        padding: 10px 14px;
        font-size: 13.5px;
        font-family: inherit;
        color: var(--admin-text-main);
        outline: none;
        transition: all 0.2s;
    }

    .form-input-item:focus {
        border-color: var(--admin-navy);
        background: #ffffff;
        box-shadow: 0 0 0 3px rgba(8, 59, 122, 0.08);
    }

    /* Image Upload Box */
    .image-uploader-card {
        background: #F8FAFC;
        border: 1px solid var(--admin-border);
        border-radius: 14px;
        padding: 20px;
        margin-bottom: 24px;
        display: grid;
        grid-template-columns: 240px 1fr;
        gap: 24px;
        align-items: center;
    }

    @media (max-width: 768px) {
        .image-uploader-card {
            grid-template-columns: 1fr;
        }
    }

    .current-img-box {
        position: relative;
        height: 150px;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid #CBD5E1;
        background: #0f172a;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .current-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .upload-dropzone {
        border: 2px dashed #CBD5E1;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        background: #ffffff;
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

    .form-actions-footer {
        padding: 18px 24px;
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
                <i class="fa-solid fa-eye" style="color: var(--admin-orange);"></i>
                <span>Live Banner Visual Preview (Public Website Representation)</span>
            </h4>
            <span style="font-size: 12px; color: #64748B;">Updates in real time as you edit</span>
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
                        <h2 class="mini-heading" style="margin-top: 10px;">
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
                                <strong style="font-size: 13px;" id="previewBtnTitle">{{ $settings['btn_title'] }}</strong><br>
                                <span style="font-size: 10.5px; opacity: 0.9;" id="previewBtnSub">{{ $settings['btn_sub'] }}</span>
                            </div>
                            <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                        </div>

                        <div class="mini-pod-white">
                            <div style="width: 28px; height: 28px; border-radius: 50%; background: #0284C7; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 11px;">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <span style="font-size: 10px; font-weight: 700; color: #64748B;" id="previewPhoneLabel">{{ $settings['phone_label'] }}</span><br>
                                <strong style="font-size: 13px; color: #083B7A;" id="previewPhoneNumber">{{ $settings['phone_number'] }}</strong>
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
                <i class="fa-solid fa-sliders" style="color: var(--admin-orange);"></i>
                <span>Banner Content &amp; Media Configuration</span>
            </h4>
        </div>

        <form action="{{ route('admin.campus-visit.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-body-content">
                
                <!-- SECTION: Campus Image -->
                <div class="form-section-divider">
                    <i class="fa-solid fa-image" style="color: var(--admin-orange);"></i>
                    <span>Campus Visual Image</span>
                </div>

                <div class="image-uploader-card">
                    <div class="current-img-box">
                        <img src="{{ $settings['image_url'] }}" alt="Current Campus Image" id="currentThumb">
                    </div>

                    <div>
                        <div style="font-size: 13px; font-weight: 700; color: var(--admin-navy); margin-bottom: 4px;">
                            Active Image Specs:
                        </div>
                        <div style="font-size: 12px; color: #64748B; margin-bottom: 12px;">
                            Dimensions: <strong>{{ $settings['image_dimensions'] }}</strong> &bull; Size: <strong>{{ $settings['image_size'] }}</strong>
                        </div>

                        <div class="upload-dropzone">
                            <input type="file" name="image" id="inputImage" accept="image/*">
                            <i class="fa-solid fa-cloud-arrow-up" style="font-size: 24px; color: var(--admin-orange); margin-bottom: 6px;"></i>
                            <div style="font-size: 13px; font-weight: 700; color: var(--admin-navy);">
                                Click or drag new campus photo here
                            </div>
                            <div style="font-size: 11.5px; color: #94A3B8;">
                                Recommended: 1200 × 750 px or 16:9 ratio (JPG, PNG, WEBP up to 5MB)
                            </div>
                        </div>

                        @error('image')
                            <p style="font-size: 12px; color: #EF4444; font-weight: 600; margin-top: 6px;">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- SECTION: Headlines & Text -->
                <div class="form-section-divider">
                    <i class="fa-solid fa-heading" style="color: var(--admin-orange);"></i>
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
                            <span style="color: #EF4444;">*</span>
                        </label>
                        <input type="text" id="inputTitle1" name="title_1" class="form-input-item" value="{{ old('title_1', $settings['title_1']) }}" required placeholder="e.g. Come see the school" maxlength="255">
                        @error('title_1')
                            <span style="font-size: 11px; color: #EF4444;">{{ $message }}</span>
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
                            <span style="color: #EF4444;">*</span>
                        </label>
                        <textarea id="inputDesc" name="description" rows="3" class="form-input-item" required placeholder="Detailed message encouraging parents to book a tour...">{{ old('description', $settings['description']) }}</textarea>
                        @error('description')
                            <span style="font-size: 11px; color: #EF4444;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Cursive Accent Tag Text</span>
                        </label>
                        <input type="text" name="cursive_tag" class="form-input-item" value="{{ old('cursive_tag', $settings['cursive_tag']) }}" placeholder="e.g. Experience it Yourself" maxlength="100">
                        <span style="font-size: 12px; color: #94A3B8; margin-top: 4px;">Displays with orange hand-drawn curve underneath.</span>
                    </div>
                </div>

                <!-- SECTION: 3 Feature Points -->
                <div class="form-section-divider">
                    <i class="fa-solid fa-list-check" style="color: var(--admin-orange);"></i>
                    <span>Bottom Three Feature Points</span>
                </div>

                <div class="form-grid-3">
                    <!-- Feature 1 -->
                    <div class="form-group-item" style="background: #F8FAFC; padding: 14px; border-radius: 10px; border: 1px solid var(--admin-border);">
                        <strong style="font-size: 12.5px; color: var(--admin-navy); margin-bottom: 6px;">Feature 1</strong>
                        <input type="text" id="inputFeat1" name="feat_1_title" class="form-input-item" value="{{ old('feat_1_title', $settings['feat_1_title']) }}" placeholder="e.g. Counsellors available" maxlength="100" style="margin-bottom: 6px;">
                        <input type="text" name="feat_1_sub" class="form-input-item" value="{{ old('feat_1_sub', $settings['feat_1_sub']) }}" placeholder="e.g. Mon–Sat · 9 AM to 5 PM" maxlength="150">
                    </div>

                    <!-- Feature 2 -->
                    <div class="form-group-item" style="background: #F8FAFC; padding: 14px; border-radius: 10px; border: 1px solid var(--admin-border);">
                        <strong style="font-size: 12.5px; color: var(--admin-navy); margin-bottom: 6px;">Feature 2</strong>
                        <input type="text" id="inputFeat2" name="feat_2_title" class="form-input-item" value="{{ old('feat_2_title', $settings['feat_2_title']) }}" placeholder="e.g. Hindi · English" maxlength="100" style="margin-bottom: 6px;">
                        <input type="text" name="feat_2_sub" class="form-input-item" value="{{ old('feat_2_sub', $settings['feat_2_sub']) }}" placeholder="e.g. On-call & on-campus" maxlength="150">
                    </div>

                    <!-- Feature 3 -->
                    <div class="form-group-item" style="background: #F8FAFC; padding: 14px; border-radius: 10px; border: 1px solid var(--admin-border);">
                        <strong style="font-size: 12.5px; color: var(--admin-navy); margin-bottom: 6px;">Feature 3</strong>
                        <input type="text" id="inputFeat3" name="feat_3_title" class="form-input-item" value="{{ old('feat_3_title', $settings['feat_3_title']) }}" placeholder="e.g. No obligation" maxlength="100" style="margin-bottom: 6px;">
                        <input type="text" name="feat_3_sub" class="form-input-item" value="{{ old('feat_3_sub', $settings['feat_3_sub']) }}" placeholder="e.g. Just a friendly chat" maxlength="150">
                    </div>
                </div>

                <!-- SECTION: Floating Action Pods -->
                <div class="form-section-divider">
                    <i class="fa-solid fa-phone-volume" style="color: var(--admin-orange);"></i>
                    <span>Floating Action Pods (Buttons)</span>
                </div>

                <div class="form-grid-2">
                    <!-- Pod 1: Campus Visit Button -->
                    <div style="background: #FFF7ED; border: 1px solid #FED7AA; border-radius: 12px; padding: 18px;">
                        <strong style="font-size: 13.5px; color: #C2410C; display: block; margin-bottom: 12px;">
                            <i class="fa-solid fa-calendar-days"></i> Primary Button: Book A Campus Visit
                        </strong>
                        <div class="form-group-item" style="margin-bottom: 10px;">
                            <label class="form-label-item">Button Title</label>
                            <input type="text" id="inputBtnTitle" name="btn_title" class="form-input-item" value="{{ old('btn_title', $settings['btn_title']) }}" placeholder="e.g. Book A Campus Visit" maxlength="100">
                        </div>
                        <div class="form-group-item" style="margin-bottom: 10px;">
                            <label class="form-label-item">Button Subtitle</label>
                            <input type="text" id="inputBtnSub" name="btn_sub" class="form-input-item" value="{{ old('btn_sub', $settings['btn_sub']) }}" placeholder="e.g. Pick A Slot · Free" maxlength="100">
                        </div>
                        <div class="form-group-item">
                            <label class="form-label-item">Button URL / Link</label>
                            <input type="text" name="btn_url" class="form-input-item" value="{{ old('btn_url', $settings['btn_url']) }}" placeholder="e.g. #contact or /online-registration" maxlength="255">
                        </div>
                    </div>

                    <!-- Pod 2: Counsellor Phone Button -->
                    <div style="background: #F0FDF4; border: 1px solid #BBF7D0; border-radius: 12px; padding: 18px;">
                        <strong style="font-size: 13.5px; color: #15803D; display: block; margin-bottom: 12px;">
                            <i class="fa-solid fa-phone"></i> Secondary Pod: Counsellor Phone Call
                        </strong>
                        <div class="form-group-item" style="margin-bottom: 10px;">
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
