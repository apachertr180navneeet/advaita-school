<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\CampusVisitController as AdminCampusVisitController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\InquiryController as AdminInquiryController;
use App\Http\Controllers\Admin\PageContentController as AdminPageContentController;
use App\Http\Controllers\Admin\PillarController as AdminPillarController;
use App\Http\Controllers\Admin\RegistrationController as AdminRegistrationController;
use App\Http\Controllers\Admin\SeoController as AdminSeoController;
use App\Http\Controllers\Admin\SiteSettingController as AdminSiteSettingController;
use App\Http\Controllers\Admin\SliderController as AdminSliderController;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonialController;
use App\Http\Controllers\Admin\WhyChooseController as AdminWhyChooseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes - Advaita School of Excellence
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Us & Leadership
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/vision-mission', [PageController::class, 'visionMission'])->name('vision-mission');
Route::get('/chairmans-desk', [PageController::class, 'chairmansDesk'])->name('chairmans-desk');
Route::get('/principals-desk', [PageController::class, 'principalsDesk'])->name('principals-desk');
Route::get('/our-staff', [PageController::class, 'ourStaff'])->name('our-staff');

// Academics & Results
Route::get('/academics', [PageController::class, 'academics'])->name('academics');
Route::get('/results', [PageController::class, 'results'])->name('results');

// Admissions & Registration
Route::get('/admission-info', [PageController::class, 'admissionInfo'])->name('admission-info');
Route::get('/fee-structure', [PageController::class, 'feeStructure'])->name('fee-structure');
Route::get('/online-registration', [RegistrationController::class, 'create'])->name('online-registration');
Route::post('/online-registration', [RegistrationController::class, 'store'])->name('online-registration.store');

// Facilities, Gallery, Blog, Compliance
Route::get('/facilities', [PageController::class, 'facilities'])->name('facilities');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/mandatory-disclosure', [PageController::class, 'mandatoryDisclosure'])->name('mandatory-disclosure');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

/*
|--------------------------------------------------------------------------
| Admin Portal Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    // Guest Admin Auth Routes
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    // Protected Admin Routes
    Route::middleware('auth')->group(function () {
        Route::get('/', fn () => redirect()->route('admin.dashboard'));
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        // Student Registrations Management
        Route::get('/registrations', [AdminRegistrationController::class, 'index'])->name('registrations.index');
        Route::get('/registrations/{id}', [AdminRegistrationController::class, 'show'])->name('registrations.show');
        Route::patch('/registrations/{id}/status', [AdminRegistrationController::class, 'updateStatus'])->name('registrations.status');
        Route::delete('/registrations/{id}', [AdminRegistrationController::class, 'destroy'])->name('registrations.destroy');

        // Contact Inquiries Management
        Route::get('/inquiries', [AdminInquiryController::class, 'index'])->name('inquiries.index');
        Route::get('/inquiries/{id}', [AdminInquiryController::class, 'show'])->name('inquiries.show');
        Route::patch('/inquiries/{id}/status', [AdminInquiryController::class, 'updateStatus'])->name('inquiries.status');
        Route::delete('/inquiries/{id}', [AdminInquiryController::class, 'destroy'])->name('inquiries.destroy');

        // Hero Sliders Management
        Route::patch('/sliders/{id}/toggle-status', [AdminSliderController::class, 'toggleStatus'])->name('sliders.toggle-status');
        Route::resource('sliders', AdminSliderController::class)->except(['show']);

        // Three Pillars (What Makes Advaita Special) Management
        Route::get('/pillars/section-header', [AdminPillarController::class, 'editSectionHeader'])->name('pillars.section-header');
        Route::patch('/pillars/section-header', [AdminPillarController::class, 'updateSectionHeader'])->name('pillars.section-header.update');
        Route::patch('/pillars/{id}/toggle-status', [AdminPillarController::class, 'toggleStatus'])->name('pillars.toggle-status');
        Route::resource('pillars', AdminPillarController::class)->except(['show']);

        // All-Pages SEO Management
        Route::get('/seo', [AdminSeoController::class, 'index'])->name('seo.index');
        Route::patch('/seo', [AdminSeoController::class, 'update'])->name('seo.update');

        // School Pages Content Management
        Route::get('/pages-content', [AdminPageContentController::class, 'index'])->name('pages.index');
        Route::get('/pages-content/{section}/edit', [AdminPageContentController::class, 'edit'])->name('pages.edit');
        Route::patch('/pages-content/{section?}', [AdminPageContentController::class, 'update'])->name('pages.update');

        // Global Site & Contact Settings Management
        Route::get('/site-settings', [AdminSiteSettingController::class, 'index'])->name('site-settings.index');
        Route::patch('/site-settings', [AdminSiteSettingController::class, 'update'])->name('site-settings.update');

        // Why Choose Advaita Section & Cards Management
        Route::get('/why-choose/section-header', [AdminWhyChooseController::class, 'editSectionHeader'])->name('why-choose.section-header');
        Route::patch('/why-choose/section-header', [AdminWhyChooseController::class, 'updateSectionHeader'])->name('why-choose.section-header.update');
        Route::patch('/why-choose/{whyChooseCard}/toggle-status', [AdminWhyChooseController::class, 'toggleStatus'])->name('why-choose.toggle-status');
        Route::resource('why-choose', AdminWhyChooseController::class)->except(['show'])->parameters(['why-choose' => 'whyChooseCard']);

        // Campus Visit & Admissions CTA Banner Management
        Route::get('/campus-visit', [AdminCampusVisitController::class, 'index'])->name('campus-visit.index');
        Route::patch('/campus-visit', [AdminCampusVisitController::class, 'update'])->name('campus-visit.update');

        // Campus Gallery Management
        Route::get('/gallery/section-header', [AdminGalleryController::class, 'editSectionHeader'])->name('gallery.section-header');
        Route::patch('/gallery/section-header', [AdminGalleryController::class, 'updateSectionHeader'])->name('gallery.section-header.update');
        Route::patch('/gallery/{gallery}/toggle-status', [AdminGalleryController::class, 'toggle'])->name('gallery.toggle-status');
        Route::resource('gallery', AdminGalleryController::class)->except(['show']);

        // Parent Testimonials Management
        Route::get('/testimonials/section-header', [AdminTestimonialController::class, 'editSectionHeader'])->name('testimonials.section-header');
        Route::patch('/testimonials/section-header', [AdminTestimonialController::class, 'updateSectionHeader'])->name('testimonials.section-header.update');
        Route::patch('/testimonials/{testimonial}/toggle-status', [AdminTestimonialController::class, 'toggle'])->name('testimonials.toggle-status');
        Route::resource('testimonials', AdminTestimonialController::class)->except(['show']);

        // Frequently Asked Questions (FAQ) Management
        Route::get('/faqs/section-header', [AdminFaqController::class, 'editSectionHeader'])->name('faqs.section-header');
        Route::patch('/faqs/section-header', [AdminFaqController::class, 'updateSectionHeader'])->name('faqs.section-header.update');
        Route::patch('/faqs/{faq}/toggle-status', [AdminFaqController::class, 'toggle'])->name('faqs.toggle-status');
        Route::resource('faqs', AdminFaqController::class)->except(['show']);

        // Storage Symlink Helper
        Route::get('/storage-link', fn () => redirect()->route('storage.link'));
    });
});

// Standard /login route redirect
Route::get('/login', fn () => redirect()->route('admin.login'))->name('login');

// Backward Compatibility / Legacy .php URL Redirects
Route::get('/index.php', fn () => redirect()->route('home', [], 301));
Route::get('/about-us.php', fn () => redirect()->route('about-us', [], 301));
Route::get('/vision-mission.php', fn () => redirect()->route('vision-mission', [], 301));
Route::get('/chairmans-desk.php', fn () => redirect()->route('chairmans-desk', [], 301));
Route::get('/principals-desk.php', fn () => redirect()->route('principals-desk', [], 301));
Route::get('/our-staff.php', fn () => redirect()->route('our-staff', [], 301));
Route::get('/academics.php', fn () => redirect()->route('academics', [], 301));
Route::get('/results.php', fn () => redirect()->route('results', [], 301));
Route::get('/admission-info.php', fn () => redirect()->route('admission-info', [], 301));
Route::get('/fee-structure.php', fn () => redirect()->route('fee-structure', [], 301));
Route::get('/online-registration.php', fn () => redirect()->route('online-registration', [], 301));
Route::get('/facilities.php', fn () => redirect()->route('facilities', [], 301));
Route::get('/gallery.php', fn () => redirect()->route('gallery', [], 301));
Route::get('/blog.php', fn () => redirect()->route('blog', [], 301));
Route::get('/contact.php', fn () => redirect()->route('contact', [], 301));
Route::get('/mandatory-disclosure.php', fn () => redirect()->route('mandatory-disclosure', [], 301));

// Server helper: Create or repair the public/storage symlink directly from the browser
Route::get('/storage-link', function () {
    $target = storage_path('app/public');
    $link = public_path('storage');

    $messages = [];

    // 1. Ensure target directory exists
    if (! file_exists($target)) {
        File::makeDirectory($target, 0755, true);
        $messages[] = "Created public storage directory at: {$target}";
    }

    // 2. Check if a link, file, or folder already exists
    if (file_exists($link) || is_link($link)) {
        if (is_link($link)) {
            if (PHP_OS_FAMILY === 'Windows') {
                @rmdir($link);
            } else {
                @unlink($link);
            }
            $messages[] = "Removed previous symbolic link at: {$link}";
        } else {
            $messages[] = "Existing storage item found at: {$link}";
        }
    }

    // 3. Run artisan storage:link
    try {
        Artisan::call('storage:link');
        $artisanOutput = trim(Artisan::output());
        if (! empty($artisanOutput)) {
            $messages[] = $artisanOutput;
        }
    } catch (Throwable $e) {
        $messages[] = 'Artisan note: '.$e->getMessage();
    }

    // 4. Fallback manual symlink if artisan didn't create it
    if (! file_exists($link) && ! is_link($link) && function_exists('symlink')) {
        try {
            @symlink($target, $link);
            $messages[] = 'Created symbolic link using native symlink() function.';
        } catch (Throwable $e) {
            $messages[] = 'symlink() note: '.$e->getMessage();
        }
    }

    $isLinked = is_link($link) || file_exists($link);
    $statusClass = $isLinked ? 'success' : 'warning';
    $statusTitle = $isLinked ? 'Success! Storage Link Is Active' : 'Notice: Symlink Not Created';
    $statusDesc = $isLinked
        ? 'Your <code>public/storage</code> directory is now linked to <code>storage/app/public</code>. All uploaded slider images will load correctly.'
        : 'Could not create native symlink (often restricted on shared hosting). Do not worry! Our built-in Laravel storage fallback route is already active and serving all uploaded images.';

    $logItems = implode('', array_map(fn ($m) => '<li>'.htmlspecialchars($m).'</li>', $messages));
    $adminSlidersUrl = route('admin.sliders.index');
    $homeUrl = route('home');

    return response("<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Storage Link Status - Advaita School</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #0A192F; color: #E2E8F0; margin: 0; padding: 40px 20px; display: flex; justify-content: center; align-items: center; min-height: 100vh; box-sizing: border-box; }
        .card { background: #112240; border-radius: 18px; border: 1px solid #233554; padding: 36px 32px; max-width: 620px; width: 100%; box-shadow: 0 20px 50px rgba(0,0,0,0.4); }
        .badge { display: inline-flex; align-items: center; gap: 8px; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; padding: 6px 14px; border-radius: 999px; margin-bottom: 18px; }
        .badge.success { background: rgba(16, 185, 129, 0.15); color: #34D399; border: 1px solid rgba(16, 185, 129, 0.4); }
        .badge.warning { background: rgba(245, 158, 11, 0.15); color: #FBBF24; border: 1px solid rgba(245, 158, 11, 0.4); }
        h1 { margin: 0 0 10px 0; font-size: 24px; color: #FFFFFF; font-weight: 800; }
        p { color: #94A3B8; font-size: 14.5px; line-height: 1.6; margin: 0 0 20px 0; }
        code { background: #1E293B; color: #F37021; padding: 2px 6px; border-radius: 4px; font-size: 13px; font-family: Consolas, monospace; }
        .info-box { background: #0B1329; border: 1px solid #1E293B; border-radius: 12px; padding: 18px 20px; margin-bottom: 24px; }
        .path-row { font-size: 13px; color: #94A3B8; margin-bottom: 8px; word-break: break-all; }
        .path-row strong { color: #E2E8F0; }
        .path-row code { color: #60A5FA; }
        ul { margin: 8px 0 0 0; padding-left: 20px; color: #CBD5E1; font-size: 13px; }
        li { margin-bottom: 4px; }
        .btn-group { display: flex; gap: 12px; flex-wrap: wrap; margin-top: 26px; }
        .btn { display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 11px 22px; border-radius: 10px; font-size: 14px; font-weight: 600; text-decoration: none; transition: all 0.2s ease; }
        .btn-primary { background: #F37021; color: #FFFFFF; }
        .btn-primary:hover { background: #e05e10; }
        .btn-secondary { background: #1E293B; color: #E2E8F0; border: 1px solid #334155; }
        .btn-secondary:hover { background: #334155; color: #FFFFFF; }
    </style>
</head>
<body>
    <div class='card'>
        <div class='badge {$statusClass}'>● {$statusTitle}</div>
        <h1>Server Storage Link</h1>
        <p>{$statusDesc}</p>
        <div class='info-box'>
            <div class='path-row'><strong>Target Folder:</strong> <code>{$target}</code></div>
            <div class='path-row'><strong>Public Symlink:</strong> <code>{$link}</code></div>
            ".(! empty($messages) ? "<hr style='border: 0; border-top: 1px solid #1E293B; margin: 14px 0;'><div class='path-row'><strong>Execution Logs:</strong></div><ul>{$logItems}</ul>" : '')."
        </div>
        <div class='btn-group'>
            <a href='{$adminSlidersUrl}' class='btn btn-primary'>&larr; View Admin Sliders</a>
            <a href='{$homeUrl}' class='btn btn-secondary' target='_blank'>Open Homepage &rarr;</a>
        </div>
    </div>
</body>
</html>");
})->name('storage.link');

// Server fallback: Serve public storage files when symlink is missing, broken, or unsupported
Route::get('/storage/{path}', function (string $path) {
    if (str_contains($path, '..') || str_contains($path, '\\')) {
        abort(404);
    }

    $disk = Storage::disk('public');
    if (! $disk->exists($path)) {
        abort(404);
    }

    $filePath = $disk->path($path);
    $mimeType = @mime_content_type($filePath) ?: 'application/octet-stream';

    return response()->file($filePath, [
        'Content-Type' => $mimeType,
        'Cache-Control' => 'public, max-age=86400',
    ]);
})->where('path', '.*')->name('storage.file');

// Legacy /projectphp folder redirects
Route::get('/projectphp', fn () => redirect()->route('home', [], 301));
Route::get('/projectphp/{page}', function (string $page) {
    $slug = preg_replace('/\.php$/', '', $page);
    if ($slug === 'index' || $slug === 'home' || empty($slug)) {
        return redirect()->route('home', [], 301);
    }
    if (Route::has($slug)) {
        return redirect()->route($slug, [], 301);
    }

    return redirect()->route('home', [], 301);
});
