<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekCucianController;

 
Route::view('/', 'home');
Route::view('/home', 'home');
Route::view('/profil', 'profil');
Route::view('/cabang', 'cabang');
Route::view('/layanan', 'layanan');
Route::get('/cek-cucian', [CekCucianController::class,'index']);
Route::post('/cek-cucian', [CekCucianController::class,'cek'])->name('cek.cucian');

 //Route untuk admin

 