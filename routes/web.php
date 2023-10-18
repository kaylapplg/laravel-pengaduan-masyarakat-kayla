<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\Authcontroller;

Route::get('/home', [PengaduanController::class, 'tampilan_home']);
Route::get('/isi_pengaduan', [PengaduanController::class, 'tampil_buat_pengaduan']);
Route::get('/hasil_pengaduan', [PengaduanController::class, 'tampil_hasil_pengaduan']);
Route::get('/login', [MasyarakatController::class, 'login']);
Route::get('/registrasi', [MasyarakatController::class, 'buat_akun']);
Route::get('/detail-pengaduan/{id}', [PengaduanController::class, "detail_pengaduan"]);
Route::get('/about/{id}', [pengaduanController::class, 'tampil_about']);
Route::get('/pengaduan/{id}', [pengaduanController::class, 'detail_pengaduan']);

// Route::get('about', function(){
//     return "ini halaman about";
// });
              
// Route::get('about', function(){
//     return view("about");
// });

