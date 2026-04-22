<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormPasienController;



Route::get('/', function () {
    return view('welcome');
});

    Route::get('/form-pasien', [App\Http\Controllers\FormPasienController::class, 'showForm'])->name('form-pasien.create');
    Route::post('/form-pasien', [App\Http\Controllers\FormPasienController::class, 'store'])->name('form-pasien.store');
    Route::get('/antrian/hasil/{id}', [FormPasienController::class, 'hasil'])
    ->name('antrian.hasil');

      

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth');
    
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    
    Route::get('/dashboard', function () {return view('admin_dashboard.dashboard');})->name('dashboard');
    
    Route::resource('/dokter', App\Http\Controllers\DokterController::class);
    Route::resource('/poli', App\Http\Controllers\PoliController::class);
    Route::resource('/antrian', App\Http\Controllers\AntrianController::class);


Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
