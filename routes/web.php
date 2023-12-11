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

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index2');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus2');
Route::post('/keranjangbelanja/store2','App\Http\Controllers\KeranjangController@store2');
Route::get('/keranjangbelanja/tambah2','App\Http\Controllers\KeranjangController@tambah2');

//route CRUD nilaikuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambahData','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');

//route CRUD sepeda
Route::get('/sepeda','App\Http\Controllers\SepedaController@indexsepeda');
Route::get('/sepeda/tambahsepeda','App\Http\Controllers\SepedaController@tambahsepeda');
Route::post('/sepeda/storesepeda','App\Http\Controllers\SepedaController@storesepeda');
Route::get('/sepeda/hapussepeda/{id}','App\Http\Controllers\SepedaController@hapussepeda');
Route::get('/sepeda/viewsepeda/{id}','App\Http\Controllers\SepedaController@viewsepeda');
Route::get('/sepeda/editsepeda/{id}','App\Http\Controllers\SepedaController@editsepeda');
Route::post('/sepeda/update','App\Http\Controllers\SepedaController@update');
Route::get('/sepeda/cari','App\Http\Controllers\SepedaController@cari');

Route::get('/shoppingchart','App\Http\Controllers\ShoppingController@indexshopping');
Route::get('/shoppingchart/tambahshopping','App\Http\Controllers\ShoppingController@tambahshopping');
Route::post('/shoppingchart/storeshopping','App\Http\Controllers\ShoppingController@storeshopping');
Route::get('/shoppingchart/hapusshopping/{id}','App\Http\Controllers\ShoppingController@hapusshopping');

//CRUD Karyawan (latihan)
Route::get('/latihan','App\Http\Controllers\LatihanController@indexlatihan');
Route::get('/latihan/tambahlatihan','App\Http\Controllers\LatihanController@tambahlatihan');
Route::post('/latihan/storelatihan','App\Http\Controllers\LatihanController@storelatihan');
Route::get('/latihan/editlatihan/{id}','App\Http\Controllers\LatihanController@editlatihan');
Route::post('/latihan/updatelatihan','App\Http\Controllers\LatihanController@updatelatihan');
Route::get('/latihan/viewlatihan/{id}','App\Http\Controllers\LatihanController@viewlatihan');
Route::get('/latihan/cari','App\Http\Controllers\LatihanController@cari');

//CRUD Nilai (latihanlagi)
Route::get('/latihanlagi','App\Http\Controllers\LatihanlagiController@indexlatihanlagi');
Route::get('/latihanlagi/tambahlatihanlagi','App\Http\Controllers\LatihanlagiController@tambahlatihanlagi');
Route::post('/latihanlagi/storelatihanlagi','App\Http\Controllers\LatihanlagiController@storelatihanlagi');
Route::get('/latihanlagi/cari','App\Http\Controllers\LatihanlagiController@cari');

Route::get('/chat','App\Http\Controllers\ChatController@index');
Route::get('/chat', 'ChatController@index');

Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view','App\Http\Controllers\PegawaiController@view');

Route::get('/conter','App\Http\Controllers\ConterController@indexconter');

Route::get('/chat', 'App\Http\Controllers\ChatController@index');
Route::get('/chat/view', 'App\Http\Controllers\ChatController@view');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
