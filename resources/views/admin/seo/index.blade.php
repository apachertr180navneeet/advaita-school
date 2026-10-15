@extends('layouts.admin')

@section('title', 'All-Pages SEO Management')

@section('content')
<div class="admin-page-header">
    <div class="header-left">
        <h1 class="page-title">SEO &amp; Meta Management</h1>
        <p class="page-subtitle">Configure search engine titles, meta descriptions, and indexing keywords for every page of the website.</p>
    </div>
    <div class="header-right">
        <a href="{{ url($currentPage['url']) }}" target="_blank" class="btn-action-view btn-pad-md">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <span>Preview {{ $currentPage['name'] }}</span>
        </a>
    </div>
</div>

<div class="seo-layout-grid seo-master-grid">
    
    <!-- Page Selector Sidebar List -->
    <div class="seo-sidebar-card">
        <div class="seo-sidebar-header">
            <h3 class="seo-sidebar-title">
                <i class="fa-solid fa-list-check text-navy mr-6"></i>
                Select Page ({{ count($pages) }})
            </h3>
        </div>
        <div class="seo-page-nav-list">
            @foreach($pages as $key => $page)
            <a href="{{ route('admin.seo.index', ['page' => $key]) }}" 
               class="seo-page-item {{ $selectedKey === $key ? 'active' : '' }}">
                <div class="d-flex align-items-center gap-10">
                    <i class="{{ $page['icon'] }} seo-page-nav-icon"></i>
                    <span>{{ $page['name'] }}</span>
                </div>
                @if($page['is_customized'])
                    <span class="status-pill-clean status-pill-success">Active</span>
                @else
                    <span class="status-pill-clean status-pill-muted">Default</span>
                @endif
            </a>
            @endforeach
        </div>
    </div>

    <!-- Active Page SEO Editor Form -->
    <div class="seo-main-editor-wrap">

        <!-- Live Google Search Engine Preview Card -->
        <div class="seo-serp-card">
            <div class="seo-serp-eyebrow">
                <span>
                    <i class="fa-brands fa-google text-danger mr-6"></i>
                    Google Search Result Snippet Preview
                </span>
                <span class="text-muted">Desktop &amp; Mobile SERP</span>
            </div>
            
            <div class="seo-serp-box">
                <div class="seo-serp-meta-row">
                    <div class="seo-serp-site-icon">A</div>
                    <div class="seo-serp-site-name">
                        <span>Advaita School of Excellence</span>
                        <span class="seo-serp-site-url">{{ url($currentPage['url']) }}</span>
                    </div>
                </div>
                <h4 id="serpTitlePreview" class="seo-serp-title-preview">
                    {{ $currentPage['title'] }}
                </h4>
                <p id="serpDescPreview" class="seo-serp-snippet-preview">
                    {{ $currentPage['description'] }}
                </p>
            </div>
        </div>

        <!-- SEO Metadata Form -->
        <div class="seo-editor-card">
            <div class="seo-editor-header">
                <h2 class="seo-editor-title">
                    Editing Meta for: <span class="text-navy">{{ $currentPage['name'] }}</span>
                </h2>
                <p class="text-muted">
                    Target Route: <code class="seo-page-badge">{{ $currentPage['url'] }}</code>
                </p>
            </div>

            <form action="{{ route('admin.seo.update') }}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="page_key" value="{{ $selectedKey }}">

                <!-- SEO Page Title -->
                <div class="mb-22">
                    <div class="d-flex justify-content-between align-items-center mb-8">
                        <label for="seoTitleInput" class="seo-field-label">
                            Page Title Tag <span class="text-danger">*</span>
                        </label>
                        <span id="titleCounter" class="text-muted">
                            <span id="titleChars">{{ strlen($currentPage['title']) }}</span> / 60 recommended
                        </span>
                    </div>
                    <input type="text" 
                           name="title" 
                           id="seoTitleInput" 
                           value="{{ old('title', $currentPage['title']) }}" 
                           required 
                           maxlength="255"
                           placeholder="Enter compelling meta title..."
                           class="seo-input-control"
                           oninput="updateSerpPreview()">
                    <span class="text-muted d-block mt-6">
                        Keep titles around 50–60 characters so they are fully displayed in search engine results.
                    </span>
                    @error('title')
                        <span class="text-danger d-block mt-4">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Meta Description -->
                <div class="mb-22">
                    <div class="d-flex justify-content-between align-items-center mb-8">
                        <label for="seoDescInput" class="seo-field-label">
                            Meta Description <span class="text-danger">*</span>
                        </label>
                        <span id="descCounter" class="text-muted">
                            <span id="descChars">{{ strlen($currentPage['description']) }}</span> / 160 recommended
                        </span>
                    </div>
                    <textarea name="description" 
                              id="seoDescInput" 
                              rows="4" 
                              required 
                              maxlength="1000"
                              placeholder="Write a clear, informative summary for search engines and social shares..."
                              class="seo-textarea-control"
                              oninput="updateSerpPreview()">{{ old('description', $currentPage['description']) }}</textarea>
                    <span class="text-muted d-block mt-6">
                        Search engines typically display the first 150–160 characters. Highlight key differentiators.
                    </span>
                    @error('description')
                        <span class="text-danger d-block mt-4">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Meta Keywords -->
                <div class="mb-28">
                    <label for="seoKeywordsInput" class="seo-field-label mb-8">
                        Focus Keywords &amp; Tags <span class="seo-field-hint">(Comma separated)</span>
                    </label>
                    <textarea name="keywords" 
                              id="seoKeywordsInput" 
                              rows="3" 
                              maxlength="1000"
                              placeholder="e.g. CBSE School Parbhani, Best School, Robotics Labs, Class 1 to 10..."
                              class="seo-textarea-control">{{ old('keywords', $currentPage['keywords']) }}</textarea>
                    @error('keywords')
                        <span class="text-danger d-block mt-4">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Action Buttons -->
                <div class="seo-action-bar">
                    <button type="submit" class="btn-save-clean">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Save {{ $currentPage['name'] }} SEO</span>
                    </button>
                    
                    <button type="button" 
                            onclick="resetToDefault('{{ addslashes($currentPage['default_title']) }}', '{{ addslashes($currentPage['default_description']) }}', '{{ addslashes($currentPage['default_keywords']) }}')" 
                            class="btn-seo-reset">
                        <i class="fa-solid fa-arrow-rotate-left"></i>
                        <span>Restore Defaults</span>
                    </button>
                </div>
            </form>
        </div>

    </div>

</div>

<script>
function updateSerpPreview() {
    const titleInput = document.getElementById('seoTitleInput');
    const descInput = document.getElementById('seoDescInput');
    const serpTitle = document.getElementById('serpTitlePreview');
    const serpDesc = document.getElementById('serpDescPreview');
    
    const titleLen = titleInput.value.length;
    const descLen = descInput.value.length;
    
    document.getElementById('titleChars').textContent = titleLen;
    document.getElementById('descChars').textContent = descLen;
    
    serpTitle.textContent = titleInput.value.trim() || 'No Title Provided';
    serpDesc.textContent = descInput.value.trim() || 'No description provided for search engine snippets.';
    
    // Highlight counters if over standard limit
    const titleCharsElem = document.getElementById('titleChars');
    if (titleLen > 65) {
        titleCharsElem.style.color = '#EF4444';
    } else {
        titleCharsElem.style.color = '#64748B';
    }
    
    const descCharsElem = document.getElementById('descChars');
    if (descLen > 165) {
        descCharsElem.style.color = '#EF4444';
    } else {
        descCharsElem.style.color = '#64748B';
    }
}

function resetToDefault(defTitle, defDesc, defKeywords) {
    if (confirm('Restore default recommended SEO title, description, and keywords for this page?')) {
        document.getElementById('seoTitleInput').value = defTitle;
        document.getElementById('seoDescInput').value = defDesc;
        document.getElementById('seoKeywordsInput').value = defKeywords;
        updateSerpPreview();
    }
}

document.addEventListener('DOMContentLoaded', updateSerpPreview);
</script>
@endsection
