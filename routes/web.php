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

Route::get('/', [AboutController::class,'Home'])->name('index');
Route::get('/all/multi/image', [AboutController::class,'AllMultiImage'])->name('all.multi.image');
Route::put('/about', [AboutController::class,'update'])->name('about.update');
Route::get('/about', [AboutController::class,'HomeAbout'])->name('about.home');
Route::get('/about/multi/image', [AboutController::class,'AboutMultiImage'])->name('about.multi.image');
Route::get('/about/multi/image{id}', [AboutController::class,'EditMultiImage'])->name('edit.multi.image');
Route::put('/images', [AboutController::class,'AboutMultiImageStore'])->name('image.store');
Route::get('/about/page', [AboutController::class, 'index'])->name('about.main');
Route::put('/about/multi/image/', [AboutController::class,'UpdateMultiImage'])->name('update.multi.image');
Route::get('/delete/multi/image/{id}', [AboutController::class,'DestroyMultiImage'])->name('delete.multi.image');
