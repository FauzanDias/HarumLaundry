<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekCucianController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;

// ============================================================
// PUBLIC ROUTES (Dapat diakses pengunjung tanpa login)
// ============================================================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);
Route::view('/profil', 'profil');
Route::view('/cabang', 'cabang');
Route::view('/layanan', 'layanan');

Route::get('/cek-cucian', [CekCucianController::class, 'index']);
Route::post('/cek-cucian', [CekCucianController::class, 'cek'])->name('cek.cucian');


// ============================================================
// ADMIN & AUTH ROUTES
// ============================================================

// Login & Logout Admin
Route::get('/admin', [AuthController::class, 'showLogin'])->name('login');
Route::post('/admin', [AuthController::class, 'login'])->name('login.post');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes Admin (Perlu Login)
Route::prefix('admin')->middleware(['auth'])->group(function () {

    // Dashboard -> http://127.0.0.1:8000/admin/dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Pelanggan
    Route::resource('pelanggan', PelangganController::class)->except(['show']);

    // Layanan
    Route::resource('layanan', LayananController::class)->except(['show']);

    // Sliders
    Route::resource('sliders', SliderController::class)->only(['index', 'store', 'destroy']);

    // Orders
    Route::resource('orders', OrderController::class)->only(['index', 'create', 'store', 'show', 'destroy']);
    Route::patch('orders/{order}/status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
    Route::patch('orders/{order}/bayar',  [OrderController::class, 'bayar'])->name('orders.bayar');
    Route::get('orders/{order}/nota',     [OrderController::class, 'nota'])->name('orders.nota');

    // Users
    Route::resource('users', UserController::class)->except(['show']);

    // Laporan
    Route::get('laporan',        [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('laporan/export', [LaporanController::class, 'export'])->name('laporan.export');
    Route::get('laporan/pdf',    [LaporanController::class, 'export'])->name('laporan.pdf');

});