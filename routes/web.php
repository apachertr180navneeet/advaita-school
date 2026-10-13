<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
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

// Backward Compatibility / Legacy .php URL Redirects
Route::get('/index.php', fn() => redirect()->route('home', [], 301));
Route::get('/about-us.php', fn() => redirect()->route('about-us', [], 301));
Route::get('/vision-mission.php', fn() => redirect()->route('vision-mission', [], 301));
Route::get('/chairmans-desk.php', fn() => redirect()->route('chairmans-desk', [], 301));
Route::get('/principals-desk.php', fn() => redirect()->route('principals-desk', [], 301));
Route::get('/our-staff.php', fn() => redirect()->route('our-staff', [], 301));
Route::get('/academics.php', fn() => redirect()->route('academics', [], 301));
Route::get('/results.php', fn() => redirect()->route('results', [], 301));
Route::get('/admission-info.php', fn() => redirect()->route('admission-info', [], 301));
Route::get('/fee-structure.php', fn() => redirect()->route('fee-structure', [], 301));
Route::get('/online-registration.php', fn() => redirect()->route('online-registration', [], 301));
Route::get('/facilities.php', fn() => redirect()->route('facilities', [], 301));
Route::get('/gallery.php', fn() => redirect()->route('gallery', [], 301));
Route::get('/blog.php', fn() => redirect()->route('blog', [], 301));
Route::get('/contact.php', fn() => redirect()->route('contact', [], 301));
Route::get('/mandatory-disclosure.php', fn() => redirect()->route('mandatory-disclosure', [], 301));
