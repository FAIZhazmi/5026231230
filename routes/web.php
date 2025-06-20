<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PensilController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\CounterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('dosen', [DosenController::class,'index']);
//Route::get('welcome', [DosenController::class,'welcome']);
//Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);
//Route::get('/formulir', [PegawaiController::class,'formulir']);
//Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
//Route::get('/blog', [BlogController::class,'home']);
//Route::get('/blog/tentang', [BlogController::class,'tentang']);
//Route::get('/blog/kontak', [BlogController::class,'kontak']);

Route::get('/frontend', function () {
    return view('frontend');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('satu', function () {
	return view('pertama');
});

Route::get('bs1', function () {
	return view('bootstrap1');
});

Route::get('coba', function () {
	return view('cobain');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('latihan js', function () {
	return view('Latihan Java script');
});

Route::get('p4pr', function () {
	return view('Pertemuan 4 pr');
});

Route::get('p4', function () {
	return view('Pertemuan 4');
});

Route::get('template', function () {
	return view('template b4');
});

Route::get('tugasLK', function () {
	return view('Tugas_Linktree');
});

Route::get('validasi', function () {
	return view('validasi1');
});

Route::get('ETS', function () {
	return view('indexf');
});

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

// CRUD Pensil
Route::get('/pensil', [PensilController::class, 'index']);
Route::get('/pensil/tambah', [PensilController::class, 'tambah']);
Route::get('/pensil/edit/{id}', [PensilController::class, 'edit']);
Route::post('/pensil/store', [PensilController::class, 'store']);
Route::post('/pensil/update', [PensilController::class, 'update']);
Route::get('/pensil/hapus/{id}', [PensilController::class, 'hapus']);
Route::get('/pensil/cari', [PensilController::class, 'cari']);

// CRUD Karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);

Route::get('/pagecounter', [CounterController::class, 'index']);

use App\Http\Controllers\KeranjangController;

Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
Route::get('/keranjang/create', [KeranjangController::class, 'create'])->name('keranjang.create');
Route::post('/keranjang', [KeranjangController::class, 'store'])->name('keranjang.store');
Route::delete('/keranjang/{id}', [KeranjangController::class, 'destroy'])->name('keranjang.destroy');
Route::get('/keranjang/cari', [KeranjangController::class, 'cari'])->name('keranjang.cari');

use App\Http\Controllers\NewKaryawanController;

Route::get('/eas', [NewKaryawanController::class, 'index']);
Route::get('/eas/tambah', [NewKaryawanController::class, 'tambah']);
Route::post('/eas/store', [NewKaryawanController::class, 'store']);
Route::get('/eas/hapus/{id}', [NewKaryawanController::class, 'hapus']);
