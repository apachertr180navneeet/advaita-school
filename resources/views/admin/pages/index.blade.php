@extends('layouts.admin')

@section('title', 'Pages Content Manager · Advaita School of Excellence')

@section('content')

<!-- Top Header Action Bar -->
<div class="content-page-header">
    <div class="cph-title-wrap">
        <div class="cph-icon-box">
            <i class="fa-solid fa-layer-group"></i>
        </div>
        <div>
            <h1 class="cph-title">School Pages Content Manager</h1>
            <p class="cph-subtitle">Select any public school page from the directory below to customize its hero banners, copy, statistics, and imagery on dedicated editing pages.</p>
        </div>
    </div>
    <div class="cph-actions">
        <a href="{{ route('home') }}" target="_blank" class="btn-admin btn-secondary">
            <i class="fa-solid fa-globe"></i>
            <span>View Homepage</span>
        </a>
        <a href="{{ route('admin.seo.index') }}" class="btn-seo-link">
            <i class="fa-solid fa-magnifying-glass-chart"></i>
            <span>All-Pages SEO</span>
        </a>
    </div>
</div>

<!-- Overview Metrics Row -->
<div class="pages-directory-metrics-grid mb-24">
    <div class="directory-metric-card">
        <div class="dm-info">
            <h4>{{ $totalPages ?? count($sections) }}</h4>
            <span>Public Pages Managed</span>
        </div>
        <div class="dm-icon dm-icon-pages">
            <i class="fa-solid fa-file-lines"></i>
        </div>
    </div>

    <div class="directory-metric-card">
        <div class="dm-info">
            <h4>{{ $totalFields ?? '120+' }}</h4>
            <span>Dynamic Content Fields</span>
        </div>
        <div class="dm-icon dm-icon-fields">
            <i class="fa-solid fa-sliders"></i>
        </div>
    </div>

    <div class="directory-metric-card">
        <div class="dm-info">
            <h4>{{ $totalImages ?? '25+' }}</h4>
            <span>Dynamic Photo Assets</span>
        </div>
        <div class="dm-icon dm-icon-images">
            <i class="fa-solid fa-camera-retro"></i>
        </div>
    </div>

    <div class="directory-metric-card">
        <div class="dm-info">
            <h4>100%</h4>
            <span>Live Sync Engine</span>
        </div>
        <div class="dm-icon dm-icon-sync">
            <i class="fa-solid fa-circle-check"></i>
        </div>
    </div>
</div>

<!-- Pages Directory Grouped Grid -->
@php
    $groupedSections = [];
    foreach ($sections as $k => $s) {
        $groupedSections[$s['category']][$k] = $s;
    }
@endphp

<div class="pages-directory-container">
    @foreach($groupedSections as $category => $items)
    <div class="directory-group-block mb-28">
        <div class="directory-group-header">
            <div class="d-flex align-items-center gap-10">
                <i class="fa-solid fa-circle dot-icon text-orange"></i>
                <h3 class="directory-group-title">{{ $category }}</h3>
            </div>
            <span class="group-count-pill">{{ count($items) }} Pages</span>
        </div>

        <div class="pages-cards-grid">
            @foreach($items as $key => $item)
            <div class="page-dir-card">
                <div class="pdc-top">
                    <div class="pdc-icon-badge">
                        <i class="{{ $item['icon'] }}"></i>
                    </div>
                    <span class="pdc-cat-tag">{{ $item['category'] }}</span>
                </div>

                <div class="pdc-body">
                    <h4 class="pdc-title">{{ $item['name'] }}</h4>
                    <a href="{{ url($item['url']) }}" target="_blank" class="pdc-route-link" title="Open live public URL">
                        <i class="fa-solid fa-link"></i>
                        <span>{{ $item['url'] }}</span>
                        <i class="fa-solid fa-arrow-up-right-from-square fs-11"></i>
                    </a>

                    <div class="pdc-meta-row">
                        <span class="pdc-meta-pill">
                            <i class="fa-solid fa-pen-nib text-orange"></i>
                            <span>{{ $item['field_count'] ?? count($item['fields']) }} Fields</span>
                        </span>
                        @if(($item['image_count'] ?? 0) > 0)
                        <span class="pdc-meta-pill">
                            <i class="fa-solid fa-image text-navy"></i>
                            <span>{{ $item['image_count'] }} Images</span>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="pdc-footer">
                    <a href="{{ route('admin.pages.edit', ['section' => $key]) }}" class="btn-edit-page-main">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span>Edit Content</span>
                    </a>
                    <a href="{{ route('admin.seo.index', ['page' => $item['seo_key'] ?? 'home']) }}" class="btn-edit-page-sub" title="Configure Page SEO">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                    </a>
                    <a href="{{ url($item['url']) }}" target="_blank" class="btn-edit-page-sub" title="View Public Page">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>

@endsection
