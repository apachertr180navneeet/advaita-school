@extends('layouts.admin')

@section('title', 'All-Pages SEO Management')

@section('content')
<div class="admin-page-header">
    <div class="header-left">
        <h1 class="page-title">SEO &amp; Meta Management</h1>
        <p class="page-subtitle">Configure search engine titles, meta descriptions, and indexing keywords for every page of the website.</p>
    </div>
    <div class="header-right">
        <a href="{{ url($currentPage['url']) }}" target="_blank" class="btn-action-view" style="padding: 10px 18px;">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <span>Preview {{ $currentPage['name'] }}</span>
        </a>
    </div>
</div>

<div class="seo-layout-grid" style="display: grid; grid-template-columns: 310px 1fr; gap: 24px; align-items: start;">
    
    <!-- Page Selector Sidebar List -->
    <div class="seo-pages-card" style="background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
        <div style="padding: 16px 20px; border-bottom: 1px solid var(--admin-border); background: #F8FAFC;">
            <h3 style="font-size: 13.5px; font-weight: 700; color: #334155; text-transform: uppercase; letter-spacing: 0.8px; margin: 0;">
                <i class="fa-solid fa-list-check" style="color: var(--admin-navy); margin-right: 6px;"></i>
                Select Page ({{ count($pages) }})
            </h3>
        </div>
        <div class="seo-pages-list" style="max-height: calc(100vh - 280px); overflow-y: auto; padding: 8px;">
            @foreach($pages as $key => $page)
            <a href="{{ route('admin.seo.index', ['page' => $key]) }}" 
               class="seo-page-item {{ $selectedKey === $key ? 'active' : '' }}" 
               style="display: flex; align-items: center; justify-content: space-between; padding: 12px 14px; border-radius: 10px; text-decoration: none; margin-bottom: 4px; transition: all 0.2s; {{ $selectedKey === $key ? 'background: rgba(8, 59, 122, 0.08); border-left: 4px solid var(--admin-navy); font-weight: 700; color: var(--admin-navy);' : 'color: #475569;' }}">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <i class="{{ $page['icon'] }}" style="width: 18px; text-align: center; color: {{ $selectedKey === $key ? 'var(--admin-navy)' : '#94A3B8' }};"></i>
                    <span style="font-size: 13.5px;">{{ $page['name'] }}</span>
                </div>
                @if($page['is_customized'])
                    <span style="font-size: 10px; font-weight: 700; background: #ECFDF5; color: #059669; border: 1px solid #A7F3D0; padding: 2px 7px; border-radius: 10px;">Active</span>
                @else
                    <span style="font-size: 10px; font-weight: 600; background: #F1F5F9; color: #64748B; padding: 2px 7px; border-radius: 10px;">Default</span>
                @endif
            </a>
            @endforeach
        </div>
    </div>

    <!-- Active Page SEO Editor Form -->
    <div class="seo-editor-column" style="display: flex; flex-direction: column; gap: 24px;">

        <!-- Live Google Search Engine Preview Card -->
        <div class="serp-preview-card" style="background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; padding: 22px 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px;">
                <span style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #64748B;">
                    <i class="fa-brands fa-google" style="color: #EA4335; margin-right: 6px;"></i>
                    Google Search Result Snippet Preview
                </span>
                <span style="font-size: 11.5px; color: #94A3B8;">Desktop &amp; Mobile SERP</span>
            </div>
            
            <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 10px; padding: 18px 20px;">
                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                    <div style="width: 22px; height: 22px; border-radius: 50%; background: #083B7A; color: #fff; font-size: 10px; font-weight: 800; display: flex; align-items: center; justify-content: center;">A</div>
                    <div style="font-size: 12px; color: #202124; line-height: 1.2;">
                        <span style="font-weight: 500;">Advaita School of Excellence</span>
                        <span style="color: #5f6368; margin-left: 4px;">{{ url($currentPage['url']) }}</span>
                    </div>
                </div>
                <h4 id="serpTitlePreview" style="font-size: 18px; font-weight: 500; color: #1a0dab; margin: 0 0 6px 0; line-height: 1.3; cursor: pointer;">
                    {{ $currentPage['title'] }}
                </h4>
                <p id="serpDescPreview" style="font-size: 13.5px; color: #4d5156; line-height: 1.5; margin: 0;">
                    {{ $currentPage['description'] }}
                </p>
            </div>
        </div>

        <!-- SEO Metadata Form -->
        <div class="seo-form-card" style="background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; padding: 26px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
            <div style="border-bottom: 1px solid var(--admin-border); padding-bottom: 16px; margin-bottom: 22px;">
                <h2 style="font-size: 18px; font-weight: 800; color: var(--admin-text-main); margin-bottom: 4px;">
                    Editing Meta for: <span style="color: var(--admin-navy);">{{ $currentPage['name'] }}</span>
                </h2>
                <p style="font-size: 13px; color: var(--admin-text-muted);">
                    Target Route: <code style="background: #F1F5F9; padding: 2px 6px; border-radius: 4px; color: #083B7A;">{{ $currentPage['url'] }}</code>
                </p>
            </div>

            <form action="{{ route('admin.seo.update') }}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="page_key" value="{{ $selectedKey }}">

                <!-- SEO Page Title -->
                <div style="margin-bottom: 22px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                        <label for="seoTitleInput" style="font-size: 13.5px; font-weight: 700; color: #1E293B;">
                            Page Title Tag <span style="color: #EF4444;">*</span>
                        </label>
                        <span id="titleCounter" style="font-size: 12px; font-weight: 600; color: #64748B;">
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
                           style="width: 100%; padding: 12px 16px; border: 1px solid var(--admin-border); border-radius: 10px; font-size: 14px; font-family: inherit; transition: border-color 0.2s;"
                           oninput="updateSerpPreview()">
                    <span style="font-size: 12px; color: #64748B; margin-top: 6px; display: block;">
                        Keep titles around 50–60 characters so they are fully displayed in search engine results.
                    </span>
                    @error('title')
                        <span style="color: #EF4444; font-size: 12px; margin-top: 4px; display: block;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Meta Description -->
                <div style="margin-bottom: 22px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                        <label for="seoDescInput" style="font-size: 13.5px; font-weight: 700; color: #1E293B;">
                            Meta Description <span style="color: #EF4444;">*</span>
                        </label>
                        <span id="descCounter" style="font-size: 12px; font-weight: 600; color: #64748B;">
                            <span id="descChars">{{ strlen($currentPage['description']) }}</span> / 160 recommended
                        </span>
                    </div>
                    <textarea name="description" 
                              id="seoDescInput" 
                              rows="4" 
                              required 
                              maxlength="1000"
                              placeholder="Write a clear, informative summary for search engines and social shares..."
                              style="width: 100%; padding: 12px 16px; border: 1px solid var(--admin-border); border-radius: 10px; font-size: 14px; font-family: inherit; resize: vertical; line-height: 1.5; transition: border-color 0.2s;"
                              oninput="updateSerpPreview()">{{ old('description', $currentPage['description']) }}</textarea>
                    <span style="font-size: 12px; color: #64748B; margin-top: 6px; display: block;">
                        Search engines typically display the first 150–160 characters. Highlight key differentiators.
                    </span>
                    @error('description')
                        <span style="color: #EF4444; font-size: 12px; margin-top: 4px; display: block;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Meta Keywords -->
                <div style="margin-bottom: 28px;">
                    <label for="seoKeywordsInput" style="display: block; font-size: 13.5px; font-weight: 700; color: #1E293B; margin-bottom: 8px;">
                        Focus Keywords &amp; Tags <span style="font-weight: 400; color: #64748B;">(Comma separated)</span>
                    </label>
                    <textarea name="keywords" 
                              id="seoKeywordsInput" 
                              rows="3" 
                              maxlength="1000"
                              placeholder="e.g. CBSE School Parbhani, Best School, Robotics Labs, Class 1 to 10..."
                              style="width: 100%; padding: 12px 16px; border: 1px solid var(--admin-border); border-radius: 10px; font-size: 14px; font-family: inherit; resize: vertical; line-height: 1.5; transition: border-color 0.2s;">{{ old('keywords', $currentPage['keywords']) }}</textarea>
                    @error('keywords')
                        <span style="color: #EF4444; font-size: 12px; margin-top: 4px; display: block;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Action Buttons -->
                <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid var(--admin-border); padding-top: 20px;">
                    <button type="submit" class="btn-action-view" style="background: var(--admin-navy); color: #fff; padding: 12px 28px; font-size: 14px; border: none; cursor: pointer; border-radius: 10px;">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Save {{ $currentPage['name'] }} SEO</span>
                    </button>
                    
                    <button type="button" 
                            onclick="resetToDefault('{{ addslashes($currentPage['default_title']) }}', '{{ addslashes($currentPage['default_description']) }}', '{{ addslashes($currentPage['default_keywords']) }}')" 
                            style="background: transparent; border: 1px solid #CBD5E1; color: #64748B; padding: 10px 18px; border-radius: 10px; font-size: 13px; font-weight: 600; cursor: pointer;">
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
