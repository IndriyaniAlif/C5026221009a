<?php

use Illuminate\Support\Facades\Route;

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


Route::get('halo', function () {
    //bisa diisi program apa saja
    return "Halo Apa kabar" ;
});

Route::get('halo2', function () {
    return "<h1>Halo Apa kabar</h1>" ;
});

Route::get('blog', function () {
    return view('blog') ;
});

Route::get('hello', function () {
    return view('hello');
});

Route::get('linktree2', function () {
    return view('linktree2');
});

Route::get('bs4colors', function () {
    return view('bs4colors');
});


Route::get('js2', function () {
    return view('js2');
});

Route::get('weblayout', function () {
    return view('weblayout');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('style', function () {
    return view('style');
});

Route::get('responsive1', function () {
    return view('responsive1');
});

Route::get('responsive2', function () {
    return view('responsive2');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('/blog', function () {
    return view('home') ;
});

Route::get('/blog/tentang', function () {
    return view('tentang') ;
});

Route::get('/blog/kontak', function () {
    return view('kontak') ;
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
