@extends('layouts.admin')

@section('title', 'Edit ' . $currentSection['name'] . ' · Pages Content Manager')

@section('content')

<!-- Dedicated Edit Header Bar with Breadcrumb Navigation -->
<div class="content-page-header">
    <div class="cph-title-wrap">
        <a href="{{ route('admin.pages.index') }}" class="btn-back-square" title="Back to All Pages Directory">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <div class="cph-icon-box">
            <i class="{{ $currentSection['icon'] }}"></i>
        </div>
        <div>
            <div class="page-breadcrumb-line">
                <a href="{{ route('admin.pages.index') }}" class="breadcrumb-link">
                    <i class="fa-solid fa-layer-group"></i> Pages Content Manager
                </a>
                <i class="fa-solid fa-chevron-right breadcrumb-separator"></i>
                <span class="breadcrumb-current">{{ $currentSection['name'] }}</span>
            </div>
            <h1 class="cph-title">Edit {{ $currentSection['name'] }} Content</h1>
            <p class="cph-subtitle">Customize hero banners, copy text, key metrics, and photo assets for {{ $currentSection['name'] }}.</p>
        </div>
    </div>
    <div class="cph-actions">
        <a href="{{ route('admin.pages.index') }}" class="btn-admin btn-secondary">
            <i class="fa-solid fa-list-ul"></i>
            <span>All Pages</span>
        </a>
        <a href="{{ url($currentSection['url']) }}" target="_blank" class="btn-preview-link">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <span>View Live Page</span>
        </a>
        <a href="{{ route('admin.seo.index', ['page' => $currentSection['seo_key'] ?? 'home']) }}" class="btn-seo-link">
            <i class="fa-solid fa-magnifying-glass-chart"></i>
            <span>SEO Settings</span>
        </a>
    </div>
</div>

<div class="content-mgr-grid">

    <!-- Left Navigation Sidebar for Quick Page Switching -->
    <div class="sections-card">
        <div class="sections-card-header">
            <h3>
                <i class="fa-solid fa-layer-group text-navy"></i>
                <span>School Pages</span>
            </h3>
        </div>
        <div class="sections-list">
            @php
                $grouped = [];
                foreach ($sections as $k => $s) {
                    $grouped[$s['category']][$k] = $s;
                }
            @endphp

            @foreach($grouped as $category => $items)
            <div class="section-cat-label">
                <i class="fa-solid fa-circle dot-icon text-orange"></i>
                <span>{{ $category }}</span>
            </div>
            @foreach($items as $k => $item)
            <a href="{{ route('admin.pages.edit', ['section' => $k]) }}" 
               class="section-item-link {{ $selectedKey === $k ? 'active' : '' }}">
                <div class="d-flex align-items-center gap-10">
                    <span class="icon-box">
                        <i class="{{ $item['icon'] }}"></i>
                    </span>
                    <span>{{ $item['name'] }}</span>
                </div>
                <i class="fa-solid fa-chevron-right page-nav-arrow {{ $selectedKey === $k ? 'opacity-100' : 'opacity-30' }}"></i>
            </a>
            @endforeach
            @endforeach
        </div>
    </div>

    <!-- Right Main Editor Column -->
    <div class="editor-column">

        <!-- Active Section Banner -->
        <div class="section-hero-banner">
            <div class="shb-left">
                <div class="shb-icon-badge">
                    <i class="{{ $currentSection['icon'] }}"></i>
                </div>
                <div>
                    <span class="shb-tag">NOW EDITING</span>
                    <h2 class="shb-title">{{ $currentSection['name'] }}</h2>
                    <a href="{{ url($currentSection['url']) }}" target="_blank" class="shb-url">
                        <i class="fa-solid fa-link"></i>
                        <span>{{ url($currentSection['url']) }}</span>
                        <i class="fa-solid fa-external-link icon-sm-offset"></i>
                    </a>
                </div>
            </div>
            <div class="text-right">
                <span class="shb-badge-label">CATEGORY</span>
                <span class="shb-badge-pill">
                    {{ $currentSection['category'] }}
                </span>
            </div>
        </div>

        <form action="{{ route('admin.pages.update', ['section' => $selectedKey]) }}" method="POST" id="pageContentForm" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <input type="hidden" name="section_key" value="{{ $selectedKey }}">

            @php
                // Categorize fields into Hero, Stats, Profile/Quote, and General
                $imageFields = [];
                $heroFields = [];
                $statFields = [];
                $quoteFields = [];
                $generalFields = [];

                foreach ($currentSection['fields'] as $fKey => $fConfig) {
                    if (($fConfig['type'] ?? '') === 'image' || str_contains($fKey, '_image')) {
                        $imageFields[$fKey] = $fConfig;
                    } elseif (str_contains($fKey, '_stat_') || str_starts_with($fKey, 'stat_')) {
                        $statFields[$fKey] = $fConfig;
                    } elseif (str_contains($fKey, '_hero_') || str_contains($fKey, 'badge') || str_contains($fKey, 'vision_') || str_contains($fKey, 'mission_')) {
                        $heroFields[$fKey] = $fConfig;
                    } elseif (str_contains($fKey, 'quote')) {
                        $quoteFields[$fKey] = $fConfig;
                    } else {
                        $generalFields[$fKey] = $fConfig;
                    }
                }
            @endphp

            <div class="d-flex flex-column gap-20">

                <!-- 1. Section Imagery & Visual Media Uploads -->
                @if(count($imageFields) > 0)
                <div class="field-group-card" id="media-section">
                    <div class="fgc-header">
                        <div class="fgc-header-left">
                            <div class="fgc-icon icon-badge-orange">
                                <i class="fa-solid fa-camera-retro"></i>
                            </div>
                            <div>
                                <h3 class="fgc-title">Page Photography &amp; Visual Media Uploads</h3>
                                <span class="fgc-subtitle">Upload new photos, replace active visuals, or adjust image paths with instant live previews</span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column gap-18">
                        @foreach($imageFields as $fKey => $fConfig)
                        <div class="image-uploader-card mb-0">
                            <div class="current-img-box">
                                <img src="{{ asset($fConfig['value']) }}" 
                                     alt="{{ $fConfig['label'] }}" 
                                     id="preview_{{ $fKey }}"
                                     onerror="this.onerror=null;this.src='{{ asset('assets/images/logo.png') }}';">
                            </div>

                            <div>
                                <div class="d-flex align-items-center justify-content-between mb-6">
                                    <label for="{{ $fKey }}" class="text-navy fs-13 font-bold mb-0">
                                        {{ $fConfig['label'] }}
                                    </label>
                                    <span class="badge-blue-pill">Live on {{ $currentSection['name'] }}</span>
                                </div>
                                <div class="text-muted fs-11 mb-10">
                                    Active Source: <code class="text-navy font-semibold">{{ $fConfig['value'] }}</code>
                                </div>

                                <div class="upload-dropzone">
                                    <input type="file" 
                                           name="{{ $fKey }}_file" 
                                           id="{{ $fKey }}_file" 
                                           accept="image/*"
                                           onchange="if(this.files[0]){const r=new FileReader();r.onload=(e)=>{document.getElementById('preview_{{ $fKey }}').src=e.target.result;};r.readAsDataURL(this.files[0]);}">
                                    <i class="fa-solid fa-cloud-arrow-up fs-24 text-orange mb-6"></i>
                                    <div class="text-navy fs-13 font-bold">
                                        Click or drag new image here to upload
                                    </div>
                                    <div class="text-muted fs-11">
                                        JPG, PNG, WEBP supported. File is saved and activated upon clicking Save below.
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <input type="text" 
                                           name="{{ $fKey }}" 
                                           id="{{ $fKey }}" 
                                           value="{{ old($fKey, $fConfig['value']) }}" 
                                           class="form-control-clean fs-12 text-muted" 
                                           placeholder="Path override (e.g. assets/images/filename.jpg)">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Hero & Heading Group -->
                @if(count($heroFields) > 0)
                <div class="field-group-card">
                    <div class="fgc-header">
                        <div class="fgc-header-left">
                            <div class="fgc-icon">
                                <i class="fa-solid fa-heading"></i>
                            </div>
                            <div>
                                <h3 class="fgc-title">Hero Banner &amp; Headings</h3>
                                <span class="fgc-subtitle">Main headings, badge kicker, and introductory text displayed at the top of the page</span>
                            </div>
                        </div>
                    </div>

                    @php
                        $heroSingles = [];
                        $heroTexts = [];
                        foreach ($heroFields as $k => $c) {
                            if ($c['type'] === 'textarea') {
                                $heroTexts[$k] = $c;
                            } else {
                                $heroSingles[$k] = $c;
                            }
                        }
                    @endphp

                    @if(count($heroSingles) > 0)
                    <div class="card-subgrid-2col mb-18">
                        @foreach($heroSingles as $fKey => $fConfig)
                        <div class="form-group-clean mb-0">
                            <label for="{{ $fKey }}" class="fg-label-clean">
                                <span>{{ $fConfig['label'] }}</span>
                            </label>
                            <input type="text" 
                                   name="{{ $fKey }}" 
                                   id="{{ $fKey }}" 
                                   value="{{ old($fKey, $fConfig['value']) }}" 
                                   class="form-control-clean">
                        </div>
                        @endforeach
                    </div>
                    @endif

                    @foreach($heroTexts as $fKey => $fConfig)
                    <div class="form-group-clean">
                        <label for="{{ $fKey }}" class="fg-label-clean">
                            <span>{{ $fConfig['label'] }}</span>
                            <span class="fg-label-tag">Introductory Paragraph</span>
                        </label>
                        <textarea name="{{ $fKey }}" 
                                  id="{{ $fKey }}" 
                                  rows="3" 
                                  class="form-control-clean">{{ old($fKey, $fConfig['value']) }}</textarea>
                    </div>
                    @endforeach
                </div>
                @endif

                <!-- Key Statistics Group -->
                @if(count($statFields) > 0)
                <div class="field-group-card">
                    <div class="fgc-header">
                        <div class="fgc-header-left">
                            <div class="fgc-icon icon-badge-teal">
                                <i class="fa-solid fa-chart-column"></i>
                            </div>
                            <div>
                                <h3 class="fgc-title">Key Numbers &amp; Metrics</h3>
                                <span class="fgc-subtitle">Numbers and statistical achievements highlighted prominently on this page</span>
                            </div>
                        </div>
                    </div>

                    <div class="card-subgrid-3col">
                        @php
                            $statIcons = ['fa-graduation-cap', 'fa-award', 'fa-user-group', 'fa-school', 'fa-certificate'];
                            $iconIdx = 0;
                        @endphp
                        @foreach($statFields as $fKey => $fConfig)
                        <div class="form-group-clean mb-0">
                            <label for="{{ $fKey }}" class="fg-label-clean">
                                <span>{{ $fConfig['label'] }}</span>
                            </label>
                            <div class="d-flex align-items-center gap-8">
                                <span class="icon-chip-muted">
                                    <i class="fa-solid {{ $statIcons[$iconIdx % count($statIcons)] }}"></i>
                                </span>
                                <input type="text" 
                                       name="{{ $fKey }}" 
                                       id="{{ $fKey }}" 
                                       value="{{ old($fKey, $fConfig['value']) }}" 
                                       class="form-control-clean font-extrabold text-navy">
                            </div>
                        </div>
                        @php $iconIdx++; @endphp
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Leadership Quotes / Prominent Callouts -->
                @if(count($quoteFields) > 0)
                <div class="field-group-card">
                    <div class="fgc-header">
                        <div class="fgc-header-left">
                            <div class="fgc-icon icon-badge-purple">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                            <div>
                                <h3 class="fgc-title">Quotes &amp; Highlight Statements</h3>
                                <span class="fgc-subtitle">Featured leadership messages and guiding philosophies</span>
                            </div>
                        </div>
                    </div>

                    @foreach($quoteFields as $fKey => $fConfig)
                    <div class="form-group-clean">
                        <label for="{{ $fKey }}" class="fg-label-clean">
                            <span>{{ $fConfig['label'] }}</span>
                        </label>
                        <textarea name="{{ $fKey }}" 
                                  id="{{ $fKey }}" 
                                  rows="3" 
                                  class="form-control-clean font-italic-lead">{{ old($fKey, $fConfig['value']) }}</textarea>
                    </div>
                    @endforeach
                </div>
                @endif

                <!-- General Story & Section Copy -->
                @if(count($generalFields) > 0)
                <div class="field-group-card">
                    <div class="fgc-header">
                        <div class="fgc-header-left">
                            <div class="fgc-icon icon-badge-dark">
                                <i class="fa-solid fa-align-left"></i>
                            </div>
                            <div>
                                <h3 class="fgc-title">Story, Details &amp; Paragraphs</h3>
                                <span class="fgc-subtitle">Section headlines, descriptions, policy notes, and detailed explanations</span>
                            </div>
                        </div>
                    </div>

                    @php
                        $genSingles = [];
                        $genTexts = [];
                        foreach ($generalFields as $k => $c) {
                            if ($c['type'] === 'textarea') {
                                $genTexts[$k] = $c;
                            } else {
                                $genSingles[$k] = $c;
                            }
                        }
                    @endphp

                    @if(count($genSingles) > 0)
                    <div class="card-subgrid-2col mb-18">
                        @foreach($genSingles as $fKey => $fConfig)
                        <div class="form-group-clean mb-0">
                            <label for="{{ $fKey }}" class="fg-label-clean">
                                <span>{{ $fConfig['label'] }}</span>
                            </label>
                            <input type="text" 
                                   name="{{ $fKey }}" 
                                   id="{{ $fKey }}" 
                                   value="{{ old($fKey, $fConfig['value']) }}" 
                                   class="form-control-clean">
                        </div>
                        @endforeach
                    </div>
                    @endif

                    @foreach($genTexts as $fKey => $fConfig)
                    <div class="form-group-clean">
                        <label for="{{ $fKey }}" class="fg-label-clean">
                            <span>{{ $fConfig['label'] }}</span>
                        </label>
                        <textarea name="{{ $fKey }}" 
                                  id="{{ $fKey }}" 
                                  rows="4" 
                                  class="form-control-clean">{{ old($fKey, $fConfig['value']) }}</textarea>
                    </div>
                    @endforeach
                </div>
                @endif

            </div>

            <!-- Sticky Bottom Action Save Bar -->
            <div class="sticky-save-bar mt-24">
                <div class="d-flex align-items-center gap-8">
                    <span class="status-pulse-dot"></span>
                    <span class="save-status-text">
                        Saved changes reflect immediately on the public website.
                    </span>
                </div>
                <div class="d-flex align-items-center gap-10">
                    <a href="{{ route('admin.pages.index') }}" class="btn-reset-clean">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>Back to All Pages</span>
                    </a>
                    <button type="submit" class="btn-save-clean">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Save {{ $currentSection['name'] }} Content</span>
                    </button>
                </div>
            </div>

        </form>

    </div>

</div>

@endsection
