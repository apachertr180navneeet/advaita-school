@extends('layouts.admin')

@section('title', 'Homepage SEO Management')
@section('page_title', 'Homepage SEO & Meta Tags')

@section('styles')
<style>
    .seo-management-wrapper {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .seo-header-bar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
    }

    .seo-header-text h3 {
        font-size: 18px;
        font-weight: 800;
        color: var(--admin-navy);
        margin-bottom: 4px;
    }

    .seo-header-text p {
        font-size: 13.5px;
        color: #64748B;
        margin: 0;
    }

    .seo-grid-layout {
        display: grid;
        grid-template-columns: 1fr 380px;
        gap: 24px;
        align-items: start;
    }

    @media (max-width: 1100px) {
        .seo-grid-layout {
            grid-template-columns: 1fr;
        }
    }

    .seo-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        overflow: hidden;
    }

    .seo-card-header {
        padding: 18px 24px;
        border-bottom: 1px solid var(--admin-border);
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #FAFBFD;
    }

    .seo-card-title {
        font-size: 15px;
        font-weight: 700;
        color: var(--admin-navy);
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0;
    }

    .seo-card-title i {
        color: var(--admin-orange);
        font-size: 16px;
    }

    .seo-card-body {
        padding: 24px;
    }

    .form-group-seo {
        margin-bottom: 24px;
    }

    .form-group-seo:last-child {
        margin-bottom: 0;
    }

    .form-label-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
    }

    .seo-input-label {
        font-size: 13.5px;
        font-weight: 700;
        color: #1E293B;
        display: flex;
        align-items: center;
        gap: 6px;
        margin: 0;
    }

    .seo-char-counter {
        font-size: 12px;
        font-weight: 600;
        color: #64748B;
        padding: 2px 8px;
        border-radius: 6px;
        background: #F1F5F9;
        transition: all 0.2s;
    }

    .seo-char-counter.optimal {
        background: #ECFDF5;
        color: #059669;
    }

    .seo-char-counter.warning {
        background: #FFFBEB;
        color: #D97706;
    }

    .seo-char-counter.excess {
        background: #FEF2F2;
        color: #DC2626;
    }

    .seo-text-input {
        width: 100%;
        padding: 12px 14px;
        border-radius: 10px;
        border: 1px solid #CBD5E1;
        font-size: 14px;
        font-family: inherit;
        color: #0F172A;
        background: #FFFFFF;
        transition: all 0.2s;
    }

    .seo-text-input:focus {
        outline: none;
        border-color: var(--admin-navy);
        box-shadow: 0 0 0 3px rgba(8, 59, 122, 0.12);
    }

    .seo-textarea {
        width: 100%;
        padding: 12px 14px;
        border-radius: 10px;
        border: 1px solid #CBD5E1;
        font-size: 13.5px;
        line-height: 1.5;
        font-family: inherit;
        color: #0F172A;
        background: #FFFFFF;
        resize: vertical;
        transition: all 0.2s;
        min-height: 95px;
    }

    .seo-textarea:focus {
        outline: none;
        border-color: var(--admin-navy);
        box-shadow: 0 0 0 3px rgba(8, 59, 122, 0.12);
    }

    .seo-input-help {
        font-size: 12px;
        color: #64748B;
        margin-top: 6px;
        line-height: 1.4;
    }

    /* Suggested Keyword Chips */
    .keyword-chips-wrap {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        margin-top: 10px;
        align-items: center;
    }

    .chips-label {
        font-size: 11.5px;
        font-weight: 700;
        color: #64748B;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .keyword-chip {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        font-size: 11.5px;
        font-weight: 600;
        color: var(--admin-navy);
        background: #EFF6FF;
        border: 1px dashed #93C5FD;
        padding: 3px 8px;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.15s ease;
        user-select: none;
    }

    .keyword-chip:hover {
        background: var(--admin-navy);
        color: #FFFFFF;
        border-color: var(--admin-navy);
        transform: translateY(-1px);
    }

    .keyword-chip i {
        font-size: 10px;
        opacity: 0.7;
    }

    /* Google SERP Preview */
    .serp-preview-box {
        background: #ffffff;
        border: 1px solid #E2E8F0;
        border-radius: 14px;
        padding: 18px 20px;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.04);
    }

    .serp-brand-header {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 6px;
    }

    .serp-favicon {
        width: 22px;
        height: 22px;
        border-radius: 50%;
        background: #083B7A;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
        font-weight: 800;
        flex-shrink: 0;
    }

    .serp-site-info {
        display: flex;
        flex-direction: column;
        line-height: 1.2;
    }

    .serp-site-name {
        font-size: 12.5px;
        font-weight: 500;
        color: #202124;
    }

    .serp-breadcrumb {
        font-size: 11.5px;
        color: #4D5156;
    }

    .serp-snippet-title {
        font-size: 18px;
        font-weight: 400;
        color: #1A0DAB;
        text-decoration: none;
        line-height: 1.35;
        margin: 4px 0 6px 0;
        display: block;
        word-break: break-word;
        cursor: pointer;
    }

    .serp-snippet-title:hover {
        text-decoration: underline;
    }

    .serp-snippet-description {
        font-size: 13.5px;
        line-height: 1.5;
        color: #4D5156;
        margin: 0;
        word-break: break-word;
    }

    /* Sidebar Tips Box */
    .seo-tips-box {
        background: linear-gradient(135deg, rgba(8, 59, 122, 0.04) 0%, rgba(243, 112, 33, 0.08) 100%);
        border: 1px solid rgba(243, 112, 33, 0.25);
        border-radius: 14px;
        padding: 18px 20px;
        margin-top: 20px;
    }

    .seo-tips-box h4 {
        font-size: 13.5px;
        font-weight: 700;
        color: var(--admin-navy);
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .seo-tips-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .seo-tips-list li {
        font-size: 12.5px;
        color: #475569;
        display: flex;
        align-items: flex-start;
        gap: 8px;
        line-height: 1.4;
    }

    .seo-tips-list li i {
        color: #10B981;
        font-size: 13px;
        margin-top: 2px;
        flex-shrink: 0;
    }

    /* Actions Bar */
    .seo-actions-bar {
        padding: 16px 24px;
        background: #FAFBFD;
        border-top: 1px solid var(--admin-border);
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 12px;
    }
</style>
@endsection

@section('content')
<div class="seo-management-wrapper">

    <!-- Header Action Bar -->
    <div class="seo-header-bar">
        <div class="seo-header-text">
            <h3>Search Engine Optimization (SEO)</h3>
            <p>Control Google search results snippet, page title, meta description, and keywords for the public homepage.</p>
        </div>
        <div>
            <a href="{{ route('home') }}" target="_blank" class="btn-admin btn-secondary" title="View Public Website">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>Preview Homepage</span>
            </a>
        </div>
    </div>

    <form action="{{ route('admin.seo.update') }}" method="POST" id="seoSettingsForm">
        @csrf
        @method('PATCH')

        <div class="seo-grid-layout">
            <!-- Left Column: Form Inputs -->
            <div class="seo-card">
                <div class="seo-card-header">
                    <h3 class="seo-card-title">
                        <i class="fa-solid fa-sliders"></i>
                        <span>Homepage Meta Tags Configuration</span>
                    </h3>
                    <span style="font-size: 12px; color: #64748B;">Route: <code>GET /</code></span>
                </div>

                <div class="seo-card-body">
                    <!-- SEO Page Title -->
                    <div class="form-group-seo">
                        <div class="form-label-row">
                            <label for="home_seo_title" class="seo-input-label">
                                <i class="fa-solid fa-heading" style="color: var(--admin-orange);"></i>
                                <span>Homepage SEO Title &lt;title&gt;</span>
                                <span style="color: var(--admin-danger);">*</span>
                            </label>
                            <span class="seo-char-counter" id="titleCharCounter">0 / 60 chars</span>
                        </div>
                        <input type="text"
                               id="home_seo_title"
                               name="home_seo_title"
                               class="seo-text-input @error('home_seo_title') is-invalid @enderror"
                               value="{{ old('home_seo_title', $seoSettings['home_seo_title'] ?? '') }}"
                               maxlength="255"
                               required
                               placeholder="e.g. Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)"
                               autocomplete="off">
                        @error('home_seo_title')
                            <p class="seo-input-help" style="color: var(--admin-danger); font-weight: 600;">{{ $message }}</p>
                        @enderror
                        <p class="seo-input-help">
                            Recommended: <strong>50 – 60 characters</strong>. Appears as the clickable headline on Google Search, browser tabs, and social media bookmarks.
                        </p>
                    </div>

                    <!-- Meta Description -->
                    <div class="form-group-seo">
                        <div class="form-label-row">
                            <label for="home_seo_description" class="seo-input-label">
                                <i class="fa-solid fa-paragraph" style="color: var(--admin-orange);"></i>
                                <span>Meta Description &lt;meta name="description"&gt;</span>
                                <span style="color: var(--admin-danger);">*</span>
                            </label>
                            <span class="seo-char-counter" id="descCharCounter">0 / 160 chars</span>
                        </div>
                        <textarea id="home_seo_description"
                                  name="home_seo_description"
                                  rows="4"
                                  class="seo-textarea @error('home_seo_description') is-invalid @enderror"
                                  maxlength="1000"
                                  required
                                  placeholder="Write a compelling summary of Advaita School of Excellence for search engine users...">{{ old('home_seo_description', $seoSettings['home_seo_description'] ?? '') }}</textarea>
                        @error('home_seo_description')
                            <p class="seo-input-help" style="color: var(--admin-danger); font-weight: 600;">{{ $message }}</p>
                        @enderror
                        <p class="seo-input-help">
                            Recommended: <strong>150 – 160 characters</strong>. A compelling summary directly affects click-through rates from Google, Bing, WhatsApp, and Facebook link shares.
                        </p>
                    </div>

                    <!-- Meta Keywords -->
                    <div class="form-group-seo">
                        <div class="form-label-row">
                            <label for="home_seo_keywords" class="seo-input-label">
                                <i class="fa-solid fa-tags" style="color: var(--admin-orange);"></i>
                                <span>Meta Keywords &lt;meta name="keywords"&gt;</span>
                            </label>
                            <span class="seo-char-counter" id="keywordsCount">0 keywords</span>
                        </div>
                        <textarea id="home_seo_keywords"
                                  name="home_seo_keywords"
                                  rows="3"
                                  class="seo-textarea @error('home_seo_keywords') is-invalid @enderror"
                                  maxlength="1000"
                                  placeholder="Advaita School of Excellence, Parbhani School, CBSE School Parbhani, Best School in Parbhani...">{{ old('home_seo_keywords', $seoSettings['home_seo_keywords'] ?? '') }}</textarea>
                        @error('home_seo_keywords')
                            <p class="seo-input-help" style="color: var(--admin-danger); font-weight: 600;">{{ $message }}</p>
                        @enderror
                        <p class="seo-input-help">
                            Separate keywords or phrases with commas. Click any suggestion below to instantly add it:
                        </p>

                        <!-- Quick suggestion chips -->
                        <div class="keyword-chips-wrap">
                            <span class="chips-label">Add Popular:</span>
                            <button type="button" class="keyword-chip" data-keyword="CBSE School Parbhani">
                                <i class="fa-solid fa-plus"></i> CBSE School Parbhani
                            </button>
                            <button type="button" class="keyword-chip" data-keyword="Best School in Parbhani">
                                <i class="fa-solid fa-plus"></i> Best School in Parbhani
                            </button>
                            <button type="button" class="keyword-chip" data-keyword="Advaita School Admissions 2026-27">
                                <i class="fa-solid fa-plus"></i> School Admissions 2026
                            </button>
                            <button type="button" class="keyword-chip" data-keyword="Robotics STEAM Lab Parbhani">
                                <i class="fa-solid fa-plus"></i> Robotics STEAM Lab
                            </button>
                            <button type="button" class="keyword-chip" data-keyword="Affiliation No. 1130920">
                                <i class="fa-solid fa-plus"></i> Affiliation No. 1130920
                            </button>
                            <button type="button" class="keyword-chip" data-keyword="English Medium Parbhani">
                                <i class="fa-solid fa-plus"></i> English Medium
                            </button>
                        </div>
                    </div>
                </div>

                <div class="seo-actions-bar">
                    <button type="button" class="btn-admin btn-secondary" id="btnRestoreDefaults">
                        <i class="fa-solid fa-rotate-left"></i>
                        <span>Reset to Defaults</span>
                    </button>
                    <button type="submit" class="btn-admin btn-primary">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Save SEO Settings</span>
                    </button>
                </div>
            </div>

            <!-- Right Column: Live Search Preview & Tips -->
            <div style="display: flex; flex-direction: column; gap: 20px;">
                <div class="seo-card">
                    <div class="seo-card-header">
                        <h3 class="seo-card-title">
                            <i class="fa-brands fa-google" style="color: #4285F4;"></i>
                            <span>Google Search Live Snippet</span>
                        </h3>
                    </div>
                    <div class="seo-card-body">
                        <div class="serp-preview-box">
                            <div class="serp-brand-header">
                                <div class="serp-favicon">A</div>
                                <div class="serp-site-info">
                                    <span class="serp-site-name">Advaita School of Excellence</span>
                                    <span class="serp-breadcrumb">{{ url('/') }} › parbhani</span>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="serp-snippet-title" id="previewTitle">
                                Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)
                            </a>
                            <p class="serp-snippet-description" id="previewDescription">
                                Advaita School of Excellence, Parbhani - CBSE Affiliated English Medium School (No. 1130920). Offering future-ready education, modern robotics & science labs...
                            </p>
                        </div>

                        <div class="seo-tips-box">
                            <h4>
                                <i class="fa-solid fa-circle-check" style="color: #10B981;"></i>
                                <span>SEO Best Practices</span>
                            </h4>
                            <ul class="seo-tips-list">
                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    <span>Keep Title under 60 chars so Google doesn't truncate with "...".</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    <span>Include "Parbhani" and "CBSE" in Title for local search rankings.</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    <span>Use an active call-to-action in Description to boost admissions inquiries.</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    <span>Meta tags dynamically populate OpenGraph cards on WhatsApp & Facebook.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const titleInput = document.getElementById('home_seo_title');
    const descInput = document.getElementById('home_seo_description');
    const keywordsInput = document.getElementById('home_seo_keywords');

    const titleCounter = document.getElementById('titleCharCounter');
    const descCounter = document.getElementById('descCharCounter');
    const keywordsCount = document.getElementById('keywordsCount');

    const previewTitle = document.getElementById('previewTitle');
    const previewDesc = document.getElementById('previewDescription');

    const defaultTitle = "Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)";
    const defaultDesc = "Advaita School of Excellence, Parbhani - CBSE Affiliated English Medium School (No. 1130920). Offering future-ready education, modern robotics & science labs, holistic sports, and values-based learning from Pre-Primary to Class 10.";
    const defaultKeywords = "Advaita School of Excellence, Parbhani School, CBSE School Parbhani, Best School in Parbhani, CBSE Affiliated School 1130920, Robotics Lab School, English Medium School Parbhani";

    function updateTitleState() {
        const text = titleInput.value.trim();
        const length = text.length;

        titleCounter.textContent = `${length} / 60 chars`;
        titleCounter.className = 'seo-char-counter';

        if (length === 0) {
            previewTitle.textContent = defaultTitle;
            titleCounter.classList.add('warning');
        } else {
            previewTitle.textContent = text;
            if (length >= 40 && length <= 60) {
                titleCounter.classList.add('optimal');
            } else if (length > 65) {
                titleCounter.classList.add('excess');
            } else {
                titleCounter.classList.add('warning');
            }
        }
    }

    function updateDescState() {
        const text = descInput.value.trim();
        const length = text.length;

        descCounter.textContent = `${length} / 160 chars`;
        descCounter.className = 'seo-char-counter';

        if (length === 0) {
            previewDesc.textContent = defaultDesc;
            descCounter.classList.add('warning');
        } else {
            previewDesc.textContent = text;
            if (length >= 120 && length <= 160) {
                descCounter.classList.add('optimal');
            } else if (length > 165) {
                descCounter.classList.add('excess');
            } else {
                descCounter.classList.add('warning');
            }
        }
    }

    function updateKeywordsState() {
        const text = keywordsInput.value.trim();
        if (!text) {
            keywordsCount.textContent = '0 keywords';
            return;
        }
        const tokens = text.split(',').map(s => s.trim()).filter(s => s.length > 0);
        keywordsCount.textContent = `${tokens.length} keyword${tokens.length === 1 ? '' : 's'}`;
    }

    // Input event listeners for real-time live preview
    titleInput.addEventListener('input', updateTitleState);
    descInput.addEventListener('input', updateDescState);
    keywordsInput.addEventListener('input', updateKeywordsState);

    // Initial trigger
    updateTitleState();
    updateDescState();
    updateKeywordsState();

    // Suggested chips click
    document.querySelectorAll('.keyword-chip').forEach(function (button) {
        button.addEventListener('click', function () {
            const keywordToAdd = this.getAttribute('data-keyword');
            const currentVal = keywordsInput.value.trim();

            if (!currentVal) {
                keywordsInput.value = keywordToAdd;
            } else {
                const list = currentVal.split(',').map(s => s.trim().toLowerCase());
                if (!list.includes(keywordToAdd.toLowerCase())) {
                    keywordsInput.value = currentVal + ', ' + keywordToAdd;
                }
            }
            updateKeywordsState();
            keywordsInput.focus();
        });
    });

    // Reset defaults button
    const btnRestore = document.getElementById('btnRestoreDefaults');
    if (btnRestore) {
        btnRestore.addEventListener('click', function () {
            if (confirm('Reset SEO fields to the recommended school defaults?')) {
                titleInput.value = defaultTitle;
                descInput.value = defaultDesc;
                keywordsInput.value = defaultKeywords;
                updateTitleState();
                updateDescState();
                updateKeywordsState();
            }
        });
    }
});
</script>
@endsection
