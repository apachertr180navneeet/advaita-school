<?php

$file = 'resources/views/admin/pages/index.blade.php';
$lines = file($file);
foreach ($lines as $idx => $line) {
    if (preg_match_all('/\bstyle\s*=\s*["\'][^"\']*["\']/i', $line, $matches)) {
        foreach ($matches[0] as $m) {
            echo ($idx + 1) . ": $m\n";
        }
    }
}
