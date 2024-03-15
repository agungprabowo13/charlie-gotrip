<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestimonialsController;
use App\Livewire\Order;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/packages', [HomeController::class, 'packages'])->name('packages');
Route::get('/package/{id}', [HomeController::class, 'package'])->name('package');
Route::get('/package/order/{id}', [HomeController::class, 'order'])->name('order');
Route::post('/package/store_order', [HomeController::class, 'store_order'])->name('store_order');
Route::get('/package/ticket/{slug}', [HomeController::class, 'ticket'])->name('ticket');
Route::get('/package/cetak-ticket/{slug}', [HomeController::class, 'cetakTicket'])->name('cetak-ticket');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');

Route::prefix('dashboard')->middleware(['auth', 'verified', 'isAdmin'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('packages')->group(function () {
        Route::get('/', [PackagesController::class, 'index'])->name('dashboard.packages');
        Route::get('/create', [PackagesController::class, 'create'])->name('dashboard.packages.create');
        Route::post('/store', [PackagesController::class, 'store'])->name('dashboard.packages.store');
        Route::get('/edit/{id}', [PackagesController::class, 'edit'])->name('dashboard.packages.edit');
        Route::put('/update/{id}', [PackagesController::class, 'update'])->name('dashboard.packages.update');
        Route::get('/destroy/{id}', [PackagesController::class, 'destroy'])->name('dashboard.packages.destroy');
    });

    Route::prefix('services')->group(function () {
        Route::get('/', [ServicesController::class, 'index'])->name('dashboard.services');
        Route::get('create', [ServicesController::class, 'create'])->name('dashboard.services.create');
        Route::post('store', [ServicesController::class, 'store'])->name('dashboard.services.store');
        Route::get('edit/{id}', [ServicesController::class, 'edit'])->name('dashboard.services.edit');
        Route::put('update/{id}', [ServicesController::class, 'update'])->name('dashboard.services.update');
        Route::get('destroy/{id}', [ServicesController::class, 'destroy'])->name('dashboard.services.destroy');
    });

    Route::prefix('testimonials')->group(function () {
        Route::get('/', [TestimonialsController::class, 'index'])->name('dashboard.testimonials');
        Route::get('/create', [TestimonialsController::class, 'create'])->name('dashboard.testimonials.create');
        Route::post('/store', [TestimonialsController::class, 'store'])->name('dashboard.testimonials.store');
        Route::get('/edit/{id}', [TestimonialsController::class, 'edit'])->name('dashboard.testimonials.edit');
        Route::put('/update/{id}', [TestimonialsController::class, 'update'])->name('dashboard.testimonials.update');
        Route::get('/destroy/{id}', [TestimonialsController::class, 'destroy'])->name('dashboard.testimonials.destroy');
    });
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
