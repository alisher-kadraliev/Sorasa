<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::group(['prefix' => 'admin'], function () {
    Route::get('/logout', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::group(['prefix' => 'profiles'], function () {
        Route::get('/{profile}/edit', [AdminController::class, 'edit'])->name('admin.profile.edit');
        Route::put('/{profile}/', [AdminController::class, 'upload'])->name('admin.profile.upload');
        Route::get('/change/password', [AdminController::class, 'ChangePassword'])->name('admin.profile.change.password');
        Route::put('/update/password', [AdminController::class, 'UpdatePassword'])->name('admin.profile.update.password');
    });
});
Route::controller(HomeSliderController::class)->group(function () {
    Route::get('/home/slide', 'HomeSlider')->name('home.slide');
    Route::put('/home/slide', 'HomeSliderUpdate')->name('home.slide.update');
});
Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'index')->name('about');
    Route::put('/about', 'update')->name('about.update');
});
