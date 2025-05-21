<?php

use Illuminate\Support\Facades\Route;

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
	return view('index');
});
