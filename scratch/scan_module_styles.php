<?php

$files = glob('resources/views/admin/**/*.blade.php');
$distinctStyles = [];

foreach ($files as $f) {
    if (in_array(basename($f), ['dashboard.blade.php', 'login.blade.php', 'index.blade.php'])) {
        // We already know about dashboard, login, and pages/index
    }
    $lines = file($f);
    foreach ($lines as $i => $l) {
        if (preg_match_all('/\bstyle\s*=\s*["\']([^"\']+)["\']/i', $l, $m)) {
            foreach ($m[1] as $val) {
                $distinctStyles[trim($val)][] = basename(dirname($f)) . '/' . basename($f) . ':' . ($i + 1);
            }
        }
    }
}

echo "Total distinct inline styles in modules: " . count($distinctStyles) . "\n\n";
foreach ($distinctStyles as $style => $locs) {
    echo "[$style] (" . count($locs) . " times) e.g. " . $locs[0] . "\n";
}
