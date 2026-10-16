<?php

// 1. Append needed CSS classes to admin.css
$css = file_get_contents('public/assets/css/admin.css');
$additions = <<<'CSS'


/* Final Phase Cleanups */
.checkbox-orange { width: 18px !important; height: 18px !important; accent-color: var(--admin-orange) !important; cursor: pointer !important; }
.w-fit { width: fit-content !important; }
.d-inline { display: inline !important; }
.pb-30 { padding-bottom: 30px !important; }
.cursor-pointer { cursor: pointer !important; }
.alert-danger-box { background: #FEF2F2 !important; border: 1px solid #FECACA !important; border-radius: 12px !important; padding: 16px 20px !important; margin-bottom: 24px !important; color: #991B1B !important; }
.ml-20 { margin-left: 20px !important; }
.text-blue { color: #3B82F6 !important; }
.form-section-header-navy { font-size: 16px !important; font-weight: 800 !important; color: var(--admin-navy) !important; margin-bottom: 20px !important; display: flex !important; align-items: center !important; gap: 8px !important; }

CSS;

if (! str_contains($css, 'Final Phase Cleanups')) {
    file_put_contents('public/assets/css/admin.css', $css.$additions);
}

// 2. Scan and clean all admin blade files
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('resources/views/admin'));

$replacements = [
    'style="color: #EF4444;"' => 'class="text-danger"',
    'style="font-size: 16px; font-weight: 800; color: var(--admin-navy); margin-bottom: 20px; display: flex; align-items: center; gap: 8px;"' => 'class="form-section-header-navy"',
    'style="font-size: 12px; color: #64748B;"' => 'class="text-muted fs-12"',
    'style="display: inline;"' => 'class="d-inline"',
    'style="width: 18px; height: 18px; accent-color: var(--admin-orange);"' => 'class="checkbox-orange"',
    'style="font-size: 11.5px; color: #EF4444;"' => 'class="form-error-msg"',
    'style="font-size: 13.5px; color: var(--admin-text-muted);"' => 'class="text-muted fs-13"',
    'style="padding-bottom: 30px;"' => 'class="pb-30"',
    'style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;"' => 'class="d-flex align-items-center justify-content-between mb-20"',
    'style="justify-content: center;"' => 'class="justify-content-center"',
    'style="font-size: 13.5px; font-weight: 600; color: var(--admin-navy); cursor: pointer;"' => 'class="text-navy font-semibold cursor-pointer fs-13"',
    'style="display: flex; align-items: center; gap: 12px;"' => 'class="d-flex align-items-center gap-12"',
    'style="margin-bottom: 12px;"' => 'class="mb-12"',
    'style="display: flex; flex-wrap: wrap; gap: 4px;"' => 'class="d-flex flex-wrap gap-4"',
    'style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px;"' => 'class="d-flex align-items-center justify-content-between mb-24"',
    'style="font-size: 22px; font-weight: 800; color: var(--admin-navy);"' => 'class="text-navy fs-22 font-extrabold"',
    'style="background: #FEF2F2; border: 1px solid #FECACA; border-radius: 12px; padding: 16px 20px; margin-bottom: 24px; color: #991B1B;"' => 'class="alert-danger-box"',
    'style="font-weight: 700; font-size: 14px; margin-bottom: 6px;"' => 'class="font-bold fs-14 mb-6"',
    'style="margin-left: 20px; font-size: 13px;"' => 'class="ml-20 fs-13"',
    'style="font-size: 11.5px; color: #3B82F6;"' => 'class="text-blue fs-11"',
    'style="font-weight: 700;"' => 'class="font-bold"',
    'style="display: inline-flex; align-items: center; gap: 6px;"' => 'class="d-inline-flex align-items-center gap-6"',
    'style="flex: 1;"' => 'class="flex-1"',
    'style="font-size: 11.5px; color: #EF4444; margin-top: 4px;"' => 'class="form-error-msg"',
    'style="font-size: 12.5px; color: #64748B;"' => 'class="text-muted fs-12"',
    'style="display: flex; gap: 10px; align-items: center;"' => 'class="d-flex align-items-center gap-10"',
    'style="display: flex; align-items: center; gap: 10px; margin-top: 6px;"' => 'class="d-flex align-items-center gap-10 mt-6"',
    'style="font-size: 16px; color: var(--admin-navy); margin-bottom: 6px;"' => 'class="text-navy fs-16 mb-6"',
    'style="display: flex; align-items: center; gap: 8px;"' => 'class="d-flex align-items-center gap-8"',
];

foreach ($iterator as $file) {
    if ($file->isFile() && str_ends_with($file->getFilename(), '.blade.php')) {
        $filePath = $file->getPathname();
        $content = file_get_contents($filePath);

        // Dynamic theme pills in cards/grids
        $content = preg_replace(
            '/class="visual-card-badge"\s+style="background:\s*\{\{\s*\$themeInfo\[\'gradient\'\]\s*\}\};"/i',
            'class="visual-card-badge theme-gradient-{{ $card->theme_color ?? \'orange\' }}"',
            $content
        );
        $content = preg_replace(
            '/class="theme-color-pill"\s+style="background:\s*\{\{\s*\$themeInfo\[\'badge\'\]\s*\}\}18;\s*color:\s*\{\{\s*\$themeInfo\[\'badge\'\]\s*\}\};\s*border:\s*1px solid\s*\{\{\s*\$themeInfo\[\'badge\'\]\s*\}\}35;\s*width:\s*fit-content;\s*margin-bottom:\s*8px;"/i',
            'class="theme-color-pill theme-badge-{{ $card->theme_color ?? \'orange\' }} w-fit mb-8"',
            $content
        );
        $content = preg_replace(
            '/<span\s+style="font-size:\s*12px;\s*font-weight:\s*700;\s*color:\s*\{\{\s*\$card->is_active\s*\?\s*\'#15803D\'\s*:\s*\'#64748B\'\s*\}\};">/i',
            '<span class="fs-12 font-bold {{ $card->is_active ? \'text-success\' : \'text-muted\' }}">',
            $content
        );
        $content = preg_replace(
            '/<span\s+style="font-size:\s*12px;\s*font-weight:\s*700;\s*color:\s*\{\{\s*\$item->is_active\s*\?\s*\'#15803D\'\s*:\s*\'#64748B\'\s*\}\};">/i',
            '<span class="fs-12 font-bold {{ $item->is_active ? \'text-success\' : \'text-muted\' }}">',
            $content
        );
        $content = preg_replace(
            '/class="color-swatch-circle"\s+style="background:\s*\{\{\s*\$colorConfig\[\'gradient\'\]\s*\}\};"/i',
            'class="color-swatch-circle theme-gradient-{{ $colorKey }}"',
            $content
        );

        foreach ($replacements as $target => $rep) {
            $content = str_replace($target, $rep, $content);
        }

        // Clean up double classes e.g. class="foo" class="bar" -> class="foo bar"
        $content = preg_replace('/class="([^"]+)"\s+class="([^"]+)"/i', 'class="$1 $2"', $content);

        file_put_contents($filePath, $content);
    }
}

echo "Completed elimination pass across all admin files\n";
