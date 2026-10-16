<?php

// 1. Add supporting CSS to public/assets/css/admin.css
$css = file_get_contents('public/assets/css/admin.css');

$extraCss = <<<'CSS'


/* ==========================================================================
   FINAL PASS REUSABLE CLASSES FOR ALL ADMIN MODULES
   ========================================================================== */

.font-bold { font-weight: 700 !important; }
.font-semibold { font-weight: 600 !important; }
.font-extrabold { font-weight: 800 !important; }

.fs-16 { font-size: 16px !important; }
.fs-22 { font-size: 22px !important; }

.mt-10 { margin-top: 10px !important; }
.mt-14 { margin-top: 14px !important; }
.mt-16 { margin-top: 16px !important; }
.mb-10 { margin-bottom: 10px !important; }
.mb-14 { margin-bottom: 14px !important; }
.pt-12 { padding-top: 12px !important; }

.border-t { border-top: 1px solid var(--admin-border) !important; }
.border-dashed-t { border-top: 1px dashed #CBD5E1 !important; }

.flex-2 { flex: 2 !important; }
.gap-2 { gap: 2px !important; }
.opacity-60 { opacity: 0.6 !important; }
.opacity-90 { opacity: 0.9 !important; }

.line-clamp-desc { line-height: 1.4 !important; max-width: 380px !important; }
.line-clamp-desc-lg { line-height: 1.5 !important; max-width: 580px !important; }

.btn-pad-xs { padding: 5px 8px !important; }
.btn-pad-sm { padding: 5px 10px !important; font-size: 12px !important; }
.btn-pad-md-sm { padding: 6px 14px !important; font-size: 12px !important; }
.btn-pad-lg { padding: 10px 14px !important; font-weight: 600 !important; }

.btn-reset-raw { background: none !important; border: none !important; padding: 0 !important; cursor: pointer !important; }
.text-hover-underline:hover { text-decoration: underline !important; }

.badge-blue-pill { background: #EFF6FF !important; color: #2563EB !important; border: 1px solid #BFDBFE !important; font-size: 11.5px !important; font-weight: 700 !important; padding: 2px 8px !important; border-radius: 12px !important; }
.visit-detail-box { background: #F8FAFC !important; padding: 14px !important; border-radius: 10px !important; border: 1px solid var(--admin-border) !important; }
.empty-state-avatar-lg { width: 56px !important; height: 56px !important; border-radius: 50% !important; background: #F1F5F9 !important; color: #94A3B8 !important; display: flex !important; align-items: center !important; justify-content: center !important; font-size: 24px !important; margin: 0 auto 16px auto !important; }
.max-w-380 { max-width: 380px !important; }
.mx-auto { margin-left: auto !important; margin-right: auto !important; }
.table-empty-pad { text-align: center !important; padding: 50px 20px !important; color: #94A3B8 !important; }
.empty-icon-lg { font-size: 38px !important; color: #CBD5E1 !important; margin-bottom: 12px !important; display: block !important; }

CSS;

if (! str_contains($css, 'FINAL PASS REUSABLE CLASSES')) {
    file_put_contents('public/assets/css/admin.css', $css.$extraCss);
}

// 2. Perform replacements on all 23 files
$files = [
    'resources/views/admin/why-choose/index.blade.php',
    'resources/views/admin/why-choose/create.blade.php',
    'resources/views/admin/why-choose/edit.blade.php',
    'resources/views/admin/pillars/index.blade.php',
    'resources/views/admin/pillars/create.blade.php',
    'resources/views/admin/pillars/edit.blade.php',
    'resources/views/admin/sliders/index.blade.php',
    'resources/views/admin/sliders/create.blade.php',
    'resources/views/admin/sliders/edit.blade.php',
    'resources/views/admin/gallery/index.blade.php',
    'resources/views/admin/gallery/create.blade.php',
    'resources/views/admin/gallery/edit.blade.php',
    'resources/views/admin/testimonials/index.blade.php',
    'resources/views/admin/testimonials/create.blade.php',
    'resources/views/admin/testimonials/edit.blade.php',
    'resources/views/admin/faqs/index.blade.php',
    'resources/views/admin/faqs/create.blade.php',
    'resources/views/admin/faqs/edit.blade.php',
    'resources/views/admin/inquiries/index.blade.php',
    'resources/views/admin/inquiries/show.blade.php',
    'resources/views/admin/registrations/index.blade.php',
    'resources/views/admin/registrations/show.blade.php',
    'resources/views/admin/campus-visit/index.blade.php',
];

$replacements = [
    'style="font-size: 13px; font-weight: 700; color: var(--admin-navy);"' => 'class="text-navy fs-13 font-bold"',
    'style="font-size: 13px; font-weight: 700; color: var(--admin-navy); margin-bottom: 4px;"' => 'class="text-navy fs-13 font-bold mb-4"',
    'style="font-size: 13px; font-weight: 700; color: var(--admin-navy); margin: 0 0 2px 0;"' => 'class="text-navy fs-13 font-bold mb-2"',
    'style="font-size: 13.5px; font-weight: 700; color: var(--admin-navy); margin: 0 0 2px 0;"' => 'class="text-navy fs-13 font-bold mb-2"',
    'style="font-size: 14.5px; font-weight: 800; color: var(--admin-navy); margin-bottom: 4px;"' => 'class="text-navy fs-14 font-extrabold mb-4"',
    'style="font-size: 15px; font-weight: 800; color: var(--admin-navy); margin: 0 0 6px 0;"' => 'class="text-navy fs-15 font-extrabold mb-6"',
    'style="font-weight: 800; font-size: 15px; color: var(--admin-navy); margin-bottom: 4px;"' => 'class="text-navy fs-15 font-extrabold mb-4"',
    'style="font-size: 16px; font-weight: 700; color: var(--admin-navy); margin-bottom: 6px;"' => 'class="text-navy fs-16 font-bold mb-6"',
    'style="font-size: 16px; font-weight: 800; color: var(--admin-navy); margin: 0; display: flex; align-items: center; gap: 8px;"' => 'class="text-navy fs-16 font-extrabold d-flex align-items-center gap-8 m-0"',
    'style="font-size: 22px; font-weight: 800; color: var(--admin-navy); margin-bottom: 4px;"' => 'class="text-navy fs-22 font-extrabold mb-4"',
    'style="color: var(--admin-navy); margin: 0 0 6px 0;"' => 'class="text-navy mb-6"',
    'style="font-size: 14px; color: var(--admin-navy);"' => 'class="text-navy fs-14"',
    'style="font-size: 12.5px; font-weight: 700; color: var(--admin-navy);"' => 'class="text-navy fs-12 font-bold"',
    'style="font-size: 12.5px; color: var(--admin-navy); margin-bottom: 6px;"' => 'class="text-navy fs-12 mb-6"',
    'style="font-size: 13px; color: #083B7A;"' => 'class="text-navy fs-13"',

    // Muted / descriptions
    'style="font-size: 11.5px; color: #64748B; margin: 0;"' => 'class="text-muted fs-11 m-0"',
    'style="font-size: 12px; color: #64748B; margin: 0;"' => 'class="text-muted fs-12 m-0"',
    'style="font-size: 12px; color: #64748B; margin-bottom: 12px;"' => 'class="text-muted fs-12 mb-12"',
    'style="font-size: 12px; color: #64748B; margin-top: 3px;"' => 'class="text-muted fs-12 mt-3"',
    'style="font-size: 12.5px; color: #64748B; line-height: 1.4; max-width: 380px;"' => 'class="text-muted fs-12 line-clamp-desc"',
    'style="font-size: 12.5px; color: #64748B; line-height: 1.5; flex: 1; margin: 0 0 14px 0;"' => 'class="text-muted fs-12 flex-1 mb-14"',
    'style="font-size: 13px; color: #64748B; line-height: 1.5; max-width: 580px;"' => 'class="text-muted fs-13 line-clamp-desc-lg"',
    'style="font-size: 13px; color: #64748B; margin-bottom: 12px;"' => 'class="text-muted fs-13 mb-12"',
    'style="font-size: 13px; color: #64748B; margin-bottom: 16px;"' => 'class="text-muted fs-13 mb-16"',
    'style="color: #64748B; font-size: 13.5px; margin: 0 0 16px 0;"' => 'class="text-muted fs-13 mb-16"',
    'style="font-size: 13.5px; color: #334155; line-height: 1.5; max-width: 540px;"' => 'class="text-slate fs-13 line-clamp-desc-lg"',
    'style="font-size: 13px; font-weight: 600; color: #1E293B;"' => 'class="text-dark fs-13 font-semibold"',
    'style="font-size: 12.5px; font-weight: 600; color: #475569;"' => 'class="text-slate fs-12 font-semibold"',
    'style="font-size: 11.5px; font-weight: 700; color: #475569; margin-bottom: 4px;"' => 'class="text-slate fs-11 font-bold mb-4"',
    'style="font-size: 11.5px; font-weight: 700; color: #64748B;"' => 'class="text-muted fs-11 font-bold"',
    'style="font-size: 13px; font-weight: 700; color: #64748B;"' => 'class="text-muted fs-13 font-bold"',
    'style="font-size: 10px; font-weight: 700; color: #64748B;"' => 'class="text-muted fs-10 font-bold"',
    'style="font-size: 11px; font-weight: 800; color: #64748B;"' => 'class="text-muted fs-11 font-extrabold"',
    'style="font-size: 10.5px; color: #64748B; font-weight: 600;"' => 'class="text-muted fs-10 font-semibold"',

    // Dates / secondary
    'style="font-size: 11.5px; color: #94A3B8;"' => 'class="text-muted fs-11"',
    'style="font-size: 11px; color: #94A3B8; margin-top: 3px;"' => 'class="text-muted fs-11 mt-3"',
    'style="font-size: 12px; color: #94A3B8; margin-top: 4px;"' => 'class="text-muted fs-12 mt-4"',
    'style="color: #94A3B8; font-size: 13px;"' => 'class="text-muted fs-13"',
    'style="font-size: 10px; opacity: 0.6;"' => 'class="fs-10 opacity-60"',
    'style="font-size: 10.5px; opacity: 0.9;"' => 'class="fs-10 opacity-90"',
    'style="font-size: 11px; color: #EF4444;"' => 'class="text-danger fs-11"',

    // Margins / Spacings
    'style="margin-top: 10px;"' => 'class="mt-10"',
    'style="margin-top: 14px;"' => 'class="mt-14"',
    'style="margin-bottom: 6px;"' => 'class="mb-6"',
    'style="margin-bottom: 10px;"' => 'class="mb-10"',
    'style="margin-bottom: 14px;"' => 'class="mb-14"',
    'style="margin-top: 16px; padding-top: 12px; border-top: 1px dashed #CBD5E1;"' => 'class="pt-12 mt-16 border-dashed-t"',
    'style="margin: 0; display: flex; gap: 8px;"' => 'class="m-0 d-flex gap-8"',
    'style="margin: 0; display: flex; gap: 8px; align-items: center;"' => 'class="m-0 d-flex gap-8 align-items-center"',

    // Flex layouts
    'style="display: flex; gap: 4px; flex-wrap: wrap;"' => 'class="d-flex gap-4 flex-wrap"',
    'style="display: flex; gap: 6px;"' => 'class="d-flex gap-6"',
    'style="display: flex; gap: 6px; margin-bottom: 8px;"' => 'class="d-flex gap-6 mb-8"',
    'style="display: flex; gap: 8px;"' => 'class="d-flex gap-8"',
    'style="display: flex; gap: 10px;"' => 'class="d-flex gap-10"',
    'style="display: flex; gap: 12px; align-items: center;"' => 'class="d-flex gap-12 align-items-center"',
    'style="display: flex; flex-direction: column; gap: 6px;"' => 'class="d-flex flex-column gap-6"',
    'style="display: flex; flex-direction: column; align-items: flex-start; gap: 2px;"' => 'class="d-flex flex-column align-items-start gap-2"',
    'style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid var(--admin-border); padding-top: 12px;"' => 'class="d-flex align-items-center justify-content-between border-t pt-12"',
    'style="display: flex; align-items: center; justify-content: space-between; margin-top: 14px;"' => 'class="d-flex align-items-center justify-content-between mt-14"',
    'style="display: flex; justify-content: flex-end;"' => 'class="d-flex justify-content-end"',
    'style="display: flex; justify-content: flex-end; margin-top: 10px;"' => 'class="d-flex justify-content-end mt-10"',
    'style="flex: 2;"' => 'class="flex-2"',

    // Table paddings & Buttons
    'style="padding: 5px 8px;"' => 'class="btn-pad-xs"',
    'style="padding: 5px 10px; font-size: 12px;"' => 'class="btn-pad-sm"',
    'style="padding: 6px 12px; font-size: 13px;"' => 'class="btn-pad-md-sm"',
    'style="padding: 6px 14px; font-size: 12px;"' => 'class="btn-pad-md-sm"',
    'style="padding: 10px 14px; font-weight: 600;"' => 'class="btn-pad-lg"',
    'style="color: inherit; text-decoration: none;"' => 'class="text-inherit-link"',
    'style="color: #0284C7; text-decoration: none;"' => 'class="text-info text-hover-underline"',
    'style="color: #64748B; text-decoration: none;"' => 'class="text-muted text-hover-underline"',
    'style="background: none; border: none; padding: 0; cursor: pointer;"' => 'class="btn-reset-raw"',

    // Badges & cards
    'style="background: #EFF6FF; color: #2563EB; border: 1px solid #BFDBFE; font-size: 11.5px; font-weight: 700; padding: 2px 8px; border-radius: 12px;"' => 'class="badge-blue-pill"',
    'style="background: #F8FAFC; padding: 14px; border-radius: 10px; border: 1px solid var(--admin-border);"' => 'class="visit-detail-box"',
    'style="width: 28px; height: 28px; border-radius: 50%; background: #0284C7; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 11px;"' => 'class="avatar-circle-sm"',
    'style="width: 56px; height: 56px; border-radius: 50%; background: #F1F5F9; color: #94A3B8; display: flex; align-items: center; justify-content: center; font-size: 24px; margin: 0 auto 16px auto;"' => 'class="empty-state-avatar-lg"',
    'style="max-width: 380px; margin: 0 auto; text-align: center;"' => 'class="max-w-380 mx-auto text-center"',
    'style="text-align: center; padding: 48px 20px; color: var(--admin-text-muted);"' => 'class="table-empty-pad"',
    'style="text-align: center; padding: 50px 20px; color: #94A3B8;"' => 'class="table-empty-pad"',
    'style="text-align: center; padding: 60px 20px;"' => 'class="table-empty-pad"',
    'style="font-size: 38px; color: #CBD5E1; margin-bottom: 12px; display: block;"' => 'class="empty-icon-lg"',
    'style="font-size: 40px; color: #CBD5E1; margin-bottom: 12px;"' => 'class="empty-icon-lg"',
    'style="font-size: 13.5px; margin-bottom: 16px;"' => 'class="fs-13 mb-16"',
    'style="font-size: 11px;"' => 'class="fs-11"',
    'style="font-size: 12px;"' => 'class="fs-12"',
    'style="font-size: 13px;"' => 'class="fs-13"',
    'style="font-size: 15px;"' => 'class="fs-15"',
];

foreach ($files as $filePath) {
    if (! file_exists($filePath)) {
        continue;
    }
    $c = file_get_contents($filePath);
    foreach ($replacements as $target => $replacement) {
        $c = str_replace($target, $replacement, $c);
    }
    // Clean up any double class="... class="..."
    $c = preg_replace('/class="([^"]+)"\s+class="([^"]+)"/i', 'class="$1 $2"', $c);
    file_put_contents($filePath, $c);
}

echo "Completed final pass replacements across 23 admin files\n";
