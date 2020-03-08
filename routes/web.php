<?php

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

Route::get('/dashboard', function () {
    return view('back.index');
});

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login_post', 'LoginController@login_post')->name('login_post');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/tab_masyarakat', 'MasyarakatController@index');

Route::get('/tab_petugas', 'PetugasController@index');
Route::get('/tab_petugas/add','PetugasController@add');
Route::post('/tab_petugas/store','PetugasController@store');

Route::get('/tab_barang', 'BarangController@index');
Route::get('/tab_barang/add','BarangController@add');
Route::post('/tab_barang/store','BarangController@store');
Route::get('/tab_barang/edit/{id}','BarangController@edit');
Route::post('/tab_barang/update/{id}','BarangController@update');
Route::get('/tab_barang/delete/{id}','BarangController@delete');

Route::get('/tab_lelang', 'LelangController@index');
Route::get('/tab_lelang/add','LelangController@add');
Route::post('/tab_lelang/store','LelangController@store');
Route::get('/tab_lelang/edit/{id}','LelangController@edit');
Route::post('/tab_lelang/update/{id}','LelangController@update');
Route::get('/tab_lelang/delete/{id}','LelangController@delete');
Route::get('autocomplete', 'LelangController@autocomplete')->name('autocomplete');