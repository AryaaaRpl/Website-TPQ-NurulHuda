<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

Route::get('/contents/{type}', [ContentController::class, 'index']);
Route::post('/ppdb', [ApplicantController::class, 'store']);

Route::post('/admin/login', [AdminAuthController::class, 'login']);

Route::middleware('admin.token')->prefix('admin')->group(function () {
    Route::apiResource('contents', ContentController::class)->except(['index', 'show']);
    Route::get('/ppdb', [ApplicantController::class, 'index']);
    Route::patch('/ppdb/{applicant}/status', [ApplicantController::class, 'updateStatus']);
    Route::get('/ppdb-export', [ApplicantController::class, 'export']);
});
