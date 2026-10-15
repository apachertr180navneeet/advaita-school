<?php

// 1. admin/pages/index.blade.php
$path = 'resources/views/admin/pages/index.blade.php';
$c = file_get_contents($path);
$c = str_replace('<div class="fgc-icon" style="color: var(--admin-orange); background: rgba(243, 112, 33, 0.1);">', '<div class="fgc-icon icon-badge-orange">', $c);
$c = str_replace('<div class="field-group-card" style="border-left: 4px solid var(--admin-orange);">', '<div class="field-group-card panel-card-accent-orange">', $c);
file_put_contents($path, $c);

// 2. admin/seo/index.blade.php
$path = 'resources/views/admin/seo/index.blade.php';
$c = file_get_contents($path);
$c = str_replace('class="btn-action-view" style="padding: 10px 18px;"', 'class="btn-action-view btn-pad-md"', $c);
$c = str_replace('<div class="seo-layout-grid" style="display: grid; grid-template-columns: 310px 1fr; gap: 24px; align-items: start;">', '<div class="seo-layout-grid seo-master-grid">', $c);
file_put_contents($path, $c);

// 3. admin/site-settings/index.blade.php
$path = 'resources/views/admin/site-settings/index.blade.php';
$c = file_get_contents($path);
$c = str_replace('class="btn-action-view" style="padding: 10px 18px;"', 'class="btn-action-view btn-pad-md"', $c);
$c = str_replace('<span style="font-size: 13px; color: var(--admin-text-muted);">', '<span class="text-muted">', $c);
file_put_contents($path, $c);

// Also add .btn-pad-md { padding: 10px 18px !important; } and .mr-6, .mr-4 to admin.css
$css = file_get_contents('public/assets/css/admin.css');
$css .= "\n.btn-pad-md { padding: 10px 18px !important; }\n.mr-4 { margin-right: 4px !important; }\n.mr-6 { margin-right: 6px !important; }\n";
file_put_contents('public/assets/css/admin.css', $css);

echo "Fixed remaining styles in pages, seo, site-settings\n";
