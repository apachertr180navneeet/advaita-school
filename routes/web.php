<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\CampusVisitController as AdminCampusVisitController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\InquiryController as AdminInquiryController;
use App\Http\Controllers\Admin\PillarController as AdminPillarController;
use App\Http\Controllers\Admin\RegistrationController as AdminRegistrationController;
use App\Http\Controllers\Admin\SeoController as AdminSeoController;
use App\Http\Controllers\Admin\SliderController as AdminSliderController;
use App\Http\Controllers\Admin\WhyChooseController as AdminWhyChooseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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
        Route::patch('/pillars/section-header', [AdminPillarController::class, 'updateSectionHeader'])->name('pillars.section-header');
        Route::patch('/pillars/{id}/toggle-status', [AdminPillarController::class, 'toggleStatus'])->name('pillars.toggle-status');
        Route::resource('pillars', AdminPillarController::class)->except(['show']);

        // Homepage SEO Management
        Route::get('/seo', [AdminSeoController::class, 'index'])->name('seo.index');
        Route::patch('/seo', [AdminSeoController::class, 'update'])->name('seo.update');

        // Why Choose Advaita Section & Cards Management
        Route::patch('/why-choose/section-header', [AdminWhyChooseController::class, 'updateSectionHeader'])->name('why-choose.section-header');
        Route::patch('/why-choose/{whyChooseCard}/toggle-status', [AdminWhyChooseController::class, 'toggleStatus'])->name('why-choose.toggle-status');
        Route::resource('why-choose', AdminWhyChooseController::class)->except(['show'])->parameters(['why-choose' => 'whyChooseCard']);

        // Campus Visit & Admissions CTA Banner Management
        Route::get('/campus-visit', [AdminCampusVisitController::class, 'index'])->name('campus-visit.index');
        Route::patch('/campus-visit', [AdminCampusVisitController::class, 'update'])->name('campus-visit.update');
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
