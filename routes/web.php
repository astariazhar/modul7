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
    return view('index');
});

//Route untuk home
Route::get('/home', function(){return view('view_home');});

//Route untuk list
Route::get('/list', function(){return view('view_list');});

//Route untuk Data barang
Route::get('/barang', 'barangController@barangtampil');
Route::post('/barang/input', 'barangController@baranginput');
Route::get('/barang/hapus/{id_barang}', 'barangController@baranghapus');
Route::put('/barang/edit/{id_barang}', 'barangController@barangedit');


