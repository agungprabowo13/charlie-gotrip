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

Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/packages',[HomeController::class,'packages'])->name('packages');
Route::get('/package/{id}',[HomeController::class,'package'])->name('package');
Route::get('/package/order/{id}',[HomeController::class,'order'])->name('order');
Route::post('/package/store_order',[HomeController::class,'store_order'])->name('store_order');
Route::get('/package/ticket/{slug}',[HomeController::class,'ticket'])->name('ticket');
Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth','verified')->group(function () {
    Route::get('/dashboard/packages', [PackagesController::class, 'index'])->name('dashboard.packages');
    Route::get('/dashboard/packages/create', [PackagesController::class, 'create'])->name('dashboard.packages.create');
    Route::post('/dashboard/packages/store', [PackagesController::class, 'store'])->name('dashboard.packages.store');
    Route::get('/dashboard/packages/edit/{id}', [PackagesController::class, 'edit'])->name('dashboard.packages.edit');
    Route::put('/dashboard/packages/update/{id}', [PackagesController::class, 'update'])->name('dashboard.packages.update');
    Route::get('/dashboard/packages/destroy/{id}', [PackagesController::class, 'destroy'])->name('dashboard.packages.destroy');
});

Route::middleware('auth','verified')->group(function () {
    Route::get('/dashboard/services', [ServicesController::class, 'index'])->name('dashboard.services');
    Route::get('/dashboard/services/create', [ServicesController::class, 'create'])->name('dashboard.services.create');
    Route::post('/dashboard/services/store', [ServicesController::class, 'store'])->name('dashboard.services.store');
    Route::get('/dashboard/services/edit/{id}', [ServicesController::class, 'edit'])->name('dashboard.services.edit');
    Route::put('/dashboard/services/update/{id}', [ServicesController::class, 'update'])->name('dashboard.services.update');
    Route::get('/dashboard/services/destroy/{id}', [ServicesController::class, 'destroy'])->name('dashboard.services.destroy');
});

Route::middleware('auth','verified')->group(function () {
    Route::get('/dashboard/testimonials', [TestimonialsController::class, 'index'])->name('dashboard.testimonials');
    Route::get('/dashboard/testimonials/create', [TestimonialsController::class, 'create'])->name('dashboard.testimonials.create');
    Route::post('/dashboard/testimonials/store', [TestimonialsController::class, 'store'])->name('dashboard.testimonials.store');
    Route::get('/dashboard/testimonials/edit/{id}', [TestimonialsController::class, 'edit'])->name('dashboard.testimonials.edit');
    Route::put('/dashboard/testimonials/update/{id}', [TestimonialsController::class, 'update'])->name('dashboard.testimonials.update');
    Route::get('/dashboard/testimonials/destroy/{id}', [TestimonialsController::class, 'destroy'])->name('dashboard.testimonials.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
