@extends('layouts.admin')

@section('title', 'Why Choose Advaita Management')
@section('page_title', 'Why Choose Advaita (6 Advantage Cards)')

@section('styles')
<style>
    .why-header-bar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        margin-bottom: 24px;
    }

    .why-section-settings-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        padding: 24px;
        margin-bottom: 24px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
    }

    .why-settings-title {
        font-size: 16px;
        font-weight: 800;
        color: var(--admin-navy);
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .why-guide-box {
        background: linear-gradient(135deg, rgba(8, 59, 122, 0.05) 0%, rgba(243, 112, 33, 0.08) 100%);
        border: 1px solid rgba(243, 112, 33, 0.25);
        border-radius: 14px;
        padding: 16px 20px;
        margin-bottom: 24px;
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }

    .why-guide-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--admin-orange);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
        box-shadow: 0 4px 12px rgba(243, 112, 33, 0.3);
    }

    .why-cards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
        gap: 24px;
    }

    .why-admin-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        display: flex;
        flex-direction: column;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .why-admin-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(8, 59, 122, 0.08);
    }

    .why-card-media-wrap {
        position: relative;
        height: 190px;
        background: #0f172a;
        overflow: hidden;
    }

    .why-card-media-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .why-admin-card:hover .why-card-media-img {
        transform: scale(1.04);
    }

    .why-card-badge-num {
        position: absolute;
        top: 0;
        left: 0;
        font-size: 16px;
        font-weight: 800;
        color: #ffffff;
        padding: 6px 16px 6px 12px;
        border-bottom-right-radius: 18px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        z-index: 2;
    }

    .why-card-order-chip {
        position: absolute;
        top: 10px;
        right: 10px;
        background: rgba(0, 0, 0, 0.65);
        backdrop-filter: blur(4px);
        color: #ffffff;
        font-size: 11px;
        font-weight: 700;
        padding: 4px 10px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        gap: 5px;
        z-index: 2;
    }

    .why-card-specs-bar {
        position: absolute;
        bottom: 8px;
        left: 10px;
        right: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: rgba(15, 23, 42, 0.75);
        backdrop-filter: blur(6px);
        border-radius: 8px;
        padding: 4px 10px;
        font-size: 11px;
        color: #F8FAFC;
        z-index: 2;
    }

    .why-card-content {
        padding: 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .why-card-theme-tag {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 11.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 3px 10px;
        border-radius: 20px;
        margin-bottom: 10px;
        width: fit-content;
    }

    .why-card-title {
        font-size: 16px;
        font-weight: 800;
        color: var(--admin-navy);
        margin-bottom: 8px;
        line-height: 1.3;
    }

    .why-card-desc {
        font-size: 13px;
        color: #64748B;
        line-height: 1.5;
        margin-bottom: 16px;
        flex: 1;
    }

    .why-card-footer {
        padding-top: 14px;
        border-top: 1px solid var(--admin-border);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
    }

    .status-badge-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
        border: none;
        cursor: pointer;
        transition: all 0.2s;
    }

    .status-badge-btn.active {
        background: #DCFCE7;
        color: #15803D;
    }

    .status-badge-btn.inactive {
        background: #F1F5F9;
        color: #64748B;
    }

    .card-actions-group {
        display: flex;
        align-items: center;
        gap: 8px;
    }
</style>
@endsection

@section('content')
<div class="why-management-wrapper">

    <!-- Header Action Bar -->
    <div class="why-header-bar">
        <div>
            <h3 style="font-size: 20px; font-weight: 800; color: var(--admin-navy); margin-bottom: 4px;">
                Why Choose Advaita
            </h3>
            <p style="font-size: 13.5px; color: #64748B; margin: 0;">
                Manage the dynamic advantage cards slider and section header shown on the public homepage.
            </p>
        </div>
        <div style="display: flex; gap: 10px; align-items: center;">
            <a href="{{ route('home') }}#why-choose" target="_blank" class="btn-admin btn-secondary" title="View live section on Homepage">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>Live Preview</span>
            </a>
            <a href="{{ route('admin.why-choose.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add Advantage Card</span>
            </a>
        </div>
    </div>

    <!-- Section Heading & Subtitle Customizer Card -->
    <div class="why-section-settings-card">
        <h4 class="why-settings-title">
            <i class="fa-solid fa-pen-to-square" style="color: var(--admin-orange);"></i>
            <span>Section Header &amp; Subtitle Settings</span>
        </h4>
        <form action="{{ route('admin.why-choose.section-header') }}" method="POST">
            @csrf
            @method('PATCH')

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px; margin-bottom: 16px;">
                <div class="form-group" style="margin: 0;">
                    <label class="form-label" style="font-size: 13px; font-weight: 700; color: #334155; margin-bottom: 6px;">
                        Eyebrow / Badge Text <span style="color: #EF4444;">*</span>
                    </label>
                    <input type="text" name="eyebrow" class="form-control" value="{{ old('eyebrow', $sectionSettings['eyebrow']) }}" required maxlength="150" placeholder="e.g. WHY CHOOSE ADVAITA?">
                </div>

                <div class="form-group" style="margin: 0;">
                    <label class="form-label" style="font-size: 13px; font-weight: 700; color: #334155; margin-bottom: 6px;">
                        Title Part 1 (Navy Dark) <span style="color: #EF4444;">*</span>
                    </label>
                    <input type="text" name="title_1" class="form-control" value="{{ old('title_1', $sectionSettings['title_1']) }}" required maxlength="255" placeholder="e.g. Why Choose">
                </div>

                <div class="form-group" style="margin: 0;">
                    <label class="form-label" style="font-size: 13px; font-weight: 700; color: #334155; margin-bottom: 6px;">
                        Title Part 2 (Orange Accent)
                    </label>
                    <input type="text" name="title_2" class="form-control" value="{{ old('title_2', $sectionSettings['title_2']) }}" maxlength="255" placeholder="e.g. Advaita?">
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 16px;">
                <label class="form-label" style="font-size: 13px; font-weight: 700; color: #334155; margin-bottom: 6px;">
                    Section Subtitle / Description
                </label>
                <textarea name="subtitle" rows="2" class="form-control" placeholder="A brief description explaining what makes Advaita unique...">{{ old('subtitle', $sectionSettings['subtitle']) }}</textarea>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px; margin-bottom: 18px;">
                <div class="form-group" style="margin: 0;">
                    <label class="form-label" style="font-size: 13px; font-weight: 700; color: #334155; margin-bottom: 6px;">
                        Bottom CTA Button Text
                    </label>
                    <input type="text" name="cta_text" class="form-control" value="{{ old('cta_text', $sectionSettings['cta_text']) }}" maxlength="100" placeholder="e.g. Discover the Advaita Difference">
                </div>

                <div class="form-group" style="margin: 0;">
                    <label class="form-label" style="font-size: 13px; font-weight: 700; color: #334155; margin-bottom: 6px;">
                        Bottom CTA Button URL
                    </label>
                    <input type="text" name="cta_url" class="form-control" value="{{ old('cta_url', $sectionSettings['cta_url']) }}" maxlength="255" placeholder="e.g. #admissions or /admission-info">
                </div>
            </div>

            <div style="display: flex; justify-content: flex-end;">
                <button type="submit" class="btn-admin btn-primary">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Save Section Heading</span>
                </button>
            </div>
        </form>
    </div>

    <!-- Quick Info Banner -->
    <div class="why-guide-box">
        <div class="why-guide-icon">
            <i class="fa-solid fa-lightbulb"></i>
        </div>
        <div style="font-size: 13.5px; color: #475569; line-height: 1.5;">
            <strong>Image &amp; Display Recommendation:</strong> For optimal sharp rendering inside the homepage slider, upload images with a <strong>3:2 aspect ratio (recommended 600 × 400 px)</strong>. Each card can have a unique theme color badge to highlight core school pillars.
        </div>
    </div>

    <!-- Cards Grid -->
    <div class="why-cards-grid">
        @forelse($cards as $card)
            @php
                $themeInfo = \App\Models\WhyChooseCard::THEME_COLORS[$card->theme_color] ?? \App\Models\WhyChooseCard::THEME_COLORS['orange'];
            @endphp
            <div class="why-admin-card">
                <!-- Media Wrap with Badge & Specs -->
                <div class="why-card-media-wrap">
                    <img src="{{ $card->image_url }}" alt="{{ $card->title }}" class="why-card-media-img" loading="lazy">
                    
                    <!-- Number Badge -->
                    <div class="why-card-badge-num" style="background: {{ $themeInfo['gradient'] }};">
                        {{ $card->badge_label }}
                    </div>

                    <!-- Order Chip -->
                    <div class="why-card-order-chip">
                        <i class="fa-solid fa-arrow-down-1-9"></i>
                        <span>Order #{{ $card->order }}</span>
                    </div>

                    <!-- Image Specs Bar -->
                    <div class="why-card-specs-bar">
                        <span><i class="fa-solid fa-expand" style="margin-right: 4px;"></i>{{ $card->image_dimensions ?? 'Responsive' }}</span>
                        <span><i class="fa-solid fa-hard-drive" style="margin-right: 4px;"></i>{{ $card->image_size ?? 'Optimized' }}</span>
                    </div>
                </div>

                <!-- Content Area -->
                <div class="why-card-content">
                    <span class="why-card-theme-tag" style="background: {{ $themeInfo['badge'] }}18; color: {{ $themeInfo['badge'] }}; border: 1px solid {{ $themeInfo['badge'] }}35;">
                        <span style="width: 8px; height: 8px; border-radius: 50%; background: {{ $themeInfo['badge'] }};"></span>
                        {{ $themeInfo['label'] }}
                    </span>

                    <h4 class="why-card-title">{{ $card->title }}</h4>
                    <p class="why-card-desc">{{ $card->description }}</p>

                    <!-- Footer Controls -->
                    <div class="why-card-footer">
                        <!-- Toggle Status Form -->
                        <form action="{{ route('admin.why-choose.toggle-status', $card) }}" method="POST" style="margin: 0;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="status-badge-btn {{ $card->is_active ? 'active' : 'inactive' }}" title="Click to {{ $card->is_active ? 'deactivate' : 'activate' }}">
                                <i class="fa-solid fa-circle-{{ $card->is_active ? 'check' : 'xmark' }}"></i>
                                <span>{{ $card->is_active ? 'Active' : 'Inactive' }}</span>
                            </button>
                        </form>

                        <!-- Actions -->
                        <div class="card-actions-group">
                            <a href="{{ route('admin.why-choose.edit', $card) }}" class="btn-action edit" title="Edit Card">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form action="{{ route('admin.why-choose.destroy', $card) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Are you sure you want to delete \'{{ addslashes($card->title) }}\'?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action delete" title="Delete Card">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div style="grid-column: 1 / -1; background: #ffffff; border: 2px dashed var(--admin-border); border-radius: 16px; padding: 48px 24px; text-align: center;">
                <i class="fa-solid fa-award" style="font-size: 40px; color: #CBD5E1; margin-bottom: 16px;"></i>
                <h4 style="font-size: 16px; font-weight: 700; color: var(--admin-navy); margin-bottom: 6px;">No Advantage Cards Found</h4>
                <p style="font-size: 13.5px; color: #64748B; margin-bottom: 20px;">Add your first card to display in the Why Choose Advaita section on the homepage.</p>
                <a href="{{ route('admin.why-choose.create') }}" class="btn-admin btn-primary">
                    <i class="fa-solid fa-plus"></i>
                    <span>Create Advantage Card</span>
                </a>
            </div>
        @endforelse
    </div>

</div>
@endsection
