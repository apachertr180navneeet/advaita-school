@extends('layouts.admin')

@section('title', 'School Pages Content Management')

@section('content')
<div class="admin-page-header">
    <div class="header-left">
        <h1 class="page-title">School Pages Content Manager</h1>
        <p class="page-subtitle">Manage dynamic text, stats, quotes, leadership messages, and highlights across inner school pages.</p>
    </div>
    <div class="header-right">
        <a href="{{ url($currentSection['url']) }}" target="_blank" class="btn-action-view" style="padding: 10px 18px;">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <span>Preview {{ $currentSection['name'] }}</span>
        </a>
    </div>
</div>

<div class="content-mgr-grid" style="display: grid; grid-template-columns: 310px 1fr; gap: 24px; align-items: start;">

    <!-- Left Sidebar: Section Selectors -->
    <div class="sections-card" style="background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
        <div style="padding: 16px 20px; border-bottom: 1px solid var(--admin-border); background: #F8FAFC;">
            <h3 style="font-size: 13.5px; font-weight: 700; color: #334155; text-transform: uppercase; letter-spacing: 0.8px; margin: 0;">
                <i class="fa-solid fa-layer-group" style="color: var(--admin-navy); margin-right: 6px;"></i>
                Pages &amp; Sections ({{ count($sections) }})
            </h3>
        </div>
        <div class="sections-list" style="max-height: calc(100vh - 280px); overflow-y: auto; padding: 8px;">
            @php
                $grouped = [];
                foreach ($sections as $k => $s) {
                    $grouped[$s['category']][$k] = $s;
                }
            @endphp

            @foreach($grouped as $category => $items)
            <div style="font-size: 11px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; color: #94A3B8; padding: 10px 12px 4px 12px;">
                {{ $category }}
            </div>
            @foreach($items as $k => $item)
            <a href="{{ route('admin.pages.index', ['section' => $k]) }}" 
               class="section-item {{ $selectedKey === $k ? 'active' : '' }}" 
               style="display: flex; align-items: center; justify-content: space-between; padding: 11px 14px; border-radius: 10px; text-decoration: none; margin-bottom: 3px; transition: all 0.2s; {{ $selectedKey === $k ? 'background: rgba(8, 59, 122, 0.08); border-left: 4px solid var(--admin-navy); font-weight: 700; color: var(--admin-navy);' : 'color: #475569;' }}">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <i class="{{ $item['icon'] }}" style="width: 18px; text-align: center; color: {{ $selectedKey === $k ? 'var(--admin-navy)' : '#94A3B8' }};"></i>
                    <span style="font-size: 13.5px;">{{ $item['name'] }}</span>
                </div>
                <i class="fa-solid fa-chevron-right" style="font-size: 10px; opacity: {{ $selectedKey === $k ? '1' : '0.4' }};"></i>
            </a>
            @endforeach
            @endforeach
        </div>
    </div>

    <!-- Right Column: Active Section Editor -->
    <div class="section-editor-card" style="background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; padding: 26px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
        <div style="border-bottom: 1px solid var(--admin-border); padding-bottom: 16px; margin-bottom: 22px; display: flex; align-items: center; justify-content: space-between;">
            <div>
                <h2 style="font-size: 19px; font-weight: 800; color: var(--admin-text-main); margin-bottom: 4px;">
                    Editing: <span style="color: var(--admin-navy);">{{ $currentSection['name'] }}</span>
                </h2>
                <p style="font-size: 13px; color: var(--admin-text-muted);">
                    Live Page URL: <a href="{{ url($currentSection['url']) }}" target="_blank" style="color: var(--admin-orange); text-decoration: none; font-weight: 600;">{{ url($currentSection['url']) }} <i class="fa-solid fa-external-link" style="font-size: 10px;"></i></a>
                </p>
            </div>
            <a href="{{ route('admin.seo.index', ['page' => $currentSection['seo_key'] ?? 'home']) }}" class="btn-action-view" style="font-size: 12px; padding: 8px 14px; background: rgba(243, 112, 33, 0.1); color: var(--admin-orange); border-color: rgba(243, 112, 33, 0.25);">
                <i class="fa-solid fa-magnifying-glass-chart"></i>
                <span>Edit This Page's SEO</span>
            </a>
        </div>

        <form action="{{ route('admin.pages.update') }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="section_key" value="{{ $selectedKey }}">

            <div style="display: flex; flex-direction: column; gap: 20px;">
                @foreach($currentSection['fields'] as $fKey => $fConfig)
                <div style="background: #F8FAFC; border: 1px solid var(--admin-border); border-radius: 10px; padding: 18px 20px;">
                    <label for="{{ $fKey }}" style="display: block; font-size: 13.5px; font-weight: 700; color: #1E293B; margin-bottom: 8px;">
                        {{ $fConfig['label'] }}
                    </label>

                    @if($fConfig['type'] === 'textarea')
                        <textarea name="{{ $fKey }}" 
                                  id="{{ $fKey }}" 
                                  rows="4" 
                                  style="width: 100%; padding: 12px 14px; border: 1px solid #CBD5E1; border-radius: 8px; font-size: 14px; font-family: inherit; line-height: 1.5; resize: vertical; background: #ffffff;">{{ old($fKey, $fConfig['value']) }}</textarea>
                    @else
                        <input type="text" 
                               name="{{ $fKey }}" 
                               id="{{ $fKey }}" 
                               value="{{ old($fKey, $fConfig['value']) }}" 
                               style="width: 100%; padding: 11px 14px; border: 1px solid #CBD5E1; border-radius: 8px; font-size: 14px; font-family: inherit; background: #ffffff;">
                    @endif
                </div>
                @endforeach
            </div>

            <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid var(--admin-border); padding-top: 22px; margin-top: 24px;">
                <span style="font-size: 12.5px; color: var(--admin-text-muted);">
                    <i class="fa-solid fa-circle-check" style="color: var(--admin-success); margin-right: 4px;"></i>
                    Saved text will reflect immediately on the user-facing page.
                </span>
                <button type="submit" class="btn-action-view" style="background: var(--admin-navy); color: #fff; padding: 12px 28px; font-size: 14px; border: none; cursor: pointer; border-radius: 10px;">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Save {{ $currentSection['name'] }} Content</span>
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
