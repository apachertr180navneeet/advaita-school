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
                $styles[$trimmed][] = basename(dirname($file->getPathname())) . '/' . basename($file->getPathname());
            }
        }
    }
}

arsort($styles);
echo "REMAINING INLINE STYLES: " . count($styles) . " unique\n\n";
foreach ($styles as $s => $files) {
    echo "(" . count($files) . ") [$s] in " . $files[0] . "\n";
}
