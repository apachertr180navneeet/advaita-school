<?php

// 1. Build public/assets/css/admin-login.css
$loginContent = file_get_contents('resources/views/admin/login.blade.php');
if (preg_match('/<style\b[^>]*>(.*?)<\/style>/is', $loginContent, $m)) {
    $loginCss = trim($m[1])."\n\n/* Login Utilities */\n.login-alert-icon {\n    margin-top: 2px;\n}\n";
    file_put_contents('public/assets/css/admin-login.css', $loginCss);
    echo 'Created public/assets/css/admin-login.css ('.strlen($loginCss)." bytes)\n";
}

// 2. Build public/assets/css/admin.css
$adminLayoutContent = file_get_contents('resources/views/layouts/admin.blade.php');
$coreCss = '';
if (preg_match('/<style\b[^>]*>(.*?)<\/style>/is', $adminLayoutContent, $m)) {
    $coreCss = trim($m[1]);
}

// Gather all component styles from the 25 admin views
$viewFiles = [
    'resources/views/admin/dashboard.blade.php',
    'resources/views/admin/pages/index.blade.php',
    'resources/views/admin/campus-visit/index.blade.php',
    'resources/views/admin/faqs/index.blade.php',
    'resources/views/admin/faqs/create.blade.php',
    'resources/views/admin/faqs/edit.blade.php',
    'resources/views/admin/gallery/index.blade.php',
    'resources/views/admin/gallery/create.blade.php',
    'resources/views/admin/gallery/edit.blade.php',
    'resources/views/admin/inquiries/index.blade.php',
    'resources/views/admin/inquiries/show.blade.php',
    'resources/views/admin/pillars/index.blade.php',
    'resources/views/admin/pillars/create.blade.php',
    'resources/views/admin/pillars/edit.blade.php',
    'resources/views/admin/registrations/index.blade.php',
    'resources/views/admin/registrations/show.blade.php',
    'resources/views/admin/sliders/index.blade.php',
    'resources/views/admin/sliders/create.blade.php',
    'resources/views/admin/sliders/edit.blade.php',
    'resources/views/admin/testimonials/index.blade.php',
    'resources/views/admin/testimonials/create.blade.php',
    'resources/views/admin/testimonials/edit.blade.php',
    'resources/views/admin/why-choose/index.blade.php',
    'resources/views/admin/why-choose/create.blade.php',
    'resources/views/admin/why-choose/edit.blade.php',
];

$viewCssBlocks = [];
foreach ($viewFiles as $vf) {
    if (file_exists($vf)) {
        $c = file_get_contents($vf);
        if (preg_match('/<style\b[^>]*>(.*?)<\/style>/is', $c, $matches)) {
            $viewCssBlocks[] = '/* --- Component Styles from '.basename($vf).' in '.dirname($vf)." --- */\n".trim($matches[1]);
        }
    }
}

// Additional Admin Utilities for replacing all inline style attributes
$utilitiesCss = <<<'CSS'

/* ==========================================================================
   ADMIN GLOBAL UTILITIES & REUSABLE CLASSES (NO-INLINE-CSS REFACTOR)
   ========================================================================== */

/* Navbar Badges & External Icons in Sidebar */
.nav-badge-sky {
    background: rgba(2, 132, 199, 0.2);
    color: #38BDF8;
    border-color: rgba(2, 132, 199, 0.4);
}
.nav-badge-emerald {
    background: rgba(16, 185, 129, 0.2);
    color: #34D399;
    border-color: rgba(16, 185, 129, 0.4);
}
.nav-external-icon {
    font-size: 11px;
    margin-left: auto;
}
.flash-toast-icon {
    font-size: 18px;
    margin-top: 1px;
}

/* Table Column Widths */
.col-w60 { width: 60px; }
.col-w70 { width: 70px; }
.col-w80 { width: 80px; }
.col-w90 { width: 90px; }
.col-w100 { width: 100px; }
.col-w110 { width: 110px; }
.col-w120 { width: 120px; }
.col-w130 { width: 130px; }
.col-w140 { width: 140px; }
.col-w150 { width: 150px; }
.col-w160 { width: 160px; }
.col-w180 { width: 180px; }
.col-w200 { width: 200px; }
.col-w220 { width: 220px; }
.col-w240 { width: 240px; }
.col-w250 { width: 250px; }
.col-w260 { width: 260px; }
.col-w280 { width: 280px; }
.col-w300 { width: 300px; }
.col-w320 { width: 320px; }

/* Text Align & Display Helpers */
.text-center { text-align: center; }
.text-right { text-align: right; }
.text-left { text-align: left; }
.d-flex { display: flex; }
.d-inline-flex { display: inline-flex; }
.d-block { display: block; }
.d-inline-block { display: inline-block; }
.d-none { display: none; }
.align-items-center { align-items: center; }
.align-items-start { align-items: flex-start; }
.justify-content-between { justify-content: space-between; }
.justify-content-center { justify-content: center; }
.justify-content-end { justify-content: flex-end; }
.flex-column { flex-direction: column; }
.flex-wrap { flex-wrap: wrap; }
.flex-1 { flex: 1; }
.w-100 { width: 100%; }

/* Gap Utilities */
.gap-4 { gap: 4px; }
.gap-6 { gap: 6px; }
.gap-8 { gap: 8px; }
.gap-10 { gap: 10px; }
.gap-12 { gap: 12px; }
.gap-14 { gap: 14px; }
.gap-16 { gap: 16px; }
.gap-20 { gap: 20px; }
.gap-24 { gap: 24px; }

/* Margin & Padding Utilities */
.m-0 { margin: 0 !important; }
.mb-0 { margin-bottom: 0 !important; }
.mb-2 { margin-bottom: 2px !important; }
.mb-4 { margin-bottom: 4px !important; }
.mb-6 { margin-bottom: 6px !important; }
.mb-8 { margin-bottom: 8px !important; }
.mb-10 { margin-bottom: 10px !important; }
.mb-12 { margin-bottom: 12px !important; }
.mb-14 { margin-bottom: 14px !important; }
.mb-16 { margin-bottom: 16px !important; }
.mb-18 { margin-bottom: 18px !important; }
.mb-20 { margin-bottom: 20px !important; }
.mb-22 { margin-bottom: 22px !important; }
.mb-24 { margin-bottom: 24px !important; }
.mb-26 { margin-bottom: 26px !important; }
.mb-28 { margin-bottom: 28px !important; }
.mt-0 { margin-top: 0 !important; }
.mt-2 { margin-top: 2px !important; }
.mt-3 { margin-top: 3px !important; }
.mt-4 { margin-top: 4px !important; }
.mt-6 { margin-top: 6px !important; }
.mt-8 { margin-top: 8px !important; }
.mt-12 { margin-top: 12px !important; }
.mt-16 { margin-top: 16px !important; }
.mt-20 { margin-top: 20px !important; }
.mt-24 { margin-top: 24px !important; }
.ml-auto { margin-left: auto !important; }
.mr-auto { margin-right: auto !important; }

/* Color Utilities */
.text-navy { color: var(--admin-navy) !important; }
.text-orange { color: var(--admin-orange) !important; }
.text-muted { color: #64748B !important; }
.text-slate { color: #475569 !important; }
.text-dark { color: #1E293B !important; }
.text-success { color: #10B981 !important; }
.text-warning { color: #F59E0B !important; }
.text-danger { color: #EF4444 !important; }
.text-info { color: #0284C7 !important; }

/* Social Brand Colors */
.text-facebook { color: #1877F2 !important; }
.text-instagram { color: #E4405F !important; }
.text-youtube { color: #FF0000 !important; }
.text-linkedin { color: #0A66C2 !important; }

/* Status Badges & Pills */
.status-pill-clean {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 3px 10px;
    border-radius: 20px;
    font-size: 11.5px;
    font-weight: 700;
}
.status-pill-success {
    background: #ECFDF5;
    color: #059669;
    border: 1px solid #A7F3D0;
}
.status-pill-muted {
    background: #F1F5F9;
    color: #64748B;
    border: 1px solid #E2E8F0;
}
.status-dot-sm {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    display: inline-block;
}
.status-dot-active {
    background: #10B981;
}
.status-dot-inactive {
    background: #94A3B8;
}

/* Empty State Card */
.admin-empty-dashed-box {
    grid-column: 1 / -1;
    padding: 60px 24px;
    text-align: center;
    background: #ffffff;
    border: 1.5px dashed var(--admin-border);
    border-radius: 16px;
}
.admin-empty-icon {
    font-size: 42px;
    color: #94A3B8;
    margin-bottom: 14px;
}
.admin-empty-title {
    font-size: 16px;
    font-weight: 800;
    color: var(--admin-navy);
    margin-bottom: 4px;
}
.admin-empty-subtitle {
    font-size: 13px;
    color: #64748B;
    max-width: 420px;
    margin: 0 auto;
}

/* --- SEO Page Component Styles (Extracted from seo/index.blade.php) --- */
.seo-master-grid {
    display: grid;
    grid-template-columns: 320px 1fr;
    gap: 24px;
    align-items: start;
}
@media (max-width: 1024px) {
    .seo-master-grid {
        grid-template-columns: 1fr;
    }
}
.seo-sidebar-card {
    background: #ffffff;
    border: 1px solid var(--admin-border);
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.03);
}
.seo-sidebar-header {
    padding: 16px 20px;
    border-bottom: 1px solid var(--admin-border);
    background: #F8FAFC;
}
.seo-sidebar-title {
    font-size: 13.5px;
    font-weight: 700;
    color: #334155;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    margin: 0;
}
.seo-page-nav-list {
    max-height: calc(100vh - 280px);
    overflow-y: auto;
    padding: 8px;
    list-style: none;
    margin: 0;
}
.seo-page-nav-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 12px 14px;
    border-radius: 10px;
    text-decoration: none;
    margin-bottom: 4px;
    transition: all 0.2s;
    color: #475569;
}
.seo-page-nav-item:hover {
    background: #F1F5F9;
    color: var(--admin-navy);
}
.seo-page-nav-item.active {
    background: linear-gradient(135deg, rgba(8, 59, 122, 0.08) 0%, rgba(243, 112, 33, 0.08) 100%);
    color: var(--admin-navy);
    font-weight: 700;
    border: 1px solid rgba(8, 59, 122, 0.15);
}
.seo-page-nav-icon {
    width: 18px;
    text-align: center;
    margin-right: 8px;
}
.seo-main-editor-wrap {
    display: flex;
    flex-direction: column;
    gap: 24px;
}
.seo-serp-card {
    background: #ffffff;
    border: 1px solid var(--admin-border);
    border-radius: 14px;
    padding: 22px 24px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.03);
}
.seo-serp-eyebrow {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 14px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #64748B;
}
.seo-serp-box {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 10px;
    padding: 18px 20px;
}
.seo-serp-meta-row {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 6px;
}
.seo-serp-site-icon {
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: #083B7A;
    color: #fff;
    font-size: 10px;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
}
.seo-serp-site-name {
    font-size: 12px;
    color: #202124;
    line-height: 1.2;
    font-weight: 500;
}
.seo-serp-site-url {
    font-size: 11.5px;
    color: #5f6368;
    margin-left: 4px;
}
.seo-serp-title-preview {
    font-size: 18px;
    font-weight: 500;
    color: #1a0dab;
    margin: 0 0 6px 0;
    line-height: 1.3;
}
.seo-serp-snippet-preview {
    font-size: 13.5px;
    color: #4d5156;
    line-height: 1.5;
    margin: 0;
}
.seo-editor-card {
    background: #ffffff;
    border: 1px solid var(--admin-border);
    border-radius: 14px;
    padding: 26px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.03);
}
.seo-editor-header {
    border-bottom: 1px solid var(--admin-border);
    padding-bottom: 16px;
    margin-bottom: 22px;
}
.seo-editor-title {
    font-size: 18px;
    font-weight: 800;
    color: var(--admin-text-main);
    margin-bottom: 4px;
}
.seo-page-badge {
    background: #F1F5F9;
    padding: 2px 8px;
    border-radius: 4px;
    color: #083B7A;
    font-weight: 700;
    font-size: 12px;
}
.seo-input-control {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid var(--admin-border);
    border-radius: 10px;
    font-size: 14px;
    font-family: inherit;
    transition: border-color 0.2s, box-shadow 0.2s;
}
.seo-input-control:focus {
    outline: none;
    border-color: var(--admin-navy);
    box-shadow: 0 0 0 3px rgba(8, 59, 122, 0.12);
}
.seo-textarea-control {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid var(--admin-border);
    border-radius: 10px;
    font-size: 14px;
    font-family: inherit;
    resize: vertical;
    transition: border-color 0.2s, box-shadow 0.2s;
}
.seo-textarea-control:focus {
    outline: none;
    border-color: var(--admin-navy);
    box-shadow: 0 0 0 3px rgba(8, 59, 122, 0.12);
}
.seo-field-label {
    display: block;
    font-size: 13.5px;
    font-weight: 700;
    color: #1E293B;
    margin-bottom: 8px;
}
.seo-field-hint {
    font-weight: 400;
    color: #64748B;
    font-size: 12px;
    margin-left: 4px;
}
.seo-action-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-top: 1px solid var(--admin-border);
    padding-top: 20px;
}
.btn-seo-reset {
    background: transparent;
    border: 1px solid #CBD5E1;
    color: #64748B;
    padding: 10px 18px;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
}
.btn-seo-reset:hover {
    background: #F1F5F9;
    color: #1E293B;
}

/* --- Site Settings Component Styles (Extracted from site-settings/index.blade.php) --- */
.settings-master-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(420px, 1fr));
    gap: 24px;
    align-items: start;
}
.settings-card {
    background: #ffffff;
    border: 1px solid var(--admin-border);
    border-radius: 14px;
    padding: 24px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.03);
}
.settings-card-full {
    background: #ffffff;
    border: 1px solid var(--admin-border);
    border-radius: 14px;
    padding: 24px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.03);
    grid-column: 1 / -1;
}
.settings-card-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
    padding-bottom: 14px;
    border-bottom: 1px solid var(--admin-border);
}
.settings-card-icon {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
}
.settings-icon-navy {
    background: rgba(8, 59, 122, 0.1);
    color: var(--admin-navy);
}
.settings-icon-success {
    background: rgba(16, 185, 129, 0.1);
    color: var(--admin-success);
}
.settings-icon-info {
    background: rgba(2, 132, 199, 0.1);
    color: var(--admin-info);
}
.settings-icon-orange {
    background: rgba(243, 112, 33, 0.1);
    color: var(--admin-orange);
}
.settings-icon-purple {
    background: rgba(139, 92, 246, 0.1);
    color: #8B5CF6;
}
.settings-social-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 16px;
}
.settings-bottom-bar {
    margin-top: 24px;
    padding: 18px 24px;
    background: #ffffff;
    border: 1px solid var(--admin-border);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.settings-input-control {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid var(--admin-border);
    border-radius: 8px;
    font-size: 14px;
    font-family: inherit;
    transition: border-color 0.2s, box-shadow 0.2s;
}
.settings-input-control:focus {
    outline: none;
    border-color: var(--admin-navy);
    box-shadow: 0 0 0 3px rgba(8, 59, 122, 0.12);
}
.settings-textarea-control {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid var(--admin-border);
    border-radius: 8px;
    font-size: 14px;
    font-family: inherit;
    resize: vertical;
    transition: border-color 0.2s, box-shadow 0.2s;
}
.settings-textarea-control:focus {
    outline: none;
    border-color: var(--admin-navy);
    box-shadow: 0 0 0 3px rgba(8, 59, 122, 0.12);
}

CSS;

$fullAdminCss = "/* ==========================================================================\n"
    ."   ADVAITA ADMIN MASTER STYLESHEET (COMPILED - NO INLINE CSS)\n"
    ."   ========================================================================== */\n\n"
    ."/* --- Core Layout & Global Variables --- */\n"
    .$coreCss."\n\n"
    .$utilitiesCss."\n\n"
    .implode("\n\n", $viewCssBlocks)."\n";

file_put_contents('public/assets/css/admin.css', $fullAdminCss);
echo 'Created public/assets/css/admin.css ('.strlen($fullAdminCss)." bytes)\n";
