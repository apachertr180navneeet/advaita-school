<?php
$files = [
    'resources/views/admin/why-choose/index.blade.php',
    'resources/views/admin/why-choose/create.blade.php',
    'resources/views/admin/gallery/index.blade.php',
];
foreach ($files as $f) {
    echo "=== $f ===\n";
    $lines = file($f);
    foreach ($lines as $i => $l) {
        if (preg_match_all('/\bstyle\s*=\s*["\'][^"\']*["\']/i', $l, $m)) {
            foreach ($m[0] as $match) {
                echo ($i + 1) . ": $match\n   " . trim($l) . "\n";
            }
        }
    }
}
