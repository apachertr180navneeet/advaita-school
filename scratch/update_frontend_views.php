<?php

// 1. layouts/app.blade.php
$path = 'resources/views/layouts/app.blade.php';
$content = file_get_contents($path);
// Remove style block
$content = preg_replace('/\s*<style>.*?<\/style>\s*/is', "\n", $content, 1);
// Remove inline style on error list
$content = str_replace(
    '<ul class="adv-flash-message" style="margin: 0; padding-left: 18px;">',
    '<ul class="adv-flash-message adv-alert-error-list">',
    $content
);
file_put_contents($path, $content);
echo "Updated layouts/app.blade.php\n";

// 2. partials/navbar.blade.php
$path = 'resources/views/partials/navbar.blade.php';
$content = file_get_contents($path);
$targetNavbar = '<a href="{{ route(\'admin.dashboard\') }}" style="color: #ffffff; font-size: 11.5px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 5px; background: rgba(255,255,255,0.15); padding: 3px 10px; border-radius: 20px; margin-left: 12px;" title="Admin Portal">';
$replaceNavbar = '<a href="{{ route(\'admin.dashboard\') }}" class="adv-topbar-admin-badge" title="Admin Portal">';
$content = str_replace($targetNavbar, $replaceNavbar, $content);
$content = str_replace(
    '<i class="fa-solid fa-lock" style="font-size: 10px; color: #F37021;"></i>',
    '<i class="fa-solid fa-lock adv-topbar-admin-icon"></i>',
    $content
);
file_put_contents($path, $content);
echo "Updated partials/navbar.blade.php\n";

// 3. partials/footer.blade.php
$path = 'resources/views/partials/footer.blade.php';
$content = file_get_contents($path);
$content = str_replace(
    '<iframe' . "\n" . '                            src="{{ \App\Models\Setting::get(\'site_google_map_embed\', \'https://maps.google.com/maps?q=Advaita+School+of+Excellence,+Parbhani&t=&z=15&ie=UTF8&iwloc=&output=embed\') }}"' . "\n" . '                            width="100%"' . "\n" . '                            height="100%"' . "\n" . '                            style="border:0;"',
    '<iframe class="adv-footer-map-iframe"' . "\n" . '                            src="{{ \App\Models\Setting::get(\'site_google_map_embed\', \'https://maps.google.com/maps?q=Advaita+School+of+Excellence,+Parbhani&t=&z=15&ie=UTF8&iwloc=&output=embed\') }}"' . "\n" . '                            width="100%"' . "\n" . '                            height="100%"',
    $content
);
// Also fallback in case of single line
$content = preg_replace('/<iframe\b([^>]*?)\s+style=["\']border:0;?["\']([^>]*?)>/i', '<iframe class="adv-footer-map-iframe"$1$2>', $content);
file_put_contents($path, $content);
echo "Updated partials/footer.blade.php\n";

// 4. pages/mandatory-disclosure.blade.php
$path = 'resources/views/pages/mandatory-disclosure.blade.php';
$content = file_get_contents($path);
$content = str_replace(
    '<span class="contact-highlight-serif" style="color: #F37021;">Public Disclosure</span>',
    '<span class="contact-highlight-serif text-adv-orange">Public Disclosure</span>',
    $content
);
file_put_contents($path, $content);
echo "Updated pages/mandatory-disclosure.blade.php\n";

// 5. pages/contact.blade.php
$path = 'resources/views/pages/contact.blade.php';
$content = file_get_contents($path);
$content = str_replace(
    '<div class="contact-form-success-banner" id="contactFormSuccess" style="display: none;" role="alert">',
    '<div class="contact-form-success-banner fee-table-hidden" id="contactFormSuccess" role="alert">',
    $content
);
$content = preg_replace('/(<iframe\b[^>]*?class=["\'][^"\']*contact-google-map-iframe[^"\']*["\'][^>]*?)\s+style=["\']border:0;?["\']/i', '$1', $content);
file_put_contents($path, $content);
echo "Updated pages/contact.blade.php\n";

// 6. pages/home.blade.php
$path = 'resources/views/pages/home.blade.php';
$content = file_get_contents($path);
$content = str_replace(
    '<p class="text-center" style="grid-column: 1 / -1; color: #64748B; padding: 40px 0;">No advantage cards available at the moment.</p>',
    '<p class="text-center adv-empty-grid-msg">No advantage cards available at the moment.</p>',
    $content
);
$content = str_replace(
    '<div class="adv-faq-answer" id="faq-ans-{{ $faq->id }}" style="{{ $loop->first ? \'display: block;\' : \'\' }}">',
    '<div class="adv-faq-answer {{ $loop->first ? \'active\' : \'\' }}" id="faq-ans-{{ $faq->id }}">',
    $content
);
file_put_contents($path, $content);
echo "Updated pages/home.blade.php\n";

// 7. pages/fee-structure.blade.php
$path = 'resources/views/pages/fee-structure.blade.php';
$content = file_get_contents($path);
$content = str_replace('<th scope="col" style="width: 22%;">Class</th>', '<th scope="col" class="fee-th-class">Class</th>', $content);
$content = str_replace('<th scope="col" class="text-right" style="width: 20%;">Tuition Fee<br><span style="font-size: 0.72rem; font-weight: 500; color: #64748b;">(Annual)</span></th>', '<th scope="col" class="text-right fee-th-col20">Tuition Fee<br><span class="fee-th-subtext">(Annual)</span></th>', $content);
$content = str_replace('<th scope="col" class="text-right" style="width: 20%;">Development Fee<br><span style="font-size: 0.72rem; font-weight: 500; color: #64748b;">(Annual)</span></th>', '<th scope="col" class="text-right fee-th-col20">Development Fee<br><span class="fee-th-subtext">(Annual)</span></th>', $content);
$content = str_replace('<th scope="col" class="text-right" style="width: 18%;">Examination Fee<br><span style="font-size: 0.72rem; font-weight: 500; color: #64748b;">(Annual)</span></th>', '<th scope="col" class="text-right fee-th-col18">Examination Fee<br><span class="fee-th-subtext">(Annual)</span></th>', $content);
$content = str_replace('<th scope="col" class="text-right" style="width: 20%;">Total Annual Fee</th>', '<th scope="col" class="text-right fee-th-col20">Total Annual Fee</th>', $content);

$content = str_replace('<div class="fee-table-responsive" id="feeTableTerm" style="display: none;">', '<div class="fee-table-responsive fee-table-hidden" id="feeTableTerm">', $content);
$content = str_replace('<th scope="col" style="width: 25%;">Class</th>', '<th scope="col" class="fee-th-col25">Class</th>', $content);
$content = str_replace('<th scope="col" class="text-right" style="width: 25%;">Term 1 Fee<br><span style="font-size: 0.72rem; font-weight: 500; color: #64748b;">(April – Due at Admission)</span></th>', '<th scope="col" class="text-right fee-th-col25">Term 1 Fee<br><span class="fee-th-subtext">(April – Due at Admission)</span></th>', $content);
$content = str_replace('<th scope="col" class="text-right" style="width: 25%;">Term 2 Fee<br><span style="font-size: 0.72rem; font-weight: 500; color: #64748b;">(October – Mid Session)</span></th>', '<th scope="col" class="text-right fee-th-col25">Term 2 Fee<br><span class="fee-th-subtext">(October – Mid Session)</span></th>', $content);
$content = str_replace('<th scope="col" class="text-right" style="width: 25%;">Total Annual Fee</th>', '<th scope="col" class="text-right fee-th-col25">Total Annual Fee</th>', $content);
file_put_contents($path, $content);
echo "Updated pages/fee-structure.blade.php\n";

// 8. pages/online-registration.blade.php
$path = 'resources/views/pages/online-registration.blade.php';
$content = file_get_contents($path);
$content = str_replace(
    '<i class="fa-solid fa-location-dot reg-input-icon" style="top: 16px;" aria-hidden="true"></i>',
    '<i class="fa-solid fa-location-dot reg-input-icon reg-input-icon-textarea" aria-hidden="true"></i>',
    $content
);
$content = str_replace(
    '<i class="fa-solid fa-house reg-input-icon" style="top: 16px;" aria-hidden="true"></i>',
    '<i class="fa-solid fa-house reg-input-icon reg-input-icon-textarea" aria-hidden="true"></i>',
    $content
);
$content = str_replace(
    'style="display:none;"',
    'class="reg-file-input-hidden"',
    $content
);
$content = str_replace(
    "previewEl.innerHTML = '<i class=\"fa-solid fa-file-circle-check\" style=\"color: #059669;\"></i> <span style=\"color: #059669; font-weight: 600;\">' + fileName + '</span>';",
    "previewEl.innerHTML = '<i class=\"fa-solid fa-file-circle-check reg-upload-success-icon\"></i> <span class=\"reg-upload-success-text\">' + fileName + '</span>';",
    $content
);
file_put_contents($path, $content);
echo "Updated pages/online-registration.blade.php\n";

// 9. pages/gallery.blade.php
$path = 'resources/views/pages/gallery.blade.php';
$content = file_get_contents($path);

$map = [
    '#fee2e2; color: #ef4444;' => 'gal-theme-red',
    '#ef4444;' => 'gal-theme-red',
    '#ffedd5; color: #f97316;' => 'gal-theme-orange',
    '#f97316;' => 'gal-theme-orange',
    '#dcfce7; color: #22c55e;' => 'gal-theme-green',
    '#22c55e;' => 'gal-theme-green',
    '#f3e8ff; color: #8b5cf6;' => 'gal-theme-purple',
    '#8b5cf6;' => 'gal-theme-purple',
    '#fce7f3; color: #ec4899;' => 'gal-theme-pink',
    '#ec4899;' => 'gal-theme-pink',
    '#e0f2fe; color: #0284c7;' => 'gal-theme-sky',
    '#0284c7;' => 'gal-theme-sky',
    '#ccfbf1; color: #0d9488;' => 'gal-theme-teal',
    '#0d9488;' => 'gal-theme-teal',
    '#ffe4e6; color: #e11d48;' => 'gal-theme-rose',
    '#e11d48;' => 'gal-theme-rose',
    '#fef3c7; color: #f59e0b;' => 'gal-theme-amber',
    '#f59e0b;' => 'gal-theme-amber',
    '#bbf7d0; color: #16a34a;' => 'gal-theme-emerald',
    '#16a34a;' => 'gal-theme-emerald',
    '#fbcfe8; color: #db2777;' => 'gal-theme-fuchsia',
    '#db2777;' => 'gal-theme-fuchsia',
    '#cffafe; color: #06b6d4;' => 'gal-theme-cyan',
    '#06b6d4;' => 'gal-theme-cyan',
    '#ffedd5; color: #ea580c;' => 'gal-theme-orange-dark',
    '#ea580c;' => 'gal-theme-orange-dark',
    '#ede9fe; color: #7c3aed;' => 'gal-theme-violet',
    '#7c3aed;' => 'gal-theme-violet',
    '#dbeafe; color: #2563eb;' => 'gal-theme-blue',
    '#2563eb;' => 'gal-theme-blue',
    '#dcfce7; color: #15803d;' => 'gal-theme-forest',
    '#15803d;' => 'gal-theme-forest',
];

foreach ($map as $styleVal => $cls) {
    // Check if replacing div
    $content = str_replace(
        '<div class="adv-gal-card-icon" style="background: ' . $styleVal . '">',
        '<div class="adv-gal-card-icon ' . $cls . '">',
        $content
    );
    // Check if replacing button
    $content = str_replace(
        'style="background: ' . $styleVal . '"',
        'class="adv-gal-card-btn ' . $cls . '"',
        $content
    );
}
// Clean up any double class="adv-gal-card-btn adv-gal-card-btn gal-theme-*"
$content = preg_replace('/class="adv-gal-card-btn\s+adv-gal-card-btn\s+([^"]+)"/', 'class="adv-gal-card-btn $1"', $content);
file_put_contents($path, $content);
echo "Updated pages/gallery.blade.php\n";

// 10. welcome.blade.php
$path = 'resources/views/welcome.blade.php';
$content = file_get_contents($path);
$content = preg_replace('/<style>.*?<\/style>/is', '', $content);
file_put_contents($path, $content);
echo "Updated welcome.blade.php\n";
