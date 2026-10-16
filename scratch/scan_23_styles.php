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

$allInlineStyles = [];

foreach ($files as $f) {
    $lines = file($f);
    $inStyleTag = false;
    foreach ($lines as $i => $l) {
        if (str_contains($l, '<style')) {
            $inStyleTag = true;
        }
        if (str_contains($l, '</style>')) {
            $inStyleTag = false;

            continue;
        }
        if (! $inStyleTag && preg_match_all('/\bstyle\s*=\s*["\']([^"\']+)["\']/i', $l, $m)) {
            foreach ($m[1] as $s) {
                $trimmed = trim($s);
                $allInlineStyles[$trimmed][] = basename($f).':'.($i + 1);
            }
        }
    }
}

echo 'Total unique inline styles outside of <style> blocks in 23 files: '.count($allInlineStyles)."\n\n";
arsort($allInlineStyles);
foreach ($allInlineStyles as $s => $locs) {
    echo '('.count($locs).") [$s] e.g. ".$locs[0]."\n";
}
