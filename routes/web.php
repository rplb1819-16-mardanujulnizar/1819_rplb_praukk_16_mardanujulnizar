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

// Route::get('/', function () {
//     return view('login');
// });


Route::get('/homepage_admin', function () {
    return view('index');
});

// CRUD Outlet 
Route::get('/dashboard/outlet', 'OutletController@index')->name('outlet.index');
Route::get('/dashboard/outlet/create', 'OutletController@create')->name('outlet.create');
Route::get('/dashboard/outlet/{outlet}', 'OutletController@show')->name('outlet.show');
Route::post('/dashboard/outlet', 'OutletController@store')->name('outlet.store');
Route::delete('/dashboard/outlet/{outlet}', 'OutletController@destroy')->name('outlet.destroy');
Route::get('/dashboard/outlet/{outlet}/edit', 'OutletController@edit')->name('outlet.edit');
Route::patch('/dashboard/outlet/{outlet}', 'OutletController@update')->name('outlet.update');

// Route::get('/kelola_paket_laundry', function () {
//     return view('kelola_paket_laundry');
// });

// Route::get('/kelola_user', function () {
//     return view('kelola_user');
// });

// Route::get('/kelola_user', function () {
//     return view('kelola_user');
// });

// Route::get('/kelola_pelanggan', function () {
//     return view('kelola_pelanggan');
// });

// Route::get('/kelola_transaksi', function () {
//     return view('kelola_transaksi_pembayaran');
// });

// Route::get('/laporan_transaksi', function () {
//     return view('laporan_transaksi');
// });

// // CRUD Paket Laundry
// Route::get('/tambah_paket_laundry', function () {
//     return view('tambah_paket_laundry');
// });

// Route::get('/edit_paket_laundry', function () {
//     return view('edit_paket_laundry');
// });

// Route::get('/detail_paket_laundry', function () {
//     return view('detail_paket_laundry');
// });


// // CRUD User Laundry
// Route::get('/tambah_user', function () {
//     return view('tambah_user');
// });

// Route::get('/edit_user', function () {
//     return view('edit_user');
// });

// Route::get('/detail_user', function () {
//     return view('detail_user');
// });

// // CRUD Pelanggan 
// Route::get('/tambah_pelanggan', function () {
//     return view('tambah_pelanggan');
// });

// Route::get('/edit_pelanggan', function () {
//     return view('edit_pelanggan');
// });

// Route::get('/detail_pelanggan', function () {
//     return view('detail_pelanggan');
// });

// // CRUD Transaksi 
// Route::get('/tambah_transaksi', function () {
//     return view('tambah_transaksi');
// });

// Route::get('/edit_transaksi', function () {
//     return view('edit_transaksi');
// });

// Route::get('/detail_transaksi', function () {
//     return view('detail_transaksi');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
