<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\LoginController;
Route::middleware(['auth', ])->group(function () {
Route::get('/home', [PengaduanController::class, 'tampilan_home']);
Route::get('/isi_pengaduan', [PengaduanController::class, 'buat_pengaduan']);
Route::post('/isi_pengaduan', [PengaduanController::class, 'buat_pengaduan']);
Route::get('/hasil_pengaduan', [PengaduanController::class, 'tampil_hasil_pengaduan']);


Route::get('/detail-pengaduan/{id}', [PengaduanController::class, "detail_pengaduan"]);
Route::get('/about/{id}', [pengaduanController::class, 'tampil_about']);
Route::get('/pengaduan/{id}', [pengaduanController::class, 'detail_pengaduan']);
});


Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/login', [LoginController::class,   'index'])->name("login");
Route::post('/login', [LoginController::class, 'login']);
Route::get('/registrasi', [MasyarakatController::class, 'buat_akun']);
Route::post('/registrasi', [MasyarakatController::class, 'registrasi']);

//Route::get('/logout', [LoginPetugasController::class, 'logout']);
//Route::get('/login_petugas', [LoginPetugasController::class, 'index'])->name("login");
//Route::post('/login_petugas', [LoginPetugasController::class, 'login']);
//Route::get('/login_petugas', [LoginPetugasController::class, 'index']);
//Route::get('about', function(){
 //    return "ini halaman about";
 //});
              
 //Route::get('about', function(){
   //  return view("about");
 //});

