<?php

// 1. admin/pages/index.blade.php
$path = 'resources/views/admin/pages/index.blade.php';
$c = file_get_contents($path);

// Strip @section('styles') ... @endsection
$c = preg_replace('/@section\(\'styles\'\)\s*<style>.*?<\/style>\s*@endsection/is', '', $c);

// Replace 22 inline styles with classes
$c = str_replace('<i class="fa-solid fa-layer-group" style="color: var(--admin-navy);"></i>', '<i class="fa-solid fa-layer-group text-navy"></i>', $c);
$c = str_replace('<i class="fa-solid fa-circle" style="font-size: 5px; color: var(--admin-orange);"></i>', '<i class="fa-solid fa-circle dot-icon text-orange"></i>', $c);
$c = str_replace('<div style="display: flex; align-items: center; gap: 10px;">', '<div class="d-flex align-items-center gap-10">', $c);
$c = str_replace('<i class="fa-solid fa-chevron-right" style="font-size: 10px; opacity: {{ $selectedKey === $k ? \'1\' : \'0.3\' }};"></i>', '<i class="fa-solid fa-chevron-right page-nav-arrow {{ $selectedKey === $k ? \'opacity-100\' : \'opacity-30\' }}"></i>', $c);
$c = str_replace('<i class="fa-solid fa-external-link" style="font-size: 9px; margin-left: 2px;"></i>', '<i class="fa-solid fa-external-link icon-sm-offset"></i>', $c);
$c = str_replace('<div style="text-align: right;">', '<div class="text-right">', $c);
$c = str_replace('<span style="font-size: 11.5px; opacity: 0.8; display: block; margin-bottom: 4px;">CATEGORY</span>', '<span class="shb-badge-label">CATEGORY</span>', $c);
$c = str_replace('<span style="background: rgba(255,255,255,0.2); padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 700; letter-spacing: 0.5px;">', '<span class="shb-badge-pill">', $c);
$c = str_replace('<div style="display: flex; flex-direction: column; gap: 20px;">', '<div class="d-flex flex-column gap-20">', $c);
$c = str_replace('<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px; margin-bottom: 18px;">', '<div class="card-subgrid-2col mb-18">', $c);
$c = str_replace('style="margin-bottom: 0;"', 'class="mb-0"', $c);
$c = str_replace('class="shb-icon-badge" style="color: var(--admin-orange); background: rgba(243, 112, 33, 0.1);"', 'class="shb-icon-badge icon-badge-orange"', $c);
$c = str_replace('class="editor-panel-card" style="border-left: 4px solid var(--admin-orange);"', 'class="editor-panel-card panel-card-accent-orange"', $c);
$c = str_replace('style="font-style: italic; background: #FFFDF9; border-color: rgba(243, 112, 33, 0.3);"', 'class="input-quote-style"', $c);
$c = str_replace('<div class="sticky-save-bar" style="margin-top: 24px;">', '<div class="sticky-save-bar mt-24">', $c);
$c = str_replace('<div style="display: flex; align-items: center; gap: 8px;">', '<div class="d-flex align-items-center gap-8">', $c);
$c = str_replace('<span style="width: 10px; height: 10px; border-radius: 50%; background: #10B981; display: inline-block; box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2);"></span>', '<span class="status-pulse-dot"></span>', $c);
$c = str_replace('<span style="font-size: 13px; font-weight: 600; color: #475569;">', '<span class="save-status-text">', $c);
$c = str_replace('<div style="display: flex; align-items: center; gap: 10px;">', '<div class="d-flex align-items-center gap-10">', $c);

file_put_contents($path, $c);
echo "Refactored admin/pages/index.blade.php\n";

// 2. admin/seo/index.blade.php
$path = 'resources/views/admin/seo/index.blade.php';
$c = file_get_contents($path);

// Replace container grid
$c = str_replace('<div class="admin-content-grid" style="display: grid; grid-template-columns: 310px 1fr; gap: 24px; align-items: start;">', '<div class="seo-master-grid">', $c);
$c = str_replace('<div class="seo-pages-card" style="background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">', '<div class="seo-sidebar-card">', $c);
$c = str_replace('<div style="padding: 16px 20px; border-bottom: 1px solid var(--admin-border); background: #F8FAFC;">', '<div class="seo-sidebar-header">', $c);
$c = str_replace('<h3 style="font-size: 13.5px; font-weight: 700; color: #334155; text-transform: uppercase; letter-spacing: 0.8px; margin: 0;">', '<h3 class="seo-sidebar-title">', $c);
$c = str_replace('<i class="fa-solid fa-list-check" style="color: var(--admin-navy); margin-right: 6px;"></i>', '<i class="fa-solid fa-list-check text-navy mr-6"></i>', $c);
$c = str_replace('<div class="seo-pages-list" style="max-height: calc(100vh - 280px); overflow-y: auto; padding: 8px;">', '<div class="seo-page-nav-list">', $c);

// Page item links
$c = preg_replace(
    '/class="seo-page-item\s*\{\{\s*\$selectedKey\s*===\s*\$key\s*\?\s*\'active\'\s*:\s*\'\'\s*\}\}"\s*style="[^"]*"/i',
    'class="seo-page-item {{ $selectedKey === $key ? \'active\' : \'\' }}"',
    $c
);
$c = str_replace('<div style="display: flex; align-items: center; gap: 10px;">', '<div class="d-flex align-items-center gap-10">', $c);
$c = preg_replace('/<i class="\{\{ \$page\[\'icon\'\] \}\}"\s+style="[^"]*">/i', '<i class="{{ $page[\'icon\'] }} seo-page-nav-icon">', $c);
$c = str_replace('<span style="font-size: 13.5px;">', '<span>', $c);
$c = str_replace('<span style="font-size: 10px; font-weight: 700; background: #ECFDF5; color: #059669; border: 1px solid #A7F3D0; padding: 2px 7px; border-radius: 10px;">Active</span>', '<span class="status-pill-clean status-pill-success">Active</span>', $c);
$c = str_replace('<span style="font-size: 10px; font-weight: 600; background: #F1F5F9; color: #64748B; padding: 2px 7px; border-radius: 10px;">Default</span>', '<span class="status-pill-clean status-pill-muted">Default</span>', $c);

// Editor column & SERP card
$c = str_replace('<div class="seo-editor-column" style="display: flex; flex-direction: column; gap: 24px;">', '<div class="seo-main-editor-wrap">', $c);
$c = str_replace('<div class="serp-preview-card" style="background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; padding: 22px 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">', '<div class="seo-serp-card">', $c);
$c = str_replace('<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px;">', '<div class="seo-serp-eyebrow">', $c);
$c = str_replace('<span style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #64748B;">', '<span>', $c);
$c = str_replace('<i class="fa-brands fa-google" style="color: #EA4335; margin-right: 6px;"></i>', '<i class="fa-brands fa-google text-danger mr-6"></i>', $c);
$c = str_replace('<span style="font-size: 11.5px; color: #94A3B8;">Desktop &amp; Mobile SERP</span>', '<span class="text-muted">Desktop &amp; Mobile SERP</span>', $c);

// SERP box
$c = str_replace('<div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 10px; padding: 18px 20px;">', '<div class="seo-serp-box">', $c);
$c = str_replace('<div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">', '<div class="seo-serp-meta-row">', $c);
$c = str_replace('<div style="width: 22px; height: 22px; border-radius: 50%; background: #083B7A; color: #fff; font-size: 10px; font-weight: 800; display: flex; align-items: center; justify-content: center;">A</div>', '<div class="seo-serp-site-icon">A</div>', $c);
$c = str_replace('<div style="font-size: 12px; color: #202124; line-height: 1.2;">', '<div class="seo-serp-site-name">', $c);
$c = str_replace('<span style="font-weight: 500;">Advaita School of Excellence</span>', '<span>Advaita School of Excellence</span>', $c);
$c = str_replace('<span style="color: #5f6368; margin-left: 4px;">{{ url($currentPage[\'url\']) }}</span>', '<span class="seo-serp-site-url">{{ url($currentPage[\'url\']) }}</span>', $c);
$c = str_replace('<h4 id="serpTitlePreview" style="font-size: 18px; font-weight: 500; color: #1a0dab; margin: 0 0 6px 0; line-height: 1.3; cursor: pointer;">', '<h4 id="serpTitlePreview" class="seo-serp-title-preview">', $c);
$c = str_replace('<p id="serpDescPreview" style="font-size: 13.5px; color: #4d5156; line-height: 1.5; margin: 0;">', '<p id="serpDescPreview" class="seo-serp-snippet-preview">', $c);

// Form card
$c = str_replace('<div class="seo-form-card" style="background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; padding: 26px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">', '<div class="seo-editor-card">', $c);
$c = str_replace('<div style="border-bottom: 1px solid var(--admin-border); padding-bottom: 16px; margin-bottom: 22px;">', '<div class="seo-editor-header">', $c);
$c = str_replace('<h2 style="font-size: 18px; font-weight: 800; color: var(--admin-text-main); margin-bottom: 4px;">', '<h2 class="seo-editor-title">', $c);
$c = str_replace('<span style="color: var(--admin-navy);">{{ $currentPage[\'name\'] }}</span>', '<span class="text-navy">{{ $currentPage[\'name\'] }}</span>', $c);
$c = str_replace('<p style="font-size: 13px; color: var(--admin-text-muted);">', '<p class="text-muted">', $c);
$c = str_replace('<code style="background: #F1F5F9; padding: 2px 6px; border-radius: 4px; color: #083B7A;">{{ $currentPage[\'url\'] }}</code>', '<code class="seo-page-badge">{{ $currentPage[\'url\'] }}</code>', $c);

// Inputs and labels
$c = str_replace('<div style="margin-bottom: 22px;">', '<div class="mb-22">', $c);
$c = str_replace('<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">', '<div class="d-flex justify-content-between align-items-center mb-8">', $c);
$c = str_replace('<label for="seoTitleInput" style="font-size: 13.5px; font-weight: 700; color: #1E293B;">', '<label for="seoTitleInput" class="seo-field-label">', $c);
$c = str_replace('<label for="seoDescInput" style="font-size: 13.5px; font-weight: 700; color: #1E293B;">', '<label for="seoDescInput" class="seo-field-label">', $c);
$c = str_replace('<label for="seoKeywordsInput" style="display: block; font-size: 13.5px; font-weight: 700; color: #1E293B; margin-bottom: 8px;">', '<label for="seoKeywordsInput" class="seo-field-label mb-8">', $c);
$c = str_replace('<span style="color: #EF4444;">*</span>', '<span class="text-danger">*</span>', $c);
$c = str_replace('<span id="titleCounter" style="font-size: 12px; font-weight: 600; color: #64748B;">', '<span id="titleCounter" class="text-muted">', $c);
$c = str_replace('<span id="descCounter" style="font-size: 12px; font-weight: 600; color: #64748B;">', '<span id="descCounter" class="text-muted">', $c);
$c = str_replace('<span style="font-weight: 400; color: #64748B;">(Comma separated)</span>', '<span class="seo-field-hint">(Comma separated)</span>', $c);

$c = str_replace('style="width: 100%; padding: 12px 16px; border: 1px solid var(--admin-border); border-radius: 10px; font-size: 14px; font-family: inherit; transition: border-color 0.2s;"', 'class="seo-input-control"', $c);
$c = str_replace('style="width: 100%; padding: 12px 16px; border: 1px solid var(--admin-border); border-radius: 10px; font-size: 14px; font-family: inherit; resize: vertical; line-height: 1.5; transition: border-color 0.2s;"', 'class="seo-textarea-control"', $c);
$c = str_replace('<span style="font-size: 12px; color: #64748B; margin-top: 6px; display: block;">', '<span class="text-muted d-block mt-6">', $c);
$c = str_replace('<span style="color: #EF4444; font-size: 12px; margin-top: 4px; display: block;">', '<span class="text-danger d-block mt-4">', $c);
$c = str_replace('<div style="margin-bottom: 28px;">', '<div class="mb-28">', $c);

// Action buttons
$c = str_replace('<div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid var(--admin-border); padding-top: 20px;">', '<div class="seo-action-bar">', $c);
$c = str_replace('class="btn-action-view" style="background: var(--admin-navy); color: #fff; padding: 12px 28px; font-size: 14px; border: none; cursor: pointer; border-radius: 10px;"', 'class="btn-save-clean"', $c);
$c = str_replace('style="background: transparent; border: 1px solid #CBD5E1; color: #64748B; padding: 10px 18px; border-radius: 10px; font-size: 13px; font-weight: 600; cursor: pointer;"', 'class="btn-seo-reset"', $c);

file_put_contents($path, $c);
echo "Refactored admin/seo/index.blade.php\n";

// 3. admin/site-settings/index.blade.php
$path = 'resources/views/admin/site-settings/index.blade.php';
$c = file_get_contents($path);

$c = str_replace('<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(420px, 1fr)); gap: 24px; align-items: start;">', '<div class="settings-master-grid">', $c);
$c = str_replace('<div style="background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">', '<div class="settings-card">', $c);
$c = str_replace('<div style="background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.03); grid-column: 1 / -1;">', '<div class="settings-card-full">', $c);

$c = str_replace('<div style="display: flex; align-items: center; gap: 10px; border-bottom: 1px solid var(--admin-border); padding-bottom: 14px; margin-bottom: 20px;">', '<div class="settings-card-header">', $c);
$c = str_replace('<div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(8, 59, 122, 0.1); color: var(--admin-navy); display: flex; align-items: center; justify-content: center; font-size: 16px;">', '<div class="settings-card-icon settings-icon-navy">', $c);
$c = str_replace('<div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(16, 185, 129, 0.1); color: var(--admin-success); display: flex; align-items: center; justify-content: center; font-size: 16px;">', '<div class="settings-card-icon settings-icon-success">', $c);
$c = str_replace('<div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(2, 132, 199, 0.1); color: var(--admin-info); display: flex; align-items: center; justify-content: center; font-size: 16px;">', '<div class="settings-card-icon settings-icon-info">', $c);
$c = str_replace('<div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(243, 112, 33, 0.1); color: var(--admin-orange); display: flex; align-items: center; justify-content: center; font-size: 16px;">', '<div class="settings-card-icon settings-icon-orange">', $c);
$c = str_replace('<div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(139, 92, 246, 0.1); color: #8B5CF6; display: flex; align-items: center; justify-content: center; font-size: 16px;">', '<div class="settings-card-icon settings-icon-purple">', $c);

$c = str_replace('<h3 style="font-size: 16px; font-weight: 700; color: var(--admin-text-main); margin: 0;">', '<h3 class="settings-card-title">', $c);
$c = str_replace('<span style="font-size: 12px; color: var(--admin-text-muted);">', '<span class="settings-card-subtitle">', $c);
$c = str_replace('<div style="display: flex; flex-direction: column; gap: 16px;">', '<div class="settings-card-body">', $c);
$c = str_replace('<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">', '<div class="settings-row-2col">', $c);

$c = str_replace('<label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">', '<label class="settings-label">', $c);
$c = str_replace('<span style="color: #EF4444;">*</span>', '<span class="text-danger">*</span>', $c);
$c = str_replace('style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 14px;"', 'class="settings-input-control"', $c);
$c = str_replace('style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13px;"', 'class="settings-input-control"', $c);
$c = str_replace('style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13.5px;"', 'class="settings-input-control"', $c);
$c = str_replace('style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 14px; resize: vertical;"', 'class="settings-textarea-control"', $c);

// Social icons & grid
$c = str_replace('<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px;">', '<div class="settings-social-grid">', $c);
$c = str_replace('<label style="display: flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">', '<label class="settings-social-label">', $c);
$c = str_replace('<i class="fa-brands fa-facebook" style="color: #1877F2;"></i>', '<i class="fa-brands fa-facebook text-facebook"></i>', $c);
$c = str_replace('<i class="fa-brands fa-instagram" style="color: #E4405F;"></i>', '<i class="fa-brands fa-instagram text-instagram"></i>', $c);
$c = str_replace('<i class="fa-brands fa-youtube" style="color: #FF0000;"></i>', '<i class="fa-brands fa-youtube text-youtube"></i>', $c);
$c = str_replace('<i class="fa-brands fa-linkedin" style="color: #0A66C2;"></i>', '<i class="fa-brands fa-linkedin text-linkedin"></i>', $c);

// Bottom bar
$c = str_replace('<div style="margin-top: 24px; padding: 18px 24px; background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; display: flex; align-items: center; justify-content: space-between;">', '<div class="settings-bottom-bar">', $c);
$c = str_replace('<i class="fa-solid fa-circle-info" style="color: var(--admin-info); margin-right: 4px;"></i>', '<i class="fa-solid fa-circle-info text-info mr-4"></i>', $c);
$c = str_replace('<span style="font-size: 13px; color: #64748B;">', '<span class="text-muted">', $c);
$c = str_replace('class="btn-action-view" style="background: var(--admin-navy); color: #fff; padding: 12px 28px; font-size: 14px; border: none; cursor: pointer; border-radius: 10px;"', 'class="btn-save-clean"', $c);

file_put_contents($path, $c);
echo "Refactored admin/site-settings/index.blade.php\n";

// 4. admin/dashboard.blade.php
$path = 'resources/views/admin/dashboard.blade.php';
$c = file_get_contents($path);

// Strip @section('styles') ... @endsection
$c = preg_replace('/@section\(\'styles\'\)\s*<style>.*?<\/style>\s*@endsection/is', '', $c);

// Replace styles
$c = str_replace('style="text-decoration: none; color: inherit;"', 'class="text-inherit-link"', $c);
$c = str_replace('style="font-family: monospace; color: var(--admin-navy);"', 'class="td-code"', $c);
$c = str_replace('style="font-weight: 700; color: #0F172A; font-size: 13.5px;"', 'class="td-main-bold"', $c);
$c = str_replace('style="font-weight: 700; color: #0F172A;"', 'class="td-main-bold"', $c);
$c = str_replace('style="font-size: 11.5px; color: #64748B;"', 'class="td-sub-muted"', $c);
$c = str_replace('style="font-size: 11.5px; color: #94A3B8;"', 'class="td-date-muted"', $c);
$c = str_replace('style="font-weight: 600; color: #334155;"', 'class="td-semi-bold"', $c);
$c = str_replace('style="font-weight: 700; color: #334155;"', 'class="td-main-bold"', $c);
$c = str_replace('style="font-size: 12.5px; color: #334155;"', 'class="td-body-slate"', $c);
$c = str_replace('style="font-size: 12.5px; font-weight: 600;"', 'class="td-semi-bold"', $c);
$c = str_replace('style="font-size: 11px; color: #94A3B8;"', 'class="td-date-muted"', $c);
$c = str_replace('style="margin: 0; display: inline-block;"', 'class="d-inline-block m-0"', $c);
$c = str_replace('style="margin: 0;"', 'class="m-0"', $c);
$c = str_replace('style="padding: 4px 8px; font-size: 11.5px; font-weight: 600; border-radius: 6px;"', 'class="table-badge-select"', $c);
$c = str_replace('style="display: flex; gap: 6px;"', 'class="d-flex gap-6"', $c);
$c = str_replace('style="display: flex; gap: 8px;"', 'class="d-flex gap-8"', $c);
$c = str_replace('style="font-size: 10px;"', 'class="fs-10"', $c);
$c = str_replace('style="text-align: center; color: #94A3B8; padding: 40px;"', 'class="table-empty-row"', $c);
$c = str_replace('style="display: none;"', 'class="d-none"', $c);
$c = str_replace('style="max-width: 260px; font-size: 12px; color: #64748B; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"', 'class="td-ellipsis-260"', $c);
$c = str_replace('style="font-size: 12px; font-weight: 700; text-transform: uppercase; color: #64748B; margin-bottom: 6px;"', 'class="meta-pill-label"', $c);
$c = str_replace('style="background: #E0F2FE; color: #0369A1; border-color: #BAE6FD;"', 'class="badge-sky-solid"', $c);
$c = str_replace('style="background: var(--admin-navy); color: #ffffff;"', 'class="btn-navy-solid"', $c);
$c = str_replace('style="color: #0284C7;"', 'class="text-info"', $c);
$c = str_replace('style="color: #F37021;"', 'class="text-orange"', $c);

file_put_contents($path, $c);
echo "Refactored admin/dashboard.blade.php\n";
