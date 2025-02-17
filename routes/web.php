<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\GaleriController;

// User
Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
Route::post('/', [FormulirController::class, 'store'])->name('dashboard.post');

Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.login');
Route::post('/admin', [UserController::class, 'logout'])->name('login.logout');

// Admin
Route::middleware('auth')->group(function() {
    Route::get('/admin/sejarah', [SejarahController::class, 'index'])->name('sejarah');
    Route::get('/admin/edit/sejarah/{id}/data', [SejarahController::class, 'edit'])->name('sejarah.edit');
    Route::put('/admin/edit/sejarah/{id}', [SejarahController::class, 'update'])->name('sejarah.update');
    
    Route::get('/admin/visimisi', [VisiMisiController::class, 'index'])->name('visimisi');
    Route::get('/admin/edit/visimisi/{id}/data', [VisiMisiController::class, 'edit'])->name('visimisi.edit');
    Route::put('/admin/edit/visimisi/{id}', [VisiMisiController::class, 'update'])->name('visimisi.update');
    
    Route::get('/admin/berita', [BeritaController::class, 'index'])->name('berita');
    Route::post('/admin/add/berita', [BeritaController::class, 'store'])->name('berita.post');
    Route::get('/admin/add/berita', [BeritaController::class, 'create'])->name('berita.add');
    Route::get('/admin/edit/berita/{id}/data', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/admin/edit/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/admin/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.delete');
    
    Route::get('/admin/galeri', [GaleriController::class, 'index'])->name('galeri');
    Route::post('/admin/add/galeri', [GaleriController::class, 'store'])->name('galeri.post');
    Route::get('/admin/add/galeri', [GaleriController::class, 'create'])->name('galeri.add');
    Route::get('/admin/edit/galeri/{id}/data', [GaleriController::class, 'edit'])->name('galeri.edit');
    Route::put('/admin/edit/galeri/{id}', [GaleriController::class, 'update'])->name('galeri.update');
    Route::delete('/admin/galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.delete');
    
    Route::get('/admin/formulir', [FormulirController::class, 'index'])->name('dashboard.formulir');
});