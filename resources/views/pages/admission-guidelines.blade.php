@extends('layouts.app')

@section('title', $seo['title'] ?? 'Admission Guidelines - Advaita School of Excellence, Parbhani')
@section('meta_description', $seo['description'] ?? 'Official admission guidelines, age criteria, phased schedule, document checklists, and CBSE eligibility requirements for Pre-Primary to Grade X at Advaita School of Excellence, Parbhani.')
@section('meta_keywords', $seo['keywords'] ?? 'Advaita School admission guidelines, age criteria 30 June, CBSE admission rules Grade 9 10, Parbhani school admission process, required documents')

@section('styles')
<style>
@media (min-width: 992px) {
    /* 1. Hero Canvas & Visual Elements */
    .admission-page-wrapper .admission-hero-canvas {
        min-height: 480px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: flex-start !important;
        text-align: left !important;
        border-radius: 24px !important;
        background: linear-gradient(135deg, #EEF6FC 0%, #FFFFFF 55%, #F0F7FD 100%) !important;
        border: 1.5px solid #dbeafe !important;
        box-shadow: 0 10px 30px rgba(8, 59, 122, 0.06) !important;
        position: relative !important;
        overflow: hidden !important;
    }
    .admission-page-wrapper .admission-hero-bg-visual {
        position: absolute !important;
        right: 0 !important;
        top: 0 !important;
        bottom: 0 !important;
        width: 52% !important;
        height: 100% !important;
        z-index: 1 !important;
        display: block !important;
        opacity: 1 !important;
        overflow: hidden !important;
        pointer-events: none !important;
    }
    .admission-page-wrapper .admission-hero-bg-img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        object-position: center 25% !important;
        mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.5) 25%, black 100%) !important;
        -webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.5) 25%, black 100%) !important;
    }
    .admission-page-wrapper .admission-hero-wave-overlay {
        display: block !important;
        position: absolute !important;
        inset: 0 !important;
        width: 100% !important;
        height: 100% !important;
        z-index: 2 !important;
        pointer-events: none !important;
        opacity: 0.95 !important;
    }
    .admission-page-wrapper .admission-hero-wave-overlay svg {
        width: 100% !important;
        height: 100% !important;
    }
    .admission-page-wrapper .admission-hero-script-tag {
        display: block !important;
        position: absolute !important;
        top: 26px !important;
        right: 40px !important;
        z-index: 10 !important;
        background: rgba(255, 255, 255, 0.94) !important;
        backdrop-filter: blur(10px) !important;
        border: 1px solid rgba(8, 59, 122, 0.15) !important;
        border-radius: 16px !important;
        padding: 10px 18px !important;
        box-shadow: 0 8px 24px rgba(8, 59, 122, 0.12) !important;
        text-align: center !important;
        transform: rotate(3deg) !important;
    }
    .admission-page-wrapper .admission-hero-left-panel {
        position: relative !important;
        z-index: 5 !important;
        width: 62% !important;
        max-width: 720px !important;
        padding: 56px 48px !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        justify-content: center !important;
        text-align: left !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .admission-hero-content-inner {
        width: 100% !important;
        max-width: none !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        text-align: left !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .admission-breadcrumb {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: flex-start !important;
        text-align: left !important;
        margin: 0 0 16px 0 !important;
        gap: 8px !important;
        font-size: 13.5px !important;
        font-weight: 600 !important;
    }
    .admission-page-wrapper .admission-eyebrow {
        display: inline-block !important;
        text-align: left !important;
        margin: 0 0 14px 0 !important;
        font-size: 11.5px !important;
        font-weight: 800 !important;
        letter-spacing: 1.2px !important;
        text-transform: uppercase !important;
        color: #ea580c !important;
        background: #fff7ed !important;
        border: 1px solid #fed7aa !important;
        padding: 5px 14px !important;
        border-radius: 999px !important;
    }
    .admission-page-wrapper .admission-hero-title {
        font-family: var(--adv-font-sans, "Outfit", sans-serif) !important;
        font-size: 2.85rem !important;
        font-weight: 900 !important;
        line-height: 1.15 !important;
        color: #083B7A !important;
        margin: 0 0 16px 0 !important;
        text-align: left !important;
    }
    .admission-page-wrapper .admission-hero-title .highlight-serif {
        color: #F37021 !important;
    }
    .admission-page-wrapper .admission-hero-desc {
        font-size: 1.05rem !important;
        line-height: 1.65 !important;
        color: #475569 !important;
        margin: 0 0 24px 0 !important;
        text-align: left !important;
        max-width: 620px !important;
    }
    .admission-page-wrapper .hero-action-buttons {
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        justify-content: flex-start !important;
        gap: 14px !important;
        margin: 0 !important;
        width: auto !important;
        text-align: left !important;
    }

    /* 2. Sticky Subnav Bar */
    .admission-page-wrapper .admission-subnav-bar {
        position: sticky !important;
        top: 0 !important;
        z-index: 99 !important;
        background: rgba(255, 255, 255, 0.95) !important;
        backdrop-filter: blur(12px) !important;
        border-bottom: 1px solid #e2e8f0 !important;
        box-shadow: 0 4px 20px rgba(8, 59, 122, 0.04) !important;
        padding: 10px 0 !important;
    }
    .admission-page-wrapper .subnav-links-wrap {
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        gap: 8px !important;
    }
    .admission-page-wrapper .subnav-link {
        display: inline-flex !important;
        align-items: center !important;
        gap: 8px !important;
        padding: 8px 14px !important;
        border-radius: 10px !important;
        font-size: 13px !important;
        font-weight: 700 !important;
        color: #475569 !important;
        text-decoration: none !important;
        transition: all 0.2s ease !important;
        white-space: nowrap !important;
    }
    .admission-page-wrapper .subnav-link:hover {
        background: #eff6ff !important;
        color: #083B7A !important;
    }
    .admission-page-wrapper .subnav-link.highlight {
        background: linear-gradient(135deg, #083B7A 0%, #05244C 100%) !important;
        color: #ffffff !important;
        box-shadow: 0 4px 12px rgba(8, 59, 122, 0.25) !important;
    }

    /* 3. Section Headers */
    .admission-page-wrapper .section-header-pill {
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
        margin: 0 auto 36px !important;
        max-width: 820px !important;
        width: 100% !important;
    }
    .admission-page-wrapper .section-header-pill .pill-badge {
        font-size: 11px !important;
        font-weight: 800 !important;
        letter-spacing: 1px !important;
        padding: 5px 14px !important;
        border-radius: 999px !important;
        background: #fff7ed !important;
        color: #ea580c !important;
        border: 1px solid #fed7aa !important;
        margin: 0 auto 12px !important;
        display: inline-flex !important;
    }
    .admission-page-wrapper .section-header-pill .pill-title {
        font-family: var(--adv-font-sans, "Outfit", sans-serif) !important;
        font-size: 2.25rem !important;
        font-weight: 900 !important;
        color: #083B7A !important;
        margin: 0 auto 10px !important;
        text-align: center !important;
        width: 100% !important;
        line-height: 1.25 !important;
    }
    .admission-page-wrapper .section-header-pill .pill-subtitle {
        font-size: 15px !important;
        color: #64748b !important;
        line-height: 1.6 !important;
        max-width: 700px !important;
        margin: 0 auto !important;
        text-align: center !important;
        width: 100% !important;
    }

    /* 4. Quick Actions Grid */
    .admission-page-wrapper .quick-actions-grid {
        display: grid !important;
        grid-template-columns: repeat(3, 1fr) !important;
        gap: 24px !important;
        margin-top: 36px !important;
    }
    .admission-page-wrapper .qa-card {
        background: #ffffff !important;
        border: 1.5px solid #e2e8f0 !important;
        border-radius: 20px !important;
        padding: 26px 24px !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        justify-content: space-between !important;
        text-align: left !important;
        box-shadow: 0 4px 18px rgba(8, 59, 122, 0.04) !important;
        transition: all 0.25s ease !important;
        min-height: 250px !important;
    }
    .admission-page-wrapper .qa-card:hover {
        transform: translateY(-4px) !important;
        box-shadow: 0 14px 32px rgba(8, 59, 122, 0.09) !important;
        border-color: #083B7A !important;
    }
    .admission-page-wrapper .qa-card.highlight-card {
        border-color: #fed7aa !important;
        background: linear-gradient(180deg, #fffaf5 0%, #ffffff 100%) !important;
    }
    .admission-page-wrapper .qa-card > div:first-child {
        width: 100% !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        text-align: left !important;
    }
    .admission-page-wrapper .qa-card-header {
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        justify-content: space-between !important;
        width: 100% !important;
        margin: 0 0 16px !important;
    }
    .admission-page-wrapper .qa-icon-wrap {
        width: 48px !important;
        height: 48px !important;
        border-radius: 14px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-size: 20px !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .qa-badge {
        font-size: 11.5px !important;
        font-weight: 700 !important;
        padding: 4px 10px !important;
        border-radius: 8px !important;
        margin: 0 !important;
        display: inline-flex !important;
    }
    .admission-page-wrapper .qa-card-body {
        text-align: left !important;
        width: 100% !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
    }
    .admission-page-wrapper .qa-card-title {
        text-align: left !important;
        width: 100% !important;
        font-size: 17px !important;
        font-weight: 800 !important;
        color: #083B7A !important;
        margin: 0 0 6px !important;
        line-height: 1.35 !important;
    }
    .admission-page-wrapper .qa-card-desc {
        text-align: left !important;
        width: 100% !important;
        font-size: 13.5px !important;
        color: #64748b !important;
        line-height: 1.55 !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .qa-card-meta {
        display: flex !important;
        align-items: center !important;
        justify-content: flex-start !important;
        text-align: left !important;
        gap: 8px !important;
        margin-top: 12px !important;
        font-size: 13px !important;
        color: #475569 !important;
    }
    .admission-page-wrapper .qa-card-footer {
        width: 100% !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: stretch !important;
        margin-top: 18px !important;
        gap: 8px !important;
    }
    .admission-page-wrapper .btn-qa-action {
        height: 42px !important;
        border-radius: 10px !important;
        font-size: 13px !important;
        font-weight: 700 !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        text-decoration: none !important;
        transition: all 0.2s ease !important;
        width: 100% !important;
    }
    .admission-page-wrapper .qa-dual-buttons {
        display: grid !important;
        grid-template-columns: 1fr 1fr !important;
        gap: 10px !important;
        width: 100% !important;
    }
    .admission-page-wrapper .qa-card.qa-card-banner {
        grid-column: 1 / -1 !important;
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        justify-content: space-between !important;
        text-align: left !important;
        padding: 26px 36px !important;
        background: linear-gradient(135deg, #f0fdf4 0%, #ffffff 100%) !important;
        border: 1.5px solid #86efac !important;
        border-radius: 20px !important;
        min-height: auto !important;
    }
    .admission-page-wrapper .qa-banner-content {
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        text-align: left !important;
        gap: 20px !important;
        margin: 0 !important;
        flex: 1 !important;
    }
    .admission-page-wrapper .qa-banner-content .qa-icon-wrap.whatsapp {
        width: 54px !important;
        height: 54px !important;
        border-radius: 16px !important;
        background: #22c55e !important;
        color: #ffffff !important;
        font-size: 26px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        margin: 0 !important;
        flex-shrink: 0 !important;
    }
    .admission-page-wrapper .qa-banner-text {
        text-align: left !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        width: auto !important;
    }
    .admission-page-wrapper .qa-banner-text .d-flex {
        display: flex !important;
        align-items: center !important;
        justify-content: flex-start !important;
        gap: 10px !important;
        margin-bottom: 4px !important;
    }
    .admission-page-wrapper .qa-banner-action {
        width: auto !important;
        max-width: none !important;
        margin: 0 !important;
        flex-shrink: 0 !important;
    }
    .admission-page-wrapper .btn-qa-action.whatsapp {
        background: #16a34a !important;
        color: #ffffff !important;
        height: 46px !important;
        padding: 0 28px !important;
        border-radius: 12px !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        box-shadow: 0 4px 15px rgba(22, 163, 74, 0.3) !important;
    }
    .admission-page-wrapper .btn-qa-action.whatsapp:hover {
        background: #15803d !important;
        color: #ffffff !important;
        transform: translateY(-2px) !important;
    }

    /* 5. Section A: Cutoff Banner & Matrix Table */
    .admission-page-wrapper .guidelines-cutoff-banner {
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        justify-content: space-between !important;
        text-align: left !important;
        gap: 28px !important;
        padding: 28px 36px !important;
        border-radius: 20px !important;
        background: linear-gradient(135deg, #083B7A 0%, #05244C 100%) !important;
        color: #ffffff !important;
        box-shadow: 0 12px 36px rgba(8, 59, 122, 0.18) !important;
        border: 1px solid rgba(255, 255, 255, 0.15) !important;
        position: relative !important;
        overflow: hidden !important;
    }
    .admission-page-wrapper .cutoff-icon-wrap {
        width: 64px !important;
        height: 64px !important;
        border-radius: 18px !important;
        background: rgba(255, 255, 255, 0.12) !important;
        font-size: 28px !important;
        color: #F37021 !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        flex-shrink: 0 !important;
        margin: 0 !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
    }
    .admission-page-wrapper .cutoff-content {
        text-align: left !important;
        flex: 1 !important;
        width: auto !important;
    }
    .admission-page-wrapper .cutoff-title {
        text-align: left !important;
        font-size: 20px !important;
        font-weight: 800 !important;
        color: #ffffff !important;
        margin-bottom: 6px !important;
    }
    .admission-page-wrapper .cutoff-desc {
        text-align: left !important;
        font-size: 14px !important;
        color: #cbd5e1 !important;
        line-height: 1.55 !important;
        margin: 0 !important;
        max-width: none !important;
    }
    .admission-page-wrapper .cutoff-badge {
        background: linear-gradient(135deg, #F37021 0%, #ea580c 100%) !important;
        color: #ffffff !important;
        padding: 14px 26px !important;
        border-radius: 14px !important;
        text-align: center !important;
        flex-shrink: 0 !important;
        box-shadow: 0 6px 20px rgba(243, 112, 33, 0.4) !important;
        border: 1px solid rgba(255, 255, 255, 0.3) !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .guidelines-table-card {
        background: #ffffff !important;
        border: 1.5px solid #e2e8f0 !important;
        border-radius: 20px !important;
        overflow: hidden !important;
        box-shadow: 0 8px 30px rgba(8, 59, 122, 0.05) !important;
        margin-top: 32px !important;
    }
    .admission-page-wrapper .guidelines-table-header {
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        justify-content: space-between !important;
        text-align: left !important;
        padding: 22px 30px !important;
        background: #f8fafc !important;
        border-bottom: 1.5px solid #e2e8f0 !important;
    }
    .admission-page-wrapper .guidelines-table-title {
        text-align: left !important;
        font-size: 19px !important;
        font-weight: 800 !important;
        color: #083B7A !important;
        margin: 0 0 4px !important;
    }
    .admission-page-wrapper .guidelines-table-subtitle {
        text-align: left !important;
        font-size: 13.5px !important;
        color: #64748b !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .guidelines-custom-table th {
        text-align: left !important;
        background: linear-gradient(135deg, #083B7A 0%, #062854 100%) !important;
        color: #ffffff !important;
        font-size: 13px !important;
        font-weight: 700 !important;
        padding: 16px 24px !important;
        letter-spacing: 0.3px !important;
        text-transform: uppercase !important;
    }
    .admission-page-wrapper .guidelines-custom-table td {
        text-align: left !important;
        padding: 18px 24px !important;
        border-bottom: 1px solid #f1f5f9 !important;
        vertical-align: middle !important;
    }
    .admission-page-wrapper .class-cell-badge {
        text-align: left !important;
        display: inline-block !important;
        background: #eff6ff !important;
        border: 1px solid #bfdbfe !important;
        color: #083B7A !important;
        font-size: 14px !important;
        font-weight: 800 !important;
        padding: 6px 14px !important;
        border-radius: 10px !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .age-eligibility-highlight {
        justify-content: flex-start !important;
        text-align: left !important;
        display: flex !important;
        align-items: center !important;
        font-size: 14.5px !important;
        font-weight: 700 !important;
        color: #0f172a !important;
    }
    .admission-page-wrapper .regulation-cell {
        align-items: flex-start !important;
        text-align: left !important;
        display: flex !important;
        flex-direction: column !important;
        gap: 6px !important;
    }
    .admission-page-wrapper .schedule-tag {
        margin: 0 !important;
        display: inline-flex !important;
        font-size: 12px !important;
        font-weight: 700 !important;
        padding: 4px 12px !important;
        border-radius: 9999px !important;
    }
    .admission-page-wrapper .notes-text {
        text-align: left !important;
        font-size: 13px !important;
        color: #64748b !important;
        line-height: 1.5 !important;
    }

    /* 6. Phased Implementation Schedule */
    .admission-page-wrapper .phased-schedule-box {
        background: #ffffff !important;
        border: 1.5px solid #e2e8f0 !important;
        border-radius: 20px !important;
        padding: 32px 36px !important;
        box-shadow: 0 6px 25px rgba(8, 59, 122, 0.04) !important;
        margin-top: 32px !important;
    }
    .admission-page-wrapper .phased-box-header {
        text-align: left !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        margin-bottom: 24px !important;
    }
    .admission-page-wrapper .phased-badge {
        margin: 0 0 8px !important;
        background: #fff7ed !important;
        color: #ea580c !important;
        border: 1px solid #fed7aa !important;
        font-size: 11px !important;
        font-weight: 800 !important;
        padding: 4px 12px !important;
        border-radius: 6px !important;
    }
    .admission-page-wrapper .phased-box-title {
        text-align: left !important;
        font-size: 21px !important;
        font-weight: 800 !important;
        color: #083B7A !important;
        margin: 0 0 6px !important;
    }
    .admission-page-wrapper .phased-box-desc {
        text-align: left !important;
        font-size: 14px !important;
        color: #64748b !important;
        margin: 0 !important;
        max-width: 650px !important;
    }
    .admission-page-wrapper .phased-cards-grid {
        display: grid !important;
        grid-template-columns: repeat(4, 1fr) !important;
        gap: 20px !important;
        margin-bottom: 24px !important;
    }
    .admission-page-wrapper .phased-step-card {
        background: #f8fafc !important;
        border: 1.5px solid #e2e8f0 !important;
        border-top: 4px solid #F37021 !important;
        border-radius: 16px !important;
        padding: 22px 20px !important;
        position: relative !important;
        text-align: left !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        transition: all 0.25s ease !important;
    }
    .admission-page-wrapper .phased-step-card:hover {
        transform: translateY(-3px) !important;
        border-color: #F37021 !important;
        background: #ffffff !important;
        box-shadow: 0 10px 25px rgba(8, 59, 122, 0.08) !important;
    }
    .admission-page-wrapper .phase-number {
        position: absolute !important;
        top: 16px !important;
        right: 18px !important;
        font-size: 13.5px !important;
        font-weight: 900 !important;
        color: #083B7A !important;
        background: #eff6ff !important;
        padding: 2px 8px !important;
        border-radius: 6px !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .phase-grade {
        text-align: left !important;
        font-size: 18px !important;
        font-weight: 800 !important;
        color: #083B7A !important;
        margin-bottom: 6px !important;
    }
    .admission-page-wrapper .phase-year {
        text-align: left !important;
        font-size: 13.5px !important;
        font-weight: 700 !important;
        color: #F37021 !important;
        margin-bottom: 10px !important;
    }
    .admission-page-wrapper .phase-status {
        text-align: left !important;
        font-size: 12px !important;
        color: #64748b !important;
        font-weight: 600 !important;
        display: flex !important;
        align-items: center !important;
        justify-content: flex-start !important;
    }
    .admission-page-wrapper .guidelines-disclaimer-card {
        background: #fffbeb !important;
        border: 1.5px solid #fde68a !important;
        border-radius: 14px !important;
        padding: 18px 22px !important;
        display: flex !important;
        flex-direction: row !important;
        align-items: flex-start !important;
        text-align: left !important;
        gap: 16px !important;
    }
    .admission-page-wrapper .disclaimer-icon {
        font-size: 22px !important;
        color: #d97706 !important;
        flex-shrink: 0 !important;
        margin: 2px 0 0 !important;
    }
    .admission-page-wrapper .disclaimer-text {
        text-align: left !important;
        font-size: 13.5px !important;
        color: #92400e !important;
        line-height: 1.55 !important;
    }

    /* 7. Section B: Documents Required Checklist */
    .admission-page-wrapper .docs-checklist-container {
        background: #ffffff !important;
        border: 1.5px solid #e2e8f0 !important;
        border-radius: 20px !important;
        padding: 36px 40px !important;
        box-shadow: 0 8px 30px rgba(8, 59, 122, 0.05) !important;
    }
    .admission-page-wrapper .docs-header-bar {
        display: flex !important;
        flex-direction: row !important;
        justify-content: space-between !important;
        align-items: center !important;
        text-align: left !important;
        border-bottom: 1.5px solid #f1f5f9 !important;
        padding-bottom: 22px !important;
        margin-bottom: 26px !important;
        gap: 18px !important;
    }
    .admission-page-wrapper .docs-header-left {
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        text-align: left !important;
        gap: 16px !important;
    }
    .admission-page-wrapper .docs-header-icon-wrap {
        margin: 0 !important;
        flex-shrink: 0 !important;
    }
    .admission-page-wrapper .docs-header-title {
        text-align: left !important;
        font-size: 20px !important;
        font-weight: 800 !important;
        color: #083B7A !important;
        margin: 0 0 4px !important;
    }
    .admission-page-wrapper .docs-header-sub {
        text-align: left !important;
        font-size: 13.5px !important;
        color: #64748b !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .docs-header-actions {
        display: flex !important;
        gap: 12px !important;
        margin: 0 !important;
        justify-content: flex-end !important;
        align-items: center !important;
    }
    .admission-page-wrapper .docs-list-grid {
        display: grid !important;
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 18px !important;
        margin-bottom: 24px !important;
    }
    .admission-page-wrapper .doc-item-card {
        background: #f8fafc !important;
        border: 1.5px solid #e2e8f0 !important;
        border-radius: 16px !important;
        padding: 20px 22px !important;
        display: flex !important;
        flex-direction: row !important;
        align-items: flex-start !important;
        justify-content: flex-start !important;
        text-align: left !important;
        gap: 16px !important;
        position: relative !important;
        transition: all 0.25s ease !important;
    }
    .admission-page-wrapper .doc-item-card:hover {
        background: #ffffff !important;
        border-color: #083B7A !important;
        box-shadow: 0 8px 25px rgba(8, 59, 122, 0.08) !important;
        transform: translateY(-2px) !important;
    }
    .admission-page-wrapper .doc-item-number {
        position: static !important;
        width: 32px !important;
        height: 32px !important;
        border-radius: 10px !important;
        background: #083B7A !important;
        color: #ffffff !important;
        font-size: 13px !important;
        font-weight: 800 !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        flex-shrink: 0 !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .doc-item-icon {
        font-size: 22px !important;
        color: #F37021 !important;
        flex-shrink: 0 !important;
        margin: 2px 0 0 !important;
        width: auto !important;
        height: auto !important;
        background: transparent !important;
    }
    .admission-page-wrapper .doc-item-content {
        flex: 1 !important;
        text-align: left !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        width: auto !important;
    }
    .admission-page-wrapper .doc-item-top {
        display: flex !important;
        flex-direction: row !important;
        justify-content: space-between !important;
        align-items: flex-start !important;
        width: 100% !important;
        margin-bottom: 6px !important;
        gap: 10px !important;
    }
    .admission-page-wrapper .doc-item-title {
        text-align: left !important;
        font-size: 15.5px !important;
        font-weight: 800 !important;
        color: #083B7A !important;
        margin: 0 !important;
        line-height: 1.35 !important;
    }
    .admission-page-wrapper .doc-item-badge {
        background: #eff6ff !important;
        color: #1e40af !important;
        font-size: 11px !important;
        font-weight: 700 !important;
        padding: 3px 9px !important;
        border-radius: 6px !important;
        flex-shrink: 0 !important;
        white-space: nowrap !important;
        border: 1px solid #dbeafe !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .doc-item-desc {
        text-align: left !important;
        font-size: 13px !important;
        color: #64748b !important;
        line-height: 1.5 !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .docs-verification-notice {
        background: #eff6ff !important;
        border: none !important;
        border-left: 5px solid #083B7A !important;
        border-radius: 0 14px 14px 0 !important;
        padding: 16px 24px !important;
        font-size: 14px !important;
        color: #1e293b !important;
        line-height: 1.55 !important;
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        text-align: left !important;
        gap: 14px !important;
    }
    .admission-page-wrapper .docs-verification-notice i {
        font-size: 22px !important;
        color: #ea580c !important;
        flex-shrink: 0 !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .docs-verification-notice span {
        flex: 1 1 auto !important;
        text-align: left !important;
    }

    /* 8. Section C: 5-Step Procedure Sequence */
    .admission-page-wrapper .procedure-sequence-wrapper {
        display: flex !important;
        flex-direction: column !important;
        gap: 18px !important;
        position: relative !important;
    }
    .admission-page-wrapper .procedure-sequence-wrapper::before {
        display: block !important;
        content: '' !important;
        position: absolute !important;
        top: 40px !important;
        bottom: 40px !important;
        left: 36px !important;
        width: 3px !important;
        background: linear-gradient(180deg, #F37021 0%, #083B7A 100%) !important;
        z-index: 0 !important;
        border-radius: 99px !important;
    }
    .admission-page-wrapper .procedure-sequence-item {
        display: flex !important;
        flex-direction: row !important;
        align-items: stretch !important;
        text-align: left !important;
        gap: 24px !important;
        position: relative !important;
        z-index: 1 !important;
        width: 100% !important;
        margin-bottom: 20px !important;
    }
    .admission-page-wrapper .procedure-step-badge {
        width: 76px !important;
        min-width: 76px !important;
        height: auto !important;
        min-height: 76px !important;
        background: linear-gradient(135deg, #083B7A 0%, #05244C 100%) !important;
        color: #ffffff !important;
        border-radius: 18px !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        justify-content: center !important;
        padding: 14px 10px !important;
        flex-shrink: 0 !important;
        text-align: center !important;
        border: 2px solid #ffffff !important;
        box-shadow: 0 6px 20px rgba(8, 59, 122, 0.22) !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .procedure-step-badge span {
        font-size: 10px !important;
        font-weight: 800 !important;
        letter-spacing: 0.8px !important;
        opacity: 0.85 !important;
        display: block !important;
    }
    .admission-page-wrapper .procedure-step-badge strong {
        font-size: 24px !important;
        font-weight: 900 !important;
        display: block !important;
    }
    .admission-page-wrapper .procedure-card {
        flex: 1 !important;
        background: #ffffff !important;
        border: 1.5px solid #e2e8f0 !important;
        border-radius: 20px !important;
        padding: 24px 28px !important;
        display: flex !important;
        flex-direction: row !important;
        align-items: flex-start !important;
        text-align: left !important;
        gap: 20px !important;
        box-shadow: 0 4px 18px rgba(8, 59, 122, 0.04) !important;
        transition: all 0.25s ease !important;
        width: auto !important;
    }
    .admission-page-wrapper .procedure-card:hover {
        border-color: #F37021 !important;
        box-shadow: 0 8px 25px rgba(8, 59, 122, 0.08) !important;
        transform: translateY(-2px) !important;
    }
    .admission-page-wrapper .procedure-card-icon {
        width: 50px !important;
        height: 50px !important;
        border-radius: 14px !important;
        background: #fff7ed !important;
        color: #ea580c !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-size: 22px !important;
        flex-shrink: 0 !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .procedure-card-body {
        flex: 1 !important;
        text-align: left !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        width: auto !important;
    }
    .admission-page-wrapper .procedure-card-title {
        font-size: 17.5px !important;
        font-weight: 800 !important;
        color: #083B7A !important;
        margin: 0 0 6px !important;
        text-align: left !important;
        width: 100% !important;
    }
    .admission-page-wrapper .procedure-card-desc {
        font-size: 14px !important;
        color: #475569 !important;
        line-height: 1.55 !important;
        margin: 0 !important;
        text-align: left !important;
        max-width: none !important;
        width: 100% !important;
    }
    .admission-page-wrapper .btn-step-action {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: flex-start !important;
        background: #083B7A !important;
        color: #ffffff !important;
        padding: 9px 20px !important;
        border-radius: 10px !important;
        font-size: 13.5px !important;
        font-weight: 700 !important;
        text-decoration: none !important;
        transition: all 0.2s ease !important;
        margin: 14px 0 0 !important;
    }
    .admission-page-wrapper .btn-step-action:hover {
        background: #0c4d9e !important;
        color: #ffffff !important;
    }
    .admission-page-wrapper .btn-step-action.secondary {
        background: #f1f5f9 !important;
        color: #083B7A !important;
        border: 1px solid #cbd5e1 !important;
    }
    .admission-page-wrapper .btn-step-action.secondary:hover {
        background: #e2e8f0 !important;
        color: #083B7A !important;
    }
    .admission-page-wrapper .procedure-cta-banner {
        background: linear-gradient(135deg, #083B7A 0%, #05244C 100%) !important;
        border-radius: 22px !important;
        padding: 36px 44px !important;
        color: #ffffff !important;
        display: flex !important;
        flex-direction: row !important;
        justify-content: space-between !important;
        align-items: center !important;
        text-align: left !important;
        gap: 24px !important;
        box-shadow: 0 12px 36px rgba(8, 59, 122, 0.2) !important;
        border: 1px solid rgba(255, 255, 255, 0.15) !important;
        margin-top: 40px !important;
    }
    .admission-page-wrapper .cta-banner-content {
        text-align: left !important;
        align-items: flex-start !important;
        flex: 1 !important;
        width: auto !important;
    }
    .admission-page-wrapper .cta-banner-eyebrow {
        font-size: 11px !important;
        font-weight: 800 !important;
        letter-spacing: 0.8px !important;
        color: #fdbb2d !important;
        display: block !important;
        margin: 0 0 6px !important;
        text-align: left !important;
    }
    .admission-page-wrapper .cta-banner-title {
        font-size: 24px !important;
        font-weight: 900 !important;
        color: #ffffff !important;
        margin: 0 0 6px !important;
        text-align: left !important;
    }
    .admission-page-wrapper .cta-banner-desc {
        font-size: 14px !important;
        color: #cbd5e1 !important;
        margin: 0 !important;
        text-align: left !important;
    }
    .admission-page-wrapper .cta-banner-buttons {
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        justify-content: flex-end !important;
        gap: 14px !important;
        margin: 0 !important;
        width: auto !important;
        max-width: none !important;
        flex-shrink: 0 !important;
    }

    /* 9. Section D: Class Eligibility */
    .admission-page-wrapper .class-eligibility-grid {
        display: grid !important;
        grid-template-columns: repeat(3, 1fr) !important;
        gap: 22px !important;
    }
    .admission-page-wrapper .eligibility-card {
        background: #ffffff !important;
        border: 1.5px solid #e2e8f0 !important;
        border-radius: 20px !important;
        padding: 26px !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: space-between !important;
        text-align: left !important;
        align-items: stretch !important;
        box-shadow: 0 6px 20px rgba(8, 59, 122, 0.04) !important;
        transition: all 0.25s ease !important;
    }
    .admission-page-wrapper .eligibility-card:hover {
        transform: translateY(-3px) !important;
        box-shadow: 0 10px 30px rgba(8, 59, 122, 0.09) !important;
    }
    .admission-page-wrapper .eligibility-card.restricted-card {
        border-color: #fca5a5 !important;
        background: linear-gradient(180deg, #fff5f5 0%, #ffffff 100%) !important;
    }
    .admission-page-wrapper .eligibility-card-header {
        display: flex !important;
        flex-direction: row !important;
        align-items: flex-start !important;
        justify-content: flex-start !important;
        text-align: left !important;
        gap: 16px !important;
        margin-bottom: 14px !important;
        width: 100% !important;
    }
    .admission-page-wrapper .eligibility-icon-wrap {
        width: 46px !important;
        height: 46px !important;
        border-radius: 14px !important;
        background: #eff6ff !important;
        color: #083B7A !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-size: 20px !important;
        flex-shrink: 0 !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .restricted-card .eligibility-icon-wrap {
        background: #fee2e2 !important;
        color: #dc2626 !important;
    }
    .admission-page-wrapper .eligibility-grade-badge {
        display: inline-block !important;
        background: #083B7A !important;
        color: #ffffff !important;
        font-size: 11.5px !important;
        font-weight: 800 !important;
        padding: 3px 10px !important;
        border-radius: 6px !important;
        margin: 0 0 4px !important;
    }
    .admission-page-wrapper .restricted-card .eligibility-grade-badge {
        background: #dc2626 !important;
    }
    .admission-page-wrapper .eligibility-rule-title {
        font-size: 16px !important;
        font-weight: 800 !important;
        color: #0f172a !important;
        margin: 0 !important;
        line-height: 1.35 !important;
        text-align: left !important;
    }
    .admission-page-wrapper .eligibility-card-body {
        text-align: left !important;
        width: 100% !important;
    }
    .admission-page-wrapper .eligibility-detail-text {
        font-size: 13.5px !important;
        color: #475569 !important;
        line-height: 1.55 !important;
        margin-bottom: 18px !important;
        text-align: left !important;
        width: 100% !important;
    }
    .admission-page-wrapper .eligibility-card-footer {
        border-top: 1px solid #f1f5f9 !important;
        padding-top: 14px !important;
        width: 100% !important;
        display: flex !important;
        justify-content: flex-start !important;
        text-align: left !important;
    }
    .admission-page-wrapper .cbse-warning-tag {
        font-size: 12.5px !important;
        font-weight: 700 !important;
        color: #b91c1c !important;
        display: flex !important;
        align-items: center !important;
        justify-content: flex-start !important;
        text-align: left !important;
    }
    .admission-page-wrapper .cbse-ok-tag {
        font-size: 12.5px !important;
        font-weight: 700 !important;
        color: #15803d !important;
        display: flex !important;
        align-items: center !important;
        justify-content: flex-start !important;
        text-align: left !important;
    }

    /* 10. Section E: Important Instructions */
    .admission-page-wrapper .important-instructions-card {
        background: #ffffff !important;
        border: 1.5px solid #e2e8f0 !important;
        border-radius: 22px !important;
        padding: 36px 40px !important;
        box-shadow: 0 8px 30px rgba(8, 59, 122, 0.05) !important;
        text-align: left !important;
    }
    .admission-page-wrapper .instructions-header {
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        justify-content: flex-start !important;
        text-align: left !important;
        gap: 16px !important;
        border-bottom: 1.5px solid #f1f5f9 !important;
        padding-bottom: 20px !important;
        margin-bottom: 24px !important;
    }
    .admission-page-wrapper .instructions-title {
        font-size: 20px !important;
        font-weight: 800 !important;
        color: #083B7A !important;
        margin: 0 0 4px !important;
        text-align: left !important;
    }
    .admission-page-wrapper .instructions-subtitle {
        font-size: 13.5px !important;
        color: #64748b !important;
        margin: 0 !important;
        text-align: left !important;
    }
    .admission-page-wrapper .instructions-list {
        display: grid !important;
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 16px !important;
        margin-bottom: 24px !important;
    }
    .admission-page-wrapper .instruction-item {
        display: flex !important;
        flex-direction: row !important;
        align-items: flex-start !important;
        justify-content: flex-start !important;
        text-align: left !important;
        gap: 14px !important;
        background: #f8fafc !important;
        border: 1.5px solid #e2e8f0 !important;
        border-radius: 14px !important;
        padding: 18px 20px !important;
        transition: all 0.25s ease !important;
    }
    .admission-page-wrapper .instruction-item:hover {
        background: #ffffff !important;
        border-color: #083B7A !important;
        box-shadow: 0 6px 20px rgba(8, 59, 122, 0.06) !important;
        transform: translateY(-2px) !important;
    }
    .admission-page-wrapper .instruction-icon {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        flex-shrink: 0 !important;
        margin: 2px 0 0 !important;
    }
    .admission-page-wrapper .instruction-text {
        font-size: 14px !important;
        color: #1e293b !important;
        line-height: 1.5 !important;
        font-weight: 600 !important;
        text-align: left !important;
        width: 100% !important;
        flex: 1 !important;
    }
    .admission-page-wrapper .instructions-footer-note {
        background: #eff6ff !important;
        padding: 14px 20px !important;
        border-radius: 12px !important;
        font-size: 13.5px !important;
        color: #083B7A !important;
        font-weight: 600 !important;
        border: 1px solid #dbeafe !important;
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        justify-content: flex-start !important;
        text-align: left !important;
        gap: 8px !important;
    }

    /* 11. Counsellor Helpline Desk */
    .admission-page-wrapper .admission-helpline-section {
        padding: 60px 0 !important;
        background: #f8fafc !important;
    }
    .admission-page-wrapper .helpline-card {
        background: linear-gradient(135deg, #083B7A 0%, #05244C 100%) !important;
        border-radius: 24px !important;
        padding: 44px 48px !important;
        color: #ffffff !important;
        display: grid !important;
        grid-template-columns: 1.25fr 0.85fr !important;
        gap: 40px !important;
        align-items: center !important;
        box-shadow: 0 16px 45px rgba(8, 59, 122, 0.22) !important;
        border: 1px solid rgba(255, 255, 255, 0.15) !important;
        text-align: left !important;
        justify-items: stretch !important;
    }
    .admission-page-wrapper .helpline-left {
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        text-align: left !important;
        width: 100% !important;
    }
    .admission-page-wrapper .helpline-eyebrow {
        font-size: 11px !important;
        font-weight: 800 !important;
        letter-spacing: 0.8px !important;
        color: #fdbb2d !important;
        display: block !important;
        margin: 0 0 8px !important;
        text-align: left !important;
    }
    .admission-page-wrapper .helpline-title {
        font-size: 26px !important;
        font-weight: 900 !important;
        color: #ffffff !important;
        margin: 0 0 12px !important;
        text-align: left !important;
    }
    .admission-page-wrapper .helpline-desc {
        font-size: 14px !important;
        color: #cbd5e1 !important;
        line-height: 1.6 !important;
        margin: 0 0 22px !important;
        text-align: left !important;
        max-width: none !important;
    }
    .admission-page-wrapper .helpline-meta-list {
        display: flex !important;
        flex-direction: column !important;
        gap: 12px !important;
        width: 100% !important;
        max-width: none !important;
        margin: 0 !important;
        padding: 0 !important;
        align-items: flex-start !important;
    }
    .admission-page-wrapper .meta-item {
        display: flex !important;
        align-items: flex-start !important;
        gap: 12px !important;
        font-size: 14px !important;
        color: #ffffff !important;
        line-height: 1.45 !important;
        justify-content: flex-start !important;
        text-align: left !important;
        width: 100% !important;
    }
    .admission-page-wrapper .meta-item i {
        width: 20px !important;
        min-width: 20px !important;
        text-align: center !important;
        flex-shrink: 0 !important;
        margin-top: 3px !important;
        font-size: 14.5px !important;
        color: #F37021 !important;
    }
    .admission-page-wrapper .meta-item span {
        flex: 1 1 auto !important;
        text-align: left !important;
    }
    .admission-page-wrapper .meta-item strong {
        color: #fdbb2d !important;
    }
    .admission-page-wrapper .helpline-right {
        width: 100% !important;
        max-width: none !important;
        margin: 0 !important;
    }
    .admission-page-wrapper .helpline-buttons-stack {
        display: flex !important;
        flex-direction: column !important;
        align-items: stretch !important;
        width: 100% !important;
        max-width: none !important;
        margin: 0 !important;
        gap: 12px !important;
    }
    .admission-page-wrapper .btn-helpline-call,
    .admission-page-wrapper .btn-helpline-wa,
    .admission-page-wrapper .btn-helpline-dir,
    .admission-page-wrapper .btn-helpline-pdf {
        width: 100% !important;
        min-height: 48px !important;
        padding: 12px 20px !important;
        font-size: 13.5px !important;
        font-weight: 700 !important;
        border-radius: 12px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
        text-decoration: none !important;
        transition: all 0.25s ease !important;
    }
    .admission-page-wrapper .btn-helpline-call {
        background: linear-gradient(135deg, #F37021 0%, #ea580c 100%) !important;
        color: #ffffff !important;
        border: none !important;
        box-shadow: 0 4px 15px rgba(243, 112, 33, 0.4) !important;
    }
    .admission-page-wrapper .btn-helpline-call:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 8px 22px rgba(243, 112, 33, 0.5) !important;
        color: #ffffff !important;
    }
    .admission-page-wrapper .btn-helpline-wa {
        background: #22c55e !important;
        color: #ffffff !important;
        border: none !important;
        box-shadow: 0 4px 15px rgba(34, 197, 94, 0.3) !important;
    }
    .admission-page-wrapper .btn-helpline-wa:hover {
        background: #16a34a !important;
        color: #ffffff !important;
        transform: translateY(-2px) !important;
    }
    .admission-page-wrapper .btn-helpline-dir {
        background: rgba(255, 255, 255, 0.12) !important;
        color: #ffffff !important;
        border: 1.5px solid rgba(255, 255, 255, 0.3) !important;
    }
    .admission-page-wrapper .btn-helpline-dir:hover {
        background: rgba(255, 255, 255, 0.22) !important;
        color: #ffffff !important;
        transform: translateY(-2px) !important;
    }
    .admission-page-wrapper .btn-helpline-pdf {
        background: #ffffff !important;
        color: #083B7A !important;
        border: none !important;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1) !important;
    }
    .admission-page-wrapper .btn-helpline-pdf:hover {
        background: #eff6ff !important;
        color: #083B7A !important;
        transform: translateY(-2px) !important;
    }
}
</style>
@endsection

@section('content')
<main id="main" class="main-content-wrapper admission-page-wrapper">

    <!-- =========================================================================
         1. HERO SECTION: Students Visual + Wave Canvas + Official Guidelines Badges
         ========================================================================= -->
    <section class="admission-hero-section">
        <div class="admission-hero-canvas">
            <!-- Hero Students Visual -->
            <div class="admission-hero-bg-visual" aria-hidden="true">
                <img src="{{ asset('assets/images/about-cta-students-clean.png') }}" alt="Advaita Students" class="admission-hero-bg-img" width="1024" height="682">
            </div>

            <!-- SVG Wave Overlay for Smooth Translucent Backdrop -->
            <div class="admission-hero-wave-overlay" aria-hidden="true">
                <svg viewBox="0 0 1200 440" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H540C570 120 520 280 620 440H0V0Z" fill="#EEF6FC" fill-opacity="0.96"/>
                    <path d="M520 0C550 140 500 280 600 440H580C480 280 530 140 500 0H520Z" fill="#F37021" fill-opacity="0.25"/>
                </svg>
            </div>

            <!-- Floating Handwritten Script Tag at Top Right -->
            <div class="admission-hero-script-tag" aria-hidden="true">
                <span class="script-title">Official<br>Guidelines</span>
                <svg class="script-underline" viewBox="0 0 120 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 12C38 3 84 4 116 14" stroke="#083B7A" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </div>

            <!-- Left Content Panel -->
            <div class="admission-hero-left-panel">
                <div class="admission-hero-content-inner">
                    <!-- Breadcrumbs -->
                    <nav class="admission-breadcrumb" aria-label="Breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="{{ route('admission-info') }}">Admissions</a>
                        <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
                        <span class="active">Admission Guidelines</span>
                    </nav>

                    <!-- Eyebrow -->
                    <div class="admission-eyebrow">PRE-PRIMARY TO GRADE X &middot; SESSION {{ $academicYear ?? '2027–28' }}</div>

                    <!-- Main Headline -->
                    <h1 class="admission-hero-title">
                        Admission Guidelines &amp; <span class="highlight-serif">Eligibility Protocol.</span>
                    </h1>

                    <!-- Description -->
                    <p class="admission-hero-desc">
                        Official, transparent guidelines covering minimum age criteria, phased implementation schedules, required documents, 5-step admission procedure, and CBSE regulatory compliance for Advaita School of Excellence, Parbhani.
                    </p>

                    <!-- Quick Navigation CTA Group -->
                    <div class="d-flex align-items-center justify-content-center gap-12 flex-wrap mt-20 hero-action-buttons">
                        <a href="{{ route('admission-guidelines.download') }}" class="admission-btn-primary" title="Download Official Admission Guidelines PDF">
                            <i class="fa-solid fa-file-pdf"></i>
                            <span>Download Guidelines PDF</span>
                        </a>
                        <a href="{{ route('online-registration') }}" class="admission-btn-visit" style="background: rgba(8, 59, 122, 0.08); border-color: rgba(8, 59, 122, 0.2); color: #083B7A;">
                            <i class="fa-solid fa-file-pen"></i>
                            <span>Online Registration</span>
                        </a>
                        <a href="#documents-required" class="admission-btn-visit">
                            <i class="fa-solid fa-clipboard-check"></i>
                            <span>Check Required Documents</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. STICKY SUB-BAR (Jump navigation)
         ========================================================================= -->
    <div class="admission-subnav-bar">
        <div class="adv-container">
            <nav class="subnav-links-wrap" aria-label="Guidelines Section Navigation">
                <a href="#quick-actions" class="subnav-link">
                    <i class="fa-solid fa-bolt text-orange"></i>
                    <span>Quick Actions</span>
                </a>
                <a href="#age-criteria" class="subnav-link">
                    <i class="fa-solid fa-calendar-check text-navy"></i>
                    <span>A. Age Criteria &amp; Phased Rollout</span>
                </a>
                <a href="#documents-required" class="subnav-link">
                    <i class="fa-solid fa-file-shield text-purple"></i>
                    <span>B. Documents Required</span>
                </a>
                <a href="#admission-procedure" class="subnav-link">
                    <i class="fa-solid fa-list-ol text-green"></i>
                    <span>C. Admission Procedure</span>
                </a>
                <a href="#class-eligibility" class="subnav-link">
                    <i class="fa-solid fa-shield-halved text-blue"></i>
                    <span>D. Class Eligibility &amp; CBSE</span>
                </a>
                <a href="#important-instructions" class="subnav-link">
                    <i class="fa-solid fa-circle-exclamation text-orange"></i>
                    <span>E. Important Instructions</span>
                </a>
                <a href="#counsellor-helpline" class="subnav-link highlight">
                    <i class="fa-solid fa-headset"></i>
                    <span>Helpline Desk</span>
                </a>
            </nav>
        </div>
    </div>

    <!-- =========================================================================
         3. QUICK ACTIONS GRID: 6 Cards in 3-Col Grid + 7th Full-Width WhatsApp Banner
         ========================================================================= -->
    <section class="admission-quick-actions-section" id="quick-actions">
        <div class="adv-container">
            <div class="section-header-pill">
                <span class="pill-badge">IMMEDIATE ACTIONS</span>
                <h2 class="pill-title">Admissions Quick Actions &amp; Verified Contacts</h2>
                <p class="pill-subtitle">Direct, verified access to download documents, connect with counsellors, navigate to our campus, and start registration.</p>
            </div>

            <div class="quick-actions-grid">
                <!-- 1. View Fee Structure -->
                <div class="qa-card">
                    <div>
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap navy" aria-hidden="true">
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                            </div>
                            <span class="qa-badge navy">Session {{ $academicYear }}</span>
                        </div>
                        <div class="qa-card-body">
                            <h3 class="qa-card-title">1. View Fee Structure</h3>
                            <p class="qa-card-desc">Review transparent class-wise tuition fees, term installment schedules, and refund policy guidelines.</p>
                        </div>
                    </div>
                    <div class="qa-card-footer">
                        <a href="{{ route('fee-structure') }}" class="btn-qa-action primary">
                            <span>View Fee Structure</span>
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <!-- 2. Download Admission Guidelines -->
                <div class="qa-card highlight-card">
                    <div>
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap orange" aria-hidden="true">
                                <i class="fa-solid fa-file-arrow-down"></i>
                            </div>
                            <span class="qa-badge orange">Official PDF</span>
                        </div>
                        <div class="qa-card-body">
                            <h3 class="qa-card-title">2. Download Admission Guidelines</h3>
                            <p class="qa-card-desc">Official PDF document containing complete age tables, document checklists, and CBSE regulations.</p>
                        </div>
                    </div>
                    <div class="qa-card-footer">
                        <a href="{{ route('admission-guidelines.download') }}" class="btn-qa-action orange" title="Download Admission Guidelines PDF">
                            <i class="fa-solid fa-file-pdf me-1" aria-hidden="true"></i>
                            <span>Download Official PDF</span>
                        </a>
                        <a href="{{ route('admission-guidelines.print') }}" target="_blank" class="btn-qa-action outline mt-2" style="font-size: 13px;">
                            <i class="fa-solid fa-print me-1" aria-hidden="true"></i>
                            <span>Print Preview</span>
                        </a>
                    </div>
                </div>

                <!-- 3. Check Required Documents -->
                <div class="qa-card">
                    <div>
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap purple" aria-hidden="true">
                                <i class="fa-solid fa-clipboard-check"></i>
                            </div>
                            <span class="qa-badge navy">7 Categories</span>
                        </div>
                        <div class="qa-card-body">
                            <h3 class="qa-card-title">3. Check Required Documents</h3>
                            <p class="qa-card-desc">Comprehensive 7-point checklist required for student registration and admission confirmation.</p>
                        </div>
                    </div>
                    <div class="qa-card-footer">
                        <a href="#documents-required" class="btn-qa-action outline">
                            <i class="fa-solid fa-list-check me-1" aria-hidden="true"></i>
                            <span>Check Required Documents</span>
                        </a>
                    </div>
                </div>

                <!-- 4. Talk to an Admission Counsellor -->
                <div class="qa-card highlight-card">
                    <div>
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap orange" aria-hidden="true">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <span class="qa-badge orange">Counsellor Desk</span>
                        </div>
                        <div class="qa-card-body">
                            <h3 class="qa-card-title">4. Talk to an Admission Counsellor</h3>
                            <p class="qa-card-desc">Speak directly with our dedicated admissions counsellor for personalized academic guidance.</p>
                            <div class="qa-card-meta">
                                <i class="fa-solid fa-user-tie" aria-hidden="true"></i>
                                <span>{{ $counsellorName }} &middot; {{ $counsellorPhone }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="qa-card-footer">
                        <a href="tel:{{ $counsellorPhone }}" class="btn-qa-action orange">
                            <i class="fa-solid fa-phone me-1" aria-hidden="true"></i>
                            <span>Talk to Counsellor</span>
                        </a>
                    </div>
                </div>

                <!-- 5. Get Directions to School -->
                <div class="qa-card">
                    <div>
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap blue" aria-hidden="true">
                                <i class="fa-solid fa-diamond-turn-right"></i>
                            </div>
                            <span class="qa-badge navy">Google Maps</span>
                        </div>
                        <div class="qa-card-body">
                            <h3 class="qa-card-title">5. Get Directions to School</h3>
                            <p class="qa-card-desc">Turn-by-turn route navigation directly to Advaita School of Excellence campus.</p>
                            <div class="qa-card-meta" style="color: #475569;">
                                <i class="fa-solid fa-location-dot text-orange" aria-hidden="true"></i>
                                <span>{{ $campusAddress }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="qa-card-footer">
                        <a href="{{ $directionsUrl }}" target="_blank" rel="noopener noreferrer" class="btn-qa-action primary">
                            <i class="fa-solid fa-location-arrow me-1" aria-hidden="true"></i>
                            <span>Get Directions to School</span>
                        </a>
                    </div>
                </div>

                <!-- 6. Call the School -->
                <div class="qa-card">
                    <div>
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap teal" aria-hidden="true">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <span class="qa-badge green">Official Lines</span>
                        </div>
                        <div class="qa-card-body">
                            <h3 class="qa-card-title">6. Call the School</h3>
                            <p class="qa-card-desc">Tap either verified official telephone number to connect with the school reception:</p>
                        </div>
                    </div>
                    <div class="qa-card-footer">
                        <div class="qa-dual-buttons">
                            <a href="tel:{{ $schoolPhone1 }}" class="btn-qa-action primary" title="Call Line 1">
                                <i class="fa-solid fa-phone me-1" aria-hidden="true"></i>
                                <span>{{ $schoolPhone1 }}</span>
                            </a>
                            <a href="tel:{{ $schoolPhone2 }}" class="btn-qa-action outline" title="Call Line 2">
                                <i class="fa-solid fa-phone me-1" aria-hidden="true"></i>
                                <span>{{ $schoolPhone2 }}</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 7. WhatsApp Enquiry Banner (Full Width Feature) -->
                <div class="qa-card qa-card-banner">
                    <div class="qa-banner-content">
                        <div class="qa-icon-wrap whatsapp" aria-hidden="true">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div class="qa-banner-text">
                            <div class="d-flex align-items-center gap-10 flex-wrap">
                                <h3 class="qa-card-title mb-0" style="color: #166534;">7. Instant WhatsApp Enquiry Support</h3>
                                <span class="qa-badge green">Online Now</span>
                            </div>
                            <p class="qa-card-desc mb-0 mt-4">Connect directly with our admissions desk on WhatsApp for instant guidance regarding age criteria, documents, and admission slots.</p>
                        </div>
                    </div>
                    <div class="qa-banner-action">
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener noreferrer" class="btn-qa-action whatsapp">
                            <i class="fa-brands fa-whatsapp me-2" aria-hidden="true"></i>
                            <span>Chat on WhatsApp ({{ $counsellorPhone }})</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION A: AGE CRITERIA & PHASED IMPLEMENTATION
         ========================================================================= -->
    <section class="admission-section-wrapper" id="age-criteria">
        <div class="adv-container">
            <div class="section-header-pill">
                <span class="pill-badge">SECTION A</span>
                <h2 class="pill-title">Age Criteria &amp; Phased Implementation Schedule</h2>
                <p class="pill-subtitle">Admissions adhere strictly to statutory age requirements and phased foundation stages.</p>
            </div>

            <!-- Cut-off Highlight Banner -->
            <div class="guidelines-cutoff-banner">
                <div class="cutoff-icon-wrap">
                    <i class="fa-solid fa-calendar-check"></i>
                </div>
                <div class="cutoff-content">
                    <div class="cutoff-title">Prescribed Age Cut-Off Date: <strong>{{ $cutoffDate ?? '30 June' }}</strong></div>
                    <p class="cutoff-desc">
                        The candidate's age must satisfy the prescribed criteria as on <strong>{{ $cutoffDate ?? '30 June' }}</strong> of the academic year for which admission is sought. Applicable state notifications and school education norms for the relevant session must be followed.
                    </p>
                </div>
                <div class="cutoff-badge">
                    <span>OFFICIAL CUT-OFF</span>
                    <strong>30 JUNE</strong>
                </div>
            </div>

            <!-- Age Criteria Table -->
            <div class="guidelines-table-card mt-30">
                <div class="guidelines-table-header">
                    <div>
                        <h3 class="guidelines-table-title"><i class="fa-solid fa-table-list text-orange me-2"></i>Class-wise Minimum Age Matrix</h3>
                        <p class="guidelines-table-subtitle">Applicable for Nursery to Grade X under CBSE &amp; Maharashtra Education Department framework.</p>
                    </div>
                    <a href="{{ route('admission-guidelines.download') }}" class="btn-guidelines-sm">
                        <i class="fa-solid fa-file-arrow-down me-1"></i>
                        <span>Download Matrix</span>
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table guidelines-custom-table">
                        <thead>
                            <tr>
                                <th style="width: 22%;">Class / Grade</th>
                                <th style="width: 28%;">Minimum Age / Eligibility</th>
                                <th style="width: 50%;">Statutory Regulation &amp; Schedule Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ageCriteria as $item)
                            <tr>
                                <td>
                                    <div class="class-cell-badge">
                                        <strong>{{ $item['class'] }}</strong>
                                    </div>
                                </td>
                                <td>
                                    <span class="age-eligibility-highlight">
                                        <i class="fa-solid fa-circle-check text-green me-2"></i>
                                        <strong>{{ $item['eligibility'] }}</strong>
                                    </span>
                                </td>
                                <td>
                                    <div class="regulation-cell">
                                        <div class="schedule-tag {{ str_contains($item['phased_year'], 'Academic Year') ? 'phased' : 'active' }}">
                                            <i class="fa-solid fa-clock-rotate-left me-1"></i>
                                            {{ $item['phased_year'] }}
                                        </div>
                                        <div class="notes-text">{{ $item['notes'] }}</div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Phased Implementation Schedule Highlights -->
            <div class="phased-schedule-box mt-30">
                <div class="phased-box-header">
                    <div class="phased-badge">STATUTORY TIMELINE</div>
                    <h3 class="phased-box-title">Phased Implementation Schedule</h3>
                    <p class="phased-box-desc">As per official educational guidelines, the foundational age restructuring follows this planned schedule:</p>
                </div>
                <div class="phased-cards-grid">
                    @foreach($phasedSchedule as $phase)
                    <div class="phased-step-card">
                        <div class="phase-number">0{{ $loop->iteration }}</div>
                        <div class="phase-grade">{{ $phase['grade'] }}</div>
                        <div class="phase-year">{{ $phase['year'] }}</div>
                        <div class="phase-status"><i class="fa-regular fa-calendar-check me-1"></i>{{ $phase['status'] }}</div>
                    </div>
                    @endforeach
                </div>

                <!-- Regulatory Disclaimer -->
                <div class="guidelines-disclaimer-card">
                    <i class="fa-solid fa-scale-balanced disclaimer-icon"></i>
                    <div class="disclaimer-text">
                        <strong>Official Policy &amp; Government Directive Notice:</strong>
                        The age criteria and phased implementation schedule are subject to applicable government notifications (Government of Maharashtra School Education Department) and Advaita School of Excellence policy.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION B: DOCUMENTS REQUIRED
         ========================================================================= -->
    <section class="admission-section-wrapper bg-light-alt" id="documents-required">
        <div class="adv-container">
            <div class="section-header-pill">
                <span class="pill-badge">SECTION B</span>
                <h2 class="pill-title">Documents Required for Admission</h2>
                <p class="pill-subtitle">All candidates must furnish authentic, verified documents to complete the enrolment procedure.</p>
            </div>

            <div class="docs-checklist-container">
                <div class="docs-header-bar">
                    <div class="docs-header-left">
                        <div class="docs-header-icon-wrap" style="width: 44px; height: 44px; border-radius: 12px; background: #fff7ed; color: #ea580c; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                            <i class="fa-solid fa-folder-closed"></i>
                        </div>
                        <div>
                            <h3 class="docs-header-title">7-Category Verification Checklist</h3>
                            <p class="docs-header-sub">Submit copies along with originals for spot verification at the school office.</p>
                        </div>
                    </div>
                    <div class="docs-header-actions">
                        <a href="{{ route('admission-guidelines.download') }}" class="btn-guidelines-sm">
                            <i class="fa-solid fa-download me-1"></i>
                            <span>Print Checklist</span>
                        </a>
                        <a href="{{ route('online-registration') }}" class="btn-guidelines-primary">
                            <i class="fa-solid fa-file-pen me-1"></i>
                            <span>Apply for Admission</span>
                        </a>
                    </div>
                </div>

                <div class="docs-list-grid">
                    @foreach($requiredDocuments as $doc)
                    <div class="doc-item-card">
                        <div class="doc-item-number">0{{ $doc['number'] }}</div>
                        <div class="doc-item-icon">
                            <i class="{{ $doc['icon'] }}"></i>
                        </div>
                        <div class="doc-item-content">
                            <div class="doc-item-top">
                                <h4 class="doc-item-title">{{ $doc['name'] }}</h4>
                                <span class="doc-item-badge">{{ $doc['badge'] }}</span>
                            </div>
                            <p class="doc-item-desc">{{ $doc['description'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="docs-verification-notice">
                    <i class="fa-solid fa-triangle-exclamation text-orange me-2"></i>
                    <span><strong>Verification Requirement:</strong> Original documents must be produced for physical verification during the interaction/fee payment stage. Photocopies will be retained for school registry archives.</span>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION C: ADMISSION PROCEDURE (5-Step Sequence)
         ========================================================================= -->
    <section class="admission-section-wrapper" id="admission-procedure">
        <div class="adv-container">
            <div class="section-header-pill">
                <span class="pill-badge">SECTION C</span>
                <h2 class="pill-title">5-Step Admission Procedure</h2>
                <p class="pill-subtitle">A seamless, parent-friendly progression from initial application to final enrolment confirmation.</p>
            </div>

            <div class="procedure-sequence-wrapper">
                @foreach($procedureSteps as $step)
                <div class="procedure-sequence-item">
                    <div class="procedure-step-badge">
                        <span>STEP</span>
                        <strong>0{{ $step['step'] }}</strong>
                    </div>
                    <div class="procedure-card">
                        <div class="procedure-card-icon">
                            <i class="{{ $step['icon'] }}"></i>
                        </div>
                        <div class="procedure-card-body">
                            <h3 class="procedure-card-title">{{ $step['title'] }}</h3>
                            <p class="procedure-card-desc">{{ $step['desc'] }}</p>
                            @if($step['step'] === 1)
                            <div class="mt-12">
                                <a href="{{ route('online-registration') }}" class="btn-step-action">
                                    <i class="fa-solid fa-arrow-up-right-from-square me-1"></i>
                                    <span>Open Online Registration Form</span>
                                </a>
                            </div>
                            @elseif($step['step'] === 2)
                            <div class="mt-12">
                                <a href="#documents-required" class="btn-step-action secondary">
                                    <i class="fa-solid fa-list-check me-1"></i>
                                    <span>Review 7 Document Categories</span>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Big Call to Action Banner -->
            <div class="procedure-cta-banner mt-40">
                <div class="cta-banner-content">
                    <span class="cta-banner-eyebrow">READY TO PROCEED?</span>
                    <h3 class="cta-banner-title">Start Your Child's Enrolment Today</h3>
                    <p class="cta-banner-desc">Complete the online registration form in under 10 minutes to reserve your preference.</p>
                </div>
                <div class="cta-banner-buttons">
                    <a href="{{ route('online-registration') }}" class="btn-cta-main">
                        <i class="fa-solid fa-file-pen me-2"></i>
                        <span>Online Registration</span>
                    </a>
                    <a href="tel:{{ $counsellorPhone }}" class="btn-cta-alt">
                        <i class="fa-solid fa-headset me-2"></i>
                        <span>Talk to Counsellor ({{ $counsellorPhone }})</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION D: CLASS ELIGIBILITY & CBSE REGULATIONS
         ========================================================================= -->
    <section class="admission-section-wrapper bg-light-alt" id="class-eligibility">
        <div class="adv-container">
            <div class="section-header-pill">
                <span class="pill-badge">SECTION D</span>
                <h2 class="pill-title">Class Eligibility &amp; CBSE Rules</h2>
                <p class="pill-subtitle">Mandatory eligibility parameters governing admission into middle school, secondary grades, and board classes.</p>
            </div>

            <div class="class-eligibility-grid">
                @foreach($classEligibility as $el)
                <div class="eligibility-card {{ str_contains($el['classes'], 'Grade X') ? 'restricted-card' : '' }}">
                    <div class="eligibility-card-header">
                        <div class="eligibility-icon-wrap">
                            <i class="{{ $el['icon'] }}"></i>
                        </div>
                        <div>
                            <span class="eligibility-grade-badge">{{ $el['classes'] }}</span>
                            <h3 class="eligibility-rule-title">{{ $el['rule'] }}</h3>
                        </div>
                    </div>
                    <div class="eligibility-card-body">
                        <p class="eligibility-detail-text">{{ $el['detail'] }}</p>
                    </div>
                    <div class="eligibility-card-footer">
                        @if(str_contains($el['classes'], 'Grade X'))
                        <div class="cbse-warning-tag">
                            <i class="fa-solid fa-triangle-exclamation me-1"></i>
                            <span>CBSE Examination Bye-Laws: No Direct Admission</span>
                        </div>
                        @else
                        <div class="cbse-ok-tag">
                            <i class="fa-solid fa-circle-check text-green me-1"></i>
                            <span>Subject to Valid Transfer Certificate</span>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION E: IMPORTANT INSTRUCTIONS
         ========================================================================= -->
    <section class="admission-section-wrapper" id="important-instructions">
        <div class="adv-container">
            <div class="section-header-pill">
                <span class="pill-badge">SECTION E</span>
                <h2 class="pill-title">Important Instructions &amp; Mandatory Notices</h2>
                <p class="pill-subtitle">Essential guidelines that parents, applicants, and guardians must note before submitting applications.</p>
            </div>

            <div class="important-instructions-card">
                <div class="instructions-header">
                    <div style="width: 48px; height: 48px; border-radius: 12px; background: #fff7ed; color: #ea580c; display: flex; align-items: center; justify-content: center; font-size: 22px;">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div>
                        <h3 class="instructions-title">Institutional Terms &amp; Compliance Requirements</h3>
                        <p class="instructions-subtitle">Applicable for Academic Session {{ $academicYear }} &middot; Advaita School of Excellence</p>
                    </div>
                </div>

                @php
                    $instructionIcons = [
                        ['icon' => 'fa-solid fa-file-circle-check', 'color' => '#16a34a', 'bg' => '#f0fdf4'],
                        ['icon' => 'fa-solid fa-hand-holding-hand', 'color' => '#ea580c', 'bg' => '#fff7ed'],
                        ['icon' => 'fa-solid fa-chair', 'color' => '#7c3aed', 'bg' => '#f5f3ff'],
                        ['icon' => 'fa-solid fa-graduation-cap', 'color' => '#0284c7', 'bg' => '#f0f9ff'],
                        ['icon' => 'fa-solid fa-hourglass-half', 'color' => '#083B7A', 'bg' => '#eff6ff'],
                    ];
                @endphp

                <div class="instructions-list">
                    @foreach($importantInstructions as $index => $ins)
                    @php
                        $iconData = $instructionIcons[$index % count($instructionIcons)];
                    @endphp
                    <div class="instruction-item">
                        <div class="instruction-icon" style="background: {{ $iconData['bg'] }}; color: {{ $iconData['color'] }}; width: 32px; height: 32px; border-radius: 10px; font-size: 14px;">
                            <i class="{{ $iconData['icon'] }}"></i>
                        </div>
                        <div class="instruction-text">
                            {{ $ins }}
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="instructions-footer-note">
                    <i class="fa-solid fa-clock-rotate-left me-2 text-navy"></i>
                    <span>For any clarifications on eligibility criteria or documentation, please contact the Admission Counsellor desk immediately.</span>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         COUNSELLOR & QUICK CONTACT HELPLINE
         ========================================================================= -->
    <section class="admission-helpline-section" id="counsellor-helpline">
        <div class="adv-container">
            <div class="helpline-card">
                <div class="helpline-left">
                    <span class="helpline-eyebrow">DEDICATED ADMISSION ASSISTANCE</span>
                    <h3 class="helpline-title">Speak with Ms. Vaishnavi, Admission Counsellor</h3>
                    <p class="helpline-desc">
                        Have queries regarding minimum age criteria, previous class documents, or CBSE board registration? Our counsellor desk provides direct, personalized guidance for parents.
                    </p>
                    <div class="helpline-meta-list">
                        <div class="meta-item">
                            <i class="fa-solid fa-phone text-orange"></i>
                            <span>Counsellor Phone: <strong>{{ $counsellorPhone }}</strong></span>
                        </div>
                        <div class="meta-item">
                            <i class="fa-solid fa-building text-orange"></i>
                            <span>School Lines: <strong>{{ $schoolPhone1 }} / {{ $schoolPhone2 }}</strong></span>
                        </div>
                        <div class="meta-item">
                            <i class="fa-solid fa-location-dot text-orange"></i>
                            <span>{{ $campusAddress }}</span>
                        </div>
                    </div>
                </div>

                <div class="helpline-right">
                    <div class="helpline-buttons-stack">
                        <a href="tel:{{ $counsellorPhone }}" class="btn-helpline-call">
                            <i class="fa-solid fa-phone"></i>
                            <span>Talk to Admission Counsellor</span>
                        </a>
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener noreferrer" class="btn-helpline-wa">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span>WhatsApp Enquiry ({{ $counsellorPhone }})</span>
                        </a>
                        <a href="{{ $directionsUrl }}" target="_blank" rel="noopener noreferrer" class="btn-helpline-dir">
                            <i class="fa-solid fa-diamond-turn-right"></i>
                            <span>Get Directions to School</span>
                        </a>
                        <a href="{{ route('admission-guidelines.download') }}" class="btn-helpline-pdf">
                            <i class="fa-solid fa-file-pdf"></i>
                            <span>Download Admission Guidelines PDF</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection

