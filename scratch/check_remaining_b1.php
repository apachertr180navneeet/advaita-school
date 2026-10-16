<?php

$files = [
    'resources/views/admin/pages/index.blade.php',
    'resources/views/admin/seo/index.blade.php',
    'resources/views/admin/site-settings/index.blade.php',
];
foreach ($files as $f) {
    echo "=== $f ===\n";
    $lines = file($f);
    foreach ($lines as $i => $l) {
        if (preg_match_all('/\bstyle\s*=\s*["\'][^"\']*["\']/i', $l, $m)) {
            foreach ($m[0] as $match) {
                echo ($i + 1).": $match\n   ".trim($l)."\n";
            }
        }
    }
}
