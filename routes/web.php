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


route::get('/pengguna', 'App\Http\Controllers\PenggunaController@index')->name('pengguna');
route::get('/pengguna/create', 'App\Http\Controllers\PenggunaController@create');
route::post('/pengguna/store', 'App\Http\Controllers\PenggunaController@store');
route::get('/pengguna/edit/{id_user}', 'App\Http\Controllers\PenggunaController@edit');
route::post('/pengguna/update/{id_user}', 'App\Http\Controllers\PenggunaController@update');
route::get('/pengguna/destroy/{id_user}', 'App\Http\Controllers\PenggunaController@destroy');
//
route::get('/jenis', 'App\Http\Controllers\JenisController@index')->name('jenis');
route::get('/jenis/create', 'App\Http\Controllers\JenisController@create');
route::post('/jenis/store', 'App\Http\Controllers\JenisController@store');
route::get('/jenis/edit/{id_jenis}', 'App\Http\Controllers\JenisController@edit');
route::post('/jenis/update/{id_jenis}', 'App\Http\Controllers\JenisController@update');
route::get('jenis/destroy/{id_jenis}', 'App\Http\Controllers\JenisController@destroy');

//
route::get('/pembeli', 'App\Http\Controllers\PembeliController@index')->name('pembeli');
route::get('/pembeli/create', 'App\Http\Controllers\PembeliController@create');
route::post('/pembeli/store', 'App\Http\Controllers\PembeliController@store');
route::get('/pembeli/edit/{id_pembeli}', 'App\Http\Controllers\PembeliController@edit');
route::post('/pembeli/update/{id_pembeli}', 'App\Http\Controllers\PembeliController@update');
route::get('pembeli/destroy/{id_pembeli}', 'App\Http\Controllers\PembeliController@destroy');

//
route::get('/barang', 'App\Http\Controllers\BarangController@index')->name('barang');
route::get('/barang/create', 'App\Http\Controllers\BarangController@create');
route::post('/barang/store', 'App\Http\Controllers\BarangController@store');
route::get('/barang/edit/{id_barang}', 'App\Http\Controllers\BarangController@edit');
route::post('/barang/update/{id_barang}', 'App\Http\Controllers\BarangController@update');
route::get('barang/destroy/{id_barang}', 'App\Http\Controllers\BarangController@destroy');
//
route::get('/penjualan', 'App\Http\Controllers\PenjualanController@index')->name('penjualan');
route::get('/penjualan/create', 'App\Http\Controllers\PenjualanController@create');
route::get('/cari/pembeli', 'App\Http\Controllers\PenjualanController@cari')->name('pembeli/cari');
route::get('/golek/barang', 'App\Http\Controllers\PenjualanController@golek')->name('barang/golek');
route::post('/simpan_transaksi', 'App\Http\Controllers\PenjualanController@simpan_transaksi')->name('simpan_transaksi');
route::get('/penjualan/show/{id_penjualan}', 'App\Http\Controllers\PenjualanController@show');
//laporan
route::get('/laporan', 'App\Http\Controllers\LaporanController@index');
route::get('/laporan/cetak', 'App\Http\Controllers\laporanController@cetak');
