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