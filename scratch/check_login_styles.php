<?php

$lines = file('resources/views/admin/login.blade.php');
foreach ($lines as $i => $l) {
    if (preg_match_all('/\bstyle\s*=\s*["\'][^"\']*["\']/i', $l, $m)) {
        echo ($i + 1).': '.trim($l)."\n";
    }
}
