<?php

$dir = 'resources/views/admin';
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

$sections = [];

foreach ($iterator as $file) {
    if ($file->isFile() && str_ends_with($file->getFilename(), '.blade.php')) {
        $path = str_replace('\\', '/', $file->getPathname());
        $content = file_get_contents($file->getPathname());
        if (preg_match('/<style\b[^>]*>(.*?)<\/style>/is', $content, $m)) {
            $sections[$path] = trim($m[1]);
        }
    }
}

echo "Found " . count($sections) . " admin views with <style> blocks:\n";
foreach ($sections as $p => $css) {
    echo "$p: " . strlen($css) . " bytes\n";
}
