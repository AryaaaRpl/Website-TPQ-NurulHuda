<?php

use App\Http\Controllers\AdminWebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/fasilitas', [HomeController::class, 'fasilitas'])->name('fasilitas');
Route::get('/ekstrakurikuler', [HomeController::class, 'ekskul'])->name('ekskul');
Route::get('/ppdb', [HomeController::class, 'register'])->name('ppdb');
Route::post('/ppdb', [HomeController::class, 'register'])->name('ppdb.register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin.session'])->group(function () {
    Route::post('/logout', [AdminWebController::class, 'logout'])->name('logout');
    Route::get('/', [AdminWebController::class, 'dashboard'])->name('dashboard');
    Route::get('/content/{type}', [AdminWebController::class, 'contents'])->name('contents');
    Route::get('/content/{type}/create', [AdminWebController::class, 'createContent'])->name('contents.create');
    Route::post('/content/{type}', [AdminWebController::class, 'storeContent'])->name('contents.store');
    Route::get('/content/{type}/{content}/edit', [AdminWebController::class, 'editContent'])->name('contents.edit');
    Route::put('/content/{type}/{content}', [AdminWebController::class, 'updateContent'])->name('contents.update');
    Route::delete('/content/{type}/{content}', [AdminWebController::class, 'deleteContent'])->name('contents.delete');
    Route::get('/ppdb', [AdminWebController::class, 'applicants'])->name('applicants');
    Route::patch('/ppdb/{applicant}', [AdminWebController::class, 'applicantStatus'])->name('applicants.status');
    Route::get('/ppdb-export', [AdminWebController::class, 'export'])->name('applicants.export');
});

require __DIR__.'/auth.php';
