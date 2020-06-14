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

Route::get('/rumah', function () {
    return view('Home');
});

Route::get('/rumah/controller', 'HomeController@index');

Route::post('/Toko/Buat', 'TokoController@BuatToko')
    ->name('buat.toko');

Route::get('/Toko/Form/Buat', 'TokoController@FormBuatToko');

Route::get('/Toko/Banyak/Toko', 'TokoController@TampilToko')
    ->name('tampil.toko');

Route::get('/Toko/Banyak/Toko/hapus/{id}', 'TokoController@hapus');

Route::get('/Toko/edit/{id}', 'TokoController@edit')
    ->name('edit.toko');

Route::post('/Toko/Update', 'TokoController@update');

Route::post('/Barang/Isi', 'BarangController@BarangToko')
    ->name('barang.toko');

Route::get('/Barang/Form/isi', 'BarangController@FormBarangToko');

Route::get('/Barang/Banyak/Barang', 'BarangController@TampilBarang')
    ->name('tampil.barang');

Route::get('/Barang/edit/{id}', 'BarangController@edit')
    ->name('edit.barang');

Route::post('/Barang/Update', 'BarangController@update');

Route::get('/Barang/Banyak/Barang/hapus/{id}', 'BarangController@hapus');

Route::get('/Toko/Tambah/{id}', 'TokoController@tambah')
    ->name('show.tambah.barang');

Route::post('/Barang/tambah', 'BarangController@tambah')
    ->name('tambah.barang');

Route::get('/Barang/baru/{id}', 'BarangController@BarBaru')
    ->name('barang.baru');

Route::get('/Toko/BarangBaru/hapus/{id}', 'BarangController@barhapus');