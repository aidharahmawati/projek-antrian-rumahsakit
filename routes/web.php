<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('welcome');
});

    Route::get('/form-pasien', [App\Http\Controllers\FormPasienController::class, 'showForm'])->name('form-pasien.create');
    Route::post('/form-pasien', [App\Http\Controllers\FormPasienController::class, 'create'])->name('form-pasien.store');

      

Route::middleware(['isAdmin'])->group(function () {
    Route::get('/test-admin', function () {
        return "Admin only";
    });
    
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

Route::get('/dashboard', function () {
    return view('admin dashboard.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
