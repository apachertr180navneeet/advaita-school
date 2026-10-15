<?php

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('resources/views'));

$totalFiles = 0;
$styleTagMatches = [];
$styleAttrMatches = [];

foreach ($iterator as $file) {
    if ($file->isFile() && str_ends_with($file->getFilename(), '.blade.php')) {
        $totalFiles++;
        $content = file_get_contents($file->getPathname());
        $path = str_replace('\\', '/', $file->getPathname());

        if (preg_match_all('/<style\b[^>]*>/i', $content, $m)) {
            $styleTagMatches[$path] = count($m[0]);
        }
        if (preg_match_all('/\bstyle\s*=\s*["\'][^"\']*["\']/i', $content, $m)) {
            $styleAttrMatches[$path] = count($m[0]);
        }
    }
}

echo "TOTAL BLADE FILES SCANNED: $totalFiles\n";
echo "FILES WITH <style> TAGS: " . count($styleTagMatches) . "\n";
echo "FILES WITH style= ATTRIBUTES: " . count($styleAttrMatches) . "\n";

if (!empty($styleTagMatches)) {
    print_r($styleTagMatches);
}
if (!empty($styleAttrMatches)) {
    print_r($styleAttrMatches);
}
