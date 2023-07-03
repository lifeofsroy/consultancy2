<?php

use App\Http\Livewire\FrontFaq;
use App\Http\Livewire\FrontHome;
use App\Http\Livewire\FrontAbout;
use App\Http\Livewire\FrontCookie;
use App\Http\Livewire\FrontCourse;
use App\Http\Livewire\FrontContact;
use App\Http\Livewire\FrontGallery;
use App\Http\Livewire\FrontAdmission;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\FrontInstitution;
use App\Http\Livewire\FrontCourseDetail;
use App\Http\Livewire\FrontNoticeDetail;
use App\Http\Livewire\FrontServiceDetail;
use App\Http\Livewire\FrontServiceCategory;
use App\Http\Livewire\FrontCourseByCategory;
use App\Http\Livewire\FrontInstitutionDetail;
use App\Http\Livewire\FrontServiceByCategory;
use App\Http\Controllers\GoogleLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Front
Route::get('/', FrontHome::class)->name('home');
Route::get('/about-us', FrontAbout::class)->name('about');
Route::get('/contact-us', FrontContact::class)->name('contact');
Route::get('/admission', FrontAdmission::class)->name('admission');
Route::get('/gallery', FrontGallery::class)->name('gallery');
Route::get('/faq', FrontFaq::class)->name('faq');
Route::get('/cookie-policy', FrontCookie::class)->name('cookie-policy');

Route::get('/service-category', FrontServiceCategory::class)->name('service.category');
Route::get('/service-category/{servicecat_slug}', FrontServiceByCategory::class)->name('service.by.category');
Route::get('/service/{service_slug}', FrontServiceDetail::class)->name('service.detail');

Route::get('/course', FrontCourse::class)->name('facility.course');
Route::get('/course-category/{coursecat_slug}', FrontCourseByCategory::class)->name('course.by.category');
Route::get('/course/{course_slug}', FrontCourseDetail::class)->name('course.detail');

Route::get('/institution', FrontInstitution::class)->name('facility.institution');
Route::get('/institution/{institution_slug}', FrontInstitutionDetail::class)->name('institution.detail');

Route::get('/notice/{notice_slug}', FrontNoticeDetail::class)->name('notice.detail');


// Google Login
Route::get('/auth/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);


// User
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});