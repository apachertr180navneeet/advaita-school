<?php

// 1. layouts/admin.blade.php
$path = 'resources/views/layouts/admin.blade.php';
$content = file_get_contents($path);

// Replace style tag with link
$content = preg_replace(
    '/<style>.*?<\/style>/is',
    '<link rel="stylesheet" href="{{ asset(\'assets/css/admin.css\') }}?v={{ file_exists(public_path(\'assets/css/admin.css\')) ? filemtime(public_path(\'assets/css/admin.css\')) : \'1.0\' }}">',
    $content
);

// Replace 7 inline styles
$content = str_replace(
    '<span class="nav-badge" style="background: rgba(2, 132, 199, 0.2); color: #38BDF8; border-color: rgba(2, 132, 199, 0.4);">9 Pages</span>',
    '<span class="nav-badge nav-badge-sky">9 Pages</span>',
    $content
);
$content = str_replace(
    '<span class="nav-badge" style="background: rgba(16, 185, 129, 0.2); color: #34D399; border-color: rgba(16, 185, 129, 0.4);">16 Pages</span>',
    '<span class="nav-badge nav-badge-emerald">16 Pages</span>',
    $content
);
$content = str_replace(
    '<i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 11px; margin-left: auto;"></i>',
    '<i class="fa-solid fa-arrow-up-right-from-square nav-external-icon"></i>',
    $content
);
$content = str_replace(
    '<form action="{{ route(\'admin.logout\') }}" method="POST" style="margin: 0;">',
    '<form action="{{ route(\'admin.logout\') }}" method="POST" class="m-0">',
    $content
);
$content = str_replace(
    '<i class="fa-solid fa-circle-check" style="font-size: 18px; margin-top: 1px;"></i>',
    '<i class="fa-solid fa-circle-check flash-toast-icon"></i>',
    $content
);
$content = str_replace(
    '<i class="fa-solid fa-circle-exclamation" style="font-size: 18px; margin-top: 1px;"></i>',
    '<i class="fa-solid fa-circle-exclamation flash-toast-icon"></i>',
    $content
);

file_put_contents($path, $content);
echo "Updated layouts/admin.blade.php\n";

// 2. admin/login.blade.php
$path = 'resources/views/admin/login.blade.php';
$content = file_get_contents($path);

// Replace style tag with link
$content = preg_replace(
    '/<style>.*?<\/style>/is',
    '<link rel="stylesheet" href="{{ asset(\'assets/css/admin-login.css\') }}?v={{ file_exists(public_path(\'assets/css/admin-login.css\')) ? filemtime(public_path(\'assets/css/admin-login.css\')) : \'1.0\' }}">',
    $content
);

// Replace 2 inline styles
$content = str_replace(
    '<i class="fa-solid fa-circle-exclamation" style="margin-top: 2px;"></i>',
    '<i class="fa-solid fa-circle-exclamation login-alert-icon"></i>',
    $content
);
$content = str_replace(
    '<i class="fa-solid fa-circle-check" style="margin-top: 2px;"></i>',
    '<i class="fa-solid fa-circle-check login-alert-icon"></i>',
    $content
);

file_put_contents($path, $content);
echo "Updated admin/login.blade.php\n";
