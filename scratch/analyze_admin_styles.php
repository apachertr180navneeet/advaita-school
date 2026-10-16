<?php

$dir = 'resources/views/admin';
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
$styles = [];

foreach ($iterator as $file) {
    if ($file->isFile() && str_ends_with($file->getFilename(), '.blade.php')) {
        $content = file_get_contents($file->getPathname());
        if (preg_match_all('/\bstyle\s*=\s*["\']([^"\']+)["\']/i', $content, $m)) {
            foreach ($m[1] as $s) {
                $trimmed = trim($s);
                $styles[$trimmed] = ($styles[$trimmed] ?? 0) + 1;
            }
        }
    }
}

// Also check layouts/admin.blade.php
$content = file_get_contents('resources/views/layouts/admin.blade.php');
if (preg_match_all('/\bstyle\s*=\s*["\']([^"\']+)["\']/i', $content, $m)) {
    foreach ($m[1] as $s) {
        $trimmed = trim($s);
        $styles[$trimmed] = ($styles[$trimmed] ?? 0) + 1;
    }
}

arsort($styles);
echo 'TOTAL DISTINCT INLINE STYLES IN ADMIN: '.count($styles)."\n\n";
foreach ($styles as $s => $count) {
    echo "($count) $s\n";
}
