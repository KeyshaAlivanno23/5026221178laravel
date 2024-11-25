<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\DosenController;

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
});

Route::get('/Linktree', function () {
    return view('Linktree');
});

Route::get('/Testimony', function () {
    return view('Testimony');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/Helmet', function () {
    return view('Helmet');
});

Route::get('/Support', function () {
    return view('Support');
});

Route::get('/World link', function () {
    return view('World link');
});

Route::get('/Form', function () {
    return view('Form');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/responsive1', function () {
    return view('responsive1');
});

Route::get('/Style', function () {
    return view('Style');
});

Route::get('/Style2', function () {
    return view('Style2');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/error', function () {
    return "<h1>Server Error: Ada kesalahan di Server</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('/pegawai','App\Http\Controllers\PegawaiControllerDB@index');

Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiControllerDB@tambah');

Route::post('/pegawai/store','App\Http\Controllers\PegawaiControllerDB@store');

Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiControllerDB@edit');

Route::post('/pegawai/update','App\Http\Controllers\PegawaiControllerDB@update');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiControllerDB@cari');

Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiControllerDB@hapus');
