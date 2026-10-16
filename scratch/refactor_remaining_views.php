<?php

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

// Common replacement patterns across all files
$commonMap = [
    // Widths
    'style="width: 60px; text-align: center;"' => 'class="col-w60 text-center"',
    'style="width: 80px;"' => 'class="col-w80"',
    'style="width: 90px;"' => 'class="col-w90"',
    'style="width: 100px;"' => 'class="col-w100"',
    'style="width: 110px; text-align: center;"' => 'class="col-w110 text-center"',
    'style="width: 110px; text-align: right;"' => 'class="col-w110 text-right"',
    'style="width: 120px;"' => 'class="col-w120"',
    'style="width: 120px; text-align: center;"' => 'class="col-w120 text-center"',
    'style="width: 120px; text-align: right;"' => 'class="col-w120 text-right"',
    'style="width: 130px;"' => 'class="col-w130"',
    'style="width: 140px;"' => 'class="col-w140"',
    'style="width: 150px;"' => 'class="col-w150"',
    'style="width: 160px;"' => 'class="col-w160"',
    'style="width: 180px;"' => 'class="col-w180"',
    'style="width: 200px;"' => 'class="col-w200"',
    'style="width: 220px;"' => 'class="col-w220"',
    'style="width: 250px;"' => 'class="col-w250"',
    'style="width: 260px;"' => 'class="col-w260"',
    'style="width: 280px;"' => 'class="col-w280"',
    'style="text-align: center;"' => 'class="text-center"',
    'style="text-align: right;"' => 'class="text-right"',
    'style="margin: 0;"' => 'class="m-0"',
    'style="margin-bottom: 0;"' => 'class="mb-0"',
    'style="display: none;"' => 'class="d-none"',
    'style="display: inline-flex;"' => 'class="d-inline-flex"',
    'style="justify-content: flex-end;"' => 'class="justify-content-end"',
    'style="max-width: 900px;"' => 'class="form-card-max900"',

    // Form elements & typography
    'style="font-size: 18px; font-weight: 800; color: var(--admin-navy); margin-bottom: 20px; display: flex; align-items: center; gap: 10px;"' => 'class="form-section-title"',
    'style="display: flex; justify-content: flex-end; gap: 12px; margin-top: 24px; padding-top: 20px; border-top: 1px solid var(--admin-border);"' => 'class="form-action-footer"',
    'style="font-size: 12px; color: #EF4444; font-weight: 600;"' => 'class="form-error-msg"',
    'style="font-size: 12px; color: #EF4444; font-weight: 600; margin-top: 6px;"' => 'class="form-error-msg"',
    'style="font-size: 14px; font-weight: 700; color: var(--admin-navy); margin-bottom: 4px;"' => 'class="form-switch-label mb-4"',
    'style="font-size: 14px; font-weight: 700; color: var(--admin-navy); margin: 0 0 4px 0;"' => 'class="form-switch-label mb-4"',
    'style="font-size: 14px; font-weight: 700; color: var(--admin-navy);"' => 'class="form-switch-label"',
    'style="display: flex; align-items: center; gap: 10px; cursor: pointer; user-select: none;"' => 'class="form-switch-wrap"',
    'style="display: flex; align-items: center; gap: 10px; margin-top: 8px;"' => 'class="d-flex align-items-center gap-10 mt-8"',
    'style="font-size: 11.5px; color: #94A3B8; text-align: center; margin: 14px 0 0 0;"' => 'class="text-muted text-center fs-11 mt-14"',

    'style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin-bottom: 16px;"' => 'class="card-subgrid-2col mb-16"',
    'style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin-bottom: 20px;"' => 'class="card-grid-260"',
    'style="font-size: 12.5px; font-weight: 700; color: var(--admin-navy); display: block; margin-bottom: 6px;"' => 'class="form-label-bold"',
    'style="font-size: 12.5px; font-weight: 700; color: var(--admin-orange); display: block; margin-bottom: 6px;"' => 'class="form-label-orange"',
    'style="width: 100%; padding: 9px 12px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13.5px;"' => 'class="form-input-clean"',
    'style="width: 100%; padding: 9px 12px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13.5px; resize: vertical;"' => 'class="form-textarea-clean"',
    'style="width: 100%; padding: 8px 12px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13px;"' => 'class="form-input-clean"',
    'style="margin-bottom: 16px;"' => 'class="mb-16"',
    'style="margin-bottom: 20px;"' => 'class="mb-20"',
    'style="margin-bottom: 22px;"' => 'class="mb-22"',
    'style="margin-bottom: 24px;"' => 'class="mb-24"',
    'style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 12px; pt-2;"' => 'class="filter-bar-wrap"',
    'style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 12px;"' => 'class="filter-bar-wrap"',
    'style="display: flex; gap: 12px; flex: 1; max-width: 600px;"' => 'class="filter-bar-inputs"',
    'style="background: var(--admin-navy); color: #ffffff; border: none; padding: 9px 20px; border-radius: 8px; font-weight: 700; font-size: 13px; cursor: pointer;"' => 'class="btn-filter-submit"',

    // Colors & Icons
    'style="color: var(--admin-navy);"' => 'class="text-navy"',
    'style="color: var(--admin-navy); font-size: 14px;"' => 'class="text-navy fs-14"',
    'style="color: var(--admin-navy); font-size: 13.5px;"' => 'class="text-navy fs-13"',
    'style="color: var(--admin-navy); font-size: 15px;"' => 'class="text-navy fs-15"',
    'style="color: var(--admin-orange);"' => 'class="text-orange"',
    'style="color: var(--admin-orange); font-size: 14px;"' => 'class="text-orange fs-14"',
    'style="font-size: 28px; color: var(--admin-orange); margin-bottom: 6px;"' => 'class="fs-28 text-orange mb-6"',
    'style="font-size: 24px; color: var(--admin-orange); margin-bottom: 4px;"' => 'class="fs-24 text-orange mb-4"',
    'style="font-size: 24px; color: var(--admin-orange); margin-bottom: 6px;"' => 'class="fs-24 text-orange mb-6"',
    'style="font-size: 14px; color: #F59E0B;"' => 'class="fs-14 text-warning"',
    'style="color: #94A3B8;"' => 'class="text-muted"',
    'style="color: #64748B;"' => 'class="text-muted"',
    'style="font-size: 11.5px; color: #64748B;"' => 'class="td-sub-muted"',
    'style="font-size: 11px; color: #94A3B8;"' => 'class="td-date-muted"',
    'style="font-size: 12px; color: #94A3B8;"' => 'class="td-date-muted"',
    'style="font-size: 13px; color: #64748B;"' => 'class="text-muted"',
    'style="font-size: 10px;"' => 'class="fs-10"',
    'style="font-size: 8px;"' => 'class="fs-8"',

    // Empty state
    'style="grid-column: 1 / -1; padding: 60px; text-align: center; background: #ffffff; border: 1px dashed var(--admin-border); border-radius: 16px;"' => 'class="admin-empty-dashed-box"',
    'style="padding: 60px; text-align: center; background: #ffffff; border: 1px dashed var(--admin-border); border-radius: 16px;"' => 'class="admin-empty-dashed-box"',

    // Inquiries notices
    'style="background: #FFF7ED; border: 1px solid #FED7AA; border-radius: 12px; padding: 18px;"' => 'class="notice-box-orange"',
    'style="font-size: 13.5px; color: #C2410C; display: block; margin-bottom: 12px;"' => 'class="text-orange fs-13 d-block mb-12"',
    'style="background: #F0FDF4; border: 1px solid #BBF7D0; border-radius: 12px; padding: 18px;"' => 'class="notice-box-green"',
    'style="font-size: 13.5px; color: #15803D; display: block; margin-bottom: 12px;"' => 'class="text-success fs-13 d-block mb-12"',
    'style="border: none; border-top: 1px solid var(--admin-border); margin: 16px 0;"' => 'class="divider-subtle"',
    'style="width: 100%; justify-content: center; background: #334155;"' => 'class="btn-dark-slate"',
];

foreach ($files as $filePath) {
    if (! file_exists($filePath)) {
        continue;
    }
    $content = file_get_contents($filePath);

    // 1. Remove @section('styles') ... @endsection
    $content = preg_replace('/@section\(\'styles\'\)\s*<style>.*?<\/style>\s*@endsection/is', '', $content);
    $content = preg_replace('/<style>.*?<\/style>/is', '', $content);

    // 2. Apply theme pills & gradients in why-choose and pillars
    $content = preg_replace(
        '/class="badge-number-chip"\s+style="background:\s*\{\{\s*\$themeInfo\[\'gradient\'\]\s*\}\};"/i',
        'class="badge-number-chip theme-gradient-{{ $card->theme_color ?? \'orange\' }}"',
        $content
    );
    $content = preg_replace(
        '/class="theme-color-pill"\s+style="background:\s*\{\{\s*\$themeInfo\[\'badge\'\]\s*\}\}18;\s*color:\s*\{\{\s*\$themeInfo\[\'badge\'\]\s*\}\};\s*border:\s*1px solid\s*\{\{\s*\$themeInfo\[\'badge\'\]\s*\}\}35;"/i',
        'class="theme-color-pill theme-badge-{{ $card->theme_color ?? \'orange\' }}"',
        $content
    );
    $content = preg_replace(
        '/<span\s+style="width:\s*8px;\s*height:\s*8px;\s*border-radius:\s*50%;\s*background:\s*\{\{\s*\$themeInfo\[\'badge\'\]\s*\}\};"><\/span>/i',
        '<span class="theme-dot theme-dot-{{ $card->theme_color ?? \'orange\' }}"></span>',
        $content
    );
    $content = preg_replace(
        '/<span\s+style="width:\s*7px;\s*height:\s*7px;\s*border-radius:\s*50%;\s*background:\s*\{\{\s*\$themeInfo\[\'badge\'\]\s*\}\};"><\/span>/i',
        '<span class="theme-dot-sm theme-dot-{{ $card->theme_color ?? \'orange\' }}"></span>',
        $content
    );
    $content = preg_replace(
        '/class="btn-action-view"\s+style="background:\s*\{\{\s*\$card->is_active\s*\?\s*\'#DCFCE7\'\s*:\s*\'#F1F5F9\'\s*\}\};\s*color:\s*\{\{\s*\$card->is_active\s*\?\s*\'#15803D\'\s*:\s*\'#64748B\'\s*\}\};\s*border-color:\s*\{\{\s*\$card->is_active\s*\?\s*\'#86EFAC\'\s*:\s*\'#E2E8F0\'\s*\}\};\s*border-radius:\s*20px;\s*padding:\s*5px 12px;\s*font-size:\s*12px;"/i',
        'class="btn-action-view btn-status-toggle {{ $card->is_active ? \'is-active\' : \'is-inactive\' }}"',
        $content
    );
    $content = preg_replace(
        '/class="btn-action-view"\s+style="background:\s*\{\{\s*\$item->is_active\s*\?\s*\'#DCFCE7\'\s*:\s*\'#F1F5F9\'\s*\}\};\s*color:\s*\{\{\s*\$item->is_active\s*\?\s*\'#15803D\'\s*:\s*\'#64748B\'\s*\}\};\s*border-color:\s*\{\{\s*\$item->is_active\s*\?\s*\'#86EFAC\'\s*:\s*\'#E2E8F0\'\s*\}\};\s*border-radius:\s*20px;\s*padding:\s*5px 12px;\s*font-size:\s*12px;"/i',
        'class="btn-action-view btn-status-toggle {{ $item->is_active ? \'is-active\' : \'is-inactive\' }}"',
        $content
    );
    $content = preg_replace(
        '/class="btn-action-view"\s+style="background:\s*\{\{\s*\$pillar->is_active\s*\?\s*\'#DCFCE7\'\s*:\s*\'#F1F5F9\'\s*\}\};\s*color:\s*\{\{\s*\$pillar->is_active\s*\?\s*\'#15803D\'\s*:\s*\'#64748B\'\s*\}\};\s*border-color:\s*\{\{\s*\$pillar->is_active\s*\?\s*\'#86EFAC\'\s*:\s*\'#E2E8F0\'\s*\}\};\s*border-radius:\s*20px;\s*padding:\s*5px 12px;\s*font-size:\s*12px;"/i',
        'class="btn-action-view btn-status-toggle {{ $pillar->is_active ? \'is-active\' : \'is-inactive\' }}"',
        $content
    );

    // Color picker radios in create / edit
    $content = preg_replace(
        '/style="background:\s*\{\{\s*\$colorConfig\[\'badge\'\]\s*\}\};"/i',
        'class="theme-dot theme-dot-{{ $colorKey }}"',
        $content
    );

    // 3. Apply common replacements
    foreach ($commonMap as $target => $replacement) {
        $content = str_replace($target, $replacement, $content);
    }

    file_put_contents($filePath, $content);
    echo 'Processed '.basename(dirname($filePath)).'/'.basename($filePath)."\n";
}
