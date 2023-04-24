<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FundamentalController;
use App\Http\Controllers\DriveController;

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

// auth routes
Auth::routes();

// protected routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/edit/{id}', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/fundamental', [FundamentalController::class, 'index'])->name('fundamental.index');
    Route::get('/fundamental/create', [FundamentalController::class, 'create'])->name('fundamental.create');
    Route::post('/fundamental', [FundamentalController::class, 'store'])->name('fundamental.store');
    Route::get('/fundamental/{id}/edit', [FundamentalController::class, 'edit'])->name('fundamental.edit');
    Route::put('/fundamental/edit/{id}', [FundamentalController::class, 'update'])->name('fundamental.update');
    Route::get('/fundamental/datatable',  [FundamentalController::class, 'datatable'])->name('fundamental.datatable');
    Route::delete('/fundamental/{id}', [FundamentalController::class, 'destroy'])->name('fundamental.destroy');

    Route::get('/drive', [DriveController::class, 'index'])->name('drive.index');
    Route::get('/drive/create', [DriveController::class, 'create'])->name('drive.create');
    Route::post('/drive', [DriveController::class, 'store'])->name('drive.store');
    Route::get('/drive/{id}/edit', [DriveController::class, 'edit'])->name('drive.edit');
    Route::put('/drive/edit/{id}', [DriveController::class, 'update'])->name('drive.update');
    Route::get('/drive/datatable',  [DriveController::class, 'datatable'])->name('drive.datatable');
    Route::delete('/drive/{id}', [DriveController::class, 'destroy'])->name('drive.destroy');
});

// public routes
Route::get('/', [HomeController::class, 'index'])->name('home');


