<?php

use Illuminate\Support\Facades\Route;
//import java.io.* ;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaidbController;
use App\Http\Controllers\KaryawanController;

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
Route::get('/', function () {
    return view('welcome');
}); // hanya cocok untuk simple redirect

//Route.get("Saya",Link);

Route::get('halo', function () {
	return "<marquee>Halo, Selamat datang di tutorial laravel www.malasngoding.com </marquee>";
});

Route::get('blog', function () {
	return view('blog');
});

// Route::get('dosen', 'DosenController@index');

// Route::get('/pegawai/{nama}', 'PegawaiController@index');

// Route::get('/formulir', 'PegawaiController@formulir');

// Route::post('/formulir/proses', 'PegawaiController@proses');


Route::controller(DosenController::class)->group(function () {
    Route::get('/dosen', 'index');
});

Route::controller(PegawaiController::class)->group(function () {
    Route::get('/pegawaicari/{nama}', 'index');
    Route::get('/formulir', 'formulir');
    Route::post('/formulir/proses', 'proses');
});

// // route blog
// Route::get('/blog', 'BlogController@home');
// Route::get('/blog/tentang', 'BlogController@tentang');
// Route::get('/blog/kontak', 'BlogController@kontak');

Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'home');
    Route::get('/blog/tentang', 'tentang');
    Route::post('/blog/kontak', 'kontak');
});

Route::get('/pegawaidb','PegawaiController@index');

Route::controller(PegawaidbController::class)->group(function () {
    Route::get('/pegawai', 'index');
    Route::get('/pegawai/tambah', 'tambah');
    Route::post('/pegawai/store', 'store');
    Route::get('/pegawai/edit/{id}', 'edit');
    Route::post('/pegawai/update', 'update');
    Route::get('/pegawai/hapus/{id}', 'hapus');
    Route::get('/pegawai/cari','cari'); //bisa post bisa get
    Route::get('/pegawai/view/{id}', 'view');
});


Route::controller(KaryawanController::class)->group(function () {
    Route::get('/karyawan', 'index');
    Route::get('/karyawan/tambah', 'tambah');
    Route::post('/karyawan/store', 'store');
    Route::get('/karyawan/hapus/{id}', 'hapus');
});
