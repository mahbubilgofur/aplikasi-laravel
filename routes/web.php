<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\KategoriController;



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
//master awal dasboard
Route::get('/eror', function () {
    return view('layout.index');
});
Route::get('/profil', function () {
    return view('tampilan.about');
});
//tampialan awal dasboard
// master dasboard admin
Route::get('/postingan/index', function () {
    return view('layout.dasboard');
});
Route::get('/', function () {
    return view('tampilan.index');
});

//user
Route::get('/user',[UserController::class,'index']);
Route::get('/user/tambah', [UserController::class,'tambah']);
Route::post('/user/tampil', [UserController::class,'tampil']);
Route::get('/user/hapus/{id}', [UserController::class,'hapus']);
Route::get('/user/edit/{id}', [UserController::class,'edit']);
Route::post('/user/edit/{id}', [UserController::class,'update']);

//postingan
Route::get('/postingan',[PostinganController::class,'index']);
Route::get('/postingan/tambah', [PostinganController::class,'tambah']);
Route::post('/postingan/tampil', [PostinganController::class,'tampil']);
Route::get('/postingan/hapus/{id}', [PostinganController::class,'hapus']);
Route::get('/postingan/edit/{id}', [PostinganController::class,'edit']);
Route::post('/postingan/edit/{id}', [PostinganController::class,'update']);

//kategori
Route::get('/kategori',[KategoriController::class,'index']);
Route::get('/kategori/tambah', [KategoriController::class,'tambah']);
Route::post('/kategori/tampil', [KategoriController::class,'tampil']);
Route::get('/kategori/hapus/{id}', [KategoriController::class,'hapus']);
Route::get('/kategori/edit/{id}', [KategoriController::class,'edit']);
Route::post('/kategori/edit/{id}', [KategoriController::class,'update']);


//komentar
Route::get('/index',[KomenController::class,'index']);
Route::get('/komentar', [KomenController::class,'tambah']);
Route::post('/komentar/tampil', [KomenController::class,'tampil']);
Route::get('/artikel',[komenController::class,'artikel']);
	
Route::get('/komen',[komenController::class,'tampilan']);
Route::get('/komen/tambah', [komenController::class,'form']);
Route::post('/komen/tampil', [komenController::class,'post']);
Route::get('/komen/hapus/{id}', [komenController::class,'hapus']);
Route::get('/komen/edit/{id}', [komenController::class,'edit']);
Route::post('/komen/edit/{id}', [komenController::class,'update']);


//login
Route::get('/login',[LoginController::class,'index']);
Route::post('/login', [LoginController::class,'tambah']);


//register
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'tambah']);
