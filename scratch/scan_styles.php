<?php

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('resources/views'));

$frontendFiles = [];
$adminFiles = [];

foreach ($iterator as $file) {
    if ($file->isFile() && str_ends_with($file->getFilename(), '.blade.php')) {
        $path = str_replace('\\', '/', $file->getPathname());
        $lines = file($file->getPathname());
        $styleAttrMatches = [];
        $styleTagMatches = [];

        foreach ($lines as $idx => $line) {
            $lineNum = $idx + 1;
            if (preg_match('/<style\b[^>]*>/i', $line)) {
                $styleTagMatches[] = ['line' => $lineNum, 'content' => trim($line)];
            }
            if (preg_match_all('/\bstyle\s*=\s*["\'][^"\']*["\']/i', $line, $matches)) {
                foreach ($matches[0] as $match) {
                    $styleAttrMatches[] = ['line' => $lineNum, 'match' => $match, 'content' => trim($line)];
                }
            }
        }

        if (! empty($styleTagMatches) || ! empty($styleAttrMatches)) {
            $record = [
                'file' => $path,
                'tags' => $styleTagMatches,
                'attrs' => $styleAttrMatches,
            ];
            if (str_starts_with($path, 'resources/views/admin/')) {
                $adminFiles[] = $record;
            } else {
                $frontendFiles[] = $record;
            }
        }
    }
}

echo '=== FRONTEND FILES ('.count($frontendFiles).") ===\n";
foreach ($frontendFiles as $f) {
    echo "\nFile: {$f['file']}\n";
    if (! empty($f['tags'])) {
        echo "  <style> tags:\n";
        foreach ($f['tags'] as $t) {
            echo "    L{$t['line']}: {$t['content']}\n";
        }
    }
    if (! empty($f['attrs'])) {
        echo '  style= attributes ('.count($f['attrs'])."):\n";
        foreach ($f['attrs'] as $a) {
            echo "    L{$a['line']}: {$a['match']}\n";
        }
    }
}

echo "\n\n=== ADMIN FILES SUMMARY (".count($adminFiles).") ===\n";
foreach ($adminFiles as $f) {
    echo "{$f['file']}: ".count($f['tags']).' style tags, '.count($f['attrs'])." style attrs\n";
}
