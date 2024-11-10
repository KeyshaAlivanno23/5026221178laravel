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

Route::get('/178_Keysha', function () {
    return view('178_Keysha');
});

Route::get('/5026221178', function () {
    return view('5026221178');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/ETS 3', function () {
    return view('ETS 3');
});

Route::get('ETS 4', function () {
    return view('ETS 4');
});

Route::get('/ETS 5', function () {
    return view('ETS 5');
});

Route::get('/ETS2', function () {
    return view('ETS2');
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

Route::get('dosen', 'App\http\Controllers\DosenController@index');

