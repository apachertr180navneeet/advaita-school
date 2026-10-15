<?php
$lines = file('resources/views/admin/dashboard.blade.php');
foreach ($lines as $idx => $line) {
    if (preg_match_all('/\bstyle\s*=\s*["\']([^"\']+)["\']/i', $line, $m)) {
        foreach ($m[1] as $match) {
            echo ($idx + 1) . ": $match\n";
        }
    }
}
